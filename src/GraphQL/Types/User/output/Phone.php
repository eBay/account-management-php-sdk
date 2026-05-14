<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\User\Output;

readonly class Phone
{
    public function __construct(
        public ?string $dialCode = null,
        public ?string $countryCode = null,
        public ?string $phoneNumber = null,
        public ?string $phoneNumberType = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            dialCode:        $data['dialCode'] ?? null,
            countryCode:     $data['countryCode'] ?? null,
            phoneNumber:     $data['phoneNumber'] ?? null,
            phoneNumberType: $data['phoneNumberType'] ?? null,
        );
    }
}
