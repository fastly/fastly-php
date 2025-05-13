<?php
/**
 * DdosProtectionAction
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
 * DdosProtectionAction Class Doc Comment
 *
 * @category Class
 * @description Action types for a rule.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class DdosProtectionAction
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'default';

    const BLOCK = 'block';

    const LOG = 'log';

    const DISABLED = 'disabled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::BLOCK,
            self::LOG,
            self::DISABLED
        ];
    }
}


