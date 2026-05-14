<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output;

readonly class WatchListAddFailure
{
    public function __construct(
        public ?Item $item = null,
        public ?string $reason = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            item:   isset($data['item']) ? Item::fromArray($data['item']) : null,
            reason: $data['reason'] ?? null,
        );
    }
}
