<?php

namespace EBay\AccountManagement\Configuration;

final class AccountManagementConfiguration
{
    public string $sellAccountV1BaseUrl   = 'https://api.ebay.com';
    public string $sellAccountV2BaseUrl   = 'https://api.ebay.com';
    public string $sellFinancesV1BaseUrl  = 'https://apiz.ebay.com';
    public string $graphQLBaseUrl         = 'https://api.ebay.com/graphql';

    public ?string $accessToken     = null;
    public bool $diagnosticLogging  = false;

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
