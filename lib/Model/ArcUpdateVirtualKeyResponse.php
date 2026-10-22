<?php
/**
 * ArcUpdateVirtualKeyResponse
 *
 * PHP version 8.0
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
 * ArcUpdateVirtualKeyResponse Class Doc Comment
 *
 * @category Class
 * @description The virtual key after the update.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcUpdateVirtualKeyResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_update_virtual_key_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'id' => 'string',
        'customer_id' => 'string',
        'name' => 'string',
        'user_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'expires_at' => '\DateTime',
        'rpm_limit' => 'int',
        'tpm_limit' => 'int',
        'spend_limit_enabled' => 'bool',
        'spend_limit_enabled_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'id' => null,
        'customer_id' => null,
        'name' => null,
        'user_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'expires_at' => 'date-time',
        'rpm_limit' => null,
        'tpm_limit' => null,
        'spend_limit_enabled' => null,
        'spend_limit_enabled_on' => 'date-time'
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
        'id' => 'id',
        'customer_id' => 'customer_id',
        'name' => 'name',
        'user_id' => 'user_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'expires_at' => 'expires_at',
        'rpm_limit' => 'rpm_limit',
        'tpm_limit' => 'tpm_limit',
        'spend_limit_enabled' => 'spend_limit_enabled',
        'spend_limit_enabled_on' => 'spend_limit_enabled_on'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'customer_id' => 'setCustomerId',
        'name' => 'setName',
        'user_id' => 'setUserId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'expires_at' => 'setExpiresAt',
        'rpm_limit' => 'setRpmLimit',
        'tpm_limit' => 'setTpmLimit',
        'spend_limit_enabled' => 'setSpendLimitEnabled',
        'spend_limit_enabled_on' => 'setSpendLimitEnabledOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'customer_id' => 'getCustomerId',
        'name' => 'getName',
        'user_id' => 'getUserId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'expires_at' => 'getExpiresAt',
        'rpm_limit' => 'getRpmLimit',
        'tpm_limit' => 'getTpmLimit',
        'spend_limit_enabled' => 'getSpendLimitEnabled',
        'spend_limit_enabled_on' => 'getSpendLimitEnabledOn'
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
    public function __construct(?array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['rpm_limit'] = $data['rpm_limit'] ?? null;
        $this->container['tpm_limit'] = $data['tpm_limit'] ?? null;
        $this->container['spend_limit_enabled'] = $data['spend_limit_enabled'] ?? null;
        $this->container['spend_limit_enabled_on'] = $data['spend_limit_enabled_on'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier of the virtual key.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id The ID of the customer account that owns the key.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The display name of the virtual key.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id The ID of the user who created the key.
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date and time the key was created, in RFC 3339 format.
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
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The date and time the key was last updated, in RFC 3339 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at The date and time the key expires, in RFC 3339 format. `null` if the key doesn't expire.
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets rpm_limit
     *
     * @return int|null
     */
    public function getRpmLimit()
    {
        return $this->container['rpm_limit'];
    }

    /**
     * Sets rpm_limit
     *
     * @param int|null $rpm_limit The requests-per-minute limit for this key. `null` if there is no limit.
     *
     * @return self
     */
    public function setRpmLimit($rpm_limit)
    {
        $this->container['rpm_limit'] = $rpm_limit;

        return $this;
    }

    /**
     * Gets tpm_limit
     *
     * @return int|null
     */
    public function getTpmLimit()
    {
        return $this->container['tpm_limit'];
    }

    /**
     * Sets tpm_limit
     *
     * @param int|null $tpm_limit The tokens-per-minute limit for this key. `null` if there is no limit.
     *
     * @return self
     */
    public function setTpmLimit($tpm_limit)
    {
        $this->container['tpm_limit'] = $tpm_limit;

        return $this;
    }

    /**
     * Gets spend_limit_enabled
     *
     * @return bool|null
     */
    public function getSpendLimitEnabled()
    {
        return $this->container['spend_limit_enabled'];
    }

    /**
     * Sets spend_limit_enabled
     *
     * @param bool|null $spend_limit_enabled Whether a spend limit is enabled for this key.
     *
     * @return self
     */
    public function setSpendLimitEnabled($spend_limit_enabled)
    {
        $this->container['spend_limit_enabled'] = $spend_limit_enabled;

        return $this;
    }

    /**
     * Gets spend_limit_enabled_on
     *
     * @return \DateTime|null
     */
    public function getSpendLimitEnabledOn()
    {
        return $this->container['spend_limit_enabled_on'];
    }

    /**
     * Sets spend_limit_enabled_on
     *
     * @param \DateTime|null $spend_limit_enabled_on The date and time `spend_limit_enabled` was last set to `true`, in RFC 3339 format. `null` if the spend limit has never been enabled. This timestamp is not cleared when `spend_limit_enabled` is later set back to `false`, so it can be non-null even when the spend limit is currently disabled.
     *
     * @return self
     */
    public function setSpendLimitEnabledOn($spend_limit_enabled_on)
    {
        $this->container['spend_limit_enabled_on'] = $spend_limit_enabled_on;

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


