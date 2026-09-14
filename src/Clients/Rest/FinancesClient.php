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
use EBay\AccountManagement\Generated\Finances\FinancesApiClient;
use EBay\AccountManagement\Generated\Finances\Models\BillingActivityResponse;
use EBay\AccountManagement\Generated\Finances\Models\OrderEarning;
use EBay\AccountManagement\Generated\Finances\Models\OrderEarnings;
use EBay\AccountManagement\Generated\Finances\Models\OrderEarningsSummary;
use EBay\AccountManagement\Generated\Finances\Models\Payout;
use EBay\AccountManagement\Generated\Finances\Models\PayoutSummaryResponse;
use EBay\AccountManagement\Generated\Finances\Models\Payouts;
use EBay\AccountManagement\Generated\Finances\Models\SellerFundsSummaryResponse;
use EBay\AccountManagement\Generated\Finances\Models\TransactionSummaryResponse;
use EBay\AccountManagement\Generated\Finances\Models\Transactions;
use EBay\AccountManagement\Generated\Finances\Models\Transfer;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class FinancesClient
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

    /**
     * @param array<string>|null $filter
     * @param array<string>|null $sort
     */
    public function getOrderEarnings(
        ?array $filter = null,
        ?int $limit = null,
        ?int $offset = null,
        ?array $sort = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?OrderEarnings
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->order_earnings()->get(
                new \EBay\AccountManagement\Generated\Finances\Order_earnings\Order_earningsRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\Finances\Order_earnings\Order_earningsRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    public function getOrderEarningsById(
        string $orderId,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?OrderEarning
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->order_earnings()->byOrder_id($orderId)->get(
                new \EBay\AccountManagement\Generated\Finances\Order_earnings\Item\WithOrder_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /**
     * @param array<string>|null $filter
     */
    public function getOrderEarningsSummary(
        ?array $filter = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?OrderEarningsSummary
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->order_earnings_summary()->get(
                new \EBay\AccountManagement\Generated\Finances\Order_earnings_summary\Order_earnings_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\Finances\Order_earnings_summary\Order_earnings_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getPayout(
        string $payoutId,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Payout
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->payout()->byPayout_Id($payoutId)->get(
                new \EBay\AccountManagement\Generated\Finances\Payout\Item\Payout_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /**
     * @param array<string>|null $filter
     * @param array<string>|null $sort
     */
    public function getPayouts(
        ?array $filter = null,
        ?int $limit = null,
        ?int $offset = null,
        ?array $sort = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Payouts
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->payout()->get(
                new \EBay\AccountManagement\Generated\Finances\Payout\PayoutRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\Finances\Payout\PayoutRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    /**
     * @param array<string>|null $filter
     */
    public function getPayoutSummary(
        ?array $filter = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PayoutSummaryResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->payout_summary()->get(
                new \EBay\AccountManagement\Generated\Finances\Payout_summary\Payout_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\Finances\Payout_summary\Payout_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getSellerFundsSummary(?string $xEBAYCMARKETPLACEID = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SellerFundsSummaryResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->seller_funds_summary()->get(
                new \EBay\AccountManagement\Generated\Finances\Seller_funds_summary\Seller_funds_summaryRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    /**
     * @param array<string>|null $filter
     * @param array<string>|null $sort
     */
    public function getTransactions(
        ?array $filter = null,
        ?int $limit = null,
        ?int $offset = null,
        ?array $sort = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Transactions
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->transaction()->get(
                new \EBay\AccountManagement\Generated\Finances\Transaction\TransactionRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\Finances\Transaction\TransactionRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    /**
     * @param array<string>|null $filter
     */
    public function getTransactionSummary(
        ?array $filter = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?TransactionSummaryResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->transaction_summary()->get(
                new \EBay\AccountManagement\Generated\Finances\Transaction_summary\Transaction_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\Finances\Transaction_summary\Transaction_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                    ),
                )
            )->wait()
        );
    }

    public function getTransfer(
        string $transferId,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Transfer
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->transfer()->byTransfer_Id($transferId)->get(
                new \EBay\AccountManagement\Generated\Finances\Transfer\Item\Transfer_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getBillingActivities(
        ?string $filter = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $sort = null,
        ?string $acceptLanguage = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?BillingActivityResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($acceptLanguage !== null) {
            $headers["Accept-Language"] = $acceptLanguage;
        }
        return $this->call($accessToken, fn($api) =>
            $api->billing_activity()->get(
                new \EBay\AccountManagement\Generated\Finances\Billing_activity\Billing_activityRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AccountManagement\Generated\Finances\Billing_activity\Billing_activityRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
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

    private function buildApiClient(string $token): FinancesApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->financesBaseUrl);
        return new FinancesApiClient($adapter);
    }
}
