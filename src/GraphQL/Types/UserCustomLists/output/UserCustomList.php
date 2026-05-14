<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

readonly class UserCustomList
{
    public function __construct(
        public ?string $customListId = null,
        public ?int $itemCount = null,
        public ?CustomListItems $items = null,
        public ?string $name = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            customListId: $data['customListId'] ?? null,
            itemCount:    isset($data['itemCount']) ? (int)$data['itemCount'] : null,
            items:        isset($data['items']) ? CustomListItems::fromArray($data['items']) : null,
            name:         $data['name'] ?? null,
        );
    }
}
