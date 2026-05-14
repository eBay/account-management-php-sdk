<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class Bidder
{
    public function __construct(
        public ?string $userId = null,
        public ?string $username = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            userId:   $data['userId'] ?? null,
            username: $data['username'] ?? null,
        );
    }
}
