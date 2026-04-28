<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The seller program to opt in to when part of an <b>optInToProgram</b> request, or out of when part of an  <b>optOutOfProgram</b> request.
*/
class Program implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $programType The seller program to opt in to when part of an <b>optInToProgram</b> request, or out of when part of an  <b>optOutOfProgram</b> request. When returned in an <b>getOptedInPrograms</b> response, a separate <b>programType</b> field is returned for each seller program that the seller is opted in to. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ProgramTypeEnum'>eBay API documentation</a>
    */
    private ?string $programType = null;
    
    /**
     * Instantiates a new Program and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Program
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Program {
        return new Program();
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
            'programType' => fn(ParseNode $n) => $o->setProgramType($n->getStringValue()),
        ];
    }

    /**
     * Gets the programType property value. The seller program to opt in to when part of an <b>optInToProgram</b> request, or out of when part of an  <b>optOutOfProgram</b> request. When returned in an <b>getOptedInPrograms</b> response, a separate <b>programType</b> field is returned for each seller program that the seller is opted in to. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ProgramTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getProgramType(): ?string {
        return $this->programType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('programType', $this->getProgramType());
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
     * Sets the programType property value. The seller program to opt in to when part of an <b>optInToProgram</b> request, or out of when part of an  <b>optOutOfProgram</b> request. When returned in an <b>getOptedInPrograms</b> response, a separate <b>programType</b> field is returned for each seller program that the seller is opted in to. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ProgramTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the programType property.
    */
    public function setProgramType(?string $value): void {
        $this->programType = $value;
    }

}
