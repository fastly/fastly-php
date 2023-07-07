<?php
/**
 * VersionDetail
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
 * VersionDetail Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VersionDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'version_detail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'backends' => '\Fastly\Model\BackendResponse[]',
        'cache_settings' => '\Fastly\Model\CacheSettingResponse[]',
        'conditions' => '\Fastly\Model\ConditionResponse[]',
        'directors' => '\Fastly\Model\Director[]',
        'domains' => '\Fastly\Model\DomainResponse[]',
        'gzips' => '\Fastly\Model\GzipResponse[]',
        'headers' => '\Fastly\Model\HeaderResponse[]',
        'healthchecks' => '\Fastly\Model\HealthcheckResponse[]',
        'request_settings' => '\Fastly\Model\RequestSettingsResponse[]',
        'response_objects' => '\Fastly\Model\ResponseObjectResponse[]',
        'settings' => '\Fastly\Model\VersionDetailSettings',
        'snippets' => '\Fastly\Model\SchemasSnippetResponse[]',
        'vcls' => '\Fastly\Model\SchemasVclResponse[]',
        'wordpress' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'backends' => null,
        'cache_settings' => null,
        'conditions' => null,
        'directors' => null,
        'domains' => null,
        'gzips' => null,
        'headers' => null,
        'healthchecks' => null,
        'request_settings' => null,
        'response_objects' => null,
        'settings' => null,
        'snippets' => null,
        'vcls' => null,
        'wordpress' => null
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
        'backends' => 'backends',
        'cache_settings' => 'cache_settings',
        'conditions' => 'conditions',
        'directors' => 'directors',
        'domains' => 'domains',
        'gzips' => 'gzips',
        'headers' => 'headers',
        'healthchecks' => 'healthchecks',
        'request_settings' => 'request_settings',
        'response_objects' => 'response_objects',
        'settings' => 'settings',
        'snippets' => 'snippets',
        'vcls' => 'vcls',
        'wordpress' => 'wordpress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backends' => 'setBackends',
        'cache_settings' => 'setCacheSettings',
        'conditions' => 'setConditions',
        'directors' => 'setDirectors',
        'domains' => 'setDomains',
        'gzips' => 'setGzips',
        'headers' => 'setHeaders',
        'healthchecks' => 'setHealthchecks',
        'request_settings' => 'setRequestSettings',
        'response_objects' => 'setResponseObjects',
        'settings' => 'setSettings',
        'snippets' => 'setSnippets',
        'vcls' => 'setVcls',
        'wordpress' => 'setWordpress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backends' => 'getBackends',
        'cache_settings' => 'getCacheSettings',
        'conditions' => 'getConditions',
        'directors' => 'getDirectors',
        'domains' => 'getDomains',
        'gzips' => 'getGzips',
        'headers' => 'getHeaders',
        'healthchecks' => 'getHealthchecks',
        'request_settings' => 'getRequestSettings',
        'response_objects' => 'getResponseObjects',
        'settings' => 'getSettings',
        'snippets' => 'getSnippets',
        'vcls' => 'getVcls',
        'wordpress' => 'getWordpress'
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
        $this->container['backends'] = $data['backends'] ?? null;
        $this->container['cache_settings'] = $data['cache_settings'] ?? null;
        $this->container['conditions'] = $data['conditions'] ?? null;
        $this->container['directors'] = $data['directors'] ?? null;
        $this->container['domains'] = $data['domains'] ?? null;
        $this->container['gzips'] = $data['gzips'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['healthchecks'] = $data['healthchecks'] ?? null;
        $this->container['request_settings'] = $data['request_settings'] ?? null;
        $this->container['response_objects'] = $data['response_objects'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['snippets'] = $data['snippets'] ?? null;
        $this->container['vcls'] = $data['vcls'] ?? null;
        $this->container['wordpress'] = $data['wordpress'] ?? null;
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
     * Gets backends
     *
     * @return \Fastly\Model\BackendResponse[]|null
     */
    public function getBackends()
    {
        return $this->container['backends'];
    }

    /**
     * Sets backends
     *
     * @param \Fastly\Model\BackendResponse[]|null $backends List of backends associated to this service.
     *
     * @return self
     */
    public function setBackends($backends)
    {
        $this->container['backends'] = $backends;

        return $this;
    }

    /**
     * Gets cache_settings
     *
     * @return \Fastly\Model\CacheSettingResponse[]|null
     */
    public function getCacheSettings()
    {
        return $this->container['cache_settings'];
    }

    /**
     * Sets cache_settings
     *
     * @param \Fastly\Model\CacheSettingResponse[]|null $cache_settings List of cache settings associated to this service.
     *
     * @return self
     */
    public function setCacheSettings($cache_settings)
    {
        $this->container['cache_settings'] = $cache_settings;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \Fastly\Model\ConditionResponse[]|null
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \Fastly\Model\ConditionResponse[]|null $conditions List of conditions associated to this service.
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets directors
     *
     * @return \Fastly\Model\Director[]|null
     */
    public function getDirectors()
    {
        return $this->container['directors'];
    }

    /**
     * Sets directors
     *
     * @param \Fastly\Model\Director[]|null $directors List of directors associated to this service.
     *
     * @return self
     */
    public function setDirectors($directors)
    {
        $this->container['directors'] = $directors;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return \Fastly\Model\DomainResponse[]|null
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param \Fastly\Model\DomainResponse[]|null $domains List of domains associated to this service.
     *
     * @return self
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets gzips
     *
     * @return \Fastly\Model\GzipResponse[]|null
     */
    public function getGzips()
    {
        return $this->container['gzips'];
    }

    /**
     * Sets gzips
     *
     * @param \Fastly\Model\GzipResponse[]|null $gzips List of gzip rules associated to this service.
     *
     * @return self
     */
    public function setGzips($gzips)
    {
        $this->container['gzips'] = $gzips;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return \Fastly\Model\HeaderResponse[]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \Fastly\Model\HeaderResponse[]|null $headers List of headers associated to this service.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets healthchecks
     *
     * @return \Fastly\Model\HealthcheckResponse[]|null
     */
    public function getHealthchecks()
    {
        return $this->container['healthchecks'];
    }

    /**
     * Sets healthchecks
     *
     * @param \Fastly\Model\HealthcheckResponse[]|null $healthchecks List of healthchecks associated to this service.
     *
     * @return self
     */
    public function setHealthchecks($healthchecks)
    {
        $this->container['healthchecks'] = $healthchecks;

        return $this;
    }

    /**
     * Gets request_settings
     *
     * @return \Fastly\Model\RequestSettingsResponse[]|null
     */
    public function getRequestSettings()
    {
        return $this->container['request_settings'];
    }

    /**
     * Sets request_settings
     *
     * @param \Fastly\Model\RequestSettingsResponse[]|null $request_settings List of request settings for this service.
     *
     * @return self
     */
    public function setRequestSettings($request_settings)
    {
        $this->container['request_settings'] = $request_settings;

        return $this;
    }

    /**
     * Gets response_objects
     *
     * @return \Fastly\Model\ResponseObjectResponse[]|null
     */
    public function getResponseObjects()
    {
        return $this->container['response_objects'];
    }

    /**
     * Sets response_objects
     *
     * @param \Fastly\Model\ResponseObjectResponse[]|null $response_objects List of response objects for this service.
     *
     * @return self
     */
    public function setResponseObjects($response_objects)
    {
        $this->container['response_objects'] = $response_objects;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Fastly\Model\VersionDetailSettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Fastly\Model\VersionDetailSettings|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets snippets
     *
     * @return \Fastly\Model\SchemasSnippetResponse[]|null
     */
    public function getSnippets()
    {
        return $this->container['snippets'];
    }

    /**
     * Sets snippets
     *
     * @param \Fastly\Model\SchemasSnippetResponse[]|null $snippets List of VCL snippets for this service.
     *
     * @return self
     */
    public function setSnippets($snippets)
    {
        $this->container['snippets'] = $snippets;

        return $this;
    }

    /**
     * Gets vcls
     *
     * @return \Fastly\Model\SchemasVclResponse[]|null
     */
    public function getVcls()
    {
        return $this->container['vcls'];
    }

    /**
     * Sets vcls
     *
     * @param \Fastly\Model\SchemasVclResponse[]|null $vcls List of VCL files for this service.
     *
     * @return self
     */
    public function setVcls($vcls)
    {
        $this->container['vcls'] = $vcls;

        return $this;
    }

    /**
     * Gets wordpress
     *
     * @return object[]|null
     */
    public function getWordpress()
    {
        return $this->container['wordpress'];
    }

    /**
     * Sets wordpress
     *
     * @param object[]|null $wordpress A list of Wordpress rules with this service.
     *
     * @return self
     */
    public function setWordpress($wordpress)
    {
        $this->container['wordpress'] = $wordpress;

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


