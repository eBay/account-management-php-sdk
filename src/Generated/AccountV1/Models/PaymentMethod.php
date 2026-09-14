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
 * This type is used by the <b>paymentMethods</b> container, which is used by the seller to specify one or more offline payment methods. <br><br> <span class="tablenote"><b>Note</b>: eBay now controls all electronic payment methods available for a marketplace, so a seller will no longer use this type to specify any electronic payment methods.</span>
*/
class PaymentMethod implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PaymentInstrumentBrandEnum>|null $brands <span class="tablenote"><b>Note</b>: This array is no longer applicable and should not be used. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods, including any credit card brands accepted. </span>
    */
    private ?array $brands = null;
    
    /**
     * @var PaymentMethodTypeEnum|null $paymentMethodType An enumeration type that defines the supported payment methods.<br><br> <span class="tablenote"><b>Note</b>: eBay manages all electronic payment methods that are available to buyers, so sellers only need to specify one or more offline payment methods for listings that support or require payment that occurs off of the eBay platform. All electronic payment method enum values are no longer applicable, and are marked as such. </span> | - **CASH_IN_PERSON**: This enumeration value indicates that the payment method will be cash, and the transaction will occur in-person. - **CASH_ON_DELIVERY**: This enumeration value indicates that the payment method will be cash, and the transaction will occur after the item is delivered to the buyer. - **CASH_ON_PICKUP**: This enumeration value indicates that the payment method will be cash, and the transaction will occur when the buyer picks up the item. - **CASHIER_CHECK**: This enumeration value indicates that the payment method will be a Cashier Check. - **CREDIT_CARD**: This payment method is no longer valid. - **ESCROW**: This enumeration value indicates that escrow was used as the payment method to pay for the order. This form of payment is used for high-value orders. - **INTEGRATED_MERCHANT_CREDIT_CARD**: This payment method is no longer valid. - **LOAN_CHECK**: This payment method is no longer valid. - **MONEY_ORDER**: This enumeration value indicates that the payment method will be by a Money Order. - **PAISA_PAY**: This payment method is no longer valid. - **PAISA_PAY_ESCROW**: This payment method is no longer valid. - **PAISA_PAY_ESCROW_EMI**: This payment method is no longer valid. - **PAYPAL**: This payment method is no longer valid. - **PERSONAL_CHECK**: This enumeration value indicates that the payment method will be a Personal check. - **OTHER**: This enumeration value indicates that the seller is offering an offline payment method not otherwise covered.
    */
    private ?PaymentMethodTypeEnum $paymentMethodType = null;
    
    /**
     * @var RecipientAccountReference|null $recipientAccountReference <span class="tablenote"><b>Note</b>: This type is no longer applicable. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods.</span>
    */
    private ?RecipientAccountReference $recipientAccountReference = null;
    
    /**
     * Instantiates a new PaymentMethod and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentMethod {
        return new PaymentMethod();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the brands property value. <span class="tablenote"><b>Note</b>: This array is no longer applicable and should not be used. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods, including any credit card brands accepted. </span>
     * @return array<PaymentInstrumentBrandEnum>|null
    */
    public function getBrands(): ?array {
        return $this->brands;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brands' => fn(ParseNode $n) => $o->setBrands($n->getCollectionOfEnumValues(PaymentInstrumentBrandEnum::class)),
            'paymentMethodType' => fn(ParseNode $n) => $o->setPaymentMethodType($n->getEnumValue(PaymentMethodTypeEnum::class)),
            'recipientAccountReference' => fn(ParseNode $n) => $o->setRecipientAccountReference($n->getObjectValue([RecipientAccountReference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the paymentMethodType property value. An enumeration type that defines the supported payment methods.<br><br> <span class="tablenote"><b>Note</b>: eBay manages all electronic payment methods that are available to buyers, so sellers only need to specify one or more offline payment methods for listings that support or require payment that occurs off of the eBay platform. All electronic payment method enum values are no longer applicable, and are marked as such. </span> | - **CASH_IN_PERSON**: This enumeration value indicates that the payment method will be cash, and the transaction will occur in-person. - **CASH_ON_DELIVERY**: This enumeration value indicates that the payment method will be cash, and the transaction will occur after the item is delivered to the buyer. - **CASH_ON_PICKUP**: This enumeration value indicates that the payment method will be cash, and the transaction will occur when the buyer picks up the item. - **CASHIER_CHECK**: This enumeration value indicates that the payment method will be a Cashier Check. - **CREDIT_CARD**: This payment method is no longer valid. - **ESCROW**: This enumeration value indicates that escrow was used as the payment method to pay for the order. This form of payment is used for high-value orders. - **INTEGRATED_MERCHANT_CREDIT_CARD**: This payment method is no longer valid. - **LOAN_CHECK**: This payment method is no longer valid. - **MONEY_ORDER**: This enumeration value indicates that the payment method will be by a Money Order. - **PAISA_PAY**: This payment method is no longer valid. - **PAISA_PAY_ESCROW**: This payment method is no longer valid. - **PAISA_PAY_ESCROW_EMI**: This payment method is no longer valid. - **PAYPAL**: This payment method is no longer valid. - **PERSONAL_CHECK**: This enumeration value indicates that the payment method will be a Personal check. - **OTHER**: This enumeration value indicates that the seller is offering an offline payment method not otherwise covered.
     * @return PaymentMethodTypeEnum|null
    */
    public function getPaymentMethodType(): ?PaymentMethodTypeEnum {
        return $this->paymentMethodType;
    }

    /**
     * Gets the recipientAccountReference property value. <span class="tablenote"><b>Note</b>: This type is no longer applicable. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods.</span>
     * @return RecipientAccountReference|null
    */
    public function getRecipientAccountReference(): ?RecipientAccountReference {
        return $this->recipientAccountReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('brands', $this->getBrands());
        $writer->writeEnumValue('paymentMethodType', $this->getPaymentMethodType());
        $writer->writeObjectValue('recipientAccountReference', $this->getRecipientAccountReference());
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
     * Sets the brands property value. <span class="tablenote"><b>Note</b>: This array is no longer applicable and should not be used. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods, including any credit card brands accepted. </span>
     * @param array<PaymentInstrumentBrandEnum>|null $value Value to set for the brands property.
    */
    public function setBrands(?array $value): void {
        $this->brands = $value;
    }

    /**
     * Sets the paymentMethodType property value. An enumeration type that defines the supported payment methods.<br><br> <span class="tablenote"><b>Note</b>: eBay manages all electronic payment methods that are available to buyers, so sellers only need to specify one or more offline payment methods for listings that support or require payment that occurs off of the eBay platform. All electronic payment method enum values are no longer applicable, and are marked as such. </span> | - **CASH_IN_PERSON**: This enumeration value indicates that the payment method will be cash, and the transaction will occur in-person. - **CASH_ON_DELIVERY**: This enumeration value indicates that the payment method will be cash, and the transaction will occur after the item is delivered to the buyer. - **CASH_ON_PICKUP**: This enumeration value indicates that the payment method will be cash, and the transaction will occur when the buyer picks up the item. - **CASHIER_CHECK**: This enumeration value indicates that the payment method will be a Cashier Check. - **CREDIT_CARD**: This payment method is no longer valid. - **ESCROW**: This enumeration value indicates that escrow was used as the payment method to pay for the order. This form of payment is used for high-value orders. - **INTEGRATED_MERCHANT_CREDIT_CARD**: This payment method is no longer valid. - **LOAN_CHECK**: This payment method is no longer valid. - **MONEY_ORDER**: This enumeration value indicates that the payment method will be by a Money Order. - **PAISA_PAY**: This payment method is no longer valid. - **PAISA_PAY_ESCROW**: This payment method is no longer valid. - **PAISA_PAY_ESCROW_EMI**: This payment method is no longer valid. - **PAYPAL**: This payment method is no longer valid. - **PERSONAL_CHECK**: This enumeration value indicates that the payment method will be a Personal check. - **OTHER**: This enumeration value indicates that the seller is offering an offline payment method not otherwise covered.
     * @param PaymentMethodTypeEnum|null $value Value to set for the paymentMethodType property.
    */
    public function setPaymentMethodType(?PaymentMethodTypeEnum $value): void {
        $this->paymentMethodType = $value;
    }

    /**
     * Sets the recipientAccountReference property value. <span class="tablenote"><b>Note</b>: This type is no longer applicable. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods.</span>
     * @param RecipientAccountReference|null $value Value to set for the recipientAccountReference property.
    */
    public function setRecipientAccountReference(?RecipientAccountReference $value): void {
        $this->recipientAccountReference = $value;
    }

}
