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
 * This type defines the source of funds used to finance a transfer, such as available seller funds, a credit card, or a bank account.
*/
class FundingSource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $brand The brand name of the credit card or the name of the financial institution that is the source of payment. This field may not be populated for other funding sources.
    */
    private ?string $brand = null;
    
    /**
     * @var string|null $memo This field provides a note about the funding source. If the seller's credit card or bank account is the funding source, this field might contain the last four digits of the credit card or bank account. This field may also be returned as null.
    */
    private ?string $memo = null;
    
    /**
     * @var string|null $type The string value returned here indicates the funding source. Possible values include the following:<ul><li><code>AVAILABLE_FUNDS</code>: transfer is funded with seller payout funds</li><li><code>CREDIT_CARD</code>: transfer is funded with seller's credit card</li><li><code>BANK</code>: transfer is funded with a direct debit to seller's bank account on file with eBay</li><li><code>PAY_UPON_INVOICE</code>: eBay will bill the seller for the transfer on the monthly invoice</li></ul>
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new FundingSource and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FundingSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FundingSource {
        return new FundingSource();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the brand property value. The brand name of the credit card or the name of the financial institution that is the source of payment. This field may not be populated for other funding sources.
     * @return string|null
    */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getStringValue()),
            'memo' => fn(ParseNode $n) => $o->setMemo($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the memo property value. This field provides a note about the funding source. If the seller's credit card or bank account is the funding source, this field might contain the last four digits of the credit card or bank account. This field may also be returned as null.
     * @return string|null
    */
    public function getMemo(): ?string {
        return $this->memo;
    }

    /**
     * Gets the type property value. The string value returned here indicates the funding source. Possible values include the following:<ul><li><code>AVAILABLE_FUNDS</code>: transfer is funded with seller payout funds</li><li><code>CREDIT_CARD</code>: transfer is funded with seller's credit card</li><li><code>BANK</code>: transfer is funded with a direct debit to seller's bank account on file with eBay</li><li><code>PAY_UPON_INVOICE</code>: eBay will bill the seller for the transfer on the monthly invoice</li></ul>
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('brand', $this->getBrand());
        $writer->writeStringValue('memo', $this->getMemo());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the brand property value. The brand name of the credit card or the name of the financial institution that is the source of payment. This field may not be populated for other funding sources.
     * @param string|null $value Value to set for the brand property.
    */
    public function setBrand(?string $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the memo property value. This field provides a note about the funding source. If the seller's credit card or bank account is the funding source, this field might contain the last four digits of the credit card or bank account. This field may also be returned as null.
     * @param string|null $value Value to set for the memo property.
    */
    public function setMemo(?string $value): void {
        $this->memo = $value;
    }

    /**
     * Sets the type property value. The string value returned here indicates the funding source. Possible values include the following:<ul><li><code>AVAILABLE_FUNDS</code>: transfer is funded with seller payout funds</li><li><code>CREDIT_CARD</code>: transfer is funded with seller's credit card</li><li><code>BANK</code>: transfer is funded with a direct debit to seller's bank account on file with eBay</li><li><code>PAY_UPON_INVOICE</code>: eBay will bill the seller for the transfer on the monthly invoice</li></ul>
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
