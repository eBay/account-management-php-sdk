<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the request payload of the <b>updatePayoutPercentage</b> method to allow a seller to configure the split-payout percentages for two payout instruments.
*/
class UpdatePayoutPercentageRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<UpdatePayoutPercentage>|null $payoutInstruments This array allows the seller to set the payout split percentages for two accounts enabled to receive payouts.
    */
    private ?array $payoutInstruments = null;
    
    /**
     * Instantiates a new UpdatePayoutPercentageRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePayoutPercentageRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePayoutPercentageRequest {
        return new UpdatePayoutPercentageRequest();
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
            'payoutInstruments' => fn(ParseNode $n) => $o->setPayoutInstruments($n->getCollectionOfObjectValues([UpdatePayoutPercentage::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the payoutInstruments property value. This array allows the seller to set the payout split percentages for two accounts enabled to receive payouts.
     * @return array<UpdatePayoutPercentage>|null
    */
    public function getPayoutInstruments(): ?array {
        return $this->payoutInstruments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('payoutInstruments', $this->getPayoutInstruments());
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
     * Sets the payoutInstruments property value. This array allows the seller to set the payout split percentages for two accounts enabled to receive payouts.
     * @param array<UpdatePayoutPercentage>|null $value Value to set for the payoutInstruments property.
    */
    public function setPayoutInstruments(?array $value): void {
        $this->payoutInstruments = $value;
    }

}
