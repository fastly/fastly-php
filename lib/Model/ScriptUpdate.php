<?php
/**
 * ScriptUpdate
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
 * ScriptUpdate Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScriptUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'scriptUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'authorization_status' => 'string',
        'justification' => 'string',
        'authorized_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'authorization_status' => null,
        'justification' => null,
        'authorized_hash' => null
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
        'authorization_status' => 'authorization_status',
        'justification' => 'justification',
        'authorized_hash' => 'authorized_hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorization_status' => 'setAuthorizationStatus',
        'justification' => 'setJustification',
        'authorized_hash' => 'setAuthorizedHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorization_status' => 'getAuthorizationStatus',
        'justification' => 'getJustification',
        'authorized_hash' => 'getAuthorizedHash'
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

    const AUTHORIZATION_STATUS_AUTHORIZED = 'authorized';
    const AUTHORIZATION_STATUS_UNAUTHORIZED = 'unauthorized';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthorizationStatusAllowableValues()
    {
        return [
            self::AUTHORIZATION_STATUS_AUTHORIZED,
            self::AUTHORIZATION_STATUS_UNAUTHORIZED,
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
        $this->container['authorization_status'] = $data['authorization_status'] ?? null;
        $this->container['justification'] = $data['justification'] ?? null;
        $this->container['authorized_hash'] = $data['authorized_hash'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthorizationStatusAllowableValues();
        if (!is_null($this->container['authorization_status']) && !in_array($this->container['authorization_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'authorization_status', must be one of '%s'",
                $this->container['authorization_status'],
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
     * Gets authorization_status
     *
     * @return string|null
     */
    public function getAuthorizationStatus()
    {
        return $this->container['authorization_status'];
    }

    /**
     * Sets authorization_status
     *
     * @param string|null $authorization_status Script authorization status
     *
     * @return self
     */
    public function setAuthorizationStatus($authorization_status)
    {
        $allowedValues = $this->getAuthorizationStatusAllowableValues();
        if (!is_null($authorization_status) && !in_array($authorization_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'authorization_status', must be one of '%s'",
                    $authorization_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authorization_status'] = $authorization_status;

        return $this;
    }

    /**
     * Gets justification
     *
     * @return string|null
     */
    public function getJustification()
    {
        return $this->container['justification'];
    }

    /**
     * Sets justification
     *
     * @param string|null $justification Reason for authorization decision
     *
     * @return self
     */
    public function setJustification($justification)
    {
        $this->container['justification'] = $justification;

        return $this;
    }

    /**
     * Gets authorized_hash
     *
     * @return string|null
     */
    public function getAuthorizedHash()
    {
        return $this->container['authorized_hash'];
    }

    /**
     * Sets authorized_hash
     *
     * @param string|null $authorized_hash Hash of authorized script content
     *
     * @return self
     */
    public function setAuthorizedHash($authorized_hash)
    {
        $this->container['authorized_hash'] = $authorized_hash;

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


