<?php
/**
 * ArcVirtualKeyListItemResponse
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
 * ArcVirtualKeyListItemResponse Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcVirtualKeyListItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_virtual_key_list_item_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'id' => 'string',
        'customer_id' => 'string',
        'type' => 'string',
        'user_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'expires_at' => '\DateTime',
        'security_enabled' => 'bool',
        'security_action' => 'string',
        'rpm_limit' => 'int',
        'tpm_limit' => 'int',
        'user_name' => 'string',
        'last_used_at' => '\DateTime',
        'deleted_at' => '\DateTime',
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
        'name' => null,
        'id' => null,
        'customer_id' => null,
        'type' => null,
        'user_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'expires_at' => 'date-time',
        'security_enabled' => null,
        'security_action' => null,
        'rpm_limit' => null,
        'tpm_limit' => null,
        'user_name' => null,
        'last_used_at' => 'date-time',
        'deleted_at' => 'date-time',
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
        'name' => 'name',
        'id' => 'id',
        'customer_id' => 'customer_id',
        'type' => 'type',
        'user_id' => 'user_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'expires_at' => 'expires_at',
        'security_enabled' => 'security_enabled',
        'security_action' => 'security_action',
        'rpm_limit' => 'rpm_limit',
        'tpm_limit' => 'tpm_limit',
        'user_name' => 'user_name',
        'last_used_at' => 'last_used_at',
        'deleted_at' => 'deleted_at',
        'spend_limit_enabled' => 'spend_limit_enabled',
        'spend_limit_enabled_on' => 'spend_limit_enabled_on'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'customer_id' => 'setCustomerId',
        'type' => 'setType',
        'user_id' => 'setUserId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'expires_at' => 'setExpiresAt',
        'security_enabled' => 'setSecurityEnabled',
        'security_action' => 'setSecurityAction',
        'rpm_limit' => 'setRpmLimit',
        'tpm_limit' => 'setTpmLimit',
        'user_name' => 'setUserName',
        'last_used_at' => 'setLastUsedAt',
        'deleted_at' => 'setDeletedAt',
        'spend_limit_enabled' => 'setSpendLimitEnabled',
        'spend_limit_enabled_on' => 'setSpendLimitEnabledOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'customer_id' => 'getCustomerId',
        'type' => 'getType',
        'user_id' => 'getUserId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'expires_at' => 'getExpiresAt',
        'security_enabled' => 'getSecurityEnabled',
        'security_action' => 'getSecurityAction',
        'rpm_limit' => 'getRpmLimit',
        'tpm_limit' => 'getTpmLimit',
        'user_name' => 'getUserName',
        'last_used_at' => 'getLastUsedAt',
        'deleted_at' => 'getDeletedAt',
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

    const SECURITY_ACTION_LOG = 'log';
    const SECURITY_ACTION_BLOCK = 'block';
    const SECURITY_ACTION_REPLACE = 'replace';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecurityActionAllowableValues()
    {
        return [
            self::SECURITY_ACTION_LOG,
            self::SECURITY_ACTION_BLOCK,
            self::SECURITY_ACTION_REPLACE,
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
    public function __construct(?array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['security_enabled'] = $data['security_enabled'] ?? false;
        $this->container['security_action'] = $data['security_action'] ?? null;
        $this->container['rpm_limit'] = $data['rpm_limit'] ?? null;
        $this->container['tpm_limit'] = $data['tpm_limit'] ?? null;
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['last_used_at'] = $data['last_used_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
        $allowedValues = $this->getSecurityActionAllowableValues();
        if (!is_null($this->container['security_action']) && !in_array($this->container['security_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'security_action', must be one of '%s'",
                $this->container['security_action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['rpm_limit']) && ($this->container['rpm_limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'rpm_limit', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tpm_limit']) && ($this->container['tpm_limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'tpm_limit', must be bigger than or equal to 1.";
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
     * @param string $name A display name for the virtual key.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the resource.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param \DateTime|null $expires_at The date and time the key expires, in RFC 3339 format. Omit for a key that doesn't expire.
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets security_enabled
     *
     * @return bool|null
     */
    public function getSecurityEnabled()
    {
        return $this->container['security_enabled'];
    }

    /**
     * Sets security_enabled
     *
     * @param bool|null $security_enabled Whether AI Firewall security is enabled for requests made with this key.
     *
     * @return self
     */
    public function setSecurityEnabled($security_enabled)
    {
        $this->container['security_enabled'] = $security_enabled;

        return $this;
    }

    /**
     * Gets security_action
     *
     * @return string|null
     */
    public function getSecurityAction()
    {
        return $this->container['security_action'];
    }

    /**
     * Sets security_action
     *
     * @param string|null $security_action The action AI Firewall takes when it detects a violation on a request made with this key. Only meaningful when `security_enabled` is `true`.
     *
     * @return self
     */
    public function setSecurityAction($security_action)
    {
        $allowedValues = $this->getSecurityActionAllowableValues();
        if (!is_null($security_action) && !in_array($security_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'security_action', must be one of '%s'",
                    $security_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['security_action'] = $security_action;

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
     * @param int|null $rpm_limit The requests-per-minute limit for this key. Omit for no limit.
     *
     * @return self
     */
    public function setRpmLimit($rpm_limit)
    {

        if (!is_null($rpm_limit) && ($rpm_limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $rpm_limit when calling ArcVirtualKeyListItemResponse., must be bigger than or equal to 1.');
        }

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
     * @param int|null $tpm_limit The tokens-per-minute limit for this key. Omit for no limit.
     *
     * @return self
     */
    public function setTpmLimit($tpm_limit)
    {

        if (!is_null($tpm_limit) && ($tpm_limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $tpm_limit when calling ArcVirtualKeyListItemResponse., must be bigger than or equal to 1.');
        }

        $this->container['tpm_limit'] = $tpm_limit;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name The display name of the user who created the key.
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets last_used_at
     *
     * @return \DateTime|null
     */
    public function getLastUsedAt()
    {
        return $this->container['last_used_at'];
    }

    /**
     * Sets last_used_at
     *
     * @param \DateTime|null $last_used_at The date and time the key was last used to make a request, in RFC 3339 format. `null` if the key has never been used.
     *
     * @return self
     */
    public function setLastUsedAt($last_used_at)
    {
        $this->container['last_used_at'] = $last_used_at;

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
     * @param \DateTime|null $deleted_at The date and time the key was deleted, in RFC 3339 format. `null` unless the key was deleted and `include_deleted` was used to retrieve it.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

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


