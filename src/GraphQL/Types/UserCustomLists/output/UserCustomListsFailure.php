<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

readonly class UserCustomListsFailure extends UserCustomListsOutput
{
    /**
     * @param CustomListFailure[] $failedCustomLists
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $failedCustomLists = [],
    ) {}

    public function getTypename(): string
    {
        return 'UserCustomListsFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:        $data['errorCode'] ?? null,
            errorMessage:     $data['errorMessage'] ?? null,
            failedCustomLists: array_map(
                static fn(array $f): CustomListFailure => CustomListFailure::fromArray($f),
                $data['failedCustomLists'] ?? [],
            ),
        );
    }
}
