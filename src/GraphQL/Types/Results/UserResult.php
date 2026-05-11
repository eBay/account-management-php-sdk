<?php
declare(strict_types=1);

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
        public ?PublicUserProfileResult $publicUserProfile = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            userId:                    $data['userId'],
            username:                  $data['username'] ?? null,
            newUser:                   $data['newUser'] ?? null,
            userIdChanged:             $data['userIdChanged'] ?? null,
            userIdLastChangedAt:       $data['userIdLastChangedAt'] ?? null,
            userCreatedAt:             $data['userCreatedAt'] ?? null,
            registrationMarketPlace:   $data['registrationMarketPlace'] ?? null,
            individualIdentityProfile: isset($data['individualIdentityProfile'])
                ? IndividualIdentityProfileResult::fromArray($data['individualIdentityProfile'])
                : null,
            publicUserProfile:         isset($data['publicUserProfile'])
                ? PublicUserProfileResult::fromArray($data['publicUserProfile'])
                : null,
        );
    }
}
