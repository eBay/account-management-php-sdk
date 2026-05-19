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
 * This type is used to provide sales tax settings for a specific tax jurisdiction.
*/
class SalesTax implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $countryCode The country code enumeration value identifies the country to which this sales tax rate applies.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay API documentation</a>
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $salesTaxJurisdictionId A unique ID that identifies the sales tax jurisdiction to which the sales tax rate applies.<br><br><span class="tablenote"><b>Note:</b> When the returned <code>countryCode</code> is <code>US</code>, the only supported return values for <code>salesTaxJurisdictionId</code> are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam</li><li><code>MP</code> Northern Mariana Islands</li><li><code>PW (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></span>
    */
    private ?string $salesTaxJurisdictionId = null;
    
    /**
     * @var string|null $salesTaxPercentage The sales tax rate that will be applied to sales price. The <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is returned here, such as <code>7.75</code>
    */
    private ?string $salesTaxPercentage = null;
    
    /**
     * @var bool|null $shippingAndHandlingTaxed If returned as <code>true</code>, sales tax is also applied to shipping and handling charges, and not just the total sales price of the order.
    */
    private ?bool $shippingAndHandlingTaxed = null;
    
    /**
     * Instantiates a new SalesTax and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesTax
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesTax {
        return new SalesTax();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value. The country code enumeration value identifies the country to which this sales tax rate applies.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'salesTaxJurisdictionId' => fn(ParseNode $n) => $o->setSalesTaxJurisdictionId($n->getStringValue()),
            'salesTaxPercentage' => fn(ParseNode $n) => $o->setSalesTaxPercentage($n->getStringValue()),
            'shippingAndHandlingTaxed' => fn(ParseNode $n) => $o->setShippingAndHandlingTaxed($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the salesTaxJurisdictionId property value. A unique ID that identifies the sales tax jurisdiction to which the sales tax rate applies.<br><br><span class="tablenote"><b>Note:</b> When the returned <code>countryCode</code> is <code>US</code>, the only supported return values for <code>salesTaxJurisdictionId</code> are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam</li><li><code>MP</code> Northern Mariana Islands</li><li><code>PW (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></span>
     * @return string|null
    */
    public function getSalesTaxJurisdictionId(): ?string {
        return $this->salesTaxJurisdictionId;
    }

    /**
     * Gets the salesTaxPercentage property value. The sales tax rate that will be applied to sales price. The <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is returned here, such as <code>7.75</code>
     * @return string|null
    */
    public function getSalesTaxPercentage(): ?string {
        return $this->salesTaxPercentage;
    }

    /**
     * Gets the shippingAndHandlingTaxed property value. If returned as <code>true</code>, sales tax is also applied to shipping and handling charges, and not just the total sales price of the order.
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
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('salesTaxJurisdictionId', $this->getSalesTaxJurisdictionId());
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
     * Sets the countryCode property value. The country code enumeration value identifies the country to which this sales tax rate applies.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the salesTaxJurisdictionId property value. A unique ID that identifies the sales tax jurisdiction to which the sales tax rate applies.<br><br><span class="tablenote"><b>Note:</b> When the returned <code>countryCode</code> is <code>US</code>, the only supported return values for <code>salesTaxJurisdictionId</code> are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam</li><li><code>MP</code> Northern Mariana Islands</li><li><code>PW (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></span>
     * @param string|null $value Value to set for the salesTaxJurisdictionId property.
    */
    public function setSalesTaxJurisdictionId(?string $value): void {
        $this->salesTaxJurisdictionId = $value;
    }

    /**
     * Sets the salesTaxPercentage property value. The sales tax rate that will be applied to sales price. The <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is returned here, such as <code>7.75</code>
     * @param string|null $value Value to set for the salesTaxPercentage property.
    */
    public function setSalesTaxPercentage(?string $value): void {
        $this->salesTaxPercentage = $value;
    }

    /**
     * Sets the shippingAndHandlingTaxed property value. If returned as <code>true</code>, sales tax is also applied to shipping and handling charges, and not just the total sales price of the order.
     * @param bool|null $value Value to set for the shippingAndHandlingTaxed property.
    */
    public function setShippingAndHandlingTaxed(?bool $value): void {
        $this->shippingAndHandlingTaxed = $value;
    }

}
