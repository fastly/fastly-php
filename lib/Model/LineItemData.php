<?php
/**
 * LineItemData
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
 * LineItemData Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LineItemData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'line_item_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'amount' => 'float',
        'aria_invoice_id' => 'string',
        'client_service_id' => 'string',
        'credit_coupon_code' => 'string',
        'description' => 'string',
        'id' => 'string',
        'line_number' => 'int',
        'plan_name' => 'string',
        'plan_no' => 'float',
        'rate_per_unit' => 'float',
        'rate_schedule_no' => 'float',
        'rate_schedule_tier_no' => 'float',
        'service_name' => 'string',
        'service_no' => 'float',
        'units' => 'float',
        'usage_type_cd' => 'string',
        'usage_type_no' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'amount' => null,
        'aria_invoice_id' => null,
        'client_service_id' => null,
        'credit_coupon_code' => null,
        'description' => null,
        'id' => null,
        'line_number' => null,
        'plan_name' => null,
        'plan_no' => null,
        'rate_per_unit' => null,
        'rate_schedule_no' => null,
        'rate_schedule_tier_no' => null,
        'service_name' => null,
        'service_no' => null,
        'units' => null,
        'usage_type_cd' => null,
        'usage_type_no' => null
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
        'amount' => 'amount',
        'aria_invoice_id' => 'aria_invoice_id',
        'client_service_id' => 'client_service_id',
        'credit_coupon_code' => 'credit_coupon_code',
        'description' => 'description',
        'id' => 'id',
        'line_number' => 'line_number',
        'plan_name' => 'plan_name',
        'plan_no' => 'plan_no',
        'rate_per_unit' => 'rate_per_unit',
        'rate_schedule_no' => 'rate_schedule_no',
        'rate_schedule_tier_no' => 'rate_schedule_tier_no',
        'service_name' => 'service_name',
        'service_no' => 'service_no',
        'units' => 'units',
        'usage_type_cd' => 'usage_type_cd',
        'usage_type_no' => 'usage_type_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'aria_invoice_id' => 'setAriaInvoiceId',
        'client_service_id' => 'setClientServiceId',
        'credit_coupon_code' => 'setCreditCouponCode',
        'description' => 'setDescription',
        'id' => 'setId',
        'line_number' => 'setLineNumber',
        'plan_name' => 'setPlanName',
        'plan_no' => 'setPlanNo',
        'rate_per_unit' => 'setRatePerUnit',
        'rate_schedule_no' => 'setRateScheduleNo',
        'rate_schedule_tier_no' => 'setRateScheduleTierNo',
        'service_name' => 'setServiceName',
        'service_no' => 'setServiceNo',
        'units' => 'setUnits',
        'usage_type_cd' => 'setUsageTypeCd',
        'usage_type_no' => 'setUsageTypeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'aria_invoice_id' => 'getAriaInvoiceId',
        'client_service_id' => 'getClientServiceId',
        'credit_coupon_code' => 'getCreditCouponCode',
        'description' => 'getDescription',
        'id' => 'getId',
        'line_number' => 'getLineNumber',
        'plan_name' => 'getPlanName',
        'plan_no' => 'getPlanNo',
        'rate_per_unit' => 'getRatePerUnit',
        'rate_schedule_no' => 'getRateScheduleNo',
        'rate_schedule_tier_no' => 'getRateScheduleTierNo',
        'service_name' => 'getServiceName',
        'service_no' => 'getServiceNo',
        'units' => 'getUnits',
        'usage_type_cd' => 'getUsageTypeCd',
        'usage_type_no' => 'getUsageTypeNo'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['aria_invoice_id'] = $data['aria_invoice_id'] ?? null;
        $this->container['client_service_id'] = $data['client_service_id'] ?? null;
        $this->container['credit_coupon_code'] = $data['credit_coupon_code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['line_number'] = $data['line_number'] ?? null;
        $this->container['plan_name'] = $data['plan_name'] ?? null;
        $this->container['plan_no'] = $data['plan_no'] ?? null;
        $this->container['rate_per_unit'] = $data['rate_per_unit'] ?? null;
        $this->container['rate_schedule_no'] = $data['rate_schedule_no'] ?? null;
        $this->container['rate_schedule_tier_no'] = $data['rate_schedule_tier_no'] ?? null;
        $this->container['service_name'] = $data['service_name'] ?? null;
        $this->container['service_no'] = $data['service_no'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['usage_type_cd'] = $data['usage_type_cd'] ?? null;
        $this->container['usage_type_no'] = $data['usage_type_no'] ?? null;
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
     * Gets aria_invoice_id
     *
     * @return string|null
     */
    public function getAriaInvoiceId()
    {
        return $this->container['aria_invoice_id'];
    }

    /**
     * Sets aria_invoice_id
     *
     * @param string|null $aria_invoice_id An alphanumeric string identifying the invoice.
     *
     * @return self
     */
    public function setAriaInvoiceId($aria_invoice_id)
    {
        $this->container['aria_invoice_id'] = $aria_invoice_id;

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
     * @param string|null $credit_coupon_code credit_coupon_code
     *
     * @return self
     */
    public function setCreditCouponCode($credit_coupon_code)
    {
        $this->container['credit_coupon_code'] = $credit_coupon_code;

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
     * Gets line_number
     *
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int|null $line_number line_number
     *
     * @return self
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

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
     * @param string|null $plan_name plan_name
     *
     * @return self
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_no
     *
     * @return float|null
     */
    public function getPlanNo()
    {
        return $this->container['plan_no'];
    }

    /**
     * Sets plan_no
     *
     * @param float|null $plan_no plan_no
     *
     * @return self
     */
    public function setPlanNo($plan_no)
    {
        $this->container['plan_no'] = $plan_no;

        return $this;
    }

    /**
     * Gets rate_per_unit
     *
     * @return float|null
     */
    public function getRatePerUnit()
    {
        return $this->container['rate_per_unit'];
    }

    /**
     * Sets rate_per_unit
     *
     * @param float|null $rate_per_unit rate_per_unit
     *
     * @return self
     */
    public function setRatePerUnit($rate_per_unit)
    {
        $this->container['rate_per_unit'] = $rate_per_unit;

        return $this;
    }

    /**
     * Gets rate_schedule_no
     *
     * @return float|null
     */
    public function getRateScheduleNo()
    {
        return $this->container['rate_schedule_no'];
    }

    /**
     * Sets rate_schedule_no
     *
     * @param float|null $rate_schedule_no rate_schedule_no
     *
     * @return self
     */
    public function setRateScheduleNo($rate_schedule_no)
    {
        $this->container['rate_schedule_no'] = $rate_schedule_no;

        return $this;
    }

    /**
     * Gets rate_schedule_tier_no
     *
     * @return float|null
     */
    public function getRateScheduleTierNo()
    {
        return $this->container['rate_schedule_tier_no'];
    }

    /**
     * Sets rate_schedule_tier_no
     *
     * @param float|null $rate_schedule_tier_no rate_schedule_tier_no
     *
     * @return self
     */
    public function setRateScheduleTierNo($rate_schedule_tier_no)
    {
        $this->container['rate_schedule_tier_no'] = $rate_schedule_tier_no;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string|null $service_name service_name
     *
     * @return self
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

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
     * Gets usage_type_cd
     *
     * @return string|null
     */
    public function getUsageTypeCd()
    {
        return $this->container['usage_type_cd'];
    }

    /**
     * Sets usage_type_cd
     *
     * @param string|null $usage_type_cd usage_type_cd
     *
     * @return self
     */
    public function setUsageTypeCd($usage_type_cd)
    {
        $this->container['usage_type_cd'] = $usage_type_cd;

        return $this;
    }

    /**
     * Gets usage_type_no
     *
     * @return float|null
     */
    public function getUsageTypeNo()
    {
        return $this->container['usage_type_no'];
    }

    /**
     * Sets usage_type_no
     *
     * @param float|null $usage_type_no usage_type_no
     *
     * @return self
     */
    public function setUsageTypeNo($usage_type_no)
    {
        $this->container['usage_type_no'] = $usage_type_no;

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


