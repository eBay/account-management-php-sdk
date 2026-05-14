<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

readonly class UserCustomListsSuccess extends UserCustomListsOutput
{
    /**
     * @param UserCustomList[] $customLists
     */
    public function __construct(
        public array $customLists = [],
        public ?int $totalCount = null,
    ) {}

    public function getTypename(): string
    {
        return 'UserCustomListsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            customLists: array_map(
                static fn(array $l): UserCustomList => UserCustomList::fromArray($l),
                $data['customLists'] ?? [],
            ),
            totalCount: isset($data['totalCount']) ? (int)$data['totalCount'] : null,
        );
    }
}
