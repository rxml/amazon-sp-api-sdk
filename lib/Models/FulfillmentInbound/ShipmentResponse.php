<?php
/**
 * ShipmentResponse.
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
 * ShipmentResponse Class Doc Comment.
 *

 * @description The response schema for the getShipments operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShipmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_reference_id' => 'string',    
        'contact_information' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ContactInformation',    
        'dates' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Dates',    
        'destination' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentDestination',
        'freight_information' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\FreightInformation',
        'name' => 'string',
        'placement_option_id' => 'string',
        'selected_delivery_window' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SelectedDeliveryWindow',
        'selected_transportation_option_id' => 'string',
        'self_ship_appointment_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SelfShipAppointmentDetailsList',
        'shipment_confirmation_id' => 'string',
        'shipment_id' => 'string',
        'source' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentSource',
        'status' => 'string',
        'tracking_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TrackingDetails',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_reference_id' => null,    
        'contact_information' => null,    
        'dates' => null,    
        'destination' => null,
        'freight_information' => null,
        'name' => null,
        'placement_option_id' => null,
        'selected_delivery_window' => null,
        'selected_transportation_option_id' => null,
        'self_ship_appointment_details' => null,
        'shipment_confirmation_id' => null,
        'shipment_id' => null,
        'source' => null,
        'status' => null,
        'tracking_details' => null,
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
        'amazon_reference_id' => 'amazonReferenceId',    
        'contact_information' => 'contactInformation',    
        'dates' => 'dates',    
        'destination' => 'destination',
        'freight_information' => 'freightInformation',
        'name' => 'name',
        'placement_option_id' => 'placementOptionId',
        'selected_delivery_window' => 'selectedDeliveryWindow',
        'selected_transportation_option_id' => 'selectedTransportationOptionId',
        'self_ship_appointment_details' => 'selfShipAppointmentDetails',
        'shipment_confirmation_id' => 'shipmentConfirmationId',
        'shipment_id' => 'shipmentId',
        'source' => 'source',
        'status' => 'status',
        'tracking_details' => 'trackingDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_reference_id' => 'setAmazonReferenceId',    
        'contact_information' => 'setContactInformation',    
        'dates' => 'setDates',    
        'destination' => 'setDestination',
        'freight_information' => 'setFreightInformation',
        'name' => 'setName',
        'placement_option_id' => 'setPlacementOptionId',
        'selected_delivery_window' => 'setSelectedDeliveryWindow',
        'selected_transportation_option_id' => 'setSelectedTransportationOptionId',
        'self_ship_appointment_details' => 'setSelfShipAppointmentDetails',
        'shipment_confirmation_id' => 'setShipmentConfirmationId',
        'shipment_id' => 'setShipmentId',
        'source' => 'setSource',
        'status' => 'setStatus',
        'tracking_details' => 'setTrackingDetails', 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_reference_id' => 'getAmazonReferenceId',    
        'contact_information' => 'getContactInformation',    
        'dates' => 'getDates',    
        'destination' => 'getDestination',
        'freight_information' => 'getFreightInformation',
        'name' => 'getName',
        'placement_option_id' => 'getPlacementOptionId',
        'selected_delivery_window' => 'getSelectedDeliveryWindow',
        'selected_transportation_option_id' => 'getSelectedTransportationOptionId',
        'self_ship_appointment_details' => 'getSelfShipAppointmentDetails',
        'shipment_confirmation_id' => 'getShipmentConfirmationId',
        'shipment_id' => 'getShipmentId',
        'source' => 'getSource',
        'status' => 'getStatus',
        'tracking_details' => 'getTrackingDetails', 
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
        $this->container['amazon_reference_id'] = isset($data['amazon_reference_id']) ? $data['amazon_reference_id'] : null;
        $this->container['contact_information'] = isset($data['contact_information']) ? $data['contact_information'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['freight_information'] = isset($data['freight_information']) ? $data['freight_information'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['placement_option_id'] = isset($data['placement_option_id']) ? $data['placement_option_id'] : null;
        $this->container['selected_delivery_window'] = isset($data['selected_delivery_window']) ? $data['selected_delivery_window'] : null;
        $this->container['selected_transportation_option_id'] = isset($data['selected_transportation_option_id']) ? $data['selected_transportation_option_id'] : null;
        $this->container['self_ship_appointment_details'] = isset($data['self_ship_appointment_details']) ? $data['self_ship_appointment_details'] : null;
        $this->container['shipment_confirmation_id'] = isset($data['shipment_confirmation_id']) ? $data['shipment_confirmation_id'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tracking_details'] = isset($data['tracking_details']) ? $data['tracking_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (null === $this->container['destination']) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if (null === $this->container['placement_option_id']) {
            $invalidProperties[] = "'placement_option_id' can't be null";
        }
        if (null === $this->container['shipment_id']) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if (null === $this->container['source']) {
            $invalidProperties[] = "'source' can't be null";
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

    public function getAmazonReferenceId()
    {
        return $this->container['amazon_reference_id'];
    }

    public function setAmazonReferenceId($amazon_reference_id)
    {
        $this->container['amazon_reference_id'] = $amazon_reference_id;

        return $this;
    }

    public function getContactInformation()
    {
        return $this->container['content_information_sSource'];
    }

    public function setContactInformation($content_information_sSource)
    {
        $this->container['content_information_sSource'] = $content_information_sSource;

        return $this;
    }

    public function getDates()
    {
        return $this->container['dates'];
    }

    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    public function getDestination()
    {
        return $this->container['destination'];
    }

    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

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

    public function getName()
    {
        return $this->container['name'];
    }

    public function setName($name)
    {
        $this->container['name'] = $name;

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

    public function getSelectedDeliveryWindow()
    {
        return $this->container['selected_delivery_window'];
    }

    public function setSelectedDeliveryWindow($selected_delivery_window)
    {
        $this->container['selected_delivery_window'] = $selected_delivery_window;

        return $this;
    }

    public function getSelectedTransportationOptionId()
    {
        return $this->container['selected_transportation_option_id'];
    }

    public function setSelectedTransportationOptionId($selected_transportation_option_id)
    {
        $this->container['selected_transportation_option_id'] = $selected_transportation_option_id;

        return $this;
    }

    public function getSelfShipAppointmentDetails()
    {
        return $this->container['self_ship_appointment_details'];
    }

    public function setSelfShipAppointmentDetails($self_ship_appointment_details)
    {
        $this->container['self_ship_appointment_details'] = $self_ship_appointment_details;

        return $this;
    }

    public function getShipmentConfirmationId()
    {
        return $this->container['shipment_confirmation_id'];
    }

    public function setShipmentConfirmationId($shipment_confirmation_id)
    {
        $this->container['shipment_confirmation_id'] = $shipment_confirmation_id;

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

    public function getSource()
    {
        return $this->container['source'];
    }

    public function setSource($source)
    {
        $this->container['source'] = $source;

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

    public function getTrackingDetails()
    {
        return $this->container['tracking_details'];
    }

    public function setTrackingDetails($tracking_details)
    {
        $this->container['tracking_details'] = $tracking_details;

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
