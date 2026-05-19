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

/**
 * This type is used by the <strong>getSubscription</strong> response container, which defines the subscription types and levels for the seller account.
*/
class Subscription implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $marketplaceId The marketplace with which the subscription is associated. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var string|null $subscriptionId The subscription ID.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $subscriptionLevel The subscription level. For example, subscription levels for an eBay store include Starter, Basic, Featured, Anchor, and Enterprise levels.
    */
    private ?string $subscriptionLevel = null;
    
    /**
     * @var string|null $subscriptionType The kind of entity with which the subscription is associated, such as an eBay store. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:SubscriptionTypeEnum'>eBay API documentation</a>
    */
    private ?string $subscriptionType = null;
    
    /**
     * @var TimeDuration|null $term A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
    */
    private ?TimeDuration $term = null;
    
    /**
     * Instantiates a new Subscription and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Subscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Subscription {
        return new Subscription();
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
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionLevel' => fn(ParseNode $n) => $o->setSubscriptionLevel($n->getStringValue()),
            'subscriptionType' => fn(ParseNode $n) => $o->setSubscriptionType($n->getStringValue()),
            'term' => fn(ParseNode $n) => $o->setTerm($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the marketplaceId property value. The marketplace with which the subscription is associated. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the subscriptionId property value. The subscription ID.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the subscriptionLevel property value. The subscription level. For example, subscription levels for an eBay store include Starter, Basic, Featured, Anchor, and Enterprise levels.
     * @return string|null
    */
    public function getSubscriptionLevel(): ?string {
        return $this->subscriptionLevel;
    }

    /**
     * Gets the subscriptionType property value. The kind of entity with which the subscription is associated, such as an eBay store. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:SubscriptionTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getSubscriptionType(): ?string {
        return $this->subscriptionType;
    }

    /**
     * Gets the term property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @return TimeDuration|null
    */
    public function getTerm(): ?TimeDuration {
        return $this->term;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionLevel', $this->getSubscriptionLevel());
        $writer->writeStringValue('subscriptionType', $this->getSubscriptionType());
        $writer->writeObjectValue('term', $this->getTerm());
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
     * Sets the marketplaceId property value. The marketplace with which the subscription is associated. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the subscriptionId property value. The subscription ID.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the subscriptionLevel property value. The subscription level. For example, subscription levels for an eBay store include Starter, Basic, Featured, Anchor, and Enterprise levels.
     * @param string|null $value Value to set for the subscriptionLevel property.
    */
    public function setSubscriptionLevel(?string $value): void {
        $this->subscriptionLevel = $value;
    }

    /**
     * Sets the subscriptionType property value. The kind of entity with which the subscription is associated, such as an eBay store. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:SubscriptionTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the subscriptionType property.
    */
    public function setSubscriptionType(?string $value): void {
        $this->subscriptionType = $value;
    }

    /**
     * Sets the term property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @param TimeDuration|null $value Value to set for the term property.
    */
    public function setTerm(?TimeDuration $value): void {
        $this->term = $value;
    }

}
