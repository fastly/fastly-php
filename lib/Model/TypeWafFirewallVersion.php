<?php
/**
 * TypeWafFirewallVersion
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
 * TypeWafFirewallVersion Class Doc Comment
 *
 * @category Class
 * @description Resource type.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TypeWafFirewallVersion
{
    /**
     * Possible values of this enum
     */
    const WAF_FIREWALL_VERSION = 'waf_firewall_version';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WAF_FIREWALL_VERSION
        ];
    }
}


