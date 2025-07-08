<?php
/**
 * TlsCsrDataAttributes
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
 * TlsCsrDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TlsCsrDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'tls_csr_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'sans' => 'string[]',
        'common_name' => 'string',
        'country' => 'string',
        'state' => 'string',
        'city' => 'string',
        'postal_code' => 'string',
        'street_address' => 'string',
        'organization' => 'string',
        'organizational_unit' => 'string',
        'email' => 'string',
        'key_type' => 'string',
        'relationships_tls_private_key_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'sans' => null,
        'common_name' => null,
        'country' => null,
        'state' => null,
        'city' => null,
        'postal_code' => null,
        'street_address' => null,
        'organization' => null,
        'organizational_unit' => null,
        'email' => 'email',
        'key_type' => null,
        'relationships_tls_private_key_id' => null
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
        'sans' => 'sans',
        'common_name' => 'common_name',
        'country' => 'country',
        'state' => 'state',
        'city' => 'city',
        'postal_code' => 'postal_code',
        'street_address' => 'street_address',
        'organization' => 'organization',
        'organizational_unit' => 'organizational_unit',
        'email' => 'email',
        'key_type' => 'key_type',
        'relationships_tls_private_key_id' => 'relationships.tls_private_key.id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sans' => 'setSans',
        'common_name' => 'setCommonName',
        'country' => 'setCountry',
        'state' => 'setState',
        'city' => 'setCity',
        'postal_code' => 'setPostalCode',
        'street_address' => 'setStreetAddress',
        'organization' => 'setOrganization',
        'organizational_unit' => 'setOrganizationalUnit',
        'email' => 'setEmail',
        'key_type' => 'setKeyType',
        'relationships_tls_private_key_id' => 'setRelationshipsTlsPrivateKeyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sans' => 'getSans',
        'common_name' => 'getCommonName',
        'country' => 'getCountry',
        'state' => 'getState',
        'city' => 'getCity',
        'postal_code' => 'getPostalCode',
        'street_address' => 'getStreetAddress',
        'organization' => 'getOrganization',
        'organizational_unit' => 'getOrganizationalUnit',
        'email' => 'getEmail',
        'key_type' => 'getKeyType',
        'relationships_tls_private_key_id' => 'getRelationshipsTlsPrivateKeyId'
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

    const KEY_TYPE_RSA2048 = 'RSA2048';
    const KEY_TYPE_ECDSA256 = 'ECDSA256';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKeyTypeAllowableValues()
    {
        return [
            self::KEY_TYPE_RSA2048,
            self::KEY_TYPE_ECDSA256,
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
        $this->container['sans'] = $data['sans'] ?? null;
        $this->container['common_name'] = $data['common_name'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['street_address'] = $data['street_address'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['organizational_unit'] = $data['organizational_unit'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['key_type'] = $data['key_type'] ?? null;
        $this->container['relationships_tls_private_key_id'] = $data['relationships_tls_private_key_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sans'] === null) {
            $invalidProperties[] = "'sans' can't be null";
        }
        $allowedValues = $this->getKeyTypeAllowableValues();
        if (!is_null($this->container['key_type']) && !in_array($this->container['key_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'key_type', must be one of '%s'",
                $this->container['key_type'],
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
     * Gets sans
     *
     * @return string[]
     */
    public function getSans()
    {
        return $this->container['sans'];
    }

    /**
     * Sets sans
     *
     * @param string[] $sans Subject Alternate Names - An array of one or more fully qualified domain names or public IP addresses to be secured by this certificate. Required.
     *
     * @return self
     */
    public function setSans($sans)
    {
        $this->container['sans'] = $sans;

        return $this;
    }

    /**
     * Gets common_name
     *
     * @return string|null
     */
    public function getCommonName()
    {
        return $this->container['common_name'];
    }

    /**
     * Sets common_name
     *
     * @param string|null $common_name Common Name (CN) - The fully qualified domain name (FQDN) to be secured by this certificate. The common name should be one of the entries in the SANs parameter.
     *
     * @return self
     */
    public function setCommonName($common_name)
    {
        $this->container['common_name'] = $common_name;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country (C) - The two-letter ISO country code where the organization is located.
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State (S) - The state, province, region, or county where the organization is located. This should not be abbreviated.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Locality (L) - The locality, city, town, or village where the organization is located.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal Code - The postal code where the organization is located.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string|null $street_address Street Address - The street address where the organization is located.
     *
     * @return self
     */
    public function setStreetAddress($street_address)
    {
        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string|null $organization Organization (O) - The legal name of the organization, including any suffixes. This should not be abbreviated.
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets organizational_unit
     *
     * @return string|null
     */
    public function getOrganizationalUnit()
    {
        return $this->container['organizational_unit'];
    }

    /**
     * Sets organizational_unit
     *
     * @param string|null $organizational_unit Organizational Unit (OU) - The internal division of the organization managing the certificate.
     *
     * @return self
     */
    public function setOrganizationalUnit($organizational_unit)
    {
        $this->container['organizational_unit'] = $organizational_unit;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email Address (EMAIL) - The organizational contact for this.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets key_type
     *
     * @return string|null
     */
    public function getKeyType()
    {
        return $this->container['key_type'];
    }

    /**
     * Sets key_type
     *
     * @param string|null $key_type CSR Key Type.
     *
     * @return self
     */
    public function setKeyType($key_type)
    {
        $allowedValues = $this->getKeyTypeAllowableValues();
        if (!is_null($key_type) && !in_array($key_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'key_type', must be one of '%s'",
                    $key_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['key_type'] = $key_type;

        return $this;
    }

    /**
     * Gets relationships_tls_private_key_id
     *
     * @return string|null
     */
    public function getRelationshipsTlsPrivateKeyId()
    {
        return $this->container['relationships_tls_private_key_id'];
    }

    /**
     * Sets relationships_tls_private_key_id
     *
     * @param string|null $relationships_tls_private_key_id Optional. An alphanumeric string identifying the private key you've uploaded for use with your TLS certificate. If left blank, Fastly will create and manage a key for you.
     *
     * @return self
     */
    public function setRelationshipsTlsPrivateKeyId($relationships_tls_private_key_id)
    {
        $this->container['relationships_tls_private_key_id'] = $relationships_tls_private_key_id;

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


