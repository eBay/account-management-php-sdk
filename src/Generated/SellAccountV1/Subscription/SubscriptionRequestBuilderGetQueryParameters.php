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

namespace EBay\AccountManagement\Generated\SellAccountV1\Subscription;

/**
 * This method retrieves a list of subscriptions associated with the seller account.
*/
class SubscriptionRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("continuation_token")
     * @var string|null $continuationToken This field is for future use.
    */
    public ?string $continuationToken = null;
    
    /**
     * @var string|null $limit This field is for future use.
    */
    public ?string $limit = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $continuation_token This field is for future use.
     * @param string|null $limit This field is for future use.
    */
    public function __construct(?string $continuation_token = null, ?string $limit = null) {
        $this->continuationToken = $continuation_token;
        $this->limit = $limit;
    }

}
