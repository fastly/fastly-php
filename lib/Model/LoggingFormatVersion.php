<?php
/**
 * LoggingFormatVersion
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
use \Fastly\ObjectSerializer;

/**
 * LoggingFormatVersion Class Doc Comment
 *
 * @category Class
 * @description The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingFormatVersion
{
    /**
     * Possible values of this enum
     */
    const NUMBER_v1 = 1;

    const NUMBER_v2 = 2;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_v1,
            self::NUMBER_v2
        ];
    }
}


