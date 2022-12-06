<?php
/**
 * RoleUser
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
 * RoleUser Class Doc Comment
 *
 * @category Class
 * @description The permissions role assigned to the user. Can be &#x60;user&#x60;, &#x60;billing&#x60;, &#x60;engineer&#x60;, or &#x60;superuser&#x60;.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class RoleUser
{
    /**
     * Possible values of this enum
     */
    const USER = 'user';

    const BILLING = 'billing';

    const ENGINEER = 'engineer';

    const SUPERUSER = 'superuser';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USER,
            self::BILLING,
            self::ENGINEER,
            self::SUPERUSER
        ];
    }
}


