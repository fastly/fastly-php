<?php
/**
 * LoggingKafkaAdditional
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
 * LoggingKafkaAdditional Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingKafkaAdditional implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_kafka_additional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'topic' => 'string',
        'brokers' => 'string',
        'compression_codec' => 'string',
        'required_acks' => 'int',
        'request_max_bytes' => 'int',
        'parse_log_keyvals' => 'bool',
        'auth_method' => 'string',
        'user' => 'string',
        'password' => 'string',
        'use_tls' => '\Fastly\Model\LoggingUseTlsString'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'topic' => null,
        'brokers' => null,
        'compression_codec' => null,
        'required_acks' => null,
        'request_max_bytes' => null,
        'parse_log_keyvals' => null,
        'auth_method' => null,
        'user' => null,
        'password' => null,
        'use_tls' => null
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
        'topic' => 'topic',
        'brokers' => 'brokers',
        'compression_codec' => 'compression_codec',
        'required_acks' => 'required_acks',
        'request_max_bytes' => 'request_max_bytes',
        'parse_log_keyvals' => 'parse_log_keyvals',
        'auth_method' => 'auth_method',
        'user' => 'user',
        'password' => 'password',
        'use_tls' => 'use_tls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'topic' => 'setTopic',
        'brokers' => 'setBrokers',
        'compression_codec' => 'setCompressionCodec',
        'required_acks' => 'setRequiredAcks',
        'request_max_bytes' => 'setRequestMaxBytes',
        'parse_log_keyvals' => 'setParseLogKeyvals',
        'auth_method' => 'setAuthMethod',
        'user' => 'setUser',
        'password' => 'setPassword',
        'use_tls' => 'setUseTls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'topic' => 'getTopic',
        'brokers' => 'getBrokers',
        'compression_codec' => 'getCompressionCodec',
        'required_acks' => 'getRequiredAcks',
        'request_max_bytes' => 'getRequestMaxBytes',
        'parse_log_keyvals' => 'getParseLogKeyvals',
        'auth_method' => 'getAuthMethod',
        'user' => 'getUser',
        'password' => 'getPassword',
        'use_tls' => 'getUseTls'
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

    const COMPRESSION_CODEC_GZIP = 'gzip';
    const COMPRESSION_CODEC_SNAPPY = 'snappy';
    const COMPRESSION_CODEC_LZ4 = 'lz4';
    const COMPRESSION_CODEC_NULL = 'null';
    const REQUIRED_ACKS_one = 1;
    const REQUIRED_ACKS_none = 0;
    const REQUIRED_ACKS_all = -1;
    const AUTH_METHOD_PLAIN = 'plain';
    const AUTH_METHOD_SCRAM_SHA_256 = 'scram-sha-256';
    const AUTH_METHOD_SCRAM_SHA_512 = 'scram-sha-512';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionCodecAllowableValues()
    {
        return [
            self::COMPRESSION_CODEC_GZIP,
            self::COMPRESSION_CODEC_SNAPPY,
            self::COMPRESSION_CODEC_LZ4,
            self::COMPRESSION_CODEC_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequiredAcksAllowableValues()
    {
        return [
            self::REQUIRED_ACKS_one,
            self::REQUIRED_ACKS_none,
            self::REQUIRED_ACKS_all,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthMethodAllowableValues()
    {
        return [
            self::AUTH_METHOD_PLAIN,
            self::AUTH_METHOD_SCRAM_SHA_256,
            self::AUTH_METHOD_SCRAM_SHA_512,
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
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['brokers'] = $data['brokers'] ?? null;
        $this->container['compression_codec'] = $data['compression_codec'] ?? null;
        $this->container['required_acks'] = $data['required_acks'] ?? self::REQUIRED_ACKS_one;
        $this->container['request_max_bytes'] = $data['request_max_bytes'] ?? 0;
        $this->container['parse_log_keyvals'] = $data['parse_log_keyvals'] ?? null;
        $this->container['auth_method'] = $data['auth_method'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['use_tls'] = $data['use_tls'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCompressionCodecAllowableValues();
        if (!is_null($this->container['compression_codec']) && !in_array($this->container['compression_codec'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'compression_codec', must be one of '%s'",
                $this->container['compression_codec'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRequiredAcksAllowableValues();
        if (!is_null($this->container['required_acks']) && !in_array($this->container['required_acks'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'required_acks', must be one of '%s'",
                $this->container['required_acks'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuthMethodAllowableValues();
        if (!is_null($this->container['auth_method']) && !in_array($this->container['auth_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_method', must be one of '%s'",
                $this->container['auth_method'],
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
     * Gets topic
     *
     * @return string|null
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string|null $topic The Kafka topic to send logs to. Required.
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets brokers
     *
     * @return string|null
     */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
     * Sets brokers
     *
     * @param string|null $brokers A comma-separated list of IP addresses or hostnames of Kafka brokers. Required.
     *
     * @return self
     */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;

        return $this;
    }

    /**
     * Gets compression_codec
     *
     * @return string|null
     */
    public function getCompressionCodec()
    {
        return $this->container['compression_codec'];
    }

    /**
     * Sets compression_codec
     *
     * @param string|null $compression_codec The codec used for compression of your logs.
     *
     * @return self
     */
    public function setCompressionCodec($compression_codec)
    {
        $allowedValues = $this->getCompressionCodecAllowableValues();
        if (!is_null($compression_codec) && !in_array($compression_codec, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'compression_codec', must be one of '%s'",
                    $compression_codec,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compression_codec'] = $compression_codec;

        return $this;
    }

    /**
     * Gets required_acks
     *
     * @return int|null
     */
    public function getRequiredAcks()
    {
        return $this->container['required_acks'];
    }

    /**
     * Sets required_acks
     *
     * @param int|null $required_acks The number of acknowledgements a leader must receive before a write is considered successful.
     *
     * @return self
     */
    public function setRequiredAcks($required_acks)
    {
        $allowedValues = $this->getRequiredAcksAllowableValues();
        if (!is_null($required_acks) && !in_array($required_acks, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'required_acks', must be one of '%s'",
                    $required_acks,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['required_acks'] = $required_acks;

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
     * @param int|null $request_max_bytes The maximum number of bytes sent in one request. Defaults `0` (no limit).
     *
     * @return self
     */
    public function setRequestMaxBytes($request_max_bytes)
    {
        $this->container['request_max_bytes'] = $request_max_bytes;

        return $this;
    }

    /**
     * Gets parse_log_keyvals
     *
     * @return bool|null
     */
    public function getParseLogKeyvals()
    {
        return $this->container['parse_log_keyvals'];
    }

    /**
     * Sets parse_log_keyvals
     *
     * @param bool|null $parse_log_keyvals Enables parsing of key=value tuples from the beginning of a logline, turning them into [record headers](https://cwiki.apache.org/confluence/display/KAFKA/KIP-82+-+Add+Record+Headers).
     *
     * @return self
     */
    public function setParseLogKeyvals($parse_log_keyvals)
    {
        $this->container['parse_log_keyvals'] = $parse_log_keyvals;

        return $this;
    }

    /**
     * Gets auth_method
     *
     * @return string|null
     */
    public function getAuthMethod()
    {
        return $this->container['auth_method'];
    }

    /**
     * Sets auth_method
     *
     * @param string|null $auth_method SASL authentication method.
     *
     * @return self
     */
    public function setAuthMethod($auth_method)
    {
        $allowedValues = $this->getAuthMethodAllowableValues();
        if (!is_null($auth_method) && !in_array($auth_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_method', must be one of '%s'",
                    $auth_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_method'] = $auth_method;

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
     * @param string|null $user SASL user.
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * @param string|null $password SASL password.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets use_tls
     *
     * @return \Fastly\Model\LoggingUseTlsString|null
     */
    public function getUseTls()
    {
        return $this->container['use_tls'];
    }

    /**
     * Sets use_tls
     *
     * @param \Fastly\Model\LoggingUseTlsString|null $use_tls use_tls
     *
     * @return self
     */
    public function setUseTls($use_tls)
    {
        $this->container['use_tls'] = $use_tls;

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


