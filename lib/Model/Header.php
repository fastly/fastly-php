<?php
/**
 * Header
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
 * Header Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Header implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'header';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'action' => 'string',
        'cache_condition' => 'string',
        'dst' => 'string',
        'name' => 'string',
        'regex' => 'string',
        'request_condition' => 'string',
        'response_condition' => 'string',
        'src' => 'string',
        'substitution' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'action' => null,
        'cache_condition' => null,
        'dst' => null,
        'name' => null,
        'regex' => null,
        'request_condition' => null,
        'response_condition' => null,
        'src' => null,
        'substitution' => null,
        'type' => null
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
        'action' => 'action',
        'cache_condition' => 'cache_condition',
        'dst' => 'dst',
        'name' => 'name',
        'regex' => 'regex',
        'request_condition' => 'request_condition',
        'response_condition' => 'response_condition',
        'src' => 'src',
        'substitution' => 'substitution',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'cache_condition' => 'setCacheCondition',
        'dst' => 'setDst',
        'name' => 'setName',
        'regex' => 'setRegex',
        'request_condition' => 'setRequestCondition',
        'response_condition' => 'setResponseCondition',
        'src' => 'setSrc',
        'substitution' => 'setSubstitution',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'cache_condition' => 'getCacheCondition',
        'dst' => 'getDst',
        'name' => 'getName',
        'regex' => 'getRegex',
        'request_condition' => 'getRequestCondition',
        'response_condition' => 'getResponseCondition',
        'src' => 'getSrc',
        'substitution' => 'getSubstitution',
        'type' => 'getType'
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

    const ACTION_SET = 'set';
    const ACTION_APPEND = 'append';
    const ACTION_DELETE = 'delete';
    const ACTION_REGEX = 'regex';
    const ACTION_REGEX_REPEAT = 'regex_repeat';
    const TYPE_REQUEST = 'request';
    const TYPE_CACHE = 'cache';
    const TYPE_RESPONSE = 'response';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_SET,
            self::ACTION_APPEND,
            self::ACTION_DELETE,
            self::ACTION_REGEX,
            self::ACTION_REGEX_REPEAT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_REQUEST,
            self::TYPE_CACHE,
            self::TYPE_RESPONSE,
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
        $this->container['action'] = $data['action'] ?? null;
        $this->container['cache_condition'] = $data['cache_condition'] ?? null;
        $this->container['dst'] = $data['dst'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['regex'] = $data['regex'] ?? null;
        $this->container['request_condition'] = $data['request_condition'] ?? null;
        $this->container['response_condition'] = $data['response_condition'] ?? null;
        $this->container['src'] = $data['src'] ?? null;
        $this->container['substitution'] = $data['substitution'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Accepts a string value.
     *
     * @return self
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets cache_condition
     *
     * @return string|null
     */
    public function getCacheCondition()
    {
        return $this->container['cache_condition'];
    }

    /**
     * Sets cache_condition
     *
     * @param string|null $cache_condition Name of the cache condition controlling when this configuration applies.
     *
     * @return self
     */
    public function setCacheCondition($cache_condition)
    {
        $this->container['cache_condition'] = $cache_condition;

        return $this;
    }

    /**
     * Gets dst
     *
     * @return string|null
     */
    public function getDst()
    {
        return $this->container['dst'];
    }

    /**
     * Sets dst
     *
     * @param string|null $dst Header to set.
     *
     * @return self
     */
    public function setDst($dst)
    {
        $this->container['dst'] = $dst;

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
     * @param string|null $name A handle to refer to this Header object.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets regex
     *
     * @return string|null
     */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
     * Sets regex
     *
     * @param string|null $regex Regular expression to use. Only applies to `regex` and `regex_repeat` actions.
     *
     * @return self
     */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;

        return $this;
    }

    /**
     * Gets request_condition
     *
     * @return string|null
     */
    public function getRequestCondition()
    {
        return $this->container['request_condition'];
    }

    /**
     * Sets request_condition
     *
     * @param string|null $request_condition Condition which, if met, will select this configuration during a request. Optional.
     *
     * @return self
     */
    public function setRequestCondition($request_condition)
    {
        $this->container['request_condition'] = $request_condition;

        return $this;
    }

    /**
     * Gets response_condition
     *
     * @return string|null
     */
    public function getResponseCondition()
    {
        return $this->container['response_condition'];
    }

    /**
     * Sets response_condition
     *
     * @param string|null $response_condition Optional name of a response condition to apply.
     *
     * @return self
     */
    public function setResponseCondition($response_condition)
    {
        $this->container['response_condition'] = $response_condition;

        return $this;
    }

    /**
     * Gets src
     *
     * @return string|null
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     *
     * @param string|null $src Variable to be used as a source for the header content. Does not apply to `delete` action.
     *
     * @return self
     */
    public function setSrc($src)
    {
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets substitution
     *
     * @return string|null
     */
    public function getSubstitution()
    {
        return $this->container['substitution'];
    }

    /**
     * Sets substitution
     *
     * @param string|null $substitution Value to substitute in place of regular expression. Only applies to `regex` and `regex_repeat` actions.
     *
     * @return self
     */
    public function setSubstitution($substitution)
    {
        $this->container['substitution'] = $substitution;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Accepts a string value.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


