<?php
/**
 * ValuesDdos
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
 * ValuesDdos Class Doc Comment
 *
 * @category Class
 * @description The results of the query, optionally filtered and grouped over the requested timespan.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ValuesDdos implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'values_ddos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'ddos_action_limit_streams_connections' => 'int',
        'ddos_action_limit_streams_requests' => 'int',
        'ddos_action_tarpit_accept' => 'int',
        'ddos_action_tarpit' => 'int',
        'ddos_action_close' => 'int',
        'ddos_action_blackhole' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'ddos_action_limit_streams_connections' => null,
        'ddos_action_limit_streams_requests' => null,
        'ddos_action_tarpit_accept' => null,
        'ddos_action_tarpit' => null,
        'ddos_action_close' => null,
        'ddos_action_blackhole' => null
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
        'ddos_action_limit_streams_connections' => 'ddos_action_limit_streams_connections',
        'ddos_action_limit_streams_requests' => 'ddos_action_limit_streams_requests',
        'ddos_action_tarpit_accept' => 'ddos_action_tarpit_accept',
        'ddos_action_tarpit' => 'ddos_action_tarpit',
        'ddos_action_close' => 'ddos_action_close',
        'ddos_action_blackhole' => 'ddos_action_blackhole'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ddos_action_limit_streams_connections' => 'setDdosActionLimitStreamsConnections',
        'ddos_action_limit_streams_requests' => 'setDdosActionLimitStreamsRequests',
        'ddos_action_tarpit_accept' => 'setDdosActionTarpitAccept',
        'ddos_action_tarpit' => 'setDdosActionTarpit',
        'ddos_action_close' => 'setDdosActionClose',
        'ddos_action_blackhole' => 'setDdosActionBlackhole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ddos_action_limit_streams_connections' => 'getDdosActionLimitStreamsConnections',
        'ddos_action_limit_streams_requests' => 'getDdosActionLimitStreamsRequests',
        'ddos_action_tarpit_accept' => 'getDdosActionTarpitAccept',
        'ddos_action_tarpit' => 'getDdosActionTarpit',
        'ddos_action_close' => 'getDdosActionClose',
        'ddos_action_blackhole' => 'getDdosActionBlackhole'
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
        $this->container['ddos_action_limit_streams_connections'] = $data['ddos_action_limit_streams_connections'] ?? null;
        $this->container['ddos_action_limit_streams_requests'] = $data['ddos_action_limit_streams_requests'] ?? null;
        $this->container['ddos_action_tarpit_accept'] = $data['ddos_action_tarpit_accept'] ?? null;
        $this->container['ddos_action_tarpit'] = $data['ddos_action_tarpit'] ?? null;
        $this->container['ddos_action_close'] = $data['ddos_action_close'] ?? null;
        $this->container['ddos_action_blackhole'] = $data['ddos_action_blackhole'] ?? null;
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
     * Gets ddos_action_limit_streams_connections
     *
     * @return int|null
     */
    public function getDdosActionLimitStreamsConnections()
    {
        return $this->container['ddos_action_limit_streams_connections'];
    }

    /**
     * Sets ddos_action_limit_streams_connections
     *
     * @param int|null $ddos_action_limit_streams_connections For HTTP/2, the number of connections the limit-streams action was applied to. The limit-streams action caps the allowed number of concurrent streams in a connection.
     *
     * @return self
     */
    public function setDdosActionLimitStreamsConnections($ddos_action_limit_streams_connections)
    {
        $this->container['ddos_action_limit_streams_connections'] = $ddos_action_limit_streams_connections;

        return $this;
    }

    /**
     * Gets ddos_action_limit_streams_requests
     *
     * @return int|null
     */
    public function getDdosActionLimitStreamsRequests()
    {
        return $this->container['ddos_action_limit_streams_requests'];
    }

    /**
     * Sets ddos_action_limit_streams_requests
     *
     * @param int|null $ddos_action_limit_streams_requests For HTTP/2, the number of requests made on a connection for which the limit-streams action was taken. The limit-streams action caps the allowed number of concurrent streams in a connection.
     *
     * @return self
     */
    public function setDdosActionLimitStreamsRequests($ddos_action_limit_streams_requests)
    {
        $this->container['ddos_action_limit_streams_requests'] = $ddos_action_limit_streams_requests;

        return $this;
    }

    /**
     * Gets ddos_action_tarpit_accept
     *
     * @return int|null
     */
    public function getDdosActionTarpitAccept()
    {
        return $this->container['ddos_action_tarpit_accept'];
    }

    /**
     * Sets ddos_action_tarpit_accept
     *
     * @param int|null $ddos_action_tarpit_accept The number of times the tarpit-accept action was taken. The tarpit-accept action adds a delay when accepting future connections.
     *
     * @return self
     */
    public function setDdosActionTarpitAccept($ddos_action_tarpit_accept)
    {
        $this->container['ddos_action_tarpit_accept'] = $ddos_action_tarpit_accept;

        return $this;
    }

    /**
     * Gets ddos_action_tarpit
     *
     * @return int|null
     */
    public function getDdosActionTarpit()
    {
        return $this->container['ddos_action_tarpit'];
    }

    /**
     * Sets ddos_action_tarpit
     *
     * @param int|null $ddos_action_tarpit The number of times the tarpit action was taken. The tarpit action delays writing the response to the client.
     *
     * @return self
     */
    public function setDdosActionTarpit($ddos_action_tarpit)
    {
        $this->container['ddos_action_tarpit'] = $ddos_action_tarpit;

        return $this;
    }

    /**
     * Gets ddos_action_close
     *
     * @return int|null
     */
    public function getDdosActionClose()
    {
        return $this->container['ddos_action_close'];
    }

    /**
     * Sets ddos_action_close
     *
     * @param int|null $ddos_action_close The number of times the close action was taken. The close action aborts the connection as soon as possible. The close action takes effect either right after accept, right after the client hello, or right after the response was sent.
     *
     * @return self
     */
    public function setDdosActionClose($ddos_action_close)
    {
        $this->container['ddos_action_close'] = $ddos_action_close;

        return $this;
    }

    /**
     * Gets ddos_action_blackhole
     *
     * @return int|null
     */
    public function getDdosActionBlackhole()
    {
        return $this->container['ddos_action_blackhole'];
    }

    /**
     * Sets ddos_action_blackhole
     *
     * @param int|null $ddos_action_blackhole The number of times the blackhole action was taken. The blackhole action quietly closes a TCP connection without sending a reset. The blackhole action quietly closes a TCP connection without notifying its peer (all TCP state is dropped).
     *
     * @return self
     */
    public function setDdosActionBlackhole($ddos_action_blackhole)
    {
        $this->container['ddos_action_blackhole'] = $ddos_action_blackhole;

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


