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
use EBay\AccountManagement\Clients\Rest\AccountV1Client;
use EBay\AccountManagement\Clients\Rest\AccountV2Client;
use EBay\AccountManagement\Clients\Rest\FinancesClient;
use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Main entry point for the eBay Account Management PHP SDK.
 */
final class AccountManagementClient
{
    public readonly AccountV1Client $accountV1;
    public readonly AccountV2Client $accountV2;
    public readonly FinancesClient $finances;
    public readonly EBayGraphClient $graphQL;

    public function __construct(
        AccountManagementConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= $this->buildGuzzle($config);

        $this->accountV1 = new AccountV1Client($guzzle, $config);
        $this->accountV2 = new AccountV2Client($guzzle, $config);
        $this->finances = new FinancesClient($guzzle, $config);

        $this->graphQL = new EBayGraphClient(
            new DynamicGraphQLClient($guzzle, $config)
        );
    }

    /**
     * Build a Guzzle client with optional diagnostic logging middleware.
     * When $config->diagnosticLogging is true, all non-2xx responses are
     * logged to STDERR with method, URI, status code, and response body.
     */
    private function buildGuzzle(AccountManagementConfiguration $config): GuzzleClient
    {
        $stack = HandlerStack::create();

        if ($config->diagnosticLogging) {
            $stack->push(static function (callable $handler): callable {
                return static function (RequestInterface $request, array $options) use ($handler): mixed {
                    return $handler($request, $options)->then(
                        static function (ResponseInterface $response) use ($request): ResponseInterface {
                            $status = $response->getStatusCode();
                            if ($status < 200 || $status >= 300) {
                                $body = (string) $response->getBody();
                                fwrite(
                                    STDERR,
                                    sprintf(
                                        "[AccountManagementSDK] %s %s -> HTTP %d\n%s\n",
                                        $request->getMethod(),
                                        str_replace(["\r", "\n"], ' ', (string) $request->getUri()),
                                        $status,
                                        $body
                                    )
                                );
                            }
                            return $response;
                        }
                    );
                };
            });
        }

        return new GuzzleClient([
            'handler'         => $stack,
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);
    }
}
