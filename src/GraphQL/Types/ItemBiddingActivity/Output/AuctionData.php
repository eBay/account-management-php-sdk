<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class AuctionData
{
    public function __construct(
        public ?BidHistoryRecordsPaginated $activeBidHistoryRecords = null,
        public ?BidHistoryRecordsPaginated $cancelledBidHistoryRecords = null,
        public ?BidHistoryRecordsPaginated $retractedBidHistoryRecords = null,
        public ?BidRecord $leadingBid = null,
        public ?bool $reservePriceMet = null,
        public ?BidStatistics $bidStatistics = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            activeBidHistoryRecords: isset($data['activeBidHistoryRecords']) ? BidHistoryRecordsPaginated::fromArray($data['activeBidHistoryRecords']) : null,
            cancelledBidHistoryRecords: isset($data['cancelledBidHistoryRecords']) ? BidHistoryRecordsPaginated::fromArray($data['cancelledBidHistoryRecords']) : null,
            retractedBidHistoryRecords: isset($data['retractedBidHistoryRecords']) ? BidHistoryRecordsPaginated::fromArray($data['retractedBidHistoryRecords']) : null,
            leadingBid: isset($data['leadingBid']) ? BidRecord::fromArray($data['leadingBid']) : null,
            reservePriceMet: $data['reservePriceMet'] ?? null,
            bidStatistics: isset($data['bidStatistics']) ? BidStatistics::fromArray($data['bidStatistics']) : null,
        );
    }
}
