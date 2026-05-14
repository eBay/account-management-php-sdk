<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Input;

readonly class DeleteUserNoteInput
{
    public function __construct(
        public string $itemId,
        public ?string $orderLineItemId = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemId:          $data['itemId'],
            orderLineItemId: $data['orderLineItemId'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'itemId'          => $this->itemId,
            'orderLineItemId' => $this->orderLineItemId,
        ], static fn($v) => $v !== null);
    }
}
