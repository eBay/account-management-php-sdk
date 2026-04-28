<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Rate_table;

use EBay\AccountManagement\Generated\SellAccountV2\Rate_table\Item\WithRate_table_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /rate_table
*/
class Rate_tableRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellAccountV2.rate_table.item collection
     * @param string $rate_table_id This path parameter is the unique identifier for the shipping rate table to retrieve.<br/><br/> Use the <a href="/api-docs/sell/account/resources/rate_table/methods/getRateTables" target="_blank">getRateTables</a> method of the <a href="/api-docs/sell/account/static/overview.html " target="_blank">Account API v1</a> to retrieve rate table IDs.
     * @return WithRate_table_ItemRequestBuilder
    */
    public function byRate_table_id(string $rate_table_id): WithRate_table_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['rate_table_id'] = $rate_table_id;
        return new WithRate_table_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Rate_tableRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/rate_table');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
