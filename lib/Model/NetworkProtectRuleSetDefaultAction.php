<?php
/**
 * NetworkProtectRuleSetDefaultAction
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
 * NetworkProtectRuleSetDefaultAction Class Doc Comment
 *
 * @category Class
 * @description Action when no rule matches.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class NetworkProtectRuleSetDefaultAction
{
    /**
     * Possible values of this enum
     */
    const ALLOW = 'allow';

    const BLOCK = 'block';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALLOW,
            self::BLOCK
        ];
    }
}


