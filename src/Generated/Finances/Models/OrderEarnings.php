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
 * The base response type of the <b>getOrderEarnings</b> method, which includes pagination output fields and a collection of orders that match the request criteria.
*/
class OrderEarnings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The URI for the current page of results.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The maximum number of order earnings records returned in a single page of results.
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The URI for the next page of results. This field is only returned if there is a next page of results to retrieve.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The number of order earnings records skipped before returning the current page of results.
    */
    private ?int $offset = null;
    
    /**
     * @var array<OrderEarning>|null $orders The list of order earnings records returned in the current page of results. This array will be returned as empty if no orders match the request criteria.
    */
    private ?array $orders = null;
    
    /**
     * @var string|null $prev The URI for the previous page of results. This field is only returned if there is a previous page of results to retrieve.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total The total number of order earnings records that match the request criteria.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new OrderEarnings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderEarnings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderEarnings {
        return new OrderEarnings();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'orders' => fn(ParseNode $n) => $o->setOrders($n->getCollectionOfObjectValues([OrderEarning::class, 'createFromDiscriminatorValue'])),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI for the current page of results.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The maximum number of order earnings records returned in a single page of results.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The URI for the next page of results. This field is only returned if there is a next page of results to retrieve.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The number of order earnings records skipped before returning the current page of results.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the orders property value. The list of order earnings records returned in the current page of results. This array will be returned as empty if no orders match the request criteria.
     * @return array<OrderEarning>|null
    */
    public function getOrders(): ?array {
        return $this->orders;
    }

    /**
     * Gets the prev property value. The URI for the previous page of results. This field is only returned if there is a previous page of results to retrieve.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. The total number of order earnings records that match the request criteria.
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
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeCollectionOfObjectValues('orders', $this->getOrders());
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
     * Sets the href property value. The URI for the current page of results.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The maximum number of order earnings records returned in a single page of results.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The URI for the next page of results. This field is only returned if there is a next page of results to retrieve.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The number of order earnings records skipped before returning the current page of results.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the orders property value. The list of order earnings records returned in the current page of results. This array will be returned as empty if no orders match the request criteria.
     * @param array<OrderEarning>|null $value Value to set for the orders property.
    */
    public function setOrders(?array $value): void {
        $this->orders = $value;
    }

    /**
     * Sets the prev property value. The URI for the previous page of results. This field is only returned if there is a previous page of results to retrieve.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. The total number of order earnings records that match the request criteria.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
