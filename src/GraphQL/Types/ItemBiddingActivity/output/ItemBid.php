<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class ItemBid
{
    public function __construct(
        public ?int $bidCount = null,
        public ?string $mostRecentBidAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            bidCount:        isset($data['bidCount']) ? (int)$data['bidCount'] : null,
            mostRecentBidAt: $data['mostRecentBidAt'] ?? null,
        );
    }
}
