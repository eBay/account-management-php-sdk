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
 * This type defines a request to update flat shipping rules.
*/
class UpdateFlatShippingRulesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $combinedDuration This field specifies the duration within which multiple unpaid orders may be combined into a single invoice. <br><br> One of the values in the CombinedPaymentPeriodEnum type must be used in this field. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
    */
    private ?string $combinedDuration = null;
    
    /**
     * @var FlatShippingRuleType|null $flatShippingRule This type defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
    */
    private ?FlatShippingRuleType $flatShippingRule = null;
    
    /**
     * Instantiates a new UpdateFlatShippingRulesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateFlatShippingRulesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateFlatShippingRulesRequest {
        return new UpdateFlatShippingRulesRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedDuration property value. This field specifies the duration within which multiple unpaid orders may be combined into a single invoice. <br><br> One of the values in the CombinedPaymentPeriodEnum type must be used in this field. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
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
            'flatShippingRule' => fn(ParseNode $n) => $o->setFlatShippingRule($n->getObjectValue([FlatShippingRuleType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the flatShippingRule property value. This type defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
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
        $writer->writeStringValue('combinedDuration', $this->getCombinedDuration());
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
     * Sets the combinedDuration property value. This field specifies the duration within which multiple unpaid orders may be combined into a single invoice. <br><br> One of the values in the CombinedPaymentPeriodEnum type must be used in this field. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedPaymentPeriodEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the combinedDuration property.
    */
    public function setCombinedDuration(?string $value): void {
        $this->combinedDuration = $value;
    }

    /**
     * Sets the flatShippingRule property value. This type defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
     * @param FlatShippingRuleType|null $value Value to set for the flatShippingRule property.
    */
    public function setFlatShippingRule(?FlatShippingRuleType $value): void {
        $this->flatShippingRule = $value;
    }

}
