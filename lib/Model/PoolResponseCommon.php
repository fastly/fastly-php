<?php
/**
 * PoolResponseCommon
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
 * PoolResponseCommon Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PoolResponseCommon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'pool_response_common';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'between_bytes_timeout' => 'string',
        'connect_timeout' => 'string',
        'first_byte_timeout' => 'string',
        'max_conn_default' => 'string',
        'tls_check_cert' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'between_bytes_timeout' => null,
        'connect_timeout' => null,
        'first_byte_timeout' => null,
        'max_conn_default' => null,
        'tls_check_cert' => null,
        'id' => null
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
        'between_bytes_timeout' => 'between_bytes_timeout',
        'connect_timeout' => 'connect_timeout',
        'first_byte_timeout' => 'first_byte_timeout',
        'max_conn_default' => 'max_conn_default',
        'tls_check_cert' => 'tls_check_cert',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'between_bytes_timeout' => 'setBetweenBytesTimeout',
        'connect_timeout' => 'setConnectTimeout',
        'first_byte_timeout' => 'setFirstByteTimeout',
        'max_conn_default' => 'setMaxConnDefault',
        'tls_check_cert' => 'setTlsCheckCert',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'between_bytes_timeout' => 'getBetweenBytesTimeout',
        'connect_timeout' => 'getConnectTimeout',
        'first_byte_timeout' => 'getFirstByteTimeout',
        'max_conn_default' => 'getMaxConnDefault',
        'tls_check_cert' => 'getTlsCheckCert',
        'id' => 'getId'
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
        $this->container['between_bytes_timeout'] = $data['between_bytes_timeout'] ?? null;
        $this->container['connect_timeout'] = $data['connect_timeout'] ?? null;
        $this->container['first_byte_timeout'] = $data['first_byte_timeout'] ?? null;
        $this->container['max_conn_default'] = $data['max_conn_default'] ?? '200';
        $this->container['tls_check_cert'] = $data['tls_check_cert'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
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
     * Gets between_bytes_timeout
     *
     * @return string|null
     */
    public function getBetweenBytesTimeout()
    {
        return $this->container['between_bytes_timeout'];
    }

    /**
     * Sets between_bytes_timeout
     *
     * @param string|null $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using `bereq.between_bytes_timeout`.
     *
     * @return self
     */
    public function setBetweenBytesTimeout($between_bytes_timeout)
    {
        $this->container['between_bytes_timeout'] = $between_bytes_timeout;

        return $this;
    }

    /**
     * Gets connect_timeout
     *
     * @return string|null
     */
    public function getConnectTimeout()
    {
        return $this->container['connect_timeout'];
    }

    /**
     * Sets connect_timeout
     *
     * @param string|null $connect_timeout How long to wait for a timeout in milliseconds.
     *
     * @return self
     */
    public function setConnectTimeout($connect_timeout)
    {
        $this->container['connect_timeout'] = $connect_timeout;

        return $this;
    }

    /**
     * Gets first_byte_timeout
     *
     * @return string|null
     */
    public function getFirstByteTimeout()
    {
        return $this->container['first_byte_timeout'];
    }

    /**
     * Sets first_byte_timeout
     *
     * @param string|null $first_byte_timeout How long to wait for the first byte in milliseconds.
     *
     * @return self
     */
    public function setFirstByteTimeout($first_byte_timeout)
    {
        $this->container['first_byte_timeout'] = $first_byte_timeout;

        return $this;
    }

    /**
     * Gets max_conn_default
     *
     * @return string|null
     */
    public function getMaxConnDefault()
    {
        return $this->container['max_conn_default'];
    }

    /**
     * Sets max_conn_default
     *
     * @param string|null $max_conn_default Maximum number of connections.
     *
     * @return self
     */
    public function setMaxConnDefault($max_conn_default)
    {
        $this->container['max_conn_default'] = $max_conn_default;

        return $this;
    }

    /**
     * Gets tls_check_cert
     *
     * @return string|null
     */
    public function getTlsCheckCert()
    {
        return $this->container['tls_check_cert'];
    }

    /**
     * Sets tls_check_cert
     *
     * @param string|null $tls_check_cert Be strict on checking TLS certs.
     *
     * @return self
     */
    public function setTlsCheckCert($tls_check_cert)
    {
        $this->container['tls_check_cert'] = $tls_check_cert;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


