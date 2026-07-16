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

use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use EBay\AccountManagement\Configuration\KiotaAuthProvider;
use EBay\AccountManagement\Configuration\RequestOptions;
use EBay\AccountManagement\Generated\SellFinancesV1\SellFinancesV1ApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

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
        private readonly GuzzleClient $guzzle,
        private readonly AccountManagementConfiguration $config,
    ) {}

    // ── Adapter factory ───────────────────────────────────────────────────

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set AccountManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): SellFinancesV1ApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->sellFinancesV1BaseUrl);
        return new SellFinancesV1ApiClient($adapter);
    }

    // ── Headers helper ────────────────────────────────────────────────────

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }

    // ── Billing Activity ──────────────────────────────────────────────────

    public function getBillingActivities(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->billing_activity()->get(
                new Billing_activityRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Billing_activityRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    // ── Order Earnings ────────────────────────────────────────────────────

    public function getOrderEarnings(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order_earnings()->get(
                new Order_earningsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Order_earningsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    public function getOrderEarningsById(string $orderId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order_earnings()->byOrder_id($orderId)->get(
                new WithOrder_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getOrderEarningsSummary(?string $filter = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order_earnings_summary()->get(
                new Order_earnings_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Order_earnings_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    // ── Payout ────────────────────────────────────────────────────────────

    public function getPayout(string $payoutId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payout()->byPayout_Id($payoutId)->get(
                new WithPayout_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPayouts(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payout()->get(
                new PayoutRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: PayoutRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    public function getPayoutSummary(?string $filter = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payout_summary()->get(
                new Payout_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Payout_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    // ── Seller Funds Summary ──────────────────────────────────────────────

    public function getSellerFundsSummary(?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->seller_funds_summary()->get(
                new Seller_funds_summaryRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    // ── Transactions ──────────────────────────────────────────────────────

    public function getTransactions(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->transaction()->get(
                new TransactionRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: TransactionRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    public function getTransactionSummary(?string $filter = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->transaction_summary()->get(
                new Transaction_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Transaction_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    // ── Transfer ──────────────────────────────────────────────────────────

    public function getTransfer(string $transferId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->transfer()->byTransfer_Id($transferId)->get(
                new WithTransfer_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }
}
