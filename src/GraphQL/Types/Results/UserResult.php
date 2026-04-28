<?php

namespace EBay\AccountManagement\GraphQL\Types\Results;

readonly class UserResult
{
    public function __construct(
        public string $userId,
        public ?string $username = null,
        public ?bool $newUser = null,
        public ?bool $userIdChanged = null,
        public ?string $userIdLastChangedAt = null,
        public ?string $userCreatedAt = null,
        public ?string $registrationMarketPlace = null,
        public ?IndividualIdentityProfileResult $individualIdentityProfile = null,
        /** @var array<string, mixed>|null Raw publicUserProfile data */
        public ?array $publicUserProfile = null,
        /** @var array<string, mixed>|null Raw sellerProfile data */
        public ?array $sellerProfile = null,
        /** @var array<string, mixed>|null Raw userStatus data */
        public ?array $userStatus = null,
        /** @var array<string, mixed>|null Raw userType data */
        public ?array $userType = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $individualProfile = isset($data['individualIdentityProfile'])
            ? IndividualIdentityProfileResult::fromArray($data['individualIdentityProfile'])
            : null;

        return new self(
            userId:                   $data['userId'],
            username:                 $data['username'] ?? null,
            newUser:                  $data['newUser'] ?? null,
            userIdChanged:            $data['userIdChanged'] ?? null,
            userIdLastChangedAt:      $data['userIdLastChangedAt'] ?? null,
            userCreatedAt:            $data['userCreatedAt'] ?? null,
            registrationMarketPlace:  $data['registrationMarketPlace'] ?? null,
            individualIdentityProfile: $individualProfile,
            publicUserProfile:        $data['publicUserProfile'] ?? null,
            sellerProfile:            $data['sellerProfile'] ?? null,
            userStatus:               $data['userStatus'] ?? null,
            userType:                 $data['userType'] ?? null,
        );
    }
}
