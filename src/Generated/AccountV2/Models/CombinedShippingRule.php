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
 * This container defines a discount profile schema for combined shipping, including rule IDs, names, and applicable weight or amount reductions.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable for the create rule use case.
*/
class CombinedShippingRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $combinedShippingRuleId This field represents the unique identifier for the combined-shipping discount profile, <br><br>used to reference or update a specific rule configuration.
    */
    private ?string $combinedShippingRuleId = null;
    
    /**
     * @var string|null $combinedShippingRuleName This field specifies the unique name identifying the combined shipping discount profile within the seller’s account. This name is configured by the seller and can have a maximum of XX characters.
    */
    private ?string $combinedShippingRuleName = null;
    
    /**
     * @var Amount|null $eachAdditionalAmount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $eachAdditionalAmount = null;
    
    /**
     * @var Amount|null $eachAdditionalAmountOffShippingCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $eachAdditionalAmountOffShippingCost = null;
    
    /**
     * @var float|null $eachAdditionalPercentOffShippingCost This integer specifies the percentage discount applied to the total shipping cost for each additional item in the combined order.
    */
    private ?float $eachAdditionalPercentOffShippingCost = null;
    
    /**
     * @var string|null $mappedCombinedShippingRuleId This field specifies the unique ID that links this combined-shipping rule to another related rule in the seller’s account.
    */
    private ?string $mappedCombinedShippingRuleId = null;
    
    /**
     * @var MeasureType|null $weightOffTotalWeight This type displays measurement type with value, unit, and measurement system.
    */
    private ?MeasureType $weightOffTotalWeight = null;
    
    /**
     * Instantiates a new CombinedShippingRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CombinedShippingRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CombinedShippingRule {
        return new CombinedShippingRule();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedShippingRuleId property value. This field represents the unique identifier for the combined-shipping discount profile, <br><br>used to reference or update a specific rule configuration.
     * @return string|null
    */
    public function getCombinedShippingRuleId(): ?string {
        return $this->combinedShippingRuleId;
    }

    /**
     * Gets the combinedShippingRuleName property value. This field specifies the unique name identifying the combined shipping discount profile within the seller’s account. This name is configured by the seller and can have a maximum of XX characters.
     * @return string|null
    */
    public function getCombinedShippingRuleName(): ?string {
        return $this->combinedShippingRuleName;
    }

    /**
     * Gets the eachAdditionalAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getEachAdditionalAmount(): ?Amount {
        return $this->eachAdditionalAmount;
    }

    /**
     * Gets the eachAdditionalAmountOffShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getEachAdditionalAmountOffShippingCost(): ?Amount {
        return $this->eachAdditionalAmountOffShippingCost;
    }

    /**
     * Gets the eachAdditionalPercentOffShippingCost property value. This integer specifies the percentage discount applied to the total shipping cost for each additional item in the combined order.
     * @return float|null
    */
    public function getEachAdditionalPercentOffShippingCost(): ?float {
        return $this->eachAdditionalPercentOffShippingCost;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'combinedShippingRuleId' => fn(ParseNode $n) => $o->setCombinedShippingRuleId($n->getStringValue()),
            'combinedShippingRuleName' => fn(ParseNode $n) => $o->setCombinedShippingRuleName($n->getStringValue()),
            'eachAdditionalAmount' => fn(ParseNode $n) => $o->setEachAdditionalAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'eachAdditionalAmountOffShippingCost' => fn(ParseNode $n) => $o->setEachAdditionalAmountOffShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'eachAdditionalPercentOffShippingCost' => fn(ParseNode $n) => $o->setEachAdditionalPercentOffShippingCost($n->getFloatValue()),
            'mappedCombinedShippingRuleId' => fn(ParseNode $n) => $o->setMappedCombinedShippingRuleId($n->getStringValue()),
            'weightOffTotalWeight' => fn(ParseNode $n) => $o->setWeightOffTotalWeight($n->getObjectValue([MeasureType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the mappedCombinedShippingRuleId property value. This field specifies the unique ID that links this combined-shipping rule to another related rule in the seller’s account.
     * @return string|null
    */
    public function getMappedCombinedShippingRuleId(): ?string {
        return $this->mappedCombinedShippingRuleId;
    }

    /**
     * Gets the weightOffTotalWeight property value. This type displays measurement type with value, unit, and measurement system.
     * @return MeasureType|null
    */
    public function getWeightOffTotalWeight(): ?MeasureType {
        return $this->weightOffTotalWeight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('combinedShippingRuleId', $this->getCombinedShippingRuleId());
        $writer->writeStringValue('combinedShippingRuleName', $this->getCombinedShippingRuleName());
        $writer->writeObjectValue('eachAdditionalAmount', $this->getEachAdditionalAmount());
        $writer->writeObjectValue('eachAdditionalAmountOffShippingCost', $this->getEachAdditionalAmountOffShippingCost());
        $writer->writeFloatValue('eachAdditionalPercentOffShippingCost', $this->getEachAdditionalPercentOffShippingCost());
        $writer->writeStringValue('mappedCombinedShippingRuleId', $this->getMappedCombinedShippingRuleId());
        $writer->writeObjectValue('weightOffTotalWeight', $this->getWeightOffTotalWeight());
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
     * Sets the combinedShippingRuleId property value. This field represents the unique identifier for the combined-shipping discount profile, <br><br>used to reference or update a specific rule configuration.
     * @param string|null $value Value to set for the combinedShippingRuleId property.
    */
    public function setCombinedShippingRuleId(?string $value): void {
        $this->combinedShippingRuleId = $value;
    }

    /**
     * Sets the combinedShippingRuleName property value. This field specifies the unique name identifying the combined shipping discount profile within the seller’s account. This name is configured by the seller and can have a maximum of XX characters.
     * @param string|null $value Value to set for the combinedShippingRuleName property.
    */
    public function setCombinedShippingRuleName(?string $value): void {
        $this->combinedShippingRuleName = $value;
    }

    /**
     * Sets the eachAdditionalAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the eachAdditionalAmount property.
    */
    public function setEachAdditionalAmount(?Amount $value): void {
        $this->eachAdditionalAmount = $value;
    }

    /**
     * Sets the eachAdditionalAmountOffShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the eachAdditionalAmountOffShippingCost property.
    */
    public function setEachAdditionalAmountOffShippingCost(?Amount $value): void {
        $this->eachAdditionalAmountOffShippingCost = $value;
    }

    /**
     * Sets the eachAdditionalPercentOffShippingCost property value. This integer specifies the percentage discount applied to the total shipping cost for each additional item in the combined order.
     * @param float|null $value Value to set for the eachAdditionalPercentOffShippingCost property.
    */
    public function setEachAdditionalPercentOffShippingCost(?float $value): void {
        $this->eachAdditionalPercentOffShippingCost = $value;
    }

    /**
     * Sets the mappedCombinedShippingRuleId property value. This field specifies the unique ID that links this combined-shipping rule to another related rule in the seller’s account.
     * @param string|null $value Value to set for the mappedCombinedShippingRuleId property.
    */
    public function setMappedCombinedShippingRuleId(?string $value): void {
        $this->mappedCombinedShippingRuleId = $value;
    }

    /**
     * Sets the weightOffTotalWeight property value. This type displays measurement type with value, unit, and measurement system.
     * @param MeasureType|null $value Value to set for the weightOffTotalWeight property.
    */
    public function setWeightOffTotalWeight(?MeasureType $value): void {
        $this->weightOffTotalWeight = $value;
    }

}
