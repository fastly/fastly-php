<?php
/**
 * NetworkProtectRule
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
 * NetworkProtectRule Class Doc Comment
 *
 * @category Class
 * @description One ordered firewall rule. All match fields are optional, but at least one must be provided. The action is required. Rules have no public ID; replacing the list preserves timestamps only when logical fields, comment, and position are unchanged.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NetworkProtectRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'network_protect_rule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'ip_protocol' => '\Fastly\Model\NetworkProtectRuleIpProtocol',
        'source_prefix_list_id' => 'string',
        'destination_ip_address' => 'string',
        'source_ports' => '\Fastly\Model\NetworkProtectRuleSourcePorts',
        'destination_ports' => '\Fastly\Model\NetworkProtectRuleDestinationPorts',
        'action' => '\Fastly\Model\NetworkProtectRuleAction',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'ip_protocol' => null,
        'source_prefix_list_id' => null,
        'destination_ip_address' => null,
        'source_ports' => null,
        'destination_ports' => null,
        'action' => null,
        'comment' => null
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
        'ip_protocol' => 'ip_protocol',
        'source_prefix_list_id' => 'source_prefix_list_id',
        'destination_ip_address' => 'destination_ip_address',
        'source_ports' => 'source_ports',
        'destination_ports' => 'destination_ports',
        'action' => 'action',
        'comment' => 'comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip_protocol' => 'setIpProtocol',
        'source_prefix_list_id' => 'setSourcePrefixListId',
        'destination_ip_address' => 'setDestinationIpAddress',
        'source_ports' => 'setSourcePorts',
        'destination_ports' => 'setDestinationPorts',
        'action' => 'setAction',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip_protocol' => 'getIpProtocol',
        'source_prefix_list_id' => 'getSourcePrefixListId',
        'destination_ip_address' => 'getDestinationIpAddress',
        'source_ports' => 'getSourcePorts',
        'destination_ports' => 'getDestinationPorts',
        'action' => 'getAction',
        'comment' => 'getComment'
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
        $this->container['ip_protocol'] = $data['ip_protocol'] ?? null;
        $this->container['source_prefix_list_id'] = $data['source_prefix_list_id'] ?? null;
        $this->container['destination_ip_address'] = $data['destination_ip_address'] ?? null;
        $this->container['source_ports'] = $data['source_ports'] ?? null;
        $this->container['destination_ports'] = $data['destination_ports'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ip_protocol'] === null) {
            $invalidProperties[] = "'ip_protocol' can't be null";
        }
        if ($this->container['source_prefix_list_id'] === null) {
            $invalidProperties[] = "'source_prefix_list_id' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9]{19,22}$/", $this->container['source_prefix_list_id'])) {
            $invalidProperties[] = "invalid value for 'source_prefix_list_id', must be conform to the pattern /^[A-Za-z0-9]{19,22}$/.";
        }

        if ($this->container['destination_ip_address'] === null) {
            $invalidProperties[] = "'destination_ip_address' can't be null";
        }
        if ($this->container['source_ports'] === null) {
            $invalidProperties[] = "'source_ports' can't be null";
        }
        if ($this->container['destination_ports'] === null) {
            $invalidProperties[] = "'destination_ports' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 100)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 1)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 1.";
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
     * Gets ip_protocol
     *
     * @return \Fastly\Model\NetworkProtectRuleIpProtocol
     */
    public function getIpProtocol()
    {
        return $this->container['ip_protocol'];
    }

    /**
     * Sets ip_protocol
     *
     * @param \Fastly\Model\NetworkProtectRuleIpProtocol $ip_protocol ip_protocol
     *
     * @return self
     */
    public function setIpProtocol($ip_protocol)
    {
        $this->container['ip_protocol'] = $ip_protocol;

        return $this;
    }

    /**
     * Gets source_prefix_list_id
     *
     * @return string
     */
    public function getSourcePrefixListId()
    {
        return $this->container['source_prefix_list_id'];
    }

    /**
     * Sets source_prefix_list_id
     *
     * @param string $source_prefix_list_id Match traffic whose source appears in this prefix list.
     *
     * @return self
     */
    public function setSourcePrefixListId($source_prefix_list_id)
    {

        if ((!preg_match("/^[A-Za-z0-9]{19,22}$/", $source_prefix_list_id))) {
            throw new \InvalidArgumentException("invalid value for $source_prefix_list_id when calling NetworkProtectRule., must conform to the pattern /^[A-Za-z0-9]{19,22}$/.");
        }

        $this->container['source_prefix_list_id'] = $source_prefix_list_id;

        return $this;
    }

    /**
     * Gets destination_ip_address
     *
     * @return string
     */
    public function getDestinationIpAddress()
    {
        return $this->container['destination_ip_address'];
    }

    /**
     * Sets destination_ip_address
     *
     * @param string $destination_ip_address Match traffic sent to this address; omit for any destination. An address outside a Network using this Rule Set never matches and still consumes one of the 64 rules. The API does not enforce containment in a network prefix; attached Rule Sets require a compatible IP family.
     *
     * @return self
     */
    public function setDestinationIpAddress($destination_ip_address)
    {
        $this->container['destination_ip_address'] = $destination_ip_address;

        return $this;
    }

    /**
     * Gets source_ports
     *
     * @return \Fastly\Model\NetworkProtectRuleSourcePorts
     */
    public function getSourcePorts()
    {
        return $this->container['source_ports'];
    }

    /**
     * Sets source_ports
     *
     * @param \Fastly\Model\NetworkProtectRuleSourcePorts $source_ports source_ports
     *
     * @return self
     */
    public function setSourcePorts($source_ports)
    {
        $this->container['source_ports'] = $source_ports;

        return $this;
    }

    /**
     * Gets destination_ports
     *
     * @return \Fastly\Model\NetworkProtectRuleDestinationPorts
     */
    public function getDestinationPorts()
    {
        return $this->container['destination_ports'];
    }

    /**
     * Sets destination_ports
     *
     * @param \Fastly\Model\NetworkProtectRuleDestinationPorts $destination_ports destination_ports
     *
     * @return self
     */
    public function setDestinationPorts($destination_ports)
    {
        $this->container['destination_ports'] = $destination_ports;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \Fastly\Model\NetworkProtectRuleAction
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \Fastly\Model\NetworkProtectRuleAction $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Optional rule metadata of 1 to 100 Unicode code points. It does not participate in traffic matching. Omit it to leave a rule without a comment; replacing rules with an item that omits it clears the stored comment. Omitting rules on PATCH preserves existing comments. Empty strings and null are rejected.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (!is_null($comment) && (mb_strlen($comment) > 100)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling NetworkProtectRule., must be smaller than or equal to 100.');
        }
        if (!is_null($comment) && (mb_strlen($comment) < 1)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling NetworkProtectRule., must be bigger than or equal to 1.');
        }

        $this->container['comment'] = $comment;

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


