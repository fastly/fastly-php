<?php
/**
 * ConditionOperator
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
 * ConditionOperator Class Doc Comment
 *
 * @category Class
 * @description The comparison operator used to evaluate the condition.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class ConditionOperator
{
    /**
     * Possible values of this enum
     */
    const condition_operator_equals = 'equals';

    const condition_operator_starts_with = 'starts_with';

    const condition_operator_ends_with = 'ends_with';

    const condition_operator_contains = 'contains';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::condition_operator_equals,
            self::condition_operator_starts_with,
            self::condition_operator_ends_with,
            self::condition_operator_contains
        ];
    }
}


