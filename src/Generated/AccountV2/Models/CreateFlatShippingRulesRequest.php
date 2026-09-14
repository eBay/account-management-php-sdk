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
 * This type represents a request to configure flat-rate combined shipping rules with specified durations and conditions.
*/
class CreateFlatShippingRulesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CombinedPaymentPeriodEnum|null $combinedDuration This enumerated value specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
    */
    private ?CombinedPaymentPeriodEnum $combinedDuration = null;
    
    /**
     * @var FlatShippingRuleType|null $flatShippingRule This container defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
    */
    private ?FlatShippingRuleType $flatShippingRule = null;
    
    /**
     * Instantiates a new CreateFlatShippingRulesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateFlatShippingRulesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateFlatShippingRulesRequest {
        return new CreateFlatShippingRulesRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedDuration property value. This enumerated value specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
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
            'combinedDuration' => fn(ParseNode $n) => $o->setCombinedDuration($n->getEnumValue(CombinedPaymentPeriodEnum::class)),
            'flatShippingRule' => fn(ParseNode $n) => $o->setFlatShippingRule($n->getObjectValue([FlatShippingRuleType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the flatShippingRule property value. This container defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
     * @return FlatShippingRuleType|null
    */
    public function getFlatShippingRule(): ?FlatShippingRuleType {
        return $this->flatShippingRule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('combinedDuration', $this->getCombinedDuration());
        $writer->writeObjectValue('flatShippingRule', $this->getFlatShippingRule());
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
     * Sets the combinedDuration property value. This enumerated value specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in <a href="/develop/api/sell/account_api_v2#sell-account_api_v2-combined_shipping_rules-getcombinedshippingrules.getcombinedshippingrulesresponse.combinedduration" target="_blank">CombinedPaymentPeriodEnum</a>.
     * @param CombinedPaymentPeriodEnum|null $value Value to set for the combinedDuration property.
    */
    public function setCombinedDuration(?CombinedPaymentPeriodEnum $value): void {
        $this->combinedDuration = $value;
    }

    /**
     * Sets the flatShippingRule property value. This container defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
     * @param FlatShippingRuleType|null $value Value to set for the flatShippingRule property.
    */
    public function setFlatShippingRule(?FlatShippingRuleType $value): void {
        $this->flatShippingRule = $value;
    }

}
