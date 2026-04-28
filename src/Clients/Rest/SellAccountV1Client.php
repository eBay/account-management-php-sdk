<?php

namespace EBay\AccountManagement\Clients\Rest;

use EBay\AccountManagement\Configuration\TokenContext;
use EBay\AccountManagement\Generated\SellAccountV1\SellAccountV1ApiClient;
use EBay\AccountManagement\Generated\SellAccountV1\Models\BulkSalesTaxInput;
use EBay\AccountManagement\Generated\SellAccountV1\Models\CustomPolicyCreateRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\CustomPolicyRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\FulfillmentPolicyRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\PaymentPolicyRequest;
use EBay\AccountManagement\Generated\SellAccountV1\Models\ReturnPolicyRequest;

final class SellAccountV1Client
{
    public function __construct(private readonly SellAccountV1ApiClient $kiota) {}

    // ── Custom Policy ─────────────────────────────────────────────────────

    public function getCustomPolicies(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->custom_policy()->get()->wait();
    }

    public function createCustomPolicy(CustomPolicyCreateRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->custom_policy()->emptyPathSegment()->post($body)->wait();
    }

    public function getCustomPolicy(string $customPolicyId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->custom_policy()->byCustom_policy_id($customPolicyId)->get()->wait();
    }

    public function updateCustomPolicy(string $customPolicyId, CustomPolicyRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->custom_policy()->byCustom_policy_id($customPolicyId)->put($body)->wait();
    }

    // ── Fulfillment Policy ────────────────────────────────────────────────

    public function createFulfillmentPolicy(FulfillmentPolicyRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->fulfillment_policy()->emptyPathSegment()->post($body)->wait();
    }

    public function getFulfillmentPolicy(string $fulfillmentPolicyId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->get()->wait();
    }

    public function updateFulfillmentPolicy(string $fulfillmentPolicyId, FulfillmentPolicyRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->put($body)->wait();
    }

    public function deleteFulfillmentPolicy(string $fulfillmentPolicyId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->fulfillment_policy()->byFulfillmentPolicyId($fulfillmentPolicyId)->delete()->wait();
    }

    public function getFulfillmentPolicies(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->fulfillment_policy()->get()->wait();
    }

    public function getFulfillmentPolicyByName(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->fulfillment_policy()->get_by_policy_name()->get()->wait();
    }

    // ── Payment Policy ────────────────────────────────────────────────────

    public function getPaymentPolicies(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_policy()->get()->wait();
    }

    public function createPaymentPolicy(PaymentPolicyRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_policy()->post($body)->wait();
    }

    public function getPaymentPolicy(string $paymentPolicyId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_policy()->byPayment_policy_id($paymentPolicyId)->get()->wait();
    }

    public function updatePaymentPolicy(string $paymentPolicyId, PaymentPolicyRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_policy()->byPayment_policy_id($paymentPolicyId)->put($body)->wait();
    }

    public function deletePaymentPolicy(string $paymentPolicyId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->payment_policy()->byPayment_policy_id($paymentPolicyId)->delete()->wait();
    }

    public function getPaymentPolicyByName(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_policy()->get_by_policy_name()->get()->wait();
    }

    // ── Payments Program ──────────────────────────────────────────────────

    public function getPaymentsProgram(string $marketplaceId, string $paymentsProgramType, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payments_program()->byMarketplace_id($marketplaceId)->byPayments_program_type($paymentsProgramType)->get()->wait();
    }

    public function getPaymentsProgramOnboarding(string $marketplaceId, string $paymentsProgramType, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payments_program()->byMarketplace_id($marketplaceId)->byPayments_program_type($paymentsProgramType)->onboarding()->get()->wait();
    }

    // ── Privilege ─────────────────────────────────────────────────────────

    public function getPrivileges(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->privilege()->get()->wait();
    }

    // ── Program ───────────────────────────────────────────────────────────

    public function getOptedInPrograms(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->program()->get_opted_in_programs()->get()->wait();
    }

    public function optInToProgram(mixed $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->program()->opt_in()->post($body)->wait();
    }

    public function optOutOfProgram(mixed $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->program()->opt_out()->post($body)->wait();
    }

    // ── Rate Table ────────────────────────────────────────────────────────

    public function getRateTables(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->rate_table()->get()->wait();
    }

    // ── Return Policy ─────────────────────────────────────────────────────

    public function getReturnPolicies(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->return_policy()->get()->wait();
    }

    public function createReturnPolicy(ReturnPolicyRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->return_policy()->post($body)->wait();
    }

    public function getReturnPolicy(string $returnPolicyId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->return_policy()->byReturn_policy_id($returnPolicyId)->get()->wait();
    }

    public function updateReturnPolicy(string $returnPolicyId, ReturnPolicyRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->return_policy()->byReturn_policy_id($returnPolicyId)->put($body)->wait();
    }

    public function deleteReturnPolicy(string $returnPolicyId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->return_policy()->byReturn_policy_id($returnPolicyId)->delete()->wait();
    }

    public function getReturnPolicyByName(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->return_policy()->get_by_policy_name()->get()->wait();
    }

    // ── Sales Tax ─────────────────────────────────────────────────────────

    public function bulkCreateOrReplaceSalesTax(BulkSalesTaxInput $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_create_or_replace_sales_tax()->post($body)->wait();
    }

    public function getSalesTax(string $countryCode, string $jurisdictionId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->get()->wait();
    }

    public function createOrReplaceSalesTax(string $countryCode, string $jurisdictionId, mixed $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->put($body)->wait();
    }

    public function deleteSalesTax(string $countryCode, string $jurisdictionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->sales_tax()->byCountryCode($countryCode)->byJurisdictionId($jurisdictionId)->delete()->wait();
    }

    public function getSalesTaxes(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->sales_tax()->get()->wait();
    }

    // ── Subscription ──────────────────────────────────────────────────────

    public function getSubscription(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->get()->wait();
    }

    // ── KYC ───────────────────────────────────────────────────────────────

    public function getKYC(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->kyc()->get()->wait();
    }

    // ── Advertising Eligibility ───────────────────────────────────────────

    public function getAdvertisingEligibility(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->advertising_eligibility()->get()->wait();
    }
}
