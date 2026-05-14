<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output;

abstract readonly class AddToWatchListOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'AddToWatchListFailure'        => AddToWatchListFailure::fromArray($data),
            'AddToWatchListPartialFailure' => AddToWatchListPartialFailure::fromArray($data),
            'AddToWatchListSuccess'        => AddToWatchListSuccess::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
