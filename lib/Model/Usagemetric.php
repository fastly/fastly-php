<?php
/**
 * Usagemetric
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
 * Usagemetric Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Usagemetric implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'usagemetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'month' => 'string',
        'usage_type' => 'string',
        'name' => 'string',
        'region' => 'string',
        'unit' => 'string',
        'quantity' => 'float',
        'raw_quantity' => 'float',
        'product_id' => 'string',
        'last_updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'month' => null,
        'usage_type' => null,
        'name' => null,
        'region' => null,
        'unit' => null,
        'quantity' => null,
        'raw_quantity' => null,
        'product_id' => null,
        'last_updated_at' => null
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
        'month' => 'month',
        'usage_type' => 'usage_type',
        'name' => 'name',
        'region' => 'region',
        'unit' => 'unit',
        'quantity' => 'quantity',
        'raw_quantity' => 'raw_quantity',
        'product_id' => 'product_id',
        'last_updated_at' => 'last_updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'usage_type' => 'setUsageType',
        'name' => 'setName',
        'region' => 'setRegion',
        'unit' => 'setUnit',
        'quantity' => 'setQuantity',
        'raw_quantity' => 'setRawQuantity',
        'product_id' => 'setProductId',
        'last_updated_at' => 'setLastUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'usage_type' => 'getUsageType',
        'name' => 'getName',
        'region' => 'getRegion',
        'unit' => 'getUnit',
        'quantity' => 'getQuantity',
        'raw_quantity' => 'getRawQuantity',
        'product_id' => 'getProductId',
        'last_updated_at' => 'getLastUpdatedAt'
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
        $this->container['month'] = $data['month'] ?? null;
        $this->container['usage_type'] = $data['usage_type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['raw_quantity'] = $data['raw_quantity'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['last_updated_at'] = $data['last_updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets month
     *
     * @return string|null
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param string|null $month The year and month of the usage element.
     *
     * @return self
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets usage_type
     *
     * @return string|null
     */
    public function getUsageType()
    {
        return $this->container['usage_type'];
    }

    /**
     * Sets usage_type
     *
     * @param string|null $usage_type The usage type identifier for the usage. This is a single, billable metric for the product.
     *
     * @return self
     */
    public function setUsageType($usage_type)
    {
        $this->container['usage_type'] = $usage_type;

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
     * @param string|null $name Full name of the product usage type as it might appear on a customer's invoice.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region The geographical area applicable for regionally based products.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit The unit for the usage as shown on an invoice. If there is no explicit unit, this field will be \"unit\" (e.g., a request with `product_id` of 'cdn_usage' and `usage_type` of 'North America Requests' has no unit, and will return \"unit\").
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity The quantity of the usage for the product.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets raw_quantity
     *
     * @return float|null
     */
    public function getRawQuantity()
    {
        return $this->container['raw_quantity'];
    }

    /**
     * Sets raw_quantity
     *
     * @param float|null $raw_quantity The raw units measured for the product.
     *
     * @return self
     */
    public function setRawQuantity($raw_quantity)
    {
        $this->container['raw_quantity'] = $raw_quantity;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id The product identifier associated with the usage type. This corresponds to a Fastly product offering.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets last_updated_at
     *
     * @return string|null
     */
    public function getLastUpdatedAt()
    {
        return $this->container['last_updated_at'];
    }

    /**
     * Sets last_updated_at
     *
     * @param string|null $last_updated_at The date when the usage metric was last updated.
     *
     * @return self
     */
    public function setLastUpdatedAt($last_updated_at)
    {
        $this->container['last_updated_at'] = $last_updated_at;

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


