<?php
/**
 * DashboardItem
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
 * DashboardItem Class Doc Comment
 *
 * @category Class
 * @description A dashboard item. Typically a data visualization like a chart.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DashboardItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'dashboard-item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'title' => 'string',
        'subtitle' => 'string',
        'data_source' => '\Fastly\Model\DashboardItemPropertyDataSource',
        'visualization' => '\Fastly\Model\DashboardItemPropertyVisualization',
        'id' => 'string',
        'span' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'title' => null,
        'subtitle' => null,
        'data_source' => null,
        'visualization' => null,
        'id' => null,
        'span' => 'int8'
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
        'title' => 'title',
        'subtitle' => 'subtitle',
        'data_source' => 'data_source',
        'visualization' => 'visualization',
        'id' => 'id',
        'span' => 'span'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'subtitle' => 'setSubtitle',
        'data_source' => 'setDataSource',
        'visualization' => 'setVisualization',
        'id' => 'setId',
        'span' => 'setSpan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'subtitle' => 'getSubtitle',
        'data_source' => 'getDataSource',
        'visualization' => 'getVisualization',
        'id' => 'getId',
        'span' => 'getSpan'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['subtitle'] = $data['subtitle'] ?? null;
        $this->container['data_source'] = $data['data_source'] ?? null;
        $this->container['visualization'] = $data['visualization'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['span'] = $data['span'] ?? 4;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 255)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['subtitle'] === null) {
            $invalidProperties[] = "'subtitle' can't be null";
        }
        if ((mb_strlen($this->container['subtitle']) > 255)) {
            $invalidProperties[] = "invalid value for 'subtitle', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['subtitle']) < 1)) {
            $invalidProperties[] = "invalid value for 'subtitle', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['data_source'] === null) {
            $invalidProperties[] = "'data_source' can't be null";
        }
        if ($this->container['visualization'] === null) {
            $invalidProperties[] = "'visualization' can't be null";
        }
        if (!is_null($this->container['span']) && ($this->container['span'] > 12)) {
            $invalidProperties[] = "invalid value for 'span', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['span']) && ($this->container['span'] < 1)) {
            $invalidProperties[] = "invalid value for 'span', must be bigger than or equal to 1.";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title A human-readable title for the dashboard item
     *
     * @return self
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 255)) {
            throw new \InvalidArgumentException('invalid length for $title when calling DashboardItem., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling DashboardItem., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string $subtitle A human-readable subtitle for the dashboard item. Often a description of the visualization.
     *
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        if ((mb_strlen($subtitle) > 255)) {
            throw new \InvalidArgumentException('invalid length for $subtitle when calling DashboardItem., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($subtitle) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subtitle when calling DashboardItem., must be bigger than or equal to 1.');
        }

        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return \Fastly\Model\DashboardItemPropertyDataSource
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param \Fastly\Model\DashboardItemPropertyDataSource $data_source data_source
     *
     * @return self
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets visualization
     *
     * @return \Fastly\Model\DashboardItemPropertyVisualization
     */
    public function getVisualization()
    {
        return $this->container['visualization'];
    }

    /**
     * Sets visualization
     *
     * @param \Fastly\Model\DashboardItemPropertyVisualization $visualization visualization
     *
     * @return self
     */
    public function setVisualization($visualization)
    {
        $this->container['visualization'] = $visualization;

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
     * @param string|null $id Dashboard item identifier (UUID)
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets span
     *
     * @return int|null
     */
    public function getSpan()
    {
        return $this->container['span'];
    }

    /**
     * Sets span
     *
     * @param int|null $span The number of columns for the dashboard item to span. Dashboards are rendered on a 12-column grid on \"desktop\" screen sizes.
     *
     * @return self
     */
    public function setSpan($span)
    {

        if (!is_null($span) && ($span > 12)) {
            throw new \InvalidArgumentException('invalid value for $span when calling DashboardItem., must be smaller than or equal to 12.');
        }
        if (!is_null($span) && ($span < 1)) {
            throw new \InvalidArgumentException('invalid value for $span when calling DashboardItem., must be bigger than or equal to 1.');
        }

        $this->container['span'] = $span;

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


