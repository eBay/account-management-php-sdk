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

namespace EBay\AccountManagement\Generated\Finances\Order_earnings_summary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Order_earnings_summaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Order_earnings_summaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Order_earnings_summaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Order_earnings_summaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Order_earnings_summaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Order_earnings_summaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Order_earnings_summaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $filter This parameter can be used to filter orders created within a specified date range. The filter uses the <code>orderCreationDate</code> field, which works similarly to the <code>transactionDate</code> filter used by the Transactions API. Currently, <code>orderCreationDate</code> is the only supported filter value.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>All dates must be input using UTC format (<code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>) and should be adjusted accordingly for the local timezone of the user.</span></p><p><b>Default</b>: If no value is specified, results from the past year will be returned.</p> 
     * @return Order_earnings_summaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $filter = null): Order_earnings_summaryRequestBuilderGetQueryParameters {
        return new Order_earnings_summaryRequestBuilderGetQueryParameters($filter);
    }

}
