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
 * This type is the base response type of the <strong>getTransactionSummary</strong> method, and based on the filters that are used in the <strong>getTransactionSummary</strong> call URI, the response may include total count and amount of the seller's sales and credits, total count and amount of buyer refunds, and total count and amount of seller payment holds.
*/
class TransactionSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $adjustmentAmount Total adjustment amount for given payee within a specified period.
    */
    private ?Amount $adjustmentAmount = null;
    
    /**
     * @var BookingEntryEnum|null $adjustmentBookingEntry The credit debit sign indicator for adjustment.
    */
    private ?BookingEntryEnum $adjustmentBookingEntry = null;
    
    /**
     * @var int|null $adjustmentCount Total adjustment count for given payee within a specified period.
    */
    private ?int $adjustmentCount = null;
    
    /**
     * @var Amount|null $balanceTransferAmount The total balance transfer amount for given payee within the specified period.
    */
    private ?Amount $balanceTransferAmount = null;
    
    /**
     * @var BookingEntryEnum|null $balanceTransferBookingEntry The credit debit sign indicator for the balance transfer.
    */
    private ?BookingEntryEnum $balanceTransferBookingEntry = null;
    
    /**
     * @var int|null $balanceTransferCount The total balance transfer count for given payee within the specified period.
    */
    private ?int $balanceTransferCount = null;
    
    /**
     * @var Amount|null $creditAmount This amount is the total dollar value of all the seller's sales and/or credits that match the input criteria.
    */
    private ?Amount $creditAmount = null;
    
    /**
     * @var BookingEntryEnum|null $creditBookingEntry The enumeration value indicates whether the dollar amount in the <strong>creditAmount</strong> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $creditBookingEntry = null;
    
    /**
     * @var int|null $creditCount This integer value indicates the total number of the seller's sales and/or credits that match the input criteria.
    */
    private ?int $creditCount = null;
    
    /**
     * @var Amount|null $disputeAmount This amount is the total dollar value associated with any existing payment disputes.
    */
    private ?Amount $disputeAmount = null;
    
    /**
     * @var BookingEntryEnum|null $disputeBookingEntry The enumeration value indicates whether the dollar amount in the <strong>disputeAmount</strong> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $disputeBookingEntry = null;
    
    /**
     * @var int|null $disputeCount This integer value indicates the total number of payment disputes.
    */
    private ?int $disputeCount = null;
    
    /**
     * @var Amount|null $loanRepaymentAmount The sum of all <code>LOAN_REPAYMENT</code> transactions (i.e., debit and credit,) that match the input criteria.
    */
    private ?Amount $loanRepaymentAmount = null;
    
    /**
     * @var BookingEntryEnum|null $loanRepaymentBookingEntry The enumeration value indicates whether the <code>loanRepaymentAmount</code> is a <code>DEBIT</code> against, or a <code>CREDIT</code> to, the sellers's account.
    */
    private ?BookingEntryEnum $loanRepaymentBookingEntry = null;
    
    /**
     * @var int|null $loanRepaymentCount This integer value indicates the total number of <code>LOAN_REPAYMENT</code> transactions.
    */
    private ?int $loanRepaymentCount = null;
    
    /**
     * @var Amount|null $nonSaleChargeAmount The total non-sale charge amount for given payee within a specified period.
    */
    private ?Amount $nonSaleChargeAmount = null;
    
    /**
     * @var BookingEntryEnum|null $nonSaleChargeBookingEntry The credit/debit sign indicator for the non-sale charge.
    */
    private ?BookingEntryEnum $nonSaleChargeBookingEntry = null;
    
    /**
     * @var int|null $nonSaleChargeCount The total non-sale charge count for given payee within a specified period.
    */
    private ?int $nonSaleChargeCount = null;
    
    /**
     * @var Amount|null $onHoldAmount This amount is the total dollar value of order sales where the associated funds are on hold.
    */
    private ?Amount $onHoldAmount = null;
    
    /**
     * @var BookingEntryEnum|null $onHoldBookingEntry The enumeration value indicates whether the dollar amount in the <strong>onHoldAmount</strong> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $onHoldBookingEntry = null;
    
    /**
     * @var int|null $onHoldCount This integer value indicates the total number of order sales where the associated funds are on hold.
    */
    private ?int $onHoldCount = null;
    
    /**
     * @var Amount|null $purchaseAmount <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This amount is the total dollar value of all the purchases that have been initiated by a seller using spendable funds.
    */
    private ?Amount $purchaseAmount = null;
    
    /**
     * @var BookingEntryEnum|null $purchaseBookingEntry This enumeration value indicates whether the dollar amount in the <b>purchase</b> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $purchaseBookingEntry = null;
    
    /**
     * @var int|null $purchaseCount This integer value indicates the total number of purchases initiated by a seller using spendable funds.
    */
    private ?int $purchaseCount = null;
    
    /**
     * @var Amount|null $refundAmount This amount is the total dollar value of buyer refunds that match the input criteria.
    */
    private ?Amount $refundAmount = null;
    
    /**
     * @var BookingEntryEnum|null $refundBookingEntry The enumeration value indicates whether the dollar amount in the <strong>refundAmount</strong> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $refundBookingEntry = null;
    
    /**
     * @var int|null $refundCount This integer value indicates the total number of buyer refunds that match the input criteria.
    */
    private ?int $refundCount = null;
    
    /**
     * @var Amount|null $shippingLabelAmount This is the total dollar value of the eBay shipping labels purchased by the seller.
    */
    private ?Amount $shippingLabelAmount = null;
    
    /**
     * @var BookingEntryEnum|null $shippingLabelBookingEntry The enumeration value indicates whether the dollar amount in the <strong>shippingLabelAmount</strong> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $shippingLabelBookingEntry = null;
    
    /**
     * @var int|null $shippingLabelCount This is the total number of eBay shipping labels purchased by the seller.
    */
    private ?int $shippingLabelCount = null;
    
    /**
     * @var Amount|null $transferAmount This amount is the total dollar value of buyer refund transfers that match the input criteria.
    */
    private ?Amount $transferAmount = null;
    
    /**
     * @var BookingEntryEnum|null $transferBookingEntry The enumeration value indicates whether the dollar amount in the <strong>transferAmount</strong> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $transferBookingEntry = null;
    
    /**
     * @var int|null $transferCount This integer value indicates the total number of buyer refund transfers that match the input criteria.
    */
    private ?int $transferCount = null;
    
    /**
     * @var Amount|null $withdrawalAmount This amount is the total dollar value of on-demand payouts (withdrawals) that match the input criteria.
    */
    private ?Amount $withdrawalAmount = null;
    
    /**
     * @var BookingEntryEnum|null $withdrawalBookingEntry The enumeration value indicates whether the dollar amount in the <strong>withdrawalAmount</strong> field is a charge (debit) to the seller or a credit.
    */
    private ?BookingEntryEnum $withdrawalBookingEntry = null;
    
    /**
     * @var int|null $withdrawalCount This integer value indicates the total number of on-demand payouts (withdrawals) that match the input criteria.
    */
    private ?int $withdrawalCount = null;
    
    /**
     * Instantiates a new TransactionSummaryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransactionSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransactionSummaryResponse {
        return new TransactionSummaryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adjustmentAmount property value. Total adjustment amount for given payee within a specified period.
     * @return Amount|null
    */
    public function getAdjustmentAmount(): ?Amount {
        return $this->adjustmentAmount;
    }

    /**
     * Gets the adjustmentBookingEntry property value. The credit debit sign indicator for adjustment.
     * @return BookingEntryEnum|null
    */
    public function getAdjustmentBookingEntry(): ?BookingEntryEnum {
        return $this->adjustmentBookingEntry;
    }

    /**
     * Gets the adjustmentCount property value. Total adjustment count for given payee within a specified period.
     * @return int|null
    */
    public function getAdjustmentCount(): ?int {
        return $this->adjustmentCount;
    }

    /**
     * Gets the balanceTransferAmount property value. The total balance transfer amount for given payee within the specified period.
     * @return Amount|null
    */
    public function getBalanceTransferAmount(): ?Amount {
        return $this->balanceTransferAmount;
    }

    /**
     * Gets the balanceTransferBookingEntry property value. The credit debit sign indicator for the balance transfer.
     * @return BookingEntryEnum|null
    */
    public function getBalanceTransferBookingEntry(): ?BookingEntryEnum {
        return $this->balanceTransferBookingEntry;
    }

    /**
     * Gets the balanceTransferCount property value. The total balance transfer count for given payee within the specified period.
     * @return int|null
    */
    public function getBalanceTransferCount(): ?int {
        return $this->balanceTransferCount;
    }

    /**
     * Gets the creditAmount property value. This amount is the total dollar value of all the seller's sales and/or credits that match the input criteria.
     * @return Amount|null
    */
    public function getCreditAmount(): ?Amount {
        return $this->creditAmount;
    }

    /**
     * Gets the creditBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>creditAmount</strong> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getCreditBookingEntry(): ?BookingEntryEnum {
        return $this->creditBookingEntry;
    }

    /**
     * Gets the creditCount property value. This integer value indicates the total number of the seller's sales and/or credits that match the input criteria.
     * @return int|null
    */
    public function getCreditCount(): ?int {
        return $this->creditCount;
    }

    /**
     * Gets the disputeAmount property value. This amount is the total dollar value associated with any existing payment disputes.
     * @return Amount|null
    */
    public function getDisputeAmount(): ?Amount {
        return $this->disputeAmount;
    }

    /**
     * Gets the disputeBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>disputeAmount</strong> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getDisputeBookingEntry(): ?BookingEntryEnum {
        return $this->disputeBookingEntry;
    }

    /**
     * Gets the disputeCount property value. This integer value indicates the total number of payment disputes.
     * @return int|null
    */
    public function getDisputeCount(): ?int {
        return $this->disputeCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adjustmentAmount' => fn(ParseNode $n) => $o->setAdjustmentAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'adjustmentBookingEntry' => fn(ParseNode $n) => $o->setAdjustmentBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'adjustmentCount' => fn(ParseNode $n) => $o->setAdjustmentCount($n->getIntegerValue()),
            'balanceTransferAmount' => fn(ParseNode $n) => $o->setBalanceTransferAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'balanceTransferBookingEntry' => fn(ParseNode $n) => $o->setBalanceTransferBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'balanceTransferCount' => fn(ParseNode $n) => $o->setBalanceTransferCount($n->getIntegerValue()),
            'creditAmount' => fn(ParseNode $n) => $o->setCreditAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'creditBookingEntry' => fn(ParseNode $n) => $o->setCreditBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'creditCount' => fn(ParseNode $n) => $o->setCreditCount($n->getIntegerValue()),
            'disputeAmount' => fn(ParseNode $n) => $o->setDisputeAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'disputeBookingEntry' => fn(ParseNode $n) => $o->setDisputeBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'disputeCount' => fn(ParseNode $n) => $o->setDisputeCount($n->getIntegerValue()),
            'loanRepaymentAmount' => fn(ParseNode $n) => $o->setLoanRepaymentAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'loanRepaymentBookingEntry' => fn(ParseNode $n) => $o->setLoanRepaymentBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'loanRepaymentCount' => fn(ParseNode $n) => $o->setLoanRepaymentCount($n->getIntegerValue()),
            'nonSaleChargeAmount' => fn(ParseNode $n) => $o->setNonSaleChargeAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'nonSaleChargeBookingEntry' => fn(ParseNode $n) => $o->setNonSaleChargeBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'nonSaleChargeCount' => fn(ParseNode $n) => $o->setNonSaleChargeCount($n->getIntegerValue()),
            'onHoldAmount' => fn(ParseNode $n) => $o->setOnHoldAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'onHoldBookingEntry' => fn(ParseNode $n) => $o->setOnHoldBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'onHoldCount' => fn(ParseNode $n) => $o->setOnHoldCount($n->getIntegerValue()),
            'purchaseAmount' => fn(ParseNode $n) => $o->setPurchaseAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'purchaseBookingEntry' => fn(ParseNode $n) => $o->setPurchaseBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'purchaseCount' => fn(ParseNode $n) => $o->setPurchaseCount($n->getIntegerValue()),
            'refundAmount' => fn(ParseNode $n) => $o->setRefundAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refundBookingEntry' => fn(ParseNode $n) => $o->setRefundBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'refundCount' => fn(ParseNode $n) => $o->setRefundCount($n->getIntegerValue()),
            'shippingLabelAmount' => fn(ParseNode $n) => $o->setShippingLabelAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingLabelBookingEntry' => fn(ParseNode $n) => $o->setShippingLabelBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'shippingLabelCount' => fn(ParseNode $n) => $o->setShippingLabelCount($n->getIntegerValue()),
            'transferAmount' => fn(ParseNode $n) => $o->setTransferAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'transferBookingEntry' => fn(ParseNode $n) => $o->setTransferBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'transferCount' => fn(ParseNode $n) => $o->setTransferCount($n->getIntegerValue()),
            'withdrawalAmount' => fn(ParseNode $n) => $o->setWithdrawalAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'withdrawalBookingEntry' => fn(ParseNode $n) => $o->setWithdrawalBookingEntry($n->getEnumValue(BookingEntryEnum::class)),
            'withdrawalCount' => fn(ParseNode $n) => $o->setWithdrawalCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the loanRepaymentAmount property value. The sum of all <code>LOAN_REPAYMENT</code> transactions (i.e., debit and credit,) that match the input criteria.
     * @return Amount|null
    */
    public function getLoanRepaymentAmount(): ?Amount {
        return $this->loanRepaymentAmount;
    }

    /**
     * Gets the loanRepaymentBookingEntry property value. The enumeration value indicates whether the <code>loanRepaymentAmount</code> is a <code>DEBIT</code> against, or a <code>CREDIT</code> to, the sellers's account.
     * @return BookingEntryEnum|null
    */
    public function getLoanRepaymentBookingEntry(): ?BookingEntryEnum {
        return $this->loanRepaymentBookingEntry;
    }

    /**
     * Gets the loanRepaymentCount property value. This integer value indicates the total number of <code>LOAN_REPAYMENT</code> transactions.
     * @return int|null
    */
    public function getLoanRepaymentCount(): ?int {
        return $this->loanRepaymentCount;
    }

    /**
     * Gets the nonSaleChargeAmount property value. The total non-sale charge amount for given payee within a specified period.
     * @return Amount|null
    */
    public function getNonSaleChargeAmount(): ?Amount {
        return $this->nonSaleChargeAmount;
    }

    /**
     * Gets the nonSaleChargeBookingEntry property value. The credit/debit sign indicator for the non-sale charge.
     * @return BookingEntryEnum|null
    */
    public function getNonSaleChargeBookingEntry(): ?BookingEntryEnum {
        return $this->nonSaleChargeBookingEntry;
    }

    /**
     * Gets the nonSaleChargeCount property value. The total non-sale charge count for given payee within a specified period.
     * @return int|null
    */
    public function getNonSaleChargeCount(): ?int {
        return $this->nonSaleChargeCount;
    }

    /**
     * Gets the onHoldAmount property value. This amount is the total dollar value of order sales where the associated funds are on hold.
     * @return Amount|null
    */
    public function getOnHoldAmount(): ?Amount {
        return $this->onHoldAmount;
    }

    /**
     * Gets the onHoldBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>onHoldAmount</strong> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getOnHoldBookingEntry(): ?BookingEntryEnum {
        return $this->onHoldBookingEntry;
    }

    /**
     * Gets the onHoldCount property value. This integer value indicates the total number of order sales where the associated funds are on hold.
     * @return int|null
    */
    public function getOnHoldCount(): ?int {
        return $this->onHoldCount;
    }

    /**
     * Gets the purchaseAmount property value. <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This amount is the total dollar value of all the purchases that have been initiated by a seller using spendable funds.
     * @return Amount|null
    */
    public function getPurchaseAmount(): ?Amount {
        return $this->purchaseAmount;
    }

    /**
     * Gets the purchaseBookingEntry property value. This enumeration value indicates whether the dollar amount in the <b>purchase</b> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getPurchaseBookingEntry(): ?BookingEntryEnum {
        return $this->purchaseBookingEntry;
    }

    /**
     * Gets the purchaseCount property value. This integer value indicates the total number of purchases initiated by a seller using spendable funds.
     * @return int|null
    */
    public function getPurchaseCount(): ?int {
        return $this->purchaseCount;
    }

    /**
     * Gets the refundAmount property value. This amount is the total dollar value of buyer refunds that match the input criteria.
     * @return Amount|null
    */
    public function getRefundAmount(): ?Amount {
        return $this->refundAmount;
    }

    /**
     * Gets the refundBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>refundAmount</strong> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getRefundBookingEntry(): ?BookingEntryEnum {
        return $this->refundBookingEntry;
    }

    /**
     * Gets the refundCount property value. This integer value indicates the total number of buyer refunds that match the input criteria.
     * @return int|null
    */
    public function getRefundCount(): ?int {
        return $this->refundCount;
    }

    /**
     * Gets the shippingLabelAmount property value. This is the total dollar value of the eBay shipping labels purchased by the seller.
     * @return Amount|null
    */
    public function getShippingLabelAmount(): ?Amount {
        return $this->shippingLabelAmount;
    }

    /**
     * Gets the shippingLabelBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>shippingLabelAmount</strong> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getShippingLabelBookingEntry(): ?BookingEntryEnum {
        return $this->shippingLabelBookingEntry;
    }

    /**
     * Gets the shippingLabelCount property value. This is the total number of eBay shipping labels purchased by the seller.
     * @return int|null
    */
    public function getShippingLabelCount(): ?int {
        return $this->shippingLabelCount;
    }

    /**
     * Gets the transferAmount property value. This amount is the total dollar value of buyer refund transfers that match the input criteria.
     * @return Amount|null
    */
    public function getTransferAmount(): ?Amount {
        return $this->transferAmount;
    }

    /**
     * Gets the transferBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>transferAmount</strong> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getTransferBookingEntry(): ?BookingEntryEnum {
        return $this->transferBookingEntry;
    }

    /**
     * Gets the transferCount property value. This integer value indicates the total number of buyer refund transfers that match the input criteria.
     * @return int|null
    */
    public function getTransferCount(): ?int {
        return $this->transferCount;
    }

    /**
     * Gets the withdrawalAmount property value. This amount is the total dollar value of on-demand payouts (withdrawals) that match the input criteria.
     * @return Amount|null
    */
    public function getWithdrawalAmount(): ?Amount {
        return $this->withdrawalAmount;
    }

    /**
     * Gets the withdrawalBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>withdrawalAmount</strong> field is a charge (debit) to the seller or a credit.
     * @return BookingEntryEnum|null
    */
    public function getWithdrawalBookingEntry(): ?BookingEntryEnum {
        return $this->withdrawalBookingEntry;
    }

    /**
     * Gets the withdrawalCount property value. This integer value indicates the total number of on-demand payouts (withdrawals) that match the input criteria.
     * @return int|null
    */
    public function getWithdrawalCount(): ?int {
        return $this->withdrawalCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adjustmentAmount', $this->getAdjustmentAmount());
        $writer->writeEnumValue('adjustmentBookingEntry', $this->getAdjustmentBookingEntry());
        $writer->writeIntegerValue('adjustmentCount', $this->getAdjustmentCount());
        $writer->writeObjectValue('balanceTransferAmount', $this->getBalanceTransferAmount());
        $writer->writeEnumValue('balanceTransferBookingEntry', $this->getBalanceTransferBookingEntry());
        $writer->writeIntegerValue('balanceTransferCount', $this->getBalanceTransferCount());
        $writer->writeObjectValue('creditAmount', $this->getCreditAmount());
        $writer->writeEnumValue('creditBookingEntry', $this->getCreditBookingEntry());
        $writer->writeIntegerValue('creditCount', $this->getCreditCount());
        $writer->writeObjectValue('disputeAmount', $this->getDisputeAmount());
        $writer->writeEnumValue('disputeBookingEntry', $this->getDisputeBookingEntry());
        $writer->writeIntegerValue('disputeCount', $this->getDisputeCount());
        $writer->writeObjectValue('loanRepaymentAmount', $this->getLoanRepaymentAmount());
        $writer->writeEnumValue('loanRepaymentBookingEntry', $this->getLoanRepaymentBookingEntry());
        $writer->writeIntegerValue('loanRepaymentCount', $this->getLoanRepaymentCount());
        $writer->writeObjectValue('nonSaleChargeAmount', $this->getNonSaleChargeAmount());
        $writer->writeEnumValue('nonSaleChargeBookingEntry', $this->getNonSaleChargeBookingEntry());
        $writer->writeIntegerValue('nonSaleChargeCount', $this->getNonSaleChargeCount());
        $writer->writeObjectValue('onHoldAmount', $this->getOnHoldAmount());
        $writer->writeEnumValue('onHoldBookingEntry', $this->getOnHoldBookingEntry());
        $writer->writeIntegerValue('onHoldCount', $this->getOnHoldCount());
        $writer->writeObjectValue('purchaseAmount', $this->getPurchaseAmount());
        $writer->writeEnumValue('purchaseBookingEntry', $this->getPurchaseBookingEntry());
        $writer->writeIntegerValue('purchaseCount', $this->getPurchaseCount());
        $writer->writeObjectValue('refundAmount', $this->getRefundAmount());
        $writer->writeEnumValue('refundBookingEntry', $this->getRefundBookingEntry());
        $writer->writeIntegerValue('refundCount', $this->getRefundCount());
        $writer->writeObjectValue('shippingLabelAmount', $this->getShippingLabelAmount());
        $writer->writeEnumValue('shippingLabelBookingEntry', $this->getShippingLabelBookingEntry());
        $writer->writeIntegerValue('shippingLabelCount', $this->getShippingLabelCount());
        $writer->writeObjectValue('transferAmount', $this->getTransferAmount());
        $writer->writeEnumValue('transferBookingEntry', $this->getTransferBookingEntry());
        $writer->writeIntegerValue('transferCount', $this->getTransferCount());
        $writer->writeObjectValue('withdrawalAmount', $this->getWithdrawalAmount());
        $writer->writeEnumValue('withdrawalBookingEntry', $this->getWithdrawalBookingEntry());
        $writer->writeIntegerValue('withdrawalCount', $this->getWithdrawalCount());
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
     * Sets the adjustmentAmount property value. Total adjustment amount for given payee within a specified period.
     * @param Amount|null $value Value to set for the adjustmentAmount property.
    */
    public function setAdjustmentAmount(?Amount $value): void {
        $this->adjustmentAmount = $value;
    }

    /**
     * Sets the adjustmentBookingEntry property value. The credit debit sign indicator for adjustment.
     * @param BookingEntryEnum|null $value Value to set for the adjustmentBookingEntry property.
    */
    public function setAdjustmentBookingEntry(?BookingEntryEnum $value): void {
        $this->adjustmentBookingEntry = $value;
    }

    /**
     * Sets the adjustmentCount property value. Total adjustment count for given payee within a specified period.
     * @param int|null $value Value to set for the adjustmentCount property.
    */
    public function setAdjustmentCount(?int $value): void {
        $this->adjustmentCount = $value;
    }

    /**
     * Sets the balanceTransferAmount property value. The total balance transfer amount for given payee within the specified period.
     * @param Amount|null $value Value to set for the balanceTransferAmount property.
    */
    public function setBalanceTransferAmount(?Amount $value): void {
        $this->balanceTransferAmount = $value;
    }

    /**
     * Sets the balanceTransferBookingEntry property value. The credit debit sign indicator for the balance transfer.
     * @param BookingEntryEnum|null $value Value to set for the balanceTransferBookingEntry property.
    */
    public function setBalanceTransferBookingEntry(?BookingEntryEnum $value): void {
        $this->balanceTransferBookingEntry = $value;
    }

    /**
     * Sets the balanceTransferCount property value. The total balance transfer count for given payee within the specified period.
     * @param int|null $value Value to set for the balanceTransferCount property.
    */
    public function setBalanceTransferCount(?int $value): void {
        $this->balanceTransferCount = $value;
    }

    /**
     * Sets the creditAmount property value. This amount is the total dollar value of all the seller's sales and/or credits that match the input criteria.
     * @param Amount|null $value Value to set for the creditAmount property.
    */
    public function setCreditAmount(?Amount $value): void {
        $this->creditAmount = $value;
    }

    /**
     * Sets the creditBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>creditAmount</strong> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the creditBookingEntry property.
    */
    public function setCreditBookingEntry(?BookingEntryEnum $value): void {
        $this->creditBookingEntry = $value;
    }

    /**
     * Sets the creditCount property value. This integer value indicates the total number of the seller's sales and/or credits that match the input criteria.
     * @param int|null $value Value to set for the creditCount property.
    */
    public function setCreditCount(?int $value): void {
        $this->creditCount = $value;
    }

    /**
     * Sets the disputeAmount property value. This amount is the total dollar value associated with any existing payment disputes.
     * @param Amount|null $value Value to set for the disputeAmount property.
    */
    public function setDisputeAmount(?Amount $value): void {
        $this->disputeAmount = $value;
    }

    /**
     * Sets the disputeBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>disputeAmount</strong> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the disputeBookingEntry property.
    */
    public function setDisputeBookingEntry(?BookingEntryEnum $value): void {
        $this->disputeBookingEntry = $value;
    }

    /**
     * Sets the disputeCount property value. This integer value indicates the total number of payment disputes.
     * @param int|null $value Value to set for the disputeCount property.
    */
    public function setDisputeCount(?int $value): void {
        $this->disputeCount = $value;
    }

    /**
     * Sets the loanRepaymentAmount property value. The sum of all <code>LOAN_REPAYMENT</code> transactions (i.e., debit and credit,) that match the input criteria.
     * @param Amount|null $value Value to set for the loanRepaymentAmount property.
    */
    public function setLoanRepaymentAmount(?Amount $value): void {
        $this->loanRepaymentAmount = $value;
    }

    /**
     * Sets the loanRepaymentBookingEntry property value. The enumeration value indicates whether the <code>loanRepaymentAmount</code> is a <code>DEBIT</code> against, or a <code>CREDIT</code> to, the sellers's account.
     * @param BookingEntryEnum|null $value Value to set for the loanRepaymentBookingEntry property.
    */
    public function setLoanRepaymentBookingEntry(?BookingEntryEnum $value): void {
        $this->loanRepaymentBookingEntry = $value;
    }

    /**
     * Sets the loanRepaymentCount property value. This integer value indicates the total number of <code>LOAN_REPAYMENT</code> transactions.
     * @param int|null $value Value to set for the loanRepaymentCount property.
    */
    public function setLoanRepaymentCount(?int $value): void {
        $this->loanRepaymentCount = $value;
    }

    /**
     * Sets the nonSaleChargeAmount property value. The total non-sale charge amount for given payee within a specified period.
     * @param Amount|null $value Value to set for the nonSaleChargeAmount property.
    */
    public function setNonSaleChargeAmount(?Amount $value): void {
        $this->nonSaleChargeAmount = $value;
    }

    /**
     * Sets the nonSaleChargeBookingEntry property value. The credit/debit sign indicator for the non-sale charge.
     * @param BookingEntryEnum|null $value Value to set for the nonSaleChargeBookingEntry property.
    */
    public function setNonSaleChargeBookingEntry(?BookingEntryEnum $value): void {
        $this->nonSaleChargeBookingEntry = $value;
    }

    /**
     * Sets the nonSaleChargeCount property value. The total non-sale charge count for given payee within a specified period.
     * @param int|null $value Value to set for the nonSaleChargeCount property.
    */
    public function setNonSaleChargeCount(?int $value): void {
        $this->nonSaleChargeCount = $value;
    }

    /**
     * Sets the onHoldAmount property value. This amount is the total dollar value of order sales where the associated funds are on hold.
     * @param Amount|null $value Value to set for the onHoldAmount property.
    */
    public function setOnHoldAmount(?Amount $value): void {
        $this->onHoldAmount = $value;
    }

    /**
     * Sets the onHoldBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>onHoldAmount</strong> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the onHoldBookingEntry property.
    */
    public function setOnHoldBookingEntry(?BookingEntryEnum $value): void {
        $this->onHoldBookingEntry = $value;
    }

    /**
     * Sets the onHoldCount property value. This integer value indicates the total number of order sales where the associated funds are on hold.
     * @param int|null $value Value to set for the onHoldCount property.
    */
    public function setOnHoldCount(?int $value): void {
        $this->onHoldCount = $value;
    }

    /**
     * Sets the purchaseAmount property value. <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This amount is the total dollar value of all the purchases that have been initiated by a seller using spendable funds.
     * @param Amount|null $value Value to set for the purchaseAmount property.
    */
    public function setPurchaseAmount(?Amount $value): void {
        $this->purchaseAmount = $value;
    }

    /**
     * Sets the purchaseBookingEntry property value. This enumeration value indicates whether the dollar amount in the <b>purchase</b> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the purchaseBookingEntry property.
    */
    public function setPurchaseBookingEntry(?BookingEntryEnum $value): void {
        $this->purchaseBookingEntry = $value;
    }

    /**
     * Sets the purchaseCount property value. This integer value indicates the total number of purchases initiated by a seller using spendable funds.
     * @param int|null $value Value to set for the purchaseCount property.
    */
    public function setPurchaseCount(?int $value): void {
        $this->purchaseCount = $value;
    }

    /**
     * Sets the refundAmount property value. This amount is the total dollar value of buyer refunds that match the input criteria.
     * @param Amount|null $value Value to set for the refundAmount property.
    */
    public function setRefundAmount(?Amount $value): void {
        $this->refundAmount = $value;
    }

    /**
     * Sets the refundBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>refundAmount</strong> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the refundBookingEntry property.
    */
    public function setRefundBookingEntry(?BookingEntryEnum $value): void {
        $this->refundBookingEntry = $value;
    }

    /**
     * Sets the refundCount property value. This integer value indicates the total number of buyer refunds that match the input criteria.
     * @param int|null $value Value to set for the refundCount property.
    */
    public function setRefundCount(?int $value): void {
        $this->refundCount = $value;
    }

    /**
     * Sets the shippingLabelAmount property value. This is the total dollar value of the eBay shipping labels purchased by the seller.
     * @param Amount|null $value Value to set for the shippingLabelAmount property.
    */
    public function setShippingLabelAmount(?Amount $value): void {
        $this->shippingLabelAmount = $value;
    }

    /**
     * Sets the shippingLabelBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>shippingLabelAmount</strong> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the shippingLabelBookingEntry property.
    */
    public function setShippingLabelBookingEntry(?BookingEntryEnum $value): void {
        $this->shippingLabelBookingEntry = $value;
    }

    /**
     * Sets the shippingLabelCount property value. This is the total number of eBay shipping labels purchased by the seller.
     * @param int|null $value Value to set for the shippingLabelCount property.
    */
    public function setShippingLabelCount(?int $value): void {
        $this->shippingLabelCount = $value;
    }

    /**
     * Sets the transferAmount property value. This amount is the total dollar value of buyer refund transfers that match the input criteria.
     * @param Amount|null $value Value to set for the transferAmount property.
    */
    public function setTransferAmount(?Amount $value): void {
        $this->transferAmount = $value;
    }

    /**
     * Sets the transferBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>transferAmount</strong> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the transferBookingEntry property.
    */
    public function setTransferBookingEntry(?BookingEntryEnum $value): void {
        $this->transferBookingEntry = $value;
    }

    /**
     * Sets the transferCount property value. This integer value indicates the total number of buyer refund transfers that match the input criteria.
     * @param int|null $value Value to set for the transferCount property.
    */
    public function setTransferCount(?int $value): void {
        $this->transferCount = $value;
    }

    /**
     * Sets the withdrawalAmount property value. This amount is the total dollar value of on-demand payouts (withdrawals) that match the input criteria.
     * @param Amount|null $value Value to set for the withdrawalAmount property.
    */
    public function setWithdrawalAmount(?Amount $value): void {
        $this->withdrawalAmount = $value;
    }

    /**
     * Sets the withdrawalBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>withdrawalAmount</strong> field is a charge (debit) to the seller or a credit.
     * @param BookingEntryEnum|null $value Value to set for the withdrawalBookingEntry property.
    */
    public function setWithdrawalBookingEntry(?BookingEntryEnum $value): void {
        $this->withdrawalBookingEntry = $value;
    }

    /**
     * Sets the withdrawalCount property value. This integer value indicates the total number of on-demand payouts (withdrawals) that match the input criteria.
     * @param int|null $value Value to set for the withdrawalCount property.
    */
    public function setWithdrawalCount(?int $value): void {
        $this->withdrawalCount = $value;
    }

}
