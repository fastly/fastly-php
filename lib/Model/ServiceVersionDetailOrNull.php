<?php
/**
 * ServiceVersionDetailOrNull
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
 * ServiceVersionDetailOrNull Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ServiceVersionDetailOrNull implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'service_version_detail_or_null';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'active' => 'bool',
        'comment' => 'string',
        'deployed' => 'bool',
        'locked' => 'bool',
        'number' => 'int',
        'staging' => 'bool',
        'testing' => 'bool',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'service_id' => 'string',
        'environments' => '\Fastly\Model\Environment[]',
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
        'active' => null,
        'comment' => null,
        'deployed' => null,
        'locked' => null,
        'number' => null,
        'staging' => null,
        'testing' => null,
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time',
        'service_id' => null,
        'environments' => null,
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
        'active' => 'active',
        'comment' => 'comment',
        'deployed' => 'deployed',
        'locked' => 'locked',
        'number' => 'number',
        'staging' => 'staging',
        'testing' => 'testing',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at',
        'service_id' => 'service_id',
        'environments' => 'environments',
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
        'active' => 'setActive',
        'comment' => 'setComment',
        'deployed' => 'setDeployed',
        'locked' => 'setLocked',
        'number' => 'setNumber',
        'staging' => 'setStaging',
        'testing' => 'setTesting',
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt',
        'service_id' => 'setServiceId',
        'environments' => 'setEnvironments',
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
        'active' => 'getActive',
        'comment' => 'getComment',
        'deployed' => 'getDeployed',
        'locked' => 'getLocked',
        'number' => 'getNumber',
        'staging' => 'getStaging',
        'testing' => 'getTesting',
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt',
        'service_id' => 'getServiceId',
        'environments' => 'getEnvironments',
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
        $this->container['active'] = $data['active'] ?? false;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['deployed'] = $data['deployed'] ?? null;
        $this->container['locked'] = $data['locked'] ?? false;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['staging'] = $data['staging'] ?? false;
        $this->container['testing'] = $data['testing'] ?? false;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['environments'] = $data['environments'] ?? null;
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
     * @param bool|null $active Whether this is the active version or not.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment A freeform descriptive note.
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets deployed
     *
     * @return bool|null
     */
    public function getDeployed()
    {
        return $this->container['deployed'];
    }

    /**
     * Sets deployed
     *
     * @param bool|null $deployed Unused at this time.
     *
     * @return self
     */
    public function setDeployed($deployed)
    {
        $this->container['deployed'] = $deployed;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked Whether this version is locked or not. Objects can not be added or edited on locked versions.
     *
     * @return self
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

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
     * @param int|null $number The number of this version.
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets staging
     *
     * @return bool|null
     */
    public function getStaging()
    {
        return $this->container['staging'];
    }

    /**
     * Sets staging
     *
     * @param bool|null $staging Unused at this time.
     *
     * @return self
     */
    public function setStaging($staging)
    {
        $this->container['staging'] = $staging;

        return $this;
    }

    /**
     * Gets testing
     *
     * @return bool|null
     */
    public function getTesting()
    {
        return $this->container['testing'];
    }

    /**
     * Sets testing
     *
     * @param bool|null $testing Unused at this time.
     *
     * @return self
     */
    public function setTesting($testing)
    {
        $this->container['testing'] = $testing;

        return $this;
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
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return \Fastly\Model\Environment[]|null
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param \Fastly\Model\Environment[]|null $environments A list of environments where the service has been deployed.
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

        return $this;
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


