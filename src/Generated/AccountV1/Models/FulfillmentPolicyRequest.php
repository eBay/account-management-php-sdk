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
 * This root container defines a seller's fulfillment policy for a specific marketplace and category group. This type is used when creating or updating a fulfillment business policy.
*/
class FulfillmentPolicyRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CategoryType>|null $categoryTypes This container is used to specify whether the fulfillment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
    */
    private ?array $categoryTypes = null;
    
    /**
     * @var string|null $description A seller-defined description of the fulfillment policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $freightShipping This field is included and set to <code>true</code> if freight shipping is available for the item. Freight shipping can be used for large items over 150 lbs.<br><br><b>Default</b>: false
    */
    private ?bool $freightShipping = null;
    
    /**
     * @var bool|null $globalShipping <span class="tablenote"><b>Note</b>: This field is only applicable for the eBay United Kingdom marketplace (<code>EBAY_GB</code>).</span><br>This field is included and set to <code>true</code> if the seller wants to use the Global Shipping Program for international shipments. See the <a href="https://pages.ebay.com/help/sell/shipping-globally.html ">Global Shipping Program</a> help topic for more details and requirements on the Global Shipping Program.<br><br>A seller can use a combination of the Global Shipping Program and other international shipping services. <br><br>If set to <code>false</code> or if the field is omitted, the seller has to manually specifying individual international shipping services (if the seller ships internationally), as described in <a href="https://developer.ebay.com/api-docs/sell/static/seller-accounts/ht_shipping-worldwide.html ">Setting up worldwide shipping</a>. <br><br>Sellers opt in or out of the Global Shipping Program through the Shipping preferences in My eBay.<br><br>eBay International Shipping is an account level setting; no field needs to be set in a Fulfillment business policy to enable eBay International Shipping. If a US seller's account is opted in to eBay International Shipping, this shipping option will be enabled automatically for all listings where international shipping is available. A US seller who is opted in to eBay International Shipping can also specify individual international shipping service options for a Fulfillment business policy.<p><b>Default</b>: false</p>
    */
    private ?bool $globalShipping = null;
    
    /**
     * @var TimeDuration|null $handlingTime A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
    */
    private ?TimeDuration $handlingTime = null;
    
    /**
     * @var bool|null $localPickup This field should be included and set to <code>true</code> if local pickup is one of the fulfillment options available to the buyer. It is possible for the seller to make local pickup and some shipping service options available to the buyer.<br><br>With local pickup, the buyer and seller make arrangements for pickup time and location.<br><br><b>Default</b>: <code>false</code>
    */
    private ?bool $localPickup = null;
    
    /**
     * @var string|null $marketplaceId The ID of the eBay marketplace to which this fulfillment policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var string|null $name A seller-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. <br><br><b>Max length</b>: 64
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $pickupDropOff This field should be included and set to <code>true</code> if the seller offers the "Click and Collect" feature for an item. <p>To enable "Click and Collect" on a listing, a seller must be eligible for Click and Collect. Currently, Click and Collect is available to only large retail merchants selling in the eBay AU, UK, DE, FR, and IT marketplaces.</p>  <p>In addition to setting this field to <code>true</code>, the merchant must also do the following to enable the "Click and Collect" option on a listing: <ul><li>Have inventory for the product at one or more physical stores tied to the merchant's account. <p>Sellers can use the <b>createInventoryLocation</b> method in the Inventory API to associate physical stores to their account and they can then add inventory to specific store locations.</p></li><li>Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: <ul><li>Set the <b>immediatePay</b> flag in the payment policy to 'true'.</li><li>Have a valid store location with a complete street address.</li></ul></li></ul><p>When a merchant successfully lists an item with Click and Collect, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the "Available for Click and Collect" option on the listing, along with information on the closest store that has the item.</p><b>Default</b>: false
    */
    private ?bool $pickupDropOff = null;
    
    /**
     * @var array<ShippingOption>|null $shippingOptions This array is used to provide detailed information on the domestic and international shipping options available for the policy. <br><br>A separate <b>ShippingOption</b> object is required for domestic shipping service options and for international shipping service options (if the seller ships to international locations). <ul><li>The <b>optionType</b> field is used to indicate whether the <b>ShippingOption</b> object applies to domestic or international shipping, and the <b>costType</b> field is used to indicate whether flat-rate shipping or calculated shipping will be used.</li> <li>The <b>rateTableId</b> field can be used to associate a defined shipping rate table to the policy, and the <b>packageHandlingCost</b> container can be used to set a handling charge for the policy.</li></ul> <p>A separate <b>ShippingServices</b> object will be used to specify cost and other details for every available domestic and international shipping service option. </p>
    */
    private ?array $shippingOptions = null;
    
    /**
     * @var RegionSet|null $shipToLocations This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b> arrays, which indicate the areas to where the seller does and doesn't ship.
    */
    private ?RegionSet $shipToLocations = null;
    
    /**
     * Instantiates a new FulfillmentPolicyRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FulfillmentPolicyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FulfillmentPolicyRequest {
        return new FulfillmentPolicyRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryTypes property value. This container is used to specify whether the fulfillment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
     * @return array<CategoryType>|null
    */
    public function getCategoryTypes(): ?array {
        return $this->categoryTypes;
    }

    /**
     * Gets the description property value. A seller-defined description of the fulfillment policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryTypes' => fn(ParseNode $n) => $o->setCategoryTypes($n->getCollectionOfObjectValues([CategoryType::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'freightShipping' => fn(ParseNode $n) => $o->setFreightShipping($n->getBooleanValue()),
            'globalShipping' => fn(ParseNode $n) => $o->setGlobalShipping($n->getBooleanValue()),
            'handlingTime' => fn(ParseNode $n) => $o->setHandlingTime($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'localPickup' => fn(ParseNode $n) => $o->setLocalPickup($n->getBooleanValue()),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'pickupDropOff' => fn(ParseNode $n) => $o->setPickupDropOff($n->getBooleanValue()),
            'shippingOptions' => fn(ParseNode $n) => $o->setShippingOptions($n->getCollectionOfObjectValues([ShippingOption::class, 'createFromDiscriminatorValue'])),
            'shipToLocations' => fn(ParseNode $n) => $o->setShipToLocations($n->getObjectValue([RegionSet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the freightShipping property value. This field is included and set to <code>true</code> if freight shipping is available for the item. Freight shipping can be used for large items over 150 lbs.<br><br><b>Default</b>: false
     * @return bool|null
    */
    public function getFreightShipping(): ?bool {
        return $this->freightShipping;
    }

    /**
     * Gets the globalShipping property value. <span class="tablenote"><b>Note</b>: This field is only applicable for the eBay United Kingdom marketplace (<code>EBAY_GB</code>).</span><br>This field is included and set to <code>true</code> if the seller wants to use the Global Shipping Program for international shipments. See the <a href="https://pages.ebay.com/help/sell/shipping-globally.html ">Global Shipping Program</a> help topic for more details and requirements on the Global Shipping Program.<br><br>A seller can use a combination of the Global Shipping Program and other international shipping services. <br><br>If set to <code>false</code> or if the field is omitted, the seller has to manually specifying individual international shipping services (if the seller ships internationally), as described in <a href="https://developer.ebay.com/api-docs/sell/static/seller-accounts/ht_shipping-worldwide.html ">Setting up worldwide shipping</a>. <br><br>Sellers opt in or out of the Global Shipping Program through the Shipping preferences in My eBay.<br><br>eBay International Shipping is an account level setting; no field needs to be set in a Fulfillment business policy to enable eBay International Shipping. If a US seller's account is opted in to eBay International Shipping, this shipping option will be enabled automatically for all listings where international shipping is available. A US seller who is opted in to eBay International Shipping can also specify individual international shipping service options for a Fulfillment business policy.<p><b>Default</b>: false</p>
     * @return bool|null
    */
    public function getGlobalShipping(): ?bool {
        return $this->globalShipping;
    }

    /**
     * Gets the handlingTime property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @return TimeDuration|null
    */
    public function getHandlingTime(): ?TimeDuration {
        return $this->handlingTime;
    }

    /**
     * Gets the localPickup property value. This field should be included and set to <code>true</code> if local pickup is one of the fulfillment options available to the buyer. It is possible for the seller to make local pickup and some shipping service options available to the buyer.<br><br>With local pickup, the buyer and seller make arrangements for pickup time and location.<br><br><b>Default</b>: <code>false</code>
     * @return bool|null
    */
    public function getLocalPickup(): ?bool {
        return $this->localPickup;
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace to which this fulfillment policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the name property value. A seller-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. <br><br><b>Max length</b>: 64
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the pickupDropOff property value. This field should be included and set to <code>true</code> if the seller offers the "Click and Collect" feature for an item. <p>To enable "Click and Collect" on a listing, a seller must be eligible for Click and Collect. Currently, Click and Collect is available to only large retail merchants selling in the eBay AU, UK, DE, FR, and IT marketplaces.</p>  <p>In addition to setting this field to <code>true</code>, the merchant must also do the following to enable the "Click and Collect" option on a listing: <ul><li>Have inventory for the product at one or more physical stores tied to the merchant's account. <p>Sellers can use the <b>createInventoryLocation</b> method in the Inventory API to associate physical stores to their account and they can then add inventory to specific store locations.</p></li><li>Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: <ul><li>Set the <b>immediatePay</b> flag in the payment policy to 'true'.</li><li>Have a valid store location with a complete street address.</li></ul></li></ul><p>When a merchant successfully lists an item with Click and Collect, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the "Available for Click and Collect" option on the listing, along with information on the closest store that has the item.</p><b>Default</b>: false
     * @return bool|null
    */
    public function getPickupDropOff(): ?bool {
        return $this->pickupDropOff;
    }

    /**
     * Gets the shippingOptions property value. This array is used to provide detailed information on the domestic and international shipping options available for the policy. <br><br>A separate <b>ShippingOption</b> object is required for domestic shipping service options and for international shipping service options (if the seller ships to international locations). <ul><li>The <b>optionType</b> field is used to indicate whether the <b>ShippingOption</b> object applies to domestic or international shipping, and the <b>costType</b> field is used to indicate whether flat-rate shipping or calculated shipping will be used.</li> <li>The <b>rateTableId</b> field can be used to associate a defined shipping rate table to the policy, and the <b>packageHandlingCost</b> container can be used to set a handling charge for the policy.</li></ul> <p>A separate <b>ShippingServices</b> object will be used to specify cost and other details for every available domestic and international shipping service option. </p>
     * @return array<ShippingOption>|null
    */
    public function getShippingOptions(): ?array {
        return $this->shippingOptions;
    }

    /**
     * Gets the shipToLocations property value. This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b> arrays, which indicate the areas to where the seller does and doesn't ship.
     * @return RegionSet|null
    */
    public function getShipToLocations(): ?RegionSet {
        return $this->shipToLocations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('categoryTypes', $this->getCategoryTypes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('freightShipping', $this->getFreightShipping());
        $writer->writeBooleanValue('globalShipping', $this->getGlobalShipping());
        $writer->writeObjectValue('handlingTime', $this->getHandlingTime());
        $writer->writeBooleanValue('localPickup', $this->getLocalPickup());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('pickupDropOff', $this->getPickupDropOff());
        $writer->writeCollectionOfObjectValues('shippingOptions', $this->getShippingOptions());
        $writer->writeObjectValue('shipToLocations', $this->getShipToLocations());
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
     * Sets the categoryTypes property value. This container is used to specify whether the fulfillment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
     * @param array<CategoryType>|null $value Value to set for the categoryTypes property.
    */
    public function setCategoryTypes(?array $value): void {
        $this->categoryTypes = $value;
    }

    /**
     * Sets the description property value. A seller-defined description of the fulfillment policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the freightShipping property value. This field is included and set to <code>true</code> if freight shipping is available for the item. Freight shipping can be used for large items over 150 lbs.<br><br><b>Default</b>: false
     * @param bool|null $value Value to set for the freightShipping property.
    */
    public function setFreightShipping(?bool $value): void {
        $this->freightShipping = $value;
    }

    /**
     * Sets the globalShipping property value. <span class="tablenote"><b>Note</b>: This field is only applicable for the eBay United Kingdom marketplace (<code>EBAY_GB</code>).</span><br>This field is included and set to <code>true</code> if the seller wants to use the Global Shipping Program for international shipments. See the <a href="https://pages.ebay.com/help/sell/shipping-globally.html ">Global Shipping Program</a> help topic for more details and requirements on the Global Shipping Program.<br><br>A seller can use a combination of the Global Shipping Program and other international shipping services. <br><br>If set to <code>false</code> or if the field is omitted, the seller has to manually specifying individual international shipping services (if the seller ships internationally), as described in <a href="https://developer.ebay.com/api-docs/sell/static/seller-accounts/ht_shipping-worldwide.html ">Setting up worldwide shipping</a>. <br><br>Sellers opt in or out of the Global Shipping Program through the Shipping preferences in My eBay.<br><br>eBay International Shipping is an account level setting; no field needs to be set in a Fulfillment business policy to enable eBay International Shipping. If a US seller's account is opted in to eBay International Shipping, this shipping option will be enabled automatically for all listings where international shipping is available. A US seller who is opted in to eBay International Shipping can also specify individual international shipping service options for a Fulfillment business policy.<p><b>Default</b>: false</p>
     * @param bool|null $value Value to set for the globalShipping property.
    */
    public function setGlobalShipping(?bool $value): void {
        $this->globalShipping = $value;
    }

    /**
     * Sets the handlingTime property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @param TimeDuration|null $value Value to set for the handlingTime property.
    */
    public function setHandlingTime(?TimeDuration $value): void {
        $this->handlingTime = $value;
    }

    /**
     * Sets the localPickup property value. This field should be included and set to <code>true</code> if local pickup is one of the fulfillment options available to the buyer. It is possible for the seller to make local pickup and some shipping service options available to the buyer.<br><br>With local pickup, the buyer and seller make arrangements for pickup time and location.<br><br><b>Default</b>: <code>false</code>
     * @param bool|null $value Value to set for the localPickup property.
    */
    public function setLocalPickup(?bool $value): void {
        $this->localPickup = $value;
    }

    /**
     * Sets the marketplaceId property value. The ID of the eBay marketplace to which this fulfillment policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the name property value. A seller-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. <br><br><b>Max length</b>: 64
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the pickupDropOff property value. This field should be included and set to <code>true</code> if the seller offers the "Click and Collect" feature for an item. <p>To enable "Click and Collect" on a listing, a seller must be eligible for Click and Collect. Currently, Click and Collect is available to only large retail merchants selling in the eBay AU, UK, DE, FR, and IT marketplaces.</p>  <p>In addition to setting this field to <code>true</code>, the merchant must also do the following to enable the "Click and Collect" option on a listing: <ul><li>Have inventory for the product at one or more physical stores tied to the merchant's account. <p>Sellers can use the <b>createInventoryLocation</b> method in the Inventory API to associate physical stores to their account and they can then add inventory to specific store locations.</p></li><li>Set an immediate payment requirement on the item. The immediate payment feature requires the seller to: <ul><li>Set the <b>immediatePay</b> flag in the payment policy to 'true'.</li><li>Have a valid store location with a complete street address.</li></ul></li></ul><p>When a merchant successfully lists an item with Click and Collect, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the "Available for Click and Collect" option on the listing, along with information on the closest store that has the item.</p><b>Default</b>: false
     * @param bool|null $value Value to set for the pickupDropOff property.
    */
    public function setPickupDropOff(?bool $value): void {
        $this->pickupDropOff = $value;
    }

    /**
     * Sets the shippingOptions property value. This array is used to provide detailed information on the domestic and international shipping options available for the policy. <br><br>A separate <b>ShippingOption</b> object is required for domestic shipping service options and for international shipping service options (if the seller ships to international locations). <ul><li>The <b>optionType</b> field is used to indicate whether the <b>ShippingOption</b> object applies to domestic or international shipping, and the <b>costType</b> field is used to indicate whether flat-rate shipping or calculated shipping will be used.</li> <li>The <b>rateTableId</b> field can be used to associate a defined shipping rate table to the policy, and the <b>packageHandlingCost</b> container can be used to set a handling charge for the policy.</li></ul> <p>A separate <b>ShippingServices</b> object will be used to specify cost and other details for every available domestic and international shipping service option. </p>
     * @param array<ShippingOption>|null $value Value to set for the shippingOptions property.
    */
    public function setShippingOptions(?array $value): void {
        $this->shippingOptions = $value;
    }

    /**
     * Sets the shipToLocations property value. This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b> arrays, which indicate the areas to where the seller does and doesn't ship.
     * @param RegionSet|null $value Value to set for the shipToLocations property.
    */
    public function setShipToLocations(?RegionSet $value): void {
        $this->shipToLocations = $value;
    }

}
