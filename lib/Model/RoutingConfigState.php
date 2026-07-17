<?php
/**
 * RoutingConfigState
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
 * RoutingConfigState Class Doc Comment
 *
 * @category Class
 * @description The current state of the routing config&#39;s versions.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class RoutingConfigState
{
    /**
     * Possible values of this enum
     */
    const state_draft_only = 'draft-only';

    const state_active = 'active';

    const state_active_with_draft = 'active-with-draft';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::state_draft_only,
            self::state_active,
            self::state_active_with_draft
        ];
    }
}


