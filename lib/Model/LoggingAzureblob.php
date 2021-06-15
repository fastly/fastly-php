<?php
/**
 * LoggingAzureblob
 *
 * PHP version 7.2
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
 * LoggingAzureblob Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LoggingAzureblob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_azureblob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'placement' => '\Fastly\Model\LoggingPlacement',
        'format_version' => '\Fastly\Model\LoggingFormatVersion',
        'response_condition' => 'string',
        'format' => 'string',
        'message_type' => '\Fastly\Model\LoggingMessageType',
        'timestamp_format' => 'string',
        'period' => 'int',
        'gzip_level' => 'int',
        'compression_codec' => '\Fastly\Model\LoggingCompressionCodec',
        'path' => 'string',
        'account_name' => 'string',
        'container' => 'string',
        'sas_token' => 'string',
        'public_key' => 'string',
        'file_max_bytes' => 'int'
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
        'message_type' => null,
        'timestamp_format' => null,
        'period' => null,
        'gzip_level' => null,
        'compression_codec' => null,
        'path' => null,
        'account_name' => null,
        'container' => null,
        'sas_token' => null,
        'public_key' => null,
        'file_max_bytes' => null
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
        'message_type' => 'message_type',
        'timestamp_format' => 'timestamp_format',
        'period' => 'period',
        'gzip_level' => 'gzip_level',
        'compression_codec' => 'compression_codec',
        'path' => 'path',
        'account_name' => 'account_name',
        'container' => 'container',
        'sas_token' => 'sas_token',
        'public_key' => 'public_key',
        'file_max_bytes' => 'file_max_bytes'
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
        'message_type' => 'setMessageType',
        'timestamp_format' => 'setTimestampFormat',
        'period' => 'setPeriod',
        'gzip_level' => 'setGzipLevel',
        'compression_codec' => 'setCompressionCodec',
        'path' => 'setPath',
        'account_name' => 'setAccountName',
        'container' => 'setContainer',
        'sas_token' => 'setSasToken',
        'public_key' => 'setPublicKey',
        'file_max_bytes' => 'setFileMaxBytes'
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
        'message_type' => 'getMessageType',
        'timestamp_format' => 'getTimestampFormat',
        'period' => 'getPeriod',
        'gzip_level' => 'getGzipLevel',
        'compression_codec' => 'getCompressionCodec',
        'path' => 'getPath',
        'account_name' => 'getAccountName',
        'container' => 'getContainer',
        'sas_token' => 'getSasToken',
        'public_key' => 'getPublicKey',
        'file_max_bytes' => 'getFileMaxBytes'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['placement'] = $data['placement'] ?? null;
        $this->container['format_version'] = $data['format_version'] ?? null;
        $this->container['response_condition'] = $data['response_condition'] ?? null;
        $this->container['format'] = $data['format'] ?? '%h %l %u %t "%r" %&gt;s %b';
        $this->container['message_type'] = $data['message_type'] ?? null;
        $this->container['timestamp_format'] = $data['timestamp_format'] ?? null;
        $this->container['period'] = $data['period'] ?? 3600;
        $this->container['gzip_level'] = $data['gzip_level'] ?? 0;
        $this->container['compression_codec'] = $data['compression_codec'] ?? null;
        $this->container['path'] = $data['path'] ?? 'null';
        $this->container['account_name'] = $data['account_name'] ?? null;
        $this->container['container'] = $data['container'] ?? null;
        $this->container['sas_token'] = $data['sas_token'] ?? null;
        $this->container['public_key'] = $data['public_key'] ?? 'null';
        $this->container['file_max_bytes'] = $data['file_max_bytes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['file_max_bytes']) && ($this->container['file_max_bytes'] < 1048576)) {
            $invalidProperties[] = "invalid value for 'file_max_bytes', must be bigger than or equal to 1048576.";
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
     * @return \Fastly\Model\LoggingPlacement|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param \Fastly\Model\LoggingPlacement|null $placement placement
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;

        return $this;
    }

    /**
     * Gets format_version
     *
     * @return \Fastly\Model\LoggingFormatVersion|null
     */
    public function getFormatVersion()
    {
        return $this->container['format_version'];
    }

    /**
     * Sets format_version
     *
     * @param \Fastly\Model\LoggingFormatVersion|null $format_version format_version
     *
     * @return self
     */
    public function setFormatVersion($format_version)
    {
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
     * Gets timestamp_format
     *
     * @return string|null
     */
    public function getTimestampFormat()
    {
        return $this->container['timestamp_format'];
    }

    /**
     * Sets timestamp_format
     *
     * @param string|null $timestamp_format Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setTimestampFormat($timestamp_format)
    {
        $this->container['timestamp_format'] = $timestamp_format;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period How frequently log files are finalized so they can be available for reading (in seconds).
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets gzip_level
     *
     * @return int|null
     */
    public function getGzipLevel()
    {
        return $this->container['gzip_level'];
    }

    /**
     * Sets gzip_level
     *
     * @param int|null $gzip_level What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \"gzip.\" Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
     *
     * @return self
     */
    public function setGzipLevel($gzip_level)
    {
        $this->container['gzip_level'] = $gzip_level;

        return $this;
    }

    /**
     * Gets compression_codec
     *
     * @return \Fastly\Model\LoggingCompressionCodec|null
     */
    public function getCompressionCodec()
    {
        return $this->container['compression_codec'];
    }

    /**
     * Sets compression_codec
     *
     * @param \Fastly\Model\LoggingCompressionCodec|null $compression_codec compression_codec
     *
     * @return self
     */
    public function setCompressionCodec($compression_codec)
    {
        $this->container['compression_codec'] = $compression_codec;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path The path to upload logs to.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required.
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets container
     *
     * @return string|null
     */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     *
     * @param string|null $container The name of the Azure Blob Storage container in which to store logs. Required.
     *
     * @return self
     */
    public function setContainer($container)
    {
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets sas_token
     *
     * @return string|null
     */
    public function getSasToken()
    {
        return $this->container['sas_token'];
    }

    /**
     * Sets sas_token
     *
     * @param string|null $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required.
     *
     * @return self
     */
    public function setSasToken($sas_token)
    {
        $this->container['sas_token'] = $sas_token;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
     *
     * @return self
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets file_max_bytes
     *
     * @return int|null
     */
    public function getFileMaxBytes()
    {
        return $this->container['file_max_bytes'];
    }

    /**
     * Sets file_max_bytes
     *
     * @param int|null $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.)
     *
     * @return self
     */
    public function setFileMaxBytes($file_max_bytes)
    {

        if (!is_null($file_max_bytes) && ($file_max_bytes < 1048576)) {
            throw new \InvalidArgumentException('invalid value for $file_max_bytes when calling LoggingAzureblob., must be bigger than or equal to 1048576.');
        }

        $this->container['file_max_bytes'] = $file_max_bytes;

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


