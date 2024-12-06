<?php
/**
 * ValuesDuration
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
 * ValuesDuration Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ValuesDuration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'values-duration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'average_response_time' => 'float',
        'p95_response_time' => 'float',
        'response_time_percentage' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'average_response_time' => 'float',
        'p95_response_time' => 'float',
        'response_time_percentage' => 'float'
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
        'average_response_time' => 'average_response_time',
        'p95_response_time' => 'p95_response_time',
        'response_time_percentage' => 'response_time_percentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_response_time' => 'setAverageResponseTime',
        'p95_response_time' => 'setP95ResponseTime',
        'response_time_percentage' => 'setResponseTimePercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_response_time' => 'getAverageResponseTime',
        'p95_response_time' => 'getP95ResponseTime',
        'response_time_percentage' => 'getResponseTimePercentage'
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
        $this->container['average_response_time'] = $data['average_response_time'] ?? null;
        $this->container['p95_response_time'] = $data['p95_response_time'] ?? null;
        $this->container['response_time_percentage'] = $data['response_time_percentage'] ?? null;
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
     * Gets average_response_time
     *
     * @return float|null
     */
    public function getAverageResponseTime()
    {
        return $this->container['average_response_time'];
    }

    /**
     * Sets average_response_time
     *
     * @param float|null $average_response_time The average time in seconds to respond to requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setAverageResponseTime($average_response_time)
    {
        $this->container['average_response_time'] = $average_response_time;

        return $this;
    }

    /**
     * Gets p95_response_time
     *
     * @return float|null
     */
    public function getP95ResponseTime()
    {
        return $this->container['p95_response_time'];
    }

    /**
     * Sets p95_response_time
     *
     * @param float|null $p95_response_time The P95 time in seconds to respond to requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setP95ResponseTime($p95_response_time)
    {
        $this->container['p95_response_time'] = $p95_response_time;

        return $this;
    }

    /**
     * Gets response_time_percentage
     *
     * @return float|null
     */
    public function getResponseTimePercentage()
    {
        return $this->container['response_time_percentage'];
    }

    /**
     * Sets response_time_percentage
     *
     * @param float|null $response_time_percentage The total percentage of time to respond to all requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setResponseTimePercentage($response_time_percentage)
    {
        $this->container['response_time_percentage'] = $response_time_percentage;

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


