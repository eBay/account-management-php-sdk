<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields for a seller's international return policy. Sellers have the ability to set separate domestic and international return policies, but if an international return policy is not set, the same return policy settings specified for the domestic return policy are also used for returns for international buyers. 
*/
class InternationalReturnOverrideType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $returnMethod This field sets/indicates if the seller offers replacement items to the buyer in the case of an international return. The buyer must be willing to accept a replacement item; otherwise, the seller will need to issue a refund for a return. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
    */
    private ?string $returnMethod = null;
    
    /**
     * @var TimeDuration|null $returnPeriod A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
    */
    private ?TimeDuration $returnPeriod = null;
    
    /**
     * @var bool|null $returnsAccepted If set to <code>true</code>, the seller accepts international returns. If set to <code>false</code>, the seller does not accept international returns.  <br><br>This field is conditionally required if the seller chooses to have a separate international return policy.
    */
    private ?bool $returnsAccepted = null;
    
    /**
     * @var string|null $returnShippingCostPayer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>.  <br><br>Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for 'significantly not as described' (SNAD) issues.  <br><br>This field is conditionally required if the <b>internationalOverride.returnsAccepted</b> field is set to <code>true</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
    */
    private ?string $returnShippingCostPayer = null;
    
    /**
     * Instantiates a new InternationalReturnOverrideType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InternationalReturnOverrideType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InternationalReturnOverrideType {
        return new InternationalReturnOverrideType();
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
            'returnMethod' => fn(ParseNode $n) => $o->setReturnMethod($n->getStringValue()),
            'returnPeriod' => fn(ParseNode $n) => $o->setReturnPeriod($n->getObjectValue([TimeDuration::class, 'createFromDiscriminatorValue'])),
            'returnsAccepted' => fn(ParseNode $n) => $o->setReturnsAccepted($n->getBooleanValue()),
            'returnShippingCostPayer' => fn(ParseNode $n) => $o->setReturnShippingCostPayer($n->getStringValue()),
        ];
    }

    /**
     * Gets the returnMethod property value. This field sets/indicates if the seller offers replacement items to the buyer in the case of an international return. The buyer must be willing to accept a replacement item; otherwise, the seller will need to issue a refund for a return. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReturnMethod(): ?string {
        return $this->returnMethod;
    }

    /**
     * Gets the returnPeriod property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @return TimeDuration|null
    */
    public function getReturnPeriod(): ?TimeDuration {
        return $this->returnPeriod;
    }

    /**
     * Gets the returnsAccepted property value. If set to <code>true</code>, the seller accepts international returns. If set to <code>false</code>, the seller does not accept international returns.  <br><br>This field is conditionally required if the seller chooses to have a separate international return policy.
     * @return bool|null
    */
    public function getReturnsAccepted(): ?bool {
        return $this->returnsAccepted;
    }

    /**
     * Gets the returnShippingCostPayer property value. This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>.  <br><br>Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for 'significantly not as described' (SNAD) issues.  <br><br>This field is conditionally required if the <b>internationalOverride.returnsAccepted</b> field is set to <code>true</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReturnShippingCostPayer(): ?string {
        return $this->returnShippingCostPayer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('returnMethod', $this->getReturnMethod());
        $writer->writeObjectValue('returnPeriod', $this->getReturnPeriod());
        $writer->writeBooleanValue('returnsAccepted', $this->getReturnsAccepted());
        $writer->writeStringValue('returnShippingCostPayer', $this->getReturnShippingCostPayer());
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
     * Sets the returnMethod property value. This field sets/indicates if the seller offers replacement items to the buyer in the case of an international return. The buyer must be willing to accept a replacement item; otherwise, the seller will need to issue a refund for a return. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the returnMethod property.
    */
    public function setReturnMethod(?string $value): void {
        $this->returnMethod = $value;
    }

    /**
     * Sets the returnPeriod property value. A type used to specify a period of time using a specified time-measurement unit. Payment, return, and fulfillment business policies all use this type to specify time windows.<br><br>Whenever a container that uses this type is used in a request, both of these fields are required. Similarly, whenever a container that uses this type is returned in a response, both of these fields are always returned.
     * @param TimeDuration|null $value Value to set for the returnPeriod property.
    */
    public function setReturnPeriod(?TimeDuration $value): void {
        $this->returnPeriod = $value;
    }

    /**
     * Sets the returnsAccepted property value. If set to <code>true</code>, the seller accepts international returns. If set to <code>false</code>, the seller does not accept international returns.  <br><br>This field is conditionally required if the seller chooses to have a separate international return policy.
     * @param bool|null $value Value to set for the returnsAccepted property.
    */
    public function setReturnsAccepted(?bool $value): void {
        $this->returnsAccepted = $value;
    }

    /**
     * Sets the returnShippingCostPayer property value. This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>.  <br><br>Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for 'significantly not as described' (SNAD) issues.  <br><br>This field is conditionally required if the <b>internationalOverride.returnsAccepted</b> field is set to <code>true</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the returnShippingCostPayer property.
    */
    public function setReturnShippingCostPayer(?string $value): void {
        $this->returnShippingCostPayer = $value;
    }

}
