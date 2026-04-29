<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AmountResult
{
    public function __construct(
        public ?string $value = null,
        public ?string $currency = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            value:    $data['value'] ?? null,
            currency: $data['currency'] ?? null,
        );
    }
}
