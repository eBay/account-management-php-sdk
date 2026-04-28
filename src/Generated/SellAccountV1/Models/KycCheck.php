<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide details about any KYC check that is applicable to the managed payments seller.
*/
class KycCheck implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $alert This field gives a short summary of what is required from the seller. An example might be, '<code>Upload bank document now.</code>'. The <b>detailMessage</b> field will often provide more details on what is required of the seller.
    */
    private ?string $alert = null;
    
    /**
     * @var string|null $dataRequired The enumeration value returned in this field categorizes the type of details needed for the KYC check. More information about the check is shown in the <b>detailMessage</b> and other applicable, corresponding fields. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/kyc:DetailsType'>eBay API documentation</a>
    */
    private ?string $dataRequired = null;
    
    /**
     * @var string|null $detailMessage This field gives a detailed message about what is required from the seller. An example might be, '<code>Please upload a bank document by 2020-08-01 to get your account back in good standing.</code>'.
    */
    private ?string $detailMessage = null;
    
    /**
     * @var string|null $dueDate The timestamp in this field indicates the date by which the seller should resolve the KYC requirement.<br><br>The timestamp in this field uses the UTC date and time format described in the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601 Standard</a>. See below for this format and an example: <br><br><i>MM-DD-YYYY HH:MM:SS</i><br/><code>06-05-2020 10:34:18</code>
    */
    private ?string $dueDate = null;
    
    /**
     * @var string|null $remedyUrl If applicable and available, a URL will be returned in this field, and the link will take the seller to an eBay page where they can provide the requested information.
    */
    private ?string $remedyUrl = null;
    
    /**
     * Instantiates a new KycCheck and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KycCheck
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KycCheck {
        return new KycCheck();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the alert property value. This field gives a short summary of what is required from the seller. An example might be, '<code>Upload bank document now.</code>'. The <b>detailMessage</b> field will often provide more details on what is required of the seller.
     * @return string|null
    */
    public function getAlert(): ?string {
        return $this->alert;
    }

    /**
     * Gets the dataRequired property value. The enumeration value returned in this field categorizes the type of details needed for the KYC check. More information about the check is shown in the <b>detailMessage</b> and other applicable, corresponding fields. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/kyc:DetailsType'>eBay API documentation</a>
     * @return string|null
    */
    public function getDataRequired(): ?string {
        return $this->dataRequired;
    }

    /**
     * Gets the detailMessage property value. This field gives a detailed message about what is required from the seller. An example might be, '<code>Please upload a bank document by 2020-08-01 to get your account back in good standing.</code>'.
     * @return string|null
    */
    public function getDetailMessage(): ?string {
        return $this->detailMessage;
    }

    /**
     * Gets the dueDate property value. The timestamp in this field indicates the date by which the seller should resolve the KYC requirement.<br><br>The timestamp in this field uses the UTC date and time format described in the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601 Standard</a>. See below for this format and an example: <br><br><i>MM-DD-YYYY HH:MM:SS</i><br/><code>06-05-2020 10:34:18</code>
     * @return string|null
    */
    public function getDueDate(): ?string {
        return $this->dueDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alert' => fn(ParseNode $n) => $o->setAlert($n->getStringValue()),
            'dataRequired' => fn(ParseNode $n) => $o->setDataRequired($n->getStringValue()),
            'detailMessage' => fn(ParseNode $n) => $o->setDetailMessage($n->getStringValue()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getStringValue()),
            'remedyUrl' => fn(ParseNode $n) => $o->setRemedyUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the remedyUrl property value. If applicable and available, a URL will be returned in this field, and the link will take the seller to an eBay page where they can provide the requested information.
     * @return string|null
    */
    public function getRemedyUrl(): ?string {
        return $this->remedyUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alert', $this->getAlert());
        $writer->writeStringValue('dataRequired', $this->getDataRequired());
        $writer->writeStringValue('detailMessage', $this->getDetailMessage());
        $writer->writeStringValue('dueDate', $this->getDueDate());
        $writer->writeStringValue('remedyUrl', $this->getRemedyUrl());
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
     * Sets the alert property value. This field gives a short summary of what is required from the seller. An example might be, '<code>Upload bank document now.</code>'. The <b>detailMessage</b> field will often provide more details on what is required of the seller.
     * @param string|null $value Value to set for the alert property.
    */
    public function setAlert(?string $value): void {
        $this->alert = $value;
    }

    /**
     * Sets the dataRequired property value. The enumeration value returned in this field categorizes the type of details needed for the KYC check. More information about the check is shown in the <b>detailMessage</b> and other applicable, corresponding fields. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/kyc:DetailsType'>eBay API documentation</a>
     * @param string|null $value Value to set for the dataRequired property.
    */
    public function setDataRequired(?string $value): void {
        $this->dataRequired = $value;
    }

    /**
     * Sets the detailMessage property value. This field gives a detailed message about what is required from the seller. An example might be, '<code>Please upload a bank document by 2020-08-01 to get your account back in good standing.</code>'.
     * @param string|null $value Value to set for the detailMessage property.
    */
    public function setDetailMessage(?string $value): void {
        $this->detailMessage = $value;
    }

    /**
     * Sets the dueDate property value. The timestamp in this field indicates the date by which the seller should resolve the KYC requirement.<br><br>The timestamp in this field uses the UTC date and time format described in the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601 Standard</a>. See below for this format and an example: <br><br><i>MM-DD-YYYY HH:MM:SS</i><br/><code>06-05-2020 10:34:18</code>
     * @param string|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?string $value): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the remedyUrl property value. If applicable and available, a URL will be returned in this field, and the link will take the seller to an eBay page where they can provide the requested information.
     * @param string|null $value Value to set for the remedyUrl property.
    */
    public function setRemedyUrl(?string $value): void {
        $this->remedyUrl = $value;
    }

}
