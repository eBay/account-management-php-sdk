<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AuctionItemResult
{
    public function __construct(
        public ?string $itemId = null,
        public ?string $itemIdRestReference = null,
        public ?string $sku = null,
        public ?AuctionDataSummaryResult $auctionDataSummary = null,
        public ?AuctionItemTermsResult $itemTerms = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemId:              $data['itemId'] ?? null,
            itemIdRestReference: $data['itemIdRestReference'] ?? null,
            sku:                 $data['sku'] ?? null,
            auctionDataSummary:  isset($data['auctionDataSummary']) ? AuctionDataSummaryResult::fromArray($data['auctionDataSummary']) : null,
            itemTerms:           isset($data['itemTerms']) ? AuctionItemTermsResult::fromArray($data['itemTerms']) : null,
        );
    }
}
