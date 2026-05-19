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
 * This container defines the updated shipping cost information for a rate object identified by <b>rateId</b>.<br/><br/>To view a list of all rate objects and corresponding <b>rateID</b> values, issue <b>getRateTable</b> for the rate table identified by <b>rateTableId</b>.
*/
class RateUpdate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var Amount|null $additionalCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $additionalCost = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $rateId The identifier for the rate object.<br/><br/><span class="tablenote"><strong>Note:</strong> This is a string automatically assigned by the system when the rate object is created. It cannot be changed or updated.</span>
    */
    private ?string $rateId = null;
    
    /**
     * @var Amount|null $shippingCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $shippingCost = null;
    
    /**
     * Instantiates a new RateUpdate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RateUpdate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RateUpdate {
        return new RateUpdate();
    }

    /**
     * Gets the additionalCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAdditionalCost(): ?Amount {
        return $this->additionalCost;
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
            'additionalCost' => fn(ParseNode $n) => $o->setAdditionalCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'rateId' => fn(ParseNode $n) => $o->setRateId($n->getStringValue()),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the rateId property value. The identifier for the rate object.<br/><br/><span class="tablenote"><strong>Note:</strong> This is a string automatically assigned by the system when the rate object is created. It cannot be changed or updated.</span>
     * @return string|null
    */
    public function getRateId(): ?string {
        return $this->rateId;
    }

    /**
     * Gets the shippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getShippingCost(): ?Amount {
        return $this->shippingCost;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('additionalCost', $this->getAdditionalCost());
        $writer->writeStringValue('rateId', $this->getRateId());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the additionalCost property.
    */
    public function setAdditionalCost(?Amount $value): void {
        $this->additionalCost = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the rateId property value. The identifier for the rate object.<br/><br/><span class="tablenote"><strong>Note:</strong> This is a string automatically assigned by the system when the rate object is created. It cannot be changed or updated.</span>
     * @param string|null $value Value to set for the rateId property.
    */
    public function setRateId(?string $value): void {
        $this->rateId = $value;
    }

    /**
     * Sets the shippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

}
