<?php
/**
 * RateLimiter
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
 * RateLimiter Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RateLimiter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'rate_limiter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'uri_dictionary_name' => 'string',
        'http_methods' => 'string[]',
        'rps_limit' => 'int',
        'window_size' => 'int',
        'client_key' => 'string[]',
        'penalty_box_duration' => 'int',
        'action' => 'string',
        'response' => 'array<string,string>',
        'response_object_name' => 'string',
        'logger_type' => 'string',
        'feature_revision' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'name' => null,
        'uri_dictionary_name' => null,
        'http_methods' => null,
        'rps_limit' => null,
        'window_size' => null,
        'client_key' => null,
        'penalty_box_duration' => null,
        'action' => null,
        'response' => null,
        'response_object_name' => null,
        'logger_type' => null,
        'feature_revision' => null
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
        'name' => 'name',
        'uri_dictionary_name' => 'uri_dictionary_name',
        'http_methods' => 'http_methods',
        'rps_limit' => 'rps_limit',
        'window_size' => 'window_size',
        'client_key' => 'client_key',
        'penalty_box_duration' => 'penalty_box_duration',
        'action' => 'action',
        'response' => 'response',
        'response_object_name' => 'response_object_name',
        'logger_type' => 'logger_type',
        'feature_revision' => 'feature_revision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'uri_dictionary_name' => 'setUriDictionaryName',
        'http_methods' => 'setHttpMethods',
        'rps_limit' => 'setRpsLimit',
        'window_size' => 'setWindowSize',
        'client_key' => 'setClientKey',
        'penalty_box_duration' => 'setPenaltyBoxDuration',
        'action' => 'setAction',
        'response' => 'setResponse',
        'response_object_name' => 'setResponseObjectName',
        'logger_type' => 'setLoggerType',
        'feature_revision' => 'setFeatureRevision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'uri_dictionary_name' => 'getUriDictionaryName',
        'http_methods' => 'getHttpMethods',
        'rps_limit' => 'getRpsLimit',
        'window_size' => 'getWindowSize',
        'client_key' => 'getClientKey',
        'penalty_box_duration' => 'getPenaltyBoxDuration',
        'action' => 'getAction',
        'response' => 'getResponse',
        'response_object_name' => 'getResponseObjectName',
        'logger_type' => 'getLoggerType',
        'feature_revision' => 'getFeatureRevision'
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

    const HTTP_METHODS_HEAD = 'HEAD';
    const HTTP_METHODS_OPTIONS = 'OPTIONS';
    const HTTP_METHODS_GET = 'GET';
    const HTTP_METHODS_POST = 'POST';
    const HTTP_METHODS_PUT = 'PUT';
    const HTTP_METHODS_PATCH = 'PATCH';
    const HTTP_METHODS_DELETE = 'DELETE';
    const HTTP_METHODS_TRACE = 'TRACE';
    const WINDOW_SIZE_one_second = 1;
    const WINDOW_SIZE_ten_seconds = 10;
    const WINDOW_SIZE_one_minute = 60;
    const ACTION_RESPONSE = 'response';
    const ACTION_RESPONSE_OBJECT = 'response_object';
    const ACTION_LOG_ONLY = 'log_only';
    const LOGGER_TYPE_AZUREBLOB = 'azureblob';
    const LOGGER_TYPE_BIGQUERY = 'bigquery';
    const LOGGER_TYPE_CLOUDFILES = 'cloudfiles';
    const LOGGER_TYPE_DATADOG = 'datadog';
    const LOGGER_TYPE_DIGITALOCEAN = 'digitalocean';
    const LOGGER_TYPE_ELASTICSEARCH = 'elasticsearch';
    const LOGGER_TYPE_FTP = 'ftp';
    const LOGGER_TYPE_GCS = 'gcs';
    const LOGGER_TYPE_GOOGLEANALYTICS = 'googleanalytics';
    const LOGGER_TYPE_HEROKU = 'heroku';
    const LOGGER_TYPE_HONEYCOMB = 'honeycomb';
    const LOGGER_TYPE_HTTP = 'http';
    const LOGGER_TYPE_HTTPS = 'https';
    const LOGGER_TYPE_KAFKA = 'kafka';
    const LOGGER_TYPE_KINESIS = 'kinesis';
    const LOGGER_TYPE_LOGENTRIES = 'logentries';
    const LOGGER_TYPE_LOGGLY = 'loggly';
    const LOGGER_TYPE_LOGSHUTTLE = 'logshuttle';
    const LOGGER_TYPE_NEWRELIC = 'newrelic';
    const LOGGER_TYPE_NEWRELICOTLP = 'newrelicotlp';
    const LOGGER_TYPE_OPENSTACK = 'openstack';
    const LOGGER_TYPE_PAPERTRAIL = 'papertrail';
    const LOGGER_TYPE_PUBSUB = 'pubsub';
    const LOGGER_TYPE_S3 = 's3';
    const LOGGER_TYPE_SCALYR = 'scalyr';
    const LOGGER_TYPE_SFTP = 'sftp';
    const LOGGER_TYPE_SPLUNK = 'splunk';
    const LOGGER_TYPE_STACKDRIVER = 'stackdriver';
    const LOGGER_TYPE_SUMOLOGIC = 'sumologic';
    const LOGGER_TYPE_SYSLOG = 'syslog';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpMethodsAllowableValues()
    {
        return [
            self::HTTP_METHODS_HEAD,
            self::HTTP_METHODS_OPTIONS,
            self::HTTP_METHODS_GET,
            self::HTTP_METHODS_POST,
            self::HTTP_METHODS_PUT,
            self::HTTP_METHODS_PATCH,
            self::HTTP_METHODS_DELETE,
            self::HTTP_METHODS_TRACE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWindowSizeAllowableValues()
    {
        return [
            self::WINDOW_SIZE_one_second,
            self::WINDOW_SIZE_ten_seconds,
            self::WINDOW_SIZE_one_minute,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_RESPONSE,
            self::ACTION_RESPONSE_OBJECT,
            self::ACTION_LOG_ONLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLoggerTypeAllowableValues()
    {
        return [
            self::LOGGER_TYPE_AZUREBLOB,
            self::LOGGER_TYPE_BIGQUERY,
            self::LOGGER_TYPE_CLOUDFILES,
            self::LOGGER_TYPE_DATADOG,
            self::LOGGER_TYPE_DIGITALOCEAN,
            self::LOGGER_TYPE_ELASTICSEARCH,
            self::LOGGER_TYPE_FTP,
            self::LOGGER_TYPE_GCS,
            self::LOGGER_TYPE_GOOGLEANALYTICS,
            self::LOGGER_TYPE_HEROKU,
            self::LOGGER_TYPE_HONEYCOMB,
            self::LOGGER_TYPE_HTTP,
            self::LOGGER_TYPE_HTTPS,
            self::LOGGER_TYPE_KAFKA,
            self::LOGGER_TYPE_KINESIS,
            self::LOGGER_TYPE_LOGENTRIES,
            self::LOGGER_TYPE_LOGGLY,
            self::LOGGER_TYPE_LOGSHUTTLE,
            self::LOGGER_TYPE_NEWRELIC,
            self::LOGGER_TYPE_NEWRELICOTLP,
            self::LOGGER_TYPE_OPENSTACK,
            self::LOGGER_TYPE_PAPERTRAIL,
            self::LOGGER_TYPE_PUBSUB,
            self::LOGGER_TYPE_S3,
            self::LOGGER_TYPE_SCALYR,
            self::LOGGER_TYPE_SFTP,
            self::LOGGER_TYPE_SPLUNK,
            self::LOGGER_TYPE_STACKDRIVER,
            self::LOGGER_TYPE_SUMOLOGIC,
            self::LOGGER_TYPE_SYSLOG,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['uri_dictionary_name'] = $data['uri_dictionary_name'] ?? null;
        $this->container['http_methods'] = $data['http_methods'] ?? null;
        $this->container['rps_limit'] = $data['rps_limit'] ?? null;
        $this->container['window_size'] = $data['window_size'] ?? null;
        $this->container['client_key'] = $data['client_key'] ?? null;
        $this->container['penalty_box_duration'] = $data['penalty_box_duration'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['response'] = $data['response'] ?? null;
        $this->container['response_object_name'] = $data['response_object_name'] ?? null;
        $this->container['logger_type'] = $data['logger_type'] ?? null;
        $this->container['feature_revision'] = $data['feature_revision'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['uri_dictionary_name']) && (mb_strlen($this->container['uri_dictionary_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'uri_dictionary_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['uri_dictionary_name']) && (mb_strlen($this->container['uri_dictionary_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'uri_dictionary_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['http_methods']) && (count($this->container['http_methods']) < 1)) {
            $invalidProperties[] = "invalid value for 'http_methods', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['rps_limit']) && ($this->container['rps_limit'] > 10000)) {
            $invalidProperties[] = "invalid value for 'rps_limit', must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['rps_limit']) && ($this->container['rps_limit'] < 10)) {
            $invalidProperties[] = "invalid value for 'rps_limit', must be bigger than or equal to 10.";
        }

        $allowedValues = $this->getWindowSizeAllowableValues();
        if (!is_null($this->container['window_size']) && !in_array($this->container['window_size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'window_size', must be one of '%s'",
                $this->container['window_size'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['client_key']) && (count($this->container['client_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'client_key', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['penalty_box_duration']) && ($this->container['penalty_box_duration'] > 60)) {
            $invalidProperties[] = "invalid value for 'penalty_box_duration', must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['penalty_box_duration']) && ($this->container['penalty_box_duration'] < 1)) {
            $invalidProperties[] = "invalid value for 'penalty_box_duration', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
            $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['response_object_name']) && (mb_strlen($this->container['response_object_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'response_object_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['response_object_name']) && (mb_strlen($this->container['response_object_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'response_object_name', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getLoggerTypeAllowableValues();
        if (!is_null($this->container['logger_type']) && !in_array($this->container['logger_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'logger_type', must be one of '%s'",
                $this->container['logger_type'],
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
     * @param string|null $name A human readable name for the rate limiting rule.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RateLimiter., must be smaller than or equal to 255.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RateLimiter., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uri_dictionary_name
     *
     * @return string|null
     */
    public function getUriDictionaryName()
    {
        return $this->container['uri_dictionary_name'];
    }

    /**
     * Sets uri_dictionary_name
     *
     * @param string|null $uri_dictionary_name The name of an Edge Dictionary containing URIs as keys. If not defined or `null`, all origin URIs will be rate limited.
     *
     * @return self
     */
    public function setUriDictionaryName($uri_dictionary_name)
    {
        if (!is_null($uri_dictionary_name) && (mb_strlen($uri_dictionary_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $uri_dictionary_name when calling RateLimiter., must be smaller than or equal to 255.');
        }
        if (!is_null($uri_dictionary_name) && (mb_strlen($uri_dictionary_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uri_dictionary_name when calling RateLimiter., must be bigger than or equal to 1.');
        }

        $this->container['uri_dictionary_name'] = $uri_dictionary_name;

        return $this;
    }

    /**
     * Gets http_methods
     *
     * @return string[]|null
     */
    public function getHttpMethods()
    {
        return $this->container['http_methods'];
    }

    /**
     * Sets http_methods
     *
     * @param string[]|null $http_methods Array of HTTP methods to apply rate limiting to.
     *
     * @return self
     */
    public function setHttpMethods($http_methods)
    {
        $allowedValues = $this->getHttpMethodsAllowableValues();
        if (!is_null($http_methods) && array_diff($http_methods, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'http_methods', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if (!is_null($http_methods) && (count($http_methods) < 1)) {
            throw new \InvalidArgumentException('invalid length for $http_methods when calling RateLimiter., number of items must be greater than or equal to 1.');
        }
        $this->container['http_methods'] = $http_methods;

        return $this;
    }

    /**
     * Gets rps_limit
     *
     * @return int|null
     */
    public function getRpsLimit()
    {
        return $this->container['rps_limit'];
    }

    /**
     * Sets rps_limit
     *
     * @param int|null $rps_limit Upper limit of requests per second allowed by the rate limiter.
     *
     * @return self
     */
    public function setRpsLimit($rps_limit)
    {

        if (!is_null($rps_limit) && ($rps_limit > 10000)) {
            throw new \InvalidArgumentException('invalid value for $rps_limit when calling RateLimiter., must be smaller than or equal to 10000.');
        }
        if (!is_null($rps_limit) && ($rps_limit < 10)) {
            throw new \InvalidArgumentException('invalid value for $rps_limit when calling RateLimiter., must be bigger than or equal to 10.');
        }

        $this->container['rps_limit'] = $rps_limit;

        return $this;
    }

    /**
     * Gets window_size
     *
     * @return int|null
     */
    public function getWindowSize()
    {
        return $this->container['window_size'];
    }

    /**
     * Sets window_size
     *
     * @param int|null $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation.
     *
     * @return self
     */
    public function setWindowSize($window_size)
    {
        $allowedValues = $this->getWindowSizeAllowableValues();
        if (!is_null($window_size) && !in_array($window_size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'window_size', must be one of '%s'",
                    $window_size,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['window_size'] = $window_size;

        return $this;
    }

    /**
     * Gets client_key
     *
     * @return string[]|null
     */
    public function getClientKey()
    {
        return $this->container['client_key'];
    }

    /**
     * Sets client_key
     *
     * @param string[]|null $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include `req.http.Fastly-Client-IP`, `req.http.User-Agent`, or a custom header like `req.http.API-Key`.
     *
     * @return self
     */
    public function setClientKey($client_key)
    {


        if (!is_null($client_key) && (count($client_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client_key when calling RateLimiter., number of items must be greater than or equal to 1.');
        }
        $this->container['client_key'] = $client_key;

        return $this;
    }

    /**
     * Gets penalty_box_duration
     *
     * @return int|null
     */
    public function getPenaltyBoxDuration()
    {
        return $this->container['penalty_box_duration'];
    }

    /**
     * Sets penalty_box_duration
     *
     * @param int|null $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected.
     *
     * @return self
     */
    public function setPenaltyBoxDuration($penalty_box_duration)
    {

        if (!is_null($penalty_box_duration) && ($penalty_box_duration > 60)) {
            throw new \InvalidArgumentException('invalid value for $penalty_box_duration when calling RateLimiter., must be smaller than or equal to 60.');
        }
        if (!is_null($penalty_box_duration) && ($penalty_box_duration < 1)) {
            throw new \InvalidArgumentException('invalid value for $penalty_box_duration when calling RateLimiter., must be bigger than or equal to 1.');
        }

        $this->container['penalty_box_duration'] = $penalty_box_duration;

        return $this;
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
     * @param string|null $action The action to take when a rate limiter violation is detected.
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

        if (!is_null($action) && (mb_strlen($action) < 1)) {
            throw new \InvalidArgumentException('invalid length for $action when calling RateLimiter., must be bigger than or equal to 1.');
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets response
     *
     * @return array<string,string>|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param array<string,string>|null $response Custom response to be sent when the rate limit is exceeded. Required if `action` is `response`.
     *
     * @return self
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets response_object_name
     *
     * @return string|null
     */
    public function getResponseObjectName()
    {
        return $this->container['response_object_name'];
    }

    /**
     * Sets response_object_name
     *
     * @param string|null $response_object_name Name of existing response object. Required if `action` is `response_object`. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration.
     *
     * @return self
     */
    public function setResponseObjectName($response_object_name)
    {
        if (!is_null($response_object_name) && (mb_strlen($response_object_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $response_object_name when calling RateLimiter., must be smaller than or equal to 255.');
        }
        if (!is_null($response_object_name) && (mb_strlen($response_object_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $response_object_name when calling RateLimiter., must be bigger than or equal to 1.');
        }

        $this->container['response_object_name'] = $response_object_name;

        return $this;
    }

    /**
     * Gets logger_type
     *
     * @return string|null
     */
    public function getLoggerType()
    {
        return $this->container['logger_type'];
    }

    /**
     * Sets logger_type
     *
     * @param string|null $logger_type Name of the type of logging endpoint to be used when action is `log_only`. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries.
     *
     * @return self
     */
    public function setLoggerType($logger_type)
    {
        $allowedValues = $this->getLoggerTypeAllowableValues();
        if (!is_null($logger_type) && !in_array($logger_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'logger_type', must be one of '%s'",
                    $logger_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['logger_type'] = $logger_type;

        return $this;
    }

    /**
     * Gets feature_revision
     *
     * @return int|null
     */
    public function getFeatureRevision()
    {
        return $this->container['feature_revision'];
    }

    /**
     * Sets feature_revision
     *
     * @param int|null $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision.
     *
     * @return self
     */
    public function setFeatureRevision($feature_revision)
    {
        $this->container['feature_revision'] = $feature_revision;

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


