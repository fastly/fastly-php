<?php
/**
 * ActionType
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
 * ActionType Class Doc Comment
 *
 * @category Class
 * @description The type of action to take when a rule matches.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class ActionType
{
    /**
     * Possible values of this enum
     */
    const action_type_service = 'service';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::action_type_service
        ];
    }
}


