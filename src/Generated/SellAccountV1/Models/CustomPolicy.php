<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container defines a seller's custom policy identified by policy ID for the selected eBay marketplace. A successful call returns the requested policy information.
*/
class CustomPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $customPolicyId The unique custom policy identifier for a policy.
    */
    private ?string $customPolicyId = null;
    
    /**
     * @var string|null $description Contains the seller's policy and policy terms. Buyers access this information from the View Item page for items to which the policy has been applied.<br><br><b>Max length:</b> 15,000
    */
    private ?string $description = null;
    
    /**
     * @var string|null $label Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to the seller's policy information.<br><br><b>Max length:</b> 65
    */
    private ?string $label = null;
    
    /**
     * @var string|null $name The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type.<br><br><span class="tablenote"><strong>Note:</strong> This field is visible only to the seller. </span><br><b>Max length:</b> 65
    */
    private ?string $name = null;
    
    /**
     * @var string|null $policyType Specifies the type of Custom Policy being returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CustomPolicyTypeEnum'>eBay API documentation</a>
    */
    private ?string $policyType = null;
    
    /**
     * Instantiates a new CustomPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomPolicy {
        return new CustomPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the customPolicyId property value. The unique custom policy identifier for a policy.
     * @return string|null
    */
    public function getCustomPolicyId(): ?string {
        return $this->customPolicyId;
    }

    /**
     * Gets the description property value. Contains the seller's policy and policy terms. Buyers access this information from the View Item page for items to which the policy has been applied.<br><br><b>Max length:</b> 15,000
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
            'customPolicyId' => fn(ParseNode $n) => $o->setCustomPolicyId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getStringValue()),
        ];
    }

    /**
     * Gets the label property value. Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to the seller's policy information.<br><br><b>Max length:</b> 65
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the name property value. The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type.<br><br><span class="tablenote"><strong>Note:</strong> This field is visible only to the seller. </span><br><b>Max length:</b> 65
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the policyType property value. Specifies the type of Custom Policy being returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CustomPolicyTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPolicyType(): ?string {
        return $this->policyType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customPolicyId', $this->getCustomPolicyId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('policyType', $this->getPolicyType());
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
     * Sets the customPolicyId property value. The unique custom policy identifier for a policy.
     * @param string|null $value Value to set for the customPolicyId property.
    */
    public function setCustomPolicyId(?string $value): void {
        $this->customPolicyId = $value;
    }

    /**
     * Sets the description property value. Contains the seller's policy and policy terms. Buyers access this information from the View Item page for items to which the policy has been applied.<br><br><b>Max length:</b> 15,000
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the label property value. Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to the seller's policy information.<br><br><b>Max length:</b> 65
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the name property value. The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type.<br><br><span class="tablenote"><strong>Note:</strong> This field is visible only to the seller. </span><br><b>Max length:</b> 65
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the policyType property value. Specifies the type of Custom Policy being returned. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CustomPolicyTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?string $value): void {
        $this->policyType = $value;
    }

}
