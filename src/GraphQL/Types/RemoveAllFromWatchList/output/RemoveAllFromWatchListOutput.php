<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\RemoveAllFromWatchList\Output;

abstract readonly class RemoveAllFromWatchListOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'RemoveAllFromWatchListSuccess' => RemoveAllFromWatchListSuccess::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
