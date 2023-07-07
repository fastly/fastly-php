<?php
/**
 * Settings
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
 * Settings Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Settings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'general_default_host' => 'string',
        'general_default_ttl' => 'int',
        'general_stale_if_error' => 'bool',
        'general_stale_if_error_ttl' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'general_default_host' => null,
        'general_default_ttl' => null,
        'general_stale_if_error' => null,
        'general_stale_if_error_ttl' => null
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
        'general_default_host' => 'general.default_host',
        'general_default_ttl' => 'general.default_ttl',
        'general_stale_if_error' => 'general.stale_if_error',
        'general_stale_if_error_ttl' => 'general.stale_if_error_ttl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'general_default_host' => 'setGeneralDefaultHost',
        'general_default_ttl' => 'setGeneralDefaultTtl',
        'general_stale_if_error' => 'setGeneralStaleIfError',
        'general_stale_if_error_ttl' => 'setGeneralStaleIfErrorTtl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'general_default_host' => 'getGeneralDefaultHost',
        'general_default_ttl' => 'getGeneralDefaultTtl',
        'general_stale_if_error' => 'getGeneralStaleIfError',
        'general_stale_if_error_ttl' => 'getGeneralStaleIfErrorTtl'
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
        $this->container['general_default_host'] = $data['general_default_host'] ?? null;
        $this->container['general_default_ttl'] = $data['general_default_ttl'] ?? null;
        $this->container['general_stale_if_error'] = $data['general_stale_if_error'] ?? false;
        $this->container['general_stale_if_error_ttl'] = $data['general_stale_if_error_ttl'] ?? 43200;
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
     * Gets general_default_host
     *
     * @return string|null
     */
    public function getGeneralDefaultHost()
    {
        return $this->container['general_default_host'];
    }

    /**
     * Sets general_default_host
     *
     * @param string|null $general_default_host The default host name for the version.
     *
     * @return self
     */
    public function setGeneralDefaultHost($general_default_host)
    {
        $this->container['general_default_host'] = $general_default_host;

        return $this;
    }

    /**
     * Gets general_default_ttl
     *
     * @return int|null
     */
    public function getGeneralDefaultTtl()
    {
        return $this->container['general_default_ttl'];
    }

    /**
     * Sets general_default_ttl
     *
     * @param int|null $general_default_ttl The default time-to-live (TTL) for the version.
     *
     * @return self
     */
    public function setGeneralDefaultTtl($general_default_ttl)
    {
        $this->container['general_default_ttl'] = $general_default_ttl;

        return $this;
    }

    /**
     * Gets general_stale_if_error
     *
     * @return bool|null
     */
    public function getGeneralStaleIfError()
    {
        return $this->container['general_stale_if_error'];
    }

    /**
     * Sets general_stale_if_error
     *
     * @param bool|null $general_stale_if_error Enables serving a stale object if there is an error.
     *
     * @return self
     */
    public function setGeneralStaleIfError($general_stale_if_error)
    {
        $this->container['general_stale_if_error'] = $general_stale_if_error;

        return $this;
    }

    /**
     * Gets general_stale_if_error_ttl
     *
     * @return int|null
     */
    public function getGeneralStaleIfErrorTtl()
    {
        return $this->container['general_stale_if_error_ttl'];
    }

    /**
     * Sets general_stale_if_error_ttl
     *
     * @param int|null $general_stale_if_error_ttl The default time-to-live (TTL) for serving the stale object for the version.
     *
     * @return self
     */
    public function setGeneralStaleIfErrorTtl($general_stale_if_error_ttl)
    {
        $this->container['general_stale_if_error_ttl'] = $general_stale_if_error_ttl;

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


