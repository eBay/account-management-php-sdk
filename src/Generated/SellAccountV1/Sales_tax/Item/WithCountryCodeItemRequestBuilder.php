<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Sales_tax\Item;

use EBay\AccountManagement\Generated\SellAccountV1\Sales_tax\Item\Item\WithJurisdictionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /sales_tax/{countryCode}
*/
class WithCountryCodeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellAccountV1.sales_tax.item.item collection
     * @param string $jurisdictionId This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry to be retrieved.<br><br>Valid jurisdiction IDs can be retrieved using the <a href="/api-docs/sell/metadata/resources/country/methods/getSalesTaxJurisdictions" target="_blank ">getSalesTaxJurisdiction</a> method of the Metadata API.<br><br><span class="tablenote"><b>Note:</b> When <code>countryCode</code> is set to <code>US</code>, the only supported values for <code>jurisdictionId</code> are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam</li><li><code>MP</code> Northern Mariana Islands</li><li><code>PW (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></span>
     * @return WithJurisdictionItemRequestBuilder
    */
    public function byJurisdictionId(string $jurisdictionId): WithJurisdictionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['jurisdictionId'] = $jurisdictionId;
        return new WithJurisdictionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithCountryCodeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sales_tax/{countryCode}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
