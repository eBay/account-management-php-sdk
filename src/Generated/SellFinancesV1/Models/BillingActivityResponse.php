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
 * BillingActivityResponse
*/
class BillingActivityResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<BillingActivityLineItem>|null $billingActivities A list of billing activity entries that meet the filter criteria. Billing activity will include fees, credits, and promotional offers applied to the seller's account.
    */
    private ?array $billingActivities = null;
    
    /**
     * @var int|null $count An integer representing the number of billing activity items returned in this response page.
    */
    private ?int $count = null;
    
    /**
     * @var int|null $limit The value of the <b>limit</b> parameter. This is the maximum number of line items, as filtered, of billing transactions to return per page from the result set.
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The URI for the next page of results starting with the resource name. This URI is returned if there is an additional page of results in the result set.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The value of the <b>offset</b> parameter. This field indicates how many results were skipped in the response. If an <b>offset</b> parameter was not included in the request, this value will default to <code>0</code>, returning the first page of results.
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The URI for the previous page of results starting with the resource name. This URI is returned if there is a previous page of results in the result set.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total The total number of billing transactions available that match the filter criteria. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>When the <b>total</b> value exceeds the <b>limit</b> value, there are multiple pages of results.</span></p>
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new BillingActivityResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillingActivityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillingActivityResponse {
        return new BillingActivityResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingActivities property value. A list of billing activity entries that meet the filter criteria. Billing activity will include fees, credits, and promotional offers applied to the seller's account.
     * @return array<BillingActivityLineItem>|null
    */
    public function getBillingActivities(): ?array {
        return $this->billingActivities;
    }

    /**
     * Gets the count property value. An integer representing the number of billing activity items returned in this response page.
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingActivities' => fn(ParseNode $n) => $o->setBillingActivities($n->getCollectionOfObjectValues([BillingActivityLineItem::class, 'createFromDiscriminatorValue'])),
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the limit property value. The value of the <b>limit</b> parameter. This is the maximum number of line items, as filtered, of billing transactions to return per page from the result set.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The URI for the next page of results starting with the resource name. This URI is returned if there is an additional page of results in the result set.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The value of the <b>offset</b> parameter. This field indicates how many results were skipped in the response. If an <b>offset</b> parameter was not included in the request, this value will default to <code>0</code>, returning the first page of results.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The URI for the previous page of results starting with the resource name. This URI is returned if there is a previous page of results in the result set.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. The total number of billing transactions available that match the filter criteria. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>When the <b>total</b> value exceeds the <b>limit</b> value, there are multiple pages of results.</span></p>
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('billingActivities', $this->getBillingActivities());
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the billingActivities property value. A list of billing activity entries that meet the filter criteria. Billing activity will include fees, credits, and promotional offers applied to the seller's account.
     * @param array<BillingActivityLineItem>|null $value Value to set for the billingActivities property.
    */
    public function setBillingActivities(?array $value): void {
        $this->billingActivities = $value;
    }

    /**
     * Sets the count property value. An integer representing the number of billing activity items returned in this response page.
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->count = $value;
    }

    /**
     * Sets the limit property value. The value of the <b>limit</b> parameter. This is the maximum number of line items, as filtered, of billing transactions to return per page from the result set.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The URI for the next page of results starting with the resource name. This URI is returned if there is an additional page of results in the result set.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The value of the <b>offset</b> parameter. This field indicates how many results were skipped in the response. If an <b>offset</b> parameter was not included in the request, this value will default to <code>0</code>, returning the first page of results.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The URI for the previous page of results starting with the resource name. This URI is returned if there is a previous page of results in the result set.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. The total number of billing transactions available that match the filter criteria. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>When the <b>total</b> value exceeds the <b>limit</b> value, there are multiple pages of results.</span></p>
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
