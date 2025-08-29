<?php
/**
 * DdosProtectionRule
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
 * DdosProtectionRule Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DdosProtectionRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'ddos_protection_rule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'id' => 'string',
        'name' => 'string',
        'action' => 'string',
        'customer_id' => 'string',
        'service_id' => 'string',
        'source_ip' => 'string',
        'country_code' => 'string',
        'host' => 'string',
        'asn' => 'string',
        'source_ip_prefix' => 'string',
        'additional_attributes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'id' => null,
        'name' => null,
        'action' => null,
        'customer_id' => null,
        'service_id' => null,
        'source_ip' => null,
        'country_code' => null,
        'host' => null,
        'asn' => null,
        'source_ip_prefix' => null,
        'additional_attributes' => null
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
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'id' => 'id',
        'name' => 'name',
        'action' => 'action',
        'customer_id' => 'customer_id',
        'service_id' => 'service_id',
        'source_ip' => 'source_ip',
        'country_code' => 'country_code',
        'host' => 'host',
        'asn' => 'asn',
        'source_ip_prefix' => 'source_ip_prefix',
        'additional_attributes' => 'additional_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'id' => 'setId',
        'name' => 'setName',
        'action' => 'setAction',
        'customer_id' => 'setCustomerId',
        'service_id' => 'setServiceId',
        'source_ip' => 'setSourceIp',
        'country_code' => 'setCountryCode',
        'host' => 'setHost',
        'asn' => 'setAsn',
        'source_ip_prefix' => 'setSourceIpPrefix',
        'additional_attributes' => 'setAdditionalAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'id' => 'getId',
        'name' => 'getName',
        'action' => 'getAction',
        'customer_id' => 'getCustomerId',
        'service_id' => 'getServiceId',
        'source_ip' => 'getSourceIp',
        'country_code' => 'getCountryCode',
        'host' => 'getHost',
        'asn' => 'getAsn',
        'source_ip_prefix' => 'getSourceIpPrefix',
        'additional_attributes' => 'getAdditionalAttributes'
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['action'] = $data['action'] ?? 'default';
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['source_ip'] = $data['source_ip'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['host'] = $data['host'] ?? null;
        $this->container['asn'] = $data['asn'] ?? null;
        $this->container['source_ip_prefix'] = $data['source_ip_prefix'] ?? null;
        $this->container['additional_attributes'] = $data['additional_attributes'] ?? null;
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique ID of the rule.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $name A human-readable name for the rule.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Action types for a rule. Supported action values are default, block, log, off. The default action value follows the current protection mode of the associated service.
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id Alphanumeric string identifying the customer.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id Alphanumeric string identifying the service.
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets source_ip
     *
     * @return string|null
     */
    public function getSourceIp()
    {
        return $this->container['source_ip'];
    }

    /**
     * Sets source_ip
     *
     * @param string|null $source_ip Source IP address attribute.
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        $this->container['source_ip'] = $source_ip;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Country code attribute.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string|null $host Host attribute.
     *
     * @return self
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets asn
     *
     * @return string|null
     */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
     * Sets asn
     *
     * @param string|null $asn ASN attribute.
     *
     * @return self
     */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;

        return $this;
    }

    /**
     * Gets source_ip_prefix
     *
     * @return string|null
     */
    public function getSourceIpPrefix()
    {
        return $this->container['source_ip_prefix'];
    }

    /**
     * Sets source_ip_prefix
     *
     * @param string|null $source_ip_prefix Source IP prefix attribute.
     *
     * @return self
     */
    public function setSourceIpPrefix($source_ip_prefix)
    {
        $this->container['source_ip_prefix'] = $source_ip_prefix;

        return $this;
    }

    /**
     * Gets additional_attributes
     *
     * @return string[]|null
     */
    public function getAdditionalAttributes()
    {
        return $this->container['additional_attributes'];
    }

    /**
     * Sets additional_attributes
     *
     * @param string[]|null $additional_attributes Attribute category for additional, unlisted attributes used in a rule.
     *
     * @return self
     */
    public function setAdditionalAttributes($additional_attributes)
    {
        $this->container['additional_attributes'] = $additional_attributes;

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


