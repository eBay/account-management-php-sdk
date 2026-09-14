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
 * This type is used to represent a promotional shipping rule set up by the seller on an eBay marketplace.
*/
class PromotionalShippingRuleType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $combinedShippingRuleType This field specifies the type of combined-shipping rule applied, such as flat-rate or cost-based, <br><br>as defined in the CombinedShippingRuleTypeEnum. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
    */
    private ?string $combinedShippingRuleType = null;
    
    /**
     * @var int|null $itemCount This integer indicates the quantity of items that must be purchased by the buyer in order for that buyer to qualify for the promotional discount.
    */
    private ?int $itemCount = null;
    
    /**
     * @var Amount|null $orderAmount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $orderAmount = null;
    
    /**
     * @var Amount|null $shippingCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $shippingCost = null;
    
    /**
     * Instantiates a new PromotionalShippingRuleType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PromotionalShippingRuleType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PromotionalShippingRuleType {
        return new PromotionalShippingRuleType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedShippingRuleType property value. This field specifies the type of combined-shipping rule applied, such as flat-rate or cost-based, <br><br>as defined in the CombinedShippingRuleTypeEnum. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCombinedShippingRuleType(): ?string {
        return $this->combinedShippingRuleType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'combinedShippingRuleType' => fn(ParseNode $n) => $o->setCombinedShippingRuleType($n->getStringValue()),
            'itemCount' => fn(ParseNode $n) => $o->setItemCount($n->getIntegerValue()),
            'orderAmount' => fn(ParseNode $n) => $o->setOrderAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemCount property value. This integer indicates the quantity of items that must be purchased by the buyer in order for that buyer to qualify for the promotional discount.
     * @return int|null
    */
    public function getItemCount(): ?int {
        return $this->itemCount;
    }

    /**
     * Gets the orderAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getOrderAmount(): ?Amount {
        return $this->orderAmount;
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
        $writer->writeStringValue('combinedShippingRuleType', $this->getCombinedShippingRuleType());
        $writer->writeIntegerValue('itemCount', $this->getItemCount());
        $writer->writeObjectValue('orderAmount', $this->getOrderAmount());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
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
     * Sets the combinedShippingRuleType property value. This field specifies the type of combined-shipping rule applied, such as flat-rate or cost-based, <br><br>as defined in the CombinedShippingRuleTypeEnum. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the combinedShippingRuleType property.
    */
    public function setCombinedShippingRuleType(?string $value): void {
        $this->combinedShippingRuleType = $value;
    }

    /**
     * Sets the itemCount property value. This integer indicates the quantity of items that must be purchased by the buyer in order for that buyer to qualify for the promotional discount.
     * @param int|null $value Value to set for the itemCount property.
    */
    public function setItemCount(?int $value): void {
        $this->itemCount = $value;
    }

    /**
     * Sets the orderAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the orderAmount property.
    */
    public function setOrderAmount(?Amount $value): void {
        $this->orderAmount = $value;
    }

    /**
     * Sets the shippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

}
