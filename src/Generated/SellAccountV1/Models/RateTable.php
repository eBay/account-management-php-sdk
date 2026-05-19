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
 * This type is used to provide details about each shipping rate table that is returned in the <b>getRateTables</b> response.
*/
class RateTable implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $countryCode A two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> country code representing the eBay marketplace where the shipping rate table is defined. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay API documentation</a>
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $locality This enumeration value returned here indicates whether the shipping rate table is a domestic or international shipping rate table. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
    */
    private ?string $locality = null;
    
    /**
     * @var string|null $name The seller-defined name for the shipping rate table.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $rateTableId A unique eBay-assigned ID for a seller's shipping rate table. These <b>rateTableId</b> values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call in the Trading API.
    */
    private ?string $rateTableId = null;
    
    /**
     * Instantiates a new RateTable and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RateTable
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RateTable {
        return new RateTable();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value. A two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> country code representing the eBay marketplace where the shipping rate table is defined. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay API documentation</a>
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
            'locality' => fn(ParseNode $n) => $o->setLocality($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'rateTableId' => fn(ParseNode $n) => $o->setRateTableId($n->getStringValue()),
        ];
    }

    /**
     * Gets the locality property value. This enumeration value returned here indicates whether the shipping rate table is a domestic or international shipping rate table. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getLocality(): ?string {
        return $this->locality;
    }

    /**
     * Gets the name property value. The seller-defined name for the shipping rate table.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the rateTableId property value. A unique eBay-assigned ID for a seller's shipping rate table. These <b>rateTableId</b> values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call in the Trading API.
     * @return string|null
    */
    public function getRateTableId(): ?string {
        return $this->rateTableId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('locality', $this->getLocality());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('rateTableId', $this->getRateTableId());
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
     * Sets the countryCode property value. A two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> country code representing the eBay marketplace where the shipping rate table is defined. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the locality property value. This enumeration value returned here indicates whether the shipping rate table is a domestic or international shipping rate table. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the locality property.
    */
    public function setLocality(?string $value): void {
        $this->locality = $value;
    }

    /**
     * Sets the name property value. The seller-defined name for the shipping rate table.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the rateTableId property value. A unique eBay-assigned ID for a seller's shipping rate table. These <b>rateTableId</b> values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call in the Trading API.
     * @param string|null $value Value to set for the rateTableId property.
    */
    public function setRateTableId(?string $value): void {
        $this->rateTableId = $value;
    }

}
