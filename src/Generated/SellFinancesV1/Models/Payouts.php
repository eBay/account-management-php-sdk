<?php

namespace EBay\AccountManagement\Generated\SellFinancesV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is the base response type of the <strong>getPayouts</strong> method, and contains an array of one or more payouts (that match the input criteria), the total count of payouts in the response, and various pagination data for the results set.
*/
class Payouts implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The URI of the <b>getPayouts</b> call request that produced the current page of the result set.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The maximum number of payouts that may be returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>20</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer payouts than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of payouts matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total payouts) and the <strong>limit</strong> value was <code>50</code> (show 50 payouts per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getPayouts</strong> calls to view all payouts matching the input criteria. </span><br><br><b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The <b>getPayouts</b> call URI to use if you wish to view the next page of the result set. <br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the call retrieves payouts 31 thru 40 from the resulting collection of payouts. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br><br><b>Default:</b> <code>0</code> (zero)
    */
    private ?int $offset = null;
    
    /**
     * @var array<Payout>|null $payouts An array of one or more payouts that match the input criteria. Details for each payout include the unique identifier of the payout, the status of the payout, the amount of the payout, and the number of monetary transactions associated with the payout.
    */
    private ?array $payouts = null;
    
    /**
     * @var string|null $prev The <b>getPayouts</b> call URI to use if you wish to view the previous page of the result set. <br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total This integer value is the total number of payouts in the results set based on the current input criteria. Based on the total number of payouts that match the criteria, and on the <strong>limit</strong> and <strong>offset</strong> values, there may be additional pages in the results set.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new Payouts and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Payouts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Payouts {
        return new Payouts();
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
            'payouts' => fn(ParseNode $n) => $o->setPayouts($n->getCollectionOfObjectValues([Payout::class, 'createFromDiscriminatorValue'])),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI of the <b>getPayouts</b> call request that produced the current page of the result set.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The maximum number of payouts that may be returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>20</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer payouts than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of payouts matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total payouts) and the <strong>limit</strong> value was <code>50</code> (show 50 payouts per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getPayouts</strong> calls to view all payouts matching the input criteria. </span><br><br><b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The <b>getPayouts</b> call URI to use if you wish to view the next page of the result set. <br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the call retrieves payouts 31 thru 40 from the resulting collection of payouts. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br><br><b>Default:</b> <code>0</code> (zero)
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the payouts property value. An array of one or more payouts that match the input criteria. Details for each payout include the unique identifier of the payout, the status of the payout, the amount of the payout, and the number of monetary transactions associated with the payout.
     * @return array<Payout>|null
    */
    public function getPayouts(): ?array {
        return $this->payouts;
    }

    /**
     * Gets the prev property value. The <b>getPayouts</b> call URI to use if you wish to view the previous page of the result set. <br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. This integer value is the total number of payouts in the results set based on the current input criteria. Based on the total number of payouts that match the criteria, and on the <strong>limit</strong> and <strong>offset</strong> values, there may be additional pages in the results set.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
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
        $writer->writeCollectionOfObjectValues('payouts', $this->getPayouts());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. The URI of the <b>getPayouts</b> call request that produced the current page of the result set.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The maximum number of payouts that may be returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>20</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer payouts than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of payouts matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total payouts) and the <strong>limit</strong> value was <code>50</code> (show 50 payouts per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getPayouts</strong> calls to view all payouts matching the input criteria. </span><br><br><b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>20</code>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The <b>getPayouts</b> call URI to use if you wish to view the next page of the result set. <br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the call retrieves payouts 31 thru 40 from the resulting collection of payouts. <br><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br><br><b>Default:</b> <code>0</code> (zero)
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the payouts property value. An array of one or more payouts that match the input criteria. Details for each payout include the unique identifier of the payout, the status of the payout, the amount of the payout, and the number of monetary transactions associated with the payout.
     * @param array<Payout>|null $value Value to set for the payouts property.
    */
    public function setPayouts(?array $value): void {
        $this->payouts = $value;
    }

    /**
     * Sets the prev property value. The <b>getPayouts</b> call URI to use if you wish to view the previous page of the result set. <br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. This integer value is the total number of payouts in the results set based on the current input criteria. Based on the total number of payouts that match the criteria, and on the <strong>limit</strong> and <strong>offset</strong> values, there may be additional pages in the results set.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
