<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Input;

readonly class UserCustomListFilter
{
    /**
     * @param string[] $customListIds
     */
    public function __construct(
        public array $customListIds,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            customListIds: $data['customListIds'] ?? [],
        );
    }

    public function toArray(): array
    {
        return ['customListIds' => $this->customListIds];
    }
}
