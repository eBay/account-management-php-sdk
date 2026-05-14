<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\User\Output;

readonly class UserStatus
{
    public function __construct(
        public ?string $displayName = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            displayName: $data['displayName'] ?? null,
        );
    }
}
