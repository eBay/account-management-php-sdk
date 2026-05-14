<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserWatchList\Output;

readonly class WatchedItem
{
    public function __construct(
        public ?WatchedItemEntry $item = null,
        public ?string $startedWatchingAt = null,
        public ?StartedWatchingPrice $startedWatchingPrice = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            item:                 isset($data['item']) ? WatchedItemEntry::fromArray($data['item']) : null,
            startedWatchingAt:    $data['startedWatchingAt'] ?? null,
            startedWatchingPrice: isset($data['startedWatchingPrice'])
                ? StartedWatchingPrice::fromArray($data['startedWatchingPrice'])
                : null,
        );
    }
}
