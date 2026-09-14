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
 * This type is used to request a list of custom policies.
*/
class CustomPolicyRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description Contains the seller specified policy and policy terms.<br><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 15,000
    */
    private ?string $description = null;
    
    /**
     * @var string|null $label Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to seller specified policy information.<br><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 65
    */
    private ?string $label = null;
    
    /**
     * @var string|null $name The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type.<br><br><span class="tablenote"><strong>Note:</strong> This field is visible only to the seller.</span><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 65
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new CustomPolicyRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomPolicyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomPolicyRequest {
        return new CustomPolicyRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Contains the seller specified policy and policy terms.<br><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 15,000
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the label property value. Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to seller specified policy information.<br><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 65
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the name property value. The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type.<br><br><span class="tablenote"><strong>Note:</strong> This field is visible only to the seller.</span><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 65
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the description property value. Contains the seller specified policy and policy terms.<br><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 15,000
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the label property value. Customer-facing label shown on View Item pages for items to which the policy applies. This seller-defined string is displayed as a system-generated hyperlink pointing to seller specified policy information.<br><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 65
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the name property value. The seller-defined name for the custom policy. Names must be unique for policies assigned to the same seller and policy type.<br><br><span class="tablenote"><strong>Note:</strong> This field is visible only to the seller.</span><br><span class="tablenote"><strong>Note:</strong> Always supply this field. If this field is not specified, any previous value is removed. Call the <a href="develop/api/sell/account_api_v1#sell-account_api_v1-custom_policy-getcustompolicy">getCustomPolicy</a> method to return the present field value for this policy.</span><br><b>Max length:</b> 65
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
