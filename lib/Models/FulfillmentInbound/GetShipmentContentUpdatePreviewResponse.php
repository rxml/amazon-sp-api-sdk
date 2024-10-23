<?php
/**
 * GetShipmentContentUpdatePreviewResponse.
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
class GetShipmentContentUpdatePreviewResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetShipmentContentUpdatePreviewResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'content_update_preview_id' => 'string',
        'expiration' => 'string',
        'requested_updates' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\RequestedUpdates',
        'transportation_option' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportationOption',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'content_update_preview_id' => null,
        'expiration' => null,
        'requested_updates' => null,
        'transportation_option' => null,
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
        'content_update_preview_id' => 'contentUpdatePreviewId',
        'expiration' => 'expiration',
        'requested_updates' => 'requestedUpdates',
        'transportation_option' => 'transportationOption',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'content_update_preview_id' => 'setContentUpdatePreviewId',
        'expiration' => 'setExpiration',
        'requested_updates' => 'setRequestedUpdates',
        'transportation_option' => 'setTransportationOption',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'content_update_preview_id' => 'getContentUpdatePreviewId',
        'expiration' => 'getExpiration',
        'requested_updates' => 'getRequestedUpdates',
        'transportation_option' => 'getTransportationOption',
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

        $this->container['content_update_preview_id'] = isset($data['content_update_preview_id']) ? $data['content_update_preview_id'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['requested_updates'] = isset($data['requested_updates']) ? $data['requested_updates'] : null;
        $this->container['transportation_option'] = isset($data['transportation_option']) ? $data['transportation_option'] : null;
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
        if (null === $this->container['content_update_preview_id']) {
            $invalidProperties[] = "'content_update_preview_id' can't be null";
        }
        if (null === $this->container['expiration']) {
            $invalidProperties[] = "'expiration' can't be null";
        }
        if (null === $this->container['requested_updates']) {
            $invalidProperties[] = "'requested_updates' can't be null";
        }
        if (null === $this->container['transportation_option']) {
            $invalidProperties[] = "'transportation_option' can't be null";
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

    public function getContentUpdatePreviewId()
    {
        return $this->container['content_update_preview_id'];
    }

    public function setContentUpdatePreviewId($content_update_preview_id)
    {
        $this->container['content_update_preview_id'] = $content_update_preview_id;

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

    public function getRequestedUpdates()
    {
        return $this->container['requested_updates'];
    }

    public function setRequestedUpdates($requested_updates)
    {
        $this->container['requested_updates'] = $requested_updates;

        return $this;
    }

    public function getTransportationOption()
    {
        return $this->container['transportation_option'];
    }

    public function setTransportationOption($transportation_option)
    {
        $this->container['transportation_option'] = $transportation_option;

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
