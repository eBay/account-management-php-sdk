<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

abstract readonly class UserCustomListsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'UserCustomListsFailure'        => UserCustomListsFailure::fromArray($data),
            'UserCustomListsPartialFailure' => UserCustomListsPartialFailure::fromArray($data),
            'UserCustomListsSuccess'        => UserCustomListsSuccess::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
