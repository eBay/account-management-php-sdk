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
 * This type is used to update calculated shipping rules.
*/
class UpdateCalculatedShippingRulesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CalculatedHandlingRuleType|null $calculatedHandlingRule This container specifies the calculated handling rule that determines how handling fees are automatically computed based on order weight, quantity, or value in a combined shipment.
    */
    private ?CalculatedHandlingRuleType $calculatedHandlingRule = null;
    
    /**
     * @var CalculatedShippingRuleType|null $calculatedShippingRule This container defines the calculated shipping rule that determines shipping costs or discounts based on factors such as total weight, price, or item count in a combined order.
    */
    private ?CalculatedShippingRuleType $calculatedShippingRule = null;
    
    /**
     * @var CombinedPaymentPeriodEnum|null $combinedDuration This enumerated value specifies the duration within which multiple unpaid orders may be combined into a single invoice, represented by one of the values in <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
    */
    private ?CombinedPaymentPeriodEnum $combinedDuration = null;
    
    /**
     * Instantiates a new UpdateCalculatedShippingRulesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCalculatedShippingRulesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCalculatedShippingRulesRequest {
        return new UpdateCalculatedShippingRulesRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the calculatedHandlingRule property value. This container specifies the calculated handling rule that determines how handling fees are automatically computed based on order weight, quantity, or value in a combined shipment.
     * @return CalculatedHandlingRuleType|null
    */
    public function getCalculatedHandlingRule(): ?CalculatedHandlingRuleType {
        return $this->calculatedHandlingRule;
    }

    /**
     * Gets the calculatedShippingRule property value. This container defines the calculated shipping rule that determines shipping costs or discounts based on factors such as total weight, price, or item count in a combined order.
     * @return CalculatedShippingRuleType|null
    */
    public function getCalculatedShippingRule(): ?CalculatedShippingRuleType {
        return $this->calculatedShippingRule;
    }

    /**
     * Gets the combinedDuration property value. This enumerated value specifies the duration within which multiple unpaid orders may be combined into a single invoice, represented by one of the values in <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
     * @return CombinedPaymentPeriodEnum|null
    */
    public function getCombinedDuration(): ?CombinedPaymentPeriodEnum {
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
            'combinedDuration' => fn(ParseNode $n) => $o->setCombinedDuration($n->getEnumValue(CombinedPaymentPeriodEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('calculatedHandlingRule', $this->getCalculatedHandlingRule());
        $writer->writeObjectValue('calculatedShippingRule', $this->getCalculatedShippingRule());
        $writer->writeEnumValue('combinedDuration', $this->getCombinedDuration());
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
     * Sets the calculatedHandlingRule property value. This container specifies the calculated handling rule that determines how handling fees are automatically computed based on order weight, quantity, or value in a combined shipment.
     * @param CalculatedHandlingRuleType|null $value Value to set for the calculatedHandlingRule property.
    */
    public function setCalculatedHandlingRule(?CalculatedHandlingRuleType $value): void {
        $this->calculatedHandlingRule = $value;
    }

    /**
     * Sets the calculatedShippingRule property value. This container defines the calculated shipping rule that determines shipping costs or discounts based on factors such as total weight, price, or item count in a combined order.
     * @param CalculatedShippingRuleType|null $value Value to set for the calculatedShippingRule property.
    */
    public function setCalculatedShippingRule(?CalculatedShippingRuleType $value): void {
        $this->calculatedShippingRule = $value;
    }

    /**
     * Sets the combinedDuration property value. This enumerated value specifies the duration within which multiple unpaid orders may be combined into a single invoice, represented by one of the values in <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
     * @param CombinedPaymentPeriodEnum|null $value Value to set for the combinedDuration property.
    */
    public function setCombinedDuration(?CombinedPaymentPeriodEnum $value): void {
        $this->combinedDuration = $value;
    }

}
