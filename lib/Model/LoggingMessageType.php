<?php
/**
 * LoggingMessageType
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
 * LoggingMessageType Class Doc Comment
 *
 * @category Class
 * @description How the message should be formatted.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingMessageType
{
    /**
     * Possible values of this enum
     */
    const CLASSIC = 'classic';

    const LOGGLY = 'loggly';

    const LOGPLEX = 'logplex';

    const BLANK = 'blank';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLASSIC,
            self::LOGGLY,
            self::LOGPLEX,
            self::BLANK
        ];
    }
}


