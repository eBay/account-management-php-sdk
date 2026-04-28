<?php

namespace EBay\AccountManagement\Generated\SellAccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This container represents the seller's preferences for the list of items that are awaiting payment.
*/
class GetItemsAwaitingPaymentPreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $autoRelist This boolean indicates if the item should be automatically relisted.
    */
    private ?bool $autoRelist = null;
    
    /**
     * @var int|null $delayBeforeCancellingCommitment This integer indicates the delay in days before cancelling the buyer&#x27;s commitment.
    */
    private ?int $delayBeforeCancellingCommitment = null;
    
    /**
     * @var array<string>|null $excludedUsers This string returns the list of sellers excluded from unpaid item assistance.
    */
    private ?array $excludedUsers = null;
    
    /**
     * @var bool|null $optInStatus This boolean indicates if the unpaid item assistance is opted in.
    */
    private ?bool $optInStatus = null;
    
    /**
     * Instantiates a new GetItemsAwaitingPaymentPreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetItemsAwaitingPaymentPreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetItemsAwaitingPaymentPreferencesType {
        return new GetItemsAwaitingPaymentPreferencesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the autoRelist property value. This boolean indicates if the item should be automatically relisted.
     * @return bool|null
    */
    public function getAutoRelist(): ?bool {
        return $this->autoRelist;
    }

    /**
     * Gets the delayBeforeCancellingCommitment property value. This integer indicates the delay in days before cancelling the buyer&#x27;s commitment.
     * @return int|null
    */
    public function getDelayBeforeCancellingCommitment(): ?int {
        return $this->delayBeforeCancellingCommitment;
    }

    /**
     * Gets the excludedUsers property value. This string returns the list of sellers excluded from unpaid item assistance.
     * @return array<string>|null
    */
    public function getExcludedUsers(): ?array {
        return $this->excludedUsers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autoRelist' => fn(ParseNode $n) => $o->setAutoRelist($n->getBooleanValue()),
            'delayBeforeCancellingCommitment' => fn(ParseNode $n) => $o->setDelayBeforeCancellingCommitment($n->getIntegerValue()),
            'excludedUsers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludedUsers($val);
            },
            'optInStatus' => fn(ParseNode $n) => $o->setOptInStatus($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the optInStatus property value. This boolean indicates if the unpaid item assistance is opted in.
     * @return bool|null
    */
    public function getOptInStatus(): ?bool {
        return $this->optInStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('autoRelist', $this->getAutoRelist());
        $writer->writeIntegerValue('delayBeforeCancellingCommitment', $this->getDelayBeforeCancellingCommitment());
        $writer->writeCollectionOfPrimitiveValues('excludedUsers', $this->getExcludedUsers());
        $writer->writeBooleanValue('optInStatus', $this->getOptInStatus());
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
     * Sets the autoRelist property value. This boolean indicates if the item should be automatically relisted.
     * @param bool|null $value Value to set for the autoRelist property.
    */
    public function setAutoRelist(?bool $value): void {
        $this->autoRelist = $value;
    }

    /**
     * Sets the delayBeforeCancellingCommitment property value. This integer indicates the delay in days before cancelling the buyer&#x27;s commitment.
     * @param int|null $value Value to set for the delayBeforeCancellingCommitment property.
    */
    public function setDelayBeforeCancellingCommitment(?int $value): void {
        $this->delayBeforeCancellingCommitment = $value;
    }

    /**
     * Sets the excludedUsers property value. This string returns the list of sellers excluded from unpaid item assistance.
     * @param array<string>|null $value Value to set for the excludedUsers property.
    */
    public function setExcludedUsers(?array $value): void {
        $this->excludedUsers = $value;
    }

    /**
     * Sets the optInStatus property value. This boolean indicates if the unpaid item assistance is opted in.
     * @param bool|null $value Value to set for the optInStatus property.
    */
    public function setOptInStatus(?bool $value): void {
        $this->optInStatus = $value;
    }

}
