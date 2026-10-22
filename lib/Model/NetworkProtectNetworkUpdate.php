<?php
/**
 * NetworkProtectNetworkUpdate
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
 * NetworkProtectNetworkUpdate Class Doc Comment
 *
 * @category Class
 * @description Attributes accepted when updating a network.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NetworkProtectNetworkUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'network_protect_network_update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'description' => 'string',
        'name' => 'string',
        'rule_set_id' => 'string',
        'endpoint_policies' => '\Fastly\Model\NetworkProtectEndpointPolicy[]',
        'advertise' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'description' => null,
        'name' => null,
        'rule_set_id' => null,
        'endpoint_policies' => null,
        'advertise' => null
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
        'description' => 'description',
        'name' => 'name',
        'rule_set_id' => 'rule_set_id',
        'endpoint_policies' => 'endpoint_policies',
        'advertise' => 'advertise'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'name' => 'setName',
        'rule_set_id' => 'setRuleSetId',
        'endpoint_policies' => 'setEndpointPolicies',
        'advertise' => 'setAdvertise'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'name' => 'getName',
        'rule_set_id' => 'getRuleSetId',
        'endpoint_policies' => 'getEndpointPolicies',
        'advertise' => 'getAdvertise'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['rule_set_id'] = $data['rule_set_id'] ?? null;
        $this->container['endpoint_policies'] = $data['endpoint_policies'] ?? null;
        $this->container['advertise'] = $data['advertise'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['rule_set_id']) && !preg_match("/^([A-Za-z0-9]{19,22})?$/", $this->container['rule_set_id'])) {
            $invalidProperties[] = "invalid value for 'rule_set_id', must be conform to the pattern /^([A-Za-z0-9]{19,22})?$/.";
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Optional descriptive text for the network. This metadata does not change traffic handling. Null clears it on update.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $description when calling NetworkProtectNetworkUpdate., must be smaller than or equal to 1024.');
        }
        if (!is_null($description) && (mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling NetworkProtectNetworkUpdate., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

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
     * @param string|null $name A human-readable name, unique within the customer.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NetworkProtectNetworkUpdate., must be smaller than or equal to 255.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NetworkProtectNetworkUpdate., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rule_set_id
     *
     * @return string|null
     */
    public function getRuleSetId()
    {
        return $this->container['rule_set_id'];
    }

    /**
     * Sets rule_set_id
     *
     * @param string|null $rule_set_id Custom rule-set attachment is unavailable. Omission, null, and an empty string preserve the current backend-assigned rule set.
     *
     * @return self
     */
    public function setRuleSetId($rule_set_id)
    {

        if (!is_null($rule_set_id) && (!preg_match("/^([A-Za-z0-9]{19,22})?$/", $rule_set_id))) {
            throw new \InvalidArgumentException("invalid value for $rule_set_id when calling NetworkProtectNetworkUpdate., must conform to the pattern /^([A-Za-z0-9]{19,22})?$/.");
        }

        $this->container['rule_set_id'] = $rule_set_id;

        return $this;
    }

    /**
     * Gets endpoint_policies
     *
     * @return \Fastly\Model\NetworkProtectEndpointPolicy[]|null
     */
    public function getEndpointPolicies()
    {
        return $this->container['endpoint_policies'];
    }

    /**
     * Sets endpoint_policies
     *
     * @param \Fastly\Model\NetworkProtectEndpointPolicy[]|null $endpoint_policies Complete endpoint policy configuration. A network has at most one policy per region and may have no policies.
     *
     * @return self
     */
    public function setEndpointPolicies($endpoint_policies)
    {
        $this->container['endpoint_policies'] = $endpoint_policies;

        return $this;
    }

    /**
     * Gets advertise
     *
     * @return bool|null
     */
    public function getAdvertise()
    {
        return $this->container['advertise'];
    }

    /**
     * Sets advertise
     *
     * @param bool|null $advertise Desired advertisement state, which is not the same as observed route state. Enabling it requires approved LOA, valid ROA, and a ready default-region delivery policy. A later ROA failure does not turn an existing advertisement off; losing LOA approval or the last ready default endpoint does.
     *
     * @return self
     */
    public function setAdvertise($advertise)
    {
        $this->container['advertise'] = $advertise;

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


