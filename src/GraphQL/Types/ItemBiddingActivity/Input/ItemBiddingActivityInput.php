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

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Input;

readonly class ItemBiddingActivityInput
{
    public function __construct(
        public string $itemId,
        public ?PageInfoInput $activeBidHistoryRecordsPaginationInput = null,
        public ?PageInfoInput $cancelledBidHistoryRecordsPaginationInput = null,
        public ?PageInfoInput $retractedBidHistoryRecordsPaginationInput = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            itemId: $data['itemId'],
            activeBidHistoryRecordsPaginationInput: isset($data['activeBidHistoryRecords_paginationInput']) ? PageInfoInput::fromArray($data['activeBidHistoryRecords_paginationInput']) : null,
            cancelledBidHistoryRecordsPaginationInput: isset($data['cancelledBidHistoryRecords_paginationInput']) ? PageInfoInput::fromArray($data['cancelledBidHistoryRecords_paginationInput']) : null,
            retractedBidHistoryRecordsPaginationInput: isset($data['retractedBidHistoryRecords_paginationInput']) ? PageInfoInput::fromArray($data['retractedBidHistoryRecords_paginationInput']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return [
                'itemId' => $this->itemId,
        ];
    }

    /** @return array<string, mixed> */
    public function toVariables(): array
    {
        return array_filter(
            [
                'input' => (object)$this->toArray(),
            'activeBidHistoryRecords_paginationInput' => $this->activeBidHistoryRecordsPaginationInput !== null ? (object)$this->activeBidHistoryRecordsPaginationInput->toArray() : null,
            'cancelledBidHistoryRecords_paginationInput' => $this->cancelledBidHistoryRecordsPaginationInput !== null ? (object)$this->cancelledBidHistoryRecordsPaginationInput->toArray() : null,
            'retractedBidHistoryRecords_paginationInput' => $this->retractedBidHistoryRecordsPaginationInput !== null ? (object)$this->retractedBidHistoryRecordsPaginationInput->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
