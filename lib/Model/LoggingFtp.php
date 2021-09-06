<?php
/**
 * LoggingFtp
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
 * LoggingFtp Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LoggingFtp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_ftp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'format' => 'string',
        'format_version' => '\Fastly\Model\LoggingFormatVersion',
        'name' => 'string',
        'placement' => '\Fastly\Model\LoggingPlacement',
        'response_condition' => 'string',
        'compression_codec' => '\Fastly\Model\LoggingCompressionCodec',
        'gzip_level' => 'int',
        'message_type' => '\Fastly\Model\LoggingMessageType',
        'period' => 'int',
        'timestamp_format' => 'string',
        'address' => 'string',
        'hostname' => 'string',
        'ipv4' => 'string',
        'password' => 'string',
        'path' => 'string',
        'port' => 'int',
        'public_key' => 'string',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'format' => null,
        'format_version' => null,
        'name' => null,
        'placement' => null,
        'response_condition' => null,
        'compression_codec' => null,
        'gzip_level' => null,
        'message_type' => null,
        'period' => null,
        'timestamp_format' => null,
        'address' => null,
        'hostname' => null,
        'ipv4' => null,
        'password' => null,
        'path' => null,
        'port' => null,
        'public_key' => null,
        'user' => null
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
        'format' => 'format',
        'format_version' => 'format_version',
        'name' => 'name',
        'placement' => 'placement',
        'response_condition' => 'response_condition',
        'compression_codec' => 'compression_codec',
        'gzip_level' => 'gzip_level',
        'message_type' => 'message_type',
        'period' => 'period',
        'timestamp_format' => 'timestamp_format',
        'address' => 'address',
        'hostname' => 'hostname',
        'ipv4' => 'ipv4',
        'password' => 'password',
        'path' => 'path',
        'port' => 'port',
        'public_key' => 'public_key',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
        'format_version' => 'setFormatVersion',
        'name' => 'setName',
        'placement' => 'setPlacement',
        'response_condition' => 'setResponseCondition',
        'compression_codec' => 'setCompressionCodec',
        'gzip_level' => 'setGzipLevel',
        'message_type' => 'setMessageType',
        'period' => 'setPeriod',
        'timestamp_format' => 'setTimestampFormat',
        'address' => 'setAddress',
        'hostname' => 'setHostname',
        'ipv4' => 'setIpv4',
        'password' => 'setPassword',
        'path' => 'setPath',
        'port' => 'setPort',
        'public_key' => 'setPublicKey',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'format_version' => 'getFormatVersion',
        'name' => 'getName',
        'placement' => 'getPlacement',
        'response_condition' => 'getResponseCondition',
        'compression_codec' => 'getCompressionCodec',
        'gzip_level' => 'getGzipLevel',
        'message_type' => 'getMessageType',
        'period' => 'getPeriod',
        'timestamp_format' => 'getTimestampFormat',
        'address' => 'getAddress',
        'hostname' => 'getHostname',
        'ipv4' => 'getIpv4',
        'password' => 'getPassword',
        'path' => 'getPath',
        'port' => 'getPort',
        'public_key' => 'getPublicKey',
        'user' => 'getUser'
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
        $this->container['format'] = $data['format'] ?? '%h %l %u %t "%r" %&gt;s %b';
        $this->container['format_version'] = $data['format_version'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['placement'] = $data['placement'] ?? null;
        $this->container['response_condition'] = $data['response_condition'] ?? null;
        $this->container['compression_codec'] = $data['compression_codec'] ?? null;
        $this->container['gzip_level'] = $data['gzip_level'] ?? 0;
        $this->container['message_type'] = $data['message_type'] ?? null;
        $this->container['period'] = $data['period'] ?? 3600;
        $this->container['timestamp_format'] = $data['timestamp_format'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['hostname'] = $data['hostname'] ?? null;
        $this->container['ipv4'] = $data['ipv4'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['port'] = $data['port'] ?? 21;
        $this->container['public_key'] = $data['public_key'] ?? 'null';
        $this->container['user'] = $data['user'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address An hostname or IPv4 address.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string|null $hostname Hostname used.
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets ipv4
     *
     * @return string|null
     */
    public function getIpv4()
    {
        return $this->container['ipv4'];
    }

    /**
     * Sets ipv4
     *
     * @param string|null $ipv4 IPv4 address of the host.
     *
     * @return self
     */
    public function setIpv4($ipv4)
    {
        $this->container['ipv4'] = $ipv4;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password The password for the server. For anonymous use an email address.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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
     * @param string|null $path The path to upload log files to. If the path ends in `/` then it is treated as a directory.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int|null $port The port number.
     *
     * @return self
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

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
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user The username for the server. Can be anonymous.
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


