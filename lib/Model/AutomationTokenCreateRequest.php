<?php
/**
 * AutomationTokenCreateRequest
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
 * AutomationTokenCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AutomationTokenCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'automation_token_create_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'expires_at' => '\DateTime',
        'role' => 'string',
        'roles' => 'string[]',
        'services' => 'string[]',
        'limit_services' => 'bool',
        'limit_workspaces' => 'bool',
        'workspaces' => 'string[]',
        'scope' => 'string',
        'tls_access' => 'bool'
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
        'expires_at' => 'date-time',
        'role' => null,
        'roles' => null,
        'services' => null,
        'limit_services' => null,
        'limit_workspaces' => null,
        'workspaces' => null,
        'scope' => null,
        'tls_access' => null
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
        'expires_at' => 'expires_at',
        'role' => 'role',
        'roles' => 'roles',
        'services' => 'services',
        'limit_services' => 'limit_services',
        'limit_workspaces' => 'limit_workspaces',
        'workspaces' => 'workspaces',
        'scope' => 'scope',
        'tls_access' => 'tls_access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'expires_at' => 'setExpiresAt',
        'role' => 'setRole',
        'roles' => 'setRoles',
        'services' => 'setServices',
        'limit_services' => 'setLimitServices',
        'limit_workspaces' => 'setLimitWorkspaces',
        'workspaces' => 'setWorkspaces',
        'scope' => 'setScope',
        'tls_access' => 'setTlsAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'expires_at' => 'getExpiresAt',
        'role' => 'getRole',
        'roles' => 'getRoles',
        'services' => 'getServices',
        'limit_services' => 'getLimitServices',
        'limit_workspaces' => 'getLimitWorkspaces',
        'workspaces' => 'getWorkspaces',
        'scope' => 'getScope',
        'tls_access' => 'getTlsAccess'
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

    const ROLE_ENGINEER = 'engineer';
    const ROLE_BILLING = 'billing';
    const ROLE_USER = 'user';
    const SCOPE__GLOBAL = 'global';
    const SCOPE_GLOBALREAD = 'global:read';
    const SCOPE_PURGE_ALL = 'purge_all';
    const SCOPE_PURGE_SELECT = 'purge_select';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_ENGINEER,
            self::ROLE_BILLING,
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
            self::SCOPE_GLOBALREAD,
            self::SCOPE_PURGE_ALL,
            self::SCOPE_PURGE_SELECT,
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
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['roles'] = $data['roles'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
        $this->container['limit_services'] = $data['limit_services'] ?? false;
        $this->container['limit_workspaces'] = $data['limit_workspaces'] ?? true;
        $this->container['workspaces'] = $data['workspaces'] ?? null;
        $this->container['scope'] = $data['scope'] ?? 'global';
        $this->container['tls_access'] = $data['tls_access'] ?? null;
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
        if ($this->container['expires_at'] === null) {
            $invalidProperties[] = "'expires_at' can't be null";
        }
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the token.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime $expires_at A UTC timestamp of when the token will expire.
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

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
     * @param string|null $role The role for the token. The `roles` field is the preferred way to assign roles. This field is supported for backwards compatibility with single-role tokens.
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
     * Gets roles
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles Array of role IDs to assign to the token. Use this field for tokens with multiple roles. When provided, this takes precedence over the `role` field. To get available role IDs, use [GET /roles](https://www.fastly.com/documentation/reference/api/account/roles/).
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

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
     * @param string[]|null $services List of service IDs the token can access. Only used when `limit_services` is `true`.
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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
     * @param bool|null $limit_services When `true`, restricts the token to only the services specified in the `services` array. When `false` (default), the token has access to all services.
     *
     * @return self
     */
    public function setLimitServices($limit_services)
    {
        $this->container['limit_services'] = $limit_services;

        return $this;
    }

    /**
     * Gets limit_workspaces
     *
     * @return bool|null
     */
    public function getLimitWorkspaces()
    {
        return $this->container['limit_workspaces'];
    }

    /**
     * Sets limit_workspaces
     *
     * @param bool|null $limit_workspaces When `true` (default), restricts the token to only the workspaces specified in the `workspaces` array. When `false`, the token has access to all workspaces. Only applies to roles that support workspace access (such as Next-Gen WAF roles). For roles without workspace support, this field has no effect.
     *
     * @return self
     */
    public function setLimitWorkspaces($limit_workspaces)
    {
        $this->container['limit_workspaces'] = $limit_workspaces;

        return $this;
    }

    /**
     * Gets workspaces
     *
     * @return string[]|null
     */
    public function getWorkspaces()
    {
        return $this->container['workspaces'];
    }

    /**
     * Sets workspaces
     *
     * @param string[]|null $workspaces List of workspace IDs the token can access. Only used when `limit_workspaces` is `true` and the token has roles that support workspace access.
     *
     * @return self
     */
    public function setWorkspaces($workspaces)
    {
        $this->container['workspaces'] = $workspaces;

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
     * @param string|null $scope scope
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
     * @param bool|null $tls_access Indicates whether TLS access is enabled for the token. Only applicable when using the single-role `role` field. For tokens with multiple roles, assign TLS roles (`tls_admin` or `tls_viewer`) via the `roles` field instead.
     *
     * @return self
     */
    public function setTlsAccess($tls_access)
    {
        $this->container['tls_access'] = $tls_access;

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


