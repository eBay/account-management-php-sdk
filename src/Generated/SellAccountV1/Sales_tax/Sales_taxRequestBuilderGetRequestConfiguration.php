<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Sales_tax;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Sales_taxRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Sales_taxRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Sales_taxRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Sales_taxRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Sales_taxRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Sales_taxRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Sales_taxRequestBuilderGetQueryParameters.
     * @param string|null $country_code This path parameter specifies the two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code for the country whose tax table you want to retrieve.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum
     * @return Sales_taxRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $country_code = null): Sales_taxRequestBuilderGetQueryParameters {
        return new Sales_taxRequestBuilderGetQueryParameters($country_code);
    }

}
