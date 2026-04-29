<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class BidStatisticsResult
{
    public function __construct(
        public int $userSubmittedBidCount = 0,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            userSubmittedBidCount: $data['userSubmittedBidCount'] ?? 0,
        );
    }
}
