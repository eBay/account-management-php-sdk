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
 * This type is used to express the details of one seller payout that is returned with the <strong>getPayout</strong> or <strong>getPayouts</strong> methods.
*/
class Payout implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This is the total amount of the seller payout. The container shows the dollar amount of the payout and the currency used. The value of the payout is always shown, even if the payout has failed.
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $bankReference This field contains additional information provided by the bank and passed on by the payment processor; e.g., the manner in which the transaction will appear on the seller's bank statement. The field is returned only when provided by the bank and processor.
    */
    private ?string $bankReference = null;
    
    /**
     * @var string|null $lastAttemptedPayoutDate This timestamp indicates the date/time when eBay last attempted to process a seller payout but it failed. This field is only returned if a seller payout fails, and the <strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>. A seller can filter on the <b>lastAttemptedPayoutDate</b> in a <b>getPayouts</b> request.
    */
    private ?string $lastAttemptedPayoutDate = null;
    
    /**
     * @var string|null $payoutDate This timestamp indicates when the seller payout began processing. The following format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>. This field is still returned even if the payout was pending but failed (<strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>).
    */
    private ?string $payoutDate = null;
    
    /**
     * @var string|null $payoutId The unique identifier of the seller payout. This identifier is generated once eBay begins processing the payout to the seller's bank account.
    */
    private ?string $payoutId = null;
    
    /**
     * @var PayoutInstrument|null $payoutInstrument This container provides details about the seller's account that received (or is scheduled to receive) the payout. This container is still returned even if the payout failed.
    */
    private ?PayoutInstrument $payoutInstrument = null;
    
    /**
     * @var string|null $payoutMemo This field contains information provided by upstream components, based on internal and external commitments. A typical message would contain the expected arrival time of the payout.
    */
    private ?string $payoutMemo = null;
    
    /**
     * @var string|null $payoutReference This field contains the unique identifier for the Payout Reference. In split-payout cases, this is the unique identifier reference (not true payout). This field is only returned and will show the associated true(actual) payout ID(s) when sellers in Mainland China enable split payouts between a Payoneer account and/or a bank account. <br><br><span class="tablenote"><b>Note: </b>Split-payout functionality will <b>only</b> be available to mainland China sellers.</span>
    */
    private ?string $payoutReference = null;
    
    /**
     * @var PayoutStatusEnum|null $payoutStatus This enumeration value indicates the current status of the seller payout. For a successful payout, the value returned will be <code>SUCCEEDED</code>. See the <strong>PayoutStatusEnum</strong> type for more details on each payout status value.
    */
    private ?PayoutStatusEnum $payoutStatus = null;
    
    /**
     * @var string|null $payoutStatusDescription This field provides more details about the current status of payout. The description returned here will correspond with enumeration value returned in the <strong>payoutStatus</strong> field. The following shows what description text might appear based on the different <strong>payoutStatus</strong> values:<ul><li><code>INITIATED</code>: <em>Preparing to send</em></li><li><code>SUCCEEDED</code>: <em>Funds sent</em></li><li><code>REVERSED</code>: <em>Waiting to retry : Money rejected by seller's bank</em></li><li><code>RETRYABLE_FAILED</code>: <em>Waiting to retry</em></li><li><code>TERMINAL_FAILED</code>: <em>Payout failed</em></li></ul>
    */
    private ?string $payoutStatusDescription = null;
    
    /**
     * @var Amount|null $totalAmount This container indicates the sum of a seller's net payout amount plus the <code>EXPRESS_PAYOUT_FEE</code> charged by eBay. The is expressed as a numeric value and the currency used.
    */
    private ?Amount $totalAmount = null;
    
    /**
     * @var Amount|null $totalFee This container indicates the amount of the <code>EXPRESS_PAYOUT_FEE</code> charged by eBay when a seller requests payout to a debit card. The fee is expressed as a numeric value and the currency used.
    */
    private ?Amount $totalFee = null;
    
    /**
     * @var array<Fee>|null $totalFeeDetails This array indicates all payout fees associated with a payout, including the fee type, amount, value, and currency.
    */
    private ?array $totalFeeDetails = null;
    
    /**
     * @var int|null $transactionCount This integer value indicates the number of monetary transactions (all orders, refunds, and credits, etc.) that have occurred with the corresponding payout. Its value should always be at least <code>1</code>, since there is at least one order per seller payout.<br/><br/>For split payouts, each of the two sibling payouts would be considered its own transaction. Because of this, if a seller had a payout for one order, but split the order between two accounts, the value would be <code>2</code> instead of <code>1</code>.<br><br><span class="tablenote"><b>Note: </b>Split-payout functionality is <b>only</b> applicable to mainland China sellers. </span>
    */
    private ?int $transactionCount = null;
    
    /**
     * Instantiates a new Payout and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Payout
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Payout {
        return new Payout();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This is the total amount of the seller payout. The container shows the dollar amount of the payout and the currency used. The value of the payout is always shown, even if the payout has failed.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the bankReference property value. This field contains additional information provided by the bank and passed on by the payment processor; e.g., the manner in which the transaction will appear on the seller's bank statement. The field is returned only when provided by the bank and processor.
     * @return string|null
    */
    public function getBankReference(): ?string {
        return $this->bankReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'bankReference' => fn(ParseNode $n) => $o->setBankReference($n->getStringValue()),
            'lastAttemptedPayoutDate' => fn(ParseNode $n) => $o->setLastAttemptedPayoutDate($n->getStringValue()),
            'payoutDate' => fn(ParseNode $n) => $o->setPayoutDate($n->getStringValue()),
            'payoutId' => fn(ParseNode $n) => $o->setPayoutId($n->getStringValue()),
            'payoutInstrument' => fn(ParseNode $n) => $o->setPayoutInstrument($n->getObjectValue([PayoutInstrument::class, 'createFromDiscriminatorValue'])),
            'payoutMemo' => fn(ParseNode $n) => $o->setPayoutMemo($n->getStringValue()),
            'payoutReference' => fn(ParseNode $n) => $o->setPayoutReference($n->getStringValue()),
            'payoutStatus' => fn(ParseNode $n) => $o->setPayoutStatus($n->getEnumValue(PayoutStatusEnum::class)),
            'payoutStatusDescription' => fn(ParseNode $n) => $o->setPayoutStatusDescription($n->getStringValue()),
            'totalAmount' => fn(ParseNode $n) => $o->setTotalAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'totalFee' => fn(ParseNode $n) => $o->setTotalFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'totalFeeDetails' => fn(ParseNode $n) => $o->setTotalFeeDetails($n->getCollectionOfObjectValues([Fee::class, 'createFromDiscriminatorValue'])),
            'transactionCount' => fn(ParseNode $n) => $o->setTransactionCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lastAttemptedPayoutDate property value. This timestamp indicates the date/time when eBay last attempted to process a seller payout but it failed. This field is only returned if a seller payout fails, and the <strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>. A seller can filter on the <b>lastAttemptedPayoutDate</b> in a <b>getPayouts</b> request.
     * @return string|null
    */
    public function getLastAttemptedPayoutDate(): ?string {
        return $this->lastAttemptedPayoutDate;
    }

    /**
     * Gets the payoutDate property value. This timestamp indicates when the seller payout began processing. The following format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>. This field is still returned even if the payout was pending but failed (<strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>).
     * @return string|null
    */
    public function getPayoutDate(): ?string {
        return $this->payoutDate;
    }

    /**
     * Gets the payoutId property value. The unique identifier of the seller payout. This identifier is generated once eBay begins processing the payout to the seller's bank account.
     * @return string|null
    */
    public function getPayoutId(): ?string {
        return $this->payoutId;
    }

    /**
     * Gets the payoutInstrument property value. This container provides details about the seller's account that received (or is scheduled to receive) the payout. This container is still returned even if the payout failed.
     * @return PayoutInstrument|null
    */
    public function getPayoutInstrument(): ?PayoutInstrument {
        return $this->payoutInstrument;
    }

    /**
     * Gets the payoutMemo property value. This field contains information provided by upstream components, based on internal and external commitments. A typical message would contain the expected arrival time of the payout.
     * @return string|null
    */
    public function getPayoutMemo(): ?string {
        return $this->payoutMemo;
    }

    /**
     * Gets the payoutReference property value. This field contains the unique identifier for the Payout Reference. In split-payout cases, this is the unique identifier reference (not true payout). This field is only returned and will show the associated true(actual) payout ID(s) when sellers in Mainland China enable split payouts between a Payoneer account and/or a bank account. <br><br><span class="tablenote"><b>Note: </b>Split-payout functionality will <b>only</b> be available to mainland China sellers.</span>
     * @return string|null
    */
    public function getPayoutReference(): ?string {
        return $this->payoutReference;
    }

    /**
     * Gets the payoutStatus property value. This enumeration value indicates the current status of the seller payout. For a successful payout, the value returned will be <code>SUCCEEDED</code>. See the <strong>PayoutStatusEnum</strong> type for more details on each payout status value.
     * @return PayoutStatusEnum|null
    */
    public function getPayoutStatus(): ?PayoutStatusEnum {
        return $this->payoutStatus;
    }

    /**
     * Gets the payoutStatusDescription property value. This field provides more details about the current status of payout. The description returned here will correspond with enumeration value returned in the <strong>payoutStatus</strong> field. The following shows what description text might appear based on the different <strong>payoutStatus</strong> values:<ul><li><code>INITIATED</code>: <em>Preparing to send</em></li><li><code>SUCCEEDED</code>: <em>Funds sent</em></li><li><code>REVERSED</code>: <em>Waiting to retry : Money rejected by seller's bank</em></li><li><code>RETRYABLE_FAILED</code>: <em>Waiting to retry</em></li><li><code>TERMINAL_FAILED</code>: <em>Payout failed</em></li></ul>
     * @return string|null
    */
    public function getPayoutStatusDescription(): ?string {
        return $this->payoutStatusDescription;
    }

    /**
     * Gets the totalAmount property value. This container indicates the sum of a seller's net payout amount plus the <code>EXPRESS_PAYOUT_FEE</code> charged by eBay. The is expressed as a numeric value and the currency used.
     * @return Amount|null
    */
    public function getTotalAmount(): ?Amount {
        return $this->totalAmount;
    }

    /**
     * Gets the totalFee property value. This container indicates the amount of the <code>EXPRESS_PAYOUT_FEE</code> charged by eBay when a seller requests payout to a debit card. The fee is expressed as a numeric value and the currency used.
     * @return Amount|null
    */
    public function getTotalFee(): ?Amount {
        return $this->totalFee;
    }

    /**
     * Gets the totalFeeDetails property value. This array indicates all payout fees associated with a payout, including the fee type, amount, value, and currency.
     * @return array<Fee>|null
    */
    public function getTotalFeeDetails(): ?array {
        return $this->totalFeeDetails;
    }

    /**
     * Gets the transactionCount property value. This integer value indicates the number of monetary transactions (all orders, refunds, and credits, etc.) that have occurred with the corresponding payout. Its value should always be at least <code>1</code>, since there is at least one order per seller payout.<br/><br/>For split payouts, each of the two sibling payouts would be considered its own transaction. Because of this, if a seller had a payout for one order, but split the order between two accounts, the value would be <code>2</code> instead of <code>1</code>.<br><br><span class="tablenote"><b>Note: </b>Split-payout functionality is <b>only</b> applicable to mainland China sellers. </span>
     * @return int|null
    */
    public function getTransactionCount(): ?int {
        return $this->transactionCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('bankReference', $this->getBankReference());
        $writer->writeStringValue('lastAttemptedPayoutDate', $this->getLastAttemptedPayoutDate());
        $writer->writeStringValue('payoutDate', $this->getPayoutDate());
        $writer->writeStringValue('payoutId', $this->getPayoutId());
        $writer->writeObjectValue('payoutInstrument', $this->getPayoutInstrument());
        $writer->writeStringValue('payoutMemo', $this->getPayoutMemo());
        $writer->writeStringValue('payoutReference', $this->getPayoutReference());
        $writer->writeEnumValue('payoutStatus', $this->getPayoutStatus());
        $writer->writeStringValue('payoutStatusDescription', $this->getPayoutStatusDescription());
        $writer->writeObjectValue('totalAmount', $this->getTotalAmount());
        $writer->writeObjectValue('totalFee', $this->getTotalFee());
        $writer->writeCollectionOfObjectValues('totalFeeDetails', $this->getTotalFeeDetails());
        $writer->writeIntegerValue('transactionCount', $this->getTransactionCount());
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
     * Sets the amount property value. This is the total amount of the seller payout. The container shows the dollar amount of the payout and the currency used. The value of the payout is always shown, even if the payout has failed.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the bankReference property value. This field contains additional information provided by the bank and passed on by the payment processor; e.g., the manner in which the transaction will appear on the seller's bank statement. The field is returned only when provided by the bank and processor.
     * @param string|null $value Value to set for the bankReference property.
    */
    public function setBankReference(?string $value): void {
        $this->bankReference = $value;
    }

    /**
     * Sets the lastAttemptedPayoutDate property value. This timestamp indicates the date/time when eBay last attempted to process a seller payout but it failed. This field is only returned if a seller payout fails, and the <strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>. A seller can filter on the <b>lastAttemptedPayoutDate</b> in a <b>getPayouts</b> request.
     * @param string|null $value Value to set for the lastAttemptedPayoutDate property.
    */
    public function setLastAttemptedPayoutDate(?string $value): void {
        $this->lastAttemptedPayoutDate = $value;
    }

    /**
     * Sets the payoutDate property value. This timestamp indicates when the seller payout began processing. The following format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>. This field is still returned even if the payout was pending but failed (<strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>).
     * @param string|null $value Value to set for the payoutDate property.
    */
    public function setPayoutDate(?string $value): void {
        $this->payoutDate = $value;
    }

    /**
     * Sets the payoutId property value. The unique identifier of the seller payout. This identifier is generated once eBay begins processing the payout to the seller's bank account.
     * @param string|null $value Value to set for the payoutId property.
    */
    public function setPayoutId(?string $value): void {
        $this->payoutId = $value;
    }

    /**
     * Sets the payoutInstrument property value. This container provides details about the seller's account that received (or is scheduled to receive) the payout. This container is still returned even if the payout failed.
     * @param PayoutInstrument|null $value Value to set for the payoutInstrument property.
    */
    public function setPayoutInstrument(?PayoutInstrument $value): void {
        $this->payoutInstrument = $value;
    }

    /**
     * Sets the payoutMemo property value. This field contains information provided by upstream components, based on internal and external commitments. A typical message would contain the expected arrival time of the payout.
     * @param string|null $value Value to set for the payoutMemo property.
    */
    public function setPayoutMemo(?string $value): void {
        $this->payoutMemo = $value;
    }

    /**
     * Sets the payoutReference property value. This field contains the unique identifier for the Payout Reference. In split-payout cases, this is the unique identifier reference (not true payout). This field is only returned and will show the associated true(actual) payout ID(s) when sellers in Mainland China enable split payouts between a Payoneer account and/or a bank account. <br><br><span class="tablenote"><b>Note: </b>Split-payout functionality will <b>only</b> be available to mainland China sellers.</span>
     * @param string|null $value Value to set for the payoutReference property.
    */
    public function setPayoutReference(?string $value): void {
        $this->payoutReference = $value;
    }

    /**
     * Sets the payoutStatus property value. This enumeration value indicates the current status of the seller payout. For a successful payout, the value returned will be <code>SUCCEEDED</code>. See the <strong>PayoutStatusEnum</strong> type for more details on each payout status value.
     * @param PayoutStatusEnum|null $value Value to set for the payoutStatus property.
    */
    public function setPayoutStatus(?PayoutStatusEnum $value): void {
        $this->payoutStatus = $value;
    }

    /**
     * Sets the payoutStatusDescription property value. This field provides more details about the current status of payout. The description returned here will correspond with enumeration value returned in the <strong>payoutStatus</strong> field. The following shows what description text might appear based on the different <strong>payoutStatus</strong> values:<ul><li><code>INITIATED</code>: <em>Preparing to send</em></li><li><code>SUCCEEDED</code>: <em>Funds sent</em></li><li><code>REVERSED</code>: <em>Waiting to retry : Money rejected by seller's bank</em></li><li><code>RETRYABLE_FAILED</code>: <em>Waiting to retry</em></li><li><code>TERMINAL_FAILED</code>: <em>Payout failed</em></li></ul>
     * @param string|null $value Value to set for the payoutStatusDescription property.
    */
    public function setPayoutStatusDescription(?string $value): void {
        $this->payoutStatusDescription = $value;
    }

    /**
     * Sets the totalAmount property value. This container indicates the sum of a seller's net payout amount plus the <code>EXPRESS_PAYOUT_FEE</code> charged by eBay. The is expressed as a numeric value and the currency used.
     * @param Amount|null $value Value to set for the totalAmount property.
    */
    public function setTotalAmount(?Amount $value): void {
        $this->totalAmount = $value;
    }

    /**
     * Sets the totalFee property value. This container indicates the amount of the <code>EXPRESS_PAYOUT_FEE</code> charged by eBay when a seller requests payout to a debit card. The fee is expressed as a numeric value and the currency used.
     * @param Amount|null $value Value to set for the totalFee property.
    */
    public function setTotalFee(?Amount $value): void {
        $this->totalFee = $value;
    }

    /**
     * Sets the totalFeeDetails property value. This array indicates all payout fees associated with a payout, including the fee type, amount, value, and currency.
     * @param array<Fee>|null $value Value to set for the totalFeeDetails property.
    */
    public function setTotalFeeDetails(?array $value): void {
        $this->totalFeeDetails = $value;
    }

    /**
     * Sets the transactionCount property value. This integer value indicates the number of monetary transactions (all orders, refunds, and credits, etc.) that have occurred with the corresponding payout. Its value should always be at least <code>1</code>, since there is at least one order per seller payout.<br/><br/>For split payouts, each of the two sibling payouts would be considered its own transaction. Because of this, if a seller had a payout for one order, but split the order between two accounts, the value would be <code>2</code> instead of <code>1</code>.<br><br><span class="tablenote"><b>Note: </b>Split-payout functionality is <b>only</b> applicable to mainland China sellers. </span>
     * @param int|null $value Value to set for the transactionCount property.
    */
    public function setTransactionCount(?int $value): void {
        $this->transactionCount = $value;
    }

}
