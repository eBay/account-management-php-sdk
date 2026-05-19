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

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This container represents the list of locations that the seller wants to exclude from shipping.
*/
class SellerExcludeShipToLocationPreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $excludeShipToLocations This array shows the list of locations that the seller does not ship to. Excluded locations may include continents and large geographical areas. For example, 'Middle East', individual countries represented by two-letter codes, or special locations within a country such as 'Alaska/Hawaii' or 'PO Box'.
    */
    private ?array $excludeShipToLocations = null;
    
    /**
     * Instantiates a new SellerExcludeShipToLocationPreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellerExcludeShipToLocationPreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellerExcludeShipToLocationPreferencesType {
        return new SellerExcludeShipToLocationPreferencesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeShipToLocations property value. This array shows the list of locations that the seller does not ship to. Excluded locations may include continents and large geographical areas. For example, 'Middle East', individual countries represented by two-letter codes, or special locations within a country such as 'Alaska/Hawaii' or 'PO Box'.
     * @return array<string>|null
    */
    public function getExcludeShipToLocations(): ?array {
        return $this->excludeShipToLocations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeShipToLocations' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludeShipToLocations($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeShipToLocations', $this->getExcludeShipToLocations());
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
     * Sets the excludeShipToLocations property value. This array shows the list of locations that the seller does not ship to. Excluded locations may include continents and large geographical areas. For example, 'Middle East', individual countries represented by two-letter codes, or special locations within a country such as 'Alaska/Hawaii' or 'PO Box'.
     * @param array<string>|null $value Value to set for the excludeShipToLocations property.
    */
    public function setExcludeShipToLocations(?array $value): void {
        $this->excludeShipToLocations = $value;
    }

}
