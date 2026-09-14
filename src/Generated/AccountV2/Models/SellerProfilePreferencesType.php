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
 * This container indicates whether or not the seller is opted into Business Policies. If a seller is opted into Business Policies, they must use Payment,Return, and Shipping business policies instead of individual payment, return, and shipping fields.
*/
class SellerProfilePreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $sellerProfileOptedIn This boolean indicates whether the seller has opted in to seller profiles.
    */
    private ?bool $sellerProfileOptedIn = null;
    
    /**
     * Instantiates a new SellerProfilePreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellerProfilePreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellerProfilePreferencesType {
        return new SellerProfilePreferencesType();
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
            'sellerProfileOptedIn' => fn(ParseNode $n) => $o->setSellerProfileOptedIn($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the sellerProfileOptedIn property value. This boolean indicates whether the seller has opted in to seller profiles.
     * @return bool|null
    */
    public function getSellerProfileOptedIn(): ?bool {
        return $this->sellerProfileOptedIn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('sellerProfileOptedIn', $this->getSellerProfileOptedIn());
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
     * Sets the sellerProfileOptedIn property value. This boolean indicates whether the seller has opted in to seller profiles.
     * @param bool|null $value Value to set for the sellerProfileOptedIn property.
    */
    public function setSellerProfileOptedIn(?bool $value): void {
        $this->sellerProfileOptedIn = $value;
    }

}
