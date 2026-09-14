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
 * This type defines the responses for the getUserPreferences method.
*/
class GetUserPreferencesResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CombinedPaymentPreferencesType|null $combinedPaymentPreferences This container returns the combined payment preferences when the <code>COMBINED_PAYMENT</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. It indicates if the seller allows multiple line items from the same buyer to be combined.
    */
    private ?CombinedPaymentPreferencesType $combinedPaymentPreferences = null;
    
    /**
     * @var DispatchCutoffTimePreferencesType|null $dispatchCutoffTimePreference This container is returned when the <code>DISPATCH_CUTOFF_TIME</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>.
    */
    private ?DispatchCutoffTimePreferencesType $dispatchCutoffTimePreference = null;
    
    /**
     * @var bool|null $emailShipmentTrackingNumberPreference This boolean field indicates whether or not the seller’s account is configured to automatically send an email to buyers with the shipment tracking number for an order.
    */
    private ?bool $emailShipmentTrackingNumberPreference = null;
    
    /**
     * @var EndOfAuctionEmailPreferencesType|null $endOfAuctionEmailPreferences This container allows sellers to customize the email sent to buyers immediately after an auction listing is won.
    */
    private ?EndOfAuctionEmailPreferencesType $endOfAuctionEmailPreferences = null;
    
    /**
     * @var bool|null $globalShippingProgramListingPreference This boolean field indicates whether or not the seller’s new listings on the eBay marketplace will automatically use the Global Shipping Program for international shipping. This field is returned when the <code>GLOBAL_SHIPPING_PROGRAM</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. </br> <b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace, and the seller must be opted into the program.
    */
    private ?bool $globalShippingProgramListingPreference = null;
    
    /**
     * @var GetItemsAwaitingPaymentPreferencesType|null $itemsAwaitingPaymentPreferences This container shows the seller’s preferences for automatically handling unpaid line items.
    */
    private ?GetItemsAwaitingPaymentPreferencesType $itemsAwaitingPaymentPreferences = null;
    
    /**
     * @var bool|null $offerGlobalShippingProgramPreference This boolean field indicates whether or not the seller is opted into the Global Shipping Program on the eBay marketplace. </br><b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace.
    */
    private ?bool $offerGlobalShippingProgramPreference = null;
    
    /**
     * @var bool|null $outOfStockControlPreference This boolean field indicates whether or not the seller is opted into the Out-of-Stock feature. With this feature, a multiple quantity fixed price listing that runs out of stock will be hidden from eBay search but kept alive. Once the sellers add quantity to the listing, the listing will become active and available again.
    */
    private ?bool $outOfStockControlPreference = null;
    
    /**
     * @var bool|null $overrideGspServiceWithIntlServicePreference This boolean field indicates whether or not the seller specifies an international shipping service to a particular country for a given listing, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program. </br><b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace.
    */
    private ?bool $overrideGspServiceWithIntlServicePreference = null;
    
    /**
     * @var bool|null $pickupDropoffSellerPreference This boolean field indicates whether or not the seller is opted into the Click & Collect feature. </br><b>Note</b>: The Click & Collect feature is only available on the eBay UK, Australia, and Germany marketplaces.
    */
    private ?bool $pickupDropoffSellerPreference = null;
    
    /**
     * @var bool|null $purchaseReminderEmailPreferences This boolean field indicates whether or not the seller’s account is configured to have eBay send occasional purchase reminder emails for unpaid line items.
    */
    private ?bool $purchaseReminderEmailPreferences = null;
    
    /**
     * @var bool|null $requiredShipPhoneNumberPreference This boolean field indicates whether or not the buyer is required to provide a shipping phone number during checkout.
    */
    private ?bool $requiredShipPhoneNumberPreference = null;
    
    /**
     * @var SellerExcludeShipToLocationPreferencesType|null $sellerExcludeShipToLocationPreferences This container shows the list of locations that the seller does not ship to. This list of shipping locations can only be updated in My eBay through Shipping Preferences and not with the <code>setUserPreferences</code> method.
    */
    private ?SellerExcludeShipToLocationPreferencesType $sellerExcludeShipToLocationPreferences = null;
    
    /**
     * @var SellerProfilePreferencesType|null $sellerProfilePreferences This container is returned when the <code>SELLER_PROFILE</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>.
    */
    private ?SellerProfilePreferencesType $sellerProfilePreferences = null;
    
    /**
     * @var ShippingCarrierRatePreferencesType|null $shippingCarrierRatePreferences This container indicates the FedEx, UPS, and US Post Office shipping rate types that are available to the seller. This container is returned when the <code>SHIPPING_CARRIER_RATE</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. </br><b>Note</b>: This container is only applicable to the eBay US marketplace.
    */
    private ?ShippingCarrierRatePreferencesType $shippingCarrierRatePreferences = null;
    
    /**
     * Instantiates a new GetUserPreferencesResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetUserPreferencesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetUserPreferencesResponse {
        return new GetUserPreferencesResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedPaymentPreferences property value. This container returns the combined payment preferences when the <code>COMBINED_PAYMENT</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. It indicates if the seller allows multiple line items from the same buyer to be combined.
     * @return CombinedPaymentPreferencesType|null
    */
    public function getCombinedPaymentPreferences(): ?CombinedPaymentPreferencesType {
        return $this->combinedPaymentPreferences;
    }

    /**
     * Gets the dispatchCutoffTimePreference property value. This container is returned when the <code>DISPATCH_CUTOFF_TIME</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>.
     * @return DispatchCutoffTimePreferencesType|null
    */
    public function getDispatchCutoffTimePreference(): ?DispatchCutoffTimePreferencesType {
        return $this->dispatchCutoffTimePreference;
    }

    /**
     * Gets the emailShipmentTrackingNumberPreference property value. This boolean field indicates whether or not the seller’s account is configured to automatically send an email to buyers with the shipment tracking number for an order.
     * @return bool|null
    */
    public function getEmailShipmentTrackingNumberPreference(): ?bool {
        return $this->emailShipmentTrackingNumberPreference;
    }

    /**
     * Gets the endOfAuctionEmailPreferences property value. This container allows sellers to customize the email sent to buyers immediately after an auction listing is won.
     * @return EndOfAuctionEmailPreferencesType|null
    */
    public function getEndOfAuctionEmailPreferences(): ?EndOfAuctionEmailPreferencesType {
        return $this->endOfAuctionEmailPreferences;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'combinedPaymentPreferences' => fn(ParseNode $n) => $o->setCombinedPaymentPreferences($n->getObjectValue([CombinedPaymentPreferencesType::class, 'createFromDiscriminatorValue'])),
            'dispatchCutoffTimePreference' => fn(ParseNode $n) => $o->setDispatchCutoffTimePreference($n->getObjectValue([DispatchCutoffTimePreferencesType::class, 'createFromDiscriminatorValue'])),
            'emailShipmentTrackingNumberPreference' => fn(ParseNode $n) => $o->setEmailShipmentTrackingNumberPreference($n->getBooleanValue()),
            'endOfAuctionEmailPreferences' => fn(ParseNode $n) => $o->setEndOfAuctionEmailPreferences($n->getObjectValue([EndOfAuctionEmailPreferencesType::class, 'createFromDiscriminatorValue'])),
            'globalShippingProgramListingPreference' => fn(ParseNode $n) => $o->setGlobalShippingProgramListingPreference($n->getBooleanValue()),
            'itemsAwaitingPaymentPreferences' => fn(ParseNode $n) => $o->setItemsAwaitingPaymentPreferences($n->getObjectValue([GetItemsAwaitingPaymentPreferencesType::class, 'createFromDiscriminatorValue'])),
            'offerGlobalShippingProgramPreference' => fn(ParseNode $n) => $o->setOfferGlobalShippingProgramPreference($n->getBooleanValue()),
            'outOfStockControlPreference' => fn(ParseNode $n) => $o->setOutOfStockControlPreference($n->getBooleanValue()),
            'overrideGspServiceWithIntlServicePreference' => fn(ParseNode $n) => $o->setOverrideGspServiceWithIntlServicePreference($n->getBooleanValue()),
            'pickupDropoffSellerPreference' => fn(ParseNode $n) => $o->setPickupDropoffSellerPreference($n->getBooleanValue()),
            'purchaseReminderEmailPreferences' => fn(ParseNode $n) => $o->setPurchaseReminderEmailPreferences($n->getBooleanValue()),
            'requiredShipPhoneNumberPreference' => fn(ParseNode $n) => $o->setRequiredShipPhoneNumberPreference($n->getBooleanValue()),
            'sellerExcludeShipToLocationPreferences' => fn(ParseNode $n) => $o->setSellerExcludeShipToLocationPreferences($n->getObjectValue([SellerExcludeShipToLocationPreferencesType::class, 'createFromDiscriminatorValue'])),
            'sellerProfilePreferences' => fn(ParseNode $n) => $o->setSellerProfilePreferences($n->getObjectValue([SellerProfilePreferencesType::class, 'createFromDiscriminatorValue'])),
            'shippingCarrierRatePreferences' => fn(ParseNode $n) => $o->setShippingCarrierRatePreferences($n->getObjectValue([ShippingCarrierRatePreferencesType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the globalShippingProgramListingPreference property value. This boolean field indicates whether or not the seller’s new listings on the eBay marketplace will automatically use the Global Shipping Program for international shipping. This field is returned when the <code>GLOBAL_SHIPPING_PROGRAM</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. </br> <b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace, and the seller must be opted into the program.
     * @return bool|null
    */
    public function getGlobalShippingProgramListingPreference(): ?bool {
        return $this->globalShippingProgramListingPreference;
    }

    /**
     * Gets the itemsAwaitingPaymentPreferences property value. This container shows the seller’s preferences for automatically handling unpaid line items.
     * @return GetItemsAwaitingPaymentPreferencesType|null
    */
    public function getItemsAwaitingPaymentPreferences(): ?GetItemsAwaitingPaymentPreferencesType {
        return $this->itemsAwaitingPaymentPreferences;
    }

    /**
     * Gets the offerGlobalShippingProgramPreference property value. This boolean field indicates whether or not the seller is opted into the Global Shipping Program on the eBay marketplace. </br><b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace.
     * @return bool|null
    */
    public function getOfferGlobalShippingProgramPreference(): ?bool {
        return $this->offerGlobalShippingProgramPreference;
    }

    /**
     * Gets the outOfStockControlPreference property value. This boolean field indicates whether or not the seller is opted into the Out-of-Stock feature. With this feature, a multiple quantity fixed price listing that runs out of stock will be hidden from eBay search but kept alive. Once the sellers add quantity to the listing, the listing will become active and available again.
     * @return bool|null
    */
    public function getOutOfStockControlPreference(): ?bool {
        return $this->outOfStockControlPreference;
    }

    /**
     * Gets the overrideGspServiceWithIntlServicePreference property value. This boolean field indicates whether or not the seller specifies an international shipping service to a particular country for a given listing, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program. </br><b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace.
     * @return bool|null
    */
    public function getOverrideGspServiceWithIntlServicePreference(): ?bool {
        return $this->overrideGspServiceWithIntlServicePreference;
    }

    /**
     * Gets the pickupDropoffSellerPreference property value. This boolean field indicates whether or not the seller is opted into the Click & Collect feature. </br><b>Note</b>: The Click & Collect feature is only available on the eBay UK, Australia, and Germany marketplaces.
     * @return bool|null
    */
    public function getPickupDropoffSellerPreference(): ?bool {
        return $this->pickupDropoffSellerPreference;
    }

    /**
     * Gets the purchaseReminderEmailPreferences property value. This boolean field indicates whether or not the seller’s account is configured to have eBay send occasional purchase reminder emails for unpaid line items.
     * @return bool|null
    */
    public function getPurchaseReminderEmailPreferences(): ?bool {
        return $this->purchaseReminderEmailPreferences;
    }

    /**
     * Gets the requiredShipPhoneNumberPreference property value. This boolean field indicates whether or not the buyer is required to provide a shipping phone number during checkout.
     * @return bool|null
    */
    public function getRequiredShipPhoneNumberPreference(): ?bool {
        return $this->requiredShipPhoneNumberPreference;
    }

    /**
     * Gets the sellerExcludeShipToLocationPreferences property value. This container shows the list of locations that the seller does not ship to. This list of shipping locations can only be updated in My eBay through Shipping Preferences and not with the <code>setUserPreferences</code> method.
     * @return SellerExcludeShipToLocationPreferencesType|null
    */
    public function getSellerExcludeShipToLocationPreferences(): ?SellerExcludeShipToLocationPreferencesType {
        return $this->sellerExcludeShipToLocationPreferences;
    }

    /**
     * Gets the sellerProfilePreferences property value. This container is returned when the <code>SELLER_PROFILE</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>.
     * @return SellerProfilePreferencesType|null
    */
    public function getSellerProfilePreferences(): ?SellerProfilePreferencesType {
        return $this->sellerProfilePreferences;
    }

    /**
     * Gets the shippingCarrierRatePreferences property value. This container indicates the FedEx, UPS, and US Post Office shipping rate types that are available to the seller. This container is returned when the <code>SHIPPING_CARRIER_RATE</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. </br><b>Note</b>: This container is only applicable to the eBay US marketplace.
     * @return ShippingCarrierRatePreferencesType|null
    */
    public function getShippingCarrierRatePreferences(): ?ShippingCarrierRatePreferencesType {
        return $this->shippingCarrierRatePreferences;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('combinedPaymentPreferences', $this->getCombinedPaymentPreferences());
        $writer->writeObjectValue('dispatchCutoffTimePreference', $this->getDispatchCutoffTimePreference());
        $writer->writeBooleanValue('emailShipmentTrackingNumberPreference', $this->getEmailShipmentTrackingNumberPreference());
        $writer->writeObjectValue('endOfAuctionEmailPreferences', $this->getEndOfAuctionEmailPreferences());
        $writer->writeBooleanValue('globalShippingProgramListingPreference', $this->getGlobalShippingProgramListingPreference());
        $writer->writeObjectValue('itemsAwaitingPaymentPreferences', $this->getItemsAwaitingPaymentPreferences());
        $writer->writeBooleanValue('offerGlobalShippingProgramPreference', $this->getOfferGlobalShippingProgramPreference());
        $writer->writeBooleanValue('outOfStockControlPreference', $this->getOutOfStockControlPreference());
        $writer->writeBooleanValue('overrideGspServiceWithIntlServicePreference', $this->getOverrideGspServiceWithIntlServicePreference());
        $writer->writeBooleanValue('pickupDropoffSellerPreference', $this->getPickupDropoffSellerPreference());
        $writer->writeBooleanValue('purchaseReminderEmailPreferences', $this->getPurchaseReminderEmailPreferences());
        $writer->writeBooleanValue('requiredShipPhoneNumberPreference', $this->getRequiredShipPhoneNumberPreference());
        $writer->writeObjectValue('sellerExcludeShipToLocationPreferences', $this->getSellerExcludeShipToLocationPreferences());
        $writer->writeObjectValue('sellerProfilePreferences', $this->getSellerProfilePreferences());
        $writer->writeObjectValue('shippingCarrierRatePreferences', $this->getShippingCarrierRatePreferences());
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
     * Sets the combinedPaymentPreferences property value. This container returns the combined payment preferences when the <code>COMBINED_PAYMENT</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. It indicates if the seller allows multiple line items from the same buyer to be combined.
     * @param CombinedPaymentPreferencesType|null $value Value to set for the combinedPaymentPreferences property.
    */
    public function setCombinedPaymentPreferences(?CombinedPaymentPreferencesType $value): void {
        $this->combinedPaymentPreferences = $value;
    }

    /**
     * Sets the dispatchCutoffTimePreference property value. This container is returned when the <code>DISPATCH_CUTOFF_TIME</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>.
     * @param DispatchCutoffTimePreferencesType|null $value Value to set for the dispatchCutoffTimePreference property.
    */
    public function setDispatchCutoffTimePreference(?DispatchCutoffTimePreferencesType $value): void {
        $this->dispatchCutoffTimePreference = $value;
    }

    /**
     * Sets the emailShipmentTrackingNumberPreference property value. This boolean field indicates whether or not the seller’s account is configured to automatically send an email to buyers with the shipment tracking number for an order.
     * @param bool|null $value Value to set for the emailShipmentTrackingNumberPreference property.
    */
    public function setEmailShipmentTrackingNumberPreference(?bool $value): void {
        $this->emailShipmentTrackingNumberPreference = $value;
    }

    /**
     * Sets the endOfAuctionEmailPreferences property value. This container allows sellers to customize the email sent to buyers immediately after an auction listing is won.
     * @param EndOfAuctionEmailPreferencesType|null $value Value to set for the endOfAuctionEmailPreferences property.
    */
    public function setEndOfAuctionEmailPreferences(?EndOfAuctionEmailPreferencesType $value): void {
        $this->endOfAuctionEmailPreferences = $value;
    }

    /**
     * Sets the globalShippingProgramListingPreference property value. This boolean field indicates whether or not the seller’s new listings on the eBay marketplace will automatically use the Global Shipping Program for international shipping. This field is returned when the <code>GLOBAL_SHIPPING_PROGRAM</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. </br> <b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace, and the seller must be opted into the program.
     * @param bool|null $value Value to set for the globalShippingProgramListingPreference property.
    */
    public function setGlobalShippingProgramListingPreference(?bool $value): void {
        $this->globalShippingProgramListingPreference = $value;
    }

    /**
     * Sets the itemsAwaitingPaymentPreferences property value. This container shows the seller’s preferences for automatically handling unpaid line items.
     * @param GetItemsAwaitingPaymentPreferencesType|null $value Value to set for the itemsAwaitingPaymentPreferences property.
    */
    public function setItemsAwaitingPaymentPreferences(?GetItemsAwaitingPaymentPreferencesType $value): void {
        $this->itemsAwaitingPaymentPreferences = $value;
    }

    /**
     * Sets the offerGlobalShippingProgramPreference property value. This boolean field indicates whether or not the seller is opted into the Global Shipping Program on the eBay marketplace. </br><b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace.
     * @param bool|null $value Value to set for the offerGlobalShippingProgramPreference property.
    */
    public function setOfferGlobalShippingProgramPreference(?bool $value): void {
        $this->offerGlobalShippingProgramPreference = $value;
    }

    /**
     * Sets the outOfStockControlPreference property value. This boolean field indicates whether or not the seller is opted into the Out-of-Stock feature. With this feature, a multiple quantity fixed price listing that runs out of stock will be hidden from eBay search but kept alive. Once the sellers add quantity to the listing, the listing will become active and available again.
     * @param bool|null $value Value to set for the outOfStockControlPreference property.
    */
    public function setOutOfStockControlPreference(?bool $value): void {
        $this->outOfStockControlPreference = $value;
    }

    /**
     * Sets the overrideGspServiceWithIntlServicePreference property value. This boolean field indicates whether or not the seller specifies an international shipping service to a particular country for a given listing, the specified service will take precedence and be the listing's default international shipping option for buyers in that country, rather than the Global Shipping Program. </br><b>Note</b>: The Global Shipping Program is only available for the eBay UK marketplace.
     * @param bool|null $value Value to set for the overrideGspServiceWithIntlServicePreference property.
    */
    public function setOverrideGspServiceWithIntlServicePreference(?bool $value): void {
        $this->overrideGspServiceWithIntlServicePreference = $value;
    }

    /**
     * Sets the pickupDropoffSellerPreference property value. This boolean field indicates whether or not the seller is opted into the Click & Collect feature. </br><b>Note</b>: The Click & Collect feature is only available on the eBay UK, Australia, and Germany marketplaces.
     * @param bool|null $value Value to set for the pickupDropoffSellerPreference property.
    */
    public function setPickupDropoffSellerPreference(?bool $value): void {
        $this->pickupDropoffSellerPreference = $value;
    }

    /**
     * Sets the purchaseReminderEmailPreferences property value. This boolean field indicates whether or not the seller’s account is configured to have eBay send occasional purchase reminder emails for unpaid line items.
     * @param bool|null $value Value to set for the purchaseReminderEmailPreferences property.
    */
    public function setPurchaseReminderEmailPreferences(?bool $value): void {
        $this->purchaseReminderEmailPreferences = $value;
    }

    /**
     * Sets the requiredShipPhoneNumberPreference property value. This boolean field indicates whether or not the buyer is required to provide a shipping phone number during checkout.
     * @param bool|null $value Value to set for the requiredShipPhoneNumberPreference property.
    */
    public function setRequiredShipPhoneNumberPreference(?bool $value): void {
        $this->requiredShipPhoneNumberPreference = $value;
    }

    /**
     * Sets the sellerExcludeShipToLocationPreferences property value. This container shows the list of locations that the seller does not ship to. This list of shipping locations can only be updated in My eBay through Shipping Preferences and not with the <code>setUserPreferences</code> method.
     * @param SellerExcludeShipToLocationPreferencesType|null $value Value to set for the sellerExcludeShipToLocationPreferences property.
    */
    public function setSellerExcludeShipToLocationPreferences(?SellerExcludeShipToLocationPreferencesType $value): void {
        $this->sellerExcludeShipToLocationPreferences = $value;
    }

    /**
     * Sets the sellerProfilePreferences property value. This container is returned when the <code>SELLER_PROFILE</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>.
     * @param SellerProfilePreferencesType|null $value Value to set for the sellerProfilePreferences property.
    */
    public function setSellerProfilePreferences(?SellerProfilePreferencesType $value): void {
        $this->sellerProfilePreferences = $value;
    }

    /**
     * Sets the shippingCarrierRatePreferences property value. This container indicates the FedEx, UPS, and US Post Office shipping rate types that are available to the seller. This container is returned when the <code>SHIPPING_CARRIER_RATE</code> value is included through the <b>fieldgroups</b> query parameter or when <b>fieldgroups</b>=<code>ALL</code>. </br><b>Note</b>: This container is only applicable to the eBay US marketplace.
     * @param ShippingCarrierRatePreferencesType|null $value Value to set for the shippingCarrierRatePreferences property.
    */
    public function setShippingCarrierRatePreferences(?ShippingCarrierRatePreferencesType $value): void {
        $this->shippingCarrierRatePreferences = $value;
    }

}
