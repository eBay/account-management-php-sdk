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
 * BillingActivityLineItem
*/
class BillingActivityLineItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $billingTransactionDate This timestamp indicates the date/time when eBay processed the transaction.
    */
    private ?string $billingTransactionDate = null;
    
    /**
     * @var string|null $billingTransactionId This field provides a unique identifier of the billing transaction. If a seller wants to view details on a specific billing transaction, they can use the <b>actvityId</b> filter and pass in a specific <b>billingTransactionId</b> value.
    */
    private ?string $billingTransactionId = null;
    
    /**
     * @var string|null $bookingEntry The value returned in this field will indicate if the billing transaction is a debit against the seller's account, or a credit. A debit is much more prevalent than a credit, but sometimes a listing fee will get reversed and they will get a credit for this fee. Possible values:<br><ul><li><code>DEBIT</code></li><li><code>CREDIT</code></li></ul>
    */
    private ?string $bookingEntry = null;
    
    /**
     * @var string|null $feeType This field describes the type of fee associated with the transaction. An example value is  <code>FinalValueFeeFixedFeePerOrder</code>.
    */
    private ?string $feeType = null;
    
    /**
     * @var string|null $feeTypeDescription This field contains the human-readable description of the fee type associated with the transaction. For example, <code>Final Value Fee</code>.
    */
    private ?string $feeTypeDescription = null;
    
    /**
     * @var string|null $listingId The unique identifier of the eBay listing associated with the billing transaction. This field is returned if the fee is associated with a listing.
    */
    private ?string $listingId = null;
    
    /**
     * @var string|null $orderId The unique identifier of the eBay order associated with the billing transaction. This field is returned if the fee is associated with an order.
    */
    private ?string $orderId = null;
    
    /**
     * @var array<DiscountDetail>|null $promotionalOffers A list of seller promotional offers applicable for the billing transaction.
    */
    private ?array $promotionalOffers = null;
    
    /**
     * Instantiates a new BillingActivityLineItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillingActivityLineItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillingActivityLineItem {
        return new BillingActivityLineItem();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the billingTransactionDate property value. This timestamp indicates the date/time when eBay processed the transaction.
     * @return string|null
    */
    public function getBillingTransactionDate(): ?string {
        return $this->billingTransactionDate;
    }

    /**
     * Gets the billingTransactionId property value. This field provides a unique identifier of the billing transaction. If a seller wants to view details on a specific billing transaction, they can use the <b>actvityId</b> filter and pass in a specific <b>billingTransactionId</b> value.
     * @return string|null
    */
    public function getBillingTransactionId(): ?string {
        return $this->billingTransactionId;
    }

    /**
     * Gets the bookingEntry property value. The value returned in this field will indicate if the billing transaction is a debit against the seller's account, or a credit. A debit is much more prevalent than a credit, but sometimes a listing fee will get reversed and they will get a credit for this fee. Possible values:<br><ul><li><code>DEBIT</code></li><li><code>CREDIT</code></li></ul>
     * @return string|null
    */
    public function getBookingEntry(): ?string {
        return $this->bookingEntry;
    }

    /**
     * Gets the feeType property value. This field describes the type of fee associated with the transaction. An example value is  <code>FinalValueFeeFixedFeePerOrder</code>.
     * @return string|null
    */
    public function getFeeType(): ?string {
        return $this->feeType;
    }

    /**
     * Gets the feeTypeDescription property value. This field contains the human-readable description of the fee type associated with the transaction. For example, <code>Final Value Fee</code>.
     * @return string|null
    */
    public function getFeeTypeDescription(): ?string {
        return $this->feeTypeDescription;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'billingTransactionDate' => fn(ParseNode $n) => $o->setBillingTransactionDate($n->getStringValue()),
            'billingTransactionId' => fn(ParseNode $n) => $o->setBillingTransactionId($n->getStringValue()),
            'bookingEntry' => fn(ParseNode $n) => $o->setBookingEntry($n->getStringValue()),
            'feeType' => fn(ParseNode $n) => $o->setFeeType($n->getStringValue()),
            'feeTypeDescription' => fn(ParseNode $n) => $o->setFeeTypeDescription($n->getStringValue()),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'promotionalOffers' => fn(ParseNode $n) => $o->setPromotionalOffers($n->getCollectionOfObjectValues([DiscountDetail::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingId property value. The unique identifier of the eBay listing associated with the billing transaction. This field is returned if the fee is associated with a listing.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the orderId property value. The unique identifier of the eBay order associated with the billing transaction. This field is returned if the fee is associated with an order.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the promotionalOffers property value. A list of seller promotional offers applicable for the billing transaction.
     * @return array<DiscountDetail>|null
    */
    public function getPromotionalOffers(): ?array {
        return $this->promotionalOffers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('billingTransactionDate', $this->getBillingTransactionDate());
        $writer->writeStringValue('billingTransactionId', $this->getBillingTransactionId());
        $writer->writeStringValue('bookingEntry', $this->getBookingEntry());
        $writer->writeStringValue('feeType', $this->getFeeType());
        $writer->writeStringValue('feeTypeDescription', $this->getFeeTypeDescription());
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeCollectionOfObjectValues('promotionalOffers', $this->getPromotionalOffers());
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
     * Sets the amount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the billingTransactionDate property value. This timestamp indicates the date/time when eBay processed the transaction.
     * @param string|null $value Value to set for the billingTransactionDate property.
    */
    public function setBillingTransactionDate(?string $value): void {
        $this->billingTransactionDate = $value;
    }

    /**
     * Sets the billingTransactionId property value. This field provides a unique identifier of the billing transaction. If a seller wants to view details on a specific billing transaction, they can use the <b>actvityId</b> filter and pass in a specific <b>billingTransactionId</b> value.
     * @param string|null $value Value to set for the billingTransactionId property.
    */
    public function setBillingTransactionId(?string $value): void {
        $this->billingTransactionId = $value;
    }

    /**
     * Sets the bookingEntry property value. The value returned in this field will indicate if the billing transaction is a debit against the seller's account, or a credit. A debit is much more prevalent than a credit, but sometimes a listing fee will get reversed and they will get a credit for this fee. Possible values:<br><ul><li><code>DEBIT</code></li><li><code>CREDIT</code></li></ul>
     * @param string|null $value Value to set for the bookingEntry property.
    */
    public function setBookingEntry(?string $value): void {
        $this->bookingEntry = $value;
    }

    /**
     * Sets the feeType property value. This field describes the type of fee associated with the transaction. An example value is  <code>FinalValueFeeFixedFeePerOrder</code>.
     * @param string|null $value Value to set for the feeType property.
    */
    public function setFeeType(?string $value): void {
        $this->feeType = $value;
    }

    /**
     * Sets the feeTypeDescription property value. This field contains the human-readable description of the fee type associated with the transaction. For example, <code>Final Value Fee</code>.
     * @param string|null $value Value to set for the feeTypeDescription property.
    */
    public function setFeeTypeDescription(?string $value): void {
        $this->feeTypeDescription = $value;
    }

    /**
     * Sets the listingId property value. The unique identifier of the eBay listing associated with the billing transaction. This field is returned if the fee is associated with a listing.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the eBay order associated with the billing transaction. This field is returned if the fee is associated with an order.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the promotionalOffers property value. A list of seller promotional offers applicable for the billing transaction.
     * @param array<DiscountDetail>|null $value Value to set for the promotionalOffers property.
    */
    public function setPromotionalOffers(?array $value): void {
        $this->promotionalOffers = $value;
    }

}
