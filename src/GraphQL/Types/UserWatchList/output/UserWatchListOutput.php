<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserWatchList\Output;

readonly class UserWatchListOutput
{
    /**
     * @param WatchedItem[] $items
     */
    public function __construct(
        public array $items = [],
        public ?Pagination $pagination = null,
        public ?int $watchListCount = null,
        public ?int $watchListMaximum = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            items: array_map(
                static fn(array $i): WatchedItem => WatchedItem::fromArray($i),
                $data['items'] ?? [],
            ),
            pagination:      isset($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
            watchListCount:  isset($data['watchListCount']) ? (int)$data['watchListCount'] : null,
            watchListMaximum: isset($data['watchListMaximum']) ? (int)$data['watchListMaximum'] : null,
        );
    }
}
