<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the flat-rate combined-shipping rule, which applies a fixed shipping cost for multiple items shipped together.
*/
class FlatShippingRuleType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CombinedShippingRule>|null $combinedShippingRules This array specifies the type of combined-shipping rule applied, such as flat-rate or cost-based.
    */
    private ?array $combinedShippingRules = null;
    
    /**
     * @var string|null $combinedShippingRuleType This container defines the type of discount rule applied (e.g., percentage-based, fixed-rate). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
    */
    private ?string $combinedShippingRuleType = null;
    
    /**
     * Instantiates a new FlatShippingRuleType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FlatShippingRuleType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FlatShippingRuleType {
        return new FlatShippingRuleType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedShippingRules property value. This array specifies the type of combined-shipping rule applied, such as flat-rate or cost-based.
     * @return array<CombinedShippingRule>|null
    */
    public function getCombinedShippingRules(): ?array {
        return $this->combinedShippingRules;
    }

    /**
     * Gets the combinedShippingRuleType property value. This container defines the type of discount rule applied (e.g., percentage-based, fixed-rate). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCombinedShippingRuleType(): ?string {
        return $this->combinedShippingRuleType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'combinedShippingRules' => fn(ParseNode $n) => $o->setCombinedShippingRules($n->getCollectionOfObjectValues([CombinedShippingRule::class, 'createFromDiscriminatorValue'])),
            'combinedShippingRuleType' => fn(ParseNode $n) => $o->setCombinedShippingRuleType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('combinedShippingRules', $this->getCombinedShippingRules());
        $writer->writeStringValue('combinedShippingRuleType', $this->getCombinedShippingRuleType());
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
     * Sets the combinedShippingRules property value. This array specifies the type of combined-shipping rule applied, such as flat-rate or cost-based.
     * @param array<CombinedShippingRule>|null $value Value to set for the combinedShippingRules property.
    */
    public function setCombinedShippingRules(?array $value): void {
        $this->combinedShippingRules = $value;
    }

    /**
     * Sets the combinedShippingRuleType property value. This container defines the type of discount rule applied (e.g., percentage-based, fixed-rate). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the combinedShippingRuleType property.
    */
    public function setCombinedShippingRuleType(?string $value): void {
        $this->combinedShippingRuleType = $value;
    }

}
