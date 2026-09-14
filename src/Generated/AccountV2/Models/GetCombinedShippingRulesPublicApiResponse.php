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
 * The base response type of the getCombinedShippingRules method. <br><br>All of a seller's calculated, flat, and promotional shipping discount rules defined for an eBay marketplace will be returned in the response, along with the current combined duration value.
*/
class GetCombinedShippingRulesPublicApiResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CalculatedHandlingRuleType|null $calculatedHandlingRule This container will show one or more calculated shipping rules set up for that seller on that ebay marketplace.<br><br><span class="tablenote"><b>Note:</b> This will not be returned if a calculated handling rule is not set up for that seller on that eBay marketplace
    */
    private ?CalculatedHandlingRuleType $calculatedHandlingRule = null;
    
    /**
     * @var CalculatedShippingRuleType|null $calculatedShippingRule This container specifies the type of combined-shipping rule applied, such as flat-rate, weight-based, or cost-based.
    */
    private ?CalculatedShippingRuleType $calculatedShippingRule = null;
    
    /**
     * @var CombinedPaymentPeriodEnum|null $combinedDuration This field is represented by one of the values in the <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
    */
    private ?CombinedPaymentPeriodEnum $combinedDuration = null;
    
    /**
     * @var FlatShippingRuleType|null $flatShippingRule This container will show one or more flat shipping rules set up for that seller on that ebay marketplace.
    */
    private ?FlatShippingRuleType $flatShippingRule = null;
    
    /**
     * @var PromotionalShippingRuleType|null $promotionalShippingRule This container shows the promotional shipping rule that is currently set up on the seller's account for the eBay marketplace. <br><br>This container will not be returned if no promotional shipping rule is currently set up on the seller's account for the eBay marketplace.
    */
    private ?PromotionalShippingRuleType $promotionalShippingRule = null;
    
    /**
     * Instantiates a new GetCombinedShippingRulesPublicApiResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetCombinedShippingRulesPublicApiResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetCombinedShippingRulesPublicApiResponse {
        return new GetCombinedShippingRulesPublicApiResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the calculatedHandlingRule property value. This container will show one or more calculated shipping rules set up for that seller on that ebay marketplace.<br><br><span class="tablenote"><b>Note:</b> This will not be returned if a calculated handling rule is not set up for that seller on that eBay marketplace
     * @return CalculatedHandlingRuleType|null
    */
    public function getCalculatedHandlingRule(): ?CalculatedHandlingRuleType {
        return $this->calculatedHandlingRule;
    }

    /**
     * Gets the calculatedShippingRule property value. This container specifies the type of combined-shipping rule applied, such as flat-rate, weight-based, or cost-based.
     * @return CalculatedShippingRuleType|null
    */
    public function getCalculatedShippingRule(): ?CalculatedShippingRuleType {
        return $this->calculatedShippingRule;
    }

    /**
     * Gets the combinedDuration property value. This field is represented by one of the values in the <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
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
            'flatShippingRule' => fn(ParseNode $n) => $o->setFlatShippingRule($n->getObjectValue([FlatShippingRuleType::class, 'createFromDiscriminatorValue'])),
            'promotionalShippingRule' => fn(ParseNode $n) => $o->setPromotionalShippingRule($n->getObjectValue([PromotionalShippingRuleType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the flatShippingRule property value. This container will show one or more flat shipping rules set up for that seller on that ebay marketplace.
     * @return FlatShippingRuleType|null
    */
    public function getFlatShippingRule(): ?FlatShippingRuleType {
        return $this->flatShippingRule;
    }

    /**
     * Gets the promotionalShippingRule property value. This container shows the promotional shipping rule that is currently set up on the seller's account for the eBay marketplace. <br><br>This container will not be returned if no promotional shipping rule is currently set up on the seller's account for the eBay marketplace.
     * @return PromotionalShippingRuleType|null
    */
    public function getPromotionalShippingRule(): ?PromotionalShippingRuleType {
        return $this->promotionalShippingRule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('calculatedHandlingRule', $this->getCalculatedHandlingRule());
        $writer->writeObjectValue('calculatedShippingRule', $this->getCalculatedShippingRule());
        $writer->writeEnumValue('combinedDuration', $this->getCombinedDuration());
        $writer->writeObjectValue('flatShippingRule', $this->getFlatShippingRule());
        $writer->writeObjectValue('promotionalShippingRule', $this->getPromotionalShippingRule());
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
     * Sets the calculatedHandlingRule property value. This container will show one or more calculated shipping rules set up for that seller on that ebay marketplace.<br><br><span class="tablenote"><b>Note:</b> This will not be returned if a calculated handling rule is not set up for that seller on that eBay marketplace
     * @param CalculatedHandlingRuleType|null $value Value to set for the calculatedHandlingRule property.
    */
    public function setCalculatedHandlingRule(?CalculatedHandlingRuleType $value): void {
        $this->calculatedHandlingRule = $value;
    }

    /**
     * Sets the calculatedShippingRule property value. This container specifies the type of combined-shipping rule applied, such as flat-rate, weight-based, or cost-based.
     * @param CalculatedShippingRuleType|null $value Value to set for the calculatedShippingRule property.
    */
    public function setCalculatedShippingRule(?CalculatedShippingRuleType $value): void {
        $this->calculatedShippingRule = $value;
    }

    /**
     * Sets the combinedDuration property value. This field is represented by one of the values in the <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
     * @param CombinedPaymentPeriodEnum|null $value Value to set for the combinedDuration property.
    */
    public function setCombinedDuration(?CombinedPaymentPeriodEnum $value): void {
        $this->combinedDuration = $value;
    }

    /**
     * Sets the flatShippingRule property value. This container will show one or more flat shipping rules set up for that seller on that ebay marketplace.
     * @param FlatShippingRuleType|null $value Value to set for the flatShippingRule property.
    */
    public function setFlatShippingRule(?FlatShippingRuleType $value): void {
        $this->flatShippingRule = $value;
    }

    /**
     * Sets the promotionalShippingRule property value. This container shows the promotional shipping rule that is currently set up on the seller's account for the eBay marketplace. <br><br>This container will not be returned if no promotional shipping rule is currently set up on the seller's account for the eBay marketplace.
     * @param PromotionalShippingRuleType|null $value Value to set for the promotionalShippingRule property.
    */
    public function setPromotionalShippingRule(?PromotionalShippingRuleType $value): void {
        $this->promotionalShippingRule = $value;
    }

}
