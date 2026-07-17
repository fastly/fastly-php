<?php
/**
 * WafSimulateSignal
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
 * WafSimulateSignal Class Doc Comment
 *
 * @category Class
 * @description A signal detected during WAF simulation. The &#x60;type&#x60;, &#x60;detector&#x60;, &#x60;detector_scope&#x60;, and &#x60;redaction&#x60; fields are always present. The &#x60;location&#x60;, &#x60;name&#x60;, and &#x60;value&#x60; fields are present only when applicable to the signal category.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WafSimulateSignal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'wafSimulateSignal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'type' => 'string',
        'detector' => 'string',
        'detector_scope' => 'string',
        'redaction' => 'string',
        'location' => 'string',
        'name' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'type' => null,
        'detector' => null,
        'detector_scope' => null,
        'redaction' => null,
        'location' => null,
        'name' => null,
        'value' => null
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
        'type' => 'type',
        'detector' => 'detector',
        'detector_scope' => 'detector_scope',
        'redaction' => 'redaction',
        'location' => 'location',
        'name' => 'name',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'detector' => 'setDetector',
        'detector_scope' => 'setDetectorScope',
        'redaction' => 'setRedaction',
        'location' => 'setLocation',
        'name' => 'setName',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'detector' => 'getDetector',
        'detector_scope' => 'getDetectorScope',
        'redaction' => 'getRedaction',
        'location' => 'getLocation',
        'name' => 'getName',
        'value' => 'getValue'
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

    const DETECTOR_SCOPE_SYSTEM = 'system';
    const DETECTOR_SCOPE_WORKSPACE = 'workspace';
    const DETECTOR_SCOPE_ACCOUNT = 'account';
    const DETECTOR_SCOPE_UNKNOWN = 'unknown';
    const REDACTION_NONE = 'none';
    const REDACTION_PARAM = 'param';
    const REDACTION_CREDIT_CARD = 'credit_card';
    const REDACTION_SSN = 'ssn';
    const REDACTION_GUID = 'guid';
    const REDACTION_IBAN = 'iban';
    const REDACTION_REQUEST_HEADER = 'request_header';
    const REDACTION_RESPONSE_HEADER = 'response_header';
    const REDACTION_CUSTOM_PARAM = 'custom_param';
    const REDACTION_CUSTOM_REQUEST_HEADER = 'custom_request_header';
    const REDACTION_CUSTOM_RESPONSE_HEADER = 'custom_response_header';
    const REDACTION_JSESSION_ID = 'jsession_id';
    const REDACTION_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDetectorScopeAllowableValues()
    {
        return [
            self::DETECTOR_SCOPE_SYSTEM,
            self::DETECTOR_SCOPE_WORKSPACE,
            self::DETECTOR_SCOPE_ACCOUNT,
            self::DETECTOR_SCOPE_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedactionAllowableValues()
    {
        return [
            self::REDACTION_NONE,
            self::REDACTION_PARAM,
            self::REDACTION_CREDIT_CARD,
            self::REDACTION_SSN,
            self::REDACTION_GUID,
            self::REDACTION_IBAN,
            self::REDACTION_REQUEST_HEADER,
            self::REDACTION_RESPONSE_HEADER,
            self::REDACTION_CUSTOM_PARAM,
            self::REDACTION_CUSTOM_REQUEST_HEADER,
            self::REDACTION_CUSTOM_RESPONSE_HEADER,
            self::REDACTION_JSESSION_ID,
            self::REDACTION_UNKNOWN,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['detector'] = $data['detector'] ?? null;
        $this->container['detector_scope'] = $data['detector_scope'] ?? null;
        $this->container['redaction'] = $data['redaction'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['detector'] === null) {
            $invalidProperties[] = "'detector' can't be null";
        }
        if ($this->container['detector_scope'] === null) {
            $invalidProperties[] = "'detector_scope' can't be null";
        }
        $allowedValues = $this->getDetectorScopeAllowableValues();
        if (!is_null($this->container['detector_scope']) && !in_array($this->container['detector_scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'detector_scope', must be one of '%s'",
                $this->container['detector_scope'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['redaction'] === null) {
            $invalidProperties[] = "'redaction' can't be null";
        }
        $allowedValues = $this->getRedactionAllowableValues();
        if (!is_null($this->container['redaction']) && !in_array($this->container['redaction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'redaction', must be one of '%s'",
                $this->container['redaction'],
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of signal detected (e.g., `SQLI`, `XSS`, `CMDEXE`, `TRAVERSAL`, `BACKDOOR`, `LOG4J-JNDI`, `BLOCKED`).
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets detector
     *
     * @return string
     */
    public function getDetector()
    {
        return $this->container['detector'];
    }

    /**
     * Sets detector
     *
     * @param string $detector The detector engine that identified the signal (e.g., `SQLI`, `LIBINJECTIONV5`, `LIBINJECTIONJS`, or a rule ID).
     *
     * @return self
     */
    public function setDetector($detector)
    {
        $this->container['detector'] = $detector;

        return $this;
    }

    /**
     * Gets detector_scope
     *
     * @return string
     */
    public function getDetectorScope()
    {
        return $this->container['detector_scope'];
    }

    /**
     * Sets detector_scope
     *
     * @param string $detector_scope The scope of the detector that identified the signal. Derived from the signal type and detection type at simulation time. `system` — built-in WAF rule (e.g., `SQLI`, `XSS`). `workspace` — workspace-level custom rule or signal (e.g., `site.*` prefix). `account` — account-level custom signal (e.g., `corp.*` prefix). `unknown` — scope could not be determined (e.g., tags fetch failed or unrecognized type).
     *
     * @return self
     */
    public function setDetectorScope($detector_scope)
    {
        $allowedValues = $this->getDetectorScopeAllowableValues();
        if (!in_array($detector_scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'detector_scope', must be one of '%s'",
                    $detector_scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['detector_scope'] = $detector_scope;

        return $this;
    }

    /**
     * Gets redaction
     *
     * @return string
     */
    public function getRedaction()
    {
        return $this->container['redaction'];
    }

    /**
     * Sets redaction
     *
     * @param string $redaction The redaction level applied to the detected value. Clients should handle unexpected string values gracefully, as new redaction types may be added.
     *
     * @return self
     */
    public function setRedaction($redaction)
    {
        $allowedValues = $this->getRedactionAllowableValues();
        if (!in_array($redaction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'redaction', must be one of '%s'",
                    $redaction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redaction'] = $redaction;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location Where in the request the signal was detected (e.g., `QUERYSTRING`, `POSTBODY`, `HEADER`, `HEADEROUT`, `POSTARG`). Present for detection signals; absent for custom and action signals.
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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
     * @param string|null $name The parameter or header name that triggered detection. Present when the WAF engine identifies a specific parameter or header.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value The matched payload value that triggered signal detection. For detection signals, contains the matched content. For `BLOCKED` signals, carries the WAF response code as a string. Absent for custom signals.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


