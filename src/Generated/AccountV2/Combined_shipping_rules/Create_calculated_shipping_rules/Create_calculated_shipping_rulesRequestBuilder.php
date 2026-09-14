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

namespace EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Create_calculated_shipping_rules;

use EBay\AccountManagement\Generated\AccountV2\Models\CreateCalculatedShippingRulesRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /combined_shipping_rules/create_calculated_shipping_rules
*/
class Create_calculated_shipping_rulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Create_calculated_shipping_rulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/combined_shipping_rules/create_calculated_shipping_rules');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method creates or registers calculated shipping rules that determine combined shipping costs based on weight, item count, or cost parameters for an authenticated seller. <br><br> This shipping rule will apply to eBay listings that use the calculated shipping model.
     * @param CreateCalculatedShippingRulesRequest $body This type is used to define and configure calculated combined shipping and handling rules and/or change the combined payment duration.
     * @param Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(CreateCalculatedShippingRulesRequest $body, ?Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method creates or registers calculated shipping rules that determine combined shipping costs based on weight, item count, or cost parameters for an authenticated seller. <br><br> This shipping rule will apply to eBay listings that use the calculated shipping model.
     * @param CreateCalculatedShippingRulesRequest $body This type is used to define and configure calculated combined shipping and handling rules and/or change the combined payment duration.
     * @param Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateCalculatedShippingRulesRequest $body, ?Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * @return Create_calculated_shipping_rulesRequestBuilder
    */
    public function withUrl(string $rawUrl): Create_calculated_shipping_rulesRequestBuilder {
        return new Create_calculated_shipping_rulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
