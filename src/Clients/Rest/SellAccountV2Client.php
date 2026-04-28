<?php

namespace EBay\AccountManagement\Clients\Rest;

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

final class SellAccountV2Client
{
    public function __construct(private readonly SellAccountV2ApiClient $kiota) {}

    // ── Rate Table ────────────────────────────────────────────────────────

    public function getRateTable(string $rateTableId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->rate_table()->byRate_table_id($rateTableId)->get()->wait();
    }

    public function updateShippingCost(string $rateTableId, RateTableUpdate $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->rate_table()->byRate_table_id($rateTableId)->update_shipping_cost()->post($body)->wait();
    }

    // ── Payout Settings ───────────────────────────────────────────────────

    public function getPayoutSettings(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payout_settings()->get()->wait();
    }

    public function updatePayoutPercentage(UpdatePayoutPercentageRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->payout_settings()->update_percentage()->post($body)->wait();
    }

    // ── Combined Shipping Rules ───────────────────────────────────────────

    public function createCalculatedShippingRules(CreateCalculatedShippingRulesRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->combined_shipping_rules()->create_calculated_shipping_rules()->post($body)->wait();
    }

    public function createFlatShippingRules(CreateFlatShippingRulesRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->combined_shipping_rules()->create_flat_shipping_rules()->post($body)->wait();
    }

    public function createPromotionalShippingRule(CreatePromotionalShippingRuleRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->combined_shipping_rules()->create_promotional_shipping_rule()->post($body)->wait();
    }

    public function getCombinedShippingRules(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->combined_shipping_rules()->get()->wait();
    }

    public function updateCalculatedShippingRules(UpdateCalculatedShippingRulesRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->combined_shipping_rules()->update_calculated_shipping_rules()->post($body)->wait();
    }

    public function updateCombinedPayments(UpdateCombinedPaymentsRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->combined_shipping_rules()->update_combined_payments()->post($body)->wait();
    }

    public function updateFlatShippingRules(UpdateFlatShippingRulesRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->combined_shipping_rules()->update_flat_shipping_rules()->post($body)->wait();
    }

    public function updatePromotionalShippingRule(UpdatePromotionalShippingRuleRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->combined_shipping_rules()->update_promotional_shipping_rule()->post($body)->wait();
    }

    // ── User Preferences ──────────────────────────────────────────────────

    public function getUserPreferences(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->user_preferences()->get()->wait();
    }

    public function setUserPreferences(mixed $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->user_preferences()->patch($body)->wait();
    }
}
