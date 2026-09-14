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
 * This type is used by the <strong>getSubscription</strong> response container, which defines the subscription types and levels for the seller account.
*/
class Subscription implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId This enumerated type contains a list of the standard codes that represent each of the eBay marketplaces. | - **EBAY_AT**: eBay Austria (ebay.at) - **EBAY_AU**: eBay Australia (ebay.com/au) - **EBAY_BE**: eBay Belgium (ebay.com/sch/Belgium) - **EBAY_CA**: eBay Canada (English) (ebay.ca) - **EBAY_CH**: eBay Switzerland (ebay.ch) - **EBAY_CN**: eBay China (ebay.com/sch/China) - **EBAY_CZ**: eBay Czech Republic (ebay.com/sch/Czech-Republic) - **EBAY_DE**: eBay Germany (ebay.de) - **EBAY_DK**: eBay Denmark (ebay.com/sch/Denmark) - **EBAY_ES**: eBay Spain (ebay.es) - **EBAY_FI**: eBay Finland (ebay.com/sch/Finland) - **EBAY_FR**: eBay France (ebay.fr) - **EBAY_GB**: eBay UK (ebay.co.uk) - **EBAY_GR**: eBay Greece (ebay.com/sch/Greece) - **EBAY_HK**: eBay Hong Kong (ebay.com.hk) - **EBAY_HU**: eBay Hungary (ebay.com/sch/Hungary) - **EBAY_ID**: eBay Indonesia (id.ebay.com) - **EBAY_IE**: eBay Ireland (ebay.ie) - **EBAY_IL**: eBay Israel (ebay.com/sch/Israel) - **EBAY_IN**: eBay India (ebay.in)<br><span class="tablenote"><strong>Note:</strong> eBay India is no longer a functioning eBay marketplace.</span> - **EBAY_IT**: eBay Italy (ebay.it) - **EBAY_JP**: eBay Japan (ebay.co.jp) - **EBAY_MY**: eBay Malaysia (ebay.com/my) - **EBAY_NL**: eBay Netherlands (ebay.nl) - **EBAY_NO**: eBay Norway (ebay.com/sch/Norway) - **EBAY_NZ**: eBay New Zealand (ebay.com/sch/New-Zealand) - **EBAY_PE**: eBay Peru (ebay.com/sch/Peru) - **EBAY_PH**: eBay Philippines (ebay.ph) - **EBAY_PL**: eBay Poland (ebay.pl) - **EBAY_PR**: eBay Puerto Rico (ebay.com/sch/Puerto-Rico) - **EBAY_PT**: eBay Portugal (ebay.com/sch/Portugal) - **EBAY_RU**: eBay Russia (ebay.com/sch/Russia) - **EBAY_SE**: eBay Sweden (ebay.com/sch/Sweden) - **EBAY_SG**: eBay Singapore (ebay.com/sg) - **EBAY_TH**: eBay Thailand (export.ebay.co.th) - **EBAY_TW**: eBay Taiwan (ebay.com/tw) - **EBAY_US**: eBay US (ebay.com) - **EBAY_VN**: eBay Vietnam (ebay.vn) - **EBAY_ZA**: eBay South Africa (ebay.com/sch/South-Africa) - **EBAY_HALF_US**: This enumeration value is no longer applicable as the Half.com site no longer exists. - **EBAY_MOTORS_US**: eBay Motors US (ebay.com/motors)
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * @var string|null $subscriptionId The subscription ID.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $subscriptionLevel The subscription level. For example, subscription levels for an eBay store include Starter, Basic, Featured, Anchor, and Enterprise levels.
    */
    private ?string $subscriptionLevel = null;
    
    /**
     * @var SubscriptionTypeEnum|null $subscriptionType This enumerated type defines the types of subscriptions that may be associated with a seller account, such as an eBay store subscription. | - **STORE_PLAN**: This value indicates an eBay store subscription.
    */
    private ?SubscriptionTypeEnum $subscriptionType = null;
    
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
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionLevel' => fn(ParseNode $n) => $o->setSubscriptionLevel($n->getStringValue()),
            'subscriptionType' => fn(ParseNode $n) => $o->setSubscriptionType($n->getEnumValue(SubscriptionTypeEnum::class)),
            'term' => fn(ParseNode $n) => $o->setTerm($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the marketplaceId property value. This enumerated type contains a list of the standard codes that represent each of the eBay marketplaces. | - **EBAY_AT**: eBay Austria (ebay.at) - **EBAY_AU**: eBay Australia (ebay.com/au) - **EBAY_BE**: eBay Belgium (ebay.com/sch/Belgium) - **EBAY_CA**: eBay Canada (English) (ebay.ca) - **EBAY_CH**: eBay Switzerland (ebay.ch) - **EBAY_CN**: eBay China (ebay.com/sch/China) - **EBAY_CZ**: eBay Czech Republic (ebay.com/sch/Czech-Republic) - **EBAY_DE**: eBay Germany (ebay.de) - **EBAY_DK**: eBay Denmark (ebay.com/sch/Denmark) - **EBAY_ES**: eBay Spain (ebay.es) - **EBAY_FI**: eBay Finland (ebay.com/sch/Finland) - **EBAY_FR**: eBay France (ebay.fr) - **EBAY_GB**: eBay UK (ebay.co.uk) - **EBAY_GR**: eBay Greece (ebay.com/sch/Greece) - **EBAY_HK**: eBay Hong Kong (ebay.com.hk) - **EBAY_HU**: eBay Hungary (ebay.com/sch/Hungary) - **EBAY_ID**: eBay Indonesia (id.ebay.com) - **EBAY_IE**: eBay Ireland (ebay.ie) - **EBAY_IL**: eBay Israel (ebay.com/sch/Israel) - **EBAY_IN**: eBay India (ebay.in)<br><span class="tablenote"><strong>Note:</strong> eBay India is no longer a functioning eBay marketplace.</span> - **EBAY_IT**: eBay Italy (ebay.it) - **EBAY_JP**: eBay Japan (ebay.co.jp) - **EBAY_MY**: eBay Malaysia (ebay.com/my) - **EBAY_NL**: eBay Netherlands (ebay.nl) - **EBAY_NO**: eBay Norway (ebay.com/sch/Norway) - **EBAY_NZ**: eBay New Zealand (ebay.com/sch/New-Zealand) - **EBAY_PE**: eBay Peru (ebay.com/sch/Peru) - **EBAY_PH**: eBay Philippines (ebay.ph) - **EBAY_PL**: eBay Poland (ebay.pl) - **EBAY_PR**: eBay Puerto Rico (ebay.com/sch/Puerto-Rico) - **EBAY_PT**: eBay Portugal (ebay.com/sch/Portugal) - **EBAY_RU**: eBay Russia (ebay.com/sch/Russia) - **EBAY_SE**: eBay Sweden (ebay.com/sch/Sweden) - **EBAY_SG**: eBay Singapore (ebay.com/sg) - **EBAY_TH**: eBay Thailand (export.ebay.co.th) - **EBAY_TW**: eBay Taiwan (ebay.com/tw) - **EBAY_US**: eBay US (ebay.com) - **EBAY_VN**: eBay Vietnam (ebay.vn) - **EBAY_ZA**: eBay South Africa (ebay.com/sch/South-Africa) - **EBAY_HALF_US**: This enumeration value is no longer applicable as the Half.com site no longer exists. - **EBAY_MOTORS_US**: eBay Motors US (ebay.com/motors)
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
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
     * Gets the subscriptionType property value. This enumerated type defines the types of subscriptions that may be associated with a seller account, such as an eBay store subscription. | - **STORE_PLAN**: This value indicates an eBay store subscription.
     * @return SubscriptionTypeEnum|null
    */
    public function getSubscriptionType(): ?SubscriptionTypeEnum {
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
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionLevel', $this->getSubscriptionLevel());
        $writer->writeEnumValue('subscriptionType', $this->getSubscriptionType());
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
     * Sets the marketplaceId property value. This enumerated type contains a list of the standard codes that represent each of the eBay marketplaces. | - **EBAY_AT**: eBay Austria (ebay.at) - **EBAY_AU**: eBay Australia (ebay.com/au) - **EBAY_BE**: eBay Belgium (ebay.com/sch/Belgium) - **EBAY_CA**: eBay Canada (English) (ebay.ca) - **EBAY_CH**: eBay Switzerland (ebay.ch) - **EBAY_CN**: eBay China (ebay.com/sch/China) - **EBAY_CZ**: eBay Czech Republic (ebay.com/sch/Czech-Republic) - **EBAY_DE**: eBay Germany (ebay.de) - **EBAY_DK**: eBay Denmark (ebay.com/sch/Denmark) - **EBAY_ES**: eBay Spain (ebay.es) - **EBAY_FI**: eBay Finland (ebay.com/sch/Finland) - **EBAY_FR**: eBay France (ebay.fr) - **EBAY_GB**: eBay UK (ebay.co.uk) - **EBAY_GR**: eBay Greece (ebay.com/sch/Greece) - **EBAY_HK**: eBay Hong Kong (ebay.com.hk) - **EBAY_HU**: eBay Hungary (ebay.com/sch/Hungary) - **EBAY_ID**: eBay Indonesia (id.ebay.com) - **EBAY_IE**: eBay Ireland (ebay.ie) - **EBAY_IL**: eBay Israel (ebay.com/sch/Israel) - **EBAY_IN**: eBay India (ebay.in)<br><span class="tablenote"><strong>Note:</strong> eBay India is no longer a functioning eBay marketplace.</span> - **EBAY_IT**: eBay Italy (ebay.it) - **EBAY_JP**: eBay Japan (ebay.co.jp) - **EBAY_MY**: eBay Malaysia (ebay.com/my) - **EBAY_NL**: eBay Netherlands (ebay.nl) - **EBAY_NO**: eBay Norway (ebay.com/sch/Norway) - **EBAY_NZ**: eBay New Zealand (ebay.com/sch/New-Zealand) - **EBAY_PE**: eBay Peru (ebay.com/sch/Peru) - **EBAY_PH**: eBay Philippines (ebay.ph) - **EBAY_PL**: eBay Poland (ebay.pl) - **EBAY_PR**: eBay Puerto Rico (ebay.com/sch/Puerto-Rico) - **EBAY_PT**: eBay Portugal (ebay.com/sch/Portugal) - **EBAY_RU**: eBay Russia (ebay.com/sch/Russia) - **EBAY_SE**: eBay Sweden (ebay.com/sch/Sweden) - **EBAY_SG**: eBay Singapore (ebay.com/sg) - **EBAY_TH**: eBay Thailand (export.ebay.co.th) - **EBAY_TW**: eBay Taiwan (ebay.com/tw) - **EBAY_US**: eBay US (ebay.com) - **EBAY_VN**: eBay Vietnam (ebay.vn) - **EBAY_ZA**: eBay South Africa (ebay.com/sch/South-Africa) - **EBAY_HALF_US**: This enumeration value is no longer applicable as the Half.com site no longer exists. - **EBAY_MOTORS_US**: eBay Motors US (ebay.com/motors)
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
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
     * Sets the subscriptionType property value. This enumerated type defines the types of subscriptions that may be associated with a seller account, such as an eBay store subscription. | - **STORE_PLAN**: This value indicates an eBay store subscription.
     * @param SubscriptionTypeEnum|null $value Value to set for the subscriptionType property.
    */
    public function setSubscriptionType(?SubscriptionTypeEnum $value): void {
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
