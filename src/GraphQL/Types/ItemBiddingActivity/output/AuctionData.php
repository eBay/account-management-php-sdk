<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class AuctionData
{
    public function __construct(
        public ?BidHistoryRecordsPaginated $activeBidHistoryRecords = null,
        public ?BidHistoryRecordsPaginated $cancelledBidHistoryRecords = null,
        public ?BidHistoryRecordsPaginated $retractedBidHistoryRecords = null,
        public ?LeadingBidRecord $leadingBid = null,
        public ?bool $reservePriceMet = null,
        public ?BidStatistics $bidStatistics = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            activeBidHistoryRecords:    isset($data['activeBidHistoryRecords'])
                ? BidHistoryRecordsPaginated::fromArray($data['activeBidHistoryRecords'])
                : null,
            cancelledBidHistoryRecords: isset($data['cancelledBidHistoryRecords'])
                ? BidHistoryRecordsPaginated::fromArray($data['cancelledBidHistoryRecords'])
                : null,
            retractedBidHistoryRecords: isset($data['retractedBidHistoryRecords'])
                ? BidHistoryRecordsPaginated::fromArray($data['retractedBidHistoryRecords'])
                : null,
            leadingBid:       isset($data['leadingBid']) ? LeadingBidRecord::fromArray($data['leadingBid']) : null,
            reservePriceMet:  isset($data['reservePriceMet']) ? (bool)$data['reservePriceMet'] : null,
            bidStatistics:    isset($data['bidStatistics']) ? BidStatistics::fromArray($data['bidStatistics']) : null,
        );
    }
}
