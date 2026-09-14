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
 * This type defines provides the total expenses associated with an order. Expenses represent cost components that reduce the seller's gross earnings and may include deductions such as marketplace fees, eBay shipping labels, and donations, applied during order processing.
*/
class Expense implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CurrencyCodeEnum|null $currency This field shows the three-letter currency code that represents the currency used for all of the order expenses.
    */
    private ?CurrencyCodeEnum $currency = null;
    
    /**
     * @var array<OrderEarningFee>|null $donations This array shows the amount(s) of one or more donations that are submitted to eBay charity organizations for one or more orders. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Donations are always tied to specific items. When an item is listed with a charity contribution (for example, 10%), the donation is calculated per item at the time of sale. Order earnings factor in only the items within the order that are eligible for donation.</span></p>
    */
    private ?array $donations = null;
    
    /**
     * @var array<OrderEarningFee>|null $marketplaceFees This array shows the type and amount(s) of marketplace fees that were charged against one or more orders.
    */
    private ?array $marketplaceFees = null;
    
    /**
     * @var Amount|null $shippingLabels This container shows the total amount paid by the seller for eBay shipping labels for one or more orders.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Charges and credits for shipping labels purchased with non-eBay payment methods (for example, PayPal) are excluded from the order earnings calculation.</span></p>
    */
    private ?Amount $shippingLabels = null;
    
    /**
     * @var string|null $value This field shows the total expenses including charges and credits associated for one or more orders based on the order creation time period chosen.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new Expense and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Expense
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Expense {
        return new Expense();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currency property value. This field shows the three-letter currency code that represents the currency used for all of the order expenses.
     * @return CurrencyCodeEnum|null
    */
    public function getCurrency(): ?CurrencyCodeEnum {
        return $this->currency;
    }

    /**
     * Gets the donations property value. This array shows the amount(s) of one or more donations that are submitted to eBay charity organizations for one or more orders. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Donations are always tied to specific items. When an item is listed with a charity contribution (for example, 10%), the donation is calculated per item at the time of sale. Order earnings factor in only the items within the order that are eligible for donation.</span></p>
     * @return array<OrderEarningFee>|null
    */
    public function getDonations(): ?array {
        return $this->donations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getEnumValue(CurrencyCodeEnum::class)),
            'donations' => fn(ParseNode $n) => $o->setDonations($n->getCollectionOfObjectValues([OrderEarningFee::class, 'createFromDiscriminatorValue'])),
            'marketplaceFees' => fn(ParseNode $n) => $o->setMarketplaceFees($n->getCollectionOfObjectValues([OrderEarningFee::class, 'createFromDiscriminatorValue'])),
            'shippingLabels' => fn(ParseNode $n) => $o->setShippingLabels($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the marketplaceFees property value. This array shows the type and amount(s) of marketplace fees that were charged against one or more orders.
     * @return array<OrderEarningFee>|null
    */
    public function getMarketplaceFees(): ?array {
        return $this->marketplaceFees;
    }

    /**
     * Gets the shippingLabels property value. This container shows the total amount paid by the seller for eBay shipping labels for one or more orders.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Charges and credits for shipping labels purchased with non-eBay payment methods (for example, PayPal) are excluded from the order earnings calculation.</span></p>
     * @return Amount|null
    */
    public function getShippingLabels(): ?Amount {
        return $this->shippingLabels;
    }

    /**
     * Gets the value property value. This field shows the total expenses including charges and credits associated for one or more orders based on the order creation time period chosen.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('currency', $this->getCurrency());
        $writer->writeCollectionOfObjectValues('donations', $this->getDonations());
        $writer->writeCollectionOfObjectValues('marketplaceFees', $this->getMarketplaceFees());
        $writer->writeObjectValue('shippingLabels', $this->getShippingLabels());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the currency property value. This field shows the three-letter currency code that represents the currency used for all of the order expenses.
     * @param CurrencyCodeEnum|null $value Value to set for the currency property.
    */
    public function setCurrency(?CurrencyCodeEnum $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the donations property value. This array shows the amount(s) of one or more donations that are submitted to eBay charity organizations for one or more orders. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Donations are always tied to specific items. When an item is listed with a charity contribution (for example, 10%), the donation is calculated per item at the time of sale. Order earnings factor in only the items within the order that are eligible for donation.</span></p>
     * @param array<OrderEarningFee>|null $value Value to set for the donations property.
    */
    public function setDonations(?array $value): void {
        $this->donations = $value;
    }

    /**
     * Sets the marketplaceFees property value. This array shows the type and amount(s) of marketplace fees that were charged against one or more orders.
     * @param array<OrderEarningFee>|null $value Value to set for the marketplaceFees property.
    */
    public function setMarketplaceFees(?array $value): void {
        $this->marketplaceFees = $value;
    }

    /**
     * Sets the shippingLabels property value. This container shows the total amount paid by the seller for eBay shipping labels for one or more orders.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Charges and credits for shipping labels purchased with non-eBay payment methods (for example, PayPal) are excluded from the order earnings calculation.</span></p>
     * @param Amount|null $value Value to set for the shippingLabels property.
    */
    public function setShippingLabels(?Amount $value): void {
        $this->shippingLabels = $value;
    }

    /**
     * Sets the value property value. This field shows the total expenses including charges and credits associated for one or more orders based on the order creation time period chosen.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
