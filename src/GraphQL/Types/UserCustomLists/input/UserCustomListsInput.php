<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Input;

readonly class UserCustomListsInput
{
    public function __construct(
        public ?UserCustomListFilter $filter = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            filter: isset($data['filter']) ? UserCustomListFilter::fromArray($data['filter']) : null,
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->filter !== null) {
            $data['filter'] = (object)$this->filter->toArray();
        }
        return $data;
    }
}
