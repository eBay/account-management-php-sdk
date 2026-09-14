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
 * This type defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
*/
class FlatShippingRuleType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CombinedShippingRule>|null $combinedShippingRules This array specifies the type of combined-shipping rule applied, such as flat-rate or cost-based.
    */
    private ?array $combinedShippingRules = null;
    
    /**
     * @var CombinedShippingRuleTypeEnum|null $combinedShippingRuleType This container defines the type of discount rule applied (e.g., percentage-based, fixed-rate).
    */
    private ?CombinedShippingRuleTypeEnum $combinedShippingRuleType = null;
    
    /**
     * Instantiates a new FlatShippingRuleType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FlatShippingRuleType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FlatShippingRuleType {
        return new FlatShippingRuleType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedShippingRules property value. This array specifies the type of combined-shipping rule applied, such as flat-rate or cost-based.
     * @return array<CombinedShippingRule>|null
    */
    public function getCombinedShippingRules(): ?array {
        return $this->combinedShippingRules;
    }

    /**
     * Gets the combinedShippingRuleType property value. This container defines the type of discount rule applied (e.g., percentage-based, fixed-rate).
     * @return CombinedShippingRuleTypeEnum|null
    */
    public function getCombinedShippingRuleType(): ?CombinedShippingRuleTypeEnum {
        return $this->combinedShippingRuleType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'combinedShippingRules' => fn(ParseNode $n) => $o->setCombinedShippingRules($n->getCollectionOfObjectValues([CombinedShippingRule::class, 'createFromDiscriminatorValue'])),
            'combinedShippingRuleType' => fn(ParseNode $n) => $o->setCombinedShippingRuleType($n->getEnumValue(CombinedShippingRuleTypeEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('combinedShippingRules', $this->getCombinedShippingRules());
        $writer->writeEnumValue('combinedShippingRuleType', $this->getCombinedShippingRuleType());
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
     * Sets the combinedShippingRules property value. This array specifies the type of combined-shipping rule applied, such as flat-rate or cost-based.
     * @param array<CombinedShippingRule>|null $value Value to set for the combinedShippingRules property.
    */
    public function setCombinedShippingRules(?array $value): void {
        $this->combinedShippingRules = $value;
    }

    /**
     * Sets the combinedShippingRuleType property value. This container defines the type of discount rule applied (e.g., percentage-based, fixed-rate).
     * @param CombinedShippingRuleTypeEnum|null $value Value to set for the combinedShippingRuleType property.
    */
    public function setCombinedShippingRuleType(?CombinedShippingRuleTypeEnum $value): void {
        $this->combinedShippingRuleType = $value;
    }

}
