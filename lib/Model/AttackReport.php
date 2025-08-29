<?php
/**
 * AttackReport
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
 * AttackReport Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AttackReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'AttackReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'id' => 'string',
        'name' => 'string',
        'total_count' => 'int',
        'blocked_count' => 'int',
        'flagged_count' => 'int',
        'attack_count' => 'int',
        'all_flagged_ip_count' => 'int',
        'flagged_ip_count' => 'int',
        'top_attack_signals' => '\Fastly\Model\AttackSignal[]',
        'top_attack_sources' => '\Fastly\Model\AttackSource[]'
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
        'name' => null,
        'total_count' => null,
        'blocked_count' => null,
        'flagged_count' => null,
        'attack_count' => null,
        'all_flagged_ip_count' => null,
        'flagged_ip_count' => null,
        'top_attack_signals' => null,
        'top_attack_sources' => null
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
        'name' => 'name',
        'total_count' => 'total_count',
        'blocked_count' => 'blocked_count',
        'flagged_count' => 'flagged_count',
        'attack_count' => 'attack_count',
        'all_flagged_ip_count' => 'all_flagged_ip_count',
        'flagged_ip_count' => 'flagged_ip_count',
        'top_attack_signals' => 'top_attack_signals',
        'top_attack_sources' => 'top_attack_sources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'total_count' => 'setTotalCount',
        'blocked_count' => 'setBlockedCount',
        'flagged_count' => 'setFlaggedCount',
        'attack_count' => 'setAttackCount',
        'all_flagged_ip_count' => 'setAllFlaggedIpCount',
        'flagged_ip_count' => 'setFlaggedIpCount',
        'top_attack_signals' => 'setTopAttackSignals',
        'top_attack_sources' => 'setTopAttackSources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'total_count' => 'getTotalCount',
        'blocked_count' => 'getBlockedCount',
        'flagged_count' => 'getFlaggedCount',
        'attack_count' => 'getAttackCount',
        'all_flagged_ip_count' => 'getAllFlaggedIpCount',
        'flagged_ip_count' => 'getFlaggedIpCount',
        'top_attack_signals' => 'getTopAttackSignals',
        'top_attack_sources' => 'getTopAttackSources'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['total_count'] = $data['total_count'] ?? null;
        $this->container['blocked_count'] = $data['blocked_count'] ?? null;
        $this->container['flagged_count'] = $data['flagged_count'] ?? null;
        $this->container['attack_count'] = $data['attack_count'] ?? null;
        $this->container['all_flagged_ip_count'] = $data['all_flagged_ip_count'] ?? null;
        $this->container['flagged_ip_count'] = $data['flagged_ip_count'] ?? null;
        $this->container['top_attack_signals'] = $data['top_attack_signals'] ?? null;
        $this->container['top_attack_sources'] = $data['top_attack_sources'] ?? null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['total_count'] === null) {
            $invalidProperties[] = "'total_count' can't be null";
        }
        if ($this->container['blocked_count'] === null) {
            $invalidProperties[] = "'blocked_count' can't be null";
        }
        if ($this->container['flagged_count'] === null) {
            $invalidProperties[] = "'flagged_count' can't be null";
        }
        if ($this->container['attack_count'] === null) {
            $invalidProperties[] = "'attack_count' can't be null";
        }
        if ($this->container['all_flagged_ip_count'] === null) {
            $invalidProperties[] = "'all_flagged_ip_count' can't be null";
        }
        if ($this->container['flagged_ip_count'] === null) {
            $invalidProperties[] = "'flagged_ip_count' can't be null";
        }
        if ($this->container['top_attack_signals'] === null) {
            $invalidProperties[] = "'top_attack_signals' can't be null";
        }
        if ($this->container['top_attack_sources'] === null) {
            $invalidProperties[] = "'top_attack_sources' can't be null";
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
     * @param string $id ID of the workspace.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name Name of the workspace.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int $total_count Total request count
     *
     * @return self
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets blocked_count
     *
     * @return int
     */
    public function getBlockedCount()
    {
        return $this->container['blocked_count'];
    }

    /**
     * Sets blocked_count
     *
     * @param int $blocked_count Blocked request count
     *
     * @return self
     */
    public function setBlockedCount($blocked_count)
    {
        $this->container['blocked_count'] = $blocked_count;

        return $this;
    }

    /**
     * Gets flagged_count
     *
     * @return int
     */
    public function getFlaggedCount()
    {
        return $this->container['flagged_count'];
    }

    /**
     * Sets flagged_count
     *
     * @param int $flagged_count Flagged request count
     *
     * @return self
     */
    public function setFlaggedCount($flagged_count)
    {
        $this->container['flagged_count'] = $flagged_count;

        return $this;
    }

    /**
     * Gets attack_count
     *
     * @return int
     */
    public function getAttackCount()
    {
        return $this->container['attack_count'];
    }

    /**
     * Sets attack_count
     *
     * @param int $attack_count Attack request count
     *
     * @return self
     */
    public function setAttackCount($attack_count)
    {
        $this->container['attack_count'] = $attack_count;

        return $this;
    }

    /**
     * Gets all_flagged_ip_count
     *
     * @return int
     */
    public function getAllFlaggedIpCount()
    {
        return $this->container['all_flagged_ip_count'];
    }

    /**
     * Sets all_flagged_ip_count
     *
     * @param int $all_flagged_ip_count Count of IPs that have been flagged
     *
     * @return self
     */
    public function setAllFlaggedIpCount($all_flagged_ip_count)
    {
        $this->container['all_flagged_ip_count'] = $all_flagged_ip_count;

        return $this;
    }

    /**
     * Gets flagged_ip_count
     *
     * @return int
     */
    public function getFlaggedIpCount()
    {
        return $this->container['flagged_ip_count'];
    }

    /**
     * Sets flagged_ip_count
     *
     * @param int $flagged_ip_count Count of currently flagged IPs
     *
     * @return self
     */
    public function setFlaggedIpCount($flagged_ip_count)
    {
        $this->container['flagged_ip_count'] = $flagged_ip_count;

        return $this;
    }

    /**
     * Gets top_attack_signals
     *
     * @return \Fastly\Model\AttackSignal[]
     */
    public function getTopAttackSignals()
    {
        return $this->container['top_attack_signals'];
    }

    /**
     * Sets top_attack_signals
     *
     * @param \Fastly\Model\AttackSignal[] $top_attack_signals top_attack_signals
     *
     * @return self
     */
    public function setTopAttackSignals($top_attack_signals)
    {
        $this->container['top_attack_signals'] = $top_attack_signals;

        return $this;
    }

    /**
     * Gets top_attack_sources
     *
     * @return \Fastly\Model\AttackSource[]
     */
    public function getTopAttackSources()
    {
        return $this->container['top_attack_sources'];
    }

    /**
     * Sets top_attack_sources
     *
     * @param \Fastly\Model\AttackSource[] $top_attack_sources top_attack_sources
     *
     * @return self
     */
    public function setTopAttackSources($top_attack_sources)
    {
        $this->container['top_attack_sources'] = $top_attack_sources;

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


