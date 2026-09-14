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

namespace EBay\AccountManagement\Generated\AccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container is used to change the combined payment option. Sellers have the option to combine multiple line items from the same buyer into a combined invoice that can be paid for with one payment. See CombinedPaymentOptionEnum for a description of each value.
*/
class CombinedPaymentPreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CombinedPaymentOptionEnum|null $combinedPaymentOption This enum type defines the available options for handling combined payments when a seller allows multiple line items from the same buyer to be paid for with a single payment. See <code>CombinedPaymentOptionEnum</code> for a description of each value.
    */
    private ?CombinedPaymentOptionEnum $combinedPaymentOption = null;
    
    /**
     * Instantiates a new CombinedPaymentPreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CombinedPaymentPreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CombinedPaymentPreferencesType {
        return new CombinedPaymentPreferencesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedPaymentOption property value. This enum type defines the available options for handling combined payments when a seller allows multiple line items from the same buyer to be paid for with a single payment. See <code>CombinedPaymentOptionEnum</code> for a description of each value.
     * @return CombinedPaymentOptionEnum|null
    */
    public function getCombinedPaymentOption(): ?CombinedPaymentOptionEnum {
        return $this->combinedPaymentOption;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'combinedPaymentOption' => fn(ParseNode $n) => $o->setCombinedPaymentOption($n->getEnumValue(CombinedPaymentOptionEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('combinedPaymentOption', $this->getCombinedPaymentOption());
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
     * Sets the combinedPaymentOption property value. This enum type defines the available options for handling combined payments when a seller allows multiple line items from the same buyer to be paid for with a single payment. See <code>CombinedPaymentOptionEnum</code> for a description of each value.
     * @param CombinedPaymentOptionEnum|null $value Value to set for the combinedPaymentOption property.
    */
    public function setCombinedPaymentOption(?CombinedPaymentOptionEnum $value): void {
        $this->combinedPaymentOption = $value;
    }

}
