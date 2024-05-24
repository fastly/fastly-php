<?php
/**
 * DefaultSettings
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
 * DefaultSettings Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DefaultSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'default_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'resize_filter' => 'string',
        'webp' => 'bool',
        'webp_quality' => 'int',
        'jpeg_type' => 'string',
        'jpeg_quality' => 'int',
        'upscale' => 'bool',
        'allow_video' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'resize_filter' => null,
        'webp' => null,
        'webp_quality' => null,
        'jpeg_type' => null,
        'jpeg_quality' => null,
        'upscale' => null,
        'allow_video' => null
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
        'resize_filter' => 'resize_filter',
        'webp' => 'webp',
        'webp_quality' => 'webp_quality',
        'jpeg_type' => 'jpeg_type',
        'jpeg_quality' => 'jpeg_quality',
        'upscale' => 'upscale',
        'allow_video' => 'allow_video'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resize_filter' => 'setResizeFilter',
        'webp' => 'setWebp',
        'webp_quality' => 'setWebpQuality',
        'jpeg_type' => 'setJpegType',
        'jpeg_quality' => 'setJpegQuality',
        'upscale' => 'setUpscale',
        'allow_video' => 'setAllowVideo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resize_filter' => 'getResizeFilter',
        'webp' => 'getWebp',
        'webp_quality' => 'getWebpQuality',
        'jpeg_type' => 'getJpegType',
        'jpeg_quality' => 'getJpegQuality',
        'upscale' => 'getUpscale',
        'allow_video' => 'getAllowVideo'
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

    const RESIZE_FILTER_LANCZOS3 = 'lanczos3';
    const RESIZE_FILTER_LANCZOS2 = 'lanczos2';
    const RESIZE_FILTER_BICUBIC = 'bicubic';
    const RESIZE_FILTER_BILINEAR = 'bilinear';
    const RESIZE_FILTER_NEAREST = 'nearest';
    const JPEG_TYPE_AUTO = 'auto';
    const JPEG_TYPE_BASELINE = 'baseline';
    const JPEG_TYPE_PROGRESSIVE = 'progressive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResizeFilterAllowableValues()
    {
        return [
            self::RESIZE_FILTER_LANCZOS3,
            self::RESIZE_FILTER_LANCZOS2,
            self::RESIZE_FILTER_BICUBIC,
            self::RESIZE_FILTER_BILINEAR,
            self::RESIZE_FILTER_NEAREST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJpegTypeAllowableValues()
    {
        return [
            self::JPEG_TYPE_AUTO,
            self::JPEG_TYPE_BASELINE,
            self::JPEG_TYPE_PROGRESSIVE,
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
        $this->container['resize_filter'] = $data['resize_filter'] ?? 'lanczos3';
        $this->container['webp'] = $data['webp'] ?? false;
        $this->container['webp_quality'] = $data['webp_quality'] ?? 85;
        $this->container['jpeg_type'] = $data['jpeg_type'] ?? 'auto';
        $this->container['jpeg_quality'] = $data['jpeg_quality'] ?? 85;
        $this->container['upscale'] = $data['upscale'] ?? false;
        $this->container['allow_video'] = $data['allow_video'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResizeFilterAllowableValues();
        if (!is_null($this->container['resize_filter']) && !in_array($this->container['resize_filter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resize_filter', must be one of '%s'",
                $this->container['resize_filter'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['webp_quality']) && ($this->container['webp_quality'] > 100)) {
            $invalidProperties[] = "invalid value for 'webp_quality', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['webp_quality']) && ($this->container['webp_quality'] < 1)) {
            $invalidProperties[] = "invalid value for 'webp_quality', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getJpegTypeAllowableValues();
        if (!is_null($this->container['jpeg_type']) && !in_array($this->container['jpeg_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'jpeg_type', must be one of '%s'",
                $this->container['jpeg_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['jpeg_quality']) && ($this->container['jpeg_quality'] > 100)) {
            $invalidProperties[] = "invalid value for 'jpeg_quality', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['jpeg_quality']) && ($this->container['jpeg_quality'] < 1)) {
            $invalidProperties[] = "invalid value for 'jpeg_quality', must be bigger than or equal to 1.";
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
     * Gets resize_filter
     *
     * @return string|null
     */
    public function getResizeFilter()
    {
        return $this->container['resize_filter'];
    }

    /**
     * Sets resize_filter
     *
     * @param string|null $resize_filter The type of filter to use while resizing an image.
     *
     * @return self
     */
    public function setResizeFilter($resize_filter)
    {
        $allowedValues = $this->getResizeFilterAllowableValues();
        if (!is_null($resize_filter) && !in_array($resize_filter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resize_filter', must be one of '%s'",
                    $resize_filter,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resize_filter'] = $resize_filter;

        return $this;
    }

    /**
     * Gets webp
     *
     * @return bool|null
     */
    public function getWebp()
    {
        return $this->container['webp'];
    }

    /**
     * Sets webp
     *
     * @param bool|null $webp Controls whether or not to default to WebP output when the client supports it. This is equivalent to adding \"auto=webp\" to all image optimizer requests.
     *
     * @return self
     */
    public function setWebp($webp)
    {
        $this->container['webp'] = $webp;

        return $this;
    }

    /**
     * Gets webp_quality
     *
     * @return int|null
     */
    public function getWebpQuality()
    {
        return $this->container['webp_quality'];
    }

    /**
     * Sets webp_quality
     *
     * @param int|null $webp_quality The default quality to use with WebP output. This can be overridden with the second option in the \"quality\" URL parameter on specific image optimizer requests.
     *
     * @return self
     */
    public function setWebpQuality($webp_quality)
    {

        if (!is_null($webp_quality) && ($webp_quality > 100)) {
            throw new \InvalidArgumentException('invalid value for $webp_quality when calling DefaultSettings., must be smaller than or equal to 100.');
        }
        if (!is_null($webp_quality) && ($webp_quality < 1)) {
            throw new \InvalidArgumentException('invalid value for $webp_quality when calling DefaultSettings., must be bigger than or equal to 1.');
        }

        $this->container['webp_quality'] = $webp_quality;

        return $this;
    }

    /**
     * Gets jpeg_type
     *
     * @return string|null
     */
    public function getJpegType()
    {
        return $this->container['jpeg_type'];
    }

    /**
     * Sets jpeg_type
     *
     * @param string|null $jpeg_type The default type of JPEG output to use. This can be overridden with \"format=bjpeg\" and \"format=pjpeg\" on specific image optimizer requests.
     *
     * @return self
     */
    public function setJpegType($jpeg_type)
    {
        $allowedValues = $this->getJpegTypeAllowableValues();
        if (!is_null($jpeg_type) && !in_array($jpeg_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'jpeg_type', must be one of '%s'",
                    $jpeg_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['jpeg_type'] = $jpeg_type;

        return $this;
    }

    /**
     * Gets jpeg_quality
     *
     * @return int|null
     */
    public function getJpegQuality()
    {
        return $this->container['jpeg_quality'];
    }

    /**
     * Sets jpeg_quality
     *
     * @param int|null $jpeg_quality The default quality to use with JPEG output. This can be overridden with the \"quality\" parameter on specific image optimizer requests.
     *
     * @return self
     */
    public function setJpegQuality($jpeg_quality)
    {

        if (!is_null($jpeg_quality) && ($jpeg_quality > 100)) {
            throw new \InvalidArgumentException('invalid value for $jpeg_quality when calling DefaultSettings., must be smaller than or equal to 100.');
        }
        if (!is_null($jpeg_quality) && ($jpeg_quality < 1)) {
            throw new \InvalidArgumentException('invalid value for $jpeg_quality when calling DefaultSettings., must be bigger than or equal to 1.');
        }

        $this->container['jpeg_quality'] = $jpeg_quality;

        return $this;
    }

    /**
     * Gets upscale
     *
     * @return bool|null
     */
    public function getUpscale()
    {
        return $this->container['upscale'];
    }

    /**
     * Sets upscale
     *
     * @param bool|null $upscale Whether or not we should allow output images to render at sizes larger than input.
     *
     * @return self
     */
    public function setUpscale($upscale)
    {
        $this->container['upscale'] = $upscale;

        return $this;
    }

    /**
     * Gets allow_video
     *
     * @return bool|null
     */
    public function getAllowVideo()
    {
        return $this->container['allow_video'];
    }

    /**
     * Sets allow_video
     *
     * @param bool|null $allow_video Enables GIF to MP4 transformations on this service.
     *
     * @return self
     */
    public function setAllowVideo($allow_video)
    {
        $this->container['allow_video'] = $allow_video;

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


