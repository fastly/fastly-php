<?php
/**
 * RequestSettingsResponseAllOf
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
 * RequestSettingsResponseAllOf Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RequestSettingsResponseAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'request_settings_response_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'bypass_busy_wait' => 'string',
        'force_miss' => 'string',
        'force_ssl' => 'string',
        'geo_headers' => 'string',
        'max_stale_age' => 'string',
        'timer_support' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'bypass_busy_wait' => null,
        'force_miss' => null,
        'force_ssl' => null,
        'geo_headers' => null,
        'max_stale_age' => null,
        'timer_support' => null
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
        'bypass_busy_wait' => 'bypass_busy_wait',
        'force_miss' => 'force_miss',
        'force_ssl' => 'force_ssl',
        'geo_headers' => 'geo_headers',
        'max_stale_age' => 'max_stale_age',
        'timer_support' => 'timer_support'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bypass_busy_wait' => 'setBypassBusyWait',
        'force_miss' => 'setForceMiss',
        'force_ssl' => 'setForceSsl',
        'geo_headers' => 'setGeoHeaders',
        'max_stale_age' => 'setMaxStaleAge',
        'timer_support' => 'setTimerSupport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bypass_busy_wait' => 'getBypassBusyWait',
        'force_miss' => 'getForceMiss',
        'force_ssl' => 'getForceSsl',
        'geo_headers' => 'getGeoHeaders',
        'max_stale_age' => 'getMaxStaleAge',
        'timer_support' => 'getTimerSupport'
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
        $this->container['bypass_busy_wait'] = $data['bypass_busy_wait'] ?? null;
        $this->container['force_miss'] = $data['force_miss'] ?? null;
        $this->container['force_ssl'] = $data['force_ssl'] ?? null;
        $this->container['geo_headers'] = $data['geo_headers'] ?? null;
        $this->container['max_stale_age'] = $data['max_stale_age'] ?? null;
        $this->container['timer_support'] = $data['timer_support'] ?? null;
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
     * Gets bypass_busy_wait
     *
     * @return string|null
     */
    public function getBypassBusyWait()
    {
        return $this->container['bypass_busy_wait'];
    }

    /**
     * Sets bypass_busy_wait
     *
     * @param string|null $bypass_busy_wait Disable collapsed forwarding, so you don't wait for other objects to origin.
     *
     * @return self
     */
    public function setBypassBusyWait($bypass_busy_wait)
    {
        $this->container['bypass_busy_wait'] = $bypass_busy_wait;

        return $this;
    }

    /**
     * Gets force_miss
     *
     * @return string|null
     */
    public function getForceMiss()
    {
        return $this->container['force_miss'];
    }

    /**
     * Sets force_miss
     *
     * @param string|null $force_miss Allows you to force a cache miss for the request. Replaces the item in the cache if the content is cacheable.
     *
     * @return self
     */
    public function setForceMiss($force_miss)
    {
        $this->container['force_miss'] = $force_miss;

        return $this;
    }

    /**
     * Gets force_ssl
     *
     * @return string|null
     */
    public function getForceSsl()
    {
        return $this->container['force_ssl'];
    }

    /**
     * Sets force_ssl
     *
     * @param string|null $force_ssl Forces the request use SSL (redirects a non-SSL to SSL).
     *
     * @return self
     */
    public function setForceSsl($force_ssl)
    {
        $this->container['force_ssl'] = $force_ssl;

        return $this;
    }

    /**
     * Gets geo_headers
     *
     * @return string|null
     */
    public function getGeoHeaders()
    {
        return $this->container['geo_headers'];
    }

    /**
     * Sets geo_headers
     *
     * @param string|null $geo_headers Injects Fastly-Geo-Country, Fastly-Geo-City, and Fastly-Geo-Region into the request headers.
     *
     * @return self
     */
    public function setGeoHeaders($geo_headers)
    {
        $this->container['geo_headers'] = $geo_headers;

        return $this;
    }

    /**
     * Gets max_stale_age
     *
     * @return string|null
     */
    public function getMaxStaleAge()
    {
        return $this->container['max_stale_age'];
    }

    /**
     * Sets max_stale_age
     *
     * @param string|null $max_stale_age How old an object is allowed to be to serve stale-if-error or stale-while-revalidate.
     *
     * @return self
     */
    public function setMaxStaleAge($max_stale_age)
    {
        $this->container['max_stale_age'] = $max_stale_age;

        return $this;
    }

    /**
     * Gets timer_support
     *
     * @return string|null
     */
    public function getTimerSupport()
    {
        return $this->container['timer_support'];
    }

    /**
     * Sets timer_support
     *
     * @param string|null $timer_support Injects the X-Timer info into the request for viewing origin fetch durations.
     *
     * @return self
     */
    public function setTimerSupport($timer_support)
    {
        $this->container['timer_support'] = $timer_support;

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


