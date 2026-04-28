<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Transaction_summary;

use EBay\AccountManagement\Generated\SellFinancesV1\Models\TransactionSummaryResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /transaction_summary
*/
class Transaction_summaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Transaction_summaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/transaction_summary{?filter*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all <b>Finances API</b> methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis " target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><span class="tablenote"><b>Note:</b>  The <b>Finances API</b> does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span><br>The <b>getTransactionSummary</b> method retrieves cumulative information for monetary transactions. If applicable, the number of payments with a <code>transactionStatus</code> equal to <code>FUNDS_ON_HOLD</code> and the total monetary amount of these on-hold payments are also returned.<br><br><span class="tablenote"><b>Note:</b> For a complete list of transaction types, refer to <a href="/api-docs/sell/finances/types/pay:TransactionTypeEnum " target="_blank ">TransactionTypeEnum</a>.</span><br>Refer to the <a href="#uri.filter ">filter</a> field for additional information about each filter and its use.<br><br><span class="tablenote"><b>Note:</b> Unless a <code>transactionType</code> filter is used to retrieve a specific type of transaction (e.g., <code>SALE</code>, <code>REFUND</code>, etc.,) the <a href="#response.creditCount">creditCount</a> and <a href="#response.creditAmount">creditAmount</a> response fields both include <i>order sales</i> and <i>seller credits</i> information. That is, the <b>count</b> and <b>value</b> fields do not distinguish between these two types monetary transactions.</span> <br><br><b>Note:</b> getTransactionSummary will only return data on transactions that occurred less than five years in the past.
     * @param Transaction_summaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TransactionSummaryResponse|null>
     * @throws Exception
    */
    public function get(?Transaction_summaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [TransactionSummaryResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including all <b>Finances API</b> methods. Please refer to <a href="/develop/guides/digital-signatures-for-apis " target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br><span class="tablenote"><b>Note:</b>  The <b>Finances API</b> does not support <a href="https://www.ebay.com/sellercenter/ebay-for-business/multi-user-account-access" target="_blank">Team Access</a>. Financial information, such as payouts or transactions, is only returned for the user that makes the call. You cannot use any of the methods in this API to return financial information for another user.</span><br>The <b>getTransactionSummary</b> method retrieves cumulative information for monetary transactions. If applicable, the number of payments with a <code>transactionStatus</code> equal to <code>FUNDS_ON_HOLD</code> and the total monetary amount of these on-hold payments are also returned.<br><br><span class="tablenote"><b>Note:</b> For a complete list of transaction types, refer to <a href="/api-docs/sell/finances/types/pay:TransactionTypeEnum " target="_blank ">TransactionTypeEnum</a>.</span><br>Refer to the <a href="#uri.filter ">filter</a> field for additional information about each filter and its use.<br><br><span class="tablenote"><b>Note:</b> Unless a <code>transactionType</code> filter is used to retrieve a specific type of transaction (e.g., <code>SALE</code>, <code>REFUND</code>, etc.,) the <a href="#response.creditCount">creditCount</a> and <a href="#response.creditAmount">creditAmount</a> response fields both include <i>order sales</i> and <i>seller credits</i> information. That is, the <b>count</b> and <b>value</b> fields do not distinguish between these two types monetary transactions.</span> <br><br><b>Note:</b> getTransactionSummary will only return data on transactions that occurred less than five years in the past.
     * @param Transaction_summaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Transaction_summaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Transaction_summaryRequestBuilder
    */
    public function withUrl(string $rawUrl): Transaction_summaryRequestBuilder {
        return new Transaction_summaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
