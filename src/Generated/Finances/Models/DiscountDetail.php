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
 * This type shows the amount of the promotional offer.
*/
class DiscountDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This container shows the amount of the promotion. The value and currency are always returned. If the buyer is in one country and purchases from an eBay marketplace that uses a different currency, the response also includes the converted-from and converted-to fields, and the exchange rate.
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $offerType The type of promotional discount applied through the activity's promotional offer <b>amount</b>. Examples include offer types such as <code>ETRS</code> (eBay Top Rated Seller) and <code>PROMOTION</code>.
    */
    private ?string $offerType = null;
    
    /**
     * Instantiates a new DiscountDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscountDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscountDetail {
        return new DiscountDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This container shows the amount of the promotion. The value and currency are always returned. If the buyer is in one country and purchases from an eBay marketplace that uses a different currency, the response also includes the converted-from and converted-to fields, and the exchange rate.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'offerType' => fn(ParseNode $n) => $o->setOfferType($n->getStringValue()),
        ];
    }

    /**
     * Gets the offerType property value. The type of promotional discount applied through the activity's promotional offer <b>amount</b>. Examples include offer types such as <code>ETRS</code> (eBay Top Rated Seller) and <code>PROMOTION</code>.
     * @return string|null
    */
    public function getOfferType(): ?string {
        return $this->offerType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('offerType', $this->getOfferType());
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
     * Sets the amount property value. This container shows the amount of the promotion. The value and currency are always returned. If the buyer is in one country and purchases from an eBay marketplace that uses a different currency, the response also includes the converted-from and converted-to fields, and the exchange rate.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the offerType property value. The type of promotional discount applied through the activity's promotional offer <b>amount</b>. Examples include offer types such as <code>ETRS</code> (eBay Top Rated Seller) and <code>PROMOTION</code>.
     * @param string|null $value Value to set for the offerType property.
    */
    public function setOfferType(?string $value): void {
        $this->offerType = $value;
    }

}
