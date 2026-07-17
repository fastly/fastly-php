<?php
/**
 * PathChange
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
 * PathChange Class Doc Comment
 *
 * @category Class
 * @description Modifications to an existing path between versions.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PathChange implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'path_change';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'path_id' => 'string',
        'path' => 'string',
        'old_path' => 'string',
        'rules_added' => '\Fastly\Model\RuleResponse[]',
        'rules_changed' => '\Fastly\Model\RuleChange[]',
        'rules_deleted' => '\Fastly\Model\RuleResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'path_id' => null,
        'path' => null,
        'old_path' => null,
        'rules_added' => null,
        'rules_changed' => null,
        'rules_deleted' => null
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
        'path_id' => 'path_id',
        'path' => 'path',
        'old_path' => 'old_path',
        'rules_added' => 'rules_added',
        'rules_changed' => 'rules_changed',
        'rules_deleted' => 'rules_deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'path_id' => 'setPathId',
        'path' => 'setPath',
        'old_path' => 'setOldPath',
        'rules_added' => 'setRulesAdded',
        'rules_changed' => 'setRulesChanged',
        'rules_deleted' => 'setRulesDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'path_id' => 'getPathId',
        'path' => 'getPath',
        'old_path' => 'getOldPath',
        'rules_added' => 'getRulesAdded',
        'rules_changed' => 'getRulesChanged',
        'rules_deleted' => 'getRulesDeleted'
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
        $this->container['path_id'] = $data['path_id'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['old_path'] = $data['old_path'] ?? null;
        $this->container['rules_added'] = $data['rules_added'] ?? null;
        $this->container['rules_changed'] = $data['rules_changed'] ?? null;
        $this->container['rules_deleted'] = $data['rules_deleted'] ?? null;
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
     * Gets path_id
     *
     * @return string|null
     */
    public function getPathId()
    {
        return $this->container['path_id'];
    }

    /**
     * Sets path_id
     *
     * @param string|null $path_id Alphanumeric string identifying the path. Stable across versions of the routing config.
     *
     * @return self
     */
    public function setPathId($path_id)
    {
        $this->container['path_id'] = $path_id;

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
     * @param string|null $path The current path pattern.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets old_path
     *
     * @return string|null
     */
    public function getOldPath()
    {
        return $this->container['old_path'];
    }

    /**
     * Sets old_path
     *
     * @param string|null $old_path The previous path pattern, if it changed.
     *
     * @return self
     */
    public function setOldPath($old_path)
    {
        $this->container['old_path'] = $old_path;

        return $this;
    }

    /**
     * Gets rules_added
     *
     * @return \Fastly\Model\RuleResponse[]|null
     */
    public function getRulesAdded()
    {
        return $this->container['rules_added'];
    }

    /**
     * Sets rules_added
     *
     * @param \Fastly\Model\RuleResponse[]|null $rules_added Rules that were added to this path.
     *
     * @return self
     */
    public function setRulesAdded($rules_added)
    {
        $this->container['rules_added'] = $rules_added;

        return $this;
    }

    /**
     * Gets rules_changed
     *
     * @return \Fastly\Model\RuleChange[]|null
     */
    public function getRulesChanged()
    {
        return $this->container['rules_changed'];
    }

    /**
     * Sets rules_changed
     *
     * @param \Fastly\Model\RuleChange[]|null $rules_changed Rules that were modified on this path.
     *
     * @return self
     */
    public function setRulesChanged($rules_changed)
    {
        $this->container['rules_changed'] = $rules_changed;

        return $this;
    }

    /**
     * Gets rules_deleted
     *
     * @return \Fastly\Model\RuleResponse[]|null
     */
    public function getRulesDeleted()
    {
        return $this->container['rules_deleted'];
    }

    /**
     * Sets rules_deleted
     *
     * @param \Fastly\Model\RuleResponse[]|null $rules_deleted Rules that were removed from this path.
     *
     * @return self
     */
    public function setRulesDeleted($rules_deleted)
    {
        $this->container['rules_deleted'] = $rules_deleted;

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


