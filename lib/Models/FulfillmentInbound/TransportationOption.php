<?php
/**
 * TransportationOption.
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
class TransportationOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TransportationOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'carrier' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Carrier',
        'carrier_appointment' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\CarrierAppointment',
        'preconditions' => 'string[]',
        'quote' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quote',
        'shipment_id' => 'string',
        'shipping_mode' => 'string',
        'shipping_solution' => 'string',
        'transportation_option_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'carrier' => null,
        'carrier_appointment' => null,
        'preconditions' => null,
        'quote' => null,
        'shipment_id' => null,
        'shipping_mode' => null,
        'shipping_solution' => null,
        'transportation_option_id' => null,
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
        'carrier' => 'carrier',
        'carrier_appointment' => 'carrierAppointment',
        'preconditions' => 'preconditions',
        'quote' => 'quote',
        'shipment_id' => 'shipmentId',
        'shipping_mode' => 'shippingMode',
        'shipping_solution' => 'shippingSolution',
        'transportation_option_id' => 'transportationOptionId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier' => 'setCarrier',
        'carrier_appointment' => 'setCarrierAppointment',
        'preconditions' => 'setPreconditions',
        'quote' => 'setQuote',
        'shipment_id' => 'setShipmentId',
        'shipping_mode' => 'setShippingMode',
        'shipping_solution' => 'setShippingSolution',
        'transportation_option_id' => 'setTransportationOptionId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier' => 'getCarrier',
        'carrier_appointment' => 'getCarrierAppointment',
        'preconditions' => 'getPreconditions',
        'quote' => 'getQuote',
        'shipment_id' => 'getShipmentId',
        'shipping_mode' => 'getShippingMode',
        'shipping_solution' => 'getShippingSolution',
        'transportation_option_id' => 'getTransportationOptionId',
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

        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['carrier_appointment'] = isset($data['carrier_appointment']) ? $data['carrier_appointment'] : null;
        $this->container['preconditions'] = isset($data['preconditions']) ? $data['preconditions'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['shipping_mode'] = isset($data['shipping_mode']) ? $data['shipping_mode'] : null;
        $this->container['shipping_solution'] = isset($data['shipping_solution']) ? $data['shipping_solution'] : null;
        $this->container['transportation_option_id'] = isset($data['transportation_option_id']) ? $data['transportation_option_id'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (null === $this->container['carrier']) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        if (null === $this->container['preconditions']) {
            $invalidProperties[] = "'preconditions' can't be null";
        }
        if (null === $this->container['shipment_id']) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if (null === $this->container['shipping_mode']) {
            $invalidProperties[] = "'shipping_mode' can't be null";
        }
        if (null === $this->container['shipping_solution']) {
            $invalidProperties[] = "'shipping_solution' can't be null";
        }
        if (null === $this->container['transportation_option_id']) {
            $invalidProperties[] = "'transportation_option_id' can't be null";
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

    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    public function getCarrierAppointment()
    {
        return $this->container['carrier_appointment'];
    }

    public function setCarrierAppointment($carrier_appointment)
    {
        $this->container['carrier_appointment'] = $carrier_appointment;

        return $this;
    }

    public function getPreconditions()
    {
        return $this->container['preconditions'];
    }

    public function setPreconditions($preconditions)
    {
        $this->container['preconditions'] = $preconditions;

        return $this;
    }

    public function getQuote()
    {
        return $this->container['quote'];
    }

    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

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

    public function getShippingMode()
    {
        return $this->container['shipping_mode'];
    }

    public function setShippingMode($shipping_mode)
    {
        $this->container['shipping_mode'] = $shipping_mode;

        return $this;
    }

    public function getShippingSolution()
    {
        return $this->container['shipping_solution'];
    }

    public function setShippingSolution($shipping_solution)
    {
        $this->container['shipping_solution'] = $shipping_solution;

        return $this;
    }

    public function getTransportationOptionId()
    {
        return $this->container['transportation_option_id'];
    }

    public function setTransportationOptionId($transportation_option_id)
    {
        $this->container['transportation_option_id'] = $transportation_option_id;

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
