<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class ConvertedAmountResult
{
    public function __construct(
        public ?AmountResult $original = null,
        public ?AmountResult $converted = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            original:  isset($data['original']) ? AmountResult::fromArray($data['original']) : null,
            converted: isset($data['converted']) ? AmountResult::fromArray($data['converted']) : null,
        );
    }
}
