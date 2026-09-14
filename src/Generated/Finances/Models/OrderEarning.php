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
 * This type defines the earnings details for a single order. It includes information associated with the order, such as an informatiuon about the buyer, an order summary, and an order earnings summary.
*/
class OrderEarning implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BuyerWithId|null $buyer This type defines identifying information about the buyer associated with an order.
    */
    private ?BuyerWithId $buyer = null;
    
    /**
     * @var string|null $orderCreationDate The date the order was created and payment was successful.
    */
    private ?string $orderCreationDate = null;
    
    /**
     * @var EarningsSummary|null $orderEarningsSummary This type defines a summarized view of earnings information derived from one order. It defines fields that provides a summarized view of earnings information derived from one order including aggregated financial values for gross amount, expenses, earnings, and refunds. 
    */
    private ?EarningsSummary $orderEarningsSummary = null;
    
    /**
     * @var string|null $orderId The unique identifier of the order.
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $orderLastModifiedDate The date when the order was last modified.
    */
    private ?string $orderLastModifiedDate = null;
    
    /**
     * @var OrderSummary|null $orderSummary This type provides order cost details, including line item subtotal, shipping and handling, seller-collected taxes, and any seller applied discounts. Always provided in the listing currency.
    */
    private ?OrderSummary $orderSummary = null;
    
    /**
     * Instantiates a new OrderEarning and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderEarning
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderEarning {
        return new OrderEarning();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyer property value. This type defines identifying information about the buyer associated with an order.
     * @return BuyerWithId|null
    */
    public function getBuyer(): ?BuyerWithId {
        return $this->buyer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyer' => fn(ParseNode $n) => $o->setBuyer($n->getObjectValue([BuyerWithId::class, 'createFromDiscriminatorValue'])),
            'orderCreationDate' => fn(ParseNode $n) => $o->setOrderCreationDate($n->getStringValue()),
            'orderEarningsSummary' => fn(ParseNode $n) => $o->setOrderEarningsSummary($n->getObjectValue([EarningsSummary::class, 'createFromDiscriminatorValue'])),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'orderLastModifiedDate' => fn(ParseNode $n) => $o->setOrderLastModifiedDate($n->getStringValue()),
            'orderSummary' => fn(ParseNode $n) => $o->setOrderSummary($n->getObjectValue([OrderSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the orderCreationDate property value. The date the order was created and payment was successful.
     * @return string|null
    */
    public function getOrderCreationDate(): ?string {
        return $this->orderCreationDate;
    }

    /**
     * Gets the orderEarningsSummary property value. This type defines a summarized view of earnings information derived from one order. It defines fields that provides a summarized view of earnings information derived from one order including aggregated financial values for gross amount, expenses, earnings, and refunds. 
     * @return EarningsSummary|null
    */
    public function getOrderEarningsSummary(): ?EarningsSummary {
        return $this->orderEarningsSummary;
    }

    /**
     * Gets the orderId property value. The unique identifier of the order.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the orderLastModifiedDate property value. The date when the order was last modified.
     * @return string|null
    */
    public function getOrderLastModifiedDate(): ?string {
        return $this->orderLastModifiedDate;
    }

    /**
     * Gets the orderSummary property value. This type provides order cost details, including line item subtotal, shipping and handling, seller-collected taxes, and any seller applied discounts. Always provided in the listing currency.
     * @return OrderSummary|null
    */
    public function getOrderSummary(): ?OrderSummary {
        return $this->orderSummary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyer', $this->getBuyer());
        $writer->writeStringValue('orderCreationDate', $this->getOrderCreationDate());
        $writer->writeObjectValue('orderEarningsSummary', $this->getOrderEarningsSummary());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('orderLastModifiedDate', $this->getOrderLastModifiedDate());
        $writer->writeObjectValue('orderSummary', $this->getOrderSummary());
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
     * Sets the buyer property value. This type defines identifying information about the buyer associated with an order.
     * @param BuyerWithId|null $value Value to set for the buyer property.
    */
    public function setBuyer(?BuyerWithId $value): void {
        $this->buyer = $value;
    }

    /**
     * Sets the orderCreationDate property value. The date the order was created and payment was successful.
     * @param string|null $value Value to set for the orderCreationDate property.
    */
    public function setOrderCreationDate(?string $value): void {
        $this->orderCreationDate = $value;
    }

    /**
     * Sets the orderEarningsSummary property value. This type defines a summarized view of earnings information derived from one order. It defines fields that provides a summarized view of earnings information derived from one order including aggregated financial values for gross amount, expenses, earnings, and refunds. 
     * @param EarningsSummary|null $value Value to set for the orderEarningsSummary property.
    */
    public function setOrderEarningsSummary(?EarningsSummary $value): void {
        $this->orderEarningsSummary = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the order.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the orderLastModifiedDate property value. The date when the order was last modified.
     * @param string|null $value Value to set for the orderLastModifiedDate property.
    */
    public function setOrderLastModifiedDate(?string $value): void {
        $this->orderLastModifiedDate = $value;
    }

    /**
     * Sets the orderSummary property value. This type provides order cost details, including line item subtotal, shipping and handling, seller-collected taxes, and any seller applied discounts. Always provided in the listing currency.
     * @param OrderSummary|null $value Value to set for the orderSummary property.
    */
    public function setOrderSummary(?OrderSummary $value): void {
        $this->orderSummary = $value;
    }

}
