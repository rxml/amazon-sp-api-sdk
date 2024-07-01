<?php
/**
 * Box.
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
class Box implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Box';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'box_id' => 'string',
        'content_information_source' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentInformationSource',
        'destination_region' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Region',
        'dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DimensionsInput',
        'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ItemList',
        'package_id' => 'string',
        'quantity' => 'string',
        'template_name' => 'string',
        'weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\WeightInput',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'box_id' => null,
        'content_information_source' => null,
        'destination_region' => null,
        'dimensions' => null,
        'items' => null,
        'package_id' => null,
        'quantity' => null,
        'template_name' => null,
        'weight' => null,
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
        'box_id' => 'boxId',
        'content_information_source' => 'contentInformationSource',
        'destination_region' => 'destinationRegion',
        'dimensions' => 'dimensions',
        'items' => 'items',
        'package_id' => 'packageId',
        'quantity' => 'quantity',
        'template_name' => 'templateName',
        'weight' => 'weight',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'box_id' => 'setBoxId',
        'content_information_source' => 'setContentInformationSource',
        'destination_region' => 'setDestinationRegion',
        'dimensions' => 'setDimensions',
        'items' => 'setItems',
        'package_id' => 'setPackageId',
        'quantity' => 'setQuantity',
        'template_name' => 'setTemplateName',
        'weight' => 'setWeight',  
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'box_id' => 'getBoxId',
        'content_information_source' => 'getContentInformationSource',
        'destination_region' => 'getDestinationRegion',
        'dimensions' => 'getDimensions',
        'items' => 'getItems',
        'package_id' => 'getPackageId',
        'quantity' => 'getQuantity',
        'template_name' => 'getTemplateName',
        'weight' => 'getWeight',  
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
        $this->container['box_id'] = isset($data['box_id']) ? $data['box_id'] : null;
        $this->container['content_information_source'] = isset($data['content_information_source']) ? $data['content_information_source'] : null;
        $this->container['destination_region'] = isset($data['destination_region']) ? $data['destination_region'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['package_id'] = isset($data['package_id']) ? $data['package_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['package_id']) {
            $invalidProperties[] = "'package_id' can't be null";
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

    public function getBoxId()
    {
        return $this->container['box_id'];
    }

    public function setBoxId($box_id)
    {
        $this->container['box_id'] = $box_id;

        return $this;
    }

    public function getContentInformationSource()
    {
        return $this->container['content_information_sSource'];
    }

    public function setContentInformationSource($content_information_sSource)
    {
        $this->container['content_information_sSource'] = $content_information_sSource;

        return $this;
    }

    public function getDestinationRegion()
    {
        return $this->container['destination_region'];
    }

    public function setDestinationRegion($destination_region)
    {
        $this->container['destination_region'] = $destination_region;

        return $this;
    }

    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

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

    public function getPackageId()
    {
        return $this->container['package_id'];
    }

    public function setPackageId($package_id)
    {
        $this->container['package_id'] = $package_id;

        return $this;
    }

    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    public function getWeight()
    {
        return $this->container['weight'];
    }

    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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
