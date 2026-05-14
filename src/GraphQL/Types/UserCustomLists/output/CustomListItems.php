<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

readonly class CustomListItems
{
    /**
     * @param CustomListItem[] $results
     */
    public function __construct(
        public ?Pagination $pagination = null,
        public array $results = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            pagination: isset($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
            results:    array_map(
                static fn(array $r): CustomListItem => CustomListItem::fromArray($r),
                $data['results'] ?? [],
            ),
        );
    }
}
