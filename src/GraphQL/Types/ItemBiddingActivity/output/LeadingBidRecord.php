<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class LeadingBidRecord
{
    public function __construct(
        public ?BuyerBiddingSummary $buyerBiddingSummary = null,
        public ?LeadingBidder $bidder = null,
        public ?BidAmount $bidAmount = null,
        public ?BidMetadata $bidMetadata = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            buyerBiddingSummary: isset($data['buyerBiddingSummary'])
                ? BuyerBiddingSummary::fromArray($data['buyerBiddingSummary'])
                : null,
            bidder:    isset($data['bidder']) ? LeadingBidder::fromArray($data['bidder']) : null,
            bidAmount: isset($data['bidAmount']) ? BidAmount::fromArray($data['bidAmount']) : null,
            bidMetadata: isset($data['bidMetadata']) ? BidMetadata::fromArray($data['bidMetadata']) : null,
        );
    }
}
