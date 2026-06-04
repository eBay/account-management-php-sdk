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
use GuzzleHttp\HandlerStack;
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
        if ($guzzle === null) {
            $stack = HandlerStack::create();

            if ($config->diagnosticLogging) {
                $stack->push(function (callable $handler) {
                    return function ($request, array $options) use ($handler) {
                        return $handler($request, $options)->then(function ($response) use ($request) {
                            if ($response->getStatusCode() >= 400) {
                                fwrite(STDERR, sprintf(
                                    "[REST %d] %s %s\n",
                                    $response->getStatusCode(),
                                    $request->getMethod(),
                                    str_replace(["\r", "\n"], ' ', (string) $request->getUri())
                                ));
                                $body = $response->getBody()->__toString();
                                fwrite(STDERR, sprintf("[REST body] %s\n", $body));
                                $response->getBody()->rewind();
                            }
                            return $response;
                        });
                    };
                });
            }

            $guzzle = new GuzzleClient([
                'timeout'         => 30,
                'connect_timeout' => 5,
                'handler'         => $stack,
            ]);
        }

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        // ── Sell Account V1 ──────────────────────────────────────────────
        $v1Adapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $v1Adapter->setBaseUrl($config->sellAccountV1BaseUrl);
        $this->sellAccountV1 = new SellAccountV1Client(new SellAccountV1ApiClient($v1Adapter), $config);

        // ── Sell Account V2 ──────────────────────────────────────────────
        $v2Adapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $v2Adapter->setBaseUrl($config->sellAccountV2BaseUrl);
        $this->sellAccountV2 = new SellAccountV2Client(new SellAccountV2ApiClient($v2Adapter), $config);

        // ── Sell Finances V1 ─────────────────────────────────────────────
        $finAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $finAdapter->setBaseUrl($config->sellFinancesV1BaseUrl);
        $this->sellFinances = new SellFinancesV1Client(new SellFinancesV1ApiClient($finAdapter), $config);

        // ── eBay Graph (GraphQL) ─────────────────────────────────────────
        $this->graphQL = new EBayGraphClient(
            new DynamicGraphQLClient($guzzle, $config)
        );
    }
}
