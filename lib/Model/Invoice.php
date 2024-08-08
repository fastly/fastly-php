<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Invoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'customer_id' => 'string',
        'invoice_id' => 'string',
        'invoice_posted_on' => '\DateTime',
        'billing_start_date' => '\DateTime',
        'billing_end_date' => '\DateTime',
        'statement_number' => 'string',
        'currency_code' => 'string',
        'monthly_transaction_amount' => 'float',
        'transaction_line_items' => '\Fastly\Model\Invoicelineitems[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'customer_id' => null,
        'invoice_id' => null,
        'invoice_posted_on' => 'date-time',
        'billing_start_date' => 'date-time',
        'billing_end_date' => 'date-time',
        'statement_number' => null,
        'currency_code' => null,
        'monthly_transaction_amount' => null,
        'transaction_line_items' => null
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
        'customer_id' => 'customer_id',
        'invoice_id' => 'invoice_id',
        'invoice_posted_on' => 'invoice_posted_on',
        'billing_start_date' => 'billing_start_date',
        'billing_end_date' => 'billing_end_date',
        'statement_number' => 'statement_number',
        'currency_code' => 'currency_code',
        'monthly_transaction_amount' => 'monthly_transaction_amount',
        'transaction_line_items' => 'transaction_line_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'invoice_id' => 'setInvoiceId',
        'invoice_posted_on' => 'setInvoicePostedOn',
        'billing_start_date' => 'setBillingStartDate',
        'billing_end_date' => 'setBillingEndDate',
        'statement_number' => 'setStatementNumber',
        'currency_code' => 'setCurrencyCode',
        'monthly_transaction_amount' => 'setMonthlyTransactionAmount',
        'transaction_line_items' => 'setTransactionLineItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'invoice_id' => 'getInvoiceId',
        'invoice_posted_on' => 'getInvoicePostedOn',
        'billing_start_date' => 'getBillingStartDate',
        'billing_end_date' => 'getBillingEndDate',
        'statement_number' => 'getStatementNumber',
        'currency_code' => 'getCurrencyCode',
        'monthly_transaction_amount' => 'getMonthlyTransactionAmount',
        'transaction_line_items' => 'getTransactionLineItems'
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
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['invoice_id'] = $data['invoice_id'] ?? null;
        $this->container['invoice_posted_on'] = $data['invoice_posted_on'] ?? null;
        $this->container['billing_start_date'] = $data['billing_start_date'] ?? null;
        $this->container['billing_end_date'] = $data['billing_end_date'] ?? null;
        $this->container['statement_number'] = $data['statement_number'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['monthly_transaction_amount'] = $data['monthly_transaction_amount'] ?? null;
        $this->container['transaction_line_items'] = $data['transaction_line_items'] ?? null;
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
     * @param string|null $customer_id Customer ID associated with the invoice.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets invoice_id
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string|null $invoice_id Numeric string identifying the invoice.
     *
     * @return self
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets invoice_posted_on
     *
     * @return \DateTime|null
     */
    public function getInvoicePostedOn()
    {
        return $this->container['invoice_posted_on'];
    }

    /**
     * Sets invoice_posted_on
     *
     * @param \DateTime|null $invoice_posted_on Date and time invoice was posted on, in ISO 8601 format.
     *
     * @return self
     */
    public function setInvoicePostedOn($invoice_posted_on)
    {
        $this->container['invoice_posted_on'] = $invoice_posted_on;

        return $this;
    }

    /**
     * Gets billing_start_date
     *
     * @return \DateTime|null
     */
    public function getBillingStartDate()
    {
        return $this->container['billing_start_date'];
    }

    /**
     * Sets billing_start_date
     *
     * @param \DateTime|null $billing_start_date Date and time (in ISO 8601 format) for initiation point of a billing cycle, signifying the start of charges for a service or subscription.
     *
     * @return self
     */
    public function setBillingStartDate($billing_start_date)
    {
        $this->container['billing_start_date'] = $billing_start_date;

        return $this;
    }

    /**
     * Gets billing_end_date
     *
     * @return \DateTime|null
     */
    public function getBillingEndDate()
    {
        return $this->container['billing_end_date'];
    }

    /**
     * Sets billing_end_date
     *
     * @param \DateTime|null $billing_end_date Date and time (in ISO 8601 format) for termination point of a billing cycle, signifying the end of charges for a service or subscription.
     *
     * @return self
     */
    public function setBillingEndDate($billing_end_date)
    {
        $this->container['billing_end_date'] = $billing_end_date;

        return $this;
    }

    /**
     * Gets statement_number
     *
     * @return string|null
     */
    public function getStatementNumber()
    {
        return $this->container['statement_number'];
    }

    /**
     * Sets statement_number
     *
     * @param string|null $statement_number Alphanumeric string identifying the statement number.
     *
     * @return self
     */
    public function setStatementNumber($statement_number)
    {
        $this->container['statement_number'] = $statement_number;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Three-letter code representing a specific currency used for financial transactions.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets monthly_transaction_amount
     *
     * @return float|null
     */
    public function getMonthlyTransactionAmount()
    {
        return $this->container['monthly_transaction_amount'];
    }

    /**
     * Sets monthly_transaction_amount
     *
     * @param float|null $monthly_transaction_amount Total billable amount for invoiced services charged within a single month.
     *
     * @return self
     */
    public function setMonthlyTransactionAmount($monthly_transaction_amount)
    {
        $this->container['monthly_transaction_amount'] = $monthly_transaction_amount;

        return $this;
    }

    /**
     * Gets transaction_line_items
     *
     * @return \Fastly\Model\Invoicelineitems[]|null
     */
    public function getTransactionLineItems()
    {
        return $this->container['transaction_line_items'];
    }

    /**
     * Sets transaction_line_items
     *
     * @param \Fastly\Model\Invoicelineitems[]|null $transaction_line_items transaction_line_items
     *
     * @return self
     */
    public function setTransactionLineItems($transaction_line_items)
    {
        $this->container['transaction_line_items'] = $transaction_line_items;

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


