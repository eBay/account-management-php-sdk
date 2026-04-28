<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Billing_activity;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Billing_activityRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Billing_activityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Billing_activityRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Billing_activityRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Billing_activityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Billing_activityRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Billing_activityRequestBuilderGetQueryParameters.
     * @param string|null $filter This required field specifies which results to return in the response. Only one of the following four filter values must be used. A user can either retrieve all billing activity within a date range, or they can retrieve billing activity related to a specific eBay order, eBay listing, or they can retrieve information on a specific billing activity.<br /><ul><li><b>activityId</b>: If this filter is used, only information on a specific billing activity is returned. The <a href="#response.billingActivities.billingTransactionId">billingTransactionId</a> returned in the response can be used as the <b>activityId</b>.</li><li><b>listingId</b>: If this filter is used, only billing activity associated with the specified listing is returned.</li><li><b>orderId</b>: If this filter is used, only billing activity associated with the specified order is returned.</li><li><b>transactionDate</b>: If a date range filter is used, only billing activity that occurred within the specified date range is returned. The starting date cannot be set back further than 120 days in the past. Use UTC date values in the following order: <code>[<em>start</em>..<em>end</em>]</code></li></ul><br /><b>Examples</b><br /><br />IDs:<br /> <code>filter=activityID:{12**56}</code><br /><br />Date range:<br />  <code>filter=transactionDate:[2025-10-01T00:00:00Z..2025-10-31T23:59:59Z]</code> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField
     * @param string|null $limit Sets the maximum number of records to return per page of data.<br><p>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, with offset set to <code>20</code> and limit set to <code>10</code>, the call retrieves entries 21 through 30 from the result set.</p><p>Although this field is optional, if omitted the default value of <code>100</code> is used.</p><br> <b>Minimum:</b> <code>1</code><br><b>Maximum:</b> <code>200</code><br><b>Default:</b> <code>100</code>
     * @param string|null $offset Specifies the number of records to skip in the result set. This is used with the <code>limit</code> field to control the pagination of the output. For example:<br><ul><li>If <b>offset</b> is <code>0</code> and <b>limit</b> is <code>10</code>, the method will retrieve records 1-10 from the list of records returned</li><li>If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the method will retrieve records 11-20 from the list of records returned.</li></ul><p>If this parameter is not set, its value defaults to <code>0</code> which returns the first page of records.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This feature employs a zero-based list, where the first activity in the list has an offset of 0.</span></p><p><b>Default:</b> <code>0</code> (zero, returns the first page)</p>
     * @param string|null $sort By default, transactions that match the input criteria are sorted in descending order according to the transaction date (most recent transactions returned first).<br><br>To view transactions in ascending order instead (oldest transactions first), include the <b>sort</b> query parameter and set its value to <code>sort=transactionDate</code>. For example (ascending order):<br><br><code>filter=transactionDate:[2025-11-01T00:00:01.000Z..2025-11-12T00:00:01.000Z]&sort=transactionDate</code><br><br>Transactions can only be sorted according to transaction date. If omitted, defaults to descending order (most recent transactions returned first). For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:SortField
     * @return Billing_activityRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null): Billing_activityRequestBuilderGetQueryParameters {
        return new Billing_activityRequestBuilderGetQueryParameters($filter, $limit, $offset, $sort);
    }

}
