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

namespace EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output;

readonly class RemoveFromWatchListSuccess
{
    public function __construct(
        public ?int $numberOfItemsUnwatched = null,
        public ?int $watchListCount = null,
        /** @var Item[] */
        public array $removedItems = [],
        public ?int $watchListMaximum = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            numberOfItemsUnwatched: $data['numberOfItemsUnwatched'] ?? null,
            watchListCount: $data['watchListCount'] ?? null,
            removedItems: array_map(fn($item) => Item::fromArray($item), $data['removedItems'] ?? []),
            watchListMaximum: $data['watchListMaximum'] ?? null,
        );
    }
}
