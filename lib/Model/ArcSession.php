<?php
/**
 * ArcSession
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
 * ArcSession Class Doc Comment
 *
 * @category Class
 * @description A session log. Other than &#x60;firewall_enabled&#x60; (always present), &#x60;firewall_*&#x60; fields are only present when AI Firewall ran on a request in this session. They&#39;re absent (not merely empty) otherwise, so their absence and an empty value mean different things.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArcSession implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'arc_session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'id' => 'string',
        'virtual_key_id' => 'string',
        'model' => 'string',
        'provider' => 'string',
        'provider_connection_id' => 'string',
        'requests' => 'int',
        'input_tokens' => 'int',
        'output_tokens' => 'int',
        'violations' => 'int',
        'firewall_enabled' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'logs' => '\Fastly\Model\ArcSessionLogEntry[]',
        'virtual_key_name' => 'string',
        'primary_provider' => 'string',
        'firewall_outcome' => 'string',
        'firewall_stage' => 'string',
        'firewall_policy' => 'string',
        'firewall_incomplete_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'id' => null,
        'virtual_key_id' => null,
        'model' => null,
        'provider' => null,
        'provider_connection_id' => null,
        'requests' => null,
        'input_tokens' => null,
        'output_tokens' => null,
        'violations' => null,
        'firewall_enabled' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'logs' => null,
        'virtual_key_name' => null,
        'primary_provider' => null,
        'firewall_outcome' => null,
        'firewall_stage' => null,
        'firewall_policy' => null,
        'firewall_incomplete_reason' => null
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
        'id' => 'id',
        'virtual_key_id' => 'virtual_key_id',
        'model' => 'model',
        'provider' => 'provider',
        'provider_connection_id' => 'provider_connection_id',
        'requests' => 'requests',
        'input_tokens' => 'input_tokens',
        'output_tokens' => 'output_tokens',
        'violations' => 'violations',
        'firewall_enabled' => 'firewall_enabled',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'logs' => 'logs',
        'virtual_key_name' => 'virtual_key_name',
        'primary_provider' => 'primary_provider',
        'firewall_outcome' => 'firewall_outcome',
        'firewall_stage' => 'firewall_stage',
        'firewall_policy' => 'firewall_policy',
        'firewall_incomplete_reason' => 'firewall_incomplete_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'virtual_key_id' => 'setVirtualKeyId',
        'model' => 'setModel',
        'provider' => 'setProvider',
        'provider_connection_id' => 'setProviderConnectionId',
        'requests' => 'setRequests',
        'input_tokens' => 'setInputTokens',
        'output_tokens' => 'setOutputTokens',
        'violations' => 'setViolations',
        'firewall_enabled' => 'setFirewallEnabled',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'logs' => 'setLogs',
        'virtual_key_name' => 'setVirtualKeyName',
        'primary_provider' => 'setPrimaryProvider',
        'firewall_outcome' => 'setFirewallOutcome',
        'firewall_stage' => 'setFirewallStage',
        'firewall_policy' => 'setFirewallPolicy',
        'firewall_incomplete_reason' => 'setFirewallIncompleteReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'virtual_key_id' => 'getVirtualKeyId',
        'model' => 'getModel',
        'provider' => 'getProvider',
        'provider_connection_id' => 'getProviderConnectionId',
        'requests' => 'getRequests',
        'input_tokens' => 'getInputTokens',
        'output_tokens' => 'getOutputTokens',
        'violations' => 'getViolations',
        'firewall_enabled' => 'getFirewallEnabled',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'logs' => 'getLogs',
        'virtual_key_name' => 'getVirtualKeyName',
        'primary_provider' => 'getPrimaryProvider',
        'firewall_outcome' => 'getFirewallOutcome',
        'firewall_stage' => 'getFirewallStage',
        'firewall_policy' => 'getFirewallPolicy',
        'firewall_incomplete_reason' => 'getFirewallIncompleteReason'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['virtual_key_id'] = $data['virtual_key_id'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['provider_connection_id'] = $data['provider_connection_id'] ?? null;
        $this->container['requests'] = $data['requests'] ?? null;
        $this->container['input_tokens'] = $data['input_tokens'] ?? null;
        $this->container['output_tokens'] = $data['output_tokens'] ?? null;
        $this->container['violations'] = $data['violations'] ?? null;
        $this->container['firewall_enabled'] = $data['firewall_enabled'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['logs'] = $data['logs'] ?? null;
        $this->container['virtual_key_name'] = $data['virtual_key_name'] ?? null;
        $this->container['primary_provider'] = $data['primary_provider'] ?? null;
        $this->container['firewall_outcome'] = $data['firewall_outcome'] ?? null;
        $this->container['firewall_stage'] = $data['firewall_stage'] ?? null;
        $this->container['firewall_policy'] = $data['firewall_policy'] ?? null;
        $this->container['firewall_incomplete_reason'] = $data['firewall_incomplete_reason'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['virtual_key_id'] === null) {
            $invalidProperties[] = "'virtual_key_id' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['provider_connection_id'] === null) {
            $invalidProperties[] = "'provider_connection_id' can't be null";
        }
        if ($this->container['requests'] === null) {
            $invalidProperties[] = "'requests' can't be null";
        }
        if ($this->container['input_tokens'] === null) {
            $invalidProperties[] = "'input_tokens' can't be null";
        }
        if ($this->container['output_tokens'] === null) {
            $invalidProperties[] = "'output_tokens' can't be null";
        }
        if ($this->container['violations'] === null) {
            $invalidProperties[] = "'violations' can't be null";
        }
        if ($this->container['firewall_enabled'] === null) {
            $invalidProperties[] = "'firewall_enabled' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['logs'] === null) {
            $invalidProperties[] = "'logs' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier of the session.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets virtual_key_id
     *
     * @return string
     */
    public function getVirtualKeyId()
    {
        return $this->container['virtual_key_id'];
    }

    /**
     * Sets virtual_key_id
     *
     * @param string $virtual_key_id The ID of the virtual key used for this session.
     *
     * @return self
     */
    public function setVirtualKeyId($virtual_key_id)
    {
        $this->container['virtual_key_id'] = $virtual_key_id;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model The AI model identifier used.
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider The name of the provider connection that ultimately served the session.
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets provider_connection_id
     *
     * @return string
     */
    public function getProviderConnectionId()
    {
        return $this->container['provider_connection_id'];
    }

    /**
     * Sets provider_connection_id
     *
     * @param string $provider_connection_id The ID of the provider connection that ultimately served the session.
     *
     * @return self
     */
    public function setProviderConnectionId($provider_connection_id)
    {
        $this->container['provider_connection_id'] = $provider_connection_id;

        return $this;
    }

    /**
     * Gets requests
     *
     * @return int
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     *
     * @param int $requests The number of requests made in this session.
     *
     * @return self
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

        return $this;
    }

    /**
     * Gets input_tokens
     *
     * @return int
     */
    public function getInputTokens()
    {
        return $this->container['input_tokens'];
    }

    /**
     * Sets input_tokens
     *
     * @param int $input_tokens The total input tokens consumed in this session.
     *
     * @return self
     */
    public function setInputTokens($input_tokens)
    {
        $this->container['input_tokens'] = $input_tokens;

        return $this;
    }

    /**
     * Gets output_tokens
     *
     * @return int
     */
    public function getOutputTokens()
    {
        return $this->container['output_tokens'];
    }

    /**
     * Sets output_tokens
     *
     * @param int $output_tokens The total output tokens generated in this session.
     *
     * @return self
     */
    public function setOutputTokens($output_tokens)
    {
        $this->container['output_tokens'] = $output_tokens;

        return $this;
    }

    /**
     * Gets violations
     *
     * @return int
     */
    public function getViolations()
    {
        return $this->container['violations'];
    }

    /**
     * Sets violations
     *
     * @param int $violations The number of AI Firewall violations detected in this session.
     *
     * @return self
     */
    public function setViolations($violations)
    {
        $this->container['violations'] = $violations;

        return $this;
    }

    /**
     * Gets firewall_enabled
     *
     * @return bool
     */
    public function getFirewallEnabled()
    {
        return $this->container['firewall_enabled'];
    }

    /**
     * Sets firewall_enabled
     *
     * @param bool $firewall_enabled Whether AI Firewall was enabled for this session's virtual key.
     *
     * @return self
     */
    public function setFirewallEnabled($firewall_enabled)
    {
        $this->container['firewall_enabled'] = $firewall_enabled;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date and time the session was created, in RFC 3339 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The date and time the session was last updated, in RFC 3339 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return \Fastly\Model\ArcSessionLogEntry[]
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param \Fastly\Model\ArcSessionLogEntry[] $logs The request and response pairs recorded for this session.
     *
     * @return self
     */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;

        return $this;
    }

    /**
     * Gets virtual_key_name
     *
     * @return string|null
     */
    public function getVirtualKeyName()
    {
        return $this->container['virtual_key_name'];
    }

    /**
     * Sets virtual_key_name
     *
     * @param string|null $virtual_key_name The display name of the virtual key used for this session.
     *
     * @return self
     */
    public function setVirtualKeyName($virtual_key_name)
    {
        $this->container['virtual_key_name'] = $virtual_key_name;

        return $this;
    }

    /**
     * Gets primary_provider
     *
     * @return string|null
     */
    public function getPrimaryProvider()
    {
        return $this->container['primary_provider'];
    }

    /**
     * Sets primary_provider
     *
     * @param string|null $primary_provider The ID of the provider connection originally requested, before any failover occurred.
     *
     * @return self
     */
    public function setPrimaryProvider($primary_provider)
    {
        $this->container['primary_provider'] = $primary_provider;

        return $this;
    }

    /**
     * Gets firewall_outcome
     *
     * @return string|null
     */
    public function getFirewallOutcome()
    {
        return $this->container['firewall_outcome'];
    }

    /**
     * Sets firewall_outcome
     *
     * @param string|null $firewall_outcome The outcome AI Firewall reached for this session. Present only when AI Firewall ran.
     *
     * @return self
     */
    public function setFirewallOutcome($firewall_outcome)
    {
        $this->container['firewall_outcome'] = $firewall_outcome;

        return $this;
    }

    /**
     * Gets firewall_stage
     *
     * @return string|null
     */
    public function getFirewallStage()
    {
        return $this->container['firewall_stage'];
    }

    /**
     * Sets firewall_stage
     *
     * @param string|null $firewall_stage The AI Firewall stage that produced the outcome (for example, the request or response stage). Present only when AI Firewall ran.
     *
     * @return self
     */
    public function setFirewallStage($firewall_stage)
    {
        $this->container['firewall_stage'] = $firewall_stage;

        return $this;
    }

    /**
     * Gets firewall_policy
     *
     * @return string|null
     */
    public function getFirewallPolicy()
    {
        return $this->container['firewall_policy'];
    }

    /**
     * Sets firewall_policy
     *
     * @param string|null $firewall_policy The AI Firewall policy that was applied. Present only when AI Firewall ran.
     *
     * @return self
     */
    public function setFirewallPolicy($firewall_policy)
    {
        $this->container['firewall_policy'] = $firewall_policy;

        return $this;
    }

    /**
     * Gets firewall_incomplete_reason
     *
     * @return string|null
     */
    public function getFirewallIncompleteReason()
    {
        return $this->container['firewall_incomplete_reason'];
    }

    /**
     * Sets firewall_incomplete_reason
     *
     * @param string|null $firewall_incomplete_reason Why AI Firewall inspection was incomplete, if applicable. Present only when AI Firewall ran and inspection didn't complete.
     *
     * @return self
     */
    public function setFirewallIncompleteReason($firewall_incomplete_reason)
    {
        $this->container['firewall_incomplete_reason'] = $firewall_incomplete_reason;

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


