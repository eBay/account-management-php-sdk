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
 * This type is used to provide details about one or two of the seller's accounts that are enabled to receive payouts.
*/
class PayoutInstrument implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accountLastFourDigits This value is the last four digits of the account that the seller uses to receive the payout. This may be the last four digits of a bank account, a debit card, or a payment processor account such as Payoneer.
    */
    private ?string $accountLastFourDigits = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $instrumentType This value indicates the type of account that received the payout. The value returned in this field may be:<br><ul><li><code>BANK</code>: indicates that the payout was made to a seller's bank account.</li><li><code>CARD</code>: indicates that the payout went to a seller's debit card</li><li>The name of a digital wallet provider or payment processor (e.g., <code>PAYONEER</code>)</li></ul><br><br><span class="tablenote"><b>Note:</b> Only Payoneer is currently supported for sellers in mainland China. Card payouts are not currently available for sellers in mainland China.</span>
    */
    private ?string $instrumentType = null;
    
    /**
     * @var string|null $nickname When <b>instrumentType</b> returns <code>BANK</code>, this value is the seller-provided nickname that the seller uses to represent the bank account that receives the payout.<br><br>When <b>instrumentType</b> returns <code>CARD</code>, this value is the debit card network for the debit card that receives the payout.<br><br>When <b>instrumentType</b> returns a provider of digital wallet or payment processing services, the value returned is the name of the service provider (e.g., <code>PAYONEER</code>).<br><br><span class="tablenote"><b>Note:</b> Card payouts are not currently available for sellers in mainland China.</span>
    */
    private ?string $nickname = null;
    
    /**
     * @var string|null $payoutPercentage This value indicates the current payout percentage allocated to a payout instrument. For example, <code>50</code> indicates that 50% of the payout goes to the instrument.<br><br>This field will be returned even when 100% of the payout funds are going to one payout instrument.<br><br>This field is only returned to sellers in mainland China.
    */
    private ?string $payoutPercentage = null;
    
    /**
     * Instantiates a new PayoutInstrument and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayoutInstrument
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayoutInstrument {
        return new PayoutInstrument();
    }

    /**
     * Gets the accountLastFourDigits property value. This value is the last four digits of the account that the seller uses to receive the payout. This may be the last four digits of a bank account, a debit card, or a payment processor account such as Payoneer.
     * @return string|null
    */
    public function getAccountLastFourDigits(): ?string {
        return $this->accountLastFourDigits;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountLastFourDigits' => fn(ParseNode $n) => $o->setAccountLastFourDigits($n->getStringValue()),
            'instrumentType' => fn(ParseNode $n) => $o->setInstrumentType($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'payoutPercentage' => fn(ParseNode $n) => $o->setPayoutPercentage($n->getStringValue()),
        ];
    }

    /**
     * Gets the instrumentType property value. This value indicates the type of account that received the payout. The value returned in this field may be:<br><ul><li><code>BANK</code>: indicates that the payout was made to a seller's bank account.</li><li><code>CARD</code>: indicates that the payout went to a seller's debit card</li><li>The name of a digital wallet provider or payment processor (e.g., <code>PAYONEER</code>)</li></ul><br><br><span class="tablenote"><b>Note:</b> Only Payoneer is currently supported for sellers in mainland China. Card payouts are not currently available for sellers in mainland China.</span>
     * @return string|null
    */
    public function getInstrumentType(): ?string {
        return $this->instrumentType;
    }

    /**
     * Gets the nickname property value. When <b>instrumentType</b> returns <code>BANK</code>, this value is the seller-provided nickname that the seller uses to represent the bank account that receives the payout.<br><br>When <b>instrumentType</b> returns <code>CARD</code>, this value is the debit card network for the debit card that receives the payout.<br><br>When <b>instrumentType</b> returns a provider of digital wallet or payment processing services, the value returned is the name of the service provider (e.g., <code>PAYONEER</code>).<br><br><span class="tablenote"><b>Note:</b> Card payouts are not currently available for sellers in mainland China.</span>
     * @return string|null
    */
    public function getNickname(): ?string {
        return $this->nickname;
    }

    /**
     * Gets the payoutPercentage property value. This value indicates the current payout percentage allocated to a payout instrument. For example, <code>50</code> indicates that 50% of the payout goes to the instrument.<br><br>This field will be returned even when 100% of the payout funds are going to one payout instrument.<br><br>This field is only returned to sellers in mainland China.
     * @return string|null
    */
    public function getPayoutPercentage(): ?string {
        return $this->payoutPercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountLastFourDigits', $this->getAccountLastFourDigits());
        $writer->writeStringValue('instrumentType', $this->getInstrumentType());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('payoutPercentage', $this->getPayoutPercentage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountLastFourDigits property value. This value is the last four digits of the account that the seller uses to receive the payout. This may be the last four digits of a bank account, a debit card, or a payment processor account such as Payoneer.
     * @param string|null $value Value to set for the accountLastFourDigits property.
    */
    public function setAccountLastFourDigits(?string $value): void {
        $this->accountLastFourDigits = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the instrumentType property value. This value indicates the type of account that received the payout. The value returned in this field may be:<br><ul><li><code>BANK</code>: indicates that the payout was made to a seller's bank account.</li><li><code>CARD</code>: indicates that the payout went to a seller's debit card</li><li>The name of a digital wallet provider or payment processor (e.g., <code>PAYONEER</code>)</li></ul><br><br><span class="tablenote"><b>Note:</b> Only Payoneer is currently supported for sellers in mainland China. Card payouts are not currently available for sellers in mainland China.</span>
     * @param string|null $value Value to set for the instrumentType property.
    */
    public function setInstrumentType(?string $value): void {
        $this->instrumentType = $value;
    }

    /**
     * Sets the nickname property value. When <b>instrumentType</b> returns <code>BANK</code>, this value is the seller-provided nickname that the seller uses to represent the bank account that receives the payout.<br><br>When <b>instrumentType</b> returns <code>CARD</code>, this value is the debit card network for the debit card that receives the payout.<br><br>When <b>instrumentType</b> returns a provider of digital wallet or payment processing services, the value returned is the name of the service provider (e.g., <code>PAYONEER</code>).<br><br><span class="tablenote"><b>Note:</b> Card payouts are not currently available for sellers in mainland China.</span>
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->nickname = $value;
    }

    /**
     * Sets the payoutPercentage property value. This value indicates the current payout percentage allocated to a payout instrument. For example, <code>50</code> indicates that 50% of the payout goes to the instrument.<br><br>This field will be returned even when 100% of the payout funds are going to one payout instrument.<br><br>This field is only returned to sellers in mainland China.
     * @param string|null $value Value to set for the payoutPercentage property.
    */
    public function setPayoutPercentage(?string $value): void {
        $this->payoutPercentage = $value;
    }

}
