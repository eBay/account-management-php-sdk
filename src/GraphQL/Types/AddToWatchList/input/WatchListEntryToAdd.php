<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Input;

readonly class WatchListEntryToAdd
{
    public function __construct(
        public string $itemId,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemId: $data['itemId'],
        );
    }

    public function toArray(): array
    {
        return ['itemId' => $this->itemId];
    }
}
