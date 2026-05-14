<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Input;

readonly class RemoveFromWatchListInput
{
    /**
     * @param WatchListEntryToRemove[] $itemsToRemove
     */
    public function __construct(
        public array $itemsToRemove,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemsToRemove: array_map(
                static fn(array $e): WatchListEntryToRemove => WatchListEntryToRemove::fromArray($e),
                $data['itemsToRemove'] ?? [],
            ),
        );
    }

    public function toArray(): array
    {
        return [
            'itemsToRemove' => array_map(fn($e) => $e->toArray(), $this->itemsToRemove),
        ];
    }
}
