<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output;

readonly class Item
{
    public function __construct(
        public ?string $itemId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemId: $data['itemId'] ?? null,
        );
    }
}
