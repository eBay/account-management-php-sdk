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
use EBay\AccountManagement\Generated\SellFinancesV1\SellFinancesV1ApiClient;

// Request configuration classes
use EBay\AccountManagement\Generated\SellFinancesV1\Billing_activity\Billing_activityRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Order_earnings\Order_earningsRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Order_earnings\Item\WithOrder_ItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Order_earnings_summary\Order_earnings_summaryRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Payout\Item\WithPayout_ItemRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Payout\PayoutRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Payout_summary\Payout_summaryRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Seller_funds_summary\Seller_funds_summaryRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Transaction\TransactionRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Transaction_summary\Transaction_summaryRequestBuilderGetRequestConfiguration;
use EBay\AccountManagement\Generated\SellFinancesV1\Transfer\Item\WithTransfer_ItemRequestBuilderGetRequestConfiguration;

final class SellFinancesV1Client
{
    public function __construct(
        private readonly SellFinancesV1ApiClient $kiota,
        private readonly AccountManagementConfiguration $config,
    ) {}

    // ── Headers helper ────────────────────────────────────────────────────

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        if ($requestOptions !== null) {
            $headers = array_merge($headers, $requestOptions->headers);
        }
        return $headers;
    }

    // ── Billing Activity ──────────────────────────────────────────────────

    public function getBillingActivities(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->billing_activity()->get(
            new Billing_activityRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Billing_activityRequestBuilderGetRequestConfiguration::createQueryParameters(
                    filter: $filter,
                    limit: $limit,
                    offset: $offset,
                    sort: $sort,
                ),
            )
        )->wait());
    }

    // ── Order Earnings ────────────────────────────────────────────────────

    public function getOrderEarnings(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->order_earnings()->get(
            new Order_earningsRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Order_earningsRequestBuilderGetRequestConfiguration::createQueryParameters(
                    filter: $filter,
                    limit: $limit,
                    offset: $offset,
                    sort: $sort,
                ),
            )
        )->wait());
    }

    public function getOrderEarningsById(string $orderId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->order_earnings()->byOrder_id($orderId)->get(
            new WithOrder_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getOrderEarningsSummary(?string $filter = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->order_earnings_summary()->get(
            new Order_earnings_summaryRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Order_earnings_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                    filter: $filter,
                ),
            )
        )->wait());
    }

    // ── Payout ────────────────────────────────────────────────────────────

    public function getPayout(string $payoutId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payout()->byPayout_Id($payoutId)->get(
            new WithPayout_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    public function getPayouts(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payout()->get(
            new PayoutRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: PayoutRequestBuilderGetRequestConfiguration::createQueryParameters(
                    filter: $filter,
                    limit: $limit,
                    offset: $offset,
                    sort: $sort,
                ),
            )
        )->wait());
    }

    public function getPayoutSummary(?string $filter = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->payout_summary()->get(
            new Payout_summaryRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Payout_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                    filter: $filter,
                ),
            )
        )->wait());
    }

    // ── Seller Funds Summary ──────────────────────────────────────────────

    public function getSellerFundsSummary(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->seller_funds_summary()->get(
            new Seller_funds_summaryRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }

    // ── Transactions ──────────────────────────────────────────────────────

    public function getTransactions(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->transaction()->get(
            new TransactionRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: TransactionRequestBuilderGetRequestConfiguration::createQueryParameters(
                    filter: $filter,
                    limit: $limit,
                    offset: $offset,
                    sort: $sort,
                ),
            )
        )->wait());
    }

    public function getTransactionSummary(?string $filter = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->transaction_summary()->get(
            new Transaction_summaryRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Transaction_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                    filter: $filter,
                ),
            )
        )->wait());
    }

    // ── Transfer ──────────────────────────────────────────────────────────

    public function getTransfer(string $transferId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->transfer()->byTransfer_Id($transferId)->get(
            new WithTransfer_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions))
        )->wait());
    }
}
