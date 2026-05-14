<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output;

readonly class RemoveFromWatchListPartialFailure extends RemoveFromWatchListOutput
{
    /**
     * @param WatchListRemoveFailure[] $failedItems
     * @param Item[] $removedItems
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $failedItems = [],
        public ?int $numberOfItemsUnwatched = null,
        public array $removedItems = [],
        public ?int $watchListCount = null,
        public ?int $watchListMaximum = null,
    ) {}

    public function getTypename(): string
    {
        return 'RemoveFromWatchListPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            failedItems:  array_map(
                static fn(array $f): WatchListRemoveFailure => WatchListRemoveFailure::fromArray($f),
                $data['failedItems'] ?? [],
            ),
            numberOfItemsUnwatched: isset($data['numberOfItemsUnwatched']) ? (int)$data['numberOfItemsUnwatched'] : null,
            removedItems: array_map(
                static fn(array $i): Item => Item::fromArray($i),
                $data['removedItems'] ?? [],
            ),
            watchListCount:  isset($data['watchListCount']) ? (int)$data['watchListCount'] : null,
            watchListMaximum: isset($data['watchListMaximum']) ? (int)$data['watchListMaximum'] : null,
        );
    }
}
