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

namespace EBay\AccountManagement\Generated\Finances;

use EBay\AccountManagement\Generated\Finances\Billing_activity\Billing_activityRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Order_earnings_summary\Order_earnings_summaryRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Order_earnings\Order_earningsRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Payout_summary\Payout_summaryRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Payout\PayoutRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Seller_funds_summary\Seller_funds_summaryRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Transaction_summary\Transaction_summaryRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Transaction\TransactionRequestBuilder;
use EBay\AccountManagement\Generated\Finances\Transfer\TransferRequestBuilder;
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
class FinancesApiClient extends BaseRequestBuilder 
{
    /**
     * The billing_activity property
    */
    public function billing_activity(): Billing_activityRequestBuilder {
        return new Billing_activityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The order_earnings property
    */
    public function order_earnings(): Order_earningsRequestBuilder {
        return new Order_earningsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The order_earnings_summary property
    */
    public function order_earnings_summary(): Order_earnings_summaryRequestBuilder {
        return new Order_earnings_summaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The payout property
    */
    public function payout(): PayoutRequestBuilder {
        return new PayoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The payout_summary property
    */
    public function payout_summary(): Payout_summaryRequestBuilder {
        return new Payout_summaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The seller_funds_summary property
    */
    public function seller_funds_summary(): Seller_funds_summaryRequestBuilder {
        return new Seller_funds_summaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transaction property
    */
    public function transaction(): TransactionRequestBuilder {
        return new TransactionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transaction_summary property
    */
    public function transaction_summary(): Transaction_summaryRequestBuilder {
        return new Transaction_summaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transfer property
    */
    public function transfer(): TransferRequestBuilder {
        return new TransferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new FinancesApiClient and sets the default values.
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
            $this->requestAdapter->setBaseUrl('https://apiz.ebay.com{basePath}');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
