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
 * This type defines a summarized view of earnings information derived from one order. It defines fields that provides a summarized view of earnings information derived from one order including aggregated financial values for gross amount, expenses, earnings, and refunds. 
*/
class EarningsSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Expense|null $expenses This container provides the total expenses associated with an order, including:<br><ul><li>Fees and fee credits (transaction fees, other fees, and ad fees)</li><li>Shipping labels</li><li>Donations</li></ul>It is used by both the <b>getOrderEarnings</b> and <b>getOrderEarningsById</b> methods. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Expenses are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
    */
    private ?Expense $expenses = null;
    
    /**
     * @var Amount|null $grossAmount This container shows the gross amount before any eBay deductions. This amount includes the item subtotal, buyer-paid shipping and handling, and seller-collected tax paid by the buyer. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This amount does not include any taxes or fees that eBay collects from the buyer.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Gross amount is always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
    */
    private ?Amount $grossAmount = null;
    
    /**
     * @var Amount|null $orderEarnings This container shows your earnings after deducting expenses and any refunds from your gross amount.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Order earnings are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
    */
    private ?Amount $orderEarnings = null;
    
    /**
     * @var Amount|null $refunds This container includes refunds for returns, cases, cancellations, requests, and disputes. It does not include fee credits.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Refunds are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
    */
    private ?Amount $refunds = null;
    
    /**
     * Instantiates a new EarningsSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EarningsSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EarningsSummary {
        return new EarningsSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expenses property value. This container provides the total expenses associated with an order, including:<br><ul><li>Fees and fee credits (transaction fees, other fees, and ad fees)</li><li>Shipping labels</li><li>Donations</li></ul>It is used by both the <b>getOrderEarnings</b> and <b>getOrderEarningsById</b> methods. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Expenses are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @return Expense|null
    */
    public function getExpenses(): ?Expense {
        return $this->expenses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expenses' => fn(ParseNode $n) => $o->setExpenses($n->getObjectValue([Expense::class, 'createFromDiscriminatorValue'])),
            'grossAmount' => fn(ParseNode $n) => $o->setGrossAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'orderEarnings' => fn(ParseNode $n) => $o->setOrderEarnings($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refunds' => fn(ParseNode $n) => $o->setRefunds($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the grossAmount property value. This container shows the gross amount before any eBay deductions. This amount includes the item subtotal, buyer-paid shipping and handling, and seller-collected tax paid by the buyer. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This amount does not include any taxes or fees that eBay collects from the buyer.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Gross amount is always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @return Amount|null
    */
    public function getGrossAmount(): ?Amount {
        return $this->grossAmount;
    }

    /**
     * Gets the orderEarnings property value. This container shows your earnings after deducting expenses and any refunds from your gross amount.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Order earnings are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @return Amount|null
    */
    public function getOrderEarnings(): ?Amount {
        return $this->orderEarnings;
    }

    /**
     * Gets the refunds property value. This container includes refunds for returns, cases, cancellations, requests, and disputes. It does not include fee credits.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Refunds are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @return Amount|null
    */
    public function getRefunds(): ?Amount {
        return $this->refunds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('expenses', $this->getExpenses());
        $writer->writeObjectValue('grossAmount', $this->getGrossAmount());
        $writer->writeObjectValue('orderEarnings', $this->getOrderEarnings());
        $writer->writeObjectValue('refunds', $this->getRefunds());
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
     * Sets the expenses property value. This container provides the total expenses associated with an order, including:<br><ul><li>Fees and fee credits (transaction fees, other fees, and ad fees)</li><li>Shipping labels</li><li>Donations</li></ul>It is used by both the <b>getOrderEarnings</b> and <b>getOrderEarningsById</b> methods. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Expenses are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @param Expense|null $value Value to set for the expenses property.
    */
    public function setExpenses(?Expense $value): void {
        $this->expenses = $value;
    }

    /**
     * Sets the grossAmount property value. This container shows the gross amount before any eBay deductions. This amount includes the item subtotal, buyer-paid shipping and handling, and seller-collected tax paid by the buyer. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This amount does not include any taxes or fees that eBay collects from the buyer.</span></p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Gross amount is always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @param Amount|null $value Value to set for the grossAmount property.
    */
    public function setGrossAmount(?Amount $value): void {
        $this->grossAmount = $value;
    }

    /**
     * Sets the orderEarnings property value. This container shows your earnings after deducting expenses and any refunds from your gross amount.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Order earnings are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @param Amount|null $value Value to set for the orderEarnings property.
    */
    public function setOrderEarnings(?Amount $value): void {
        $this->orderEarnings = $value;
    }

    /**
     * Sets the refunds property value. This container includes refunds for returns, cases, cancellations, requests, and disputes. It does not include fee credits.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Refunds are always in the seller's payout currency. Conversion-related fields (such as <b>exchangeRate</b> or converted from/to fields) in this container do not apply to the <b>order_earnings</b> resource.</span></p>
     * @param Amount|null $value Value to set for the refunds property.
    */
    public function setRefunds(?Amount $value): void {
        $this->refunds = $value;
    }

}
