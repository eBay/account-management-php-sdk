<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output;

readonly class BidderAuctionDetails
{
    /**
     * @var BidAmount[]
     */
    public function __construct(
        public ?string $userBiddingStatus = null,
        public ?MaxBid $maxBid = null,
        public ?MaxBid $minimumQualifyingBidForMaxBid = null,
        public array $userPowerBids = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            userBiddingStatus:               $data['userBiddingStatus'] ?? null,
            maxBid:                          isset($data['maxBid']) ? MaxBid::fromArray($data['maxBid']) : null,
            minimumQualifyingBidForMaxBid:   isset($data['minimumQualifyingBidForMaxBid'])
                ? MaxBid::fromArray($data['minimumQualifyingBidForMaxBid'])
                : null,
            userPowerBids: array_map(
                static fn(array $p): MaxBid => MaxBid::fromArray($p),
                $data['userPowerBids'] ?? [],
            ),
        );
    }
}
