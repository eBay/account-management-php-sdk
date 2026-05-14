<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class BidMetadata
{
    public function __construct(
        public ?string $placedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            placedAt: $data['placedAt'] ?? null,
        );
    }
}
