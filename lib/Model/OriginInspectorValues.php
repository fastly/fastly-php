<?php
/**
 * OriginInspectorValues
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

use \ArrayAccess;
use \Fastly\ObjectSerializer;

/**
 * OriginInspectorValues Class Doc Comment
 *
 * @category Class
 * @description The results of the query, optionally filtered and grouped over the requested timespan.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OriginInspectorValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'origin_inspector_values';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'responses' => 'int',
        'resp_header_bytes' => 'int',
        'resp_body_bytes' => 'int',
        'status_1xx' => 'int',
        'status_2xx' => 'int',
        'status_3xx' => 'int',
        'status_4xx' => 'int',
        'status_5xx' => 'int',
        'status_200' => 'int',
        'status_204' => 'int',
        'status_206' => 'int',
        'status_301' => 'int',
        'status_302' => 'int',
        'status_304' => 'int',
        'status_400' => 'int',
        'status_401' => 'int',
        'status_403' => 'int',
        'status_404' => 'int',
        'status_416' => 'int',
        'status_429' => 'int',
        'status_500' => 'int',
        'status_501' => 'int',
        'status_502' => 'int',
        'status_503' => 'int',
        'status_504' => 'int',
        'status_505' => 'int',
        'latency_0_to_1ms' => 'int',
        'latency_1_to_5ms' => 'int',
        'latency_5_to_10ms' => 'int',
        'latency_10_to_50ms' => 'int',
        'latency_50_to_100ms' => 'int',
        'latency_100_to_250ms' => 'int',
        'latency_250_to_500ms' => 'int',
        'latency_500_to_1000ms' => 'int',
        'latency_1000_to_5000ms' => 'int',
        'latency_5000_to_10000ms' => 'int',
        'latency_10000_to_60000ms' => 'int',
        'latency_60000ms' => 'int',
        'waf_responses' => 'int',
        'waf_resp_header_bytes' => 'int',
        'waf_resp_body_bytes' => 'int',
        'waf_status_1xx' => 'int',
        'waf_status_2xx' => 'int',
        'waf_status_3xx' => 'int',
        'waf_status_4xx' => 'int',
        'waf_status_5xx' => 'int',
        'waf_status_200' => 'int',
        'waf_status_204' => 'int',
        'waf_status_206' => 'int',
        'waf_status_301' => 'int',
        'waf_status_302' => 'int',
        'waf_status_304' => 'int',
        'waf_status_400' => 'int',
        'waf_status_401' => 'int',
        'waf_status_403' => 'int',
        'waf_status_404' => 'int',
        'waf_status_416' => 'int',
        'waf_status_429' => 'int',
        'waf_status_500' => 'int',
        'waf_status_501' => 'int',
        'waf_status_502' => 'int',
        'waf_status_503' => 'int',
        'waf_status_504' => 'int',
        'waf_status_505' => 'int',
        'waf_latency_0_to_1ms' => 'int',
        'waf_latency_1_to_5ms' => 'int',
        'waf_latency_5_to_10ms' => 'int',
        'waf_latency_10_to_50ms' => 'int',
        'waf_latency_50_to_100ms' => 'int',
        'waf_latency_100_to_250ms' => 'int',
        'waf_latency_250_to_500ms' => 'int',
        'waf_latency_500_to_1000ms' => 'int',
        'waf_latency_1000_to_5000ms' => 'int',
        'waf_latency_5000_to_10000ms' => 'int',
        'waf_latency_10000_to_60000ms' => 'int',
        'waf_latency_60000ms' => 'int',
        'compute_responses' => 'int',
        'compute_resp_header_bytes' => 'int',
        'compute_resp_body_bytes' => 'int',
        'compute_status_1xx' => 'int',
        'compute_status_2xx' => 'int',
        'compute_status_3xx' => 'int',
        'compute_status_4xx' => 'int',
        'compute_status_5xx' => 'int',
        'compute_status_200' => 'int',
        'compute_status_204' => 'int',
        'compute_status_206' => 'int',
        'compute_status_301' => 'int',
        'compute_status_302' => 'int',
        'compute_status_304' => 'int',
        'compute_status_400' => 'int',
        'compute_status_401' => 'int',
        'compute_status_403' => 'int',
        'compute_status_404' => 'int',
        'compute_status_416' => 'int',
        'compute_status_429' => 'int',
        'compute_status_500' => 'int',
        'compute_status_501' => 'int',
        'compute_status_502' => 'int',
        'compute_status_503' => 'int',
        'compute_status_504' => 'int',
        'compute_status_505' => 'int',
        'compute_latency_0_to_1ms' => 'int',
        'compute_latency_1_to_5ms' => 'int',
        'compute_latency_5_to_10ms' => 'int',
        'compute_latency_10_to_50ms' => 'int',
        'compute_latency_50_to_100ms' => 'int',
        'compute_latency_100_to_250ms' => 'int',
        'compute_latency_250_to_500ms' => 'int',
        'compute_latency_500_to_1000ms' => 'int',
        'compute_latency_1000_to_5000ms' => 'int',
        'compute_latency_5000_to_10000ms' => 'int',
        'compute_latency_10000_to_60000ms' => 'int',
        'compute_latency_60000ms' => 'int',
        'all_responses' => 'int',
        'all_resp_header_bytes' => 'int',
        'all_resp_body_bytes' => 'int',
        'all_status_1xx' => 'int',
        'all_status_2xx' => 'int',
        'all_status_3xx' => 'int',
        'all_status_4xx' => 'int',
        'all_status_5xx' => 'int',
        'all_status_200' => 'int',
        'all_status_204' => 'int',
        'all_status_206' => 'int',
        'all_status_301' => 'int',
        'all_status_302' => 'int',
        'all_status_304' => 'int',
        'all_status_400' => 'int',
        'all_status_401' => 'int',
        'all_status_403' => 'int',
        'all_status_404' => 'int',
        'all_status_416' => 'int',
        'all_status_429' => 'int',
        'all_status_500' => 'int',
        'all_status_501' => 'int',
        'all_status_502' => 'int',
        'all_status_503' => 'int',
        'all_status_504' => 'int',
        'all_status_505' => 'int',
        'all_latency_0_to_1ms' => 'int',
        'all_latency_1_to_5ms' => 'int',
        'all_latency_5_to_10ms' => 'int',
        'all_latency_10_to_50ms' => 'int',
        'all_latency_50_to_100ms' => 'int',
        'all_latency_100_to_250ms' => 'int',
        'all_latency_250_to_500ms' => 'int',
        'all_latency_500_to_1000ms' => 'int',
        'all_latency_1000_to_5000ms' => 'int',
        'all_latency_5000_to_10000ms' => 'int',
        'all_latency_10000_to_60000ms' => 'int',
        'all_latency_60000ms' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'responses' => null,
        'resp_header_bytes' => null,
        'resp_body_bytes' => null,
        'status_1xx' => null,
        'status_2xx' => null,
        'status_3xx' => null,
        'status_4xx' => null,
        'status_5xx' => null,
        'status_200' => null,
        'status_204' => null,
        'status_206' => null,
        'status_301' => null,
        'status_302' => null,
        'status_304' => null,
        'status_400' => null,
        'status_401' => null,
        'status_403' => null,
        'status_404' => null,
        'status_416' => null,
        'status_429' => null,
        'status_500' => null,
        'status_501' => null,
        'status_502' => null,
        'status_503' => null,
        'status_504' => null,
        'status_505' => null,
        'latency_0_to_1ms' => null,
        'latency_1_to_5ms' => null,
        'latency_5_to_10ms' => null,
        'latency_10_to_50ms' => null,
        'latency_50_to_100ms' => null,
        'latency_100_to_250ms' => null,
        'latency_250_to_500ms' => null,
        'latency_500_to_1000ms' => null,
        'latency_1000_to_5000ms' => null,
        'latency_5000_to_10000ms' => null,
        'latency_10000_to_60000ms' => null,
        'latency_60000ms' => null,
        'waf_responses' => null,
        'waf_resp_header_bytes' => null,
        'waf_resp_body_bytes' => null,
        'waf_status_1xx' => null,
        'waf_status_2xx' => null,
        'waf_status_3xx' => null,
        'waf_status_4xx' => null,
        'waf_status_5xx' => null,
        'waf_status_200' => null,
        'waf_status_204' => null,
        'waf_status_206' => null,
        'waf_status_301' => null,
        'waf_status_302' => null,
        'waf_status_304' => null,
        'waf_status_400' => null,
        'waf_status_401' => null,
        'waf_status_403' => null,
        'waf_status_404' => null,
        'waf_status_416' => null,
        'waf_status_429' => null,
        'waf_status_500' => null,
        'waf_status_501' => null,
        'waf_status_502' => null,
        'waf_status_503' => null,
        'waf_status_504' => null,
        'waf_status_505' => null,
        'waf_latency_0_to_1ms' => null,
        'waf_latency_1_to_5ms' => null,
        'waf_latency_5_to_10ms' => null,
        'waf_latency_10_to_50ms' => null,
        'waf_latency_50_to_100ms' => null,
        'waf_latency_100_to_250ms' => null,
        'waf_latency_250_to_500ms' => null,
        'waf_latency_500_to_1000ms' => null,
        'waf_latency_1000_to_5000ms' => null,
        'waf_latency_5000_to_10000ms' => null,
        'waf_latency_10000_to_60000ms' => null,
        'waf_latency_60000ms' => null,
        'compute_responses' => null,
        'compute_resp_header_bytes' => null,
        'compute_resp_body_bytes' => null,
        'compute_status_1xx' => null,
        'compute_status_2xx' => null,
        'compute_status_3xx' => null,
        'compute_status_4xx' => null,
        'compute_status_5xx' => null,
        'compute_status_200' => null,
        'compute_status_204' => null,
        'compute_status_206' => null,
        'compute_status_301' => null,
        'compute_status_302' => null,
        'compute_status_304' => null,
        'compute_status_400' => null,
        'compute_status_401' => null,
        'compute_status_403' => null,
        'compute_status_404' => null,
        'compute_status_416' => null,
        'compute_status_429' => null,
        'compute_status_500' => null,
        'compute_status_501' => null,
        'compute_status_502' => null,
        'compute_status_503' => null,
        'compute_status_504' => null,
        'compute_status_505' => null,
        'compute_latency_0_to_1ms' => null,
        'compute_latency_1_to_5ms' => null,
        'compute_latency_5_to_10ms' => null,
        'compute_latency_10_to_50ms' => null,
        'compute_latency_50_to_100ms' => null,
        'compute_latency_100_to_250ms' => null,
        'compute_latency_250_to_500ms' => null,
        'compute_latency_500_to_1000ms' => null,
        'compute_latency_1000_to_5000ms' => null,
        'compute_latency_5000_to_10000ms' => null,
        'compute_latency_10000_to_60000ms' => null,
        'compute_latency_60000ms' => null,
        'all_responses' => null,
        'all_resp_header_bytes' => null,
        'all_resp_body_bytes' => null,
        'all_status_1xx' => null,
        'all_status_2xx' => null,
        'all_status_3xx' => null,
        'all_status_4xx' => null,
        'all_status_5xx' => null,
        'all_status_200' => null,
        'all_status_204' => null,
        'all_status_206' => null,
        'all_status_301' => null,
        'all_status_302' => null,
        'all_status_304' => null,
        'all_status_400' => null,
        'all_status_401' => null,
        'all_status_403' => null,
        'all_status_404' => null,
        'all_status_416' => null,
        'all_status_429' => null,
        'all_status_500' => null,
        'all_status_501' => null,
        'all_status_502' => null,
        'all_status_503' => null,
        'all_status_504' => null,
        'all_status_505' => null,
        'all_latency_0_to_1ms' => null,
        'all_latency_1_to_5ms' => null,
        'all_latency_5_to_10ms' => null,
        'all_latency_10_to_50ms' => null,
        'all_latency_50_to_100ms' => null,
        'all_latency_100_to_250ms' => null,
        'all_latency_250_to_500ms' => null,
        'all_latency_500_to_1000ms' => null,
        'all_latency_1000_to_5000ms' => null,
        'all_latency_5000_to_10000ms' => null,
        'all_latency_10000_to_60000ms' => null,
        'all_latency_60000ms' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyTypes()
    {
        return self::$fastlyTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyFormats()
    {
        return self::$fastlyFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'responses' => 'responses',
        'resp_header_bytes' => 'resp_header_bytes',
        'resp_body_bytes' => 'resp_body_bytes',
        'status_1xx' => 'status_1xx',
        'status_2xx' => 'status_2xx',
        'status_3xx' => 'status_3xx',
        'status_4xx' => 'status_4xx',
        'status_5xx' => 'status_5xx',
        'status_200' => 'status_200',
        'status_204' => 'status_204',
        'status_206' => 'status_206',
        'status_301' => 'status_301',
        'status_302' => 'status_302',
        'status_304' => 'status_304',
        'status_400' => 'status_400',
        'status_401' => 'status_401',
        'status_403' => 'status_403',
        'status_404' => 'status_404',
        'status_416' => 'status_416',
        'status_429' => 'status_429',
        'status_500' => 'status_500',
        'status_501' => 'status_501',
        'status_502' => 'status_502',
        'status_503' => 'status_503',
        'status_504' => 'status_504',
        'status_505' => 'status_505',
        'latency_0_to_1ms' => 'latency_0_to_1ms',
        'latency_1_to_5ms' => 'latency_1_to_5ms',
        'latency_5_to_10ms' => 'latency_5_to_10ms',
        'latency_10_to_50ms' => 'latency_10_to_50ms',
        'latency_50_to_100ms' => 'latency_50_to_100ms',
        'latency_100_to_250ms' => 'latency_100_to_250ms',
        'latency_250_to_500ms' => 'latency_250_to_500ms',
        'latency_500_to_1000ms' => 'latency_500_to_1000ms',
        'latency_1000_to_5000ms' => 'latency_1000_to_5000ms',
        'latency_5000_to_10000ms' => 'latency_5000_to_10000ms',
        'latency_10000_to_60000ms' => 'latency_10000_to_60000ms',
        'latency_60000ms' => 'latency_60000ms',
        'waf_responses' => 'waf_responses',
        'waf_resp_header_bytes' => 'waf_resp_header_bytes',
        'waf_resp_body_bytes' => 'waf_resp_body_bytes',
        'waf_status_1xx' => 'waf_status_1xx',
        'waf_status_2xx' => 'waf_status_2xx',
        'waf_status_3xx' => 'waf_status_3xx',
        'waf_status_4xx' => 'waf_status_4xx',
        'waf_status_5xx' => 'waf_status_5xx',
        'waf_status_200' => 'waf_status_200',
        'waf_status_204' => 'waf_status_204',
        'waf_status_206' => 'waf_status_206',
        'waf_status_301' => 'waf_status_301',
        'waf_status_302' => 'waf_status_302',
        'waf_status_304' => 'waf_status_304',
        'waf_status_400' => 'waf_status_400',
        'waf_status_401' => 'waf_status_401',
        'waf_status_403' => 'waf_status_403',
        'waf_status_404' => 'waf_status_404',
        'waf_status_416' => 'waf_status_416',
        'waf_status_429' => 'waf_status_429',
        'waf_status_500' => 'waf_status_500',
        'waf_status_501' => 'waf_status_501',
        'waf_status_502' => 'waf_status_502',
        'waf_status_503' => 'waf_status_503',
        'waf_status_504' => 'waf_status_504',
        'waf_status_505' => 'waf_status_505',
        'waf_latency_0_to_1ms' => 'waf_latency_0_to_1ms',
        'waf_latency_1_to_5ms' => 'waf_latency_1_to_5ms',
        'waf_latency_5_to_10ms' => 'waf_latency_5_to_10ms',
        'waf_latency_10_to_50ms' => 'waf_latency_10_to_50ms',
        'waf_latency_50_to_100ms' => 'waf_latency_50_to_100ms',
        'waf_latency_100_to_250ms' => 'waf_latency_100_to_250ms',
        'waf_latency_250_to_500ms' => 'waf_latency_250_to_500ms',
        'waf_latency_500_to_1000ms' => 'waf_latency_500_to_1000ms',
        'waf_latency_1000_to_5000ms' => 'waf_latency_1000_to_5000ms',
        'waf_latency_5000_to_10000ms' => 'waf_latency_5000_to_10000ms',
        'waf_latency_10000_to_60000ms' => 'waf_latency_10000_to_60000ms',
        'waf_latency_60000ms' => 'waf_latency_60000ms',
        'compute_responses' => 'compute_responses',
        'compute_resp_header_bytes' => 'compute_resp_header_bytes',
        'compute_resp_body_bytes' => 'compute_resp_body_bytes',
        'compute_status_1xx' => 'compute_status_1xx',
        'compute_status_2xx' => 'compute_status_2xx',
        'compute_status_3xx' => 'compute_status_3xx',
        'compute_status_4xx' => 'compute_status_4xx',
        'compute_status_5xx' => 'compute_status_5xx',
        'compute_status_200' => 'compute_status_200',
        'compute_status_204' => 'compute_status_204',
        'compute_status_206' => 'compute_status_206',
        'compute_status_301' => 'compute_status_301',
        'compute_status_302' => 'compute_status_302',
        'compute_status_304' => 'compute_status_304',
        'compute_status_400' => 'compute_status_400',
        'compute_status_401' => 'compute_status_401',
        'compute_status_403' => 'compute_status_403',
        'compute_status_404' => 'compute_status_404',
        'compute_status_416' => 'compute_status_416',
        'compute_status_429' => 'compute_status_429',
        'compute_status_500' => 'compute_status_500',
        'compute_status_501' => 'compute_status_501',
        'compute_status_502' => 'compute_status_502',
        'compute_status_503' => 'compute_status_503',
        'compute_status_504' => 'compute_status_504',
        'compute_status_505' => 'compute_status_505',
        'compute_latency_0_to_1ms' => 'compute_latency_0_to_1ms',
        'compute_latency_1_to_5ms' => 'compute_latency_1_to_5ms',
        'compute_latency_5_to_10ms' => 'compute_latency_5_to_10ms',
        'compute_latency_10_to_50ms' => 'compute_latency_10_to_50ms',
        'compute_latency_50_to_100ms' => 'compute_latency_50_to_100ms',
        'compute_latency_100_to_250ms' => 'compute_latency_100_to_250ms',
        'compute_latency_250_to_500ms' => 'compute_latency_250_to_500ms',
        'compute_latency_500_to_1000ms' => 'compute_latency_500_to_1000ms',
        'compute_latency_1000_to_5000ms' => 'compute_latency_1000_to_5000ms',
        'compute_latency_5000_to_10000ms' => 'compute_latency_5000_to_10000ms',
        'compute_latency_10000_to_60000ms' => 'compute_latency_10000_to_60000ms',
        'compute_latency_60000ms' => 'compute_latency_60000ms',
        'all_responses' => 'all_responses',
        'all_resp_header_bytes' => 'all_resp_header_bytes',
        'all_resp_body_bytes' => 'all_resp_body_bytes',
        'all_status_1xx' => 'all_status_1xx',
        'all_status_2xx' => 'all_status_2xx',
        'all_status_3xx' => 'all_status_3xx',
        'all_status_4xx' => 'all_status_4xx',
        'all_status_5xx' => 'all_status_5xx',
        'all_status_200' => 'all_status_200',
        'all_status_204' => 'all_status_204',
        'all_status_206' => 'all_status_206',
        'all_status_301' => 'all_status_301',
        'all_status_302' => 'all_status_302',
        'all_status_304' => 'all_status_304',
        'all_status_400' => 'all_status_400',
        'all_status_401' => 'all_status_401',
        'all_status_403' => 'all_status_403',
        'all_status_404' => 'all_status_404',
        'all_status_416' => 'all_status_416',
        'all_status_429' => 'all_status_429',
        'all_status_500' => 'all_status_500',
        'all_status_501' => 'all_status_501',
        'all_status_502' => 'all_status_502',
        'all_status_503' => 'all_status_503',
        'all_status_504' => 'all_status_504',
        'all_status_505' => 'all_status_505',
        'all_latency_0_to_1ms' => 'all_latency_0_to_1ms',
        'all_latency_1_to_5ms' => 'all_latency_1_to_5ms',
        'all_latency_5_to_10ms' => 'all_latency_5_to_10ms',
        'all_latency_10_to_50ms' => 'all_latency_10_to_50ms',
        'all_latency_50_to_100ms' => 'all_latency_50_to_100ms',
        'all_latency_100_to_250ms' => 'all_latency_100_to_250ms',
        'all_latency_250_to_500ms' => 'all_latency_250_to_500ms',
        'all_latency_500_to_1000ms' => 'all_latency_500_to_1000ms',
        'all_latency_1000_to_5000ms' => 'all_latency_1000_to_5000ms',
        'all_latency_5000_to_10000ms' => 'all_latency_5000_to_10000ms',
        'all_latency_10000_to_60000ms' => 'all_latency_10000_to_60000ms',
        'all_latency_60000ms' => 'all_latency_60000ms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'responses' => 'setResponses',
        'resp_header_bytes' => 'setRespHeaderBytes',
        'resp_body_bytes' => 'setRespBodyBytes',
        'status_1xx' => 'setStatus1xx',
        'status_2xx' => 'setStatus2xx',
        'status_3xx' => 'setStatus3xx',
        'status_4xx' => 'setStatus4xx',
        'status_5xx' => 'setStatus5xx',
        'status_200' => 'setStatus200',
        'status_204' => 'setStatus204',
        'status_206' => 'setStatus206',
        'status_301' => 'setStatus301',
        'status_302' => 'setStatus302',
        'status_304' => 'setStatus304',
        'status_400' => 'setStatus400',
        'status_401' => 'setStatus401',
        'status_403' => 'setStatus403',
        'status_404' => 'setStatus404',
        'status_416' => 'setStatus416',
        'status_429' => 'setStatus429',
        'status_500' => 'setStatus500',
        'status_501' => 'setStatus501',
        'status_502' => 'setStatus502',
        'status_503' => 'setStatus503',
        'status_504' => 'setStatus504',
        'status_505' => 'setStatus505',
        'latency_0_to_1ms' => 'setLatency0To1ms',
        'latency_1_to_5ms' => 'setLatency1To5ms',
        'latency_5_to_10ms' => 'setLatency5To10ms',
        'latency_10_to_50ms' => 'setLatency10To50ms',
        'latency_50_to_100ms' => 'setLatency50To100ms',
        'latency_100_to_250ms' => 'setLatency100To250ms',
        'latency_250_to_500ms' => 'setLatency250To500ms',
        'latency_500_to_1000ms' => 'setLatency500To1000ms',
        'latency_1000_to_5000ms' => 'setLatency1000To5000ms',
        'latency_5000_to_10000ms' => 'setLatency5000To10000ms',
        'latency_10000_to_60000ms' => 'setLatency10000To60000ms',
        'latency_60000ms' => 'setLatency60000ms',
        'waf_responses' => 'setWafResponses',
        'waf_resp_header_bytes' => 'setWafRespHeaderBytes',
        'waf_resp_body_bytes' => 'setWafRespBodyBytes',
        'waf_status_1xx' => 'setWafStatus1xx',
        'waf_status_2xx' => 'setWafStatus2xx',
        'waf_status_3xx' => 'setWafStatus3xx',
        'waf_status_4xx' => 'setWafStatus4xx',
        'waf_status_5xx' => 'setWafStatus5xx',
        'waf_status_200' => 'setWafStatus200',
        'waf_status_204' => 'setWafStatus204',
        'waf_status_206' => 'setWafStatus206',
        'waf_status_301' => 'setWafStatus301',
        'waf_status_302' => 'setWafStatus302',
        'waf_status_304' => 'setWafStatus304',
        'waf_status_400' => 'setWafStatus400',
        'waf_status_401' => 'setWafStatus401',
        'waf_status_403' => 'setWafStatus403',
        'waf_status_404' => 'setWafStatus404',
        'waf_status_416' => 'setWafStatus416',
        'waf_status_429' => 'setWafStatus429',
        'waf_status_500' => 'setWafStatus500',
        'waf_status_501' => 'setWafStatus501',
        'waf_status_502' => 'setWafStatus502',
        'waf_status_503' => 'setWafStatus503',
        'waf_status_504' => 'setWafStatus504',
        'waf_status_505' => 'setWafStatus505',
        'waf_latency_0_to_1ms' => 'setWafLatency0To1ms',
        'waf_latency_1_to_5ms' => 'setWafLatency1To5ms',
        'waf_latency_5_to_10ms' => 'setWafLatency5To10ms',
        'waf_latency_10_to_50ms' => 'setWafLatency10To50ms',
        'waf_latency_50_to_100ms' => 'setWafLatency50To100ms',
        'waf_latency_100_to_250ms' => 'setWafLatency100To250ms',
        'waf_latency_250_to_500ms' => 'setWafLatency250To500ms',
        'waf_latency_500_to_1000ms' => 'setWafLatency500To1000ms',
        'waf_latency_1000_to_5000ms' => 'setWafLatency1000To5000ms',
        'waf_latency_5000_to_10000ms' => 'setWafLatency5000To10000ms',
        'waf_latency_10000_to_60000ms' => 'setWafLatency10000To60000ms',
        'waf_latency_60000ms' => 'setWafLatency60000ms',
        'compute_responses' => 'setComputeResponses',
        'compute_resp_header_bytes' => 'setComputeRespHeaderBytes',
        'compute_resp_body_bytes' => 'setComputeRespBodyBytes',
        'compute_status_1xx' => 'setComputeStatus1xx',
        'compute_status_2xx' => 'setComputeStatus2xx',
        'compute_status_3xx' => 'setComputeStatus3xx',
        'compute_status_4xx' => 'setComputeStatus4xx',
        'compute_status_5xx' => 'setComputeStatus5xx',
        'compute_status_200' => 'setComputeStatus200',
        'compute_status_204' => 'setComputeStatus204',
        'compute_status_206' => 'setComputeStatus206',
        'compute_status_301' => 'setComputeStatus301',
        'compute_status_302' => 'setComputeStatus302',
        'compute_status_304' => 'setComputeStatus304',
        'compute_status_400' => 'setComputeStatus400',
        'compute_status_401' => 'setComputeStatus401',
        'compute_status_403' => 'setComputeStatus403',
        'compute_status_404' => 'setComputeStatus404',
        'compute_status_416' => 'setComputeStatus416',
        'compute_status_429' => 'setComputeStatus429',
        'compute_status_500' => 'setComputeStatus500',
        'compute_status_501' => 'setComputeStatus501',
        'compute_status_502' => 'setComputeStatus502',
        'compute_status_503' => 'setComputeStatus503',
        'compute_status_504' => 'setComputeStatus504',
        'compute_status_505' => 'setComputeStatus505',
        'compute_latency_0_to_1ms' => 'setComputeLatency0To1ms',
        'compute_latency_1_to_5ms' => 'setComputeLatency1To5ms',
        'compute_latency_5_to_10ms' => 'setComputeLatency5To10ms',
        'compute_latency_10_to_50ms' => 'setComputeLatency10To50ms',
        'compute_latency_50_to_100ms' => 'setComputeLatency50To100ms',
        'compute_latency_100_to_250ms' => 'setComputeLatency100To250ms',
        'compute_latency_250_to_500ms' => 'setComputeLatency250To500ms',
        'compute_latency_500_to_1000ms' => 'setComputeLatency500To1000ms',
        'compute_latency_1000_to_5000ms' => 'setComputeLatency1000To5000ms',
        'compute_latency_5000_to_10000ms' => 'setComputeLatency5000To10000ms',
        'compute_latency_10000_to_60000ms' => 'setComputeLatency10000To60000ms',
        'compute_latency_60000ms' => 'setComputeLatency60000ms',
        'all_responses' => 'setAllResponses',
        'all_resp_header_bytes' => 'setAllRespHeaderBytes',
        'all_resp_body_bytes' => 'setAllRespBodyBytes',
        'all_status_1xx' => 'setAllStatus1xx',
        'all_status_2xx' => 'setAllStatus2xx',
        'all_status_3xx' => 'setAllStatus3xx',
        'all_status_4xx' => 'setAllStatus4xx',
        'all_status_5xx' => 'setAllStatus5xx',
        'all_status_200' => 'setAllStatus200',
        'all_status_204' => 'setAllStatus204',
        'all_status_206' => 'setAllStatus206',
        'all_status_301' => 'setAllStatus301',
        'all_status_302' => 'setAllStatus302',
        'all_status_304' => 'setAllStatus304',
        'all_status_400' => 'setAllStatus400',
        'all_status_401' => 'setAllStatus401',
        'all_status_403' => 'setAllStatus403',
        'all_status_404' => 'setAllStatus404',
        'all_status_416' => 'setAllStatus416',
        'all_status_429' => 'setAllStatus429',
        'all_status_500' => 'setAllStatus500',
        'all_status_501' => 'setAllStatus501',
        'all_status_502' => 'setAllStatus502',
        'all_status_503' => 'setAllStatus503',
        'all_status_504' => 'setAllStatus504',
        'all_status_505' => 'setAllStatus505',
        'all_latency_0_to_1ms' => 'setAllLatency0To1ms',
        'all_latency_1_to_5ms' => 'setAllLatency1To5ms',
        'all_latency_5_to_10ms' => 'setAllLatency5To10ms',
        'all_latency_10_to_50ms' => 'setAllLatency10To50ms',
        'all_latency_50_to_100ms' => 'setAllLatency50To100ms',
        'all_latency_100_to_250ms' => 'setAllLatency100To250ms',
        'all_latency_250_to_500ms' => 'setAllLatency250To500ms',
        'all_latency_500_to_1000ms' => 'setAllLatency500To1000ms',
        'all_latency_1000_to_5000ms' => 'setAllLatency1000To5000ms',
        'all_latency_5000_to_10000ms' => 'setAllLatency5000To10000ms',
        'all_latency_10000_to_60000ms' => 'setAllLatency10000To60000ms',
        'all_latency_60000ms' => 'setAllLatency60000ms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'responses' => 'getResponses',
        'resp_header_bytes' => 'getRespHeaderBytes',
        'resp_body_bytes' => 'getRespBodyBytes',
        'status_1xx' => 'getStatus1xx',
        'status_2xx' => 'getStatus2xx',
        'status_3xx' => 'getStatus3xx',
        'status_4xx' => 'getStatus4xx',
        'status_5xx' => 'getStatus5xx',
        'status_200' => 'getStatus200',
        'status_204' => 'getStatus204',
        'status_206' => 'getStatus206',
        'status_301' => 'getStatus301',
        'status_302' => 'getStatus302',
        'status_304' => 'getStatus304',
        'status_400' => 'getStatus400',
        'status_401' => 'getStatus401',
        'status_403' => 'getStatus403',
        'status_404' => 'getStatus404',
        'status_416' => 'getStatus416',
        'status_429' => 'getStatus429',
        'status_500' => 'getStatus500',
        'status_501' => 'getStatus501',
        'status_502' => 'getStatus502',
        'status_503' => 'getStatus503',
        'status_504' => 'getStatus504',
        'status_505' => 'getStatus505',
        'latency_0_to_1ms' => 'getLatency0To1ms',
        'latency_1_to_5ms' => 'getLatency1To5ms',
        'latency_5_to_10ms' => 'getLatency5To10ms',
        'latency_10_to_50ms' => 'getLatency10To50ms',
        'latency_50_to_100ms' => 'getLatency50To100ms',
        'latency_100_to_250ms' => 'getLatency100To250ms',
        'latency_250_to_500ms' => 'getLatency250To500ms',
        'latency_500_to_1000ms' => 'getLatency500To1000ms',
        'latency_1000_to_5000ms' => 'getLatency1000To5000ms',
        'latency_5000_to_10000ms' => 'getLatency5000To10000ms',
        'latency_10000_to_60000ms' => 'getLatency10000To60000ms',
        'latency_60000ms' => 'getLatency60000ms',
        'waf_responses' => 'getWafResponses',
        'waf_resp_header_bytes' => 'getWafRespHeaderBytes',
        'waf_resp_body_bytes' => 'getWafRespBodyBytes',
        'waf_status_1xx' => 'getWafStatus1xx',
        'waf_status_2xx' => 'getWafStatus2xx',
        'waf_status_3xx' => 'getWafStatus3xx',
        'waf_status_4xx' => 'getWafStatus4xx',
        'waf_status_5xx' => 'getWafStatus5xx',
        'waf_status_200' => 'getWafStatus200',
        'waf_status_204' => 'getWafStatus204',
        'waf_status_206' => 'getWafStatus206',
        'waf_status_301' => 'getWafStatus301',
        'waf_status_302' => 'getWafStatus302',
        'waf_status_304' => 'getWafStatus304',
        'waf_status_400' => 'getWafStatus400',
        'waf_status_401' => 'getWafStatus401',
        'waf_status_403' => 'getWafStatus403',
        'waf_status_404' => 'getWafStatus404',
        'waf_status_416' => 'getWafStatus416',
        'waf_status_429' => 'getWafStatus429',
        'waf_status_500' => 'getWafStatus500',
        'waf_status_501' => 'getWafStatus501',
        'waf_status_502' => 'getWafStatus502',
        'waf_status_503' => 'getWafStatus503',
        'waf_status_504' => 'getWafStatus504',
        'waf_status_505' => 'getWafStatus505',
        'waf_latency_0_to_1ms' => 'getWafLatency0To1ms',
        'waf_latency_1_to_5ms' => 'getWafLatency1To5ms',
        'waf_latency_5_to_10ms' => 'getWafLatency5To10ms',
        'waf_latency_10_to_50ms' => 'getWafLatency10To50ms',
        'waf_latency_50_to_100ms' => 'getWafLatency50To100ms',
        'waf_latency_100_to_250ms' => 'getWafLatency100To250ms',
        'waf_latency_250_to_500ms' => 'getWafLatency250To500ms',
        'waf_latency_500_to_1000ms' => 'getWafLatency500To1000ms',
        'waf_latency_1000_to_5000ms' => 'getWafLatency1000To5000ms',
        'waf_latency_5000_to_10000ms' => 'getWafLatency5000To10000ms',
        'waf_latency_10000_to_60000ms' => 'getWafLatency10000To60000ms',
        'waf_latency_60000ms' => 'getWafLatency60000ms',
        'compute_responses' => 'getComputeResponses',
        'compute_resp_header_bytes' => 'getComputeRespHeaderBytes',
        'compute_resp_body_bytes' => 'getComputeRespBodyBytes',
        'compute_status_1xx' => 'getComputeStatus1xx',
        'compute_status_2xx' => 'getComputeStatus2xx',
        'compute_status_3xx' => 'getComputeStatus3xx',
        'compute_status_4xx' => 'getComputeStatus4xx',
        'compute_status_5xx' => 'getComputeStatus5xx',
        'compute_status_200' => 'getComputeStatus200',
        'compute_status_204' => 'getComputeStatus204',
        'compute_status_206' => 'getComputeStatus206',
        'compute_status_301' => 'getComputeStatus301',
        'compute_status_302' => 'getComputeStatus302',
        'compute_status_304' => 'getComputeStatus304',
        'compute_status_400' => 'getComputeStatus400',
        'compute_status_401' => 'getComputeStatus401',
        'compute_status_403' => 'getComputeStatus403',
        'compute_status_404' => 'getComputeStatus404',
        'compute_status_416' => 'getComputeStatus416',
        'compute_status_429' => 'getComputeStatus429',
        'compute_status_500' => 'getComputeStatus500',
        'compute_status_501' => 'getComputeStatus501',
        'compute_status_502' => 'getComputeStatus502',
        'compute_status_503' => 'getComputeStatus503',
        'compute_status_504' => 'getComputeStatus504',
        'compute_status_505' => 'getComputeStatus505',
        'compute_latency_0_to_1ms' => 'getComputeLatency0To1ms',
        'compute_latency_1_to_5ms' => 'getComputeLatency1To5ms',
        'compute_latency_5_to_10ms' => 'getComputeLatency5To10ms',
        'compute_latency_10_to_50ms' => 'getComputeLatency10To50ms',
        'compute_latency_50_to_100ms' => 'getComputeLatency50To100ms',
        'compute_latency_100_to_250ms' => 'getComputeLatency100To250ms',
        'compute_latency_250_to_500ms' => 'getComputeLatency250To500ms',
        'compute_latency_500_to_1000ms' => 'getComputeLatency500To1000ms',
        'compute_latency_1000_to_5000ms' => 'getComputeLatency1000To5000ms',
        'compute_latency_5000_to_10000ms' => 'getComputeLatency5000To10000ms',
        'compute_latency_10000_to_60000ms' => 'getComputeLatency10000To60000ms',
        'compute_latency_60000ms' => 'getComputeLatency60000ms',
        'all_responses' => 'getAllResponses',
        'all_resp_header_bytes' => 'getAllRespHeaderBytes',
        'all_resp_body_bytes' => 'getAllRespBodyBytes',
        'all_status_1xx' => 'getAllStatus1xx',
        'all_status_2xx' => 'getAllStatus2xx',
        'all_status_3xx' => 'getAllStatus3xx',
        'all_status_4xx' => 'getAllStatus4xx',
        'all_status_5xx' => 'getAllStatus5xx',
        'all_status_200' => 'getAllStatus200',
        'all_status_204' => 'getAllStatus204',
        'all_status_206' => 'getAllStatus206',
        'all_status_301' => 'getAllStatus301',
        'all_status_302' => 'getAllStatus302',
        'all_status_304' => 'getAllStatus304',
        'all_status_400' => 'getAllStatus400',
        'all_status_401' => 'getAllStatus401',
        'all_status_403' => 'getAllStatus403',
        'all_status_404' => 'getAllStatus404',
        'all_status_416' => 'getAllStatus416',
        'all_status_429' => 'getAllStatus429',
        'all_status_500' => 'getAllStatus500',
        'all_status_501' => 'getAllStatus501',
        'all_status_502' => 'getAllStatus502',
        'all_status_503' => 'getAllStatus503',
        'all_status_504' => 'getAllStatus504',
        'all_status_505' => 'getAllStatus505',
        'all_latency_0_to_1ms' => 'getAllLatency0To1ms',
        'all_latency_1_to_5ms' => 'getAllLatency1To5ms',
        'all_latency_5_to_10ms' => 'getAllLatency5To10ms',
        'all_latency_10_to_50ms' => 'getAllLatency10To50ms',
        'all_latency_50_to_100ms' => 'getAllLatency50To100ms',
        'all_latency_100_to_250ms' => 'getAllLatency100To250ms',
        'all_latency_250_to_500ms' => 'getAllLatency250To500ms',
        'all_latency_500_to_1000ms' => 'getAllLatency500To1000ms',
        'all_latency_1000_to_5000ms' => 'getAllLatency1000To5000ms',
        'all_latency_5000_to_10000ms' => 'getAllLatency5000To10000ms',
        'all_latency_10000_to_60000ms' => 'getAllLatency10000To60000ms',
        'all_latency_60000ms' => 'getAllLatency60000ms'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$fastlyModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['responses'] = $data['responses'] ?? null;
        $this->container['resp_header_bytes'] = $data['resp_header_bytes'] ?? null;
        $this->container['resp_body_bytes'] = $data['resp_body_bytes'] ?? null;
        $this->container['status_1xx'] = $data['status_1xx'] ?? null;
        $this->container['status_2xx'] = $data['status_2xx'] ?? null;
        $this->container['status_3xx'] = $data['status_3xx'] ?? null;
        $this->container['status_4xx'] = $data['status_4xx'] ?? null;
        $this->container['status_5xx'] = $data['status_5xx'] ?? null;
        $this->container['status_200'] = $data['status_200'] ?? null;
        $this->container['status_204'] = $data['status_204'] ?? null;
        $this->container['status_206'] = $data['status_206'] ?? null;
        $this->container['status_301'] = $data['status_301'] ?? null;
        $this->container['status_302'] = $data['status_302'] ?? null;
        $this->container['status_304'] = $data['status_304'] ?? null;
        $this->container['status_400'] = $data['status_400'] ?? null;
        $this->container['status_401'] = $data['status_401'] ?? null;
        $this->container['status_403'] = $data['status_403'] ?? null;
        $this->container['status_404'] = $data['status_404'] ?? null;
        $this->container['status_416'] = $data['status_416'] ?? null;
        $this->container['status_429'] = $data['status_429'] ?? null;
        $this->container['status_500'] = $data['status_500'] ?? null;
        $this->container['status_501'] = $data['status_501'] ?? null;
        $this->container['status_502'] = $data['status_502'] ?? null;
        $this->container['status_503'] = $data['status_503'] ?? null;
        $this->container['status_504'] = $data['status_504'] ?? null;
        $this->container['status_505'] = $data['status_505'] ?? null;
        $this->container['latency_0_to_1ms'] = $data['latency_0_to_1ms'] ?? null;
        $this->container['latency_1_to_5ms'] = $data['latency_1_to_5ms'] ?? null;
        $this->container['latency_5_to_10ms'] = $data['latency_5_to_10ms'] ?? null;
        $this->container['latency_10_to_50ms'] = $data['latency_10_to_50ms'] ?? null;
        $this->container['latency_50_to_100ms'] = $data['latency_50_to_100ms'] ?? null;
        $this->container['latency_100_to_250ms'] = $data['latency_100_to_250ms'] ?? null;
        $this->container['latency_250_to_500ms'] = $data['latency_250_to_500ms'] ?? null;
        $this->container['latency_500_to_1000ms'] = $data['latency_500_to_1000ms'] ?? null;
        $this->container['latency_1000_to_5000ms'] = $data['latency_1000_to_5000ms'] ?? null;
        $this->container['latency_5000_to_10000ms'] = $data['latency_5000_to_10000ms'] ?? null;
        $this->container['latency_10000_to_60000ms'] = $data['latency_10000_to_60000ms'] ?? null;
        $this->container['latency_60000ms'] = $data['latency_60000ms'] ?? null;
        $this->container['waf_responses'] = $data['waf_responses'] ?? null;
        $this->container['waf_resp_header_bytes'] = $data['waf_resp_header_bytes'] ?? null;
        $this->container['waf_resp_body_bytes'] = $data['waf_resp_body_bytes'] ?? null;
        $this->container['waf_status_1xx'] = $data['waf_status_1xx'] ?? null;
        $this->container['waf_status_2xx'] = $data['waf_status_2xx'] ?? null;
        $this->container['waf_status_3xx'] = $data['waf_status_3xx'] ?? null;
        $this->container['waf_status_4xx'] = $data['waf_status_4xx'] ?? null;
        $this->container['waf_status_5xx'] = $data['waf_status_5xx'] ?? null;
        $this->container['waf_status_200'] = $data['waf_status_200'] ?? null;
        $this->container['waf_status_204'] = $data['waf_status_204'] ?? null;
        $this->container['waf_status_206'] = $data['waf_status_206'] ?? null;
        $this->container['waf_status_301'] = $data['waf_status_301'] ?? null;
        $this->container['waf_status_302'] = $data['waf_status_302'] ?? null;
        $this->container['waf_status_304'] = $data['waf_status_304'] ?? null;
        $this->container['waf_status_400'] = $data['waf_status_400'] ?? null;
        $this->container['waf_status_401'] = $data['waf_status_401'] ?? null;
        $this->container['waf_status_403'] = $data['waf_status_403'] ?? null;
        $this->container['waf_status_404'] = $data['waf_status_404'] ?? null;
        $this->container['waf_status_416'] = $data['waf_status_416'] ?? null;
        $this->container['waf_status_429'] = $data['waf_status_429'] ?? null;
        $this->container['waf_status_500'] = $data['waf_status_500'] ?? null;
        $this->container['waf_status_501'] = $data['waf_status_501'] ?? null;
        $this->container['waf_status_502'] = $data['waf_status_502'] ?? null;
        $this->container['waf_status_503'] = $data['waf_status_503'] ?? null;
        $this->container['waf_status_504'] = $data['waf_status_504'] ?? null;
        $this->container['waf_status_505'] = $data['waf_status_505'] ?? null;
        $this->container['waf_latency_0_to_1ms'] = $data['waf_latency_0_to_1ms'] ?? null;
        $this->container['waf_latency_1_to_5ms'] = $data['waf_latency_1_to_5ms'] ?? null;
        $this->container['waf_latency_5_to_10ms'] = $data['waf_latency_5_to_10ms'] ?? null;
        $this->container['waf_latency_10_to_50ms'] = $data['waf_latency_10_to_50ms'] ?? null;
        $this->container['waf_latency_50_to_100ms'] = $data['waf_latency_50_to_100ms'] ?? null;
        $this->container['waf_latency_100_to_250ms'] = $data['waf_latency_100_to_250ms'] ?? null;
        $this->container['waf_latency_250_to_500ms'] = $data['waf_latency_250_to_500ms'] ?? null;
        $this->container['waf_latency_500_to_1000ms'] = $data['waf_latency_500_to_1000ms'] ?? null;
        $this->container['waf_latency_1000_to_5000ms'] = $data['waf_latency_1000_to_5000ms'] ?? null;
        $this->container['waf_latency_5000_to_10000ms'] = $data['waf_latency_5000_to_10000ms'] ?? null;
        $this->container['waf_latency_10000_to_60000ms'] = $data['waf_latency_10000_to_60000ms'] ?? null;
        $this->container['waf_latency_60000ms'] = $data['waf_latency_60000ms'] ?? null;
        $this->container['compute_responses'] = $data['compute_responses'] ?? null;
        $this->container['compute_resp_header_bytes'] = $data['compute_resp_header_bytes'] ?? null;
        $this->container['compute_resp_body_bytes'] = $data['compute_resp_body_bytes'] ?? null;
        $this->container['compute_status_1xx'] = $data['compute_status_1xx'] ?? null;
        $this->container['compute_status_2xx'] = $data['compute_status_2xx'] ?? null;
        $this->container['compute_status_3xx'] = $data['compute_status_3xx'] ?? null;
        $this->container['compute_status_4xx'] = $data['compute_status_4xx'] ?? null;
        $this->container['compute_status_5xx'] = $data['compute_status_5xx'] ?? null;
        $this->container['compute_status_200'] = $data['compute_status_200'] ?? null;
        $this->container['compute_status_204'] = $data['compute_status_204'] ?? null;
        $this->container['compute_status_206'] = $data['compute_status_206'] ?? null;
        $this->container['compute_status_301'] = $data['compute_status_301'] ?? null;
        $this->container['compute_status_302'] = $data['compute_status_302'] ?? null;
        $this->container['compute_status_304'] = $data['compute_status_304'] ?? null;
        $this->container['compute_status_400'] = $data['compute_status_400'] ?? null;
        $this->container['compute_status_401'] = $data['compute_status_401'] ?? null;
        $this->container['compute_status_403'] = $data['compute_status_403'] ?? null;
        $this->container['compute_status_404'] = $data['compute_status_404'] ?? null;
        $this->container['compute_status_416'] = $data['compute_status_416'] ?? null;
        $this->container['compute_status_429'] = $data['compute_status_429'] ?? null;
        $this->container['compute_status_500'] = $data['compute_status_500'] ?? null;
        $this->container['compute_status_501'] = $data['compute_status_501'] ?? null;
        $this->container['compute_status_502'] = $data['compute_status_502'] ?? null;
        $this->container['compute_status_503'] = $data['compute_status_503'] ?? null;
        $this->container['compute_status_504'] = $data['compute_status_504'] ?? null;
        $this->container['compute_status_505'] = $data['compute_status_505'] ?? null;
        $this->container['compute_latency_0_to_1ms'] = $data['compute_latency_0_to_1ms'] ?? null;
        $this->container['compute_latency_1_to_5ms'] = $data['compute_latency_1_to_5ms'] ?? null;
        $this->container['compute_latency_5_to_10ms'] = $data['compute_latency_5_to_10ms'] ?? null;
        $this->container['compute_latency_10_to_50ms'] = $data['compute_latency_10_to_50ms'] ?? null;
        $this->container['compute_latency_50_to_100ms'] = $data['compute_latency_50_to_100ms'] ?? null;
        $this->container['compute_latency_100_to_250ms'] = $data['compute_latency_100_to_250ms'] ?? null;
        $this->container['compute_latency_250_to_500ms'] = $data['compute_latency_250_to_500ms'] ?? null;
        $this->container['compute_latency_500_to_1000ms'] = $data['compute_latency_500_to_1000ms'] ?? null;
        $this->container['compute_latency_1000_to_5000ms'] = $data['compute_latency_1000_to_5000ms'] ?? null;
        $this->container['compute_latency_5000_to_10000ms'] = $data['compute_latency_5000_to_10000ms'] ?? null;
        $this->container['compute_latency_10000_to_60000ms'] = $data['compute_latency_10000_to_60000ms'] ?? null;
        $this->container['compute_latency_60000ms'] = $data['compute_latency_60000ms'] ?? null;
        $this->container['all_responses'] = $data['all_responses'] ?? null;
        $this->container['all_resp_header_bytes'] = $data['all_resp_header_bytes'] ?? null;
        $this->container['all_resp_body_bytes'] = $data['all_resp_body_bytes'] ?? null;
        $this->container['all_status_1xx'] = $data['all_status_1xx'] ?? null;
        $this->container['all_status_2xx'] = $data['all_status_2xx'] ?? null;
        $this->container['all_status_3xx'] = $data['all_status_3xx'] ?? null;
        $this->container['all_status_4xx'] = $data['all_status_4xx'] ?? null;
        $this->container['all_status_5xx'] = $data['all_status_5xx'] ?? null;
        $this->container['all_status_200'] = $data['all_status_200'] ?? null;
        $this->container['all_status_204'] = $data['all_status_204'] ?? null;
        $this->container['all_status_206'] = $data['all_status_206'] ?? null;
        $this->container['all_status_301'] = $data['all_status_301'] ?? null;
        $this->container['all_status_302'] = $data['all_status_302'] ?? null;
        $this->container['all_status_304'] = $data['all_status_304'] ?? null;
        $this->container['all_status_400'] = $data['all_status_400'] ?? null;
        $this->container['all_status_401'] = $data['all_status_401'] ?? null;
        $this->container['all_status_403'] = $data['all_status_403'] ?? null;
        $this->container['all_status_404'] = $data['all_status_404'] ?? null;
        $this->container['all_status_416'] = $data['all_status_416'] ?? null;
        $this->container['all_status_429'] = $data['all_status_429'] ?? null;
        $this->container['all_status_500'] = $data['all_status_500'] ?? null;
        $this->container['all_status_501'] = $data['all_status_501'] ?? null;
        $this->container['all_status_502'] = $data['all_status_502'] ?? null;
        $this->container['all_status_503'] = $data['all_status_503'] ?? null;
        $this->container['all_status_504'] = $data['all_status_504'] ?? null;
        $this->container['all_status_505'] = $data['all_status_505'] ?? null;
        $this->container['all_latency_0_to_1ms'] = $data['all_latency_0_to_1ms'] ?? null;
        $this->container['all_latency_1_to_5ms'] = $data['all_latency_1_to_5ms'] ?? null;
        $this->container['all_latency_5_to_10ms'] = $data['all_latency_5_to_10ms'] ?? null;
        $this->container['all_latency_10_to_50ms'] = $data['all_latency_10_to_50ms'] ?? null;
        $this->container['all_latency_50_to_100ms'] = $data['all_latency_50_to_100ms'] ?? null;
        $this->container['all_latency_100_to_250ms'] = $data['all_latency_100_to_250ms'] ?? null;
        $this->container['all_latency_250_to_500ms'] = $data['all_latency_250_to_500ms'] ?? null;
        $this->container['all_latency_500_to_1000ms'] = $data['all_latency_500_to_1000ms'] ?? null;
        $this->container['all_latency_1000_to_5000ms'] = $data['all_latency_1000_to_5000ms'] ?? null;
        $this->container['all_latency_5000_to_10000ms'] = $data['all_latency_5000_to_10000ms'] ?? null;
        $this->container['all_latency_10000_to_60000ms'] = $data['all_latency_10000_to_60000ms'] ?? null;
        $this->container['all_latency_60000ms'] = $data['all_latency_60000ms'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets responses
     *
     * @return int|null
     */
    public function getResponses()
    {
        return $this->container['responses'];
    }

    /**
     * Sets responses
     *
     * @param int|null $responses Number of responses from origin.
     *
     * @return self
     */
    public function setResponses($responses)
    {
        $this->container['responses'] = $responses;

        return $this;
    }

    /**
     * Gets resp_header_bytes
     *
     * @return int|null
     */
    public function getRespHeaderBytes()
    {
        return $this->container['resp_header_bytes'];
    }

    /**
     * Sets resp_header_bytes
     *
     * @param int|null $resp_header_bytes Number of header bytes from origin.
     *
     * @return self
     */
    public function setRespHeaderBytes($resp_header_bytes)
    {
        $this->container['resp_header_bytes'] = $resp_header_bytes;

        return $this;
    }

    /**
     * Gets resp_body_bytes
     *
     * @return int|null
     */
    public function getRespBodyBytes()
    {
        return $this->container['resp_body_bytes'];
    }

    /**
     * Sets resp_body_bytes
     *
     * @param int|null $resp_body_bytes Number of body bytes from origin.
     *
     * @return self
     */
    public function setRespBodyBytes($resp_body_bytes)
    {
        $this->container['resp_body_bytes'] = $resp_body_bytes;

        return $this;
    }

    /**
     * Gets status_1xx
     *
     * @return int|null
     */
    public function getStatus1xx()
    {
        return $this->container['status_1xx'];
    }

    /**
     * Sets status_1xx
     *
     * @param int|null $status_1xx Number of 1xx \"Informational\" status codes delivered from origin.
     *
     * @return self
     */
    public function setStatus1xx($status_1xx)
    {
        $this->container['status_1xx'] = $status_1xx;

        return $this;
    }

    /**
     * Gets status_2xx
     *
     * @return int|null
     */
    public function getStatus2xx()
    {
        return $this->container['status_2xx'];
    }

    /**
     * Sets status_2xx
     *
     * @param int|null $status_2xx Number of 2xx \"Success\" status codes delivered from origin.
     *
     * @return self
     */
    public function setStatus2xx($status_2xx)
    {
        $this->container['status_2xx'] = $status_2xx;

        return $this;
    }

    /**
     * Gets status_3xx
     *
     * @return int|null
     */
    public function getStatus3xx()
    {
        return $this->container['status_3xx'];
    }

    /**
     * Sets status_3xx
     *
     * @param int|null $status_3xx Number of 3xx \"Redirection\" codes delivered from origin.
     *
     * @return self
     */
    public function setStatus3xx($status_3xx)
    {
        $this->container['status_3xx'] = $status_3xx;

        return $this;
    }

    /**
     * Gets status_4xx
     *
     * @return int|null
     */
    public function getStatus4xx()
    {
        return $this->container['status_4xx'];
    }

    /**
     * Sets status_4xx
     *
     * @param int|null $status_4xx Number of 4xx \"Client Error\" codes delivered from origin.
     *
     * @return self
     */
    public function setStatus4xx($status_4xx)
    {
        $this->container['status_4xx'] = $status_4xx;

        return $this;
    }

    /**
     * Gets status_5xx
     *
     * @return int|null
     */
    public function getStatus5xx()
    {
        return $this->container['status_5xx'];
    }

    /**
     * Sets status_5xx
     *
     * @param int|null $status_5xx Number of 5xx \"Server Error\" codes delivered from origin.
     *
     * @return self
     */
    public function setStatus5xx($status_5xx)
    {
        $this->container['status_5xx'] = $status_5xx;

        return $this;
    }

    /**
     * Gets status_200
     *
     * @return int|null
     */
    public function getStatus200()
    {
        return $this->container['status_200'];
    }

    /**
     * Sets status_200
     *
     * @param int|null $status_200 Number of responses received with status code 200 (Success) from origin.
     *
     * @return self
     */
    public function setStatus200($status_200)
    {
        $this->container['status_200'] = $status_200;

        return $this;
    }

    /**
     * Gets status_204
     *
     * @return int|null
     */
    public function getStatus204()
    {
        return $this->container['status_204'];
    }

    /**
     * Sets status_204
     *
     * @param int|null $status_204 Number of responses received with status code 204 (No Content) from origin.
     *
     * @return self
     */
    public function setStatus204($status_204)
    {
        $this->container['status_204'] = $status_204;

        return $this;
    }

    /**
     * Gets status_206
     *
     * @return int|null
     */
    public function getStatus206()
    {
        return $this->container['status_206'];
    }

    /**
     * Sets status_206
     *
     * @param int|null $status_206 Number of responses received with status code 206 (Partial Content) from origin.
     *
     * @return self
     */
    public function setStatus206($status_206)
    {
        $this->container['status_206'] = $status_206;

        return $this;
    }

    /**
     * Gets status_301
     *
     * @return int|null
     */
    public function getStatus301()
    {
        return $this->container['status_301'];
    }

    /**
     * Sets status_301
     *
     * @param int|null $status_301 Number of responses received with status code 301 (Moved Permanently) from origin.
     *
     * @return self
     */
    public function setStatus301($status_301)
    {
        $this->container['status_301'] = $status_301;

        return $this;
    }

    /**
     * Gets status_302
     *
     * @return int|null
     */
    public function getStatus302()
    {
        return $this->container['status_302'];
    }

    /**
     * Sets status_302
     *
     * @param int|null $status_302 Number of responses received with status code 302 (Found) from origin.
     *
     * @return self
     */
    public function setStatus302($status_302)
    {
        $this->container['status_302'] = $status_302;

        return $this;
    }

    /**
     * Gets status_304
     *
     * @return int|null
     */
    public function getStatus304()
    {
        return $this->container['status_304'];
    }

    /**
     * Sets status_304
     *
     * @param int|null $status_304 Number of responses received with status code 304 (Not Modified) from origin.
     *
     * @return self
     */
    public function setStatus304($status_304)
    {
        $this->container['status_304'] = $status_304;

        return $this;
    }

    /**
     * Gets status_400
     *
     * @return int|null
     */
    public function getStatus400()
    {
        return $this->container['status_400'];
    }

    /**
     * Sets status_400
     *
     * @param int|null $status_400 Number of responses received with status code 400 (Bad Request) from origin.
     *
     * @return self
     */
    public function setStatus400($status_400)
    {
        $this->container['status_400'] = $status_400;

        return $this;
    }

    /**
     * Gets status_401
     *
     * @return int|null
     */
    public function getStatus401()
    {
        return $this->container['status_401'];
    }

    /**
     * Sets status_401
     *
     * @param int|null $status_401 Number of responses received with status code 401 (Unauthorized) from origin.
     *
     * @return self
     */
    public function setStatus401($status_401)
    {
        $this->container['status_401'] = $status_401;

        return $this;
    }

    /**
     * Gets status_403
     *
     * @return int|null
     */
    public function getStatus403()
    {
        return $this->container['status_403'];
    }

    /**
     * Sets status_403
     *
     * @param int|null $status_403 Number of responses received with status code 403 (Forbidden) from origin.
     *
     * @return self
     */
    public function setStatus403($status_403)
    {
        $this->container['status_403'] = $status_403;

        return $this;
    }

    /**
     * Gets status_404
     *
     * @return int|null
     */
    public function getStatus404()
    {
        return $this->container['status_404'];
    }

    /**
     * Sets status_404
     *
     * @param int|null $status_404 Number of responses received with status code 404 (Not Found) from origin.
     *
     * @return self
     */
    public function setStatus404($status_404)
    {
        $this->container['status_404'] = $status_404;

        return $this;
    }

    /**
     * Gets status_416
     *
     * @return int|null
     */
    public function getStatus416()
    {
        return $this->container['status_416'];
    }

    /**
     * Sets status_416
     *
     * @param int|null $status_416 Number of responses received with status code 416 (Range Not Satisfiable) from origin.
     *
     * @return self
     */
    public function setStatus416($status_416)
    {
        $this->container['status_416'] = $status_416;

        return $this;
    }

    /**
     * Gets status_429
     *
     * @return int|null
     */
    public function getStatus429()
    {
        return $this->container['status_429'];
    }

    /**
     * Sets status_429
     *
     * @param int|null $status_429 Number of responses received with status code 429 (Too Many Requests) from origin.
     *
     * @return self
     */
    public function setStatus429($status_429)
    {
        $this->container['status_429'] = $status_429;

        return $this;
    }

    /**
     * Gets status_500
     *
     * @return int|null
     */
    public function getStatus500()
    {
        return $this->container['status_500'];
    }

    /**
     * Sets status_500
     *
     * @param int|null $status_500 Number of responses received with status code 500 (Internal Server Error) from origin.
     *
     * @return self
     */
    public function setStatus500($status_500)
    {
        $this->container['status_500'] = $status_500;

        return $this;
    }

    /**
     * Gets status_501
     *
     * @return int|null
     */
    public function getStatus501()
    {
        return $this->container['status_501'];
    }

    /**
     * Sets status_501
     *
     * @param int|null $status_501 Number of responses received with status code 501 (Not Implemented) from origin.
     *
     * @return self
     */
    public function setStatus501($status_501)
    {
        $this->container['status_501'] = $status_501;

        return $this;
    }

    /**
     * Gets status_502
     *
     * @return int|null
     */
    public function getStatus502()
    {
        return $this->container['status_502'];
    }

    /**
     * Sets status_502
     *
     * @param int|null $status_502 Number of responses received with status code 502 (Bad Gateway) from origin.
     *
     * @return self
     */
    public function setStatus502($status_502)
    {
        $this->container['status_502'] = $status_502;

        return $this;
    }

    /**
     * Gets status_503
     *
     * @return int|null
     */
    public function getStatus503()
    {
        return $this->container['status_503'];
    }

    /**
     * Sets status_503
     *
     * @param int|null $status_503 Number of responses received with status code 503 (Service Unavailable) from origin.
     *
     * @return self
     */
    public function setStatus503($status_503)
    {
        $this->container['status_503'] = $status_503;

        return $this;
    }

    /**
     * Gets status_504
     *
     * @return int|null
     */
    public function getStatus504()
    {
        return $this->container['status_504'];
    }

    /**
     * Sets status_504
     *
     * @param int|null $status_504 Number of responses received with status code 504 (Gateway Timeout) from origin.
     *
     * @return self
     */
    public function setStatus504($status_504)
    {
        $this->container['status_504'] = $status_504;

        return $this;
    }

    /**
     * Gets status_505
     *
     * @return int|null
     */
    public function getStatus505()
    {
        return $this->container['status_505'];
    }

    /**
     * Sets status_505
     *
     * @param int|null $status_505 Number of responses received with status code 505 (HTTP Version Not Supported) from origin.
     *
     * @return self
     */
    public function setStatus505($status_505)
    {
        $this->container['status_505'] = $status_505;

        return $this;
    }

    /**
     * Gets latency_0_to_1ms
     *
     * @return int|null
     */
    public function getLatency0To1ms()
    {
        return $this->container['latency_0_to_1ms'];
    }

    /**
     * Sets latency_0_to_1ms
     *
     * @param int|null $latency_0_to_1ms Number of responses from origin with latency between 0 and 1 millisecond.
     *
     * @return self
     */
    public function setLatency0To1ms($latency_0_to_1ms)
    {
        $this->container['latency_0_to_1ms'] = $latency_0_to_1ms;

        return $this;
    }

    /**
     * Gets latency_1_to_5ms
     *
     * @return int|null
     */
    public function getLatency1To5ms()
    {
        return $this->container['latency_1_to_5ms'];
    }

    /**
     * Sets latency_1_to_5ms
     *
     * @param int|null $latency_1_to_5ms Number of responses from origin with latency between 1 and 5 milliseconds.
     *
     * @return self
     */
    public function setLatency1To5ms($latency_1_to_5ms)
    {
        $this->container['latency_1_to_5ms'] = $latency_1_to_5ms;

        return $this;
    }

    /**
     * Gets latency_5_to_10ms
     *
     * @return int|null
     */
    public function getLatency5To10ms()
    {
        return $this->container['latency_5_to_10ms'];
    }

    /**
     * Sets latency_5_to_10ms
     *
     * @param int|null $latency_5_to_10ms Number of responses from origin with latency between 5 and 10 milliseconds.
     *
     * @return self
     */
    public function setLatency5To10ms($latency_5_to_10ms)
    {
        $this->container['latency_5_to_10ms'] = $latency_5_to_10ms;

        return $this;
    }

    /**
     * Gets latency_10_to_50ms
     *
     * @return int|null
     */
    public function getLatency10To50ms()
    {
        return $this->container['latency_10_to_50ms'];
    }

    /**
     * Sets latency_10_to_50ms
     *
     * @param int|null $latency_10_to_50ms Number of responses from origin with latency between 10 and 50 milliseconds.
     *
     * @return self
     */
    public function setLatency10To50ms($latency_10_to_50ms)
    {
        $this->container['latency_10_to_50ms'] = $latency_10_to_50ms;

        return $this;
    }

    /**
     * Gets latency_50_to_100ms
     *
     * @return int|null
     */
    public function getLatency50To100ms()
    {
        return $this->container['latency_50_to_100ms'];
    }

    /**
     * Sets latency_50_to_100ms
     *
     * @param int|null $latency_50_to_100ms Number of responses from origin with latency between 50 and 100 milliseconds.
     *
     * @return self
     */
    public function setLatency50To100ms($latency_50_to_100ms)
    {
        $this->container['latency_50_to_100ms'] = $latency_50_to_100ms;

        return $this;
    }

    /**
     * Gets latency_100_to_250ms
     *
     * @return int|null
     */
    public function getLatency100To250ms()
    {
        return $this->container['latency_100_to_250ms'];
    }

    /**
     * Sets latency_100_to_250ms
     *
     * @param int|null $latency_100_to_250ms Number of responses from origin with latency between 100 and 250 milliseconds.
     *
     * @return self
     */
    public function setLatency100To250ms($latency_100_to_250ms)
    {
        $this->container['latency_100_to_250ms'] = $latency_100_to_250ms;

        return $this;
    }

    /**
     * Gets latency_250_to_500ms
     *
     * @return int|null
     */
    public function getLatency250To500ms()
    {
        return $this->container['latency_250_to_500ms'];
    }

    /**
     * Sets latency_250_to_500ms
     *
     * @param int|null $latency_250_to_500ms Number of responses from origin with latency between 250 and 500 milliseconds.
     *
     * @return self
     */
    public function setLatency250To500ms($latency_250_to_500ms)
    {
        $this->container['latency_250_to_500ms'] = $latency_250_to_500ms;

        return $this;
    }

    /**
     * Gets latency_500_to_1000ms
     *
     * @return int|null
     */
    public function getLatency500To1000ms()
    {
        return $this->container['latency_500_to_1000ms'];
    }

    /**
     * Sets latency_500_to_1000ms
     *
     * @param int|null $latency_500_to_1000ms Number of responses from origin with latency between 500 and 1,000 milliseconds.
     *
     * @return self
     */
    public function setLatency500To1000ms($latency_500_to_1000ms)
    {
        $this->container['latency_500_to_1000ms'] = $latency_500_to_1000ms;

        return $this;
    }

    /**
     * Gets latency_1000_to_5000ms
     *
     * @return int|null
     */
    public function getLatency1000To5000ms()
    {
        return $this->container['latency_1000_to_5000ms'];
    }

    /**
     * Sets latency_1000_to_5000ms
     *
     * @param int|null $latency_1000_to_5000ms Number of responses from origin with latency between 1,000 and 5,000 milliseconds.
     *
     * @return self
     */
    public function setLatency1000To5000ms($latency_1000_to_5000ms)
    {
        $this->container['latency_1000_to_5000ms'] = $latency_1000_to_5000ms;

        return $this;
    }

    /**
     * Gets latency_5000_to_10000ms
     *
     * @return int|null
     */
    public function getLatency5000To10000ms()
    {
        return $this->container['latency_5000_to_10000ms'];
    }

    /**
     * Sets latency_5000_to_10000ms
     *
     * @param int|null $latency_5000_to_10000ms Number of responses from origin with latency between 5,000 and 10,000 milliseconds.
     *
     * @return self
     */
    public function setLatency5000To10000ms($latency_5000_to_10000ms)
    {
        $this->container['latency_5000_to_10000ms'] = $latency_5000_to_10000ms;

        return $this;
    }

    /**
     * Gets latency_10000_to_60000ms
     *
     * @return int|null
     */
    public function getLatency10000To60000ms()
    {
        return $this->container['latency_10000_to_60000ms'];
    }

    /**
     * Sets latency_10000_to_60000ms
     *
     * @param int|null $latency_10000_to_60000ms Number of responses from origin with latency between 10,000 and 60,000 milliseconds.
     *
     * @return self
     */
    public function setLatency10000To60000ms($latency_10000_to_60000ms)
    {
        $this->container['latency_10000_to_60000ms'] = $latency_10000_to_60000ms;

        return $this;
    }

    /**
     * Gets latency_60000ms
     *
     * @return int|null
     */
    public function getLatency60000ms()
    {
        return $this->container['latency_60000ms'];
    }

    /**
     * Sets latency_60000ms
     *
     * @param int|null $latency_60000ms Number of responses from origin with latency of 60,000 milliseconds and above.
     *
     * @return self
     */
    public function setLatency60000ms($latency_60000ms)
    {
        $this->container['latency_60000ms'] = $latency_60000ms;

        return $this;
    }

    /**
     * Gets waf_responses
     *
     * @return int|null
     */
    public function getWafResponses()
    {
        return $this->container['waf_responses'];
    }

    /**
     * Sets waf_responses
     *
     * @param int|null $waf_responses Number of responses received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafResponses($waf_responses)
    {
        $this->container['waf_responses'] = $waf_responses;

        return $this;
    }

    /**
     * Gets waf_resp_header_bytes
     *
     * @return int|null
     */
    public function getWafRespHeaderBytes()
    {
        return $this->container['waf_resp_header_bytes'];
    }

    /**
     * Sets waf_resp_header_bytes
     *
     * @param int|null $waf_resp_header_bytes Number of header bytes received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafRespHeaderBytes($waf_resp_header_bytes)
    {
        $this->container['waf_resp_header_bytes'] = $waf_resp_header_bytes;

        return $this;
    }

    /**
     * Gets waf_resp_body_bytes
     *
     * @return int|null
     */
    public function getWafRespBodyBytes()
    {
        return $this->container['waf_resp_body_bytes'];
    }

    /**
     * Sets waf_resp_body_bytes
     *
     * @param int|null $waf_resp_body_bytes Number of body bytes received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafRespBodyBytes($waf_resp_body_bytes)
    {
        $this->container['waf_resp_body_bytes'] = $waf_resp_body_bytes;

        return $this;
    }

    /**
     * Gets waf_status_1xx
     *
     * @return int|null
     */
    public function getWafStatus1xx()
    {
        return $this->container['waf_status_1xx'];
    }

    /**
     * Sets waf_status_1xx
     *
     * @param int|null $waf_status_1xx Number of 1xx \"Informational\" status codes received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus1xx($waf_status_1xx)
    {
        $this->container['waf_status_1xx'] = $waf_status_1xx;

        return $this;
    }

    /**
     * Gets waf_status_2xx
     *
     * @return int|null
     */
    public function getWafStatus2xx()
    {
        return $this->container['waf_status_2xx'];
    }

    /**
     * Sets waf_status_2xx
     *
     * @param int|null $waf_status_2xx Number of 2xx \"Success\" status codes received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus2xx($waf_status_2xx)
    {
        $this->container['waf_status_2xx'] = $waf_status_2xx;

        return $this;
    }

    /**
     * Gets waf_status_3xx
     *
     * @return int|null
     */
    public function getWafStatus3xx()
    {
        return $this->container['waf_status_3xx'];
    }

    /**
     * Sets waf_status_3xx
     *
     * @param int|null $waf_status_3xx Number of 3xx \"Redirection\" codes received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus3xx($waf_status_3xx)
    {
        $this->container['waf_status_3xx'] = $waf_status_3xx;

        return $this;
    }

    /**
     * Gets waf_status_4xx
     *
     * @return int|null
     */
    public function getWafStatus4xx()
    {
        return $this->container['waf_status_4xx'];
    }

    /**
     * Sets waf_status_4xx
     *
     * @param int|null $waf_status_4xx Number of 4xx \"Client Error\" codes received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus4xx($waf_status_4xx)
    {
        $this->container['waf_status_4xx'] = $waf_status_4xx;

        return $this;
    }

    /**
     * Gets waf_status_5xx
     *
     * @return int|null
     */
    public function getWafStatus5xx()
    {
        return $this->container['waf_status_5xx'];
    }

    /**
     * Sets waf_status_5xx
     *
     * @param int|null $waf_status_5xx Number of 5xx \"Server Error\" codes received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus5xx($waf_status_5xx)
    {
        $this->container['waf_status_5xx'] = $waf_status_5xx;

        return $this;
    }

    /**
     * Gets waf_status_200
     *
     * @return int|null
     */
    public function getWafStatus200()
    {
        return $this->container['waf_status_200'];
    }

    /**
     * Sets waf_status_200
     *
     * @param int|null $waf_status_200 Number of responses received with status code 200 (Success) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus200($waf_status_200)
    {
        $this->container['waf_status_200'] = $waf_status_200;

        return $this;
    }

    /**
     * Gets waf_status_204
     *
     * @return int|null
     */
    public function getWafStatus204()
    {
        return $this->container['waf_status_204'];
    }

    /**
     * Sets waf_status_204
     *
     * @param int|null $waf_status_204 Number of responses received with status code 204 (No Content) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus204($waf_status_204)
    {
        $this->container['waf_status_204'] = $waf_status_204;

        return $this;
    }

    /**
     * Gets waf_status_206
     *
     * @return int|null
     */
    public function getWafStatus206()
    {
        return $this->container['waf_status_206'];
    }

    /**
     * Sets waf_status_206
     *
     * @param int|null $waf_status_206 Number of responses received with status code 206 (Partial Content) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus206($waf_status_206)
    {
        $this->container['waf_status_206'] = $waf_status_206;

        return $this;
    }

    /**
     * Gets waf_status_301
     *
     * @return int|null
     */
    public function getWafStatus301()
    {
        return $this->container['waf_status_301'];
    }

    /**
     * Sets waf_status_301
     *
     * @param int|null $waf_status_301 Number of responses received with status code 301 (Moved Permanently) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus301($waf_status_301)
    {
        $this->container['waf_status_301'] = $waf_status_301;

        return $this;
    }

    /**
     * Gets waf_status_302
     *
     * @return int|null
     */
    public function getWafStatus302()
    {
        return $this->container['waf_status_302'];
    }

    /**
     * Sets waf_status_302
     *
     * @param int|null $waf_status_302 Number of responses received with status code 302 (Found) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus302($waf_status_302)
    {
        $this->container['waf_status_302'] = $waf_status_302;

        return $this;
    }

    /**
     * Gets waf_status_304
     *
     * @return int|null
     */
    public function getWafStatus304()
    {
        return $this->container['waf_status_304'];
    }

    /**
     * Sets waf_status_304
     *
     * @param int|null $waf_status_304 Number of responses received with status code 304 (Not Modified) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus304($waf_status_304)
    {
        $this->container['waf_status_304'] = $waf_status_304;

        return $this;
    }

    /**
     * Gets waf_status_400
     *
     * @return int|null
     */
    public function getWafStatus400()
    {
        return $this->container['waf_status_400'];
    }

    /**
     * Sets waf_status_400
     *
     * @param int|null $waf_status_400 Number of responses received with status code 400 (Bad Request) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus400($waf_status_400)
    {
        $this->container['waf_status_400'] = $waf_status_400;

        return $this;
    }

    /**
     * Gets waf_status_401
     *
     * @return int|null
     */
    public function getWafStatus401()
    {
        return $this->container['waf_status_401'];
    }

    /**
     * Sets waf_status_401
     *
     * @param int|null $waf_status_401 Number of responses received with status code 401 (Unauthorized) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus401($waf_status_401)
    {
        $this->container['waf_status_401'] = $waf_status_401;

        return $this;
    }

    /**
     * Gets waf_status_403
     *
     * @return int|null
     */
    public function getWafStatus403()
    {
        return $this->container['waf_status_403'];
    }

    /**
     * Sets waf_status_403
     *
     * @param int|null $waf_status_403 Number of responses received with status code 403 (Forbidden) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus403($waf_status_403)
    {
        $this->container['waf_status_403'] = $waf_status_403;

        return $this;
    }

    /**
     * Gets waf_status_404
     *
     * @return int|null
     */
    public function getWafStatus404()
    {
        return $this->container['waf_status_404'];
    }

    /**
     * Sets waf_status_404
     *
     * @param int|null $waf_status_404 Number of responses received with status code 404 (Not Found) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus404($waf_status_404)
    {
        $this->container['waf_status_404'] = $waf_status_404;

        return $this;
    }

    /**
     * Gets waf_status_416
     *
     * @return int|null
     */
    public function getWafStatus416()
    {
        return $this->container['waf_status_416'];
    }

    /**
     * Sets waf_status_416
     *
     * @param int|null $waf_status_416 Number of responses received with status code 416 (Range Not Satisfiable) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus416($waf_status_416)
    {
        $this->container['waf_status_416'] = $waf_status_416;

        return $this;
    }

    /**
     * Gets waf_status_429
     *
     * @return int|null
     */
    public function getWafStatus429()
    {
        return $this->container['waf_status_429'];
    }

    /**
     * Sets waf_status_429
     *
     * @param int|null $waf_status_429 Number of responses received with status code 429 (Too Many Requests) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus429($waf_status_429)
    {
        $this->container['waf_status_429'] = $waf_status_429;

        return $this;
    }

    /**
     * Gets waf_status_500
     *
     * @return int|null
     */
    public function getWafStatus500()
    {
        return $this->container['waf_status_500'];
    }

    /**
     * Sets waf_status_500
     *
     * @param int|null $waf_status_500 Number of responses received with status code 500 (Internal Server Error) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus500($waf_status_500)
    {
        $this->container['waf_status_500'] = $waf_status_500;

        return $this;
    }

    /**
     * Gets waf_status_501
     *
     * @return int|null
     */
    public function getWafStatus501()
    {
        return $this->container['waf_status_501'];
    }

    /**
     * Sets waf_status_501
     *
     * @param int|null $waf_status_501 Number of responses received with status code 501 (Not Implemented) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus501($waf_status_501)
    {
        $this->container['waf_status_501'] = $waf_status_501;

        return $this;
    }

    /**
     * Gets waf_status_502
     *
     * @return int|null
     */
    public function getWafStatus502()
    {
        return $this->container['waf_status_502'];
    }

    /**
     * Sets waf_status_502
     *
     * @param int|null $waf_status_502 Number of responses received with status code 502 (Bad Gateway) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus502($waf_status_502)
    {
        $this->container['waf_status_502'] = $waf_status_502;

        return $this;
    }

    /**
     * Gets waf_status_503
     *
     * @return int|null
     */
    public function getWafStatus503()
    {
        return $this->container['waf_status_503'];
    }

    /**
     * Sets waf_status_503
     *
     * @param int|null $waf_status_503 Number of responses received with status code 503 (Service Unavailable) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus503($waf_status_503)
    {
        $this->container['waf_status_503'] = $waf_status_503;

        return $this;
    }

    /**
     * Gets waf_status_504
     *
     * @return int|null
     */
    public function getWafStatus504()
    {
        return $this->container['waf_status_504'];
    }

    /**
     * Sets waf_status_504
     *
     * @param int|null $waf_status_504 Number of responses received with status code 504 (Gateway Timeout) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus504($waf_status_504)
    {
        $this->container['waf_status_504'] = $waf_status_504;

        return $this;
    }

    /**
     * Gets waf_status_505
     *
     * @return int|null
     */
    public function getWafStatus505()
    {
        return $this->container['waf_status_505'];
    }

    /**
     * Sets waf_status_505
     *
     * @param int|null $waf_status_505 Number of responses received with status code 505 (HTTP Version Not Supported) received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafStatus505($waf_status_505)
    {
        $this->container['waf_status_505'] = $waf_status_505;

        return $this;
    }

    /**
     * Gets waf_latency_0_to_1ms
     *
     * @return int|null
     */
    public function getWafLatency0To1ms()
    {
        return $this->container['waf_latency_0_to_1ms'];
    }

    /**
     * Sets waf_latency_0_to_1ms
     *
     * @param int|null $waf_latency_0_to_1ms Number of responses with latency between 0 and 1 millisecond received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency0To1ms($waf_latency_0_to_1ms)
    {
        $this->container['waf_latency_0_to_1ms'] = $waf_latency_0_to_1ms;

        return $this;
    }

    /**
     * Gets waf_latency_1_to_5ms
     *
     * @return int|null
     */
    public function getWafLatency1To5ms()
    {
        return $this->container['waf_latency_1_to_5ms'];
    }

    /**
     * Sets waf_latency_1_to_5ms
     *
     * @param int|null $waf_latency_1_to_5ms Number of responses with latency between 1 and 5 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency1To5ms($waf_latency_1_to_5ms)
    {
        $this->container['waf_latency_1_to_5ms'] = $waf_latency_1_to_5ms;

        return $this;
    }

    /**
     * Gets waf_latency_5_to_10ms
     *
     * @return int|null
     */
    public function getWafLatency5To10ms()
    {
        return $this->container['waf_latency_5_to_10ms'];
    }

    /**
     * Sets waf_latency_5_to_10ms
     *
     * @param int|null $waf_latency_5_to_10ms Number of responses with latency between 5 and 10 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency5To10ms($waf_latency_5_to_10ms)
    {
        $this->container['waf_latency_5_to_10ms'] = $waf_latency_5_to_10ms;

        return $this;
    }

    /**
     * Gets waf_latency_10_to_50ms
     *
     * @return int|null
     */
    public function getWafLatency10To50ms()
    {
        return $this->container['waf_latency_10_to_50ms'];
    }

    /**
     * Sets waf_latency_10_to_50ms
     *
     * @param int|null $waf_latency_10_to_50ms Number of responses with latency between 10 and 50 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency10To50ms($waf_latency_10_to_50ms)
    {
        $this->container['waf_latency_10_to_50ms'] = $waf_latency_10_to_50ms;

        return $this;
    }

    /**
     * Gets waf_latency_50_to_100ms
     *
     * @return int|null
     */
    public function getWafLatency50To100ms()
    {
        return $this->container['waf_latency_50_to_100ms'];
    }

    /**
     * Sets waf_latency_50_to_100ms
     *
     * @param int|null $waf_latency_50_to_100ms Number of responses with latency between 50 and 100 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency50To100ms($waf_latency_50_to_100ms)
    {
        $this->container['waf_latency_50_to_100ms'] = $waf_latency_50_to_100ms;

        return $this;
    }

    /**
     * Gets waf_latency_100_to_250ms
     *
     * @return int|null
     */
    public function getWafLatency100To250ms()
    {
        return $this->container['waf_latency_100_to_250ms'];
    }

    /**
     * Sets waf_latency_100_to_250ms
     *
     * @param int|null $waf_latency_100_to_250ms Number of responses with latency between 100 and 250 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency100To250ms($waf_latency_100_to_250ms)
    {
        $this->container['waf_latency_100_to_250ms'] = $waf_latency_100_to_250ms;

        return $this;
    }

    /**
     * Gets waf_latency_250_to_500ms
     *
     * @return int|null
     */
    public function getWafLatency250To500ms()
    {
        return $this->container['waf_latency_250_to_500ms'];
    }

    /**
     * Sets waf_latency_250_to_500ms
     *
     * @param int|null $waf_latency_250_to_500ms Number of responses with latency between 250 and 500 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency250To500ms($waf_latency_250_to_500ms)
    {
        $this->container['waf_latency_250_to_500ms'] = $waf_latency_250_to_500ms;

        return $this;
    }

    /**
     * Gets waf_latency_500_to_1000ms
     *
     * @return int|null
     */
    public function getWafLatency500To1000ms()
    {
        return $this->container['waf_latency_500_to_1000ms'];
    }

    /**
     * Sets waf_latency_500_to_1000ms
     *
     * @param int|null $waf_latency_500_to_1000ms Number of responses with latency between 500 and 1,000 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency500To1000ms($waf_latency_500_to_1000ms)
    {
        $this->container['waf_latency_500_to_1000ms'] = $waf_latency_500_to_1000ms;

        return $this;
    }

    /**
     * Gets waf_latency_1000_to_5000ms
     *
     * @return int|null
     */
    public function getWafLatency1000To5000ms()
    {
        return $this->container['waf_latency_1000_to_5000ms'];
    }

    /**
     * Sets waf_latency_1000_to_5000ms
     *
     * @param int|null $waf_latency_1000_to_5000ms Number of responses with latency between 1,000 and 5,000 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency1000To5000ms($waf_latency_1000_to_5000ms)
    {
        $this->container['waf_latency_1000_to_5000ms'] = $waf_latency_1000_to_5000ms;

        return $this;
    }

    /**
     * Gets waf_latency_5000_to_10000ms
     *
     * @return int|null
     */
    public function getWafLatency5000To10000ms()
    {
        return $this->container['waf_latency_5000_to_10000ms'];
    }

    /**
     * Sets waf_latency_5000_to_10000ms
     *
     * @param int|null $waf_latency_5000_to_10000ms Number of responses with latency between 5,000 and 10,000 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency5000To10000ms($waf_latency_5000_to_10000ms)
    {
        $this->container['waf_latency_5000_to_10000ms'] = $waf_latency_5000_to_10000ms;

        return $this;
    }

    /**
     * Gets waf_latency_10000_to_60000ms
     *
     * @return int|null
     */
    public function getWafLatency10000To60000ms()
    {
        return $this->container['waf_latency_10000_to_60000ms'];
    }

    /**
     * Sets waf_latency_10000_to_60000ms
     *
     * @param int|null $waf_latency_10000_to_60000ms Number of responses with latency between 10,000 and 60,000 milliseconds received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency10000To60000ms($waf_latency_10000_to_60000ms)
    {
        $this->container['waf_latency_10000_to_60000ms'] = $waf_latency_10000_to_60000ms;

        return $this;
    }

    /**
     * Gets waf_latency_60000ms
     *
     * @return int|null
     */
    public function getWafLatency60000ms()
    {
        return $this->container['waf_latency_60000ms'];
    }

    /**
     * Sets waf_latency_60000ms
     *
     * @param int|null $waf_latency_60000ms Number of responses with latency of 60,000 milliseconds and above received for origin requests made by the Fastly WAF.
     *
     * @return self
     */
    public function setWafLatency60000ms($waf_latency_60000ms)
    {
        $this->container['waf_latency_60000ms'] = $waf_latency_60000ms;

        return $this;
    }

    /**
     * Gets compute_responses
     *
     * @return int|null
     */
    public function getComputeResponses()
    {
        return $this->container['compute_responses'];
    }

    /**
     * Sets compute_responses
     *
     * @param int|null $compute_responses Number of responses for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeResponses($compute_responses)
    {
        $this->container['compute_responses'] = $compute_responses;

        return $this;
    }

    /**
     * Gets compute_resp_header_bytes
     *
     * @return int|null
     */
    public function getComputeRespHeaderBytes()
    {
        return $this->container['compute_resp_header_bytes'];
    }

    /**
     * Sets compute_resp_header_bytes
     *
     * @param int|null $compute_resp_header_bytes Number of header bytes for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespHeaderBytes($compute_resp_header_bytes)
    {
        $this->container['compute_resp_header_bytes'] = $compute_resp_header_bytes;

        return $this;
    }

    /**
     * Gets compute_resp_body_bytes
     *
     * @return int|null
     */
    public function getComputeRespBodyBytes()
    {
        return $this->container['compute_resp_body_bytes'];
    }

    /**
     * Sets compute_resp_body_bytes
     *
     * @param int|null $compute_resp_body_bytes Number of body bytes for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespBodyBytes($compute_resp_body_bytes)
    {
        $this->container['compute_resp_body_bytes'] = $compute_resp_body_bytes;

        return $this;
    }

    /**
     * Gets compute_status_1xx
     *
     * @return int|null
     */
    public function getComputeStatus1xx()
    {
        return $this->container['compute_status_1xx'];
    }

    /**
     * Sets compute_status_1xx
     *
     * @param int|null $compute_status_1xx Number of 1xx \"Informational\" status codes for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus1xx($compute_status_1xx)
    {
        $this->container['compute_status_1xx'] = $compute_status_1xx;

        return $this;
    }

    /**
     * Gets compute_status_2xx
     *
     * @return int|null
     */
    public function getComputeStatus2xx()
    {
        return $this->container['compute_status_2xx'];
    }

    /**
     * Sets compute_status_2xx
     *
     * @param int|null $compute_status_2xx Number of 2xx \"Success\" status codes for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus2xx($compute_status_2xx)
    {
        $this->container['compute_status_2xx'] = $compute_status_2xx;

        return $this;
    }

    /**
     * Gets compute_status_3xx
     *
     * @return int|null
     */
    public function getComputeStatus3xx()
    {
        return $this->container['compute_status_3xx'];
    }

    /**
     * Sets compute_status_3xx
     *
     * @param int|null $compute_status_3xx Number of 3xx \"Redirection\" codes for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus3xx($compute_status_3xx)
    {
        $this->container['compute_status_3xx'] = $compute_status_3xx;

        return $this;
    }

    /**
     * Gets compute_status_4xx
     *
     * @return int|null
     */
    public function getComputeStatus4xx()
    {
        return $this->container['compute_status_4xx'];
    }

    /**
     * Sets compute_status_4xx
     *
     * @param int|null $compute_status_4xx Number of 4xx \"Client Error\" codes for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus4xx($compute_status_4xx)
    {
        $this->container['compute_status_4xx'] = $compute_status_4xx;

        return $this;
    }

    /**
     * Gets compute_status_5xx
     *
     * @return int|null
     */
    public function getComputeStatus5xx()
    {
        return $this->container['compute_status_5xx'];
    }

    /**
     * Sets compute_status_5xx
     *
     * @param int|null $compute_status_5xx Number of 5xx \"Server Error\" codes for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus5xx($compute_status_5xx)
    {
        $this->container['compute_status_5xx'] = $compute_status_5xx;

        return $this;
    }

    /**
     * Gets compute_status_200
     *
     * @return int|null
     */
    public function getComputeStatus200()
    {
        return $this->container['compute_status_200'];
    }

    /**
     * Sets compute_status_200
     *
     * @param int|null $compute_status_200 Number of responses received with status code 200 (Success) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus200($compute_status_200)
    {
        $this->container['compute_status_200'] = $compute_status_200;

        return $this;
    }

    /**
     * Gets compute_status_204
     *
     * @return int|null
     */
    public function getComputeStatus204()
    {
        return $this->container['compute_status_204'];
    }

    /**
     * Sets compute_status_204
     *
     * @param int|null $compute_status_204 Number of responses received with status code 204 (No Content) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus204($compute_status_204)
    {
        $this->container['compute_status_204'] = $compute_status_204;

        return $this;
    }

    /**
     * Gets compute_status_206
     *
     * @return int|null
     */
    public function getComputeStatus206()
    {
        return $this->container['compute_status_206'];
    }

    /**
     * Sets compute_status_206
     *
     * @param int|null $compute_status_206 Number of responses received with status code 206 (Partial Content) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus206($compute_status_206)
    {
        $this->container['compute_status_206'] = $compute_status_206;

        return $this;
    }

    /**
     * Gets compute_status_301
     *
     * @return int|null
     */
    public function getComputeStatus301()
    {
        return $this->container['compute_status_301'];
    }

    /**
     * Sets compute_status_301
     *
     * @param int|null $compute_status_301 Number of responses received with status code 301 (Moved Permanently) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus301($compute_status_301)
    {
        $this->container['compute_status_301'] = $compute_status_301;

        return $this;
    }

    /**
     * Gets compute_status_302
     *
     * @return int|null
     */
    public function getComputeStatus302()
    {
        return $this->container['compute_status_302'];
    }

    /**
     * Sets compute_status_302
     *
     * @param int|null $compute_status_302 Number of responses received with status code 302 (Found) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus302($compute_status_302)
    {
        $this->container['compute_status_302'] = $compute_status_302;

        return $this;
    }

    /**
     * Gets compute_status_304
     *
     * @return int|null
     */
    public function getComputeStatus304()
    {
        return $this->container['compute_status_304'];
    }

    /**
     * Sets compute_status_304
     *
     * @param int|null $compute_status_304 Number of responses received with status code 304 (Not Modified) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus304($compute_status_304)
    {
        $this->container['compute_status_304'] = $compute_status_304;

        return $this;
    }

    /**
     * Gets compute_status_400
     *
     * @return int|null
     */
    public function getComputeStatus400()
    {
        return $this->container['compute_status_400'];
    }

    /**
     * Sets compute_status_400
     *
     * @param int|null $compute_status_400 Number of responses received with status code 400 (Bad Request) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus400($compute_status_400)
    {
        $this->container['compute_status_400'] = $compute_status_400;

        return $this;
    }

    /**
     * Gets compute_status_401
     *
     * @return int|null
     */
    public function getComputeStatus401()
    {
        return $this->container['compute_status_401'];
    }

    /**
     * Sets compute_status_401
     *
     * @param int|null $compute_status_401 Number of responses received with status code 401 (Unauthorized) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus401($compute_status_401)
    {
        $this->container['compute_status_401'] = $compute_status_401;

        return $this;
    }

    /**
     * Gets compute_status_403
     *
     * @return int|null
     */
    public function getComputeStatus403()
    {
        return $this->container['compute_status_403'];
    }

    /**
     * Sets compute_status_403
     *
     * @param int|null $compute_status_403 Number of responses received with status code 403 (Forbidden) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus403($compute_status_403)
    {
        $this->container['compute_status_403'] = $compute_status_403;

        return $this;
    }

    /**
     * Gets compute_status_404
     *
     * @return int|null
     */
    public function getComputeStatus404()
    {
        return $this->container['compute_status_404'];
    }

    /**
     * Sets compute_status_404
     *
     * @param int|null $compute_status_404 Number of responses received with status code 404 (Not Found) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus404($compute_status_404)
    {
        $this->container['compute_status_404'] = $compute_status_404;

        return $this;
    }

    /**
     * Gets compute_status_416
     *
     * @return int|null
     */
    public function getComputeStatus416()
    {
        return $this->container['compute_status_416'];
    }

    /**
     * Sets compute_status_416
     *
     * @param int|null $compute_status_416 Number of responses received with status code 416 (Range Not Satisfiable) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus416($compute_status_416)
    {
        $this->container['compute_status_416'] = $compute_status_416;

        return $this;
    }

    /**
     * Gets compute_status_429
     *
     * @return int|null
     */
    public function getComputeStatus429()
    {
        return $this->container['compute_status_429'];
    }

    /**
     * Sets compute_status_429
     *
     * @param int|null $compute_status_429 Number of responses received with status code 429 (Too Many Requests) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus429($compute_status_429)
    {
        $this->container['compute_status_429'] = $compute_status_429;

        return $this;
    }

    /**
     * Gets compute_status_500
     *
     * @return int|null
     */
    public function getComputeStatus500()
    {
        return $this->container['compute_status_500'];
    }

    /**
     * Sets compute_status_500
     *
     * @param int|null $compute_status_500 Number of responses received with status code 500 (Internal Server Error) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus500($compute_status_500)
    {
        $this->container['compute_status_500'] = $compute_status_500;

        return $this;
    }

    /**
     * Gets compute_status_501
     *
     * @return int|null
     */
    public function getComputeStatus501()
    {
        return $this->container['compute_status_501'];
    }

    /**
     * Sets compute_status_501
     *
     * @param int|null $compute_status_501 Number of responses received with status code 501 (Not Implemented) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus501($compute_status_501)
    {
        $this->container['compute_status_501'] = $compute_status_501;

        return $this;
    }

    /**
     * Gets compute_status_502
     *
     * @return int|null
     */
    public function getComputeStatus502()
    {
        return $this->container['compute_status_502'];
    }

    /**
     * Sets compute_status_502
     *
     * @param int|null $compute_status_502 Number of responses received with status code 502 (Bad Gateway) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus502($compute_status_502)
    {
        $this->container['compute_status_502'] = $compute_status_502;

        return $this;
    }

    /**
     * Gets compute_status_503
     *
     * @return int|null
     */
    public function getComputeStatus503()
    {
        return $this->container['compute_status_503'];
    }

    /**
     * Sets compute_status_503
     *
     * @param int|null $compute_status_503 Number of responses received with status code 503 (Service Unavailable) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus503($compute_status_503)
    {
        $this->container['compute_status_503'] = $compute_status_503;

        return $this;
    }

    /**
     * Gets compute_status_504
     *
     * @return int|null
     */
    public function getComputeStatus504()
    {
        return $this->container['compute_status_504'];
    }

    /**
     * Sets compute_status_504
     *
     * @param int|null $compute_status_504 Number of responses received with status code 504 (Gateway Timeout) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus504($compute_status_504)
    {
        $this->container['compute_status_504'] = $compute_status_504;

        return $this;
    }

    /**
     * Gets compute_status_505
     *
     * @return int|null
     */
    public function getComputeStatus505()
    {
        return $this->container['compute_status_505'];
    }

    /**
     * Sets compute_status_505
     *
     * @param int|null $compute_status_505 Number of responses received with status code 505 (HTTP Version Not Supported) for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeStatus505($compute_status_505)
    {
        $this->container['compute_status_505'] = $compute_status_505;

        return $this;
    }

    /**
     * Gets compute_latency_0_to_1ms
     *
     * @return int|null
     */
    public function getComputeLatency0To1ms()
    {
        return $this->container['compute_latency_0_to_1ms'];
    }

    /**
     * Sets compute_latency_0_to_1ms
     *
     * @param int|null $compute_latency_0_to_1ms Number of responses with latency between 0 and 1 millisecond for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency0To1ms($compute_latency_0_to_1ms)
    {
        $this->container['compute_latency_0_to_1ms'] = $compute_latency_0_to_1ms;

        return $this;
    }

    /**
     * Gets compute_latency_1_to_5ms
     *
     * @return int|null
     */
    public function getComputeLatency1To5ms()
    {
        return $this->container['compute_latency_1_to_5ms'];
    }

    /**
     * Sets compute_latency_1_to_5ms
     *
     * @param int|null $compute_latency_1_to_5ms Number of responses with latency between 1 and 5 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency1To5ms($compute_latency_1_to_5ms)
    {
        $this->container['compute_latency_1_to_5ms'] = $compute_latency_1_to_5ms;

        return $this;
    }

    /**
     * Gets compute_latency_5_to_10ms
     *
     * @return int|null
     */
    public function getComputeLatency5To10ms()
    {
        return $this->container['compute_latency_5_to_10ms'];
    }

    /**
     * Sets compute_latency_5_to_10ms
     *
     * @param int|null $compute_latency_5_to_10ms Number of responses with latency between 5 and 10 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency5To10ms($compute_latency_5_to_10ms)
    {
        $this->container['compute_latency_5_to_10ms'] = $compute_latency_5_to_10ms;

        return $this;
    }

    /**
     * Gets compute_latency_10_to_50ms
     *
     * @return int|null
     */
    public function getComputeLatency10To50ms()
    {
        return $this->container['compute_latency_10_to_50ms'];
    }

    /**
     * Sets compute_latency_10_to_50ms
     *
     * @param int|null $compute_latency_10_to_50ms Number of responses with latency between 10 and 50 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency10To50ms($compute_latency_10_to_50ms)
    {
        $this->container['compute_latency_10_to_50ms'] = $compute_latency_10_to_50ms;

        return $this;
    }

    /**
     * Gets compute_latency_50_to_100ms
     *
     * @return int|null
     */
    public function getComputeLatency50To100ms()
    {
        return $this->container['compute_latency_50_to_100ms'];
    }

    /**
     * Sets compute_latency_50_to_100ms
     *
     * @param int|null $compute_latency_50_to_100ms Number of responses with latency between 50 and 100 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency50To100ms($compute_latency_50_to_100ms)
    {
        $this->container['compute_latency_50_to_100ms'] = $compute_latency_50_to_100ms;

        return $this;
    }

    /**
     * Gets compute_latency_100_to_250ms
     *
     * @return int|null
     */
    public function getComputeLatency100To250ms()
    {
        return $this->container['compute_latency_100_to_250ms'];
    }

    /**
     * Sets compute_latency_100_to_250ms
     *
     * @param int|null $compute_latency_100_to_250ms Number of responses with latency between 100 and 250 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency100To250ms($compute_latency_100_to_250ms)
    {
        $this->container['compute_latency_100_to_250ms'] = $compute_latency_100_to_250ms;

        return $this;
    }

    /**
     * Gets compute_latency_250_to_500ms
     *
     * @return int|null
     */
    public function getComputeLatency250To500ms()
    {
        return $this->container['compute_latency_250_to_500ms'];
    }

    /**
     * Sets compute_latency_250_to_500ms
     *
     * @param int|null $compute_latency_250_to_500ms Number of responses with latency between 250 and 500 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency250To500ms($compute_latency_250_to_500ms)
    {
        $this->container['compute_latency_250_to_500ms'] = $compute_latency_250_to_500ms;

        return $this;
    }

    /**
     * Gets compute_latency_500_to_1000ms
     *
     * @return int|null
     */
    public function getComputeLatency500To1000ms()
    {
        return $this->container['compute_latency_500_to_1000ms'];
    }

    /**
     * Sets compute_latency_500_to_1000ms
     *
     * @param int|null $compute_latency_500_to_1000ms Number of responses with latency between 500 and 1,000 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency500To1000ms($compute_latency_500_to_1000ms)
    {
        $this->container['compute_latency_500_to_1000ms'] = $compute_latency_500_to_1000ms;

        return $this;
    }

    /**
     * Gets compute_latency_1000_to_5000ms
     *
     * @return int|null
     */
    public function getComputeLatency1000To5000ms()
    {
        return $this->container['compute_latency_1000_to_5000ms'];
    }

    /**
     * Sets compute_latency_1000_to_5000ms
     *
     * @param int|null $compute_latency_1000_to_5000ms Number of responses with latency between 1,000 and 5,000 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency1000To5000ms($compute_latency_1000_to_5000ms)
    {
        $this->container['compute_latency_1000_to_5000ms'] = $compute_latency_1000_to_5000ms;

        return $this;
    }

    /**
     * Gets compute_latency_5000_to_10000ms
     *
     * @return int|null
     */
    public function getComputeLatency5000To10000ms()
    {
        return $this->container['compute_latency_5000_to_10000ms'];
    }

    /**
     * Sets compute_latency_5000_to_10000ms
     *
     * @param int|null $compute_latency_5000_to_10000ms Number of responses with latency between 5,000 and 10,000 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency5000To10000ms($compute_latency_5000_to_10000ms)
    {
        $this->container['compute_latency_5000_to_10000ms'] = $compute_latency_5000_to_10000ms;

        return $this;
    }

    /**
     * Gets compute_latency_10000_to_60000ms
     *
     * @return int|null
     */
    public function getComputeLatency10000To60000ms()
    {
        return $this->container['compute_latency_10000_to_60000ms'];
    }

    /**
     * Sets compute_latency_10000_to_60000ms
     *
     * @param int|null $compute_latency_10000_to_60000ms Number of responses with latency between 10,000 and 60,000 milliseconds for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency10000To60000ms($compute_latency_10000_to_60000ms)
    {
        $this->container['compute_latency_10000_to_60000ms'] = $compute_latency_10000_to_60000ms;

        return $this;
    }

    /**
     * Gets compute_latency_60000ms
     *
     * @return int|null
     */
    public function getComputeLatency60000ms()
    {
        return $this->container['compute_latency_60000ms'];
    }

    /**
     * Sets compute_latency_60000ms
     *
     * @param int|null $compute_latency_60000ms Number of responses with latency of 60,000 milliseconds and above for origin received by the Compute platform.
     *
     * @return self
     */
    public function setComputeLatency60000ms($compute_latency_60000ms)
    {
        $this->container['compute_latency_60000ms'] = $compute_latency_60000ms;

        return $this;
    }

    /**
     * Gets all_responses
     *
     * @return int|null
     */
    public function getAllResponses()
    {
        return $this->container['all_responses'];
    }

    /**
     * Sets all_responses
     *
     * @param int|null $all_responses Number of responses received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllResponses($all_responses)
    {
        $this->container['all_responses'] = $all_responses;

        return $this;
    }

    /**
     * Gets all_resp_header_bytes
     *
     * @return int|null
     */
    public function getAllRespHeaderBytes()
    {
        return $this->container['all_resp_header_bytes'];
    }

    /**
     * Sets all_resp_header_bytes
     *
     * @param int|null $all_resp_header_bytes Number of header bytes received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllRespHeaderBytes($all_resp_header_bytes)
    {
        $this->container['all_resp_header_bytes'] = $all_resp_header_bytes;

        return $this;
    }

    /**
     * Gets all_resp_body_bytes
     *
     * @return int|null
     */
    public function getAllRespBodyBytes()
    {
        return $this->container['all_resp_body_bytes'];
    }

    /**
     * Sets all_resp_body_bytes
     *
     * @param int|null $all_resp_body_bytes Number of body bytes received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllRespBodyBytes($all_resp_body_bytes)
    {
        $this->container['all_resp_body_bytes'] = $all_resp_body_bytes;

        return $this;
    }

    /**
     * Gets all_status_1xx
     *
     * @return int|null
     */
    public function getAllStatus1xx()
    {
        return $this->container['all_status_1xx'];
    }

    /**
     * Sets all_status_1xx
     *
     * @param int|null $all_status_1xx Number of 1xx \"Informational\" category status codes delivered received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus1xx($all_status_1xx)
    {
        $this->container['all_status_1xx'] = $all_status_1xx;

        return $this;
    }

    /**
     * Gets all_status_2xx
     *
     * @return int|null
     */
    public function getAllStatus2xx()
    {
        return $this->container['all_status_2xx'];
    }

    /**
     * Sets all_status_2xx
     *
     * @param int|null $all_status_2xx Number of 2xx \"Success\" status codes received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus2xx($all_status_2xx)
    {
        $this->container['all_status_2xx'] = $all_status_2xx;

        return $this;
    }

    /**
     * Gets all_status_3xx
     *
     * @return int|null
     */
    public function getAllStatus3xx()
    {
        return $this->container['all_status_3xx'];
    }

    /**
     * Sets all_status_3xx
     *
     * @param int|null $all_status_3xx Number of 3xx \"Redirection\" codes received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus3xx($all_status_3xx)
    {
        $this->container['all_status_3xx'] = $all_status_3xx;

        return $this;
    }

    /**
     * Gets all_status_4xx
     *
     * @return int|null
     */
    public function getAllStatus4xx()
    {
        return $this->container['all_status_4xx'];
    }

    /**
     * Sets all_status_4xx
     *
     * @param int|null $all_status_4xx Number of 4xx \"Client Error\" codes received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus4xx($all_status_4xx)
    {
        $this->container['all_status_4xx'] = $all_status_4xx;

        return $this;
    }

    /**
     * Gets all_status_5xx
     *
     * @return int|null
     */
    public function getAllStatus5xx()
    {
        return $this->container['all_status_5xx'];
    }

    /**
     * Sets all_status_5xx
     *
     * @param int|null $all_status_5xx Number of 5xx \"Server Error\" codes received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus5xx($all_status_5xx)
    {
        $this->container['all_status_5xx'] = $all_status_5xx;

        return $this;
    }

    /**
     * Gets all_status_200
     *
     * @return int|null
     */
    public function getAllStatus200()
    {
        return $this->container['all_status_200'];
    }

    /**
     * Sets all_status_200
     *
     * @param int|null $all_status_200 Number of responses received with status code 200 (Success) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus200($all_status_200)
    {
        $this->container['all_status_200'] = $all_status_200;

        return $this;
    }

    /**
     * Gets all_status_204
     *
     * @return int|null
     */
    public function getAllStatus204()
    {
        return $this->container['all_status_204'];
    }

    /**
     * Sets all_status_204
     *
     * @param int|null $all_status_204 Number of responses received with status code 204 (No Content) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus204($all_status_204)
    {
        $this->container['all_status_204'] = $all_status_204;

        return $this;
    }

    /**
     * Gets all_status_206
     *
     * @return int|null
     */
    public function getAllStatus206()
    {
        return $this->container['all_status_206'];
    }

    /**
     * Sets all_status_206
     *
     * @param int|null $all_status_206 Number of responses received with status code 206 (Partial Content) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus206($all_status_206)
    {
        $this->container['all_status_206'] = $all_status_206;

        return $this;
    }

    /**
     * Gets all_status_301
     *
     * @return int|null
     */
    public function getAllStatus301()
    {
        return $this->container['all_status_301'];
    }

    /**
     * Sets all_status_301
     *
     * @param int|null $all_status_301 Number of responses received with status code 301 (Moved Permanently) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus301($all_status_301)
    {
        $this->container['all_status_301'] = $all_status_301;

        return $this;
    }

    /**
     * Gets all_status_302
     *
     * @return int|null
     */
    public function getAllStatus302()
    {
        return $this->container['all_status_302'];
    }

    /**
     * Sets all_status_302
     *
     * @param int|null $all_status_302 Number of responses received with status code 302 (Found) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus302($all_status_302)
    {
        $this->container['all_status_302'] = $all_status_302;

        return $this;
    }

    /**
     * Gets all_status_304
     *
     * @return int|null
     */
    public function getAllStatus304()
    {
        return $this->container['all_status_304'];
    }

    /**
     * Sets all_status_304
     *
     * @param int|null $all_status_304 Number of responses received with status code 304 (Not Modified) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus304($all_status_304)
    {
        $this->container['all_status_304'] = $all_status_304;

        return $this;
    }

    /**
     * Gets all_status_400
     *
     * @return int|null
     */
    public function getAllStatus400()
    {
        return $this->container['all_status_400'];
    }

    /**
     * Sets all_status_400
     *
     * @param int|null $all_status_400 Number of responses received with status code 400 (Bad Request) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus400($all_status_400)
    {
        $this->container['all_status_400'] = $all_status_400;

        return $this;
    }

    /**
     * Gets all_status_401
     *
     * @return int|null
     */
    public function getAllStatus401()
    {
        return $this->container['all_status_401'];
    }

    /**
     * Sets all_status_401
     *
     * @param int|null $all_status_401 Number of responses received with status code 401 (Unauthorized) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus401($all_status_401)
    {
        $this->container['all_status_401'] = $all_status_401;

        return $this;
    }

    /**
     * Gets all_status_403
     *
     * @return int|null
     */
    public function getAllStatus403()
    {
        return $this->container['all_status_403'];
    }

    /**
     * Sets all_status_403
     *
     * @param int|null $all_status_403 Number of responses received with status code 403 (Forbidden) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus403($all_status_403)
    {
        $this->container['all_status_403'] = $all_status_403;

        return $this;
    }

    /**
     * Gets all_status_404
     *
     * @return int|null
     */
    public function getAllStatus404()
    {
        return $this->container['all_status_404'];
    }

    /**
     * Sets all_status_404
     *
     * @param int|null $all_status_404 Number of responses received with status code 404 (Not Found) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus404($all_status_404)
    {
        $this->container['all_status_404'] = $all_status_404;

        return $this;
    }

    /**
     * Gets all_status_416
     *
     * @return int|null
     */
    public function getAllStatus416()
    {
        return $this->container['all_status_416'];
    }

    /**
     * Sets all_status_416
     *
     * @param int|null $all_status_416 Number of responses received with status code 416 (Range Not Satisfiable) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus416($all_status_416)
    {
        $this->container['all_status_416'] = $all_status_416;

        return $this;
    }

    /**
     * Gets all_status_429
     *
     * @return int|null
     */
    public function getAllStatus429()
    {
        return $this->container['all_status_429'];
    }

    /**
     * Sets all_status_429
     *
     * @param int|null $all_status_429 Number of responses received with status code 429 (Too Many Requests) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus429($all_status_429)
    {
        $this->container['all_status_429'] = $all_status_429;

        return $this;
    }

    /**
     * Gets all_status_500
     *
     * @return int|null
     */
    public function getAllStatus500()
    {
        return $this->container['all_status_500'];
    }

    /**
     * Sets all_status_500
     *
     * @param int|null $all_status_500 Number of responses received with status code 500 (Internal Server Error) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus500($all_status_500)
    {
        $this->container['all_status_500'] = $all_status_500;

        return $this;
    }

    /**
     * Gets all_status_501
     *
     * @return int|null
     */
    public function getAllStatus501()
    {
        return $this->container['all_status_501'];
    }

    /**
     * Sets all_status_501
     *
     * @param int|null $all_status_501 Number of responses received with status code 501 (Not Implemented) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus501($all_status_501)
    {
        $this->container['all_status_501'] = $all_status_501;

        return $this;
    }

    /**
     * Gets all_status_502
     *
     * @return int|null
     */
    public function getAllStatus502()
    {
        return $this->container['all_status_502'];
    }

    /**
     * Sets all_status_502
     *
     * @param int|null $all_status_502 Number of responses received with status code 502 (Bad Gateway) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus502($all_status_502)
    {
        $this->container['all_status_502'] = $all_status_502;

        return $this;
    }

    /**
     * Gets all_status_503
     *
     * @return int|null
     */
    public function getAllStatus503()
    {
        return $this->container['all_status_503'];
    }

    /**
     * Sets all_status_503
     *
     * @param int|null $all_status_503 Number of responses received with status code 503 (Service Unavailable) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus503($all_status_503)
    {
        $this->container['all_status_503'] = $all_status_503;

        return $this;
    }

    /**
     * Gets all_status_504
     *
     * @return int|null
     */
    public function getAllStatus504()
    {
        return $this->container['all_status_504'];
    }

    /**
     * Sets all_status_504
     *
     * @param int|null $all_status_504 Number of responses received with status code 504 (Gateway Timeout) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus504($all_status_504)
    {
        $this->container['all_status_504'] = $all_status_504;

        return $this;
    }

    /**
     * Gets all_status_505
     *
     * @return int|null
     */
    public function getAllStatus505()
    {
        return $this->container['all_status_505'];
    }

    /**
     * Sets all_status_505
     *
     * @param int|null $all_status_505 Number of responses received with status code 505 (HTTP Version Not Supported) received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllStatus505($all_status_505)
    {
        $this->container['all_status_505'] = $all_status_505;

        return $this;
    }

    /**
     * Gets all_latency_0_to_1ms
     *
     * @return int|null
     */
    public function getAllLatency0To1ms()
    {
        return $this->container['all_latency_0_to_1ms'];
    }

    /**
     * Sets all_latency_0_to_1ms
     *
     * @param int|null $all_latency_0_to_1ms Number of responses with latency between 0 and 1 millisecond received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency0To1ms($all_latency_0_to_1ms)
    {
        $this->container['all_latency_0_to_1ms'] = $all_latency_0_to_1ms;

        return $this;
    }

    /**
     * Gets all_latency_1_to_5ms
     *
     * @return int|null
     */
    public function getAllLatency1To5ms()
    {
        return $this->container['all_latency_1_to_5ms'];
    }

    /**
     * Sets all_latency_1_to_5ms
     *
     * @param int|null $all_latency_1_to_5ms Number of responses with latency between 1 and 5 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency1To5ms($all_latency_1_to_5ms)
    {
        $this->container['all_latency_1_to_5ms'] = $all_latency_1_to_5ms;

        return $this;
    }

    /**
     * Gets all_latency_5_to_10ms
     *
     * @return int|null
     */
    public function getAllLatency5To10ms()
    {
        return $this->container['all_latency_5_to_10ms'];
    }

    /**
     * Sets all_latency_5_to_10ms
     *
     * @param int|null $all_latency_5_to_10ms Number of responses with latency between 5 and 10 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency5To10ms($all_latency_5_to_10ms)
    {
        $this->container['all_latency_5_to_10ms'] = $all_latency_5_to_10ms;

        return $this;
    }

    /**
     * Gets all_latency_10_to_50ms
     *
     * @return int|null
     */
    public function getAllLatency10To50ms()
    {
        return $this->container['all_latency_10_to_50ms'];
    }

    /**
     * Sets all_latency_10_to_50ms
     *
     * @param int|null $all_latency_10_to_50ms Number of responses with latency between 10 and 50 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency10To50ms($all_latency_10_to_50ms)
    {
        $this->container['all_latency_10_to_50ms'] = $all_latency_10_to_50ms;

        return $this;
    }

    /**
     * Gets all_latency_50_to_100ms
     *
     * @return int|null
     */
    public function getAllLatency50To100ms()
    {
        return $this->container['all_latency_50_to_100ms'];
    }

    /**
     * Sets all_latency_50_to_100ms
     *
     * @param int|null $all_latency_50_to_100ms Number of responses with latency between 50 and 100 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency50To100ms($all_latency_50_to_100ms)
    {
        $this->container['all_latency_50_to_100ms'] = $all_latency_50_to_100ms;

        return $this;
    }

    /**
     * Gets all_latency_100_to_250ms
     *
     * @return int|null
     */
    public function getAllLatency100To250ms()
    {
        return $this->container['all_latency_100_to_250ms'];
    }

    /**
     * Sets all_latency_100_to_250ms
     *
     * @param int|null $all_latency_100_to_250ms Number of responses with latency between 100 and 250 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency100To250ms($all_latency_100_to_250ms)
    {
        $this->container['all_latency_100_to_250ms'] = $all_latency_100_to_250ms;

        return $this;
    }

    /**
     * Gets all_latency_250_to_500ms
     *
     * @return int|null
     */
    public function getAllLatency250To500ms()
    {
        return $this->container['all_latency_250_to_500ms'];
    }

    /**
     * Sets all_latency_250_to_500ms
     *
     * @param int|null $all_latency_250_to_500ms Number of responses with latency between 250 and 500 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency250To500ms($all_latency_250_to_500ms)
    {
        $this->container['all_latency_250_to_500ms'] = $all_latency_250_to_500ms;

        return $this;
    }

    /**
     * Gets all_latency_500_to_1000ms
     *
     * @return int|null
     */
    public function getAllLatency500To1000ms()
    {
        return $this->container['all_latency_500_to_1000ms'];
    }

    /**
     * Sets all_latency_500_to_1000ms
     *
     * @param int|null $all_latency_500_to_1000ms Number of responses with latency between 500 and 1,000 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency500To1000ms($all_latency_500_to_1000ms)
    {
        $this->container['all_latency_500_to_1000ms'] = $all_latency_500_to_1000ms;

        return $this;
    }

    /**
     * Gets all_latency_1000_to_5000ms
     *
     * @return int|null
     */
    public function getAllLatency1000To5000ms()
    {
        return $this->container['all_latency_1000_to_5000ms'];
    }

    /**
     * Sets all_latency_1000_to_5000ms
     *
     * @param int|null $all_latency_1000_to_5000ms Number of responses with latency between 1,000 and 5,000 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency1000To5000ms($all_latency_1000_to_5000ms)
    {
        $this->container['all_latency_1000_to_5000ms'] = $all_latency_1000_to_5000ms;

        return $this;
    }

    /**
     * Gets all_latency_5000_to_10000ms
     *
     * @return int|null
     */
    public function getAllLatency5000To10000ms()
    {
        return $this->container['all_latency_5000_to_10000ms'];
    }

    /**
     * Sets all_latency_5000_to_10000ms
     *
     * @param int|null $all_latency_5000_to_10000ms Number of responses with latency between 5,000 and 10,000 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency5000To10000ms($all_latency_5000_to_10000ms)
    {
        $this->container['all_latency_5000_to_10000ms'] = $all_latency_5000_to_10000ms;

        return $this;
    }

    /**
     * Gets all_latency_10000_to_60000ms
     *
     * @return int|null
     */
    public function getAllLatency10000To60000ms()
    {
        return $this->container['all_latency_10000_to_60000ms'];
    }

    /**
     * Sets all_latency_10000_to_60000ms
     *
     * @param int|null $all_latency_10000_to_60000ms Number of responses with latency between 10,000 and 60,000 milliseconds received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency10000To60000ms($all_latency_10000_to_60000ms)
    {
        $this->container['all_latency_10000_to_60000ms'] = $all_latency_10000_to_60000ms;

        return $this;
    }

    /**
     * Gets all_latency_60000ms
     *
     * @return int|null
     */
    public function getAllLatency60000ms()
    {
        return $this->container['all_latency_60000ms'];
    }

    /**
     * Sets all_latency_60000ms
     *
     * @param int|null $all_latency_60000ms Number of responses with latency of 60,000 milliseconds and above received for origin requests made by all sources.
     *
     * @return self
     */
    public function setAllLatency60000ms($all_latency_60000ms)
    {
        $this->container['all_latency_60000ms'] = $all_latency_60000ms;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


