<?php
/**
 * TlsCertificateResponseAttributes
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
 * TlsCertificateResponseAttributes Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TlsCertificateResponseAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'tls_certificate_response_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'issued_to' => 'string',
        'issuer' => 'string',
        'serial_number' => 'string',
        'signature_algorithm' => 'string',
        'not_after' => '\DateTime',
        'not_before' => '\DateTime',
        'replace' => 'bool'
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
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time',
        'issued_to' => null,
        'issuer' => null,
        'serial_number' => null,
        'signature_algorithm' => null,
        'not_after' => 'date-time',
        'not_before' => 'date-time',
        'replace' => null
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
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at',
        'issued_to' => 'issued_to',
        'issuer' => 'issuer',
        'serial_number' => 'serial_number',
        'signature_algorithm' => 'signature_algorithm',
        'not_after' => 'not_after',
        'not_before' => 'not_before',
        'replace' => 'replace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt',
        'issued_to' => 'setIssuedTo',
        'issuer' => 'setIssuer',
        'serial_number' => 'setSerialNumber',
        'signature_algorithm' => 'setSignatureAlgorithm',
        'not_after' => 'setNotAfter',
        'not_before' => 'setNotBefore',
        'replace' => 'setReplace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt',
        'issued_to' => 'getIssuedTo',
        'issuer' => 'getIssuer',
        'serial_number' => 'getSerialNumber',
        'signature_algorithm' => 'getSignatureAlgorithm',
        'not_after' => 'getNotAfter',
        'not_before' => 'getNotBefore',
        'replace' => 'getReplace'
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
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['issued_to'] = $data['issued_to'] ?? null;
        $this->container['issuer'] = $data['issuer'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['signature_algorithm'] = $data['signature_algorithm'] ?? null;
        $this->container['not_after'] = $data['not_after'] ?? null;
        $this->container['not_before'] = $data['not_before'] ?? null;
        $this->container['replace'] = $data['replace'] ?? null;
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
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

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
     * Gets issued_to
     *
     * @return string|null
     */
    public function getIssuedTo()
    {
        return $this->container['issued_to'];
    }

    /**
     * Sets issued_to
     *
     * @param string|null $issued_to The hostname for which a certificate was issued.
     *
     * @return self
     */
    public function setIssuedTo($issued_to)
    {
        $this->container['issued_to'] = $issued_to;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string|null $issuer The certificate authority that issued the certificate.
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string|null $serial_number A value assigned by the issuer that is unique to a certificate.
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets signature_algorithm
     *
     * @return string|null
     */
    public function getSignatureAlgorithm()
    {
        return $this->container['signature_algorithm'];
    }

    /**
     * Sets signature_algorithm
     *
     * @param string|null $signature_algorithm The algorithm used to sign the certificate.
     *
     * @return self
     */
    public function setSignatureAlgorithm($signature_algorithm)
    {
        $this->container['signature_algorithm'] = $signature_algorithm;

        return $this;
    }

    /**
     * Gets not_after
     *
     * @return \DateTime|null
     */
    public function getNotAfter()
    {
        return $this->container['not_after'];
    }

    /**
     * Sets not_after
     *
     * @param \DateTime|null $not_after Time-stamp (GMT) when the certificate will expire. Must be in the future to be used to terminate TLS traffic.
     *
     * @return self
     */
    public function setNotAfter($not_after)
    {
        $this->container['not_after'] = $not_after;

        return $this;
    }

    /**
     * Gets not_before
     *
     * @return \DateTime|null
     */
    public function getNotBefore()
    {
        return $this->container['not_before'];
    }

    /**
     * Sets not_before
     *
     * @param \DateTime|null $not_before Time-stamp (GMT) when the certificate will become valid. Must be in the past to be used to terminate TLS traffic.
     *
     * @return self
     */
    public function setNotBefore($not_before)
    {
        $this->container['not_before'] = $not_before;

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
     * @param bool|null $replace A recommendation from Fastly indicating the key associated with this certificate is in need of rotation.
     *
     * @return self
     */
    public function setReplace($replace)
    {
        $this->container['replace'] = $replace;

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


