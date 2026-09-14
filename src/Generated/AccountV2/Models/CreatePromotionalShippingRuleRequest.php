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
 * This type represents the request schema for creating promotional shipping rules with combined payment durations.
*/
class CreatePromotionalShippingRuleRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $combinedDuration This container specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in CombinedPaymentPeriodEnum type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
    */
    private ?string $combinedDuration = null;
    
    /**
     * @var PromotionalShippingRuleType|null $promotionalShippingRule This type is used to represent a promotional shipping rule set up by the seller on an eBay marketplace.
    */
    private ?PromotionalShippingRuleType $promotionalShippingRule = null;
    
    /**
     * Instantiates a new CreatePromotionalShippingRuleRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePromotionalShippingRuleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePromotionalShippingRuleRequest {
        return new CreatePromotionalShippingRuleRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
            'combinedDuration' => fn(ParseNode $n) => $o->setCombinedDuration($n->getStringValue()),
            'promotionalShippingRule' => fn(ParseNode $n) => $o->setPromotionalShippingRule($n->getObjectValue([PromotionalShippingRuleType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the promotionalShippingRule property value. This type is used to represent a promotional shipping rule set up by the seller on an eBay marketplace.
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
        $writer->writeStringValue('combinedDuration', $this->getCombinedDuration());
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
     * Sets the combinedDuration property value. This container specifies the time window during which multiple unpaid orders can be combined into a single payment or invoice, represented by using one of the values in CombinedPaymentPeriodEnum type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the combinedDuration property.
    */
    public function setCombinedDuration(?string $value): void {
        $this->combinedDuration = $value;
    }

    /**
     * Sets the promotionalShippingRule property value. This type is used to represent a promotional shipping rule set up by the seller on an eBay marketplace.
     * @param PromotionalShippingRuleType|null $value Value to set for the promotionalShippingRule property.
    */
    public function setPromotionalShippingRule(?PromotionalShippingRuleType $value): void {
        $this->promotionalShippingRule = $value;
    }

}
