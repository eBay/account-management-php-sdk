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

namespace EBay\AccountManagement\Generated\Finances\Payout;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PayoutRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PayoutRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PayoutRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PayoutRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PayoutRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PayoutRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PayoutRequestBuilderGetQueryParameters.
     * @param array<string>|null $filter The filter types that can be used here are discussed below. If none of these filters are used, all payouts in all states from within the last five years are returned:<br><ul><li><b>payoutDate</b>: search for payouts within a specific range of dates. The date format to use is <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. Below is the proper syntax to use if filtering by a date range: <br><br><code>https://apiz.ebay.com/sell/finances/v1/payout?filter=payoutDate:[2024-12-17T00:00:01.000Z..2024-12-24T00:00:01.000Z]</code><br><br>Only payouts from the last five years can be retrieved, so make sure the starting date is less than five years in the past from the present time. Also, the maximum date range that can be specified through this date filter is 36 months, so make sure your specified date range is no more than 36 months.</li><li><b>lastAttemptedPayoutDate</b>: search for attempted payouts that failed within a specific range of dates. In order to use this filter, the <b>payoutStatus</b> filter must also be used and its value must be set to <code>RETRYABLE_FAILED</code>. The date format to use is <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. The same syntax and requirements applicable to the <b>payoutDate</b> filter also apply to the <b>lastAttemptedPayoutDate</b> filter. <br><br>This filter is only applicable (and will return results) if one or more seller payouts have failed, but are retryable.</li> <li><b>payoutStatus</b>: search for payouts in a particular state. Only one payout state can be specified with this filter. For supported <b>payoutStatus</b> values, see <a href="/develop/api/sell/finances_api#sell-finances_api-payout-getpayouts.payoutstatusenum">PayoutStatusEnum</a>.<br><br>Below is the proper syntax to use if filtering by payout status: <br><br><code>https://apiz.ebay.com/sell/finances/v1/payout?filter=payoutStatus:{SUCCEEDED}</code></li><li><b>payoutReference</b>: returns  the two true (actual) payouts associated with the payoutReference id. This parameter can support up to 200 <b>payoutReference</b> inputs. This filter is <b>only</b> supported for mainland China sellers. Below is the proper syntax to use if filtering by a specific <b>payoutReference</b>:<br><br><code>https://apiz.ebay.com/sell/finances/v1/payout?filter=payoutReference:{5********3}</code></li></ul><br>If both the <b>payoutDate</b> and <b>payoutStatus</b> filters are used, payouts must satisfy both criteria to be returned.
     * @param int|null $limit The number of payouts to return per page of the result set. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. <br><br> For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the method retrieves payouts 11 thru 20 from the result set. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first payout in the results set has an offset value of <code>0</code>. </span> <br><br> <b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
     * @param int|null $offset This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the method retrieves payouts 31 thru 40 from the resulting collection of payouts.<br><br>To avoid poor response time, use <b>offset</b> values of less than <code>5000</code>.<br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first payout in the results set has an offset value of <code>0</code>.</span><br><br><b>Default:</b> <code>0</code> (zero)
     * @param array<string>|null $sort By default, payouts or failed payouts that match the input criteria are sorted in descending order according to the payout date/last attempted payout date (i.e., most recent payouts returned first).<br><br>To view payouts in ascending order instead (i.e., oldest payouts/attempted payouts first,) you would include the <b>sort</b> query parameter, and then set the value of its <b>field</b> parameter to <code>payoutDate</code> or <code>lastAttemptedPayoutDate</code> (if searching for failed, retryable payouts). Below is the proper syntax to use if filtering by a payout date range in ascending order:<br><br><code>https://apiz.ebay.com/sell/finances/v1/payout?filter=payoutDate:[2018-12-17T00:00:01.000Z..2018-12-24T00:00:01.000Z]&sort=payoutDate</code><br><br>Payouts can only be sorted according to payout date, and can not be sorted by payout status.
     * @return PayoutRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $filter = null, ?int $limit = null, ?int $offset = null, ?array $sort = null): PayoutRequestBuilderGetQueryParameters {
        return new PayoutRequestBuilderGetQueryParameters($filter, $limit, $offset, $sort);
    }

}
