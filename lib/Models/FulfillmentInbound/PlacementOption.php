<?php
/**
 * PlacementOption.
 *
 * PHP version 7
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 202406
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Report Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PlacementOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PlacementOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'discounts' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\IncentiveList',
        'expiration' => '\DateTime',
        'fees' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\IncentiveList',
        'placement_option_id' => 'string',
        'shipment_ids' => 'string[]',
        'status' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'discounts' => null,
        'expiration' => 'date-time',
        'fees' => null,
        'placement_option_id' => null,
        'shipment_ids' => null,
        'status' => null,
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
        'discounts' => 'discounts',
        'expiration' => 'expiration',
        'fees' => 'fees',
        'placement_option_id' => 'placementOptionId',
        'shipment_ids' => 'shipmentIds',
        'status' => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'discounts' => 'setDiscounts',
        'expiration' => 'setExpiration',
        'fees' => 'setFees',
        'placement_option_id' => 'setPlacementOptionId',
        'shipment_ids' => 'setShipmentIds',
        'status' => 'setStatus',    
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'discounts' => 'getDiscounts',
        'expiration' => 'getExpiration',
        'fees' => 'getFees',
        'placement_option_id' => 'getPlacementOptionId',
        'shipment_ids' => 'getShipmentIds',
        'status' => 'getStatus',
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
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['placement_option_id'] = isset($data['placement_option_id']) ? $data['placement_option_id'] : null;
        $this->container['shipment_ids'] = isset($data['shipment_ids']) ? $data['shipment_ids'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['discounts']) {
            $invalidProperties[] = "'discounts' can't be null";
        }
        if (null === $this->container['fees']) {
            $invalidProperties[] = "'fees' can't be null";
        }
        if (null === $this->container['placement_option_id']) {
            $invalidProperties[] = "'placement_option_id' can't be null";
        }
        if (null === $this->container['shipment_ids']) {
            $invalidProperties[] = "'shipment_ids' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
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

    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    public function getFees()
    {
        return $this->container['fees'];
    }

    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    public function getPlacementOptionId()
    {
        return $this->container['placement_option_id'];
    }

    public function setPlacementOptionId($placement_option_id)
    {
        $this->container['placement_option_id'] = $placement_option_id;

        return $this;
    }

    public function getShipmentIds()
    {
        return $this->container['shipment_ids'];
    }

    public function setShipmentIds($shipment_ids)
    {
        $this->container['shipment_ids'] = $shipment_ids;

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
