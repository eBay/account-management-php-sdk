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
     * @var Amount|null $amount This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required.<br><br><b>Max</b>: <code>2000.0</code>
    */
    private ?Amount $amount = null;
    
    /**
     * @var TimeDuration|null $dueIn This value indicates the number of hours that the buyer has (after they commit to buy) to pay the initial deposit on a motor vehicle. Valid <b>dueIn</b> times are 24, 48, and 72 hours. <code>HOUR</code> is set as the <b>unit</b> value, and <code>24</code>, <code>48</code> or <code>72</code> are set in the <b>value</b> field.<br><br><span class="tablenote"><b>Note</b>: The <b>dueIn</b> value is overridden if the seller has set the motor vehicle listing to require immediate payment. If the listing requires immediate payment, the buyer must pay the deposit immediately in order to be eligible to purchase the motor vehicle.</span><br><b>Minimum:</b> 24 (hours)<br><b>Maximum:</b> 72 (hours)<br><b>Default:</b> 48 (hours)
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
     * Gets the amount property value. This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required.<br><br><b>Max</b>: <code>2000.0</code>
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the dueIn property value. This value indicates the number of hours that the buyer has (after they commit to buy) to pay the initial deposit on a motor vehicle. Valid <b>dueIn</b> times are 24, 48, and 72 hours. <code>HOUR</code> is set as the <b>unit</b> value, and <code>24</code>, <code>48</code> or <code>72</code> are set in the <b>value</b> field.<br><br><span class="tablenote"><b>Note</b>: The <b>dueIn</b> value is overridden if the seller has set the motor vehicle listing to require immediate payment. If the listing requires immediate payment, the buyer must pay the deposit immediately in order to be eligible to purchase the motor vehicle.</span><br><b>Minimum:</b> 24 (hours)<br><b>Maximum:</b> 72 (hours)<br><b>Default:</b> 48 (hours)
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
     * Sets the amount property value. This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required.<br><br><b>Max</b>: <code>2000.0</code>
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the dueIn property value. This value indicates the number of hours that the buyer has (after they commit to buy) to pay the initial deposit on a motor vehicle. Valid <b>dueIn</b> times are 24, 48, and 72 hours. <code>HOUR</code> is set as the <b>unit</b> value, and <code>24</code>, <code>48</code> or <code>72</code> are set in the <b>value</b> field.<br><br><span class="tablenote"><b>Note</b>: The <b>dueIn</b> value is overridden if the seller has set the motor vehicle listing to require immediate payment. If the listing requires immediate payment, the buyer must pay the deposit immediately in order to be eligible to purchase the motor vehicle.</span><br><b>Minimum:</b> 24 (hours)<br><b>Maximum:</b> 72 (hours)<br><b>Default:</b> 48 (hours)
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
