<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Custom_policy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmptyPathSegmentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmptyPathSegmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmptyPathSegmentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmptyPathSegmentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmptyPathSegmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmptyPathSegmentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmptyPathSegmentRequestBuilderGetQueryParameters.
     * @param string|null $policy_types This query parameter specifies the type of custom policies to be returned.<br><br>Multiple policy types may be requested in a single call by providing a comma-delimited set of all policy types to be returned.<br><br><span class="tablenote"><strong>Note:</strong> Omitting this query parameter from a request will also return policies of all policy types.</span><br> See the <a href="/api-docs/sell/account/types/api:CustomPolicyTypeEnum" target="_blank ">CustomPolicyTypeEnum</a> type for a list of supported values.
     * @return EmptyPathSegmentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $policy_types = null): EmptyPathSegmentRequestBuilderGetQueryParameters {
        return new EmptyPathSegmentRequestBuilderGetQueryParameters($policy_types);
    }

}
