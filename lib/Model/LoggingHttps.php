<?php
/**
 * LoggingHttps
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
 * LoggingHttps Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingHttps implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_https';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'placement' => 'string',
        'format_version' => 'int',
        'response_condition' => 'string',
        'format' => 'string',
        'tls_ca_cert' => 'string',
        'tls_client_cert' => 'string',
        'tls_client_key' => 'string',
        'tls_hostname' => 'string',
        'request_max_entries' => 'int',
        'request_max_bytes' => 'int',
        'url' => 'string',
        'content_type' => 'string',
        'header_name' => 'string',
        'message_type' => '\Fastly\Model\LoggingMessageType',
        'header_value' => 'string',
        'method' => 'string',
        'json_format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'name' => null,
        'placement' => null,
        'format_version' => null,
        'response_condition' => null,
        'format' => null,
        'tls_ca_cert' => null,
        'tls_client_cert' => null,
        'tls_client_key' => null,
        'tls_hostname' => null,
        'request_max_entries' => null,
        'request_max_bytes' => null,
        'url' => null,
        'content_type' => null,
        'header_name' => null,
        'message_type' => null,
        'header_value' => null,
        'method' => null,
        'json_format' => null
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
        'name' => 'name',
        'placement' => 'placement',
        'format_version' => 'format_version',
        'response_condition' => 'response_condition',
        'format' => 'format',
        'tls_ca_cert' => 'tls_ca_cert',
        'tls_client_cert' => 'tls_client_cert',
        'tls_client_key' => 'tls_client_key',
        'tls_hostname' => 'tls_hostname',
        'request_max_entries' => 'request_max_entries',
        'request_max_bytes' => 'request_max_bytes',
        'url' => 'url',
        'content_type' => 'content_type',
        'header_name' => 'header_name',
        'message_type' => 'message_type',
        'header_value' => 'header_value',
        'method' => 'method',
        'json_format' => 'json_format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'placement' => 'setPlacement',
        'format_version' => 'setFormatVersion',
        'response_condition' => 'setResponseCondition',
        'format' => 'setFormat',
        'tls_ca_cert' => 'setTlsCaCert',
        'tls_client_cert' => 'setTlsClientCert',
        'tls_client_key' => 'setTlsClientKey',
        'tls_hostname' => 'setTlsHostname',
        'request_max_entries' => 'setRequestMaxEntries',
        'request_max_bytes' => 'setRequestMaxBytes',
        'url' => 'setUrl',
        'content_type' => 'setContentType',
        'header_name' => 'setHeaderName',
        'message_type' => 'setMessageType',
        'header_value' => 'setHeaderValue',
        'method' => 'setMethod',
        'json_format' => 'setJsonFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'placement' => 'getPlacement',
        'format_version' => 'getFormatVersion',
        'response_condition' => 'getResponseCondition',
        'format' => 'getFormat',
        'tls_ca_cert' => 'getTlsCaCert',
        'tls_client_cert' => 'getTlsClientCert',
        'tls_client_key' => 'getTlsClientKey',
        'tls_hostname' => 'getTlsHostname',
        'request_max_entries' => 'getRequestMaxEntries',
        'request_max_bytes' => 'getRequestMaxBytes',
        'url' => 'getUrl',
        'content_type' => 'getContentType',
        'header_name' => 'getHeaderName',
        'message_type' => 'getMessageType',
        'header_value' => 'getHeaderValue',
        'method' => 'getMethod',
        'json_format' => 'getJsonFormat'
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

    const PLACEMENT_NONE = 'none';
    const PLACEMENT_WAF_DEBUG = 'waf_debug';
    const PLACEMENT_NULL = 'null';
    const FORMAT_VERSION_v1 = 1;
    const FORMAT_VERSION_v2 = 2;
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const JSON_FORMAT_disabled = '0';
    const JSON_FORMAT_json_array = '1';
    const JSON_FORMAT_newline_delimited_json = '2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlacementAllowableValues()
    {
        return [
            self::PLACEMENT_NONE,
            self::PLACEMENT_WAF_DEBUG,
            self::PLACEMENT_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatVersionAllowableValues()
    {
        return [
            self::FORMAT_VERSION_v1,
            self::FORMAT_VERSION_v2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_POST,
            self::METHOD_PUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJsonFormatAllowableValues()
    {
        return [
            self::JSON_FORMAT_disabled,
            self::JSON_FORMAT_json_array,
            self::JSON_FORMAT_newline_delimited_json,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['placement'] = $data['placement'] ?? null;
        $this->container['format_version'] = $data['format_version'] ?? self::FORMAT_VERSION_v2;
        $this->container['response_condition'] = $data['response_condition'] ?? null;
        $this->container['format'] = $data['format'] ?? '%h %l %u %t "%r" %&gt;s %b';
        $this->container['tls_ca_cert'] = $data['tls_ca_cert'] ?? 'null';
        $this->container['tls_client_cert'] = $data['tls_client_cert'] ?? 'null';
        $this->container['tls_client_key'] = $data['tls_client_key'] ?? 'null';
        $this->container['tls_hostname'] = $data['tls_hostname'] ?? 'null';
        $this->container['request_max_entries'] = $data['request_max_entries'] ?? 0;
        $this->container['request_max_bytes'] = $data['request_max_bytes'] ?? 0;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? 'null';
        $this->container['header_name'] = $data['header_name'] ?? 'null';
        $this->container['message_type'] = $data['message_type'] ?? null;
        $this->container['header_value'] = $data['header_value'] ?? 'null';
        $this->container['method'] = $data['method'] ?? 'POST';
        $this->container['json_format'] = $data['json_format'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPlacementAllowableValues();
        if (!is_null($this->container['placement']) && !in_array($this->container['placement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'placement', must be one of '%s'",
                $this->container['placement'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatVersionAllowableValues();
        if (!is_null($this->container['format_version']) && !in_array($this->container['format_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format_version', must be one of '%s'",
                $this->container['format_version'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method', must be one of '%s'",
                $this->container['method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJsonFormatAllowableValues();
        if (!is_null($this->container['json_format']) && !in_array($this->container['json_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'json_format', must be one of '%s'",
                $this->container['json_format'],
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name for the real-time logging configuration.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets placement
     *
     * @return string|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param string|null $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        $allowedValues = $this->getPlacementAllowableValues();
        if (!is_null($placement) && !in_array($placement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'placement', must be one of '%s'",
                    $placement,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['placement'] = $placement;

        return $this;
    }

    /**
     * Gets format_version
     *
     * @return int|null
     */
    public function getFormatVersion()
    {
        return $this->container['format_version'];
    }

    /**
     * Sets format_version
     *
     * @param int|null $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
     *
     * @return self
     */
    public function setFormatVersion($format_version)
    {
        $allowedValues = $this->getFormatVersionAllowableValues();
        if (!is_null($format_version) && !in_array($format_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format_version', must be one of '%s'",
                    $format_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format_version'] = $format_version;

        return $this;
    }

    /**
     * Gets response_condition
     *
     * @return string|null
     */
    public function getResponseCondition()
    {
        return $this->container['response_condition'];
    }

    /**
     * Sets response_condition
     *
     * @param string|null $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute.
     *
     * @return self
     */
    public function setResponseCondition($response_condition)
    {
        $this->container['response_condition'] = $response_condition;

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
     * @param string|null $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets tls_ca_cert
     *
     * @return string|null
     */
    public function getTlsCaCert()
    {
        return $this->container['tls_ca_cert'];
    }

    /**
     * Sets tls_ca_cert
     *
     * @param string|null $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format.
     *
     * @return self
     */
    public function setTlsCaCert($tls_ca_cert)
    {
        $this->container['tls_ca_cert'] = $tls_ca_cert;

        return $this;
    }

    /**
     * Gets tls_client_cert
     *
     * @return string|null
     */
    public function getTlsClientCert()
    {
        return $this->container['tls_client_cert'];
    }

    /**
     * Sets tls_client_cert
     *
     * @param string|null $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format.
     *
     * @return self
     */
    public function setTlsClientCert($tls_client_cert)
    {
        $this->container['tls_client_cert'] = $tls_client_cert;

        return $this;
    }

    /**
     * Gets tls_client_key
     *
     * @return string|null
     */
    public function getTlsClientKey()
    {
        return $this->container['tls_client_key'];
    }

    /**
     * Sets tls_client_key
     *
     * @param string|null $tls_client_key The client private key used to make authenticated requests. Must be in PEM format.
     *
     * @return self
     */
    public function setTlsClientKey($tls_client_key)
    {
        $this->container['tls_client_key'] = $tls_client_key;

        return $this;
    }

    /**
     * Gets tls_hostname
     *
     * @return string|null
     */
    public function getTlsHostname()
    {
        return $this->container['tls_hostname'];
    }

    /**
     * Sets tls_hostname
     *
     * @param string|null $tls_hostname The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
     *
     * @return self
     */
    public function setTlsHostname($tls_hostname)
    {
        $this->container['tls_hostname'] = $tls_hostname;

        return $this;
    }

    /**
     * Gets request_max_entries
     *
     * @return int|null
     */
    public function getRequestMaxEntries()
    {
        return $this->container['request_max_entries'];
    }

    /**
     * Sets request_max_entries
     *
     * @param int|null $request_max_entries The maximum number of logs sent in one request. Defaults `0` (10k).
     *
     * @return self
     */
    public function setRequestMaxEntries($request_max_entries)
    {
        $this->container['request_max_entries'] = $request_max_entries;

        return $this;
    }

    /**
     * Gets request_max_bytes
     *
     * @return int|null
     */
    public function getRequestMaxBytes()
    {
        return $this->container['request_max_bytes'];
    }

    /**
     * Sets request_max_bytes
     *
     * @param int|null $request_max_bytes The maximum number of bytes sent in one request. Defaults `0` (100MB).
     *
     * @return self
     */
    public function setRequestMaxBytes($request_max_bytes)
    {
        $this->container['request_max_bytes'] = $request_max_bytes;

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
     * @param string|null $url The URL to send logs to. Must use HTTPS. Required.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type Content type of the header sent with the request.
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets header_name
     *
     * @return string|null
     */
    public function getHeaderName()
    {
        return $this->container['header_name'];
    }

    /**
     * Sets header_name
     *
     * @param string|null $header_name Name of the custom header sent with the request.
     *
     * @return self
     */
    public function setHeaderName($header_name)
    {
        $this->container['header_name'] = $header_name;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return \Fastly\Model\LoggingMessageType|null
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param \Fastly\Model\LoggingMessageType|null $message_type message_type
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets header_value
     *
     * @return string|null
     */
    public function getHeaderValue()
    {
        return $this->container['header_value'];
    }

    /**
     * Sets header_value
     *
     * @param string|null $header_value Value of the custom header sent with the request.
     *
     * @return self
     */
    public function setHeaderValue($header_value)
    {
        $this->container['header_value'] = $header_value;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method HTTP method used for request.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($method) && !in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'method', must be one of '%s'",
                    $method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets json_format
     *
     * @return string|null
     */
    public function getJsonFormat()
    {
        return $this->container['json_format'];
    }

    /**
     * Sets json_format
     *
     * @param string|null $json_format Enforces valid JSON formatting for log entries.
     *
     * @return self
     */
    public function setJsonFormat($json_format)
    {
        $allowedValues = $this->getJsonFormatAllowableValues();
        if (!is_null($json_format) && !in_array($json_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'json_format', must be one of '%s'",
                    $json_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['json_format'] = $json_format;

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


