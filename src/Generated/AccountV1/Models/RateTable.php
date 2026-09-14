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
 * This type is used to provide details about each shipping rate table that is returned in the <b>getRateTables</b> response.
*/
class RateTable implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CountryCodeEnum|null $countryCode This enumerated type lists the two-letter <a href="https://www.iso.org/iso/country_codes" target="_blank">ISO 3166&#8209;1 Alpha&#8209;2</a> code representing a country. | - **AD**: Andorra - **AE**: United Arab Emirates - **AF**: Afghanistan - **AG**: Antigua and Barbuda - **AI**: Anguilla - **AL**: Albania - **AM**: Armenia - **AN**: Netherlands Antilles - **AO**: Angola - **AQ**: Antarctica - **AR**: Argentina - **AS**: American Samoa - **AT**: Austria - **AU**: Australia - **AW**: Aruba - **AX**: Aland Islands - **AZ**: Azerbaijan - **BA**: Bosnia and Herzegovina - **BB**: Barbados - **BD**: Bangladesh - **BE**: Belgium - **BF**: Burkina Faso - **BG**: Bulgaria - **BH**: Bahrain - **BI**: Burundi - **BJ**: Benin - **BL**: Saint Barthelemy - **BM**: Bermuda - **BN**: Brunei Darussalam - **BO**: Bolivia - **BQ**: Bonaire, Sint Eustatius, and Saba - **BR**: Brazil - **BS**: Bahamas - **BT**: Bhutan - **BV**: Bouvet Island - **BW**: Botswana - **BY**: Belarus - **BZ**: Belize - **CA**: Canada - **CC**: Cocos (Keeling) Islands - **CD**: The Democratic Republic of the Congo - **CF**: Central African Republic - **CG**: Congo - **CH**: Switzerland - **CI**: Cote d'Ivoire - **CK**: Cook Islands - **CL**: Chile - **CM**: Cameroon - **CN**: China - **CO**: Colombia - **CR**: Costa Rica - **CU**: Cuba - **CV**: Cape Verde - **CW**: Curacao - **CX**: Christmas Island - **CY**: Cyprus - **CZ**: Czech Republic - **DE**: Germany - **DJ**: Djibouti - **DK**: Denmark - **DM**: Dominica - **DO**: Dominican Republic - **DZ**: Algeria - **EC**: Ecuador - **EE**: Estonia - **EG**: Egypt - **EH**: Western Sahara - **ER**: Eritrea - **ES**: Spain - **ET**: Ethiopia - **FI**: Finland - **FJ**: Fiji - **FK**: Falkland Islands (Malvinas) - **FM**: Federated States of Micronesia - **FO**: Faroe Islands - **FR**: France - **GA**: Gabon - **GB**: United Kingdom - **GD**: Grenada - **GE**: Georgia - **GF**: French Guiana - **GG**: Guernsey - **GH**: Ghana - **GI**: Gibraltar - **GL**: Greenland - **GM**: Gambia - **GN**: Guinea - **GP**: Guadeloupe - **GQ**: Equatorial Guinea - **GR**: Greece - **GS**: South Georgia and the South Sandwich Islands - **GT**: Guatemala - **GU**: Guam - **GW**: Guinea-Bissau - **GY**: Guyana - **HK**: Hong Kong - **HM**: Heard Island and McDonald Islands - **HN**: Honduras - **HR**: Croatia - **HT**: Haiti - **HU**: Hungary - **ID**: Indonesia - **IE**: Ireland - **IL**: Israel - **IM**: Isle of Man - **IN**: India - **IO**: British Indian Ocean Territory - **IQ**: Iraq - **IR**: Islamic Republic of Iran - **IS**: Iceland - **IT**: Italy - **JE**: Jersey - **JM**: Jamaica - **JO**: Jordan - **JP**: Japan - **KE**: Kenya - **KG**: Kyrgyzstan - **KH**: Cambodia - **KI**: Kiribati - **KM**: Comoros - **KN**: Saint Kitts and Nevis - **KP**: Democratic People's Republic of Korea - **KR**: Republic of Korea - **KW**: Kuwait - **KY**: Cayman Islands - **KZ**: Kazakhstan - **LA**: Lao People's Democratic Republic - **LB**: Lebanon - **LC**: Saint Lucia - **LI**: Liechtenstein - **LK**: Sri Lanka - **LR**: Liberia - **LS**: Lesotho - **LT**: Lithuania - **LU**: Luxembourg - **LV**: Latvia - **LY**: Libyan Arab Jamahiriya - **MA**: Morocco - **MC**: Monaco - **MD**: Republic of Moldova - **ME**: Montenegro - **MF**: Saint Martin (French part) - **MG**: Madagascar - **MH**: Marshall Islands - **MK**: The Former Yugoslav Republic of Macedonia - **ML**: Mali - **MM**: Myanmar - **MN**: Mongolia - **MO**: Macao - **MP**: Northern Mariana Islands - **MQ**: Martinique - **MR**: Mauritania - **MS**: Montserrat - **MT**: Malta - **MU**: Mauritius - **MV**: Maldives - **MW**: Malawi - **MX**: Mexico - **MY**: Malaysia - **MZ**: Mozambique - **NA**: Namibia - **NC**: New Caledonia - **NE**: Niger - **NF**: Norfolk Island - **NG**: Nigeria - **NI**: Nicaragua - **NL**: Netherlands - **NO**: Norway - **NP**: Nepal - **NR**: Nauru - **NU**: Niue - **NZ**: New Zealand - **OM**: Oman - **PA**: Panama - **PE**: Peru - **PF**: French Polynesia. Includes Tahiti - **PG**: Papua New Guinea - **PH**: Philippines - **PK**: Pakistan - **PL**: Poland - **PM**: Saint Pierre and Miquelon - **PN**: Pitcairn - **PR**: Puerto Rico - **PS**: Palestinian territory Occupied - **PT**: Portugal - **PW**: Palau - **PY**: Paraguay - **QA**: Qatar - **RE**: Reunion - **RO**: Romania - **RS**: Serbia - **RU**: Russian Federation - **RW**: Rwanda - **SA**: Saudi Arabia - **SB**: Solomon Islands - **SC**: Seychelles - **SD**: Sudan - **SE**: Sweden - **SG**: Singapore - **SH**: Saint Helena - **SI**: Slovenia - **SJ**: Svalbard and Jan Mayen - **SK**: Slovakia - **SL**: Sierra Leone - **SM**: San Marino - **SN**: Senegal - **SO**: Somalia - **SR**: Suriname - **ST**: Sao Tome and Principe - **SV**: El Salvador - **SX**: Sint Maarten (Dutch part) - **SY**: Syrian Arab Republic - **SZ**: Swaziland - **TC**: Turks and Caicos Islands - **TD**: Chad - **TF**: French Southern Territories - **TG**: Togo - **TH**: Thailand - **TJ**: Tajikistan - **TK**: Tokelau - **TL**: Timor-Leste - **TM**: Turkmenistan - **TN**: Tunisia - **TO**: Tonga - **TR**: Turkey - **TT**: Trinidad and Tobago - **TV**: Tuvalu - **TW**: Taiwan - **TZ**: Tanzania - **UA**: Ukraine - **UG**: Uganda - **UM**: United States Minor Outlying Islands - **US**: United States - **UY**: Uruguay - **UZ**: Uzbekistan - **VA**: Holy See (Vatican City state) - **VC**: Saint Vincent and the Grenadines - **VE**: Venezuela - **VG**: British Virgin Islands - **VI**: the U.S. Virgin Islands - **VN**: Vietnam - **VU**: Vanuatu - **WF**: Wallis and Futuna - **WS**: Samoa - **YE**: Yemen - **YT**: Mayotte - **ZA**: South Africa - **ZM**: Zambia - **ZW**: Zimbabwe
    */
    private ?CountryCodeEnum $countryCode = null;
    
    /**
     * @var ShippingOptionTypeEnum|null $locality This enumerated type defines whether the corresponding shipping service options are domestic or international shipping service options. a region that is either domestic (within the country from where the item is listed or shipped) or international (a country outside the country from where the item is listed or shipped). | - **DOMESTIC**: This value indicates that the corresponding shipping service options are domestic shipping service options. - **INTERNATIONAL**: This value indicates that the corresponding shipping service options are international shipping service options.
    */
    private ?ShippingOptionTypeEnum $locality = null;
    
    /**
     * @var string|null $name The seller-defined name for the shipping rate table.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $rateTableId A unique eBay-assigned ID for a seller's shipping rate table. These <b>rateTableId</b> values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call in the Trading API.
    */
    private ?string $rateTableId = null;
    
    /**
     * Instantiates a new RateTable and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RateTable
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RateTable {
        return new RateTable();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value. This enumerated type lists the two-letter <a href="https://www.iso.org/iso/country_codes" target="_blank">ISO 3166&#8209;1 Alpha&#8209;2</a> code representing a country. | - **AD**: Andorra - **AE**: United Arab Emirates - **AF**: Afghanistan - **AG**: Antigua and Barbuda - **AI**: Anguilla - **AL**: Albania - **AM**: Armenia - **AN**: Netherlands Antilles - **AO**: Angola - **AQ**: Antarctica - **AR**: Argentina - **AS**: American Samoa - **AT**: Austria - **AU**: Australia - **AW**: Aruba - **AX**: Aland Islands - **AZ**: Azerbaijan - **BA**: Bosnia and Herzegovina - **BB**: Barbados - **BD**: Bangladesh - **BE**: Belgium - **BF**: Burkina Faso - **BG**: Bulgaria - **BH**: Bahrain - **BI**: Burundi - **BJ**: Benin - **BL**: Saint Barthelemy - **BM**: Bermuda - **BN**: Brunei Darussalam - **BO**: Bolivia - **BQ**: Bonaire, Sint Eustatius, and Saba - **BR**: Brazil - **BS**: Bahamas - **BT**: Bhutan - **BV**: Bouvet Island - **BW**: Botswana - **BY**: Belarus - **BZ**: Belize - **CA**: Canada - **CC**: Cocos (Keeling) Islands - **CD**: The Democratic Republic of the Congo - **CF**: Central African Republic - **CG**: Congo - **CH**: Switzerland - **CI**: Cote d'Ivoire - **CK**: Cook Islands - **CL**: Chile - **CM**: Cameroon - **CN**: China - **CO**: Colombia - **CR**: Costa Rica - **CU**: Cuba - **CV**: Cape Verde - **CW**: Curacao - **CX**: Christmas Island - **CY**: Cyprus - **CZ**: Czech Republic - **DE**: Germany - **DJ**: Djibouti - **DK**: Denmark - **DM**: Dominica - **DO**: Dominican Republic - **DZ**: Algeria - **EC**: Ecuador - **EE**: Estonia - **EG**: Egypt - **EH**: Western Sahara - **ER**: Eritrea - **ES**: Spain - **ET**: Ethiopia - **FI**: Finland - **FJ**: Fiji - **FK**: Falkland Islands (Malvinas) - **FM**: Federated States of Micronesia - **FO**: Faroe Islands - **FR**: France - **GA**: Gabon - **GB**: United Kingdom - **GD**: Grenada - **GE**: Georgia - **GF**: French Guiana - **GG**: Guernsey - **GH**: Ghana - **GI**: Gibraltar - **GL**: Greenland - **GM**: Gambia - **GN**: Guinea - **GP**: Guadeloupe - **GQ**: Equatorial Guinea - **GR**: Greece - **GS**: South Georgia and the South Sandwich Islands - **GT**: Guatemala - **GU**: Guam - **GW**: Guinea-Bissau - **GY**: Guyana - **HK**: Hong Kong - **HM**: Heard Island and McDonald Islands - **HN**: Honduras - **HR**: Croatia - **HT**: Haiti - **HU**: Hungary - **ID**: Indonesia - **IE**: Ireland - **IL**: Israel - **IM**: Isle of Man - **IN**: India - **IO**: British Indian Ocean Territory - **IQ**: Iraq - **IR**: Islamic Republic of Iran - **IS**: Iceland - **IT**: Italy - **JE**: Jersey - **JM**: Jamaica - **JO**: Jordan - **JP**: Japan - **KE**: Kenya - **KG**: Kyrgyzstan - **KH**: Cambodia - **KI**: Kiribati - **KM**: Comoros - **KN**: Saint Kitts and Nevis - **KP**: Democratic People's Republic of Korea - **KR**: Republic of Korea - **KW**: Kuwait - **KY**: Cayman Islands - **KZ**: Kazakhstan - **LA**: Lao People's Democratic Republic - **LB**: Lebanon - **LC**: Saint Lucia - **LI**: Liechtenstein - **LK**: Sri Lanka - **LR**: Liberia - **LS**: Lesotho - **LT**: Lithuania - **LU**: Luxembourg - **LV**: Latvia - **LY**: Libyan Arab Jamahiriya - **MA**: Morocco - **MC**: Monaco - **MD**: Republic of Moldova - **ME**: Montenegro - **MF**: Saint Martin (French part) - **MG**: Madagascar - **MH**: Marshall Islands - **MK**: The Former Yugoslav Republic of Macedonia - **ML**: Mali - **MM**: Myanmar - **MN**: Mongolia - **MO**: Macao - **MP**: Northern Mariana Islands - **MQ**: Martinique - **MR**: Mauritania - **MS**: Montserrat - **MT**: Malta - **MU**: Mauritius - **MV**: Maldives - **MW**: Malawi - **MX**: Mexico - **MY**: Malaysia - **MZ**: Mozambique - **NA**: Namibia - **NC**: New Caledonia - **NE**: Niger - **NF**: Norfolk Island - **NG**: Nigeria - **NI**: Nicaragua - **NL**: Netherlands - **NO**: Norway - **NP**: Nepal - **NR**: Nauru - **NU**: Niue - **NZ**: New Zealand - **OM**: Oman - **PA**: Panama - **PE**: Peru - **PF**: French Polynesia. Includes Tahiti - **PG**: Papua New Guinea - **PH**: Philippines - **PK**: Pakistan - **PL**: Poland - **PM**: Saint Pierre and Miquelon - **PN**: Pitcairn - **PR**: Puerto Rico - **PS**: Palestinian territory Occupied - **PT**: Portugal - **PW**: Palau - **PY**: Paraguay - **QA**: Qatar - **RE**: Reunion - **RO**: Romania - **RS**: Serbia - **RU**: Russian Federation - **RW**: Rwanda - **SA**: Saudi Arabia - **SB**: Solomon Islands - **SC**: Seychelles - **SD**: Sudan - **SE**: Sweden - **SG**: Singapore - **SH**: Saint Helena - **SI**: Slovenia - **SJ**: Svalbard and Jan Mayen - **SK**: Slovakia - **SL**: Sierra Leone - **SM**: San Marino - **SN**: Senegal - **SO**: Somalia - **SR**: Suriname - **ST**: Sao Tome and Principe - **SV**: El Salvador - **SX**: Sint Maarten (Dutch part) - **SY**: Syrian Arab Republic - **SZ**: Swaziland - **TC**: Turks and Caicos Islands - **TD**: Chad - **TF**: French Southern Territories - **TG**: Togo - **TH**: Thailand - **TJ**: Tajikistan - **TK**: Tokelau - **TL**: Timor-Leste - **TM**: Turkmenistan - **TN**: Tunisia - **TO**: Tonga - **TR**: Turkey - **TT**: Trinidad and Tobago - **TV**: Tuvalu - **TW**: Taiwan - **TZ**: Tanzania - **UA**: Ukraine - **UG**: Uganda - **UM**: United States Minor Outlying Islands - **US**: United States - **UY**: Uruguay - **UZ**: Uzbekistan - **VA**: Holy See (Vatican City state) - **VC**: Saint Vincent and the Grenadines - **VE**: Venezuela - **VG**: British Virgin Islands - **VI**: the U.S. Virgin Islands - **VN**: Vietnam - **VU**: Vanuatu - **WF**: Wallis and Futuna - **WS**: Samoa - **YE**: Yemen - **YT**: Mayotte - **ZA**: South Africa - **ZM**: Zambia - **ZW**: Zimbabwe
     * @return CountryCodeEnum|null
    */
    public function getCountryCode(): ?CountryCodeEnum {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getEnumValue(CountryCodeEnum::class)),
            'locality' => fn(ParseNode $n) => $o->setLocality($n->getEnumValue(ShippingOptionTypeEnum::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'rateTableId' => fn(ParseNode $n) => $o->setRateTableId($n->getStringValue()),
        ];
    }

    /**
     * Gets the locality property value. This enumerated type defines whether the corresponding shipping service options are domestic or international shipping service options. a region that is either domestic (within the country from where the item is listed or shipped) or international (a country outside the country from where the item is listed or shipped). | - **DOMESTIC**: This value indicates that the corresponding shipping service options are domestic shipping service options. - **INTERNATIONAL**: This value indicates that the corresponding shipping service options are international shipping service options.
     * @return ShippingOptionTypeEnum|null
    */
    public function getLocality(): ?ShippingOptionTypeEnum {
        return $this->locality;
    }

    /**
     * Gets the name property value. The seller-defined name for the shipping rate table.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the rateTableId property value. A unique eBay-assigned ID for a seller's shipping rate table. These <b>rateTableId</b> values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call in the Trading API.
     * @return string|null
    */
    public function getRateTableId(): ?string {
        return $this->rateTableId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('countryCode', $this->getCountryCode());
        $writer->writeEnumValue('locality', $this->getLocality());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('rateTableId', $this->getRateTableId());
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
     * Sets the countryCode property value. This enumerated type lists the two-letter <a href="https://www.iso.org/iso/country_codes" target="_blank">ISO 3166&#8209;1 Alpha&#8209;2</a> code representing a country. | - **AD**: Andorra - **AE**: United Arab Emirates - **AF**: Afghanistan - **AG**: Antigua and Barbuda - **AI**: Anguilla - **AL**: Albania - **AM**: Armenia - **AN**: Netherlands Antilles - **AO**: Angola - **AQ**: Antarctica - **AR**: Argentina - **AS**: American Samoa - **AT**: Austria - **AU**: Australia - **AW**: Aruba - **AX**: Aland Islands - **AZ**: Azerbaijan - **BA**: Bosnia and Herzegovina - **BB**: Barbados - **BD**: Bangladesh - **BE**: Belgium - **BF**: Burkina Faso - **BG**: Bulgaria - **BH**: Bahrain - **BI**: Burundi - **BJ**: Benin - **BL**: Saint Barthelemy - **BM**: Bermuda - **BN**: Brunei Darussalam - **BO**: Bolivia - **BQ**: Bonaire, Sint Eustatius, and Saba - **BR**: Brazil - **BS**: Bahamas - **BT**: Bhutan - **BV**: Bouvet Island - **BW**: Botswana - **BY**: Belarus - **BZ**: Belize - **CA**: Canada - **CC**: Cocos (Keeling) Islands - **CD**: The Democratic Republic of the Congo - **CF**: Central African Republic - **CG**: Congo - **CH**: Switzerland - **CI**: Cote d'Ivoire - **CK**: Cook Islands - **CL**: Chile - **CM**: Cameroon - **CN**: China - **CO**: Colombia - **CR**: Costa Rica - **CU**: Cuba - **CV**: Cape Verde - **CW**: Curacao - **CX**: Christmas Island - **CY**: Cyprus - **CZ**: Czech Republic - **DE**: Germany - **DJ**: Djibouti - **DK**: Denmark - **DM**: Dominica - **DO**: Dominican Republic - **DZ**: Algeria - **EC**: Ecuador - **EE**: Estonia - **EG**: Egypt - **EH**: Western Sahara - **ER**: Eritrea - **ES**: Spain - **ET**: Ethiopia - **FI**: Finland - **FJ**: Fiji - **FK**: Falkland Islands (Malvinas) - **FM**: Federated States of Micronesia - **FO**: Faroe Islands - **FR**: France - **GA**: Gabon - **GB**: United Kingdom - **GD**: Grenada - **GE**: Georgia - **GF**: French Guiana - **GG**: Guernsey - **GH**: Ghana - **GI**: Gibraltar - **GL**: Greenland - **GM**: Gambia - **GN**: Guinea - **GP**: Guadeloupe - **GQ**: Equatorial Guinea - **GR**: Greece - **GS**: South Georgia and the South Sandwich Islands - **GT**: Guatemala - **GU**: Guam - **GW**: Guinea-Bissau - **GY**: Guyana - **HK**: Hong Kong - **HM**: Heard Island and McDonald Islands - **HN**: Honduras - **HR**: Croatia - **HT**: Haiti - **HU**: Hungary - **ID**: Indonesia - **IE**: Ireland - **IL**: Israel - **IM**: Isle of Man - **IN**: India - **IO**: British Indian Ocean Territory - **IQ**: Iraq - **IR**: Islamic Republic of Iran - **IS**: Iceland - **IT**: Italy - **JE**: Jersey - **JM**: Jamaica - **JO**: Jordan - **JP**: Japan - **KE**: Kenya - **KG**: Kyrgyzstan - **KH**: Cambodia - **KI**: Kiribati - **KM**: Comoros - **KN**: Saint Kitts and Nevis - **KP**: Democratic People's Republic of Korea - **KR**: Republic of Korea - **KW**: Kuwait - **KY**: Cayman Islands - **KZ**: Kazakhstan - **LA**: Lao People's Democratic Republic - **LB**: Lebanon - **LC**: Saint Lucia - **LI**: Liechtenstein - **LK**: Sri Lanka - **LR**: Liberia - **LS**: Lesotho - **LT**: Lithuania - **LU**: Luxembourg - **LV**: Latvia - **LY**: Libyan Arab Jamahiriya - **MA**: Morocco - **MC**: Monaco - **MD**: Republic of Moldova - **ME**: Montenegro - **MF**: Saint Martin (French part) - **MG**: Madagascar - **MH**: Marshall Islands - **MK**: The Former Yugoslav Republic of Macedonia - **ML**: Mali - **MM**: Myanmar - **MN**: Mongolia - **MO**: Macao - **MP**: Northern Mariana Islands - **MQ**: Martinique - **MR**: Mauritania - **MS**: Montserrat - **MT**: Malta - **MU**: Mauritius - **MV**: Maldives - **MW**: Malawi - **MX**: Mexico - **MY**: Malaysia - **MZ**: Mozambique - **NA**: Namibia - **NC**: New Caledonia - **NE**: Niger - **NF**: Norfolk Island - **NG**: Nigeria - **NI**: Nicaragua - **NL**: Netherlands - **NO**: Norway - **NP**: Nepal - **NR**: Nauru - **NU**: Niue - **NZ**: New Zealand - **OM**: Oman - **PA**: Panama - **PE**: Peru - **PF**: French Polynesia. Includes Tahiti - **PG**: Papua New Guinea - **PH**: Philippines - **PK**: Pakistan - **PL**: Poland - **PM**: Saint Pierre and Miquelon - **PN**: Pitcairn - **PR**: Puerto Rico - **PS**: Palestinian territory Occupied - **PT**: Portugal - **PW**: Palau - **PY**: Paraguay - **QA**: Qatar - **RE**: Reunion - **RO**: Romania - **RS**: Serbia - **RU**: Russian Federation - **RW**: Rwanda - **SA**: Saudi Arabia - **SB**: Solomon Islands - **SC**: Seychelles - **SD**: Sudan - **SE**: Sweden - **SG**: Singapore - **SH**: Saint Helena - **SI**: Slovenia - **SJ**: Svalbard and Jan Mayen - **SK**: Slovakia - **SL**: Sierra Leone - **SM**: San Marino - **SN**: Senegal - **SO**: Somalia - **SR**: Suriname - **ST**: Sao Tome and Principe - **SV**: El Salvador - **SX**: Sint Maarten (Dutch part) - **SY**: Syrian Arab Republic - **SZ**: Swaziland - **TC**: Turks and Caicos Islands - **TD**: Chad - **TF**: French Southern Territories - **TG**: Togo - **TH**: Thailand - **TJ**: Tajikistan - **TK**: Tokelau - **TL**: Timor-Leste - **TM**: Turkmenistan - **TN**: Tunisia - **TO**: Tonga - **TR**: Turkey - **TT**: Trinidad and Tobago - **TV**: Tuvalu - **TW**: Taiwan - **TZ**: Tanzania - **UA**: Ukraine - **UG**: Uganda - **UM**: United States Minor Outlying Islands - **US**: United States - **UY**: Uruguay - **UZ**: Uzbekistan - **VA**: Holy See (Vatican City state) - **VC**: Saint Vincent and the Grenadines - **VE**: Venezuela - **VG**: British Virgin Islands - **VI**: the U.S. Virgin Islands - **VN**: Vietnam - **VU**: Vanuatu - **WF**: Wallis and Futuna - **WS**: Samoa - **YE**: Yemen - **YT**: Mayotte - **ZA**: South Africa - **ZM**: Zambia - **ZW**: Zimbabwe
     * @param CountryCodeEnum|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?CountryCodeEnum $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the locality property value. This enumerated type defines whether the corresponding shipping service options are domestic or international shipping service options. a region that is either domestic (within the country from where the item is listed or shipped) or international (a country outside the country from where the item is listed or shipped). | - **DOMESTIC**: This value indicates that the corresponding shipping service options are domestic shipping service options. - **INTERNATIONAL**: This value indicates that the corresponding shipping service options are international shipping service options.
     * @param ShippingOptionTypeEnum|null $value Value to set for the locality property.
    */
    public function setLocality(?ShippingOptionTypeEnum $value): void {
        $this->locality = $value;
    }

    /**
     * Sets the name property value. The seller-defined name for the shipping rate table.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the rateTableId property value. A unique eBay-assigned ID for a seller's shipping rate table. These <b>rateTableId</b> values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call in the Trading API.
     * @param string|null $value Value to set for the rateTableId property.
    */
    public function setRateTableId(?string $value): void {
        $this->rateTableId = $value;
    }

}
