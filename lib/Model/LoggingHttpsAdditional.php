<?php
/**
 * LoggingHttpsAdditional
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
 * LoggingHttpsAdditional Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingHttpsAdditional implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_https_additional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'url' => 'string',
        'request_max_entries' => 'int',
        'request_max_bytes' => 'int',
        'content_type' => 'string',
        'header_name' => 'string',
        'message_type' => '\Fastly\Model\LoggingMessageType',
        'header_value' => 'string',
        'method' => 'string',
        'json_format' => 'string',
        'format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'url' => null,
        'request_max_entries' => null,
        'request_max_bytes' => null,
        'content_type' => null,
        'header_name' => null,
        'message_type' => null,
        'header_value' => null,
        'method' => null,
        'json_format' => null,
        'format' => null
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
        'url' => 'url',
        'request_max_entries' => 'request_max_entries',
        'request_max_bytes' => 'request_max_bytes',
        'content_type' => 'content_type',
        'header_name' => 'header_name',
        'message_type' => 'message_type',
        'header_value' => 'header_value',
        'method' => 'method',
        'json_format' => 'json_format',
        'format' => 'format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'request_max_entries' => 'setRequestMaxEntries',
        'request_max_bytes' => 'setRequestMaxBytes',
        'content_type' => 'setContentType',
        'header_name' => 'setHeaderName',
        'message_type' => 'setMessageType',
        'header_value' => 'setHeaderValue',
        'method' => 'setMethod',
        'json_format' => 'setJsonFormat',
        'format' => 'setFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'request_max_entries' => 'getRequestMaxEntries',
        'request_max_bytes' => 'getRequestMaxBytes',
        'content_type' => 'getContentType',
        'header_name' => 'getHeaderName',
        'message_type' => 'getMessageType',
        'header_value' => 'getHeaderValue',
        'method' => 'getMethod',
        'json_format' => 'getJsonFormat',
        'format' => 'getFormat'
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
        $this->container['url'] = $data['url'] ?? null;
        $this->container['request_max_entries'] = $data['request_max_entries'] ?? 0;
        $this->container['request_max_bytes'] = $data['request_max_bytes'] ?? 0;
        $this->container['content_type'] = $data['content_type'] ?? 'null';
        $this->container['header_name'] = $data['header_name'] ?? 'null';
        $this->container['message_type'] = $data['message_type'] ?? null;
        $this->container['header_value'] = $data['header_value'] ?? 'null';
        $this->container['method'] = $data['method'] ?? 'POST';
        $this->container['json_format'] = $data['json_format'] ?? null;
        $this->container['format'] = $data['format'] ?? '%h %l %u %t "%r" %&gt;s %b';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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


