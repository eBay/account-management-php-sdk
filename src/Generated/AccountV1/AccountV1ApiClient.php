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

namespace EBay\AccountManagement\Generated\AccountV1;

use EBay\AccountManagement\Generated\AccountV1\Advertising_eligibility\Advertising_eligibilityRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Bulk_create_or_replace_sales_tax\Bulk_create_or_replace_sales_taxRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Custom_policy\Custom_policyRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Fulfillment_policyRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Kyc\KycRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Payment_policy\Payment_policyRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Payments_program\Payments_programRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Privilege\PrivilegeRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Program\ProgramRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Rate_table\Rate_tableRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Return_policy\Return_policyRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Sales_tax\Sales_taxRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Subscription\SubscriptionRequestBuilder;
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
class AccountV1ApiClient extends BaseRequestBuilder 
{
    /**
     * The advertising_eligibility property
    */
    public function advertising_eligibility(): Advertising_eligibilityRequestBuilder {
        return new Advertising_eligibilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_create_or_replace_sales_tax property
    */
    public function bulk_create_or_replace_sales_tax(): Bulk_create_or_replace_sales_taxRequestBuilder {
        return new Bulk_create_or_replace_sales_taxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The custom_policy property
    */
    public function custom_policy(): Custom_policyRequestBuilder {
        return new Custom_policyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fulfillment_policy property
    */
    public function fulfillment_policy(): Fulfillment_policyRequestBuilder {
        return new Fulfillment_policyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The kyc property
    */
    public function kyc(): KycRequestBuilder {
        return new KycRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The payment_policy property
    */
    public function payment_policy(): Payment_policyRequestBuilder {
        return new Payment_policyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The payments_program property
    */
    public function payments_program(): Payments_programRequestBuilder {
        return new Payments_programRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The privilege property
    */
    public function privilege(): PrivilegeRequestBuilder {
        return new PrivilegeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The program property
    */
    public function program(): ProgramRequestBuilder {
        return new ProgramRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rate_table property
    */
    public function rate_table(): Rate_tableRequestBuilder {
        return new Rate_tableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The return_policy property
    */
    public function return_policy(): Return_policyRequestBuilder {
        return new Return_policyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sales_tax property
    */
    public function sales_tax(): Sales_taxRequestBuilder {
        return new Sales_taxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscription property
    */
    public function subscription(): SubscriptionRequestBuilder {
        return new SubscriptionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AccountV1ApiClient and sets the default values.
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
