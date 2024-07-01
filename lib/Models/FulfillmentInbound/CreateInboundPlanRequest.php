<?php
/**
 * CreateInboundPlanRequest.
 *
 * PHP version 7
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
 * CreateInboundPlanRequest Class Doc Comment.
 *

 * @description The request schema for the createInboundPlan operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CreateInboundPlanRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateInboundPlanRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'destination_marketplaces' => 'string[]',
        'name' => 'string',
        'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ItemInput',
        'source_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\AddressInput',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'destination_marketplaces' => null,
        'name' => null,
        'items' => null,
        'source_address' => null,  
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
        'destination_marketplaces' => 'destinationMarketplaces',
        'name' => 'name',
        'items' => 'items',
        'source_address' => 'sourceAddress',   
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_marketplaces' => 'setDestinationMarketplaces',
        'name' => 'setName',
        'items' => 'setItems',
        'source_address' => 'setSourceAddress',      
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_marketplaces' => 'getDestinationMarketplaces',
        'name' => 'getName',
        'items' => 'getItems',
        'source_address' => 'getSourceAddress', 
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
        $this->container['destination_marketplaces'] = isset($data['destination_marketplaces']) ? $data['destination_marketplaces'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['destination_marketplaces']) {
            $invalidProperties[] = "'destination_marketplaces' can't be null";
        }
        if (null === $this->container['items']) {
            $invalidProperties[] = "'items' can't be null";
        }
        if (null === $this->container['source_address']) {
            $invalidProperties[] = "'source_address' can't be null";
        }

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


    public function getDestinationMarketplaces()
    {
        return $this->container['destination_marketplaces'];
    }

    public function setDestinationMarketplaces($destination_marketplaces)
    {
        $this->container['destination_marketplaces'] = $destination_marketplaces;

        return $this;
    }


    public function getItems()
    {
        return $this->container['items'];
    }

    public function setItems($items)
    {
        $this->container['items'] = $items;

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

    public function getSourceAddress()
    {
        return $this->container['source_address'];
    }

    public function setSourceAddress($source_address)
    {
        $this->container['source_address'] = $source_address;

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
