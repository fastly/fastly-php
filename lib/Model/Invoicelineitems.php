<?php
/**
 * Invoicelineitems
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
 * Invoicelineitems Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Invoicelineitems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'invoicelineitems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'description' => 'string',
        'amount' => 'float',
        'credit_coupon_code' => 'string',
        'rate' => 'float',
        'units' => 'float',
        'product_name' => 'string',
        'product_group' => 'string',
        'product_line' => 'string',
        'region' => 'string',
        'usage_type' => 'string'
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
        'amount' => null,
        'credit_coupon_code' => null,
        'rate' => null,
        'units' => null,
        'product_name' => null,
        'product_group' => null,
        'product_line' => null,
        'region' => null,
        'usage_type' => null
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
        'amount' => 'amount',
        'credit_coupon_code' => 'credit_coupon_code',
        'rate' => 'rate',
        'units' => 'units',
        'product_name' => 'product_name',
        'product_group' => 'product_group',
        'product_line' => 'product_line',
        'region' => 'region',
        'usage_type' => 'usage_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'credit_coupon_code' => 'setCreditCouponCode',
        'rate' => 'setRate',
        'units' => 'setUnits',
        'product_name' => 'setProductName',
        'product_group' => 'setProductGroup',
        'product_line' => 'setProductLine',
        'region' => 'setRegion',
        'usage_type' => 'setUsageType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'credit_coupon_code' => 'getCreditCouponCode',
        'rate' => 'getRate',
        'units' => 'getUnits',
        'product_name' => 'getProductName',
        'product_group' => 'getProductGroup',
        'product_line' => 'getProductLine',
        'region' => 'getRegion',
        'usage_type' => 'getUsageType'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['credit_coupon_code'] = $data['credit_coupon_code'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['product_name'] = $data['product_name'] ?? null;
        $this->container['product_group'] = $data['product_group'] ?? null;
        $this->container['product_line'] = $data['product_line'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['usage_type'] = $data['usage_type'] ?? null;
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
     * @param string|null $description Invoice line item transaction name.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Billed amount for line item.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets credit_coupon_code
     *
     * @return string|null
     */
    public function getCreditCouponCode()
    {
        return $this->container['credit_coupon_code'];
    }

    /**
     * Sets credit_coupon_code
     *
     * @param string|null $credit_coupon_code Discount coupon associated with the invoice for any account or service credits.
     *
     * @return self
     */
    public function setCreditCouponCode($credit_coupon_code)
    {
        $this->container['credit_coupon_code'] = $credit_coupon_code;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate Price per unit.
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets units
     *
     * @return float|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param float|null $units Total number of units of usage.
     *
     * @return self
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string|null $product_name The name of the product.
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets product_group
     *
     * @return string|null
     */
    public function getProductGroup()
    {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group
     *
     * @param string|null $product_group The broader classification of the product (e.g., `Compute` or `Full-Site Delivery`).
     *
     * @return self
     */
    public function setProductGroup($product_group)
    {
        $this->container['product_group'] = $product_group;

        return $this;
    }

    /**
     * Gets product_line
     *
     * @return string|null
     */
    public function getProductLine()
    {
        return $this->container['product_line'];
    }

    /**
     * Sets product_line
     *
     * @param string|null $product_line The broader classification of the product (e.g., `Network Services` or `Security`).
     *
     * @return self
     */
    public function setProductLine($product_line)
    {
        $this->container['product_line'] = $product_line;

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
     * @param string|null $usage_type The unit of measure (e.g., `requests` or `bandwidth`).
     *
     * @return self
     */
    public function setUsageType($usage_type)
    {
        $this->container['usage_type'] = $usage_type;

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


