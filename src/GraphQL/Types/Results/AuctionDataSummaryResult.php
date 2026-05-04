<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AuctionDataSummaryResult
{
    public function __construct(
        public ?array $leadingBid = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            leadingBid: $data['leadingBid'] ?? null,
        );
    }
}
