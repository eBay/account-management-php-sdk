<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Input;

readonly class CreateOrReplaceUserNoteInput
{
    public function __construct(
        public string $itemId,
        public string $userNote,
        public ?string $orderLineItemId = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemId:          $data['itemId'],
            userNote:        $data['userNote'],
            orderLineItemId: $data['orderLineItemId'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'itemId'          => $this->itemId,
            'userNote'        => $this->userNote,
            'orderLineItemId' => $this->orderLineItemId,
        ], static fn($v) => $v !== null);
    }
}
