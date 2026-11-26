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
 * A complex type that is populated with a response containing a return policies.
*/
class SetReturnPolicyResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CategoryType>|null $categoryTypes This field always returns <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business policies, since return business policies are not applicable to motor vehicle listings.
    */
    private ?array $categoryTypes = null;
    
    /**
     * @var string|null $description A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. <br><br><b>Max length</b>: 250
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $extendedHolidayReturnsOffered <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer supports extended holiday returns. This field should no longer be returned.</p> 
    */
    private ?bool $extendedHolidayReturnsOffered = null;
    
    /**
     * @var InternationalReturnOverrideType|null $internationalOverride This container is used by the seller to specify a separate  international return policy, and will only be returned if the seller has set a separate return policy for international orders. If a separate international return policy is not defined by a seller, all of the domestic return policy settings will also apply to international orders.
    */
    private ?InternationalReturnOverrideType $internationalOverride = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId The ID of the eBay marketplace to which this return business policy applies.
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * @var string|null $name A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace.<br><br><b>Max length:</b> 64
    */
    private ?string $name = null;
    
    /**
     * @var RefundMethodEnum|null $refundMethod If a seller indicates that they will accept buyer returns, this value will be <code>MONEY_BACK</code>.
    */
    private ?RefundMethodEnum $refundMethod = null;
    
    /**
     * @var string|null $restockingFeePercentage <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns.</p>
    */
    private ?string $restockingFeePercentage = null;
    
    /**
     * @var string|null $returnInstructions This text-based field provides more details on seller-specified return instructions. <br><p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this field, call <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getreturnpolicies">getReturnPolicies</a> method of the <b>Metadata API</b>. Then you will look for the <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the eBay category.</span></p><br><b>Max length</b>: 5000 (8000 for DE)
    */
    private ?string $returnInstructions = null;
    
    /**
     * @var ReturnMethodEnum|null $returnMethod This field will be returned if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'.
    */
    private ?ReturnMethodEnum $returnMethod = null;
    
    /**
     * @var TimeDuration|null $returnPeriod This container specifies the amount of days that the buyer has to return the item after receiving it. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. This container will be returned unless the business policy states that the seller does not accept returns. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p>
    */
    private ?TimeDuration $returnPeriod = null;
    
    /**
     * @var string|null $returnPolicyId A unique eBay-assigned ID for a return business policy. This ID is generated when the policy is created.
    */
    private ?string $returnPolicyId = null;
    
    /**
     * @var bool|null $returnsAccepted If set to <code>true</code>, the seller accepts returns. If set to <code>false</code>, this field indicates that the seller does not accept returns.
    */
    private ?bool $returnsAccepted = null;
    
    /**
     * @var ReturnShippingCostPayerEnum|null $returnShippingCostPayer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>.  <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p> <br>Note that the seller is always responsible for return shipping costs for SNAD-related issues.  <br><br>This container will be returned unless the business policy states that the seller does not accept returns.
    */
    private ?ReturnShippingCostPayerEnum $returnShippingCostPayer = null;
    
    /**
     * @var array<ErrorDetailV3>|null $warnings An array of one or more errors or warnings that were generated during the processing of the request. If there were no issues with the request, this array will return empty.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new SetReturnPolicyResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetReturnPolicyResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetReturnPolicyResponse {
        return new SetReturnPolicyResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryTypes property value. This field always returns <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business policies, since return business policies are not applicable to motor vehicle listings.
     * @return array<CategoryType>|null
    */
    public function getCategoryTypes(): ?array {
        return $this->categoryTypes;
    }

    /**
     * Gets the description property value. A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. <br><br><b>Max length</b>: 250
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the extendedHolidayReturnsOffered property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer supports extended holiday returns. This field should no longer be returned.</p> 
     * @return bool|null
    */
    public function getExtendedHolidayReturnsOffered(): ?bool {
        return $this->extendedHolidayReturnsOffered;
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
            'extendedHolidayReturnsOffered' => fn(ParseNode $n) => $o->setExtendedHolidayReturnsOffered($n->getBooleanValue()),
            'internationalOverride' => fn(ParseNode $n) => $o->setInternationalOverride($n->getObjectValue([InternationalReturnOverrideType::class, 'createFromDiscriminatorValue'])),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'refundMethod' => fn(ParseNode $n) => $o->setRefundMethod($n->getEnumValue(RefundMethodEnum::class)),
            'restockingFeePercentage' => fn(ParseNode $n) => $o->setRestockingFeePercentage($n->getStringValue()),
            'returnInstructions' => fn(ParseNode $n) => $o->setReturnInstructions($n->getStringValue()),
            'returnMethod' => fn(ParseNode $n) => $o->setReturnMethod($n->getEnumValue(ReturnMethodEnum::class)),
            'returnPeriod' => fn(ParseNode $n) => $o->setReturnPeriod($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'returnPolicyId' => fn(ParseNode $n) => $o->setReturnPolicyId($n->getStringValue()),
            'returnsAccepted' => fn(ParseNode $n) => $o->setReturnsAccepted($n->getBooleanValue()),
            'returnShippingCostPayer' => fn(ParseNode $n) => $o->setReturnShippingCostPayer($n->getEnumValue(ReturnShippingCostPayerEnum::class)),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the internationalOverride property value. This container is used by the seller to specify a separate  international return policy, and will only be returned if the seller has set a separate return policy for international orders. If a separate international return policy is not defined by a seller, all of the domestic return policy settings will also apply to international orders.
     * @return InternationalReturnOverrideType|null
    */
    public function getInternationalOverride(): ?InternationalReturnOverrideType {
        return $this->internationalOverride;
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace to which this return business policy applies.
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
        return $this->marketplaceId;
    }

    /**
     * Gets the name property value. A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace.<br><br><b>Max length:</b> 64
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the refundMethod property value. If a seller indicates that they will accept buyer returns, this value will be <code>MONEY_BACK</code>.
     * @return RefundMethodEnum|null
    */
    public function getRefundMethod(): ?RefundMethodEnum {
        return $this->refundMethod;
    }

    /**
     * Gets the restockingFeePercentage property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns.</p>
     * @return string|null
    */
    public function getRestockingFeePercentage(): ?string {
        return $this->restockingFeePercentage;
    }

    /**
     * Gets the returnInstructions property value. This text-based field provides more details on seller-specified return instructions. <br><p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this field, call <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getreturnpolicies">getReturnPolicies</a> method of the <b>Metadata API</b>. Then you will look for the <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the eBay category.</span></p><br><b>Max length</b>: 5000 (8000 for DE)
     * @return string|null
    */
    public function getReturnInstructions(): ?string {
        return $this->returnInstructions;
    }

    /**
     * Gets the returnMethod property value. This field will be returned if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'.
     * @return ReturnMethodEnum|null
    */
    public function getReturnMethod(): ?ReturnMethodEnum {
        return $this->returnMethod;
    }

    /**
     * Gets the returnPeriod property value. This container specifies the amount of days that the buyer has to return the item after receiving it. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. This container will be returned unless the business policy states that the seller does not accept returns. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p>
     * @return TimeDuration|null
    */
    public function getReturnPeriod(): ?TimeDuration {
        return $this->returnPeriod;
    }

    /**
     * Gets the returnPolicyId property value. A unique eBay-assigned ID for a return business policy. This ID is generated when the policy is created.
     * @return string|null
    */
    public function getReturnPolicyId(): ?string {
        return $this->returnPolicyId;
    }

    /**
     * Gets the returnsAccepted property value. If set to <code>true</code>, the seller accepts returns. If set to <code>false</code>, this field indicates that the seller does not accept returns.
     * @return bool|null
    */
    public function getReturnsAccepted(): ?bool {
        return $this->returnsAccepted;
    }

    /**
     * Gets the returnShippingCostPayer property value. This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>.  <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p> <br>Note that the seller is always responsible for return shipping costs for SNAD-related issues.  <br><br>This container will be returned unless the business policy states that the seller does not accept returns.
     * @return ReturnShippingCostPayerEnum|null
    */
    public function getReturnShippingCostPayer(): ?ReturnShippingCostPayerEnum {
        return $this->returnShippingCostPayer;
    }

    /**
     * Gets the warnings property value. An array of one or more errors or warnings that were generated during the processing of the request. If there were no issues with the request, this array will return empty.
     * @return array<ErrorDetailV3>|null
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('extendedHolidayReturnsOffered', $this->getExtendedHolidayReturnsOffered());
        $writer->writeObjectValue('internationalOverride', $this->getInternationalOverride());
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('refundMethod', $this->getRefundMethod());
        $writer->writeStringValue('restockingFeePercentage', $this->getRestockingFeePercentage());
        $writer->writeStringValue('returnInstructions', $this->getReturnInstructions());
        $writer->writeEnumValue('returnMethod', $this->getReturnMethod());
        $writer->writeObjectValue('returnPeriod', $this->getReturnPeriod());
        $writer->writeStringValue('returnPolicyId', $this->getReturnPolicyId());
        $writer->writeBooleanValue('returnsAccepted', $this->getReturnsAccepted());
        $writer->writeEnumValue('returnShippingCostPayer', $this->getReturnShippingCostPayer());
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
     * Sets the categoryTypes property value. This field always returns <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business policies, since return business policies are not applicable to motor vehicle listings.
     * @param array<CategoryType>|null $value Value to set for the categoryTypes property.
    */
    public function setCategoryTypes(?array $value): void {
        $this->categoryTypes = $value;
    }

    /**
     * Sets the description property value. A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. <br><br><b>Max length</b>: 250
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the extendedHolidayReturnsOffered property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer supports extended holiday returns. This field should no longer be returned.</p> 
     * @param bool|null $value Value to set for the extendedHolidayReturnsOffered property.
    */
    public function setExtendedHolidayReturnsOffered(?bool $value): void {
        $this->extendedHolidayReturnsOffered = $value;
    }

    /**
     * Sets the internationalOverride property value. This container is used by the seller to specify a separate  international return policy, and will only be returned if the seller has set a separate return policy for international orders. If a separate international return policy is not defined by a seller, all of the domestic return policy settings will also apply to international orders.
     * @param InternationalReturnOverrideType|null $value Value to set for the internationalOverride property.
    */
    public function setInternationalOverride(?InternationalReturnOverrideType $value): void {
        $this->internationalOverride = $value;
    }

    /**
     * Sets the marketplaceId property value. The ID of the eBay marketplace to which this return business policy applies.
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the name property value. A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace.<br><br><b>Max length:</b> 64
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the refundMethod property value. If a seller indicates that they will accept buyer returns, this value will be <code>MONEY_BACK</code>.
     * @param RefundMethodEnum|null $value Value to set for the refundMethod property.
    */
    public function setRefundMethod(?RefundMethodEnum $value): void {
        $this->refundMethod = $value;
    }

    /**
     * Sets the restockingFeePercentage property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns.</p>
     * @param string|null $value Value to set for the restockingFeePercentage property.
    */
    public function setRestockingFeePercentage(?string $value): void {
        $this->restockingFeePercentage = $value;
    }

    /**
     * Sets the returnInstructions property value. This text-based field provides more details on seller-specified return instructions. <br><p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this field, call <a href="/develop/api/sell/metadata_api#sell-metadata_api-marketplace-getreturnpolicies">getReturnPolicies</a> method of the <b>Metadata API</b>. Then you will look for the <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the eBay category.</span></p><br><b>Max length</b>: 5000 (8000 for DE)
     * @param string|null $value Value to set for the returnInstructions property.
    */
    public function setReturnInstructions(?string $value): void {
        $this->returnInstructions = $value;
    }

    /**
     * Sets the returnMethod property value. This field will be returned if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'.
     * @param ReturnMethodEnum|null $value Value to set for the returnMethod property.
    */
    public function setReturnMethod(?ReturnMethodEnum $value): void {
        $this->returnMethod = $value;
    }

    /**
     * Sets the returnPeriod property value. This container specifies the amount of days that the buyer has to return the item after receiving it. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. This container will be returned unless the business policy states that the seller does not accept returns. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p>
     * @param TimeDuration|null $value Value to set for the returnPeriod property.
    */
    public function setReturnPeriod(?TimeDuration $value): void {
        $this->returnPeriod = $value;
    }

    /**
     * Sets the returnPolicyId property value. A unique eBay-assigned ID for a return business policy. This ID is generated when the policy is created.
     * @param string|null $value Value to set for the returnPolicyId property.
    */
    public function setReturnPolicyId(?string $value): void {
        $this->returnPolicyId = $value;
    }

    /**
     * Sets the returnsAccepted property value. If set to <code>true</code>, the seller accepts returns. If set to <code>false</code>, this field indicates that the seller does not accept returns.
     * @param bool|null $value Value to set for the returnsAccepted property.
    */
    public function setReturnsAccepted(?bool $value): void {
        $this->returnsAccepted = $value;
    }

    /**
     * Sets the returnShippingCostPayer property value. This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>.  <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p> <br>Note that the seller is always responsible for return shipping costs for SNAD-related issues.  <br><br>This container will be returned unless the business policy states that the seller does not accept returns.
     * @param ReturnShippingCostPayerEnum|null $value Value to set for the returnShippingCostPayer property.
    */
    public function setReturnShippingCostPayer(?ReturnShippingCostPayerEnum $value): void {
        $this->returnShippingCostPayer = $value;
    }

    /**
     * Sets the warnings property value. An array of one or more errors or warnings that were generated during the processing of the request. If there were no issues with the request, this array will return empty.
     * @param array<ErrorDetailV3>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
