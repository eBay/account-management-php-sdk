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

namespace EBay\AccountManagement\Generated\SellFinancesV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base response type for the <b>getOrderEarningsSummary</b> method, which includes aggregate order earnings, expenses, gross amount, and order count for orders created within the date range and included in the summary.
*/
class OrderEarningsSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $expenses This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $expenses = null;
    
    /**
     * @var Amount|null $grossAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $grossAmount = null;
    
    /**
     * @var OrderEarningsSummary_orderCount|null $orderCount The total number of orders included in the summary.
    */
    private ?OrderEarningsSummary_orderCount $orderCount = null;
    
    /**
     * @var Amount|null $orderEarnings This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $orderEarnings = null;
    
    /**
     * @var Amount|null $refunds This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $refunds = null;
    
    /**
     * Instantiates a new OrderEarningsSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderEarningsSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderEarningsSummary {
        return new OrderEarningsSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expenses property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getExpenses(): ?Amount {
        return $this->expenses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expenses' => fn(ParseNode $n) => $o->setExpenses($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'grossAmount' => fn(ParseNode $n) => $o->setGrossAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'orderCount' => fn(ParseNode $n) => $o->setOrderCount($n->getObjectValue([OrderEarningsSummary_orderCount::class, 'createFromDiscriminatorValue'])),
            'orderEarnings' => fn(ParseNode $n) => $o->setOrderEarnings($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refunds' => fn(ParseNode $n) => $o->setRefunds($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the grossAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getGrossAmount(): ?Amount {
        return $this->grossAmount;
    }

    /**
     * Gets the orderCount property value. The total number of orders included in the summary.
     * @return OrderEarningsSummary_orderCount|null
    */
    public function getOrderCount(): ?OrderEarningsSummary_orderCount {
        return $this->orderCount;
    }

    /**
     * Gets the orderEarnings property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getOrderEarnings(): ?Amount {
        return $this->orderEarnings;
    }

    /**
     * Gets the refunds property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
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
        $writer->writeObjectValue('orderCount', $this->getOrderCount());
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
     * Sets the expenses property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the expenses property.
    */
    public function setExpenses(?Amount $value): void {
        $this->expenses = $value;
    }

    /**
     * Sets the grossAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the grossAmount property.
    */
    public function setGrossAmount(?Amount $value): void {
        $this->grossAmount = $value;
    }

    /**
     * Sets the orderCount property value. The total number of orders included in the summary.
     * @param OrderEarningsSummary_orderCount|null $value Value to set for the orderCount property.
    */
    public function setOrderCount(?OrderEarningsSummary_orderCount $value): void {
        $this->orderCount = $value;
    }

    /**
     * Sets the orderEarnings property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the orderEarnings property.
    */
    public function setOrderEarnings(?Amount $value): void {
        $this->orderEarnings = $value;
    }

    /**
     * Sets the refunds property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the refunds property.
    */
    public function setRefunds(?Amount $value): void {
        $this->refunds = $value;
    }

}
