<?php
/**
 * AwsRegion
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
 * AwsRegion Class Doc Comment
 *
 * @category Class
 * @description A named set of [AWS resources](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints) that&#39;s in the same geographical area.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class AwsRegion
{
    /**
     * Possible values of this enum
     */
    const US_EAST_1 = 'us-east-1';

    const US_EAST_2 = 'us-east-2';

    const US_WEST_1 = 'us-west-1';

    const US_WEST_2 = 'us-west-2';

    const AF_SOUTH_1 = 'af-south-1';

    const AP_EAST_1 = 'ap-east-1';

    const AP_SOUTH_1 = 'ap-south-1';

    const AP_NORTHEAST_3 = 'ap-northeast-3';

    const AP_NORTHEAST_2 = 'ap-northeast-2';

    const AP_SOUTHEAST_1 = 'ap-southeast-1';

    const AP_SOUTHEAST_2 = 'ap-southeast-2';

    const AP_NORTHEAST_1 = 'ap-northeast-1';

    const CA_CENTRAL_1 = 'ca-central-1';

    const CN_NORTH_1 = 'cn-north-1';

    const CN_NORTHWEST_1 = 'cn-northwest-1';

    const EU_CENTRAL_1 = 'eu-central-1';

    const EU_WEST_1 = 'eu-west-1';

    const EU_WEST_2 = 'eu-west-2';

    const EU_SOUTH_1 = 'eu-south-1';

    const EU_WEST_3 = 'eu-west-3';

    const EU_NORTH_1 = 'eu-north-1';

    const ME_SOUTH_1 = 'me-south-1';

    const SA_EAST_1 = 'sa-east-1';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::US_EAST_1,
            self::US_EAST_2,
            self::US_WEST_1,
            self::US_WEST_2,
            self::AF_SOUTH_1,
            self::AP_EAST_1,
            self::AP_SOUTH_1,
            self::AP_NORTHEAST_3,
            self::AP_NORTHEAST_2,
            self::AP_SOUTHEAST_1,
            self::AP_SOUTHEAST_2,
            self::AP_NORTHEAST_1,
            self::CA_CENTRAL_1,
            self::CN_NORTH_1,
            self::CN_NORTHWEST_1,
            self::EU_CENTRAL_1,
            self::EU_WEST_1,
            self::EU_WEST_2,
            self::EU_SOUTH_1,
            self::EU_WEST_3,
            self::EU_NORTH_1,
            self::ME_SOUTH_1,
            self::SA_EAST_1
        ];
    }
}


