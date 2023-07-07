<?php
/**
 * BulkUpdateConfigStoreItem
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
 * BulkUpdateConfigStoreItem Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BulkUpdateConfigStoreItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'bulk_update_config_store_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'item_key' => 'string',
        'item_value' => 'string',
        'op' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'item_key' => null,
        'item_value' => null,
        'op' => null
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
        'item_key' => 'item_key',
        'item_value' => 'item_value',
        'op' => 'op'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_key' => 'setItemKey',
        'item_value' => 'setItemValue',
        'op' => 'setOp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_key' => 'getItemKey',
        'item_value' => 'getItemValue',
        'op' => 'getOp'
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

    const OP_CREATE = 'create';
    const OP_UPDATE = 'update';
    const OP_DELETE = 'delete';
    const OP_UPSERT = 'upsert';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOpAllowableValues()
    {
        return [
            self::OP_CREATE,
            self::OP_UPDATE,
            self::OP_DELETE,
            self::OP_UPSERT,
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
        $this->container['item_key'] = $data['item_key'] ?? null;
        $this->container['item_value'] = $data['item_value'] ?? null;
        $this->container['op'] = $data['op'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOpAllowableValues();
        if (!is_null($this->container['op']) && !in_array($this->container['op'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'op', must be one of '%s'",
                $this->container['op'],
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
     * Gets item_key
     *
     * @return string|null
     */
    public function getItemKey()
    {
        return $this->container['item_key'];
    }

    /**
     * Sets item_key
     *
     * @param string|null $item_key Item key, maximum 256 characters.
     *
     * @return self
     */
    public function setItemKey($item_key)
    {
        $this->container['item_key'] = $item_key;

        return $this;
    }

    /**
     * Gets item_value
     *
     * @return string|null
     */
    public function getItemValue()
    {
        return $this->container['item_value'];
    }

    /**
     * Sets item_value
     *
     * @param string|null $item_value Item value, maximum 8000 characters.
     *
     * @return self
     */
    public function setItemValue($item_value)
    {
        $this->container['item_value'] = $item_value;

        return $this;
    }

    /**
     * Gets op
     *
     * @return string|null
     */
    public function getOp()
    {
        return $this->container['op'];
    }

    /**
     * Sets op
     *
     * @param string|null $op op
     *
     * @return self
     */
    public function setOp($op)
    {
        $allowedValues = $this->getOpAllowableValues();
        if (!is_null($op) && !in_array($op, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'op', must be one of '%s'",
                    $op,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['op'] = $op;

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


