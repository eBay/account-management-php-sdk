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

namespace EBay\AccountManagement\Clients\GraphQL;

use EBay\AccountManagement\Configuration\RequestOptions;
use EBay\AccountManagement\GraphQL\Operations\EBayGraphOperations;
use EBay\AccountManagement\GraphQL\Types\AddToWatchList\Input\AddToWatchListInput;
use EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output\AddToWatchListOutput;
use EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Input\CreateOrReplaceUserNoteInput;
use EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Output\CreateOrReplaceUserNoteOutput;
use EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Input\DeleteUserNoteInput;
use EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Output\DeleteUserNoteOutput;
use EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Input\ItemBiddingActivityInput;
use EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output\ItemBiddingActivityOutput;
use EBay\AccountManagement\GraphQL\Types\RemoveAllFromWatchList\Output\RemoveAllFromWatchListOutput;
use EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Input\RemoveFromWatchListInput;
use EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output\RemoveFromWatchListOutput;
use EBay\AccountManagement\GraphQL\Types\User\Output\UserOutput;
use EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Input\UserBiddingActivityInput;
use EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output\UserBiddingActivityOutput;
use EBay\AccountManagement\GraphQL\Types\UserCustomLists\Input\UserCustomListsInput;
use EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output\UserCustomListsOutput;
use EBay\AccountManagement\GraphQL\Types\UserWatchList\Input\UserWatchListInput;
use EBay\AccountManagement\GraphQL\Types\UserWatchList\Output\UserWatchListOutput;

final class EBayGraphClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    public function addToWatchList(AddToWatchListInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output\AddToWatchListFailure|\EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output\AddToWatchListPartialFailure|\EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output\AddToWatchListSuccess
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::ADD_TO_WATCH_LIST(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return AddToWatchListOutput::fromArray($data['addToWatchList'] ?? []);
    }

    public function createOrReplaceUserNote(?CreateOrReplaceUserNoteInput $input = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Output\CreateOrReplaceUserNoteSuccess|\EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Output\ReferenceArgumentsNotFound
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::CREATE_OR_REPLACE_USER_NOTE(),
            $input !== null ? ['input' => (object)$input->toArray()] : [],
            $accessToken,
            $requestOptions
        );
        return CreateOrReplaceUserNoteOutput::fromArray($data['createOrReplaceUserNote'] ?? []);
    }

    public function deleteUserNote(?DeleteUserNoteInput $input = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Output\DeleteUserNoteSuccess|\EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Output\ReferenceArgumentsNotFound
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::DELETE_USER_NOTE(),
            $input !== null ? ['input' => (object)$input->toArray()] : [],
            $accessToken,
            $requestOptions
        );
        return DeleteUserNoteOutput::fromArray($data['deleteUserNote'] ?? []);
    }

    public function itemBiddingActivity(ItemBiddingActivityInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemBiddingActivityOutput
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::ITEM_BIDDING_ACTIVITY(),
            $input->toVariables(),
            $accessToken,
            $requestOptions
        );
        return ItemBiddingActivityOutput::fromArray($data['itemBiddingActivity'] ?? []);
    }

    public function removeAllFromWatchList(?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\AccountManagement\GraphQL\Types\RemoveAllFromWatchList\Output\RemoveAllFromWatchListSuccess
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::REMOVE_ALL_FROM_WATCH_LIST(),
            [],
            $accessToken,
            $requestOptions
        );
        return RemoveAllFromWatchListOutput::fromArray($data['removeAllFromWatchList'] ?? []);
    }

    public function removeFromWatchList(RemoveFromWatchListInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output\RemoveFromWatchListFailure|\EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output\RemoveFromWatchListPartialFailure|\EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output\RemoveFromWatchListSuccess
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::REMOVE_FROM_WATCH_LIST(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return RemoveFromWatchListOutput::fromArray($data['removeFromWatchList'] ?? []);
    }

    public function user(?string $accessToken = null, ?RequestOptions $requestOptions = null): UserOutput
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::USER(),
            [],
            $accessToken,
            $requestOptions
        );
        return UserOutput::fromArray($data['user'] ?? []);
    }

    public function userBiddingActivity(UserBiddingActivityInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UserBiddingActivityOutput
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::USER_BIDDING_ACTIVITY(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UserBiddingActivityOutput::fromArray($data['userBiddingActivity'] ?? []);
    }

    public function userCustomLists(?UserCustomListsInput $input = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output\UserCustomListsFailure|\EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output\UserCustomListsPartialFailure|\EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output\UserCustomListsSuccess
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::USER_CUSTOM_LISTS(),
            $input !== null ? ['input' => (object)$input->toArray()] : [],
            $accessToken,
            $requestOptions
        );
        return UserCustomListsOutput::fromArray($data['userCustomLists'] ?? []);
    }

    public function userWatchList(?UserWatchListInput $input = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UserWatchListOutput
    {
        $data = $this->dynamic->execute(
            EBayGraphOperations::USER_WATCH_LIST(),
            $input !== null ? ['input' => (object)$input->toArray()] : [],
            $accessToken,
            $requestOptions
        );
        return UserWatchListOutput::fromArray($data['userWatchList'] ?? []);
    }

    /**
     * Execute an arbitrary GraphQL query string and return the raw `data` payload.
     *
     * **WARNING — injection risk.** Never interpolate user-supplied input directly into
     * `$query`. Always pass dynamic values via `$variables` so the server handles
     * escaping.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed>
     */
    public function executeRawUnsafe(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken, $requestOptions);
    }
}
