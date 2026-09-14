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
 * This type is used by the <b>transferDetail</b> container, which provides more details about the transfer and the charge(s) associated with the transfer.
*/
class TransferDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BalanceAdjustment|null $balanceAdjustment This type is used by the <b>balanceAdjustment</b> container, which shows the seller payout balance that will be applied toward the charges outlined in the <b>charges</b> array.
    */
    private ?BalanceAdjustment $balanceAdjustment = null;
    
    /**
     * @var array<Charge>|null $charges This container is an array of one or more charges related to the transfer. Charges can be related to an order cancellation, order return, case, payment dispute, etc.
    */
    private ?array $charges = null;
    
    /**
     * @var Amount|null $totalChargeNetAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $totalChargeNetAmount = null;
    
    /**
     * Instantiates a new TransferDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransferDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransferDetail {
        return new TransferDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the balanceAdjustment property value. This type is used by the <b>balanceAdjustment</b> container, which shows the seller payout balance that will be applied toward the charges outlined in the <b>charges</b> array.
     * @return BalanceAdjustment|null
    */
    public function getBalanceAdjustment(): ?BalanceAdjustment {
        return $this->balanceAdjustment;
    }

    /**
     * Gets the charges property value. This container is an array of one or more charges related to the transfer. Charges can be related to an order cancellation, order return, case, payment dispute, etc.
     * @return array<Charge>|null
    */
    public function getCharges(): ?array {
        return $this->charges;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'balanceAdjustment' => fn(ParseNode $n) => $o->setBalanceAdjustment($n->getObjectValue([BalanceAdjustment::class, 'createFromDiscriminatorValue'])),
            'charges' => fn(ParseNode $n) => $o->setCharges($n->getCollectionOfObjectValues([Charge::class, 'createFromDiscriminatorValue'])),
            'totalChargeNetAmount' => fn(ParseNode $n) => $o->setTotalChargeNetAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the totalChargeNetAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getTotalChargeNetAmount(): ?Amount {
        return $this->totalChargeNetAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('balanceAdjustment', $this->getBalanceAdjustment());
        $writer->writeCollectionOfObjectValues('charges', $this->getCharges());
        $writer->writeObjectValue('totalChargeNetAmount', $this->getTotalChargeNetAmount());
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
     * Sets the balanceAdjustment property value. This type is used by the <b>balanceAdjustment</b> container, which shows the seller payout balance that will be applied toward the charges outlined in the <b>charges</b> array.
     * @param BalanceAdjustment|null $value Value to set for the balanceAdjustment property.
    */
    public function setBalanceAdjustment(?BalanceAdjustment $value): void {
        $this->balanceAdjustment = $value;
    }

    /**
     * Sets the charges property value. This container is an array of one or more charges related to the transfer. Charges can be related to an order cancellation, order return, case, payment dispute, etc.
     * @param array<Charge>|null $value Value to set for the charges property.
    */
    public function setCharges(?array $value): void {
        $this->charges = $value;
    }

    /**
     * Sets the totalChargeNetAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the totalChargeNetAmount property.
    */
    public function setTotalChargeNetAmount(?Amount $value): void {
        $this->totalChargeNetAmount = $value;
    }

}
