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
 * This type is the base response type of the <strong>getTransactionSummary</strong> method, and based on the filters that are used in the <strong>getTransactionSummary</strong> call URI, the response may include  total count and amount of the seller's sales and credits, total count and amount of buyer refunds, and total count and amount of seller payment holds.
*/
class TransactionSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $adjustmentAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $adjustmentAmount = null;
    
    /**
     * @var string|null $adjustmentBookingEntry The credit debit sign indicator for adjustment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $adjustmentBookingEntry = null;
    
    /**
     * @var int|null $adjustmentCount Total adjustment count for given payee within a specified period.
    */
    private ?int $adjustmentCount = null;
    
    /**
     * @var Amount|null $balanceTransferAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $balanceTransferAmount = null;
    
    /**
     * @var string|null $balanceTransferBookingEntry The credit debit sign indicator for the balance transfer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $balanceTransferBookingEntry = null;
    
    /**
     * @var int|null $balanceTransferCount The total balance transfer count for given payee within the specified period.
    */
    private ?int $balanceTransferCount = null;
    
    /**
     * @var Amount|null $creditAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $creditAmount = null;
    
    /**
     * @var string|null $creditBookingEntry The enumeration value indicates whether the dollar amount in the <strong>creditAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>CREDIT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $creditBookingEntry = null;
    
    /**
     * @var int|null $creditCount This integer value indicates the total number of the seller's sales and/or credits that match the input criteria. <br><br><span class="tablenote"><strong>Note:</strong> Unless the <b>transactionType</b> filter is used in the request to retrieve a specific type of monetary transaction (sale, buyer refund, or seller credit), the <b>creditCount</b> and <b>creditAmount</b> fields account for both order sales and seller credits (the count and value is not distinguished between the two monetary transaction types).</span><br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to either <code>REFUND</code>, <code>DISPUTE</code>, or <code>SHIPPING_LABEL</code>.
    */
    private ?int $creditCount = null;
    
    /**
     * @var Amount|null $disputeAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $disputeAmount = null;
    
    /**
     * @var string|null $disputeBookingEntry The enumeration value indicates whether the dollar amount in the <strong>disputeAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code>, but its possible that <code>CREDIT</code> could be returned if the seller contested one or more payment disputes and won the dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $disputeBookingEntry = null;
    
    /**
     * @var int|null $disputeCount This integer value indicates the total number of payment disputes that have been initiated by one or more buyers. Only the orders that match the input criteria are considered. The Payment Disputes methods in the Fulfillment API can be used by the seller to retrieve more information about any payment disputes. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>DISPUTE</code>.
    */
    private ?int $disputeCount = null;
    
    /**
     * @var Amount|null $loanRepaymentAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $loanRepaymentAmount = null;
    
    /**
     * @var string|null $loanRepaymentBookingEntry The enumeration value indicates whether the <code>loanRepaymentAmount</code> is a <code>DEBIT</code> against, or a <code>CREDIT</code> to, the sellers's account.<br><br>For most <code>loanRepaymentAmount</code> transactions, <code>loanRepaymentBookingEntry</code> will be <b>DEBIT</b>. However, if a loan repayment transaction is reversed, that transaction will be shown as a <b>CREDIT</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $loanRepaymentBookingEntry = null;
    
    /**
     * @var int|null $loanRepaymentCount This integer value indicates the total number of <code>LOAN_REPAYMENT</code> transactions (i.e., <code>DEBIT</code> and <code>CREDIT</code>,) that match the input criteria.<br><br>This field is generally returned even if it equals <b>0</b>. However it will not be returned if a <code>transactionType</code> filter is used and its value has been set to any enumeration value other than <code>LOAN_REPAYMENT</code>.
    */
    private ?int $loanRepaymentCount = null;
    
    /**
     * @var Amount|null $nonSaleChargeAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $nonSaleChargeAmount = null;
    
    /**
     * @var string|null $nonSaleChargeBookingEntry The credit/debit sign indicator for the non-sale charge. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $nonSaleChargeBookingEntry = null;
    
    /**
     * @var int|null $nonSaleChargeCount The total non-sale charge count for given payee within a specified period.
    */
    private ?int $nonSaleChargeCount = null;
    
    /**
     * @var Amount|null $onHoldAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $onHoldAmount = null;
    
    /**
     * @var string|null $onHoldBookingEntry The enumeration value indicates whether the dollar amount in the <strong>onHoldAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>CREDIT</code>, since on-hold funds should eventually be released as part of a payout to the seller once the hold is cleared. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $onHoldBookingEntry = null;
    
    /**
     * @var int|null $onHoldCount This integer value indicates the total number of order sales where the associated funds are on hold. Only the orders that match the input criteria are considered.<br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionStatus</strong> filter is used, and its value is set to any value other than <code>FUNDS_ON_HOLD</code>.
    */
    private ?int $onHoldCount = null;
    
    /**
     * @var Amount|null $purchaseAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $purchaseAmount = null;
    
    /**
     * @var string|null $purchaseBookingEntry <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This enumeration value indicates whether the dollar amount in the <b>purchase</b> field is a charge (debit) to the seller or a credit. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $purchaseBookingEntry = null;
    
    /**
     * @var int|null $purchaseCount <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This integer value indicates the total number of purchases that have been initiated by a seller using spendable funds that match the input criteria.<br><br>This field is generally returned, even if it equals <code>0</code>. However, it will not be returned if a <code>transactionType</code> filter is used and its value has been set to any enumeration value other than <code>PURCHASE</code>.
    */
    private ?int $purchaseCount = null;
    
    /**
     * @var Amount|null $refundAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $refundAmount = null;
    
    /**
     * @var string|null $refundBookingEntry The enumeration value indicates whether the dollar amount in the <strong>refundAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this a refund from the seller to the buyer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $refundBookingEntry = null;
    
    /**
     * @var int|null $refundCount This integer value indicates the total number of buyer refunds that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>REFUND</code>.
    */
    private ?int $refundCount = null;
    
    /**
     * @var Amount|null $shippingLabelAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $shippingLabelAmount = null;
    
    /**
     * @var string|null $shippingLabelBookingEntry The enumeration value indicates whether the dollar amount in the <strong>shippingLabelAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code>, as eBay will charge the seller when eBay shipping labels are purchased, but it can be <code>CREDIT</code> if the seller was refunded for a shipping label or was possibly overcharged for a shipping label. <br><br><span class="tablenote"><b>Note:</b> eBay SHIPPING_LABEL transactions paid through PayPal are not currently supported by the Finances API, so those transactions will not be reflected in this field.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $shippingLabelBookingEntry = null;
    
    /**
     * @var int|null $shippingLabelCount This is the total number of eBay shipping labels purchased by the seller. The count returned here may depend on the specified input criteria.<br><br><span class="tablenote"><b>Note:</b> eBay SHIPPING_LABEL transactions paid through PayPal are not currently supported by the Finances API, so those transactions will not be reflected in the count returned in this container.</span>
    */
    private ?int $shippingLabelCount = null;
    
    /**
     * @var Amount|null $transferAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $transferAmount = null;
    
    /**
     * @var string|null $transferBookingEntry The enumeration value indicates whether the dollar amount in the <strong>transferAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this a seller reimbursement to eBay for buyer refunds. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $transferBookingEntry = null;
    
    /**
     * @var int|null $transferCount This integer value indicates the total number of buyer refund transfers that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>TRANSFER</code>.
    */
    private ?int $transferCount = null;
    
    /**
     * @var Amount|null $withdrawalAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $withdrawalAmount = null;
    
    /**
     * @var string|null $withdrawalBookingEntry The enumeration value indicates whether the dollar amount in the <strong>withdrawalAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this transaction involves a debit to the seller's available payout funds. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $withdrawalBookingEntry = null;
    
    /**
     * @var int|null $withdrawalCount This integer value indicates the total number of on-demand payouts (withdrawals) that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>WITHDRAWAL</code>.
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
     * Gets the adjustmentAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getAdjustmentAmount(): ?Amount {
        return $this->adjustmentAmount;
    }

    /**
     * Gets the adjustmentBookingEntry property value. The credit debit sign indicator for adjustment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAdjustmentBookingEntry(): ?string {
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
     * Gets the balanceTransferAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getBalanceTransferAmount(): ?Amount {
        return $this->balanceTransferAmount;
    }

    /**
     * Gets the balanceTransferBookingEntry property value. The credit debit sign indicator for the balance transfer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getBalanceTransferBookingEntry(): ?string {
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
     * Gets the creditAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getCreditAmount(): ?Amount {
        return $this->creditAmount;
    }

    /**
     * Gets the creditBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>creditAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>CREDIT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCreditBookingEntry(): ?string {
        return $this->creditBookingEntry;
    }

    /**
     * Gets the creditCount property value. This integer value indicates the total number of the seller's sales and/or credits that match the input criteria. <br><br><span class="tablenote"><strong>Note:</strong> Unless the <b>transactionType</b> filter is used in the request to retrieve a specific type of monetary transaction (sale, buyer refund, or seller credit), the <b>creditCount</b> and <b>creditAmount</b> fields account for both order sales and seller credits (the count and value is not distinguished between the two monetary transaction types).</span><br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to either <code>REFUND</code>, <code>DISPUTE</code>, or <code>SHIPPING_LABEL</code>.
     * @return int|null
    */
    public function getCreditCount(): ?int {
        return $this->creditCount;
    }

    /**
     * Gets the disputeAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getDisputeAmount(): ?Amount {
        return $this->disputeAmount;
    }

    /**
     * Gets the disputeBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>disputeAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code>, but its possible that <code>CREDIT</code> could be returned if the seller contested one or more payment disputes and won the dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDisputeBookingEntry(): ?string {
        return $this->disputeBookingEntry;
    }

    /**
     * Gets the disputeCount property value. This integer value indicates the total number of payment disputes that have been initiated by one or more buyers. Only the orders that match the input criteria are considered. The Payment Disputes methods in the Fulfillment API can be used by the seller to retrieve more information about any payment disputes. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>DISPUTE</code>.
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
            'adjustmentBookingEntry' => fn(ParseNode $n) => $o->setAdjustmentBookingEntry($n->getStringValue()),
            'adjustmentCount' => fn(ParseNode $n) => $o->setAdjustmentCount($n->getIntegerValue()),
            'balanceTransferAmount' => fn(ParseNode $n) => $o->setBalanceTransferAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'balanceTransferBookingEntry' => fn(ParseNode $n) => $o->setBalanceTransferBookingEntry($n->getStringValue()),
            'balanceTransferCount' => fn(ParseNode $n) => $o->setBalanceTransferCount($n->getIntegerValue()),
            'creditAmount' => fn(ParseNode $n) => $o->setCreditAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'creditBookingEntry' => fn(ParseNode $n) => $o->setCreditBookingEntry($n->getStringValue()),
            'creditCount' => fn(ParseNode $n) => $o->setCreditCount($n->getIntegerValue()),
            'disputeAmount' => fn(ParseNode $n) => $o->setDisputeAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'disputeBookingEntry' => fn(ParseNode $n) => $o->setDisputeBookingEntry($n->getStringValue()),
            'disputeCount' => fn(ParseNode $n) => $o->setDisputeCount($n->getIntegerValue()),
            'loanRepaymentAmount' => fn(ParseNode $n) => $o->setLoanRepaymentAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'loanRepaymentBookingEntry' => fn(ParseNode $n) => $o->setLoanRepaymentBookingEntry($n->getStringValue()),
            'loanRepaymentCount' => fn(ParseNode $n) => $o->setLoanRepaymentCount($n->getIntegerValue()),
            'nonSaleChargeAmount' => fn(ParseNode $n) => $o->setNonSaleChargeAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'nonSaleChargeBookingEntry' => fn(ParseNode $n) => $o->setNonSaleChargeBookingEntry($n->getStringValue()),
            'nonSaleChargeCount' => fn(ParseNode $n) => $o->setNonSaleChargeCount($n->getIntegerValue()),
            'onHoldAmount' => fn(ParseNode $n) => $o->setOnHoldAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'onHoldBookingEntry' => fn(ParseNode $n) => $o->setOnHoldBookingEntry($n->getStringValue()),
            'onHoldCount' => fn(ParseNode $n) => $o->setOnHoldCount($n->getIntegerValue()),
            'purchaseAmount' => fn(ParseNode $n) => $o->setPurchaseAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'purchaseBookingEntry' => fn(ParseNode $n) => $o->setPurchaseBookingEntry($n->getStringValue()),
            'purchaseCount' => fn(ParseNode $n) => $o->setPurchaseCount($n->getIntegerValue()),
            'refundAmount' => fn(ParseNode $n) => $o->setRefundAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refundBookingEntry' => fn(ParseNode $n) => $o->setRefundBookingEntry($n->getStringValue()),
            'refundCount' => fn(ParseNode $n) => $o->setRefundCount($n->getIntegerValue()),
            'shippingLabelAmount' => fn(ParseNode $n) => $o->setShippingLabelAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingLabelBookingEntry' => fn(ParseNode $n) => $o->setShippingLabelBookingEntry($n->getStringValue()),
            'shippingLabelCount' => fn(ParseNode $n) => $o->setShippingLabelCount($n->getIntegerValue()),
            'transferAmount' => fn(ParseNode $n) => $o->setTransferAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'transferBookingEntry' => fn(ParseNode $n) => $o->setTransferBookingEntry($n->getStringValue()),
            'transferCount' => fn(ParseNode $n) => $o->setTransferCount($n->getIntegerValue()),
            'withdrawalAmount' => fn(ParseNode $n) => $o->setWithdrawalAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'withdrawalBookingEntry' => fn(ParseNode $n) => $o->setWithdrawalBookingEntry($n->getStringValue()),
            'withdrawalCount' => fn(ParseNode $n) => $o->setWithdrawalCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the loanRepaymentAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getLoanRepaymentAmount(): ?Amount {
        return $this->loanRepaymentAmount;
    }

    /**
     * Gets the loanRepaymentBookingEntry property value. The enumeration value indicates whether the <code>loanRepaymentAmount</code> is a <code>DEBIT</code> against, or a <code>CREDIT</code> to, the sellers's account.<br><br>For most <code>loanRepaymentAmount</code> transactions, <code>loanRepaymentBookingEntry</code> will be <b>DEBIT</b>. However, if a loan repayment transaction is reversed, that transaction will be shown as a <b>CREDIT</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getLoanRepaymentBookingEntry(): ?string {
        return $this->loanRepaymentBookingEntry;
    }

    /**
     * Gets the loanRepaymentCount property value. This integer value indicates the total number of <code>LOAN_REPAYMENT</code> transactions (i.e., <code>DEBIT</code> and <code>CREDIT</code>,) that match the input criteria.<br><br>This field is generally returned even if it equals <b>0</b>. However it will not be returned if a <code>transactionType</code> filter is used and its value has been set to any enumeration value other than <code>LOAN_REPAYMENT</code>.
     * @return int|null
    */
    public function getLoanRepaymentCount(): ?int {
        return $this->loanRepaymentCount;
    }

    /**
     * Gets the nonSaleChargeAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getNonSaleChargeAmount(): ?Amount {
        return $this->nonSaleChargeAmount;
    }

    /**
     * Gets the nonSaleChargeBookingEntry property value. The credit/debit sign indicator for the non-sale charge. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getNonSaleChargeBookingEntry(): ?string {
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
     * Gets the onHoldAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getOnHoldAmount(): ?Amount {
        return $this->onHoldAmount;
    }

    /**
     * Gets the onHoldBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>onHoldAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>CREDIT</code>, since on-hold funds should eventually be released as part of a payout to the seller once the hold is cleared. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getOnHoldBookingEntry(): ?string {
        return $this->onHoldBookingEntry;
    }

    /**
     * Gets the onHoldCount property value. This integer value indicates the total number of order sales where the associated funds are on hold. Only the orders that match the input criteria are considered.<br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionStatus</strong> filter is used, and its value is set to any value other than <code>FUNDS_ON_HOLD</code>.
     * @return int|null
    */
    public function getOnHoldCount(): ?int {
        return $this->onHoldCount;
    }

    /**
     * Gets the purchaseAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getPurchaseAmount(): ?Amount {
        return $this->purchaseAmount;
    }

    /**
     * Gets the purchaseBookingEntry property value. <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This enumeration value indicates whether the dollar amount in the <b>purchase</b> field is a charge (debit) to the seller or a credit. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPurchaseBookingEntry(): ?string {
        return $this->purchaseBookingEntry;
    }

    /**
     * Gets the purchaseCount property value. <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This integer value indicates the total number of purchases that have been initiated by a seller using spendable funds that match the input criteria.<br><br>This field is generally returned, even if it equals <code>0</code>. However, it will not be returned if a <code>transactionType</code> filter is used and its value has been set to any enumeration value other than <code>PURCHASE</code>.
     * @return int|null
    */
    public function getPurchaseCount(): ?int {
        return $this->purchaseCount;
    }

    /**
     * Gets the refundAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getRefundAmount(): ?Amount {
        return $this->refundAmount;
    }

    /**
     * Gets the refundBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>refundAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this a refund from the seller to the buyer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRefundBookingEntry(): ?string {
        return $this->refundBookingEntry;
    }

    /**
     * Gets the refundCount property value. This integer value indicates the total number of buyer refunds that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>REFUND</code>.
     * @return int|null
    */
    public function getRefundCount(): ?int {
        return $this->refundCount;
    }

    /**
     * Gets the shippingLabelAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getShippingLabelAmount(): ?Amount {
        return $this->shippingLabelAmount;
    }

    /**
     * Gets the shippingLabelBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>shippingLabelAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code>, as eBay will charge the seller when eBay shipping labels are purchased, but it can be <code>CREDIT</code> if the seller was refunded for a shipping label or was possibly overcharged for a shipping label. <br><br><span class="tablenote"><b>Note:</b> eBay SHIPPING_LABEL transactions paid through PayPal are not currently supported by the Finances API, so those transactions will not be reflected in this field.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getShippingLabelBookingEntry(): ?string {
        return $this->shippingLabelBookingEntry;
    }

    /**
     * Gets the shippingLabelCount property value. This is the total number of eBay shipping labels purchased by the seller. The count returned here may depend on the specified input criteria.<br><br><span class="tablenote"><b>Note:</b> eBay SHIPPING_LABEL transactions paid through PayPal are not currently supported by the Finances API, so those transactions will not be reflected in the count returned in this container.</span>
     * @return int|null
    */
    public function getShippingLabelCount(): ?int {
        return $this->shippingLabelCount;
    }

    /**
     * Gets the transferAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getTransferAmount(): ?Amount {
        return $this->transferAmount;
    }

    /**
     * Gets the transferBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>transferAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this a seller reimbursement to eBay for buyer refunds. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getTransferBookingEntry(): ?string {
        return $this->transferBookingEntry;
    }

    /**
     * Gets the transferCount property value. This integer value indicates the total number of buyer refund transfers that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>TRANSFER</code>.
     * @return int|null
    */
    public function getTransferCount(): ?int {
        return $this->transferCount;
    }

    /**
     * Gets the withdrawalAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getWithdrawalAmount(): ?Amount {
        return $this->withdrawalAmount;
    }

    /**
     * Gets the withdrawalBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>withdrawalAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this transaction involves a debit to the seller's available payout funds. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getWithdrawalBookingEntry(): ?string {
        return $this->withdrawalBookingEntry;
    }

    /**
     * Gets the withdrawalCount property value. This integer value indicates the total number of on-demand payouts (withdrawals) that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>WITHDRAWAL</code>.
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
        $writer->writeStringValue('adjustmentBookingEntry', $this->getAdjustmentBookingEntry());
        $writer->writeIntegerValue('adjustmentCount', $this->getAdjustmentCount());
        $writer->writeObjectValue('balanceTransferAmount', $this->getBalanceTransferAmount());
        $writer->writeStringValue('balanceTransferBookingEntry', $this->getBalanceTransferBookingEntry());
        $writer->writeIntegerValue('balanceTransferCount', $this->getBalanceTransferCount());
        $writer->writeObjectValue('creditAmount', $this->getCreditAmount());
        $writer->writeStringValue('creditBookingEntry', $this->getCreditBookingEntry());
        $writer->writeIntegerValue('creditCount', $this->getCreditCount());
        $writer->writeObjectValue('disputeAmount', $this->getDisputeAmount());
        $writer->writeStringValue('disputeBookingEntry', $this->getDisputeBookingEntry());
        $writer->writeIntegerValue('disputeCount', $this->getDisputeCount());
        $writer->writeObjectValue('loanRepaymentAmount', $this->getLoanRepaymentAmount());
        $writer->writeStringValue('loanRepaymentBookingEntry', $this->getLoanRepaymentBookingEntry());
        $writer->writeIntegerValue('loanRepaymentCount', $this->getLoanRepaymentCount());
        $writer->writeObjectValue('nonSaleChargeAmount', $this->getNonSaleChargeAmount());
        $writer->writeStringValue('nonSaleChargeBookingEntry', $this->getNonSaleChargeBookingEntry());
        $writer->writeIntegerValue('nonSaleChargeCount', $this->getNonSaleChargeCount());
        $writer->writeObjectValue('onHoldAmount', $this->getOnHoldAmount());
        $writer->writeStringValue('onHoldBookingEntry', $this->getOnHoldBookingEntry());
        $writer->writeIntegerValue('onHoldCount', $this->getOnHoldCount());
        $writer->writeObjectValue('purchaseAmount', $this->getPurchaseAmount());
        $writer->writeStringValue('purchaseBookingEntry', $this->getPurchaseBookingEntry());
        $writer->writeIntegerValue('purchaseCount', $this->getPurchaseCount());
        $writer->writeObjectValue('refundAmount', $this->getRefundAmount());
        $writer->writeStringValue('refundBookingEntry', $this->getRefundBookingEntry());
        $writer->writeIntegerValue('refundCount', $this->getRefundCount());
        $writer->writeObjectValue('shippingLabelAmount', $this->getShippingLabelAmount());
        $writer->writeStringValue('shippingLabelBookingEntry', $this->getShippingLabelBookingEntry());
        $writer->writeIntegerValue('shippingLabelCount', $this->getShippingLabelCount());
        $writer->writeObjectValue('transferAmount', $this->getTransferAmount());
        $writer->writeStringValue('transferBookingEntry', $this->getTransferBookingEntry());
        $writer->writeIntegerValue('transferCount', $this->getTransferCount());
        $writer->writeObjectValue('withdrawalAmount', $this->getWithdrawalAmount());
        $writer->writeStringValue('withdrawalBookingEntry', $this->getWithdrawalBookingEntry());
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
     * Sets the adjustmentAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the adjustmentAmount property.
    */
    public function setAdjustmentAmount(?Amount $value): void {
        $this->adjustmentAmount = $value;
    }

    /**
     * Sets the adjustmentBookingEntry property value. The credit debit sign indicator for adjustment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the adjustmentBookingEntry property.
    */
    public function setAdjustmentBookingEntry(?string $value): void {
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
     * Sets the balanceTransferAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the balanceTransferAmount property.
    */
    public function setBalanceTransferAmount(?Amount $value): void {
        $this->balanceTransferAmount = $value;
    }

    /**
     * Sets the balanceTransferBookingEntry property value. The credit debit sign indicator for the balance transfer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the balanceTransferBookingEntry property.
    */
    public function setBalanceTransferBookingEntry(?string $value): void {
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
     * Sets the creditAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the creditAmount property.
    */
    public function setCreditAmount(?Amount $value): void {
        $this->creditAmount = $value;
    }

    /**
     * Sets the creditBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>creditAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>CREDIT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the creditBookingEntry property.
    */
    public function setCreditBookingEntry(?string $value): void {
        $this->creditBookingEntry = $value;
    }

    /**
     * Sets the creditCount property value. This integer value indicates the total number of the seller's sales and/or credits that match the input criteria. <br><br><span class="tablenote"><strong>Note:</strong> Unless the <b>transactionType</b> filter is used in the request to retrieve a specific type of monetary transaction (sale, buyer refund, or seller credit), the <b>creditCount</b> and <b>creditAmount</b> fields account for both order sales and seller credits (the count and value is not distinguished between the two monetary transaction types).</span><br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to either <code>REFUND</code>, <code>DISPUTE</code>, or <code>SHIPPING_LABEL</code>.
     * @param int|null $value Value to set for the creditCount property.
    */
    public function setCreditCount(?int $value): void {
        $this->creditCount = $value;
    }

    /**
     * Sets the disputeAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the disputeAmount property.
    */
    public function setDisputeAmount(?Amount $value): void {
        $this->disputeAmount = $value;
    }

    /**
     * Sets the disputeBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>disputeAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code>, but its possible that <code>CREDIT</code> could be returned if the seller contested one or more payment disputes and won the dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the disputeBookingEntry property.
    */
    public function setDisputeBookingEntry(?string $value): void {
        $this->disputeBookingEntry = $value;
    }

    /**
     * Sets the disputeCount property value. This integer value indicates the total number of payment disputes that have been initiated by one or more buyers. Only the orders that match the input criteria are considered. The Payment Disputes methods in the Fulfillment API can be used by the seller to retrieve more information about any payment disputes. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>DISPUTE</code>.
     * @param int|null $value Value to set for the disputeCount property.
    */
    public function setDisputeCount(?int $value): void {
        $this->disputeCount = $value;
    }

    /**
     * Sets the loanRepaymentAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the loanRepaymentAmount property.
    */
    public function setLoanRepaymentAmount(?Amount $value): void {
        $this->loanRepaymentAmount = $value;
    }

    /**
     * Sets the loanRepaymentBookingEntry property value. The enumeration value indicates whether the <code>loanRepaymentAmount</code> is a <code>DEBIT</code> against, or a <code>CREDIT</code> to, the sellers's account.<br><br>For most <code>loanRepaymentAmount</code> transactions, <code>loanRepaymentBookingEntry</code> will be <b>DEBIT</b>. However, if a loan repayment transaction is reversed, that transaction will be shown as a <b>CREDIT</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the loanRepaymentBookingEntry property.
    */
    public function setLoanRepaymentBookingEntry(?string $value): void {
        $this->loanRepaymentBookingEntry = $value;
    }

    /**
     * Sets the loanRepaymentCount property value. This integer value indicates the total number of <code>LOAN_REPAYMENT</code> transactions (i.e., <code>DEBIT</code> and <code>CREDIT</code>,) that match the input criteria.<br><br>This field is generally returned even if it equals <b>0</b>. However it will not be returned if a <code>transactionType</code> filter is used and its value has been set to any enumeration value other than <code>LOAN_REPAYMENT</code>.
     * @param int|null $value Value to set for the loanRepaymentCount property.
    */
    public function setLoanRepaymentCount(?int $value): void {
        $this->loanRepaymentCount = $value;
    }

    /**
     * Sets the nonSaleChargeAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the nonSaleChargeAmount property.
    */
    public function setNonSaleChargeAmount(?Amount $value): void {
        $this->nonSaleChargeAmount = $value;
    }

    /**
     * Sets the nonSaleChargeBookingEntry property value. The credit/debit sign indicator for the non-sale charge. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the nonSaleChargeBookingEntry property.
    */
    public function setNonSaleChargeBookingEntry(?string $value): void {
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
     * Sets the onHoldAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the onHoldAmount property.
    */
    public function setOnHoldAmount(?Amount $value): void {
        $this->onHoldAmount = $value;
    }

    /**
     * Sets the onHoldBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>onHoldAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>CREDIT</code>, since on-hold funds should eventually be released as part of a payout to the seller once the hold is cleared. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the onHoldBookingEntry property.
    */
    public function setOnHoldBookingEntry(?string $value): void {
        $this->onHoldBookingEntry = $value;
    }

    /**
     * Sets the onHoldCount property value. This integer value indicates the total number of order sales where the associated funds are on hold. Only the orders that match the input criteria are considered.<br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionStatus</strong> filter is used, and its value is set to any value other than <code>FUNDS_ON_HOLD</code>.
     * @param int|null $value Value to set for the onHoldCount property.
    */
    public function setOnHoldCount(?int $value): void {
        $this->onHoldCount = $value;
    }

    /**
     * Sets the purchaseAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the purchaseAmount property.
    */
    public function setPurchaseAmount(?Amount $value): void {
        $this->purchaseAmount = $value;
    }

    /**
     * Sets the purchaseBookingEntry property value. <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This enumeration value indicates whether the dollar amount in the <b>purchase</b> field is a charge (debit) to the seller or a credit. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the purchaseBookingEntry property.
    */
    public function setPurchaseBookingEntry(?string $value): void {
        $this->purchaseBookingEntry = $value;
    }

    /**
     * Sets the purchaseCount property value. <span class="tablenote"><b>Note:</b> The <code>PURCHASE</code> transaction type is currently only applicable in the US marketplace.</span><br>This integer value indicates the total number of purchases that have been initiated by a seller using spendable funds that match the input criteria.<br><br>This field is generally returned, even if it equals <code>0</code>. However, it will not be returned if a <code>transactionType</code> filter is used and its value has been set to any enumeration value other than <code>PURCHASE</code>.
     * @param int|null $value Value to set for the purchaseCount property.
    */
    public function setPurchaseCount(?int $value): void {
        $this->purchaseCount = $value;
    }

    /**
     * Sets the refundAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the refundAmount property.
    */
    public function setRefundAmount(?Amount $value): void {
        $this->refundAmount = $value;
    }

    /**
     * Sets the refundBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>refundAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this a refund from the seller to the buyer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the refundBookingEntry property.
    */
    public function setRefundBookingEntry(?string $value): void {
        $this->refundBookingEntry = $value;
    }

    /**
     * Sets the refundCount property value. This integer value indicates the total number of buyer refunds that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>REFUND</code>.
     * @param int|null $value Value to set for the refundCount property.
    */
    public function setRefundCount(?int $value): void {
        $this->refundCount = $value;
    }

    /**
     * Sets the shippingLabelAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the shippingLabelAmount property.
    */
    public function setShippingLabelAmount(?Amount $value): void {
        $this->shippingLabelAmount = $value;
    }

    /**
     * Sets the shippingLabelBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>shippingLabelAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code>, as eBay will charge the seller when eBay shipping labels are purchased, but it can be <code>CREDIT</code> if the seller was refunded for a shipping label or was possibly overcharged for a shipping label. <br><br><span class="tablenote"><b>Note:</b> eBay SHIPPING_LABEL transactions paid through PayPal are not currently supported by the Finances API, so those transactions will not be reflected in this field.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the shippingLabelBookingEntry property.
    */
    public function setShippingLabelBookingEntry(?string $value): void {
        $this->shippingLabelBookingEntry = $value;
    }

    /**
     * Sets the shippingLabelCount property value. This is the total number of eBay shipping labels purchased by the seller. The count returned here may depend on the specified input criteria.<br><br><span class="tablenote"><b>Note:</b> eBay SHIPPING_LABEL transactions paid through PayPal are not currently supported by the Finances API, so those transactions will not be reflected in the count returned in this container.</span>
     * @param int|null $value Value to set for the shippingLabelCount property.
    */
    public function setShippingLabelCount(?int $value): void {
        $this->shippingLabelCount = $value;
    }

    /**
     * Sets the transferAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the transferAmount property.
    */
    public function setTransferAmount(?Amount $value): void {
        $this->transferAmount = $value;
    }

    /**
     * Sets the transferBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>transferAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this a seller reimbursement to eBay for buyer refunds. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the transferBookingEntry property.
    */
    public function setTransferBookingEntry(?string $value): void {
        $this->transferBookingEntry = $value;
    }

    /**
     * Sets the transferCount property value. This integer value indicates the total number of buyer refund transfers that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>TRANSFER</code>.
     * @param int|null $value Value to set for the transferCount property.
    */
    public function setTransferCount(?int $value): void {
        $this->transferCount = $value;
    }

    /**
     * Sets the withdrawalAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the withdrawalAmount property.
    */
    public function setWithdrawalAmount(?Amount $value): void {
        $this->withdrawalAmount = $value;
    }

    /**
     * Sets the withdrawalBookingEntry property value. The enumeration value indicates whether the dollar amount in the <strong>withdrawalAmount</strong> field is a charge (debit) to the seller or a credit. Typically, the enumeration value returned here will be <code>DEBIT</code> since this transaction involves a debit to the seller's available payout funds. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the withdrawalBookingEntry property.
    */
    public function setWithdrawalBookingEntry(?string $value): void {
        $this->withdrawalBookingEntry = $value;
    }

    /**
     * Sets the withdrawalCount property value. This integer value indicates the total number of on-demand payouts (withdrawals) that match the input criteria. <br><br>This field is generally returned, even if <code>0</code>, but it will not be returned if a <strong>transactionType</strong> filter is used, and its value is set to any value other than <code>WITHDRAWAL</code>.
     * @param int|null $value Value to set for the withdrawalCount property.
    */
    public function setWithdrawalCount(?int $value): void {
        $this->withdrawalCount = $value;
    }

}
