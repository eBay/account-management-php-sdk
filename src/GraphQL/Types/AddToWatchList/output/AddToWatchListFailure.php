<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output;

readonly class AddToWatchListFailure extends AddToWatchListOutput
{
    /**
     * @param WatchListAddFailure[] $failedItems
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $failedItems = [],
        public ?int $watchListCount = null,
        public ?int $watchListMaximum = null,
    ) {}

    public function getTypename(): string
    {
        return 'AddToWatchListFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:      $data['errorCode'] ?? null,
            errorMessage:   $data['errorMessage'] ?? null,
            failedItems:    array_map(
                static fn(array $f): WatchListAddFailure => WatchListAddFailure::fromArray($f),
                $data['failedItems'] ?? [],
            ),
            watchListCount:   isset($data['watchListCount']) ? (int)$data['watchListCount'] : null,
            watchListMaximum: isset($data['watchListMaximum']) ? (int)$data['watchListMaximum'] : null,
        );
    }
}
