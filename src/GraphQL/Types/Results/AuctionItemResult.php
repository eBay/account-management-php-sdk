<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AuctionItemResult
{
    public function __construct(
        public ?string $itemId = null,
        public ?AuctionDataSummaryResult $auctionDataSummary = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemId:             $data['itemId'] ?? null,
            auctionDataSummary: isset($data['auctionDataSummary'])
                ? AuctionDataSummaryResult::fromArray($data['auctionDataSummary'])
                : null,
        );
    }
}
