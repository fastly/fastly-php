<?php
/**
 * Permission
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
 * Permission Class Doc Comment
 *
 * @category Class
 * @description The permission the user has in relation to the service.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class Permission
{
    /**
     * Possible values of this enum
     */
    const FULL = 'full';

    const READ_ONLY = 'read_only';

    const PURGE_SELECT = 'purge_select';

    const PURGE_ALL = 'purge_all';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FULL,
            self::READ_ONLY,
            self::PURGE_SELECT,
            self::PURGE_ALL
        ];
    }
}


