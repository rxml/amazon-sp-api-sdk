<?php
/**
 * PackingOption.
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
class PackingOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PackingOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'discounts' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\IncentiveList',
        'expiration' => '\DateTime',
        'fees' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\IncentiveList',
        'packing_groups' => 'string[]',
        'packing_option_id' => 'string',
        'status' => 'string',
        'supported_shipping_configurations' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShippingConfigurationList',
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
        'packing_groups' => null,
        'packing_option_id' => null,
        'status' => null,
        'supported_shipping_configurations' => null,
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
        'packing_groups' => 'packingGroups',
        'packing_option_id' => 'packingOptionId',
        'status' => 'status',
        'supported_shipping_configurations' => 'supportedShippingConfigurations',
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
        'packing_groups' => 'setPackingGroups',
        'packing_option_id' => 'setPackingOptionId',
        'status' => 'setStatus',
        'supported_shipping_configurations' => 'setSupportedShippingConfigurations',    
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
        'packing_groups' => 'getPackingGroups',
        'packing_option_id' => 'getPackingOptionId',
        'status' => 'getStatus',
        'supported_shipping_configurations' => 'getSupportedShippingConfigurations',   
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
        $this->container['packing_groups'] = isset($data['packing_groups']) ? $data['packing_groups'] : null;
        $this->container['packing_option_id'] = isset($data['packing_option_id']) ? $data['packing_option_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['supported_shipping_configurations'] = isset($data['supported_shipping_configurations']) ? $data['supported_shipping_configurations'] : null;
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
        if (null === $this->container['packing_groups']) {
            $invalidProperties[] = "'packing_groups' can't be null";
        }
        if (null === $this->container['packing_option_id']) {
            $invalidProperties[] = "'packing_option_id' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (null === $this->container['supported_shipping_configurations']) {
            $invalidProperties[] = "'supported_shipping_configurations' can't be null";
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

    public function getPackingGroups()
    {
        return $this->container['packing_groups'];
    }

    public function setPackingGroups($packing_groups)
    {
        $this->container['packing_groups'] = $packing_groups;

        return $this;
    }

    public function getPackingOptionId()
    {
        return $this->container['packing_option_id'];
    }

    public function setPackingOptionId($packing_option_id)
    {
        $this->container['packing_option_id'] = $packing_option_id;

        return $this;
    }

    public function getSupportedShippingConfigurations()
    {
        return $this->container['supported_shipping_configurations'];
    }

    public function setSupportedShippingConfigurations($supported_shipping_configurations)
    {
        $this->container['supported_shipping_configurations'] = $supported_shipping_configurations;

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
