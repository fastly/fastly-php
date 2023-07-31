<?php
/**
 * RequestSettingsAdditional
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
 * RequestSettingsAdditional Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RequestSettingsAdditional implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'request_settings_additional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'action' => 'string',
        'default_host' => 'string',
        'hash_keys' => 'string',
        'name' => 'string',
        'request_condition' => 'string',
        'xff' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'action' => null,
        'default_host' => null,
        'hash_keys' => null,
        'name' => null,
        'request_condition' => null,
        'xff' => null
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
        'action' => 'action',
        'default_host' => 'default_host',
        'hash_keys' => 'hash_keys',
        'name' => 'name',
        'request_condition' => 'request_condition',
        'xff' => 'xff'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'default_host' => 'setDefaultHost',
        'hash_keys' => 'setHashKeys',
        'name' => 'setName',
        'request_condition' => 'setRequestCondition',
        'xff' => 'setXff'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'default_host' => 'getDefaultHost',
        'hash_keys' => 'getHashKeys',
        'name' => 'getName',
        'request_condition' => 'getRequestCondition',
        'xff' => 'getXff'
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

    const ACTION_LOOKUP = 'lookup';
    const ACTION_PASS = 'pass';
    const XFF_CLEAR = 'clear';
    const XFF_LEAVE = 'leave';
    const XFF_APPEND = 'append';
    const XFF_APPEND_ALL = 'append_all';
    const XFF_OVERWRITE = 'overwrite';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_LOOKUP,
            self::ACTION_PASS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getXffAllowableValues()
    {
        return [
            self::XFF_CLEAR,
            self::XFF_LEAVE,
            self::XFF_APPEND,
            self::XFF_APPEND_ALL,
            self::XFF_OVERWRITE,
        ];
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
        $this->container['action'] = $data['action'] ?? null;
        $this->container['default_host'] = $data['default_host'] ?? null;
        $this->container['hash_keys'] = $data['hash_keys'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['request_condition'] = $data['request_condition'] ?? null;
        $this->container['xff'] = $data['xff'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getXffAllowableValues();
        if (!is_null($this->container['xff']) && !in_array($this->container['xff'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'xff', must be one of '%s'",
                $this->container['xff'],
                implode("', '", $allowedValues)
            );
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
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Allows you to terminate request handling and immediately perform an action.
     *
     * @return self
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets default_host
     *
     * @return string|null
     */
    public function getDefaultHost()
    {
        return $this->container['default_host'];
    }

    /**
     * Sets default_host
     *
     * @param string|null $default_host Sets the host header.
     *
     * @return self
     */
    public function setDefaultHost($default_host)
    {
        $this->container['default_host'] = $default_host;

        return $this;
    }

    /**
     * Gets hash_keys
     *
     * @return string|null
     */
    public function getHashKeys()
    {
        return $this->container['hash_keys'];
    }

    /**
     * Sets hash_keys
     *
     * @param string|null $hash_keys Comma separated list of varnish request object fields that should be in the hash key.
     *
     * @return self
     */
    public function setHashKeys($hash_keys)
    {
        $this->container['hash_keys'] = $hash_keys;

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
     * @param string|null $name Name for the request settings.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets request_condition
     *
     * @return string|null
     */
    public function getRequestCondition()
    {
        return $this->container['request_condition'];
    }

    /**
     * Sets request_condition
     *
     * @param string|null $request_condition Condition which, if met, will select this configuration during a request. Optional.
     *
     * @return self
     */
    public function setRequestCondition($request_condition)
    {
        $this->container['request_condition'] = $request_condition;

        return $this;
    }

    /**
     * Gets xff
     *
     * @return string|null
     */
    public function getXff()
    {
        return $this->container['xff'];
    }

    /**
     * Sets xff
     *
     * @param string|null $xff Short for X-Forwarded-For.
     *
     * @return self
     */
    public function setXff($xff)
    {
        $allowedValues = $this->getXffAllowableValues();
        if (!is_null($xff) && !in_array($xff, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'xff', must be one of '%s'",
                    $xff,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['xff'] = $xff;

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


