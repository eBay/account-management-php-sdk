<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the request payload of the <b>updateShippingCost</b> method to pass updated shipping cost information for a rate table identified by <b>rateTableId</b>.
*/
class RateTableUpdate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<RateUpdate>|null $rates An array of rate objects for which <b>shippingCost</b> and/or <b>additionalCost</b> are to be updated.
    */
    private ?array $rates = null;
    
    /**
     * Instantiates a new RateTableUpdate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RateTableUpdate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RateTableUpdate {
        return new RateTableUpdate();
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
            'rates' => fn(ParseNode $n) => $o->setRates($n->getCollectionOfObjectValues([RateUpdate::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the rates property value. An array of rate objects for which <b>shippingCost</b> and/or <b>additionalCost</b> are to be updated.
     * @return array<RateUpdate>|null
    */
    public function getRates(): ?array {
        return $this->rates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('rates', $this->getRates());
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
     * Sets the rates property value. An array of rate objects for which <b>shippingCost</b> and/or <b>additionalCost</b> are to be updated.
     * @param array<RateUpdate>|null $value Value to set for the rates property.
    */
    public function setRates(?array $value): void {
        $this->rates = $value;
    }

}
