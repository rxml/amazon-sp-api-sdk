<?php
/**
 * ShipmentTransportationConfiguration.
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
class ShipmentTransportationConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentTransportationConfiguration';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'contact_information' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ContactInformation',
        'freight_information' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\FreightInformation',
        'pallets' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PalletInputList',
        'ready_to_ship_window' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\WindowInput',
        'shipment_id' => 'string',
        
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'contact_information' => null,
        'freight_information' => null,
        'pallets' => null,
        'ready_to_ship_window' => null,
        'shipment_id' => null,
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
        'contact_information' => 'contactInformation',
        'freight_information' => 'freightInformation',
        'pallets' => 'pallets',
        'ready_to_ship_window' => 'readyToShipWindow',
        'shipment_id' => 'shipmentId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_information' => 'setContactInformation',
        'freight_information' => 'setFreightInformation',
        'pallets' => 'setPallets',
        'ready_to_ship_window' => 'setReadyToShipWindow',
        'shipment_id' => 'setShipmentId',  
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_information' => 'getContactInformation',
        'freight_information' => 'getFreightInformation',
        'pallets' => 'getPallets',
        'ready_to_ship_window' => 'getReadyToShipWindow',
        'shipment_id' => 'getShipmentId',  
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
        $this->container['contact_information'] = isset($data['contact_information']) ? $data['contact_information'] : null;
        $this->container['freight_information'] = isset($data['freight_information']) ? $data['freight_information'] : null;
        $this->container['pallets'] = isset($data['pallets']) ? $data['pallets'] : null;
        $this->container['ready_to_ship_window'] = isset($data['ready_to_ship_window']) ? $data['ready_to_ship_window'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['ready_to_ship_window']) {
            $invalidProperties[] = "'ready_to_ship_window' can't be null";
        }
        if (null === $this->container['shipment_id']) {
            $invalidProperties[] = "'shipment_id' can't be null";
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

    public function getContactInformation()
    {
        return $this->container['contact_information'];
    }

    public function setContactInformation($contact_information)
    {
        $this->container['contact_information'] = $contact_information;

        return $this;
    }

    public function getFreightInformation()
    {
        return $this->container['freight_information'];
    }

    public function setFreightInformation($freight_information)
    {
        $this->container['freight_information'] = $freight_information;

        return $this;
    }

    public function getPallets()
    {
        return $this->container['pallets'];
    }

    public function setPallets($pallets)
    {
        $this->container['pallets'] = $pallets;

        return $this;
    }

    public function getReadyToShipWindow()
    {
        return $this->container['ready_to_ship_window'];
    }

    public function setReadyToShipWindow($ready_to_ship_window)
    {
        $this->container['ready_to_ship_window'] = $ready_to_ship_window;

        return $this;
    }

    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

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
