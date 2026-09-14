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
 * This type is used to express the details of one of the following monetary transactions: a buyer's payment for an order, a refund to the buyer for a returned item or cancelled order, or a credit issued by eBay to the seller's account.
*/
class Transaction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This container shows the dollar value and currency type of the monetary transaction. This field is always returned even when eBay has yet to initiate a payout for the order.
    */
    private ?Amount $amount = null;
    
    /**
     * @var BookingEntryEnum|null $bookingEntry The enumeration value returned in this field indicates if the monetary transaction amount is a (<code>CREDIT</code>) or a (<code>DEBIT</code>) to the seller's account.
    */
    private ?BookingEntryEnum $bookingEntry = null;
    
    /**
     * @var Buyer|null $buyer This is the unique eBay user ID for the buyer who purchased the order. This field is not returned for <code>TRANSFER</code> monetary transaction types.
    */
    private ?Buyer $buyer = null;
    
    /**
     * @var Amount|null $eBayCollectedTaxAmount This is the amount of sales tax that has been collected by eBay for an order.<br><br><span class="tablenote"><b>Note:</b> Sales tax applies only to <code>SALE</code> and <code>REFUND</code> transactions (<b>transactionType</b>).</span>
    */
    private ?Amount $eBayCollectedTaxAmount = null;
    
    /**
     * @var FeeJurisdiction|null $feeJurisdiction This container stores information about region-specific fees that are charged to sellers.
    */
    private ?FeeJurisdiction $feeJurisdiction = null;
    
    /**
     * @var FeeTypeEnum|null $feeType The enumeration value returned in this field indicates the type of fee that was deducted from the seller payout.
    */
    private ?FeeTypeEnum $feeType = null;
    
    /**
     * @var string|null $orderId The unique identifier of the eBay order associated with the monetary transaction.
    */
    private ?string $orderId = null;
    
    /**
     * @var array<OrderLineItem>|null $orderLineItems This array either shows the order line item transactional fees related to a <code>SALE</code> transaction and deducted from the payout associated with that order, or it shows the transactional fee credits going back to the seller in the case of a <code>REFUND</code> transaction.
    */
    private ?array $orderLineItems = null;
    
    /**
     * @var string|null $paymentsEntity This string value indicates the entity that is processing the payment.
    */
    private ?string $paymentsEntity = null;
    
    /**
     * @var PayoutDetails|null $payoutDetails This container provides the payout details for a split-payout case. This container is only returned for split-payout use cases.
    */
    private ?PayoutDetails $payoutDetails = null;
    
    /**
     * @var string|null $payoutId The unique identifier of the seller payout associated with the monetary transaction.
    */
    private ?string $payoutId = null;
    
    /**
     * @var array<Reference>|null $references This field contains reference information for the transaction fee. This includes an ID and the type of ID provided (such as item ID).
    */
    private ?array $references = null;
    
    /**
     * @var string|null $salesRecordReference The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout.<br><br><span class="tablenote"><strong>Note:</strong> For all orders originating after February 1, 2020, a value of <code>0</code> will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of <strong>salesRecordReference</strong>, depend on <strong>orderId</strong> instead as the identifier of the order. The <strong>salesRecordReference</strong> field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon.</span>
    */
    private ?string $salesRecordReference = null;
    
    /**
     * @var array<Tax>|null $taxes This array shows the tax type and amount applicable to the transaction. <br><br><span class="tablenote"><b>Note:</b> Currently, this array is only returned for tax charged against a purchased eBay shipping label.</span>
    */
    private ?array $taxes = null;
    
    /**
     * @var Amount|null $totalFeeAmount This amount is the total amount of selling fees paid for order.
    */
    private ?Amount $totalFeeAmount = null;
    
    /**
     * @var Amount|null $totalFeeBasisAmount This amount is the total amount for the order before selling fees are deducted from the seller payout associated with the order.
    */
    private ?Amount $totalFeeBasisAmount = null;
    
    /**
     * @var string|null $transactionDate This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
    */
    private ?string $transactionDate = null;
    
    /**
     * @var Amount|null $transactionEbayCollectedTaxAmount Sales tax collected by eBay, applicable only for SALE and REFUND.
    */
    private ?Amount $transactionEbayCollectedTaxAmount = null;
    
    /**
     * @var string|null $transactionId This field, when combined with the <a href="#response.transactions.transactionType" >transactionType</a> field, provide a unique identifier of the monetary transaction.
    */
    private ?string $transactionId = null;
    
    /**
     * @var string|null $transactionMemo This field applies to shipping label transactions, sales transactions where payout is on hold, and non-sale charge fees.
    */
    private ?string $transactionMemo = null;
    
    /**
     * @var TransactionStatusEnum|null $transactionStatus This enumeration value indicates the current status of the seller payout associated with the monetary transaction.
    */
    private ?TransactionStatusEnum $transactionStatus = null;
    
    /**
     * @var TransactionTypeEnum|null $transactionType This enumeration value indicates the type of monetary transaction.
    */
    private ?TransactionTypeEnum $transactionType = null;
    
    /**
     * Instantiates a new Transaction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Transaction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Transaction {
        return new Transaction();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This container shows the dollar value and currency type of the monetary transaction. This field is always returned even when eBay has yet to initiate a payout for the order.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the bookingEntry property value. The enumeration value returned in this field indicates if the monetary transaction amount is a (<code>CREDIT</code>) or a (<code>DEBIT</code>) to the seller's account.
     * @return BookingEntryEnum|null
    */
    public function getBookingEntry(): ?BookingEntryEnum {
        return $this->bookingEntry;
    }

    /**
     * Gets the buyer property value. This is the unique eBay user ID for the buyer who purchased the order. This field is not returned for <code>TRANSFER</code> monetary transaction types.
     * @return Buyer|null
    */
    public function getBuyer(): ?Buyer {
        return $this->buyer;
    }

    /**
     * Gets the eBayCollectedTaxAmount property value. This is the amount of sales tax that has been collected by eBay for an order.<br><br><span class="tablenote"><b>Note:</b> Sales tax applies only to <code>SALE</code> and <code>REFUND</code> transactions (<b>transactionType</b>).</span>
     * @return Amount|null
    */
    public function getEBayCollectedTaxAmount(): ?Amount {
        return $this->eBayCollectedTaxAmount;
    }

    /**
     * Gets the feeJurisdiction property value. This container stores information about region-specific fees that are charged to sellers.
     * @return FeeJurisdiction|null
    */
    public function getFeeJurisdiction(): ?FeeJurisdiction {
        return $this->feeJurisdiction;
    }

    /**
     * Gets the feeType property value. The enumeration value returned in this field indicates the type of fee that was deducted from the seller payout.
     * @return FeeTypeEnum|null
    */
    public function getFeeType(): ?FeeTypeEnum {
        return $this->feeType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'bookingEntry' => fn(ParseNode $n) => $o->setBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'buyer' => fn(ParseNode $n) => $o->setBuyer($n->getObjectValue([Buyer::class, 'createFromDiscriminatorValue'])),
            'eBayCollectedTaxAmount' => fn(ParseNode $n) => $o->setEBayCollectedTaxAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'feeJurisdiction' => fn(ParseNode $n) => $o->setFeeJurisdiction($n->getObjectValue([FeeJurisdiction::class, 'createFromDiscriminatorValue'])),
            'feeType' => fn(ParseNode $n) => $o->setFeeType($n->getEnumValue(FeeTypeEnum::class)),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'orderLineItems' => fn(ParseNode $n) => $o->setOrderLineItems($n->getCollectionOfObjectValues([OrderLineItem::class, 'createFromDiscriminatorValue'])),
            'paymentsEntity' => fn(ParseNode $n) => $o->setPaymentsEntity($n->getStringValue()),
            'payoutDetails' => fn(ParseNode $n) => $o->setPayoutDetails($n->getObjectValue([PayoutDetails::class, 'createFromDiscriminatorValue'])),
            'payoutId' => fn(ParseNode $n) => $o->setPayoutId($n->getStringValue()),
            'references' => fn(ParseNode $n) => $o->setReferences($n->getCollectionOfObjectValues([Reference::class, 'createFromDiscriminatorValue'])),
            'salesRecordReference' => fn(ParseNode $n) => $o->setSalesRecordReference($n->getStringValue()),
            'taxes' => fn(ParseNode $n) => $o->setTaxes($n->getCollectionOfObjectValues([Tax::class, 'createFromDiscriminatorValue'])),
            'totalFeeAmount' => fn(ParseNode $n) => $o->setTotalFeeAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'totalFeeBasisAmount' => fn(ParseNode $n) => $o->setTotalFeeBasisAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'transactionDate' => fn(ParseNode $n) => $o->setTransactionDate($n->getStringValue()),
            'ebayCollectedTaxAmount' => fn(ParseNode $n) => $o->setTransactionEbayCollectedTaxAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'transactionMemo' => fn(ParseNode $n) => $o->setTransactionMemo($n->getStringValue()),
            'transactionStatus' => fn(ParseNode $n) => $o->setTransactionStatus($n->getEnumValue(TransactionStatusEnum::class)),
            'transactionType' => fn(ParseNode $n) => $o->setTransactionType($n->getEnumValue(TransactionTypeEnum::class)),
        ];
    }

    /**
     * Gets the orderId property value. The unique identifier of the eBay order associated with the monetary transaction.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the orderLineItems property value. This array either shows the order line item transactional fees related to a <code>SALE</code> transaction and deducted from the payout associated with that order, or it shows the transactional fee credits going back to the seller in the case of a <code>REFUND</code> transaction.
     * @return array<OrderLineItem>|null
    */
    public function getOrderLineItems(): ?array {
        return $this->orderLineItems;
    }

    /**
     * Gets the paymentsEntity property value. This string value indicates the entity that is processing the payment.
     * @return string|null
    */
    public function getPaymentsEntity(): ?string {
        return $this->paymentsEntity;
    }

    /**
     * Gets the payoutDetails property value. This container provides the payout details for a split-payout case. This container is only returned for split-payout use cases.
     * @return PayoutDetails|null
    */
    public function getPayoutDetails(): ?PayoutDetails {
        return $this->payoutDetails;
    }

    /**
     * Gets the payoutId property value. The unique identifier of the seller payout associated with the monetary transaction.
     * @return string|null
    */
    public function getPayoutId(): ?string {
        return $this->payoutId;
    }

    /**
     * Gets the references property value. This field contains reference information for the transaction fee. This includes an ID and the type of ID provided (such as item ID).
     * @return array<Reference>|null
    */
    public function getReferences(): ?array {
        return $this->references;
    }

    /**
     * Gets the salesRecordReference property value. The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout.<br><br><span class="tablenote"><strong>Note:</strong> For all orders originating after February 1, 2020, a value of <code>0</code> will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of <strong>salesRecordReference</strong>, depend on <strong>orderId</strong> instead as the identifier of the order. The <strong>salesRecordReference</strong> field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon.</span>
     * @return string|null
    */
    public function getSalesRecordReference(): ?string {
        return $this->salesRecordReference;
    }

    /**
     * Gets the taxes property value. This array shows the tax type and amount applicable to the transaction. <br><br><span class="tablenote"><b>Note:</b> Currently, this array is only returned for tax charged against a purchased eBay shipping label.</span>
     * @return array<Tax>|null
    */
    public function getTaxes(): ?array {
        return $this->taxes;
    }

    /**
     * Gets the totalFeeAmount property value. This amount is the total amount of selling fees paid for order.
     * @return Amount|null
    */
    public function getTotalFeeAmount(): ?Amount {
        return $this->totalFeeAmount;
    }

    /**
     * Gets the totalFeeBasisAmount property value. This amount is the total amount for the order before selling fees are deducted from the seller payout associated with the order.
     * @return Amount|null
    */
    public function getTotalFeeBasisAmount(): ?Amount {
        return $this->totalFeeBasisAmount;
    }

    /**
     * Gets the transactionDate property value. This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getTransactionDate(): ?string {
        return $this->transactionDate;
    }

    /**
     * Gets the ebayCollectedTaxAmount property value. Sales tax collected by eBay, applicable only for SALE and REFUND.
     * @return Amount|null
    */
    public function getTransactionEbayCollectedTaxAmount(): ?Amount {
        return $this->transactionEbayCollectedTaxAmount;
    }

    /**
     * Gets the transactionId property value. This field, when combined with the <a href="#response.transactions.transactionType" >transactionType</a> field, provide a unique identifier of the monetary transaction.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Gets the transactionMemo property value. This field applies to shipping label transactions, sales transactions where payout is on hold, and non-sale charge fees.
     * @return string|null
    */
    public function getTransactionMemo(): ?string {
        return $this->transactionMemo;
    }

    /**
     * Gets the transactionStatus property value. This enumeration value indicates the current status of the seller payout associated with the monetary transaction.
     * @return TransactionStatusEnum|null
    */
    public function getTransactionStatus(): ?TransactionStatusEnum {
        return $this->transactionStatus;
    }

    /**
     * Gets the transactionType property value. This enumeration value indicates the type of monetary transaction.
     * @return TransactionTypeEnum|null
    */
    public function getTransactionType(): ?TransactionTypeEnum {
        return $this->transactionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeEnumValue('bookingEntry', $this->getBookingEntry());
        $writer->writeObjectValue('buyer', $this->getBuyer());
        $writer->writeObjectValue('eBayCollectedTaxAmount', $this->getEBayCollectedTaxAmount());
        $writer->writeObjectValue('feeJurisdiction', $this->getFeeJurisdiction());
        $writer->writeEnumValue('feeType', $this->getFeeType());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeCollectionOfObjectValues('orderLineItems', $this->getOrderLineItems());
        $writer->writeStringValue('paymentsEntity', $this->getPaymentsEntity());
        $writer->writeObjectValue('payoutDetails', $this->getPayoutDetails());
        $writer->writeStringValue('payoutId', $this->getPayoutId());
        $writer->writeCollectionOfObjectValues('references', $this->getReferences());
        $writer->writeStringValue('salesRecordReference', $this->getSalesRecordReference());
        $writer->writeCollectionOfObjectValues('taxes', $this->getTaxes());
        $writer->writeObjectValue('totalFeeAmount', $this->getTotalFeeAmount());
        $writer->writeObjectValue('totalFeeBasisAmount', $this->getTotalFeeBasisAmount());
        $writer->writeStringValue('transactionDate', $this->getTransactionDate());
        $writer->writeObjectValue('ebayCollectedTaxAmount', $this->getTransactionEbayCollectedTaxAmount());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeStringValue('transactionMemo', $this->getTransactionMemo());
        $writer->writeEnumValue('transactionStatus', $this->getTransactionStatus());
        $writer->writeEnumValue('transactionType', $this->getTransactionType());
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
     * Sets the amount property value. This container shows the dollar value and currency type of the monetary transaction. This field is always returned even when eBay has yet to initiate a payout for the order.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the bookingEntry property value. The enumeration value returned in this field indicates if the monetary transaction amount is a (<code>CREDIT</code>) or a (<code>DEBIT</code>) to the seller's account.
     * @param BookingEntryEnum|null $value Value to set for the bookingEntry property.
    */
    public function setBookingEntry(?BookingEntryEnum $value): void {
        $this->bookingEntry = $value;
    }

    /**
     * Sets the buyer property value. This is the unique eBay user ID for the buyer who purchased the order. This field is not returned for <code>TRANSFER</code> monetary transaction types.
     * @param Buyer|null $value Value to set for the buyer property.
    */
    public function setBuyer(?Buyer $value): void {
        $this->buyer = $value;
    }

    /**
     * Sets the eBayCollectedTaxAmount property value. This is the amount of sales tax that has been collected by eBay for an order.<br><br><span class="tablenote"><b>Note:</b> Sales tax applies only to <code>SALE</code> and <code>REFUND</code> transactions (<b>transactionType</b>).</span>
     * @param Amount|null $value Value to set for the eBayCollectedTaxAmount property.
    */
    public function setEBayCollectedTaxAmount(?Amount $value): void {
        $this->eBayCollectedTaxAmount = $value;
    }

    /**
     * Sets the feeJurisdiction property value. This container stores information about region-specific fees that are charged to sellers.
     * @param FeeJurisdiction|null $value Value to set for the feeJurisdiction property.
    */
    public function setFeeJurisdiction(?FeeJurisdiction $value): void {
        $this->feeJurisdiction = $value;
    }

    /**
     * Sets the feeType property value. The enumeration value returned in this field indicates the type of fee that was deducted from the seller payout.
     * @param FeeTypeEnum|null $value Value to set for the feeType property.
    */
    public function setFeeType(?FeeTypeEnum $value): void {
        $this->feeType = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the eBay order associated with the monetary transaction.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the orderLineItems property value. This array either shows the order line item transactional fees related to a <code>SALE</code> transaction and deducted from the payout associated with that order, or it shows the transactional fee credits going back to the seller in the case of a <code>REFUND</code> transaction.
     * @param array<OrderLineItem>|null $value Value to set for the orderLineItems property.
    */
    public function setOrderLineItems(?array $value): void {
        $this->orderLineItems = $value;
    }

    /**
     * Sets the paymentsEntity property value. This string value indicates the entity that is processing the payment.
     * @param string|null $value Value to set for the paymentsEntity property.
    */
    public function setPaymentsEntity(?string $value): void {
        $this->paymentsEntity = $value;
    }

    /**
     * Sets the payoutDetails property value. This container provides the payout details for a split-payout case. This container is only returned for split-payout use cases.
     * @param PayoutDetails|null $value Value to set for the payoutDetails property.
    */
    public function setPayoutDetails(?PayoutDetails $value): void {
        $this->payoutDetails = $value;
    }

    /**
     * Sets the payoutId property value. The unique identifier of the seller payout associated with the monetary transaction.
     * @param string|null $value Value to set for the payoutId property.
    */
    public function setPayoutId(?string $value): void {
        $this->payoutId = $value;
    }

    /**
     * Sets the references property value. This field contains reference information for the transaction fee. This includes an ID and the type of ID provided (such as item ID).
     * @param array<Reference>|null $value Value to set for the references property.
    */
    public function setReferences(?array $value): void {
        $this->references = $value;
    }

    /**
     * Sets the salesRecordReference property value. The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout.<br><br><span class="tablenote"><strong>Note:</strong> For all orders originating after February 1, 2020, a value of <code>0</code> will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of <strong>salesRecordReference</strong>, depend on <strong>orderId</strong> instead as the identifier of the order. The <strong>salesRecordReference</strong> field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon.</span>
     * @param string|null $value Value to set for the salesRecordReference property.
    */
    public function setSalesRecordReference(?string $value): void {
        $this->salesRecordReference = $value;
    }

    /**
     * Sets the taxes property value. This array shows the tax type and amount applicable to the transaction. <br><br><span class="tablenote"><b>Note:</b> Currently, this array is only returned for tax charged against a purchased eBay shipping label.</span>
     * @param array<Tax>|null $value Value to set for the taxes property.
    */
    public function setTaxes(?array $value): void {
        $this->taxes = $value;
    }

    /**
     * Sets the totalFeeAmount property value. This amount is the total amount of selling fees paid for order.
     * @param Amount|null $value Value to set for the totalFeeAmount property.
    */
    public function setTotalFeeAmount(?Amount $value): void {
        $this->totalFeeAmount = $value;
    }

    /**
     * Sets the totalFeeBasisAmount property value. This amount is the total amount for the order before selling fees are deducted from the seller payout associated with the order.
     * @param Amount|null $value Value to set for the totalFeeBasisAmount property.
    */
    public function setTotalFeeBasisAmount(?Amount $value): void {
        $this->totalFeeBasisAmount = $value;
    }

    /**
     * Sets the transactionDate property value. This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the transactionDate property.
    */
    public function setTransactionDate(?string $value): void {
        $this->transactionDate = $value;
    }

    /**
     * Sets the ebayCollectedTaxAmount property value. Sales tax collected by eBay, applicable only for SALE and REFUND.
     * @param Amount|null $value Value to set for the ebayCollectedTaxAmount property.
    */
    public function setTransactionEbayCollectedTaxAmount(?Amount $value): void {
        $this->transactionEbayCollectedTaxAmount = $value;
    }

    /**
     * Sets the transactionId property value. This field, when combined with the <a href="#response.transactions.transactionType" >transactionType</a> field, provide a unique identifier of the monetary transaction.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

    /**
     * Sets the transactionMemo property value. This field applies to shipping label transactions, sales transactions where payout is on hold, and non-sale charge fees.
     * @param string|null $value Value to set for the transactionMemo property.
    */
    public function setTransactionMemo(?string $value): void {
        $this->transactionMemo = $value;
    }

    /**
     * Sets the transactionStatus property value. This enumeration value indicates the current status of the seller payout associated with the monetary transaction.
     * @param TransactionStatusEnum|null $value Value to set for the transactionStatus property.
    */
    public function setTransactionStatus(?TransactionStatusEnum $value): void {
        $this->transactionStatus = $value;
    }

    /**
     * Sets the transactionType property value. This enumeration value indicates the type of monetary transaction.
     * @param TransactionTypeEnum|null $value Value to set for the transactionType property.
    */
    public function setTransactionType(?TransactionTypeEnum $value): void {
        $this->transactionType = $value;
    }

}
