<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Payout_settings;

use EBay\AccountManagement\Generated\SellAccountV2\Models\PayoutSettingsResponse;
use EBay\AccountManagement\Generated\SellAccountV2\Payout_settings\Update_percentage\Update_percentageRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payout_settings
*/
class Payout_settingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The update_percentage property
    */
    public function update_percentage(): Update_percentageRequestBuilder {
        return new Update_percentageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new Payout_settingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payout_settings');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Split-payout functionality is <b>only</b> available to mainland China sellers, who can split payouts between their Payoneer account and bank account. Card payouts are not currently available for sellers in mainland China.</p></div><br/>This method returns details on two payment instruments defined on a seller's account, including the ID, type, status, nickname, last four digits of the account number, and payout percentage for the instruments.<br/><br/>Using the <b>instrumentId</b> returned with this method, sellers can makes changes to the payout split of the instruments with the <b>updatePayoutPercentage</b> method. Note that the <b>instrumentStatus</b> of a payment instrument, also returned using this method, must be <code>ACTIVE</code> in order to do split payouts on that payment instrument.
     * @param Payout_settingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PayoutSettingsResponse|null>
     * @throws Exception
    */
    public function get(?Payout_settingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PayoutSettingsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Split-payout functionality is <b>only</b> available to mainland China sellers, who can split payouts between their Payoneer account and bank account. Card payouts are not currently available for sellers in mainland China.</p></div><br/>This method returns details on two payment instruments defined on a seller's account, including the ID, type, status, nickname, last four digits of the account number, and payout percentage for the instruments.<br/><br/>Using the <b>instrumentId</b> returned with this method, sellers can makes changes to the payout split of the instruments with the <b>updatePayoutPercentage</b> method. Note that the <b>instrumentStatus</b> of a payment instrument, also returned using this method, must be <code>ACTIVE</code> in order to do split payouts on that payment instrument.
     * @param Payout_settingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Payout_settingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Payout_settingsRequestBuilder
    */
    public function withUrl(string $rawUrl): Payout_settingsRequestBuilder {
        return new Payout_settingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
