<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output;

readonly class Auction
{
    public function __construct(
        public ?string $itemId = null,
        public ?AuctionDataSummary $auctionDataSummary = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemId:             $data['itemId'] ?? null,
            auctionDataSummary: isset($data['auctionDataSummary'])
                ? AuctionDataSummary::fromArray($data['auctionDataSummary'])
                : null,
        );
    }
}
