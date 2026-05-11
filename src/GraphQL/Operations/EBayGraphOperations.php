<?php

namespace EBay\AccountManagement\GraphQL\Operations;

final class EBayGraphOperations
{
    public static function USER_BIDDING_ACTIVITY(): string
    {
        return file_get_contents(__DIR__ . '/EBayGraph/UserBiddingActivity.graphql');
    }

    public static function USER(): string
    {
        return file_get_contents(__DIR__ . '/EBayGraph/User.graphql');
    }
}
