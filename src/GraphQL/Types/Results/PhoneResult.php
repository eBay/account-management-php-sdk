<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class PhoneResult
{
    public function __construct(
        public ?string $phoneNumber = null,
        public ?string $phoneNumberType = null,
        public ?string $countryCode = null,
        public ?string $dialCode = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            phoneNumber:     $data['phoneNumber'] ?? null,
            phoneNumberType: $data['phoneNumberType'] ?? null,
            countryCode:     $data['countryCode'] ?? null,
            dialCode:        $data['dialCode'] ?? null,
        );
    }
}
