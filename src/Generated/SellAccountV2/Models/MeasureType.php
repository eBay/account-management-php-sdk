<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type displays measurement type with value, unit, and measurement system.
*/
class MeasureType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $unit This field defines the unit of measure (e.g., kilograms, pounds) associated with the value field. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:WeightUnitOfMeasureEnum'>eBay API documentation</a>
    */
    private ?string $unit = null;
    
    /**
     * @var string|null $value This field defines the numeric value representing the measurement, weight, in the specified unit.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new MeasureType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeasureType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeasureType {
        return new MeasureType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the unit property value. This field defines the unit of measure (e.g., kilograms, pounds) associated with the value field. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:WeightUnitOfMeasureEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the value property value. This field defines the numeric value representing the measurement, weight, in the specified unit.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the unit property value. This field defines the unit of measure (e.g., kilograms, pounds) associated with the value field. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:WeightUnitOfMeasureEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. This field defines the numeric value representing the measurement, weight, in the specified unit.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
