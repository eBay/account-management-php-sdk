<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Input;

readonly class UserBiddingActivityInput
{
    public function __construct(
        public ?BiddingActivityFilter $filter = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            filter: isset($data['filter']) ? BiddingActivityFilter::fromArray($data['filter']) : null,
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->filter !== null) {
            $data['filter'] = (object)$this->filter->toArray();
        }
        return $data;
    }
}
