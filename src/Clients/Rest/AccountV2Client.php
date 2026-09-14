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
use EBay\AccountManagement\Generated\AccountV2\AccountV2ApiClient;
use EBay\AccountManagement\Generated\AccountV2\Models\CreateCalculatedShippingRulesRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\CreateFlatShippingRulesRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\CreatePromotionalShippingRuleRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\GetCombinedShippingRulesPublicApiResponse;
use EBay\AccountManagement\Generated\AccountV2\Models\GetUserPreferencesResponse;
use EBay\AccountManagement\Generated\AccountV2\Models\PayoutSettingsResponse;
use EBay\AccountManagement\Generated\AccountV2\Models\RateTableDetails;
use EBay\AccountManagement\Generated\AccountV2\Models\RateTableUpdate;
use EBay\AccountManagement\Generated\AccountV2\Models\UpdateCalculatedShippingRulesRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\UpdateCombinedPaymentsRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\UpdateFlatShippingRulesRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\UpdatePayoutPercentageRequest;
use EBay\AccountManagement\Generated\AccountV2\Models\UpdatePromotionalShippingRuleRequest;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Combined_shipping_rulesRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Create_calculated_shipping_rules\Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Create_flat_shipping_rules\Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Create_promotional_shipping_rule\Create_promotional_shipping_ruleRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Update_calculated_shipping_rules\Update_calculated_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Update_combined_payments\Update_combined_paymentsRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Update_flat_shipping_rules\Update_flat_shipping_rulesRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Combined_shipping_rules\Update_promotional_shipping_rule\Update_promotional_shipping_ruleRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Payout_settings\Payout_settingsRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Payout_settings\Update_percentage\Update_percentageRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Rate_table\Item\Update_shipping_cost\Update_shipping_costRequestBuilderPostRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\Rate_table\Item\WithRate_table_ItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\User_preferences\User_preferencesRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\AccountV2\User_preferences\User_preferencesRequestBuilderPatchRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class AccountV2Client
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

    public function getRateTable(string $rateTableId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?RateTableDetails
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->rate_table()->byRate_table_id($rateTableId)->get(
                new WithRate_table_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateShippingCost(
        string $rateTableId,
        RateTableUpdate $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->rate_table()->byRate_table_id($rateTableId)->update_shipping_cost()->post(
                $body,
                new Update_shipping_costRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPayoutSettings(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PayoutSettingsResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payout_settings()->get(
                new Payout_settingsRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updatePayoutPercentage(UpdatePayoutPercentageRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->payout_settings()->update_percentage()->post(
                $body,
                new Update_percentageRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createCalculatedShippingRules(
        CreateCalculatedShippingRulesRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->create_calculated_shipping_rules()->post(
                $body,
                new Create_calculated_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createFlatShippingRules(
        CreateFlatShippingRulesRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->create_flat_shipping_rules()->post(
                $body,
                new Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createPromotionalShippingRule(
        CreatePromotionalShippingRuleRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->create_promotional_shipping_rule()->post(
                $body,
                new Create_promotional_shipping_ruleRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCombinedShippingRules(?string $xEBAYCMARKETPLACEID = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetCombinedShippingRulesPublicApiResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->get(
                new Combined_shipping_rulesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateCalculatedShippingRules(
        UpdateCalculatedShippingRulesRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->update_calculated_shipping_rules()->post(
                $body,
                new Update_calculated_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateCombinedPayments(
        UpdateCombinedPaymentsRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->update_combined_payments()->post(
                $body,
                new Update_combined_paymentsRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateFlatShippingRules(
        UpdateFlatShippingRulesRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->update_flat_shipping_rules()->post(
                $body,
                new Update_flat_shipping_rulesRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updatePromotionalShippingRule(
        UpdatePromotionalShippingRuleRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->combined_shipping_rules()->update_promotional_shipping_rule()->post(
                $body,
                new Update_promotional_shipping_ruleRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getUserPreferences(
        ?string $fieldgroups = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetUserPreferencesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->user_preferences()->get(
                new User_preferencesRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: User_preferencesRequestBuilderGetRequestConfiguration::createQueryParameters(
                        fieldgroups: $fieldgroups,
                    ),
                )
            )->wait()
        );
    }

    public function setUserPreferences(
        mixed $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->user_preferences()->patch(
                $body,
                new User_preferencesRequestBuilderPatchRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set AccountManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): AccountV2ApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->accountV2BaseUrl);
        return new AccountV2ApiClient($adapter);
    }
}
