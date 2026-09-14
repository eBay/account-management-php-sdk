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

namespace EBay\AccountManagement\Generated\Finances\Order_earnings;

/**
 * This method returns detailed order-level financial data for each order associated with a seller account. The returned order-level financial data includes order earnings, gross amount, expenses, and refunds. Order earnings includes earnings after deducting expenses and refunds from the gross amount. <br><br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Expenses include fees, shipping labels, and donations. Refunds include gross refunds, gross claims, and gross payment disputes.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Only charges and credits tied to the order are shown, and they appear in near real time for orders created within the selected order creation time window.</span></p>The financial data for orders will be returned as filtered based on the order's creation date. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Only charges and credits tied to the order are shown, and they appear in near real time for orders created within the selected order creation time window.</span></p>Pagination is supported through the <code>limit</code> and <code>offset</code> parameters. These parameters can be used to control the number of records returned in a single response and to retrieve subsequent pages of results when the result set spans multiple pages.<br/><br/>The response can be filtered by using the <code>filter</code> parameter. This parameter allows consumers to restrict the results returned by the method based on supported filtering criteria.<br/><p><span class="tablenote"><b>Note:</b> Access to the <b>order_earnings</b> resource is currently limited to only US, China, or Hong&nbsp;Kong sellers who meet the following criteria and also request access: <br><br>- US sellers with the country of residence set to <code>US</code> and having a payout currency in <code>USD</code>.<br><br>- Hong Kong or China sellers having the country of residence set to <code>HK</code> or <code>CN</code> and the payout currency set to <code>USD</code> have access.<br><br>To request access, submit an <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">application growth check</a> to have the required <a href="#h3-oauth-scope">OAuth scope</a> added to your app. After submission, you can use the same <a href="/api-docs/static/gs_request-an-application-growth.html" target="_blank">growth check</a> link to track the status of the request. <br><br>eBay plans on expanding this to other markets in the future.</span></p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all Finances API methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong> The Finances API does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span></p>
*/
class Order_earningsRequestBuilderGetQueryParameters 
{
    /**
     * @var array<string>|null $filter This parameter can be used to filter orders created within a specified date range. The filter uses the <code>orderCreationDate</code> field, which works similarly to the <code>transactionDate</code> filter used by the Transactions API. Currently, <code>orderCreationDate</code> is the only supported filter value. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>All dates must be input using UTC format (<code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>) and should be adjusted accordingly for the local timezone of the user.</span></p><p><b>Default</b>: If no value is specified, results from the past year will be returned.</p>
    */
    public ?array $filter = null;
    
    /**
     * @var int|null $limit This parameter configures the number of orders to return per page of the result set. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. <br><br> For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the method retrieves orders 11 thru 20 from the result set. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first page in the results set has an offset value of <code>0</code>. </span><br> <b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
    */
    public ?int $limit = null;
    
    /**
     * @var int|null $offset This parameter can be used to specify the number of records to skip before returning results. This parameter is commonly used with the <code>limit</code> parameter to retrieve the next page of results.<br><br><b>Maximum:</b> 10,000<br><b>Default:</b> 0
    */
    public ?int $offset = null;
    
    /**
     * @var array<string>|null $sort Sort order for a collection of resources. Available value: orderCreationDate For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/sqa:SortField
    */
    public ?array $sort = null;
    
    /**
     * Instantiates a new Order_earningsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $filter This parameter can be used to filter orders created within a specified date range. The filter uses the <code>orderCreationDate</code> field, which works similarly to the <code>transactionDate</code> filter used by the Transactions API. Currently, <code>orderCreationDate</code> is the only supported filter value. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>All dates must be input using UTC format (<code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>) and should be adjusted accordingly for the local timezone of the user.</span></p><p><b>Default</b>: If no value is specified, results from the past year will be returned.</p>
     * @param int|null $limit This parameter configures the number of orders to return per page of the result set. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. <br><br> For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the method retrieves orders 11 thru 20 from the result set. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first page in the results set has an offset value of <code>0</code>. </span><br> <b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
     * @param int|null $offset This parameter can be used to specify the number of records to skip before returning results. This parameter is commonly used with the <code>limit</code> parameter to retrieve the next page of results.<br><br><b>Maximum:</b> 10,000<br><b>Default:</b> 0
     * @param array<string>|null $sort Sort order for a collection of resources. Available value: orderCreationDate For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/sqa:SortField
    */
    public function __construct(?array $filter = null, ?int $limit = null, ?int $offset = null, ?array $sort = null) {
        $this->filter = $filter;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->sort = $sort;
    }

}
