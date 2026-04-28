<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class UserBiddingActivityResult
{
    /**
     * @param AuctionItemResult[] $auctions
     */
    public function __construct(
        public array $auctions,
        public PaginationResult $paginationOutput,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            auctions:         array_map(
                static fn(array $item): AuctionItemResult => AuctionItemResult::fromArray($item),
                $data['auctions'] ?? [],
            ),
            paginationOutput: PaginationResult::fromArray($data['paginationOutput'] ?? []),
        );
    }
}
