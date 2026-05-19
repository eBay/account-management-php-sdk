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

namespace EBay\AccountManagement\Generated\SellFinancesV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is the base response type used by <code>TRANSFER</code> transaction type that is returned in the response.
*/
class Transfer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var FundingSource|null $fundingSource This type defines the source of funds used to finance a transfer, such as available seller funds, a credit card, or a bank account.
    */
    private ?FundingSource $fundingSource = null;
    
    /**
     * @var string|null $transactionDate This timestamp indicates the date/time of the transfer. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2020-08-04T19:09:02.768Z</code>
    */
    private ?string $transactionDate = null;
    
    /**
     * @var Amount|null $transferAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $transferAmount = null;
    
    /**
     * @var TransferDetail|null $transferDetail This type is used by the <b>transferDetail</b> container, which provides more details about the transfer and the charge(s) associated with the transfer.
    */
    private ?TransferDetail $transferDetail = null;
    
    /**
     * @var string|null $transferId The unique identifier of the <code>TRANSFER</code> transaction type. This is the same value that was passed into the end of the call URI.
    */
    private ?string $transferId = null;
    
    /**
     * Instantiates a new Transfer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Transfer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Transfer {
        return new Transfer();
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
            'fundingSource' => fn(ParseNode $n) => $o->setFundingSource($n->getObjectValue([FundingSource::class, 'createFromDiscriminatorValue'])),
            'transactionDate' => fn(ParseNode $n) => $o->setTransactionDate($n->getStringValue()),
            'transferAmount' => fn(ParseNode $n) => $o->setTransferAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'transferDetail' => fn(ParseNode $n) => $o->setTransferDetail($n->getObjectValue([TransferDetail::class, 'createFromDiscriminatorValue'])),
            'transferId' => fn(ParseNode $n) => $o->setTransferId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fundingSource property value. This type defines the source of funds used to finance a transfer, such as available seller funds, a credit card, or a bank account.
     * @return FundingSource|null
    */
    public function getFundingSource(): ?FundingSource {
        return $this->fundingSource;
    }

    /**
     * Gets the transactionDate property value. This timestamp indicates the date/time of the transfer. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2020-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getTransactionDate(): ?string {
        return $this->transactionDate;
    }

    /**
     * Gets the transferAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getTransferAmount(): ?Amount {
        return $this->transferAmount;
    }

    /**
     * Gets the transferDetail property value. This type is used by the <b>transferDetail</b> container, which provides more details about the transfer and the charge(s) associated with the transfer.
     * @return TransferDetail|null
    */
    public function getTransferDetail(): ?TransferDetail {
        return $this->transferDetail;
    }

    /**
     * Gets the transferId property value. The unique identifier of the <code>TRANSFER</code> transaction type. This is the same value that was passed into the end of the call URI.
     * @return string|null
    */
    public function getTransferId(): ?string {
        return $this->transferId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('fundingSource', $this->getFundingSource());
        $writer->writeStringValue('transactionDate', $this->getTransactionDate());
        $writer->writeObjectValue('transferAmount', $this->getTransferAmount());
        $writer->writeObjectValue('transferDetail', $this->getTransferDetail());
        $writer->writeStringValue('transferId', $this->getTransferId());
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
     * Sets the fundingSource property value. This type defines the source of funds used to finance a transfer, such as available seller funds, a credit card, or a bank account.
     * @param FundingSource|null $value Value to set for the fundingSource property.
    */
    public function setFundingSource(?FundingSource $value): void {
        $this->fundingSource = $value;
    }

    /**
     * Sets the transactionDate property value. This timestamp indicates the date/time of the transfer. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2020-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the transactionDate property.
    */
    public function setTransactionDate(?string $value): void {
        $this->transactionDate = $value;
    }

    /**
     * Sets the transferAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the transferAmount property.
    */
    public function setTransferAmount(?Amount $value): void {
        $this->transferAmount = $value;
    }

    /**
     * Sets the transferDetail property value. This type is used by the <b>transferDetail</b> container, which provides more details about the transfer and the charge(s) associated with the transfer.
     * @param TransferDetail|null $value Value to set for the transferDetail property.
    */
    public function setTransferDetail(?TransferDetail $value): void {
        $this->transferDetail = $value;
    }

    /**
     * Sets the transferId property value. The unique identifier of the <code>TRANSFER</code> transaction type. This is the same value that was passed into the end of the call URI.
     * @param string|null $value Value to set for the transferId property.
    */
    public function setTransferId(?string $value): void {
        $this->transferId = $value;
    }

}
