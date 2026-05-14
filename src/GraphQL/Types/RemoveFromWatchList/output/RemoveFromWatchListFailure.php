<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output;

readonly class RemoveFromWatchListFailure extends RemoveFromWatchListOutput
{
    /**
     * @param WatchListRemoveFailure[] $failedItems
     */
    public function __construct(
        public ?string $errorCode = null,
        public array $failedItems = [],
        public ?string $errorMessage = null,
        public ?int $watchListCount = null,
        public ?int $watchListMaximum = null,
    ) {}

    public function getTypename(): string
    {
        return 'RemoveFromWatchListFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            failedItems:  array_map(
                static fn(array $f): WatchListRemoveFailure => WatchListRemoveFailure::fromArray($f),
                $data['failedItems'] ?? [],
            ),
            errorMessage:    $data['errorMessage'] ?? null,
            watchListCount:  isset($data['watchListCount']) ? (int)$data['watchListCount'] : null,
            watchListMaximum: isset($data['watchListMaximum']) ? (int)$data['watchListMaximum'] : null,
        );
    }
}
