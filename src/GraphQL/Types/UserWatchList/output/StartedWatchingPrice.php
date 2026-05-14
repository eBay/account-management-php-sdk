<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserWatchList\Output;

readonly class StartedWatchingPrice
{
    public function __construct(
        public ?MoneyAmount $original = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            original: isset($data['original']) ? MoneyAmount::fromArray($data['original']) : null,
        );
    }
}
