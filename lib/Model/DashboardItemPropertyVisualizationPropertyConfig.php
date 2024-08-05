<?php
/**
 * DashboardItemPropertyVisualizationPropertyConfig
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
 * DashboardItemPropertyVisualizationPropertyConfig Class Doc Comment
 *
 * @category Class
 * @description [Configuration options](#visualization-config) for the given visualization.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DashboardItemPropertyVisualizationPropertyConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'dashboard-item-property-visualization-property-config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'plot_type' => 'string',
        'format' => 'string',
        'calculation_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'plot_type' => null,
        'format' => null,
        'calculation_method' => null
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
        'plot_type' => 'plot_type',
        'format' => 'format',
        'calculation_method' => 'calculation_method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plot_type' => 'setPlotType',
        'format' => 'setFormat',
        'calculation_method' => 'setCalculationMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plot_type' => 'getPlotType',
        'format' => 'getFormat',
        'calculation_method' => 'getCalculationMethod'
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

    const PLOT_TYPE_LINE = 'line';
    const PLOT_TYPE_BAR = 'bar';
    const PLOT_TYPE_SINGLE_METRIC = 'single-metric';
    const PLOT_TYPE_DONUT = 'donut';
    const FORMAT_NUMBER = 'number';
    const FORMAT_BYTES = 'bytes';
    const FORMAT_PERCENT = 'percent';
    const FORMAT_REQUESTS = 'requests';
    const FORMAT_RESPONSES = 'responses';
    const FORMAT_SECONDS = 'seconds';
    const FORMAT_MILLISECONDS = 'milliseconds';
    const FORMAT_RATIO = 'ratio';
    const FORMAT_BITRATE = 'bitrate';
    const CALCULATION_METHOD_AVG = 'avg';
    const CALCULATION_METHOD_SUM = 'sum';
    const CALCULATION_METHOD_MIN = 'min';
    const CALCULATION_METHOD_MAX = 'max';
    const CALCULATION_METHOD_LATEST = 'latest';
    const CALCULATION_METHOD_P95 = 'p95';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlotTypeAllowableValues()
    {
        return [
            self::PLOT_TYPE_LINE,
            self::PLOT_TYPE_BAR,
            self::PLOT_TYPE_SINGLE_METRIC,
            self::PLOT_TYPE_DONUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_NUMBER,
            self::FORMAT_BYTES,
            self::FORMAT_PERCENT,
            self::FORMAT_REQUESTS,
            self::FORMAT_RESPONSES,
            self::FORMAT_SECONDS,
            self::FORMAT_MILLISECONDS,
            self::FORMAT_RATIO,
            self::FORMAT_BITRATE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalculationMethodAllowableValues()
    {
        return [
            self::CALCULATION_METHOD_AVG,
            self::CALCULATION_METHOD_SUM,
            self::CALCULATION_METHOD_MIN,
            self::CALCULATION_METHOD_MAX,
            self::CALCULATION_METHOD_LATEST,
            self::CALCULATION_METHOD_P95,
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
        $this->container['plot_type'] = $data['plot_type'] ?? null;
        $this->container['format'] = $data['format'] ?? 'number';
        $this->container['calculation_method'] = $data['calculation_method'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['plot_type'] === null) {
            $invalidProperties[] = "'plot_type' can't be null";
        }
        $allowedValues = $this->getPlotTypeAllowableValues();
        if (!is_null($this->container['plot_type']) && !in_array($this->container['plot_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'plot_type', must be one of '%s'",
                $this->container['plot_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCalculationMethodAllowableValues();
        if (!is_null($this->container['calculation_method']) && !in_array($this->container['calculation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'calculation_method', must be one of '%s'",
                $this->container['calculation_method'],
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
     * Gets plot_type
     *
     * @return string
     */
    public function getPlotType()
    {
        return $this->container['plot_type'];
    }

    /**
     * Sets plot_type
     *
     * @param string $plot_type The type of chart to display.
     *
     * @return self
     */
    public function setPlotType($plot_type)
    {
        $allowedValues = $this->getPlotTypeAllowableValues();
        if (!in_array($plot_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'plot_type', must be one of '%s'",
                    $plot_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['plot_type'] = $plot_type;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format (Optional) The units to use to format the data.
     *
     * @return self
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets calculation_method
     *
     * @return string|null
     */
    public function getCalculationMethod()
    {
        return $this->container['calculation_method'];
    }

    /**
     * Sets calculation_method
     *
     * @param string|null $calculation_method (Optional) The aggregation function to apply to the dataset.
     *
     * @return self
     */
    public function setCalculationMethod($calculation_method)
    {
        $allowedValues = $this->getCalculationMethodAllowableValues();
        if (!is_null($calculation_method) && !in_array($calculation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'calculation_method', must be one of '%s'",
                    $calculation_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['calculation_method'] = $calculation_method;

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


