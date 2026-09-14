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
 * This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
*/
class Amount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $convertedFromCurrency The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> convertedFromValue</b> field. This value is the pre-conversion currency.<br><br>This field is only returned if/when currency conversion was applied by eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
    */
    private ?string $convertedFromCurrency = null;
    
    /**
     * @var string|null $convertedFromValue The monetary amount before any conversion is performed, in the currency specified by the <b> convertedFromCurrency</b> field. This value is the pre-conversion amount. The <b> value</b> field contains the converted amount of this value, in the currency specified by the <b> currency</b> field.<br><br>This field is only returned if/when currency conversion was applied by eBay.
    */
    private ?string $convertedFromValue = null;
    
    /**
     * @var string|null $convertedToCurrency <span class="tablenote"><b>Note:</b> This field is only applicable for Mainland China sellers with an available CNY Bank payment instrument. This response can <b>only</b> have a value of <code>CNY</code>.</span>The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b>convertedToValue</b> field. <br/><br/>This field is only returned for payouts to bank accounts when currency conversion was applied by eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
    */
    private ?string $convertedToCurrency = null;
    
    /**
     * @var string|null $convertedToValue <span class="tablenote"><b>Note:</b> This field is only applicable for Mainland China sellers with an available CNY Bank payment instrument. This response <b>only</b> returns value in CNY.</span>The monetary value after any conversion is performed, in the currency specified by the <b>convertedToCurrency</b> field. This value is the converted amount. <br/><br/>The field is only returned for payouts to bank accounts when currency conversion was applied by eBay.
    */
    private ?string $convertedToValue = null;
    
    /**
     * @var string|null $currency A three-letter ISO 4217 code that indicates the currency of the amount in the <b>value</b> field. This field is always returned with any container using <b>Amount</b> type. <br><br><b>Default</b>: The currency of the authenticated user's country. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $exchangeRate The exchange rate used for the monetary conversion. This field shows the exchange rate used to convert the dollar value in the <b>value</b> field from the dollar value in the <b>convertedFromValue</b> field.<br><br> For sellers in mainland China, this field shows the exchange rate to convert the dollar value in the <b>value</b> field to the CNY value in the <b>convertedToValue</b> field.<br><br>This field is only returned when eBay does a currency version, and a currency conversion is generally needed if the buyer is viewing, or has purchased an item on an international site. <br><br>This field is only returned if/when currency conversion was applied by eBay.
    */
    private ?string $exchangeRate = null;
    
    /**
     * @var string|null $value The monetary amount, in the currency specified by the <b>currency</b> field. This field is always returned with any container using <b>Amount</b> type.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new Amount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Amount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Amount {
        return new Amount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the convertedFromCurrency property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> convertedFromValue</b> field. This value is the pre-conversion currency.<br><br>This field is only returned if/when currency conversion was applied by eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getConvertedFromCurrency(): ?string {
        return $this->convertedFromCurrency;
    }

    /**
     * Gets the convertedFromValue property value. The monetary amount before any conversion is performed, in the currency specified by the <b> convertedFromCurrency</b> field. This value is the pre-conversion amount. The <b> value</b> field contains the converted amount of this value, in the currency specified by the <b> currency</b> field.<br><br>This field is only returned if/when currency conversion was applied by eBay.
     * @return string|null
    */
    public function getConvertedFromValue(): ?string {
        return $this->convertedFromValue;
    }

    /**
     * Gets the convertedToCurrency property value. <span class="tablenote"><b>Note:</b> This field is only applicable for Mainland China sellers with an available CNY Bank payment instrument. This response can <b>only</b> have a value of <code>CNY</code>.</span>The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b>convertedToValue</b> field. <br/><br/>This field is only returned for payouts to bank accounts when currency conversion was applied by eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getConvertedToCurrency(): ?string {
        return $this->convertedToCurrency;
    }

    /**
     * Gets the convertedToValue property value. <span class="tablenote"><b>Note:</b> This field is only applicable for Mainland China sellers with an available CNY Bank payment instrument. This response <b>only</b> returns value in CNY.</span>The monetary value after any conversion is performed, in the currency specified by the <b>convertedToCurrency</b> field. This value is the converted amount. <br/><br/>The field is only returned for payouts to bank accounts when currency conversion was applied by eBay.
     * @return string|null
    */
    public function getConvertedToValue(): ?string {
        return $this->convertedToValue;
    }

    /**
     * Gets the currency property value. A three-letter ISO 4217 code that indicates the currency of the amount in the <b>value</b> field. This field is always returned with any container using <b>Amount</b> type. <br><br><b>Default</b>: The currency of the authenticated user's country. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the exchangeRate property value. The exchange rate used for the monetary conversion. This field shows the exchange rate used to convert the dollar value in the <b>value</b> field from the dollar value in the <b>convertedFromValue</b> field.<br><br> For sellers in mainland China, this field shows the exchange rate to convert the dollar value in the <b>value</b> field to the CNY value in the <b>convertedToValue</b> field.<br><br>This field is only returned when eBay does a currency version, and a currency conversion is generally needed if the buyer is viewing, or has purchased an item on an international site. <br><br>This field is only returned if/when currency conversion was applied by eBay.
     * @return string|null
    */
    public function getExchangeRate(): ?string {
        return $this->exchangeRate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'convertedFromCurrency' => fn(ParseNode $n) => $o->setConvertedFromCurrency($n->getStringValue()),
            'convertedFromValue' => fn(ParseNode $n) => $o->setConvertedFromValue($n->getStringValue()),
            'convertedToCurrency' => fn(ParseNode $n) => $o->setConvertedToCurrency($n->getStringValue()),
            'convertedToValue' => fn(ParseNode $n) => $o->setConvertedToValue($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'exchangeRate' => fn(ParseNode $n) => $o->setExchangeRate($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. The monetary amount, in the currency specified by the <b>currency</b> field. This field is always returned with any container using <b>Amount</b> type.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('convertedFromCurrency', $this->getConvertedFromCurrency());
        $writer->writeStringValue('convertedFromValue', $this->getConvertedFromValue());
        $writer->writeStringValue('convertedToCurrency', $this->getConvertedToCurrency());
        $writer->writeStringValue('convertedToValue', $this->getConvertedToValue());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('exchangeRate', $this->getExchangeRate());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the convertedFromCurrency property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> convertedFromValue</b> field. This value is the pre-conversion currency.<br><br>This field is only returned if/when currency conversion was applied by eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the convertedFromCurrency property.
    */
    public function setConvertedFromCurrency(?string $value): void {
        $this->convertedFromCurrency = $value;
    }

    /**
     * Sets the convertedFromValue property value. The monetary amount before any conversion is performed, in the currency specified by the <b> convertedFromCurrency</b> field. This value is the pre-conversion amount. The <b> value</b> field contains the converted amount of this value, in the currency specified by the <b> currency</b> field.<br><br>This field is only returned if/when currency conversion was applied by eBay.
     * @param string|null $value Value to set for the convertedFromValue property.
    */
    public function setConvertedFromValue(?string $value): void {
        $this->convertedFromValue = $value;
    }

    /**
     * Sets the convertedToCurrency property value. <span class="tablenote"><b>Note:</b> This field is only applicable for Mainland China sellers with an available CNY Bank payment instrument. This response can <b>only</b> have a value of <code>CNY</code>.</span>The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b>convertedToValue</b> field. <br/><br/>This field is only returned for payouts to bank accounts when currency conversion was applied by eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the convertedToCurrency property.
    */
    public function setConvertedToCurrency(?string $value): void {
        $this->convertedToCurrency = $value;
    }

    /**
     * Sets the convertedToValue property value. <span class="tablenote"><b>Note:</b> This field is only applicable for Mainland China sellers with an available CNY Bank payment instrument. This response <b>only</b> returns value in CNY.</span>The monetary value after any conversion is performed, in the currency specified by the <b>convertedToCurrency</b> field. This value is the converted amount. <br/><br/>The field is only returned for payouts to bank accounts when currency conversion was applied by eBay.
     * @param string|null $value Value to set for the convertedToValue property.
    */
    public function setConvertedToValue(?string $value): void {
        $this->convertedToValue = $value;
    }

    /**
     * Sets the currency property value. A three-letter ISO 4217 code that indicates the currency of the amount in the <b>value</b> field. This field is always returned with any container using <b>Amount</b> type. <br><br><b>Default</b>: The currency of the authenticated user's country. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the exchangeRate property value. The exchange rate used for the monetary conversion. This field shows the exchange rate used to convert the dollar value in the <b>value</b> field from the dollar value in the <b>convertedFromValue</b> field.<br><br> For sellers in mainland China, this field shows the exchange rate to convert the dollar value in the <b>value</b> field to the CNY value in the <b>convertedToValue</b> field.<br><br>This field is only returned when eBay does a currency version, and a currency conversion is generally needed if the buyer is viewing, or has purchased an item on an international site. <br><br>This field is only returned if/when currency conversion was applied by eBay.
     * @param string|null $value Value to set for the exchangeRate property.
    */
    public function setExchangeRate(?string $value): void {
        $this->exchangeRate = $value;
    }

    /**
     * Sets the value property value. The monetary amount, in the currency specified by the <b>currency</b> field. This field is always returned with any container using <b>Amount</b> type.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
