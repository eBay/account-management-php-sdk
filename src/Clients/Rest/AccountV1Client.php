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

declare(strict_types=1);

namespace EBay\AccountManagement\Clients\Rest;

use EBay\AccountManagement\Configuration\KiotaAuthProvider;
use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use EBay\AccountManagement\Configuration\RequestOptions;
use EBay\AccountManagement\Generated\AccountV1\AccountV1ApiClient;
use EBay\AccountManagement\Generated\AccountV1\Models\BulkSalesTaxInput;
use EBay\AccountManagement\Generated\AccountV1\Models\CustomPolicy;
use EBay\AccountManagement\Generated\AccountV1\Models\CustomPolicyCreateRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\CustomPolicyRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\CustomPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\FulfillmentPolicy;
use EBay\AccountManagement\Generated\AccountV1\Models\FulfillmentPolicyRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\FulfillmentPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\KycResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\PaymentPolicy;
use EBay\AccountManagement\Generated\AccountV1\Models\PaymentPolicyRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\PaymentPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\PaymentsProgramOnboardingResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\PaymentsProgramResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\Program;
use EBay\AccountManagement\Generated\AccountV1\Models\Programs;
use EBay\AccountManagement\Generated\AccountV1\Models\RateTableResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\ReturnPolicy;
use EBay\AccountManagement\Generated\AccountV1\Models\ReturnPolicyRequest;
use EBay\AccountManagement\Generated\AccountV1\Models\ReturnPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\SalesTax;
use EBay\AccountManagement\Generated\AccountV1\Models\SalesTaxBase;
use EBay\AccountManagement\Generated\AccountV1\Models\SalesTaxes;
use EBay\AccountManagement\Generated\AccountV1\Models\SellerEligibilityMultiProgramResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\SellingPrivileges;
use EBay\AccountManagement\Generated\AccountV1\Models\SetFulfillmentPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\SetPaymentPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\SetReturnPolicyResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\SubscriptionResponse;
use EBay\AccountManagement\Generated\AccountV1\Models\UpdatedSalesTaxResponse;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class AccountV1Client
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly AccountManagementConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function getCustomPolicies(?string $policyTypes = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CustomPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->custom_policy()->emptyPathSegment()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Custom_policy\EmptyPathSegmentRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Custom_policy\EmptyPathSegmentRequestBuilderGetRequestConfiguration::createQueryParameters(
                        policy_types: $policyTypes,
                    ),
                )
            )->wait()
        );
    }

    public function createCustomPolicy(CustomPolicyCreateRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->custom_policy()->emptyPathSegment()->post(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Custom_policy\EmptyPathSegmentRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCustomPolicy(string $customPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CustomPolicy
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->custom_policy()->byCustom_policy_id($customPolicyId)->get(
                new \EBay\AccountManagement\Generated\AccountV1\Custom_policy\Item\WithCustom_policy_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateCustomPolicy(
        string $customPolicyId,
        CustomPolicyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->custom_policy()->byCustom_policy_id($customPolicyId)->put(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Custom_policy\Item\WithCustom_policy_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createFulfillmentPolicy(FulfillmentPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SetFulfillmentPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->fulfillment_policy()->emptyPathSegment()->post(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\EmptyPathSegmentRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getFulfillmentPolicy(string $fulfillmentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?FulfillmentPolicy
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->get(
                new \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Item\WithFulfillmentPolicyItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateFulfillmentPolicy(
        string $fulfillmentPolicyId,
        FulfillmentPolicyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SetFulfillmentPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->put(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Item\WithFulfillmentPolicyItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteFulfillmentPolicy(string $fulfillmentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->delete(
                new \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Item\WithFulfillmentPolicyItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getFulfillmentPolicies(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?FulfillmentPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->fulfillment_policy()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Fulfillment_policyRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Fulfillment_policyRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                    ),
                )
            )->wait()
        );
    }

    public function getFulfillmentPolicyByName(
        ?string $marketplaceId = null,
        ?string $name = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?FulfillmentPolicy
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->fulfillment_policy()->get_by_policy_name()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Fulfillment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                        name: $name,
                    ),
                )
            )->wait()
        );
    }

    public function getPaymentPolicies(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PaymentPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_policy()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Payment_policyRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Payment_policyRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                    ),
                )
            )->wait()
        );
    }

    public function createPaymentPolicy(PaymentPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SetPaymentPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_policy()->post(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Payment_policyRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPaymentPolicy(string $paymentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PaymentPolicy
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_policy()->byPayment_policy_id($paymentPolicyId)->get(
                new \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Item\WithPayment_policy_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updatePaymentPolicy(
        string $paymentPolicyId,
        PaymentPolicyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SetPaymentPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_policy()->byPayment_policy_id($paymentPolicyId)->put(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Item\WithPayment_policy_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deletePaymentPolicy(string $paymentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->payment_policy()->byPayment_policy_id($paymentPolicyId)->delete(
                new \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Item\WithPayment_policy_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPaymentPolicyByName(
        ?string $marketplaceId = null,
        ?string $name = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PaymentPolicy
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_policy()->get_by_policy_name()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Payment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                        name: $name,
                    ),
                )
            )->wait()
        );
    }

    public function getPaymentsProgram(
        string $marketplaceId,
        string $paymentsProgramType,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PaymentsProgramResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payments_program()->byMarketplace_id($marketplaceId)->byPayments_program_type($paymentsProgramType)->get(
                new \EBay\AccountManagement\Generated\AccountV1\Payments_program\Item\Item\WithPayments_program_typeItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPaymentsProgramOnboarding(
        string $marketplaceId,
        string $paymentsProgramType,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PaymentsProgramOnboardingResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payments_program()->byMarketplace_id($marketplaceId)->byPayments_program_type($paymentsProgramType)->onboarding()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Payments_program\Item\Item\Onboarding\OnboardingRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPrivileges(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SellingPrivileges
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->privilege()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Privilege\PrivilegeRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getOptedInPrograms(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Programs
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->program()->get_opted_in_programs()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Program\Get_opted_in_programs\Get_opted_in_programsRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function optInToProgram(Program $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->program()->opt_in()->post(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Program\Opt_in\Opt_inRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function optOutOfProgram(Program $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->program()->opt_out()->post(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Program\Opt_out\Opt_outRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getRateTables(?string $countryCode = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?RateTableResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->rate_table()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Rate_table\Rate_tableRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Rate_table\Rate_tableRequestBuilderGetRequestConfiguration::createQueryParameters(
                        country_code: $countryCode,
                    ),
                )
            )->wait()
        );
    }

    public function getReturnPolicies(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ReturnPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->return_policy()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Return_policy\Return_policyRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Return_policy\Return_policyRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                    ),
                )
            )->wait()
        );
    }

    public function createReturnPolicy(ReturnPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SetReturnPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->return_policy()->post(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Return_policy\Return_policyRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getReturnPolicy(string $returnPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ReturnPolicy
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->return_policy()->byReturn_policy_id($returnPolicyId)->get(
                new \EBay\AccountManagement\Generated\AccountV1\Return_policy\Item\WithReturn_policy_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateReturnPolicy(
        string $returnPolicyId,
        ReturnPolicyRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SetReturnPolicyResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->return_policy()->byReturn_policy_id($returnPolicyId)->put(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Return_policy\Item\WithReturn_policy_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteReturnPolicy(string $returnPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->return_policy()->byReturn_policy_id($returnPolicyId)->delete(
                new \EBay\AccountManagement\Generated\AccountV1\Return_policy\Item\WithReturn_policy_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getReturnPolicyByName(
        ?string $marketplaceId = null,
        ?string $name = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ReturnPolicy
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->return_policy()->get_by_policy_name()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Return_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Return_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration::createQueryParameters(
                        marketplace_id: $marketplaceId,
                        name: $name,
                    ),
                )
            )->wait()
        );
    }

    public function bulkCreateOrReplaceSalesTax(BulkSalesTaxInput $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?UpdatedSalesTaxResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->bulk_create_or_replace_sales_tax()->post(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Bulk_create_or_replace_sales_tax\Bulk_create_or_replace_sales_taxRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getSalesTax(
        string $countryCode,
        string $jurisdictionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SalesTax
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->get(
                new \EBay\AccountManagement\Generated\AccountV1\Sales_tax\Item\Item\WithJurisdictionItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createOrReplaceSalesTax(
        string $countryCode,
        string $jurisdictionId,
        SalesTaxBase $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->put(
                $body,
                new \EBay\AccountManagement\Generated\AccountV1\Sales_tax\Item\Item\WithJurisdictionItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteSalesTax(
        string $countryCode,
        string $jurisdictionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->delete(
                new \EBay\AccountManagement\Generated\AccountV1\Sales_tax\Item\Item\WithJurisdictionItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getSalesTaxes(?string $countryCode = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SalesTaxes
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->sales_tax()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Sales_tax\Sales_taxRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Sales_tax\Sales_taxRequestBuilderGetRequestConfiguration::createQueryParameters(
                        country_code: $countryCode,
                    ),
                )
            )->wait()
        );
    }

    public function getSubscription(
        ?string $limit = null,
        ?string $continuationToken = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SubscriptionResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->subscription()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Subscription\SubscriptionRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Subscription\SubscriptionRequestBuilderGetRequestConfiguration::createQueryParameters(
                        limit: $limit,
                        continuation_token: $continuationToken,
                    ),
                )
            )->wait()
        );
    }

    public function getKYC(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?KycResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->kyc()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Kyc\KycRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getAdvertisingEligibility(
        ?string $programTypes = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SellerEligibilityMultiProgramResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->advertising_eligibility()->get(
                new \EBay\AccountManagement\Generated\AccountV1\Advertising_eligibility\Advertising_eligibilityRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\AccountV1\Advertising_eligibility\Advertising_eligibilityRequestBuilderGetRequestConfiguration::createQueryParameters(
                        program_types: $programTypes,
                    ),
                )
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set AccountManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): AccountV1ApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->accountV1BaseUrl);
        return new AccountV1ApiClient($adapter);
    }
}
