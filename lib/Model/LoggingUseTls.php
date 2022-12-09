<?php
/**
 * LoggingUseTls
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
 * LoggingUseTls Class Doc Comment
 *
 * @category Class
 * @description Whether to use TLS.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingUseTls
{
    /**
     * Possible values of this enum
     */
    const NUMBER_no_tls = 0;

    const NUMBER_use_tls = 1;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_no_tls,
            self::NUMBER_use_tls
        ];
    }
}


