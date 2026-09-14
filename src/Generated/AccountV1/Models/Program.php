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
 * The seller program to opt in to when part of an <b>optInToProgram</b> request, or out of when part of an  <b>optOutOfProgram</b> request.
*/
class Program implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ProgramTypeEnum|null $programType This enumerated type defines the supported seller programs. | - **OUT_OF_STOCK_CONTROL**: If a seller's account is opted in to the out-of-stock control program, active fixed-price listings will be kept 'alive' (but not surfaced in search results) even when the quantity for the listing has been depleted to 0. This feature allows the seller to update/revise the listing with more quantity, and prevents the seller from having to relist the item. - **PARTNER_MOTORS_DEALER**: The Partner Motors Program that sellers can participate in by opting-in to the program. Sellers must be registered business users to opt-in to this program. - **SELLING_POLICY_MANAGEMENT**: If a seller's account is opted in to this program, sellers can associate business policies (payment, return policy, fulfillment) to their listings. Being opted in to business policies is a requirement for using the <strong>Inventory API</strong>.
    */
    private ?ProgramTypeEnum $programType = null;
    
    /**
     * Instantiates a new Program and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Program
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Program {
        return new Program();
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
            'programType' => fn(ParseNode $n) => $o->setProgramType($n->getEnumValue(ProgramTypeEnum::class)),
        ];
    }

    /**
     * Gets the programType property value. This enumerated type defines the supported seller programs. | - **OUT_OF_STOCK_CONTROL**: If a seller's account is opted in to the out-of-stock control program, active fixed-price listings will be kept 'alive' (but not surfaced in search results) even when the quantity for the listing has been depleted to 0. This feature allows the seller to update/revise the listing with more quantity, and prevents the seller from having to relist the item. - **PARTNER_MOTORS_DEALER**: The Partner Motors Program that sellers can participate in by opting-in to the program. Sellers must be registered business users to opt-in to this program. - **SELLING_POLICY_MANAGEMENT**: If a seller's account is opted in to this program, sellers can associate business policies (payment, return policy, fulfillment) to their listings. Being opted in to business policies is a requirement for using the <strong>Inventory API</strong>.
     * @return ProgramTypeEnum|null
    */
    public function getProgramType(): ?ProgramTypeEnum {
        return $this->programType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('programType', $this->getProgramType());
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
     * Sets the programType property value. This enumerated type defines the supported seller programs. | - **OUT_OF_STOCK_CONTROL**: If a seller's account is opted in to the out-of-stock control program, active fixed-price listings will be kept 'alive' (but not surfaced in search results) even when the quantity for the listing has been depleted to 0. This feature allows the seller to update/revise the listing with more quantity, and prevents the seller from having to relist the item. - **PARTNER_MOTORS_DEALER**: The Partner Motors Program that sellers can participate in by opting-in to the program. Sellers must be registered business users to opt-in to this program. - **SELLING_POLICY_MANAGEMENT**: If a seller's account is opted in to this program, sellers can associate business policies (payment, return policy, fulfillment) to their listings. Being opted in to business policies is a requirement for using the <strong>Inventory API</strong>.
     * @param ProgramTypeEnum|null $value Value to set for the programType property.
    */
    public function setProgramType(?ProgramTypeEnum $value): void {
        $this->programType = $value;
    }

}
