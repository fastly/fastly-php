<?php
/**
 * Director
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
 * Director Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Director implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'director';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'backends' => '\Fastly\Model\Backend[]',
        'capacity' => 'int',
        'comment' => 'string',
        'name' => 'string',
        'quorum' => 'int',
        'shield' => 'string',
        'type' => 'int',
        'retries' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'backends' => null,
        'capacity' => null,
        'comment' => null,
        'name' => null,
        'quorum' => null,
        'shield' => null,
        'type' => null,
        'retries' => null
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
        'backends' => 'backends',
        'capacity' => 'capacity',
        'comment' => 'comment',
        'name' => 'name',
        'quorum' => 'quorum',
        'shield' => 'shield',
        'type' => 'type',
        'retries' => 'retries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backends' => 'setBackends',
        'capacity' => 'setCapacity',
        'comment' => 'setComment',
        'name' => 'setName',
        'quorum' => 'setQuorum',
        'shield' => 'setShield',
        'type' => 'setType',
        'retries' => 'setRetries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backends' => 'getBackends',
        'capacity' => 'getCapacity',
        'comment' => 'getComment',
        'name' => 'getName',
        'quorum' => 'getQuorum',
        'shield' => 'getShield',
        'type' => 'getType',
        'retries' => 'getRetries'
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

    const TYPE_random = 1;
    const TYPE_hash = 3;
    const TYPE_client = 4;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_random,
            self::TYPE_hash,
            self::TYPE_client,
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
        $this->container['backends'] = $data['backends'] ?? null;
        $this->container['capacity'] = $data['capacity'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['quorum'] = $data['quorum'] ?? 75;
        $this->container['shield'] = $data['shield'] ?? 'null';
        $this->container['type'] = $data['type'] ?? self::TYPE_random;
        $this->container['retries'] = $data['retries'] ?? 5;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['quorum']) && ($this->container['quorum'] > 100)) {
            $invalidProperties[] = "invalid value for 'quorum', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['quorum']) && ($this->container['quorum'] < 0)) {
            $invalidProperties[] = "invalid value for 'quorum', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets backends
     *
     * @return \Fastly\Model\Backend[]|null
     */
    public function getBackends()
    {
        return $this->container['backends'];
    }

    /**
     * Sets backends
     *
     * @param \Fastly\Model\Backend[]|null $backends List of backends associated to a director.
     *
     * @return self
     */
    public function setBackends($backends)
    {
        $this->container['backends'] = $backends;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int|null $capacity Unused.
     *
     * @return self
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

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
     * @param string|null $comment A freeform descriptive note.
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
     * @param string|null $name Name for the Director.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quorum
     *
     * @return int|null
     */
    public function getQuorum()
    {
        return $this->container['quorum'];
    }

    /**
     * Sets quorum
     *
     * @param int|null $quorum The percentage of capacity that needs to be up for a director to be considered up. `0` to `100`.
     *
     * @return self
     */
    public function setQuorum($quorum)
    {

        if (!is_null($quorum) && ($quorum > 100)) {
            throw new \InvalidArgumentException('invalid value for $quorum when calling Director., must be smaller than or equal to 100.');
        }
        if (!is_null($quorum) && ($quorum < 0)) {
            throw new \InvalidArgumentException('invalid value for $quorum when calling Director., must be bigger than or equal to 0.');
        }

        $this->container['quorum'] = $quorum;

        return $this;
    }

    /**
     * Gets shield
     *
     * @return string|null
     */
    public function getShield()
    {
        return $this->container['shield'];
    }

    /**
     * Sets shield
     *
     * @param string|null $shield Selected POP to serve as a shield for the backends. Defaults to `null` meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding.
     *
     * @return self
     */
    public function setShield($shield)
    {
        $this->container['shield'] = $shield;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type What type of load balance group to use.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int|null
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int|null $retries How many backends to search if it fails.
     *
     * @return self
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

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


