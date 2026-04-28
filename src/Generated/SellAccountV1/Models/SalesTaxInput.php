<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SalesTaxInput implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $countryCode This parameter specifies the two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code of the country for which a sales-tax table entry is to be created or updated.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span>
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $salesTaxJurisdictionId This parameter specifies the ID of the tax jurisdiction for which a sales-tax table entry is to be created or updated.<br><br>Valid jurisdiction IDs can be retrieved using the <a href="/api-docs/sell/metadata/resources/country/methods/getSalesTaxJurisdictions" target="_blank ">getSalesTaxJurisdiction</a> method of the Metadata API.<br><br><span class="tablenote"><b>Note:</b> When <code>countryCode</code> is set to <code>US</code>, the only supported values for <code>jurisdictionId</code> are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam)</li><li><code>MP</code> (Northern Mariana Islands)</li><li><code>PW</code> (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></span>
    */
    private ?string $salesTaxJurisdictionId = null;
    
    /**
     * @var string|null $salesTaxPercentage This parameter specifies the sales tax rate for the specified <b>salesTaxJurisdictionId</b>. When applicable to an order, this sales tax rate will be applied to the sales price. The <b>shippingAndHandlingTaxed</b> value indicates whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is set here, such as <code>7.75</code>.
    */
    private ?string $salesTaxPercentage = null;
    
    /**
     * @var bool|null $shippingAndHandlingTaxed This parameter is set to <code>true</code> if the seller wishes to apply sales tax to shipping and handling charges and not just the total sales price of an order. Otherwise, this parameter's value should be set to <code>false</code>.
    */
    private ?bool $shippingAndHandlingTaxed = null;
    
    /**
     * Instantiates a new SalesTaxInput and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesTaxInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesTaxInput {
        return new SalesTaxInput();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value. This parameter specifies the two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code of the country for which a sales-tax table entry is to be created or updated.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span>
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
     * Gets the salesTaxJurisdictionId property value. This parameter specifies the ID of the tax jurisdiction for which a sales-tax table entry is to be created or updated.<br><br>Valid jurisdiction IDs can be retrieved using the <a href="/api-docs/sell/metadata/resources/country/methods/getSalesTaxJurisdictions" target="_blank ">getSalesTaxJurisdiction</a> method of the Metadata API.<br><br><span class="tablenote"><b>Note:</b> When <code>countryCode</code> is set to <code>US</code>, the only supported values for <code>jurisdictionId</code> are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam)</li><li><code>MP</code> (Northern Mariana Islands)</li><li><code>PW</code> (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></span>
     * @return string|null
    */
    public function getSalesTaxJurisdictionId(): ?string {
        return $this->salesTaxJurisdictionId;
    }

    /**
     * Gets the salesTaxPercentage property value. This parameter specifies the sales tax rate for the specified <b>salesTaxJurisdictionId</b>. When applicable to an order, this sales tax rate will be applied to the sales price. The <b>shippingAndHandlingTaxed</b> value indicates whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is set here, such as <code>7.75</code>.
     * @return string|null
    */
    public function getSalesTaxPercentage(): ?string {
        return $this->salesTaxPercentage;
    }

    /**
     * Gets the shippingAndHandlingTaxed property value. This parameter is set to <code>true</code> if the seller wishes to apply sales tax to shipping and handling charges and not just the total sales price of an order. Otherwise, this parameter's value should be set to <code>false</code>.
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
     * Sets the countryCode property value. This parameter specifies the two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code of the country for which a sales-tax table entry is to be created or updated.<br><br><span class="tablenote"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span>
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the salesTaxJurisdictionId property value. This parameter specifies the ID of the tax jurisdiction for which a sales-tax table entry is to be created or updated.<br><br>Valid jurisdiction IDs can be retrieved using the <a href="/api-docs/sell/metadata/resources/country/methods/getSalesTaxJurisdictions" target="_blank ">getSalesTaxJurisdiction</a> method of the Metadata API.<br><br><span class="tablenote"><b>Note:</b> When <code>countryCode</code> is set to <code>US</code>, the only supported values for <code>jurisdictionId</code> are:<ul><li><code>AS</code> (American Samoa)</li><li><code>GU</code> (Guam)</li><li><code>MP</code> (Northern Mariana Islands)</li><li><code>PW</code> (Palau)</li><li><code>VI</code> (US Virgin Islands)</li></ul></span>
     * @param string|null $value Value to set for the salesTaxJurisdictionId property.
    */
    public function setSalesTaxJurisdictionId(?string $value): void {
        $this->salesTaxJurisdictionId = $value;
    }

    /**
     * Sets the salesTaxPercentage property value. This parameter specifies the sales tax rate for the specified <b>salesTaxJurisdictionId</b>. When applicable to an order, this sales tax rate will be applied to the sales price. The <b>shippingAndHandlingTaxed</b> value indicates whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is set here, such as <code>7.75</code>.
     * @param string|null $value Value to set for the salesTaxPercentage property.
    */
    public function setSalesTaxPercentage(?string $value): void {
        $this->salesTaxPercentage = $value;
    }

    /**
     * Sets the shippingAndHandlingTaxed property value. This parameter is set to <code>true</code> if the seller wishes to apply sales tax to shipping and handling charges and not just the total sales price of an order. Otherwise, this parameter's value should be set to <code>false</code>.
     * @param bool|null $value Value to set for the shippingAndHandlingTaxed property.
    */
    public function setShippingAndHandlingTaxed(?bool $value): void {
        $this->shippingAndHandlingTaxed = $value;
    }

}
