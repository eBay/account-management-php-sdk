<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserWatchList\Output;

readonly class UserNote
{
    public function __construct(
        public ?string $note = null,
        public ?string $orderLineItemId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            note:            $data['note'] ?? null,
            orderLineItemId: $data['orderLineItemId'] ?? null,
        );
    }
}
