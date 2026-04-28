<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Transfer;

use EBay\AccountManagement\Generated\SellFinancesV1\Transfer\Item\WithTransfer_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /transfer
*/
class TransferRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AccountManagement/Generated/SellFinancesV1.transfer.item collection
     * @param string $transfer_Id This path parameter is used to specify the unique identifier of the <code>TRANSFER</code> transaction type you wish to retrieve.<br><br>Use the <a href="/api-docs/sell/finances/resources/transaction/methods/getTransactions" target="_blank ">getTransactions</a> method to retrieve this value by setting the <b>transactionType</b> filter to <code>TRANSFER</code>. The <b>transfer_id</b> value will then be returned in the <b>transaction_id</b> field of the response.
     * @return WithTransfer_ItemRequestBuilder
    */
    public function byTransfer_Id(string $transfer_Id): WithTransfer_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['transfer_Id'] = $transfer_Id;
        return new WithTransfer_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TransferRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/transfer');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
