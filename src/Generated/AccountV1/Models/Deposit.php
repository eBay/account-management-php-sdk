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
 * This type is used to specify/indicate that an initial deposit is required for a motor vehicle listing.
*/
class Deposit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
    */
    private ?Amount $amount = null;
    
    /**
     * @var TimeDuration|null $dueIn A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
    */
    private ?TimeDuration $dueIn = null;
    
    /**
     * @var array<PaymentMethod>|null $paymentMethods This array is no longer applicable and should not be used since eBay now manages the electronic payment options available to buyers to pay the deposit.
    */
    private ?array $paymentMethods = null;
    
    /**
     * Instantiates a new Deposit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Deposit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Deposit {
        return new Deposit();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the dueIn property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @return TimeDuration|null
    */
    public function getDueIn(): ?TimeDuration {
        return $this->dueIn;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'dueIn' => fn(ParseNode $n) => $o->setDueIn($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'paymentMethods' => fn(ParseNode $n) => $o->setPaymentMethods($n->getCollectionOfObjectValues([PaymentMethod::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the paymentMethods property value. This array is no longer applicable and should not be used since eBay now manages the electronic payment options available to buyers to pay the deposit.
     * @return array<PaymentMethod>|null
    */
    public function getPaymentMethods(): ?array {
        return $this->paymentMethods;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeObjectValue('dueIn', $this->getDueIn());
        $writer->writeCollectionOfObjectValues('paymentMethods', $this->getPaymentMethods());
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
     * Sets the amount property value. A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the dueIn property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @param TimeDuration|null $value Value to set for the dueIn property.
    */
    public function setDueIn(?TimeDuration $value): void {
        $this->dueIn = $value;
    }

    /**
     * Sets the paymentMethods property value. This array is no longer applicable and should not be used since eBay now manages the electronic payment options available to buyers to pay the deposit.
     * @param array<PaymentMethod>|null $value Value to set for the paymentMethods property.
    */
    public function setPaymentMethods(?array $value): void {
        $this->paymentMethods = $value;
    }

}
