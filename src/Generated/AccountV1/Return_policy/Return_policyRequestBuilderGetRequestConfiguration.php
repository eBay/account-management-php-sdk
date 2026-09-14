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

namespace EBay\AccountManagement\Generated\AccountV1\Return_policy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Return_policyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Return_policyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Return_policyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Return_policyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Return_policyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Return_policyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Return_policyRequestBuilderGetQueryParameters.
     * @param string|null $marketplace_id This query parameter specifies the ID of the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     * @return Return_policyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $marketplace_id = null): Return_policyRequestBuilderGetQueryParameters {
        return new Return_policyRequestBuilderGetQueryParameters($marketplace_id);
    }

}
