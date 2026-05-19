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
 * This type defines the structure of a request to create calculated shipping rules, including handling, duration, and rule type details.
*/
class CreateCalculatedShippingRulesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CalculatedHandlingRuleType|null $calculatedHandlingRule This type defines the structure for calculated handling fee discounts applicable when combining multiple orders.
    */
    private ?CalculatedHandlingRuleType $calculatedHandlingRule = null;
    
    /**
     * @var CalculatedShippingRuleType|null $calculatedShippingRule This type describes calculated discount rules determining total shipping cost reductions for combined items.
    */
    private ?CalculatedShippingRuleType $calculatedShippingRule = null;
    
    /**
     * @var string|null $combinedDuration This container specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in CombinedPaymentPeriodEnum type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
    */
    private ?string $combinedDuration = null;
    
    /**
     * Instantiates a new CreateCalculatedShippingRulesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCalculatedShippingRulesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCalculatedShippingRulesRequest {
        return new CreateCalculatedShippingRulesRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the calculatedHandlingRule property value. This type defines the structure for calculated handling fee discounts applicable when combining multiple orders.
     * @return CalculatedHandlingRuleType|null
    */
    public function getCalculatedHandlingRule(): ?CalculatedHandlingRuleType {
        return $this->calculatedHandlingRule;
    }

    /**
     * Gets the calculatedShippingRule property value. This type describes calculated discount rules determining total shipping cost reductions for combined items.
     * @return CalculatedShippingRuleType|null
    */
    public function getCalculatedShippingRule(): ?CalculatedShippingRuleType {
        return $this->calculatedShippingRule;
    }

    /**
     * Gets the combinedDuration property value. This container specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in CombinedPaymentPeriodEnum type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCombinedDuration(): ?string {
        return $this->combinedDuration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calculatedHandlingRule' => fn(ParseNode $n) => $o->setCalculatedHandlingRule($n->getObjectValue([CalculatedHandlingRuleType::class, 'createFromDiscriminatorValue'])),
            'calculatedShippingRule' => fn(ParseNode $n) => $o->setCalculatedShippingRule($n->getObjectValue([CalculatedShippingRuleType::class, 'createFromDiscriminatorValue'])),
            'combinedDuration' => fn(ParseNode $n) => $o->setCombinedDuration($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('calculatedHandlingRule', $this->getCalculatedHandlingRule());
        $writer->writeObjectValue('calculatedShippingRule', $this->getCalculatedShippingRule());
        $writer->writeStringValue('combinedDuration', $this->getCombinedDuration());
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
     * Sets the calculatedHandlingRule property value. This type defines the structure for calculated handling fee discounts applicable when combining multiple orders.
     * @param CalculatedHandlingRuleType|null $value Value to set for the calculatedHandlingRule property.
    */
    public function setCalculatedHandlingRule(?CalculatedHandlingRuleType $value): void {
        $this->calculatedHandlingRule = $value;
    }

    /**
     * Sets the calculatedShippingRule property value. This type describes calculated discount rules determining total shipping cost reductions for combined items.
     * @param CalculatedShippingRuleType|null $value Value to set for the calculatedShippingRule property.
    */
    public function setCalculatedShippingRule(?CalculatedShippingRuleType $value): void {
        $this->calculatedShippingRule = $value;
    }

    /**
     * Sets the combinedDuration property value. This container specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in CombinedPaymentPeriodEnum type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the combinedDuration property.
    */
    public function setCombinedDuration(?string $value): void {
        $this->combinedDuration = $value;
    }

}
