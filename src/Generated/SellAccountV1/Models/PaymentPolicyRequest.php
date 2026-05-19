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

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This root container defines a seller's payment business policy for a specific marketplace and category group. This type is used when creating or updating a payment business policy.
*/
class PaymentPolicyRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CategoryType>|null $categoryTypes This container is used to specify whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
    */
    private ?array $categoryTypes = null;
    
    /**
     * @var Deposit|null $deposit This type is used to specify/indicate that an initial deposit is required for a motor vehicle listing.
    */
    private ?Deposit $deposit = null;
    
    /**
     * @var string|null $description A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
    */
    private ?string $description = null;
    
    /**
     * @var TimeDuration|null $fullPaymentDueIn A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
    */
    private ?TimeDuration $fullPaymentDueIn = null;
    
    /**
     * @var bool|null $immediatePay This field should be included and set to <code>true</code> if the seller wants to require immediate payment from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><br><b>Default:</b> False
    */
    private ?bool $immediatePay = null;
    
    /**
     * @var string|null $marketplaceId The ID of the eBay marketplace to which this payment business policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var string|null $name A seller-defined name for this payment business policy. Names must be unique for policies assigned to the same marketplace.<br><br><b>Max length:</b> 64
    */
    private ?string $name = null;
    
    /**
     * @var string|null $paymentInstructions <p class="tablenote"><b>Note:</b> DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.</p>A free-form string field that allows sellers to add detailed payment instructions to their listings.
    */
    private ?string $paymentInstructions = null;
    
    /**
     * @var array<PaymentMethod>|null $paymentMethods <p class="tablenote"><b>Note:</b> This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</p>This array is used to specify one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform.
    */
    private ?array $paymentMethods = null;
    
    /**
     * Instantiates a new PaymentPolicyRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentPolicyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentPolicyRequest {
        return new PaymentPolicyRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryTypes property value. This container is used to specify whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
     * @return array<CategoryType>|null
    */
    public function getCategoryTypes(): ?array {
        return $this->categoryTypes;
    }

    /**
     * Gets the deposit property value. This type is used to specify/indicate that an initial deposit is required for a motor vehicle listing.
     * @return Deposit|null
    */
    public function getDeposit(): ?Deposit {
        return $this->deposit;
    }

    /**
     * Gets the description property value. A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
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
            'deposit' => fn(ParseNode $n) => $o->setDeposit($n->getObjectValue([Deposit::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'fullPaymentDueIn' => fn(ParseNode $n) => $o->setFullPaymentDueIn($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'immediatePay' => fn(ParseNode $n) => $o->setImmediatePay($n->getBooleanValue()),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'paymentInstructions' => fn(ParseNode $n) => $o->setPaymentInstructions($n->getStringValue()),
            'paymentMethods' => fn(ParseNode $n) => $o->setPaymentMethods($n->getCollectionOfObjectValues([PaymentMethod::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fullPaymentDueIn property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @return TimeDuration|null
    */
    public function getFullPaymentDueIn(): ?TimeDuration {
        return $this->fullPaymentDueIn;
    }

    /**
     * Gets the immediatePay property value. This field should be included and set to <code>true</code> if the seller wants to require immediate payment from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><br><b>Default:</b> False
     * @return bool|null
    */
    public function getImmediatePay(): ?bool {
        return $this->immediatePay;
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace to which this payment business policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the name property value. A seller-defined name for this payment business policy. Names must be unique for policies assigned to the same marketplace.<br><br><b>Max length:</b> 64
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the paymentInstructions property value. <p class="tablenote"><b>Note:</b> DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.</p>A free-form string field that allows sellers to add detailed payment instructions to their listings.
     * @return string|null
    */
    public function getPaymentInstructions(): ?string {
        return $this->paymentInstructions;
    }

    /**
     * Gets the paymentMethods property value. <p class="tablenote"><b>Note:</b> This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</p>This array is used to specify one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform.
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->paymentMethods;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('categoryTypes', $this->getCategoryTypes());
        $writer->writeObjectValue('deposit', $this->getDeposit());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('fullPaymentDueIn', $this->getFullPaymentDueIn());
        $writer->writeBooleanValue('immediatePay', $this->getImmediatePay());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('paymentInstructions', $this->getPaymentInstructions());
        $writer->writeCollectionOfObjectValues('paymentMethods', $this->getPaymentMethods());
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
     * Sets the categoryTypes property value. This container is used to specify whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
     * @param array<CategoryType>|null $value Value to set for the categoryTypes property.
    */
    public function setCategoryTypes(?array $value): void {
        $this->categoryTypes = $value;
    }

    /**
     * Sets the deposit property value. This type is used to specify/indicate that an initial deposit is required for a motor vehicle listing.
     * @param Deposit|null $value Value to set for the deposit property.
    */
    public function setDeposit(?Deposit $value): void {
        $this->deposit = $value;
    }

    /**
     * Sets the description property value. A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the fullPaymentDueIn property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @param TimeDuration|null $value Value to set for the fullPaymentDueIn property.
    */
    public function setFullPaymentDueIn(?TimeDuration $value): void {
        $this->fullPaymentDueIn = $value;
    }

    /**
     * Sets the immediatePay property value. This field should be included and set to <code>true</code> if the seller wants to require immediate payment from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><br><b>Default:</b> False
     * @param bool|null $value Value to set for the immediatePay property.
    */
    public function setImmediatePay(?bool $value): void {
        $this->immediatePay = $value;
    }

    /**
     * Sets the marketplaceId property value. The ID of the eBay marketplace to which this payment business policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the name property value. A seller-defined name for this payment business policy. Names must be unique for policies assigned to the same marketplace.<br><br><b>Max length:</b> 64
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the paymentInstructions property value. <p class="tablenote"><b>Note:</b> DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.</p>A free-form string field that allows sellers to add detailed payment instructions to their listings.
     * @param string|null $value Value to set for the paymentInstructions property.
    */
    public function setPaymentInstructions(?string $value): void {
        $this->paymentInstructions = $value;
    }

    /**
     * Sets the paymentMethods property value. <p class="tablenote"><b>Note:</b> This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</p>This array is used to specify one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform.
     * @param array<PaymentMethod>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value): void {
        $this->paymentMethods = $value;
    }

}
