<?php
/**
 * ArcVirtualKey
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
 * ArcVirtualKey Class Doc Comment
 *
 * @category Class
 * @description A virtual key used to authenticate requests through the AI Runtime Control gateway.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcVirtualKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_virtual_key';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'expires_at' => '\DateTime',
        'security_enabled' => 'bool',
        'security_action' => 'string',
        'rpm_limit' => 'int',
        'tpm_limit' => 'int'
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
        'security_enabled' => null,
        'security_action' => null,
        'rpm_limit' => null,
        'tpm_limit' => null
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
        'security_enabled' => 'security_enabled',
        'security_action' => 'security_action',
        'rpm_limit' => 'rpm_limit',
        'tpm_limit' => 'tpm_limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'expires_at' => 'setExpiresAt',
        'security_enabled' => 'setSecurityEnabled',
        'security_action' => 'setSecurityAction',
        'rpm_limit' => 'setRpmLimit',
        'tpm_limit' => 'setTpmLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'expires_at' => 'getExpiresAt',
        'security_enabled' => 'getSecurityEnabled',
        'security_action' => 'getSecurityAction',
        'rpm_limit' => 'getRpmLimit',
        'tpm_limit' => 'getTpmLimit'
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
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['security_enabled'] = $data['security_enabled'] ?? false;
        $this->container['security_action'] = $data['security_action'] ?? null;
        $this->container['rpm_limit'] = $data['rpm_limit'] ?? null;
        $this->container['tpm_limit'] = $data['tpm_limit'] ?? null;
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
            throw new \InvalidArgumentException('invalid value for $rpm_limit when calling ArcVirtualKey., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $tpm_limit when calling ArcVirtualKey., must be bigger than or equal to 1.');
        }

        $this->container['tpm_limit'] = $tpm_limit;

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


