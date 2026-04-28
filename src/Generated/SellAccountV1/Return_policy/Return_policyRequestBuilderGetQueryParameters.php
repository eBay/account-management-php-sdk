<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Return_policy;

/**
 * This method retrieves all the return policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.
*/
class Return_policyRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This query parameter specifies the ID of the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
    */
    public ?string $marketplaceId = null;
    
    /**
     * Instantiates a new Return_policyRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $marketplace_id This query parameter specifies the ID of the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
    */
    public function __construct(?string $marketplace_id = null) {
        $this->marketplaceId = $marketplace_id;
    }

}
