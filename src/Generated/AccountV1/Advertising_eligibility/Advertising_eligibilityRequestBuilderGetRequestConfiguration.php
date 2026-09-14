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

namespace EBay\AccountManagement\Generated\AccountV1\Advertising_eligibility;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Advertising_eligibilityRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Advertising_eligibilityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Advertising_eligibilityRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Advertising_eligibilityRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Advertising_eligibilityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Advertising_eligibilityRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Advertising_eligibilityRequestBuilderGetQueryParameters.
     * @param string|null $program_types A comma-separated list of eBay advertising programs for which eligibility status will be returned.<br><br> See the <a href="/api-docs/sell/account/types/plser:AdvertisingProgramEnum" target="_blank"> AdvertisingProgramEnum</a> type for a list of supported values.<br><br>If no programs are specified, the results will be returned for all programs.
     * @return Advertising_eligibilityRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $program_types = null): Advertising_eligibilityRequestBuilderGetQueryParameters {
        return new Advertising_eligibilityRequestBuilderGetQueryParameters($program_types);
    }

}
