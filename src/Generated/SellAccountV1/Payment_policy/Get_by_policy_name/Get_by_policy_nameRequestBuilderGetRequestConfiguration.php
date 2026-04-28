<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Get_by_policy_name;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_by_policy_nameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_by_policy_nameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_by_policy_nameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_by_policy_nameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_by_policy_nameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_by_policy_nameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_by_policy_nameRequestBuilderGetQueryParameters.
     * @param string|null $marketplace_id This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     * @param string|null $name This query parameter specifies the seller-defined name of the payment policy you want to retrieve.<br><br> This value can be retrieved for a payment policy by using the <a href="/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies" target="_blank ">getPaymentPolicies</a> method.
     * @return Get_by_policy_nameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $marketplace_id = null, ?string $name = null): Get_by_policy_nameRequestBuilderGetQueryParameters {
        return new Get_by_policy_nameRequestBuilderGetQueryParameters($marketplace_id, $name);
    }

}
