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
 * This type defines the jurisdiction information associated with a fee, identifying the geographic or regulatory region under which the fee is applied.
*/
class FeeJurisdiction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $regionName The name of the region to which the fee applies.<br/><br/>The set of valid <b>regionName</b> values returned is determined by the corresponding <b>regionType</b> value.<br/><br/><span class="tablenote"><strong>Note:</strong> Currently supported <b>regionName</b> values are standard two-character country or state codes.<br/><br/>Typical examples include:<ul><li><b>MX</b> (Mexico)</li><li><b>IN</b> (India)</li><li><b>US</b> (United States)</li><li><b>CA</b> (California)</li><li><b>VT</b> (Vermont)</li><li><b>ME</b> (Maine)</li></ul></span>
    */
    private ?string $regionName = null;
    
    /**
     * @var string|null $regionType This enumeration value indicates the type of region that the fee jurisdiction represents, such as a country or a state. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:RegionTypeEnum'>eBay API documentation</a>
    */
    private ?string $regionType = null;
    
    /**
     * Instantiates a new FeeJurisdiction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeeJurisdiction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeeJurisdiction {
        return new FeeJurisdiction();
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
            'regionName' => fn(ParseNode $n) => $o->setRegionName($n->getStringValue()),
            'regionType' => fn(ParseNode $n) => $o->setRegionType($n->getStringValue()),
        ];
    }

    /**
     * Gets the regionName property value. The name of the region to which the fee applies.<br/><br/>The set of valid <b>regionName</b> values returned is determined by the corresponding <b>regionType</b> value.<br/><br/><span class="tablenote"><strong>Note:</strong> Currently supported <b>regionName</b> values are standard two-character country or state codes.<br/><br/>Typical examples include:<ul><li><b>MX</b> (Mexico)</li><li><b>IN</b> (India)</li><li><b>US</b> (United States)</li><li><b>CA</b> (California)</li><li><b>VT</b> (Vermont)</li><li><b>ME</b> (Maine)</li></ul></span>
     * @return string|null
    */
    public function getRegionName(): ?string {
        return $this->regionName;
    }

    /**
     * Gets the regionType property value. This enumeration value indicates the type of region that the fee jurisdiction represents, such as a country or a state. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:RegionTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRegionType(): ?string {
        return $this->regionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('regionName', $this->getRegionName());
        $writer->writeStringValue('regionType', $this->getRegionType());
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
     * Sets the regionName property value. The name of the region to which the fee applies.<br/><br/>The set of valid <b>regionName</b> values returned is determined by the corresponding <b>regionType</b> value.<br/><br/><span class="tablenote"><strong>Note:</strong> Currently supported <b>regionName</b> values are standard two-character country or state codes.<br/><br/>Typical examples include:<ul><li><b>MX</b> (Mexico)</li><li><b>IN</b> (India)</li><li><b>US</b> (United States)</li><li><b>CA</b> (California)</li><li><b>VT</b> (Vermont)</li><li><b>ME</b> (Maine)</li></ul></span>
     * @param string|null $value Value to set for the regionName property.
    */
    public function setRegionName(?string $value): void {
        $this->regionName = $value;
    }

    /**
     * Sets the regionType property value. This enumeration value indicates the type of region that the fee jurisdiction represents, such as a country or a state. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:RegionTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the regionType property.
    */
    public function setRegionType(?string $value): void {
        $this->regionType = $value;
    }

}
