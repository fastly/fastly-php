<?php
/**
 * PublishItemFormats
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
 * PublishItemFormats Class Doc Comment
 *
 * @category Class
 * @description Transport-specific message payload representations to be used for delivery. At least one format (&#x60;http-response&#x60;, &#x60;http-stream&#x60;, and/or &#x60;ws-message&#x60;) must be specified. Messages are only delivered to subscribers interested in the provided formats. For example, the &#x60;ws-message&#x60; format will only be sent to WebSocket clients.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PublishItemFormats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'publish_item_formats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'http_response' => '\Fastly\Model\HttpResponseFormat',
        'http_stream' => '\Fastly\Model\HttpStreamFormat',
        'ws_message' => '\Fastly\Model\WsMessageFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'http_response' => null,
        'http_stream' => null,
        'ws_message' => null
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
        'http_response' => 'http-response',
        'http_stream' => 'http-stream',
        'ws_message' => 'ws-message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'http_response' => 'setHttpResponse',
        'http_stream' => 'setHttpStream',
        'ws_message' => 'setWsMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'http_response' => 'getHttpResponse',
        'http_stream' => 'getHttpStream',
        'ws_message' => 'getWsMessage'
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
        $this->container['http_response'] = $data['http_response'] ?? null;
        $this->container['http_stream'] = $data['http_stream'] ?? null;
        $this->container['ws_message'] = $data['ws_message'] ?? null;
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
     * Gets http_response
     *
     * @return \Fastly\Model\HttpResponseFormat|null
     */
    public function getHttpResponse()
    {
        return $this->container['http_response'];
    }

    /**
     * Sets http_response
     *
     * @param \Fastly\Model\HttpResponseFormat|null $http_response http_response
     *
     * @return self
     */
    public function setHttpResponse($http_response)
    {
        $this->container['http_response'] = $http_response;

        return $this;
    }

    /**
     * Gets http_stream
     *
     * @return \Fastly\Model\HttpStreamFormat|null
     */
    public function getHttpStream()
    {
        return $this->container['http_stream'];
    }

    /**
     * Sets http_stream
     *
     * @param \Fastly\Model\HttpStreamFormat|null $http_stream http_stream
     *
     * @return self
     */
    public function setHttpStream($http_stream)
    {
        $this->container['http_stream'] = $http_stream;

        return $this;
    }

    /**
     * Gets ws_message
     *
     * @return \Fastly\Model\WsMessageFormat|null
     */
    public function getWsMessage()
    {
        return $this->container['ws_message'];
    }

    /**
     * Sets ws_message
     *
     * @param \Fastly\Model\WsMessageFormat|null $ws_message ws_message
     *
     * @return self
     */
    public function setWsMessage($ws_message)
    {
        $this->container['ws_message'] = $ws_message;

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


