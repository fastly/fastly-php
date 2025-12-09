<?php
/**
 * PlatformValues
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
 * PlatformValues Class Doc Comment
 *
 * @category Class
 * @description The results of the query, optionally filtered and grouped over the requested timespan.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PlatformValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'platform_values';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'timestamp' => '\DateTime',
        'ttfb_origin_p25_us' => 'float',
        'ttfb_origin_p50_us' => 'float',
        'ttfb_origin_p75_us' => 'float',
        'ttfb_origin_p95_us' => 'float',
        'ttfb_origin_p99_us' => 'float',
        'ttfb_shield_p25_us' => 'float',
        'ttfb_shield_p50_us' => 'float',
        'ttfb_shield_p75_us' => 'float',
        'ttfb_shield_p95_us' => 'float',
        'ttfb_shield_p99_us' => 'float',
        'ttfb_edge_p25_us' => 'float',
        'ttfb_edge_p50_us' => 'float',
        'ttfb_edge_p75_us' => 'float',
        'ttfb_edge_p95_us' => 'float',
        'ttfb_edge_p99_us' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'timestamp' => 'date-time',
        'ttfb_origin_p25_us' => 'float',
        'ttfb_origin_p50_us' => 'float',
        'ttfb_origin_p75_us' => 'float',
        'ttfb_origin_p95_us' => 'float',
        'ttfb_origin_p99_us' => 'float',
        'ttfb_shield_p25_us' => 'float',
        'ttfb_shield_p50_us' => 'float',
        'ttfb_shield_p75_us' => 'float',
        'ttfb_shield_p95_us' => 'float',
        'ttfb_shield_p99_us' => 'float',
        'ttfb_edge_p25_us' => 'float',
        'ttfb_edge_p50_us' => 'float',
        'ttfb_edge_p75_us' => 'float',
        'ttfb_edge_p95_us' => 'float',
        'ttfb_edge_p99_us' => 'float'
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
        'timestamp' => 'timestamp',
        'ttfb_origin_p25_us' => 'ttfb_origin_p25_us',
        'ttfb_origin_p50_us' => 'ttfb_origin_p50_us',
        'ttfb_origin_p75_us' => 'ttfb_origin_p75_us',
        'ttfb_origin_p95_us' => 'ttfb_origin_p95_us',
        'ttfb_origin_p99_us' => 'ttfb_origin_p99_us',
        'ttfb_shield_p25_us' => 'ttfb_shield_p25_us',
        'ttfb_shield_p50_us' => 'ttfb_shield_p50_us',
        'ttfb_shield_p75_us' => 'ttfb_shield_p75_us',
        'ttfb_shield_p95_us' => 'ttfb_shield_p95_us',
        'ttfb_shield_p99_us' => 'ttfb_shield_p99_us',
        'ttfb_edge_p25_us' => 'ttfb_edge_p25_us',
        'ttfb_edge_p50_us' => 'ttfb_edge_p50_us',
        'ttfb_edge_p75_us' => 'ttfb_edge_p75_us',
        'ttfb_edge_p95_us' => 'ttfb_edge_p95_us',
        'ttfb_edge_p99_us' => 'ttfb_edge_p99_us'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'ttfb_origin_p25_us' => 'setTtfbOriginP25Us',
        'ttfb_origin_p50_us' => 'setTtfbOriginP50Us',
        'ttfb_origin_p75_us' => 'setTtfbOriginP75Us',
        'ttfb_origin_p95_us' => 'setTtfbOriginP95Us',
        'ttfb_origin_p99_us' => 'setTtfbOriginP99Us',
        'ttfb_shield_p25_us' => 'setTtfbShieldP25Us',
        'ttfb_shield_p50_us' => 'setTtfbShieldP50Us',
        'ttfb_shield_p75_us' => 'setTtfbShieldP75Us',
        'ttfb_shield_p95_us' => 'setTtfbShieldP95Us',
        'ttfb_shield_p99_us' => 'setTtfbShieldP99Us',
        'ttfb_edge_p25_us' => 'setTtfbEdgeP25Us',
        'ttfb_edge_p50_us' => 'setTtfbEdgeP50Us',
        'ttfb_edge_p75_us' => 'setTtfbEdgeP75Us',
        'ttfb_edge_p95_us' => 'setTtfbEdgeP95Us',
        'ttfb_edge_p99_us' => 'setTtfbEdgeP99Us'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'ttfb_origin_p25_us' => 'getTtfbOriginP25Us',
        'ttfb_origin_p50_us' => 'getTtfbOriginP50Us',
        'ttfb_origin_p75_us' => 'getTtfbOriginP75Us',
        'ttfb_origin_p95_us' => 'getTtfbOriginP95Us',
        'ttfb_origin_p99_us' => 'getTtfbOriginP99Us',
        'ttfb_shield_p25_us' => 'getTtfbShieldP25Us',
        'ttfb_shield_p50_us' => 'getTtfbShieldP50Us',
        'ttfb_shield_p75_us' => 'getTtfbShieldP75Us',
        'ttfb_shield_p95_us' => 'getTtfbShieldP95Us',
        'ttfb_shield_p99_us' => 'getTtfbShieldP99Us',
        'ttfb_edge_p25_us' => 'getTtfbEdgeP25Us',
        'ttfb_edge_p50_us' => 'getTtfbEdgeP50Us',
        'ttfb_edge_p75_us' => 'getTtfbEdgeP75Us',
        'ttfb_edge_p95_us' => 'getTtfbEdgeP95Us',
        'ttfb_edge_p99_us' => 'getTtfbEdgeP99Us'
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
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['ttfb_origin_p25_us'] = $data['ttfb_origin_p25_us'] ?? null;
        $this->container['ttfb_origin_p50_us'] = $data['ttfb_origin_p50_us'] ?? null;
        $this->container['ttfb_origin_p75_us'] = $data['ttfb_origin_p75_us'] ?? null;
        $this->container['ttfb_origin_p95_us'] = $data['ttfb_origin_p95_us'] ?? null;
        $this->container['ttfb_origin_p99_us'] = $data['ttfb_origin_p99_us'] ?? null;
        $this->container['ttfb_shield_p25_us'] = $data['ttfb_shield_p25_us'] ?? null;
        $this->container['ttfb_shield_p50_us'] = $data['ttfb_shield_p50_us'] ?? null;
        $this->container['ttfb_shield_p75_us'] = $data['ttfb_shield_p75_us'] ?? null;
        $this->container['ttfb_shield_p95_us'] = $data['ttfb_shield_p95_us'] ?? null;
        $this->container['ttfb_shield_p99_us'] = $data['ttfb_shield_p99_us'] ?? null;
        $this->container['ttfb_edge_p25_us'] = $data['ttfb_edge_p25_us'] ?? null;
        $this->container['ttfb_edge_p50_us'] = $data['ttfb_edge_p50_us'] ?? null;
        $this->container['ttfb_edge_p75_us'] = $data['ttfb_edge_p75_us'] ?? null;
        $this->container['ttfb_edge_p95_us'] = $data['ttfb_edge_p95_us'] ?? null;
        $this->container['ttfb_edge_p99_us'] = $data['ttfb_edge_p99_us'] ?? null;
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
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Timestamp of the metrics data point.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets ttfb_origin_p25_us
     *
     * @return float|null
     */
    public function getTtfbOriginP25Us()
    {
        return $this->container['ttfb_origin_p25_us'];
    }

    /**
     * Sets ttfb_origin_p25_us
     *
     * @param float|null $ttfb_origin_p25_us 25th percentile of time to first byte from origin, in microseconds.
     *
     * @return self
     */
    public function setTtfbOriginP25Us($ttfb_origin_p25_us)
    {
        $this->container['ttfb_origin_p25_us'] = $ttfb_origin_p25_us;

        return $this;
    }

    /**
     * Gets ttfb_origin_p50_us
     *
     * @return float|null
     */
    public function getTtfbOriginP50Us()
    {
        return $this->container['ttfb_origin_p50_us'];
    }

    /**
     * Sets ttfb_origin_p50_us
     *
     * @param float|null $ttfb_origin_p50_us 50th percentile of time to first byte from origin, in microseconds.
     *
     * @return self
     */
    public function setTtfbOriginP50Us($ttfb_origin_p50_us)
    {
        $this->container['ttfb_origin_p50_us'] = $ttfb_origin_p50_us;

        return $this;
    }

    /**
     * Gets ttfb_origin_p75_us
     *
     * @return float|null
     */
    public function getTtfbOriginP75Us()
    {
        return $this->container['ttfb_origin_p75_us'];
    }

    /**
     * Sets ttfb_origin_p75_us
     *
     * @param float|null $ttfb_origin_p75_us 75th percentile of time to first byte from origin, in microseconds.
     *
     * @return self
     */
    public function setTtfbOriginP75Us($ttfb_origin_p75_us)
    {
        $this->container['ttfb_origin_p75_us'] = $ttfb_origin_p75_us;

        return $this;
    }

    /**
     * Gets ttfb_origin_p95_us
     *
     * @return float|null
     */
    public function getTtfbOriginP95Us()
    {
        return $this->container['ttfb_origin_p95_us'];
    }

    /**
     * Sets ttfb_origin_p95_us
     *
     * @param float|null $ttfb_origin_p95_us 95th percentile of time to first byte from origin, in microseconds.
     *
     * @return self
     */
    public function setTtfbOriginP95Us($ttfb_origin_p95_us)
    {
        $this->container['ttfb_origin_p95_us'] = $ttfb_origin_p95_us;

        return $this;
    }

    /**
     * Gets ttfb_origin_p99_us
     *
     * @return float|null
     */
    public function getTtfbOriginP99Us()
    {
        return $this->container['ttfb_origin_p99_us'];
    }

    /**
     * Sets ttfb_origin_p99_us
     *
     * @param float|null $ttfb_origin_p99_us 99th percentile of time to first byte from origin, in microseconds.
     *
     * @return self
     */
    public function setTtfbOriginP99Us($ttfb_origin_p99_us)
    {
        $this->container['ttfb_origin_p99_us'] = $ttfb_origin_p99_us;

        return $this;
    }

    /**
     * Gets ttfb_shield_p25_us
     *
     * @return float|null
     */
    public function getTtfbShieldP25Us()
    {
        return $this->container['ttfb_shield_p25_us'];
    }

    /**
     * Sets ttfb_shield_p25_us
     *
     * @param float|null $ttfb_shield_p25_us 25th percentile of time to first byte from shield, in microseconds.
     *
     * @return self
     */
    public function setTtfbShieldP25Us($ttfb_shield_p25_us)
    {
        $this->container['ttfb_shield_p25_us'] = $ttfb_shield_p25_us;

        return $this;
    }

    /**
     * Gets ttfb_shield_p50_us
     *
     * @return float|null
     */
    public function getTtfbShieldP50Us()
    {
        return $this->container['ttfb_shield_p50_us'];
    }

    /**
     * Sets ttfb_shield_p50_us
     *
     * @param float|null $ttfb_shield_p50_us 50th percentile of time to first byte from shield, in microseconds.
     *
     * @return self
     */
    public function setTtfbShieldP50Us($ttfb_shield_p50_us)
    {
        $this->container['ttfb_shield_p50_us'] = $ttfb_shield_p50_us;

        return $this;
    }

    /**
     * Gets ttfb_shield_p75_us
     *
     * @return float|null
     */
    public function getTtfbShieldP75Us()
    {
        return $this->container['ttfb_shield_p75_us'];
    }

    /**
     * Sets ttfb_shield_p75_us
     *
     * @param float|null $ttfb_shield_p75_us 75th percentile of time to first byte from shield, in microseconds.
     *
     * @return self
     */
    public function setTtfbShieldP75Us($ttfb_shield_p75_us)
    {
        $this->container['ttfb_shield_p75_us'] = $ttfb_shield_p75_us;

        return $this;
    }

    /**
     * Gets ttfb_shield_p95_us
     *
     * @return float|null
     */
    public function getTtfbShieldP95Us()
    {
        return $this->container['ttfb_shield_p95_us'];
    }

    /**
     * Sets ttfb_shield_p95_us
     *
     * @param float|null $ttfb_shield_p95_us 95th percentile of time to first byte from shield, in microseconds.
     *
     * @return self
     */
    public function setTtfbShieldP95Us($ttfb_shield_p95_us)
    {
        $this->container['ttfb_shield_p95_us'] = $ttfb_shield_p95_us;

        return $this;
    }

    /**
     * Gets ttfb_shield_p99_us
     *
     * @return float|null
     */
    public function getTtfbShieldP99Us()
    {
        return $this->container['ttfb_shield_p99_us'];
    }

    /**
     * Sets ttfb_shield_p99_us
     *
     * @param float|null $ttfb_shield_p99_us 99th percentile of time to first byte from shield, in microseconds.
     *
     * @return self
     */
    public function setTtfbShieldP99Us($ttfb_shield_p99_us)
    {
        $this->container['ttfb_shield_p99_us'] = $ttfb_shield_p99_us;

        return $this;
    }

    /**
     * Gets ttfb_edge_p25_us
     *
     * @return float|null
     */
    public function getTtfbEdgeP25Us()
    {
        return $this->container['ttfb_edge_p25_us'];
    }

    /**
     * Sets ttfb_edge_p25_us
     *
     * @param float|null $ttfb_edge_p25_us 25th percentile of time to first byte from edge, in microseconds.
     *
     * @return self
     */
    public function setTtfbEdgeP25Us($ttfb_edge_p25_us)
    {
        $this->container['ttfb_edge_p25_us'] = $ttfb_edge_p25_us;

        return $this;
    }

    /**
     * Gets ttfb_edge_p50_us
     *
     * @return float|null
     */
    public function getTtfbEdgeP50Us()
    {
        return $this->container['ttfb_edge_p50_us'];
    }

    /**
     * Sets ttfb_edge_p50_us
     *
     * @param float|null $ttfb_edge_p50_us 50th percentile of time to first byte from edge, in microseconds.
     *
     * @return self
     */
    public function setTtfbEdgeP50Us($ttfb_edge_p50_us)
    {
        $this->container['ttfb_edge_p50_us'] = $ttfb_edge_p50_us;

        return $this;
    }

    /**
     * Gets ttfb_edge_p75_us
     *
     * @return float|null
     */
    public function getTtfbEdgeP75Us()
    {
        return $this->container['ttfb_edge_p75_us'];
    }

    /**
     * Sets ttfb_edge_p75_us
     *
     * @param float|null $ttfb_edge_p75_us 75th percentile of time to first byte from edge, in microseconds.
     *
     * @return self
     */
    public function setTtfbEdgeP75Us($ttfb_edge_p75_us)
    {
        $this->container['ttfb_edge_p75_us'] = $ttfb_edge_p75_us;

        return $this;
    }

    /**
     * Gets ttfb_edge_p95_us
     *
     * @return float|null
     */
    public function getTtfbEdgeP95Us()
    {
        return $this->container['ttfb_edge_p95_us'];
    }

    /**
     * Sets ttfb_edge_p95_us
     *
     * @param float|null $ttfb_edge_p95_us 95th percentile of time to first byte from edge, in microseconds.
     *
     * @return self
     */
    public function setTtfbEdgeP95Us($ttfb_edge_p95_us)
    {
        $this->container['ttfb_edge_p95_us'] = $ttfb_edge_p95_us;

        return $this;
    }

    /**
     * Gets ttfb_edge_p99_us
     *
     * @return float|null
     */
    public function getTtfbEdgeP99Us()
    {
        return $this->container['ttfb_edge_p99_us'];
    }

    /**
     * Sets ttfb_edge_p99_us
     *
     * @param float|null $ttfb_edge_p99_us 99th percentile of time to first byte from edge, in microseconds.
     *
     * @return self
     */
    public function setTtfbEdgeP99Us($ttfb_edge_p99_us)
    {
        $this->container['ttfb_edge_p99_us'] = $ttfb_edge_p99_us;

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


