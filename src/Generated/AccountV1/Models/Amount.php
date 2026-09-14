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
 * A complex type that describes the value of a monetary amount as represented by a global currency. When passing in an amount in a request payload, both <b>currency</b> and <b>value</b> fields are required, and both fields are also always returned for an amount in a response field.
*/
class Amount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CurrencyCodeEnum|null $currency This enumerated type lists the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " title="https://www.iso.org " target="_blank">ISO 4217</a> code representing the supported world currencies. | - **AED**: United Arab Emirates dirham - **AFN**: Afghan afghani - **ALL**: Albanian lek - **AMD**: Armenian dram - **ANG**: Netherlands Antillean guilder - **AOA**: Angolan kwanza - **ARS**: Argentine peso - **AUD**: Australian dollar - **AWG**: Aruban florin - **AZN**: Azerbaijani manat - **BAM**: Bosnia and Herzegovina convertible mark - **BBD**: Barbados dollar - **BDT**: Bangladeshi taka - **BGN**: Bulgarian lev - **BHD**: Bahraini dinar - **BIF**: Burundian franc - **BMD**: Bermudian dollar - **BND**: Brunei dollar - **BOB**: Bolivian Boliviano - **BRL**: Brazilian real - **BSD**: Bahamian dollar - **BTN**: Bhutanese ngultrum - **BWP**: Botswana pula - **BYR**: Belarusian ruble - **BZD**: Belize dollar - **CAD**: Canadian dollar - **CDF**: Congolese franc - **CHF**: Swiss franc - **CLP**: Chilean peso - **CNY**: Chinese yuan renminbi - **COP**: Colombian peso - **CRC**: Costa Rican colon - **CUP**: Cuban peso - **CVE**: Cape Verde escudo - **CZK**: Czech koruna - **DJF**: Djiboutian franc - **DKK**: Danish krone - **DOP**: Dominican peso - **DZD**: Algerian dinar - **EGP**: Egyptian pound - **ERN**: Eritrean nakfa - **ETB**: Ethiopian birr - **EUR**: European Union euro - **FJD**: Fiji dollar - **FKP**: Falkland Islands pound - **GBP**: British pound sterling - **GEL**: Georgian lari - **GHS**: Ghanaian cedi - **GIP**: Gibraltar pound - **GMD**: Gambian dalasi - **GNF**: Guinean franc - **GTQ**: Guatemalan quetzal - **GYD**: Guyanese dollar - **HKD**: Hong Kong dollar - **HNL**: Honduran lempira - **HRK**: Croatian kuna - **HTG**: Haitian gourde - **HUF**: Hungarian forint - **IDR**: Indonesian rupiah - **ILS**: Israeli new shekel - **INR**: Indian rupee - **IQD**: Iraqi dinar - **IRR**: Iranian rial - **ISK**: Icelandic krona - **JMD**: Jamaican dollar - **JOD**: Jordanian dinar - **JPY**: Japanese yen - **KES**: Kenyan shilling - **KGS**: Kyrgyzstani som - **KHR**: Cambodian riel - **KMF**: Comoro franc - **KPW**: North Korean won - **KRW**: South Korean won - **KWD**: Kuwaiti dinar - **KYD**: Cayman Islands dollar - **KZT**: Kazakhstani tenge - **LAK**: Lao kip - **LBP**: Lebanese pound - **LKR**: Sri Lankan rupee - **LRD**: Liberian dollar - **LSL**: Lesotho loti - **LTL**: Lithuanian litas - **LYD**: Libyan dinar - **MAD**: Moroccan dirham - **MDL**: Moldovan leu - **MGA**: Malagasy ariary - **MKD**: Macedonian denar - **MMK**: Myanmar kyat - **MNT**: Mongolian tugrik - **MOP**: Macanese pataca - **MRO**: Mauritanian ouguiya - **MUR**: Mauritian rupee - **MVR**: Maldivian rufiyaa - **MWK**: Malawian kwacha - **MXN**: Mexican peso - **MYR**: Malaysian ringgit - **MZN**: Mozambican metical - **NAD**: Namibian dollar - **NGN**: Nigerian naira - **NIO**: Nicaraguan cordoba oro - **NOK**: Norwegian krone - **NPR**: Nepalese rupee - **NZD**: New Zealand dollar - **OMR**: Omani rial - **PAB**: Panamanian balboa - **PEN**: Peruvian sol - **PGK**: Papua New Guinean kina - **PHP**: Philippine peso - **PKR**: Pakistani rupee - **PLN**: Polish zloty - **PYG**: Paraguayan guarani - **QAR**: Qatari riyal - **RON**: Romanian leu - **RSD**: Serbian dinar - **RUB**: Russian ruble - **RWF**: Rwandan franc - **SAR**: Saudi riyal - **SBD**: Solomon Islands dollar - **SCR**: Seychelles rupee - **SDG**: Sudanese pound - **SEK**: Swedish krona - **SGD**: Singapore dollar - **SHP**: Saint Helena pound - **SLL**: Sierra Leonean leone - **SOS**: Somali shilling - **SRD**: Surinamese dollar - **STD**: Sao Tome and Principe dobra - **SYP**: Syrian pound - **SZL**: Swazi lilangeni - **THB**: Thai baht - **TJS**: Tajikistani somoni - **TMT**: Turkmenistani manat - **TND**: Tunisian dinar - **TOP**: Tongan pa'anga - **TRY**: Turkish lira - **TTD**: Trinidad and Tobago dollar - **TWD**: New Taiwan dollar - **TZS**: Tanzanian shilling - **UAH**: Ukrainian hryvnia - **UGX**: Ugandan shilling - **USD**: United States dollar - **UYU**: Uruguayan peso - **UZS**: Uzbekistani som - **VEF**: Venezuelan bolivar - **VND**: Vietnamese dong - **VUV**: Vanuatu vatu - **WST**: Samoan tala - **XAF**: CFA franc BEAC - **XCD**: East Caribbean dollar - **XOF**: CFA franc BCEAO - **XPF**: CFP franc - **YER**: Yemeni rial - **ZAR**: South African rand - **ZMW**: Zambian kwacha - **ZWL**: Zimbabwean dollar
    */
    private ?CurrencyCodeEnum $currency = null;
    
    /**
     * @var string|null $value The monetary amount in the specified <b>currency</b>.
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
     * Gets the currency property value. This enumerated type lists the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " title="https://www.iso.org " target="_blank">ISO 4217</a> code representing the supported world currencies. | - **AED**: United Arab Emirates dirham - **AFN**: Afghan afghani - **ALL**: Albanian lek - **AMD**: Armenian dram - **ANG**: Netherlands Antillean guilder - **AOA**: Angolan kwanza - **ARS**: Argentine peso - **AUD**: Australian dollar - **AWG**: Aruban florin - **AZN**: Azerbaijani manat - **BAM**: Bosnia and Herzegovina convertible mark - **BBD**: Barbados dollar - **BDT**: Bangladeshi taka - **BGN**: Bulgarian lev - **BHD**: Bahraini dinar - **BIF**: Burundian franc - **BMD**: Bermudian dollar - **BND**: Brunei dollar - **BOB**: Bolivian Boliviano - **BRL**: Brazilian real - **BSD**: Bahamian dollar - **BTN**: Bhutanese ngultrum - **BWP**: Botswana pula - **BYR**: Belarusian ruble - **BZD**: Belize dollar - **CAD**: Canadian dollar - **CDF**: Congolese franc - **CHF**: Swiss franc - **CLP**: Chilean peso - **CNY**: Chinese yuan renminbi - **COP**: Colombian peso - **CRC**: Costa Rican colon - **CUP**: Cuban peso - **CVE**: Cape Verde escudo - **CZK**: Czech koruna - **DJF**: Djiboutian franc - **DKK**: Danish krone - **DOP**: Dominican peso - **DZD**: Algerian dinar - **EGP**: Egyptian pound - **ERN**: Eritrean nakfa - **ETB**: Ethiopian birr - **EUR**: European Union euro - **FJD**: Fiji dollar - **FKP**: Falkland Islands pound - **GBP**: British pound sterling - **GEL**: Georgian lari - **GHS**: Ghanaian cedi - **GIP**: Gibraltar pound - **GMD**: Gambian dalasi - **GNF**: Guinean franc - **GTQ**: Guatemalan quetzal - **GYD**: Guyanese dollar - **HKD**: Hong Kong dollar - **HNL**: Honduran lempira - **HRK**: Croatian kuna - **HTG**: Haitian gourde - **HUF**: Hungarian forint - **IDR**: Indonesian rupiah - **ILS**: Israeli new shekel - **INR**: Indian rupee - **IQD**: Iraqi dinar - **IRR**: Iranian rial - **ISK**: Icelandic krona - **JMD**: Jamaican dollar - **JOD**: Jordanian dinar - **JPY**: Japanese yen - **KES**: Kenyan shilling - **KGS**: Kyrgyzstani som - **KHR**: Cambodian riel - **KMF**: Comoro franc - **KPW**: North Korean won - **KRW**: South Korean won - **KWD**: Kuwaiti dinar - **KYD**: Cayman Islands dollar - **KZT**: Kazakhstani tenge - **LAK**: Lao kip - **LBP**: Lebanese pound - **LKR**: Sri Lankan rupee - **LRD**: Liberian dollar - **LSL**: Lesotho loti - **LTL**: Lithuanian litas - **LYD**: Libyan dinar - **MAD**: Moroccan dirham - **MDL**: Moldovan leu - **MGA**: Malagasy ariary - **MKD**: Macedonian denar - **MMK**: Myanmar kyat - **MNT**: Mongolian tugrik - **MOP**: Macanese pataca - **MRO**: Mauritanian ouguiya - **MUR**: Mauritian rupee - **MVR**: Maldivian rufiyaa - **MWK**: Malawian kwacha - **MXN**: Mexican peso - **MYR**: Malaysian ringgit - **MZN**: Mozambican metical - **NAD**: Namibian dollar - **NGN**: Nigerian naira - **NIO**: Nicaraguan cordoba oro - **NOK**: Norwegian krone - **NPR**: Nepalese rupee - **NZD**: New Zealand dollar - **OMR**: Omani rial - **PAB**: Panamanian balboa - **PEN**: Peruvian sol - **PGK**: Papua New Guinean kina - **PHP**: Philippine peso - **PKR**: Pakistani rupee - **PLN**: Polish zloty - **PYG**: Paraguayan guarani - **QAR**: Qatari riyal - **RON**: Romanian leu - **RSD**: Serbian dinar - **RUB**: Russian ruble - **RWF**: Rwandan franc - **SAR**: Saudi riyal - **SBD**: Solomon Islands dollar - **SCR**: Seychelles rupee - **SDG**: Sudanese pound - **SEK**: Swedish krona - **SGD**: Singapore dollar - **SHP**: Saint Helena pound - **SLL**: Sierra Leonean leone - **SOS**: Somali shilling - **SRD**: Surinamese dollar - **STD**: Sao Tome and Principe dobra - **SYP**: Syrian pound - **SZL**: Swazi lilangeni - **THB**: Thai baht - **TJS**: Tajikistani somoni - **TMT**: Turkmenistani manat - **TND**: Tunisian dinar - **TOP**: Tongan pa'anga - **TRY**: Turkish lira - **TTD**: Trinidad and Tobago dollar - **TWD**: New Taiwan dollar - **TZS**: Tanzanian shilling - **UAH**: Ukrainian hryvnia - **UGX**: Ugandan shilling - **USD**: United States dollar - **UYU**: Uruguayan peso - **UZS**: Uzbekistani som - **VEF**: Venezuelan bolivar - **VND**: Vietnamese dong - **VUV**: Vanuatu vatu - **WST**: Samoan tala - **XAF**: CFA franc BEAC - **XCD**: East Caribbean dollar - **XOF**: CFA franc BCEAO - **XPF**: CFP franc - **YER**: Yemeni rial - **ZAR**: South African rand - **ZMW**: Zambian kwacha - **ZWL**: Zimbabwean dollar
     * @return CurrencyCodeEnum|null
    */
    public function getCurrency(): ?CurrencyCodeEnum {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getEnumValue(CurrencyCodeEnum::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. The monetary amount in the specified <b>currency</b>.
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
        $writer->writeEnumValue('currency', $this->getCurrency());
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
     * Sets the currency property value. This enumerated type lists the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " title="https://www.iso.org " target="_blank">ISO 4217</a> code representing the supported world currencies. | - **AED**: United Arab Emirates dirham - **AFN**: Afghan afghani - **ALL**: Albanian lek - **AMD**: Armenian dram - **ANG**: Netherlands Antillean guilder - **AOA**: Angolan kwanza - **ARS**: Argentine peso - **AUD**: Australian dollar - **AWG**: Aruban florin - **AZN**: Azerbaijani manat - **BAM**: Bosnia and Herzegovina convertible mark - **BBD**: Barbados dollar - **BDT**: Bangladeshi taka - **BGN**: Bulgarian lev - **BHD**: Bahraini dinar - **BIF**: Burundian franc - **BMD**: Bermudian dollar - **BND**: Brunei dollar - **BOB**: Bolivian Boliviano - **BRL**: Brazilian real - **BSD**: Bahamian dollar - **BTN**: Bhutanese ngultrum - **BWP**: Botswana pula - **BYR**: Belarusian ruble - **BZD**: Belize dollar - **CAD**: Canadian dollar - **CDF**: Congolese franc - **CHF**: Swiss franc - **CLP**: Chilean peso - **CNY**: Chinese yuan renminbi - **COP**: Colombian peso - **CRC**: Costa Rican colon - **CUP**: Cuban peso - **CVE**: Cape Verde escudo - **CZK**: Czech koruna - **DJF**: Djiboutian franc - **DKK**: Danish krone - **DOP**: Dominican peso - **DZD**: Algerian dinar - **EGP**: Egyptian pound - **ERN**: Eritrean nakfa - **ETB**: Ethiopian birr - **EUR**: European Union euro - **FJD**: Fiji dollar - **FKP**: Falkland Islands pound - **GBP**: British pound sterling - **GEL**: Georgian lari - **GHS**: Ghanaian cedi - **GIP**: Gibraltar pound - **GMD**: Gambian dalasi - **GNF**: Guinean franc - **GTQ**: Guatemalan quetzal - **GYD**: Guyanese dollar - **HKD**: Hong Kong dollar - **HNL**: Honduran lempira - **HRK**: Croatian kuna - **HTG**: Haitian gourde - **HUF**: Hungarian forint - **IDR**: Indonesian rupiah - **ILS**: Israeli new shekel - **INR**: Indian rupee - **IQD**: Iraqi dinar - **IRR**: Iranian rial - **ISK**: Icelandic krona - **JMD**: Jamaican dollar - **JOD**: Jordanian dinar - **JPY**: Japanese yen - **KES**: Kenyan shilling - **KGS**: Kyrgyzstani som - **KHR**: Cambodian riel - **KMF**: Comoro franc - **KPW**: North Korean won - **KRW**: South Korean won - **KWD**: Kuwaiti dinar - **KYD**: Cayman Islands dollar - **KZT**: Kazakhstani tenge - **LAK**: Lao kip - **LBP**: Lebanese pound - **LKR**: Sri Lankan rupee - **LRD**: Liberian dollar - **LSL**: Lesotho loti - **LTL**: Lithuanian litas - **LYD**: Libyan dinar - **MAD**: Moroccan dirham - **MDL**: Moldovan leu - **MGA**: Malagasy ariary - **MKD**: Macedonian denar - **MMK**: Myanmar kyat - **MNT**: Mongolian tugrik - **MOP**: Macanese pataca - **MRO**: Mauritanian ouguiya - **MUR**: Mauritian rupee - **MVR**: Maldivian rufiyaa - **MWK**: Malawian kwacha - **MXN**: Mexican peso - **MYR**: Malaysian ringgit - **MZN**: Mozambican metical - **NAD**: Namibian dollar - **NGN**: Nigerian naira - **NIO**: Nicaraguan cordoba oro - **NOK**: Norwegian krone - **NPR**: Nepalese rupee - **NZD**: New Zealand dollar - **OMR**: Omani rial - **PAB**: Panamanian balboa - **PEN**: Peruvian sol - **PGK**: Papua New Guinean kina - **PHP**: Philippine peso - **PKR**: Pakistani rupee - **PLN**: Polish zloty - **PYG**: Paraguayan guarani - **QAR**: Qatari riyal - **RON**: Romanian leu - **RSD**: Serbian dinar - **RUB**: Russian ruble - **RWF**: Rwandan franc - **SAR**: Saudi riyal - **SBD**: Solomon Islands dollar - **SCR**: Seychelles rupee - **SDG**: Sudanese pound - **SEK**: Swedish krona - **SGD**: Singapore dollar - **SHP**: Saint Helena pound - **SLL**: Sierra Leonean leone - **SOS**: Somali shilling - **SRD**: Surinamese dollar - **STD**: Sao Tome and Principe dobra - **SYP**: Syrian pound - **SZL**: Swazi lilangeni - **THB**: Thai baht - **TJS**: Tajikistani somoni - **TMT**: Turkmenistani manat - **TND**: Tunisian dinar - **TOP**: Tongan pa'anga - **TRY**: Turkish lira - **TTD**: Trinidad and Tobago dollar - **TWD**: New Taiwan dollar - **TZS**: Tanzanian shilling - **UAH**: Ukrainian hryvnia - **UGX**: Ugandan shilling - **USD**: United States dollar - **UYU**: Uruguayan peso - **UZS**: Uzbekistani som - **VEF**: Venezuelan bolivar - **VND**: Vietnamese dong - **VUV**: Vanuatu vatu - **WST**: Samoan tala - **XAF**: CFA franc BEAC - **XCD**: East Caribbean dollar - **XOF**: CFA franc BCEAO - **XPF**: CFP franc - **YER**: Yemeni rial - **ZAR**: South African rand - **ZMW**: Zambian kwacha - **ZWL**: Zimbabwean dollar
     * @param CurrencyCodeEnum|null $value Value to set for the currency property.
    */
    public function setCurrency(?CurrencyCodeEnum $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the value property value. The monetary amount in the specified <b>currency</b>.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
