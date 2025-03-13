<?php
/**
 * AutomationTokenCreateResponse
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
 * AutomationTokenCreateResponse Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AutomationTokenCreateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'automation_token_create_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'role' => 'string',
        'services' => 'string[]',
        'scope' => 'string',
        'expires_at' => 'string',
        'id' => '\Fastly\Model\ReadOnlyId',
        'user_id' => '\Fastly\Model\ReadOnlyUserId',
        'customer_id' => '\Fastly\Model\ReadOnlyCustomerId',
        'created_at' => '\DateTime',
        'access_token' => 'string',
        'tls_access' => 'bool',
        'last_used_at' => '\DateTime',
        'user_agent' => 'string'
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
        'role' => null,
        'services' => null,
        'scope' => null,
        'expires_at' => null,
        'id' => null,
        'user_id' => null,
        'customer_id' => null,
        'created_at' => 'date-time',
        'access_token' => null,
        'tls_access' => null,
        'last_used_at' => 'date-time',
        'user_agent' => null
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
        'role' => 'role',
        'services' => 'services',
        'scope' => 'scope',
        'expires_at' => 'expires_at',
        'id' => 'id',
        'user_id' => 'user_id',
        'customer_id' => 'customer_id',
        'created_at' => 'created_at',
        'access_token' => 'access_token',
        'tls_access' => 'tls_access',
        'last_used_at' => 'last_used_at',
        'user_agent' => 'user_agent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'role' => 'setRole',
        'services' => 'setServices',
        'scope' => 'setScope',
        'expires_at' => 'setExpiresAt',
        'id' => 'setId',
        'user_id' => 'setUserId',
        'customer_id' => 'setCustomerId',
        'created_at' => 'setCreatedAt',
        'access_token' => 'setAccessToken',
        'tls_access' => 'setTlsAccess',
        'last_used_at' => 'setLastUsedAt',
        'user_agent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'role' => 'getRole',
        'services' => 'getServices',
        'scope' => 'getScope',
        'expires_at' => 'getExpiresAt',
        'id' => 'getId',
        'user_id' => 'getUserId',
        'customer_id' => 'getCustomerId',
        'created_at' => 'getCreatedAt',
        'access_token' => 'getAccessToken',
        'tls_access' => 'getTlsAccess',
        'last_used_at' => 'getLastUsedAt',
        'user_agent' => 'getUserAgent'
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

    const ROLE_BILLING = 'billing';
    const ROLE_ENGINEER = 'engineer';
    const ROLE_USER = 'user';
    const SCOPE__GLOBAL = 'global';
    const SCOPE_PURGE_SELECT = 'purge_select';
    const SCOPE_PURGE_ALL = 'purge_all';
    const SCOPE_GLOBALREAD = 'global:read';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_BILLING,
            self::ROLE_ENGINEER,
            self::ROLE_USER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE__GLOBAL,
            self::SCOPE_PURGE_SELECT,
            self::SCOPE_PURGE_ALL,
            self::SCOPE_GLOBALREAD,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
        $this->container['scope'] = $data['scope'] ?? 'global';
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['access_token'] = $data['access_token'] ?? null;
        $this->container['tls_access'] = $data['tls_access'] ?? null;
        $this->container['last_used_at'] = $data['last_used_at'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role', must be one of '%s'",
                $this->container['role'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scope', must be one of '%s'",
                $this->container['scope'],
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
     * @param string|null $name The name of the token.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role The role on the token.
     *
     * @return self
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($role) && !in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role', must be one of '%s'",
                    $role,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[]|null $services (Optional) The service IDs of the services the token will have access to. Separate service IDs with a space. If no services are specified, the token will have access to all services on the account.
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope A space-delimited list of authorization scope.
     *
     * @return self
     */
    public function setScope($scope)
    {
        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($scope) && !in_array($scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scope', must be one of '%s'",
                    $scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return string|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param string|null $expires_at A UTC timestamp of when the token expires.
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \Fastly\Model\ReadOnlyId|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Fastly\Model\ReadOnlyId|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return \Fastly\Model\ReadOnlyUserId|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param \Fastly\Model\ReadOnlyUserId|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return \Fastly\Model\ReadOnlyCustomerId|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param \Fastly\Model\ReadOnlyCustomerId|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

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
     * @param \DateTime|null $created_at A UTC timestamp of when the token was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string|null $access_token access_token
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets tls_access
     *
     * @return bool|null
     */
    public function getTlsAccess()
    {
        return $this->container['tls_access'];
    }

    /**
     * Sets tls_access
     *
     * @param bool|null $tls_access Indicates whether TLS access is enabled for the token.
     *
     * @return self
     */
    public function setTlsAccess($tls_access)
    {
        $this->container['tls_access'] = $tls_access;

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
     * @param \DateTime|null $last_used_at A UTC timestamp of when the token was last used.
     *
     * @return self
     */
    public function setLastUsedAt($last_used_at)
    {
        $this->container['last_used_at'] = $last_used_at;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent The User-Agent header of the client that last used the token.
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

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


