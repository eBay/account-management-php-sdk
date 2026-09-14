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

namespace EBay\AccountManagement\Generated\AccountV2\Rate_table\Item\Update_shipping_cost;

use EBay\AccountManagement\Generated\AccountV2\Models\RateTableUpdate;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /rate_table/{rate_table_id}/update_shipping_cost
*/
class Update_shipping_costRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Update_shipping_costRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/rate_table/{rate_table_id}/update_shipping_cost');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows sellers to update <b>shippingCost</b> and/or <b>additionalCost</b> information for an existing shipping rate table identified by the <b>rate_table_id</b> path parameter.<br><br>A successful call returns an HTTP status code of <b>204 No Content</b>.
     * @param RateTableUpdate $body This type is used by the request payload of the <b>updateShippingCost</b> method to pass updated shipping cost information for a rate table identified by <b>rateTableId</b>.
     * @param Update_shipping_costRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(RateTableUpdate $body, ?Update_shipping_costRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method allows sellers to update <b>shippingCost</b> and/or <b>additionalCost</b> information for an existing shipping rate table identified by the <b>rate_table_id</b> path parameter.<br><br>A successful call returns an HTTP status code of <b>204 No Content</b>.
     * @param RateTableUpdate $body This type is used by the request payload of the <b>updateShippingCost</b> method to pass updated shipping cost information for a rate table identified by <b>rateTableId</b>.
     * @param Update_shipping_costRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RateTableUpdate $body, ?Update_shipping_costRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Update_shipping_costRequestBuilder
    */
    public function withUrl(string $rawUrl): Update_shipping_costRequestBuilder {
        return new Update_shipping_costRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
