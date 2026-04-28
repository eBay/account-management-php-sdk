<?php
declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class PublicUserProfileResult
{
    public function __construct(
        public ?string $businessName = null,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $email = null,
        public ?PhoneResult $phone = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            businessName: $data['businessName'] ?? null,
            firstName:    $data['firstName'] ?? null,
            lastName:     $data['lastName'] ?? null,
            email:        $data['email'] ?? null,
            phone:        isset($data['phone']) ? PhoneResult::fromArray($data['phone']) : null,
        );
    }
}
