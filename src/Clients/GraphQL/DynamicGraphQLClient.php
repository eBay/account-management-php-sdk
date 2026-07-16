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

namespace EBay\AccountManagement\Clients\GraphQL;

use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use EBay\AccountManagement\Configuration\RequestOptions;
use EBay\AccountManagement\Exceptions\GraphQLException;
use GuzzleHttp\ClientInterface;

final class DynamicGraphQLClient
{
    public function __construct(
        private readonly ClientInterface $guzzle,
        private readonly AccountManagementConfiguration $config,
    ) {}

    /**
     * @param array<string, mixed> $variables
     * @return array<string, mixed> The `data` field of the GraphQL response.
     */
    public function execute(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $token = $accessToken ?? $this->config->accessToken
            ?? throw new \RuntimeException(
                'No access token. Pass $accessToken or set AccountManagementConfiguration::$accessToken.'
            );

        // Merge default headers + per-request headers
        $extraHeaders = $this->config->defaultRequestOptions->headers;
        if ($requestOptions !== null) {
            $extraHeaders = array_merge($extraHeaders, $requestOptions->headers);
        }

        $headers = array_merge([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type'  => 'application/json',
        ], $extraHeaders);

        $response = $this->guzzle->request('POST', $this->config->graphQLBaseUrl, [
            'headers'     => $headers,
            'json'        => array_filter(['query' => $query, 'variables' => $variables ?: null]),
            'http_errors' => false,
        ]);

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode >= 300) {
            $body = $response->getBody()->getContents();
            throw new GraphQLException([$body], $statusCode);
        }

        $body = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        if (!empty($body['errors'])) {
            throw new GraphQLException(array_column($body['errors'], 'message'));
        }

        return $body['data'] ?? [];
    }
}
