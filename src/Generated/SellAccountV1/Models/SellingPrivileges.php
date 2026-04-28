<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base response of the <b>getPrivileges</b> method.
*/
class SellingPrivileges implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $sellerRegistrationCompleted If this field is returned as <code>true</code>, the seller's registration is completed. If this field is returned as <code>false</code>, the registration process is not complete.
    */
    private ?bool $sellerRegistrationCompleted = null;
    
    /**
     * @var SellingLimit|null $sellingLimit Type used by the <b>sellingLimit</b> container, a container that lists the monthly cap for the quantity of items sold and total sales amount allowed for the seller's account.
    */
    private ?SellingLimit $sellingLimit = null;
    
    /**
     * Instantiates a new SellingPrivileges and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellingPrivileges
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellingPrivileges {
        return new SellingPrivileges();
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
            'sellerRegistrationCompleted' => fn(ParseNode $n) => $o->setSellerRegistrationCompleted($n->getBooleanValue()),
            'sellingLimit' => fn(ParseNode $n) => $o->setSellingLimit($n->getObjectValue([SellingLimit::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the sellerRegistrationCompleted property value. If this field is returned as <code>true</code>, the seller's registration is completed. If this field is returned as <code>false</code>, the registration process is not complete.
     * @return bool|null
    */
    public function getSellerRegistrationCompleted(): ?bool {
        return $this->sellerRegistrationCompleted;
    }

    /**
     * Gets the sellingLimit property value. Type used by the <b>sellingLimit</b> container, a container that lists the monthly cap for the quantity of items sold and total sales amount allowed for the seller's account.
     * @return SellingLimit|null
    */
    public function getSellingLimit(): ?SellingLimit {
        return $this->sellingLimit;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('sellerRegistrationCompleted', $this->getSellerRegistrationCompleted());
        $writer->writeObjectValue('sellingLimit', $this->getSellingLimit());
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
     * Sets the sellerRegistrationCompleted property value. If this field is returned as <code>true</code>, the seller's registration is completed. If this field is returned as <code>false</code>, the registration process is not complete.
     * @param bool|null $value Value to set for the sellerRegistrationCompleted property.
    */
    public function setSellerRegistrationCompleted(?bool $value): void {
        $this->sellerRegistrationCompleted = $value;
    }

    /**
     * Sets the sellingLimit property value. Type used by the <b>sellingLimit</b> container, a container that lists the monthly cap for the quantity of items sold and total sales amount allowed for the seller's account.
     * @param SellingLimit|null $value Value to set for the sellingLimit property.
    */
    public function setSellingLimit(?SellingLimit $value): void {
        $this->sellingLimit = $value;
    }

}
