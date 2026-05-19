<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\AccountManagement\Generated\SellAccountV2\Payout_settings\Update_percentage;

use EBay\AccountManagement\Generated\SellAccountV2\Models\UpdatePayoutPercentageRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payout_settings/update_percentage
*/
class Update_percentageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Update_percentageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payout_settings/update_percentage');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>  Split-payout functionality is <b>only</b> available to mainland China sellers, who can split payouts between their Payoneer account and bank account. Card payouts are not currently available for sellers in mainland China.</p></div><br/>This method allows sellers in mainland China to configure the split-payout percentage for two payout instruments available for seller payouts. For example, a seller can split payouts to have 70% of the payout go to a bank account and 30% go to a Payoneer account.<br><br><span class="tablenote"><b>Note:</b> The split-payout percentage <b>must</b> always add up to 100%. If the values do not equal 100, the call will fail. Instruments cannot be added/removed using Finance and Account APIs. </span><br/>Users can specify the payout instruments being updated by using the <b>instrumentId</b> associated with each payment instrument in the request payload. This value is returned by using the <b>getPayoutSettings</b> method. Users can specify the percentage of the payout allocated to each instrument using the <b>payoutPercentage</b> request field. This value must be a whole number and cannot exceed 100.<br><br> For more details on configuring split-payout percentages, see <a href="/api-docs/split-payout/playbook.html" target="_blank ">Mainland China Split Payout Playbook.</a> 
     * @param UpdatePayoutPercentageRequest $body This type is used by the request payload of the <b>updatePayoutPercentage</b> method to allow a seller to configure the split-payout percentages for two payout instruments.
     * @param Update_percentageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(UpdatePayoutPercentageRequest $body, ?Update_percentageRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>  Split-payout functionality is <b>only</b> available to mainland China sellers, who can split payouts between their Payoneer account and bank account. Card payouts are not currently available for sellers in mainland China.</p></div><br/>This method allows sellers in mainland China to configure the split-payout percentage for two payout instruments available for seller payouts. For example, a seller can split payouts to have 70% of the payout go to a bank account and 30% go to a Payoneer account.<br><br><span class="tablenote"><b>Note:</b> The split-payout percentage <b>must</b> always add up to 100%. If the values do not equal 100, the call will fail. Instruments cannot be added/removed using Finance and Account APIs. </span><br/>Users can specify the payout instruments being updated by using the <b>instrumentId</b> associated with each payment instrument in the request payload. This value is returned by using the <b>getPayoutSettings</b> method. Users can specify the percentage of the payout allocated to each instrument using the <b>payoutPercentage</b> request field. This value must be a whole number and cannot exceed 100.<br><br> For more details on configuring split-payout percentages, see <a href="/api-docs/split-payout/playbook.html" target="_blank ">Mainland China Split Payout Playbook.</a> 
     * @param UpdatePayoutPercentageRequest $body This type is used by the request payload of the <b>updatePayoutPercentage</b> method to allow a seller to configure the split-payout percentages for two payout instruments.
     * @param Update_percentageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdatePayoutPercentageRequest $body, ?Update_percentageRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Update_percentageRequestBuilder
    */
    public function withUrl(string $rawUrl): Update_percentageRequestBuilder {
        return new Update_percentageRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
