<?php

namespace EBay\AccountManagement\Clients\GraphQL;

use EBay\AccountManagement\Configuration\AccountManagementConfiguration;
use EBay\AccountManagement\Configuration\RequestOptions;
use EBay\AccountManagement\Configuration\TokenContext;
use EBay\AccountManagement\Exceptions\GraphQLException;
use GuzzleHttp\ClientInterface;

final class DynamicGraphQLClient
{
    public function __construct(
        private readonly ClientInterface $guzzle,
        private readonly AccountManagementConfiguration $config,
    ) {}

    /** @return array<string, mixed> The `data` field of the GraphQL response. */
    public function execute(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $token = $accessToken ?? TokenContext::get() ?? $this->config->accessToken
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
