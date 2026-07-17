<?php
/**
 * Script
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
 * Script Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Script implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'script';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'id' => 'string',
        'page_id' => 'string',
        'source' => 'string',
        'urls' => 'string[]',
        'first_seen_at' => '\DateTime',
        'last_seen_at' => '\DateTime',
        'justification' => 'string',
        'current_hash' => 'string',
        'authorized_hash' => 'string',
        'authorization_status' => 'string',
        'authorized_at' => '\DateTime'
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
        'page_id' => null,
        'source' => null,
        'urls' => null,
        'first_seen_at' => 'date-time',
        'last_seen_at' => 'date-time',
        'justification' => null,
        'current_hash' => null,
        'authorized_hash' => null,
        'authorization_status' => null,
        'authorized_at' => 'date-time'
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
        'page_id' => 'page_id',
        'source' => 'source',
        'urls' => 'urls',
        'first_seen_at' => 'first_seen_at',
        'last_seen_at' => 'last_seen_at',
        'justification' => 'justification',
        'current_hash' => 'current_hash',
        'authorized_hash' => 'authorized_hash',
        'authorization_status' => 'authorization_status',
        'authorized_at' => 'authorized_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'page_id' => 'setPageId',
        'source' => 'setSource',
        'urls' => 'setUrls',
        'first_seen_at' => 'setFirstSeenAt',
        'last_seen_at' => 'setLastSeenAt',
        'justification' => 'setJustification',
        'current_hash' => 'setCurrentHash',
        'authorized_hash' => 'setAuthorizedHash',
        'authorization_status' => 'setAuthorizationStatus',
        'authorized_at' => 'setAuthorizedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'page_id' => 'getPageId',
        'source' => 'getSource',
        'urls' => 'getUrls',
        'first_seen_at' => 'getFirstSeenAt',
        'last_seen_at' => 'getLastSeenAt',
        'justification' => 'getJustification',
        'current_hash' => 'getCurrentHash',
        'authorized_hash' => 'getAuthorizedHash',
        'authorization_status' => 'getAuthorizationStatus',
        'authorized_at' => 'getAuthorizedAt'
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

    const AUTHORIZATION_STATUS_AUTHORIZED = 'authorized';
    const AUTHORIZATION_STATUS_UNAUTHORIZED = 'unauthorized';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthorizationStatusAllowableValues()
    {
        return [
            self::AUTHORIZATION_STATUS_AUTHORIZED,
            self::AUTHORIZATION_STATUS_UNAUTHORIZED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['page_id'] = $data['page_id'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['urls'] = $data['urls'] ?? null;
        $this->container['first_seen_at'] = $data['first_seen_at'] ?? null;
        $this->container['last_seen_at'] = $data['last_seen_at'] ?? null;
        $this->container['justification'] = $data['justification'] ?? null;
        $this->container['current_hash'] = $data['current_hash'] ?? null;
        $this->container['authorized_hash'] = $data['authorized_hash'] ?? null;
        $this->container['authorization_status'] = $data['authorization_status'] ?? null;
        $this->container['authorized_at'] = $data['authorized_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthorizationStatusAllowableValues();
        if (!is_null($this->container['authorization_status']) && !in_array($this->container['authorization_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'authorization_status', must be one of '%s'",
                $this->container['authorization_status'],
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
     * @param string|null $id Unique script identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets page_id
     *
     * @return string|null
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     *
     * @param string|null $page_id Parent page ID
     *
     * @return self
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Script source (inline or external URL)
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return string[]|null
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[]|null $urls URLs where this script was observed
     *
     * @return self
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets first_seen_at
     *
     * @return \DateTime|null
     */
    public function getFirstSeenAt()
    {
        return $this->container['first_seen_at'];
    }

    /**
     * Sets first_seen_at
     *
     * @param \DateTime|null $first_seen_at first_seen_at
     *
     * @return self
     */
    public function setFirstSeenAt($first_seen_at)
    {
        $this->container['first_seen_at'] = $first_seen_at;

        return $this;
    }

    /**
     * Gets last_seen_at
     *
     * @return \DateTime|null
     */
    public function getLastSeenAt()
    {
        return $this->container['last_seen_at'];
    }

    /**
     * Sets last_seen_at
     *
     * @param \DateTime|null $last_seen_at last_seen_at
     *
     * @return self
     */
    public function setLastSeenAt($last_seen_at)
    {
        $this->container['last_seen_at'] = $last_seen_at;

        return $this;
    }

    /**
     * Gets justification
     *
     * @return string|null
     */
    public function getJustification()
    {
        return $this->container['justification'];
    }

    /**
     * Sets justification
     *
     * @param string|null $justification Reason for authorization decision
     *
     * @return self
     */
    public function setJustification($justification)
    {
        $this->container['justification'] = $justification;

        return $this;
    }

    /**
     * Gets current_hash
     *
     * @return string|null
     */
    public function getCurrentHash()
    {
        return $this->container['current_hash'];
    }

    /**
     * Sets current_hash
     *
     * @param string|null $current_hash Current script content hash
     *
     * @return self
     */
    public function setCurrentHash($current_hash)
    {
        $this->container['current_hash'] = $current_hash;

        return $this;
    }

    /**
     * Gets authorized_hash
     *
     * @return string|null
     */
    public function getAuthorizedHash()
    {
        return $this->container['authorized_hash'];
    }

    /**
     * Sets authorized_hash
     *
     * @param string|null $authorized_hash Hash of authorized script content
     *
     * @return self
     */
    public function setAuthorizedHash($authorized_hash)
    {
        $this->container['authorized_hash'] = $authorized_hash;

        return $this;
    }

    /**
     * Gets authorization_status
     *
     * @return string|null
     */
    public function getAuthorizationStatus()
    {
        return $this->container['authorization_status'];
    }

    /**
     * Sets authorization_status
     *
     * @param string|null $authorization_status Script authorization status
     *
     * @return self
     */
    public function setAuthorizationStatus($authorization_status)
    {
        $allowedValues = $this->getAuthorizationStatusAllowableValues();
        if (!is_null($authorization_status) && !in_array($authorization_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'authorization_status', must be one of '%s'",
                    $authorization_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authorization_status'] = $authorization_status;

        return $this;
    }

    /**
     * Gets authorized_at
     *
     * @return \DateTime|null
     */
    public function getAuthorizedAt()
    {
        return $this->container['authorized_at'];
    }

    /**
     * Sets authorized_at
     *
     * @param \DateTime|null $authorized_at authorized_at
     *
     * @return self
     */
    public function setAuthorizedAt($authorized_at)
    {
        $this->container['authorized_at'] = $authorized_at;

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


