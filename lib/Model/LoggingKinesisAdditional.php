<?php
/**
 * LoggingKinesisAdditional
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
 * LoggingKinesisAdditional Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingKinesisAdditional implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_kinesis_additional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'placement' => '\Fastly\Model\LoggingPlacement',
        'format' => 'string',
        'topic' => 'string',
        'region' => '\Fastly\Model\AwsRegion',
        'secret_key' => 'string',
        'access_key' => 'string',
        'iam_role' => 'string'
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
        'format' => null,
        'topic' => null,
        'region' => null,
        'secret_key' => null,
        'access_key' => null,
        'iam_role' => null
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
        'format' => 'format',
        'topic' => 'topic',
        'region' => 'region',
        'secret_key' => 'secret_key',
        'access_key' => 'access_key',
        'iam_role' => 'iam_role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'placement' => 'setPlacement',
        'format' => 'setFormat',
        'topic' => 'setTopic',
        'region' => 'setRegion',
        'secret_key' => 'setSecretKey',
        'access_key' => 'setAccessKey',
        'iam_role' => 'setIamRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'placement' => 'getPlacement',
        'format' => 'getFormat',
        'topic' => 'getTopic',
        'region' => 'getRegion',
        'secret_key' => 'getSecretKey',
        'access_key' => 'getAccessKey',
        'iam_role' => 'getIamRole'
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
        $this->container['format'] = $data['format'] ?? '{"timestamp":"%{begin:%Y-%m-%dT%H:%M:%S}t","time_elapsed":"%{time.elapsed.usec}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","client_ip":"%{req.http.Fastly-Client-IP}V","geo_city":"%{client.geo.city}V","geo_country_code":"%{client.geo.country_code}V","request":"%{req.request}V","host":"%{req.http.Fastly-Orig-Host}V","url":"%{json.escape(req.url)}V","request_referer":"%{json.escape(req.http.Referer)}V","request_user_agent":"%{json.escape(req.http.User-Agent)}V","request_accept_language":"%{json.escape(req.http.Accept-Language)}V","request_accept_charset":"%{json.escape(req.http.Accept-Charset)}V","cache_status":"%{regsub(fastly_info.state, \"^(HIT-(SYNTH)|(HITPASS|HIT|MISS|PASS|ERROR|PIPE)).*\", \"\\2\\3\") }V"}';
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['secret_key'] = $data['secret_key'] ?? null;
        $this->container['access_key'] = $data['access_key'] ?? null;
        $this->container['iam_role'] = $data['iam_role'] ?? null;
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
     * @param string|null $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
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
     * @param string|null $topic The Amazon Kinesis stream to send logs to. Required.
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets region
     *
     * @return \Fastly\Model\AwsRegion|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param \Fastly\Model\AwsRegion|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string|null
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string|null $secret_key The secret key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
     *
     * @return self
     */
    public function setSecretKey($secret_key)
    {
        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string|null
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string|null $access_key The access key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
     *
     * @return self
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets iam_role
     *
     * @return string|null
     */
    public function getIamRole()
    {
        return $this->container['iam_role'];
    }

    /**
     * Sets iam_role
     *
     * @param string|null $iam_role The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if `access_key` and `secret_key` are provided.
     *
     * @return self
     */
    public function setIamRole($iam_role)
    {
        $this->container['iam_role'] = $iam_role;

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


