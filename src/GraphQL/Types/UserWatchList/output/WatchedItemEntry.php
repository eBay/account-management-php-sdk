<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserWatchList\Output;

readonly class WatchedItemEntry
{
    /**
     * @param UserNote[] $userNotes
     */
    public function __construct(
        public ?string $itemId = null,
        public array $userNotes = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemId:    $data['itemId'] ?? null,
            userNotes: array_map(
                static fn(array $n): UserNote => UserNote::fromArray($n),
                $data['userNotes'] ?? [],
            ),
        );
    }
}
