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

namespace EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Item;

use EBay\AccountManagement\Generated\AccountV1\Models\Error;
use EBay\AccountManagement\Generated\AccountV1\Models\FulfillmentPolicy;
use EBay\AccountManagement\Generated\AccountV1\Models\FulfillmentPolicyRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\SetFulfillmentPolicyResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /fulfillment_policy/{fulfillmentPolicyId}
*/
class WithFulfillmentPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithFulfillmentPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/fulfillment_policy/{fulfillmentPolicyId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method deletes a fulfillment policy. Supply the ID of the policy you want to delete in the <b>fulfillmentPolicyId</b> path parameter.
     * @param WithFulfillmentPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithFulfillmentPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method retrieves the complete details of a fulfillment policy. Supply the ID of the policy you want to retrieve using the <b>fulfillmentPolicyId</b> path parameter.
     * @param WithFulfillmentPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FulfillmentPolicy|null>
     * @throws Exception
    */
    public function get(?WithFulfillmentPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FulfillmentPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method updates an existing fulfillment policy. Specify the policy you want to update using the <b>fulfillment_policy_id</b> path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.
     * @param FulfillmentPolicyRequest $body This root container defines a seller's fulfillment policy for a specific marketplace and category group. This type is used when creating or updating a fulfillment business policy.
     * @param WithFulfillmentPolicyItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SetFulfillmentPolicyResponse|null>
     * @throws Exception
    */
    public function put(FulfillmentPolicyRequest $body, ?WithFulfillmentPolicyItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SetFulfillmentPolicyResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method deletes a fulfillment policy. Supply the ID of the policy you want to delete in the <b>fulfillmentPolicyId</b> path parameter.
     * @param WithFulfillmentPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithFulfillmentPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method retrieves the complete details of a fulfillment policy. Supply the ID of the policy you want to retrieve using the <b>fulfillmentPolicyId</b> path parameter.
     * @param WithFulfillmentPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithFulfillmentPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method updates an existing fulfillment policy. Specify the policy you want to update using the <b>fulfillment_policy_id</b> path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.
     * @param FulfillmentPolicyRequest $body This root container defines a seller's fulfillment policy for a specific marketplace and category group. This type is used when creating or updating a fulfillment business policy.
     * @param WithFulfillmentPolicyItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(FulfillmentPolicyRequest $body, ?WithFulfillmentPolicyItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return WithFulfillmentPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithFulfillmentPolicyItemRequestBuilder {
        return new WithFulfillmentPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
