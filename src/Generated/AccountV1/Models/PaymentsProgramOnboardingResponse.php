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
 * Type used by the payments program onboarding response
*/
class PaymentsProgramOnboardingResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PaymentsProgramOnboardingStatus|null $onboardingStatus This enumeration value indicates the eligibility of payment onboarding for the registered site. | - **ELIGIBLE_TO_ONBOARD**: This enumeration value indicates that the seller can start or continue the onboarding process. When starting the onboarding process, the first step in the registration process is returned in the steps array with a <strong>status</strong> of <code>NOT_STARTED<code>. A link in the webUrl field opens a page for the seller to complete the first step. When the seller has completed all steps, the payments capability becomes available to the seller. - **NOT_ELIGIBLE**: This enumeration value indicates that the seller's marketplace supports eBay managed payments, but the seller is not yet eligible. Eligibility is determined by eBay daily. Check onboardingStatus regularly. - **PREBOARDED**: This enumeration value indicates that the seller has completed all the necessary onboarding steps for eBay managed payments. The seller must wait for eBay to activate eBay managed payments for their account. - **ONBOARDED**: This enumeration value indicates that the seller is fully onboarded and that eBay managed payments has been activated on the seller's account.
    */
    private ?PaymentsProgramOnboardingStatus $onboardingStatus = null;
    
    /**
     * @var array<PaymentsProgramOnboardingSteps>|null $steps An array of the active process steps for payment onboarding and the status of each step. This array includes the step <strong>name</strong>, step <strong>status</strong>, and a <strong>webUrl</strong> to the <code>IN_PROGRESS</code> step. The step names are returned in sequential order. 
    */
    private ?array $steps = null;
    
    /**
     * Instantiates a new PaymentsProgramOnboardingResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentsProgramOnboardingResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentsProgramOnboardingResponse {
        return new PaymentsProgramOnboardingResponse();
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
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(PaymentsProgramOnboardingStatus::class)),
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([PaymentsProgramOnboardingSteps::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the onboardingStatus property value. This enumeration value indicates the eligibility of payment onboarding for the registered site. | - **ELIGIBLE_TO_ONBOARD**: This enumeration value indicates that the seller can start or continue the onboarding process. When starting the onboarding process, the first step in the registration process is returned in the steps array with a <strong>status</strong> of <code>NOT_STARTED<code>. A link in the webUrl field opens a page for the seller to complete the first step. When the seller has completed all steps, the payments capability becomes available to the seller. - **NOT_ELIGIBLE**: This enumeration value indicates that the seller's marketplace supports eBay managed payments, but the seller is not yet eligible. Eligibility is determined by eBay daily. Check onboardingStatus regularly. - **PREBOARDED**: This enumeration value indicates that the seller has completed all the necessary onboarding steps for eBay managed payments. The seller must wait for eBay to activate eBay managed payments for their account. - **ONBOARDED**: This enumeration value indicates that the seller is fully onboarded and that eBay managed payments has been activated on the seller's account.
     * @return PaymentsProgramOnboardingStatus|null
    */
    public function getOnboardingStatus(): ?PaymentsProgramOnboardingStatus {
        return $this->onboardingStatus;
    }

    /**
     * Gets the steps property value. An array of the active process steps for payment onboarding and the status of each step. This array includes the step <strong>name</strong>, step <strong>status</strong>, and a <strong>webUrl</strong> to the <code>IN_PROGRESS</code> step. The step names are returned in sequential order. 
     * @return array<PaymentsProgramOnboardingSteps>|null
    */
    public function getSteps(): ?array {
        return $this->steps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
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
     * Sets the onboardingStatus property value. This enumeration value indicates the eligibility of payment onboarding for the registered site. | - **ELIGIBLE_TO_ONBOARD**: This enumeration value indicates that the seller can start or continue the onboarding process. When starting the onboarding process, the first step in the registration process is returned in the steps array with a <strong>status</strong> of <code>NOT_STARTED<code>. A link in the webUrl field opens a page for the seller to complete the first step. When the seller has completed all steps, the payments capability becomes available to the seller. - **NOT_ELIGIBLE**: This enumeration value indicates that the seller's marketplace supports eBay managed payments, but the seller is not yet eligible. Eligibility is determined by eBay daily. Check onboardingStatus regularly. - **PREBOARDED**: This enumeration value indicates that the seller has completed all the necessary onboarding steps for eBay managed payments. The seller must wait for eBay to activate eBay managed payments for their account. - **ONBOARDED**: This enumeration value indicates that the seller is fully onboarded and that eBay managed payments has been activated on the seller's account.
     * @param PaymentsProgramOnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?PaymentsProgramOnboardingStatus $value): void {
        $this->onboardingStatus = $value;
    }

    /**
     * Sets the steps property value. An array of the active process steps for payment onboarding and the status of each step. This array includes the step <strong>name</strong>, step <strong>status</strong>, and a <strong>webUrl</strong> to the <code>IN_PROGRESS</code> step. The step names are returned in sequential order. 
     * @param array<PaymentsProgramOnboardingSteps>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->steps = $value;
    }

}
