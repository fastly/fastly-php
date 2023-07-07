<?php
/**
 * PaginationMeta
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
 * PaginationMeta Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaginationMeta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'pagination_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'current_page' => 'int',
        'per_page' => 'int',
        'record_count' => 'int',
        'total_pages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'current_page' => null,
        'per_page' => null,
        'record_count' => null,
        'total_pages' => null
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
        'current_page' => 'current_page',
        'per_page' => 'per_page',
        'record_count' => 'record_count',
        'total_pages' => 'total_pages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'per_page' => 'setPerPage',
        'record_count' => 'setRecordCount',
        'total_pages' => 'setTotalPages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'per_page' => 'getPerPage',
        'record_count' => 'getRecordCount',
        'total_pages' => 'getTotalPages'
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
        $this->container['current_page'] = $data['current_page'] ?? null;
        $this->container['per_page'] = $data['per_page'] ?? 20;
        $this->container['record_count'] = $data['record_count'] ?? null;
        $this->container['total_pages'] = $data['total_pages'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['per_page']) && ($this->container['per_page'] > 100)) {
            $invalidProperties[] = "invalid value for 'per_page', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['per_page']) && ($this->container['per_page'] < 1)) {
            $invalidProperties[] = "invalid value for 'per_page', must be bigger than or equal to 1.";
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
     * Gets current_page
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int|null $current_page Current page.
     *
     * @return self
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets per_page
     *
     * @return int|null
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     *
     * @param int|null $per_page Number of records per page.
     *
     * @return self
     */
    public function setPerPage($per_page)
    {

        if (!is_null($per_page) && ($per_page > 100)) {
            throw new \InvalidArgumentException('invalid value for $per_page when calling PaginationMeta., must be smaller than or equal to 100.');
        }
        if (!is_null($per_page) && ($per_page < 1)) {
            throw new \InvalidArgumentException('invalid value for $per_page when calling PaginationMeta., must be bigger than or equal to 1.');
        }

        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets record_count
     *
     * @return int|null
     */
    public function getRecordCount()
    {
        return $this->container['record_count'];
    }

    /**
     * Sets record_count
     *
     * @param int|null $record_count Total records in result set.
     *
     * @return self
     */
    public function setRecordCount($record_count)
    {
        $this->container['record_count'] = $record_count;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int|null $total_pages Total pages in result set.
     *
     * @return self
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

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


