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

use EBay\AccountManagement\Generated\AccountV1\Models\ReturnPolicyRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\ReturnPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\SetReturnPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Return_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Return_policy\Item\WithReturn_policy_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /return_policy
*/
class Return_policyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_by_policy_name property
    */
    public function get_by_policy_name(): Get_by_policy_nameRequestBuilder {
        return new Get_by_policy_nameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/AccountManagement/Generated/AccountV1.return_policy.item collection
     * @param string $return_policy_id This path parameter specifies the unique identifier of the return policy you want to retrieve. <br><br> This ID can be retrieved for a return policy by using the <a href="/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies" target="_blank ">getReturnPolicies</a> method.
     * @return WithReturn_policy_ItemRequestBuilder
    */
    public function byReturn_policy_id(string $return_policy_id): WithReturn_policy_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['return_policy_id'] = $return_policy_id;
        return new WithReturn_policy_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Return_policyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/return_policy?marketplace_id={marketplace_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves all the return policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
     * @param Return_policyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReturnPolicyResponse|null>
     * @throws Exception
    */
    public function get(?Return_policyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ReturnPolicyResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method creates a new return policy where the policy encapsulates seller's terms for returning items.  <br><br>Each policy targets a specific marketplace, and you can create multiple policies for each marketplace. Return policies are not applicable to motor-vehicle listings.<br><br>A successful request returns the <b>getReturnPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class="tablenote"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href="/api-docs/sell/static/seller-accounts/business-policies.html">eBay business policies</a>.</p>
     * @param ReturnPolicyRequest $body This root container defines a seller's return business policy for a specific marketplace and category group. This type is used when creating or updating a return business policy.
     * @param Return_policyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SetReturnPolicyResponse|null>
     * @throws Exception
    */
    public function post(ReturnPolicyRequest $body, ?Return_policyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SetReturnPolicyResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves all the return policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
     * @param Return_policyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Return_policyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method creates a new return policy where the policy encapsulates seller's terms for returning items.  <br><br>Each policy targets a specific marketplace, and you can create multiple policies for each marketplace. Return policies are not applicable to motor-vehicle listings.<br><br>A successful request returns the <b>getReturnPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class="tablenote"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href="/api-docs/sell/static/seller-accounts/business-policies.html">eBay business policies</a>.</p>
     * @param ReturnPolicyRequest $body This root container defines a seller's return business policy for a specific marketplace and category group. This type is used when creating or updating a return business policy.
     * @param Return_policyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReturnPolicyRequest $body, ?Return_policyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/return_policy';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Return_policyRequestBuilder
    */
    public function withUrl(string $rawUrl): Return_policyRequestBuilder {
        return new Return_policyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
