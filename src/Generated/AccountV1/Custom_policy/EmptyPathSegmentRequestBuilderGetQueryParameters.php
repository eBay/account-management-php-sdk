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

namespace EBay\AccountManagement\Generated\AccountV1\Custom_policy;

/**
 * This method retrieves the list of custom policies defined for a seller's account. To limit the returned custom policies, specify the <b>policy_types</b> query parameter.
*/
class EmptyPathSegmentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("policy_types")
     * @var string|null $policyTypes This query parameter specifies the type of custom policies to be returned.<br><br>Multiple policy types may be requested in a single call by providing a comma-delimited set of all policy types to be returned.<br><br><span class="tablenote"><strong>Note:</strong> Omitting this query parameter from a request will also return policies of all policy types.</span><br> See the <a href="/api-docs/sell/account/types/api:CustomPolicyTypeEnum" target="_blank ">CustomPolicyTypeEnum</a> type for a list of supported values.
    */
    public ?string $policyTypes = null;
    
    /**
     * Instantiates a new EmptyPathSegmentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $policy_types This query parameter specifies the type of custom policies to be returned.<br><br>Multiple policy types may be requested in a single call by providing a comma-delimited set of all policy types to be returned.<br><br><span class="tablenote"><strong>Note:</strong> Omitting this query parameter from a request will also return policies of all policy types.</span><br> See the <a href="/api-docs/sell/account/types/api:CustomPolicyTypeEnum" target="_blank ">CustomPolicyTypeEnum</a> type for a list of supported values.
    */
    public function __construct(?string $policy_types = null) {
        $this->policyTypes = $policy_types;
    }

}
