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

namespace EBay\AccountManagement\Generated\AccountV1\Payment_policy;

use EBay\AccountManagement\Generated\AccountV1\Models\Error;
use EBay\AccountManagement\Generated\AccountV1\Models\PaymentPolicyRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\PaymentPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\SetPaymentPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Payment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilder;
use EBay\AccountManagement\Generated\AccountV1\Payment_policy\Item\WithPayment_policy_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payment_policy
*/
class Payment_policyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_by_policy_name property
    */
    public function get_by_policy_name(): Get_by_policy_nameRequestBuilder {
        return new Get_by_policy_nameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/AccountManagement/Generated/AccountV1.payment_policy.item collection
     * @param string $payment_policy_id This path parameter specifies the ID of the payment policy you want to retrieve. <br><br> This ID can be retrieved for a payment policy by using the <a href="/develop/api/sell/account_api_v1#sell-account_api_v1-payment_policy-getpaymentpolicies" target="_blank ">getPaymentPolices</a> method.
     * @return WithPayment_policy_ItemRequestBuilder
    */
    public function byPayment_policy_id(string $payment_policy_id): WithPayment_policy_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['payment_policy_id'] = $payment_policy_id;
        return new WithPayment_policy_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Payment_policyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment_policy');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves all the payment business policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
     * @param Payment_policyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PaymentPolicyResponse|null>
     * @throws Exception
    */
    public function get(?Payment_policyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PaymentPolicyResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method creates a new payment policy where the policy encapsulates seller's terms for order payments. <br><br>A successful request returns the <b>getPaymentPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class="tablenote"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href="/api-docs/sell/static/seller-accounts/business-policies.html">eBay business policies</a>.</p>
     * @param PaymentPolicyRequest $body This root container defines a seller's payment business policy for a specific marketplace and category group. This type is used when creating or updating a payment business policy.
     * @param Payment_policyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SetPaymentPolicyResponse|null>
     * @throws Exception
    */
    public function post(PaymentPolicyRequest $body, ?Payment_policyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SetPaymentPolicyResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves all the payment business policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
     * @param Payment_policyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Payment_policyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/payment_policy?marketplace_id={marketplace_id}';
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
     * This method creates a new payment policy where the policy encapsulates seller's terms for order payments. <br><br>A successful request returns the <b>getPaymentPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class="tablenote"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href="/api-docs/sell/static/seller-accounts/business-policies.html">eBay business policies</a>.</p>
     * @param PaymentPolicyRequest $body This root container defines a seller's payment business policy for a specific marketplace and category group. This type is used when creating or updating a payment business policy.
     * @param Payment_policyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PaymentPolicyRequest $body, ?Payment_policyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Payment_policyRequestBuilder
    */
    public function withUrl(string $rawUrl): Payment_policyRequestBuilder {
        return new Payment_policyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
