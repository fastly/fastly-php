<?php
/**
 * ArcUsageMetric
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
 * ArcUsageMetric Class Doc Comment
 *
 * @category Class
 * @description A usage metric measured for a single date (or hour, when &#x60;granularity&#x60; is &#x60;hourly&#x60;).
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcUsageMetric implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_usage_metric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'date' => 'string',
        'usage_type' => 'string',
        'quantity' => 'int',
        'virtual_key_id' => 'string',
        'virtual_key_name' => 'string',
        'primary_provider' => 'string',
        'provider' => 'string',
        'provider_connection_id' => 'string',
        'model' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'date' => null,
        'usage_type' => null,
        'quantity' => null,
        'virtual_key_id' => null,
        'virtual_key_name' => null,
        'primary_provider' => null,
        'provider' => null,
        'provider_connection_id' => null,
        'model' => null
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
        'date' => 'date',
        'usage_type' => 'usage_type',
        'quantity' => 'quantity',
        'virtual_key_id' => 'virtual_key_id',
        'virtual_key_name' => 'virtual_key_name',
        'primary_provider' => 'primary_provider',
        'provider' => 'provider',
        'provider_connection_id' => 'provider_connection_id',
        'model' => 'model'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'usage_type' => 'setUsageType',
        'quantity' => 'setQuantity',
        'virtual_key_id' => 'setVirtualKeyId',
        'virtual_key_name' => 'setVirtualKeyName',
        'primary_provider' => 'setPrimaryProvider',
        'provider' => 'setProvider',
        'provider_connection_id' => 'setProviderConnectionId',
        'model' => 'setModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'usage_type' => 'getUsageType',
        'quantity' => 'getQuantity',
        'virtual_key_id' => 'getVirtualKeyId',
        'virtual_key_name' => 'getVirtualKeyName',
        'primary_provider' => 'getPrimaryProvider',
        'provider' => 'getProvider',
        'provider_connection_id' => 'getProviderConnectionId',
        'model' => 'getModel'
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

    const USAGE_TYPE_REQUESTS = 'requests';
    const USAGE_TYPE_SESSIONS = 'sessions';
    const USAGE_TYPE_INPUT_TOKENS = 'input_tokens';
    const USAGE_TYPE_OUTPUT_TOKENS = 'output_tokens';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsageTypeAllowableValues()
    {
        return [
            self::USAGE_TYPE_REQUESTS,
            self::USAGE_TYPE_SESSIONS,
            self::USAGE_TYPE_INPUT_TOKENS,
            self::USAGE_TYPE_OUTPUT_TOKENS,
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
        $this->container['date'] = $data['date'] ?? null;
        $this->container['usage_type'] = $data['usage_type'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['virtual_key_id'] = $data['virtual_key_id'] ?? null;
        $this->container['virtual_key_name'] = $data['virtual_key_name'] ?? null;
        $this->container['primary_provider'] = $data['primary_provider'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['provider_connection_id'] = $data['provider_connection_id'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['usage_type'] === null) {
            $invalidProperties[] = "'usage_type' can't be null";
        }
        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($this->container['usage_type']) && !in_array($this->container['usage_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'usage_type', must be one of '%s'",
                $this->container['usage_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date The date (or hour) the usage was measured. Formatted as `YYYY-MM-DD` when `granularity` is `daily`, or `YYYY-MM-DD HH:00:00` when `granularity` is `hourly`.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets usage_type
     *
     * @return string
     */
    public function getUsageType()
    {
        return $this->container['usage_type'];
    }

    /**
     * Sets usage_type
     *
     * @param string $usage_type The type of usage being measured.
     *
     * @return self
     */
    public function setUsageType($usage_type)
    {
        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!in_array($usage_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'usage_type', must be one of '%s'",
                    $usage_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['usage_type'] = $usage_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The quantity of the usage type for this date.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets virtual_key_id
     *
     * @return string|null
     */
    public function getVirtualKeyId()
    {
        return $this->container['virtual_key_id'];
    }

    /**
     * Sets virtual_key_id
     *
     * @param string|null $virtual_key_id The ID of the virtual key this usage is attributed to.
     *
     * @return self
     */
    public function setVirtualKeyId($virtual_key_id)
    {
        $this->container['virtual_key_id'] = $virtual_key_id;

        return $this;
    }

    /**
     * Gets virtual_key_name
     *
     * @return string|null
     */
    public function getVirtualKeyName()
    {
        return $this->container['virtual_key_name'];
    }

    /**
     * Sets virtual_key_name
     *
     * @param string|null $virtual_key_name The display name of the virtual key this usage is attributed to.
     *
     * @return self
     */
    public function setVirtualKeyName($virtual_key_name)
    {
        $this->container['virtual_key_name'] = $virtual_key_name;

        return $this;
    }

    /**
     * Gets primary_provider
     *
     * @return string|null
     */
    public function getPrimaryProvider()
    {
        return $this->container['primary_provider'];
    }

    /**
     * Sets primary_provider
     *
     * @param string|null $primary_provider The ID of the provider connection originally requested, before any failover occurred.
     *
     * @return self
     */
    public function setPrimaryProvider($primary_provider)
    {
        $this->container['primary_provider'] = $primary_provider;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string|null $provider The name of the provider connection that ultimately served the request.
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets provider_connection_id
     *
     * @return string|null
     */
    public function getProviderConnectionId()
    {
        return $this->container['provider_connection_id'];
    }

    /**
     * Sets provider_connection_id
     *
     * @param string|null $provider_connection_id The ID of the provider connection that ultimately served the request.
     *
     * @return self
     */
    public function setProviderConnectionId($provider_connection_id)
    {
        $this->container['provider_connection_id'] = $provider_connection_id;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The AI model identifier used.
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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


