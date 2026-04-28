<?php

namespace EBay\AccountManagement\Generated\SellAccountV1\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type consists of the <b>regionIncluded</b> and <b>regionExcluded</b> arrays, which indicate the areas to where the seller does and doesn't ship.
*/
class RegionSet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Region>|null $regionExcluded An array of one or more <b>regionName</b> values that specify the areas to where a seller does not ship. A <b>regionExcluded</b> list should only be set in the top-level <b>shipToLocations</b> container and not within the <b>shippingServices.shipToLocations</b> container used to specify which shipping regions are serviced by each available shipping service option. <p>Many sellers are willing to ship to many international locations, but they may want to exclude some world regions or some countries as places they are willing to ship to.<br><br>This array will be returned as empty if no shipping regions are excluded with the fulfillment business policy.<br> <br><span class="tablenote"><b>Note: </b> The <b>regionExcluded</b> array is not applicable for motor vehicle business policies on the US, CA, or UK marketplaces. If this array is used in a <b>createFulfillmentPolicy</b> or <b>updateFulfillmentPolicy</b> request, it will be ignored.</span>
    */
    private ?array $regionExcluded = null;
    
    /**
     * @var array<Region>|null $regionIncluded An array of one or more <b>regionName</b> fields that specify the areas to where a seller ships. <br>Each eBay marketplace supports its own set of allowable shipping locations.<br> <br><span class="tablenote"><b>Note: </b> The <b>regionIncluded</b> array is not applicable for motor vehicle business policies on the US, CA, or UK marketplaces. If this array is used in a <b>createFulfillmentPolicy</b> or <b>updateFulfillmentPolicy</b> request, it will be ignored.</span>
    */
    private ?array $regionIncluded = null;
    
    /**
     * Instantiates a new RegionSet and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegionSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegionSet {
        return new RegionSet();
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
            'regionExcluded' => fn(ParseNode $n) => $o->setRegionExcluded($n->getCollectionOfObjectValues([Region::class, 'createFromDiscriminatorValue'])),
            'regionIncluded' => fn(ParseNode $n) => $o->setRegionIncluded($n->getCollectionOfObjectValues([Region::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the regionExcluded property value. An array of one or more <b>regionName</b> values that specify the areas to where a seller does not ship. A <b>regionExcluded</b> list should only be set in the top-level <b>shipToLocations</b> container and not within the <b>shippingServices.shipToLocations</b> container used to specify which shipping regions are serviced by each available shipping service option. <p>Many sellers are willing to ship to many international locations, but they may want to exclude some world regions or some countries as places they are willing to ship to.<br><br>This array will be returned as empty if no shipping regions are excluded with the fulfillment business policy.<br> <br><span class="tablenote"><b>Note: </b> The <b>regionExcluded</b> array is not applicable for motor vehicle business policies on the US, CA, or UK marketplaces. If this array is used in a <b>createFulfillmentPolicy</b> or <b>updateFulfillmentPolicy</b> request, it will be ignored.</span>
     * @return array<Region>|null
    */
    public function getRegionExcluded(): ?array {
        return $this->regionExcluded;
    }

    /**
     * Gets the regionIncluded property value. An array of one or more <b>regionName</b> fields that specify the areas to where a seller ships. <br>Each eBay marketplace supports its own set of allowable shipping locations.<br> <br><span class="tablenote"><b>Note: </b> The <b>regionIncluded</b> array is not applicable for motor vehicle business policies on the US, CA, or UK marketplaces. If this array is used in a <b>createFulfillmentPolicy</b> or <b>updateFulfillmentPolicy</b> request, it will be ignored.</span>
     * @return array<Region>|null
    */
    public function getRegionIncluded(): ?array {
        return $this->regionIncluded;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('regionExcluded', $this->getRegionExcluded());
        $writer->writeCollectionOfObjectValues('regionIncluded', $this->getRegionIncluded());
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
     * Sets the regionExcluded property value. An array of one or more <b>regionName</b> values that specify the areas to where a seller does not ship. A <b>regionExcluded</b> list should only be set in the top-level <b>shipToLocations</b> container and not within the <b>shippingServices.shipToLocations</b> container used to specify which shipping regions are serviced by each available shipping service option. <p>Many sellers are willing to ship to many international locations, but they may want to exclude some world regions or some countries as places they are willing to ship to.<br><br>This array will be returned as empty if no shipping regions are excluded with the fulfillment business policy.<br> <br><span class="tablenote"><b>Note: </b> The <b>regionExcluded</b> array is not applicable for motor vehicle business policies on the US, CA, or UK marketplaces. If this array is used in a <b>createFulfillmentPolicy</b> or <b>updateFulfillmentPolicy</b> request, it will be ignored.</span>
     * @param array<Region>|null $value Value to set for the regionExcluded property.
    */
    public function setRegionExcluded(?array $value): void {
        $this->regionExcluded = $value;
    }

    /**
     * Sets the regionIncluded property value. An array of one or more <b>regionName</b> fields that specify the areas to where a seller ships. <br>Each eBay marketplace supports its own set of allowable shipping locations.<br> <br><span class="tablenote"><b>Note: </b> The <b>regionIncluded</b> array is not applicable for motor vehicle business policies on the US, CA, or UK marketplaces. If this array is used in a <b>createFulfillmentPolicy</b> or <b>updateFulfillmentPolicy</b> request, it will be ignored.</span>
     * @param array<Region>|null $value Value to set for the regionIncluded property.
    */
    public function setRegionIncluded(?array $value): void {
        $this->regionIncluded = $value;
    }

}
