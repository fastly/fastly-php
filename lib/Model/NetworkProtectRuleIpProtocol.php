<?php
/**
 * NetworkProtectRuleIpProtocol
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
 * NetworkProtectRuleIpProtocol Class Doc Comment
 *
 * @category Class
 * @description The IP protocol to match. Omit to match any protocol.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class NetworkProtectRuleIpProtocol
{
    /**
     * Possible values of this enum
     */
    const TCP = 'tcp';

    const UDP = 'udp';

    const ICMP = 'icmp';

    const ICMPV6 = 'icmpv6';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TCP,
            self::UDP,
            self::ICMP,
            self::ICMPV6
        ];
    }
}


