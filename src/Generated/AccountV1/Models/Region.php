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

namespace EBay\AccountManagement\Generated\AccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to define specific shipping regions. There are four 'levels' of shipping regions, including large geographical regions (like 'Asia', 'Europe', or 'Middle East'), individual countries, US states or Canadian provinces, and special locations/domestic regions within a country (like 'Alaska/Hawaii' or 'PO Box').
*/
class Region implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $regionName A string that indicates the name of a region, as defined by eBay. A "region" can be either a 'world region' (e.g., the "Middle East" or "Southeast Asia"), a country (represented with a two-letter country code), a state or province (represented with a two-letter code), or a special domestic region within a country. <br><br>The <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call in the Trading API can be used to retrieve the world regions and special domestic regions within a specific country. To get these enumeration values, call <b>GeteBayDetails</b> with the <b>DetailName</b> value set to <b>ExcludeShippingLocationDetails</b>.
    */
    private ?string $regionName = null;
    
    /**
     * @var RegionTypeEnum|null $regionType This enumerated type defines shipping region types.<br><span class="tablenote"> <strong>Note:</strong> These enumeration values are not currently being used by fulfillment policy methods, but may be used in the future.</span> | - **COUNTRY**: A single country. - **COUNTRY_REGION**: A domestic region or special location within a country. In the US, these domestic region/special location include 'Alaska/Hawaii' and 'PO Box'. - **STATE_OR_PROVINCE**: A state or province, such as California (CA) or New York (NY) in the US, or British Columbia (BC) or Ontario (ON) in Canada. - **WORLD_REGION**: A world region, such as Europe, the Middle East, or Southeast Asia. - **WORLDWIDE**: The entire world as we know it.
    */
    private ?RegionTypeEnum $regionType = null;
    
    /**
     * Instantiates a new Region and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Region
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Region {
        return new Region();
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
            'regionType' => fn(ParseNode $n) => $o->setRegionType($n->getEnumValue(RegionTypeEnum::class)),
        ];
    }

    /**
     * Gets the regionName property value. A string that indicates the name of a region, as defined by eBay. A "region" can be either a 'world region' (e.g., the "Middle East" or "Southeast Asia"), a country (represented with a two-letter country code), a state or province (represented with a two-letter code), or a special domestic region within a country. <br><br>The <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call in the Trading API can be used to retrieve the world regions and special domestic regions within a specific country. To get these enumeration values, call <b>GeteBayDetails</b> with the <b>DetailName</b> value set to <b>ExcludeShippingLocationDetails</b>.
     * @return string|null
    */
    public function getRegionName(): ?string {
        return $this->regionName;
    }

    /**
     * Gets the regionType property value. This enumerated type defines shipping region types.<br><span class="tablenote"> <strong>Note:</strong> These enumeration values are not currently being used by fulfillment policy methods, but may be used in the future.</span> | - **COUNTRY**: A single country. - **COUNTRY_REGION**: A domestic region or special location within a country. In the US, these domestic region/special location include 'Alaska/Hawaii' and 'PO Box'. - **STATE_OR_PROVINCE**: A state or province, such as California (CA) or New York (NY) in the US, or British Columbia (BC) or Ontario (ON) in Canada. - **WORLD_REGION**: A world region, such as Europe, the Middle East, or Southeast Asia. - **WORLDWIDE**: The entire world as we know it.
     * @return RegionTypeEnum|null
    */
    public function getRegionType(): ?RegionTypeEnum {
        return $this->regionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('regionName', $this->getRegionName());
        $writer->writeEnumValue('regionType', $this->getRegionType());
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
     * Sets the regionName property value. A string that indicates the name of a region, as defined by eBay. A "region" can be either a 'world region' (e.g., the "Middle East" or "Southeast Asia"), a country (represented with a two-letter country code), a state or province (represented with a two-letter code), or a special domestic region within a country. <br><br>The <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call in the Trading API can be used to retrieve the world regions and special domestic regions within a specific country. To get these enumeration values, call <b>GeteBayDetails</b> with the <b>DetailName</b> value set to <b>ExcludeShippingLocationDetails</b>.
     * @param string|null $value Value to set for the regionName property.
    */
    public function setRegionName(?string $value): void {
        $this->regionName = $value;
    }

    /**
     * Sets the regionType property value. This enumerated type defines shipping region types.<br><span class="tablenote"> <strong>Note:</strong> These enumeration values are not currently being used by fulfillment policy methods, but may be used in the future.</span> | - **COUNTRY**: A single country. - **COUNTRY_REGION**: A domestic region or special location within a country. In the US, these domestic region/special location include 'Alaska/Hawaii' and 'PO Box'. - **STATE_OR_PROVINCE**: A state or province, such as California (CA) or New York (NY) in the US, or British Columbia (BC) or Ontario (ON) in Canada. - **WORLD_REGION**: A world region, such as Europe, the Middle East, or Southeast Asia. - **WORLDWIDE**: The entire world as we know it.
     * @param RegionTypeEnum|null $value Value to set for the regionType property.
    */
    public function setRegionType(?RegionTypeEnum $value): void {
        $this->regionType = $value;
    }

}
