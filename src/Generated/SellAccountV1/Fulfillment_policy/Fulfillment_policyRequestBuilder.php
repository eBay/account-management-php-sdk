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

namespace EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy;

use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Item\WithFulfillmentPolicyItemRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Models\FulfillmentPolicyResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /fulfillment_policy
*/
class Fulfillment_policyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The EmptyPathSegment property
    */
    public function emptyPathSegment(): EmptyPathSegmentRequestBuilder {
        return new EmptyPathSegmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_by_policy_name property
    */
    public function get_by_policy_name(): Get_by_policy_nameRequestBuilder {
        return new Get_by_policy_nameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellAccountV1.fulfillment_policy.item collection
     * @param string $fulfillmentPolicyId This path parameter specifies the ID of the fulfillment policy you want to retrieve.<br><br> This ID can be retrieved for a fulfillment policy by using the <a href="/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies" target="_blank ">getFulfillmentPolicies</a> method.
     * @return WithFulfillmentPolicyItemRequestBuilder
    */
    public function byFulfillmentPolicyId(string $fulfillmentPolicyId): WithFulfillmentPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fulfillmentPolicyId'] = $fulfillmentPolicyId;
        return new WithFulfillmentPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Fulfillment_policyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/fulfillment_policy?marketplace_id={marketplace_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves all the fulfillment policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
     * @param Fulfillment_policyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FulfillmentPolicyResponse|null>
     * @throws Exception
    */
    public function get(?Fulfillment_policyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [FulfillmentPolicyResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves all the fulfillment policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
     * @param Fulfillment_policyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Fulfillment_policyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Fulfillment_policyRequestBuilder
    */
    public function withUrl(string $rawUrl): Fulfillment_policyRequestBuilder {
        return new Fulfillment_policyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
