<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Input;

readonly class BiddingActivityFilter
{
    public function __construct(
        public ?string $activeAfter = null,
        public ?string $activeBefore = null,
        public ?PageInfoInput $paginationInput = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            activeAfter:     $data['activeAfter'] ?? null,
            activeBefore:    $data['activeBefore'] ?? null,
            paginationInput: isset($data['paginationInput'])
                ? PageInfoInput::fromArray($data['paginationInput'])
                : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'activeAfter'     => $this->activeAfter,
            'activeBefore'    => $this->activeBefore,
            'paginationInput' => $this->paginationInput?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
