<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Advertising_eligibility;

/**
 * This method allows developers to check the seller eligibility status for eBay advertising programs.
*/
class Advertising_eligibilityRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("program_types")
     * @var string|null $programTypes A comma-separated list of eBay advertising programs for which eligibility status will be returned.<br><br> See the <a href="/api-docs/sell/account/types/plser:AdvertisingProgramEnum" target="_blank"> AdvertisingProgramEnum</a> type for a list of supported values.<br><br>If no programs are specified, the results will be returned for all programs.
    */
    public ?string $programTypes = null;
    
    /**
     * Instantiates a new Advertising_eligibilityRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $program_types A comma-separated list of eBay advertising programs for which eligibility status will be returned.<br><br> See the <a href="/api-docs/sell/account/types/plser:AdvertisingProgramEnum" target="_blank"> AdvertisingProgramEnum</a> type for a list of supported values.<br><br>If no programs are specified, the results will be returned for all programs.
    */
    public function __construct(?string $program_types = null) {
        $this->programTypes = $program_types;
    }

}
