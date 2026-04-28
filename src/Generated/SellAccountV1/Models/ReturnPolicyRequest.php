<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This root container defines a seller's return business policy for a specific marketplace and category group. This type is used when creating or updating a return business policy.
*/
class ReturnPolicyRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CategoryType>|null $categoryTypes This container indicates which category group that the return policy applies to.<br><br><span class="tablenote"><b>Note</b>: Return business policies are not applicable to motor vehicle listings, so the <b>categoryTypes.name</b> value must be set to <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business policies.</span>
    */
    private ?array $categoryTypes = null;
    
    /**
     * @var string|null $description A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $extendedHolidayReturnsOffered <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer supports extended holiday returns. Any value supplied in this field is neither read nor returned.</p> 
    */
    private ?bool $extendedHolidayReturnsOffered = null;
    
    /**
     * @var InternationalReturnOverrideType|null $internationalOverride This type defines the fields for a seller's international return policy. Sellers have the ability to set separate domestic and international return policies, but if an international return policy is not set, the same return policy settings specified for the domestic return policy are also used for returns for international buyers. 
    */
    private ?InternationalReturnOverrideType $internationalOverride = null;
    
    /**
     * @var string|null $marketplaceId The ID of the eBay marketplace to which this return business policy applies.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var string|null $name A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace. <br><br><b>Max length</b>: 64
    */
    private ?string $name = null;
    
    /**
     * @var string|null $refundMethod This field sets the refund method to use for returned items. Its value defaults to <code>MONEY_BACK</code> if omitted, so this field is only needed for <b>Buy online, Pickup in Store</b> or <b>Click and Collect</b> items where the seller is willing to offer merchandise credit as an additional refund method to buyers. Getting their money back for returned items is always an option for buyers, regardless of what the seller sets in this field.<p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> If this field is not included in a return business policy, it will default to <code>MONEY_BACK</code>.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay API documentation</a>
    */
    private ?string $refundMethod = null;
    
    /**
     * @var string|null $restockingFeePercentage <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns. If this field is included, it is ignored.</p>
    */
    private ?string $restockingFeePercentage = null;
    
    /**
     * @var string|null $returnInstructions This text-based field provides more details on seller-specified return instructions. <br><p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this field, call <a href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies">getReturnPolicies</a> method of the <b>Metadata API</b>. Then you will look for the <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the eBay category.</span></p><br><b>Max length</b>: 5000 (8000 for DE)
    */
    private ?string $returnInstructions = null;
    
    /**
     * @var string|null $returnMethod This field can be used if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
    */
    private ?string $returnMethod = null;
    
    /**
     * @var TimeDuration|null $returnPeriod A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
    */
    private ?TimeDuration $returnPeriod = null;
    
    /**
     * @var bool|null $returnsAccepted If set to <code>true</code>, the seller accepts returns. If set to <code>false</code>, the seller does not accept returns.<br><p><span class="tablenote"><strong>Note:</strong>Top-Rated sellers must accept item returns and the <b>handlingTime</b> should be set to zero days or one day for a listing to receive a Top-Rated Plus badge on the View Item or search result pages. For more information on eBay's Top-Rated seller program, see <a href="http://pages.ebay.com/help/sell/top-rated.html ">Becoming a Top Rated Seller and qualifying for Top Rated Plus benefits</a>.</span></p>
    */
    private ?bool $returnsAccepted = null;
    
    /**
     * @var string|null $returnShippingCostPayer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p> <br>Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.  <br><br>This field is conditionally required if <b>returnsAccepted</b> is set to <code>true</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
    */
    private ?string $returnShippingCostPayer = null;
    
    /**
     * Instantiates a new ReturnPolicyRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReturnPolicyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReturnPolicyRequest {
        return new ReturnPolicyRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryTypes property value. This container indicates which category group that the return policy applies to.<br><br><span class="tablenote"><b>Note</b>: Return business policies are not applicable to motor vehicle listings, so the <b>categoryTypes.name</b> value must be set to <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business policies.</span>
     * @return array<CategoryType>|null
    */
    public function getCategoryTypes(): ?array {
        return $this->categoryTypes;
    }

    /**
     * Gets the description property value. A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the extendedHolidayReturnsOffered property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer supports extended holiday returns. Any value supplied in this field is neither read nor returned.</p> 
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
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'refundMethod' => fn(ParseNode $n) => $o->setRefundMethod($n->getStringValue()),
            'restockingFeePercentage' => fn(ParseNode $n) => $o->setRestockingFeePercentage($n->getStringValue()),
            'returnInstructions' => fn(ParseNode $n) => $o->setReturnInstructions($n->getStringValue()),
            'returnMethod' => fn(ParseNode $n) => $o->setReturnMethod($n->getStringValue()),
            'returnPeriod' => fn(ParseNode $n) => $o->setReturnPeriod($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'returnsAccepted' => fn(ParseNode $n) => $o->setReturnsAccepted($n->getBooleanValue()),
            'returnShippingCostPayer' => fn(ParseNode $n) => $o->setReturnShippingCostPayer($n->getStringValue()),
        ];
    }

    /**
     * Gets the internationalOverride property value. This type defines the fields for a seller's international return policy. Sellers have the ability to set separate domestic and international return policies, but if an international return policy is not set, the same return policy settings specified for the domestic return policy are also used for returns for international buyers. 
     * @return InternationalReturnOverrideType|null
    */
    public function getInternationalOverride(): ?InternationalReturnOverrideType {
        return $this->internationalOverride;
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace to which this return business policy applies.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the name property value. A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace. <br><br><b>Max length</b>: 64
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the refundMethod property value. This field sets the refund method to use for returned items. Its value defaults to <code>MONEY_BACK</code> if omitted, so this field is only needed for <b>Buy online, Pickup in Store</b> or <b>Click and Collect</b> items where the seller is willing to offer merchandise credit as an additional refund method to buyers. Getting their money back for returned items is always an option for buyers, regardless of what the seller sets in this field.<p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> If this field is not included in a return business policy, it will default to <code>MONEY_BACK</code>.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRefundMethod(): ?string {
        return $this->refundMethod;
    }

    /**
     * Gets the restockingFeePercentage property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns. If this field is included, it is ignored.</p>
     * @return string|null
    */
    public function getRestockingFeePercentage(): ?string {
        return $this->restockingFeePercentage;
    }

    /**
     * Gets the returnInstructions property value. This text-based field provides more details on seller-specified return instructions. <br><p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this field, call <a href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies">getReturnPolicies</a> method of the <b>Metadata API</b>. Then you will look for the <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the eBay category.</span></p><br><b>Max length</b>: 5000 (8000 for DE)
     * @return string|null
    */
    public function getReturnInstructions(): ?string {
        return $this->returnInstructions;
    }

    /**
     * Gets the returnMethod property value. This field can be used if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReturnMethod(): ?string {
        return $this->returnMethod;
    }

    /**
     * Gets the returnPeriod property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @return TimeDuration|null
    */
    public function getReturnPeriod(): ?TimeDuration {
        return $this->returnPeriod;
    }

    /**
     * Gets the returnsAccepted property value. If set to <code>true</code>, the seller accepts returns. If set to <code>false</code>, the seller does not accept returns.<br><p><span class="tablenote"><strong>Note:</strong>Top-Rated sellers must accept item returns and the <b>handlingTime</b> should be set to zero days or one day for a listing to receive a Top-Rated Plus badge on the View Item or search result pages. For more information on eBay's Top-Rated seller program, see <a href="http://pages.ebay.com/help/sell/top-rated.html ">Becoming a Top Rated Seller and qualifying for Top Rated Plus benefits</a>.</span></p>
     * @return bool|null
    */
    public function getReturnsAccepted(): ?bool {
        return $this->returnsAccepted;
    }

    /**
     * Gets the returnShippingCostPayer property value. This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p> <br>Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.  <br><br>This field is conditionally required if <b>returnsAccepted</b> is set to <code>true</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReturnShippingCostPayer(): ?string {
        return $this->returnShippingCostPayer;
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
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('refundMethod', $this->getRefundMethod());
        $writer->writeStringValue('restockingFeePercentage', $this->getRestockingFeePercentage());
        $writer->writeStringValue('returnInstructions', $this->getReturnInstructions());
        $writer->writeStringValue('returnMethod', $this->getReturnMethod());
        $writer->writeObjectValue('returnPeriod', $this->getReturnPeriod());
        $writer->writeBooleanValue('returnsAccepted', $this->getReturnsAccepted());
        $writer->writeStringValue('returnShippingCostPayer', $this->getReturnShippingCostPayer());
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
     * Sets the categoryTypes property value. This container indicates which category group that the return policy applies to.<br><br><span class="tablenote"><b>Note</b>: Return business policies are not applicable to motor vehicle listings, so the <b>categoryTypes.name</b> value must be set to <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business policies.</span>
     * @param array<CategoryType>|null $value Value to set for the categoryTypes property.
    */
    public function setCategoryTypes(?array $value): void {
        $this->categoryTypes = $value;
    }

    /**
     * Sets the description property value. A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br><br><b>Max length</b>: 250
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the extendedHolidayReturnsOffered property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer supports extended holiday returns. Any value supplied in this field is neither read nor returned.</p> 
     * @param bool|null $value Value to set for the extendedHolidayReturnsOffered property.
    */
    public function setExtendedHolidayReturnsOffered(?bool $value): void {
        $this->extendedHolidayReturnsOffered = $value;
    }

    /**
     * Sets the internationalOverride property value. This type defines the fields for a seller's international return policy. Sellers have the ability to set separate domestic and international return policies, but if an international return policy is not set, the same return policy settings specified for the domestic return policy are also used for returns for international buyers. 
     * @param InternationalReturnOverrideType|null $value Value to set for the internationalOverride property.
    */
    public function setInternationalOverride(?InternationalReturnOverrideType $value): void {
        $this->internationalOverride = $value;
    }

    /**
     * Sets the marketplaceId property value. The ID of the eBay marketplace to which this return business policy applies.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the name property value. A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace. <br><br><b>Max length</b>: 64
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the refundMethod property value. This field sets the refund method to use for returned items. Its value defaults to <code>MONEY_BACK</code> if omitted, so this field is only needed for <b>Buy online, Pickup in Store</b> or <b>Click and Collect</b> items where the seller is willing to offer merchandise credit as an additional refund method to buyers. Getting their money back for returned items is always an option for buyers, regardless of what the seller sets in this field.<p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> If this field is not included in a return business policy, it will default to <code>MONEY_BACK</code>.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the refundMethod property.
    */
    public function setRefundMethod(?string $value): void {
        $this->refundMethod = $value;
    }

    /**
     * Sets the restockingFeePercentage property value. <p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns. If this field is included, it is ignored.</p>
     * @param string|null $value Value to set for the restockingFeePercentage property.
    */
    public function setRestockingFeePercentage(?string $value): void {
        $this->restockingFeePercentage = $value;
    }

    /**
     * Sets the returnInstructions property value. This text-based field provides more details on seller-specified return instructions. <br><p class="tablenote"><span  style="color: #dd1e31;"><b>Important!</b></span> This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this field, call <a href="/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies">getReturnPolicies</a> method of the <b>Metadata API</b>. Then you will look for the <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the eBay category.</span></p><br><b>Max length</b>: 5000 (8000 for DE)
     * @param string|null $value Value to set for the returnInstructions property.
    */
    public function setReturnInstructions(?string $value): void {
        $this->returnInstructions = $value;
    }

    /**
     * Sets the returnMethod property value. This field can be used if the seller is willing and able to offer a replacement item as an alternative to 'Money Back'. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the returnMethod property.
    */
    public function setReturnMethod(?string $value): void {
        $this->returnMethod = $value;
    }

    /**
     * Sets the returnPeriod property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @param TimeDuration|null $value Value to set for the returnPeriod property.
    */
    public function setReturnPeriod(?TimeDuration $value): void {
        $this->returnPeriod = $value;
    }

    /**
     * Sets the returnsAccepted property value. If set to <code>true</code>, the seller accepts returns. If set to <code>false</code>, the seller does not accept returns.<br><p><span class="tablenote"><strong>Note:</strong>Top-Rated sellers must accept item returns and the <b>handlingTime</b> should be set to zero days or one day for a listing to receive a Top-Rated Plus badge on the View Item or search result pages. For more information on eBay's Top-Rated seller program, see <a href="http://pages.ebay.com/help/sell/top-rated.html ">Becoming a Top Rated Seller and qualifying for Top Rated Plus benefits</a>.</span></p>
     * @param bool|null $value Value to set for the returnsAccepted property.
    */
    public function setReturnsAccepted(?bool $value): void {
        $this->returnsAccepted = $value;
    }

    /**
     * Sets the returnShippingCostPayer property value. This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Eligible Parts & Accessories (P&A) listings require sellers to offer buyers free returns with a minimum return period of 30 days. See <a href="/api-docs/user-guides/static/trading-user-guide/ebay-motors-parts-accessories-easy-returns.html"  target="_blank">Support for easy returns in Parts and Accessories</a> for details.</span></p> <br>Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.  <br><br>This field is conditionally required if <b>returnsAccepted</b> is set to <code>true</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the returnShippingCostPayer property.
    */
    public function setReturnShippingCostPayer(?string $value): void {
        $this->returnShippingCostPayer = $value;
    }

}
