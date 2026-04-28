<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class MoneyResult
{
    public function __construct(
        public ?string $value = null,
        public ?string $currency = null,
        public ?string $convertedFromValue = null,
        public ?string $convertedFromCurrency = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            value:                $data['value'] ?? null,
            currency:             $data['currency'] ?? null,
            convertedFromValue:   $data['convertedFromValue'] ?? null,
            convertedFromCurrency: $data['convertedFromCurrency'] ?? null,
        );
    }
}
