<?php
/**
 * LogAggregationsGetResponseMeta
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
 * LogAggregationsGetResponseMeta Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LogAggregationsGetResponseMeta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'log_aggregations_get_response_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'service_id' => 'string',
        'start' => 'string',
        'end' => 'string',
        'limit' => 'int',
        'sort' => 'string',
        'filters' => '\Fastly\Model\LogAggregationsGetResponseMetaFilters'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'service_id' => null,
        'start' => null,
        'end' => null,
        'limit' => null,
        'sort' => null,
        'filters' => null
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
        'service_id' => 'service_id',
        'start' => 'start',
        'end' => 'end',
        'limit' => 'limit',
        'sort' => 'sort',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_id' => 'setServiceId',
        'start' => 'setStart',
        'end' => 'setEnd',
        'limit' => 'setLimit',
        'sort' => 'setSort',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_id' => 'getServiceId',
        'start' => 'getStart',
        'end' => 'getEnd',
        'limit' => 'getLimit',
        'sort' => 'getSort',
        'filters' => 'getFilters'
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
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['limit'] = $data['limit'] ?? 20;
        $this->container['sort'] = $data['sort'] ?? null;
        $this->container['filters'] = $data['filters'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
            $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
     * @param string|null $service_id Specifies the ID of the service for which data should be returned.
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets start
     *
     * @return string|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param string|null $start Start time for the query as supplied in the request.
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return string|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param string|null $end End time for the query as supplied in the request.
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Number of records per page.
     *
     * @return self
     */
    public function setLimit($limit)
    {

        if (!is_null($limit) && ($limit > 100)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling LogAggregationsGetResponseMeta., must be smaller than or equal to 100.');
        }
        if (!is_null($limit) && ($limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling LogAggregationsGetResponseMeta., must be bigger than or equal to 1.');
        }

        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort Comma-separated list of the series names whose values were used to sort the results.
     *
     * @return self
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Fastly\Model\LogAggregationsGetResponseMetaFilters|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Fastly\Model\LogAggregationsGetResponseMetaFilters|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

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


