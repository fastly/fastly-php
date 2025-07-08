<?php
/**
 * LoggingCloudfilesResponse
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
 * LoggingCloudfilesResponse Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingCloudfilesResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_cloudfiles_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'name' => 'string',
        'placement' => 'string',
        'response_condition' => 'string',
        'format' => 'string',
        'log_processing_region' => 'string',
        'format_version' => 'string',
        'message_type' => 'string',
        'timestamp_format' => 'string',
        'compression_codec' => 'string',
        'period' => 'string',
        'gzip_level' => 'string',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'service_id' => 'string',
        'version' => 'string',
        'access_key' => 'string',
        'bucket_name' => 'string',
        'path' => 'string',
        'region' => 'string',
        'public_key' => 'string',
        'user' => 'string'
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
        'placement' => null,
        'response_condition' => null,
        'format' => null,
        'log_processing_region' => null,
        'format_version' => null,
        'message_type' => null,
        'timestamp_format' => null,
        'compression_codec' => null,
        'period' => null,
        'gzip_level' => null,
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time',
        'service_id' => null,
        'version' => null,
        'access_key' => null,
        'bucket_name' => null,
        'path' => null,
        'region' => null,
        'public_key' => null,
        'user' => null
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
        'placement' => 'placement',
        'response_condition' => 'response_condition',
        'format' => 'format',
        'log_processing_region' => 'log_processing_region',
        'format_version' => 'format_version',
        'message_type' => 'message_type',
        'timestamp_format' => 'timestamp_format',
        'compression_codec' => 'compression_codec',
        'period' => 'period',
        'gzip_level' => 'gzip_level',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at',
        'service_id' => 'service_id',
        'version' => 'version',
        'access_key' => 'access_key',
        'bucket_name' => 'bucket_name',
        'path' => 'path',
        'region' => 'region',
        'public_key' => 'public_key',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'placement' => 'setPlacement',
        'response_condition' => 'setResponseCondition',
        'format' => 'setFormat',
        'log_processing_region' => 'setLogProcessingRegion',
        'format_version' => 'setFormatVersion',
        'message_type' => 'setMessageType',
        'timestamp_format' => 'setTimestampFormat',
        'compression_codec' => 'setCompressionCodec',
        'period' => 'setPeriod',
        'gzip_level' => 'setGzipLevel',
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt',
        'service_id' => 'setServiceId',
        'version' => 'setVersion',
        'access_key' => 'setAccessKey',
        'bucket_name' => 'setBucketName',
        'path' => 'setPath',
        'region' => 'setRegion',
        'public_key' => 'setPublicKey',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'placement' => 'getPlacement',
        'response_condition' => 'getResponseCondition',
        'format' => 'getFormat',
        'log_processing_region' => 'getLogProcessingRegion',
        'format_version' => 'getFormatVersion',
        'message_type' => 'getMessageType',
        'timestamp_format' => 'getTimestampFormat',
        'compression_codec' => 'getCompressionCodec',
        'period' => 'getPeriod',
        'gzip_level' => 'getGzipLevel',
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt',
        'service_id' => 'getServiceId',
        'version' => 'getVersion',
        'access_key' => 'getAccessKey',
        'bucket_name' => 'getBucketName',
        'path' => 'getPath',
        'region' => 'getRegion',
        'public_key' => 'getPublicKey',
        'user' => 'getUser'
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

    const PLACEMENT_NONE = 'none';
    const PLACEMENT_NULL = 'null';
    const LOG_PROCESSING_REGION_NONE = 'none';
    const LOG_PROCESSING_REGION_EU = 'eu';
    const LOG_PROCESSING_REGION_US = 'us';
    const FORMAT_VERSION_v1 = '1';
    const FORMAT_VERSION_v2 = '2';
    const MESSAGE_TYPE_CLASSIC = 'classic';
    const MESSAGE_TYPE_LOGGLY = 'loggly';
    const MESSAGE_TYPE_LOGPLEX = 'logplex';
    const MESSAGE_TYPE_BLANK = 'blank';
    const COMPRESSION_CODEC_ZSTD = 'zstd';
    const COMPRESSION_CODEC_SNAPPY = 'snappy';
    const COMPRESSION_CODEC_GZIP = 'gzip';
    const REGION_DFW = 'DFW';
    const REGION_ORD = 'ORD';
    const REGION_IAD = 'IAD';
    const REGION_LON = 'LON';
    const REGION_SYD = 'SYD';
    const REGION_HKG = 'HKG';
    const REGION_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlacementAllowableValues()
    {
        return [
            self::PLACEMENT_NONE,
            self::PLACEMENT_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogProcessingRegionAllowableValues()
    {
        return [
            self::LOG_PROCESSING_REGION_NONE,
            self::LOG_PROCESSING_REGION_EU,
            self::LOG_PROCESSING_REGION_US,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatVersionAllowableValues()
    {
        return [
            self::FORMAT_VERSION_v1,
            self::FORMAT_VERSION_v2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_CLASSIC,
            self::MESSAGE_TYPE_LOGGLY,
            self::MESSAGE_TYPE_LOGPLEX,
            self::MESSAGE_TYPE_BLANK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionCodecAllowableValues()
    {
        return [
            self::COMPRESSION_CODEC_ZSTD,
            self::COMPRESSION_CODEC_SNAPPY,
            self::COMPRESSION_CODEC_GZIP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_DFW,
            self::REGION_ORD,
            self::REGION_IAD,
            self::REGION_LON,
            self::REGION_SYD,
            self::REGION_HKG,
            self::REGION_NULL,
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
        $this->container['placement'] = $data['placement'] ?? null;
        $this->container['response_condition'] = $data['response_condition'] ?? null;
        $this->container['format'] = $data['format'] ?? '%h %l %u %t "%r" %&gt;s %b';
        $this->container['log_processing_region'] = $data['log_processing_region'] ?? 'none';
        $this->container['format_version'] = $data['format_version'] ?? '2';
        $this->container['message_type'] = $data['message_type'] ?? 'classic';
        $this->container['timestamp_format'] = $data['timestamp_format'] ?? null;
        $this->container['compression_codec'] = $data['compression_codec'] ?? null;
        $this->container['period'] = $data['period'] ?? '3600';
        $this->container['gzip_level'] = $data['gzip_level'] ?? '0';
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['access_key'] = $data['access_key'] ?? null;
        $this->container['bucket_name'] = $data['bucket_name'] ?? null;
        $this->container['path'] = $data['path'] ?? 'null';
        $this->container['region'] = $data['region'] ?? null;
        $this->container['public_key'] = $data['public_key'] ?? 'null';
        $this->container['user'] = $data['user'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPlacementAllowableValues();
        if (!is_null($this->container['placement']) && !in_array($this->container['placement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'placement', must be one of '%s'",
                $this->container['placement'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLogProcessingRegionAllowableValues();
        if (!is_null($this->container['log_processing_region']) && !in_array($this->container['log_processing_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'log_processing_region', must be one of '%s'",
                $this->container['log_processing_region'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatVersionAllowableValues();
        if (!is_null($this->container['format_version']) && !in_array($this->container['format_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format_version', must be one of '%s'",
                $this->container['format_version'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($this->container['message_type']) && !in_array($this->container['message_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'message_type', must be one of '%s'",
                $this->container['message_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCompressionCodecAllowableValues();
        if (!is_null($this->container['compression_codec']) && !in_array($this->container['compression_codec'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'compression_codec', must be one of '%s'",
                $this->container['compression_codec'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'region', must be one of '%s'",
                $this->container['region'],
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
     * @param string|null $name The name for the real-time logging configuration.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets placement
     *
     * @return string|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param string|null $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        $allowedValues = $this->getPlacementAllowableValues();
        if (!is_null($placement) && !in_array($placement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'placement', must be one of '%s'",
                    $placement,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['placement'] = $placement;

        return $this;
    }

    /**
     * Gets response_condition
     *
     * @return string|null
     */
    public function getResponseCondition()
    {
        return $this->container['response_condition'];
    }

    /**
     * Sets response_condition
     *
     * @param string|null $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute.
     *
     * @return self
     */
    public function setResponseCondition($response_condition)
    {
        $this->container['response_condition'] = $response_condition;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/).
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets log_processing_region
     *
     * @return string|null
     */
    public function getLogProcessingRegion()
    {
        return $this->container['log_processing_region'];
    }

    /**
     * Sets log_processing_region
     *
     * @param string|null $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
     *
     * @return self
     */
    public function setLogProcessingRegion($log_processing_region)
    {
        $allowedValues = $this->getLogProcessingRegionAllowableValues();
        if (!is_null($log_processing_region) && !in_array($log_processing_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'log_processing_region', must be one of '%s'",
                    $log_processing_region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['log_processing_region'] = $log_processing_region;

        return $this;
    }

    /**
     * Gets format_version
     *
     * @return string|null
     */
    public function getFormatVersion()
    {
        return $this->container['format_version'];
    }

    /**
     * Sets format_version
     *
     * @param string|null $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
     *
     * @return self
     */
    public function setFormatVersion($format_version)
    {
        $allowedValues = $this->getFormatVersionAllowableValues();
        if (!is_null($format_version) && !in_array($format_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format_version', must be one of '%s'",
                    $format_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format_version'] = $format_version;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param string|null $message_type How the message should be formatted.
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($message_type) && !in_array($message_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'message_type', must be one of '%s'",
                    $message_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets timestamp_format
     *
     * @return string|null
     */
    public function getTimestampFormat()
    {
        return $this->container['timestamp_format'];
    }

    /**
     * Sets timestamp_format
     *
     * @param string|null $timestamp_format A timestamp format
     *
     * @return self
     */
    public function setTimestampFormat($timestamp_format)
    {
        $this->container['timestamp_format'] = $timestamp_format;

        return $this;
    }

    /**
     * Gets compression_codec
     *
     * @return string|null
     */
    public function getCompressionCodec()
    {
        return $this->container['compression_codec'];
    }

    /**
     * Sets compression_codec
     *
     * @param string|null $compression_codec The codec used for compressing your logs. Valid values are `zstd`, `snappy`, and `gzip`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
     *
     * @return self
     */
    public function setCompressionCodec($compression_codec)
    {
        $allowedValues = $this->getCompressionCodecAllowableValues();
        if (!is_null($compression_codec) && !in_array($compression_codec, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'compression_codec', must be one of '%s'",
                    $compression_codec,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compression_codec'] = $compression_codec;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period How frequently log files are finalized so they can be available for reading (in seconds).
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets gzip_level
     *
     * @return string|null
     */
    public function getGzipLevel()
    {
        return $this->container['gzip_level'];
    }

    /**
     * Sets gzip_level
     *
     * @param string|null $gzip_level The level of gzip encoding when sending logs (default `0`, no compression). Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error.
     *
     * @return self
     */
    public function setGzipLevel($gzip_level)
    {
        $this->container['gzip_level'] = $gzip_level;

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
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string|null
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string|null $access_key Your Cloud Files account access key.
     *
     * @return self
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets bucket_name
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->container['bucket_name'];
    }

    /**
     * Sets bucket_name
     *
     * @param string|null $bucket_name The name of your Cloud Files container.
     *
     * @return self
     */
    public function setBucketName($bucket_name)
    {
        $this->container['bucket_name'] = $bucket_name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path The path to upload logs to.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region The region to stream logs to.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($region) && !in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'region', must be one of '%s'",
                    $region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk.
     *
     * @return self
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user The username for your Cloud Files account.
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


