<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output;

readonly class CustomListFailure
{
    public function __construct(
        public ?string $customListId = null,
        public ?string $reason = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            customListId: $data['customListId'] ?? null,
            reason:       $data['reason'] ?? null,
        );
    }
}
