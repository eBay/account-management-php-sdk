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
 * This type is used by the <b>shippingOptions</b> array, which is used to provide detailed information on the domestic and international shipping options available for the policy. A separate <b>ShippingOption</b> object covers domestic shipping service options and international shipping service options (if the seller ships to international locations).
*/
class ShippingOption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $costType This field defines whether the shipping cost model is <code>FLAT_RATE</code> (the same rate for all buyers, or buyers within a region if shipping rate tables are used) or <code>CALCULATED</code> (the shipping rate varies by the ship-to location and size and weight of the package). <br><br>This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum'>eBay API documentation</a>
    */
    private ?string $costType = null;
    
    /**
     * @var Amount|null $insuranceFee A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
    */
    private ?Amount $insuranceFee = null;
    
    /**
     * @var bool|null $insuranceOffered This field has been deprecated. <br><br>Shipping insurance is offered only via a shipping carrier's shipping services and is no longer available via eBay shipping policies.
    */
    private ?bool $insuranceOffered = null;
    
    /**
     * @var string|null $optionType This field is used to indicate if the corresponding shipping service options (under <b>shippingServices</b> array) are domestic or international shipping service options. This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
    */
    private ?string $optionType = null;
    
    /**
     * @var Amount|null $packageHandlingCost A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
    */
    private ?Amount $packageHandlingCost = null;
    
    /**
     * @var string|null $rateTableId This field is used if the seller wants to associate a domestic or international shipping rate table to the fulfillment business policy. The <a href="/api-docs/sell/account/resources/rate_table/methods/getRateTables">getRateTables</a> method can be used to retrieve shipping rate table IDs.<br><br>With domestic and international shipping rate tables, the seller can set different shipping costs based on shipping regions and shipping speed/level of service (one-day, expedited, standard, economy). There are also options to add additional per-weight and handling charges.<br><br>Sellers need to be careful that shipping rate tables match the corresponding shipping service options. In other words, a domestic shipping rate table must not be specified in the same container where international shipping service options are being specified, and vice versa, and the shipping speed/level of service of the provided shipping service options should match the shipping speed/level of service options that are defined in the shipping rate tables. <br><br>For example, if the corresponding shipping rate table defines costs for one-day shipping services, there should be at least one one-day shipping service option specified under the <b>shippingServices</b> array.<br><br>This field is returned if set.
    */
    private ?string $rateTableId = null;
    
    /**
     * @var string|null $shippingDiscountProfileId This field is the unique identifier of a seller's domestic or international shipping discount profile. If a buyer satisfies the requirements of the discount rule, this buyer will receive a shipping discount for the order. <br><br>The seller can create and manage shipping discount profiles using (Get/Set) <b>ShippingDiscountProfiles</b> calls in the <b>Trading API</b> or through the <b>Shipping Preferences</b> in <b>My eBay</b>.
    */
    private ?string $shippingDiscountProfileId = null;
    
    /**
     * @var bool|null $shippingPromotionOffered This boolean indicates whether or not the seller has set up a promotional shipping discount that will be available to buyers who satisfy the requirements of the shipping discount rule. <br><br>The seller can create and manage shipping promotional discounts using (Get/Set) <b>ShippingDiscountProfiles</b> calls in the <b>Trading API</b> or through the <b>Shipping Preferences</b> in <b>My eBay</b>.
    */
    private ?bool $shippingPromotionOffered = null;
    
    /**
     * @var array<ShippingService>|null $shippingServices This array consists of the domestic or international shipping services options that are defined for the policy. The shipping service options defined under this array should match what is set in the corresponding <b>shippingOptions.optionType</b> field (which controls whether domestic or international shipping service options are being defined). If a shipping rate table is being used, the specified shipping service options should also match the shipping rate table settings (domestic or international, shipping speed/level of service, etc.) <br><br>Sellers can specify up to four domestic shipping services and up to five international shipping service options by using separate <b>shippingService</b> containers for each. If the seller is using the Global Shipping Program as an international option, only a total of four international shipping service options (including GSP) can be offered. <br><br> See <a href="/api-docs/sell/static/seller-accounts/ht_shipping-setting-shipping-carrier-and-service-values.html" target="_blank">How to set up shipping carrier and shipping service values</a>. <br><br>To use the eBay standard envelope service (eSE), see <a href="/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html" target="_blank">Using eBay standard envelope (eSE) service</a>.<br><br>This array is conditionally required if the seller is offering one or more domestic and/or international shipping service options.
    */
    private ?array $shippingServices = null;
    
    /**
     * Instantiates a new ShippingOption and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingOption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingOption {
        return new ShippingOption();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the costType property value. This field defines whether the shipping cost model is <code>FLAT_RATE</code> (the same rate for all buyers, or buyers within a region if shipping rate tables are used) or <code>CALCULATED</code> (the shipping rate varies by the ship-to location and size and weight of the package). <br><br>This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCostType(): ?string {
        return $this->costType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'costType' => fn(ParseNode $n) => $o->setCostType($n->getStringValue()),
            'insuranceFee' => fn(ParseNode $n) => $o->setInsuranceFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'insuranceOffered' => fn(ParseNode $n) => $o->setInsuranceOffered($n->getBooleanValue()),
            'optionType' => fn(ParseNode $n) => $o->setOptionType($n->getStringValue()),
            'packageHandlingCost' => fn(ParseNode $n) => $o->setPackageHandlingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'rateTableId' => fn(ParseNode $n) => $o->setRateTableId($n->getStringValue()),
            'shippingDiscountProfileId' => fn(ParseNode $n) => $o->setShippingDiscountProfileId($n->getStringValue()),
            'shippingPromotionOffered' => fn(ParseNode $n) => $o->setShippingPromotionOffered($n->getBooleanValue()),
            'shippingServices' => fn(ParseNode $n) => $o->setShippingServices($n->getCollectionOfObjectValues([ShippingService::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the insuranceFee property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
     * @return Amount|null
    */
    public function getInsuranceFee(): ?Amount {
        return $this->insuranceFee;
    }

    /**
     * Gets the insuranceOffered property value. This field has been deprecated. <br><br>Shipping insurance is offered only via a shipping carrier's shipping services and is no longer available via eBay shipping policies.
     * @return bool|null
    */
    public function getInsuranceOffered(): ?bool {
        return $this->insuranceOffered;
    }

    /**
     * Gets the optionType property value. This field is used to indicate if the corresponding shipping service options (under <b>shippingServices</b> array) are domestic or international shipping service options. This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getOptionType(): ?string {
        return $this->optionType;
    }

    /**
     * Gets the packageHandlingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
     * @return Amount|null
    */
    public function getPackageHandlingCost(): ?Amount {
        return $this->packageHandlingCost;
    }

    /**
     * Gets the rateTableId property value. This field is used if the seller wants to associate a domestic or international shipping rate table to the fulfillment business policy. The <a href="/api-docs/sell/account/resources/rate_table/methods/getRateTables">getRateTables</a> method can be used to retrieve shipping rate table IDs.<br><br>With domestic and international shipping rate tables, the seller can set different shipping costs based on shipping regions and shipping speed/level of service (one-day, expedited, standard, economy). There are also options to add additional per-weight and handling charges.<br><br>Sellers need to be careful that shipping rate tables match the corresponding shipping service options. In other words, a domestic shipping rate table must not be specified in the same container where international shipping service options are being specified, and vice versa, and the shipping speed/level of service of the provided shipping service options should match the shipping speed/level of service options that are defined in the shipping rate tables. <br><br>For example, if the corresponding shipping rate table defines costs for one-day shipping services, there should be at least one one-day shipping service option specified under the <b>shippingServices</b> array.<br><br>This field is returned if set.
     * @return string|null
    */
    public function getRateTableId(): ?string {
        return $this->rateTableId;
    }

    /**
     * Gets the shippingDiscountProfileId property value. This field is the unique identifier of a seller's domestic or international shipping discount profile. If a buyer satisfies the requirements of the discount rule, this buyer will receive a shipping discount for the order. <br><br>The seller can create and manage shipping discount profiles using (Get/Set) <b>ShippingDiscountProfiles</b> calls in the <b>Trading API</b> or through the <b>Shipping Preferences</b> in <b>My eBay</b>.
     * @return string|null
    */
    public function getShippingDiscountProfileId(): ?string {
        return $this->shippingDiscountProfileId;
    }

    /**
     * Gets the shippingPromotionOffered property value. This boolean indicates whether or not the seller has set up a promotional shipping discount that will be available to buyers who satisfy the requirements of the shipping discount rule. <br><br>The seller can create and manage shipping promotional discounts using (Get/Set) <b>ShippingDiscountProfiles</b> calls in the <b>Trading API</b> or through the <b>Shipping Preferences</b> in <b>My eBay</b>.
     * @return bool|null
    */
    public function getShippingPromotionOffered(): ?bool {
        return $this->shippingPromotionOffered;
    }

    /**
     * Gets the shippingServices property value. This array consists of the domestic or international shipping services options that are defined for the policy. The shipping service options defined under this array should match what is set in the corresponding <b>shippingOptions.optionType</b> field (which controls whether domestic or international shipping service options are being defined). If a shipping rate table is being used, the specified shipping service options should also match the shipping rate table settings (domestic or international, shipping speed/level of service, etc.) <br><br>Sellers can specify up to four domestic shipping services and up to five international shipping service options by using separate <b>shippingService</b> containers for each. If the seller is using the Global Shipping Program as an international option, only a total of four international shipping service options (including GSP) can be offered. <br><br> See <a href="/api-docs/sell/static/seller-accounts/ht_shipping-setting-shipping-carrier-and-service-values.html" target="_blank">How to set up shipping carrier and shipping service values</a>. <br><br>To use the eBay standard envelope service (eSE), see <a href="/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html" target="_blank">Using eBay standard envelope (eSE) service</a>.<br><br>This array is conditionally required if the seller is offering one or more domestic and/or international shipping service options.
     * @return array<ShippingService>|null
    */
    public function getShippingServices(): ?array {
        return $this->shippingServices;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('costType', $this->getCostType());
        $writer->writeObjectValue('insuranceFee', $this->getInsuranceFee());
        $writer->writeBooleanValue('insuranceOffered', $this->getInsuranceOffered());
        $writer->writeStringValue('optionType', $this->getOptionType());
        $writer->writeObjectValue('packageHandlingCost', $this->getPackageHandlingCost());
        $writer->writeStringValue('rateTableId', $this->getRateTableId());
        $writer->writeStringValue('shippingDiscountProfileId', $this->getShippingDiscountProfileId());
        $writer->writeBooleanValue('shippingPromotionOffered', $this->getShippingPromotionOffered());
        $writer->writeCollectionOfObjectValues('shippingServices', $this->getShippingServices());
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
     * Sets the costType property value. This field defines whether the shipping cost model is <code>FLAT_RATE</code> (the same rate for all buyers, or buyers within a region if shipping rate tables are used) or <code>CALCULATED</code> (the shipping rate varies by the ship-to location and size and weight of the package). <br><br>This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the costType property.
    */
    public function setCostType(?string $value): void {
        $this->costType = $value;
    }

    /**
     * Sets the insuranceFee property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
     * @param Amount|null $value Value to set for the insuranceFee property.
    */
    public function setInsuranceFee(?Amount $value): void {
        $this->insuranceFee = $value;
    }

    /**
     * Sets the insuranceOffered property value. This field has been deprecated. <br><br>Shipping insurance is offered only via a shipping carrier's shipping services and is no longer available via eBay shipping policies.
     * @param bool|null $value Value to set for the insuranceOffered property.
    */
    public function setInsuranceOffered(?bool $value): void {
        $this->insuranceOffered = $value;
    }

    /**
     * Sets the optionType property value. This field is used to indicate if the corresponding shipping service options (under <b>shippingServices</b> array) are domestic or international shipping service options. This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the optionType property.
    */
    public function setOptionType(?string $value): void {
        $this->optionType = $value;
    }

    /**
     * Sets the packageHandlingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
     * @param Amount|null $value Value to set for the packageHandlingCost property.
    */
    public function setPackageHandlingCost(?Amount $value): void {
        $this->packageHandlingCost = $value;
    }

    /**
     * Sets the rateTableId property value. This field is used if the seller wants to associate a domestic or international shipping rate table to the fulfillment business policy. The <a href="/api-docs/sell/account/resources/rate_table/methods/getRateTables">getRateTables</a> method can be used to retrieve shipping rate table IDs.<br><br>With domestic and international shipping rate tables, the seller can set different shipping costs based on shipping regions and shipping speed/level of service (one-day, expedited, standard, economy). There are also options to add additional per-weight and handling charges.<br><br>Sellers need to be careful that shipping rate tables match the corresponding shipping service options. In other words, a domestic shipping rate table must not be specified in the same container where international shipping service options are being specified, and vice versa, and the shipping speed/level of service of the provided shipping service options should match the shipping speed/level of service options that are defined in the shipping rate tables. <br><br>For example, if the corresponding shipping rate table defines costs for one-day shipping services, there should be at least one one-day shipping service option specified under the <b>shippingServices</b> array.<br><br>This field is returned if set.
     * @param string|null $value Value to set for the rateTableId property.
    */
    public function setRateTableId(?string $value): void {
        $this->rateTableId = $value;
    }

    /**
     * Sets the shippingDiscountProfileId property value. This field is the unique identifier of a seller's domestic or international shipping discount profile. If a buyer satisfies the requirements of the discount rule, this buyer will receive a shipping discount for the order. <br><br>The seller can create and manage shipping discount profiles using (Get/Set) <b>ShippingDiscountProfiles</b> calls in the <b>Trading API</b> or through the <b>Shipping Preferences</b> in <b>My eBay</b>.
     * @param string|null $value Value to set for the shippingDiscountProfileId property.
    */
    public function setShippingDiscountProfileId(?string $value): void {
        $this->shippingDiscountProfileId = $value;
    }

    /**
     * Sets the shippingPromotionOffered property value. This boolean indicates whether or not the seller has set up a promotional shipping discount that will be available to buyers who satisfy the requirements of the shipping discount rule. <br><br>The seller can create and manage shipping promotional discounts using (Get/Set) <b>ShippingDiscountProfiles</b> calls in the <b>Trading API</b> or through the <b>Shipping Preferences</b> in <b>My eBay</b>.
     * @param bool|null $value Value to set for the shippingPromotionOffered property.
    */
    public function setShippingPromotionOffered(?bool $value): void {
        $this->shippingPromotionOffered = $value;
    }

    /**
     * Sets the shippingServices property value. This array consists of the domestic or international shipping services options that are defined for the policy. The shipping service options defined under this array should match what is set in the corresponding <b>shippingOptions.optionType</b> field (which controls whether domestic or international shipping service options are being defined). If a shipping rate table is being used, the specified shipping service options should also match the shipping rate table settings (domestic or international, shipping speed/level of service, etc.) <br><br>Sellers can specify up to four domestic shipping services and up to five international shipping service options by using separate <b>shippingService</b> containers for each. If the seller is using the Global Shipping Program as an international option, only a total of four international shipping service options (including GSP) can be offered. <br><br> See <a href="/api-docs/sell/static/seller-accounts/ht_shipping-setting-shipping-carrier-and-service-values.html" target="_blank">How to set up shipping carrier and shipping service values</a>. <br><br>To use the eBay standard envelope service (eSE), see <a href="/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html" target="_blank">Using eBay standard envelope (eSE) service</a>.<br><br>This array is conditionally required if the seller is offering one or more domestic and/or international shipping service options.
     * @param array<ShippingService>|null $value Value to set for the shippingServices property.
    */
    public function setShippingServices(?array $value): void {
        $this->shippingServices = $value;
    }

}
