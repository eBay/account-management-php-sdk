<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserWatchList\Output;

readonly class MoneyAmount
{
    public function __construct(
        public ?string $currency = null,
        public ?string $value = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            currency: $data['currency'] ?? null,
            value:    $data['value'] ?? null,
        );
    }
}
