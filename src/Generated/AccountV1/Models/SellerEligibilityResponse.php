<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\AccountManagement\Generated\AccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that is used to provide the seller's eligibility status for an eBay advertising program.
*/
class SellerEligibilityResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AdvertisingProgramEnum|null $programType An enumerated type that defines the eBay advertising program for which a seller may be eligible. | - **PROMOTED_LISTINGS_STANDARD**: This value indicates that the eBay advertising program is Promoted Listings general campaign strategy (formerly Promoted Listings Standard (PLS)). - **PROMOTED_LISTINGS_ADVANCED**: This value indicates that the eBay advertising program is Promoted listings priority campaign strategy (formerly Promoted Listings Advanced (PLA)). - **OFFSITE_ADS**: This value indicates that the eBay advertising program is Promoted Listings Promoted Offsite (formerly Offsite Ads).
    */
    private ?AdvertisingProgramEnum $programType = null;
    
    /**
     * @var SellerIneligibleReasonEnum|null $reason This enumerated type defines the reason why a seller is ineligible for an eBay advertising program. | - **NOT_ENOUGH_ACTIVITY**: This value indicates that the seller is ineligible for the eBay advertising program due to lack of activity.<br><br>New accounts take a few weeks to become eligible for eBay Promoted Listings. If the seller account is in good standing (Above Standard or Top Rated), the account should become eligible within a few weeks. - **NOT_IN_GOOD_STANDING**: This value indicates that the seller is ineligible for the eBay advertising program because their account is not currently in good standing.<br><br>Below Standard sellers cannot use eBay advertising programs to create new campaigns or edit their existing campaigns. Existing campaigns will be paused by the system. - **RESTRICTED**: This value indicates that the seller is currently restricted from using the corresponding eBay advertising program.
    */
    private ?SellerIneligibleReasonEnum $reason = null;
    
    /**
     * @var SellerEligibilityEnum|null $status This enumerated type defines the seller eligibility status for a specified eBay advertising program. | - **ELIGIBLE**: This value indicates that the seller is eligible for the specified eBay advertising program. - **INELIGIBLE**: This value indicates that the seller is ineligible for the specified eBay advertising program.
    */
    private ?SellerEligibilityEnum $status = null;
    
    /**
     * Instantiates a new SellerEligibilityResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellerEligibilityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellerEligibilityResponse {
        return new SellerEligibilityResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'programType' => fn(ParseNode $n) => $o->setProgramType($n->getEnumValue(AdvertisingProgramEnum::class)),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getEnumValue(SellerIneligibleReasonEnum::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SellerEligibilityEnum::class)),
        ];
    }

    /**
     * Gets the programType property value. An enumerated type that defines the eBay advertising program for which a seller may be eligible. | - **PROMOTED_LISTINGS_STANDARD**: This value indicates that the eBay advertising program is Promoted Listings general campaign strategy (formerly Promoted Listings Standard (PLS)). - **PROMOTED_LISTINGS_ADVANCED**: This value indicates that the eBay advertising program is Promoted listings priority campaign strategy (formerly Promoted Listings Advanced (PLA)). - **OFFSITE_ADS**: This value indicates that the eBay advertising program is Promoted Listings Promoted Offsite (formerly Offsite Ads).
     * @return AdvertisingProgramEnum|null
    */
    public function getProgramType(): ?AdvertisingProgramEnum {
        return $this->programType;
    }

    /**
     * Gets the reason property value. This enumerated type defines the reason why a seller is ineligible for an eBay advertising program. | - **NOT_ENOUGH_ACTIVITY**: This value indicates that the seller is ineligible for the eBay advertising program due to lack of activity.<br><br>New accounts take a few weeks to become eligible for eBay Promoted Listings. If the seller account is in good standing (Above Standard or Top Rated), the account should become eligible within a few weeks. - **NOT_IN_GOOD_STANDING**: This value indicates that the seller is ineligible for the eBay advertising program because their account is not currently in good standing.<br><br>Below Standard sellers cannot use eBay advertising programs to create new campaigns or edit their existing campaigns. Existing campaigns will be paused by the system. - **RESTRICTED**: This value indicates that the seller is currently restricted from using the corresponding eBay advertising program.
     * @return SellerIneligibleReasonEnum|null
    */
    public function getReason(): ?SellerIneligibleReasonEnum {
        return $this->reason;
    }

    /**
     * Gets the status property value. This enumerated type defines the seller eligibility status for a specified eBay advertising program. | - **ELIGIBLE**: This value indicates that the seller is eligible for the specified eBay advertising program. - **INELIGIBLE**: This value indicates that the seller is ineligible for the specified eBay advertising program.
     * @return SellerEligibilityEnum|null
    */
    public function getStatus(): ?SellerEligibilityEnum {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('programType', $this->getProgramType());
        $writer->writeEnumValue('reason', $this->getReason());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the programType property value. An enumerated type that defines the eBay advertising program for which a seller may be eligible. | - **PROMOTED_LISTINGS_STANDARD**: This value indicates that the eBay advertising program is Promoted Listings general campaign strategy (formerly Promoted Listings Standard (PLS)). - **PROMOTED_LISTINGS_ADVANCED**: This value indicates that the eBay advertising program is Promoted listings priority campaign strategy (formerly Promoted Listings Advanced (PLA)). - **OFFSITE_ADS**: This value indicates that the eBay advertising program is Promoted Listings Promoted Offsite (formerly Offsite Ads).
     * @param AdvertisingProgramEnum|null $value Value to set for the programType property.
    */
    public function setProgramType(?AdvertisingProgramEnum $value): void {
        $this->programType = $value;
    }

    /**
     * Sets the reason property value. This enumerated type defines the reason why a seller is ineligible for an eBay advertising program. | - **NOT_ENOUGH_ACTIVITY**: This value indicates that the seller is ineligible for the eBay advertising program due to lack of activity.<br><br>New accounts take a few weeks to become eligible for eBay Promoted Listings. If the seller account is in good standing (Above Standard or Top Rated), the account should become eligible within a few weeks. - **NOT_IN_GOOD_STANDING**: This value indicates that the seller is ineligible for the eBay advertising program because their account is not currently in good standing.<br><br>Below Standard sellers cannot use eBay advertising programs to create new campaigns or edit their existing campaigns. Existing campaigns will be paused by the system. - **RESTRICTED**: This value indicates that the seller is currently restricted from using the corresponding eBay advertising program.
     * @param SellerIneligibleReasonEnum|null $value Value to set for the reason property.
    */
    public function setReason(?SellerIneligibleReasonEnum $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the status property value. This enumerated type defines the seller eligibility status for a specified eBay advertising program. | - **ELIGIBLE**: This value indicates that the seller is eligible for the specified eBay advertising program. - **INELIGIBLE**: This value indicates that the seller is ineligible for the specified eBay advertising program.
     * @param SellerEligibilityEnum|null $value Value to set for the status property.
    */
    public function setStatus(?SellerEligibilityEnum $value): void {
        $this->status = $value;
    }

}
