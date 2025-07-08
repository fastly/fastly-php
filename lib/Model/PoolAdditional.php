<?php
/**
 * PoolAdditional
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
 * PoolAdditional Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PoolAdditional implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'pool_additional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'shield' => 'string',
        'request_condition' => 'string',
        'tls_ciphers' => 'string',
        'tls_sni_hostname' => 'string',
        'min_tls_version' => 'int',
        'max_tls_version' => 'int',
        'healthcheck' => 'string',
        'comment' => 'string',
        'type' => 'string',
        'override_host' => 'string'
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
        'shield' => null,
        'request_condition' => null,
        'tls_ciphers' => null,
        'tls_sni_hostname' => null,
        'min_tls_version' => null,
        'max_tls_version' => null,
        'healthcheck' => null,
        'comment' => null,
        'type' => null,
        'override_host' => null
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
        'shield' => 'shield',
        'request_condition' => 'request_condition',
        'tls_ciphers' => 'tls_ciphers',
        'tls_sni_hostname' => 'tls_sni_hostname',
        'min_tls_version' => 'min_tls_version',
        'max_tls_version' => 'max_tls_version',
        'healthcheck' => 'healthcheck',
        'comment' => 'comment',
        'type' => 'type',
        'override_host' => 'override_host'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'shield' => 'setShield',
        'request_condition' => 'setRequestCondition',
        'tls_ciphers' => 'setTlsCiphers',
        'tls_sni_hostname' => 'setTlsSniHostname',
        'min_tls_version' => 'setMinTlsVersion',
        'max_tls_version' => 'setMaxTlsVersion',
        'healthcheck' => 'setHealthcheck',
        'comment' => 'setComment',
        'type' => 'setType',
        'override_host' => 'setOverrideHost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'shield' => 'getShield',
        'request_condition' => 'getRequestCondition',
        'tls_ciphers' => 'getTlsCiphers',
        'tls_sni_hostname' => 'getTlsSniHostname',
        'min_tls_version' => 'getMinTlsVersion',
        'max_tls_version' => 'getMaxTlsVersion',
        'healthcheck' => 'getHealthcheck',
        'comment' => 'getComment',
        'type' => 'getType',
        'override_host' => 'getOverrideHost'
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

    const TYPE_RANDOM = 'random';
    const TYPE_HASH = 'hash';
    const TYPE_CLIENT = 'client';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RANDOM,
            self::TYPE_HASH,
            self::TYPE_CLIENT,
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
        $this->container['shield'] = $data['shield'] ?? 'null';
        $this->container['request_condition'] = $data['request_condition'] ?? null;
        $this->container['tls_ciphers'] = $data['tls_ciphers'] ?? null;
        $this->container['tls_sni_hostname'] = $data['tls_sni_hostname'] ?? null;
        $this->container['min_tls_version'] = $data['min_tls_version'] ?? null;
        $this->container['max_tls_version'] = $data['max_tls_version'] ?? null;
        $this->container['healthcheck'] = $data['healthcheck'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['override_host'] = $data['override_host'] ?? 'null';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param string|null $name Name for the Pool.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets shield
     *
     * @return string|null
     */
    public function getShield()
    {
        return $this->container['shield'];
    }

    /**
     * Sets shield
     *
     * @param string|null $shield Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding.
     *
     * @return self
     */
    public function setShield($shield)
    {
        $this->container['shield'] = $shield;

        return $this;
    }

    /**
     * Gets request_condition
     *
     * @return string|null
     */
    public function getRequestCondition()
    {
        return $this->container['request_condition'];
    }

    /**
     * Sets request_condition
     *
     * @param string|null $request_condition Condition which, if met, will select this configuration during a request. Optional.
     *
     * @return self
     */
    public function setRequestCondition($request_condition)
    {
        $this->container['request_condition'] = $request_condition;

        return $this;
    }

    /**
     * Gets tls_ciphers
     *
     * @return string|null
     */
    public function getTlsCiphers()
    {
        return $this->container['tls_ciphers'];
    }

    /**
     * Sets tls_ciphers
     *
     * @param string|null $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional.
     *
     * @return self
     */
    public function setTlsCiphers($tls_ciphers)
    {
        $this->container['tls_ciphers'] = $tls_ciphers;

        return $this;
    }

    /**
     * Gets tls_sni_hostname
     *
     * @return string|null
     */
    public function getTlsSniHostname()
    {
        return $this->container['tls_sni_hostname'];
    }

    /**
     * Sets tls_sni_hostname
     *
     * @param string|null $tls_sni_hostname SNI hostname. Optional.
     *
     * @return self
     */
    public function setTlsSniHostname($tls_sni_hostname)
    {
        $this->container['tls_sni_hostname'] = $tls_sni_hostname;

        return $this;
    }

    /**
     * Gets min_tls_version
     *
     * @return int|null
     */
    public function getMinTlsVersion()
    {
        return $this->container['min_tls_version'];
    }

    /**
     * Sets min_tls_version
     *
     * @param int|null $min_tls_version Minimum allowed TLS version on connections to this server. Optional.
     *
     * @return self
     */
    public function setMinTlsVersion($min_tls_version)
    {
        $this->container['min_tls_version'] = $min_tls_version;

        return $this;
    }

    /**
     * Gets max_tls_version
     *
     * @return int|null
     */
    public function getMaxTlsVersion()
    {
        return $this->container['max_tls_version'];
    }

    /**
     * Sets max_tls_version
     *
     * @param int|null $max_tls_version Maximum allowed TLS version on connections to this server. Optional.
     *
     * @return self
     */
    public function setMaxTlsVersion($max_tls_version)
    {
        $this->container['max_tls_version'] = $max_tls_version;

        return $this;
    }

    /**
     * Gets healthcheck
     *
     * @return string|null
     */
    public function getHealthcheck()
    {
        return $this->container['healthcheck'];
    }

    /**
     * Sets healthcheck
     *
     * @param string|null $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools.
     *
     * @return self
     */
    public function setHealthcheck($healthcheck)
    {
        $this->container['healthcheck'] = $healthcheck;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment A freeform descriptive note.
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type What type of load balance group to use.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets override_host
     *
     * @return string|null
     */
    public function getOverrideHost()
    {
        return $this->container['override_host'];
    }

    /**
     * Sets override_host
     *
     * @param string|null $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting.
     *
     * @return self
     */
    public function setOverrideHost($override_host)
    {
        $this->container['override_host'] = $override_host;

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


