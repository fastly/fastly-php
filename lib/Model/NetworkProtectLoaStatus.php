<?php
/**
 * NetworkProtectLoaStatus
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
 * NetworkProtectLoaStatus Class Doc Comment
 *
 * @category Class
 * @description Fastly operator status for the Letter of Authorization. A status of &#x60;pending&#x60; means review is incomplete; &#x60;approved&#x60; means operators accepted it; and &#x60;rejected&#x60; means they declined it. An approved LOA alone does not make a network ready for advertisement.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class NetworkProtectLoaStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'pending';

    const APPROVED = 'approved';

    const REJECTED = 'rejected';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::APPROVED,
            self::REJECTED
        ];
    }
}


