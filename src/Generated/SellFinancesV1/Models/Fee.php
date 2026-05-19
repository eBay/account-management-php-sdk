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
 * This type is used for provide information about a fee that is charged against an order.
*/
class Fee implements AdditionalDataHolder, Parsable 
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
     * @var FeeJurisdiction|null $feeJurisdiction This type defines the jurisdiction information associated with a fee, identifying the geographic or regulatory region under which the fee is applied.
    */
    private ?FeeJurisdiction $feeJurisdiction = null;
    
    /**
     * @var string|null $feeMemo A descriptive message that provides additional context about the fee applied to the order.
    */
    private ?string $feeMemo = null;
    
    /**
     * @var string|null $feeType The enumeration value returned here indicates the type of fee that was deducted from the seller payout. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum'>eBay API documentation</a>
    */
    private ?string $feeType = null;
    
    /**
     * Instantiates a new Fee and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Fee
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Fee {
        return new Fee();
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
     * Gets the feeJurisdiction property value. This type defines the jurisdiction information associated with a fee, identifying the geographic or regulatory region under which the fee is applied.
     * @return FeeJurisdiction|null
    */
    public function getFeeJurisdiction(): ?FeeJurisdiction {
        return $this->feeJurisdiction;
    }

    /**
     * Gets the feeMemo property value. A descriptive message that provides additional context about the fee applied to the order.
     * @return string|null
    */
    public function getFeeMemo(): ?string {
        return $this->feeMemo;
    }

    /**
     * Gets the feeType property value. The enumeration value returned here indicates the type of fee that was deducted from the seller payout. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFeeType(): ?string {
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
            'feeJurisdiction' => fn(ParseNode $n) => $o->setFeeJurisdiction($n->getObjectValue([FeeJurisdiction::class, 'createFromDiscriminatorValue'])),
            'feeMemo' => fn(ParseNode $n) => $o->setFeeMemo($n->getStringValue()),
            'feeType' => fn(ParseNode $n) => $o->setFeeType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeObjectValue('feeJurisdiction', $this->getFeeJurisdiction());
        $writer->writeStringValue('feeMemo', $this->getFeeMemo());
        $writer->writeStringValue('feeType', $this->getFeeType());
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
     * Sets the feeJurisdiction property value. This type defines the jurisdiction information associated with a fee, identifying the geographic or regulatory region under which the fee is applied.
     * @param FeeJurisdiction|null $value Value to set for the feeJurisdiction property.
    */
    public function setFeeJurisdiction(?FeeJurisdiction $value): void {
        $this->feeJurisdiction = $value;
    }

    /**
     * Sets the feeMemo property value. A descriptive message that provides additional context about the fee applied to the order.
     * @param string|null $value Value to set for the feeMemo property.
    */
    public function setFeeMemo(?string $value): void {
        $this->feeMemo = $value;
    }

    /**
     * Sets the feeType property value. The enumeration value returned here indicates the type of fee that was deducted from the seller payout. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the feeType property.
    */
    public function setFeeType(?string $value): void {
        $this->feeType = $value;
    }

}
