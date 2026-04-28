<?php

namespace EBay\AccountManagement\GraphQL\Types\Inputs;

readonly class BiddingActivityFilterInput
{
    public function __construct(
        public ?string $activeAfter = null,
        public ?string $activeBefore = null,
        /** @var array{maxPageSize?: int, pageCursor?: string}|null */
        public ?array $paginationInput = null,
    ) {}

    public function toArray(): array
    {
        $data = [];
        if ($this->activeAfter !== null) {
            $data['activeAfter'] = $this->activeAfter;
        }
        if ($this->activeBefore !== null) {
            $data['activeBefore'] = $this->activeBefore;
        }
        if ($this->paginationInput !== null) {
            $data['paginationInput'] = $this->paginationInput;
        }
        return $data;
    }
}
