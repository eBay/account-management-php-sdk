<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output;

readonly class AuctionDataSummary
{
    public function __construct(
        public ?BidStatistics $bidStatistics = null,
        public ?LeadingBid $leadingBid = null,
        public ?string $itemId = null,
        public ?BidderAuctionDetails $bidderAuctionDetails = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            bidStatistics:       isset($data['bidStatistics']) ? BidStatistics::fromArray($data['bidStatistics']) : null,
            leadingBid:          isset($data['leadingBid']) ? LeadingBid::fromArray($data['leadingBid']) : null,
            itemId:              $data['itemId'] ?? null,
            bidderAuctionDetails: isset($data['bidderAuctionDetails'])
                ? BidderAuctionDetails::fromArray($data['bidderAuctionDetails'])
                : null,
        );
    }
}
