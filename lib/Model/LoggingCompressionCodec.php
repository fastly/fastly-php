<?php
/**
 * LoggingCompressionCodec
 *
 * PHP version 7.2
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
use \Fastly\ObjectSerializer;

/**
 * LoggingCompressionCodec Class Doc Comment
 *
 * @category Class
 * @description The codec used for compression of your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. If the specified codec is \&quot;gzip\&quot;, &#x60;gzip_level&#x60; will default to 3. To specify a different level, leave &#x60;compression_codec&#x60; blank and explicitly set the level using &#x60;gzip_level&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingCompressionCodec
{
    /**
     * Possible values of this enum
     */
    const ZSTD = 'zstd';
    const SNAPPY = 'snappy';
    const GZIP = 'gzip';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ZSTD,
            self::SNAPPY,
            self::GZIP,
        ];
    }
}


