<?php
/**
 * GetInboundPlanResponse.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v202406
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * GetInboundPlanResponse Class Doc Comment.
 *

 * @description The response schema for the getShipments operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetInboundPlanResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetInboundPlanResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'last_updated_at' => '\DateTime',
        'marketplace_ids' => 'string[]',
        'name' => 'string',
        'inbound_plan_id' => 'string',
        'packing_options' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PackingOptionSummaryList',    
        'placement_options' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PlacementOptionSummaryList',    
        'shipments' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentSummaryList',    
        'source_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\AddressInput', 
        'status' => 'string',
        'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ErrorList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'created_at' => 'date-time',
        'last_updated_at' => 'date-time',
        'marketplace_ids' => null,
        'name' => null,
        'inbound_plan_id' => null,
        'packing_options' => null,    
        'placement_options' => null,    
        'shipments' => null,    
        'source_address' => null, 
        'status' => null,
        'errors' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_at' => 'createdAt',
        'last_updated_at' => 'lastUpdatedAt',
        'marketplace_ids' => 'marketplaceIds',
        'name' => 'name',
        'inbound_plan_id' => 'inboundPlanId',
        'packing_options' => 'packingOptions',    
        'placement_options' => 'placementOptions',    
        'shipments' => 'shipments',    
        'source_address' => 'sourceAddress', 
        'status' => 'status',
        'errors' => 'errors',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'last_updated_at' => 'setLastUpdatedAt',
        'marketplace_ids' => 'setMarketplaceIds',
        'name' => 'setName',
        'inbound_plan_id' => 'setInboundPlanId',
        'packing_options' => 'setPackingOptions',    
        'placement_options' => 'setPlacementOptions',    
        'shipments' => 'setShipments',    
        'source_address' => 'setSourceAddress', 
        'status' => 'setStatus', 
        'errors' => 'setErrors',  
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'last_updated_at' => 'getLastUpdatedAt',
        'marketplace_ids' => 'getMarketplaceIds',
        'name' => 'getName',
        'inbound_plan_id' => 'getInboundPlanId',
        'packing_options' => 'getPackingOptions',    
        'placement_options' => 'getPlacementOptions',    
        'shipments' => 'getShipments',    
        'source_address' => 'getSourceAddress', 
        'status' => 'getStatus',  
        'errors' => 'getErrors', 
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {  
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['last_updated_at'] = isset($data['last_updated_at']) ? $data['last_updated_at'] : null;
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inbound_plan_id'] = isset($data['inbound_plan_id']) ? $data['inbound_plan_id'] : null;
        $this->container['packing_options'] = isset($data['packing_options']) ? $data['packing_options'] : null;
        $this->container['placement_options'] = isset($data['placement_options']) ? $data['placement_options'] : null;
        $this->container['shipments'] = isset($data['shipments']) ? $data['shipments'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    public function getInboundPlanId()
    {
        return $this->container['inbound_plan_id'];
    }

    public function setInboundPlanId($inbound_plan_id)
    {
        $this->container['inbound_plan_id'] = $inbound_plan_id;

        return $this;
    }


    public function getLastUpdatedAt()
    {
        return $this->container['last_updated_at'];
    }

    public function setLastUpdatedAt($last_updated_at)
    {
        $this->container['last_updated_at'] = $last_updated_at;

        return $this;
    }

    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    public function getName()
    {
        return $this->container['name'];
    }

    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    public function getPackingOptions()
    {
        return $this->container['packing_options'];
    }

    public function setPackingOptions($packing_options)
    {
        $this->container['packing_options'] = $packing_options;

        return $this;
    }

    public function getPlacementOptions()
    {
        return $this->container['placement_options'];
    }

    public function setPlacementOptions($placement_options)
    {
        $this->container['placement_options'] = $placement_options;

        return $this;
    }

    public function getShipments()
    {
        return $this->container['shipments'];
    }

    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

        return $this;
    }

    public function getSourceAddress()
    {
        return $this->container['source_address'];
    }

    public function setSourceAddress($source_address)
    {
        $this->container['source_address'] = $source_address;

        return $this;
    }
    public function getStatus()
    {
        return $this->container['status'];
    }

    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    public function getErrors()
    {
        return $this->container['errors'];
    }
    

    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
