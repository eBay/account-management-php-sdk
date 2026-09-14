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

namespace EBay\AccountManagement\Generated\AccountV1\Payment_policy\Get_by_policy_name;

/**
 * This method retrieves the details of a specific payment policy. Supply both the policy <code>name</code> and its associated <code>marketplace_id</code> in the request query parameters.
*/
class Get_by_policy_nameRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/develop/api/sell/account_api_v1#sell-account_api_v1-payment_policy-getpaymentpolicies.marketplaceidenum
    */
    public ?string $marketplaceId = null;
    
    /**
     * @var string|null $name This query parameter specifies the seller-defined name of the payment policy you want to retrieve.<br><br> This value can be retrieved for a payment policy by using the <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-payment_policy-getpaymentpolicies" target="_blank ">getPaymentPolicies</a> method.
    */
    public ?string $name = null;
    
    /**
     * Instantiates a new Get_by_policy_nameRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $marketplace_id This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/develop/api/sell/account_api_v1#sell-account_api_v1-payment_policy-getpaymentpolicies.marketplaceidenum
     * @param string|null $name This query parameter specifies the seller-defined name of the payment policy you want to retrieve.<br><br> This value can be retrieved for a payment policy by using the <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-payment_policy-getpaymentpolicies" target="_blank ">getPaymentPolicies</a> method.
    */
    public function __construct(?string $marketplace_id = null, ?string $name = null) {
        $this->marketplaceId = $marketplace_id;
        $this->name = $name;
    }

}
