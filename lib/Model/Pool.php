<?php
/**
 * Pool
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
 * Pool Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Pool implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'pool';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'tls_ca_cert' => 'string',
        'tls_client_cert' => 'string',
        'tls_client_key' => 'string',
        'tls_cert_hostname' => 'string',
        'use_tls' => 'int',
        'name' => 'string',
        'shield' => 'string',
        'request_condition' => 'string',
        'max_conn_default' => 'int',
        'connect_timeout' => 'int',
        'first_byte_timeout' => 'int',
        'quorum' => 'int',
        'tls_ciphers' => 'string',
        'tls_sni_hostname' => 'string',
        'tls_check_cert' => 'int',
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
        'tls_ca_cert' => null,
        'tls_client_cert' => null,
        'tls_client_key' => null,
        'tls_cert_hostname' => null,
        'use_tls' => null,
        'name' => null,
        'shield' => null,
        'request_condition' => null,
        'max_conn_default' => null,
        'connect_timeout' => null,
        'first_byte_timeout' => null,
        'quorum' => null,
        'tls_ciphers' => null,
        'tls_sni_hostname' => null,
        'tls_check_cert' => null,
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
        'tls_ca_cert' => 'tls_ca_cert',
        'tls_client_cert' => 'tls_client_cert',
        'tls_client_key' => 'tls_client_key',
        'tls_cert_hostname' => 'tls_cert_hostname',
        'use_tls' => 'use_tls',
        'name' => 'name',
        'shield' => 'shield',
        'request_condition' => 'request_condition',
        'max_conn_default' => 'max_conn_default',
        'connect_timeout' => 'connect_timeout',
        'first_byte_timeout' => 'first_byte_timeout',
        'quorum' => 'quorum',
        'tls_ciphers' => 'tls_ciphers',
        'tls_sni_hostname' => 'tls_sni_hostname',
        'tls_check_cert' => 'tls_check_cert',
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
        'tls_ca_cert' => 'setTlsCaCert',
        'tls_client_cert' => 'setTlsClientCert',
        'tls_client_key' => 'setTlsClientKey',
        'tls_cert_hostname' => 'setTlsCertHostname',
        'use_tls' => 'setUseTls',
        'name' => 'setName',
        'shield' => 'setShield',
        'request_condition' => 'setRequestCondition',
        'max_conn_default' => 'setMaxConnDefault',
        'connect_timeout' => 'setConnectTimeout',
        'first_byte_timeout' => 'setFirstByteTimeout',
        'quorum' => 'setQuorum',
        'tls_ciphers' => 'setTlsCiphers',
        'tls_sni_hostname' => 'setTlsSniHostname',
        'tls_check_cert' => 'setTlsCheckCert',
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
        'tls_ca_cert' => 'getTlsCaCert',
        'tls_client_cert' => 'getTlsClientCert',
        'tls_client_key' => 'getTlsClientKey',
        'tls_cert_hostname' => 'getTlsCertHostname',
        'use_tls' => 'getUseTls',
        'name' => 'getName',
        'shield' => 'getShield',
        'request_condition' => 'getRequestCondition',
        'max_conn_default' => 'getMaxConnDefault',
        'connect_timeout' => 'getConnectTimeout',
        'first_byte_timeout' => 'getFirstByteTimeout',
        'quorum' => 'getQuorum',
        'tls_ciphers' => 'getTlsCiphers',
        'tls_sni_hostname' => 'getTlsSniHostname',
        'tls_check_cert' => 'getTlsCheckCert',
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

    const USE_TLS_no_tls = 0;
    const USE_TLS_use_tls = 1;
    const TYPE_RANDOM = 'random';
    const TYPE_HASH = 'hash';
    const TYPE_CLIENT = 'client';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUseTlsAllowableValues()
    {
        return [
            self::USE_TLS_no_tls,
            self::USE_TLS_use_tls,
        ];
    }

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
        $this->container['tls_ca_cert'] = $data['tls_ca_cert'] ?? 'null';
        $this->container['tls_client_cert'] = $data['tls_client_cert'] ?? 'null';
        $this->container['tls_client_key'] = $data['tls_client_key'] ?? 'null';
        $this->container['tls_cert_hostname'] = $data['tls_cert_hostname'] ?? 'null';
        $this->container['use_tls'] = $data['use_tls'] ?? self::USE_TLS_no_tls;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['shield'] = $data['shield'] ?? 'null';
        $this->container['request_condition'] = $data['request_condition'] ?? null;
        $this->container['max_conn_default'] = $data['max_conn_default'] ?? 200;
        $this->container['connect_timeout'] = $data['connect_timeout'] ?? null;
        $this->container['first_byte_timeout'] = $data['first_byte_timeout'] ?? null;
        $this->container['quorum'] = $data['quorum'] ?? 75;
        $this->container['tls_ciphers'] = $data['tls_ciphers'] ?? null;
        $this->container['tls_sni_hostname'] = $data['tls_sni_hostname'] ?? null;
        $this->container['tls_check_cert'] = $data['tls_check_cert'] ?? null;
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

        $allowedValues = $this->getUseTlsAllowableValues();
        if (!is_null($this->container['use_tls']) && !in_array($this->container['use_tls'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'use_tls', must be one of '%s'",
                $this->container['use_tls'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['quorum']) && ($this->container['quorum'] > 100)) {
            $invalidProperties[] = "invalid value for 'quorum', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['quorum']) && ($this->container['quorum'] < 0)) {
            $invalidProperties[] = "invalid value for 'quorum', must be bigger than or equal to 0.";
        }

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
     * Gets tls_cert_hostname
     *
     * @return string|null
     */
    public function getTlsCertHostname()
    {
        return $this->container['tls_cert_hostname'];
    }

    /**
     * Sets tls_cert_hostname
     *
     * @param string|null $tls_cert_hostname The hostname used to verify a server's certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN).
     *
     * @return self
     */
    public function setTlsCertHostname($tls_cert_hostname)
    {
        $this->container['tls_cert_hostname'] = $tls_cert_hostname;

        return $this;
    }

    /**
     * Gets use_tls
     *
     * @return int|null
     */
    public function getUseTls()
    {
        return $this->container['use_tls'];
    }

    /**
     * Sets use_tls
     *
     * @param int|null $use_tls Whether to use TLS.
     *
     * @return self
     */
    public function setUseTls($use_tls)
    {
        $allowedValues = $this->getUseTlsAllowableValues();
        if (!is_null($use_tls) && !in_array($use_tls, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'use_tls', must be one of '%s'",
                    $use_tls,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['use_tls'] = $use_tls;

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
     * @param string|null $shield Selected POP to serve as a shield for the servers. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](/reference/api/utils/pops/) to get a list of available POPs used for shielding.
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
     * Gets max_conn_default
     *
     * @return int|null
     */
    public function getMaxConnDefault()
    {
        return $this->container['max_conn_default'];
    }

    /**
     * Sets max_conn_default
     *
     * @param int|null $max_conn_default Maximum number of connections. Optional.
     *
     * @return self
     */
    public function setMaxConnDefault($max_conn_default)
    {
        $this->container['max_conn_default'] = $max_conn_default;

        return $this;
    }

    /**
     * Gets connect_timeout
     *
     * @return int|null
     */
    public function getConnectTimeout()
    {
        return $this->container['connect_timeout'];
    }

    /**
     * Sets connect_timeout
     *
     * @param int|null $connect_timeout How long to wait for a timeout in milliseconds. Optional.
     *
     * @return self
     */
    public function setConnectTimeout($connect_timeout)
    {
        $this->container['connect_timeout'] = $connect_timeout;

        return $this;
    }

    /**
     * Gets first_byte_timeout
     *
     * @return int|null
     */
    public function getFirstByteTimeout()
    {
        return $this->container['first_byte_timeout'];
    }

    /**
     * Sets first_byte_timeout
     *
     * @param int|null $first_byte_timeout How long to wait for the first byte in milliseconds. Optional.
     *
     * @return self
     */
    public function setFirstByteTimeout($first_byte_timeout)
    {
        $this->container['first_byte_timeout'] = $first_byte_timeout;

        return $this;
    }

    /**
     * Gets quorum
     *
     * @return int|null
     */
    public function getQuorum()
    {
        return $this->container['quorum'];
    }

    /**
     * Sets quorum
     *
     * @param int|null $quorum Percentage of capacity (`0-100`) that needs to be operationally available for a pool to be considered up.
     *
     * @return self
     */
    public function setQuorum($quorum)
    {

        if (!is_null($quorum) && ($quorum > 100)) {
            throw new \InvalidArgumentException('invalid value for $quorum when calling Pool., must be smaller than or equal to 100.');
        }
        if (!is_null($quorum) && ($quorum < 0)) {
            throw new \InvalidArgumentException('invalid value for $quorum when calling Pool., must be bigger than or equal to 0.');
        }

        $this->container['quorum'] = $quorum;

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
     * Gets tls_check_cert
     *
     * @return int|null
     */
    public function getTlsCheckCert()
    {
        return $this->container['tls_check_cert'];
    }

    /**
     * Sets tls_check_cert
     *
     * @param int|null $tls_check_cert Be strict on checking TLS certs. Optional.
     *
     * @return self
     */
    public function setTlsCheckCert($tls_check_cert)
    {
        $this->container['tls_check_cert'] = $tls_check_cert;

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
     * @param string|null $override_host The hostname to [override the Host header](https://docs.fastly.com/en/guides/specifying-an-override-host). Defaults to `null` meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting.
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


