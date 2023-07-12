<?php
/**
 * BillingEstimateLinesLineItems
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
 * BillingEstimateLinesLineItems Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BillingEstimateLinesLineItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'billing_estimate_lines_line_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'plan_no' => 'int',
        'description' => 'string',
        'units' => 'float',
        'per_unit_cost' => 'float',
        'service_no' => 'float',
        'service_type' => 'string',
        'amount' => 'float',
        'client_service_id' => 'string',
        'client_plan_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'plan_no' => null,
        'description' => null,
        'units' => null,
        'per_unit_cost' => null,
        'service_no' => null,
        'service_type' => null,
        'amount' => null,
        'client_service_id' => null,
        'client_plan_id' => null
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
        'plan_no' => 'plan_no',
        'description' => 'description',
        'units' => 'units',
        'per_unit_cost' => 'per_unit_cost',
        'service_no' => 'service_no',
        'service_type' => 'service_type',
        'amount' => 'amount',
        'client_service_id' => 'client_service_id',
        'client_plan_id' => 'client_plan_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan_no' => 'setPlanNo',
        'description' => 'setDescription',
        'units' => 'setUnits',
        'per_unit_cost' => 'setPerUnitCost',
        'service_no' => 'setServiceNo',
        'service_type' => 'setServiceType',
        'amount' => 'setAmount',
        'client_service_id' => 'setClientServiceId',
        'client_plan_id' => 'setClientPlanId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan_no' => 'getPlanNo',
        'description' => 'getDescription',
        'units' => 'getUnits',
        'per_unit_cost' => 'getPerUnitCost',
        'service_no' => 'getServiceNo',
        'service_type' => 'getServiceType',
        'amount' => 'getAmount',
        'client_service_id' => 'getClientServiceId',
        'client_plan_id' => 'getClientPlanId'
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
        $this->container['plan_no'] = $data['plan_no'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['per_unit_cost'] = $data['per_unit_cost'] ?? null;
        $this->container['service_no'] = $data['service_no'] ?? null;
        $this->container['service_type'] = $data['service_type'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['client_service_id'] = $data['client_service_id'] ?? null;
        $this->container['client_plan_id'] = $data['client_plan_id'] ?? null;
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
     * Gets plan_no
     *
     * @return int|null
     */
    public function getPlanNo()
    {
        return $this->container['plan_no'];
    }

    /**
     * Sets plan_no
     *
     * @param int|null $plan_no plan_no
     *
     * @return self
     */
    public function setPlanNo($plan_no)
    {
        $this->container['plan_no'] = $plan_no;

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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param float|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets per_unit_cost
     *
     * @return float|null
     */
    public function getPerUnitCost()
    {
        return $this->container['per_unit_cost'];
    }

    /**
     * Sets per_unit_cost
     *
     * @param float|null $per_unit_cost per_unit_cost
     *
     * @return self
     */
    public function setPerUnitCost($per_unit_cost)
    {
        $this->container['per_unit_cost'] = $per_unit_cost;

        return $this;
    }

    /**
     * Gets service_no
     *
     * @return float|null
     */
    public function getServiceNo()
    {
        return $this->container['service_no'];
    }

    /**
     * Sets service_no
     *
     * @param float|null $service_no service_no
     *
     * @return self
     */
    public function setServiceNo($service_no)
    {
        $this->container['service_no'] = $service_no;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string|null $service_type service_type
     *
     * @return self
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

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
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets client_service_id
     *
     * @return string|null
     */
    public function getClientServiceId()
    {
        return $this->container['client_service_id'];
    }

    /**
     * Sets client_service_id
     *
     * @param string|null $client_service_id client_service_id
     *
     * @return self
     */
    public function setClientServiceId($client_service_id)
    {
        $this->container['client_service_id'] = $client_service_id;

        return $this;
    }

    /**
     * Gets client_plan_id
     *
     * @return string|null
     */
    public function getClientPlanId()
    {
        return $this->container['client_plan_id'];
    }

    /**
     * Sets client_plan_id
     *
     * @param string|null $client_plan_id client_plan_id
     *
     * @return self
     */
    public function setClientPlanId($client_plan_id)
    {
        $this->container['client_plan_id'] = $client_plan_id;

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


