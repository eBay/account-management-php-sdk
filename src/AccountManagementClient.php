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

namespace EBay\AccountManagement;

use EBay\AccountManagement\Clients\GraphQL\DynamicGraphQLClient;
use EBay\AccountManagement\Clients\GraphQL\EBayGraphClient;
use EBay\AccountManagement\Clients\Rest\SellAccountV1Client;
use EBay\AccountManagement\Clients\Rest\SellAccountV2Client;
use EBay\AccountManagement\Clients\Rest\SellFinancesV1Client;
use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;

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

        $this->sellAccountV1 = new SellAccountV1Client($guzzle, $config);
        $this->sellAccountV2 = new SellAccountV2Client($guzzle, $config);
        $this->sellFinances  = new SellFinancesV1Client($guzzle, $config);
        $this->graphQL       = new EBayGraphClient(new DynamicGraphQLClient($guzzle, $config));
    }
}
