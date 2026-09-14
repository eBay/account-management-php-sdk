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

namespace EBay\AccountManagement\Generated\Finances\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to show the fees and donations that are deducted from a seller payout for each line item in an order.
*/
class OrderLineItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Fee>|null $donations The list of donations applied to the line item.<br><br><span class="tablenote"><b>Note: </b>Currently, this array is only returned if the seller chooses to donate a percentage of the sales proceeds to a charitable organization registered with the eBay for Charity program.</span>
    */
    private ?array $donations = null;
    
    /**
     * @var Amount|null $feeBasisAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $feeBasisAmount = null;
    
    /**
     * @var string|null $lineItemId The unique identifier of an order line item.
    */
    private ?string $lineItemId = null;
    
    /**
     * @var array<Fee>|null $marketplaceFees An array of all fees accrued for the order line item and deducted from a seller payout.
    */
    private ?array $marketplaceFees = null;
    
    /**
     * Instantiates a new OrderLineItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderLineItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderLineItem {
        return new OrderLineItem();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the donations property value. The list of donations applied to the line item.<br><br><span class="tablenote"><b>Note: </b>Currently, this array is only returned if the seller chooses to donate a percentage of the sales proceeds to a charitable organization registered with the eBay for Charity program.</span>
     * @return array<Fee>|null
    */
    public function getDonations(): ?array {
        return $this->donations;
    }

    /**
     * Gets the feeBasisAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getFeeBasisAmount(): ?Amount {
        return $this->feeBasisAmount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'donations' => fn(ParseNode $n) => $o->setDonations($n->getCollectionOfObjectValues([Fee::class, 'createFromDiscriminatorValue'])),
            'feeBasisAmount' => fn(ParseNode $n) => $o->setFeeBasisAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
            'marketplaceFees' => fn(ParseNode $n) => $o->setMarketplaceFees($n->getCollectionOfObjectValues([Fee::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lineItemId property value. The unique identifier of an order line item.
     * @return string|null
    */
    public function getLineItemId(): ?string {
        return $this->lineItemId;
    }

    /**
     * Gets the marketplaceFees property value. An array of all fees accrued for the order line item and deducted from a seller payout.
     * @return array<Fee>|null
    */
    public function getMarketplaceFees(): ?array {
        return $this->marketplaceFees;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('donations', $this->getDonations());
        $writer->writeObjectValue('feeBasisAmount', $this->getFeeBasisAmount());
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
        $writer->writeCollectionOfObjectValues('marketplaceFees', $this->getMarketplaceFees());
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
     * Sets the donations property value. The list of donations applied to the line item.<br><br><span class="tablenote"><b>Note: </b>Currently, this array is only returned if the seller chooses to donate a percentage of the sales proceeds to a charitable organization registered with the eBay for Charity program.</span>
     * @param array<Fee>|null $value Value to set for the donations property.
    */
    public function setDonations(?array $value): void {
        $this->donations = $value;
    }

    /**
     * Sets the feeBasisAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the feeBasisAmount property.
    */
    public function setFeeBasisAmount(?Amount $value): void {
        $this->feeBasisAmount = $value;
    }

    /**
     * Sets the lineItemId property value. The unique identifier of an order line item.
     * @param string|null $value Value to set for the lineItemId property.
    */
    public function setLineItemId(?string $value): void {
        $this->lineItemId = $value;
    }

    /**
     * Sets the marketplaceFees property value. An array of all fees accrued for the order line item and deducted from a seller payout.
     * @param array<Fee>|null $value Value to set for the marketplaceFees property.
    */
    public function setMarketplaceFees(?array $value): void {
        $this->marketplaceFees = $value;
    }

}
