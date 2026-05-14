<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output;

readonly class AddToWatchListSuccess extends AddToWatchListOutput
{
    /**
     * @param Item[] $addedItems
     */
    public function __construct(
        public array $addedItems = [],
        public ?int $watchListCount = null,
        public ?int $watchListMaximum = null,
    ) {}

    public function getTypename(): string
    {
        return 'AddToWatchListSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            addedItems: array_map(
                static fn(array $i): Item => Item::fromArray($i),
                $data['addedItems'] ?? [],
            ),
            watchListCount:  isset($data['watchListCount']) ? (int)$data['watchListCount'] : null,
            watchListMaximum: isset($data['watchListMaximum']) ? (int)$data['watchListMaximum'] : null,
        );
    }
}
