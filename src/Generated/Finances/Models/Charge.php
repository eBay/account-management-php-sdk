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
 * This type is used by the <b>charge</b> container, which is an array of one or more charges related to the transfer.
*/
class Charge implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cancellationId The unique identifier of an order cancellation. This field is only applicable and returned if the charge is related to an order cancellation.
    */
    private ?string $cancellationId = null;
    
    /**
     * @var string|null $caseId The unique identifier of a case filed against an order. This field is only applicable and returned if the charge is related to a case filed against an order.
    */
    private ?string $caseId = null;
    
    /**
     * @var Amount|null $chargeNetAmount This container shows the net amount of the charge, which is the total amount of the charge minus the total amount of fees credited towards this refund as per eBay policy. It is possible for there to be multiple charges from multiple orders with one transfer. The net aggregate amount for all charges found in the <b>charges</b> array can be found in the <b>transferDetail.totalChargeNetAmount</b> container.
    */
    private ?Amount $chargeNetAmount = null;
    
    /**
     * @var string|null $inquiryId The unique identifier of an Item Not Received (INR) inquiry filed against an order. This field is only applicable and returned if the charge is related to has an INR inquiry filed against the order.
    */
    private ?string $inquiryId = null;
    
    /**
     * @var string|null $orderId The unique identifier of the order that is associated with the charge.
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $paymentDisputeId The unique identifier of a third-party payment dispute filed against an order. This occurs when the buyer files a dispute against the order with their payment provider, and then the dispute comes into eBay's system. This field is only applicable and returned if the charge is related to a third-party payment dispute filed against an order.
    */
    private ?string $paymentDisputeId = null;
    
    /**
     * @var string|null $refundId The unique identifier of a buyer refund associated with the charge.
    */
    private ?string $refundId = null;
    
    /**
     * @var string|null $returnId The unique identifier of an order return. This field is only applicable and returned if the charge is related to an order that was returned by the buyer.
    */
    private ?string $returnId = null;
    
    /**
     * Instantiates a new Charge and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Charge
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Charge {
        return new Charge();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancellationId property value. The unique identifier of an order cancellation. This field is only applicable and returned if the charge is related to an order cancellation.
     * @return string|null
    */
    public function getCancellationId(): ?string {
        return $this->cancellationId;
    }

    /**
     * Gets the caseId property value. The unique identifier of a case filed against an order. This field is only applicable and returned if the charge is related to a case filed against an order.
     * @return string|null
    */
    public function getCaseId(): ?string {
        return $this->caseId;
    }

    /**
     * Gets the chargeNetAmount property value. This container shows the net amount of the charge, which is the total amount of the charge minus the total amount of fees credited towards this refund as per eBay policy. It is possible for there to be multiple charges from multiple orders with one transfer. The net aggregate amount for all charges found in the <b>charges</b> array can be found in the <b>transferDetail.totalChargeNetAmount</b> container.
     * @return Amount|null
    */
    public function getChargeNetAmount(): ?Amount {
        return $this->chargeNetAmount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancellationId' => fn(ParseNode $n) => $o->setCancellationId($n->getStringValue()),
            'caseId' => fn(ParseNode $n) => $o->setCaseId($n->getStringValue()),
            'chargeNetAmount' => fn(ParseNode $n) => $o->setChargeNetAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'inquiryId' => fn(ParseNode $n) => $o->setInquiryId($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'paymentDisputeId' => fn(ParseNode $n) => $o->setPaymentDisputeId($n->getStringValue()),
            'refundId' => fn(ParseNode $n) => $o->setRefundId($n->getStringValue()),
            'returnId' => fn(ParseNode $n) => $o->setReturnId($n->getStringValue()),
        ];
    }

    /**
     * Gets the inquiryId property value. The unique identifier of an Item Not Received (INR) inquiry filed against an order. This field is only applicable and returned if the charge is related to has an INR inquiry filed against the order.
     * @return string|null
    */
    public function getInquiryId(): ?string {
        return $this->inquiryId;
    }

    /**
     * Gets the orderId property value. The unique identifier of the order that is associated with the charge.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the paymentDisputeId property value. The unique identifier of a third-party payment dispute filed against an order. This occurs when the buyer files a dispute against the order with their payment provider, and then the dispute comes into eBay's system. This field is only applicable and returned if the charge is related to a third-party payment dispute filed against an order.
     * @return string|null
    */
    public function getPaymentDisputeId(): ?string {
        return $this->paymentDisputeId;
    }

    /**
     * Gets the refundId property value. The unique identifier of a buyer refund associated with the charge.
     * @return string|null
    */
    public function getRefundId(): ?string {
        return $this->refundId;
    }

    /**
     * Gets the returnId property value. The unique identifier of an order return. This field is only applicable and returned if the charge is related to an order that was returned by the buyer.
     * @return string|null
    */
    public function getReturnId(): ?string {
        return $this->returnId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cancellationId', $this->getCancellationId());
        $writer->writeStringValue('caseId', $this->getCaseId());
        $writer->writeObjectValue('chargeNetAmount', $this->getChargeNetAmount());
        $writer->writeStringValue('inquiryId', $this->getInquiryId());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('paymentDisputeId', $this->getPaymentDisputeId());
        $writer->writeStringValue('refundId', $this->getRefundId());
        $writer->writeStringValue('returnId', $this->getReturnId());
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
     * Sets the cancellationId property value. The unique identifier of an order cancellation. This field is only applicable and returned if the charge is related to an order cancellation.
     * @param string|null $value Value to set for the cancellationId property.
    */
    public function setCancellationId(?string $value): void {
        $this->cancellationId = $value;
    }

    /**
     * Sets the caseId property value. The unique identifier of a case filed against an order. This field is only applicable and returned if the charge is related to a case filed against an order.
     * @param string|null $value Value to set for the caseId property.
    */
    public function setCaseId(?string $value): void {
        $this->caseId = $value;
    }

    /**
     * Sets the chargeNetAmount property value. This container shows the net amount of the charge, which is the total amount of the charge minus the total amount of fees credited towards this refund as per eBay policy. It is possible for there to be multiple charges from multiple orders with one transfer. The net aggregate amount for all charges found in the <b>charges</b> array can be found in the <b>transferDetail.totalChargeNetAmount</b> container.
     * @param Amount|null $value Value to set for the chargeNetAmount property.
    */
    public function setChargeNetAmount(?Amount $value): void {
        $this->chargeNetAmount = $value;
    }

    /**
     * Sets the inquiryId property value. The unique identifier of an Item Not Received (INR) inquiry filed against an order. This field is only applicable and returned if the charge is related to has an INR inquiry filed against the order.
     * @param string|null $value Value to set for the inquiryId property.
    */
    public function setInquiryId(?string $value): void {
        $this->inquiryId = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the order that is associated with the charge.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the paymentDisputeId property value. The unique identifier of a third-party payment dispute filed against an order. This occurs when the buyer files a dispute against the order with their payment provider, and then the dispute comes into eBay's system. This field is only applicable and returned if the charge is related to a third-party payment dispute filed against an order.
     * @param string|null $value Value to set for the paymentDisputeId property.
    */
    public function setPaymentDisputeId(?string $value): void {
        $this->paymentDisputeId = $value;
    }

    /**
     * Sets the refundId property value. The unique identifier of a buyer refund associated with the charge.
     * @param string|null $value Value to set for the refundId property.
    */
    public function setRefundId(?string $value): void {
        $this->refundId = $value;
    }

    /**
     * Sets the returnId property value. The unique identifier of an order return. This field is only applicable and returned if the charge is related to an order that was returned by the buyer.
     * @param string|null $value Value to set for the returnId property.
    */
    public function setReturnId(?string $value): void {
        $this->returnId = $value;
    }

}
