<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\User\Output;

readonly class IndividualIdentityProfile
{
    public function __construct(
        public ?string $email = null,
        public ?string $lastName = null,
        public ?string $firstName = null,
        public ?string $middleName = null,
        public ?Phone $primaryPhone = null,
        public ?ProfileAddress $profileAddress = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            email:          $data['email'] ?? null,
            lastName:       $data['lastName'] ?? null,
            firstName:      $data['firstName'] ?? null,
            middleName:     $data['middleName'] ?? null,
            primaryPhone:   isset($data['primaryPhone']) ? Phone::fromArray($data['primaryPhone']) : null,
            profileAddress: isset($data['profileAddress']) ? ProfileAddress::fromArray($data['profileAddress']) : null,
        );
    }
}
