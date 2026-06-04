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

namespace EBay\AccountManagement\Clients\Rest;

use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use EBay\AccountManagement\Configuration\RequestOptions;
use EBay\AccountManagement\Configuration\TokenContext;
use EBay\AccountManagement\Generated\SellAccountV1\SellAccountV1ApiClient;
use EBay\AccountManagement\Generated\SellAccountV1\Models\BulkSalesTaxInput;
use EBay\AccountManagement\Generated\SellAccountV1\Models\CustomPolicyCreateRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\CustomPolicyRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\FulfillmentPolicyRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\PaymentPolicyRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\ReturnPolicyRequest;

// Request configuration classes
use EBay\AccountManagement\Generated\SellAccountV1\Advertising_eligibility\Advertising_eligibilityRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Bulk_create_or_replace_sales_tax\Bulk_create_or_replace_sales_taxRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Custom_policy\EmptyPathSegmentRequestBuilderGetRequestConfiguration as CustomPolicyGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Custom_policy\EmptyPathSegmentRequestBuilderPostRequestConfiguration as CustomPolicyPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Custom_policy\Item\WithCustom_policy_ItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Custom_policy\Item\WithCustom_policy_ItemRequestBuilderPutRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\EmptyPathSegmentRequestBuilderPostRequestConfiguration as FulfillmentPolicyPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Fulfillment_policyRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration as FulfillmentPolicyByNameGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Item\WithFulfillmentPolicyItemRequestBuilderDeleteRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Item\WithFulfillmentPolicyItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Fulfillment_policy\Item\WithFulfillmentPolicyItemRequestBuilderPutRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Kyc\KycRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration as PaymentPolicyByNameGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Item\WithPayment_policy_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Item\WithPayment_policy_ItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Item\WithPayment_policy_ItemRequestBuilderPutRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Payment_policyRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payment_policy\Payment_policyRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payments_program\Item\Item\Onboarding\OnboardingRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Payments_program\Item\Item\WithPayments_program_typeItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Privilege\PrivilegeRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Program\Get_opted_in_programs\Get_opted_in_programsRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Program\Opt_in\Opt_inRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Program\Opt_out\Opt_outRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Rate_table\Rate_tableRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Get_by_policy_name\Get_by_policy_nameRequestBuilderGetRequestConfiguration as ReturnPolicyByNameGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Item\WithReturn_policy_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Item\WithReturn_policy_ItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Item\WithReturn_policy_ItemRequestBuilderPutRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Return_policyRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Return_policyRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Sales_tax\Item\Item\WithJurisdictionItemRequestBuilderDeleteRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Sales_tax\Item\Item\WithJurisdictionItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Sales_tax\Item\Item\WithJurisdictionItemRequestBuilderPutRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Sales_tax\Sales_taxRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV1\Subscription\SubscriptionRequestBuilderGetRequestConfiguration;

final class SellAccountV1Client
{
    public function __construct(
        private readonly SellAccountV1ApiClient $kiota,
        private readonly AccountManagementConfiguration $config,
    ) {}

    // ── Headers helper ────────────────────────────────────────────────────

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }

    // ── Custom Policy ─────────────────────────────────────────────────────

    public function getCustomPolicies(?string $policyTypes = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->custom_policy()->emptyPathSegment()->get(
            new CustomPolicyGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: CustomPolicyGetRequestConfiguration::createQueryParameters(
                    policy_types: $policyTypes,
                ),
            )
        )->wait());
    }

    public function createCustomPolicy(CustomPolicyCreateRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->custom_policy()->emptyPathSegment()->post(
            $body,
            new CustomPolicyPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getCustomPolicy(string $customPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->custom_policy()->byCustom_policy_id($customPolicyId)->get(
            new WithCustom_policy_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updateCustomPolicy(string $customPolicyId, CustomPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->custom_policy()->byCustom_policy_id($customPolicyId)->put(
            $body,
            new WithCustom_policy_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Fulfillment Policy ────────────────────────────────────────────────

    public function createFulfillmentPolicy(FulfillmentPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->fulfillment_policy()->emptyPathSegment()->post(
            $body,
            new FulfillmentPolicyPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getFulfillmentPolicy(string $fulfillmentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->get(
            new WithFulfillmentPolicyItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updateFulfillmentPolicy(string $fulfillmentPolicyId, FulfillmentPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->put(
            $body,
            new WithFulfillmentPolicyItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function deleteFulfillmentPolicy(string $fulfillmentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->delete(
            new WithFulfillmentPolicyItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getFulfillmentPolicies(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->fulfillment_policy()->get(
            new Fulfillment_policyRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Fulfillment_policyRequestBuilderGetRequestConfiguration::createQueryParameters(
                    marketplace_id: $marketplaceId,
                ),
            )
        )->wait());
    }

    public function getFulfillmentPolicyByName(?string $marketplaceId = null, ?string $name = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->fulfillment_policy()->get_by_policy_name()->get(
            new FulfillmentPolicyByNameGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: FulfillmentPolicyByNameGetRequestConfiguration::createQueryParameters(
                    marketplace_id: $marketplaceId,
                    name: $name,
                ),
            )
        )->wait());
    }

    // ── Payment Policy ────────────────────────────────────────────────────

    public function getPaymentPolicies(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payment_policy()->get(
            new Payment_policyRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Payment_policyRequestBuilderGetRequestConfiguration::createQueryParameters(
                    marketplace_id: $marketplaceId,
                ),
            )
        )->wait());
    }

    public function createPaymentPolicy(PaymentPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payment_policy()->post(
            $body,
            new Payment_policyRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getPaymentPolicy(string $paymentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payment_policy()->byPayment_policy_id($paymentPolicyId)->get(
            new WithPayment_policy_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updatePaymentPolicy(string $paymentPolicyId, PaymentPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payment_policy()->byPayment_policy_id($paymentPolicyId)->put(
            $body,
            new WithPayment_policy_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function deletePaymentPolicy(string $paymentPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->payment_policy()->byPayment_policy_id($paymentPolicyId)->delete(
            new WithPayment_policy_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getPaymentPolicyByName(?string $marketplaceId = null, ?string $name = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payment_policy()->get_by_policy_name()->get(
            new PaymentPolicyByNameGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: PaymentPolicyByNameGetRequestConfiguration::createQueryParameters(
                    marketplace_id: $marketplaceId,
                    name: $name,
                ),
            )
        )->wait());
    }

    // ── Payments Program ──────────────────────────────────────────────────

    public function getPaymentsProgram(string $marketplaceId, string $paymentsProgramType, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payments_program()->byMarketplace_id($marketplaceId)->byPayments_program_type($paymentsProgramType)->get(
            new WithPayments_program_typeItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getPaymentsProgramOnboarding(string $marketplaceId, string $paymentsProgramType, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payments_program()->byMarketplace_id($marketplaceId)->byPayments_program_type($paymentsProgramType)->onboarding()->get(
            new OnboardingRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Privilege ─────────────────────────────────────────────────────────

    public function getPrivileges(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->privilege()->get(
            new PrivilegeRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Program ───────────────────────────────────────────────────────────

    public function getOptedInPrograms(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->program()->get_opted_in_programs()->get(
            new Get_opted_in_programsRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function optInToProgram(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->program()->opt_in()->post(
            $body,
            new Opt_inRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function optOutOfProgram(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->program()->opt_out()->post(
            $body,
            new Opt_outRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Rate Table ────────────────────────────────────────────────────────

    public function getRateTables(?string $countryCode = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->rate_table()->get(
            new Rate_tableRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Rate_tableRequestBuilderGetRequestConfiguration::createQueryParameters(
                    country_code: $countryCode,
                ),
            )
        )->wait());
    }

    // ── Return Policy ─────────────────────────────────────────────────────

    public function getReturnPolicies(?string $marketplaceId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->return_policy()->get(
            new Return_policyRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Return_policyRequestBuilderGetRequestConfiguration::createQueryParameters(
                    marketplace_id: $marketplaceId,
                ),
            )
        )->wait());
    }

    public function createReturnPolicy(ReturnPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->return_policy()->post(
            $body,
            new Return_policyRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getReturnPolicy(string $returnPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->return_policy()->byReturn_policy_id($returnPolicyId)->get(
            new WithReturn_policy_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updateReturnPolicy(string $returnPolicyId, ReturnPolicyRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->return_policy()->byReturn_policy_id($returnPolicyId)->put(
            $body,
            new WithReturn_policy_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function deleteReturnPolicy(string $returnPolicyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->return_policy()->byReturn_policy_id($returnPolicyId)->delete(
            new WithReturn_policy_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getReturnPolicyByName(?string $marketplaceId = null, ?string $name = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->return_policy()->get_by_policy_name()->get(
            new ReturnPolicyByNameGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: ReturnPolicyByNameGetRequestConfiguration::createQueryParameters(
                    marketplace_id: $marketplaceId,
                    name: $name,
                ),
            )
        )->wait());
    }

    // ── Sales Tax ─────────────────────────────────────────────────────────

    public function bulkCreateOrReplaceSalesTax(BulkSalesTaxInput $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->bulk_create_or_replace_sales_tax()->post(
            $body,
            new Bulk_create_or_replace_sales_taxRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getSalesTax(string $countryCode, string $jurisdictionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->get(
            new WithJurisdictionItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createOrReplaceSalesTax(string $countryCode, string $jurisdictionId, mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->put(
            $body,
            new WithJurisdictionItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function deleteSalesTax(string $countryCode, string $jurisdictionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->delete(
            new WithJurisdictionItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getSalesTaxes(?string $countryCode = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->sales_tax()->get(
            new Sales_taxRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Sales_taxRequestBuilderGetRequestConfiguration::createQueryParameters(
                    country_code: $countryCode,
                ),
            )
        )->wait());
    }

    // ── Subscription ──────────────────────────────────────────────────────

    public function getSubscription(?string $continuationToken = null, ?string $limit = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->subscription()->get(
            new SubscriptionRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: SubscriptionRequestBuilderGetRequestConfiguration::createQueryParameters(
                    continuation_token: $continuationToken,
                    limit: $limit,
                ),
            )
        )->wait());
    }

    // ── KYC ───────────────────────────────────────────────────────────────

    public function getKYC(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->kyc()->get(
            new KycRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Advertising Eligibility ───────────────────────────────────────────

    public function getAdvertisingEligibility(?string $programTypes = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->advertising_eligibility()->get(
            new Advertising_eligibilityRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Advertising_eligibilityRequestBuilderGetRequestConfiguration::createQueryParameters(
                    program_types: $programTypes,
                ),
            )
        )->wait());
    }
}
