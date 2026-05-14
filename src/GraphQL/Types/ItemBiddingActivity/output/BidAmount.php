<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class BidAmount
{
    public function __construct(
        public ?MoneyAmount $converted = null,
        public ?MoneyAmount $original = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            converted: isset($data['converted']) ? MoneyAmount::fromArray($data['converted']) : null,
            original:  isset($data['original']) ? MoneyAmount::fromArray($data['original']) : null,
        );
    }
}
