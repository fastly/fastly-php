<?php
/**
 * RelationshipsForTlsSubscription
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
 * RelationshipsForTlsSubscription Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RelationshipsForTlsSubscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'relationships_for_tls_subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'tls_domains' => '\Fastly\Model\RelationshipTlsDomainsTlsDomains',
        'tls_certificates' => '\Fastly\Model\RelationshipTlsCertificatesTlsCertificates',
        'tls_configuration' => '\Fastly\Model\RelationshipTlsConfigurationTlsConfiguration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'tls_domains' => null,
        'tls_certificates' => null,
        'tls_configuration' => null
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
        'tls_domains' => 'tls_domains',
        'tls_certificates' => 'tls_certificates',
        'tls_configuration' => 'tls_configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tls_domains' => 'setTlsDomains',
        'tls_certificates' => 'setTlsCertificates',
        'tls_configuration' => 'setTlsConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tls_domains' => 'getTlsDomains',
        'tls_certificates' => 'getTlsCertificates',
        'tls_configuration' => 'getTlsConfiguration'
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
        $this->container['tls_domains'] = $data['tls_domains'] ?? null;
        $this->container['tls_certificates'] = $data['tls_certificates'] ?? null;
        $this->container['tls_configuration'] = $data['tls_configuration'] ?? null;
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
     * Gets tls_domains
     *
     * @return \Fastly\Model\RelationshipTlsDomainsTlsDomains|null
     */
    public function getTlsDomains()
    {
        return $this->container['tls_domains'];
    }

    /**
     * Sets tls_domains
     *
     * @param \Fastly\Model\RelationshipTlsDomainsTlsDomains|null $tls_domains tls_domains
     *
     * @return self
     */
    public function setTlsDomains($tls_domains)
    {
        $this->container['tls_domains'] = $tls_domains;

        return $this;
    }

    /**
     * Gets tls_certificates
     *
     * @return \Fastly\Model\RelationshipTlsCertificatesTlsCertificates|null
     */
    public function getTlsCertificates()
    {
        return $this->container['tls_certificates'];
    }

    /**
     * Sets tls_certificates
     *
     * @param \Fastly\Model\RelationshipTlsCertificatesTlsCertificates|null $tls_certificates tls_certificates
     *
     * @return self
     */
    public function setTlsCertificates($tls_certificates)
    {
        $this->container['tls_certificates'] = $tls_certificates;

        return $this;
    }

    /**
     * Gets tls_configuration
     *
     * @return \Fastly\Model\RelationshipTlsConfigurationTlsConfiguration|null
     */
    public function getTlsConfiguration()
    {
        return $this->container['tls_configuration'];
    }

    /**
     * Sets tls_configuration
     *
     * @param \Fastly\Model\RelationshipTlsConfigurationTlsConfiguration|null $tls_configuration tls_configuration
     *
     * @return self
     */
    public function setTlsConfiguration($tls_configuration)
    {
        $this->container['tls_configuration'] = $tls_configuration;

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


