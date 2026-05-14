<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class LeadingBidder
{
    public function __construct(
        public ?string $username = null,
        public ?string $userId = null,
        public ?ShippingZone $shippingZone = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            username:     $data['username'] ?? null,
            userId:       $data['userId'] ?? null,
            shippingZone: isset($data['shippingZone']) ? ShippingZone::fromArray($data['shippingZone']) : null,
        );
    }
}
