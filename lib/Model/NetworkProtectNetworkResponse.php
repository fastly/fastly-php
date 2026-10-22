<?php
/**
 * NetworkProtectNetworkResponse
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
 * NetworkProtectNetworkResponse Class Doc Comment
 *
 * @category Class
 * @description A Network Protect network response.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NetworkProtectNetworkResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'network_protect_network_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'prefix' => 'string',
        'endpoint_policies' => '\Fastly\Model\NetworkProtectEndpointPolicy[]',
        'advertise' => 'bool',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'description' => 'string',
        'rule_set_id' => 'string',
        'roa_status' => '\Fastly\Model\NetworkProtectRoaStatus',
        'roa_checked_at' => '\DateTime',
        'roa_data_as_of' => '\DateTime',
        'loa_status' => '\Fastly\Model\NetworkProtectLoaStatus'
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
        'prefix' => null,
        'endpoint_policies' => null,
        'advertise' => null,
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'description' => null,
        'rule_set_id' => null,
        'roa_status' => null,
        'roa_checked_at' => 'date-time',
        'roa_data_as_of' => 'date-time',
        'loa_status' => null
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
        'prefix' => 'prefix',
        'endpoint_policies' => 'endpoint_policies',
        'advertise' => 'advertise',
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'description' => 'description',
        'rule_set_id' => 'rule_set_id',
        'roa_status' => 'roa_status',
        'roa_checked_at' => 'roa_checked_at',
        'roa_data_as_of' => 'roa_data_as_of',
        'loa_status' => 'loa_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'prefix' => 'setPrefix',
        'endpoint_policies' => 'setEndpointPolicies',
        'advertise' => 'setAdvertise',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'description' => 'setDescription',
        'rule_set_id' => 'setRuleSetId',
        'roa_status' => 'setRoaStatus',
        'roa_checked_at' => 'setRoaCheckedAt',
        'roa_data_as_of' => 'setRoaDataAsOf',
        'loa_status' => 'setLoaStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'prefix' => 'getPrefix',
        'endpoint_policies' => 'getEndpointPolicies',
        'advertise' => 'getAdvertise',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'description' => 'getDescription',
        'rule_set_id' => 'getRuleSetId',
        'roa_status' => 'getRoaStatus',
        'roa_checked_at' => 'getRoaCheckedAt',
        'roa_data_as_of' => 'getRoaDataAsOf',
        'loa_status' => 'getLoaStatus'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['prefix'] = $data['prefix'] ?? null;
        $this->container['endpoint_policies'] = $data['endpoint_policies'] ?? null;
        $this->container['advertise'] = $data['advertise'] ?? false;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['rule_set_id'] = $data['rule_set_id'] ?? null;
        $this->container['roa_status'] = $data['roa_status'] ?? null;
        $this->container['roa_checked_at'] = $data['roa_checked_at'] ?? null;
        $this->container['roa_data_as_of'] = $data['roa_data_as_of'] ?? null;
        $this->container['loa_status'] = $data['loa_status'] ?? null;
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
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['prefix'] === null) {
            $invalidProperties[] = "'prefix' can't be null";
        }
        if ($this->container['endpoint_policies'] === null) {
            $invalidProperties[] = "'endpoint_policies' can't be null";
        }
        if ($this->container['advertise'] === null) {
            $invalidProperties[] = "'advertise' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9]{19,22}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[A-Za-z0-9]{19,22}$/.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['rule_set_id']) && !preg_match("/^[A-Za-z0-9]{19,22}$/", $this->container['rule_set_id'])) {
            $invalidProperties[] = "invalid value for 'rule_set_id', must be conform to the pattern /^[A-Za-z0-9]{19,22}$/.";
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
     * @param string $name A human-readable name, unique within the customer.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NetworkProtectNetworkResponse., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NetworkProtectNetworkResponse., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix The CIDR block to protect, masked to its network address. It cannot be changed after creation.
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets endpoint_policies
     *
     * @return \Fastly\Model\NetworkProtectEndpointPolicy[]
     */
    public function getEndpointPolicies()
    {
        return $this->container['endpoint_policies'];
    }

    /**
     * Sets endpoint_policies
     *
     * @param \Fastly\Model\NetworkProtectEndpointPolicy[] $endpoint_policies Complete endpoint policy configuration. A network has at most one policy per region and may have no policies.
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
     * @return bool
     */
    public function getAdvertise()
    {
        return $this->container['advertise'];
    }

    /**
     * Sets advertise
     *
     * @param bool $advertise Desired advertisement state, which is not the same as observed route state. Enabling it requires approved LOA, valid ROA, and a ready default-region delivery policy. A later ROA failure does not turn an existing advertisement off; losing LOA approval or the last ready default endpoint does.
     *
     * @return self
     */
    public function setAdvertise($advertise)
    {
        $this->container['advertise'] = $advertise;

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
     * @param string $id A read-only unique identifier for a Network Protect resource.
     *
     * @return self
     */
    public function setId($id)
    {

        if ((!preg_match("/^[A-Za-z0-9]{19,22}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling NetworkProtectNetworkResponse., must conform to the pattern /^[A-Za-z0-9]{19,22}$/.");
        }

        $this->container['id'] = $id;

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
     * @param \DateTime $created_at An ISO 8601 timestamp in UTC.
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
     * @param \DateTime $updated_at An ISO 8601 timestamp in UTC.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $description when calling NetworkProtectNetworkResponse., must be smaller than or equal to 1024.');
        }
        if (!is_null($description) && (mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling NetworkProtectNetworkResponse., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

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
     * @param string|null $rule_set_id The backend-assigned rule set applied to this network.
     *
     * @return self
     */
    public function setRuleSetId($rule_set_id)
    {

        if (!is_null($rule_set_id) && (!preg_match("/^[A-Za-z0-9]{19,22}$/", $rule_set_id))) {
            throw new \InvalidArgumentException("invalid value for $rule_set_id when calling NetworkProtectNetworkResponse., must conform to the pattern /^[A-Za-z0-9]{19,22}$/.");
        }

        $this->container['rule_set_id'] = $rule_set_id;

        return $this;
    }

    /**
     * Gets roa_status
     *
     * @return \Fastly\Model\NetworkProtectRoaStatus|null
     */
    public function getRoaStatus()
    {
        return $this->container['roa_status'];
    }

    /**
     * Sets roa_status
     *
     * @param \Fastly\Model\NetworkProtectRoaStatus|null $roa_status roa_status
     *
     * @return self
     */
    public function setRoaStatus($roa_status)
    {
        $this->container['roa_status'] = $roa_status;

        return $this;
    }

    /**
     * Gets roa_checked_at
     *
     * @return \DateTime|null
     */
    public function getRoaCheckedAt()
    {
        return $this->container['roa_checked_at'];
    }

    /**
     * Sets roa_checked_at
     *
     * @param \DateTime|null $roa_checked_at When Fastly last completed a ROA check. Null while the status is pending. A failed check leaves this unchanged; an old value can indicate delayed or failing checks. Null also means the controller did not report a check time.
     *
     * @return self
     */
    public function setRoaCheckedAt($roa_checked_at)
    {
        $this->container['roa_checked_at'] = $roa_checked_at;

        return $this;
    }

    /**
     * Gets roa_data_as_of
     *
     * @return \DateTime|null
     */
    public function getRoaDataAsOf()
    {
        return $this->container['roa_data_as_of'];
    }

    /**
     * Sets roa_data_as_of
     *
     * @param \DateTime|null $roa_data_as_of When the RPKI dataset used by the last check was built. This is not the same as `roa_checked_at`; a recent check can use an older dataset. Null while the status is pending or when no dataset build time was reported.
     *
     * @return self
     */
    public function setRoaDataAsOf($roa_data_as_of)
    {
        $this->container['roa_data_as_of'] = $roa_data_as_of;

        return $this;
    }

    /**
     * Gets loa_status
     *
     * @return \Fastly\Model\NetworkProtectLoaStatus|null
     */
    public function getLoaStatus()
    {
        return $this->container['loa_status'];
    }

    /**
     * Sets loa_status
     *
     * @param \Fastly\Model\NetworkProtectLoaStatus|null $loa_status loa_status
     *
     * @return self
     */
    public function setLoaStatus($loa_status)
    {
        $this->container['loa_status'] = $loa_status;

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


