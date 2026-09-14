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

namespace EBay\AccountManagement\Generated\AccountV2\Rate_table\Item;

use EBay\AccountManagement\Generated\AccountV2\Models\RateTableDetails;
use EBay\AccountManagement\Generated\AccountV2\Rate_table\Item\Update_shipping_cost\Update_shipping_costRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /rate_table/{rate_table_id}
*/
class WithRate_table_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The update_shipping_cost property
    */
    public function update_shipping_cost(): Update_shipping_costRequestBuilder {
        return new Update_shipping_costRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithRate_table_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/rate_table/{rate_table_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves an existing rate table identified by the <b>rate_table_id</b> path parameter.<br><br>Shipping rate tables are currently supported by the following marketplaces: United States, Canada, United Kingdom, Germany, Australia, France, Italy, and Spain. A successful call returns detailed information for the specified shipping rate table.
     * @param WithRate_table_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RateTableDetails|null>
     * @throws Exception
    */
    public function get(?WithRate_table_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [RateTableDetails::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves an existing rate table identified by the <b>rate_table_id</b> path parameter.<br><br>Shipping rate tables are currently supported by the following marketplaces: United States, Canada, United Kingdom, Germany, Australia, France, Italy, and Spain. A successful call returns detailed information for the specified shipping rate table.
     * @param WithRate_table_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithRate_table_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithRate_table_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithRate_table_ItemRequestBuilder {
        return new WithRate_table_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
