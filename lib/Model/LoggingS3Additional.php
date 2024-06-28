<?php
/**
 * LoggingS3Additional
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
 * LoggingS3Additional Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoggingS3Additional implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_s3_additional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
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
            throw new \InvalidArgumentException('invalid value for $file_max_bytes when calling LoggingS3Additional., must be bigger than or equal to 1048576.');
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


