<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output;

readonly class BidStatistics
{
    public function __construct(
        public ?int $userSubmittedBidCount = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            userSubmittedBidCount: isset($data['userSubmittedBidCount']) ? (int)$data['userSubmittedBidCount'] : null,
        );
    }
}
