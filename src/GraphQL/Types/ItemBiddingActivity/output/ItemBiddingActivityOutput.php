<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class ItemBiddingActivityOutput
{
    public function __construct(
        public ?AuctionData $itemBiddingActivity = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemBiddingActivity: isset($data['itemBiddingActivity'])
                ? AuctionData::fromArray($data['itemBiddingActivity'])
                : null,
        );
    }
}
