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
 * This container stores the array of sales-tax table entries that have been created or updated.
*/
class UpdatedSalesTaxEntry implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $countryCode The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code of the country associated with the sales-tax table entry.
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $jurisdictionId The ID of the tax jurisdiction associated with the sales-tax table entry.
    */
    private ?string $jurisdictionId = null;
    
    /**
     * @var int|null $statusCode The HTTP status code for the call.<br><br><span class="tablenote"><b>Note:</b> The system returns one HTTP status code regardless of the number of sales-tax table entries provided. Therefore, the same HTTP <code>statusCode</code> will be listed for all sales-tax table entries returned in the payload.</span>
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new UpdatedSalesTaxEntry and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatedSalesTaxEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatedSalesTaxEntry {
        return new UpdatedSalesTaxEntry();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code of the country associated with the sales-tax table entry.
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
            'jurisdictionId' => fn(ParseNode $n) => $o->setJurisdictionId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the jurisdictionId property value. The ID of the tax jurisdiction associated with the sales-tax table entry.
     * @return string|null
    */
    public function getJurisdictionId(): ?string {
        return $this->jurisdictionId;
    }

    /**
     * Gets the statusCode property value. The HTTP status code for the call.<br><br><span class="tablenote"><b>Note:</b> The system returns one HTTP status code regardless of the number of sales-tax table entries provided. Therefore, the same HTTP <code>statusCode</code> will be listed for all sales-tax table entries returned in the payload.</span>
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('jurisdictionId', $this->getJurisdictionId());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the countryCode property value. The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html " title="https://www.iso.org " target="_blank">ISO 3166</a> code of the country associated with the sales-tax table entry.
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the jurisdictionId property value. The ID of the tax jurisdiction associated with the sales-tax table entry.
     * @param string|null $value Value to set for the jurisdictionId property.
    */
    public function setJurisdictionId(?string $value): void {
        $this->jurisdictionId = $value;
    }

    /**
     * Sets the statusCode property value. The HTTP status code for the call.<br><br><span class="tablenote"><b>Note:</b> The system returns one HTTP status code regardless of the number of sales-tax table entries provided. Therefore, the same HTTP <code>statusCode</code> will be listed for all sales-tax table entries returned in the payload.</span>
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
