<?php
/**
 * LoggingSyslog
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
 * LoggingSyslog Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingSyslog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_syslog';

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
        'address' => 'string',
        'port' => 'int',
        'message_type' => '\Fastly\Model\LoggingMessageType',
        'hostname' => 'string',
        'ipv4' => 'string',
        'token' => 'string',
        'use_tls' => '\Fastly\Model\LoggingUseTls'
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
        'address' => null,
        'port' => null,
        'message_type' => null,
        'hostname' => null,
        'ipv4' => null,
        'token' => null,
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
        'name' => 'name',
        'placement' => 'placement',
        'format_version' => 'format_version',
        'response_condition' => 'response_condition',
        'format' => 'format',
        'tls_ca_cert' => 'tls_ca_cert',
        'tls_client_cert' => 'tls_client_cert',
        'tls_client_key' => 'tls_client_key',
        'tls_hostname' => 'tls_hostname',
        'address' => 'address',
        'port' => 'port',
        'message_type' => 'message_type',
        'hostname' => 'hostname',
        'ipv4' => 'ipv4',
        'token' => 'token',
        'use_tls' => 'use_tls'
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
        'address' => 'setAddress',
        'port' => 'setPort',
        'message_type' => 'setMessageType',
        'hostname' => 'setHostname',
        'ipv4' => 'setIpv4',
        'token' => 'setToken',
        'use_tls' => 'setUseTls'
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
        'address' => 'getAddress',
        'port' => 'getPort',
        'message_type' => 'getMessageType',
        'hostname' => 'getHostname',
        'ipv4' => 'getIpv4',
        'token' => 'getToken',
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

    const PLACEMENT_NONE = 'none';
    const PLACEMENT_WAF_DEBUG = 'waf_debug';
    const PLACEMENT_NULL = 'null';
    const FORMAT_VERSION_v1 = 1;
    const FORMAT_VERSION_v2 = 2;

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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['port'] = $data['port'] ?? 514;
        $this->container['message_type'] = $data['message_type'] ?? null;
        $this->container['hostname'] = $data['hostname'] ?? null;
        $this->container['ipv4'] = $data['ipv4'] ?? null;
        $this->container['token'] = $data['token'] ?? 'null';
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
     * @param string|null $address A hostname or IPv4 address.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * @param string|null $hostname The hostname used for the syslog endpoint.
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
     * @param string|null $ipv4 The IPv4 address used for the syslog endpoint.
     *
     * @return self
     */
    public function setIpv4($ipv4)
    {
        $this->container['ipv4'] = $ipv4;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token Whether to prepend each message with a specific token.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets use_tls
     *
     * @return \Fastly\Model\LoggingUseTls|null
     */
    public function getUseTls()
    {
        return $this->container['use_tls'];
    }

    /**
     * Sets use_tls
     *
     * @param \Fastly\Model\LoggingUseTls|null $use_tls use_tls
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


