<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output;

readonly class UserBiddingActivityOutput
{
    /**
     * @param Auction[] $auctions
     */
    public function __construct(
        public array $auctions = [],
        public ?PaginationOutput $paginationOutput = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            auctions: array_map(
                static fn(array $a): Auction => Auction::fromArray($a),
                $data['auctions'] ?? [],
            ),
            paginationOutput: isset($data['paginationOutput'])
                ? PaginationOutput::fromArray($data['paginationOutput'])
                : null,
        );
    }
}
