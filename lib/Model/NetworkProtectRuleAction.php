<?php
/**
 * NetworkProtectRuleAction
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
 * NetworkProtectRuleAction Class Doc Comment
 *
 * @category Class
 * @description Action for traffic matching this rule.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class NetworkProtectRuleAction
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


