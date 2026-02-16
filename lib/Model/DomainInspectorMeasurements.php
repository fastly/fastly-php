<?php
/**
 * DomainInspectorMeasurements
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
 * DomainInspectorMeasurements Class Doc Comment
 *
 * @category Class
 * @description A measurements object provides a count of the total number of &#x60;requests&#x60; received by Fastly for your domain in the reported time period and for the relevant POP, as specified in the [entry](#entry-data-model). It also includes the number of responses for specific HTTP response status codes and for status code ranges. This dataset is sparse: only the keys with non-zero values will be included in the record. Where a specific status code does not have a field in this model (e.g., &#x60;429 Too Many Requests&#x60;), any responses with that code will be counted as part of the range count (&#x60;4xx&#x60; in this case) but will not be separately identified in the data.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DomainInspectorMeasurements implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'domain_inspector_measurements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'edge_requests' => 'int',
        'edge_resp_header_bytes' => 'int',
        'edge_resp_body_bytes' => 'int',
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
        'status_530' => 'int',
        'requests' => 'int',
        'resp_header_bytes' => 'int',
        'resp_body_bytes' => 'int',
        'bereq_header_bytes' => 'int',
        'bereq_body_bytes' => 'int',
        'edge_hit_requests' => 'int',
        'edge_miss_requests' => 'int',
        'origin_fetches' => 'int',
        'origin_fetch_resp_header_bytes' => 'int',
        'origin_fetch_resp_body_bytes' => 'int',
        'bandwidth' => 'int',
        'edge_hit_ratio' => 'float',
        'origin_offload' => 'float',
        'origin_status_200' => 'int',
        'origin_status_204' => 'int',
        'origin_status_206' => 'int',
        'origin_status_301' => 'int',
        'origin_status_302' => 'int',
        'origin_status_304' => 'int',
        'origin_status_400' => 'int',
        'origin_status_401' => 'int',
        'origin_status_403' => 'int',
        'origin_status_404' => 'int',
        'origin_status_416' => 'int',
        'origin_status_429' => 'int',
        'origin_status_500' => 'int',
        'origin_status_501' => 'int',
        'origin_status_502' => 'int',
        'origin_status_503' => 'int',
        'origin_status_504' => 'int',
        'origin_status_505' => 'int',
        'origin_status_530' => 'int',
        'origin_status_1xx' => 'int',
        'origin_status_2xx' => 'int',
        'origin_status_3xx' => 'int',
        'origin_status_4xx' => 'int',
        'origin_status_5xx' => 'int',
        'compute_bereq_body_bytes' => 'int',
        'compute_bereq_errors' => 'int',
        'compute_bereq_header_bytes' => 'int',
        'compute_bereqs' => 'int',
        'compute_beresp_body_bytes' => 'int',
        'compute_beresp_header_bytes' => 'int',
        'compute_execution_time_ms' => 'int',
        'compute_origin_status_1xx' => 'int',
        'compute_origin_status_200' => 'int',
        'compute_origin_status_204' => 'int',
        'compute_origin_status_206' => 'int',
        'compute_origin_status_2xx' => 'int',
        'compute_origin_status_301' => 'int',
        'compute_origin_status_302' => 'int',
        'compute_origin_status_304' => 'int',
        'compute_origin_status_3xx' => 'int',
        'compute_origin_status_400' => 'int',
        'compute_origin_status_401' => 'int',
        'compute_origin_status_403' => 'int',
        'compute_origin_status_404' => 'int',
        'compute_origin_status_416' => 'int',
        'compute_origin_status_429' => 'int',
        'compute_origin_status_4xx' => 'int',
        'compute_origin_status_500' => 'int',
        'compute_origin_status_501' => 'int',
        'compute_origin_status_502' => 'int',
        'compute_origin_status_503' => 'int',
        'compute_origin_status_504' => 'int',
        'compute_origin_status_505' => 'int',
        'compute_origin_status_530' => 'int',
        'compute_origin_status_5xx' => 'int',
        'compute_req_body_bytes' => 'int',
        'compute_req_header_bytes' => 'int',
        'compute_request_time_billed_ms' => 'int',
        'compute_request_time_ms' => 'int',
        'compute_request' => 'int',
        'compute_resp_body_bytes' => 'int',
        'compute_resp_header_bytes' => 'int',
        'compute_resp_status_103' => 'int',
        'compute_resp_status_1xx' => 'int',
        'compute_resp_status_200' => 'int',
        'compute_resp_status_204' => 'int',
        'compute_resp_status_206' => 'int',
        'compute_resp_status_2xx' => 'int',
        'compute_resp_status_301' => 'int',
        'compute_resp_status_302' => 'int',
        'compute_resp_status_304' => 'int',
        'compute_resp_status_3xx' => 'int',
        'compute_resp_status_400' => 'int',
        'compute_resp_status_401' => 'int',
        'compute_resp_status_403' => 'int',
        'compute_resp_status_404' => 'int',
        'compute_resp_status_416' => 'int',
        'compute_resp_status_429' => 'int',
        'compute_resp_status_4xx' => 'int',
        'compute_resp_status_500' => 'int',
        'compute_resp_status_501' => 'int',
        'compute_resp_status_502' => 'int',
        'compute_resp_status_503' => 'int',
        'compute_resp_status_504' => 'int',
        'compute_resp_status_505' => 'int',
        'compute_resp_status_530' => 'int',
        'compute_resp_status_5xx' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'edge_requests' => 'int64',
        'edge_resp_header_bytes' => 'int64',
        'edge_resp_body_bytes' => 'int64',
        'status_1xx' => 'int64',
        'status_2xx' => 'int64',
        'status_3xx' => 'int64',
        'status_4xx' => 'int64',
        'status_5xx' => 'int64',
        'status_200' => 'int64',
        'status_204' => 'int64',
        'status_206' => 'int64',
        'status_301' => 'int64',
        'status_302' => 'int64',
        'status_304' => 'int64',
        'status_400' => 'int64',
        'status_401' => 'int64',
        'status_403' => 'int64',
        'status_404' => 'int64',
        'status_416' => 'int64',
        'status_429' => 'int64',
        'status_500' => 'int64',
        'status_501' => 'int64',
        'status_502' => 'int64',
        'status_503' => 'int64',
        'status_504' => 'int64',
        'status_505' => 'int64',
        'status_530' => 'int64',
        'requests' => 'int64',
        'resp_header_bytes' => 'int64',
        'resp_body_bytes' => 'int64',
        'bereq_header_bytes' => 'int64',
        'bereq_body_bytes' => 'int64',
        'edge_hit_requests' => 'int64',
        'edge_miss_requests' => 'int64',
        'origin_fetches' => 'int64',
        'origin_fetch_resp_header_bytes' => 'int64',
        'origin_fetch_resp_body_bytes' => 'int64',
        'bandwidth' => 'int64',
        'edge_hit_ratio' => null,
        'origin_offload' => null,
        'origin_status_200' => 'int64',
        'origin_status_204' => 'int64',
        'origin_status_206' => 'int64',
        'origin_status_301' => 'int64',
        'origin_status_302' => 'int64',
        'origin_status_304' => 'int64',
        'origin_status_400' => 'int64',
        'origin_status_401' => 'int64',
        'origin_status_403' => 'int64',
        'origin_status_404' => 'int64',
        'origin_status_416' => 'int64',
        'origin_status_429' => 'int64',
        'origin_status_500' => 'int64',
        'origin_status_501' => 'int64',
        'origin_status_502' => 'int64',
        'origin_status_503' => 'int64',
        'origin_status_504' => 'int64',
        'origin_status_505' => 'int64',
        'origin_status_530' => 'int64',
        'origin_status_1xx' => 'int64',
        'origin_status_2xx' => 'int64',
        'origin_status_3xx' => 'int64',
        'origin_status_4xx' => 'int64',
        'origin_status_5xx' => 'int64',
        'compute_bereq_body_bytes' => 'int64',
        'compute_bereq_errors' => 'int64',
        'compute_bereq_header_bytes' => 'int64',
        'compute_bereqs' => 'int64',
        'compute_beresp_body_bytes' => 'int64',
        'compute_beresp_header_bytes' => 'int64',
        'compute_execution_time_ms' => 'int64',
        'compute_origin_status_1xx' => 'int64',
        'compute_origin_status_200' => 'int64',
        'compute_origin_status_204' => 'int64',
        'compute_origin_status_206' => 'int64',
        'compute_origin_status_2xx' => 'int64',
        'compute_origin_status_301' => 'int64',
        'compute_origin_status_302' => 'int64',
        'compute_origin_status_304' => 'int64',
        'compute_origin_status_3xx' => 'int64',
        'compute_origin_status_400' => 'int64',
        'compute_origin_status_401' => 'int64',
        'compute_origin_status_403' => 'int64',
        'compute_origin_status_404' => 'int64',
        'compute_origin_status_416' => 'int64',
        'compute_origin_status_429' => 'int64',
        'compute_origin_status_4xx' => 'int64',
        'compute_origin_status_500' => 'int64',
        'compute_origin_status_501' => 'int64',
        'compute_origin_status_502' => 'int64',
        'compute_origin_status_503' => 'int64',
        'compute_origin_status_504' => 'int64',
        'compute_origin_status_505' => 'int64',
        'compute_origin_status_530' => 'int64',
        'compute_origin_status_5xx' => 'int64',
        'compute_req_body_bytes' => 'int64',
        'compute_req_header_bytes' => 'int64',
        'compute_request_time_billed_ms' => 'int64',
        'compute_request_time_ms' => 'int64',
        'compute_request' => 'int64',
        'compute_resp_body_bytes' => 'int64',
        'compute_resp_header_bytes' => 'int64',
        'compute_resp_status_103' => 'int64',
        'compute_resp_status_1xx' => 'int64',
        'compute_resp_status_200' => 'int64',
        'compute_resp_status_204' => 'int64',
        'compute_resp_status_206' => 'int64',
        'compute_resp_status_2xx' => 'int64',
        'compute_resp_status_301' => 'int64',
        'compute_resp_status_302' => 'int64',
        'compute_resp_status_304' => 'int64',
        'compute_resp_status_3xx' => 'int64',
        'compute_resp_status_400' => 'int64',
        'compute_resp_status_401' => 'int64',
        'compute_resp_status_403' => 'int64',
        'compute_resp_status_404' => 'int64',
        'compute_resp_status_416' => 'int64',
        'compute_resp_status_429' => 'int64',
        'compute_resp_status_4xx' => 'int64',
        'compute_resp_status_500' => 'int64',
        'compute_resp_status_501' => 'int64',
        'compute_resp_status_502' => 'int64',
        'compute_resp_status_503' => 'int64',
        'compute_resp_status_504' => 'int64',
        'compute_resp_status_505' => 'int64',
        'compute_resp_status_530' => 'int64',
        'compute_resp_status_5xx' => 'int64'
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
        'edge_requests' => 'edge_requests',
        'edge_resp_header_bytes' => 'edge_resp_header_bytes',
        'edge_resp_body_bytes' => 'edge_resp_body_bytes',
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
        'status_530' => 'status_530',
        'requests' => 'requests',
        'resp_header_bytes' => 'resp_header_bytes',
        'resp_body_bytes' => 'resp_body_bytes',
        'bereq_header_bytes' => 'bereq_header_bytes',
        'bereq_body_bytes' => 'bereq_body_bytes',
        'edge_hit_requests' => 'edge_hit_requests',
        'edge_miss_requests' => 'edge_miss_requests',
        'origin_fetches' => 'origin_fetches',
        'origin_fetch_resp_header_bytes' => 'origin_fetch_resp_header_bytes',
        'origin_fetch_resp_body_bytes' => 'origin_fetch_resp_body_bytes',
        'bandwidth' => 'bandwidth',
        'edge_hit_ratio' => 'edge_hit_ratio',
        'origin_offload' => 'origin_offload',
        'origin_status_200' => 'origin_status_200',
        'origin_status_204' => 'origin_status_204',
        'origin_status_206' => 'origin_status_206',
        'origin_status_301' => 'origin_status_301',
        'origin_status_302' => 'origin_status_302',
        'origin_status_304' => 'origin_status_304',
        'origin_status_400' => 'origin_status_400',
        'origin_status_401' => 'origin_status_401',
        'origin_status_403' => 'origin_status_403',
        'origin_status_404' => 'origin_status_404',
        'origin_status_416' => 'origin_status_416',
        'origin_status_429' => 'origin_status_429',
        'origin_status_500' => 'origin_status_500',
        'origin_status_501' => 'origin_status_501',
        'origin_status_502' => 'origin_status_502',
        'origin_status_503' => 'origin_status_503',
        'origin_status_504' => 'origin_status_504',
        'origin_status_505' => 'origin_status_505',
        'origin_status_530' => 'origin_status_530',
        'origin_status_1xx' => 'origin_status_1xx',
        'origin_status_2xx' => 'origin_status_2xx',
        'origin_status_3xx' => 'origin_status_3xx',
        'origin_status_4xx' => 'origin_status_4xx',
        'origin_status_5xx' => 'origin_status_5xx',
        'compute_bereq_body_bytes' => 'compute_bereq_body_bytes',
        'compute_bereq_errors' => 'compute_bereq_errors',
        'compute_bereq_header_bytes' => 'compute_bereq_header_bytes',
        'compute_bereqs' => 'compute_bereqs',
        'compute_beresp_body_bytes' => 'compute_beresp_body_bytes',
        'compute_beresp_header_bytes' => 'compute_beresp_header_bytes',
        'compute_execution_time_ms' => 'compute_execution_time_ms',
        'compute_origin_status_1xx' => 'compute_origin_status_1xx',
        'compute_origin_status_200' => 'compute_origin_status_200',
        'compute_origin_status_204' => 'compute_origin_status_204',
        'compute_origin_status_206' => 'compute_origin_status_206',
        'compute_origin_status_2xx' => 'compute_origin_status_2xx',
        'compute_origin_status_301' => 'compute_origin_status_301',
        'compute_origin_status_302' => 'compute_origin_status_302',
        'compute_origin_status_304' => 'compute_origin_status_304',
        'compute_origin_status_3xx' => 'compute_origin_status_3xx',
        'compute_origin_status_400' => 'compute_origin_status_400',
        'compute_origin_status_401' => 'compute_origin_status_401',
        'compute_origin_status_403' => 'compute_origin_status_403',
        'compute_origin_status_404' => 'compute_origin_status_404',
        'compute_origin_status_416' => 'compute_origin_status_416',
        'compute_origin_status_429' => 'compute_origin_status_429',
        'compute_origin_status_4xx' => 'compute_origin_status_4xx',
        'compute_origin_status_500' => 'compute_origin_status_500',
        'compute_origin_status_501' => 'compute_origin_status_501',
        'compute_origin_status_502' => 'compute_origin_status_502',
        'compute_origin_status_503' => 'compute_origin_status_503',
        'compute_origin_status_504' => 'compute_origin_status_504',
        'compute_origin_status_505' => 'compute_origin_status_505',
        'compute_origin_status_530' => 'compute_origin_status_530',
        'compute_origin_status_5xx' => 'compute_origin_status_5xx',
        'compute_req_body_bytes' => 'compute_req_body_bytes',
        'compute_req_header_bytes' => 'compute_req_header_bytes',
        'compute_request_time_billed_ms' => 'compute_request_time_billed_ms',
        'compute_request_time_ms' => 'compute_request_time_ms',
        'compute_request' => 'compute_request',
        'compute_resp_body_bytes' => 'compute_resp_body_bytes',
        'compute_resp_header_bytes' => 'compute_resp_header_bytes',
        'compute_resp_status_103' => 'compute_resp_status_103',
        'compute_resp_status_1xx' => 'compute_resp_status_1xx',
        'compute_resp_status_200' => 'compute_resp_status_200',
        'compute_resp_status_204' => 'compute_resp_status_204',
        'compute_resp_status_206' => 'compute_resp_status_206',
        'compute_resp_status_2xx' => 'compute_resp_status_2xx',
        'compute_resp_status_301' => 'compute_resp_status_301',
        'compute_resp_status_302' => 'compute_resp_status_302',
        'compute_resp_status_304' => 'compute_resp_status_304',
        'compute_resp_status_3xx' => 'compute_resp_status_3xx',
        'compute_resp_status_400' => 'compute_resp_status_400',
        'compute_resp_status_401' => 'compute_resp_status_401',
        'compute_resp_status_403' => 'compute_resp_status_403',
        'compute_resp_status_404' => 'compute_resp_status_404',
        'compute_resp_status_416' => 'compute_resp_status_416',
        'compute_resp_status_429' => 'compute_resp_status_429',
        'compute_resp_status_4xx' => 'compute_resp_status_4xx',
        'compute_resp_status_500' => 'compute_resp_status_500',
        'compute_resp_status_501' => 'compute_resp_status_501',
        'compute_resp_status_502' => 'compute_resp_status_502',
        'compute_resp_status_503' => 'compute_resp_status_503',
        'compute_resp_status_504' => 'compute_resp_status_504',
        'compute_resp_status_505' => 'compute_resp_status_505',
        'compute_resp_status_530' => 'compute_resp_status_530',
        'compute_resp_status_5xx' => 'compute_resp_status_5xx'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edge_requests' => 'setEdgeRequests',
        'edge_resp_header_bytes' => 'setEdgeRespHeaderBytes',
        'edge_resp_body_bytes' => 'setEdgeRespBodyBytes',
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
        'status_530' => 'setStatus530',
        'requests' => 'setRequests',
        'resp_header_bytes' => 'setRespHeaderBytes',
        'resp_body_bytes' => 'setRespBodyBytes',
        'bereq_header_bytes' => 'setBereqHeaderBytes',
        'bereq_body_bytes' => 'setBereqBodyBytes',
        'edge_hit_requests' => 'setEdgeHitRequests',
        'edge_miss_requests' => 'setEdgeMissRequests',
        'origin_fetches' => 'setOriginFetches',
        'origin_fetch_resp_header_bytes' => 'setOriginFetchRespHeaderBytes',
        'origin_fetch_resp_body_bytes' => 'setOriginFetchRespBodyBytes',
        'bandwidth' => 'setBandwidth',
        'edge_hit_ratio' => 'setEdgeHitRatio',
        'origin_offload' => 'setOriginOffload',
        'origin_status_200' => 'setOriginStatus200',
        'origin_status_204' => 'setOriginStatus204',
        'origin_status_206' => 'setOriginStatus206',
        'origin_status_301' => 'setOriginStatus301',
        'origin_status_302' => 'setOriginStatus302',
        'origin_status_304' => 'setOriginStatus304',
        'origin_status_400' => 'setOriginStatus400',
        'origin_status_401' => 'setOriginStatus401',
        'origin_status_403' => 'setOriginStatus403',
        'origin_status_404' => 'setOriginStatus404',
        'origin_status_416' => 'setOriginStatus416',
        'origin_status_429' => 'setOriginStatus429',
        'origin_status_500' => 'setOriginStatus500',
        'origin_status_501' => 'setOriginStatus501',
        'origin_status_502' => 'setOriginStatus502',
        'origin_status_503' => 'setOriginStatus503',
        'origin_status_504' => 'setOriginStatus504',
        'origin_status_505' => 'setOriginStatus505',
        'origin_status_530' => 'setOriginStatus530',
        'origin_status_1xx' => 'setOriginStatus1xx',
        'origin_status_2xx' => 'setOriginStatus2xx',
        'origin_status_3xx' => 'setOriginStatus3xx',
        'origin_status_4xx' => 'setOriginStatus4xx',
        'origin_status_5xx' => 'setOriginStatus5xx',
        'compute_bereq_body_bytes' => 'setComputeBereqBodyBytes',
        'compute_bereq_errors' => 'setComputeBereqErrors',
        'compute_bereq_header_bytes' => 'setComputeBereqHeaderBytes',
        'compute_bereqs' => 'setComputeBereqs',
        'compute_beresp_body_bytes' => 'setComputeBerespBodyBytes',
        'compute_beresp_header_bytes' => 'setComputeBerespHeaderBytes',
        'compute_execution_time_ms' => 'setComputeExecutionTimeMs',
        'compute_origin_status_1xx' => 'setComputeOriginStatus1xx',
        'compute_origin_status_200' => 'setComputeOriginStatus200',
        'compute_origin_status_204' => 'setComputeOriginStatus204',
        'compute_origin_status_206' => 'setComputeOriginStatus206',
        'compute_origin_status_2xx' => 'setComputeOriginStatus2xx',
        'compute_origin_status_301' => 'setComputeOriginStatus301',
        'compute_origin_status_302' => 'setComputeOriginStatus302',
        'compute_origin_status_304' => 'setComputeOriginStatus304',
        'compute_origin_status_3xx' => 'setComputeOriginStatus3xx',
        'compute_origin_status_400' => 'setComputeOriginStatus400',
        'compute_origin_status_401' => 'setComputeOriginStatus401',
        'compute_origin_status_403' => 'setComputeOriginStatus403',
        'compute_origin_status_404' => 'setComputeOriginStatus404',
        'compute_origin_status_416' => 'setComputeOriginStatus416',
        'compute_origin_status_429' => 'setComputeOriginStatus429',
        'compute_origin_status_4xx' => 'setComputeOriginStatus4xx',
        'compute_origin_status_500' => 'setComputeOriginStatus500',
        'compute_origin_status_501' => 'setComputeOriginStatus501',
        'compute_origin_status_502' => 'setComputeOriginStatus502',
        'compute_origin_status_503' => 'setComputeOriginStatus503',
        'compute_origin_status_504' => 'setComputeOriginStatus504',
        'compute_origin_status_505' => 'setComputeOriginStatus505',
        'compute_origin_status_530' => 'setComputeOriginStatus530',
        'compute_origin_status_5xx' => 'setComputeOriginStatus5xx',
        'compute_req_body_bytes' => 'setComputeReqBodyBytes',
        'compute_req_header_bytes' => 'setComputeReqHeaderBytes',
        'compute_request_time_billed_ms' => 'setComputeRequestTimeBilledMs',
        'compute_request_time_ms' => 'setComputeRequestTimeMs',
        'compute_request' => 'setComputeRequest',
        'compute_resp_body_bytes' => 'setComputeRespBodyBytes',
        'compute_resp_header_bytes' => 'setComputeRespHeaderBytes',
        'compute_resp_status_103' => 'setComputeRespStatus103',
        'compute_resp_status_1xx' => 'setComputeRespStatus1xx',
        'compute_resp_status_200' => 'setComputeRespStatus200',
        'compute_resp_status_204' => 'setComputeRespStatus204',
        'compute_resp_status_206' => 'setComputeRespStatus206',
        'compute_resp_status_2xx' => 'setComputeRespStatus2xx',
        'compute_resp_status_301' => 'setComputeRespStatus301',
        'compute_resp_status_302' => 'setComputeRespStatus302',
        'compute_resp_status_304' => 'setComputeRespStatus304',
        'compute_resp_status_3xx' => 'setComputeRespStatus3xx',
        'compute_resp_status_400' => 'setComputeRespStatus400',
        'compute_resp_status_401' => 'setComputeRespStatus401',
        'compute_resp_status_403' => 'setComputeRespStatus403',
        'compute_resp_status_404' => 'setComputeRespStatus404',
        'compute_resp_status_416' => 'setComputeRespStatus416',
        'compute_resp_status_429' => 'setComputeRespStatus429',
        'compute_resp_status_4xx' => 'setComputeRespStatus4xx',
        'compute_resp_status_500' => 'setComputeRespStatus500',
        'compute_resp_status_501' => 'setComputeRespStatus501',
        'compute_resp_status_502' => 'setComputeRespStatus502',
        'compute_resp_status_503' => 'setComputeRespStatus503',
        'compute_resp_status_504' => 'setComputeRespStatus504',
        'compute_resp_status_505' => 'setComputeRespStatus505',
        'compute_resp_status_530' => 'setComputeRespStatus530',
        'compute_resp_status_5xx' => 'setComputeRespStatus5xx'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edge_requests' => 'getEdgeRequests',
        'edge_resp_header_bytes' => 'getEdgeRespHeaderBytes',
        'edge_resp_body_bytes' => 'getEdgeRespBodyBytes',
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
        'status_530' => 'getStatus530',
        'requests' => 'getRequests',
        'resp_header_bytes' => 'getRespHeaderBytes',
        'resp_body_bytes' => 'getRespBodyBytes',
        'bereq_header_bytes' => 'getBereqHeaderBytes',
        'bereq_body_bytes' => 'getBereqBodyBytes',
        'edge_hit_requests' => 'getEdgeHitRequests',
        'edge_miss_requests' => 'getEdgeMissRequests',
        'origin_fetches' => 'getOriginFetches',
        'origin_fetch_resp_header_bytes' => 'getOriginFetchRespHeaderBytes',
        'origin_fetch_resp_body_bytes' => 'getOriginFetchRespBodyBytes',
        'bandwidth' => 'getBandwidth',
        'edge_hit_ratio' => 'getEdgeHitRatio',
        'origin_offload' => 'getOriginOffload',
        'origin_status_200' => 'getOriginStatus200',
        'origin_status_204' => 'getOriginStatus204',
        'origin_status_206' => 'getOriginStatus206',
        'origin_status_301' => 'getOriginStatus301',
        'origin_status_302' => 'getOriginStatus302',
        'origin_status_304' => 'getOriginStatus304',
        'origin_status_400' => 'getOriginStatus400',
        'origin_status_401' => 'getOriginStatus401',
        'origin_status_403' => 'getOriginStatus403',
        'origin_status_404' => 'getOriginStatus404',
        'origin_status_416' => 'getOriginStatus416',
        'origin_status_429' => 'getOriginStatus429',
        'origin_status_500' => 'getOriginStatus500',
        'origin_status_501' => 'getOriginStatus501',
        'origin_status_502' => 'getOriginStatus502',
        'origin_status_503' => 'getOriginStatus503',
        'origin_status_504' => 'getOriginStatus504',
        'origin_status_505' => 'getOriginStatus505',
        'origin_status_530' => 'getOriginStatus530',
        'origin_status_1xx' => 'getOriginStatus1xx',
        'origin_status_2xx' => 'getOriginStatus2xx',
        'origin_status_3xx' => 'getOriginStatus3xx',
        'origin_status_4xx' => 'getOriginStatus4xx',
        'origin_status_5xx' => 'getOriginStatus5xx',
        'compute_bereq_body_bytes' => 'getComputeBereqBodyBytes',
        'compute_bereq_errors' => 'getComputeBereqErrors',
        'compute_bereq_header_bytes' => 'getComputeBereqHeaderBytes',
        'compute_bereqs' => 'getComputeBereqs',
        'compute_beresp_body_bytes' => 'getComputeBerespBodyBytes',
        'compute_beresp_header_bytes' => 'getComputeBerespHeaderBytes',
        'compute_execution_time_ms' => 'getComputeExecutionTimeMs',
        'compute_origin_status_1xx' => 'getComputeOriginStatus1xx',
        'compute_origin_status_200' => 'getComputeOriginStatus200',
        'compute_origin_status_204' => 'getComputeOriginStatus204',
        'compute_origin_status_206' => 'getComputeOriginStatus206',
        'compute_origin_status_2xx' => 'getComputeOriginStatus2xx',
        'compute_origin_status_301' => 'getComputeOriginStatus301',
        'compute_origin_status_302' => 'getComputeOriginStatus302',
        'compute_origin_status_304' => 'getComputeOriginStatus304',
        'compute_origin_status_3xx' => 'getComputeOriginStatus3xx',
        'compute_origin_status_400' => 'getComputeOriginStatus400',
        'compute_origin_status_401' => 'getComputeOriginStatus401',
        'compute_origin_status_403' => 'getComputeOriginStatus403',
        'compute_origin_status_404' => 'getComputeOriginStatus404',
        'compute_origin_status_416' => 'getComputeOriginStatus416',
        'compute_origin_status_429' => 'getComputeOriginStatus429',
        'compute_origin_status_4xx' => 'getComputeOriginStatus4xx',
        'compute_origin_status_500' => 'getComputeOriginStatus500',
        'compute_origin_status_501' => 'getComputeOriginStatus501',
        'compute_origin_status_502' => 'getComputeOriginStatus502',
        'compute_origin_status_503' => 'getComputeOriginStatus503',
        'compute_origin_status_504' => 'getComputeOriginStatus504',
        'compute_origin_status_505' => 'getComputeOriginStatus505',
        'compute_origin_status_530' => 'getComputeOriginStatus530',
        'compute_origin_status_5xx' => 'getComputeOriginStatus5xx',
        'compute_req_body_bytes' => 'getComputeReqBodyBytes',
        'compute_req_header_bytes' => 'getComputeReqHeaderBytes',
        'compute_request_time_billed_ms' => 'getComputeRequestTimeBilledMs',
        'compute_request_time_ms' => 'getComputeRequestTimeMs',
        'compute_request' => 'getComputeRequest',
        'compute_resp_body_bytes' => 'getComputeRespBodyBytes',
        'compute_resp_header_bytes' => 'getComputeRespHeaderBytes',
        'compute_resp_status_103' => 'getComputeRespStatus103',
        'compute_resp_status_1xx' => 'getComputeRespStatus1xx',
        'compute_resp_status_200' => 'getComputeRespStatus200',
        'compute_resp_status_204' => 'getComputeRespStatus204',
        'compute_resp_status_206' => 'getComputeRespStatus206',
        'compute_resp_status_2xx' => 'getComputeRespStatus2xx',
        'compute_resp_status_301' => 'getComputeRespStatus301',
        'compute_resp_status_302' => 'getComputeRespStatus302',
        'compute_resp_status_304' => 'getComputeRespStatus304',
        'compute_resp_status_3xx' => 'getComputeRespStatus3xx',
        'compute_resp_status_400' => 'getComputeRespStatus400',
        'compute_resp_status_401' => 'getComputeRespStatus401',
        'compute_resp_status_403' => 'getComputeRespStatus403',
        'compute_resp_status_404' => 'getComputeRespStatus404',
        'compute_resp_status_416' => 'getComputeRespStatus416',
        'compute_resp_status_429' => 'getComputeRespStatus429',
        'compute_resp_status_4xx' => 'getComputeRespStatus4xx',
        'compute_resp_status_500' => 'getComputeRespStatus500',
        'compute_resp_status_501' => 'getComputeRespStatus501',
        'compute_resp_status_502' => 'getComputeRespStatus502',
        'compute_resp_status_503' => 'getComputeRespStatus503',
        'compute_resp_status_504' => 'getComputeRespStatus504',
        'compute_resp_status_505' => 'getComputeRespStatus505',
        'compute_resp_status_530' => 'getComputeRespStatus530',
        'compute_resp_status_5xx' => 'getComputeRespStatus5xx'
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
        $this->container['edge_requests'] = $data['edge_requests'] ?? null;
        $this->container['edge_resp_header_bytes'] = $data['edge_resp_header_bytes'] ?? null;
        $this->container['edge_resp_body_bytes'] = $data['edge_resp_body_bytes'] ?? null;
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
        $this->container['status_530'] = $data['status_530'] ?? null;
        $this->container['requests'] = $data['requests'] ?? null;
        $this->container['resp_header_bytes'] = $data['resp_header_bytes'] ?? null;
        $this->container['resp_body_bytes'] = $data['resp_body_bytes'] ?? null;
        $this->container['bereq_header_bytes'] = $data['bereq_header_bytes'] ?? null;
        $this->container['bereq_body_bytes'] = $data['bereq_body_bytes'] ?? null;
        $this->container['edge_hit_requests'] = $data['edge_hit_requests'] ?? null;
        $this->container['edge_miss_requests'] = $data['edge_miss_requests'] ?? null;
        $this->container['origin_fetches'] = $data['origin_fetches'] ?? null;
        $this->container['origin_fetch_resp_header_bytes'] = $data['origin_fetch_resp_header_bytes'] ?? null;
        $this->container['origin_fetch_resp_body_bytes'] = $data['origin_fetch_resp_body_bytes'] ?? null;
        $this->container['bandwidth'] = $data['bandwidth'] ?? null;
        $this->container['edge_hit_ratio'] = $data['edge_hit_ratio'] ?? null;
        $this->container['origin_offload'] = $data['origin_offload'] ?? null;
        $this->container['origin_status_200'] = $data['origin_status_200'] ?? null;
        $this->container['origin_status_204'] = $data['origin_status_204'] ?? null;
        $this->container['origin_status_206'] = $data['origin_status_206'] ?? null;
        $this->container['origin_status_301'] = $data['origin_status_301'] ?? null;
        $this->container['origin_status_302'] = $data['origin_status_302'] ?? null;
        $this->container['origin_status_304'] = $data['origin_status_304'] ?? null;
        $this->container['origin_status_400'] = $data['origin_status_400'] ?? null;
        $this->container['origin_status_401'] = $data['origin_status_401'] ?? null;
        $this->container['origin_status_403'] = $data['origin_status_403'] ?? null;
        $this->container['origin_status_404'] = $data['origin_status_404'] ?? null;
        $this->container['origin_status_416'] = $data['origin_status_416'] ?? null;
        $this->container['origin_status_429'] = $data['origin_status_429'] ?? null;
        $this->container['origin_status_500'] = $data['origin_status_500'] ?? null;
        $this->container['origin_status_501'] = $data['origin_status_501'] ?? null;
        $this->container['origin_status_502'] = $data['origin_status_502'] ?? null;
        $this->container['origin_status_503'] = $data['origin_status_503'] ?? null;
        $this->container['origin_status_504'] = $data['origin_status_504'] ?? null;
        $this->container['origin_status_505'] = $data['origin_status_505'] ?? null;
        $this->container['origin_status_530'] = $data['origin_status_530'] ?? null;
        $this->container['origin_status_1xx'] = $data['origin_status_1xx'] ?? null;
        $this->container['origin_status_2xx'] = $data['origin_status_2xx'] ?? null;
        $this->container['origin_status_3xx'] = $data['origin_status_3xx'] ?? null;
        $this->container['origin_status_4xx'] = $data['origin_status_4xx'] ?? null;
        $this->container['origin_status_5xx'] = $data['origin_status_5xx'] ?? null;
        $this->container['compute_bereq_body_bytes'] = $data['compute_bereq_body_bytes'] ?? null;
        $this->container['compute_bereq_errors'] = $data['compute_bereq_errors'] ?? null;
        $this->container['compute_bereq_header_bytes'] = $data['compute_bereq_header_bytes'] ?? null;
        $this->container['compute_bereqs'] = $data['compute_bereqs'] ?? null;
        $this->container['compute_beresp_body_bytes'] = $data['compute_beresp_body_bytes'] ?? null;
        $this->container['compute_beresp_header_bytes'] = $data['compute_beresp_header_bytes'] ?? null;
        $this->container['compute_execution_time_ms'] = $data['compute_execution_time_ms'] ?? null;
        $this->container['compute_origin_status_1xx'] = $data['compute_origin_status_1xx'] ?? null;
        $this->container['compute_origin_status_200'] = $data['compute_origin_status_200'] ?? null;
        $this->container['compute_origin_status_204'] = $data['compute_origin_status_204'] ?? null;
        $this->container['compute_origin_status_206'] = $data['compute_origin_status_206'] ?? null;
        $this->container['compute_origin_status_2xx'] = $data['compute_origin_status_2xx'] ?? null;
        $this->container['compute_origin_status_301'] = $data['compute_origin_status_301'] ?? null;
        $this->container['compute_origin_status_302'] = $data['compute_origin_status_302'] ?? null;
        $this->container['compute_origin_status_304'] = $data['compute_origin_status_304'] ?? null;
        $this->container['compute_origin_status_3xx'] = $data['compute_origin_status_3xx'] ?? null;
        $this->container['compute_origin_status_400'] = $data['compute_origin_status_400'] ?? null;
        $this->container['compute_origin_status_401'] = $data['compute_origin_status_401'] ?? null;
        $this->container['compute_origin_status_403'] = $data['compute_origin_status_403'] ?? null;
        $this->container['compute_origin_status_404'] = $data['compute_origin_status_404'] ?? null;
        $this->container['compute_origin_status_416'] = $data['compute_origin_status_416'] ?? null;
        $this->container['compute_origin_status_429'] = $data['compute_origin_status_429'] ?? null;
        $this->container['compute_origin_status_4xx'] = $data['compute_origin_status_4xx'] ?? null;
        $this->container['compute_origin_status_500'] = $data['compute_origin_status_500'] ?? null;
        $this->container['compute_origin_status_501'] = $data['compute_origin_status_501'] ?? null;
        $this->container['compute_origin_status_502'] = $data['compute_origin_status_502'] ?? null;
        $this->container['compute_origin_status_503'] = $data['compute_origin_status_503'] ?? null;
        $this->container['compute_origin_status_504'] = $data['compute_origin_status_504'] ?? null;
        $this->container['compute_origin_status_505'] = $data['compute_origin_status_505'] ?? null;
        $this->container['compute_origin_status_530'] = $data['compute_origin_status_530'] ?? null;
        $this->container['compute_origin_status_5xx'] = $data['compute_origin_status_5xx'] ?? null;
        $this->container['compute_req_body_bytes'] = $data['compute_req_body_bytes'] ?? null;
        $this->container['compute_req_header_bytes'] = $data['compute_req_header_bytes'] ?? null;
        $this->container['compute_request_time_billed_ms'] = $data['compute_request_time_billed_ms'] ?? null;
        $this->container['compute_request_time_ms'] = $data['compute_request_time_ms'] ?? null;
        $this->container['compute_request'] = $data['compute_request'] ?? null;
        $this->container['compute_resp_body_bytes'] = $data['compute_resp_body_bytes'] ?? null;
        $this->container['compute_resp_header_bytes'] = $data['compute_resp_header_bytes'] ?? null;
        $this->container['compute_resp_status_103'] = $data['compute_resp_status_103'] ?? null;
        $this->container['compute_resp_status_1xx'] = $data['compute_resp_status_1xx'] ?? null;
        $this->container['compute_resp_status_200'] = $data['compute_resp_status_200'] ?? null;
        $this->container['compute_resp_status_204'] = $data['compute_resp_status_204'] ?? null;
        $this->container['compute_resp_status_206'] = $data['compute_resp_status_206'] ?? null;
        $this->container['compute_resp_status_2xx'] = $data['compute_resp_status_2xx'] ?? null;
        $this->container['compute_resp_status_301'] = $data['compute_resp_status_301'] ?? null;
        $this->container['compute_resp_status_302'] = $data['compute_resp_status_302'] ?? null;
        $this->container['compute_resp_status_304'] = $data['compute_resp_status_304'] ?? null;
        $this->container['compute_resp_status_3xx'] = $data['compute_resp_status_3xx'] ?? null;
        $this->container['compute_resp_status_400'] = $data['compute_resp_status_400'] ?? null;
        $this->container['compute_resp_status_401'] = $data['compute_resp_status_401'] ?? null;
        $this->container['compute_resp_status_403'] = $data['compute_resp_status_403'] ?? null;
        $this->container['compute_resp_status_404'] = $data['compute_resp_status_404'] ?? null;
        $this->container['compute_resp_status_416'] = $data['compute_resp_status_416'] ?? null;
        $this->container['compute_resp_status_429'] = $data['compute_resp_status_429'] ?? null;
        $this->container['compute_resp_status_4xx'] = $data['compute_resp_status_4xx'] ?? null;
        $this->container['compute_resp_status_500'] = $data['compute_resp_status_500'] ?? null;
        $this->container['compute_resp_status_501'] = $data['compute_resp_status_501'] ?? null;
        $this->container['compute_resp_status_502'] = $data['compute_resp_status_502'] ?? null;
        $this->container['compute_resp_status_503'] = $data['compute_resp_status_503'] ?? null;
        $this->container['compute_resp_status_504'] = $data['compute_resp_status_504'] ?? null;
        $this->container['compute_resp_status_505'] = $data['compute_resp_status_505'] ?? null;
        $this->container['compute_resp_status_530'] = $data['compute_resp_status_530'] ?? null;
        $this->container['compute_resp_status_5xx'] = $data['compute_resp_status_5xx'] ?? null;
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
     * Gets edge_requests
     *
     * @return int|null
     */
    public function getEdgeRequests()
    {
        return $this->container['edge_requests'];
    }

    /**
     * Sets edge_requests
     *
     * @param int|null $edge_requests Number of requests sent by end users to Fastly.
     *
     * @return self
     */
    public function setEdgeRequests($edge_requests)
    {
        $this->container['edge_requests'] = $edge_requests;

        return $this;
    }

    /**
     * Gets edge_resp_header_bytes
     *
     * @return int|null
     */
    public function getEdgeRespHeaderBytes()
    {
        return $this->container['edge_resp_header_bytes'];
    }

    /**
     * Sets edge_resp_header_bytes
     *
     * @param int|null $edge_resp_header_bytes Total header bytes delivered from Fastly to the end user.
     *
     * @return self
     */
    public function setEdgeRespHeaderBytes($edge_resp_header_bytes)
    {
        $this->container['edge_resp_header_bytes'] = $edge_resp_header_bytes;

        return $this;
    }

    /**
     * Gets edge_resp_body_bytes
     *
     * @return int|null
     */
    public function getEdgeRespBodyBytes()
    {
        return $this->container['edge_resp_body_bytes'];
    }

    /**
     * Sets edge_resp_body_bytes
     *
     * @param int|null $edge_resp_body_bytes Total body bytes delivered from Fastly to the end user.
     *
     * @return self
     */
    public function setEdgeRespBodyBytes($edge_resp_body_bytes)
    {
        $this->container['edge_resp_body_bytes'] = $edge_resp_body_bytes;

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
     * @param int|null $status_1xx Number of 1xx \"Informational\" category status codes delivered.
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
     * @param int|null $status_2xx Number of 2xx \"Success\" status codes delivered.
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
     * @param int|null $status_3xx Number of 3xx \"Redirection\" codes delivered.
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
     * @param int|null $status_4xx Number of 4xx \"Client Error\" codes delivered.
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
     * @param int|null $status_5xx Number of 5xx \"Server Error\" codes delivered.
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
     * @param int|null $status_200 Number of responses delivered with status code 200 (Success).
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
     * @param int|null $status_204 Number of responses delivered with status code 204 (No Content).
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
     * @param int|null $status_206 Number of responses delivered with status code 206 (Partial Content).
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
     * @param int|null $status_301 Number of responses delivered with status code 301 (Moved Permanently).
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
     * @param int|null $status_302 Number of responses delivered with status code 302 (Found).
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
     * @param int|null $status_304 Number of responses delivered with status code 304 (Not Modified).
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
     * @param int|null $status_400 Number of responses delivered with status code 400 (Bad Request).
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
     * @param int|null $status_401 Number of responses delivered with status code 401 (Unauthorized).
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
     * @param int|null $status_403 Number of responses delivered with status code 403 (Forbidden).
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
     * @param int|null $status_404 Number of responses delivered with status code 404 (Not Found).
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
     * @param int|null $status_416 Number of responses delivered with status code 416 (Range Not Satisfiable).
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
     * @param int|null $status_429 Number of responses delivered with status code 429 (Too Many Requests).
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
     * @param int|null $status_500 Number of responses delivered with status code 500 (Internal Server Error).
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
     * @param int|null $status_501 Number of responses delivered with status code 501 (Not Implemented).
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
     * @param int|null $status_502 Number of responses delivered with status code 502 (Bad Gateway).
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
     * @param int|null $status_503 Number of responses delivered with status code 503 (Service Unavailable).
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
     * @param int|null $status_504 Number of responses delivered with status code 504 (Gateway Timeout).
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
     * @param int|null $status_505 Number of responses delivered with status code 505 (HTTP Version Not Supported).
     *
     * @return self
     */
    public function setStatus505($status_505)
    {
        $this->container['status_505'] = $status_505;

        return $this;
    }

    /**
     * Gets status_530
     *
     * @return int|null
     */
    public function getStatus530()
    {
        return $this->container['status_530'];
    }

    /**
     * Sets status_530
     *
     * @param int|null $status_530 Number of responses delivered with status code 530.
     *
     * @return self
     */
    public function setStatus530($status_530)
    {
        $this->container['status_530'] = $status_530;

        return $this;
    }

    /**
     * Gets requests
     *
     * @return int|null
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     *
     * @param int|null $requests Number of requests processed.
     *
     * @return self
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

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
     * @param int|null $resp_header_bytes Total header bytes delivered.
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
     * @param int|null $resp_body_bytes Total body bytes delivered.
     *
     * @return self
     */
    public function setRespBodyBytes($resp_body_bytes)
    {
        $this->container['resp_body_bytes'] = $resp_body_bytes;

        return $this;
    }

    /**
     * Gets bereq_header_bytes
     *
     * @return int|null
     */
    public function getBereqHeaderBytes()
    {
        return $this->container['bereq_header_bytes'];
    }

    /**
     * Sets bereq_header_bytes
     *
     * @param int|null $bereq_header_bytes Total header bytes sent to origin.
     *
     * @return self
     */
    public function setBereqHeaderBytes($bereq_header_bytes)
    {
        $this->container['bereq_header_bytes'] = $bereq_header_bytes;

        return $this;
    }

    /**
     * Gets bereq_body_bytes
     *
     * @return int|null
     */
    public function getBereqBodyBytes()
    {
        return $this->container['bereq_body_bytes'];
    }

    /**
     * Sets bereq_body_bytes
     *
     * @param int|null $bereq_body_bytes Total body bytes sent to origin.
     *
     * @return self
     */
    public function setBereqBodyBytes($bereq_body_bytes)
    {
        $this->container['bereq_body_bytes'] = $bereq_body_bytes;

        return $this;
    }

    /**
     * Gets edge_hit_requests
     *
     * @return int|null
     */
    public function getEdgeHitRequests()
    {
        return $this->container['edge_hit_requests'];
    }

    /**
     * Sets edge_hit_requests
     *
     * @param int|null $edge_hit_requests Number of requests sent by end users to Fastly that resulted in a hit at the edge.
     *
     * @return self
     */
    public function setEdgeHitRequests($edge_hit_requests)
    {
        $this->container['edge_hit_requests'] = $edge_hit_requests;

        return $this;
    }

    /**
     * Gets edge_miss_requests
     *
     * @return int|null
     */
    public function getEdgeMissRequests()
    {
        return $this->container['edge_miss_requests'];
    }

    /**
     * Sets edge_miss_requests
     *
     * @param int|null $edge_miss_requests Number of requests sent by end users to Fastly that resulted in a miss at the edge.
     *
     * @return self
     */
    public function setEdgeMissRequests($edge_miss_requests)
    {
        $this->container['edge_miss_requests'] = $edge_miss_requests;

        return $this;
    }

    /**
     * Gets origin_fetches
     *
     * @return int|null
     */
    public function getOriginFetches()
    {
        return $this->container['origin_fetches'];
    }

    /**
     * Sets origin_fetches
     *
     * @param int|null $origin_fetches Number of requests sent to origin.
     *
     * @return self
     */
    public function setOriginFetches($origin_fetches)
    {
        $this->container['origin_fetches'] = $origin_fetches;

        return $this;
    }

    /**
     * Gets origin_fetch_resp_header_bytes
     *
     * @return int|null
     */
    public function getOriginFetchRespHeaderBytes()
    {
        return $this->container['origin_fetch_resp_header_bytes'];
    }

    /**
     * Sets origin_fetch_resp_header_bytes
     *
     * @param int|null $origin_fetch_resp_header_bytes Total header bytes received from origin.
     *
     * @return self
     */
    public function setOriginFetchRespHeaderBytes($origin_fetch_resp_header_bytes)
    {
        $this->container['origin_fetch_resp_header_bytes'] = $origin_fetch_resp_header_bytes;

        return $this;
    }

    /**
     * Gets origin_fetch_resp_body_bytes
     *
     * @return int|null
     */
    public function getOriginFetchRespBodyBytes()
    {
        return $this->container['origin_fetch_resp_body_bytes'];
    }

    /**
     * Sets origin_fetch_resp_body_bytes
     *
     * @param int|null $origin_fetch_resp_body_bytes Total body bytes received from origin.
     *
     * @return self
     */
    public function setOriginFetchRespBodyBytes($origin_fetch_resp_body_bytes)
    {
        $this->container['origin_fetch_resp_body_bytes'] = $origin_fetch_resp_body_bytes;

        return $this;
    }

    /**
     * Gets bandwidth
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     *
     * @param int|null $bandwidth Total bytes delivered (`resp_header_bytes` + `resp_body_bytes` + `bereq_header_bytes` + `bereq_body_bytes`).
     *
     * @return self
     */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets edge_hit_ratio
     *
     * @return float|null
     */
    public function getEdgeHitRatio()
    {
        return $this->container['edge_hit_ratio'];
    }

    /**
     * Sets edge_hit_ratio
     *
     * @param float|null $edge_hit_ratio Ratio of cache hits to cache misses at the edge, between 0 and 1 (`edge_hit_requests` / (`edge_hit_requests` + `edge_miss_requests`)).
     *
     * @return self
     */
    public function setEdgeHitRatio($edge_hit_ratio)
    {
        $this->container['edge_hit_ratio'] = $edge_hit_ratio;

        return $this;
    }

    /**
     * Gets origin_offload
     *
     * @return float|null
     */
    public function getOriginOffload()
    {
        return $this->container['origin_offload'];
    }

    /**
     * Sets origin_offload
     *
     * @param float|null $origin_offload Origin Offload measures the ratio of bytes served to end users that were cached by Fastly, over the bytes served to end users, between 0 and 1. ((`edge_resp_body_bytes` + `edge_resp_header_bytes`) - (`origin_fetch_resp_body_bytes` + `origin_fetch_resp_header_bytes`)) / (`edge_resp_body_bytes` + `edge_resp_header_bytes`). Previously, Origin Offload used a different formula. [Learn more](https://www.fastly.com/documentation/reference/changes/2024/06/add-origin_offload-metric).
     *
     * @return self
     */
    public function setOriginOffload($origin_offload)
    {
        $this->container['origin_offload'] = $origin_offload;

        return $this;
    }

    /**
     * Gets origin_status_200
     *
     * @return int|null
     */
    public function getOriginStatus200()
    {
        return $this->container['origin_status_200'];
    }

    /**
     * Sets origin_status_200
     *
     * @param int|null $origin_status_200 Number of responses received from origin with status code 200 (Success).
     *
     * @return self
     */
    public function setOriginStatus200($origin_status_200)
    {
        $this->container['origin_status_200'] = $origin_status_200;

        return $this;
    }

    /**
     * Gets origin_status_204
     *
     * @return int|null
     */
    public function getOriginStatus204()
    {
        return $this->container['origin_status_204'];
    }

    /**
     * Sets origin_status_204
     *
     * @param int|null $origin_status_204 Number of responses received from origin with status code 204 (No Content).
     *
     * @return self
     */
    public function setOriginStatus204($origin_status_204)
    {
        $this->container['origin_status_204'] = $origin_status_204;

        return $this;
    }

    /**
     * Gets origin_status_206
     *
     * @return int|null
     */
    public function getOriginStatus206()
    {
        return $this->container['origin_status_206'];
    }

    /**
     * Sets origin_status_206
     *
     * @param int|null $origin_status_206 Number of responses received from origin with status code 206 (Partial Content).
     *
     * @return self
     */
    public function setOriginStatus206($origin_status_206)
    {
        $this->container['origin_status_206'] = $origin_status_206;

        return $this;
    }

    /**
     * Gets origin_status_301
     *
     * @return int|null
     */
    public function getOriginStatus301()
    {
        return $this->container['origin_status_301'];
    }

    /**
     * Sets origin_status_301
     *
     * @param int|null $origin_status_301 Number of responses received from origin with status code 301 (Moved Permanently).
     *
     * @return self
     */
    public function setOriginStatus301($origin_status_301)
    {
        $this->container['origin_status_301'] = $origin_status_301;

        return $this;
    }

    /**
     * Gets origin_status_302
     *
     * @return int|null
     */
    public function getOriginStatus302()
    {
        return $this->container['origin_status_302'];
    }

    /**
     * Sets origin_status_302
     *
     * @param int|null $origin_status_302 Number of responses received from origin with status code 302 (Found).
     *
     * @return self
     */
    public function setOriginStatus302($origin_status_302)
    {
        $this->container['origin_status_302'] = $origin_status_302;

        return $this;
    }

    /**
     * Gets origin_status_304
     *
     * @return int|null
     */
    public function getOriginStatus304()
    {
        return $this->container['origin_status_304'];
    }

    /**
     * Sets origin_status_304
     *
     * @param int|null $origin_status_304 Number of responses received from origin with status code 304 (Not Modified).
     *
     * @return self
     */
    public function setOriginStatus304($origin_status_304)
    {
        $this->container['origin_status_304'] = $origin_status_304;

        return $this;
    }

    /**
     * Gets origin_status_400
     *
     * @return int|null
     */
    public function getOriginStatus400()
    {
        return $this->container['origin_status_400'];
    }

    /**
     * Sets origin_status_400
     *
     * @param int|null $origin_status_400 Number of responses received from origin with status code 400 (Bad Request).
     *
     * @return self
     */
    public function setOriginStatus400($origin_status_400)
    {
        $this->container['origin_status_400'] = $origin_status_400;

        return $this;
    }

    /**
     * Gets origin_status_401
     *
     * @return int|null
     */
    public function getOriginStatus401()
    {
        return $this->container['origin_status_401'];
    }

    /**
     * Sets origin_status_401
     *
     * @param int|null $origin_status_401 Number of responses received from origin with status code 401 (Unauthorized).
     *
     * @return self
     */
    public function setOriginStatus401($origin_status_401)
    {
        $this->container['origin_status_401'] = $origin_status_401;

        return $this;
    }

    /**
     * Gets origin_status_403
     *
     * @return int|null
     */
    public function getOriginStatus403()
    {
        return $this->container['origin_status_403'];
    }

    /**
     * Sets origin_status_403
     *
     * @param int|null $origin_status_403 Number of responses received from origin with status code 403 (Forbidden).
     *
     * @return self
     */
    public function setOriginStatus403($origin_status_403)
    {
        $this->container['origin_status_403'] = $origin_status_403;

        return $this;
    }

    /**
     * Gets origin_status_404
     *
     * @return int|null
     */
    public function getOriginStatus404()
    {
        return $this->container['origin_status_404'];
    }

    /**
     * Sets origin_status_404
     *
     * @param int|null $origin_status_404 Number of responses received from origin with status code 404 (Not Found).
     *
     * @return self
     */
    public function setOriginStatus404($origin_status_404)
    {
        $this->container['origin_status_404'] = $origin_status_404;

        return $this;
    }

    /**
     * Gets origin_status_416
     *
     * @return int|null
     */
    public function getOriginStatus416()
    {
        return $this->container['origin_status_416'];
    }

    /**
     * Sets origin_status_416
     *
     * @param int|null $origin_status_416 Number of responses received from origin with status code 416 (Range Not Satisfiable).
     *
     * @return self
     */
    public function setOriginStatus416($origin_status_416)
    {
        $this->container['origin_status_416'] = $origin_status_416;

        return $this;
    }

    /**
     * Gets origin_status_429
     *
     * @return int|null
     */
    public function getOriginStatus429()
    {
        return $this->container['origin_status_429'];
    }

    /**
     * Sets origin_status_429
     *
     * @param int|null $origin_status_429 Number of responses received from origin with status code 429 (Too Many Requests).
     *
     * @return self
     */
    public function setOriginStatus429($origin_status_429)
    {
        $this->container['origin_status_429'] = $origin_status_429;

        return $this;
    }

    /**
     * Gets origin_status_500
     *
     * @return int|null
     */
    public function getOriginStatus500()
    {
        return $this->container['origin_status_500'];
    }

    /**
     * Sets origin_status_500
     *
     * @param int|null $origin_status_500 Number of responses received from origin with status code 500 (Internal Server Error).
     *
     * @return self
     */
    public function setOriginStatus500($origin_status_500)
    {
        $this->container['origin_status_500'] = $origin_status_500;

        return $this;
    }

    /**
     * Gets origin_status_501
     *
     * @return int|null
     */
    public function getOriginStatus501()
    {
        return $this->container['origin_status_501'];
    }

    /**
     * Sets origin_status_501
     *
     * @param int|null $origin_status_501 Number of responses received from origin with status code 501 (Not Implemented).
     *
     * @return self
     */
    public function setOriginStatus501($origin_status_501)
    {
        $this->container['origin_status_501'] = $origin_status_501;

        return $this;
    }

    /**
     * Gets origin_status_502
     *
     * @return int|null
     */
    public function getOriginStatus502()
    {
        return $this->container['origin_status_502'];
    }

    /**
     * Sets origin_status_502
     *
     * @param int|null $origin_status_502 Number of responses received from origin with status code 502 (Bad Gateway).
     *
     * @return self
     */
    public function setOriginStatus502($origin_status_502)
    {
        $this->container['origin_status_502'] = $origin_status_502;

        return $this;
    }

    /**
     * Gets origin_status_503
     *
     * @return int|null
     */
    public function getOriginStatus503()
    {
        return $this->container['origin_status_503'];
    }

    /**
     * Sets origin_status_503
     *
     * @param int|null $origin_status_503 Number of responses received from origin with status code 503 (Service Unavailable).
     *
     * @return self
     */
    public function setOriginStatus503($origin_status_503)
    {
        $this->container['origin_status_503'] = $origin_status_503;

        return $this;
    }

    /**
     * Gets origin_status_504
     *
     * @return int|null
     */
    public function getOriginStatus504()
    {
        return $this->container['origin_status_504'];
    }

    /**
     * Sets origin_status_504
     *
     * @param int|null $origin_status_504 Number of responses received from origin with status code 504 (Gateway Timeout).
     *
     * @return self
     */
    public function setOriginStatus504($origin_status_504)
    {
        $this->container['origin_status_504'] = $origin_status_504;

        return $this;
    }

    /**
     * Gets origin_status_505
     *
     * @return int|null
     */
    public function getOriginStatus505()
    {
        return $this->container['origin_status_505'];
    }

    /**
     * Sets origin_status_505
     *
     * @param int|null $origin_status_505 Number of responses received from origin with status code 505 (HTTP Version Not Supported).
     *
     * @return self
     */
    public function setOriginStatus505($origin_status_505)
    {
        $this->container['origin_status_505'] = $origin_status_505;

        return $this;
    }

    /**
     * Gets origin_status_530
     *
     * @return int|null
     */
    public function getOriginStatus530()
    {
        return $this->container['origin_status_530'];
    }

    /**
     * Sets origin_status_530
     *
     * @param int|null $origin_status_530 Number of responses received from origin with status code 530.
     *
     * @return self
     */
    public function setOriginStatus530($origin_status_530)
    {
        $this->container['origin_status_530'] = $origin_status_530;

        return $this;
    }

    /**
     * Gets origin_status_1xx
     *
     * @return int|null
     */
    public function getOriginStatus1xx()
    {
        return $this->container['origin_status_1xx'];
    }

    /**
     * Sets origin_status_1xx
     *
     * @param int|null $origin_status_1xx Number of \"Informational\" category status codes received from origin.
     *
     * @return self
     */
    public function setOriginStatus1xx($origin_status_1xx)
    {
        $this->container['origin_status_1xx'] = $origin_status_1xx;

        return $this;
    }

    /**
     * Gets origin_status_2xx
     *
     * @return int|null
     */
    public function getOriginStatus2xx()
    {
        return $this->container['origin_status_2xx'];
    }

    /**
     * Sets origin_status_2xx
     *
     * @param int|null $origin_status_2xx Number of \"Success\" status codes received from origin.
     *
     * @return self
     */
    public function setOriginStatus2xx($origin_status_2xx)
    {
        $this->container['origin_status_2xx'] = $origin_status_2xx;

        return $this;
    }

    /**
     * Gets origin_status_3xx
     *
     * @return int|null
     */
    public function getOriginStatus3xx()
    {
        return $this->container['origin_status_3xx'];
    }

    /**
     * Sets origin_status_3xx
     *
     * @param int|null $origin_status_3xx Number of \"Redirection\" codes received from origin.
     *
     * @return self
     */
    public function setOriginStatus3xx($origin_status_3xx)
    {
        $this->container['origin_status_3xx'] = $origin_status_3xx;

        return $this;
    }

    /**
     * Gets origin_status_4xx
     *
     * @return int|null
     */
    public function getOriginStatus4xx()
    {
        return $this->container['origin_status_4xx'];
    }

    /**
     * Sets origin_status_4xx
     *
     * @param int|null $origin_status_4xx Number of \"Client Error\" codes received from origin.
     *
     * @return self
     */
    public function setOriginStatus4xx($origin_status_4xx)
    {
        $this->container['origin_status_4xx'] = $origin_status_4xx;

        return $this;
    }

    /**
     * Gets origin_status_5xx
     *
     * @return int|null
     */
    public function getOriginStatus5xx()
    {
        return $this->container['origin_status_5xx'];
    }

    /**
     * Sets origin_status_5xx
     *
     * @param int|null $origin_status_5xx Number of \"Server Error\" codes received from origin.
     *
     * @return self
     */
    public function setOriginStatus5xx($origin_status_5xx)
    {
        $this->container['origin_status_5xx'] = $origin_status_5xx;

        return $this;
    }

    /**
     * Gets compute_bereq_body_bytes
     *
     * @return int|null
     */
    public function getComputeBereqBodyBytes()
    {
        return $this->container['compute_bereq_body_bytes'];
    }

    /**
     * Sets compute_bereq_body_bytes
     *
     * @param int|null $compute_bereq_body_bytes Total body bytes sent to backends (origins) by the Compute platform.
     *
     * @return self
     */
    public function setComputeBereqBodyBytes($compute_bereq_body_bytes)
    {
        $this->container['compute_bereq_body_bytes'] = $compute_bereq_body_bytes;

        return $this;
    }

    /**
     * Gets compute_bereq_errors
     *
     * @return int|null
     */
    public function getComputeBereqErrors()
    {
        return $this->container['compute_bereq_errors'];
    }

    /**
     * Sets compute_bereq_errors
     *
     * @param int|null $compute_bereq_errors Number of backend request errors, including timeouts, by the Compute platform.
     *
     * @return self
     */
    public function setComputeBereqErrors($compute_bereq_errors)
    {
        $this->container['compute_bereq_errors'] = $compute_bereq_errors;

        return $this;
    }

    /**
     * Gets compute_bereq_header_bytes
     *
     * @return int|null
     */
    public function getComputeBereqHeaderBytes()
    {
        return $this->container['compute_bereq_header_bytes'];
    }

    /**
     * Sets compute_bereq_header_bytes
     *
     * @param int|null $compute_bereq_header_bytes Total header bytes sent to backends (origins) by the Compute platform.
     *
     * @return self
     */
    public function setComputeBereqHeaderBytes($compute_bereq_header_bytes)
    {
        $this->container['compute_bereq_header_bytes'] = $compute_bereq_header_bytes;

        return $this;
    }

    /**
     * Gets compute_bereqs
     *
     * @return int|null
     */
    public function getComputeBereqs()
    {
        return $this->container['compute_bereqs'];
    }

    /**
     * Sets compute_bereqs
     *
     * @param int|null $compute_bereqs Number of backend requests started by the Compute platform.
     *
     * @return self
     */
    public function setComputeBereqs($compute_bereqs)
    {
        $this->container['compute_bereqs'] = $compute_bereqs;

        return $this;
    }

    /**
     * Gets compute_beresp_body_bytes
     *
     * @return int|null
     */
    public function getComputeBerespBodyBytes()
    {
        return $this->container['compute_beresp_body_bytes'];
    }

    /**
     * Sets compute_beresp_body_bytes
     *
     * @param int|null $compute_beresp_body_bytes Total body bytes received from backends (origins) by the Compute platform.
     *
     * @return self
     */
    public function setComputeBerespBodyBytes($compute_beresp_body_bytes)
    {
        $this->container['compute_beresp_body_bytes'] = $compute_beresp_body_bytes;

        return $this;
    }

    /**
     * Gets compute_beresp_header_bytes
     *
     * @return int|null
     */
    public function getComputeBerespHeaderBytes()
    {
        return $this->container['compute_beresp_header_bytes'];
    }

    /**
     * Sets compute_beresp_header_bytes
     *
     * @param int|null $compute_beresp_header_bytes Total header bytes received from backends (origins) by the Compute platform.
     *
     * @return self
     */
    public function setComputeBerespHeaderBytes($compute_beresp_header_bytes)
    {
        $this->container['compute_beresp_header_bytes'] = $compute_beresp_header_bytes;

        return $this;
    }

    /**
     * Gets compute_execution_time_ms
     *
     * @return int|null
     */
    public function getComputeExecutionTimeMs()
    {
        return $this->container['compute_execution_time_ms'];
    }

    /**
     * Sets compute_execution_time_ms
     *
     * @param int|null $compute_execution_time_ms The amount of active CPU time used to process your requests (in milliseconds).
     *
     * @return self
     */
    public function setComputeExecutionTimeMs($compute_execution_time_ms)
    {
        $this->container['compute_execution_time_ms'] = $compute_execution_time_ms;

        return $this;
    }

    /**
     * Gets compute_origin_status_1xx
     *
     * @return int|null
     */
    public function getComputeOriginStatus1xx()
    {
        return $this->container['compute_origin_status_1xx'];
    }

    /**
     * Sets compute_origin_status_1xx
     *
     * @param int|null $compute_origin_status_1xx Number of \"Informational\" category status codes received from origin by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus1xx($compute_origin_status_1xx)
    {
        $this->container['compute_origin_status_1xx'] = $compute_origin_status_1xx;

        return $this;
    }

    /**
     * Gets compute_origin_status_200
     *
     * @return int|null
     */
    public function getComputeOriginStatus200()
    {
        return $this->container['compute_origin_status_200'];
    }

    /**
     * Sets compute_origin_status_200
     *
     * @param int|null $compute_origin_status_200 Number of responses received from origin with status code 200 (Success) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus200($compute_origin_status_200)
    {
        $this->container['compute_origin_status_200'] = $compute_origin_status_200;

        return $this;
    }

    /**
     * Gets compute_origin_status_204
     *
     * @return int|null
     */
    public function getComputeOriginStatus204()
    {
        return $this->container['compute_origin_status_204'];
    }

    /**
     * Sets compute_origin_status_204
     *
     * @param int|null $compute_origin_status_204 Number of responses received from origin with status code 204 (No Content) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus204($compute_origin_status_204)
    {
        $this->container['compute_origin_status_204'] = $compute_origin_status_204;

        return $this;
    }

    /**
     * Gets compute_origin_status_206
     *
     * @return int|null
     */
    public function getComputeOriginStatus206()
    {
        return $this->container['compute_origin_status_206'];
    }

    /**
     * Sets compute_origin_status_206
     *
     * @param int|null $compute_origin_status_206 Number of responses received from origin with status code 206 (Partial Content) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus206($compute_origin_status_206)
    {
        $this->container['compute_origin_status_206'] = $compute_origin_status_206;

        return $this;
    }

    /**
     * Gets compute_origin_status_2xx
     *
     * @return int|null
     */
    public function getComputeOriginStatus2xx()
    {
        return $this->container['compute_origin_status_2xx'];
    }

    /**
     * Sets compute_origin_status_2xx
     *
     * @param int|null $compute_origin_status_2xx Number of \"Success\" status codes received from origin by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus2xx($compute_origin_status_2xx)
    {
        $this->container['compute_origin_status_2xx'] = $compute_origin_status_2xx;

        return $this;
    }

    /**
     * Gets compute_origin_status_301
     *
     * @return int|null
     */
    public function getComputeOriginStatus301()
    {
        return $this->container['compute_origin_status_301'];
    }

    /**
     * Sets compute_origin_status_301
     *
     * @param int|null $compute_origin_status_301 Number of responses received from origin with status code 301 (Moved Permanently) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus301($compute_origin_status_301)
    {
        $this->container['compute_origin_status_301'] = $compute_origin_status_301;

        return $this;
    }

    /**
     * Gets compute_origin_status_302
     *
     * @return int|null
     */
    public function getComputeOriginStatus302()
    {
        return $this->container['compute_origin_status_302'];
    }

    /**
     * Sets compute_origin_status_302
     *
     * @param int|null $compute_origin_status_302 Number of responses received from origin with status code 302 (Found) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus302($compute_origin_status_302)
    {
        $this->container['compute_origin_status_302'] = $compute_origin_status_302;

        return $this;
    }

    /**
     * Gets compute_origin_status_304
     *
     * @return int|null
     */
    public function getComputeOriginStatus304()
    {
        return $this->container['compute_origin_status_304'];
    }

    /**
     * Sets compute_origin_status_304
     *
     * @param int|null $compute_origin_status_304 Number of responses received from origin with status code 304 (Not Modified) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus304($compute_origin_status_304)
    {
        $this->container['compute_origin_status_304'] = $compute_origin_status_304;

        return $this;
    }

    /**
     * Gets compute_origin_status_3xx
     *
     * @return int|null
     */
    public function getComputeOriginStatus3xx()
    {
        return $this->container['compute_origin_status_3xx'];
    }

    /**
     * Sets compute_origin_status_3xx
     *
     * @param int|null $compute_origin_status_3xx Number of \"Redirection\" codes received from origin by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus3xx($compute_origin_status_3xx)
    {
        $this->container['compute_origin_status_3xx'] = $compute_origin_status_3xx;

        return $this;
    }

    /**
     * Gets compute_origin_status_400
     *
     * @return int|null
     */
    public function getComputeOriginStatus400()
    {
        return $this->container['compute_origin_status_400'];
    }

    /**
     * Sets compute_origin_status_400
     *
     * @param int|null $compute_origin_status_400 Number of responses received from origin with status code 400 (Bad Request) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus400($compute_origin_status_400)
    {
        $this->container['compute_origin_status_400'] = $compute_origin_status_400;

        return $this;
    }

    /**
     * Gets compute_origin_status_401
     *
     * @return int|null
     */
    public function getComputeOriginStatus401()
    {
        return $this->container['compute_origin_status_401'];
    }

    /**
     * Sets compute_origin_status_401
     *
     * @param int|null $compute_origin_status_401 Number of responses received from origin with status code 401 (Unauthorized) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus401($compute_origin_status_401)
    {
        $this->container['compute_origin_status_401'] = $compute_origin_status_401;

        return $this;
    }

    /**
     * Gets compute_origin_status_403
     *
     * @return int|null
     */
    public function getComputeOriginStatus403()
    {
        return $this->container['compute_origin_status_403'];
    }

    /**
     * Sets compute_origin_status_403
     *
     * @param int|null $compute_origin_status_403 Number of responses received from origin with status code 403 (Forbidden) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus403($compute_origin_status_403)
    {
        $this->container['compute_origin_status_403'] = $compute_origin_status_403;

        return $this;
    }

    /**
     * Gets compute_origin_status_404
     *
     * @return int|null
     */
    public function getComputeOriginStatus404()
    {
        return $this->container['compute_origin_status_404'];
    }

    /**
     * Sets compute_origin_status_404
     *
     * @param int|null $compute_origin_status_404 Number of responses received from origin with status code 404 (Not Found) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus404($compute_origin_status_404)
    {
        $this->container['compute_origin_status_404'] = $compute_origin_status_404;

        return $this;
    }

    /**
     * Gets compute_origin_status_416
     *
     * @return int|null
     */
    public function getComputeOriginStatus416()
    {
        return $this->container['compute_origin_status_416'];
    }

    /**
     * Sets compute_origin_status_416
     *
     * @param int|null $compute_origin_status_416 Number of responses received from origin with status code 416 (Range Not Satisfiable) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus416($compute_origin_status_416)
    {
        $this->container['compute_origin_status_416'] = $compute_origin_status_416;

        return $this;
    }

    /**
     * Gets compute_origin_status_429
     *
     * @return int|null
     */
    public function getComputeOriginStatus429()
    {
        return $this->container['compute_origin_status_429'];
    }

    /**
     * Sets compute_origin_status_429
     *
     * @param int|null $compute_origin_status_429 Number of responses received from origin with status code 429 (Too Many Requests) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus429($compute_origin_status_429)
    {
        $this->container['compute_origin_status_429'] = $compute_origin_status_429;

        return $this;
    }

    /**
     * Gets compute_origin_status_4xx
     *
     * @return int|null
     */
    public function getComputeOriginStatus4xx()
    {
        return $this->container['compute_origin_status_4xx'];
    }

    /**
     * Sets compute_origin_status_4xx
     *
     * @param int|null $compute_origin_status_4xx Number of \"Client Error\" codes received from origin by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus4xx($compute_origin_status_4xx)
    {
        $this->container['compute_origin_status_4xx'] = $compute_origin_status_4xx;

        return $this;
    }

    /**
     * Gets compute_origin_status_500
     *
     * @return int|null
     */
    public function getComputeOriginStatus500()
    {
        return $this->container['compute_origin_status_500'];
    }

    /**
     * Sets compute_origin_status_500
     *
     * @param int|null $compute_origin_status_500 Number of responses received from origin with status code 500 (Internal Server Error) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus500($compute_origin_status_500)
    {
        $this->container['compute_origin_status_500'] = $compute_origin_status_500;

        return $this;
    }

    /**
     * Gets compute_origin_status_501
     *
     * @return int|null
     */
    public function getComputeOriginStatus501()
    {
        return $this->container['compute_origin_status_501'];
    }

    /**
     * Sets compute_origin_status_501
     *
     * @param int|null $compute_origin_status_501 Number of responses received from origin with status code 501 (Not Implemented) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus501($compute_origin_status_501)
    {
        $this->container['compute_origin_status_501'] = $compute_origin_status_501;

        return $this;
    }

    /**
     * Gets compute_origin_status_502
     *
     * @return int|null
     */
    public function getComputeOriginStatus502()
    {
        return $this->container['compute_origin_status_502'];
    }

    /**
     * Sets compute_origin_status_502
     *
     * @param int|null $compute_origin_status_502 Number of responses received from origin with status code 502 (Bad Gateway) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus502($compute_origin_status_502)
    {
        $this->container['compute_origin_status_502'] = $compute_origin_status_502;

        return $this;
    }

    /**
     * Gets compute_origin_status_503
     *
     * @return int|null
     */
    public function getComputeOriginStatus503()
    {
        return $this->container['compute_origin_status_503'];
    }

    /**
     * Sets compute_origin_status_503
     *
     * @param int|null $compute_origin_status_503 Number of responses received from origin with status code 503 (Service Unavailable) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus503($compute_origin_status_503)
    {
        $this->container['compute_origin_status_503'] = $compute_origin_status_503;

        return $this;
    }

    /**
     * Gets compute_origin_status_504
     *
     * @return int|null
     */
    public function getComputeOriginStatus504()
    {
        return $this->container['compute_origin_status_504'];
    }

    /**
     * Sets compute_origin_status_504
     *
     * @param int|null $compute_origin_status_504 Number of responses received from origin with status code 504 (Gateway Timeout) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus504($compute_origin_status_504)
    {
        $this->container['compute_origin_status_504'] = $compute_origin_status_504;

        return $this;
    }

    /**
     * Gets compute_origin_status_505
     *
     * @return int|null
     */
    public function getComputeOriginStatus505()
    {
        return $this->container['compute_origin_status_505'];
    }

    /**
     * Sets compute_origin_status_505
     *
     * @param int|null $compute_origin_status_505 Number of responses received from origin with status code 505 (HTTP Version Not Supported) by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus505($compute_origin_status_505)
    {
        $this->container['compute_origin_status_505'] = $compute_origin_status_505;

        return $this;
    }

    /**
     * Gets compute_origin_status_530
     *
     * @return int|null
     */
    public function getComputeOriginStatus530()
    {
        return $this->container['compute_origin_status_530'];
    }

    /**
     * Sets compute_origin_status_530
     *
     * @param int|null $compute_origin_status_530 Number of responses received from origin with status code 530 by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus530($compute_origin_status_530)
    {
        $this->container['compute_origin_status_530'] = $compute_origin_status_530;

        return $this;
    }

    /**
     * Gets compute_origin_status_5xx
     *
     * @return int|null
     */
    public function getComputeOriginStatus5xx()
    {
        return $this->container['compute_origin_status_5xx'];
    }

    /**
     * Sets compute_origin_status_5xx
     *
     * @param int|null $compute_origin_status_5xx Number of \"Server Error\" codes received from origin by the Compute platform.
     *
     * @return self
     */
    public function setComputeOriginStatus5xx($compute_origin_status_5xx)
    {
        $this->container['compute_origin_status_5xx'] = $compute_origin_status_5xx;

        return $this;
    }

    /**
     * Gets compute_req_body_bytes
     *
     * @return int|null
     */
    public function getComputeReqBodyBytes()
    {
        return $this->container['compute_req_body_bytes'];
    }

    /**
     * Sets compute_req_body_bytes
     *
     * @param int|null $compute_req_body_bytes Total body bytes received by the Compute platform.
     *
     * @return self
     */
    public function setComputeReqBodyBytes($compute_req_body_bytes)
    {
        $this->container['compute_req_body_bytes'] = $compute_req_body_bytes;

        return $this;
    }

    /**
     * Gets compute_req_header_bytes
     *
     * @return int|null
     */
    public function getComputeReqHeaderBytes()
    {
        return $this->container['compute_req_header_bytes'];
    }

    /**
     * Sets compute_req_header_bytes
     *
     * @param int|null $compute_req_header_bytes Total header bytes received by the Compute platform.
     *
     * @return self
     */
    public function setComputeReqHeaderBytes($compute_req_header_bytes)
    {
        $this->container['compute_req_header_bytes'] = $compute_req_header_bytes;

        return $this;
    }

    /**
     * Gets compute_request_time_billed_ms
     *
     * @return int|null
     */
    public function getComputeRequestTimeBilledMs()
    {
        return $this->container['compute_request_time_billed_ms'];
    }

    /**
     * Sets compute_request_time_billed_ms
     *
     * @param int|null $compute_request_time_billed_ms The total amount of request processing time you will be billed for, measured in 50 millisecond increments.
     *
     * @return self
     */
    public function setComputeRequestTimeBilledMs($compute_request_time_billed_ms)
    {
        $this->container['compute_request_time_billed_ms'] = $compute_request_time_billed_ms;

        return $this;
    }

    /**
     * Gets compute_request_time_ms
     *
     * @return int|null
     */
    public function getComputeRequestTimeMs()
    {
        return $this->container['compute_request_time_ms'];
    }

    /**
     * Sets compute_request_time_ms
     *
     * @param int|null $compute_request_time_ms The total amount of time used to process your requests, including active CPU time (in milliseconds).
     *
     * @return self
     */
    public function setComputeRequestTimeMs($compute_request_time_ms)
    {
        $this->container['compute_request_time_ms'] = $compute_request_time_ms;

        return $this;
    }

    /**
     * Gets compute_request
     *
     * @return int|null
     */
    public function getComputeRequest()
    {
        return $this->container['compute_request'];
    }

    /**
     * Sets compute_request
     *
     * @param int|null $compute_request The total number of requests that were received by the Compute platform.
     *
     * @return self
     */
    public function setComputeRequest($compute_request)
    {
        $this->container['compute_request'] = $compute_request;

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
     * @param int|null $compute_resp_body_bytes Total body bytes sent from Compute to the end user.
     *
     * @return self
     */
    public function setComputeRespBodyBytes($compute_resp_body_bytes)
    {
        $this->container['compute_resp_body_bytes'] = $compute_resp_body_bytes;

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
     * @param int|null $compute_resp_header_bytes Total header bytes sent from Compute to the end user.
     *
     * @return self
     */
    public function setComputeRespHeaderBytes($compute_resp_header_bytes)
    {
        $this->container['compute_resp_header_bytes'] = $compute_resp_header_bytes;

        return $this;
    }

    /**
     * Gets compute_resp_status_103
     *
     * @return int|null
     */
    public function getComputeRespStatus103()
    {
        return $this->container['compute_resp_status_103'];
    }

    /**
     * Sets compute_resp_status_103
     *
     * @param int|null $compute_resp_status_103 Number of responses delivered with status code 103 (Early Hints) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus103($compute_resp_status_103)
    {
        $this->container['compute_resp_status_103'] = $compute_resp_status_103;

        return $this;
    }

    /**
     * Gets compute_resp_status_1xx
     *
     * @return int|null
     */
    public function getComputeRespStatus1xx()
    {
        return $this->container['compute_resp_status_1xx'];
    }

    /**
     * Sets compute_resp_status_1xx
     *
     * @param int|null $compute_resp_status_1xx Number of 1xx \"Informational\" category status codes delivered by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus1xx($compute_resp_status_1xx)
    {
        $this->container['compute_resp_status_1xx'] = $compute_resp_status_1xx;

        return $this;
    }

    /**
     * Gets compute_resp_status_200
     *
     * @return int|null
     */
    public function getComputeRespStatus200()
    {
        return $this->container['compute_resp_status_200'];
    }

    /**
     * Sets compute_resp_status_200
     *
     * @param int|null $compute_resp_status_200 Number of responses delivered with status code 200 (Success) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus200($compute_resp_status_200)
    {
        $this->container['compute_resp_status_200'] = $compute_resp_status_200;

        return $this;
    }

    /**
     * Gets compute_resp_status_204
     *
     * @return int|null
     */
    public function getComputeRespStatus204()
    {
        return $this->container['compute_resp_status_204'];
    }

    /**
     * Sets compute_resp_status_204
     *
     * @param int|null $compute_resp_status_204 Number of responses delivered with status code 204 (No Content) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus204($compute_resp_status_204)
    {
        $this->container['compute_resp_status_204'] = $compute_resp_status_204;

        return $this;
    }

    /**
     * Gets compute_resp_status_206
     *
     * @return int|null
     */
    public function getComputeRespStatus206()
    {
        return $this->container['compute_resp_status_206'];
    }

    /**
     * Sets compute_resp_status_206
     *
     * @param int|null $compute_resp_status_206 Number of responses delivered with status code 206 (Partial Content) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus206($compute_resp_status_206)
    {
        $this->container['compute_resp_status_206'] = $compute_resp_status_206;

        return $this;
    }

    /**
     * Gets compute_resp_status_2xx
     *
     * @return int|null
     */
    public function getComputeRespStatus2xx()
    {
        return $this->container['compute_resp_status_2xx'];
    }

    /**
     * Sets compute_resp_status_2xx
     *
     * @param int|null $compute_resp_status_2xx Number of 2xx \"Success\" status codes delivered by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus2xx($compute_resp_status_2xx)
    {
        $this->container['compute_resp_status_2xx'] = $compute_resp_status_2xx;

        return $this;
    }

    /**
     * Gets compute_resp_status_301
     *
     * @return int|null
     */
    public function getComputeRespStatus301()
    {
        return $this->container['compute_resp_status_301'];
    }

    /**
     * Sets compute_resp_status_301
     *
     * @param int|null $compute_resp_status_301 Number of responses delivered with status code 301 (Moved Permanently) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus301($compute_resp_status_301)
    {
        $this->container['compute_resp_status_301'] = $compute_resp_status_301;

        return $this;
    }

    /**
     * Gets compute_resp_status_302
     *
     * @return int|null
     */
    public function getComputeRespStatus302()
    {
        return $this->container['compute_resp_status_302'];
    }

    /**
     * Sets compute_resp_status_302
     *
     * @param int|null $compute_resp_status_302 Number of responses delivered with status code 302 (Found) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus302($compute_resp_status_302)
    {
        $this->container['compute_resp_status_302'] = $compute_resp_status_302;

        return $this;
    }

    /**
     * Gets compute_resp_status_304
     *
     * @return int|null
     */
    public function getComputeRespStatus304()
    {
        return $this->container['compute_resp_status_304'];
    }

    /**
     * Sets compute_resp_status_304
     *
     * @param int|null $compute_resp_status_304 Number of responses delivered with status code 304 (Not Modified) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus304($compute_resp_status_304)
    {
        $this->container['compute_resp_status_304'] = $compute_resp_status_304;

        return $this;
    }

    /**
     * Gets compute_resp_status_3xx
     *
     * @return int|null
     */
    public function getComputeRespStatus3xx()
    {
        return $this->container['compute_resp_status_3xx'];
    }

    /**
     * Sets compute_resp_status_3xx
     *
     * @param int|null $compute_resp_status_3xx Number of 3xx \"Redirection\" codes delivered by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus3xx($compute_resp_status_3xx)
    {
        $this->container['compute_resp_status_3xx'] = $compute_resp_status_3xx;

        return $this;
    }

    /**
     * Gets compute_resp_status_400
     *
     * @return int|null
     */
    public function getComputeRespStatus400()
    {
        return $this->container['compute_resp_status_400'];
    }

    /**
     * Sets compute_resp_status_400
     *
     * @param int|null $compute_resp_status_400 Number of responses delivered with status code 400 (Bad Request) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus400($compute_resp_status_400)
    {
        $this->container['compute_resp_status_400'] = $compute_resp_status_400;

        return $this;
    }

    /**
     * Gets compute_resp_status_401
     *
     * @return int|null
     */
    public function getComputeRespStatus401()
    {
        return $this->container['compute_resp_status_401'];
    }

    /**
     * Sets compute_resp_status_401
     *
     * @param int|null $compute_resp_status_401 Number of responses delivered with status code 401 (Unauthorized) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus401($compute_resp_status_401)
    {
        $this->container['compute_resp_status_401'] = $compute_resp_status_401;

        return $this;
    }

    /**
     * Gets compute_resp_status_403
     *
     * @return int|null
     */
    public function getComputeRespStatus403()
    {
        return $this->container['compute_resp_status_403'];
    }

    /**
     * Sets compute_resp_status_403
     *
     * @param int|null $compute_resp_status_403 Number of responses delivered with status code 403 (Forbidden) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus403($compute_resp_status_403)
    {
        $this->container['compute_resp_status_403'] = $compute_resp_status_403;

        return $this;
    }

    /**
     * Gets compute_resp_status_404
     *
     * @return int|null
     */
    public function getComputeRespStatus404()
    {
        return $this->container['compute_resp_status_404'];
    }

    /**
     * Sets compute_resp_status_404
     *
     * @param int|null $compute_resp_status_404 Number of responses delivered with status code 404 (Not Found) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus404($compute_resp_status_404)
    {
        $this->container['compute_resp_status_404'] = $compute_resp_status_404;

        return $this;
    }

    /**
     * Gets compute_resp_status_416
     *
     * @return int|null
     */
    public function getComputeRespStatus416()
    {
        return $this->container['compute_resp_status_416'];
    }

    /**
     * Sets compute_resp_status_416
     *
     * @param int|null $compute_resp_status_416 Number of responses delivered with status code 416 (Range Not Satisfiable) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus416($compute_resp_status_416)
    {
        $this->container['compute_resp_status_416'] = $compute_resp_status_416;

        return $this;
    }

    /**
     * Gets compute_resp_status_429
     *
     * @return int|null
     */
    public function getComputeRespStatus429()
    {
        return $this->container['compute_resp_status_429'];
    }

    /**
     * Sets compute_resp_status_429
     *
     * @param int|null $compute_resp_status_429 Number of responses delivered with status code 429 (Too Many Requests) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus429($compute_resp_status_429)
    {
        $this->container['compute_resp_status_429'] = $compute_resp_status_429;

        return $this;
    }

    /**
     * Gets compute_resp_status_4xx
     *
     * @return int|null
     */
    public function getComputeRespStatus4xx()
    {
        return $this->container['compute_resp_status_4xx'];
    }

    /**
     * Sets compute_resp_status_4xx
     *
     * @param int|null $compute_resp_status_4xx Number of 4xx \"Client Error\" codes delivered by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus4xx($compute_resp_status_4xx)
    {
        $this->container['compute_resp_status_4xx'] = $compute_resp_status_4xx;

        return $this;
    }

    /**
     * Gets compute_resp_status_500
     *
     * @return int|null
     */
    public function getComputeRespStatus500()
    {
        return $this->container['compute_resp_status_500'];
    }

    /**
     * Sets compute_resp_status_500
     *
     * @param int|null $compute_resp_status_500 Number of responses delivered with status code 500 (Internal Server Error) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus500($compute_resp_status_500)
    {
        $this->container['compute_resp_status_500'] = $compute_resp_status_500;

        return $this;
    }

    /**
     * Gets compute_resp_status_501
     *
     * @return int|null
     */
    public function getComputeRespStatus501()
    {
        return $this->container['compute_resp_status_501'];
    }

    /**
     * Sets compute_resp_status_501
     *
     * @param int|null $compute_resp_status_501 Number of responses delivered with status code 501 (Not Implemented) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus501($compute_resp_status_501)
    {
        $this->container['compute_resp_status_501'] = $compute_resp_status_501;

        return $this;
    }

    /**
     * Gets compute_resp_status_502
     *
     * @return int|null
     */
    public function getComputeRespStatus502()
    {
        return $this->container['compute_resp_status_502'];
    }

    /**
     * Sets compute_resp_status_502
     *
     * @param int|null $compute_resp_status_502 Number of responses delivered with status code 502 (Bad Gateway) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus502($compute_resp_status_502)
    {
        $this->container['compute_resp_status_502'] = $compute_resp_status_502;

        return $this;
    }

    /**
     * Gets compute_resp_status_503
     *
     * @return int|null
     */
    public function getComputeRespStatus503()
    {
        return $this->container['compute_resp_status_503'];
    }

    /**
     * Sets compute_resp_status_503
     *
     * @param int|null $compute_resp_status_503 Number of responses delivered with status code 503 (Service Unavailable) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus503($compute_resp_status_503)
    {
        $this->container['compute_resp_status_503'] = $compute_resp_status_503;

        return $this;
    }

    /**
     * Gets compute_resp_status_504
     *
     * @return int|null
     */
    public function getComputeRespStatus504()
    {
        return $this->container['compute_resp_status_504'];
    }

    /**
     * Sets compute_resp_status_504
     *
     * @param int|null $compute_resp_status_504 Number of responses delivered with status code 504 (Gateway Timeout) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus504($compute_resp_status_504)
    {
        $this->container['compute_resp_status_504'] = $compute_resp_status_504;

        return $this;
    }

    /**
     * Gets compute_resp_status_505
     *
     * @return int|null
     */
    public function getComputeRespStatus505()
    {
        return $this->container['compute_resp_status_505'];
    }

    /**
     * Sets compute_resp_status_505
     *
     * @param int|null $compute_resp_status_505 Number of responses delivered with status code 505 (HTTP Version Not Supported) by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus505($compute_resp_status_505)
    {
        $this->container['compute_resp_status_505'] = $compute_resp_status_505;

        return $this;
    }

    /**
     * Gets compute_resp_status_530
     *
     * @return int|null
     */
    public function getComputeRespStatus530()
    {
        return $this->container['compute_resp_status_530'];
    }

    /**
     * Sets compute_resp_status_530
     *
     * @param int|null $compute_resp_status_530 Number of responses delivered with status code 530 by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus530($compute_resp_status_530)
    {
        $this->container['compute_resp_status_530'] = $compute_resp_status_530;

        return $this;
    }

    /**
     * Gets compute_resp_status_5xx
     *
     * @return int|null
     */
    public function getComputeRespStatus5xx()
    {
        return $this->container['compute_resp_status_5xx'];
    }

    /**
     * Sets compute_resp_status_5xx
     *
     * @param int|null $compute_resp_status_5xx Number of \"Server Error\" category status codes delivered by the Compute platform.
     *
     * @return self
     */
    public function setComputeRespStatus5xx($compute_resp_status_5xx)
    {
        $this->container['compute_resp_status_5xx'] = $compute_resp_status_5xx;

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


