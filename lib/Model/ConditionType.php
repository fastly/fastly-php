<?php
/**
 * ConditionType
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
 * ConditionType Class Doc Comment
 *
 * @category Class
 * @description The type of condition.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class ConditionType
{
    /**
     * Possible values of this enum
     */
    const condition_type_header = 'header';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::condition_type_header
        ];
    }
}


