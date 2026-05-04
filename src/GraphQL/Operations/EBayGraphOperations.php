<?php

namespace EBay\AccountManagement\GraphQL\Operations;

final class EBayGraphOperations
{
    public const USER_BIDDING_ACTIVITY = <<<'GRAPHQL'
        query UserBiddingActivity($input: UserBiddingActivityInput!) {
            userBiddingActivity(input: $input) {
                auctions {
                    itemId
                    auctionDataSummary {
                        leadingBid {
                            bidAmount {
                                original {
                                    currency
                                    value
                                }
                                converted {
                                    currency
                                    value
                                }
                            }
                            bidder {
                                userId
                            }
                        }
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
                    profileAddress {
                        addressLine1
                        addressLine2
                        city
                        stateOrProvince
                        postalCode
                        countryCode
                    }
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
                    displayString
                }
                userType {
                    displayString
                }
            }
        }
        GRAPHQL;
}
