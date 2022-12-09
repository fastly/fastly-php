<?php
/**
 * TypeTlsBulkCertificate
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
 * TypeTlsBulkCertificate Class Doc Comment
 *
 * @category Class
 * @description Resource type
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TypeTlsBulkCertificate
{
    /**
     * Possible values of this enum
     */
    const TLS_BULK_CERTIFICATE = 'tls_bulk_certificate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TLS_BULK_CERTIFICATE
        ];
    }
}


