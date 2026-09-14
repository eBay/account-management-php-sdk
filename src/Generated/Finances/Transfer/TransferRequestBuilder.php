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

namespace EBay\AccountManagement\Generated\Finances\Transfer;

use EBay\AccountManagement\Generated\Finances\Transfer\Item\Transfer_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /transfer
*/
class TransferRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AccountManagement/Generated/Finances.transfer.item collection
     * @param string $transfer_Id This path parameter is used to specify the unique identifier of the <code>TRANSFER</code> transaction type you wish to retrieve.<br><br>Use the <a href="/develop/api/sell/finances_api#sell-finances_api-transaction-gettransactions">getTransactions</a> method to retrieve this value by setting the <b>transactionType</b> filter to <code>TRANSFER</code>. The <b>transfer_id</b> value will then be returned in the <b>transaction_id</b> field of the response.
     * @return Transfer_ItemRequestBuilder
    */
    public function byTransfer_Id(string $transfer_Id): Transfer_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['transfer_%2Did'] = $transfer_Id;
        return new Transfer_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TransferRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/transfer');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
