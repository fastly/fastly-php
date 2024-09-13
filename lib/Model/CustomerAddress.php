<?php
/**
 * CustomerAddress
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;

use \ArrayAccess;
use \Fastly\ObjectSerializer;

/**
 * CustomerAddress Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomerAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'customer_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'type' => 'string',
        'address_1' => 'string',
        'address_2' => 'string',
        'locality' => 'string',
        'region' => 'string',
        'country' => 'string',
        'postal_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'type' => null,
        'address_1' => null,
        'address_2' => null,
        'locality' => null,
        'region' => null,
        'country' => null,
        'postal_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyTypes()
    {
        return self::$fastlyTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyFormats()
    {
        return self::$fastlyFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'address_1' => 'address_1',
        'address_2' => 'address_2',
        'locality' => 'locality',
        'region' => 'region',
        'country' => 'country',
        'postal_code' => 'postal_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'address_1' => 'setAddress1',
        'address_2' => 'setAddress2',
        'locality' => 'setLocality',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'postal_code' => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'address_1' => 'getAddress1',
        'address_2' => 'getAddress2',
        'locality' => 'getLocality',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'postal_code' => 'getPostalCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
        return self::$fastlyModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = $data['type'] ?? null;
        $this->container['address_1'] = $data['address_1'] ?? null;
        $this->container['address_2'] = $data['address_2'] ?? null;
        $this->container['locality'] = $data['locality'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['type']) && !preg_match("/^(tax|billing)$/", $this->container['type'])) {
            $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(tax|billing)$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the address.
     *
     * @return self
     */
    public function setType($type)
    {

        if (!is_null($type) && (!preg_match("/^(tax|billing)$/", $type))) {
            throw new \InvalidArgumentException("invalid value for $type when calling CustomerAddress., must conform to the pattern /^(tax|billing)$/.");
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets address_1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address_1'];
    }

    /**
     * Sets address_1
     *
     * @param string|null $address_1 The street number and name of the address.
     *
     * @return self
     */
    public function setAddress1($address_1)
    {
        $this->container['address_1'] = $address_1;

        return $this;
    }

    /**
     * Gets address_2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address_2'];
    }

    /**
     * Sets address_2
     *
     * @param string|null $address_2 Additional address line for unit number, P.O. Box, etc.
     *
     * @return self
     */
    public function setAddress2($address_2)
    {
        $this->container['address_2'] = $address_2;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality City, town, or locality name the address is located.
     *
     * @return self
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region State, province, or region of the address.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country ISO 3166-1 alpha-2 country code (e.g., \"US\", \"CA\", \"NZ\")
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal or Zip code of the address.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


