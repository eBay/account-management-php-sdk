<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the structure for calculated handling fee discounts applicable when combining multiple orders.
*/
class CalculatedHandlingRuleType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $combinedShippingRuleType This enumeration type specifies the type of combined-shipping rule applied to handling fees <br><br>(for example, weight-based, flat-rate, or percentage-based calculation method). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeHandlingEnum'>eBay API documentation</a>
    */
    private ?string $combinedShippingRuleType = null;
    
    /**
     * @var Amount|null $eachAdditionalAmount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $eachAdditionalAmount = null;
    
    /**
     * @var Amount|null $eachAdditionalAmountOffShippingCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $eachAdditionalAmountOffShippingCost = null;
    
    /**
     * @var float|null $eachAdditionalPercentOffShippingCost This integer specifies the percentage discount applied to the total shipping cost for each additional item in a combined shipment.
    */
    private ?float $eachAdditionalPercentOffShippingCost = null;
    
    /**
     * @var Amount|null $orderHandlingAmount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $orderHandlingAmount = null;
    
    /**
     * Instantiates a new CalculatedHandlingRuleType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculatedHandlingRuleType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculatedHandlingRuleType {
        return new CalculatedHandlingRuleType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the combinedShippingRuleType property value. This enumeration type specifies the type of combined-shipping rule applied to handling fees <br><br>(for example, weight-based, flat-rate, or percentage-based calculation method). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeHandlingEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCombinedShippingRuleType(): ?string {
        return $this->combinedShippingRuleType;
    }

    /**
     * Gets the eachAdditionalAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getEachAdditionalAmount(): ?Amount {
        return $this->eachAdditionalAmount;
    }

    /**
     * Gets the eachAdditionalAmountOffShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getEachAdditionalAmountOffShippingCost(): ?Amount {
        return $this->eachAdditionalAmountOffShippingCost;
    }

    /**
     * Gets the eachAdditionalPercentOffShippingCost property value. This integer specifies the percentage discount applied to the total shipping cost for each additional item in a combined shipment.
     * @return float|null
    */
    public function getEachAdditionalPercentOffShippingCost(): ?float {
        return $this->eachAdditionalPercentOffShippingCost;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'combinedShippingRuleType' => fn(ParseNode $n) => $o->setCombinedShippingRuleType($n->getStringValue()),
            'eachAdditionalAmount' => fn(ParseNode $n) => $o->setEachAdditionalAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'eachAdditionalAmountOffShippingCost' => fn(ParseNode $n) => $o->setEachAdditionalAmountOffShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'eachAdditionalPercentOffShippingCost' => fn(ParseNode $n) => $o->setEachAdditionalPercentOffShippingCost($n->getFloatValue()),
            'orderHandlingAmount' => fn(ParseNode $n) => $o->setOrderHandlingAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the orderHandlingAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getOrderHandlingAmount(): ?Amount {
        return $this->orderHandlingAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('combinedShippingRuleType', $this->getCombinedShippingRuleType());
        $writer->writeObjectValue('eachAdditionalAmount', $this->getEachAdditionalAmount());
        $writer->writeObjectValue('eachAdditionalAmountOffShippingCost', $this->getEachAdditionalAmountOffShippingCost());
        $writer->writeFloatValue('eachAdditionalPercentOffShippingCost', $this->getEachAdditionalPercentOffShippingCost());
        $writer->writeObjectValue('orderHandlingAmount', $this->getOrderHandlingAmount());
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
     * Sets the combinedShippingRuleType property value. This enumeration type specifies the type of combined-shipping rule applied to handling fees <br><br>(for example, weight-based, flat-rate, or percentage-based calculation method). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:CombinedShippingRuleTypeHandlingEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the combinedShippingRuleType property.
    */
    public function setCombinedShippingRuleType(?string $value): void {
        $this->combinedShippingRuleType = $value;
    }

    /**
     * Sets the eachAdditionalAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the eachAdditionalAmount property.
    */
    public function setEachAdditionalAmount(?Amount $value): void {
        $this->eachAdditionalAmount = $value;
    }

    /**
     * Sets the eachAdditionalAmountOffShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the eachAdditionalAmountOffShippingCost property.
    */
    public function setEachAdditionalAmountOffShippingCost(?Amount $value): void {
        $this->eachAdditionalAmountOffShippingCost = $value;
    }

    /**
     * Sets the eachAdditionalPercentOffShippingCost property value. This integer specifies the percentage discount applied to the total shipping cost for each additional item in a combined shipment.
     * @param float|null $value Value to set for the eachAdditionalPercentOffShippingCost property.
    */
    public function setEachAdditionalPercentOffShippingCost(?float $value): void {
        $this->eachAdditionalPercentOffShippingCost = $value;
    }

    /**
     * Sets the orderHandlingAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the orderHandlingAmount property.
    */
    public function setOrderHandlingAmount(?Amount $value): void {
        $this->orderHandlingAmount = $value;
    }

}
