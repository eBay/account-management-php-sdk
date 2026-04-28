<?php

namespace EBay\AccountManagement\GraphQL\Operations;

final class EBayGraphOperations
{
    public const USER_BIDDING_ACTIVITY = <<<'GRAPHQL'
        query UserBiddingActivity($input: UserBiddingActivityInput!) {
            userBiddingActivity(input: $input) {
                auctions {
                    itemId
                    itemIdRestReference
                    sku
                    auctionDataSummary {
                        currentPrice {
                            value
                            currency
                            convertedFromValue
                            convertedFromCurrency
                        }
                        bidCount
                        endTime
                        highBidder
                        minimumToBid {
                            value
                            currency
                        }
                        reserveMet
                        startTime
                    }
                    itemTerms {
                        price {
                            value
                            currency
                        }
                        quantityAvailable
                    }
                }
                paginationOutput {
                    nextCursor
                    previousCursor
                }
            }
        }
        GRAPHQL;

    public const USER = <<<'GRAPHQL'
        query User {
            user {
                userId
                username
                newUser
                userIdChanged
                userIdLastChangedAt
                userCreatedAt
                registrationMarketPlace
                individualIdentityProfile {
                    email
                    firstName
                    lastName
                    middleName
                }
                publicUserProfile {
                    businessName
                    firstName
                    lastName
                    email
                    phone {
                        phoneNumber
                        phoneType
                    }
                }
                userStatus {
                    displayName
                }
                userType {
                    displayName
                }
            }
        }
        GRAPHQL;
}
