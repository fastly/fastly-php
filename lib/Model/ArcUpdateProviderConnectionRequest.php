<?php
/**
 * ArcUpdateProviderConnectionRequest
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
 * ArcUpdateProviderConnectionRequest Class Doc Comment
 *
 * @category Class
 * @description A partial update to a provider connection. Only the fields you include are changed. &#x60;models&#x60;, &#x60;base_url&#x60;, and &#x60;api_key&#x60; apply to &#x60;api-key&#x60; connections; &#x60;customer_role_arn&#x60; and &#x60;region&#x60; apply to &#x60;aws-iam&#x60; connections.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcUpdateProviderConnectionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_update_provider_connection_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'models' => 'string[]',
        'base_url' => 'string',
        'api_key' => 'string',
        'customer_role_arn' => 'string',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'models' => null,
        'base_url' => 'uri',
        'api_key' => null,
        'customer_role_arn' => null,
        'region' => null
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
        'models' => 'models',
        'base_url' => 'base_url',
        'api_key' => 'api_key',
        'customer_role_arn' => 'customer_role_arn',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'models' => 'setModels',
        'base_url' => 'setBaseUrl',
        'api_key' => 'setApiKey',
        'customer_role_arn' => 'setCustomerRoleArn',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'models' => 'getModels',
        'base_url' => 'getBaseUrl',
        'api_key' => 'getApiKey',
        'customer_role_arn' => 'getCustomerRoleArn',
        'region' => 'getRegion'
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
    public function __construct(?array $data = null)
    {
        $this->container['models'] = $data['models'] ?? null;
        $this->container['base_url'] = $data['base_url'] ?? null;
        $this->container['api_key'] = $data['api_key'] ?? null;
        $this->container['customer_role_arn'] = $data['customer_role_arn'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['models']) && (count($this->container['models']) < 1)) {
            $invalidProperties[] = "invalid value for 'models', number of items must be greater than or equal to 1.";
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
     * Gets models
     *
     * @return string[]|null
     */
    public function getModels()
    {
        return $this->container['models'];
    }

    /**
     * Sets models
     *
     * @param string[]|null $models The AI model identifiers this connection is allowed to use. Must be non-empty if included.
     *
     * @return self
     */
    public function setModels($models)
    {


        if (!is_null($models) && (count($models) < 1)) {
            throw new \InvalidArgumentException('invalid length for $models when calling ArcUpdateProviderConnectionRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['models'] = $models;

        return $this;
    }

    /**
     * Gets base_url
     *
     * @return string|null
     */
    public function getBaseUrl()
    {
        return $this->container['base_url'];
    }

    /**
     * Sets base_url
     *
     * @param string|null $base_url The base URL of the provider's API (`api-key` connections only).
     *
     * @return self
     */
    public function setBaseUrl($base_url)
    {
        $this->container['base_url'] = $base_url;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string|null $api_key The provider's secret API key (`api-key` connections only).
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets customer_role_arn
     *
     * @return string|null
     */
    public function getCustomerRoleArn()
    {
        return $this->container['customer_role_arn'];
    }

    /**
     * Sets customer_role_arn
     *
     * @param string|null $customer_role_arn The ARN of the IAM role to assume for Bedrock requests (`aws-iam` connections only).
     *
     * @return self
     */
    public function setCustomerRoleArn($customer_role_arn)
    {
        $this->container['customer_role_arn'] = $customer_role_arn;

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
     * @param string|null $region The AWS region for Bedrock API requests (`aws-iam` connections only).
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

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


