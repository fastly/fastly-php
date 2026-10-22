<?php
/**
 * ArcProviderConnectionApiKey
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
 * ArcProviderConnectionApiKey Class Doc Comment
 *
 * @category Class
 * @description A provider connection authenticated with the provider&#39;s own API key.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcProviderConnectionApiKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_provider_connection_api_key';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'models' => 'string[]',
        'base_url' => 'string',
        'api_key' => 'string',
        'auth_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'name' => null,
        'models' => null,
        'base_url' => 'uri',
        'api_key' => null,
        'auth_type' => null
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
        'name' => 'name',
        'models' => 'models',
        'base_url' => 'base_url',
        'api_key' => 'api_key',
        'auth_type' => 'auth_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'models' => 'setModels',
        'base_url' => 'setBaseUrl',
        'api_key' => 'setApiKey',
        'auth_type' => 'setAuthType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'models' => 'getModels',
        'base_url' => 'getBaseUrl',
        'api_key' => 'getApiKey',
        'auth_type' => 'getAuthType'
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

    const AUTH_TYPE_API_KEY = 'api-key';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_API_KEY,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['models'] = $data['models'] ?? null;
        $this->container['base_url'] = $data['base_url'] ?? null;
        $this->container['api_key'] = $data['api_key'] ?? null;
        $this->container['auth_type'] = $data['auth_type'] ?? 'api-key';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['models'] === null) {
            $invalidProperties[] = "'models' can't be null";
        }
        if ((count($this->container['models']) < 1)) {
            $invalidProperties[] = "invalid value for 'models', number of items must be greater than or equal to 1.";
        }

        if ($this->container['base_url'] === null) {
            $invalidProperties[] = "'base_url' can't be null";
        }
        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['auth_type']) && !in_array($this->container['auth_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_type', must be one of '%s'",
                $this->container['auth_type'],
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A display name for the provider connection. Cannot match a name reserved by a built-in provider.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets models
     *
     * @return string[]
     */
    public function getModels()
    {
        return $this->container['models'];
    }

    /**
     * Sets models
     *
     * @param string[] $models The AI model identifiers this connection is allowed to use.
     *
     * @return self
     */
    public function setModels($models)
    {


        if ((count($models) < 1)) {
            throw new \InvalidArgumentException('invalid length for $models when calling ArcProviderConnectionApiKey., number of items must be greater than or equal to 1.');
        }
        $this->container['models'] = $models;

        return $this;
    }

    /**
     * Gets base_url
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->container['base_url'];
    }

    /**
     * Sets base_url
     *
     * @param string $base_url The base URL of the provider's API. Must be an absolute `http` or `https` URL and must not end in `/v1`.
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
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key The provider's secret API key.
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type The authentication type for this connection. Omit for the default `api-key` behavior.
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($auth_type) && !in_array($auth_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_type', must be one of '%s'",
                    $auth_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

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


