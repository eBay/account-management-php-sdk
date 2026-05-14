<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Input;

readonly class AddToWatchListInput
{
    /**
     * @param WatchListEntryToAdd[] $itemsToAdd
     */
    public function __construct(
        public array $itemsToAdd,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemsToAdd: array_map(
                static fn(array $e): WatchListEntryToAdd => WatchListEntryToAdd::fromArray($e),
                $data['itemsToAdd'] ?? [],
            ),
        );
    }

    public function toArray(): array
    {
        return [
            'itemsToAdd' => array_map(fn($e) => $e->toArray(), $this->itemsToAdd),
        ];
    }
}
