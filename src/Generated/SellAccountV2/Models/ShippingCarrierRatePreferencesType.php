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

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This field is included if the seller wishes to add or modify the shipping carrier rate type that is available to the seller. This field is only returned if set. </br><b>Note</b>: This container is only applicable to the eBay US marketplace.
*/
class ShippingCarrierRatePreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fedexRateOption This enum is included if the seller wishes to add or modify the FedEx shipping carrier rate. </br><b>Note</b>: This preference is only applicable to the eBay US marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:FedexRateOptionEnum'>eBay API documentation</a>
    */
    private ?string $fedexRateOption = null;
    
    /**
     * @var string|null $upsRateOption This enum is included if the seller wishes to add or modify the UPS shipping carrier rate. </br><b>Note</b>: This preference is only applicable to the eBay US marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:UPSRateOptionEnum'>eBay API documentation</a>
    */
    private ?string $upsRateOption = null;
    
    /**
     * Instantiates a new ShippingCarrierRatePreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingCarrierRatePreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingCarrierRatePreferencesType {
        return new ShippingCarrierRatePreferencesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the fedexRateOption property value. This enum is included if the seller wishes to add or modify the FedEx shipping carrier rate. </br><b>Note</b>: This preference is only applicable to the eBay US marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:FedexRateOptionEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFedexRateOption(): ?string {
        return $this->fedexRateOption;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fedexRateOption' => fn(ParseNode $n) => $o->setFedexRateOption($n->getStringValue()),
            'upsRateOption' => fn(ParseNode $n) => $o->setUpsRateOption($n->getStringValue()),
        ];
    }

    /**
     * Gets the upsRateOption property value. This enum is included if the seller wishes to add or modify the UPS shipping carrier rate. </br><b>Note</b>: This preference is only applicable to the eBay US marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:UPSRateOptionEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUpsRateOption(): ?string {
        return $this->upsRateOption;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fedexRateOption', $this->getFedexRateOption());
        $writer->writeStringValue('upsRateOption', $this->getUpsRateOption());
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
     * Sets the fedexRateOption property value. This enum is included if the seller wishes to add or modify the FedEx shipping carrier rate. </br><b>Note</b>: This preference is only applicable to the eBay US marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:FedexRateOptionEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the fedexRateOption property.
    */
    public function setFedexRateOption(?string $value): void {
        $this->fedexRateOption = $value;
    }

    /**
     * Sets the upsRateOption property value. This enum is included if the seller wishes to add or modify the UPS shipping carrier rate. </br><b>Note</b>: This preference is only applicable to the eBay US marketplace. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:UPSRateOptionEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the upsRateOption property.
    */
    public function setUpsRateOption(?string $value): void {
        $this->upsRateOption = $value;
    }

}
