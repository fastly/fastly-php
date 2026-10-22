<?php
/**
 * NetworkProtectPrefixListFamily
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
 * NetworkProtectPrefixListFamily Class Doc Comment
 *
 * @category Class
 * @description The address family; it cannot change after creation.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class NetworkProtectPrefixListFamily
{
    /**
     * Possible values of this enum
     */
    const V4 = 'v4';

    const V6 = 'v6';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::V4,
            self::V6
        ];
    }
}


