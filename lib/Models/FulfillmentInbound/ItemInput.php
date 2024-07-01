<?php
/**
 * ItemInput.
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
class ItemInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemInput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'expiration' => 'string',
        'label_owner' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelOwner',
        'manufacturing_lot_code' => 'string',
        'msku' => 'string',
        'prep_owner' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepOwner',
        'quantity' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'expiration' => null,
        'label_owner' => null,
        'manufacturing_lot_code' => null,
        'msku' => null,
        'prep_owner' => null,
        'quantity' => null,
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
        'expiration' => 'expiration',
        'label_owner' => 'labelOwner',
        'manufacturing_lot_code' => 'manufacturingLotCode',
        'msku' => 'msku',
        'prep_owner' => 'prepOwner',
        'quantity' => 'quantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'expiration' => 'setExpiration',
        'label_owner' => 'setLabelOwner',
        'manufacturing_lot_code' => 'setManufacturingLotCode',
        'msku' => 'setMsku',
        'prep_owner' => 'setPrepOwner',
        'quantity' => 'setQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'expiration' => 'getExpiration',
        'label_owner' => 'getLabelOwner',
        'manufacturing_lot_code' => 'getManufacturingLotCode',
        'msku' => 'getMsku',
        'prep_owner' => 'getPrepOwner',
        'quantity' => 'getQuantity',
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
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['label_owner'] = isset($data['label_owner']) ? $data['label_owner'] : null;
        $this->container['manufacturing_lot_code'] = isset($data['manufacturing_lot_code']) ? $data['manufacturing_lot_code'] : null;
        $this->container['msku'] = isset($data['msku']) ? $data['msku'] : null;
        $this->container['prep_owner'] = isset($data['prep_owner']) ? $data['prep_owner'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['label_owner']) {
            $invalidProperties[] = "'label_owner' can't be null";
        }
        if (null === $this->container['msku']) {
            $invalidProperties[] = "'msku' can't be null";
        }
        if (null === $this->container['prep_owner']) {
            $invalidProperties[] = "'prep_owner' can't be null";
        }
        if (null === $this->container['quantity']) {
            $invalidProperties[] = "'quantity' can't be null";
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

    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    public function getLabelOwner()
    {
        return $this->container['label_owner'];
    }

    public function setLabelOwner($label_owner)
    {
        $this->container['label_owner'] = $label_owner;

        return $this;
    }


    public function getManufacturingLotCode()
    {
        return $this->container['manufacturing_lot_code'];
    }

    public function setManufacturingLotCode($manufacturing_lot_code)
    {
        $this->container['manufacturing_lot_code'] = $manufacturing_lot_code;

        return $this;
    }


    public function getMsku()
    {
        return $this->container['msku'];
    }

    public function setMsku($msku)
    {
        $this->container['msku'] = $msku;

        return $this;
    }

    public function getPrepOwner()
    {
        return $this->container['prep_owner'];
    }

    public function setPrepOwner($prep_owner)
    {
        $this->container['prep_owner'] = $prep_owner;

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
