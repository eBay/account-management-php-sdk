<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\UserWatchList\Input;

readonly class UserWatchListInput
{
    public function __construct(
        public ?PageInfoInput $pagination = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            pagination: isset($data['pagination']) ? PageInfoInput::fromArray($data['pagination']) : null,
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->pagination !== null) {
            $data['pagination'] = (object)$this->pagination->toArray();
        }
        return $data;
    }
}
