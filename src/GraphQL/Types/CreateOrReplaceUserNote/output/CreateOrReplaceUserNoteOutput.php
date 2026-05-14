<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Output;

abstract readonly class CreateOrReplaceUserNoteOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'CreateOrReplaceUserNoteSuccess' => CreateOrReplaceUserNoteSuccess::fromArray($data),
            'ReferenceArgumentsNotFound'     => ReferenceArgumentsNotFound::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
