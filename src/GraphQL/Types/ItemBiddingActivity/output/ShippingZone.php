<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class ShippingZone
{
    public function __construct(
        public ?string $countryCode = null,
        public ?string $postalCode = null,
        public ?string $stateOrProvince = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            countryCode:     $data['countryCode'] ?? null,
            postalCode:      $data['postalCode'] ?? null,
            stateOrProvince: $data['stateOrProvince'] ?? null,
        );
    }
}
