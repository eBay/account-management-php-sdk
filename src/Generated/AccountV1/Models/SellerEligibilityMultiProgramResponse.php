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
 * The base response of the <b>getAdvertisingEligibility</b> method that contains the seller eligibility information for one or more advertising programs.
*/
class SellerEligibilityMultiProgramResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<SellerEligibilityResponse>|null $advertisingEligibility An array of response fields that define the seller eligibility for eBay advertising programs.
    */
    private ?array $advertisingEligibility = null;
    
    /**
     * Instantiates a new SellerEligibilityMultiProgramResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellerEligibilityMultiProgramResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellerEligibilityMultiProgramResponse {
        return new SellerEligibilityMultiProgramResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the advertisingEligibility property value. An array of response fields that define the seller eligibility for eBay advertising programs.
     * @return array<SellerEligibilityResponse>|null
    */
    public function getAdvertisingEligibility(): ?array {
        return $this->advertisingEligibility;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'advertisingEligibility' => fn(ParseNode $n) => $o->setAdvertisingEligibility($n->getCollectionOfObjectValues([SellerEligibilityResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('advertisingEligibility', $this->getAdvertisingEligibility());
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
     * Sets the advertisingEligibility property value. An array of response fields that define the seller eligibility for eBay advertising programs.
     * @param array<SellerEligibilityResponse>|null $value Value to set for the advertisingEligibility property.
    */
    public function setAdvertisingEligibility(?array $value): void {
        $this->advertisingEligibility = $value;
    }

}
