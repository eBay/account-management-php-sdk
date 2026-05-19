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

namespace EBay\AccountManagement\Generated\SellAccountV2\User_preferences;

use EBay\AccountManagement\Generated\SellAccountV2\Models\GetUserPreferencesResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /user_preferences
*/
class User_preferencesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new User_preferencesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/user_preferences{?fieldgroups*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the seller's preferences for a specific eBay marketplace, such as combined payment preferences, same-day shipping cutoff time, excluded shipping locations, and opt-in status for Business Policies and Out-of-Stock control. The <b>fieldgroups</b> query parameter specifies the type of seller preferences to retrieve. If <b>fieldgroups</b> = <code>ALL</code> or the parameter is omitted, all the supported seller preferences are returned. To retrieve only specific preferences, include the <b>fieldgroups</b> parameter with one or more supported values, delimited by commas.
     * @param User_preferencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetUserPreferencesResponse|null>
     * @throws Exception
    */
    public function get(?User_preferencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetUserPreferencesResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method is used to modify one or more preferences for a seller on a specific marketplace. The preferences that can be modified include combined payment preferences, same-day shipping cutoff time, and opt-in status for Business Policies and Out-of-stock control. This is a PATCH operation, so you only need to include the fields that correspond to the preferences/settings that you are changing.
     * @param StreamInterface $body The request body
     * @param User_preferencesRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function patch(StreamInterface $body, ?User_preferencesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method retrieves the seller's preferences for a specific eBay marketplace, such as combined payment preferences, same-day shipping cutoff time, excluded shipping locations, and opt-in status for Business Policies and Out-of-Stock control. The <b>fieldgroups</b> query parameter specifies the type of seller preferences to retrieve. If <b>fieldgroups</b> = <code>ALL</code> or the parameter is omitted, all the supported seller preferences are returned. To retrieve only specific preferences, include the <b>fieldgroups</b> parameter with one or more supported values, delimited by commas.
     * @param User_preferencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?User_preferencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method is used to modify one or more preferences for a seller on a specific marketplace. The preferences that can be modified include combined payment preferences, same-day shipping cutoff time, and opt-in status for Business Policies and Out-of-stock control. This is a PATCH operation, so you only need to include the fields that correspond to the preferences/settings that you are changing.
     * @param UntypedNode $body The request body
     * @param User_preferencesRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UntypedNode $body, ?User_preferencesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromScalar($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return User_preferencesRequestBuilder
    */
    public function withUrl(string $rawUrl): User_preferencesRequestBuilder {
        return new User_preferencesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
