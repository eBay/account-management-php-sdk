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

namespace EBay\AccountManagement\GraphQL\Operations;

final class EBayGraphOperations
{
    public static function USER(): string
    {
        return file_get_contents(__DIR__ . '/user.graphql') ?: throw new \RuntimeException('Cannot read user.graphql');
    }

    public static function USER_BIDDING_ACTIVITY(): string
    {
        return file_get_contents(__DIR__ . '/userBiddingActivity.graphql') ?: throw new \RuntimeException('Cannot read userBiddingActivity.graphql');
    }

    public static function ITEM_BIDDING_ACTIVITY(): string
    {
        return file_get_contents(__DIR__ . '/itemBiddingActivity.graphql') ?: throw new \RuntimeException('Cannot read itemBiddingActivity.graphql');
    }

    public static function USER_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/userWatchList.graphql') ?: throw new \RuntimeException('Cannot read userWatchList.graphql');
    }

    public static function ADD_TO_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/addToWatchList.graphql') ?: throw new \RuntimeException('Cannot read addToWatchList.graphql');
    }

    public static function REMOVE_FROM_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/removeFromWatchList.graphql') ?: throw new \RuntimeException('Cannot read removeFromWatchList.graphql');
    }

    public static function REMOVE_ALL_FROM_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/removeAllFromWatchList.graphql') ?: throw new \RuntimeException('Cannot read removeAllFromWatchList.graphql');
    }

    public static function CREATE_OR_REPLACE_USER_NOTE(): string
    {
        return file_get_contents(__DIR__ . '/createOrReplaceUserNote.graphql') ?: throw new \RuntimeException('Cannot read createOrReplaceUserNote.graphql');
    }

    public static function DELETE_USER_NOTE(): string
    {
        return file_get_contents(__DIR__ . '/deleteUserNote.graphql') ?: throw new \RuntimeException('Cannot read deleteUserNote.graphql');
    }

    public static function USER_CUSTOM_LISTS(): string
    {
        return file_get_contents(__DIR__ . '/userCustomLists.graphql') ?: throw new \RuntimeException('Cannot read userCustomLists.graphql');
    }
}
