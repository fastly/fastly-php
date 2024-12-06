<?php
/**
 * LogInsightsValues
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
 * LogInsightsValues Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LogInsightsValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'log_insights_values';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'cache_hit_ratio' => 'float',
        'region' => 'string',
        'region_chr' => 'float',
        'region_error_rate' => 'float',
        'url' => 'string',
        'rate_per_status' => 'float',
        'rate_per_url' => 'float',
        '_503_rate_per_url' => 'float',
        'browser_version' => 'string',
        'rate' => 'float',
        'average_bandwidth_bytes' => 'float',
        'bandwidth_percentage' => 'float',
        'average_response_time' => 'float',
        'p95_response_time' => 'float',
        'response_time_percentage' => 'float',
        'miss_rate' => 'float',
        'request_percentage' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'cache_hit_ratio' => 'float',
        'region' => null,
        'region_chr' => 'float',
        'region_error_rate' => 'float',
        'url' => null,
        'rate_per_status' => 'float',
        'rate_per_url' => 'float',
        '_503_rate_per_url' => 'float',
        'browser_version' => null,
        'rate' => 'float',
        'average_bandwidth_bytes' => 'float',
        'bandwidth_percentage' => 'float',
        'average_response_time' => 'float',
        'p95_response_time' => 'float',
        'response_time_percentage' => 'float',
        'miss_rate' => 'float',
        'request_percentage' => 'float'
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
        'cache_hit_ratio' => 'cache_hit_ratio',
        'region' => 'region',
        'region_chr' => 'region_chr',
        'region_error_rate' => 'region_error_rate',
        'url' => 'url',
        'rate_per_status' => 'rate_per_status',
        'rate_per_url' => 'rate_per_url',
        '_503_rate_per_url' => '503_rate_per_url',
        'browser_version' => 'browser_version',
        'rate' => 'rate',
        'average_bandwidth_bytes' => 'average_bandwidth_bytes',
        'bandwidth_percentage' => 'bandwidth_percentage',
        'average_response_time' => 'average_response_time',
        'p95_response_time' => 'p95_response_time',
        'response_time_percentage' => 'response_time_percentage',
        'miss_rate' => 'miss_rate',
        'request_percentage' => 'request_percentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cache_hit_ratio' => 'setCacheHitRatio',
        'region' => 'setRegion',
        'region_chr' => 'setRegionChr',
        'region_error_rate' => 'setRegionErrorRate',
        'url' => 'setUrl',
        'rate_per_status' => 'setRatePerStatus',
        'rate_per_url' => 'setRatePerUrl',
        '_503_rate_per_url' => 'set503RatePerUrl',
        'browser_version' => 'setBrowserVersion',
        'rate' => 'setRate',
        'average_bandwidth_bytes' => 'setAverageBandwidthBytes',
        'bandwidth_percentage' => 'setBandwidthPercentage',
        'average_response_time' => 'setAverageResponseTime',
        'p95_response_time' => 'setP95ResponseTime',
        'response_time_percentage' => 'setResponseTimePercentage',
        'miss_rate' => 'setMissRate',
        'request_percentage' => 'setRequestPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cache_hit_ratio' => 'getCacheHitRatio',
        'region' => 'getRegion',
        'region_chr' => 'getRegionChr',
        'region_error_rate' => 'getRegionErrorRate',
        'url' => 'getUrl',
        'rate_per_status' => 'getRatePerStatus',
        'rate_per_url' => 'getRatePerUrl',
        '_503_rate_per_url' => 'get503RatePerUrl',
        'browser_version' => 'getBrowserVersion',
        'rate' => 'getRate',
        'average_bandwidth_bytes' => 'getAverageBandwidthBytes',
        'bandwidth_percentage' => 'getBandwidthPercentage',
        'average_response_time' => 'getAverageResponseTime',
        'p95_response_time' => 'getP95ResponseTime',
        'response_time_percentage' => 'getResponseTimePercentage',
        'miss_rate' => 'getMissRate',
        'request_percentage' => 'getRequestPercentage'
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
        $this->container['cache_hit_ratio'] = $data['cache_hit_ratio'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['region_chr'] = $data['region_chr'] ?? null;
        $this->container['region_error_rate'] = $data['region_error_rate'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['rate_per_status'] = $data['rate_per_status'] ?? null;
        $this->container['rate_per_url'] = $data['rate_per_url'] ?? null;
        $this->container['_503_rate_per_url'] = $data['_503_rate_per_url'] ?? null;
        $this->container['browser_version'] = $data['browser_version'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['average_bandwidth_bytes'] = $data['average_bandwidth_bytes'] ?? null;
        $this->container['bandwidth_percentage'] = $data['bandwidth_percentage'] ?? null;
        $this->container['average_response_time'] = $data['average_response_time'] ?? null;
        $this->container['p95_response_time'] = $data['p95_response_time'] ?? null;
        $this->container['response_time_percentage'] = $data['response_time_percentage'] ?? null;
        $this->container['miss_rate'] = $data['miss_rate'] ?? null;
        $this->container['request_percentage'] = $data['request_percentage'] ?? null;
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
     * Gets cache_hit_ratio
     *
     * @return float|null
     */
    public function getCacheHitRatio()
    {
        return $this->container['cache_hit_ratio'];
    }

    /**
     * Sets cache_hit_ratio
     *
     * @param float|null $cache_hit_ratio The cache hit ratio for the URL specified in the dimension.
     *
     * @return self
     */
    public function setCacheHitRatio($cache_hit_ratio)
    {
        $this->container['cache_hit_ratio'] = $cache_hit_ratio;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region The client's country subdivision code as defined by ISO 3166-2.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets region_chr
     *
     * @return float|null
     */
    public function getRegionChr()
    {
        return $this->container['region_chr'];
    }

    /**
     * Sets region_chr
     *
     * @param float|null $region_chr The cache hit ratio for the region.
     *
     * @return self
     */
    public function setRegionChr($region_chr)
    {
        $this->container['region_chr'] = $region_chr;

        return $this;
    }

    /**
     * Gets region_error_rate
     *
     * @return float|null
     */
    public function getRegionErrorRate()
    {
        return $this->container['region_error_rate'];
    }

    /**
     * Sets region_error_rate
     *
     * @param float|null $region_error_rate The error rate for the region.
     *
     * @return self
     */
    public function setRegionErrorRate($region_error_rate)
    {
        $this->container['region_error_rate'] = $region_error_rate;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The HTTP request path.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets rate_per_status
     *
     * @return float|null
     */
    public function getRatePerStatus()
    {
        return $this->container['rate_per_status'];
    }

    /**
     * Sets rate_per_status
     *
     * @param float|null $rate_per_status The URL accounts for this percentage of the status code in this dimension.
     *
     * @return self
     */
    public function setRatePerStatus($rate_per_status)
    {
        $this->container['rate_per_status'] = $rate_per_status;

        return $this;
    }

    /**
     * Gets rate_per_url
     *
     * @return float|null
     */
    public function getRatePerUrl()
    {
        return $this->container['rate_per_url'];
    }

    /**
     * Sets rate_per_url
     *
     * @param float|null $rate_per_url The rate at which the reason in this dimension occurs among responses to this URL with a 503 status code.
     *
     * @return self
     */
    public function setRatePerUrl($rate_per_url)
    {
        $this->container['rate_per_url'] = $rate_per_url;

        return $this;
    }

    /**
     * Gets _503_rate_per_url
     *
     * @return float|null
     */
    public function get503RatePerUrl()
    {
        return $this->container['_503_rate_per_url'];
    }

    /**
     * Sets _503_rate_per_url
     *
     * @param float|null $_503_rate_per_url The rate at which 503 status codes are returned for this URL.
     *
     * @return self
     */
    public function set503RatePerUrl($_503_rate_per_url)
    {
        $this->container['_503_rate_per_url'] = $_503_rate_per_url;

        return $this;
    }

    /**
     * Gets browser_version
     *
     * @return string|null
     */
    public function getBrowserVersion()
    {
        return $this->container['browser_version'];
    }

    /**
     * Sets browser_version
     *
     * @param string|null $browser_version The version of the client's browser.
     *
     * @return self
     */
    public function setBrowserVersion($browser_version)
    {
        $this->container['browser_version'] = $browser_version;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate The percentage of requests matching the value in the current dimension.
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets average_bandwidth_bytes
     *
     * @return float|null
     */
    public function getAverageBandwidthBytes()
    {
        return $this->container['average_bandwidth_bytes'];
    }

    /**
     * Sets average_bandwidth_bytes
     *
     * @param float|null $average_bandwidth_bytes The average bandwidth in bytes for responses to requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setAverageBandwidthBytes($average_bandwidth_bytes)
    {
        $this->container['average_bandwidth_bytes'] = $average_bandwidth_bytes;

        return $this;
    }

    /**
     * Gets bandwidth_percentage
     *
     * @return float|null
     */
    public function getBandwidthPercentage()
    {
        return $this->container['bandwidth_percentage'];
    }

    /**
     * Sets bandwidth_percentage
     *
     * @param float|null $bandwidth_percentage The total bandwidth percentage for all responses to requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setBandwidthPercentage($bandwidth_percentage)
    {
        $this->container['bandwidth_percentage'] = $bandwidth_percentage;

        return $this;
    }

    /**
     * Gets average_response_time
     *
     * @return float|null
     */
    public function getAverageResponseTime()
    {
        return $this->container['average_response_time'];
    }

    /**
     * Sets average_response_time
     *
     * @param float|null $average_response_time The average time in seconds to respond to requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setAverageResponseTime($average_response_time)
    {
        $this->container['average_response_time'] = $average_response_time;

        return $this;
    }

    /**
     * Gets p95_response_time
     *
     * @return float|null
     */
    public function getP95ResponseTime()
    {
        return $this->container['p95_response_time'];
    }

    /**
     * Sets p95_response_time
     *
     * @param float|null $p95_response_time The P95 time in seconds to respond to requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setP95ResponseTime($p95_response_time)
    {
        $this->container['p95_response_time'] = $p95_response_time;

        return $this;
    }

    /**
     * Gets response_time_percentage
     *
     * @return float|null
     */
    public function getResponseTimePercentage()
    {
        return $this->container['response_time_percentage'];
    }

    /**
     * Sets response_time_percentage
     *
     * @param float|null $response_time_percentage The total percentage of time to respond to all requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setResponseTimePercentage($response_time_percentage)
    {
        $this->container['response_time_percentage'] = $response_time_percentage;

        return $this;
    }

    /**
     * Gets miss_rate
     *
     * @return float|null
     */
    public function getMissRate()
    {
        return $this->container['miss_rate'];
    }

    /**
     * Sets miss_rate
     *
     * @param float|null $miss_rate The miss rate for requests to the URL in the current dimension.
     *
     * @return self
     */
    public function setMissRate($miss_rate)
    {
        $this->container['miss_rate'] = $miss_rate;

        return $this;
    }

    /**
     * Gets request_percentage
     *
     * @return float|null
     */
    public function getRequestPercentage()
    {
        return $this->container['request_percentage'];
    }

    /**
     * Sets request_percentage
     *
     * @param float|null $request_percentage The percentage of all requests made to the URL in the current dimension.
     *
     * @return self
     */
    public function setRequestPercentage($request_percentage)
    {
        $this->container['request_percentage'] = $request_percentage;

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


