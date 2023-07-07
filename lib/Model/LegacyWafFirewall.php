<?php
/**
 * LegacyWafFirewall
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
 * LegacyWafFirewall Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LegacyWafFirewall implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'legacy_waf_firewall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'last_push' => 'string',
        'prefetch_condition' => 'string',
        'response' => 'string',
        'version' => '\Fastly\Model\ReadOnlyVersion',
        'service_id' => '\Fastly\Model\ReadOnlyServiceId',
        'disabled' => 'bool',
        'rule_statuses_log_count' => 'int',
        'rule_statuses_block_count' => 'int',
        'rule_statuses_disabled_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'last_push' => null,
        'prefetch_condition' => null,
        'response' => null,
        'version' => null,
        'service_id' => null,
        'disabled' => null,
        'rule_statuses_log_count' => null,
        'rule_statuses_block_count' => null,
        'rule_statuses_disabled_count' => null
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
        'last_push' => 'last_push',
        'prefetch_condition' => 'prefetch_condition',
        'response' => 'response',
        'version' => 'version',
        'service_id' => 'service_id',
        'disabled' => 'disabled',
        'rule_statuses_log_count' => 'rule_statuses_log_count',
        'rule_statuses_block_count' => 'rule_statuses_block_count',
        'rule_statuses_disabled_count' => 'rule_statuses_disabled_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_push' => 'setLastPush',
        'prefetch_condition' => 'setPrefetchCondition',
        'response' => 'setResponse',
        'version' => 'setVersion',
        'service_id' => 'setServiceId',
        'disabled' => 'setDisabled',
        'rule_statuses_log_count' => 'setRuleStatusesLogCount',
        'rule_statuses_block_count' => 'setRuleStatusesBlockCount',
        'rule_statuses_disabled_count' => 'setRuleStatusesDisabledCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_push' => 'getLastPush',
        'prefetch_condition' => 'getPrefetchCondition',
        'response' => 'getResponse',
        'version' => 'getVersion',
        'service_id' => 'getServiceId',
        'disabled' => 'getDisabled',
        'rule_statuses_log_count' => 'getRuleStatusesLogCount',
        'rule_statuses_block_count' => 'getRuleStatusesBlockCount',
        'rule_statuses_disabled_count' => 'getRuleStatusesDisabledCount'
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
        $this->container['last_push'] = $data['last_push'] ?? null;
        $this->container['prefetch_condition'] = $data['prefetch_condition'] ?? null;
        $this->container['response'] = $data['response'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['disabled'] = $data['disabled'] ?? false;
        $this->container['rule_statuses_log_count'] = $data['rule_statuses_log_count'] ?? null;
        $this->container['rule_statuses_block_count'] = $data['rule_statuses_block_count'] ?? null;
        $this->container['rule_statuses_disabled_count'] = $data['rule_statuses_disabled_count'] ?? null;
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
     * Gets last_push
     *
     * @return string|null
     */
    public function getLastPush()
    {
        return $this->container['last_push'];
    }

    /**
     * Sets last_push
     *
     * @param string|null $last_push Date and time that VCL was last pushed to cache nodes.
     *
     * @return self
     */
    public function setLastPush($last_push)
    {
        $this->container['last_push'] = $last_push;

        return $this;
    }

    /**
     * Gets prefetch_condition
     *
     * @return string|null
     */
    public function getPrefetchCondition()
    {
        return $this->container['prefetch_condition'];
    }

    /**
     * Sets prefetch_condition
     *
     * @param string|null $prefetch_condition Name of the corresponding condition object.
     *
     * @return self
     */
    public function setPrefetchCondition($prefetch_condition)
    {
        $this->container['prefetch_condition'] = $prefetch_condition;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string|null $response Name of the corresponding response object.
     *
     * @return self
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \Fastly\Model\ReadOnlyVersion|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Fastly\Model\ReadOnlyVersion|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return \Fastly\Model\ReadOnlyServiceId|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param \Fastly\Model\ReadOnlyServiceId|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool|null $disabled The status of the firewall.
     *
     * @return self
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets rule_statuses_log_count
     *
     * @return int|null
     */
    public function getRuleStatusesLogCount()
    {
        return $this->container['rule_statuses_log_count'];
    }

    /**
     * Sets rule_statuses_log_count
     *
     * @param int|null $rule_statuses_log_count The number of rule statuses set to log.
     *
     * @return self
     */
    public function setRuleStatusesLogCount($rule_statuses_log_count)
    {
        $this->container['rule_statuses_log_count'] = $rule_statuses_log_count;

        return $this;
    }

    /**
     * Gets rule_statuses_block_count
     *
     * @return int|null
     */
    public function getRuleStatusesBlockCount()
    {
        return $this->container['rule_statuses_block_count'];
    }

    /**
     * Sets rule_statuses_block_count
     *
     * @param int|null $rule_statuses_block_count The number of rule statuses set to block.
     *
     * @return self
     */
    public function setRuleStatusesBlockCount($rule_statuses_block_count)
    {
        $this->container['rule_statuses_block_count'] = $rule_statuses_block_count;

        return $this;
    }

    /**
     * Gets rule_statuses_disabled_count
     *
     * @return int|null
     */
    public function getRuleStatusesDisabledCount()
    {
        return $this->container['rule_statuses_disabled_count'];
    }

    /**
     * Sets rule_statuses_disabled_count
     *
     * @param int|null $rule_statuses_disabled_count The number of rule statuses set to disabled.
     *
     * @return self
     */
    public function setRuleStatusesDisabledCount($rule_statuses_disabled_count)
    {
        $this->container['rule_statuses_disabled_count'] = $rule_statuses_disabled_count;

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


