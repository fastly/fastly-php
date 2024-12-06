<?php
/**
 * LogRecord
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
 * LogRecord Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LogRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'log_record';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'customer_id' => 'string',
        'service_id' => '\Fastly\Model\LogPropertyServiceId',
        'timestamp' => '\DateTime',
        'client_as_number' => 'int',
        'client_region' => 'string',
        'client_country_code' => 'string',
        'client_os_name' => 'string',
        'client_device_type' => 'string',
        'client_browser_name' => 'string',
        'client_browser_version' => 'string',
        'fastly_pop' => 'string',
        'origin_host' => 'string',
        'request_protocol' => 'string',
        'request_host' => 'string',
        'request_path' => 'string',
        'request_method' => 'string',
        'response_bytes_body' => 'int',
        'response_bytes_header' => 'int',
        'response_content_length' => 'int',
        'response_content_type' => 'string',
        'response_reason' => 'string',
        'response_state' => 'string',
        'response_status' => 'int',
        'response_time' => 'float',
        'response_x_cache' => 'string',
        'is_cache_hit' => 'bool',
        'is_edge' => 'bool',
        'is_shield' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'customer_id' => null,
        'service_id' => null,
        'timestamp' => 'date-time',
        'client_as_number' => null,
        'client_region' => null,
        'client_country_code' => null,
        'client_os_name' => null,
        'client_device_type' => null,
        'client_browser_name' => null,
        'client_browser_version' => null,
        'fastly_pop' => null,
        'origin_host' => null,
        'request_protocol' => null,
        'request_host' => null,
        'request_path' => null,
        'request_method' => null,
        'response_bytes_body' => null,
        'response_bytes_header' => null,
        'response_content_length' => null,
        'response_content_type' => null,
        'response_reason' => null,
        'response_state' => null,
        'response_status' => null,
        'response_time' => 'float',
        'response_x_cache' => null,
        'is_cache_hit' => null,
        'is_edge' => null,
        'is_shield' => null
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
        'customer_id' => 'customer_id',
        'service_id' => 'service_id',
        'timestamp' => 'timestamp',
        'client_as_number' => 'client_as_number',
        'client_region' => 'client_region',
        'client_country_code' => 'client_country_code',
        'client_os_name' => 'client_os_name',
        'client_device_type' => 'client_device_type',
        'client_browser_name' => 'client_browser_name',
        'client_browser_version' => 'client_browser_version',
        'fastly_pop' => 'fastly_pop',
        'origin_host' => 'origin_host',
        'request_protocol' => 'request_protocol',
        'request_host' => 'request_host',
        'request_path' => 'request_path',
        'request_method' => 'request_method',
        'response_bytes_body' => 'response_bytes_body',
        'response_bytes_header' => 'response_bytes_header',
        'response_content_length' => 'response_content_length',
        'response_content_type' => 'response_content_type',
        'response_reason' => 'response_reason',
        'response_state' => 'response_state',
        'response_status' => 'response_status',
        'response_time' => 'response_time',
        'response_x_cache' => 'response_x_cache',
        'is_cache_hit' => 'is_cache_hit',
        'is_edge' => 'is_edge',
        'is_shield' => 'is_shield'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'service_id' => 'setServiceId',
        'timestamp' => 'setTimestamp',
        'client_as_number' => 'setClientAsNumber',
        'client_region' => 'setClientRegion',
        'client_country_code' => 'setClientCountryCode',
        'client_os_name' => 'setClientOsName',
        'client_device_type' => 'setClientDeviceType',
        'client_browser_name' => 'setClientBrowserName',
        'client_browser_version' => 'setClientBrowserVersion',
        'fastly_pop' => 'setFastlyPop',
        'origin_host' => 'setOriginHost',
        'request_protocol' => 'setRequestProtocol',
        'request_host' => 'setRequestHost',
        'request_path' => 'setRequestPath',
        'request_method' => 'setRequestMethod',
        'response_bytes_body' => 'setResponseBytesBody',
        'response_bytes_header' => 'setResponseBytesHeader',
        'response_content_length' => 'setResponseContentLength',
        'response_content_type' => 'setResponseContentType',
        'response_reason' => 'setResponseReason',
        'response_state' => 'setResponseState',
        'response_status' => 'setResponseStatus',
        'response_time' => 'setResponseTime',
        'response_x_cache' => 'setResponseXCache',
        'is_cache_hit' => 'setIsCacheHit',
        'is_edge' => 'setIsEdge',
        'is_shield' => 'setIsShield'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'service_id' => 'getServiceId',
        'timestamp' => 'getTimestamp',
        'client_as_number' => 'getClientAsNumber',
        'client_region' => 'getClientRegion',
        'client_country_code' => 'getClientCountryCode',
        'client_os_name' => 'getClientOsName',
        'client_device_type' => 'getClientDeviceType',
        'client_browser_name' => 'getClientBrowserName',
        'client_browser_version' => 'getClientBrowserVersion',
        'fastly_pop' => 'getFastlyPop',
        'origin_host' => 'getOriginHost',
        'request_protocol' => 'getRequestProtocol',
        'request_host' => 'getRequestHost',
        'request_path' => 'getRequestPath',
        'request_method' => 'getRequestMethod',
        'response_bytes_body' => 'getResponseBytesBody',
        'response_bytes_header' => 'getResponseBytesHeader',
        'response_content_length' => 'getResponseContentLength',
        'response_content_type' => 'getResponseContentType',
        'response_reason' => 'getResponseReason',
        'response_state' => 'getResponseState',
        'response_status' => 'getResponseStatus',
        'response_time' => 'getResponseTime',
        'response_x_cache' => 'getResponseXCache',
        'is_cache_hit' => 'getIsCacheHit',
        'is_edge' => 'getIsEdge',
        'is_shield' => 'getIsShield'
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
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['client_as_number'] = $data['client_as_number'] ?? null;
        $this->container['client_region'] = $data['client_region'] ?? null;
        $this->container['client_country_code'] = $data['client_country_code'] ?? null;
        $this->container['client_os_name'] = $data['client_os_name'] ?? null;
        $this->container['client_device_type'] = $data['client_device_type'] ?? null;
        $this->container['client_browser_name'] = $data['client_browser_name'] ?? null;
        $this->container['client_browser_version'] = $data['client_browser_version'] ?? null;
        $this->container['fastly_pop'] = $data['fastly_pop'] ?? null;
        $this->container['origin_host'] = $data['origin_host'] ?? null;
        $this->container['request_protocol'] = $data['request_protocol'] ?? null;
        $this->container['request_host'] = $data['request_host'] ?? null;
        $this->container['request_path'] = $data['request_path'] ?? null;
        $this->container['request_method'] = $data['request_method'] ?? null;
        $this->container['response_bytes_body'] = $data['response_bytes_body'] ?? null;
        $this->container['response_bytes_header'] = $data['response_bytes_header'] ?? null;
        $this->container['response_content_length'] = $data['response_content_length'] ?? null;
        $this->container['response_content_type'] = $data['response_content_type'] ?? null;
        $this->container['response_reason'] = $data['response_reason'] ?? null;
        $this->container['response_state'] = $data['response_state'] ?? null;
        $this->container['response_status'] = $data['response_status'] ?? null;
        $this->container['response_time'] = $data['response_time'] ?? null;
        $this->container['response_x_cache'] = $data['response_x_cache'] ?? null;
        $this->container['is_cache_hit'] = $data['is_cache_hit'] ?? null;
        $this->container['is_edge'] = $data['is_edge'] ?? null;
        $this->container['is_shield'] = $data['is_shield'] ?? null;
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
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id The ID of the Fastly customer that owns the service.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return \Fastly\Model\LogPropertyServiceId|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param \Fastly\Model\LogPropertyServiceId|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Timestamp of the request in ISO 8601 format.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets client_as_number
     *
     * @return int|null
     */
    public function getClientAsNumber()
    {
        return $this->container['client_as_number'];
    }

    /**
     * Sets client_as_number
     *
     * @param int|null $client_as_number The autonomous system (AS) number of the client.
     *
     * @return self
     */
    public function setClientAsNumber($client_as_number)
    {
        $this->container['client_as_number'] = $client_as_number;

        return $this;
    }

    /**
     * Gets client_region
     *
     * @return string|null
     */
    public function getClientRegion()
    {
        return $this->container['client_region'];
    }

    /**
     * Sets client_region
     *
     * @param string|null $client_region The client's country subdivision code as found in ISO 3166-2.
     *
     * @return self
     */
    public function setClientRegion($client_region)
    {
        $this->container['client_region'] = $client_region;

        return $this;
    }

    /**
     * Gets client_country_code
     *
     * @return string|null
     */
    public function getClientCountryCode()
    {
        return $this->container['client_country_code'];
    }

    /**
     * Sets client_country_code
     *
     * @param string|null $client_country_code The two-letter ISO 3166-1 country code for the client.
     *
     * @return self
     */
    public function setClientCountryCode($client_country_code)
    {
        $this->container['client_country_code'] = $client_country_code;

        return $this;
    }

    /**
     * Gets client_os_name
     *
     * @return string|null
     */
    public function getClientOsName()
    {
        return $this->container['client_os_name'];
    }

    /**
     * Sets client_os_name
     *
     * @param string|null $client_os_name The name of the operating system installed on the client device.
     *
     * @return self
     */
    public function setClientOsName($client_os_name)
    {
        $this->container['client_os_name'] = $client_os_name;

        return $this;
    }

    /**
     * Gets client_device_type
     *
     * @return string|null
     */
    public function getClientDeviceType()
    {
        return $this->container['client_device_type'];
    }

    /**
     * Sets client_device_type
     *
     * @param string|null $client_device_type The type of the client's device.
     *
     * @return self
     */
    public function setClientDeviceType($client_device_type)
    {
        $this->container['client_device_type'] = $client_device_type;

        return $this;
    }

    /**
     * Gets client_browser_name
     *
     * @return string|null
     */
    public function getClientBrowserName()
    {
        return $this->container['client_browser_name'];
    }

    /**
     * Sets client_browser_name
     *
     * @param string|null $client_browser_name The name of the browser in use on the client device.
     *
     * @return self
     */
    public function setClientBrowserName($client_browser_name)
    {
        $this->container['client_browser_name'] = $client_browser_name;

        return $this;
    }

    /**
     * Gets client_browser_version
     *
     * @return string|null
     */
    public function getClientBrowserVersion()
    {
        return $this->container['client_browser_version'];
    }

    /**
     * Sets client_browser_version
     *
     * @param string|null $client_browser_version The version of the browser in use on client device.
     *
     * @return self
     */
    public function setClientBrowserVersion($client_browser_version)
    {
        $this->container['client_browser_version'] = $client_browser_version;

        return $this;
    }

    /**
     * Gets fastly_pop
     *
     * @return string|null
     */
    public function getFastlyPop()
    {
        return $this->container['fastly_pop'];
    }

    /**
     * Sets fastly_pop
     *
     * @param string|null $fastly_pop The name of the Fastly POP that served this request.
     *
     * @return self
     */
    public function setFastlyPop($fastly_pop)
    {
        $this->container['fastly_pop'] = $fastly_pop;

        return $this;
    }

    /**
     * Gets origin_host
     *
     * @return string|null
     */
    public function getOriginHost()
    {
        return $this->container['origin_host'];
    }

    /**
     * Sets origin_host
     *
     * @param string|null $origin_host The name of the origin host that served this request.
     *
     * @return self
     */
    public function setOriginHost($origin_host)
    {
        $this->container['origin_host'] = $origin_host;

        return $this;
    }

    /**
     * Gets request_protocol
     *
     * @return string|null
     */
    public function getRequestProtocol()
    {
        return $this->container['request_protocol'];
    }

    /**
     * Sets request_protocol
     *
     * @param string|null $request_protocol HTTP protocol version in use for this request. For example, HTTP/1.1.
     *
     * @return self
     */
    public function setRequestProtocol($request_protocol)
    {
        $this->container['request_protocol'] = $request_protocol;

        return $this;
    }

    /**
     * Gets request_host
     *
     * @return string|null
     */
    public function getRequestHost()
    {
        return $this->container['request_host'];
    }

    /**
     * Sets request_host
     *
     * @param string|null $request_host The name of the request host used for this request.
     *
     * @return self
     */
    public function setRequestHost($request_host)
    {
        $this->container['request_host'] = $request_host;

        return $this;
    }

    /**
     * Gets request_path
     *
     * @return string|null
     */
    public function getRequestPath()
    {
        return $this->container['request_path'];
    }

    /**
     * Sets request_path
     *
     * @param string|null $request_path The URL path supplied for this request.
     *
     * @return self
     */
    public function setRequestPath($request_path)
    {
        $this->container['request_path'] = $request_path;

        return $this;
    }

    /**
     * Gets request_method
     *
     * @return string|null
     */
    public function getRequestMethod()
    {
        return $this->container['request_method'];
    }

    /**
     * Sets request_method
     *
     * @param string|null $request_method HTTP method sent by the client such as \"GET\" or \"POST\".
     *
     * @return self
     */
    public function setRequestMethod($request_method)
    {
        $this->container['request_method'] = $request_method;

        return $this;
    }

    /**
     * Gets response_bytes_body
     *
     * @return int|null
     */
    public function getResponseBytesBody()
    {
        return $this->container['response_bytes_body'];
    }

    /**
     * Sets response_bytes_body
     *
     * @param int|null $response_bytes_body Body bytes sent to the client in the response.
     *
     * @return self
     */
    public function setResponseBytesBody($response_bytes_body)
    {
        $this->container['response_bytes_body'] = $response_bytes_body;

        return $this;
    }

    /**
     * Gets response_bytes_header
     *
     * @return int|null
     */
    public function getResponseBytesHeader()
    {
        return $this->container['response_bytes_header'];
    }

    /**
     * Sets response_bytes_header
     *
     * @param int|null $response_bytes_header Header bytes sent to the client in the response.
     *
     * @return self
     */
    public function setResponseBytesHeader($response_bytes_header)
    {
        $this->container['response_bytes_header'] = $response_bytes_header;

        return $this;
    }

    /**
     * Gets response_content_length
     *
     * @return int|null
     */
    public function getResponseContentLength()
    {
        return $this->container['response_content_length'];
    }

    /**
     * Sets response_content_length
     *
     * @param int|null $response_content_length Total bytes sent to the client in the response.
     *
     * @return self
     */
    public function setResponseContentLength($response_content_length)
    {
        $this->container['response_content_length'] = $response_content_length;

        return $this;
    }

    /**
     * Gets response_content_type
     *
     * @return string|null
     */
    public function getResponseContentType()
    {
        return $this->container['response_content_type'];
    }

    /**
     * Sets response_content_type
     *
     * @param string|null $response_content_type The content type of the response sent to the client.
     *
     * @return self
     */
    public function setResponseContentType($response_content_type)
    {
        $this->container['response_content_type'] = $response_content_type;

        return $this;
    }

    /**
     * Gets response_reason
     *
     * @return string|null
     */
    public function getResponseReason()
    {
        return $this->container['response_reason'];
    }

    /**
     * Sets response_reason
     *
     * @param string|null $response_reason The HTTP reason phrase returned for this request, if any.
     *
     * @return self
     */
    public function setResponseReason($response_reason)
    {
        $this->container['response_reason'] = $response_reason;

        return $this;
    }

    /**
     * Gets response_state
     *
     * @return string|null
     */
    public function getResponseState()
    {
        return $this->container['response_state'];
    }

    /**
     * Sets response_state
     *
     * @param string|null $response_state The state of the request with optional suffixes describing special cases.
     *
     * @return self
     */
    public function setResponseState($response_state)
    {
        $this->container['response_state'] = $response_state;

        return $this;
    }

    /**
     * Gets response_status
     *
     * @return int|null
     */
    public function getResponseStatus()
    {
        return $this->container['response_status'];
    }

    /**
     * Sets response_status
     *
     * @param int|null $response_status The HTTP response code returned for this request.
     *
     * @return self
     */
    public function setResponseStatus($response_status)
    {
        $this->container['response_status'] = $response_status;

        return $this;
    }

    /**
     * Gets response_time
     *
     * @return float|null
     */
    public function getResponseTime()
    {
        return $this->container['response_time'];
    }

    /**
     * Sets response_time
     *
     * @param float|null $response_time The time since the request started in seconds.
     *
     * @return self
     */
    public function setResponseTime($response_time)
    {
        $this->container['response_time'] = $response_time;

        return $this;
    }

    /**
     * Gets response_x_cache
     *
     * @return string|null
     */
    public function getResponseXCache()
    {
        return $this->container['response_x_cache'];
    }

    /**
     * Sets response_x_cache
     *
     * @param string|null $response_x_cache Indicates whether the request was a HIT or a MISS.
     *
     * @return self
     */
    public function setResponseXCache($response_x_cache)
    {
        $this->container['response_x_cache'] = $response_x_cache;

        return $this;
    }

    /**
     * Gets is_cache_hit
     *
     * @return bool|null
     */
    public function getIsCacheHit()
    {
        return $this->container['is_cache_hit'];
    }

    /**
     * Sets is_cache_hit
     *
     * @param bool|null $is_cache_hit Indicates whether this request was fulfilled from cache.
     *
     * @return self
     */
    public function setIsCacheHit($is_cache_hit)
    {
        $this->container['is_cache_hit'] = $is_cache_hit;

        return $this;
    }

    /**
     * Gets is_edge
     *
     * @return bool|null
     */
    public function getIsEdge()
    {
        return $this->container['is_edge'];
    }

    /**
     * Sets is_edge
     *
     * @param bool|null $is_edge Indicates whether the request was handled by a Fastly edge POP.
     *
     * @return self
     */
    public function setIsEdge($is_edge)
    {
        $this->container['is_edge'] = $is_edge;

        return $this;
    }

    /**
     * Gets is_shield
     *
     * @return bool|null
     */
    public function getIsShield()
    {
        return $this->container['is_shield'];
    }

    /**
     * Sets is_shield
     *
     * @param bool|null $is_shield Indicates whether the request was handled by a Fastly shield POP.
     *
     * @return self
     */
    public function setIsShield($is_shield)
    {
        $this->container['is_shield'] = $is_shield;

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


