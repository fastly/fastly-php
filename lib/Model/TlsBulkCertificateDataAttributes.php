<?php
/**
 * TlsBulkCertificateDataAttributes
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
 * TlsBulkCertificateDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TlsBulkCertificateDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'tls_bulk_certificate_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'allow_untrusted_root' => 'bool',
        'cert_blob' => 'string',
        'intermediates_blob' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'allow_untrusted_root' => null,
        'cert_blob' => null,
        'intermediates_blob' => null
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
        'allow_untrusted_root' => 'allow_untrusted_root',
        'cert_blob' => 'cert_blob',
        'intermediates_blob' => 'intermediates_blob'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_untrusted_root' => 'setAllowUntrustedRoot',
        'cert_blob' => 'setCertBlob',
        'intermediates_blob' => 'setIntermediatesBlob'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_untrusted_root' => 'getAllowUntrustedRoot',
        'cert_blob' => 'getCertBlob',
        'intermediates_blob' => 'getIntermediatesBlob'
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
        $this->container['allow_untrusted_root'] = $data['allow_untrusted_root'] ?? false;
        $this->container['cert_blob'] = $data['cert_blob'] ?? null;
        $this->container['intermediates_blob'] = $data['intermediates_blob'] ?? null;
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
     * Gets allow_untrusted_root
     *
     * @return bool|null
     */
    public function getAllowUntrustedRoot()
    {
        return $this->container['allow_untrusted_root'];
    }

    /**
     * Sets allow_untrusted_root
     *
     * @param bool|null $allow_untrusted_root Allow certificates that chain to untrusted roots.
     *
     * @return self
     */
    public function setAllowUntrustedRoot($allow_untrusted_root)
    {
        $this->container['allow_untrusted_root'] = $allow_untrusted_root;

        return $this;
    }

    /**
     * Gets cert_blob
     *
     * @return string|null
     */
    public function getCertBlob()
    {
        return $this->container['cert_blob'];
    }

    /**
     * Sets cert_blob
     *
     * @param string|null $cert_blob The PEM-formatted certificate blob. Required.
     *
     * @return self
     */
    public function setCertBlob($cert_blob)
    {
        $this->container['cert_blob'] = $cert_blob;

        return $this;
    }

    /**
     * Gets intermediates_blob
     *
     * @return string|null
     */
    public function getIntermediatesBlob()
    {
        return $this->container['intermediates_blob'];
    }

    /**
     * Sets intermediates_blob
     *
     * @param string|null $intermediates_blob The PEM-formatted chain of intermediate blobs. Required.
     *
     * @return self
     */
    public function setIntermediatesBlob($intermediates_blob)
    {
        $this->container['intermediates_blob'] = $intermediates_blob;

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


