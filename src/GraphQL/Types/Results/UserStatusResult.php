<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class UserStatusResult
{
    public function __construct(
        public ?string $displayString = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            displayString: $data['displayString'] ?? null,
        );
    }
}
