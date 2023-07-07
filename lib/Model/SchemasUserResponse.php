<?php
/**
 * SchemasUserResponse
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
 * SchemasUserResponse Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SchemasUserResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'schemas-user_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'login' => 'string',
        'name' => 'string',
        'limit_services' => 'bool',
        'locked' => 'bool',
        'require_new_password' => 'bool',
        'role' => '\Fastly\Model\RoleUser',
        'two_factor_auth_enabled' => 'bool',
        'two_factor_setup_required' => 'bool',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'id' => 'string',
        'email_hash' => 'string',
        'customer_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'login' => null,
        'name' => null,
        'limit_services' => null,
        'locked' => null,
        'require_new_password' => null,
        'role' => null,
        'two_factor_auth_enabled' => null,
        'two_factor_setup_required' => null,
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time',
        'id' => null,
        'email_hash' => null,
        'customer_id' => null
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
        'login' => 'login',
        'name' => 'name',
        'limit_services' => 'limit_services',
        'locked' => 'locked',
        'require_new_password' => 'require_new_password',
        'role' => 'role',
        'two_factor_auth_enabled' => 'two_factor_auth_enabled',
        'two_factor_setup_required' => 'two_factor_setup_required',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at',
        'id' => 'id',
        'email_hash' => 'email_hash',
        'customer_id' => 'customer_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login' => 'setLogin',
        'name' => 'setName',
        'limit_services' => 'setLimitServices',
        'locked' => 'setLocked',
        'require_new_password' => 'setRequireNewPassword',
        'role' => 'setRole',
        'two_factor_auth_enabled' => 'setTwoFactorAuthEnabled',
        'two_factor_setup_required' => 'setTwoFactorSetupRequired',
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt',
        'id' => 'setId',
        'email_hash' => 'setEmailHash',
        'customer_id' => 'setCustomerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login' => 'getLogin',
        'name' => 'getName',
        'limit_services' => 'getLimitServices',
        'locked' => 'getLocked',
        'require_new_password' => 'getRequireNewPassword',
        'role' => 'getRole',
        'two_factor_auth_enabled' => 'getTwoFactorAuthEnabled',
        'two_factor_setup_required' => 'getTwoFactorSetupRequired',
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt',
        'id' => 'getId',
        'email_hash' => 'getEmailHash',
        'customer_id' => 'getCustomerId'
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
        $this->container['login'] = $data['login'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['limit_services'] = $data['limit_services'] ?? null;
        $this->container['locked'] = $data['locked'] ?? null;
        $this->container['require_new_password'] = $data['require_new_password'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['two_factor_auth_enabled'] = $data['two_factor_auth_enabled'] ?? null;
        $this->container['two_factor_setup_required'] = $data['two_factor_setup_required'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['email_hash'] = $data['email_hash'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
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
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

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
     * @param string|null $name The real life name of the user.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets limit_services
     *
     * @return bool|null
     */
    public function getLimitServices()
    {
        return $this->container['limit_services'];
    }

    /**
     * Sets limit_services
     *
     * @param bool|null $limit_services Indicates that the user has limited access to the customer's services.
     *
     * @return self
     */
    public function setLimitServices($limit_services)
    {
        $this->container['limit_services'] = $limit_services;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked Indicates whether the is account is locked for editing or not.
     *
     * @return self
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets require_new_password
     *
     * @return bool|null
     */
    public function getRequireNewPassword()
    {
        return $this->container['require_new_password'];
    }

    /**
     * Sets require_new_password
     *
     * @param bool|null $require_new_password Indicates if a new password is required at next login.
     *
     * @return self
     */
    public function setRequireNewPassword($require_new_password)
    {
        $this->container['require_new_password'] = $require_new_password;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \Fastly\Model\RoleUser|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \Fastly\Model\RoleUser|null $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets two_factor_auth_enabled
     *
     * @return bool|null
     */
    public function getTwoFactorAuthEnabled()
    {
        return $this->container['two_factor_auth_enabled'];
    }

    /**
     * Sets two_factor_auth_enabled
     *
     * @param bool|null $two_factor_auth_enabled Indicates if 2FA is enabled on the user.
     *
     * @return self
     */
    public function setTwoFactorAuthEnabled($two_factor_auth_enabled)
    {
        $this->container['two_factor_auth_enabled'] = $two_factor_auth_enabled;

        return $this;
    }

    /**
     * Gets two_factor_setup_required
     *
     * @return bool|null
     */
    public function getTwoFactorSetupRequired()
    {
        return $this->container['two_factor_setup_required'];
    }

    /**
     * Sets two_factor_setup_required
     *
     * @param bool|null $two_factor_setup_required Indicates if 2FA is required by the user's customer account.
     *
     * @return self
     */
    public function setTwoFactorSetupRequired($two_factor_setup_required)
    {
        $this->container['two_factor_setup_required'] = $two_factor_setup_required;

        return $this;
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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets email_hash
     *
     * @return string|null
     */
    public function getEmailHash()
    {
        return $this->container['email_hash'];
    }

    /**
     * Sets email_hash
     *
     * @param string|null $email_hash The alphanumeric string identifying a email login.
     *
     * @return self
     */
    public function setEmailHash($email_hash)
    {
        $this->container['email_hash'] = $email_hash;

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
     * @param string|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

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


