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

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * @var array<string>|null $brands <span class="tablenote"><b>Note</b>: This array is no longer applicable and should not be used. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods, including any credit card brands accepted. </span>
    */
    private ?array $brands = null;
    
    /**
     * @var string|null $paymentMethodType This array is only applicable for listings supporting offline payment methods. See the <b>PaymentMethodTypeEnum</b> type for supported offline payment method enum values. If offline payments are enabled for the policy, provide at least one offline payment method.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentMethodTypeEnum'>eBay API documentation</a>
    */
    private ?string $paymentMethodType = null;
    
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
     * @return array<string>|null
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
            'brands' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBrands($val);
            },
            'paymentMethodType' => fn(ParseNode $n) => $o->setPaymentMethodType($n->getStringValue()),
            'recipientAccountReference' => fn(ParseNode $n) => $o->setRecipientAccountReference($n->getObjectValue([RecipientAccountReference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the paymentMethodType property value. This array is only applicable for listings supporting offline payment methods. See the <b>PaymentMethodTypeEnum</b> type for supported offline payment method enum values. If offline payments are enabled for the policy, provide at least one offline payment method.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentMethodTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPaymentMethodType(): ?string {
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
        $writer->writeCollectionOfPrimitiveValues('brands', $this->getBrands());
        $writer->writeStringValue('paymentMethodType', $this->getPaymentMethodType());
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
     * @param array<string>|null $value Value to set for the brands property.
    */
    public function setBrands(?array $value): void {
        $this->brands = $value;
    }

    /**
     * Sets the paymentMethodType property value. This array is only applicable for listings supporting offline payment methods. See the <b>PaymentMethodTypeEnum</b> type for supported offline payment method enum values. If offline payments are enabled for the policy, provide at least one offline payment method.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentMethodTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the paymentMethodType property.
    */
    public function setPaymentMethodType(?string $value): void {
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
