<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\User\Output;

readonly class ProfileAddress
{
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $countryCode = null,
        public ?string $postalCode = null,
        public ?string $stateOrProvince = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            addressLine1:   $data['addressLine1'] ?? null,
            addressLine2:   $data['addressLine2'] ?? null,
            city:           $data['city'] ?? null,
            countryCode:    $data['countryCode'] ?? null,
            postalCode:     $data['postalCode'] ?? null,
            stateOrProvince: $data['stateOrProvince'] ?? null,
        );
    }
}
