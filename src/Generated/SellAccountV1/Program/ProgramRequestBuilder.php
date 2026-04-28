<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Program;

use EBay\AccountManagement\Generated\SellAccountV1\Program\Get_opted_in_programs\Get_opted_in_programsRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Program\Opt_in\Opt_inRequestBuilder;
use EBay\AccountManagement\Generated\SellAccountV1\Program\Opt_out\Opt_outRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /program
*/
class ProgramRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_opted_in_programs property
    */
    public function get_opted_in_programs(): Get_opted_in_programsRequestBuilder {
        return new Get_opted_in_programsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The opt_in property
    */
    public function opt_in(): Opt_inRequestBuilder {
        return new Opt_inRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The opt_out property
    */
    public function opt_out(): Opt_outRequestBuilder {
        return new Opt_outRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ProgramRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/program');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
