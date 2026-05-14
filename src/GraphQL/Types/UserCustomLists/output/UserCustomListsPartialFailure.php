<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

readonly class UserCustomListsPartialFailure extends UserCustomListsOutput
{
    /**
     * @param UserCustomList[] $customLists
     * @param CustomListFailure[] $failedCustomLists
     */
    public function __construct(
        public array $customLists = [],
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $failedCustomLists = [],
        public ?int $totalCount = null,
    ) {}

    public function getTypename(): string
    {
        return 'UserCustomListsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            customLists: array_map(
                static fn(array $l): UserCustomList => UserCustomList::fromArray($l),
                $data['customLists'] ?? [],
            ),
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            failedCustomLists: array_map(
                static fn(array $f): CustomListFailure => CustomListFailure::fromArray($f),
                $data['failedCustomLists'] ?? [],
            ),
            totalCount: isset($data['totalCount']) ? (int)$data['totalCount'] : null,
        );
    }
}
