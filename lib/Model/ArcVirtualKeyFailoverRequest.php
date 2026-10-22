<?php
/**
 * ArcVirtualKeyFailoverRequest
 *
 * PHP version 8.0
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
 * ArcVirtualKeyFailoverRequest Class Doc Comment
 *
 * @category Class
 * @description A failover policy for a virtual key. &#x60;targets&#x60; are tried in order after the primary request fails and one of the enabled error conditions is met.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcVirtualKeyFailoverRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_virtual_key_failover_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'targets' => '\Fastly\Model\ArcFailoverTarget[]',
        'timeout_enabled' => 'bool',
        'rate_limit_429_enabled' => 'bool',
        'server_error_5xx_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'targets' => null,
        'timeout_enabled' => null,
        'rate_limit_429_enabled' => null,
        'server_error_5xx_enabled' => null
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
        'targets' => 'targets',
        'timeout_enabled' => 'timeout_enabled',
        'rate_limit_429_enabled' => 'rate_limit_429_enabled',
        'server_error_5xx_enabled' => 'server_error_5xx_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targets' => 'setTargets',
        'timeout_enabled' => 'setTimeoutEnabled',
        'rate_limit_429_enabled' => 'setRateLimit429Enabled',
        'server_error_5xx_enabled' => 'setServerError5xxEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targets' => 'getTargets',
        'timeout_enabled' => 'getTimeoutEnabled',
        'rate_limit_429_enabled' => 'getRateLimit429Enabled',
        'server_error_5xx_enabled' => 'getServerError5xxEnabled'
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
    public function __construct(?array $data = null)
    {
        $this->container['targets'] = $data['targets'] ?? null;
        $this->container['timeout_enabled'] = $data['timeout_enabled'] ?? null;
        $this->container['rate_limit_429_enabled'] = $data['rate_limit_429_enabled'] ?? null;
        $this->container['server_error_5xx_enabled'] = $data['server_error_5xx_enabled'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
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
     * Gets targets
     *
     * @return \Fastly\Model\ArcFailoverTarget[]
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     *
     * @param \Fastly\Model\ArcFailoverTarget[] $targets The provider connections to retry against, in order.
     *
     * @return self
     */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;

        return $this;
    }

    /**
     * Gets timeout_enabled
     *
     * @return bool|null
     */
    public function getTimeoutEnabled()
    {
        return $this->container['timeout_enabled'];
    }

    /**
     * Sets timeout_enabled
     *
     * @param bool|null $timeout_enabled Whether a request timeout triggers failover.
     *
     * @return self
     */
    public function setTimeoutEnabled($timeout_enabled)
    {
        $this->container['timeout_enabled'] = $timeout_enabled;

        return $this;
    }

    /**
     * Gets rate_limit_429_enabled
     *
     * @return bool|null
     */
    public function getRateLimit429Enabled()
    {
        return $this->container['rate_limit_429_enabled'];
    }

    /**
     * Sets rate_limit_429_enabled
     *
     * @param bool|null $rate_limit_429_enabled Whether a `429 Too Many Requests` response from the provider triggers failover.
     *
     * @return self
     */
    public function setRateLimit429Enabled($rate_limit_429_enabled)
    {
        $this->container['rate_limit_429_enabled'] = $rate_limit_429_enabled;

        return $this;
    }

    /**
     * Gets server_error_5xx_enabled
     *
     * @return bool|null
     */
    public function getServerError5xxEnabled()
    {
        return $this->container['server_error_5xx_enabled'];
    }

    /**
     * Sets server_error_5xx_enabled
     *
     * @param bool|null $server_error_5xx_enabled Whether a `5xx` server error response from the provider triggers failover.
     *
     * @return self
     */
    public function setServerError5xxEnabled($server_error_5xx_enabled)
    {
        $this->container['server_error_5xx_enabled'] = $server_error_5xx_enabled;

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


