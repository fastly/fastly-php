<?php
/**
 * Backend
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
 * Backend Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Backend implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'backend';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'address' => 'string',
        'auto_loadbalance' => 'bool',
        'between_bytes_timeout' => 'int',
        'client_cert' => 'string',
        'comment' => 'string',
        'connect_timeout' => 'int',
        'first_byte_timeout' => 'int',
        'healthcheck' => 'string',
        'hostname' => 'string',
        'ipv4' => 'string',
        'ipv6' => 'string',
        'keepalive_time' => 'int',
        'max_conn' => 'int',
        'max_tls_version' => 'string',
        'min_tls_version' => 'string',
        'name' => 'string',
        'override_host' => 'string',
        'port' => 'int',
        'request_condition' => 'string',
        'share_key' => 'string',
        'shield' => 'string',
        'ssl_ca_cert' => 'string',
        'ssl_cert_hostname' => 'string',
        'ssl_check_cert' => 'bool',
        'ssl_ciphers' => 'string',
        'ssl_client_cert' => 'string',
        'ssl_client_key' => 'string',
        'ssl_hostname' => 'string',
        'ssl_sni_hostname' => 'string',
        'tcp_keepalive_enable' => 'bool',
        'tcp_keepalive_interval' => 'int',
        'tcp_keepalive_probes' => 'int',
        'tcp_keepalive_time' => 'int',
        'use_ssl' => 'bool',
        'weight' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'address' => null,
        'auto_loadbalance' => null,
        'between_bytes_timeout' => null,
        'client_cert' => null,
        'comment' => null,
        'connect_timeout' => null,
        'first_byte_timeout' => null,
        'healthcheck' => null,
        'hostname' => null,
        'ipv4' => null,
        'ipv6' => null,
        'keepalive_time' => null,
        'max_conn' => null,
        'max_tls_version' => null,
        'min_tls_version' => null,
        'name' => null,
        'override_host' => null,
        'port' => null,
        'request_condition' => null,
        'share_key' => null,
        'shield' => null,
        'ssl_ca_cert' => null,
        'ssl_cert_hostname' => null,
        'ssl_check_cert' => null,
        'ssl_ciphers' => null,
        'ssl_client_cert' => null,
        'ssl_client_key' => null,
        'ssl_hostname' => null,
        'ssl_sni_hostname' => null,
        'tcp_keepalive_enable' => null,
        'tcp_keepalive_interval' => null,
        'tcp_keepalive_probes' => null,
        'tcp_keepalive_time' => null,
        'use_ssl' => null,
        'weight' => null
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
        'address' => 'address',
        'auto_loadbalance' => 'auto_loadbalance',
        'between_bytes_timeout' => 'between_bytes_timeout',
        'client_cert' => 'client_cert',
        'comment' => 'comment',
        'connect_timeout' => 'connect_timeout',
        'first_byte_timeout' => 'first_byte_timeout',
        'healthcheck' => 'healthcheck',
        'hostname' => 'hostname',
        'ipv4' => 'ipv4',
        'ipv6' => 'ipv6',
        'keepalive_time' => 'keepalive_time',
        'max_conn' => 'max_conn',
        'max_tls_version' => 'max_tls_version',
        'min_tls_version' => 'min_tls_version',
        'name' => 'name',
        'override_host' => 'override_host',
        'port' => 'port',
        'request_condition' => 'request_condition',
        'share_key' => 'share_key',
        'shield' => 'shield',
        'ssl_ca_cert' => 'ssl_ca_cert',
        'ssl_cert_hostname' => 'ssl_cert_hostname',
        'ssl_check_cert' => 'ssl_check_cert',
        'ssl_ciphers' => 'ssl_ciphers',
        'ssl_client_cert' => 'ssl_client_cert',
        'ssl_client_key' => 'ssl_client_key',
        'ssl_hostname' => 'ssl_hostname',
        'ssl_sni_hostname' => 'ssl_sni_hostname',
        'tcp_keepalive_enable' => 'tcp_keepalive_enable',
        'tcp_keepalive_interval' => 'tcp_keepalive_interval',
        'tcp_keepalive_probes' => 'tcp_keepalive_probes',
        'tcp_keepalive_time' => 'tcp_keepalive_time',
        'use_ssl' => 'use_ssl',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'auto_loadbalance' => 'setAutoLoadbalance',
        'between_bytes_timeout' => 'setBetweenBytesTimeout',
        'client_cert' => 'setClientCert',
        'comment' => 'setComment',
        'connect_timeout' => 'setConnectTimeout',
        'first_byte_timeout' => 'setFirstByteTimeout',
        'healthcheck' => 'setHealthcheck',
        'hostname' => 'setHostname',
        'ipv4' => 'setIpv4',
        'ipv6' => 'setIpv6',
        'keepalive_time' => 'setKeepaliveTime',
        'max_conn' => 'setMaxConn',
        'max_tls_version' => 'setMaxTlsVersion',
        'min_tls_version' => 'setMinTlsVersion',
        'name' => 'setName',
        'override_host' => 'setOverrideHost',
        'port' => 'setPort',
        'request_condition' => 'setRequestCondition',
        'share_key' => 'setShareKey',
        'shield' => 'setShield',
        'ssl_ca_cert' => 'setSslCaCert',
        'ssl_cert_hostname' => 'setSslCertHostname',
        'ssl_check_cert' => 'setSslCheckCert',
        'ssl_ciphers' => 'setSslCiphers',
        'ssl_client_cert' => 'setSslClientCert',
        'ssl_client_key' => 'setSslClientKey',
        'ssl_hostname' => 'setSslHostname',
        'ssl_sni_hostname' => 'setSslSniHostname',
        'tcp_keepalive_enable' => 'setTcpKeepaliveEnable',
        'tcp_keepalive_interval' => 'setTcpKeepaliveInterval',
        'tcp_keepalive_probes' => 'setTcpKeepaliveProbes',
        'tcp_keepalive_time' => 'setTcpKeepaliveTime',
        'use_ssl' => 'setUseSsl',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'auto_loadbalance' => 'getAutoLoadbalance',
        'between_bytes_timeout' => 'getBetweenBytesTimeout',
        'client_cert' => 'getClientCert',
        'comment' => 'getComment',
        'connect_timeout' => 'getConnectTimeout',
        'first_byte_timeout' => 'getFirstByteTimeout',
        'healthcheck' => 'getHealthcheck',
        'hostname' => 'getHostname',
        'ipv4' => 'getIpv4',
        'ipv6' => 'getIpv6',
        'keepalive_time' => 'getKeepaliveTime',
        'max_conn' => 'getMaxConn',
        'max_tls_version' => 'getMaxTlsVersion',
        'min_tls_version' => 'getMinTlsVersion',
        'name' => 'getName',
        'override_host' => 'getOverrideHost',
        'port' => 'getPort',
        'request_condition' => 'getRequestCondition',
        'share_key' => 'getShareKey',
        'shield' => 'getShield',
        'ssl_ca_cert' => 'getSslCaCert',
        'ssl_cert_hostname' => 'getSslCertHostname',
        'ssl_check_cert' => 'getSslCheckCert',
        'ssl_ciphers' => 'getSslCiphers',
        'ssl_client_cert' => 'getSslClientCert',
        'ssl_client_key' => 'getSslClientKey',
        'ssl_hostname' => 'getSslHostname',
        'ssl_sni_hostname' => 'getSslSniHostname',
        'tcp_keepalive_enable' => 'getTcpKeepaliveEnable',
        'tcp_keepalive_interval' => 'getTcpKeepaliveInterval',
        'tcp_keepalive_probes' => 'getTcpKeepaliveProbes',
        'tcp_keepalive_time' => 'getTcpKeepaliveTime',
        'use_ssl' => 'getUseSsl',
        'weight' => 'getWeight'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['auto_loadbalance'] = $data['auto_loadbalance'] ?? null;
        $this->container['between_bytes_timeout'] = $data['between_bytes_timeout'] ?? null;
        $this->container['client_cert'] = $data['client_cert'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['connect_timeout'] = $data['connect_timeout'] ?? null;
        $this->container['first_byte_timeout'] = $data['first_byte_timeout'] ?? null;
        $this->container['healthcheck'] = $data['healthcheck'] ?? null;
        $this->container['hostname'] = $data['hostname'] ?? null;
        $this->container['ipv4'] = $data['ipv4'] ?? null;
        $this->container['ipv6'] = $data['ipv6'] ?? null;
        $this->container['keepalive_time'] = $data['keepalive_time'] ?? null;
        $this->container['max_conn'] = $data['max_conn'] ?? null;
        $this->container['max_tls_version'] = $data['max_tls_version'] ?? null;
        $this->container['min_tls_version'] = $data['min_tls_version'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['override_host'] = $data['override_host'] ?? null;
        $this->container['port'] = $data['port'] ?? null;
        $this->container['request_condition'] = $data['request_condition'] ?? null;
        $this->container['share_key'] = $data['share_key'] ?? null;
        $this->container['shield'] = $data['shield'] ?? null;
        $this->container['ssl_ca_cert'] = $data['ssl_ca_cert'] ?? null;
        $this->container['ssl_cert_hostname'] = $data['ssl_cert_hostname'] ?? null;
        $this->container['ssl_check_cert'] = $data['ssl_check_cert'] ?? true;
        $this->container['ssl_ciphers'] = $data['ssl_ciphers'] ?? null;
        $this->container['ssl_client_cert'] = $data['ssl_client_cert'] ?? null;
        $this->container['ssl_client_key'] = $data['ssl_client_key'] ?? null;
        $this->container['ssl_hostname'] = $data['ssl_hostname'] ?? null;
        $this->container['ssl_sni_hostname'] = $data['ssl_sni_hostname'] ?? null;
        $this->container['tcp_keepalive_enable'] = $data['tcp_keepalive_enable'] ?? null;
        $this->container['tcp_keepalive_interval'] = $data['tcp_keepalive_interval'] ?? null;
        $this->container['tcp_keepalive_probes'] = $data['tcp_keepalive_probes'] ?? null;
        $this->container['tcp_keepalive_time'] = $data['tcp_keepalive_time'] ?? null;
        $this->container['use_ssl'] = $data['use_ssl'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['share_key']) && !preg_match("/^[A-Za-z0-9]+$/", $this->container['share_key'])) {
            $invalidProperties[] = "invalid value for 'share_key', must be conform to the pattern /^[A-Za-z0-9]+$/.";
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
     * @param string|null $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets auto_loadbalance
     *
     * @return bool|null
     */
    public function getAutoLoadbalance()
    {
        return $this->container['auto_loadbalance'];
    }

    /**
     * Sets auto_loadbalance
     *
     * @param bool|null $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don't have a `request_condition` will be selected based on their `weight`.
     *
     * @return self
     */
    public function setAutoLoadbalance($auto_loadbalance)
    {
        $this->container['auto_loadbalance'] = $auto_loadbalance;

        return $this;
    }

    /**
     * Gets between_bytes_timeout
     *
     * @return int|null
     */
    public function getBetweenBytesTimeout()
    {
        return $this->container['between_bytes_timeout'];
    }

    /**
     * Sets between_bytes_timeout
     *
     * @param int|null $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, the response received so far will be considered complete and the fetch will end. May be set at runtime using `bereq.between_bytes_timeout`.
     *
     * @return self
     */
    public function setBetweenBytesTimeout($between_bytes_timeout)
    {
        $this->container['between_bytes_timeout'] = $between_bytes_timeout;

        return $this;
    }

    /**
     * Gets client_cert
     *
     * @return string|null
     */
    public function getClientCert()
    {
        return $this->container['client_cert'];
    }

    /**
     * Sets client_cert
     *
     * @param string|null $client_cert Unused.
     *
     * @return self
     */
    public function setClientCert($client_cert)
    {
        $this->container['client_cert'] = $client_cert;

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
     * @param int|null $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthethic `503` response will be presented instead. May be set at runtime using `bereq.connect_timeout`.
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
     * @param int|null $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthethic `503` response will be presented instead. May be set at runtime using `bereq.first_byte_timeout`.
     *
     * @return self
     */
    public function setFirstByteTimeout($first_byte_timeout)
    {
        $this->container['first_byte_timeout'] = $first_byte_timeout;

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
     * @param string|null $healthcheck The name of the healthcheck to use with this backend.
     *
     * @return self
     */
    public function setHealthcheck($healthcheck)
    {
        $this->container['healthcheck'] = $healthcheck;

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
     * @param string|null $hostname The hostname of the backend. May be used as an alternative to `address` to set the backend location.
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
     * @param string|null $ipv4 IPv4 address of the backend. May be used as an alternative to `address` to set the backend location.
     *
     * @return self
     */
    public function setIpv4($ipv4)
    {
        $this->container['ipv4'] = $ipv4;

        return $this;
    }

    /**
     * Gets ipv6
     *
     * @return string|null
     */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
     * Sets ipv6
     *
     * @param string|null $ipv6 IPv6 address of the backend. May be used as an alternative to `address` to set the backend location.
     *
     * @return self
     */
    public function setIpv6($ipv6)
    {
        $this->container['ipv6'] = $ipv6;

        return $this;
    }

    /**
     * Gets keepalive_time
     *
     * @return int|null
     */
    public function getKeepaliveTime()
    {
        return $this->container['keepalive_time'];
    }

    /**
     * Sets keepalive_time
     *
     * @param int|null $keepalive_time How long in seconds to keep a persistent connection to the backend between requests.
     *
     * @return self
     */
    public function setKeepaliveTime($keepalive_time)
    {
        $this->container['keepalive_time'] = $keepalive_time;

        return $this;
    }

    /**
     * Gets max_conn
     *
     * @return int|null
     */
    public function getMaxConn()
    {
        return $this->container['max_conn'];
    }

    /**
     * Sets max_conn
     *
     * @param int|null $max_conn Maximum number of concurrent connections this backend will accept.
     *
     * @return self
     */
    public function setMaxConn($max_conn)
    {
        $this->container['max_conn'] = $max_conn;

        return $this;
    }

    /**
     * Gets max_tls_version
     *
     * @return string|null
     */
    public function getMaxTlsVersion()
    {
        return $this->container['max_tls_version'];
    }

    /**
     * Sets max_tls_version
     *
     * @param string|null $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
     *
     * @return self
     */
    public function setMaxTlsVersion($max_tls_version)
    {
        $this->container['max_tls_version'] = $max_tls_version;

        return $this;
    }

    /**
     * Gets min_tls_version
     *
     * @return string|null
     */
    public function getMinTlsVersion()
    {
        return $this->container['min_tls_version'];
    }

    /**
     * Sets min_tls_version
     *
     * @param string|null $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
     *
     * @return self
     */
    public function setMinTlsVersion($min_tls_version)
    {
        $this->container['min_tls_version'] = $min_tls_version;

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
     * @param string|null $name The name of the backend.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $override_host If set, will replace the client-supplied HTTP `Host` header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing `bereq.http.Host` in VCL.
     *
     * @return self
     */
    public function setOverrideHost($override_host)
    {
        $this->container['override_host'] = $override_host;

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
     * @param int|null $port Port on which the backend server is listening for connections from Fastly. Setting `port` to 80 or 443 will also set `use_ssl` automatically (to false and true respectively), unless explicitly overridden by setting `use_ssl` in the same request.
     *
     * @return self
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

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
     * @param string|null $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any `auto_loadbalance` setting. By default, the first backend added to a service is selected for all requests.
     *
     * @return self
     */
    public function setRequestCondition($request_condition)
    {
        $this->container['request_condition'] = $request_condition;

        return $this;
    }

    /**
     * Gets share_key
     *
     * @return string|null
     */
    public function getShareKey()
    {
        return $this->container['share_key'];
    }

    /**
     * Sets share_key
     *
     * @param string|null $share_key Value that when shared across backends will enable those backends to share the same health check.
     *
     * @return self
     */
    public function setShareKey($share_key)
    {

        if (!is_null($share_key) && (!preg_match("/^[A-Za-z0-9]+$/", $share_key))) {
            throw new \InvalidArgumentException("invalid value for $share_key when calling Backend., must conform to the pattern /^[A-Za-z0-9]+$/.");
        }

        $this->container['share_key'] = $share_key;

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
     * @param string|null $shield Identifier of the POP to use as a [shield](https://docs.fastly.com/en/guides/shielding).
     *
     * @return self
     */
    public function setShield($shield)
    {
        $this->container['shield'] = $shield;

        return $this;
    }

    /**
     * Gets ssl_ca_cert
     *
     * @return string|null
     */
    public function getSslCaCert()
    {
        return $this->container['ssl_ca_cert'];
    }

    /**
     * Sets ssl_ca_cert
     *
     * @param string|null $ssl_ca_cert CA certificate attached to origin.
     *
     * @return self
     */
    public function setSslCaCert($ssl_ca_cert)
    {
        $this->container['ssl_ca_cert'] = $ssl_ca_cert;

        return $this;
    }

    /**
     * Gets ssl_cert_hostname
     *
     * @return string|null
     */
    public function getSslCertHostname()
    {
        return $this->container['ssl_cert_hostname'];
    }

    /**
     * Sets ssl_cert_hostname
     *
     * @param string|null $ssl_cert_hostname Overrides `ssl_hostname`, but only for cert verification. Does not affect SNI at all.
     *
     * @return self
     */
    public function setSslCertHostname($ssl_cert_hostname)
    {
        $this->container['ssl_cert_hostname'] = $ssl_cert_hostname;

        return $this;
    }

    /**
     * Gets ssl_check_cert
     *
     * @return bool|null
     */
    public function getSslCheckCert()
    {
        return $this->container['ssl_check_cert'];
    }

    /**
     * Sets ssl_check_cert
     *
     * @param bool|null $ssl_check_cert Be strict on checking SSL certs.
     *
     * @return self
     */
    public function setSslCheckCert($ssl_check_cert)
    {
        $this->container['ssl_check_cert'] = $ssl_check_cert;

        return $this;
    }

    /**
     * Gets ssl_ciphers
     *
     * @return string|null
     */
    public function getSslCiphers()
    {
        return $this->container['ssl_ciphers'];
    }

    /**
     * Sets ssl_ciphers
     *
     * @param string|null $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic `503` error response will be generated.
     *
     * @return self
     */
    public function setSslCiphers($ssl_ciphers)
    {
        $this->container['ssl_ciphers'] = $ssl_ciphers;

        return $this;
    }

    /**
     * Gets ssl_client_cert
     *
     * @return string|null
     */
    public function getSslClientCert()
    {
        return $this->container['ssl_client_cert'];
    }

    /**
     * Sets ssl_client_cert
     *
     * @param string|null $ssl_client_cert Client certificate attached to origin.
     *
     * @return self
     */
    public function setSslClientCert($ssl_client_cert)
    {
        $this->container['ssl_client_cert'] = $ssl_client_cert;

        return $this;
    }

    /**
     * Gets ssl_client_key
     *
     * @return string|null
     */
    public function getSslClientKey()
    {
        return $this->container['ssl_client_key'];
    }

    /**
     * Sets ssl_client_key
     *
     * @param string|null $ssl_client_key Client key attached to origin.
     *
     * @return self
     */
    public function setSslClientKey($ssl_client_key)
    {
        $this->container['ssl_client_key'] = $ssl_client_key;

        return $this;
    }

    /**
     * Gets ssl_hostname
     *
     * @return string|null
     * @deprecated
     */
    public function getSslHostname()
    {
        return $this->container['ssl_hostname'];
    }

    /**
     * Sets ssl_hostname
     *
     * @param string|null $ssl_hostname Use `ssl_cert_hostname` and `ssl_sni_hostname` to configure certificate validation.
     *
     * @return self
     * @deprecated
     */
    public function setSslHostname($ssl_hostname)
    {
        $this->container['ssl_hostname'] = $ssl_hostname;

        return $this;
    }

    /**
     * Gets ssl_sni_hostname
     *
     * @return string|null
     */
    public function getSslSniHostname()
    {
        return $this->container['ssl_sni_hostname'];
    }

    /**
     * Sets ssl_sni_hostname
     *
     * @param string|null $ssl_sni_hostname Overrides `ssl_hostname`, but only for SNI in the handshake. Does not affect cert validation at all.
     *
     * @return self
     */
    public function setSslSniHostname($ssl_sni_hostname)
    {
        $this->container['ssl_sni_hostname'] = $ssl_sni_hostname;

        return $this;
    }

    /**
     * Gets tcp_keepalive_enable
     *
     * @return bool|null
     */
    public function getTcpKeepaliveEnable()
    {
        return $this->container['tcp_keepalive_enable'];
    }

    /**
     * Sets tcp_keepalive_enable
     *
     * @param bool|null $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified.
     *
     * @return self
     */
    public function setTcpKeepaliveEnable($tcp_keepalive_enable)
    {
        $this->container['tcp_keepalive_enable'] = $tcp_keepalive_enable;

        return $this;
    }

    /**
     * Gets tcp_keepalive_interval
     *
     * @return int|null
     */
    public function getTcpKeepaliveInterval()
    {
        return $this->container['tcp_keepalive_interval'];
    }

    /**
     * Sets tcp_keepalive_interval
     *
     * @param int|null $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes.
     *
     * @return self
     */
    public function setTcpKeepaliveInterval($tcp_keepalive_interval)
    {
        $this->container['tcp_keepalive_interval'] = $tcp_keepalive_interval;

        return $this;
    }

    /**
     * Gets tcp_keepalive_probes
     *
     * @return int|null
     */
    public function getTcpKeepaliveProbes()
    {
        return $this->container['tcp_keepalive_probes'];
    }

    /**
     * Sets tcp_keepalive_probes
     *
     * @param int|null $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead.
     *
     * @return self
     */
    public function setTcpKeepaliveProbes($tcp_keepalive_probes)
    {
        $this->container['tcp_keepalive_probes'] = $tcp_keepalive_probes;

        return $this;
    }

    /**
     * Gets tcp_keepalive_time
     *
     * @return int|null
     */
    public function getTcpKeepaliveTime()
    {
        return $this->container['tcp_keepalive_time'];
    }

    /**
     * Sets tcp_keepalive_time
     *
     * @param int|null $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe.
     *
     * @return self
     */
    public function setTcpKeepaliveTime($tcp_keepalive_time)
    {
        $this->container['tcp_keepalive_time'] = $tcp_keepalive_time;

        return $this;
    }

    /**
     * Gets use_ssl
     *
     * @return bool|null
     */
    public function getUseSsl()
    {
        return $this->container['use_ssl'];
    }

    /**
     * Sets use_ssl
     *
     * @param bool|null $use_ssl Whether or not to require TLS for connections to this backend.
     *
     * @return self
     */
    public function setUseSsl($use_ssl)
    {
        $this->container['use_ssl'] = $use_ssl;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight Weight used to load balance this backend against others. May be any positive integer. If `auto_loadbalance` is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have `auto_loadbalance` set to true.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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


