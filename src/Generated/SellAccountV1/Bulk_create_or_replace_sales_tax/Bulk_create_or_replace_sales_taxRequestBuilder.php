<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Bulk_create_or_replace_sales_tax;

use EBay\AccountManagement\Generated\SellAccountV1\Models\BulkSalesTaxInput;
use EBay\AccountManagement\Generated\SellAccountV1\Models\UpdatedSalesTaxResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /bulk_create_or_replace_sales_tax
*/
class Bulk_create_or_replace_sales_taxRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_create_or_replace_sales_taxRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bulk_create_or_replace_sales_tax');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method creates or updates multiple sales-tax table entries.<br><br><i>Sales-tax tables</i> can be set up for countries that support different <i>tax jurisdictions</i>.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are only available for the US (EBAY_US) and Canada (EBAY_CA) marketplaces.</span><br>Each sales-tax table entry comprises the following parameters:<ul><li><code>countryCode</code></li><li><code>jurisdictionId</code></li><li><code>salesTaxPercentage</code></li><li><code>shippingAndHandlingTaxed</code></li></ul><br>Valid jurisdiction IDs are retrieved using <b><a href="/api-docs/sell/metadata/resources/country/methods/getSalesTaxJurisdictions" target="_blank">getSalesTaxJurisdictions</a></b> in the Metadata API.<br><br>For details about using this call, refer to <a href="/api-docs/sell/static/seller-accounts/tax-tables.html">Establishing sales-tax tables</a>.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul>For additional information, refer to <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 " target="_blank">Taxes and import charges</a>.</p></div>
     * @param BulkSalesTaxInput $body The request body
     * @param Bulk_create_or_replace_sales_taxRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdatedSalesTaxResponse|null>
     * @throws Exception
    */
    public function post(BulkSalesTaxInput $body, ?Bulk_create_or_replace_sales_taxRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UpdatedSalesTaxResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method creates or updates multiple sales-tax table entries.<br><br><i>Sales-tax tables</i> can be set up for countries that support different <i>tax jurisdictions</i>.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are only available for the US (EBAY_US) and Canada (EBAY_CA) marketplaces.</span><br>Each sales-tax table entry comprises the following parameters:<ul><li><code>countryCode</code></li><li><code>jurisdictionId</code></li><li><code>salesTaxPercentage</code></li><li><code>shippingAndHandlingTaxed</code></li></ul><br>Valid jurisdiction IDs are retrieved using <b><a href="/api-docs/sell/metadata/resources/country/methods/getSalesTaxJurisdictions" target="_blank">getSalesTaxJurisdictions</a></b> in the Metadata API.<br><br>For details about using this call, refer to <a href="/api-docs/sell/static/seller-accounts/tax-tables.html">Establishing sales-tax tables</a>.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul>For additional information, refer to <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 " target="_blank">Taxes and import charges</a>.</p></div>
     * @param BulkSalesTaxInput $body The request body
     * @param Bulk_create_or_replace_sales_taxRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkSalesTaxInput $body, ?Bulk_create_or_replace_sales_taxRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Bulk_create_or_replace_sales_taxRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_create_or_replace_sales_taxRequestBuilder {
        return new Bulk_create_or_replace_sales_taxRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
