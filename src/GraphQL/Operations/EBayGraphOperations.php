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
                        bidStatistics {
                            userSubmittedBidCount
                        }
                        bidderAuctionDetails {
                            minimumQualifyingBidForMaxBid {
                                original {
                                    value
                                    currency
                                }
                            }
                            maxBid {
                                original {
                                    value
                                    currency
                                }
                            }
                            userBiddingStatus
                            userPowerBids {
                                original {
                                    value
                                    currency
                                }
                            }
                        }
                        itemId
                        reservePriceMet
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
                    primaryPhone {
                        phoneNumber
                        phoneNumberType
                        countryCode
                        dialCode
                    }
                }
                publicUserProfile {
                    businessName
                    firstName
                    lastName
                    email
                    fax
                    legalInvoiceProvided
                    phone {
                        phoneNumber
                        phoneNumberType
                        countryCode
                        dialCode
                    }
                }
                userStatus {
                    __typename
                    displayName
                }
                userType {
                    __typename
                    displayName
                }
            }
        }
        GRAPHQL;
}
