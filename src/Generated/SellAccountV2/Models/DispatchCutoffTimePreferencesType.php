<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container is used to change the order cut-off time for same-day shipping.
*/
class DispatchCutoffTimePreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cutoffTime This field indicates the dispatch cut-off time in Zulu format (<code>HH:mm:ss.SSSZ</code>) - 24-hour format with milliseconds and Z timezone indicator. </br> <b>Note</b>: Despite the Z that is returned in the timestamp, the cut-off time is actually based on the default timezone of the eBay marketplace for the seller. </br> <b>Note</b>: If an eBay listing supports same-day shipping, and an order is paid for before the cut-off time, the seller is expected to ship the order out that same business day.
    */
    private ?string $cutoffTime = null;
    
    /**
     * Instantiates a new DispatchCutoffTimePreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DispatchCutoffTimePreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DispatchCutoffTimePreferencesType {
        return new DispatchCutoffTimePreferencesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cutoffTime property value. This field indicates the dispatch cut-off time in Zulu format (<code>HH:mm:ss.SSSZ</code>) - 24-hour format with milliseconds and Z timezone indicator. </br> <b>Note</b>: Despite the Z that is returned in the timestamp, the cut-off time is actually based on the default timezone of the eBay marketplace for the seller. </br> <b>Note</b>: If an eBay listing supports same-day shipping, and an order is paid for before the cut-off time, the seller is expected to ship the order out that same business day.
     * @return string|null
    */
    public function getCutoffTime(): ?string {
        return $this->cutoffTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cutoffTime' => fn(ParseNode $n) => $o->setCutoffTime($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cutoffTime', $this->getCutoffTime());
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
     * Sets the cutoffTime property value. This field indicates the dispatch cut-off time in Zulu format (<code>HH:mm:ss.SSSZ</code>) - 24-hour format with milliseconds and Z timezone indicator. </br> <b>Note</b>: Despite the Z that is returned in the timestamp, the cut-off time is actually based on the default timezone of the eBay marketplace for the seller. </br> <b>Note</b>: If an eBay listing supports same-day shipping, and an order is paid for before the cut-off time, the seller is expected to ship the order out that same business day.
     * @param string|null $value Value to set for the cutoffTime property.
    */
    public function setCutoffTime(?string $value): void {
        $this->cutoffTime = $value;
    }

}
