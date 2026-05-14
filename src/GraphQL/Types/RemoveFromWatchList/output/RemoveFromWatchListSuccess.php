<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output;

readonly class RemoveFromWatchListSuccess extends RemoveFromWatchListOutput
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
