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

namespace EBay\AccountManagement\Generated\Finances\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides order cost details, including line item subtotal, shipping and handling, seller-collected taxes, and any seller applied discounts. Always provided in the listing currency.
*/
class OrderSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $discounts The total amount of item-level promotions or discounts offered by the seller for a sale (order).
    */
    private ?Amount $discounts = null;
    
    /**
     * @var Amount|null $itemSubtotal The sum of the listing price(s) for all items in the order, before applying any seller discounts.
    */
    private ?Amount $itemSubtotal = null;
    
    /**
     * @var Amount|null $sellerCollectedTaxes The total amount of <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">tax collected by the seller</a> on all sold items for the order.
    */
    private ?Amount $sellerCollectedTaxes = null;
    
    /**
     * @var Amount|null $shippingAndHandlingCosts The total amount collected from the buyer to cover shipping and handling for all items in the order.
    */
    private ?Amount $shippingAndHandlingCosts = null;
    
    /**
     * Instantiates a new OrderSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderSummary {
        return new OrderSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the discounts property value. The total amount of item-level promotions or discounts offered by the seller for a sale (order).
     * @return Amount|null
    */
    public function getDiscounts(): ?Amount {
        return $this->discounts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'discounts' => fn(ParseNode $n) => $o->setDiscounts($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'itemSubtotal' => fn(ParseNode $n) => $o->setItemSubtotal($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'sellerCollectedTaxes' => fn(ParseNode $n) => $o->setSellerCollectedTaxes($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingAndHandlingCosts' => fn(ParseNode $n) => $o->setShippingAndHandlingCosts($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemSubtotal property value. The sum of the listing price(s) for all items in the order, before applying any seller discounts.
     * @return Amount|null
    */
    public function getItemSubtotal(): ?Amount {
        return $this->itemSubtotal;
    }

    /**
     * Gets the sellerCollectedTaxes property value. The total amount of <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">tax collected by the seller</a> on all sold items for the order.
     * @return Amount|null
    */
    public function getSellerCollectedTaxes(): ?Amount {
        return $this->sellerCollectedTaxes;
    }

    /**
     * Gets the shippingAndHandlingCosts property value. The total amount collected from the buyer to cover shipping and handling for all items in the order.
     * @return Amount|null
    */
    public function getShippingAndHandlingCosts(): ?Amount {
        return $this->shippingAndHandlingCosts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('discounts', $this->getDiscounts());
        $writer->writeObjectValue('itemSubtotal', $this->getItemSubtotal());
        $writer->writeObjectValue('sellerCollectedTaxes', $this->getSellerCollectedTaxes());
        $writer->writeObjectValue('shippingAndHandlingCosts', $this->getShippingAndHandlingCosts());
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
     * Sets the discounts property value. The total amount of item-level promotions or discounts offered by the seller for a sale (order).
     * @param Amount|null $value Value to set for the discounts property.
    */
    public function setDiscounts(?Amount $value): void {
        $this->discounts = $value;
    }

    /**
     * Sets the itemSubtotal property value. The sum of the listing price(s) for all items in the order, before applying any seller discounts.
     * @param Amount|null $value Value to set for the itemSubtotal property.
    */
    public function setItemSubtotal(?Amount $value): void {
        $this->itemSubtotal = $value;
    }

    /**
     * Sets the sellerCollectedTaxes property value. The total amount of <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121" target="_blank">tax collected by the seller</a> on all sold items for the order.
     * @param Amount|null $value Value to set for the sellerCollectedTaxes property.
    */
    public function setSellerCollectedTaxes(?Amount $value): void {
        $this->sellerCollectedTaxes = $value;
    }

    /**
     * Sets the shippingAndHandlingCosts property value. The total amount collected from the buyer to cover shipping and handling for all items in the order.
     * @param Amount|null $value Value to set for the shippingAndHandlingCosts property.
    */
    public function setShippingAndHandlingCosts(?Amount $value): void {
        $this->shippingAndHandlingCosts = $value;
    }

}
