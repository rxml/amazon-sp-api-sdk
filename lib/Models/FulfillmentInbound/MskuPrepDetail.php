<?php
/**
 * MskuPrepDetail.
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
 * MskuPrepDetail Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class MskuPrepDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'MskuPrepDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'all_owners_constraint' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\AllOwnersConstraint',
        'label_owner_constraint' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OwnerConstraint',
        'msku' => 'string',
        'prep_category' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepCategory',
        'prep_owner_constraint' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\OwnerConstraint',
        'prep_types' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepTypeList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'all_owners_constraint' => null,
        'label_owner_constraint' => null,
        'msku' => null,
        'prep_category' => null,
        'prep_owner_constraint' => null,
        'prep_types' => null,
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
        'all_owners_constraint' => 'allOwnersConstraint',
        'label_owner_constraint' => 'labelOwnerConstraint',
        'msku' => 'msku',
        'prep_category' => 'prepCategory',
        'prep_owner_constraint' => 'prepOwnerConstraint',
        'prep_types' => 'prepTypes',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'all_owners_constraint' => 'setAllOwnersConstraint',
        'label_owner_constraint' => 'setLabelOwnerConstraint',
        'msku' => 'setMsku',
        'prep_category' => 'setPrepCategory',
        'prep_owner_constraint' => 'setPrepOwnerConstraint',
        'prep_types' => 'setPrepTypes',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'all_owners_constraint' => 'getAllOwnersConstraint',
        'label_owner_constraint' => 'getLabelOwnerConstraint',
        'msku' => 'getMsku',
        'prep_category' => 'getPrepCategory',
        'prep_owner_constraint' => 'getPrepOwnerConstraint',
        'prep_types' => 'getPrepTypes',
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
        $this->container['all_owners_constraint'] = isset($data['all_owners_constraint']) ? $data['all_owners_constraint'] : null;
        $this->container['label_owner_constraint'] = isset($data['label_owner_constraint']) ? $data['label_owner_constraint'] : null;
        $this->container['msku'] = isset($data['msku']) ? $data['msku'] : null;
        $this->container['prep_category'] = isset($data['prep_category']) ? $data['prep_category'] : null;
        $this->container['prep_owner_constraint'] = isset($data['prep_owner_constraint']) ? $data['prep_owner_constraint'] : null;
        $this->container['prep_types'] = isset($data['prep_types']) ? $data['prep_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (null === $this->container['msku']) {
            $invalidProperties[] = "'msku' can't be null";
        }
        if (null === $this->container['prep_category']) {
            $invalidProperties[] = "'prep_category' can't be null";
        }
        if (null === $this->container['prep_types']) {
            $invalidProperties[] = "'prep_types' can't be null";
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

    public function getMsku()
    {
        return $this->container['msku'];
    }

    public function setMsku($msku)
    {
        $this->container['msku'] = $msku;

        return $this;
    }

    public function getAllOwnersConstraint()
    {
        return $this->container['all_owners_constraint'];
    }

    public function setAllOwnersConstraint($all_owners_constraint)
    {
        $this->container['all_owners_constraint'] = $all_owners_constraint;

        return $this;
    }

    public function getLabelOwnerConstraint()
    {
        return $this->container['label_owner_constraint'];
    }

    public function setLabelOwnerConstraint($label_owner_constraint)
    {
        $this->container['label_owner_constraint'] = $label_owner_constraint;

        return $this;
    }

    public function getPrepCategory()
    {
        return $this->container['prep_category'];
    }

    public function setPrepCategory($prep_category)
    {
        $this->container['prep_category'] = $prep_category;

        return $this;
    }

    public function getPrepOwnerConstraint()
    {
        return $this->container['prep_owner_constraint'];
    }

    public function setPrepOwnerConstraint($prep_owner_constraint)
    {
        $this->container['prep_owner_constraint'] = $prep_owner_constraint;

        return $this;
    }

    public function getPrepTypes()
    {
        return $this->container['prep_types'];
    }

    public function setPrepTypes($prep_types)
    {
        $this->container['prep_types'] = $prep_types;

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
