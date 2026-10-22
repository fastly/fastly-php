<?php
/**
 * BotRequestMetricsDataItem
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
 * BotRequestMetricsDataItem Class Doc Comment
 *
 * @category Class
 * @description A time series data item containing bot request metric counts. The &#x60;bot&#x60; field is present when grouped by bot. The &#x60;datacenter&#x60; field is present when grouped by data center. This dataset is sparse, meaning only keys with non-zero values are included.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BotRequestMetricsDataItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'bot_request_metrics_data_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'timestamp' => '\DateTime',
        'bot' => 'string',
        'datacenter' => 'string',
        'bot_edge_requests_allowed_count' => 'int',
        'bot_edge_requests_challenged_count' => 'int',
        'bot_edge_requests_blocked_count' => 'int',
        'bot_edge_requests_challenge_token_valid_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'timestamp' => 'date-time',
        'bot' => null,
        'datacenter' => null,
        'bot_edge_requests_allowed_count' => 'int64',
        'bot_edge_requests_challenged_count' => 'int64',
        'bot_edge_requests_blocked_count' => 'int64',
        'bot_edge_requests_challenge_token_valid_count' => 'int64'
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
        'timestamp' => 'timestamp',
        'bot' => 'bot',
        'datacenter' => 'datacenter',
        'bot_edge_requests_allowed_count' => 'bot_edge_requests_allowed_count',
        'bot_edge_requests_challenged_count' => 'bot_edge_requests_challenged_count',
        'bot_edge_requests_blocked_count' => 'bot_edge_requests_blocked_count',
        'bot_edge_requests_challenge_token_valid_count' => 'bot_edge_requests_challenge_token_valid_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'bot' => 'setBot',
        'datacenter' => 'setDatacenter',
        'bot_edge_requests_allowed_count' => 'setBotEdgeRequestsAllowedCount',
        'bot_edge_requests_challenged_count' => 'setBotEdgeRequestsChallengedCount',
        'bot_edge_requests_blocked_count' => 'setBotEdgeRequestsBlockedCount',
        'bot_edge_requests_challenge_token_valid_count' => 'setBotEdgeRequestsChallengeTokenValidCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'bot' => 'getBot',
        'datacenter' => 'getDatacenter',
        'bot_edge_requests_allowed_count' => 'getBotEdgeRequestsAllowedCount',
        'bot_edge_requests_challenged_count' => 'getBotEdgeRequestsChallengedCount',
        'bot_edge_requests_blocked_count' => 'getBotEdgeRequestsBlockedCount',
        'bot_edge_requests_challenge_token_valid_count' => 'getBotEdgeRequestsChallengeTokenValidCount'
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
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['bot'] = $data['bot'] ?? null;
        $this->container['datacenter'] = $data['datacenter'] ?? null;
        $this->container['bot_edge_requests_allowed_count'] = $data['bot_edge_requests_allowed_count'] ?? null;
        $this->container['bot_edge_requests_challenged_count'] = $data['bot_edge_requests_challenged_count'] ?? null;
        $this->container['bot_edge_requests_blocked_count'] = $data['bot_edge_requests_blocked_count'] ?? null;
        $this->container['bot_edge_requests_challenge_token_valid_count'] = $data['bot_edge_requests_challenge_token_valid_count'] ?? null;
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
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Timestamp for the time series being reported.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets bot
     *
     * @return string|null
     */
    public function getBot()
    {
        return $this->container['bot'];
    }

    /**
     * Sets bot
     *
     * @param string|null $bot Bot identifier for which data was recorded. Present only when grouped by bot.
     *
     * @return self
     */
    public function setBot($bot)
    {
        $this->container['bot'] = $bot;

        return $this;
    }

    /**
     * Gets datacenter
     *
     * @return string|null
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     *
     * @param string|null $datacenter Datacenter (POP) for which data was recorded. Present only when grouped by datacenter.
     *
     * @return self
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

        return $this;
    }

    /**
     * Gets bot_edge_requests_allowed_count
     *
     * @return int|null
     */
    public function getBotEdgeRequestsAllowedCount()
    {
        return $this->container['bot_edge_requests_allowed_count'];
    }

    /**
     * Sets bot_edge_requests_allowed_count
     *
     * @param int|null $bot_edge_requests_allowed_count Count of edge requests where a bot was detected and the request was allowed by the configured policy.
     *
     * @return self
     */
    public function setBotEdgeRequestsAllowedCount($bot_edge_requests_allowed_count)
    {
        $this->container['bot_edge_requests_allowed_count'] = $bot_edge_requests_allowed_count;

        return $this;
    }

    /**
     * Gets bot_edge_requests_challenged_count
     *
     * @return int|null
     */
    public function getBotEdgeRequestsChallengedCount()
    {
        return $this->container['bot_edge_requests_challenged_count'];
    }

    /**
     * Sets bot_edge_requests_challenged_count
     *
     * @param int|null $bot_edge_requests_challenged_count Count of edge requests where a bot was detected and a client challenge was issued for the request by the configured policy.
     *
     * @return self
     */
    public function setBotEdgeRequestsChallengedCount($bot_edge_requests_challenged_count)
    {
        $this->container['bot_edge_requests_challenged_count'] = $bot_edge_requests_challenged_count;

        return $this;
    }

    /**
     * Gets bot_edge_requests_blocked_count
     *
     * @return int|null
     */
    public function getBotEdgeRequestsBlockedCount()
    {
        return $this->container['bot_edge_requests_blocked_count'];
    }

    /**
     * Sets bot_edge_requests_blocked_count
     *
     * @param int|null $bot_edge_requests_blocked_count Count of edge requests where a bot was detected and the request was blocked by the configured policy.
     *
     * @return self
     */
    public function setBotEdgeRequestsBlockedCount($bot_edge_requests_blocked_count)
    {
        $this->container['bot_edge_requests_blocked_count'] = $bot_edge_requests_blocked_count;

        return $this;
    }

    /**
     * Gets bot_edge_requests_challenge_token_valid_count
     *
     * @return int|null
     */
    public function getBotEdgeRequestsChallengeTokenValidCount()
    {
        return $this->container['bot_edge_requests_challenge_token_valid_count'];
    }

    /**
     * Sets bot_edge_requests_challenge_token_valid_count
     *
     * @param int|null $bot_edge_requests_challenge_token_valid_count Count of edge requests where a bot was detected and the client making the request has already solved a challenge issued by the configured policy.
     *
     * @return self
     */
    public function setBotEdgeRequestsChallengeTokenValidCount($bot_edge_requests_challenge_token_valid_count)
    {
        $this->container['bot_edge_requests_challenge_token_valid_count'] = $bot_edge_requests_challenge_token_valid_count;

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


