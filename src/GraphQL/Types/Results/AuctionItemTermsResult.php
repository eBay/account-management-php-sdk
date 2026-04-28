<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AuctionItemTermsResult
{
    public function __construct(
        public ?MoneyResult $price = null,
        public ?int $quantityAvailable = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            price:             isset($data['price']) ? MoneyResult::fromArray($data['price']) : null,
            quantityAvailable: $data['quantityAvailable'] ?? null,
        );
    }
}
