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

namespace EBay\AccountManagement\Generated\SellAccountV2;

use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Combined_shipping_rulesRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Payout_settings\Payout_settingsRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Rate_table\Rate_tableRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\User_preferences\User_preferencesRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class SellAccountV2ApiClient extends BaseRequestBuilder 
{
    /**
     * The combined_shipping_rules property
    */
    public function combined_shipping_rules(): Combined_shipping_rulesRequestBuilder {
        return new Combined_shipping_rulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The payout_settings property
    */
    public function payout_settings(): Payout_settingsRequestBuilder {
        return new Payout_settingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rate_table property
    */
    public function rate_table(): Rate_tableRequestBuilder {
        return new Rate_tableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The user_preferences property
    */
    public function user_preferences(): User_preferencesRequestBuilder {
        return new User_preferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SellAccountV2ApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.ebay.com{basePath}');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
