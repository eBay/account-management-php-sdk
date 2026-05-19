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

namespace EBay\AccountManagement\Generated\SellFinancesV1\Order_earnings_summary;

use EBay\AccountManagement\Generated\SellFinancesV1\Models\OrderEarningsSummary;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /order_earnings_summary
*/
class Order_earnings_summaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Order_earnings_summaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/order_earnings_summary{?filter*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns a summarized view of order earnings information for one or more orders associated with a seller account. The method retrieves aggregated data for order earnings after deducting expenses and refunds from the gross amount. You can use this method for high-level financial reporting workflows.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Expenses include fees, shipping labels, and donations. Refunds include gross refunds, gross claims, and gross payment disputes.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Only charges and credits tied to the order are shown, and they appear in near real time for orders created within the selected order creation time window.</span></p>The response can be filtered by using the <code>filter</code> parameter. This parameter allows consumers to restrict the summary results returned by the method based on supported filtering criteria.<br/><p><span class="tablenote"><b>Note:</b> Access to the <b>order_earnings</b> resource is currently limited to only US, China, or Hong&nbsp;Kong sellers who meet the following criteria and also request access: <br><br>- US sellers with the country of residence set to <code>US</code> and having a payout currency in <code>USD</code>.<br><br>- Hong Kong or China sellers having the country of residence set to <code>HK</code> or <code>CN</code> and the payout currency set to <code>USD</code> have access.<br><br>To request access, submit an <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">application growth check</a> to have the required <a href="#h3-oauth-scope">OAuth scope</a> added to your app. After submission, you can use the same <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">growth check</a> link to track the status of the request. <br><br>eBay plans on expanding this to other markets in the future.</span></p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all Finances API methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong> The Finances API does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span></p>
     * @param Order_earnings_summaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OrderEarningsSummary|null>
     * @throws Exception
    */
    public function get(?Order_earnings_summaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [OrderEarningsSummary::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method returns a summarized view of order earnings information for one or more orders associated with a seller account. The method retrieves aggregated data for order earnings after deducting expenses and refunds from the gross amount. You can use this method for high-level financial reporting workflows.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Expenses include fees, shipping labels, and donations. Refunds include gross refunds, gross claims, and gross payment disputes.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Only charges and credits tied to the order are shown, and they appear in near real time for orders created within the selected order creation time window.</span></p>The response can be filtered by using the <code>filter</code> parameter. This parameter allows consumers to restrict the summary results returned by the method based on supported filtering criteria.<br/><p><span class="tablenote"><b>Note:</b> Access to the <b>order_earnings</b> resource is currently limited to only US, China, or Hong&nbsp;Kong sellers who meet the following criteria and also request access: <br><br>- US sellers with the country of residence set to <code>US</code> and having a payout currency in <code>USD</code>.<br><br>- Hong Kong or China sellers having the country of residence set to <code>HK</code> or <code>CN</code> and the payout currency set to <code>USD</code> have access.<br><br>To request access, submit an <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">application growth check</a> to have the required <a href="#h3-oauth-scope">OAuth scope</a> added to your app. After submission, you can use the same <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">growth check</a> link to track the status of the request. <br><br>eBay plans on expanding this to other markets in the future.</span></p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all Finances API methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong> The Finances API does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span></p>
     * @param Order_earnings_summaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Order_earnings_summaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Order_earnings_summaryRequestBuilder
    */
    public function withUrl(string $rawUrl): Order_earnings_summaryRequestBuilder {
        return new Order_earnings_summaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
