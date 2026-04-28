<?php

namespace EBay\AccountManagement\Generated\SellAccountV1;

use EBay\AccountManagement\Generated\SellAccountV1\Advertising_eligibility\Advertising_eligibilityRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Bulk_create_or_replace_sales_tax\Bulk_create_or_replace_sales_taxRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Custom_policy\Custom_policyRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Fulfillment_policyRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Kyc\KycRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Payment_policyRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Payments_program\Payments_programRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Privilege\PrivilegeRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Program\ProgramRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Rate_table\Rate_tableRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Return_policyRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Sales_tax\Sales_taxRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Subscription\SubscriptionRequestBuilder;
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
class SellAccountV1ApiClient extends BaseRequestBuilder 
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
     * Instantiates a new SellAccountV1ApiClient and sets the default values.
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
