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

/**
 * This method returns a summarized view of order earnings information for one or more orders associated with a seller account. The method retrieves aggregated data for order earnings after deducting expenses and refunds from the gross amount. You can use this method for high-level financial reporting workflows.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Expenses include fees, shipping labels, and donations. Refunds include gross refunds, gross claims, and gross payment disputes.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Only charges and credits tied to the order are shown, and they appear in near real time for orders created within the selected order creation time window.</span></p>The response can be filtered by using the <code>filter</code> parameter. This parameter allows consumers to restrict the summary results returned by the method based on supported filtering criteria.<br/><p><span class="tablenote"><b>Note:</b> Access to the <b>order_earnings</b> resource is currently limited to only US, China, or Hong&nbsp;Kong sellers who meet the following criteria and also request access: <br><br>- US sellers with the country of residence set to <code>US</code> and having a payout currency in <code>USD</code>.<br><br>- Hong Kong or China sellers having the country of residence set to <code>HK</code> or <code>CN</code> and the payout currency set to <code>USD</code> have access.<br><br>To request access, submit an <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">application growth check</a> to have the required <a href="#h3-oauth-scope">OAuth scope</a> added to your app. After submission, you can use the same <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">growth check</a> link to track the status of the request. <br><br>eBay plans on expanding this to other markets in the future.</span></p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all Finances API methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong> The Finances API does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span></p>
*/
class Order_earnings_summaryRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $filter This parameter can be used to filter orders created within a specified date range. The filter uses the <code>orderCreationDate</code> field, which works similarly to the <code>transactionDate</code> filter used by the Transactions API. Currently, <code>orderCreationDate</code> is the only supported filter value.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>All dates must be input using UTC format (<code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>) and should be adjusted accordingly for the local timezone of the user.</span></p><p><b>Default</b>: If no value is specified, results from the past year will be returned.</p> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField
    */
    public ?string $filter = null;
    
    /**
     * Instantiates a new Order_earnings_summaryRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter This parameter can be used to filter orders created within a specified date range. The filter uses the <code>orderCreationDate</code> field, which works similarly to the <code>transactionDate</code> filter used by the Transactions API. Currently, <code>orderCreationDate</code> is the only supported filter value.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>All dates must be input using UTC format (<code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>) and should be adjusted accordingly for the local timezone of the user.</span></p><p><b>Default</b>: If no value is specified, results from the past year will be returned.</p> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField
    */
    public function __construct(?string $filter = null) {
        $this->filter = $filter;
    }

}
