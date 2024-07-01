<?php
/**
 * AddressInput.
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
class AddressInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AddressInput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'company_name' => 'string',
        'country_code' => 'string',
        'email' => 'string',
        'name' => 'string',
        'phone_number' => 'string',    
        'postal_code' => 'string',
        'state_or_province_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'city' => null,
        'company_name' => null,
        'country_code' => null,
        'email' => null,
        'name' => null,
        'phone_number' => null,    
        'postal_code' => null,
        'state_or_province_code' => null, 
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
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'city' => 'city',
        'company_name' => 'companyName',
        'country_code' => 'countryCode',
        'email' => 'email',
        'name' => 'name',
        'phone_number' => 'phoneNumber',    
        'postal_code' => 'postalCode',
        'state_or_province_code' => 'stateOrProvinceCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'company_name' => 'setCompanyName',
        'country_code' => 'setCountryCode',
        'email' => 'setEmail',
        'name' => 'setName',
        'phone_number' => 'setPhoneNumber',    
        'postal_code' => 'setPostalCode',
        'state_or_province_code' => 'setStateOrProvinceCode',  
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'company_name' => 'getCompanyName',
        'country_code' => 'getCountryCode',
        'email' => 'getEmail',
        'name' => 'getName',
        'phone_number' => 'getPhoneNumber',    
        'postal_code' => 'getPostalCode',
        'state_or_province_code' => 'getStateOrProvinceCode',  
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
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state_or_province_code'] = isset($data['state_or_province_code']) ? $data['state_or_province_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['name']) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (null === $this->container['address_line1']) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if (null === $this->container['city']) {
            $invalidProperties[] = "'city' can't be null";
        }
        if (null === $this->container['state_or_province_code']) {
            $invalidProperties[] = "'state_or_province_code' can't be null";
        }
        if (null === $this->container['country_code']) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if (null === $this->container['postal_code']) {
            $invalidProperties[] = "'postal_code' can't be null";
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
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name name of the individual or business
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1.
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param string $address_line1 the street address information
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2.
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param string $address_line2 additional street address information, if required
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Sets company_name.
     *
     * @param string $company_name the district or county
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_name.
     *
     * @param string $company_name the district or county
     *
     * @return $this
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Gets city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param string $city the city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_or_province_code.
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code.
     *
     * @param string $state_or_province_code The state or province code.  If state or province codes are used in your marketplace, it is recommended that you include one with your request. This helps Amazon to select the most appropriate Amazon fulfillment center for your inbound shipment plan.
     *
     * @return $this
     */
    public function setStateOrProvinceCode($state_or_province_code)
    {
        $this->container['state_or_province_code'] = $state_or_province_code;

        return $this;
    }

    /**
     * Gets country_code.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param string $country_code the country code in two-character ISO 3166-1 alpha-2 format
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param string $postal_code The postal code.  If postal codes are used in your marketplace, we recommended that you include one with your request. This helps Amazon select the most appropriate Amazon fulfillment center for the inbound shipment plan.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->container['email'];
    }

    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
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
