<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Subscription;

/**
 * This method retrieves a list of subscriptions associated with the seller account.
*/
class SubscriptionRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("continuation_token")
     * @var string|null $continuationToken This field is for future use.
    */
    public ?string $continuationToken = null;
    
    /**
     * @var string|null $limit This field is for future use.
    */
    public ?string $limit = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $continuation_token This field is for future use.
     * @param string|null $limit This field is for future use.
    */
    public function __construct(?string $continuation_token = null, ?string $limit = null) {
        $this->continuationToken = $continuation_token;
        $this->limit = $limit;
    }

}
