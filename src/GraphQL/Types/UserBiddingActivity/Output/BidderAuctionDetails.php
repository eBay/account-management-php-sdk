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

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output;

readonly class BidderAuctionDetails
{
    public function __construct(
        public ?string $userBiddingStatus = null,
        public ?ConvertedAmount $maxBid = null,
        public ?ConvertedAmount $minimumQualifyingBidForMaxBid = null,
        /** @var ConvertedAmount[] */
        public array $userPowerBids = [],
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            userBiddingStatus: $data['userBiddingStatus'] ?? null,
            maxBid: isset($data['maxBid']) ? ConvertedAmount::fromArray($data['maxBid']) : null,
            minimumQualifyingBidForMaxBid: isset($data['minimumQualifyingBidForMaxBid']) ? ConvertedAmount::fromArray($data['minimumQualifyingBidForMaxBid']) : null,
            userPowerBids: array_map(fn($item) => ConvertedAmount::fromArray($item), $data['userPowerBids'] ?? []),
        );
    }
}
