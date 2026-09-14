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
 * A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
*/
class TimeDuration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var TimeDurationUnitEnum|null $unit This enumerated type specifies the time-measurement unit that's used to express a time span. | - **YEAR**: This value indicates that the time measurement unit used is based on a number of years. This enum is not currently used by the Account API v1. - **MONTH**: This value indicates that the time measurement unit used is based on a number of months. This enum is not currently used by the Account API v1. - **DAY**: This value indicates that the time measurement unit used is based on a number of days. This enum is used for handling time in fulfillment business policies, for <strong>fullPaymentDueIn</strong> field for motor vehicle listing payment business policies, and for the return period for return business policies. - **HOUR**: This value indicates that the time measurement unit used is based on a number of hours. This enum is used for a motor vehicle deposit due date for motor vehicle listing payment business policies. - **CALENDAR_DAY**: This value indicates that the time measurement unit used is based on a number of calendar days, including Saturday and Sunday. This time measurement unit does not exclude holidays. This enum is not currently used by the Account API v1. - **BUSINESS_DAY**: This value indicates that the time measurement unit used is based on a number of business days or 'working days'. This generally excludes Sunday and all holidays (for the marketplace) in the time duration and, depending on the location, can include or exclude Saturday. This enum is not currently used by the Account API v1. - **MINUTE**: This value indicates that the time measurement unit used is based on a number of minutes. This enum is not currently used by the Account API v1. - **SECOND**: This value indicates that the time measurement unit used is based on a number of seconds. This enum is not currently used by the Account API v1. - **MILLISECOND**: This value indicates that the time measurement unit used is based on a number of milliseconds. This enum is not currently used by the Account API v1.
    */
    private ?TimeDurationUnitEnum $unit = null;
    
    /**
     * @var int|null $value An integer that represents an amount of time, as measured by the time-measurement unit specified in the <b>unit</b> field.
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new TimeDuration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeDuration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeDuration {
        return new TimeDuration();
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
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(TimeDurationUnitEnum::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the unit property value. This enumerated type specifies the time-measurement unit that's used to express a time span. | - **YEAR**: This value indicates that the time measurement unit used is based on a number of years. This enum is not currently used by the Account API v1. - **MONTH**: This value indicates that the time measurement unit used is based on a number of months. This enum is not currently used by the Account API v1. - **DAY**: This value indicates that the time measurement unit used is based on a number of days. This enum is used for handling time in fulfillment business policies, for <strong>fullPaymentDueIn</strong> field for motor vehicle listing payment business policies, and for the return period for return business policies. - **HOUR**: This value indicates that the time measurement unit used is based on a number of hours. This enum is used for a motor vehicle deposit due date for motor vehicle listing payment business policies. - **CALENDAR_DAY**: This value indicates that the time measurement unit used is based on a number of calendar days, including Saturday and Sunday. This time measurement unit does not exclude holidays. This enum is not currently used by the Account API v1. - **BUSINESS_DAY**: This value indicates that the time measurement unit used is based on a number of business days or 'working days'. This generally excludes Sunday and all holidays (for the marketplace) in the time duration and, depending on the location, can include or exclude Saturday. This enum is not currently used by the Account API v1. - **MINUTE**: This value indicates that the time measurement unit used is based on a number of minutes. This enum is not currently used by the Account API v1. - **SECOND**: This value indicates that the time measurement unit used is based on a number of seconds. This enum is not currently used by the Account API v1. - **MILLISECOND**: This value indicates that the time measurement unit used is based on a number of milliseconds. This enum is not currently used by the Account API v1.
     * @return TimeDurationUnitEnum|null
    */
    public function getUnit(): ?TimeDurationUnitEnum {
        return $this->unit;
    }

    /**
     * Gets the value property value. An integer that represents an amount of time, as measured by the time-measurement unit specified in the <b>unit</b> field.
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('unit', $this->getUnit());
        $writer->writeIntegerValue('value', $this->getValue());
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
     * Sets the unit property value. This enumerated type specifies the time-measurement unit that's used to express a time span. | - **YEAR**: This value indicates that the time measurement unit used is based on a number of years. This enum is not currently used by the Account API v1. - **MONTH**: This value indicates that the time measurement unit used is based on a number of months. This enum is not currently used by the Account API v1. - **DAY**: This value indicates that the time measurement unit used is based on a number of days. This enum is used for handling time in fulfillment business policies, for <strong>fullPaymentDueIn</strong> field for motor vehicle listing payment business policies, and for the return period for return business policies. - **HOUR**: This value indicates that the time measurement unit used is based on a number of hours. This enum is used for a motor vehicle deposit due date for motor vehicle listing payment business policies. - **CALENDAR_DAY**: This value indicates that the time measurement unit used is based on a number of calendar days, including Saturday and Sunday. This time measurement unit does not exclude holidays. This enum is not currently used by the Account API v1. - **BUSINESS_DAY**: This value indicates that the time measurement unit used is based on a number of business days or 'working days'. This generally excludes Sunday and all holidays (for the marketplace) in the time duration and, depending on the location, can include or exclude Saturday. This enum is not currently used by the Account API v1. - **MINUTE**: This value indicates that the time measurement unit used is based on a number of minutes. This enum is not currently used by the Account API v1. - **SECOND**: This value indicates that the time measurement unit used is based on a number of seconds. This enum is not currently used by the Account API v1. - **MILLISECOND**: This value indicates that the time measurement unit used is based on a number of milliseconds. This enum is not currently used by the Account API v1.
     * @param TimeDurationUnitEnum|null $value Value to set for the unit property.
    */
    public function setUnit(?TimeDurationUnitEnum $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. An integer that represents an amount of time, as measured by the time-measurement unit specified in the <b>unit</b> field.
     * @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->value = $value;
    }

}
