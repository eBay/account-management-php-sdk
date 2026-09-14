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

namespace EBay\AccountManagement\Generated\AccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This container represents the seller's preferences for the items that are awaiting payment.
*/
class SetItemsAwaitingPaymentPreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $autoRelist This boolean field is included if the seller wishes to toggle the setting that controls whether or not the line item should be automatically relisted when cancelled. For this field to be set to <code>true</code>, the <code>optInStatus</code> field should also be <code>true</code>. </br> <b>Note</b>: If the line item was part of an auction listing or a single-quantity fixed price listing, a new listing will actually be created. If the line item was part of a multiple-quantity fixed price listing, eBay will only adjust the quantity based on the cancelled line item’s quantity.
    */
    private ?bool $autoRelist = null;
    
    /**
     * @var int|null $delayBeforeCancellingCommitment This integer field is included if the seller wishes to set or change the number of business days without payment that must elapse before the line item is cancelled. This is a required field if the optInStatus field is <code>true</code>. </br><b>Note</b>: The supported integer values (representing business days) varies by eBay marketplace.
    */
    private ?int $delayBeforeCancellingCommitment = null;
    
    /**
     * @var array<string>|null $excludedUsers This array is used if the seller wishes to exclude one or more eBay users from the unpaid item assistance mechanism. The seller would need to manually cancel any unpaid line items for all users on this list. This array will not be returned if there are no users on the excluded users list. </br><b>Note</b>: The eBay public username is used for each excluded user, and a comma is used to delimit each user in the array.
    */
    private ?array $excludedUsers = null;
    
    /**
     * @var bool|null $optInStatus This boolean field is included if the seller wishes to toggle the setting that controls whether or not the seller is opted into the unpaid item assistance mechanism. If the seller is not opted in, no other fields under <code>itemsAwaitingPaymentPreferences</code> are applicable.
    */
    private ?bool $optInStatus = null;
    
    /**
     * @var bool|null $removeAllExcludedUsers This boolean field is included and set to <code>true</code> if the seller wishes to remove all eBay users from the current excluded users list. If this field is included and set to <code>true</code>, the <code>excludedUsers</code> array should not be included.
    */
    private ?bool $removeAllExcludedUsers = null;
    
    /**
     * Instantiates a new SetItemsAwaitingPaymentPreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetItemsAwaitingPaymentPreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetItemsAwaitingPaymentPreferencesType {
        return new SetItemsAwaitingPaymentPreferencesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the autoRelist property value. This boolean field is included if the seller wishes to toggle the setting that controls whether or not the line item should be automatically relisted when cancelled. For this field to be set to <code>true</code>, the <code>optInStatus</code> field should also be <code>true</code>. </br> <b>Note</b>: If the line item was part of an auction listing or a single-quantity fixed price listing, a new listing will actually be created. If the line item was part of a multiple-quantity fixed price listing, eBay will only adjust the quantity based on the cancelled line item’s quantity.
     * @return bool|null
    */
    public function getAutoRelist(): ?bool {
        return $this->autoRelist;
    }

    /**
     * Gets the delayBeforeCancellingCommitment property value. This integer field is included if the seller wishes to set or change the number of business days without payment that must elapse before the line item is cancelled. This is a required field if the optInStatus field is <code>true</code>. </br><b>Note</b>: The supported integer values (representing business days) varies by eBay marketplace.
     * @return int|null
    */
    public function getDelayBeforeCancellingCommitment(): ?int {
        return $this->delayBeforeCancellingCommitment;
    }

    /**
     * Gets the excludedUsers property value. This array is used if the seller wishes to exclude one or more eBay users from the unpaid item assistance mechanism. The seller would need to manually cancel any unpaid line items for all users on this list. This array will not be returned if there are no users on the excluded users list. </br><b>Note</b>: The eBay public username is used for each excluded user, and a comma is used to delimit each user in the array.
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
            'removeAllExcludedUsers' => fn(ParseNode $n) => $o->setRemoveAllExcludedUsers($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the optInStatus property value. This boolean field is included if the seller wishes to toggle the setting that controls whether or not the seller is opted into the unpaid item assistance mechanism. If the seller is not opted in, no other fields under <code>itemsAwaitingPaymentPreferences</code> are applicable.
     * @return bool|null
    */
    public function getOptInStatus(): ?bool {
        return $this->optInStatus;
    }

    /**
     * Gets the removeAllExcludedUsers property value. This boolean field is included and set to <code>true</code> if the seller wishes to remove all eBay users from the current excluded users list. If this field is included and set to <code>true</code>, the <code>excludedUsers</code> array should not be included.
     * @return bool|null
    */
    public function getRemoveAllExcludedUsers(): ?bool {
        return $this->removeAllExcludedUsers;
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
        $writer->writeBooleanValue('removeAllExcludedUsers', $this->getRemoveAllExcludedUsers());
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
     * Sets the autoRelist property value. This boolean field is included if the seller wishes to toggle the setting that controls whether or not the line item should be automatically relisted when cancelled. For this field to be set to <code>true</code>, the <code>optInStatus</code> field should also be <code>true</code>. </br> <b>Note</b>: If the line item was part of an auction listing or a single-quantity fixed price listing, a new listing will actually be created. If the line item was part of a multiple-quantity fixed price listing, eBay will only adjust the quantity based on the cancelled line item’s quantity.
     * @param bool|null $value Value to set for the autoRelist property.
    */
    public function setAutoRelist(?bool $value): void {
        $this->autoRelist = $value;
    }

    /**
     * Sets the delayBeforeCancellingCommitment property value. This integer field is included if the seller wishes to set or change the number of business days without payment that must elapse before the line item is cancelled. This is a required field if the optInStatus field is <code>true</code>. </br><b>Note</b>: The supported integer values (representing business days) varies by eBay marketplace.
     * @param int|null $value Value to set for the delayBeforeCancellingCommitment property.
    */
    public function setDelayBeforeCancellingCommitment(?int $value): void {
        $this->delayBeforeCancellingCommitment = $value;
    }

    /**
     * Sets the excludedUsers property value. This array is used if the seller wishes to exclude one or more eBay users from the unpaid item assistance mechanism. The seller would need to manually cancel any unpaid line items for all users on this list. This array will not be returned if there are no users on the excluded users list. </br><b>Note</b>: The eBay public username is used for each excluded user, and a comma is used to delimit each user in the array.
     * @param array<string>|null $value Value to set for the excludedUsers property.
    */
    public function setExcludedUsers(?array $value): void {
        $this->excludedUsers = $value;
    }

    /**
     * Sets the optInStatus property value. This boolean field is included if the seller wishes to toggle the setting that controls whether or not the seller is opted into the unpaid item assistance mechanism. If the seller is not opted in, no other fields under <code>itemsAwaitingPaymentPreferences</code> are applicable.
     * @param bool|null $value Value to set for the optInStatus property.
    */
    public function setOptInStatus(?bool $value): void {
        $this->optInStatus = $value;
    }

    /**
     * Sets the removeAllExcludedUsers property value. This boolean field is included and set to <code>true</code> if the seller wishes to remove all eBay users from the current excluded users list. If this field is included and set to <code>true</code>, the <code>excludedUsers</code> array should not be included.
     * @param bool|null $value Value to set for the removeAllExcludedUsers property.
    */
    public function setRemoveAllExcludedUsers(?bool $value): void {
        $this->removeAllExcludedUsers = $value;
    }

}
