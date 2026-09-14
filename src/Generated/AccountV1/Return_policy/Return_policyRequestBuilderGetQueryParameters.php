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

namespace EBay\AccountManagement\Generated\AccountV1\Return_policy;

/**
 * This method retrieves all the return policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
*/
class Return_policyRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This query parameter specifies the ID of the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/develop/api/sell/account_api_v1#sell-account_api_v1-payment_policy-getpaymentpolicies.marketplaceidenum
    */
    public ?string $marketplaceId = null;
    
    /**
     * Instantiates a new Return_policyRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $marketplace_id This query parameter specifies the ID of the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/develop/api/sell/account_api_v1#sell-account_api_v1-payment_policy-getpaymentpolicies.marketplaceidenum
    */
    public function __construct(?string $marketplace_id = null) {
        $this->marketplaceId = $marketplace_id;
    }

}
