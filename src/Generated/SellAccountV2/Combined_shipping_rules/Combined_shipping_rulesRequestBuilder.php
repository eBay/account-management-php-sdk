<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules;

use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Create_calculated_shipping_rules\Create_calculated_shipping_rulesRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Create_flat_shipping_rules\Create_flat_shipping_rulesRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Create_promotional_shipping_rule\Create_promotional_shipping_ruleRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_calculated_shipping_rules\Update_calculated_shipping_rulesRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_combined_payments\Update_combined_paymentsRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_flat_shipping_rules\Update_flat_shipping_rulesRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Combined_shipping_rules\Update_promotional_shipping_rule\Update_promotional_shipping_ruleRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV2\Models\GetCombinedShippingRulesPublicApiResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /combined_shipping_rules
*/
class Combined_shipping_rulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The create_calculated_shipping_rules property
    */
    public function create_calculated_shipping_rules(): Create_calculated_shipping_rulesRequestBuilder {
        return new Create_calculated_shipping_rulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The create_flat_shipping_rules property
    */
    public function create_flat_shipping_rules(): Create_flat_shipping_rulesRequestBuilder {
        return new Create_flat_shipping_rulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The create_promotional_shipping_rule property
    */
    public function create_promotional_shipping_rule(): Create_promotional_shipping_ruleRequestBuilder {
        return new Create_promotional_shipping_ruleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_calculated_shipping_rules property
    */
    public function update_calculated_shipping_rules(): Update_calculated_shipping_rulesRequestBuilder {
        return new Update_calculated_shipping_rulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_combined_payments property
    */
    public function update_combined_payments(): Update_combined_paymentsRequestBuilder {
        return new Update_combined_paymentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_flat_shipping_rules property
    */
    public function update_flat_shipping_rules(): Update_flat_shipping_rulesRequestBuilder {
        return new Update_flat_shipping_rulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_promotional_shipping_rule property
    */
    public function update_promotional_shipping_rule(): Update_promotional_shipping_ruleRequestBuilder {
        return new Update_promotional_shipping_ruleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new Combined_shipping_rulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/combined_shipping_rules');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves all existing combined shipping rule configurations defined by the authenticated seller, including calculated, flat, and promotional types.
     * @param Combined_shipping_rulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetCombinedShippingRulesPublicApiResponse|null>
     * @throws Exception
    */
    public function get(?Combined_shipping_rulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetCombinedShippingRulesPublicApiResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves all existing combined shipping rule configurations defined by the authenticated seller, including calculated, flat, and promotional types.
     * @param Combined_shipping_rulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Combined_shipping_rulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Combined_shipping_rulesRequestBuilder
    */
    public function withUrl(string $rawUrl): Combined_shipping_rulesRequestBuilder {
        return new Combined_shipping_rulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
