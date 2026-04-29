<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AuctionDataSummaryResult
{
    public function __construct(
        public BidStatisticsResult $bidStatistics,
        public BidderAuctionDetailsResult $bidderAuctionDetails,
        public string $itemId,
        public ?bool $reservePriceMet = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            bidStatistics:        BidStatisticsResult::fromArray($data['bidStatistics'] ?? []),
            bidderAuctionDetails: BidderAuctionDetailsResult::fromArray($data['bidderAuctionDetails'] ?? []),
            itemId:               $data['itemId'] ?? '',
            reservePriceMet:      $data['reservePriceMet'] ?? null,
        );
    }
}
