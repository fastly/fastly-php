<?php
/**
 * WafExclusionResponseDataAttributesAllOf
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
 * WafExclusionResponseDataAttributesAllOf Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WafExclusionResponseDataAttributesAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'waf_exclusion_response_data_attributes_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'condition' => 'string',
        'exclusion_type' => 'string',
        'logging' => 'bool',
        'name' => 'string',
        'number' => 'int',
        'variable' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'condition' => null,
        'exclusion_type' => null,
        'logging' => null,
        'name' => null,
        'number' => null,
        'variable' => null
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
        'condition' => 'condition',
        'exclusion_type' => 'exclusion_type',
        'logging' => 'logging',
        'name' => 'name',
        'number' => 'number',
        'variable' => 'variable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
        'exclusion_type' => 'setExclusionType',
        'logging' => 'setLogging',
        'name' => 'setName',
        'number' => 'setNumber',
        'variable' => 'setVariable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
        'exclusion_type' => 'getExclusionType',
        'logging' => 'getLogging',
        'name' => 'getName',
        'number' => 'getNumber',
        'variable' => 'getVariable'
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

    const EXCLUSION_TYPE_RULE = 'rule';
    const EXCLUSION_TYPE_VARIABLE = 'variable';
    const EXCLUSION_TYPE_WAF = 'waf';
    const VARIABLE_REQ_COOKIES = 'req.cookies';
    const VARIABLE_REQ_HEADERS = 'req.headers';
    const VARIABLE_REQ_POST = 'req.post';
    const VARIABLE_REQ_POST_FILENAME = 'req.post_filename';
    const VARIABLE_REQ_QS = 'req.qs';
    const VARIABLE_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExclusionTypeAllowableValues()
    {
        return [
            self::EXCLUSION_TYPE_RULE,
            self::EXCLUSION_TYPE_VARIABLE,
            self::EXCLUSION_TYPE_WAF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVariableAllowableValues()
    {
        return [
            self::VARIABLE_REQ_COOKIES,
            self::VARIABLE_REQ_HEADERS,
            self::VARIABLE_REQ_POST,
            self::VARIABLE_REQ_POST_FILENAME,
            self::VARIABLE_REQ_QS,
            self::VARIABLE_NULL,
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
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['exclusion_type'] = $data['exclusion_type'] ?? null;
        $this->container['logging'] = $data['logging'] ?? true;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['variable'] = $data['variable'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getExclusionTypeAllowableValues();
        if (!is_null($this->container['exclusion_type']) && !in_array($this->container['exclusion_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'exclusion_type', must be one of '%s'",
                $this->container['exclusion_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVariableAllowableValues();
        if (!is_null($this->container['variable']) && !in_array($this->container['variable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'variable', must be one of '%s'",
                $this->container['variable'],
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
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition A conditional expression in VCL used to determine if the condition is met.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets exclusion_type
     *
     * @return string|null
     */
    public function getExclusionType()
    {
        return $this->container['exclusion_type'];
    }

    /**
     * Sets exclusion_type
     *
     * @param string|null $exclusion_type The type of exclusion.
     *
     * @return self
     */
    public function setExclusionType($exclusion_type)
    {
        $allowedValues = $this->getExclusionTypeAllowableValues();
        if (!is_null($exclusion_type) && !in_array($exclusion_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'exclusion_type', must be one of '%s'",
                    $exclusion_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exclusion_type'] = $exclusion_type;

        return $this;
    }

    /**
     * Gets logging
     *
     * @return bool|null
     */
    public function getLogging()
    {
        return $this->container['logging'];
    }

    /**
     * Sets logging
     *
     * @param bool|null $logging Whether to generate a log upon matching.
     *
     * @return self
     */
    public function setLogging($logging)
    {
        $this->container['logging'] = $logging;

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
     * @param string|null $name Name of the exclusion.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number A numeric ID identifying a WAF exclusion.
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets variable
     *
     * @return string|null
     */
    public function getVariable()
    {
        return $this->container['variable'];
    }

    /**
     * Sets variable
     *
     * @param string|null $variable The variable to exclude. An optional selector can be specified after the variable separated by a colon (`:`) to restrict the variable to a particular parameter. Required for `exclusion_type=variable`.
     *
     * @return self
     */
    public function setVariable($variable)
    {
        $allowedValues = $this->getVariableAllowableValues();
        if (!is_null($variable) && !in_array($variable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'variable', must be one of '%s'",
                    $variable,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['variable'] = $variable;

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


