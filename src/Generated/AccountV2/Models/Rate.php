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

namespace EBay\AccountManagement\Generated\AccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This container details shipping rate information identified by a unique rate ID. A successful call returns the requested shipping rate information.
*/
class Rate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var Amount|null $additionalCost An additional shipping cost added to the base shipping rate (i.e., <b>shippingCost</b>).<br/><br/>This amount applies only to the following <b>rateTableBasis</b> options:<ul><li><b>WEIGHT</b>: This is a cost per unit weight and is calculated using the weight of the item(s) being shipped.</li><li><b>SURCHARGE</b>: This is a flat amount that is added to the base shipping rate.</li></ul>This field is returned only when it is applicable to the specified rate ID.
    */
    private ?Amount $additionalCost = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $rateId The unique identifier for rate information.<br/><br/><span class="tablenote"><strong>Note:</strong> This is a string that is automatically assigned by the system when a rate object is created.</span>
    */
    private ?string $rateId = null;
    
    /**
     * @var ShippingCategoryEnum|null $shippingCategory Indicates the level of shipping service to which the shipping rate information applies.<br/><br/>Available shipping categories are:<ul><li><b>ONE_DAY</b>: <i>This option is not supported when <b>shippingOptionType</b> is INTERNATIONAL.</i> </li><li><b>EXPEDITED</b></li><li><b>STANDARD</b></li><li><b>ECONOMY</b></li><li><b>EXPRESS</b>: <i>This option is supported only when <b>MarketplaceId</b> is <code>EBAY_DE</code> (Germany)</i></li></ul>
    */
    private ?ShippingCategoryEnum $shippingCategory = null;
    
    /**
     * @var Amount|null $shippingCost Specifies the base shipping rate for an item.<br/><br/>This amount applies only to the following <b>rateTableBasis</b> options:<ul><li><b>ITEM</b>: This is a flat rate shipping cost per item being shipped.</li><li><b>WEIGHT</b>: This is a cost per unit weight and is calculated using the weight of the item(s) being shipped.</li></ul>
    */
    private ?Amount $shippingCost = null;
    
    /**
     * @var array<string>|null $shippingRegionNames An array of Region names to which the shipping rate information applies.<br/><br/>Returned values may be:<ul><li>Geographical Regions (e.g., <code>Worldwide</code>, <code>Europe</code>, and <code>Middle East</code>)</li><li>Individual countries identified by a two-letter code such as <code>US</code> (United States), <code>CA</code> (Canada), and <code>GB</code> (United Kingdom)</li><li>US states and/or Canadian provinces identified by a two-letter code such as <code>NY</code> (New York) or <code>SK</code> (Saskatchewan)</li><li>Domestic Regions such as <code>AK/HI</code> (Alaska/Hawaii)</li></ul>
    */
    private ?array $shippingRegionNames = null;
    
    /**
     * @var string|null $shippingServiceCode An enum value that indicates the shipping service used for the specified shipping rate. These enum values align with <b>ShippingService</b> metadata returned by a <b>GeteBayDetails</b> call with <b>DetailName</b> set to <code>shippingServiceDetails</code>.
    */
    private ?string $shippingServiceCode = null;
    
    /**
     * Instantiates a new Rate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Rate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Rate {
        return new Rate();
    }

    /**
     * Gets the additionalCost property value. An additional shipping cost added to the base shipping rate (i.e., <b>shippingCost</b>).<br/><br/>This amount applies only to the following <b>rateTableBasis</b> options:<ul><li><b>WEIGHT</b>: This is a cost per unit weight and is calculated using the weight of the item(s) being shipped.</li><li><b>SURCHARGE</b>: This is a flat amount that is added to the base shipping rate.</li></ul>This field is returned only when it is applicable to the specified rate ID.
     * @return Amount|null
    */
    public function getAdditionalCost(): ?Amount {
        return $this->additionalCost;
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
            'additionalCost' => fn(ParseNode $n) => $o->setAdditionalCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'rateId' => fn(ParseNode $n) => $o->setRateId($n->getStringValue()),
            'shippingCategory' => fn(ParseNode $n) => $o->setShippingCategory($n->getEnumValue(ShippingCategoryEnum::class)),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingRegionNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setShippingRegionNames($val);
            },
            'shippingServiceCode' => fn(ParseNode $n) => $o->setShippingServiceCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the rateId property value. The unique identifier for rate information.<br/><br/><span class="tablenote"><strong>Note:</strong> This is a string that is automatically assigned by the system when a rate object is created.</span>
     * @return string|null
    */
    public function getRateId(): ?string {
        return $this->rateId;
    }

    /**
     * Gets the shippingCategory property value. Indicates the level of shipping service to which the shipping rate information applies.<br/><br/>Available shipping categories are:<ul><li><b>ONE_DAY</b>: <i>This option is not supported when <b>shippingOptionType</b> is INTERNATIONAL.</i> </li><li><b>EXPEDITED</b></li><li><b>STANDARD</b></li><li><b>ECONOMY</b></li><li><b>EXPRESS</b>: <i>This option is supported only when <b>MarketplaceId</b> is <code>EBAY_DE</code> (Germany)</i></li></ul>
     * @return ShippingCategoryEnum|null
    */
    public function getShippingCategory(): ?ShippingCategoryEnum {
        return $this->shippingCategory;
    }

    /**
     * Gets the shippingCost property value. Specifies the base shipping rate for an item.<br/><br/>This amount applies only to the following <b>rateTableBasis</b> options:<ul><li><b>ITEM</b>: This is a flat rate shipping cost per item being shipped.</li><li><b>WEIGHT</b>: This is a cost per unit weight and is calculated using the weight of the item(s) being shipped.</li></ul>
     * @return Amount|null
    */
    public function getShippingCost(): ?Amount {
        return $this->shippingCost;
    }

    /**
     * Gets the shippingRegionNames property value. An array of Region names to which the shipping rate information applies.<br/><br/>Returned values may be:<ul><li>Geographical Regions (e.g., <code>Worldwide</code>, <code>Europe</code>, and <code>Middle East</code>)</li><li>Individual countries identified by a two-letter code such as <code>US</code> (United States), <code>CA</code> (Canada), and <code>GB</code> (United Kingdom)</li><li>US states and/or Canadian provinces identified by a two-letter code such as <code>NY</code> (New York) or <code>SK</code> (Saskatchewan)</li><li>Domestic Regions such as <code>AK/HI</code> (Alaska/Hawaii)</li></ul>
     * @return array<string>|null
    */
    public function getShippingRegionNames(): ?array {
        return $this->shippingRegionNames;
    }

    /**
     * Gets the shippingServiceCode property value. An enum value that indicates the shipping service used for the specified shipping rate. These enum values align with <b>ShippingService</b> metadata returned by a <b>GeteBayDetails</b> call with <b>DetailName</b> set to <code>shippingServiceDetails</code>.
     * @return string|null
    */
    public function getShippingServiceCode(): ?string {
        return $this->shippingServiceCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('additionalCost', $this->getAdditionalCost());
        $writer->writeStringValue('rateId', $this->getRateId());
        $writer->writeEnumValue('shippingCategory', $this->getShippingCategory());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
        $writer->writeCollectionOfPrimitiveValues('shippingRegionNames', $this->getShippingRegionNames());
        $writer->writeStringValue('shippingServiceCode', $this->getShippingServiceCode());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalCost property value. An additional shipping cost added to the base shipping rate (i.e., <b>shippingCost</b>).<br/><br/>This amount applies only to the following <b>rateTableBasis</b> options:<ul><li><b>WEIGHT</b>: This is a cost per unit weight and is calculated using the weight of the item(s) being shipped.</li><li><b>SURCHARGE</b>: This is a flat amount that is added to the base shipping rate.</li></ul>This field is returned only when it is applicable to the specified rate ID.
     * @param Amount|null $value Value to set for the additionalCost property.
    */
    public function setAdditionalCost(?Amount $value): void {
        $this->additionalCost = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the rateId property value. The unique identifier for rate information.<br/><br/><span class="tablenote"><strong>Note:</strong> This is a string that is automatically assigned by the system when a rate object is created.</span>
     * @param string|null $value Value to set for the rateId property.
    */
    public function setRateId(?string $value): void {
        $this->rateId = $value;
    }

    /**
     * Sets the shippingCategory property value. Indicates the level of shipping service to which the shipping rate information applies.<br/><br/>Available shipping categories are:<ul><li><b>ONE_DAY</b>: <i>This option is not supported when <b>shippingOptionType</b> is INTERNATIONAL.</i> </li><li><b>EXPEDITED</b></li><li><b>STANDARD</b></li><li><b>ECONOMY</b></li><li><b>EXPRESS</b>: <i>This option is supported only when <b>MarketplaceId</b> is <code>EBAY_DE</code> (Germany)</i></li></ul>
     * @param ShippingCategoryEnum|null $value Value to set for the shippingCategory property.
    */
    public function setShippingCategory(?ShippingCategoryEnum $value): void {
        $this->shippingCategory = $value;
    }

    /**
     * Sets the shippingCost property value. Specifies the base shipping rate for an item.<br/><br/>This amount applies only to the following <b>rateTableBasis</b> options:<ul><li><b>ITEM</b>: This is a flat rate shipping cost per item being shipped.</li><li><b>WEIGHT</b>: This is a cost per unit weight and is calculated using the weight of the item(s) being shipped.</li></ul>
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

    /**
     * Sets the shippingRegionNames property value. An array of Region names to which the shipping rate information applies.<br/><br/>Returned values may be:<ul><li>Geographical Regions (e.g., <code>Worldwide</code>, <code>Europe</code>, and <code>Middle East</code>)</li><li>Individual countries identified by a two-letter code such as <code>US</code> (United States), <code>CA</code> (Canada), and <code>GB</code> (United Kingdom)</li><li>US states and/or Canadian provinces identified by a two-letter code such as <code>NY</code> (New York) or <code>SK</code> (Saskatchewan)</li><li>Domestic Regions such as <code>AK/HI</code> (Alaska/Hawaii)</li></ul>
     * @param array<string>|null $value Value to set for the shippingRegionNames property.
    */
    public function setShippingRegionNames(?array $value): void {
        $this->shippingRegionNames = $value;
    }

    /**
     * Sets the shippingServiceCode property value. An enum value that indicates the shipping service used for the specified shipping rate. These enum values align with <b>ShippingService</b> metadata returned by a <b>GeteBayDetails</b> call with <b>DetailName</b> set to <code>shippingServiceDetails</code>.
     * @param string|null $value Value to set for the shippingServiceCode property.
    */
    public function setShippingServiceCode(?string $value): void {
        $this->shippingServiceCode = $value;
    }

}
