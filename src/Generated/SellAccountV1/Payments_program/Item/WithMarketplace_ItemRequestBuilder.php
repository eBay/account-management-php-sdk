<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Payments_program\Item;

use EBay\AccountManagement\Generated\SellAccountV1\Payments_program\Item\Item\WithPayments_program_typeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /payments_program/{marketplace_id}
*/
class WithMarketplace_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellAccountV1.payments_program.item.item collection
     * @param string $payments_program_type This path parameter specifies the payments program whose status is returned by the call.
     * @return WithPayments_program_typeItemRequestBuilder
    */
    public function byPayments_program_type(string $payments_program_type): WithPayments_program_typeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['payments_program_type'] = $payments_program_type;
        return new WithPayments_program_typeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithMarketplace_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payments_program/{marketplace_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
