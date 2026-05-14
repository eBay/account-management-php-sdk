<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

readonly class CustomListItem
{
    public function __construct(
        public ?string $addedAt = null,
        public ?Item $item = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            addedAt: $data['addedAt'] ?? null,
            item:    isset($data['item']) ? Item::fromArray($data['item']) : null,
        );
    }
}
