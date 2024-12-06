<?php
/**
 * LogInsightsDimensionAttributes
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
 * LogInsightsDimensionAttributes Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LogInsightsDimensionAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'log_insights_dimension_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'rate' => 'float',
        'country_chr' => 'float',
        'country_error_rate' => 'float',
        'country_request_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'rate' => 'float',
        'country_chr' => 'float',
        'country_error_rate' => 'float',
        'country_request_rate' => 'float'
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
        'rate' => 'rate',
        'country_chr' => 'country_chr',
        'country_error_rate' => 'country_error_rate',
        'country_request_rate' => 'country_request_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rate' => 'setRate',
        'country_chr' => 'setCountryChr',
        'country_error_rate' => 'setCountryErrorRate',
        'country_request_rate' => 'setCountryRequestRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rate' => 'getRate',
        'country_chr' => 'getCountryChr',
        'country_error_rate' => 'getCountryErrorRate',
        'country_request_rate' => 'getCountryRequestRate'
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
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['country_chr'] = $data['country_chr'] ?? null;
        $this->container['country_error_rate'] = $data['country_error_rate'] ?? null;
        $this->container['country_request_rate'] = $data['country_request_rate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate The rate at which the value in the current dimension occurs.
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets country_chr
     *
     * @return float|null
     */
    public function getCountryChr()
    {
        return $this->container['country_chr'];
    }

    /**
     * Sets country_chr
     *
     * @param float|null $country_chr The cache hit ratio for the country.
     *
     * @return self
     */
    public function setCountryChr($country_chr)
    {
        $this->container['country_chr'] = $country_chr;

        return $this;
    }

    /**
     * Gets country_error_rate
     *
     * @return float|null
     */
    public function getCountryErrorRate()
    {
        return $this->container['country_error_rate'];
    }

    /**
     * Sets country_error_rate
     *
     * @param float|null $country_error_rate The error rate for the country.
     *
     * @return self
     */
    public function setCountryErrorRate($country_error_rate)
    {
        $this->container['country_error_rate'] = $country_error_rate;

        return $this;
    }

    /**
     * Gets country_request_rate
     *
     * @return float|null
     */
    public function getCountryRequestRate()
    {
        return $this->container['country_request_rate'];
    }

    /**
     * Sets country_request_rate
     *
     * @param float|null $country_request_rate This country's percentage of the total requests.
     *
     * @return self
     */
    public function setCountryRequestRate($country_request_rate)
    {
        $this->container['country_request_rate'] = $country_request_rate;

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


