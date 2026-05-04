<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class IndividualIdentityProfileResult
{
    public function __construct(
        public ?string $email = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $middleName = null,
        public ?array $profileAddress = null,
        public ?PhoneResult $primaryPhone = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            email:          $data['email'] ?? null,
            firstName:      $data['firstName'] ?? null,
            lastName:       $data['lastName'] ?? null,
            middleName:     $data['middleName'] ?? null,
            profileAddress: $data['profileAddress'] ?? null,
            primaryPhone:   isset($data['primaryPhone']) ? PhoneResult::fromArray($data['primaryPhone']) : null,
        );
    }
}
