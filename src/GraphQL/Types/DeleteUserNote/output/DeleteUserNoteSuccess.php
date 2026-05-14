<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Output;

readonly class DeleteUserNoteSuccess extends DeleteUserNoteOutput
{
    public function __construct(
        public ?UserNote $userNote = null,
    ) {}

    public function getTypename(): string
    {
        return 'DeleteUserNoteSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            userNote: isset($data['userNote']) ? UserNote::fromArray($data['userNote']) : null,
        );
    }
}
