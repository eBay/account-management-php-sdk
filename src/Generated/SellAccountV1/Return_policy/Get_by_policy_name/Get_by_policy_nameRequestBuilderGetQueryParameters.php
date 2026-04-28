<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Return_policy\Get_by_policy_name;

/**
 * This method retrieves the details of a specific return policy. Supply both the policy <code>name</code> and its associated <code>marketplace_id</code> in the request query parameters.
*/
class Get_by_policy_nameRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
    */
    public ?string $marketplaceId = null;
    
    /**
     * @var string|null $name This query parameter specifies the seller-defined name of the return policy you want to retrieve.<br><br> This value can be retrieved for a return policy by using the <a href="/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies" target="_blank ">getReturnPolicies</a> method.
    */
    public ?string $name = null;
    
    /**
     * Instantiates a new Get_by_policy_nameRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $marketplace_id This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     * @param string|null $name This query parameter specifies the seller-defined name of the return policy you want to retrieve.<br><br> This value can be retrieved for a return policy by using the <a href="/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies" target="_blank ">getReturnPolicies</a> method.
    */
    public function __construct(?string $marketplace_id = null, ?string $name = null) {
        $this->marketplaceId = $marketplace_id;
        $this->name = $name;
    }

}
