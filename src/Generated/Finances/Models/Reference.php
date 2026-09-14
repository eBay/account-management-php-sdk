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
 * This field is returned for NON_SALE_CHARGE transactions that contain non-transactional seller fees.
*/
class Reference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $referenceId The identifier of the transaction as specified by the <strong>referenceType</strong>. For example, with a <strong>referenceType</strong> of <strong>item_id</strong>, the <strong>referenceId</strong> refers to a unique item. This item may have several <code>NON_SALE_CHARGE</code> transactions.
    */
    private ?string $referenceId = null;
    
    /**
     * @var ReferenceTypeEnum|null $referenceType An enumeration value that identifies the reference type associated with the <strong>referenceId</strong>.
    */
    private ?ReferenceTypeEnum $referenceType = null;
    
    /**
     * Instantiates a new Reference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Reference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Reference {
        return new Reference();
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
            'referenceId' => fn(ParseNode $n) => $o->setReferenceId($n->getStringValue()),
            'referenceType' => fn(ParseNode $n) => $o->setReferenceType($n->getEnumValue(ReferenceTypeEnum::class)),
        ];
    }

    /**
     * Gets the referenceId property value. The identifier of the transaction as specified by the <strong>referenceType</strong>. For example, with a <strong>referenceType</strong> of <strong>item_id</strong>, the <strong>referenceId</strong> refers to a unique item. This item may have several <code>NON_SALE_CHARGE</code> transactions.
     * @return string|null
    */
    public function getReferenceId(): ?string {
        return $this->referenceId;
    }

    /**
     * Gets the referenceType property value. An enumeration value that identifies the reference type associated with the <strong>referenceId</strong>.
     * @return ReferenceTypeEnum|null
    */
    public function getReferenceType(): ?ReferenceTypeEnum {
        return $this->referenceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('referenceId', $this->getReferenceId());
        $writer->writeEnumValue('referenceType', $this->getReferenceType());
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
     * Sets the referenceId property value. The identifier of the transaction as specified by the <strong>referenceType</strong>. For example, with a <strong>referenceType</strong> of <strong>item_id</strong>, the <strong>referenceId</strong> refers to a unique item. This item may have several <code>NON_SALE_CHARGE</code> transactions.
     * @param string|null $value Value to set for the referenceId property.
    */
    public function setReferenceId(?string $value): void {
        $this->referenceId = $value;
    }

    /**
     * Sets the referenceType property value. An enumeration value that identifies the reference type associated with the <strong>referenceId</strong>.
     * @param ReferenceTypeEnum|null $value Value to set for the referenceType property.
    */
    public function setReferenceType(?ReferenceTypeEnum $value): void {
        $this->referenceType = $value;
    }

}
