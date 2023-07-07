<?php
/**
 * ApexRedirectAllOf
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
 * ApexRedirectAllOf Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApexRedirectAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'apex_redirect_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'status_code' => 'int',
        'domains' => 'string[]',
        'feature_revision' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'status_code' => null,
        'domains' => null,
        'feature_revision' => null
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
        'status_code' => 'status_code',
        'domains' => 'domains',
        'feature_revision' => 'feature_revision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status_code' => 'setStatusCode',
        'domains' => 'setDomains',
        'feature_revision' => 'setFeatureRevision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status_code' => 'getStatusCode',
        'domains' => 'getDomains',
        'feature_revision' => 'getFeatureRevision'
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

    const STATUS_CODE_301 = 301;
    const STATUS_CODE_302 = 302;
    const STATUS_CODE_307 = 307;
    const STATUS_CODE_308 = 308;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusCodeAllowableValues()
    {
        return [
            self::STATUS_CODE_301,
            self::STATUS_CODE_302,
            self::STATUS_CODE_307,
            self::STATUS_CODE_308,
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
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['domains'] = $data['domains'] ?? null;
        $this->container['feature_revision'] = $data['feature_revision'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusCodeAllowableValues();
        if (!is_null($this->container['status_code']) && !in_array($this->container['status_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status_code', must be one of '%s'",
                $this->container['status_code'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['domains']) && (count($this->container['domains']) < 1)) {
            $invalidProperties[] = "invalid value for 'domains', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['feature_revision']) && ($this->container['feature_revision'] < 1)) {
            $invalidProperties[] = "invalid value for 'feature_revision', must be bigger than or equal to 1.";
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
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code HTTP status code used to redirect the client.
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $allowedValues = $this->getStatusCodeAllowableValues();
        if (!is_null($status_code) && !in_array($status_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status_code', must be one of '%s'",
                    $status_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return string[]|null
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param string[]|null $domains Array of apex domains that should redirect to their WWW subdomain.
     *
     * @return self
     */
    public function setDomains($domains)
    {


        if (!is_null($domains) && (count($domains) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domains when calling ApexRedirectAllOf., number of items must be greater than or equal to 1.');
        }
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets feature_revision
     *
     * @return int|null
     */
    public function getFeatureRevision()
    {
        return $this->container['feature_revision'];
    }

    /**
     * Sets feature_revision
     *
     * @param int|null $feature_revision Revision number of the apex redirect feature implementation. Defaults to the most recent revision.
     *
     * @return self
     */
    public function setFeatureRevision($feature_revision)
    {

        if (!is_null($feature_revision) && ($feature_revision < 1)) {
            throw new \InvalidArgumentException('invalid value for $feature_revision when calling ApexRedirectAllOf., must be bigger than or equal to 1.');
        }

        $this->container['feature_revision'] = $feature_revision;

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


