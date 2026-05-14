<?php

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\User\Output;

readonly class UserOutput
{
    public function __construct(
        public ?string $username = null,
        public ?UserAccountType $userType = null,
        public ?UserStatus $userStatus = null,
        public ?string $userIdLastChangedAt = null,
        public ?bool $userIdChanged = null,
        public ?string $userId = null,
        public ?string $userCreatedAt = null,
        public ?string $registrationMarketPlace = null,
        public ?bool $newUser = null,
        public ?IndividualIdentityProfile $individualIdentityProfile = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            username:                   $data['username'] ?? null,
            userType:                   isset($data['userType']) ? UserAccountType::fromArray($data['userType']) : null,
            userStatus:                 isset($data['userStatus']) ? UserStatus::fromArray($data['userStatus']) : null,
            userIdLastChangedAt:        $data['userIdLastChangedAt'] ?? null,
            userIdChanged:              isset($data['userIdChanged']) ? (bool)$data['userIdChanged'] : null,
            userId:                     $data['userId'] ?? null,
            userCreatedAt:              $data['userCreatedAt'] ?? null,
            registrationMarketPlace:    $data['registrationMarketPlace'] ?? null,
            newUser:                    isset($data['newUser']) ? (bool)$data['newUser'] : null,
            individualIdentityProfile:  isset($data['individualIdentityProfile'])
                ? IndividualIdentityProfile::fromArray($data['individualIdentityProfile'])
                : null,
        );
    }
}
