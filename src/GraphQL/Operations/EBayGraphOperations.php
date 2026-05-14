<?php

namespace EBay\AccountManagement\GraphQL\Operations;

final class EBayGraphOperations
{
    public static function USER(): string
    {
        return file_get_contents(__DIR__ . '/user.graphql');
    }

    public static function USER_BIDDING_ACTIVITY(): string
    {
        return file_get_contents(__DIR__ . '/userBiddingActivity.graphql');
    }

    public static function ITEM_BIDDING_ACTIVITY(): string
    {
        return file_get_contents(__DIR__ . '/itemBiddingActivity.graphql');
    }

    public static function USER_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/userWatchList.graphql');
    }

    public static function ADD_TO_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/addToWatchList.graphql');
    }

    public static function REMOVE_FROM_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/removeFromWatchList.graphql');
    }

    public static function REMOVE_ALL_FROM_WATCH_LIST(): string
    {
        return file_get_contents(__DIR__ . '/removeAllFromWatchList.graphql');
    }

    public static function CREATE_OR_REPLACE_USER_NOTE(): string
    {
        return file_get_contents(__DIR__ . '/createOrReplaceUserNote.graphql');
    }

    public static function DELETE_USER_NOTE(): string
    {
        return file_get_contents(__DIR__ . '/deleteUserNote.graphql');
    }

    public static function USER_CUSTOM_LISTS(): string
    {
        return file_get_contents(__DIR__ . '/userCustomLists.graphql');
    }
}
