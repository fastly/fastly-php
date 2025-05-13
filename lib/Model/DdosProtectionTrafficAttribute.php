<?php
/**
 * DdosProtectionTrafficAttribute
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
 * DdosProtectionTrafficAttribute Class Doc Comment
 *
 * @category Class
 * @description Name of an attribute type used in traffic stats.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class DdosProtectionTrafficAttribute
{
    /**
     * Possible values of this enum
     */
    const SOURCE_IP = 'source_ip';

    const COUNTRY_CODE = 'country_code';

    const HOST = 'host';

    const ASN = 'asn';

    const SOURCE_IP_PREFIX = 'source_ip_prefix';

    const USER_AGENT = 'user_agent';

    const METHOD_PATH = 'method_path';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOURCE_IP,
            self::COUNTRY_CODE,
            self::HOST,
            self::ASN,
            self::SOURCE_IP_PREFIX,
            self::USER_AGENT,
            self::METHOD_PATH
        ];
    }
}


