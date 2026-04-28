<?php

namespace EBay\AccountManagement;

use EBay\AccountManagement\Clients\GraphQL\DynamicGraphQLClient;
use EBay\AccountManagement\Clients\GraphQL\EBayGraphClient;
use EBay\AccountManagement\Clients\Rest\SellAccountV1Client;
use EBay\AccountManagement\Clients\Rest\SellAccountV2Client;
use EBay\AccountManagement\Clients\Rest\SellFinancesV1Client;
use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use EBay\AccountManagement\Configuration\KiotaAuthProvider;
use EBay\AccountManagement\Generated\SellAccountV1\SellAccountV1ApiClient;
use EBay\AccountManagement\Generated\SellAccountV2\SellAccountV2ApiClient;
use EBay\AccountManagement\Generated\SellFinancesV1\SellFinancesV1ApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class AccountManagementClient
{
    public readonly SellAccountV1Client  $sellAccountV1;
    public readonly SellAccountV2Client  $sellAccountV2;
    public readonly SellFinancesV1Client $sellFinances;
    public readonly EBayGraphClient      $graphQL;

    public function __construct(
        AccountManagementConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        // ── Sell Account V1 ──────────────────────────────────────────────
        $v1Adapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $v1Adapter->setBaseUrl($config->sellAccountV1BaseUrl);
        $this->sellAccountV1 = new SellAccountV1Client(new SellAccountV1ApiClient($v1Adapter));

        // ── Sell Account V2 ──────────────────────────────────────────────
        $v2Adapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $v2Adapter->setBaseUrl($config->sellAccountV2BaseUrl);
        $this->sellAccountV2 = new SellAccountV2Client(new SellAccountV2ApiClient($v2Adapter));

        // ── Sell Finances V1 ─────────────────────────────────────────────
        $finAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $finAdapter->setBaseUrl($config->sellFinancesV1BaseUrl);
        $this->sellFinances = new SellFinancesV1Client(new SellFinancesV1ApiClient($finAdapter));

        // ── eBay Graph (GraphQL) ─────────────────────────────────────────
        $this->graphQL = new EBayGraphClient(
            new DynamicGraphQLClient($guzzle, $config)
        );
    }
}
