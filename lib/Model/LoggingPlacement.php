<?php
/**
 * LoggingPlacement
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
 * LoggingPlacement Class Doc Comment
 *
 * @category Class
 * @description Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingPlacement
{
    /**
     * Possible values of this enum
     */
    const NONE = 'none';

    const WAF_DEBUG = 'waf_debug';

    const NULL = 'null';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::WAF_DEBUG,
            self::NULL
        ];
    }
}


