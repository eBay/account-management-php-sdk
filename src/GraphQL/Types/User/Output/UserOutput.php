<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\AccountManagement\GraphQL\Types\User\Output;

readonly class UserOutput
{
    public function __construct(
        public ?string $username = null,
        public ?string $userIdLastChangedAt = null,
        public ?bool $userIdChanged = null,
        public ?string $userId = null,
        public ?string $userCreatedAt = null,
        public ?string $registrationMarketPlace = null,
        public ?bool $newUser = null,
        public ?IndividualIdentityProfile $individualIdentityProfile = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            username: $data['username'] ?? null,
            userIdLastChangedAt: $data['userIdLastChangedAt'] ?? null,
            userIdChanged: $data['userIdChanged'] ?? null,
            userId: $data['userId'] ?? null,
            userCreatedAt: $data['userCreatedAt'] ?? null,
            registrationMarketPlace: $data['registrationMarketPlace'] ?? null,
            newUser: $data['newUser'] ?? null,
            individualIdentityProfile: isset($data['individualIdentityProfile']) ? IndividualIdentityProfile::fromArray($data['individualIdentityProfile']) : null,
        );
    }
}
