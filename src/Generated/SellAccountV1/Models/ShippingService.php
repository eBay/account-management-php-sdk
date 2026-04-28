<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

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
     * @var Amount|null $additionalShippingCost A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
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
     * @var Amount|null $shippingCost A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
    */
    private ?Amount $shippingCost = null;
    
    /**
     * @var string|null $shippingServiceCode This field sets/indicates the domestic or international shipping service option, such as <code>USPSPriority</code>, <code>FedEx2Day</code>, or <code>UPS3rdDay</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping service option enum values for a specified eBay marketplace, the <a href="/devzone/xml/docs/reference/ebay/GeteBayDetails.html">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingServiceDetails</code>. <br><br>The enum values for each shipping service option can be found in each <b>ShippingServiceDetails.ShippingService</b> field in the response payload. The seller must make sure that the shipping service option is still valid, which is indicated by a <code>true</code> value in the corresponding <b>ValidForSellingFlow</b> boolean field. International shipping service options are typically returned at the top of the response payload, and are indicated by an <b>InternationalService</b> boolean field that reads <code>true</code>. <br><br>The <b>InternationalService</b> boolean field is not returned at all for domestic shipping service options. <br><br> This field is required for every specified shipping service option.
    */
    private ?string $shippingServiceCode = null;
    
    /**
     * @var RegionSet|null $shipToLocations This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b> arrays, which indicate the areas to where the seller does and doesn't ship.
    */
    private ?RegionSet $shipToLocations = null;
    
    /**
     * @var int|null $sortOrder The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br><br>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br><br><b>Min</b>: 1. <b>Max</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
    */
    private ?int $sortOrder = null;
    
    /**
     * @var Amount|null $surcharge A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
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
     * Gets the additionalShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
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
     * Gets the shippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
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
     * Gets the shipToLocations property value. This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b> arrays, which indicate the areas to where the seller does and doesn't ship.
     * @return RegionSet|null
    */
    public function getShipToLocations(): ?RegionSet {
        return $this->shipToLocations;
    }

    /**
     * Gets the sortOrder property value. The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br><br>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br><br><b>Min</b>: 1. <b>Max</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
     * @return int|null
    */
    public function getSortOrder(): ?int {
        return $this->sortOrder;
    }

    /**
     * Gets the surcharge property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
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
     * Sets the additionalShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
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
     * Sets the shippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
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
     * Sets the shipToLocations property value. This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b> arrays, which indicate the areas to where the seller does and doesn't ship.
     * @param RegionSet|null $value Value to set for the shipToLocations property.
    */
    public function setShipToLocations(?RegionSet $value): void {
        $this->shipToLocations = $value;
    }

    /**
     * Sets the sortOrder property value. The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br><br>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br><br><b>Min</b>: 1. <b>Max</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
     * @param int|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?int $value): void {
        $this->sortOrder = $value;
    }

    /**
     * Sets the surcharge property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
     * @param Amount|null $value Value to set for the surcharge property.
    */
    public function setSurcharge(?Amount $value): void {
        $this->surcharge = $value;
    }

}
