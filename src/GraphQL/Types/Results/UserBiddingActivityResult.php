<?php

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class UserBiddingActivityResult
{
    /**
     * @param array<int, array<string, mixed>> $auctions Raw auction item arrays.
     */
    public function __construct(
        public array $auctions,
        public PaginationResult $paginationOutput,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            auctions:         $data['auctions'] ?? [],
            paginationOutput: PaginationResult::fromArray($data['paginationOutput'] ?? []),
        );
    }
}
