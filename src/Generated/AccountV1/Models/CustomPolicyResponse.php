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
 * The response payload for requests that return a list of custom policies.
*/
class CustomPolicyResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CompactCustomPolicyResponse>|null $customPolicies This array contains the custom policies that match the input criteria.
    */
    private ?array $customPolicies = null;
    
    /**
     * @var string|null $href <i>This field is for future use.</i>
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit <i>This field is for future use.</i>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next <i>This field is for future use.</i>
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset <i>This field is for future use.</i>
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev <i>This field is for future use.</i>
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total <i>This field is for future use.</i>
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new CustomPolicyResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomPolicyResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomPolicyResponse {
        return new CustomPolicyResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the customPolicies property value. This array contains the custom policies that match the input criteria.
     * @return array<CompactCustomPolicyResponse>|null
    */
    public function getCustomPolicies(): ?array {
        return $this->customPolicies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customPolicies' => fn(ParseNode $n) => $o->setCustomPolicies($n->getCollectionOfObjectValues([CompactCustomPolicyResponse::class, 'createFromDiscriminatorValue'])),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. <i>This field is for future use.</i>
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. <i>This field is for future use.</i>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. <i>This field is for future use.</i>
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. <i>This field is for future use.</i>
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. <i>This field is for future use.</i>
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. <i>This field is for future use.</i>
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
        $writer->writeCollectionOfObjectValues('customPolicies', $this->getCustomPolicies());
        $writer->writeStringValue('href', $this->getHref());
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
     * Sets the customPolicies property value. This array contains the custom policies that match the input criteria.
     * @param array<CompactCustomPolicyResponse>|null $value Value to set for the customPolicies property.
    */
    public function setCustomPolicies(?array $value): void {
        $this->customPolicies = $value;
    }

    /**
     * Sets the href property value. <i>This field is for future use.</i>
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. <i>This field is for future use.</i>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. <i>This field is for future use.</i>
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. <i>This field is for future use.</i>
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. <i>This field is for future use.</i>
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. <i>This field is for future use.</i>
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
