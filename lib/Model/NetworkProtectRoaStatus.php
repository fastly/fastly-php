<?php
/**
 * NetworkProtectRoaStatus
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
 * NetworkProtectRoaStatus Class Doc Comment
 *
 * @category Class
 * @description Whether a Route Origin Authorization permits Fastly to announce this prefix. Fastly refreshes this on a schedule; reading a network never triggers a check, so this can be older than the moment you read it. A status of &#x60;pending&#x60; means no check has completed; &#x60;valid&#x60; authorizes Fastly at this prefix length; &#x60;invalid&#x60; means a covering ROA does not authorize Fastly; and &#x60;not_found&#x60; means no ROA covers the prefix. The controller may omit an unrecognized status, and omission is not an authorization result. A valid ROA alone does not make a network ready for advertisement.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class NetworkProtectRoaStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'pending';

    const VALID = 'valid';

    const INVALID = 'invalid';

    const NOT_FOUND = 'not_found';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::VALID,
            self::INVALID,
            self::NOT_FOUND
        ];
    }
}


