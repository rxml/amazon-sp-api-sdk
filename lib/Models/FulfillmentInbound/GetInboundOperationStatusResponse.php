<?php
/**
 * GetInboundOperationStatusResponse.
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
 * GetInboundOperationStatusResponse Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetInboundOperationStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetInboundOperationStatusResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'operation' => 'string',
        'operation_id' => 'string',
        'operation_problems' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationProblemList',
        'operation_status' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OperationStatus',
        'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ErrorList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'operation' => null,
        'operation_id' => null,
        'operation_problems' => null,
        'operation_status' => null,
        'errors' => null,
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
        'operation' => 'operation',
        'operation_id' => 'operationId',
        'operation_problems' => 'operationProblems',
        'operation_status' => 'operationStatus',
        'errors' => 'errors',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'operation' => 'setOperation',
        'operation_id' => 'setOperationId',
        'operation_problems' => 'setOperationProblems',
        'operation_status' => 'setOperationStatus',
        'errors' => 'setErrors',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'operation' => 'getOperation',
        'operation_id' => 'getOperationId',
        'operation_problems' => 'getOperationProblems',
        'operation_status' => 'getOperationStatus',
        'errors' => 'getErrors',
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['operation_id'] = isset($data['operation_id']) ? $data['operation_id'] : null;
        $this->container['operation_problems'] = isset($data['operation_problems']) ? $data['operation_problems'] : null;
        $this->container['operation_status'] = isset($data['operation_status']) ? $data['operation_status'] : null;
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
        if (null === $this->container['operation']) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if (null === $this->container['operation_id']) {
            $invalidProperties[] = "'operation_id' can't be null";
        }
        if (null === $this->container['operation_problems']) {
            $invalidProperties[] = "'operation_problems' can't be null";
        }
        if (null === $this->container['operation_status']) {
            $invalidProperties[] = "'operation_status' can't be null";
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

    public function getOperation()
    {
        return $this->container['operation'];
    }

    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    public function getOperationProblems()
    {
        return $this->container['operation_problems'];
    }

    public function setOperationProblems($operation_problems)
    {
        $this->container['operation_problems'] = $operation_problems;

        return $this;
    }

    public function getOperationStatus()
    {
        return $this->container['operation_status'];
    }

    public function setOperationStatus($operation_status)
    {
        $this->container['operation_status'] = $operation_status;

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
