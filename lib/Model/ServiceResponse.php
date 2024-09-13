<?php
/**
 * ServiceResponse
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
 * ServiceResponse Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ServiceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'service_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'comment' => 'string',
        'name' => 'string',
        'customer_id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'publish_key' => 'string',
        'paused' => 'bool',
        'versions' => '\Fastly\Model\SchemasVersionResponse[]',
        'environments' => '\Fastly\Model\Environment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time',
        'comment' => null,
        'name' => null,
        'customer_id' => null,
        'type' => null,
        'id' => null,
        'publish_key' => null,
        'paused' => null,
        'versions' => null,
        'environments' => null
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
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at',
        'comment' => 'comment',
        'name' => 'name',
        'customer_id' => 'customer_id',
        'type' => 'type',
        'id' => 'id',
        'publish_key' => 'publish_key',
        'paused' => 'paused',
        'versions' => 'versions',
        'environments' => 'environments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt',
        'comment' => 'setComment',
        'name' => 'setName',
        'customer_id' => 'setCustomerId',
        'type' => 'setType',
        'id' => 'setId',
        'publish_key' => 'setPublishKey',
        'paused' => 'setPaused',
        'versions' => 'setVersions',
        'environments' => 'setEnvironments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt',
        'comment' => 'getComment',
        'name' => 'getName',
        'customer_id' => 'getCustomerId',
        'type' => 'getType',
        'id' => 'getId',
        'publish_key' => 'getPublishKey',
        'paused' => 'getPaused',
        'versions' => 'getVersions',
        'environments' => 'getEnvironments'
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

    const TYPE_VCL = 'vcl';
    const TYPE_WASM = 'wasm';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VCL,
            self::TYPE_WASM,
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['publish_key'] = $data['publish_key'] ?? null;
        $this->container['paused'] = $data['paused'] ?? null;
        $this->container['versions'] = $data['versions'] ?? null;
        $this->container['environments'] = $data['environments'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string|null $name The name of the service.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $customer_id Alphanumeric string identifying the customer.
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
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of this service.
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
     * Gets publish_key
     *
     * @return string|null
     */
    public function getPublishKey()
    {
        return $this->container['publish_key'];
    }

    /**
     * Sets publish_key
     *
     * @param string|null $publish_key Unused at this time.
     *
     * @return self
     */
    public function setPublishKey($publish_key)
    {
        $this->container['publish_key'] = $publish_key;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return bool|null
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool|null $paused Whether the service is paused. Services are paused due to a lack of traffic for an extended period of time. Services are resumed either when a draft version is activated or a locked version is cloned and reactivated.
     *
     * @return self
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \Fastly\Model\SchemasVersionResponse[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \Fastly\Model\SchemasVersionResponse[]|null $versions A list of [versions](https://www.fastly.com/documentation/reference/api/services/version/) associated with the service.
     *
     * @return self
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return \Fastly\Model\Environment[]|null
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param \Fastly\Model\Environment[]|null $environments A list of environments where the service has been deployed.
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

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


