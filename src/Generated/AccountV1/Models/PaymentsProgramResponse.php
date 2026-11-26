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

namespace EBay\AccountManagement\Generated\AccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The response object containing the sellers status with regards to the specified payment program.
*/
class PaymentsProgramResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId The ID of the eBay marketplace to which the payment program applies.
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * @var PaymentsProgramType|null $paymentsProgramType This parameter specifies the payment program whose status is returned by the call.  <br><br>Currently the only supported payments program is <code>EBAY_PAYMENTS</code>.
    */
    private ?PaymentsProgramType $paymentsProgramType = null;
    
    /**
     * @var PaymentsProgramStatus|null $status The enumeration value returned in this field indicates whether or not the seller's account is enabled for the payments program.
    */
    private ?PaymentsProgramStatus $status = null;
    
    /**
     * @var bool|null $wasPreviouslyOptedIn If returned as <code>true</code>, the seller was at one point opted-in to the associated payment program, but they later opted out of the program. A value of <code>false</code> indicates the seller never opted-in to the program or if they did opt-in to the program, they never opted-out of it.  <br><br>It's important to note that the setting of this field does not indicate the seller's current status regarding the payment program. It is possible for this field to return <code>true</code> while the <b>status</b> field returns <code>OPTED_IN</code>.
    */
    private ?bool $wasPreviouslyOptedIn = null;
    
    /**
     * Instantiates a new PaymentsProgramResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentsProgramResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentsProgramResponse {
        return new PaymentsProgramResponse();
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
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'paymentsProgramType' => fn(ParseNode $n) => $o->setPaymentsProgramType($n->getEnumValue(PaymentsProgramType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PaymentsProgramStatus::class)),
            'wasPreviouslyOptedIn' => fn(ParseNode $n) => $o->setWasPreviouslyOptedIn($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace to which the payment program applies.
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
        return $this->marketplaceId;
    }

    /**
     * Gets the paymentsProgramType property value. This parameter specifies the payment program whose status is returned by the call.  <br><br>Currently the only supported payments program is <code>EBAY_PAYMENTS</code>.
     * @return PaymentsProgramType|null
    */
    public function getPaymentsProgramType(): ?PaymentsProgramType {
        return $this->paymentsProgramType;
    }

    /**
     * Gets the status property value. The enumeration value returned in this field indicates whether or not the seller's account is enabled for the payments program.
     * @return PaymentsProgramStatus|null
    */
    public function getStatus(): ?PaymentsProgramStatus {
        return $this->status;
    }

    /**
     * Gets the wasPreviouslyOptedIn property value. If returned as <code>true</code>, the seller was at one point opted-in to the associated payment program, but they later opted out of the program. A value of <code>false</code> indicates the seller never opted-in to the program or if they did opt-in to the program, they never opted-out of it.  <br><br>It's important to note that the setting of this field does not indicate the seller's current status regarding the payment program. It is possible for this field to return <code>true</code> while the <b>status</b> field returns <code>OPTED_IN</code>.
     * @return bool|null
    */
    public function getWasPreviouslyOptedIn(): ?bool {
        return $this->wasPreviouslyOptedIn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeEnumValue('paymentsProgramType', $this->getPaymentsProgramType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeBooleanValue('wasPreviouslyOptedIn', $this->getWasPreviouslyOptedIn());
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
     * Sets the marketplaceId property value. The ID of the eBay marketplace to which the payment program applies.
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the paymentsProgramType property value. This parameter specifies the payment program whose status is returned by the call.  <br><br>Currently the only supported payments program is <code>EBAY_PAYMENTS</code>.
     * @param PaymentsProgramType|null $value Value to set for the paymentsProgramType property.
    */
    public function setPaymentsProgramType(?PaymentsProgramType $value): void {
        $this->paymentsProgramType = $value;
    }

    /**
     * Sets the status property value. The enumeration value returned in this field indicates whether or not the seller's account is enabled for the payments program.
     * @param PaymentsProgramStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PaymentsProgramStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the wasPreviouslyOptedIn property value. If returned as <code>true</code>, the seller was at one point opted-in to the associated payment program, but they later opted out of the program. A value of <code>false</code> indicates the seller never opted-in to the program or if they did opt-in to the program, they never opted-out of it.  <br><br>It's important to note that the setting of this field does not indicate the seller's current status regarding the payment program. It is possible for this field to return <code>true</code> while the <b>status</b> field returns <code>OPTED_IN</code>.
     * @param bool|null $value Value to set for the wasPreviouslyOptedIn property.
    */
    public function setWasPreviouslyOptedIn(?bool $value): void {
        $this->wasPreviouslyOptedIn = $value;
    }

}
