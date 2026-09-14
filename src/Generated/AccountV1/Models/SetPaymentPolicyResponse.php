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
 * Complex type that that gets populated with a response containing a payment policy.
*/
class SetPaymentPolicyResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CategoryType>|null $categoryTypes This container indicates whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
    */
    private ?array $categoryTypes = null;
    
    /**
     * @var Deposit|null $deposit This type is used to specify/indicate that an initial deposit is required for a motor vehicle listing.
    */
    private ?Deposit $deposit = null;
    
    /**
     * @var string|null $description A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. <br><br><b>Max length</b>: 250
    */
    private ?string $description = null;
    
    /**
     * @var TimeDuration|null $fullPaymentDueIn A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
    */
    private ?TimeDuration $fullPaymentDueIn = null;
    
    /**
     * @var bool|null $immediatePay The value returned in this field will reflect the value set by the seller in the <b>immediatePay</b> request field. A value of <code>true</code> indicates that immediate payment is required from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><br>It is possible for the seller to set this field as <code>true</code> in the payment business policy, but it will not apply in some scenarios. For example, immediate payment is not applicable for auction listings that have a winning bidder, for buyer purchases that involve the Best Offer feature, or for transactions that happen offline between the buyer and seller.
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
     * @var string|null $paymentInstructions <p class="tablenote"><b>Note:</b> NO LONGER SUPPORTED. Although this field may be returned for some older payment business policies, payment instructions are no longer supported by payment business policies. If this field is returned, it can be ignored and these payment instructions will not appear in any listings that use the corresponding business policy.</p>A free-form string field that allows sellers to add detailed payment instructions to their listings.
    */
    private ?string $paymentInstructions = null;
    
    /**
     * @var array<PaymentMethod>|null $paymentMethods This array shows the available payment methods that the seller has set for the payment business policy.<br><br>Sellers do not have to specify any electronic payment methods for listings, so this array will often be returned empty unless the payment business policy is intended for motor vehicle listings or other items in categories where offline payments are required or supported.
    */
    private ?array $paymentMethods = null;
    
    /**
     * @var string|null $paymentPolicyId A unique eBay-assigned ID for a payment business policy. This ID is generated when the policy is created.
    */
    private ?string $paymentPolicyId = null;
    
    /**
     * @var array<Error>|null $warnings An array of one or more errors or warnings that were generated during the processing of the request. If there were no issues with the request, this array will return empty.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new SetPaymentPolicyResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetPaymentPolicyResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetPaymentPolicyResponse {
        return new SetPaymentPolicyResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryTypes property value. This container indicates whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
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
     * Gets the description property value. A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. <br><br><b>Max length</b>: 250
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
            'paymentPolicyId' => fn(ParseNode $n) => $o->setPaymentPolicyId($n->getStringValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
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
     * Gets the immediatePay property value. The value returned in this field will reflect the value set by the seller in the <b>immediatePay</b> request field. A value of <code>true</code> indicates that immediate payment is required from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><br>It is possible for the seller to set this field as <code>true</code> in the payment business policy, but it will not apply in some scenarios. For example, immediate payment is not applicable for auction listings that have a winning bidder, for buyer purchases that involve the Best Offer feature, or for transactions that happen offline between the buyer and seller.
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
     * Gets the paymentInstructions property value. <p class="tablenote"><b>Note:</b> NO LONGER SUPPORTED. Although this field may be returned for some older payment business policies, payment instructions are no longer supported by payment business policies. If this field is returned, it can be ignored and these payment instructions will not appear in any listings that use the corresponding business policy.</p>A free-form string field that allows sellers to add detailed payment instructions to their listings.
     * @return string|null
    */
    public function getPaymentInstructions(): ?string {
        return $this->paymentInstructions;
    }

    /**
     * Gets the paymentMethods property value. This array shows the available payment methods that the seller has set for the payment business policy.<br><br>Sellers do not have to specify any electronic payment methods for listings, so this array will often be returned empty unless the payment business policy is intended for motor vehicle listings or other items in categories where offline payments are required or supported.
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->paymentMethods;
    }

    /**
     * Gets the paymentPolicyId property value. A unique eBay-assigned ID for a payment business policy. This ID is generated when the policy is created.
     * @return string|null
    */
    public function getPaymentPolicyId(): ?string {
        return $this->paymentPolicyId;
    }

    /**
     * Gets the warnings property value. An array of one or more errors or warnings that were generated during the processing of the request. If there were no issues with the request, this array will return empty.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
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
        $writer->writeStringValue('paymentPolicyId', $this->getPaymentPolicyId());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the categoryTypes property value. This container indicates whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings.
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
     * Sets the description property value. A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. <br><br><b>Max length</b>: 250
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
     * Sets the immediatePay property value. The value returned in this field will reflect the value set by the seller in the <b>immediatePay</b> request field. A value of <code>true</code> indicates that immediate payment is required from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><br>It is possible for the seller to set this field as <code>true</code> in the payment business policy, but it will not apply in some scenarios. For example, immediate payment is not applicable for auction listings that have a winning bidder, for buyer purchases that involve the Best Offer feature, or for transactions that happen offline between the buyer and seller.
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
     * Sets the paymentInstructions property value. <p class="tablenote"><b>Note:</b> NO LONGER SUPPORTED. Although this field may be returned for some older payment business policies, payment instructions are no longer supported by payment business policies. If this field is returned, it can be ignored and these payment instructions will not appear in any listings that use the corresponding business policy.</p>A free-form string field that allows sellers to add detailed payment instructions to their listings.
     * @param string|null $value Value to set for the paymentInstructions property.
    */
    public function setPaymentInstructions(?string $value): void {
        $this->paymentInstructions = $value;
    }

    /**
     * Sets the paymentMethods property value. This array shows the available payment methods that the seller has set for the payment business policy.<br><br>Sellers do not have to specify any electronic payment methods for listings, so this array will often be returned empty unless the payment business policy is intended for motor vehicle listings or other items in categories where offline payments are required or supported.
     * @param array<PaymentMethod>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value): void {
        $this->paymentMethods = $value;
    }

    /**
     * Sets the paymentPolicyId property value. A unique eBay-assigned ID for a payment business policy. This ID is generated when the policy is created.
     * @param string|null $value Value to set for the paymentPolicyId property.
    */
    public function setPaymentPolicyId(?string $value): void {
        $this->paymentPolicyId = $value;
    }

    /**
     * Sets the warnings property value. An array of one or more errors or warnings that were generated during the processing of the request. If there were no issues with the request, this array will return empty.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
