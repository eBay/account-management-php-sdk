<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type describes calculated discount rules determining total shipping cost reductions for combined items.
*/
class CalculatedShippingRuleType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CombinedShippingRule>|null $combinedShippingRules This array lists the discount rules applied to combined shipments, detailing calculation methods and rule identifiers. <br><br>When used by a create call, there won't be any rule ID.
    */
    private ?array $combinedShippingRules = null;
    
    /**
     * @var string|null $combinedShippingRuleType This container defines the type of combined-shipping rule applied to calculate discounts, such as weight-based, percentage-based, or flat-rate models. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
    */
    private ?string $combinedShippingRuleType = null;
    
    /**
     * Instantiates a new CalculatedShippingRuleType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculatedShippingRuleType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculatedShippingRuleType {
        return new CalculatedShippingRuleType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedShippingRules property value. This array lists the discount rules applied to combined shipments, detailing calculation methods and rule identifiers. <br><br>When used by a create call, there won't be any rule ID.
     * @return array<CombinedShippingRule>|null
    */
    public function getCombinedShippingRules(): ?array {
        return $this->combinedShippingRules;
    }

    /**
     * Gets the combinedShippingRuleType property value. This container defines the type of combined-shipping rule applied to calculate discounts, such as weight-based, percentage-based, or flat-rate models. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
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
     * Sets the combinedShippingRules property value. This array lists the discount rules applied to combined shipments, detailing calculation methods and rule identifiers. <br><br>When used by a create call, there won't be any rule ID.
     * @param array<CombinedShippingRule>|null $value Value to set for the combinedShippingRules property.
    */
    public function setCombinedShippingRules(?array $value): void {
        $this->combinedShippingRules = $value;
    }

    /**
     * Sets the combinedShippingRuleType property value. This container defines the type of combined-shipping rule applied to calculate discounts, such as weight-based, percentage-based, or flat-rate models. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the combinedShippingRuleType property.
    */
    public function setCombinedShippingRuleType(?string $value): void {
        $this->combinedShippingRuleType = $value;
    }

}
