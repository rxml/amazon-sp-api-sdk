<?php
/**
 * FeedDocument.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Feeds.
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Feeds;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FeedDocument Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FeedDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeedDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'feedDocumentId' => 'string',
'url' => 'string',
'compressionAlgorithm' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'feedDocumentId' => null,
'url' => null,
'compressionAlgorithm' => null,    ];

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
        'feedDocumentId' => 'feedDocumentId',
'url' => 'url',
'compressionAlgorithm' => 'compressionAlgorithm',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'feedDocumentId' => 'setFeedDocumentId',
'url' => 'setUrl',
'compressionAlgorithm' => 'setCompressionAlgorithm',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'feedDocumentId' => 'getFeedDocumentId',
'url' => 'getUrl',
'compressionAlgorithm' => 'getCompressionAlgorithm',    ];

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

    const compressionAlgorithm_GZIP = 'GZIP';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues()
    {
        return [
            self::compressionAlgorithm_GZIP,        ];
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
        $this->container['feedDocumentId'] = isset($data['feedDocumentId']) ? $data['feedDocumentId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['compressionAlgorithm'] = isset($data['compressionAlgorithm']) ? $data['compressionAlgorithm'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['feedDocumentId']) {
            $invalidProperties[] = "'feedDocumentId' can't be null";
        }
        if (null === $this->container['url']) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($this->container['compressionAlgorithm']) && !in_array($this->container['compressionAlgorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compressionAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

    /**
     * Gets feedDocumentId.
     *
     * @return string
     */
    public function getFeedDocumentId()
    {
        return $this->container['feedDocumentId'];
    }

    /**
     * Sets feedDocumentId.
     *
     * @param string $feedDocumentId The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setFeedDocumentId($feedDocumentId)
    {
        $this->container['feedDocumentId'] = $feedDocumentId;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url A presigned URL for the feed document. This URL expires after 5 minutes.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets compressionAlgorithm.
     *
     * @return string
     */
    public function getCompressionAlgorithm()
    {
        return $this->container['compressionAlgorithm'];
    }

    /**
     * Sets compressionAlgorithm.
     *
     * @param string $compressionAlgorithm if present, the feed document contents are compressed using the indicated algorithm
     *
     * @return $this
     */
    public function setCompressionAlgorithm($compressionAlgorithm)
    {
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($compressionAlgorithm) && !in_array($compressionAlgorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compressionAlgorithm', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['compressionAlgorithm'] = $compressionAlgorithm;

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
