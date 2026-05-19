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

namespace EBay\AccountManagement\Generated\SellAccountV1\Advertising_eligibility;

/**
 * This method allows developers to check the seller eligibility status for eBay advertising programs.
*/
class Advertising_eligibilityRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("program_types")
     * @var string|null $programTypes A comma-separated list of eBay advertising programs for which eligibility status will be returned.<br><br> See the <a href="/api-docs/sell/account/types/plser:AdvertisingProgramEnum" target="_blank"> AdvertisingProgramEnum</a> type for a list of supported values.<br><br>If no programs are specified, the results will be returned for all programs.
    */
    public ?string $programTypes = null;
    
    /**
     * Instantiates a new Advertising_eligibilityRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $program_types A comma-separated list of eBay advertising programs for which eligibility status will be returned.<br><br> See the <a href="/api-docs/sell/account/types/plser:AdvertisingProgramEnum" target="_blank"> AdvertisingProgramEnum</a> type for a list of supported values.<br><br>If no programs are specified, the results will be returned for all programs.
    */
    public function __construct(?string $program_types = null) {
        $this->programTypes = $program_types;
    }

}
