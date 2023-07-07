<?php
/**
 * TlsPrivateKeyResponseAttributesAllOf
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
 * TlsPrivateKeyResponseAttributesAllOf Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TlsPrivateKeyResponseAttributesAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'tls_private_key_response_attributes_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'key_length' => 'int',
        'key_type' => 'string',
        'replace' => 'bool',
        'public_key_sha1' => 'string'
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
        'key_length' => null,
        'key_type' => null,
        'replace' => null,
        'public_key_sha1' => null
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
        'key_length' => 'key_length',
        'key_type' => 'key_type',
        'replace' => 'replace',
        'public_key_sha1' => 'public_key_sha1'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'key_length' => 'setKeyLength',
        'key_type' => 'setKeyType',
        'replace' => 'setReplace',
        'public_key_sha1' => 'setPublicKeySha1'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'key_length' => 'getKeyLength',
        'key_type' => 'getKeyType',
        'replace' => 'getReplace',
        'public_key_sha1' => 'getPublicKeySha1'
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
        $this->container['key_length'] = $data['key_length'] ?? null;
        $this->container['key_type'] = $data['key_type'] ?? null;
        $this->container['replace'] = $data['replace'] ?? null;
        $this->container['public_key_sha1'] = $data['public_key_sha1'] ?? null;
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
     * @param string|null $name A customizable name for your private key.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets key_length
     *
     * @return int|null
     */
    public function getKeyLength()
    {
        return $this->container['key_length'];
    }

    /**
     * Sets key_length
     *
     * @param int|null $key_length The key length used to generate the private key.
     *
     * @return self
     */
    public function setKeyLength($key_length)
    {
        $this->container['key_length'] = $key_length;

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
     * @param string|null $key_type The algorithm used to generate the private key. Must be `RSA`.
     *
     * @return self
     */
    public function setKeyType($key_type)
    {
        $this->container['key_type'] = $key_type;

        return $this;
    }

    /**
     * Gets replace
     *
     * @return bool|null
     */
    public function getReplace()
    {
        return $this->container['replace'];
    }

    /**
     * Sets replace
     *
     * @param bool|null $replace A recommendation from Fastly to replace this private key and all associated certificates.
     *
     * @return self
     */
    public function setReplace($replace)
    {
        $this->container['replace'] = $replace;

        return $this;
    }

    /**
     * Gets public_key_sha1
     *
     * @return string|null
     */
    public function getPublicKeySha1()
    {
        return $this->container['public_key_sha1'];
    }

    /**
     * Sets public_key_sha1
     *
     * @param string|null $public_key_sha1 Useful for safely identifying the key.
     *
     * @return self
     */
    public function setPublicKeySha1($public_key_sha1)
    {
        $this->container['public_key_sha1'] = $public_key_sha1;

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


