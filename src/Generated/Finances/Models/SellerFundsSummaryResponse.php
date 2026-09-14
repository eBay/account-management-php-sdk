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
 * This type is used by the response payload of the <strong>getSellerFundsSummary</strong> method. All of the funds returned in  <strong>getSellerFundsSummary</strong> are funds that have not yet been paid to the seller through a seller payout. If there are no funds that are pending, on hold, or being processed for the seller's account, no response payload is returned, and an http status code of <code>204 - No Content</code> is returned instead.
*/
class SellerFundsSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $availableFunds This field represents the total amount of order funds that are available for a payout, but processing for a seller payout has not yet begun. If a seller wants to get more details on sales transactions that have yet to be processed, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_AVAILABLE_FOR_PAYOUT</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no funds available to be processed for a payout.
    */
    private ?Amount $availableFunds = null;
    
    /**
     * @var Amount|null $fundsOnHold This field represents the total amount of order funds on hold. Seller payment holds can occur for different reasons. If a seller wants to get more details on sales transactions where funds are currently on hold, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_ON_HOLD</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no seller payment holds that will eventually be processed for a payout.
    */
    private ?Amount $fundsOnHold = null;
    
    /**
     * @var Amount|null $processingFunds This field represents the total amount of order funds being prepared and processed for a seller payout. If a seller wants to get more details on sales transactions that are being processed, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_PROCESSING</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no funds available to be processed for a payout.
    */
    private ?Amount $processingFunds = null;
    
    /**
     * @var Amount|null $totalFunds This field represents the total amount of order funds still due to be distributed to the seller through a seller payout. This field should equal the sum of the amounts returned in the following fields:<br><ul><li><b>processingFunds</b></li><li><b>availableFunds</b></li><li><b>fundsOnHold</b></li></ul><br>If no payout funds are due to the seller, a <code>204 - No Content</code>  status code will be returned along with an empty payload.
    */
    private ?Amount $totalFunds = null;
    
    /**
     * Instantiates a new SellerFundsSummaryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellerFundsSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellerFundsSummaryResponse {
        return new SellerFundsSummaryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the availableFunds property value. This field represents the total amount of order funds that are available for a payout, but processing for a seller payout has not yet begun. If a seller wants to get more details on sales transactions that have yet to be processed, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_AVAILABLE_FOR_PAYOUT</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no funds available to be processed for a payout.
     * @return Amount|null
    */
    public function getAvailableFunds(): ?Amount {
        return $this->availableFunds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableFunds' => fn(ParseNode $n) => $o->setAvailableFunds($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'fundsOnHold' => fn(ParseNode $n) => $o->setFundsOnHold($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'processingFunds' => fn(ParseNode $n) => $o->setProcessingFunds($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'totalFunds' => fn(ParseNode $n) => $o->setTotalFunds($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fundsOnHold property value. This field represents the total amount of order funds on hold. Seller payment holds can occur for different reasons. If a seller wants to get more details on sales transactions where funds are currently on hold, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_ON_HOLD</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no seller payment holds that will eventually be processed for a payout.
     * @return Amount|null
    */
    public function getFundsOnHold(): ?Amount {
        return $this->fundsOnHold;
    }

    /**
     * Gets the processingFunds property value. This field represents the total amount of order funds being prepared and processed for a seller payout. If a seller wants to get more details on sales transactions that are being processed, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_PROCESSING</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no funds available to be processed for a payout.
     * @return Amount|null
    */
    public function getProcessingFunds(): ?Amount {
        return $this->processingFunds;
    }

    /**
     * Gets the totalFunds property value. This field represents the total amount of order funds still due to be distributed to the seller through a seller payout. This field should equal the sum of the amounts returned in the following fields:<br><ul><li><b>processingFunds</b></li><li><b>availableFunds</b></li><li><b>fundsOnHold</b></li></ul><br>If no payout funds are due to the seller, a <code>204 - No Content</code>  status code will be returned along with an empty payload.
     * @return Amount|null
    */
    public function getTotalFunds(): ?Amount {
        return $this->totalFunds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('availableFunds', $this->getAvailableFunds());
        $writer->writeObjectValue('fundsOnHold', $this->getFundsOnHold());
        $writer->writeObjectValue('processingFunds', $this->getProcessingFunds());
        $writer->writeObjectValue('totalFunds', $this->getTotalFunds());
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
     * Sets the availableFunds property value. This field represents the total amount of order funds that are available for a payout, but processing for a seller payout has not yet begun. If a seller wants to get more details on sales transactions that have yet to be processed, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_AVAILABLE_FOR_PAYOUT</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no funds available to be processed for a payout.
     * @param Amount|null $value Value to set for the availableFunds property.
    */
    public function setAvailableFunds(?Amount $value): void {
        $this->availableFunds = $value;
    }

    /**
     * Sets the fundsOnHold property value. This field represents the total amount of order funds on hold. Seller payment holds can occur for different reasons. If a seller wants to get more details on sales transactions where funds are currently on hold, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_ON_HOLD</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no seller payment holds that will eventually be processed for a payout.
     * @param Amount|null $value Value to set for the fundsOnHold property.
    */
    public function setFundsOnHold(?Amount $value): void {
        $this->fundsOnHold = $value;
    }

    /**
     * Sets the processingFunds property value. This field represents the total amount of order funds being prepared and processed for a seller payout. If a seller wants to get more details on sales transactions that are being processed, the seller can use the <strong>getTransactions</strong> method, and use the <strong>transactionStatus</strong> filter with its value set to <code>FUNDS_PROCESSING</code>.<br><br>This container will return 0.0 with the appropriate payout currency if there are no funds available to be processed for a payout.
     * @param Amount|null $value Value to set for the processingFunds property.
    */
    public function setProcessingFunds(?Amount $value): void {
        $this->processingFunds = $value;
    }

    /**
     * Sets the totalFunds property value. This field represents the total amount of order funds still due to be distributed to the seller through a seller payout. This field should equal the sum of the amounts returned in the following fields:<br><ul><li><b>processingFunds</b></li><li><b>availableFunds</b></li><li><b>fundsOnHold</b></li></ul><br>If no payout funds are due to the seller, a <code>204 - No Content</code>  status code will be returned along with an empty payload.
     * @param Amount|null $value Value to set for the totalFunds property.
    */
    public function setTotalFunds(?Amount $value): void {
        $this->totalFunds = $value;
    }

}
