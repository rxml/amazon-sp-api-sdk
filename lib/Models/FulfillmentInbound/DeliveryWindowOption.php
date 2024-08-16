<?php
/**
 * DeliveryWindowOption.
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
 * Address Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class DeliveryWindowOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'DeliveryWindowOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'availability_type' => 'string',
        'delivery_window_option_id' => 'string',
        'end_date' => '\DateTime',
        'start_date' => '\DateTime',
        'valid_until' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'availability_type' => null,
        'delivery_window_option_id' => null,
        'end_date' => 'date-time',
        'start_date' => 'date-time',
        'valid_until' => 'date-time',
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
        'availability_type' => 'availabilityType',
        'delivery_window_option_id' => 'deliveryWindowOptionId',
        'end_date' => 'endDate',
        'start_date' => 'startDate',
        'valid_until' => 'validUntil',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'availability_type' => 'setAvailabilityType',
        'delivery_window_option_id' => 'setDeliveryWindowOptionId',
        'end_date' => 'setEndDate',
        'start_date' => 'setStartDate',
        'valid_until' => 'setValidUntil',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'availability_type' => 'getAvailabilityType',
        'delivery_window_option_id' => 'getDeliveryWindowOptionId',
        'end_date' => 'getEndDate',
        'start_date' => 'getStartDate',
        'valid_until' => 'getValidUntil',
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
        $this->container['availability_type'] = isset($data['availability_type']) ? $data['availability_type'] : null;
        $this->container['delivery_window_option_id'] = isset($data['delivery_window_option_id']) ? $data['delivery_window_option_id'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (null === $this->container['availability_type']) {
            $invalidProperties[] = "'availability_type' can't be null";
        }
        if (null === $this->container['delivery_window_option_id']) {
            $invalidProperties[] = "'delivery_window_option_id' can't be null";
        }
        if (null === $this->container['end_date']) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if (null === $this->container['start_date']) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if (null === $this->container['valid_until']) {
            $invalidProperties[] = "'valid_until' can't be null";
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

    public function getAvailabilityType()
    {
        return $this->container['availability_type'];
    }

    public function setAvailabilityType($availability_type)
    {
        $this->container['availability_type'] = $availability_type;

        return $this;
    }

    public function getDeliveryWindowOptionId()
    {
        return $this->container['delivery_window_option_id'];
    }

    public function setDeliveryWindowOptionId($delivery_window_option_id)
    {
        $this->container['delivery_window_option_id'] = $delivery_window_option_id;

        return $this;
    }

    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

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
