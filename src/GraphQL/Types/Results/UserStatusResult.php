<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class UserStatusResult
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
