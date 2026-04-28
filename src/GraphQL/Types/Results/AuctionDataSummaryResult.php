<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class AuctionDataSummaryResult
{
    public function __construct(
        public ?MoneyResult $currentPrice = null,
        public ?int $bidCount = null,
        public ?string $endTime = null,
        public ?string $highBidder = null,
        public ?MoneyResult $minimumToBid = null,
        public ?bool $reserveMet = null,
        public ?string $startTime = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            currentPrice: isset($data['currentPrice']) ? MoneyResult::fromArray($data['currentPrice']) : null,
            bidCount:     $data['bidCount'] ?? null,
            endTime:      $data['endTime'] ?? null,
            highBidder:   $data['highBidder'] ?? null,
            minimumToBid: isset($data['minimumToBid']) ? MoneyResult::fromArray($data['minimumToBid']) : null,
            reserveMet:   $data['reserveMet'] ?? null,
            startTime:    $data['startTime'] ?? null,
        );
    }
}
