<?php
/**
 * LoggingS3Response
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
 * LoggingS3Response Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingS3Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_s3_response';

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
        'acl' => 'string',
        'bucket_name' => 'string',
        'domain' => 'string',
        'iam_role' => 'string',
        'path' => 'string',
        'public_key' => 'string',
        'redundancy' => 'string',
        'secret_key' => 'string',
        'server_side_encryption_kms_key_id' => 'string',
        'server_side_encryption' => 'string',
        'file_max_bytes' => 'int'
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
        'acl' => null,
        'bucket_name' => null,
        'domain' => null,
        'iam_role' => null,
        'path' => null,
        'public_key' => null,
        'redundancy' => null,
        'secret_key' => null,
        'server_side_encryption_kms_key_id' => null,
        'server_side_encryption' => null,
        'file_max_bytes' => null
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
        'acl' => 'acl',
        'bucket_name' => 'bucket_name',
        'domain' => 'domain',
        'iam_role' => 'iam_role',
        'path' => 'path',
        'public_key' => 'public_key',
        'redundancy' => 'redundancy',
        'secret_key' => 'secret_key',
        'server_side_encryption_kms_key_id' => 'server_side_encryption_kms_key_id',
        'server_side_encryption' => 'server_side_encryption',
        'file_max_bytes' => 'file_max_bytes'
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
        'acl' => 'setAcl',
        'bucket_name' => 'setBucketName',
        'domain' => 'setDomain',
        'iam_role' => 'setIamRole',
        'path' => 'setPath',
        'public_key' => 'setPublicKey',
        'redundancy' => 'setRedundancy',
        'secret_key' => 'setSecretKey',
        'server_side_encryption_kms_key_id' => 'setServerSideEncryptionKmsKeyId',
        'server_side_encryption' => 'setServerSideEncryption',
        'file_max_bytes' => 'setFileMaxBytes'
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
        'acl' => 'getAcl',
        'bucket_name' => 'getBucketName',
        'domain' => 'getDomain',
        'iam_role' => 'getIamRole',
        'path' => 'getPath',
        'public_key' => 'getPublicKey',
        'redundancy' => 'getRedundancy',
        'secret_key' => 'getSecretKey',
        'server_side_encryption_kms_key_id' => 'getServerSideEncryptionKmsKeyId',
        'server_side_encryption' => 'getServerSideEncryption',
        'file_max_bytes' => 'getFileMaxBytes'
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
    const PLACEMENT_WAF_DEBUG = 'waf_debug';
    const PLACEMENT_NULL = 'null';
    const FORMAT_VERSION_v1 = '1';
    const FORMAT_VERSION_v2 = '2';
    const MESSAGE_TYPE_CLASSIC = 'classic';
    const MESSAGE_TYPE_LOGGLY = 'loggly';
    const MESSAGE_TYPE_LOGPLEX = 'logplex';
    const MESSAGE_TYPE_BLANK = 'blank';
    const COMPRESSION_CODEC_ZSTD = 'zstd';
    const COMPRESSION_CODEC_SNAPPY = 'snappy';
    const COMPRESSION_CODEC_GZIP = 'gzip';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlacementAllowableValues()
    {
        return [
            self::PLACEMENT_NONE,
            self::PLACEMENT_WAF_DEBUG,
            self::PLACEMENT_NULL,
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
        $this->container['acl'] = $data['acl'] ?? null;
        $this->container['bucket_name'] = $data['bucket_name'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['iam_role'] = $data['iam_role'] ?? null;
        $this->container['path'] = $data['path'] ?? 'null';
        $this->container['public_key'] = $data['public_key'] ?? 'null';
        $this->container['redundancy'] = $data['redundancy'] ?? 'null';
        $this->container['secret_key'] = $data['secret_key'] ?? null;
        $this->container['server_side_encryption_kms_key_id'] = $data['server_side_encryption_kms_key_id'] ?? 'null';
        $this->container['server_side_encryption'] = $data['server_side_encryption'] ?? 'null';
        $this->container['file_max_bytes'] = $data['file_max_bytes'] ?? null;
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

        if (!is_null($this->container['file_max_bytes']) && ($this->container['file_max_bytes'] < 1048576)) {
            $invalidProperties[] = "invalid value for 'file_max_bytes', must be bigger than or equal to 1048576.";
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
     * @param string|null $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats).
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

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
     * @param string|null $access_key The access key for your S3 account. Not required if `iam_role` is provided.
     *
     * @return self
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets acl
     *
     * @return string|null
     */
    public function getAcl()
    {
        return $this->container['acl'];
    }

    /**
     * Sets acl
     *
     * @param string|null $acl The access control list (ACL) specific request header. See the AWS documentation for [Access Control List (ACL) Specific Request Headers](https://docs.aws.amazon.com/AmazonS3/latest/API/mpUploadInitiate.html#initiate-mpu-acl-specific-request-headers) for more information.
     *
     * @return self
     */
    public function setAcl($acl)
    {
        $this->container['acl'] = $acl;

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
     * @param string|null $bucket_name The bucket name for S3 account.
     *
     * @return self
     */
    public function setBucketName($bucket_name)
    {
        $this->container['bucket_name'] = $bucket_name;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain The domain of the Amazon S3 endpoint.
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets iam_role
     *
     * @return string|null
     */
    public function getIamRole()
    {
        return $this->container['iam_role'];
    }

    /**
     * Sets iam_role
     *
     * @param string|null $iam_role The Amazon Resource Name (ARN) for the IAM role granting Fastly access to S3. Not required if `access_key` and `secret_key` are provided.
     *
     * @return self
     */
    public function setIamRole($iam_role)
    {
        $this->container['iam_role'] = $iam_role;

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
     * Gets redundancy
     *
     * @return string|null
     */
    public function getRedundancy()
    {
        return $this->container['redundancy'];
    }

    /**
     * Sets redundancy
     *
     * @param string|null $redundancy The S3 redundancy level.
     *
     * @return self
     */
    public function setRedundancy($redundancy)
    {
        $this->container['redundancy'] = $redundancy;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string|null
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string|null $secret_key The secret key for your S3 account. Not required if `iam_role` is provided.
     *
     * @return self
     */
    public function setSecretKey($secret_key)
    {
        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets server_side_encryption_kms_key_id
     *
     * @return string|null
     */
    public function getServerSideEncryptionKmsKeyId()
    {
        return $this->container['server_side_encryption_kms_key_id'];
    }

    /**
     * Sets server_side_encryption_kms_key_id
     *
     * @param string|null $server_side_encryption_kms_key_id Optional server-side KMS Key Id. Must be set if `server_side_encryption` is set to `aws:kms` or `AES256`.
     *
     * @return self
     */
    public function setServerSideEncryptionKmsKeyId($server_side_encryption_kms_key_id)
    {
        $this->container['server_side_encryption_kms_key_id'] = $server_side_encryption_kms_key_id;

        return $this;
    }

    /**
     * Gets server_side_encryption
     *
     * @return string|null
     */
    public function getServerSideEncryption()
    {
        return $this->container['server_side_encryption'];
    }

    /**
     * Sets server_side_encryption
     *
     * @param string|null $server_side_encryption Set this to `AES256` or `aws:kms` to enable S3 Server Side Encryption.
     *
     * @return self
     */
    public function setServerSideEncryption($server_side_encryption)
    {
        $this->container['server_side_encryption'] = $server_side_encryption;

        return $this;
    }

    /**
     * Gets file_max_bytes
     *
     * @return int|null
     */
    public function getFileMaxBytes()
    {
        return $this->container['file_max_bytes'];
    }

    /**
     * Sets file_max_bytes
     *
     * @param int|null $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB.)
     *
     * @return self
     */
    public function setFileMaxBytes($file_max_bytes)
    {

        if (!is_null($file_max_bytes) && ($file_max_bytes < 1048576)) {
            throw new \InvalidArgumentException('invalid value for $file_max_bytes when calling LoggingS3Response., must be bigger than or equal to 1048576.');
        }

        $this->container['file_max_bytes'] = $file_max_bytes;

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


