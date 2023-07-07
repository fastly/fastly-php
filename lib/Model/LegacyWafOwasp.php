<?php
/**
 * LegacyWafOwasp
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
 * LegacyWafOwasp Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LegacyWafOwasp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'legacy_waf_owasp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'allowed_http_versions' => 'string',
        'allowed_methods' => 'string',
        'allowed_request_content_type' => 'string',
        'arg_length' => 'int',
        'arg_name_length' => 'int',
        'combined_file_sizes' => 'int',
        'created_at' => 'string',
        'critical_anomaly_score' => 'int',
        'crs_validate_utf8_encoding' => 'bool',
        'error_anomaly_score' => 'int',
        'high_risk_country_codes' => 'string',
        'http_violation_score_threshold' => 'int',
        'inbound_anomaly_score_threshold' => 'int',
        'lfi_score_threshold' => 'int',
        'max_file_size' => 'int',
        'max_num_args' => 'int',
        'notice_anomaly_score' => 'int',
        'paranoia_level' => 'int',
        'php_injection_score_threshold' => 'int',
        'rce_score_threshold' => 'int',
        'restricted_extensions' => 'string',
        'restricted_headers' => 'string',
        'rfi_score_threshold' => 'int',
        'session_fixation_score_threshold' => 'int',
        'sql_injection_score_threshold' => 'int',
        'total_arg_length' => 'int',
        'updated_at' => 'string',
        'warning_anomaly_score' => 'int',
        'xss_score_threshold' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'allowed_http_versions' => null,
        'allowed_methods' => null,
        'allowed_request_content_type' => null,
        'arg_length' => null,
        'arg_name_length' => null,
        'combined_file_sizes' => null,
        'created_at' => null,
        'critical_anomaly_score' => null,
        'crs_validate_utf8_encoding' => null,
        'error_anomaly_score' => null,
        'high_risk_country_codes' => null,
        'http_violation_score_threshold' => null,
        'inbound_anomaly_score_threshold' => null,
        'lfi_score_threshold' => null,
        'max_file_size' => null,
        'max_num_args' => null,
        'notice_anomaly_score' => null,
        'paranoia_level' => null,
        'php_injection_score_threshold' => null,
        'rce_score_threshold' => null,
        'restricted_extensions' => null,
        'restricted_headers' => null,
        'rfi_score_threshold' => null,
        'session_fixation_score_threshold' => null,
        'sql_injection_score_threshold' => null,
        'total_arg_length' => null,
        'updated_at' => null,
        'warning_anomaly_score' => null,
        'xss_score_threshold' => null
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
        'allowed_http_versions' => 'allowed_http_versions',
        'allowed_methods' => 'allowed_methods',
        'allowed_request_content_type' => 'allowed_request_content_type',
        'arg_length' => 'arg_length',
        'arg_name_length' => 'arg_name_length',
        'combined_file_sizes' => 'combined_file_sizes',
        'created_at' => 'created_at',
        'critical_anomaly_score' => 'critical_anomaly_score',
        'crs_validate_utf8_encoding' => 'crs_validate_utf8_encoding',
        'error_anomaly_score' => 'error_anomaly_score',
        'high_risk_country_codes' => 'high_risk_country_codes',
        'http_violation_score_threshold' => 'http_violation_score_threshold',
        'inbound_anomaly_score_threshold' => 'inbound_anomaly_score_threshold',
        'lfi_score_threshold' => 'lfi_score_threshold',
        'max_file_size' => 'max_file_size',
        'max_num_args' => 'max_num_args',
        'notice_anomaly_score' => 'notice_anomaly_score',
        'paranoia_level' => 'paranoia_level',
        'php_injection_score_threshold' => 'php_injection_score_threshold',
        'rce_score_threshold' => 'rce_score_threshold',
        'restricted_extensions' => 'restricted_extensions',
        'restricted_headers' => 'restricted_headers',
        'rfi_score_threshold' => 'rfi_score_threshold',
        'session_fixation_score_threshold' => 'session_fixation_score_threshold',
        'sql_injection_score_threshold' => 'sql_injection_score_threshold',
        'total_arg_length' => 'total_arg_length',
        'updated_at' => 'updated_at',
        'warning_anomaly_score' => 'warning_anomaly_score',
        'xss_score_threshold' => 'xss_score_threshold'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_http_versions' => 'setAllowedHttpVersions',
        'allowed_methods' => 'setAllowedMethods',
        'allowed_request_content_type' => 'setAllowedRequestContentType',
        'arg_length' => 'setArgLength',
        'arg_name_length' => 'setArgNameLength',
        'combined_file_sizes' => 'setCombinedFileSizes',
        'created_at' => 'setCreatedAt',
        'critical_anomaly_score' => 'setCriticalAnomalyScore',
        'crs_validate_utf8_encoding' => 'setCrsValidateUtf8Encoding',
        'error_anomaly_score' => 'setErrorAnomalyScore',
        'high_risk_country_codes' => 'setHighRiskCountryCodes',
        'http_violation_score_threshold' => 'setHttpViolationScoreThreshold',
        'inbound_anomaly_score_threshold' => 'setInboundAnomalyScoreThreshold',
        'lfi_score_threshold' => 'setLfiScoreThreshold',
        'max_file_size' => 'setMaxFileSize',
        'max_num_args' => 'setMaxNumArgs',
        'notice_anomaly_score' => 'setNoticeAnomalyScore',
        'paranoia_level' => 'setParanoiaLevel',
        'php_injection_score_threshold' => 'setPhpInjectionScoreThreshold',
        'rce_score_threshold' => 'setRceScoreThreshold',
        'restricted_extensions' => 'setRestrictedExtensions',
        'restricted_headers' => 'setRestrictedHeaders',
        'rfi_score_threshold' => 'setRfiScoreThreshold',
        'session_fixation_score_threshold' => 'setSessionFixationScoreThreshold',
        'sql_injection_score_threshold' => 'setSqlInjectionScoreThreshold',
        'total_arg_length' => 'setTotalArgLength',
        'updated_at' => 'setUpdatedAt',
        'warning_anomaly_score' => 'setWarningAnomalyScore',
        'xss_score_threshold' => 'setXssScoreThreshold'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_http_versions' => 'getAllowedHttpVersions',
        'allowed_methods' => 'getAllowedMethods',
        'allowed_request_content_type' => 'getAllowedRequestContentType',
        'arg_length' => 'getArgLength',
        'arg_name_length' => 'getArgNameLength',
        'combined_file_sizes' => 'getCombinedFileSizes',
        'created_at' => 'getCreatedAt',
        'critical_anomaly_score' => 'getCriticalAnomalyScore',
        'crs_validate_utf8_encoding' => 'getCrsValidateUtf8Encoding',
        'error_anomaly_score' => 'getErrorAnomalyScore',
        'high_risk_country_codes' => 'getHighRiskCountryCodes',
        'http_violation_score_threshold' => 'getHttpViolationScoreThreshold',
        'inbound_anomaly_score_threshold' => 'getInboundAnomalyScoreThreshold',
        'lfi_score_threshold' => 'getLfiScoreThreshold',
        'max_file_size' => 'getMaxFileSize',
        'max_num_args' => 'getMaxNumArgs',
        'notice_anomaly_score' => 'getNoticeAnomalyScore',
        'paranoia_level' => 'getParanoiaLevel',
        'php_injection_score_threshold' => 'getPhpInjectionScoreThreshold',
        'rce_score_threshold' => 'getRceScoreThreshold',
        'restricted_extensions' => 'getRestrictedExtensions',
        'restricted_headers' => 'getRestrictedHeaders',
        'rfi_score_threshold' => 'getRfiScoreThreshold',
        'session_fixation_score_threshold' => 'getSessionFixationScoreThreshold',
        'sql_injection_score_threshold' => 'getSqlInjectionScoreThreshold',
        'total_arg_length' => 'getTotalArgLength',
        'updated_at' => 'getUpdatedAt',
        'warning_anomaly_score' => 'getWarningAnomalyScore',
        'xss_score_threshold' => 'getXssScoreThreshold'
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
        $this->container['allowed_http_versions'] = $data['allowed_http_versions'] ?? 'HTTP/1.0 HTTP/1.1 HTTP/2';
        $this->container['allowed_methods'] = $data['allowed_methods'] ?? 'GET HEAD POST OPTIONS PUT PATCH DELETE';
        $this->container['allowed_request_content_type'] = $data['allowed_request_content_type'] ?? 'application/x-www-form-urlencoded|multipart/form-data|text/xml|application/xml|application/x-amf|application/json|text/plain';
        $this->container['arg_length'] = $data['arg_length'] ?? 400;
        $this->container['arg_name_length'] = $data['arg_name_length'] ?? 100;
        $this->container['combined_file_sizes'] = $data['combined_file_sizes'] ?? 10000000;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['critical_anomaly_score'] = $data['critical_anomaly_score'] ?? 6;
        $this->container['crs_validate_utf8_encoding'] = $data['crs_validate_utf8_encoding'] ?? null;
        $this->container['error_anomaly_score'] = $data['error_anomaly_score'] ?? 5;
        $this->container['high_risk_country_codes'] = $data['high_risk_country_codes'] ?? null;
        $this->container['http_violation_score_threshold'] = $data['http_violation_score_threshold'] ?? null;
        $this->container['inbound_anomaly_score_threshold'] = $data['inbound_anomaly_score_threshold'] ?? null;
        $this->container['lfi_score_threshold'] = $data['lfi_score_threshold'] ?? null;
        $this->container['max_file_size'] = $data['max_file_size'] ?? 10000000;
        $this->container['max_num_args'] = $data['max_num_args'] ?? 255;
        $this->container['notice_anomaly_score'] = $data['notice_anomaly_score'] ?? 4;
        $this->container['paranoia_level'] = $data['paranoia_level'] ?? 1;
        $this->container['php_injection_score_threshold'] = $data['php_injection_score_threshold'] ?? null;
        $this->container['rce_score_threshold'] = $data['rce_score_threshold'] ?? null;
        $this->container['restricted_extensions'] = $data['restricted_extensions'] ?? '.asa/ .asax/ .ascx/ .axd/ .backup/ .bak/ .bat/ .cdx/ .cer/ .cfg/ .cmd/ .com/ .config/ .conf/ .cs/ .csproj/ .csr/ .dat/ .db/ .dbf/ .dll/ .dos/ .htr/ .htw/ .ida/ .idc/ .idq/ .inc/ .ini/ .key/ .licx/ .lnk/ .log/ .mdb/ .old/ .pass/ .pdb/ .pol/ .printer/ .pwd/ .resources/ .resx/ .sql/ .sys/ .vb/ .vbs/ .vbproj/ .vsdisco/ .webinfo/ .xsd/ .xsx';
        $this->container['restricted_headers'] = $data['restricted_headers'] ?? '/proxy/ /lock-token/ /content-range/ /translate/ /if/';
        $this->container['rfi_score_threshold'] = $data['rfi_score_threshold'] ?? null;
        $this->container['session_fixation_score_threshold'] = $data['session_fixation_score_threshold'] ?? null;
        $this->container['sql_injection_score_threshold'] = $data['sql_injection_score_threshold'] ?? null;
        $this->container['total_arg_length'] = $data['total_arg_length'] ?? 6400;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['warning_anomaly_score'] = $data['warning_anomaly_score'] ?? null;
        $this->container['xss_score_threshold'] = $data['xss_score_threshold'] ?? null;
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
     * Gets allowed_http_versions
     *
     * @return string|null
     */
    public function getAllowedHttpVersions()
    {
        return $this->container['allowed_http_versions'];
    }

    /**
     * Sets allowed_http_versions
     *
     * @param string|null $allowed_http_versions Allowed HTTP versions.
     *
     * @return self
     */
    public function setAllowedHttpVersions($allowed_http_versions)
    {
        $this->container['allowed_http_versions'] = $allowed_http_versions;

        return $this;
    }

    /**
     * Gets allowed_methods
     *
     * @return string|null
     */
    public function getAllowedMethods()
    {
        return $this->container['allowed_methods'];
    }

    /**
     * Sets allowed_methods
     *
     * @param string|null $allowed_methods A space-separated list of HTTP method names.
     *
     * @return self
     */
    public function setAllowedMethods($allowed_methods)
    {
        $this->container['allowed_methods'] = $allowed_methods;

        return $this;
    }

    /**
     * Gets allowed_request_content_type
     *
     * @return string|null
     */
    public function getAllowedRequestContentType()
    {
        return $this->container['allowed_request_content_type'];
    }

    /**
     * Sets allowed_request_content_type
     *
     * @param string|null $allowed_request_content_type Allowed request content types.
     *
     * @return self
     */
    public function setAllowedRequestContentType($allowed_request_content_type)
    {
        $this->container['allowed_request_content_type'] = $allowed_request_content_type;

        return $this;
    }

    /**
     * Gets arg_length
     *
     * @return int|null
     */
    public function getArgLength()
    {
        return $this->container['arg_length'];
    }

    /**
     * Sets arg_length
     *
     * @param int|null $arg_length The maximum allowed length of an argument.
     *
     * @return self
     */
    public function setArgLength($arg_length)
    {
        $this->container['arg_length'] = $arg_length;

        return $this;
    }

    /**
     * Gets arg_name_length
     *
     * @return int|null
     */
    public function getArgNameLength()
    {
        return $this->container['arg_name_length'];
    }

    /**
     * Sets arg_name_length
     *
     * @param int|null $arg_name_length The maximum allowed argument name length.
     *
     * @return self
     */
    public function setArgNameLength($arg_name_length)
    {
        $this->container['arg_name_length'] = $arg_name_length;

        return $this;
    }

    /**
     * Gets combined_file_sizes
     *
     * @return int|null
     */
    public function getCombinedFileSizes()
    {
        return $this->container['combined_file_sizes'];
    }

    /**
     * Sets combined_file_sizes
     *
     * @param int|null $combined_file_sizes The maximum allowed size of all files (in bytes).
     *
     * @return self
     */
    public function setCombinedFileSizes($combined_file_sizes)
    {
        $this->container['combined_file_sizes'] = $combined_file_sizes;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Date and time that the settings object was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets critical_anomaly_score
     *
     * @return int|null
     */
    public function getCriticalAnomalyScore()
    {
        return $this->container['critical_anomaly_score'];
    }

    /**
     * Sets critical_anomaly_score
     *
     * @param int|null $critical_anomaly_score Score value to add for critical anomalies.
     *
     * @return self
     */
    public function setCriticalAnomalyScore($critical_anomaly_score)
    {
        $this->container['critical_anomaly_score'] = $critical_anomaly_score;

        return $this;
    }

    /**
     * Gets crs_validate_utf8_encoding
     *
     * @return bool|null
     */
    public function getCrsValidateUtf8Encoding()
    {
        return $this->container['crs_validate_utf8_encoding'];
    }

    /**
     * Sets crs_validate_utf8_encoding
     *
     * @param bool|null $crs_validate_utf8_encoding CRS validate UTF8 encoding.
     *
     * @return self
     */
    public function setCrsValidateUtf8Encoding($crs_validate_utf8_encoding)
    {
        $this->container['crs_validate_utf8_encoding'] = $crs_validate_utf8_encoding;

        return $this;
    }

    /**
     * Gets error_anomaly_score
     *
     * @return int|null
     */
    public function getErrorAnomalyScore()
    {
        return $this->container['error_anomaly_score'];
    }

    /**
     * Sets error_anomaly_score
     *
     * @param int|null $error_anomaly_score Score value to add for error anomalies.
     *
     * @return self
     */
    public function setErrorAnomalyScore($error_anomaly_score)
    {
        $this->container['error_anomaly_score'] = $error_anomaly_score;

        return $this;
    }

    /**
     * Gets high_risk_country_codes
     *
     * @return string|null
     */
    public function getHighRiskCountryCodes()
    {
        return $this->container['high_risk_country_codes'];
    }

    /**
     * Sets high_risk_country_codes
     *
     * @param string|null $high_risk_country_codes A space-separated list of country codes in ISO 3166-1 (two-letter) format.
     *
     * @return self
     */
    public function setHighRiskCountryCodes($high_risk_country_codes)
    {
        $this->container['high_risk_country_codes'] = $high_risk_country_codes;

        return $this;
    }

    /**
     * Gets http_violation_score_threshold
     *
     * @return int|null
     */
    public function getHttpViolationScoreThreshold()
    {
        return $this->container['http_violation_score_threshold'];
    }

    /**
     * Sets http_violation_score_threshold
     *
     * @param int|null $http_violation_score_threshold HTTP violation threshold.
     *
     * @return self
     */
    public function setHttpViolationScoreThreshold($http_violation_score_threshold)
    {
        $this->container['http_violation_score_threshold'] = $http_violation_score_threshold;

        return $this;
    }

    /**
     * Gets inbound_anomaly_score_threshold
     *
     * @return int|null
     */
    public function getInboundAnomalyScoreThreshold()
    {
        return $this->container['inbound_anomaly_score_threshold'];
    }

    /**
     * Sets inbound_anomaly_score_threshold
     *
     * @param int|null $inbound_anomaly_score_threshold Inbound anomaly threshold.
     *
     * @return self
     */
    public function setInboundAnomalyScoreThreshold($inbound_anomaly_score_threshold)
    {
        $this->container['inbound_anomaly_score_threshold'] = $inbound_anomaly_score_threshold;

        return $this;
    }

    /**
     * Gets lfi_score_threshold
     *
     * @return int|null
     */
    public function getLfiScoreThreshold()
    {
        return $this->container['lfi_score_threshold'];
    }

    /**
     * Sets lfi_score_threshold
     *
     * @param int|null $lfi_score_threshold Local file inclusion attack threshold.
     *
     * @return self
     */
    public function setLfiScoreThreshold($lfi_score_threshold)
    {
        $this->container['lfi_score_threshold'] = $lfi_score_threshold;

        return $this;
    }

    /**
     * Gets max_file_size
     *
     * @return int|null
     */
    public function getMaxFileSize()
    {
        return $this->container['max_file_size'];
    }

    /**
     * Sets max_file_size
     *
     * @param int|null $max_file_size The maximum allowed file size (in bytes).
     *
     * @return self
     */
    public function setMaxFileSize($max_file_size)
    {
        $this->container['max_file_size'] = $max_file_size;

        return $this;
    }

    /**
     * Gets max_num_args
     *
     * @return int|null
     */
    public function getMaxNumArgs()
    {
        return $this->container['max_num_args'];
    }

    /**
     * Sets max_num_args
     *
     * @param int|null $max_num_args The maximum number of arguments allowed.
     *
     * @return self
     */
    public function setMaxNumArgs($max_num_args)
    {
        $this->container['max_num_args'] = $max_num_args;

        return $this;
    }

    /**
     * Gets notice_anomaly_score
     *
     * @return int|null
     */
    public function getNoticeAnomalyScore()
    {
        return $this->container['notice_anomaly_score'];
    }

    /**
     * Sets notice_anomaly_score
     *
     * @param int|null $notice_anomaly_score Score value to add for notice anomalies.
     *
     * @return self
     */
    public function setNoticeAnomalyScore($notice_anomaly_score)
    {
        $this->container['notice_anomaly_score'] = $notice_anomaly_score;

        return $this;
    }

    /**
     * Gets paranoia_level
     *
     * @return int|null
     */
    public function getParanoiaLevel()
    {
        return $this->container['paranoia_level'];
    }

    /**
     * Sets paranoia_level
     *
     * @param int|null $paranoia_level The configured paranoia level.
     *
     * @return self
     */
    public function setParanoiaLevel($paranoia_level)
    {
        $this->container['paranoia_level'] = $paranoia_level;

        return $this;
    }

    /**
     * Gets php_injection_score_threshold
     *
     * @return int|null
     */
    public function getPhpInjectionScoreThreshold()
    {
        return $this->container['php_injection_score_threshold'];
    }

    /**
     * Sets php_injection_score_threshold
     *
     * @param int|null $php_injection_score_threshold PHP injection threshold.
     *
     * @return self
     */
    public function setPhpInjectionScoreThreshold($php_injection_score_threshold)
    {
        $this->container['php_injection_score_threshold'] = $php_injection_score_threshold;

        return $this;
    }

    /**
     * Gets rce_score_threshold
     *
     * @return int|null
     */
    public function getRceScoreThreshold()
    {
        return $this->container['rce_score_threshold'];
    }

    /**
     * Sets rce_score_threshold
     *
     * @param int|null $rce_score_threshold Remote code execution threshold.
     *
     * @return self
     */
    public function setRceScoreThreshold($rce_score_threshold)
    {
        $this->container['rce_score_threshold'] = $rce_score_threshold;

        return $this;
    }

    /**
     * Gets restricted_extensions
     *
     * @return string|null
     */
    public function getRestrictedExtensions()
    {
        return $this->container['restricted_extensions'];
    }

    /**
     * Sets restricted_extensions
     *
     * @param string|null $restricted_extensions A space-separated list of disallowed file extensions.
     *
     * @return self
     */
    public function setRestrictedExtensions($restricted_extensions)
    {
        $this->container['restricted_extensions'] = $restricted_extensions;

        return $this;
    }

    /**
     * Gets restricted_headers
     *
     * @return string|null
     */
    public function getRestrictedHeaders()
    {
        return $this->container['restricted_headers'];
    }

    /**
     * Sets restricted_headers
     *
     * @param string|null $restricted_headers A space-separated list of disallowed header names.
     *
     * @return self
     */
    public function setRestrictedHeaders($restricted_headers)
    {
        $this->container['restricted_headers'] = $restricted_headers;

        return $this;
    }

    /**
     * Gets rfi_score_threshold
     *
     * @return int|null
     */
    public function getRfiScoreThreshold()
    {
        return $this->container['rfi_score_threshold'];
    }

    /**
     * Sets rfi_score_threshold
     *
     * @param int|null $rfi_score_threshold Remote file inclusion attack threshold.
     *
     * @return self
     */
    public function setRfiScoreThreshold($rfi_score_threshold)
    {
        $this->container['rfi_score_threshold'] = $rfi_score_threshold;

        return $this;
    }

    /**
     * Gets session_fixation_score_threshold
     *
     * @return int|null
     */
    public function getSessionFixationScoreThreshold()
    {
        return $this->container['session_fixation_score_threshold'];
    }

    /**
     * Sets session_fixation_score_threshold
     *
     * @param int|null $session_fixation_score_threshold Session fixation attack threshold.
     *
     * @return self
     */
    public function setSessionFixationScoreThreshold($session_fixation_score_threshold)
    {
        $this->container['session_fixation_score_threshold'] = $session_fixation_score_threshold;

        return $this;
    }

    /**
     * Gets sql_injection_score_threshold
     *
     * @return int|null
     */
    public function getSqlInjectionScoreThreshold()
    {
        return $this->container['sql_injection_score_threshold'];
    }

    /**
     * Sets sql_injection_score_threshold
     *
     * @param int|null $sql_injection_score_threshold SQL injection attack threshold.
     *
     * @return self
     */
    public function setSqlInjectionScoreThreshold($sql_injection_score_threshold)
    {
        $this->container['sql_injection_score_threshold'] = $sql_injection_score_threshold;

        return $this;
    }

    /**
     * Gets total_arg_length
     *
     * @return int|null
     */
    public function getTotalArgLength()
    {
        return $this->container['total_arg_length'];
    }

    /**
     * Sets total_arg_length
     *
     * @param int|null $total_arg_length The maximum size of argument names and values.
     *
     * @return self
     */
    public function setTotalArgLength($total_arg_length)
    {
        $this->container['total_arg_length'] = $total_arg_length;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Date and time that the settings object was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets warning_anomaly_score
     *
     * @return int|null
     */
    public function getWarningAnomalyScore()
    {
        return $this->container['warning_anomaly_score'];
    }

    /**
     * Sets warning_anomaly_score
     *
     * @param int|null $warning_anomaly_score Score value to add for warning anomalies.
     *
     * @return self
     */
    public function setWarningAnomalyScore($warning_anomaly_score)
    {
        $this->container['warning_anomaly_score'] = $warning_anomaly_score;

        return $this;
    }

    /**
     * Gets xss_score_threshold
     *
     * @return int|null
     */
    public function getXssScoreThreshold()
    {
        return $this->container['xss_score_threshold'];
    }

    /**
     * Sets xss_score_threshold
     *
     * @param int|null $xss_score_threshold XSS attack threshold.
     *
     * @return self
     */
    public function setXssScoreThreshold($xss_score_threshold)
    {
        $this->container['xss_score_threshold'] = $xss_score_threshold;

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


