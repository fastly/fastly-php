<?php
/**
 * BillingTotal
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
 * BillingTotal Class Doc Comment
 *
 * @category Class
 * @description Complete summary of the billing information.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BillingTotal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'billing_total';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'bandwidth' => 'float',
        'bandwidth_cost' => 'float',
        'bandwidth_units' => 'string',
        'cost' => 'float',
        'cost_before_discount' => 'float',
        'discount' => 'float',
        'extras' => '\Fastly\Model\BillingTotalExtras[]',
        'extras_cost' => 'float',
        'incurred_cost' => 'float',
        'overage' => 'float',
        'plan_code' => 'string',
        'plan_minimum' => 'float',
        'plan_name' => 'string',
        'requests' => 'float',
        'requests_cost' => 'float',
        'terms' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'bandwidth' => null,
        'bandwidth_cost' => null,
        'bandwidth_units' => null,
        'cost' => null,
        'cost_before_discount' => null,
        'discount' => null,
        'extras' => null,
        'extras_cost' => null,
        'incurred_cost' => null,
        'overage' => null,
        'plan_code' => null,
        'plan_minimum' => null,
        'plan_name' => null,
        'requests' => null,
        'requests_cost' => null,
        'terms' => null
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
        'bandwidth' => 'bandwidth',
        'bandwidth_cost' => 'bandwidth_cost',
        'bandwidth_units' => 'bandwidth_units',
        'cost' => 'cost',
        'cost_before_discount' => 'cost_before_discount',
        'discount' => 'discount',
        'extras' => 'extras',
        'extras_cost' => 'extras_cost',
        'incurred_cost' => 'incurred_cost',
        'overage' => 'overage',
        'plan_code' => 'plan_code',
        'plan_minimum' => 'plan_minimum',
        'plan_name' => 'plan_name',
        'requests' => 'requests',
        'requests_cost' => 'requests_cost',
        'terms' => 'terms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bandwidth' => 'setBandwidth',
        'bandwidth_cost' => 'setBandwidthCost',
        'bandwidth_units' => 'setBandwidthUnits',
        'cost' => 'setCost',
        'cost_before_discount' => 'setCostBeforeDiscount',
        'discount' => 'setDiscount',
        'extras' => 'setExtras',
        'extras_cost' => 'setExtrasCost',
        'incurred_cost' => 'setIncurredCost',
        'overage' => 'setOverage',
        'plan_code' => 'setPlanCode',
        'plan_minimum' => 'setPlanMinimum',
        'plan_name' => 'setPlanName',
        'requests' => 'setRequests',
        'requests_cost' => 'setRequestsCost',
        'terms' => 'setTerms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bandwidth' => 'getBandwidth',
        'bandwidth_cost' => 'getBandwidthCost',
        'bandwidth_units' => 'getBandwidthUnits',
        'cost' => 'getCost',
        'cost_before_discount' => 'getCostBeforeDiscount',
        'discount' => 'getDiscount',
        'extras' => 'getExtras',
        'extras_cost' => 'getExtrasCost',
        'incurred_cost' => 'getIncurredCost',
        'overage' => 'getOverage',
        'plan_code' => 'getPlanCode',
        'plan_minimum' => 'getPlanMinimum',
        'plan_name' => 'getPlanName',
        'requests' => 'getRequests',
        'requests_cost' => 'getRequestsCost',
        'terms' => 'getTerms'
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
        $this->container['bandwidth'] = $data['bandwidth'] ?? null;
        $this->container['bandwidth_cost'] = $data['bandwidth_cost'] ?? null;
        $this->container['bandwidth_units'] = $data['bandwidth_units'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['cost_before_discount'] = $data['cost_before_discount'] ?? null;
        $this->container['discount'] = $data['discount'] ?? null;
        $this->container['extras'] = $data['extras'] ?? null;
        $this->container['extras_cost'] = $data['extras_cost'] ?? null;
        $this->container['incurred_cost'] = $data['incurred_cost'] ?? null;
        $this->container['overage'] = $data['overage'] ?? null;
        $this->container['plan_code'] = $data['plan_code'] ?? null;
        $this->container['plan_minimum'] = $data['plan_minimum'] ?? null;
        $this->container['plan_name'] = $data['plan_name'] ?? null;
        $this->container['requests'] = $data['requests'] ?? null;
        $this->container['requests_cost'] = $data['requests_cost'] ?? null;
        $this->container['terms'] = $data['terms'] ?? null;
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
     * Gets bandwidth
     *
     * @return float|null
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param float|null $bandwidth The total amount of bandwidth used this month (See bandwidth_units for measurement).
     *
     * @return self
     */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets bandwidth_cost
     *
     * @return float|null
     */
    public function getBandwidthCost()
    {
        return $this->container['bandwidth_cost'];
    }

    /**
     * Sets bandwidth_cost
     *
     * @param float|null $bandwidth_cost The cost of the bandwidth used this month in USD.
     *
     * @return self
     */
    public function setBandwidthCost($bandwidth_cost)
    {
        $this->container['bandwidth_cost'] = $bandwidth_cost;

        return $this;
    }

    /**
     * Gets bandwidth_units
     *
     * @return string|null
     */
    public function getBandwidthUnits()
    {
        return $this->container['bandwidth_units'];
    }

    /**
     * Sets bandwidth_units
     *
     * @param string|null $bandwidth_units Bandwidth measurement units based on billing plan.
     *
     * @return self
     */
    public function setBandwidthUnits($bandwidth_units)
    {
        $this->container['bandwidth_units'] = $bandwidth_units;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost The final amount to be paid.
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets cost_before_discount
     *
     * @return float|null
     */
    public function getCostBeforeDiscount()
    {
        return $this->container['cost_before_discount'];
    }

    /**
     * Sets cost_before_discount
     *
     * @param float|null $cost_before_discount Total incurred cost plus extras cost.
     *
     * @return self
     */
    public function setCostBeforeDiscount($cost_before_discount)
    {
        $this->container['cost_before_discount'] = $cost_before_discount;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount Calculated discount rate.
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets extras
     *
     * @return \Fastly\Model\BillingTotalExtras[]|null
     */
    public function getExtras()
    {
        return $this->container['extras'];
    }

    /**
     * Sets extras
     *
     * @param \Fastly\Model\BillingTotalExtras[]|null $extras A list of any extras for this invoice.
     *
     * @return self
     */
    public function setExtras($extras)
    {
        $this->container['extras'] = $extras;

        return $this;
    }

    /**
     * Gets extras_cost
     *
     * @return float|null
     */
    public function getExtrasCost()
    {
        return $this->container['extras_cost'];
    }

    /**
     * Sets extras_cost
     *
     * @param float|null $extras_cost Total cost of all extras.
     *
     * @return self
     */
    public function setExtrasCost($extras_cost)
    {
        $this->container['extras_cost'] = $extras_cost;

        return $this;
    }

    /**
     * Gets incurred_cost
     *
     * @return float|null
     */
    public function getIncurredCost()
    {
        return $this->container['incurred_cost'];
    }

    /**
     * Sets incurred_cost
     *
     * @param float|null $incurred_cost The total cost of bandwidth and requests used this month.
     *
     * @return self
     */
    public function setIncurredCost($incurred_cost)
    {
        $this->container['incurred_cost'] = $incurred_cost;

        return $this;
    }

    /**
     * Gets overage
     *
     * @return float|null
     */
    public function getOverage()
    {
        return $this->container['overage'];
    }

    /**
     * Sets overage
     *
     * @param float|null $overage How much over the plan minimum has been incurred.
     *
     * @return self
     */
    public function setOverage($overage)
    {
        $this->container['overage'] = $overage;

        return $this;
    }

    /**
     * Gets plan_code
     *
     * @return string|null
     */
    public function getPlanCode()
    {
        return $this->container['plan_code'];
    }

    /**
     * Sets plan_code
     *
     * @param string|null $plan_code The short code the plan this invoice was generated under.
     *
     * @return self
     */
    public function setPlanCode($plan_code)
    {
        $this->container['plan_code'] = $plan_code;

        return $this;
    }

    /**
     * Gets plan_minimum
     *
     * @return float|null
     */
    public function getPlanMinimum()
    {
        return $this->container['plan_minimum'];
    }

    /**
     * Sets plan_minimum
     *
     * @param float|null $plan_minimum The minimum cost of this plan.
     *
     * @return self
     */
    public function setPlanMinimum($plan_minimum)
    {
        $this->container['plan_minimum'] = $plan_minimum;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return string|null
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param string|null $plan_name The name of the plan this invoice was generated under.
     *
     * @return self
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets requests
     *
     * @return float|null
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     *
     * @param float|null $requests The total number of requests used this month.
     *
     * @return self
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

        return $this;
    }

    /**
     * Gets requests_cost
     *
     * @return float|null
     */
    public function getRequestsCost()
    {
        return $this->container['requests_cost'];
    }

    /**
     * Sets requests_cost
     *
     * @param float|null $requests_cost The cost of the requests used this month.
     *
     * @return self
     */
    public function setRequestsCost($requests_cost)
    {
        $this->container['requests_cost'] = $requests_cost;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string|null $terms Payment terms. Almost always Net15.
     *
     * @return self
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

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


