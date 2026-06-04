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
use EBay\AccountManagement\Generated\SellAccountV2\SellAccountV2ApiClient;
use EBay\AccountManagement\Generated\SellAccountV2\Models\CreateCalculatedShippingRulesRequest;
use EBay\AccountManagement\Generated\SellAccountV2\Models\CreateFlatShippingRulesRequest;
use EBay\AccountManagement\Generated\SellAccountV2\Models\CreatePromotionalShippingRuleRequest;
use EBay\AccountManagement\Generated\SellAccountV2\Models\RateTableUpdate;
use EBay\AccountManagement\Generated\SellAccountV2\Models\UpdateCalculatedShippingRulesRequest;
use EBay\AccountManagement\Generated\SellAccountV2\Models\UpdateCombinedPaymentsRequest;
use EBay\AccountManagement\Generated\SellAccountV2\Models\UpdateFlatShippingRulesRequest;
use EBay\AccountManagement\Generated\SellAccountV2\Models\UpdatePayoutPercentageRequest;
use EBay\AccountManagement\Generated\SellAccountV2\Models\UpdatePromotionalShippingRuleRequest;

// Request configuration classes
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Combined_shipping_rulesRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Create_calculated_shipping_rules\Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Create_flat_shipping_rules\Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Create_promotional_shipping_rule\Create_promotional_shipping_ruleRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_calculated_shipping_rules\Update_calculated_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_combined_payments\Update_combined_paymentsRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_flat_shipping_rules\Update_flat_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_promotional_shipping_rule\Update_promotional_shipping_ruleRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Payout_settings\Payout_settingsRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Payout_settings\Update_percentage\Update_percentageRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Rate_table\Item\Update_shipping_cost\Update_shipping_costRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\Rate_table\Item\WithRate_table_ItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\User_preferences\User_preferencesRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellAccountV2\User_preferences\User_preferencesRequestBuilderPatchRequestConfiguration;

final class SellAccountV2Client
{
    public function __construct(
        private readonly SellAccountV2ApiClient $kiota,
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

    // ── Rate Table ────────────────────────────────────────────────────────

    public function getRateTable(string $rateTableId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->rate_table()->byRate_table_id($rateTableId)->get(
            new WithRate_table_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updateShippingCost(string $rateTableId, RateTableUpdate $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->rate_table()->byRate_table_id($rateTableId)->update_shipping_cost()->post(
            $body,
            new Update_shipping_costRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Payout Settings ───────────────────────────────────────────────────

    public function getPayoutSettings(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payout_settings()->get(
            new Payout_settingsRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updatePayoutPercentage(UpdatePayoutPercentageRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->payout_settings()->update_percentage()->post(
            $body,
            new Update_percentageRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Combined Shipping Rules ───────────────────────────────────────────

    public function createCalculatedShippingRules(CreateCalculatedShippingRulesRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->create_calculated_shipping_rules()->post(
            $body,
            new Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createFlatShippingRules(CreateFlatShippingRulesRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->create_flat_shipping_rules()->post(
            $body,
            new Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function createPromotionalShippingRule(CreatePromotionalShippingRuleRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->create_promotional_shipping_rule()->post(
            $body,
            new Create_promotional_shipping_ruleRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getCombinedShippingRules(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->get(
            new Combined_shipping_rulesRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updateCalculatedShippingRules(UpdateCalculatedShippingRulesRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->update_calculated_shipping_rules()->post(
            $body,
            new Update_calculated_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updateCombinedPayments(UpdateCombinedPaymentsRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->update_combined_payments()->post(
            $body,
            new Update_combined_paymentsRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updateFlatShippingRules(UpdateFlatShippingRulesRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->update_flat_shipping_rules()->post(
            $body,
            new Update_flat_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function updatePromotionalShippingRule(UpdatePromotionalShippingRuleRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->combined_shipping_rules()->update_promotional_shipping_rule()->post(
            $body,
            new Update_promotional_shipping_ruleRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── User Preferences ──────────────────────────────────────────────────

    public function getUserPreferences(?string $fieldgroups = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->user_preferences()->get(
            new User_preferencesRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: User_preferencesRequestBuilderGetRequestConfiguration::createQueryParameters(
                    fieldgroups: $fieldgroups,
                ),
            )
        )->wait());
    }

    public function setUserPreferences(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::runWith($accessToken, fn() => $this->kiota->user_preferences()->patch(
            $body,
            new User_preferencesRequestBuilderPatchRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }
}
