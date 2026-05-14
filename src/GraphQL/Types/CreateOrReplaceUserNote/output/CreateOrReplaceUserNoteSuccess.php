<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Output;

readonly class CreateOrReplaceUserNoteSuccess extends CreateOrReplaceUserNoteOutput
{
    public function __construct(
        public ?UserNote $userNote = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreateOrReplaceUserNoteSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            userNote: isset($data['userNote']) ? UserNote::fromArray($data['userNote']) : null,
        );
    }
}
