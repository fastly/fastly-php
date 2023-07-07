<?php
/**
 * HealthcheckResponse
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
 * HealthcheckResponse Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class HealthcheckResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'healthcheck_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'check_interval' => 'int',
        'comment' => 'string',
        'expected_response' => 'int',
        'headers' => 'string[]',
        'host' => 'string',
        'http_version' => 'string',
        'initial' => 'int',
        'method' => 'string',
        'name' => 'string',
        'path' => 'string',
        'threshold' => 'int',
        'timeout' => 'int',
        'window' => 'int',
        'service_id' => 'string',
        'version' => 'int',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'check_interval' => null,
        'comment' => null,
        'expected_response' => null,
        'headers' => null,
        'host' => null,
        'http_version' => null,
        'initial' => null,
        'method' => null,
        'name' => null,
        'path' => null,
        'threshold' => null,
        'timeout' => null,
        'window' => null,
        'service_id' => null,
        'version' => null,
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'check_interval' => 'check_interval',
        'comment' => 'comment',
        'expected_response' => 'expected_response',
        'headers' => 'headers',
        'host' => 'host',
        'http_version' => 'http_version',
        'initial' => 'initial',
        'method' => 'method',
        'name' => 'name',
        'path' => 'path',
        'threshold' => 'threshold',
        'timeout' => 'timeout',
        'window' => 'window',
        'service_id' => 'service_id',
        'version' => 'version',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'check_interval' => 'setCheckInterval',
        'comment' => 'setComment',
        'expected_response' => 'setExpectedResponse',
        'headers' => 'setHeaders',
        'host' => 'setHost',
        'http_version' => 'setHttpVersion',
        'initial' => 'setInitial',
        'method' => 'setMethod',
        'name' => 'setName',
        'path' => 'setPath',
        'threshold' => 'setThreshold',
        'timeout' => 'setTimeout',
        'window' => 'setWindow',
        'service_id' => 'setServiceId',
        'version' => 'setVersion',
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'check_interval' => 'getCheckInterval',
        'comment' => 'getComment',
        'expected_response' => 'getExpectedResponse',
        'headers' => 'getHeaders',
        'host' => 'getHost',
        'http_version' => 'getHttpVersion',
        'initial' => 'getInitial',
        'method' => 'getMethod',
        'name' => 'getName',
        'path' => 'getPath',
        'threshold' => 'getThreshold',
        'timeout' => 'getTimeout',
        'window' => 'getWindow',
        'service_id' => 'getServiceId',
        'version' => 'getVersion',
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['check_interval'] = $data['check_interval'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['expected_response'] = $data['expected_response'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['host'] = $data['host'] ?? null;
        $this->container['http_version'] = $data['http_version'] ?? null;
        $this->container['initial'] = $data['initial'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['threshold'] = $data['threshold'] ?? null;
        $this->container['timeout'] = $data['timeout'] ?? null;
        $this->container['window'] = $data['window'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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
     * Gets check_interval
     *
     * @return int|null
     */
    public function getCheckInterval()
    {
        return $this->container['check_interval'];
    }

    /**
     * Sets check_interval
     *
     * @param int|null $check_interval How often to run the health check in milliseconds.
     *
     * @return self
     */
    public function setCheckInterval($check_interval)
    {
        $this->container['check_interval'] = $check_interval;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment A freeform descriptive note.
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets expected_response
     *
     * @return int|null
     */
    public function getExpectedResponse()
    {
        return $this->container['expected_response'];
    }

    /**
     * Sets expected_response
     *
     * @param int|null $expected_response The status code expected from the host.
     *
     * @return self
     */
    public function setExpectedResponse($expected_response)
    {
        $this->container['expected_response'] = $expected_response;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return string[]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param string[]|null $headers Array of custom headers that will be added to the health check probes.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string|null $host Which host to check.
     *
     * @return self
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets http_version
     *
     * @return string|null
     */
    public function getHttpVersion()
    {
        return $this->container['http_version'];
    }

    /**
     * Sets http_version
     *
     * @param string|null $http_version Whether to use version 1.0 or 1.1 HTTP.
     *
     * @return self
     */
    public function setHttpVersion($http_version)
    {
        $this->container['http_version'] = $http_version;

        return $this;
    }

    /**
     * Gets initial
     *
     * @return int|null
     */
    public function getInitial()
    {
        return $this->container['initial'];
    }

    /**
     * Sets initial
     *
     * @param int|null $initial When loading a config, the initial number of probes to be seen as OK.
     *
     * @return self
     */
    public function setInitial($initial)
    {
        $this->container['initial'] = $initial;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method Which HTTP method to use.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the health check.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path The path to check.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets threshold
     *
     * @return int|null
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param int|null $threshold How many health checks must succeed to be considered healthy.
     *
     * @return self
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int|null $timeout Timeout in milliseconds.
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets window
     *
     * @return int|null
     */
    public function getWindow()
    {
        return $this->container['window'];
    }

    /**
     * Sets window
     *
     * @param int|null $window The number of most recent health check queries to keep for this health check.
     *
     * @return self
     */
    public function setWindow($window)
    {
        $this->container['window'] = $window;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


