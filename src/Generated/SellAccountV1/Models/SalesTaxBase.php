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

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base request of the <b>createOrReplaceSalesTax</b>. 
*/
class SalesTaxBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $salesTaxPercentage This field is used to set the sales tax rate for the tax jurisdiction set in the call URI. When applicable to an order, this sales tax rate will be applied to sales price. The <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is set here, such as <code>7.75</code>.
    */
    private ?string $salesTaxPercentage = null;
    
    /**
     * @var bool|null $shippingAndHandlingTaxed This field is set to <code>true</code> if the seller wishes to apply sales tax to shipping and handling charges, and not just the total sales price of the order. Otherwise, this field's value should be set to <code>false</code>.
    */
    private ?bool $shippingAndHandlingTaxed = null;
    
    /**
     * Instantiates a new SalesTaxBase and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesTaxBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesTaxBase {
        return new SalesTaxBase();
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
            'salesTaxPercentage' => fn(ParseNode $n) => $o->setSalesTaxPercentage($n->getStringValue()),
            'shippingAndHandlingTaxed' => fn(ParseNode $n) => $o->setShippingAndHandlingTaxed($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the salesTaxPercentage property value. This field is used to set the sales tax rate for the tax jurisdiction set in the call URI. When applicable to an order, this sales tax rate will be applied to sales price. The <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is set here, such as <code>7.75</code>.
     * @return string|null
    */
    public function getSalesTaxPercentage(): ?string {
        return $this->salesTaxPercentage;
    }

    /**
     * Gets the shippingAndHandlingTaxed property value. This field is set to <code>true</code> if the seller wishes to apply sales tax to shipping and handling charges, and not just the total sales price of the order. Otherwise, this field's value should be set to <code>false</code>.
     * @return bool|null
    */
    public function getShippingAndHandlingTaxed(): ?bool {
        return $this->shippingAndHandlingTaxed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('salesTaxPercentage', $this->getSalesTaxPercentage());
        $writer->writeBooleanValue('shippingAndHandlingTaxed', $this->getShippingAndHandlingTaxed());
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
     * Sets the salesTaxPercentage property value. This field is used to set the sales tax rate for the tax jurisdiction set in the call URI. When applicable to an order, this sales tax rate will be applied to sales price. The <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is set here, such as <code>7.75</code>.
     * @param string|null $value Value to set for the salesTaxPercentage property.
    */
    public function setSalesTaxPercentage(?string $value): void {
        $this->salesTaxPercentage = $value;
    }

    /**
     * Sets the shippingAndHandlingTaxed property value. This field is set to <code>true</code> if the seller wishes to apply sales tax to shipping and handling charges, and not just the total sales price of the order. Otherwise, this field's value should be set to <code>false</code>.
     * @param bool|null $value Value to set for the shippingAndHandlingTaxed property.
    */
    public function setShippingAndHandlingTaxed(?bool $value): void {
        $this->shippingAndHandlingTaxed = $value;
    }

}
