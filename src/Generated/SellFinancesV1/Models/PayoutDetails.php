<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type provide payout details for a split-payout case. This type is only applicable for split payouts.
*/
class PayoutDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $payoutIds This array indicates the list of true(actual) payout ids associated with a split payout. These values can be used as a path parameter for the <b>getPayout</b> method to retrieve details on the associated payouts.
    */
    private ?array $payoutIds = null;
    
    /**
     * @var string|null $payoutReference This field contains the unique identifier for the Payout Reference. In split-payout cases, this is the unique identifier reference (not true payout). This field is only returned and will show the associated true(actual) payout id(s) when sellers in Mainland China enable split payouts between a Payoneer account and/or a bank account.  This value can be used by the <b>filter</b> query parameter of the <b>getPayouts</b> method to get the monetary details of each true(actual) payout associated with the payoutReference. <br><br><span class="tablenote"><b>Note:</b>Split-payout functionality will <b>only</b> be available to mainland China sellers.</span>
    */
    private ?string $payoutReference = null;
    
    /**
     * Instantiates a new PayoutDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayoutDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayoutDetails {
        return new PayoutDetails();
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
            'payoutIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPayoutIds($val);
            },
            'payoutReference' => fn(ParseNode $n) => $o->setPayoutReference($n->getStringValue()),
        ];
    }

    /**
     * Gets the payoutIds property value. This array indicates the list of true(actual) payout ids associated with a split payout. These values can be used as a path parameter for the <b>getPayout</b> method to retrieve details on the associated payouts.
     * @return array<string>|null
    */
    public function getPayoutIds(): ?array {
        return $this->payoutIds;
    }

    /**
     * Gets the payoutReference property value. This field contains the unique identifier for the Payout Reference. In split-payout cases, this is the unique identifier reference (not true payout). This field is only returned and will show the associated true(actual) payout id(s) when sellers in Mainland China enable split payouts between a Payoneer account and/or a bank account.  This value can be used by the <b>filter</b> query parameter of the <b>getPayouts</b> method to get the monetary details of each true(actual) payout associated with the payoutReference. <br><br><span class="tablenote"><b>Note:</b>Split-payout functionality will <b>only</b> be available to mainland China sellers.</span>
     * @return string|null
    */
    public function getPayoutReference(): ?string {
        return $this->payoutReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('payoutIds', $this->getPayoutIds());
        $writer->writeStringValue('payoutReference', $this->getPayoutReference());
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
     * Sets the payoutIds property value. This array indicates the list of true(actual) payout ids associated with a split payout. These values can be used as a path parameter for the <b>getPayout</b> method to retrieve details on the associated payouts.
     * @param array<string>|null $value Value to set for the payoutIds property.
    */
    public function setPayoutIds(?array $value): void {
        $this->payoutIds = $value;
    }

    /**
     * Sets the payoutReference property value. This field contains the unique identifier for the Payout Reference. In split-payout cases, this is the unique identifier reference (not true payout). This field is only returned and will show the associated true(actual) payout id(s) when sellers in Mainland China enable split payouts between a Payoneer account and/or a bank account.  This value can be used by the <b>filter</b> query parameter of the <b>getPayouts</b> method to get the monetary details of each true(actual) payout associated with the payoutReference. <br><br><span class="tablenote"><b>Note:</b>Split-payout functionality will <b>only</b> be available to mainland China sellers.</span>
     * @param string|null $value Value to set for the payoutReference property.
    */
    public function setPayoutReference(?string $value): void {
        $this->payoutReference = $value;
    }

}
