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

namespace EBay\AccountManagement\Generated\SellAccountV1\Payments_program;

use EBay\AccountManagement\Generated\SellAccountV1\Payments_program\Item\WithMarketplace_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /payments_program
*/
class Payments_programRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellAccountV1.payments_program.item collection
     * @param string $marketplace_id This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller's status.
     * @return WithMarketplace_ItemRequestBuilder
    */
    public function byMarketplace_id(string $marketplace_id): WithMarketplace_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['marketplace_id'] = $marketplace_id;
        return new WithMarketplace_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Payments_programRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payments_program');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
