<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\RemoveAllFromWatchList\Output;

readonly class RemoveAllFromWatchListSuccess extends RemoveAllFromWatchListOutput
{
    public function __construct(
        public ?int $numberOfItemsUnwatched = null,
    ) {}

    public function getTypename(): string
    {
        return 'RemoveAllFromWatchListSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            numberOfItemsUnwatched: isset($data['numberOfItemsUnwatched']) ? (int)$data['numberOfItemsUnwatched'] : null,
        );
    }
}
