<?php

namespace EBay\AccountManagement\Clients\Rest;

use EBay\AccountManagement\Configuration\TokenContext;
use EBay\AccountManagement\Generated\SellFinancesV1\SellFinancesV1ApiClient;

final class SellFinancesV1Client
{
    public function __construct(private readonly SellFinancesV1ApiClient $kiota) {}

    // ── Billing Activity ──────────────────────────────────────────────────

    public function getBillingActivities(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->billing_activity()->get()->wait();
    }

    // ── Order Earnings ────────────────────────────────────────────────────

    public function getOrderEarnings(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->order_earnings()->get()->wait();
    }

    public function getOrderEarningsById(string $orderId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->order_earnings()->byOrder_id($orderId)->get()->wait();
    }

    public function getOrderEarningsSummary(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->order_earnings_summary()->get()->wait();
    }

    // ── Payout ────────────────────────────────────────────────────────────

    public function getPayout(string $payoutId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payout()->byPayout_Id($payoutId)->get()->wait();
    }

    public function getPayouts(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payout()->get()->wait();
    }

    public function getPayoutSummary(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->payout_summary()->get()->wait();
    }

    // ── Seller Funds Summary ──────────────────────────────────────────────

    public function getSellerFundsSummary(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->seller_funds_summary()->get()->wait();
    }

    // ── Transactions ──────────────────────────────────────────────────────

    public function getTransactions(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->transaction()->get()->wait();
    }

    public function getTransactionSummary(?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->transaction_summary()->get()->wait();
    }

    // ── Transfer ──────────────────────────────────────────────────────────

    public function getTransfer(string $transferId, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->transfer()->byTransfer_Id($transferId)->get()->wait();
    }
}
