<?php
/**
 * InboundPlanSummary.
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
class InboundPlanSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InboundPlanSummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'last_updated_at' => '\DateTime',
        'inbound_plan_id' => 'string',
        'marketplace_ids' => 'string[]',
        'name' => 'string',
        'source_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\AddressInput',
        'status' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'created_at' => 'date-time',
        'last_updated_at' => 'date-time',
        'inbound_plan_id' => null,
        'marketplace_ids' => null,
        'name' => null,
        'source_address' => null,
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
        'created_at' => 'createdAt',
        'last_updated_at' => 'lastUpdatedAt',
        'inbound_plan_id' => 'inboundPlanId',
        'marketplace_ids' => 'marketplaceIds',
        'name' => 'name',
        'source_address' => 'sourceAddress',
        'status' => 'status',     
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'last_updated_at' => 'setLastUpdatedAt',
        'inbound_plan_id' => 'setInboundPlanId',
        'marketplace_ids' => 'setMarketplaceIds',
        'name' => 'setName',
        'source_address' => 'setSourceAddress',
        'status' => 'setStatus',      
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'last_updated_at' => 'getLastUpdatedAt',
        'inbound_plan_id' => 'getInboundPlanId',
        'marketplace_ids' => 'getMarketplaceIds',
        'name' => 'getName',
        'source_address' => 'getSourceAddress',
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

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_VOIDED = 'VOIDED';
    const STATUS_SHIPPED = 'SHIPPED';
    const STATUS_ERRORED = 'ERRORED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_VOIDED,
            self::STATUS_SHIPPED,
            self::STATUS_ERRORED,
        ];
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['last_updated_at'] = isset($data['last_updated_at']) ? $data['last_updated_at'] : null;
        $this->container['inbound_plan_id'] = isset($data['inbound_plan_id']) ? $data['inbound_plan_id'] : null;
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
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

        if (null === $this->container['inbound_plan_id']) {
            $invalidProperties[] = "'inbound_plan_id' can't be null";
        }
        if (null === $this->container['last_updated_at']) {
            $invalidProperties[] = "'last_updated_at' can't be null";
        }
        if (null === $this->container['created_at']) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if (null === $this->container['marketplace_ids']) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if (null === $this->container['name']) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (null === $this->container['source_address']) {
            $invalidProperties[] = "'source_address' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
        }
        // $allowedValues = $this->getStatusAllowableValues();
        // if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
        //     $invalidProperties[] = sprintf(
        //         "invalid value for 'status', must be one of '%s'",
        //         implode("', '", $allowedValues)
        //     );
        // }

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

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids a list of marketplace identifiers for the report
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    public function getInboundPlanId()
    {
        return $this->container['inbound_plan_id'];
    }

    public function setInboundPlanId($inbound_plan_id)
    {
        $this->container['inbound_plan_id'] = $inbound_plan_id;

        return $this;
    }

    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    public function getLastUpdatedAt()
    {
        return $this->container['last_updated_at'];
    }

    public function setLastUpdatedAt($last_updated_at)
    {
        $this->container['last_updated_at'] = $last_updated_at;

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
