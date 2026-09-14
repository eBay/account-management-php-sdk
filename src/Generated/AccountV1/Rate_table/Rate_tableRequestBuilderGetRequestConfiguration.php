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

namespace EBay\AccountManagement\Generated\AccountV1\Rate_table;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Rate_tableRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Rate_tableRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Rate_tableRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Rate_tableRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Rate_tableRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Rate_tableRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Rate_tableRequestBuilderGetQueryParameters.
     * @param string|null $country_code This query parameter specifies the two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code of country for which you want shipping rate table information. If you do not specify a country code, the request returns all of the seller's defined shipping rate tables for all eBay marketplaces. For implementation help, refer to eBay API documentation at https://developer.ebay.com/develop/api/sell/account_api_v1#sell-account_api_v1-rate_table-getratetables.countrycodeenum
     * @return Rate_tableRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $country_code = null): Rate_tableRequestBuilderGetQueryParameters {
        return new Rate_tableRequestBuilderGetQueryParameters($country_code);
    }

}
