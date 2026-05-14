<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class BuyerBiddingSummary
{
    /**
     * @param ItemBid[] $itemBids
     */
    public function __construct(
        public ?string $bidsWithSellerPercentage = null,
        public array $itemBids = [],
        public ?int $totalBidCount = null,
        public ?int $retractedBidCount = null,
        public ?int $uniqueListingCategoryBidCount = null,
        public ?int $uniqueSellerBidCount = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            bidsWithSellerPercentage:       $data['bidsWithSellerPercentage'] ?? null,
            itemBids: array_map(
                static fn(array $b): ItemBid => ItemBid::fromArray($b),
                $data['itemBids'] ?? [],
            ),
            totalBidCount:                  isset($data['totalBidCount']) ? (int)$data['totalBidCount'] : null,
            retractedBidCount:              isset($data['retractedBidCount']) ? (int)$data['retractedBidCount'] : null,
            uniqueListingCategoryBidCount:  isset($data['uniqueListingCategoryBidCount']) ? (int)$data['uniqueListingCategoryBidCount'] : null,
            uniqueSellerBidCount:           isset($data['uniqueSellerBidCount']) ? (int)$data['uniqueSellerBidCount'] : null,
        );
    }
}
