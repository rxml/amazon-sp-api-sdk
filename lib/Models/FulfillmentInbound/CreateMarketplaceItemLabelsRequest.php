<?php
/**
 * CreateMarketplaceItemLabelsRequest.
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
 * CreateMarketplaceItemLabelsRequest Class Doc Comment.
 *

 * @description The request schema for the createInboundPlan operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CreateMarketplaceItemLabelsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateMarketplaceItemLabelsRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'height' => 'string',
        'label_type' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrintType',
        'locale_code' => 'string',
        'marketplace_id' => 'string',
        'msku_quantities' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\MskuQuantityList',
        'page_type' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ItemLabelPageType',
        'width' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'height' => null,
        'label_type' => null,
        'locale_code' => null,
        'marketplace_id' => null,
        'msku_quantities' => null,
        'page_type' => null,
        'width' => null,
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
        'height' => 'height',
        'label_type' => 'labelType',
        'locale_code' => 'localeCode',
        'marketplace_id' => 'marketplaceId',
        'msku_quantities' => 'mskuQuantities',
        'page_type' => 'pageType',
        'width' => 'width',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'label_type' => 'setLabelType',
        'locale_code' => 'setLocaleCode',
        'marketplace_id' => 'setMarketplaceId',
        'msku_quantities' => 'setMskuQuantities',
        'page_type' => 'setPageType',
        'width' => 'setWidth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'label_type' => 'getLabelType',
        'locale_code' => 'getLocaleCode',
        'marketplace_id' => 'getMarketplaceId',
        'msku_quantities' => 'getMskuQuantities',
        'page_type' => 'getPageType',
        'width' => 'getWidth',
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
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['label_type'] = isset($data['label_type']) ? $data['label_type'] : null;
        $this->container['locale_code'] = isset($data['locale_code']) ? $data['locale_code'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['msku_quantities'] = isset($data['msku_quantities']) ? $data['msku_quantities'] : null;
        $this->container['page_type'] = isset($data['page_type']) ? $data['page_type'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (null === $this->container['label_type']) {
            $invalidProperties[] = "'label_type' can't be null";
        }
        if (null === $this->container['marketplace_id']) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if (null === $this->container['msku_quantities']) {
            $invalidProperties[] = "'msku_quantities' can't be null";
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

    public function getHeight()
    {
        return $this->container['height'];
    }

    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    public function getLabelType()
    {
        return $this->container['label_type'];
    }

    public function setLabelType($label_type)
    {
        $this->container['label_type'] = $label_type;

        return $this;
    }

    public function getLocaleCode()
    {
        return $this->container['locale_code'];
    }

    public function setLocaleCode($locale_code)
    {
        $this->container['locale_code'] = $locale_code;

        return $this;
    }

    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    public function getMskuQuantities()
    {
        return $this->container['msku_quantities'];
    }

    public function setMskuQuantities($msku_quantities)
    {
        $this->container['msku_quantities'] = $msku_quantities;

        return $this;
    }

    public function getPageType()
    {
        return $this->container['page_type'];
    }

    public function setPageType($page_type)
    {
        $this->container['page_type'] = $page_type;

        return $this;
    }

    public function getWidth()
    {
        return $this->container['width'];
    }

    public function setWidth($width)
    {
        $this->container['width'] = $width;

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
