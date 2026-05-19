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

namespace EBay\AccountManagement\Generated\SellAccountV1\Custom_policy;

use EBay\AccountManagement\Generated\SellAccountV1\Custom_policy\Item\WithCustom_policy_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /custom_policy
*/
class Custom_policyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The EmptyPathSegment property
    */
    public function emptyPathSegment(): EmptyPathSegmentRequestBuilder {
        return new EmptyPathSegmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellAccountV1.custom_policy.item collection
     * @param string $custom_policy_id This path parameter is the unique identifier of the custom policy to retrieve.<br><br> This ID can be retrieved for a custom policy by using the <a href="/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies" target="_blank ">getCustomPolicies</a> method.
     * @return WithCustom_policy_ItemRequestBuilder
    */
    public function byCustom_policy_id(string $custom_policy_id): WithCustom_policy_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['custom_policy_id'] = $custom_policy_id;
        return new WithCustom_policy_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Custom_policyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/custom_policy');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
