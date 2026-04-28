<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines a summarized view of earnings information derived from one order. It defines fields that provides a summarized view of earnings information derived from one order including aggregated financial values for gross amount, expenses, earnings, and refunds. 
*/
class EarningsSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Expense|null $expenses This type defines provides the total expenses associated with an order. Expenses represent cost components that reduce the seller's gross earnings and may include deductions such as marketplace fees, eBay shipping labels, and donations, applied during order processing.
    */
    private ?Expense $expenses = null;
    
    /**
     * @var Amount|null $grossAmount This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $grossAmount = null;
    
    /**
     * @var Amount|null $orderEarnings This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $orderEarnings = null;
    
    /**
     * @var Amount|null $refunds This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
    */
    private ?Amount $refunds = null;
    
    /**
     * Instantiates a new EarningsSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EarningsSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EarningsSummary {
        return new EarningsSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expenses property value. This type defines provides the total expenses associated with an order. Expenses represent cost components that reduce the seller's gross earnings and may include deductions such as marketplace fees, eBay shipping labels, and donations, applied during order processing.
     * @return Expense|null
    */
    public function getExpenses(): ?Expense {
        return $this->expenses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expenses' => fn(ParseNode $n) => $o->setExpenses($n->getObjectValue([Expense::class, 'createFromDiscriminatorValue'])),
            'grossAmount' => fn(ParseNode $n) => $o->setGrossAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'orderEarnings' => fn(ParseNode $n) => $o->setOrderEarnings($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refunds' => fn(ParseNode $n) => $o->setRefunds($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the grossAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getGrossAmount(): ?Amount {
        return $this->grossAmount;
    }

    /**
     * Gets the orderEarnings property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getOrderEarnings(): ?Amount {
        return $this->orderEarnings;
    }

    /**
     * Gets the refunds property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @return Amount|null
    */
    public function getRefunds(): ?Amount {
        return $this->refunds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('expenses', $this->getExpenses());
        $writer->writeObjectValue('grossAmount', $this->getGrossAmount());
        $writer->writeObjectValue('orderEarnings', $this->getOrderEarnings());
        $writer->writeObjectValue('refunds', $this->getRefunds());
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
     * Sets the expenses property value. This type defines provides the total expenses associated with an order. Expenses represent cost components that reduce the seller's gross earnings and may include deductions such as marketplace fees, eBay shipping labels, and donations, applied during order processing.
     * @param Expense|null $value Value to set for the expenses property.
    */
    public function setExpenses(?Expense $value): void {
        $this->expenses = $value;
    }

    /**
     * Sets the grossAmount property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the grossAmount property.
    */
    public function setGrossAmount(?Amount $value): void {
        $this->grossAmount = $value;
    }

    /**
     * Sets the orderEarnings property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the orderEarnings property.
    */
    public function setOrderEarnings(?Amount $value): void {
        $this->orderEarnings = $value;
    }

    /**
     * Sets the refunds property value. This type is used to express the dollar value and currency used for any transaction retrieved with the <strong>Finances API</strong>, including an order total, a seller payout, a buyer refund, or a seller credit.
     * @param Amount|null $value Value to set for the refunds property.
    */
    public function setRefunds(?Amount $value): void {
        $this->refunds = $value;
    }

}
