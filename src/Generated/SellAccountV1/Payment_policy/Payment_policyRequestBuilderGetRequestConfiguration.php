<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Payment_policy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Payment_policyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Payment_policyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Payment_policyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Payment_policyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Payment_policyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Payment_policyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Payment_policyRequestBuilderGetQueryParameters.
     * @param string|null $marketplace_id This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     * @return Payment_policyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $marketplace_id = null): Payment_policyRequestBuilderGetQueryParameters {
        return new Payment_policyRequestBuilderGetQueryParameters($marketplace_id);
    }

}
