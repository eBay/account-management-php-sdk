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

/**
 * This container includes all information pertaining to a shipping rate table. A successful call returns the requested shipping rate information.
*/
class RateTableDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId Identifies the eBay marketplace to which the shipping rate table applies.
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * @var string|null $name The seller-defined name for the shipping rate table. Names must be unique for each table assigned to the same seller, shippingOptionType, and eBay marketplace.<br/><br/><b>Max length:</b> 50
    */
    private ?string $name = null;
    
    /**
     * @var array<Rate>|null $rates An array of rate objects associated with the specified shipping rate table. Each rate object is identified by a unique system-generated ID and defines specific shipping rate information.
    */
    private ?array $rates = null;
    
    /**
     * @var ShippingRateCalculationEnum|null $rateTableBasis The rate calculation type provides three methods of calculating the shipping cost based on the seller's selection/input:<ul><li><b>ITEM</b>: Specifies the flat rate shipping cost that buyers in the specified shipping region will pay. When this option is selected, information specified in the rate table overrides all shipping options/costs that are specified at the listing level. Buyers in the specified regions will only see the services provided in the rate table. Buyers in other regions that are not specified in the rate table will see the shipping services associated with the listing.</li><li><b>WEIGHT</b>: Seller can provide minimum shipping cost and an additional shipping cost per pound. The additional cost will be calculated based on the weight the seller provide at the time of listing. Buyers will see the total shipping cost and won’t see these calculations.  Buyers in the specified regions will only see the services provided in the rate table. Buyers in other regions that were not specified in the rate table, will see the shipping services associated with the listing.</li><li><b>SURCHARGE</b>: Lists surcharges for buyers within specified regions, or indicates a flat amount added to the shipping cost specified within an item's listing. Buyers will see only the total shipping cost as well as shipping services associated with the item's listing. If a SURCHARGE is specified in the rate table for certain regions, buyers in those regions will see the (shipping cost + SURCHARGE) total.</li></ul>
    */
    private ?ShippingRateCalculationEnum $rateTableBasis = null;
    
    /**
     * @var string|null $rateTableId A unique, system-generated ID assigned to the shipping rate table when it is initially created.
    */
    private ?string $rateTableId = null;
    
    /**
     * @var ShippingOptionTypeEnum|null $shippingOptionType The region serviced by the shipping rate table. Valid values are:<ul><li><b>DOMESTIC</b>: Indicates that the shipping rate table applies to shipping destinations within the country in which an item has been listed (i.e., the <i>source</i> country).</li><li><b>INTERNATIONAL</b>: Indicates that the shipping rate table applies to shipping destinations outside of the country in which an item has been listed.</li></ul>
    */
    private ?ShippingOptionTypeEnum $shippingOptionType = null;
    
    /**
     * Instantiates a new RateTableDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RateTableDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RateTableDetails {
        return new RateTableDetails();
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
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'rates' => fn(ParseNode $n) => $o->setRates($n->getCollectionOfObjectValues([Rate::class, 'createFromDiscriminatorValue'])),
            'rateTableBasis' => fn(ParseNode $n) => $o->setRateTableBasis($n->getEnumValue(ShippingRateCalculationEnum::class)),
            'rateTableId' => fn(ParseNode $n) => $o->setRateTableId($n->getStringValue()),
            'shippingOptionType' => fn(ParseNode $n) => $o->setShippingOptionType($n->getEnumValue(ShippingOptionTypeEnum::class)),
        ];
    }

    /**
     * Gets the marketplaceId property value. Identifies the eBay marketplace to which the shipping rate table applies.
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
        return $this->marketplaceId;
    }

    /**
     * Gets the name property value. The seller-defined name for the shipping rate table. Names must be unique for each table assigned to the same seller, shippingOptionType, and eBay marketplace.<br/><br/><b>Max length:</b> 50
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the rates property value. An array of rate objects associated with the specified shipping rate table. Each rate object is identified by a unique system-generated ID and defines specific shipping rate information.
     * @return array<Rate>|null
    */
    public function getRates(): ?array {
        return $this->rates;
    }

    /**
     * Gets the rateTableBasis property value. The rate calculation type provides three methods of calculating the shipping cost based on the seller's selection/input:<ul><li><b>ITEM</b>: Specifies the flat rate shipping cost that buyers in the specified shipping region will pay. When this option is selected, information specified in the rate table overrides all shipping options/costs that are specified at the listing level. Buyers in the specified regions will only see the services provided in the rate table. Buyers in other regions that are not specified in the rate table will see the shipping services associated with the listing.</li><li><b>WEIGHT</b>: Seller can provide minimum shipping cost and an additional shipping cost per pound. The additional cost will be calculated based on the weight the seller provide at the time of listing. Buyers will see the total shipping cost and won’t see these calculations.  Buyers in the specified regions will only see the services provided in the rate table. Buyers in other regions that were not specified in the rate table, will see the shipping services associated with the listing.</li><li><b>SURCHARGE</b>: Lists surcharges for buyers within specified regions, or indicates a flat amount added to the shipping cost specified within an item's listing. Buyers will see only the total shipping cost as well as shipping services associated with the item's listing. If a SURCHARGE is specified in the rate table for certain regions, buyers in those regions will see the (shipping cost + SURCHARGE) total.</li></ul>
     * @return ShippingRateCalculationEnum|null
    */
    public function getRateTableBasis(): ?ShippingRateCalculationEnum {
        return $this->rateTableBasis;
    }

    /**
     * Gets the rateTableId property value. A unique, system-generated ID assigned to the shipping rate table when it is initially created.
     * @return string|null
    */
    public function getRateTableId(): ?string {
        return $this->rateTableId;
    }

    /**
     * Gets the shippingOptionType property value. The region serviced by the shipping rate table. Valid values are:<ul><li><b>DOMESTIC</b>: Indicates that the shipping rate table applies to shipping destinations within the country in which an item has been listed (i.e., the <i>source</i> country).</li><li><b>INTERNATIONAL</b>: Indicates that the shipping rate table applies to shipping destinations outside of the country in which an item has been listed.</li></ul>
     * @return ShippingOptionTypeEnum|null
    */
    public function getShippingOptionType(): ?ShippingOptionTypeEnum {
        return $this->shippingOptionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('rates', $this->getRates());
        $writer->writeEnumValue('rateTableBasis', $this->getRateTableBasis());
        $writer->writeStringValue('rateTableId', $this->getRateTableId());
        $writer->writeEnumValue('shippingOptionType', $this->getShippingOptionType());
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
     * Sets the marketplaceId property value. Identifies the eBay marketplace to which the shipping rate table applies.
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the name property value. The seller-defined name for the shipping rate table. Names must be unique for each table assigned to the same seller, shippingOptionType, and eBay marketplace.<br/><br/><b>Max length:</b> 50
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the rates property value. An array of rate objects associated with the specified shipping rate table. Each rate object is identified by a unique system-generated ID and defines specific shipping rate information.
     * @param array<Rate>|null $value Value to set for the rates property.
    */
    public function setRates(?array $value): void {
        $this->rates = $value;
    }

    /**
     * Sets the rateTableBasis property value. The rate calculation type provides three methods of calculating the shipping cost based on the seller's selection/input:<ul><li><b>ITEM</b>: Specifies the flat rate shipping cost that buyers in the specified shipping region will pay. When this option is selected, information specified in the rate table overrides all shipping options/costs that are specified at the listing level. Buyers in the specified regions will only see the services provided in the rate table. Buyers in other regions that are not specified in the rate table will see the shipping services associated with the listing.</li><li><b>WEIGHT</b>: Seller can provide minimum shipping cost and an additional shipping cost per pound. The additional cost will be calculated based on the weight the seller provide at the time of listing. Buyers will see the total shipping cost and won’t see these calculations.  Buyers in the specified regions will only see the services provided in the rate table. Buyers in other regions that were not specified in the rate table, will see the shipping services associated with the listing.</li><li><b>SURCHARGE</b>: Lists surcharges for buyers within specified regions, or indicates a flat amount added to the shipping cost specified within an item's listing. Buyers will see only the total shipping cost as well as shipping services associated with the item's listing. If a SURCHARGE is specified in the rate table for certain regions, buyers in those regions will see the (shipping cost + SURCHARGE) total.</li></ul>
     * @param ShippingRateCalculationEnum|null $value Value to set for the rateTableBasis property.
    */
    public function setRateTableBasis(?ShippingRateCalculationEnum $value): void {
        $this->rateTableBasis = $value;
    }

    /**
     * Sets the rateTableId property value. A unique, system-generated ID assigned to the shipping rate table when it is initially created.
     * @param string|null $value Value to set for the rateTableId property.
    */
    public function setRateTableId(?string $value): void {
        $this->rateTableId = $value;
    }

    /**
     * Sets the shippingOptionType property value. The region serviced by the shipping rate table. Valid values are:<ul><li><b>DOMESTIC</b>: Indicates that the shipping rate table applies to shipping destinations within the country in which an item has been listed (i.e., the <i>source</i> country).</li><li><b>INTERNATIONAL</b>: Indicates that the shipping rate table applies to shipping destinations outside of the country in which an item has been listed.</li></ul>
     * @param ShippingOptionTypeEnum|null $value Value to set for the shippingOptionType property.
    */
    public function setShippingOptionType(?ShippingOptionTypeEnum $value): void {
        $this->shippingOptionType = $value;
    }

}
