<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output;

abstract readonly class RemoveFromWatchListOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'RemoveFromWatchListFailure'        => RemoveFromWatchListFailure::fromArray($data),
            'RemoveFromWatchListPartialFailure' => RemoveFromWatchListPartialFailure::fromArray($data),
            'RemoveFromWatchListSuccess'        => RemoveFromWatchListSuccess::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
