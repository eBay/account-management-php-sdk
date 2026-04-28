<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <b>balanceAdjustment</b> container, which shows the seller payout balance that will be applied toward the charges outlined in the <b>charges</b> array.
*/
class BalanceAdjustment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $adjustmentAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $adjustmentAmount = null;
    
    /**
     * @var string|null $adjustmentType The enumeration value returned here indicates if the charge is a <code>DEBIT</code> or a <code>CREDIT</code> to the seller. Generally, all transfer transaction types are going to be <code>DEBIT</code>, since the money is being tranferred from the seller to eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
    */
    private ?string $adjustmentType = null;
    
    /**
     * Instantiates a new BalanceAdjustment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BalanceAdjustment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BalanceAdjustment {
        return new BalanceAdjustment();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adjustmentAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getAdjustmentAmount(): ?Amount {
        return $this->adjustmentAmount;
    }

    /**
     * Gets the adjustmentType property value. The enumeration value returned here indicates if the charge is a <code>DEBIT</code> or a <code>CREDIT</code> to the seller. Generally, all transfer transaction types are going to be <code>DEBIT</code>, since the money is being tranferred from the seller to eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAdjustmentType(): ?string {
        return $this->adjustmentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adjustmentAmount' => fn(ParseNode $n) => $o->setAdjustmentAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'adjustmentType' => fn(ParseNode $n) => $o->setAdjustmentType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adjustmentAmount', $this->getAdjustmentAmount());
        $writer->writeStringValue('adjustmentType', $this->getAdjustmentType());
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
     * Sets the adjustmentAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the adjustmentAmount property.
    */
    public function setAdjustmentAmount(?Amount $value): void {
        $this->adjustmentAmount = $value;
    }

    /**
     * Sets the adjustmentType property value. The enumeration value returned here indicates if the charge is a <code>DEBIT</code> or a <code>CREDIT</code> to the seller. Generally, all transfer transaction types are going to be <code>DEBIT</code>, since the money is being tranferred from the seller to eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the adjustmentType property.
    */
    public function setAdjustmentType(?string $value): void {
        $this->adjustmentType = $value;
    }

}
