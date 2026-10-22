<?php
/**
 * BotManagementProtectionMode
 *
 * PHP version 8.0
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
 * BotManagementProtectionMode Class Doc Comment
 *
 * @category Class
 * @description The protection mode of the workspace. &#x60;off&#x60; disables all enforcement. &#x60;log&#x60; detects and logs bots without blocking or challenging requests. &#x60;block&#x60; enforces the actions set on categories and bots.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class BotManagementProtectionMode
{
    /**
     * Possible values of this enum
     */
    const FALSE = 'false';

    const LOG = 'log';

    const BLOCK = 'block';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FALSE,
            self::LOG,
            self::BLOCK
        ];
    }
}


