<?php
/**
 * WafFirewallVersionResponseDataAttributes
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
 * WafFirewallVersionResponseDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WafFirewallVersionResponseDataAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'waf_firewall_version_response_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'active' => 'bool',
        'active_rules_fastly_block_count' => 'int',
        'active_rules_fastly_log_count' => 'int',
        'active_rules_fastly_score_count' => 'int',
        'active_rules_owasp_block_count' => 'int',
        'active_rules_owasp_log_count' => 'int',
        'active_rules_owasp_score_count' => 'int',
        'active_rules_trustwave_block_count' => 'int',
        'active_rules_trustwave_log_count' => 'int',
        'last_deployment_status' => 'string',
        'deployed_at' => 'string',
        'error' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time',
        'active' => null,
        'active_rules_fastly_block_count' => null,
        'active_rules_fastly_log_count' => null,
        'active_rules_fastly_score_count' => null,
        'active_rules_owasp_block_count' => null,
        'active_rules_owasp_log_count' => null,
        'active_rules_owasp_score_count' => null,
        'active_rules_trustwave_block_count' => null,
        'active_rules_trustwave_log_count' => null,
        'last_deployment_status' => null,
        'deployed_at' => null,
        'error' => null
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
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at',
        'active' => 'active',
        'active_rules_fastly_block_count' => 'active_rules_fastly_block_count',
        'active_rules_fastly_log_count' => 'active_rules_fastly_log_count',
        'active_rules_fastly_score_count' => 'active_rules_fastly_score_count',
        'active_rules_owasp_block_count' => 'active_rules_owasp_block_count',
        'active_rules_owasp_log_count' => 'active_rules_owasp_log_count',
        'active_rules_owasp_score_count' => 'active_rules_owasp_score_count',
        'active_rules_trustwave_block_count' => 'active_rules_trustwave_block_count',
        'active_rules_trustwave_log_count' => 'active_rules_trustwave_log_count',
        'last_deployment_status' => 'last_deployment_status',
        'deployed_at' => 'deployed_at',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt',
        'active' => 'setActive',
        'active_rules_fastly_block_count' => 'setActiveRulesFastlyBlockCount',
        'active_rules_fastly_log_count' => 'setActiveRulesFastlyLogCount',
        'active_rules_fastly_score_count' => 'setActiveRulesFastlyScoreCount',
        'active_rules_owasp_block_count' => 'setActiveRulesOwaspBlockCount',
        'active_rules_owasp_log_count' => 'setActiveRulesOwaspLogCount',
        'active_rules_owasp_score_count' => 'setActiveRulesOwaspScoreCount',
        'active_rules_trustwave_block_count' => 'setActiveRulesTrustwaveBlockCount',
        'active_rules_trustwave_log_count' => 'setActiveRulesTrustwaveLogCount',
        'last_deployment_status' => 'setLastDeploymentStatus',
        'deployed_at' => 'setDeployedAt',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt',
        'active' => 'getActive',
        'active_rules_fastly_block_count' => 'getActiveRulesFastlyBlockCount',
        'active_rules_fastly_log_count' => 'getActiveRulesFastlyLogCount',
        'active_rules_fastly_score_count' => 'getActiveRulesFastlyScoreCount',
        'active_rules_owasp_block_count' => 'getActiveRulesOwaspBlockCount',
        'active_rules_owasp_log_count' => 'getActiveRulesOwaspLogCount',
        'active_rules_owasp_score_count' => 'getActiveRulesOwaspScoreCount',
        'active_rules_trustwave_block_count' => 'getActiveRulesTrustwaveBlockCount',
        'active_rules_trustwave_log_count' => 'getActiveRulesTrustwaveLogCount',
        'last_deployment_status' => 'getLastDeploymentStatus',
        'deployed_at' => 'getDeployedAt',
        'error' => 'getError'
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

    const LAST_DEPLOYMENT_STATUS_NULL = 'null';
    const LAST_DEPLOYMENT_STATUS_PENDING = 'pending';
    const LAST_DEPLOYMENT_STATUS_IN_PROGRESS = 'in progress';
    const LAST_DEPLOYMENT_STATUS_COMPLETED = 'completed';
    const LAST_DEPLOYMENT_STATUS_FAILED = 'failed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLastDeploymentStatusAllowableValues()
    {
        return [
            self::LAST_DEPLOYMENT_STATUS_NULL,
            self::LAST_DEPLOYMENT_STATUS_PENDING,
            self::LAST_DEPLOYMENT_STATUS_IN_PROGRESS,
            self::LAST_DEPLOYMENT_STATUS_COMPLETED,
            self::LAST_DEPLOYMENT_STATUS_FAILED,
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['active_rules_fastly_block_count'] = $data['active_rules_fastly_block_count'] ?? null;
        $this->container['active_rules_fastly_log_count'] = $data['active_rules_fastly_log_count'] ?? null;
        $this->container['active_rules_fastly_score_count'] = $data['active_rules_fastly_score_count'] ?? null;
        $this->container['active_rules_owasp_block_count'] = $data['active_rules_owasp_block_count'] ?? null;
        $this->container['active_rules_owasp_log_count'] = $data['active_rules_owasp_log_count'] ?? null;
        $this->container['active_rules_owasp_score_count'] = $data['active_rules_owasp_score_count'] ?? null;
        $this->container['active_rules_trustwave_block_count'] = $data['active_rules_trustwave_block_count'] ?? null;
        $this->container['active_rules_trustwave_log_count'] = $data['active_rules_trustwave_log_count'] ?? null;
        $this->container['last_deployment_status'] = $data['last_deployment_status'] ?? null;
        $this->container['deployed_at'] = $data['deployed_at'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLastDeploymentStatusAllowableValues();
        if (!is_null($this->container['last_deployment_status']) && !in_array($this->container['last_deployment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'last_deployment_status', must be one of '%s'",
                $this->container['last_deployment_status'],
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Whether a specific firewall version is currently deployed.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets active_rules_fastly_block_count
     *
     * @return int|null
     */
    public function getActiveRulesFastlyBlockCount()
    {
        return $this->container['active_rules_fastly_block_count'];
    }

    /**
     * Sets active_rules_fastly_block_count
     *
     * @param int|null $active_rules_fastly_block_count The number of active Fastly rules set to block.
     *
     * @return self
     */
    public function setActiveRulesFastlyBlockCount($active_rules_fastly_block_count)
    {
        $this->container['active_rules_fastly_block_count'] = $active_rules_fastly_block_count;

        return $this;
    }

    /**
     * Gets active_rules_fastly_log_count
     *
     * @return int|null
     */
    public function getActiveRulesFastlyLogCount()
    {
        return $this->container['active_rules_fastly_log_count'];
    }

    /**
     * Sets active_rules_fastly_log_count
     *
     * @param int|null $active_rules_fastly_log_count The number of active Fastly rules set to log.
     *
     * @return self
     */
    public function setActiveRulesFastlyLogCount($active_rules_fastly_log_count)
    {
        $this->container['active_rules_fastly_log_count'] = $active_rules_fastly_log_count;

        return $this;
    }

    /**
     * Gets active_rules_fastly_score_count
     *
     * @return int|null
     */
    public function getActiveRulesFastlyScoreCount()
    {
        return $this->container['active_rules_fastly_score_count'];
    }

    /**
     * Sets active_rules_fastly_score_count
     *
     * @param int|null $active_rules_fastly_score_count The number of active Fastly rules set to score.
     *
     * @return self
     */
    public function setActiveRulesFastlyScoreCount($active_rules_fastly_score_count)
    {
        $this->container['active_rules_fastly_score_count'] = $active_rules_fastly_score_count;

        return $this;
    }

    /**
     * Gets active_rules_owasp_block_count
     *
     * @return int|null
     */
    public function getActiveRulesOwaspBlockCount()
    {
        return $this->container['active_rules_owasp_block_count'];
    }

    /**
     * Sets active_rules_owasp_block_count
     *
     * @param int|null $active_rules_owasp_block_count The number of active OWASP rules set to block.
     *
     * @return self
     */
    public function setActiveRulesOwaspBlockCount($active_rules_owasp_block_count)
    {
        $this->container['active_rules_owasp_block_count'] = $active_rules_owasp_block_count;

        return $this;
    }

    /**
     * Gets active_rules_owasp_log_count
     *
     * @return int|null
     */
    public function getActiveRulesOwaspLogCount()
    {
        return $this->container['active_rules_owasp_log_count'];
    }

    /**
     * Sets active_rules_owasp_log_count
     *
     * @param int|null $active_rules_owasp_log_count The number of active OWASP rules set to log.
     *
     * @return self
     */
    public function setActiveRulesOwaspLogCount($active_rules_owasp_log_count)
    {
        $this->container['active_rules_owasp_log_count'] = $active_rules_owasp_log_count;

        return $this;
    }

    /**
     * Gets active_rules_owasp_score_count
     *
     * @return int|null
     */
    public function getActiveRulesOwaspScoreCount()
    {
        return $this->container['active_rules_owasp_score_count'];
    }

    /**
     * Sets active_rules_owasp_score_count
     *
     * @param int|null $active_rules_owasp_score_count The number of active OWASP rules set to score.
     *
     * @return self
     */
    public function setActiveRulesOwaspScoreCount($active_rules_owasp_score_count)
    {
        $this->container['active_rules_owasp_score_count'] = $active_rules_owasp_score_count;

        return $this;
    }

    /**
     * Gets active_rules_trustwave_block_count
     *
     * @return int|null
     */
    public function getActiveRulesTrustwaveBlockCount()
    {
        return $this->container['active_rules_trustwave_block_count'];
    }

    /**
     * Sets active_rules_trustwave_block_count
     *
     * @param int|null $active_rules_trustwave_block_count The number of active Trustwave rules set to block.
     *
     * @return self
     */
    public function setActiveRulesTrustwaveBlockCount($active_rules_trustwave_block_count)
    {
        $this->container['active_rules_trustwave_block_count'] = $active_rules_trustwave_block_count;

        return $this;
    }

    /**
     * Gets active_rules_trustwave_log_count
     *
     * @return int|null
     */
    public function getActiveRulesTrustwaveLogCount()
    {
        return $this->container['active_rules_trustwave_log_count'];
    }

    /**
     * Sets active_rules_trustwave_log_count
     *
     * @param int|null $active_rules_trustwave_log_count The number of active Trustwave rules set to log.
     *
     * @return self
     */
    public function setActiveRulesTrustwaveLogCount($active_rules_trustwave_log_count)
    {
        $this->container['active_rules_trustwave_log_count'] = $active_rules_trustwave_log_count;

        return $this;
    }

    /**
     * Gets last_deployment_status
     *
     * @return string|null
     */
    public function getLastDeploymentStatus()
    {
        return $this->container['last_deployment_status'];
    }

    /**
     * Sets last_deployment_status
     *
     * @param string|null $last_deployment_status The status of the last deployment of this firewall version.
     *
     * @return self
     */
    public function setLastDeploymentStatus($last_deployment_status)
    {
        $allowedValues = $this->getLastDeploymentStatusAllowableValues();
        if (!is_null($last_deployment_status) && !in_array($last_deployment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'last_deployment_status', must be one of '%s'",
                    $last_deployment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['last_deployment_status'] = $last_deployment_status;

        return $this;
    }

    /**
     * Gets deployed_at
     *
     * @return string|null
     */
    public function getDeployedAt()
    {
        return $this->container['deployed_at'];
    }

    /**
     * Sets deployed_at
     *
     * @param string|null $deployed_at Time-stamp (GMT) indicating when the firewall version was last deployed.
     *
     * @return self
     */
    public function setDeployedAt($deployed_at)
    {
        $this->container['deployed_at'] = $deployed_at;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error Contains error message if the firewall version fails to deploy.
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


