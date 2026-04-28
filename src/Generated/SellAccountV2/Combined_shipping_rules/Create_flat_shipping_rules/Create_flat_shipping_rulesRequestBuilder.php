<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Create_flat_shipping_rules;

use EBay\AccountManagement\Generated\SellAccountV2\Models\CreateFlatShippingRulesRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /combined_shipping_rules/create_flat_shipping_rules
*/
class Create_flat_shipping_rulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Create_flat_shipping_rulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/combined_shipping_rules/create_flat_shipping_rules');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to create fixed-rate (flat) shipping rules that apply standard combined shipping costs for a seller’s listings.
     * @param CreateFlatShippingRulesRequest $body This type represents a request to configure flat-rate combined shipping rules with specified durations and conditions.
     * @param Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(CreateFlatShippingRulesRequest $body, ?Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method is used to create fixed-rate (flat) shipping rules that apply standard combined shipping costs for a seller’s listings.
     * @param CreateFlatShippingRulesRequest $body This type represents a request to configure flat-rate combined shipping rules with specified durations and conditions.
     * @param Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateFlatShippingRulesRequest $body, ?Create_flat_shipping_rulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Create_flat_shipping_rulesRequestBuilder
    */
    public function withUrl(string $rawUrl): Create_flat_shipping_rulesRequestBuilder {
        return new Create_flat_shipping_rulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
