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

namespace EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Update_combined_payments;

use EBay\AccountManagement\Generated\AccountV2\Models\Error;
use EBay\AccountManagement\Generated\AccountV2\Models\UpdateCombinedPaymentsRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /combined_shipping_rules/update_combined_payments
*/
class Update_combined_paymentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Update_combined_paymentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/combined_shipping_rules/update_combined_payments');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method configures or modifies combined payment settings that determine how unpaid orders can be merged for a single invoice within a defined duration for the seller.
     * @param UpdateCombinedPaymentsRequest $body This type is used for updating combined-payment settings. <br><br>It defines how multiple unpaid orders from the same buyer are combined into a single payment, including configuration parameters such as eligible duration, order-merge criteria, and marketplace context.
     * @param Update_combined_paymentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(UpdateCombinedPaymentsRequest $body, ?Update_combined_paymentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method configures or modifies combined payment settings that determine how unpaid orders can be merged for a single invoice within a defined duration for the seller.
     * @param UpdateCombinedPaymentsRequest $body This type is used for updating combined-payment settings. <br><br>It defines how multiple unpaid orders from the same buyer are combined into a single payment, including configuration parameters such as eligible duration, order-merge criteria, and marketplace context.
     * @param Update_combined_paymentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateCombinedPaymentsRequest $body, ?Update_combined_paymentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Update_combined_paymentsRequestBuilder
    */
    public function withUrl(string $rawUrl): Update_combined_paymentsRequestBuilder {
        return new Update_combined_paymentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
