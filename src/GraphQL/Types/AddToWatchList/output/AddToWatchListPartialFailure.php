<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output;

readonly class AddToWatchListPartialFailure extends AddToWatchListOutput
{
    /**
     * @param Item[] $addedItems
     * @param WatchListAddFailure[] $failedItems
     */
    public function __construct(
        public array $addedItems = [],
        public ?string $errorCode = null,
        public array $failedItems = [],
        public ?string $errorMessage = null,
        public ?int $watchListCount = null,
        public ?int $watchListMaximum = null,
    ) {}

    public function getTypename(): string
    {
        return 'AddToWatchListPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            addedItems:  array_map(
                static fn(array $i): Item => Item::fromArray($i),
                $data['addedItems'] ?? [],
            ),
            errorCode:    $data['errorCode'] ?? null,
            failedItems:  array_map(
                static fn(array $f): WatchListAddFailure => WatchListAddFailure::fromArray($f),
                $data['failedItems'] ?? [],
            ),
            errorMessage:    $data['errorMessage'] ?? null,
            watchListCount:  isset($data['watchListCount']) ? (int)$data['watchListCount'] : null,
            watchListMaximum: isset($data['watchListMaximum']) ? (int)$data['watchListMaximum'] : null,
        );
    }
}
