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
 * This type is used by the <b>shippingServices</b> array, an array that provides details about every domestic and international shipping service option that is defined for the policy.
*/
class ShippingService implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $additionalShippingCost This container is used by the seller to cover the use case when a single buyer purchases multiple quantities of the same line item. This cost cannot exceed the corresponding <b>shippingCost</b> value. A seller will generally set this field when he/she wants to pass on a shipping discount to the buyer if that buyer purchases multiple quantities of a line item. <br><br>The seller can ship multiple quantities of the line item in the same package and pass on the shipping savings to the buyer.<br><br>If this field is not set, and a buyer purchases multiple quantities of an item, the seller can technically charge the same cost set in the <b>shippingCost</b> container for each individual item, but in general, it behooves both the seller and the buyer (and saves both parties money) if they discuss combined shipping.<br><br>This field is not applicable to auction listings or single-quantity, fixed-price listings.<br><br>This container is returned if set.
    */
    private ?Amount $additionalShippingCost = null;
    
    /**
     * @var bool|null $buyerResponsibleForPickup This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to pick up the purchased motor vehicle after full payment is made. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
    */
    private ?bool $buyerResponsibleForPickup = null;
    
    /**
     * @var bool|null $buyerResponsibleForShipping This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to arrange for shipment of a motor vehicle. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
    */
    private ?bool $buyerResponsibleForShipping = null;
    
    /**
     * @var bool|null $freeShipping This field is included and set to <code>true</code> if the seller offers a free domestic shipping option to the buyer. <br><br>This field can only be included and set to <code>true</code> for the first domestic shipping service option specified in the <b>shippingServices</b> array (it is ignored if set for subsequent shipping services or for any international shipping service option). <br><br>The first specified shipping service option has a <b>sortOrder</b> value of <code>1</code> or if the <b>sortOrderId</b> field is not used, it is the shipping service option that's specified first in the <b>shippingServices</b> array.<br><br>This container is returned if set.
    */
    private ?bool $freeShipping = null;
    
    /**
     * @var string|null $shippingCarrierCode This field sets/indicates the shipping carrier, such as <code>USPS</code>, <code>FedEx</code>, or <code>UPS</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping carrier enum values for a specified eBay marketplace, the <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingCarrierDetails</code>. The enum values for each shipping carriers can be found in each <b>ShippingCarrierDetails.ShippingCarrier</b> field in the response payload.<br><br> This field is actually optional, as the shipping carrier is also tied into the <b>shippingServiceCode</b> enum value, and that field is required for every specified shipping service option.<br><br>This field is returned if set.
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * @var Amount|null $shippingCost This container is used to set the shipping cost to ship one item using the corresponding shipping service option. This container is conditionally required if the seller is using flat-rate shipping and is not using a domestic or international shipping rate table. <br><br>This container is not necessary for calculated shipping, since eBay will calculate the shipping cost and display it in the View Item page based off of the potential buyer's ship-to location.<br><br>This value is automatically set to <code>0.0</code> for the first specified domestic shipping service option and if the corresponding <b>freeShipping</b> field is set to <code>true</code>.  <br><br>This container is returned if set for the policy.
    */
    private ?Amount $shippingCost = null;
    
    /**
     * @var string|null $shippingServiceCode This field sets/indicates the domestic or international shipping service option, such as <code>USPSPriority</code>, <code>FedEx2Day</code>, or <code>UPS3rdDay</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping service option enum values for a specified eBay marketplace, the <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingServiceDetails</code>. <br><br>The enum values for each shipping service option can be found in each <b>ShippingServiceDetails.ShippingService</b> field in the response payload. The seller must make sure that the shipping service option is still valid, which is indicated by a <code>true</code> value in the corresponding <b>ValidForSellingFlow</b> boolean field. International shipping service options are typically returned at the top of the response payload, and are indicated by an <b>InternationalService</b> boolean field that reads <code>true</code>. <br><br>The <b>InternationalService</b> boolean field is not returned at all for domestic shipping service options. <br><br> This field is required for every specified shipping service option.
    */
    private ?string $shippingServiceCode = null;
    
    /**
     * @var RegionSet|null $shipToLocations This container is used to set the ship-to locations applicable to the corresponding shipping service option. Although the <b>regionExcluded</b> container is defined for <b>RegionSet</b> type and could technically be used here, it is recommened that only the <b>regionIncluded</b> container be used at the shipping service level. The excluded shipping regions (if any) can instead be set up in the top-level <b>regionExcluded</b> container. <br><br>The <b>regionIncluded</b> and <b>regionExcluded</b> containers define the geographical regions/countries/states or provinces/domestic regions where the seller does and doesn't ship to with this fulfillment policy.<br><br>To retrieve the valid geographical shipping region values, two-digit country values, or special domestic regions for an eBay marketplace, call <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> with <b>DetailName</b> value set to <code>ExcludeShippingLocationDetails</code>, then review the <b>ExcludeShippingLocationDetails</b> containers in the response for the strings you use in the <b>regionIncluded.regionName</b> field. <ul><li>For valid geographical region names, look for the <code>ExcludeShippingLocationDetails</code> containers in the <b>GeteBayDetails</b> response where the <b>Region</b> value is <code>Worldwide</code>, and the valid values will be shown in the corresponding <b>Location</b> fields.</li> <li>For valid two-digit country codes, look for <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b> response where the <b>Region</b> value is one of the defined geographical regions, and the valid values will be shown in the corresponding <b>Location</b> fields. Alternatively, you can find the two-digit country code values in the <a href="/api-docs/sell/account/types/ba:CountryCodeEnum">CountryCodeEnum</a> type definition.</li>  <li>For valid domestic region values, look for <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b> response where the <b>Region</b> value is either <code>Domestic Location</code> or <code>Additional Locations</code>, and the valid values will be shown in the corresponding <b>Location</b> fields.</li></ul> The <code>STATE_OR_PROVINCE</code> region type is only applicable to the US and Canada, and valid values for US states are the same <a href="https://about.usps.com/who-we-are/postal-history/state-abbreviations.htm ">two-digit abbreviations</a> used by the United States Postal Service, and valid values for Canadian provinces and territories are the same <a href="https://www.canadapost-postescanada.ca/cpc/en/support/articles/addressing-guidelines/symbols-and-abbreviations.page ">two-digit abbreviations</a> used by the Canada Post.
    */
    private ?RegionSet $shipToLocations = null;
    
    /**
     * @var int|null $sortOrder The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br><br>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br><br><b>Minimum</b>: 1<br><b>Maximum</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
    */
    private ?int $sortOrder = null;
    
    /**
     * @var Amount|null $surcharge <span class="tablenote"> <strong>Note: DO NOT USE THIS FIELD.</strong> Shipping surcharges for domestic shipping service options can no longer be set with fulfillment business policies, except through shipping rate tables. <br><br>To do this, a seller would set up a surcharge-based shipping rate table and specify the surcharge in that table. Then, the seller would need to associate this shipping rate table to the fulfillment business policy by specifying the unique ID of the shipping rate table through the <b>shippingOptions.rateTableId</b> field.</span><br>Shipping surcharges cannot be applied at all to international shipping service options.
    */
    private ?Amount $surcharge = null;
    
    /**
     * Instantiates a new ShippingService and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingService
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingService {
        return new ShippingService();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalShippingCost property value. This container is used by the seller to cover the use case when a single buyer purchases multiple quantities of the same line item. This cost cannot exceed the corresponding <b>shippingCost</b> value. A seller will generally set this field when he/she wants to pass on a shipping discount to the buyer if that buyer purchases multiple quantities of a line item. <br><br>The seller can ship multiple quantities of the line item in the same package and pass on the shipping savings to the buyer.<br><br>If this field is not set, and a buyer purchases multiple quantities of an item, the seller can technically charge the same cost set in the <b>shippingCost</b> container for each individual item, but in general, it behooves both the seller and the buyer (and saves both parties money) if they discuss combined shipping.<br><br>This field is not applicable to auction listings or single-quantity, fixed-price listings.<br><br>This container is returned if set.
     * @return Amount|null
    */
    public function getAdditionalShippingCost(): ?Amount {
        return $this->additionalShippingCost;
    }

    /**
     * Gets the buyerResponsibleForPickup property value. This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to pick up the purchased motor vehicle after full payment is made. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
     * @return bool|null
    */
    public function getBuyerResponsibleForPickup(): ?bool {
        return $this->buyerResponsibleForPickup;
    }

    /**
     * Gets the buyerResponsibleForShipping property value. This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to arrange for shipment of a motor vehicle. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
     * @return bool|null
    */
    public function getBuyerResponsibleForShipping(): ?bool {
        return $this->buyerResponsibleForShipping;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalShippingCost' => fn(ParseNode $n) => $o->setAdditionalShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'buyerResponsibleForPickup' => fn(ParseNode $n) => $o->setBuyerResponsibleForPickup($n->getBooleanValue()),
            'buyerResponsibleForShipping' => fn(ParseNode $n) => $o->setBuyerResponsibleForShipping($n->getBooleanValue()),
            'freeShipping' => fn(ParseNode $n) => $o->setFreeShipping($n->getBooleanValue()),
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingServiceCode' => fn(ParseNode $n) => $o->setShippingServiceCode($n->getStringValue()),
            'shipToLocations' => fn(ParseNode $n) => $o->setShipToLocations($n->getObjectValue([RegionSet::class, 'createFromDiscriminatorValue'])),
            'sortOrder' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
            'surcharge' => fn(ParseNode $n) => $o->setSurcharge($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the freeShipping property value. This field is included and set to <code>true</code> if the seller offers a free domestic shipping option to the buyer. <br><br>This field can only be included and set to <code>true</code> for the first domestic shipping service option specified in the <b>shippingServices</b> array (it is ignored if set for subsequent shipping services or for any international shipping service option). <br><br>The first specified shipping service option has a <b>sortOrder</b> value of <code>1</code> or if the <b>sortOrderId</b> field is not used, it is the shipping service option that's specified first in the <b>shippingServices</b> array.<br><br>This container is returned if set.
     * @return bool|null
    */
    public function getFreeShipping(): ?bool {
        return $this->freeShipping;
    }

    /**
     * Gets the shippingCarrierCode property value. This field sets/indicates the shipping carrier, such as <code>USPS</code>, <code>FedEx</code>, or <code>UPS</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping carrier enum values for a specified eBay marketplace, the <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingCarrierDetails</code>. The enum values for each shipping carriers can be found in each <b>ShippingCarrierDetails.ShippingCarrier</b> field in the response payload.<br><br> This field is actually optional, as the shipping carrier is also tied into the <b>shippingServiceCode</b> enum value, and that field is required for every specified shipping service option.<br><br>This field is returned if set.
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Gets the shippingCost property value. This container is used to set the shipping cost to ship one item using the corresponding shipping service option. This container is conditionally required if the seller is using flat-rate shipping and is not using a domestic or international shipping rate table. <br><br>This container is not necessary for calculated shipping, since eBay will calculate the shipping cost and display it in the View Item page based off of the potential buyer's ship-to location.<br><br>This value is automatically set to <code>0.0</code> for the first specified domestic shipping service option and if the corresponding <b>freeShipping</b> field is set to <code>true</code>.  <br><br>This container is returned if set for the policy.
     * @return Amount|null
    */
    public function getShippingCost(): ?Amount {
        return $this->shippingCost;
    }

    /**
     * Gets the shippingServiceCode property value. This field sets/indicates the domestic or international shipping service option, such as <code>USPSPriority</code>, <code>FedEx2Day</code>, or <code>UPS3rdDay</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping service option enum values for a specified eBay marketplace, the <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingServiceDetails</code>. <br><br>The enum values for each shipping service option can be found in each <b>ShippingServiceDetails.ShippingService</b> field in the response payload. The seller must make sure that the shipping service option is still valid, which is indicated by a <code>true</code> value in the corresponding <b>ValidForSellingFlow</b> boolean field. International shipping service options are typically returned at the top of the response payload, and are indicated by an <b>InternationalService</b> boolean field that reads <code>true</code>. <br><br>The <b>InternationalService</b> boolean field is not returned at all for domestic shipping service options. <br><br> This field is required for every specified shipping service option.
     * @return string|null
    */
    public function getShippingServiceCode(): ?string {
        return $this->shippingServiceCode;
    }

    /**
     * Gets the shipToLocations property value. This container is used to set the ship-to locations applicable to the corresponding shipping service option. Although the <b>regionExcluded</b> container is defined for <b>RegionSet</b> type and could technically be used here, it is recommened that only the <b>regionIncluded</b> container be used at the shipping service level. The excluded shipping regions (if any) can instead be set up in the top-level <b>regionExcluded</b> container. <br><br>The <b>regionIncluded</b> and <b>regionExcluded</b> containers define the geographical regions/countries/states or provinces/domestic regions where the seller does and doesn't ship to with this fulfillment policy.<br><br>To retrieve the valid geographical shipping region values, two-digit country values, or special domestic regions for an eBay marketplace, call <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> with <b>DetailName</b> value set to <code>ExcludeShippingLocationDetails</code>, then review the <b>ExcludeShippingLocationDetails</b> containers in the response for the strings you use in the <b>regionIncluded.regionName</b> field. <ul><li>For valid geographical region names, look for the <code>ExcludeShippingLocationDetails</code> containers in the <b>GeteBayDetails</b> response where the <b>Region</b> value is <code>Worldwide</code>, and the valid values will be shown in the corresponding <b>Location</b> fields.</li> <li>For valid two-digit country codes, look for <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b> response where the <b>Region</b> value is one of the defined geographical regions, and the valid values will be shown in the corresponding <b>Location</b> fields. Alternatively, you can find the two-digit country code values in the <a href="/api-docs/sell/account/types/ba:CountryCodeEnum">CountryCodeEnum</a> type definition.</li>  <li>For valid domestic region values, look for <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b> response where the <b>Region</b> value is either <code>Domestic Location</code> or <code>Additional Locations</code>, and the valid values will be shown in the corresponding <b>Location</b> fields.</li></ul> The <code>STATE_OR_PROVINCE</code> region type is only applicable to the US and Canada, and valid values for US states are the same <a href="https://about.usps.com/who-we-are/postal-history/state-abbreviations.htm ">two-digit abbreviations</a> used by the United States Postal Service, and valid values for Canadian provinces and territories are the same <a href="https://www.canadapost-postescanada.ca/cpc/en/support/articles/addressing-guidelines/symbols-and-abbreviations.page ">two-digit abbreviations</a> used by the Canada Post.
     * @return RegionSet|null
    */
    public function getShipToLocations(): ?RegionSet {
        return $this->shipToLocations;
    }

    /**
     * Gets the sortOrder property value. The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br><br>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br><br><b>Minimum</b>: 1<br><b>Maximum</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
     * @return int|null
    */
    public function getSortOrder(): ?int {
        return $this->sortOrder;
    }

    /**
     * Gets the surcharge property value. <span class="tablenote"> <strong>Note: DO NOT USE THIS FIELD.</strong> Shipping surcharges for domestic shipping service options can no longer be set with fulfillment business policies, except through shipping rate tables. <br><br>To do this, a seller would set up a surcharge-based shipping rate table and specify the surcharge in that table. Then, the seller would need to associate this shipping rate table to the fulfillment business policy by specifying the unique ID of the shipping rate table through the <b>shippingOptions.rateTableId</b> field.</span><br>Shipping surcharges cannot be applied at all to international shipping service options.
     * @return Amount|null
    */
    public function getSurcharge(): ?Amount {
        return $this->surcharge;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('additionalShippingCost', $this->getAdditionalShippingCost());
        $writer->writeBooleanValue('buyerResponsibleForPickup', $this->getBuyerResponsibleForPickup());
        $writer->writeBooleanValue('buyerResponsibleForShipping', $this->getBuyerResponsibleForShipping());
        $writer->writeBooleanValue('freeShipping', $this->getFreeShipping());
        $writer->writeStringValue('shippingCarrierCode', $this->getShippingCarrierCode());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
        $writer->writeStringValue('shippingServiceCode', $this->getShippingServiceCode());
        $writer->writeObjectValue('shipToLocations', $this->getShipToLocations());
        $writer->writeIntegerValue('sortOrder', $this->getSortOrder());
        $writer->writeObjectValue('surcharge', $this->getSurcharge());
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
     * Sets the additionalShippingCost property value. This container is used by the seller to cover the use case when a single buyer purchases multiple quantities of the same line item. This cost cannot exceed the corresponding <b>shippingCost</b> value. A seller will generally set this field when he/she wants to pass on a shipping discount to the buyer if that buyer purchases multiple quantities of a line item. <br><br>The seller can ship multiple quantities of the line item in the same package and pass on the shipping savings to the buyer.<br><br>If this field is not set, and a buyer purchases multiple quantities of an item, the seller can technically charge the same cost set in the <b>shippingCost</b> container for each individual item, but in general, it behooves both the seller and the buyer (and saves both parties money) if they discuss combined shipping.<br><br>This field is not applicable to auction listings or single-quantity, fixed-price listings.<br><br>This container is returned if set.
     * @param Amount|null $value Value to set for the additionalShippingCost property.
    */
    public function setAdditionalShippingCost(?Amount $value): void {
        $this->additionalShippingCost = $value;
    }

    /**
     * Sets the buyerResponsibleForPickup property value. This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to pick up the purchased motor vehicle after full payment is made. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
     * @param bool|null $value Value to set for the buyerResponsibleForPickup property.
    */
    public function setBuyerResponsibleForPickup(?bool $value): void {
        $this->buyerResponsibleForPickup = $value;
    }

    /**
     * Sets the buyerResponsibleForShipping property value. This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to arrange for shipment of a motor vehicle. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
     * @param bool|null $value Value to set for the buyerResponsibleForShipping property.
    */
    public function setBuyerResponsibleForShipping(?bool $value): void {
        $this->buyerResponsibleForShipping = $value;
    }

    /**
     * Sets the freeShipping property value. This field is included and set to <code>true</code> if the seller offers a free domestic shipping option to the buyer. <br><br>This field can only be included and set to <code>true</code> for the first domestic shipping service option specified in the <b>shippingServices</b> array (it is ignored if set for subsequent shipping services or for any international shipping service option). <br><br>The first specified shipping service option has a <b>sortOrder</b> value of <code>1</code> or if the <b>sortOrderId</b> field is not used, it is the shipping service option that's specified first in the <b>shippingServices</b> array.<br><br>This container is returned if set.
     * @param bool|null $value Value to set for the freeShipping property.
    */
    public function setFreeShipping(?bool $value): void {
        $this->freeShipping = $value;
    }

    /**
     * Sets the shippingCarrierCode property value. This field sets/indicates the shipping carrier, such as <code>USPS</code>, <code>FedEx</code>, or <code>UPS</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping carrier enum values for a specified eBay marketplace, the <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingCarrierDetails</code>. The enum values for each shipping carriers can be found in each <b>ShippingCarrierDetails.ShippingCarrier</b> field in the response payload.<br><br> This field is actually optional, as the shipping carrier is also tied into the <b>shippingServiceCode</b> enum value, and that field is required for every specified shipping service option.<br><br>This field is returned if set.
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

    /**
     * Sets the shippingCost property value. This container is used to set the shipping cost to ship one item using the corresponding shipping service option. This container is conditionally required if the seller is using flat-rate shipping and is not using a domestic or international shipping rate table. <br><br>This container is not necessary for calculated shipping, since eBay will calculate the shipping cost and display it in the View Item page based off of the potential buyer's ship-to location.<br><br>This value is automatically set to <code>0.0</code> for the first specified domestic shipping service option and if the corresponding <b>freeShipping</b> field is set to <code>true</code>.  <br><br>This container is returned if set for the policy.
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

    /**
     * Sets the shippingServiceCode property value. This field sets/indicates the domestic or international shipping service option, such as <code>USPSPriority</code>, <code>FedEx2Day</code>, or <code>UPS3rdDay</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping service option enum values for a specified eBay marketplace, the <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingServiceDetails</code>. <br><br>The enum values for each shipping service option can be found in each <b>ShippingServiceDetails.ShippingService</b> field in the response payload. The seller must make sure that the shipping service option is still valid, which is indicated by a <code>true</code> value in the corresponding <b>ValidForSellingFlow</b> boolean field. International shipping service options are typically returned at the top of the response payload, and are indicated by an <b>InternationalService</b> boolean field that reads <code>true</code>. <br><br>The <b>InternationalService</b> boolean field is not returned at all for domestic shipping service options. <br><br> This field is required for every specified shipping service option.
     * @param string|null $value Value to set for the shippingServiceCode property.
    */
    public function setShippingServiceCode(?string $value): void {
        $this->shippingServiceCode = $value;
    }

    /**
     * Sets the shipToLocations property value. This container is used to set the ship-to locations applicable to the corresponding shipping service option. Although the <b>regionExcluded</b> container is defined for <b>RegionSet</b> type and could technically be used here, it is recommened that only the <b>regionIncluded</b> container be used at the shipping service level. The excluded shipping regions (if any) can instead be set up in the top-level <b>regionExcluded</b> container. <br><br>The <b>regionIncluded</b> and <b>regionExcluded</b> containers define the geographical regions/countries/states or provinces/domestic regions where the seller does and doesn't ship to with this fulfillment policy.<br><br>To retrieve the valid geographical shipping region values, two-digit country values, or special domestic regions for an eBay marketplace, call <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> with <b>DetailName</b> value set to <code>ExcludeShippingLocationDetails</code>, then review the <b>ExcludeShippingLocationDetails</b> containers in the response for the strings you use in the <b>regionIncluded.regionName</b> field. <ul><li>For valid geographical region names, look for the <code>ExcludeShippingLocationDetails</code> containers in the <b>GeteBayDetails</b> response where the <b>Region</b> value is <code>Worldwide</code>, and the valid values will be shown in the corresponding <b>Location</b> fields.</li> <li>For valid two-digit country codes, look for <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b> response where the <b>Region</b> value is one of the defined geographical regions, and the valid values will be shown in the corresponding <b>Location</b> fields. Alternatively, you can find the two-digit country code values in the <a href="/api-docs/sell/account/types/ba:CountryCodeEnum">CountryCodeEnum</a> type definition.</li>  <li>For valid domestic region values, look for <code>ExcludeShippingLocationDetails</code> in the <b>GeteBayDetails</b> response where the <b>Region</b> value is either <code>Domestic Location</code> or <code>Additional Locations</code>, and the valid values will be shown in the corresponding <b>Location</b> fields.</li></ul> The <code>STATE_OR_PROVINCE</code> region type is only applicable to the US and Canada, and valid values for US states are the same <a href="https://about.usps.com/who-we-are/postal-history/state-abbreviations.htm ">two-digit abbreviations</a> used by the United States Postal Service, and valid values for Canadian provinces and territories are the same <a href="https://www.canadapost-postescanada.ca/cpc/en/support/articles/addressing-guidelines/symbols-and-abbreviations.page ">two-digit abbreviations</a> used by the Canada Post.
     * @param RegionSet|null $value Value to set for the shipToLocations property.
    */
    public function setShipToLocations(?RegionSet $value): void {
        $this->shipToLocations = $value;
    }

    /**
     * Sets the sortOrder property value. The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br><br>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br><br><b>Minimum</b>: 1<br><b>Maximum</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
     * @param int|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?int $value): void {
        $this->sortOrder = $value;
    }

    /**
     * Sets the surcharge property value. <span class="tablenote"> <strong>Note: DO NOT USE THIS FIELD.</strong> Shipping surcharges for domestic shipping service options can no longer be set with fulfillment business policies, except through shipping rate tables. <br><br>To do this, a seller would set up a surcharge-based shipping rate table and specify the surcharge in that table. Then, the seller would need to associate this shipping rate table to the fulfillment business policy by specifying the unique ID of the shipping rate table through the <b>shippingOptions.rateTableId</b> field.</span><br>Shipping surcharges cannot be applied at all to international shipping service options.
     * @param Amount|null $value Value to set for the surcharge property.
    */
    public function setSurcharge(?Amount $value): void {
        $this->surcharge = $value;
    }

}
