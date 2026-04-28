<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class PhoneResult
{
    public function __construct(
        public ?string $phoneNumber = null,
        public ?string $phoneType = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            phoneNumber: $data['phoneNumber'] ?? null,
            phoneType:   $data['phoneType'] ?? null,
        );
    }
}
