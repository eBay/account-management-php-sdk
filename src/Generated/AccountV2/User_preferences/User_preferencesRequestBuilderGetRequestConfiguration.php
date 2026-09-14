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

namespace EBay\AccountManagement\Generated\AccountV2\User_preferences;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class User_preferencesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var User_preferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?User_preferencesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new User_preferencesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param User_preferencesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?User_preferencesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new User_preferencesRequestBuilderGetQueryParameters.
     * @param string|null $fieldgroups The <b>fieldgroups</b> query parameter specifies the type of seller preferences to retrieve. <br><br>If <b>fieldgroups</b>=<code>ALL</code> or is omitted, all the supported seller preferences are returned. <br><br>To retrieve specific seller preferences, include the <b>fieldgroups</b> parameter and specify one or more values, with each value delimited by a comma. <br><br>For example, <code>fieldgroups = SHIPPING_CARRIER_RATE,COMBINED_PAYMENT</code>. <br><br>The value can be <code>ALL</code> or any combination of the following (comma-separated):<br><code>COMBINED_PAYMENT</code>, <code>DISPATCH_CUTOFF_TIME</code>, <code>EMAIL_SHIPMENT_TRACKING_NUMBER</code>, <code>END_OF_AUCTION_EMAIL</code>, <code>GLOBAL_SHIPPING_PROGRAM</code>, <code>GLOBAL_SHIPPING_PROGRAM_LISTING</code>, <code>ITEMS_AWAITING_PAYMENT</code>, <code>OUT_OF_STOCK_CONTROL SELLER_PROFILE</code>, <code>OVERRIDE_GSP_SERVICE_WITH_INTL_SERVICE</code>, <code>PICKUP_DROPOFF_SELLER</code>, <code>PURCHASE_REMINDER_EMAIL</code>, <code>REQUIRED_SHIP_PHONE_NUMBER</code>, <code>SELLER_EXCLUDE_SHIP_TO_LOCATION</code>, <code>SHIPPING_CARRIER_RATE</code>
     * @return User_preferencesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $fieldgroups = null): User_preferencesRequestBuilderGetQueryParameters {
        return new User_preferencesRequestBuilderGetQueryParameters($fieldgroups);
    }

}
