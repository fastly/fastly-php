<?php
/**
 * OriginInspectorHistoricalMeta
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
 * OriginInspectorHistoricalMeta Class Doc Comment
 *
 * @category Class
 * @description Meta information about the scope of the query in a human readable format.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OriginInspectorHistoricalMeta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'origin_inspector_historical_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'start' => 'string',
        'end' => 'string',
        'downsample' => 'string',
        'metrics' => 'string',
        'limit' => 'float',
        'next_cursor' => 'string',
        'sort' => 'string',
        'group_by' => 'string',
        'filters' => '\Fastly\Model\OriginInspectorHistoricalMetaFilters'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'start' => null,
        'end' => null,
        'downsample' => null,
        'metrics' => null,
        'limit' => null,
        'next_cursor' => null,
        'sort' => null,
        'group_by' => null,
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
        'start' => 'start',
        'end' => 'end',
        'downsample' => 'downsample',
        'metrics' => 'metrics',
        'limit' => 'limit',
        'next_cursor' => 'next_cursor',
        'sort' => 'sort',
        'group_by' => 'group_by',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start' => 'setStart',
        'end' => 'setEnd',
        'downsample' => 'setDownsample',
        'metrics' => 'setMetrics',
        'limit' => 'setLimit',
        'next_cursor' => 'setNextCursor',
        'sort' => 'setSort',
        'group_by' => 'setGroupBy',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start' => 'getStart',
        'end' => 'getEnd',
        'downsample' => 'getDownsample',
        'metrics' => 'getMetrics',
        'limit' => 'getLimit',
        'next_cursor' => 'getNextCursor',
        'sort' => 'getSort',
        'group_by' => 'getGroupBy',
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
        $this->container['start'] = $data['start'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['downsample'] = $data['downsample'] ?? null;
        $this->container['metrics'] = $data['metrics'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['next_cursor'] = $data['next_cursor'] ?? null;
        $this->container['sort'] = $data['sort'] ?? null;
        $this->container['group_by'] = $data['group_by'] ?? null;
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
     * @param string|null $start Start time that was used to perform the query as an ISO-8601-formatted date and time.
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
     * @param string|null $end End time that was used to perform the query as an ISO-8601-formatted date and time.
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets downsample
     *
     * @return string|null
     */
    public function getDownsample()
    {
        return $this->container['downsample'];
    }

    /**
     * Sets downsample
     *
     * @param string|null $downsample Downsample that was used to perform the query. One of `minute`, `hour` or `day`.
     *
     * @return self
     */
    public function setDownsample($downsample)
    {
        $this->container['downsample'] = $downsample;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return string|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param string|null $metrics A comma-separated list of the metrics that were requested.
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return float|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param float|null $limit The maximum number of results shown per page.
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets next_cursor
     *
     * @return string|null
     */
    public function getNextCursor()
    {
        return $this->container['next_cursor'];
    }

    /**
     * Sets next_cursor
     *
     * @param string|null $next_cursor A string that can be used to request the next page of results, if any.
     *
     * @return self
     */
    public function setNextCursor($next_cursor)
    {
        $this->container['next_cursor'] = $next_cursor;

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
     * @param string|null $sort A comma-separated list of keys the results are sorted by.
     *
     * @return self
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets group_by
     *
     * @return string|null
     */
    public function getGroupBy()
    {
        return $this->container['group_by'];
    }

    /**
     * Sets group_by
     *
     * @param string|null $group_by A comma-separated list of dimensions being summed over in the query.
     *
     * @return self
     */
    public function setGroupBy($group_by)
    {
        $this->container['group_by'] = $group_by;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Fastly\Model\OriginInspectorHistoricalMetaFilters|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Fastly\Model\OriginInspectorHistoricalMetaFilters|null $filters filters
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


