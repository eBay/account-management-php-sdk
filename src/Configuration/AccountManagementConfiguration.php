<?php

namespace EBay\AccountManagement\Configuration;

final class AccountManagementConfiguration
{
    public string $sellAccountV1BaseUrl  = 'https://api.ebay.com/sell/account/v1';
    public string $sellAccountV2BaseUrl  = 'https://api.ebay.com/sell/account/v2';
    public string $sellFinancesV1BaseUrl = 'https://apiz.ebay.com/sell/finances/v1';
    public string $graphQLBaseUrl        = 'https://api.ebay.com/graphql';

    public ?string $accessToken        = null;
    public bool    $diagnosticLogging  = false;

    public RequestOptions $defaultRequestOptions;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_filter(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [
                $this->sellAccountV1BaseUrl,
                $this->sellAccountV2BaseUrl,
                $this->sellFinancesV1BaseUrl,
                $this->graphQLBaseUrl,
            ]
        )));
    }
}
