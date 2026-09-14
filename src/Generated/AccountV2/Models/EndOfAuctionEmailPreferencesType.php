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

namespace EBay\AccountManagement\Generated\AccountV2\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container shows the seller's preferences for the end-of-auction email sent to the winning bidder.
*/
class EndOfAuctionEmailPreferencesType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $emailCustomized This boolean field indicates whether or not the seller is using a customized email to send to winning bidders.
    */
    private ?bool $emailCustomized = null;
    
    /**
     * @var bool|null $logoCustomized This boolean field indicates whether or not the seller is using a customized logo in the emails that are sent to winning bidders.
    */
    private ?bool $logoCustomized = null;
    
    /**
     * @var EndOfAuctionLogoTypeEnum|null $logoType This enum indicates the type of logo that is used in the email that is sent to winning bidders. See EndOfAuctionLogoTypeEnum type for descriptions of the different logo types.
    */
    private ?EndOfAuctionLogoTypeEnum $logoType = null;
    
    /**
     * @var string|null $logoUrl This field shows the URL path to a seller’s custom logo image that is being used in the email sent to winning bidders. This field is only returned if the seller is using a customized logo in emails.
    */
    private ?string $logoUrl = null;
    
    /**
     * @var string|null $templateText This field shows the body text that is being used if the seller is sending customized emails to winning bidders. The template text has a maximum limit  of 1000 characters.
    */
    private ?string $templateText = null;
    
    /**
     * @var bool|null $textCustomized This boolean field indicates whether or not the seller is using customized text in the emails that are sent to winning bidders.
    */
    private ?bool $textCustomized = null;
    
    /**
     * Instantiates a new EndOfAuctionEmailPreferencesType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EndOfAuctionEmailPreferencesType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EndOfAuctionEmailPreferencesType {
        return new EndOfAuctionEmailPreferencesType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the emailCustomized property value. This boolean field indicates whether or not the seller is using a customized email to send to winning bidders.
     * @return bool|null
    */
    public function getEmailCustomized(): ?bool {
        return $this->emailCustomized;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailCustomized' => fn(ParseNode $n) => $o->setEmailCustomized($n->getBooleanValue()),
            'logoCustomized' => fn(ParseNode $n) => $o->setLogoCustomized($n->getBooleanValue()),
            'logoType' => fn(ParseNode $n) => $o->setLogoType($n->getEnumValue(EndOfAuctionLogoTypeEnum::class)),
            'logoUrl' => fn(ParseNode $n) => $o->setLogoUrl($n->getStringValue()),
            'templateText' => fn(ParseNode $n) => $o->setTemplateText($n->getStringValue()),
            'textCustomized' => fn(ParseNode $n) => $o->setTextCustomized($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the logoCustomized property value. This boolean field indicates whether or not the seller is using a customized logo in the emails that are sent to winning bidders.
     * @return bool|null
    */
    public function getLogoCustomized(): ?bool {
        return $this->logoCustomized;
    }

    /**
     * Gets the logoType property value. This enum indicates the type of logo that is used in the email that is sent to winning bidders. See EndOfAuctionLogoTypeEnum type for descriptions of the different logo types.
     * @return EndOfAuctionLogoTypeEnum|null
    */
    public function getLogoType(): ?EndOfAuctionLogoTypeEnum {
        return $this->logoType;
    }

    /**
     * Gets the logoUrl property value. This field shows the URL path to a seller’s custom logo image that is being used in the email sent to winning bidders. This field is only returned if the seller is using a customized logo in emails.
     * @return string|null
    */
    public function getLogoUrl(): ?string {
        return $this->logoUrl;
    }

    /**
     * Gets the templateText property value. This field shows the body text that is being used if the seller is sending customized emails to winning bidders. The template text has a maximum limit  of 1000 characters.
     * @return string|null
    */
    public function getTemplateText(): ?string {
        return $this->templateText;
    }

    /**
     * Gets the textCustomized property value. This boolean field indicates whether or not the seller is using customized text in the emails that are sent to winning bidders.
     * @return bool|null
    */
    public function getTextCustomized(): ?bool {
        return $this->textCustomized;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('emailCustomized', $this->getEmailCustomized());
        $writer->writeBooleanValue('logoCustomized', $this->getLogoCustomized());
        $writer->writeEnumValue('logoType', $this->getLogoType());
        $writer->writeStringValue('logoUrl', $this->getLogoUrl());
        $writer->writeStringValue('templateText', $this->getTemplateText());
        $writer->writeBooleanValue('textCustomized', $this->getTextCustomized());
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
     * Sets the emailCustomized property value. This boolean field indicates whether or not the seller is using a customized email to send to winning bidders.
     * @param bool|null $value Value to set for the emailCustomized property.
    */
    public function setEmailCustomized(?bool $value): void {
        $this->emailCustomized = $value;
    }

    /**
     * Sets the logoCustomized property value. This boolean field indicates whether or not the seller is using a customized logo in the emails that are sent to winning bidders.
     * @param bool|null $value Value to set for the logoCustomized property.
    */
    public function setLogoCustomized(?bool $value): void {
        $this->logoCustomized = $value;
    }

    /**
     * Sets the logoType property value. This enum indicates the type of logo that is used in the email that is sent to winning bidders. See EndOfAuctionLogoTypeEnum type for descriptions of the different logo types.
     * @param EndOfAuctionLogoTypeEnum|null $value Value to set for the logoType property.
    */
    public function setLogoType(?EndOfAuctionLogoTypeEnum $value): void {
        $this->logoType = $value;
    }

    /**
     * Sets the logoUrl property value. This field shows the URL path to a seller’s custom logo image that is being used in the email sent to winning bidders. This field is only returned if the seller is using a customized logo in emails.
     * @param string|null $value Value to set for the logoUrl property.
    */
    public function setLogoUrl(?string $value): void {
        $this->logoUrl = $value;
    }

    /**
     * Sets the templateText property value. This field shows the body text that is being used if the seller is sending customized emails to winning bidders. The template text has a maximum limit  of 1000 characters.
     * @param string|null $value Value to set for the templateText property.
    */
    public function setTemplateText(?string $value): void {
        $this->templateText = $value;
    }

    /**
     * Sets the textCustomized property value. This boolean field indicates whether or not the seller is using customized text in the emails that are sent to winning bidders.
     * @param bool|null $value Value to set for the textCustomized property.
    */
    public function setTextCustomized(?bool $value): void {
        $this->textCustomized = $value;
    }

}
