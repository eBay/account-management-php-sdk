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

namespace EBay\AccountManagement\Generated\SellFinancesV1\Payout;

use EBay\AccountManagement\Generated\SellFinancesV1\Models\Payouts;
use EBay\AccountManagement\Generated\SellFinancesV1\Payout\Item\WithPayout_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payout
*/
class PayoutRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellFinancesV1.payout.item collection
     * @param string $payout_Id This path parameter is used to specify the unique identifier of the payout being retrieved. <br><br>Use the <a href="/api-docs/sell/finances/resources/payout/methods/getPayouts" target="_blank ">getPayouts</a> method to retrieve payout IDs, or check Seller Hub to get the payout ID. 
     * @return WithPayout_ItemRequestBuilder
    */
    public function byPayout_Id(string $payout_Id): WithPayout_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['payout_Id'] = $payout_Id;
        return new WithPayout_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PayoutRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payout{?filter*,limit*,offset*,sort*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all <b>Finances API</b> methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis " target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><span class="tablenote"><b>Note:</b>  The <b>Finances API</b> does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span><br>This method is used to retrieve the details of one or more seller payouts. By using the <b>filter</b> query parameter, users can retrieve payouts processed within a specific date range, and/or they can retrieve payouts in a specific state.<br><br>There are also pagination and sort query parameters that allow users to control the payouts that are returned in the response.<br><br>If no payouts match the input criteria, an empty payload is returned.<br><br>For split-payout cases, which are <b>only</b> available to sellers in mainland China, this method will return the <b>payoutPercentage</b> for the specified payout. This value indicates the current payout percentage allocated to a payout instrument. This method will also return the <b>convertedToCurrency</b> and <b>convertedTo</b> response fields set to CNY value and the <b>payoutReference</b>, the unique identifier reference (not true payout). <br><br>By using the <b>filter</b> query parameter, users can retrieve the two true(actual) payouts associated with a <b>payoutReference</b>.<br><br><span class="tablenote"><b>Note:</b> For more information on split payouts, see <a href="/api-docs/split-payout/playbook.html" target="_blank">Mainland China Split Payout Playbook</a>.</span> <br><br><b>Note:</b> Only payouts less than 5 years in the past can be retrieved.
     * @param PayoutRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Payouts|null>
     * @throws Exception
    */
    public function get(?PayoutRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Payouts::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all <b>Finances API</b> methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis " target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><span class="tablenote"><b>Note:</b>  The <b>Finances API</b> does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span><br>This method is used to retrieve the details of one or more seller payouts. By using the <b>filter</b> query parameter, users can retrieve payouts processed within a specific date range, and/or they can retrieve payouts in a specific state.<br><br>There are also pagination and sort query parameters that allow users to control the payouts that are returned in the response.<br><br>If no payouts match the input criteria, an empty payload is returned.<br><br>For split-payout cases, which are <b>only</b> available to sellers in mainland China, this method will return the <b>payoutPercentage</b> for the specified payout. This value indicates the current payout percentage allocated to a payout instrument. This method will also return the <b>convertedToCurrency</b> and <b>convertedTo</b> response fields set to CNY value and the <b>payoutReference</b>, the unique identifier reference (not true payout). <br><br>By using the <b>filter</b> query parameter, users can retrieve the two true(actual) payouts associated with a <b>payoutReference</b>.<br><br><span class="tablenote"><b>Note:</b> For more information on split payouts, see <a href="/api-docs/split-payout/playbook.html" target="_blank">Mainland China Split Payout Playbook</a>.</span> <br><br><b>Note:</b> Only payouts less than 5 years in the past can be retrieved.
     * @param PayoutRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PayoutRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PayoutRequestBuilder
    */
    public function withUrl(string $rawUrl): PayoutRequestBuilder {
        return new PayoutRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
