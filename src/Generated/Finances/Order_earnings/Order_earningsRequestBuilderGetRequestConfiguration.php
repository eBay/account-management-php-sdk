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

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Order_earningsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Order_earningsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Order_earningsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Order_earningsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Order_earningsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Order_earningsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Order_earningsRequestBuilderGetQueryParameters.
     * @param array<string>|null $filter This parameter can be used to filter orders created within a specified date range. The filter uses the <code>orderCreationDate</code> field, which works similarly to the <code>transactionDate</code> filter used by the Transactions API. Currently, <code>orderCreationDate</code> is the only supported filter value. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>All dates must be input using UTC format (<code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>) and should be adjusted accordingly for the local timezone of the user.</span></p><p><b>Default</b>: If no value is specified, results from the past year will be returned.</p>
     * @param int|null $limit This parameter configures the number of orders to return per page of the result set. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. <br><br> For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the method retrieves orders 11 thru 20 from the result set. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first page in the results set has an offset value of <code>0</code>. </span><br> <b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
     * @param int|null $offset This parameter can be used to specify the number of records to skip before returning results. This parameter is commonly used with the <code>limit</code> parameter to retrieve the next page of results.<br><br><b>Maximum:</b> 10,000<br><b>Default:</b> 0
     * @param array<string>|null $sort Sort order for a collection of resources. Available value: orderCreationDate For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/sqa:SortField
     * @return Order_earningsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $filter = null, ?int $limit = null, ?int $offset = null, ?array $sort = null): Order_earningsRequestBuilderGetQueryParameters {
        return new Order_earningsRequestBuilderGetQueryParameters($filter, $limit, $offset, $sort);
    }

}
