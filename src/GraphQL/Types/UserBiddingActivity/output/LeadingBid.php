<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output;

readonly class LeadingBid
{
    public function __construct(
        public ?BidAmount $bidAmount = null,
        public ?Bidder $bidder = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            bidAmount: isset($data['bidAmount']) ? BidAmount::fromArray($data['bidAmount']) : null,
            bidder:    isset($data['bidder']) ? Bidder::fromArray($data['bidder']) : null,
        );
    }
}
