<?php
/**
 * ServiceResponseAllOf
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
 * ServiceResponseAllOf Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ServiceResponseAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'service_response_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'id' => 'string',
        'publish_key' => 'string',
        'paused' => 'bool',
        'versions' => '\Fastly\Model\SchemasVersionResponse[]',
        'environments' => '\Fastly\Model\Environment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'id' => null,
        'publish_key' => null,
        'paused' => null,
        'versions' => null,
        'environments' => null
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
        'id' => 'id',
        'publish_key' => 'publish_key',
        'paused' => 'paused',
        'versions' => 'versions',
        'environments' => 'environments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'publish_key' => 'setPublishKey',
        'paused' => 'setPaused',
        'versions' => 'setVersions',
        'environments' => 'setEnvironments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'publish_key' => 'getPublishKey',
        'paused' => 'getPaused',
        'versions' => 'getVersions',
        'environments' => 'getEnvironments'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['publish_key'] = $data['publish_key'] ?? null;
        $this->container['paused'] = $data['paused'] ?? null;
        $this->container['versions'] = $data['versions'] ?? null;
        $this->container['environments'] = $data['environments'] ?? null;
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
     * Gets publish_key
     *
     * @return string|null
     */
    public function getPublishKey()
    {
        return $this->container['publish_key'];
    }

    /**
     * Sets publish_key
     *
     * @param string|null $publish_key Unused at this time.
     *
     * @return self
     */
    public function setPublishKey($publish_key)
    {
        $this->container['publish_key'] = $publish_key;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return bool|null
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool|null $paused Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated.
     *
     * @return self
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \Fastly\Model\SchemasVersionResponse[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \Fastly\Model\SchemasVersionResponse[]|null $versions A list of [versions](https://www.fastly.com/documentation/reference/api/services/version/) associated with the service.
     *
     * @return self
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return \Fastly\Model\Environment[]|null
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param \Fastly\Model\Environment[]|null $environments A list of environments where the service has been deployed.
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

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


