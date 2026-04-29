<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class BidderAuctionDetailsResult
{
    /**
     * @param ConvertedAmountResult[] $userPowerBids
     */
    public function __construct(
        public ConvertedAmountResult $minimumQualifyingBidForMaxBid,
        public array $userPowerBids = [],
        public ?ConvertedAmountResult $maxBid = null,
        public ?string $userBiddingStatus = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            minimumQualifyingBidForMaxBid: ConvertedAmountResult::fromArray($data['minimumQualifyingBidForMaxBid'] ?? []),
            userPowerBids:                 array_map(
                static fn(array $item): ConvertedAmountResult => ConvertedAmountResult::fromArray($item),
                $data['userPowerBids'] ?? [],
            ),
            maxBid:                        isset($data['maxBid']) ? ConvertedAmountResult::fromArray($data['maxBid']) : null,
            userBiddingStatus:             $data['userBiddingStatus'] ?? null,
        );
    }
}
