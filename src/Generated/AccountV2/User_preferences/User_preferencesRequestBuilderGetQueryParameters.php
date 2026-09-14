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

/**
 * This method retrieves the seller's preferences for a specific eBay marketplace, such as combined payment preferences, same-day shipping cutoff time, excluded shipping locations, and opt-in status for Business Policies and Out-of-Stock control. The <b>fieldgroups</b> query parameter specifies the type of seller preferences to retrieve. If <b>fieldgroups</b> = <code>ALL</code> or the parameter is omitted, all the supported seller preferences are returned. To retrieve only specific preferences, include the <b>fieldgroups</b> parameter with one or more supported values, delimited by commas.
*/
class User_preferencesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $fieldgroups The <b>fieldgroups</b> query parameter specifies the type of seller preferences to retrieve. <br><br>If <b>fieldgroups</b>=<code>ALL</code> or is omitted, all the supported seller preferences are returned. <br><br>To retrieve specific seller preferences, include the <b>fieldgroups</b> parameter and specify one or more values, with each value delimited by a comma. <br><br>For example, <code>fieldgroups = SHIPPING_CARRIER_RATE,COMBINED_PAYMENT</code>. <br><br>The value can be <code>ALL</code> or any combination of the following (comma-separated):<br><code>COMBINED_PAYMENT</code>, <code>DISPATCH_CUTOFF_TIME</code>, <code>EMAIL_SHIPMENT_TRACKING_NUMBER</code>, <code>END_OF_AUCTION_EMAIL</code>, <code>GLOBAL_SHIPPING_PROGRAM</code>, <code>GLOBAL_SHIPPING_PROGRAM_LISTING</code>, <code>ITEMS_AWAITING_PAYMENT</code>, <code>OUT_OF_STOCK_CONTROL SELLER_PROFILE</code>, <code>OVERRIDE_GSP_SERVICE_WITH_INTL_SERVICE</code>, <code>PICKUP_DROPOFF_SELLER</code>, <code>PURCHASE_REMINDER_EMAIL</code>, <code>REQUIRED_SHIP_PHONE_NUMBER</code>, <code>SELLER_EXCLUDE_SHIP_TO_LOCATION</code>, <code>SHIPPING_CARRIER_RATE</code>
    */
    public ?string $fieldgroups = null;
    
    /**
     * Instantiates a new User_preferencesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $fieldgroups The <b>fieldgroups</b> query parameter specifies the type of seller preferences to retrieve. <br><br>If <b>fieldgroups</b>=<code>ALL</code> or is omitted, all the supported seller preferences are returned. <br><br>To retrieve specific seller preferences, include the <b>fieldgroups</b> parameter and specify one or more values, with each value delimited by a comma. <br><br>For example, <code>fieldgroups = SHIPPING_CARRIER_RATE,COMBINED_PAYMENT</code>. <br><br>The value can be <code>ALL</code> or any combination of the following (comma-separated):<br><code>COMBINED_PAYMENT</code>, <code>DISPATCH_CUTOFF_TIME</code>, <code>EMAIL_SHIPMENT_TRACKING_NUMBER</code>, <code>END_OF_AUCTION_EMAIL</code>, <code>GLOBAL_SHIPPING_PROGRAM</code>, <code>GLOBAL_SHIPPING_PROGRAM_LISTING</code>, <code>ITEMS_AWAITING_PAYMENT</code>, <code>OUT_OF_STOCK_CONTROL SELLER_PROFILE</code>, <code>OVERRIDE_GSP_SERVICE_WITH_INTL_SERVICE</code>, <code>PICKUP_DROPOFF_SELLER</code>, <code>PURCHASE_REMINDER_EMAIL</code>, <code>REQUIRED_SHIP_PHONE_NUMBER</code>, <code>SELLER_EXCLUDE_SHIP_TO_LOCATION</code>, <code>SHIPPING_CARRIER_RATE</code>
    */
    public function __construct(?string $fieldgroups = null) {
        $this->fieldgroups = $fieldgroups;
    }

}
