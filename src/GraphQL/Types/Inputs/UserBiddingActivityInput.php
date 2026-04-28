<?php

namespace EBay\AccountManagement\GraphQL\Types\Inputs;

readonly class UserBiddingActivityInput
{
    public function __construct(
        public ?BiddingActivityFilterInput $filter = null,
    ) {}

    public function toArray(): array
    {
        $data = [];
        if ($this->filter !== null) {
            $data['filter'] = $this->filter->toArray();
        }
        return $data;
    }
}
