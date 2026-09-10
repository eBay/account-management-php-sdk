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

final readonly class RemoveFromWatchListSuccess extends RemoveFromWatchListOutput
{
    /**
     * @param Item[] $removedItems
     */
    public function __construct(
        public ?int $numberOfItemsUnwatched = null,
        public ?int $watchListCount = null,
        public array $removedItems = [],
        public ?int $watchListMaximum = null,
    ) {}

    public function getTypename(): string
    {
        return 'RemoveFromWatchListSuccess';
    }

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            numberOfItemsUnwatched: isset($data['numberOfItemsUnwatched']) ? (int)$data['numberOfItemsUnwatched'] : null,
            watchListCount:  isset($data['watchListCount']) ? (int)$data['watchListCount'] : null,
            removedItems: array_map(
                static fn(array $i): Item => Item::fromArray($i),
                $data['removedItems'] ?? [],
            ),
            watchListMaximum: isset($data['watchListMaximum']) ? (int)$data['watchListMaximum'] : null,
        );
    }
}
