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

/**
 * This type allows the user to change the payout percentages for two active payment instruments.
*/
class UpdatePayoutPercentage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $instrumentId The unique reference identifier for a payout instrument. This value is returned in the <a href="/api-docs/sell/account/v2/resources/payout_settings/methods/getPayoutSettings" target="_blank ">getPayoutSettings</a> response and is needed to change split-payout percentages through an <b>updatePayoutPercentage</b> request.
    */
    private ?string $instrumentId = null;
    
    /**
     * @var string|null $payoutPercentage The user-defined payout percentage allocated to this instrument. For example, <code>50</code> indicates that 50% of the payout goes to this instrument.<br/><br/>The split-payout percentage <b>must</b> be a positive integer value from 0-100. The values of two instruments <b>must</b> always add up to 100%. If the values do not equal 100, the call will fail.
    */
    private ?string $payoutPercentage = null;
    
    /**
     * Instantiates a new UpdatePayoutPercentage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePayoutPercentage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePayoutPercentage {
        return new UpdatePayoutPercentage();
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
            'instrumentId' => fn(ParseNode $n) => $o->setInstrumentId($n->getStringValue()),
            'payoutPercentage' => fn(ParseNode $n) => $o->setPayoutPercentage($n->getStringValue()),
        ];
    }

    /**
     * Gets the instrumentId property value. The unique reference identifier for a payout instrument. This value is returned in the <a href="/api-docs/sell/account/v2/resources/payout_settings/methods/getPayoutSettings" target="_blank ">getPayoutSettings</a> response and is needed to change split-payout percentages through an <b>updatePayoutPercentage</b> request.
     * @return string|null
    */
    public function getInstrumentId(): ?string {
        return $this->instrumentId;
    }

    /**
     * Gets the payoutPercentage property value. The user-defined payout percentage allocated to this instrument. For example, <code>50</code> indicates that 50% of the payout goes to this instrument.<br/><br/>The split-payout percentage <b>must</b> be a positive integer value from 0-100. The values of two instruments <b>must</b> always add up to 100%. If the values do not equal 100, the call will fail.
     * @return string|null
    */
    public function getPayoutPercentage(): ?string {
        return $this->payoutPercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('instrumentId', $this->getInstrumentId());
        $writer->writeStringValue('payoutPercentage', $this->getPayoutPercentage());
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
     * Sets the instrumentId property value. The unique reference identifier for a payout instrument. This value is returned in the <a href="/api-docs/sell/account/v2/resources/payout_settings/methods/getPayoutSettings" target="_blank ">getPayoutSettings</a> response and is needed to change split-payout percentages through an <b>updatePayoutPercentage</b> request.
     * @param string|null $value Value to set for the instrumentId property.
    */
    public function setInstrumentId(?string $value): void {
        $this->instrumentId = $value;
    }

    /**
     * Sets the payoutPercentage property value. The user-defined payout percentage allocated to this instrument. For example, <code>50</code> indicates that 50% of the payout goes to this instrument.<br/><br/>The split-payout percentage <b>must</b> be a positive integer value from 0-100. The values of two instruments <b>must</b> always add up to 100%. If the values do not equal 100, the call will fail.
     * @param string|null $value Value to set for the payoutPercentage property.
    */
    public function setPayoutPercentage(?string $value): void {
        $this->payoutPercentage = $value;
    }

}
