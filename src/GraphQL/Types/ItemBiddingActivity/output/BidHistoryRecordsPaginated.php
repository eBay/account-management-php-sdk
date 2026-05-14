<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output;

readonly class BidHistoryRecordsPaginated
{
    /**
     * @param BidRecord[] $bidHistoryRecords
     */
    public function __construct(
        public array $bidHistoryRecords = [],
        public ?PaginationOutput $paginationOutput = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            bidHistoryRecords: array_map(
                static fn(array $r): BidRecord => BidRecord::fromArray($r),
                $data['bidHistoryRecords'] ?? [],
            ),
            paginationOutput: isset($data['paginationOutput'])
                ? PaginationOutput::fromArray($data['paginationOutput'])
                : null,
        );
    }
}
