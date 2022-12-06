<?php
/**
 * RealtimeEntry
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
 * RealtimeEntry Class Doc Comment
 *
 * @category Class
 * @description A list of records, each representing one second of time. The &#x60;Data&#x60; property provides access to [measurement data](#measurements-data-model) for that time period, grouped in various ways.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RealtimeEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'realtime_entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'recorded' => 'int',
        'aggregated' => 'RealtimeMeasurements',
        'datacenter' => 'array<string,\Fastly\Model\RealtimeMeasurements>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'recorded' => null,
        'aggregated' => null,
        'datacenter' => null
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
        'recorded' => 'recorded',
        'aggregated' => 'aggregated',
        'datacenter' => 'datacenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recorded' => 'setRecorded',
        'aggregated' => 'setAggregated',
        'datacenter' => 'setDatacenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recorded' => 'getRecorded',
        'aggregated' => 'getAggregated',
        'datacenter' => 'getDatacenter'
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
        $this->container['recorded'] = $data['recorded'] ?? null;
        $this->container['aggregated'] = $data['aggregated'] ?? null;
        $this->container['datacenter'] = $data['datacenter'] ?? null;
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
     * Gets recorded
     *
     * @return int|null
     */
    public function getRecorded()
    {
        return $this->container['recorded'];
    }

    /**
     * Sets recorded
     *
     * @param int|null $recorded The Unix timestamp at which this record's data was generated.
     *
     * @return self
     */
    public function setRecorded($recorded)
    {
        $this->container['recorded'] = $recorded;

        return $this;
    }

    /**
     * Gets aggregated
     *
     * @return RealtimeMeasurements|null
     */
    public function getAggregated()
    {
        return $this->container['aggregated'];
    }

    /**
     * Sets aggregated
     *
     * @param RealtimeMeasurements|null $aggregated Aggregates [measurements](#measurements-data-model) across all Fastly POPs.
     *
     * @return self
     */
    public function setAggregated($aggregated)
    {
        $this->container['aggregated'] = $aggregated;

        return $this;
    }

    /**
     * Gets datacenter
     *
     * @return array<string,\Fastly\Model\RealtimeMeasurements>|null
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     *
     * @param array<string,\Fastly\Model\RealtimeMeasurements>|null $datacenter Groups [measurements](#measurements-data-model) by POP. See the [POPs API](/reference/api/utils/pops/) for details of POP identifiers.
     *
     * @return self
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
    public function jsonSerialize()
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


