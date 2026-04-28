<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This is the base response type of the <b>getTransactions</b> method. The <b>getTransactions</b> response includes details on one or more monetary transactions that match the input criteria, as well as pagination data. 
*/
class Transactions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The URI of the <b>getTransactions</b> method request that produced the current page of the result set.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The maximum number of monetary transactions that may be returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>20</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer monetary transactions than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of monetary transactions matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total monetary transactions) and the <strong>limit</strong> value was <code>50</code> (show 50 monetary transactions per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getTransactions</strong> calls to view all monetary transactions matching the input criteria. </span><br><br><b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The <b>getTransactions</b> method URI to use if you wish to view the next page of the result set. <br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset This integer value indicates the actual position that the first monetary transaction returned on the current page has in the results set. So, if you wanted to view the 11th monetary transaction of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the method retrieves monetary transactions 31 thru 40 from the resulting collection of monetary transactions. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br><br><b>Default:</b> <code>0</code> (zero)
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The <b>getTransactions</b> method URI to use if you wish to view the previous page of the result set. <br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total This integer value is the total amount of monetary transactions in the result set based on the current input criteria. Based on the total number of monetary transactions that match the criteria, and on the <strong>limit</strong> and <strong>offset</strong> values, there may be additional pages in the results set.
    */
    private ?int $total = null;
    
    /**
     * @var array<Transaction>|null $transactions An array of one or more monetary transactions that match the input criteria. Details for each monetary transaction may include the unique identifier of the order associated with the monetary transaction, the status of the transaction, the amount of the order, the order's buyer, and the unique identifier of the payout (if a payout has been initiated/issued for the order).
    */
    private ?array $transactions = null;
    
    /**
     * Instantiates a new Transactions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Transactions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Transactions {
        return new Transactions();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'transactions' => fn(ParseNode $n) => $o->setTransactions($n->getCollectionOfObjectValues([Transaction::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the href property value. The URI of the <b>getTransactions</b> method request that produced the current page of the result set.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The maximum number of monetary transactions that may be returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>20</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer monetary transactions than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of monetary transactions matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total monetary transactions) and the <strong>limit</strong> value was <code>50</code> (show 50 monetary transactions per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getTransactions</strong> calls to view all monetary transactions matching the input criteria. </span><br><br><b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The <b>getTransactions</b> method URI to use if you wish to view the next page of the result set. <br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. This integer value indicates the actual position that the first monetary transaction returned on the current page has in the results set. So, if you wanted to view the 11th monetary transaction of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the method retrieves monetary transactions 31 thru 40 from the resulting collection of monetary transactions. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br><br><b>Default:</b> <code>0</code> (zero)
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The <b>getTransactions</b> method URI to use if you wish to view the previous page of the result set. <br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. This integer value is the total amount of monetary transactions in the result set based on the current input criteria. Based on the total number of monetary transactions that match the criteria, and on the <strong>limit</strong> and <strong>offset</strong> values, there may be additional pages in the results set.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Gets the transactions property value. An array of one or more monetary transactions that match the input criteria. Details for each monetary transaction may include the unique identifier of the order associated with the monetary transaction, the status of the transaction, the amount of the order, the order's buyer, and the unique identifier of the payout (if a payout has been initiated/issued for the order).
     * @return array<Transaction>|null
    */
    public function getTransactions(): ?array {
        return $this->transactions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeCollectionOfObjectValues('transactions', $this->getTransactions());
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
     * Sets the href property value. The URI of the <b>getTransactions</b> method request that produced the current page of the result set.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The maximum number of monetary transactions that may be returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>20</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer monetary transactions than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of monetary transactions matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total monetary transactions) and the <strong>limit</strong> value was <code>50</code> (show 50 monetary transactions per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getTransactions</strong> calls to view all monetary transactions matching the input criteria. </span><br><br><b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The <b>getTransactions</b> method URI to use if you wish to view the next page of the result set. <br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. This integer value indicates the actual position that the first monetary transaction returned on the current page has in the results set. So, if you wanted to view the 11th monetary transaction of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the method retrieves monetary transactions 31 thru 40 from the resulting collection of monetary transactions. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br><br><b>Default:</b> <code>0</code> (zero)
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The <b>getTransactions</b> method URI to use if you wish to view the previous page of the result set. <br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. This integer value is the total amount of monetary transactions in the result set based on the current input criteria. Based on the total number of monetary transactions that match the criteria, and on the <strong>limit</strong> and <strong>offset</strong> values, there may be additional pages in the results set.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

    /**
     * Sets the transactions property value. An array of one or more monetary transactions that match the input criteria. Details for each monetary transaction may include the unique identifier of the order associated with the monetary transaction, the status of the transaction, the amount of the order, the order's buyer, and the unique identifier of the payout (if a payout has been initiated/issued for the order).
     * @param array<Transaction>|null $value Value to set for the transactions property.
    */
    public function setTransactions(?array $value): void {
        $this->transactions = $value;
    }

}
