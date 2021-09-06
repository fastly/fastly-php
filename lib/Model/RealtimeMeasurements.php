<?php
/**
 * RealtimeMeasurements
 *
 * PHP version 7.2
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
 * RealtimeMeasurements Class Doc Comment
 *
 * @category Class
 * @description Statistics that have occurred since the last request.
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RealtimeMeasurements implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'realtime_measurements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'attack_blocked_req_body_bytes' => 'int',
        'attack_blocked_req_header_bytes' => 'int',
        'attack_logged_req_body_bytes' => 'int',
        'attack_logged_req_header_bytes' => 'int',
        'attack_passed_req_body_bytes' => 'int',
        'attack_passed_req_header_bytes' => 'int',
        'attack_req_body_bytes' => 'int',
        'attack_req_header_bytes' => 'int',
        'attack_resp_synth_bytes' => 'int',
        'bereq_body_bytes' => 'int',
        'bereq_header_bytes' => 'int',
        'body_size' => 'int',
        'compute_bereq_body_bytes' => 'int',
        'compute_bereq_errors' => 'int',
        'compute_bereq_header_bytes' => 'int',
        'compute_bereqs' => 'int',
        'compute_beresp_body_bytes' => 'int',
        'compute_beresp_header_bytes' => 'int',
        'compute_execution_time_ms' => 'float',
        'compute_globals_limit_exceeded' => 'int',
        'compute_guest_errors' => 'int',
        'compute_heap_limit_exceeded' => 'int',
        'compute_ram_used' => 'int',
        'compute_req_body_bytes' => 'int',
        'compute_req_header_bytes' => 'int',
        'compute_request_time_ms' => 'float',
        'compute_requests' => 'int',
        'compute_resource_limit_exceeded' => 'int',
        'compute_resp_body_bytes' => 'int',
        'compute_resp_header_bytes' => 'int',
        'compute_resp_status_1xx' => 'int',
        'compute_resp_status_2xx' => 'int',
        'compute_resp_status_3xx' => 'int',
        'compute_resp_status_4xx' => 'int',
        'compute_resp_status_5xx' => 'int',
        'compute_runtime_errors' => 'int',
        'compute_stack_limit_exceeded' => 'int',
        'deliver_sub_count' => 'int',
        'deliver_sub_time' => 'float',
        'edge_hit_requests' => 'int',
        'edge_miss_requests' => 'int',
        'edge_requests' => 'int',
        'edge_resp_body_bytes' => 'int',
        'edge_resp_header_bytes' => 'int',
        'error_sub_count' => 'int',
        'error_sub_time' => 'float',
        'errors' => 'int',
        'fetch_sub_count' => 'int',
        'fetch_sub_time' => 'float',
        'hash_sub_count' => 'int',
        'hash_sub_time' => 'float',
        'header_size' => 'int',
        'hit_resp_body_bytes' => 'int',
        'hit_sub_count' => 'int',
        'hit_sub_time' => 'float',
        'hits' => 'int',
        'hits_time' => 'float',
        'http2' => 'int',
        'http3' => 'int',
        'imgopto' => 'int',
        'imgopto_resp_body_bytes' => 'int',
        'imgopto_resp_header_bytes' => 'int',
        'imgopto_shield' => 'int',
        'imgopto_shield_resp_body_bytes' => 'int',
        'imgopto_shield_resp_header_bytes' => 'int',
        'imgopto_transforms' => 'int',
        'imgvideo' => 'float',
        'imgvideo_frames' => 'float',
        'imgvideo_resp_body_bytes' => 'float',
        'imgvideo_resp_header_bytes' => 'float',
        'imgvideo_shield' => 'float',
        'imgvideo_shield_frames' => 'float',
        'imgvideo_shield_resp_body_bytes' => 'float',
        'imgvideo_shield_resp_header_bytes' => 'float',
        'ipv6' => 'int',
        'log' => 'int',
        'log_bytes' => 'int',
        'logging' => 'int',
        'miss' => 'int',
        'miss_histogram' => 'object',
        'miss_resp_body_bytes' => 'int',
        'miss_sub_count' => 'int',
        'miss_sub_time' => 'float',
        'miss_time' => 'float',
        'object_size_100k' => 'int',
        'object_size_100m' => 'int',
        'object_size_10k' => 'int',
        'object_size_10m' => 'int',
        'object_size_1g' => 'int',
        'object_size_1k' => 'int',
        'object_size_1m' => 'int',
        'object_size_other' => 'int',
        'origin_cache_fetches' => 'int',
        'origin_fetch_body_bytes' => 'int',
        'origin_fetch_header_bytes' => 'int',
        'origin_fetch_resp_body_bytes' => 'int',
        'origin_fetch_resp_header_bytes' => 'int',
        'origin_fetches' => 'int',
        'origin_revalidations' => 'int',
        'otfp' => 'int',
        'otfp_deliver_time' => 'float',
        'otfp_manifests' => 'int',
        'otfp_resp_body_bytes' => 'int',
        'otfp_resp_header_bytes' => 'int',
        'otfp_shield' => 'int',
        'otfp_shield_resp_body_bytes' => 'int',
        'otfp_shield_resp_header_bytes' => 'int',
        'otfp_shield_time' => 'float',
        'pass' => 'int',
        'pass_resp_body_bytes' => 'int',
        'pass_sub_count' => 'int',
        'pass_sub_time' => 'float',
        'pass_time' => 'float',
        'pci' => 'int',
        'pipe_sub_count' => 'int',
        'pipe_sub_time' => 'float',
        'predeliver_sub_count' => 'int',
        'predeliver_sub_time' => 'float',
        'prehash_sub_count' => 'int',
        'prehash_sub_time' => 'float',
        'recv_sub_count' => 'int',
        'recv_sub_time' => 'float',
        'req_body_bytes' => 'int',
        'req_header_bytes' => 'int',
        'requests' => 'int',
        'resp_body_bytes' => 'int',
        'resp_header_bytes' => 'int',
        'restarts' => 'int',
        'segblock_origin_fetches' => 'int',
        'segblock_shield_fetches' => 'int',
        'shield' => 'int',
        'shield_cache_fetches' => 'int',
        'shield_fetch_body_bytes' => 'int',
        'shield_fetch_header_bytes' => 'int',
        'shield_fetch_resp_body_bytes' => 'int',
        'shield_fetch_resp_header_bytes' => 'int',
        'shield_fetches' => 'int',
        'shield_resp_body_bytes' => 'int',
        'shield_resp_header_bytes' => 'int',
        'shield_revalidations' => 'int',
        'status_1xx' => 'int',
        'status_200' => 'int',
        'status_204' => 'int',
        'status_206' => 'int',
        'status_2xx' => 'int',
        'status_301' => 'int',
        'status_302' => 'int',
        'status_304' => 'int',
        'status_3xx' => 'int',
        'status_400' => 'int',
        'status_401' => 'int',
        'status_403' => 'int',
        'status_404' => 'int',
        'status_416' => 'int',
        'status_429' => 'int',
        'status_4xx' => 'int',
        'status_500' => 'int',
        'status_501' => 'int',
        'status_502' => 'int',
        'status_503' => 'int',
        'status_504' => 'int',
        'status_505' => 'int',
        'status_5xx' => 'int',
        'synth' => 'int',
        'tls' => 'int',
        'tls_v10' => 'int',
        'tls_v11' => 'int',
        'tls_v12' => 'int',
        'tls_v13' => 'int',
        'uncacheable' => 'int',
        'video' => 'int',
        'waf_blocked' => 'int',
        'waf_logged' => 'int',
        'waf_passed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'attack_blocked_req_body_bytes' => null,
        'attack_blocked_req_header_bytes' => null,
        'attack_logged_req_body_bytes' => null,
        'attack_logged_req_header_bytes' => null,
        'attack_passed_req_body_bytes' => null,
        'attack_passed_req_header_bytes' => null,
        'attack_req_body_bytes' => null,
        'attack_req_header_bytes' => null,
        'attack_resp_synth_bytes' => null,
        'bereq_body_bytes' => null,
        'bereq_header_bytes' => null,
        'body_size' => null,
        'compute_bereq_body_bytes' => null,
        'compute_bereq_errors' => null,
        'compute_bereq_header_bytes' => null,
        'compute_bereqs' => null,
        'compute_beresp_body_bytes' => null,
        'compute_beresp_header_bytes' => null,
        'compute_execution_time_ms' => null,
        'compute_globals_limit_exceeded' => null,
        'compute_guest_errors' => null,
        'compute_heap_limit_exceeded' => null,
        'compute_ram_used' => null,
        'compute_req_body_bytes' => null,
        'compute_req_header_bytes' => null,
        'compute_request_time_ms' => null,
        'compute_requests' => null,
        'compute_resource_limit_exceeded' => null,
        'compute_resp_body_bytes' => null,
        'compute_resp_header_bytes' => null,
        'compute_resp_status_1xx' => null,
        'compute_resp_status_2xx' => null,
        'compute_resp_status_3xx' => null,
        'compute_resp_status_4xx' => null,
        'compute_resp_status_5xx' => null,
        'compute_runtime_errors' => null,
        'compute_stack_limit_exceeded' => null,
        'deliver_sub_count' => null,
        'deliver_sub_time' => null,
        'edge_hit_requests' => null,
        'edge_miss_requests' => null,
        'edge_requests' => null,
        'edge_resp_body_bytes' => null,
        'edge_resp_header_bytes' => null,
        'error_sub_count' => null,
        'error_sub_time' => null,
        'errors' => null,
        'fetch_sub_count' => null,
        'fetch_sub_time' => null,
        'hash_sub_count' => null,
        'hash_sub_time' => null,
        'header_size' => null,
        'hit_resp_body_bytes' => null,
        'hit_sub_count' => null,
        'hit_sub_time' => null,
        'hits' => null,
        'hits_time' => null,
        'http2' => null,
        'http3' => null,
        'imgopto' => null,
        'imgopto_resp_body_bytes' => null,
        'imgopto_resp_header_bytes' => null,
        'imgopto_shield' => null,
        'imgopto_shield_resp_body_bytes' => null,
        'imgopto_shield_resp_header_bytes' => null,
        'imgopto_transforms' => null,
        'imgvideo' => null,
        'imgvideo_frames' => null,
        'imgvideo_resp_body_bytes' => null,
        'imgvideo_resp_header_bytes' => null,
        'imgvideo_shield' => null,
        'imgvideo_shield_frames' => null,
        'imgvideo_shield_resp_body_bytes' => null,
        'imgvideo_shield_resp_header_bytes' => null,
        'ipv6' => null,
        'log' => null,
        'log_bytes' => null,
        'logging' => null,
        'miss' => null,
        'miss_histogram' => null,
        'miss_resp_body_bytes' => null,
        'miss_sub_count' => null,
        'miss_sub_time' => null,
        'miss_time' => null,
        'object_size_100k' => null,
        'object_size_100m' => null,
        'object_size_10k' => null,
        'object_size_10m' => null,
        'object_size_1g' => null,
        'object_size_1k' => null,
        'object_size_1m' => null,
        'object_size_other' => null,
        'origin_cache_fetches' => null,
        'origin_fetch_body_bytes' => null,
        'origin_fetch_header_bytes' => null,
        'origin_fetch_resp_body_bytes' => null,
        'origin_fetch_resp_header_bytes' => null,
        'origin_fetches' => null,
        'origin_revalidations' => null,
        'otfp' => null,
        'otfp_deliver_time' => null,
        'otfp_manifests' => null,
        'otfp_resp_body_bytes' => null,
        'otfp_resp_header_bytes' => null,
        'otfp_shield' => null,
        'otfp_shield_resp_body_bytes' => null,
        'otfp_shield_resp_header_bytes' => null,
        'otfp_shield_time' => null,
        'pass' => null,
        'pass_resp_body_bytes' => null,
        'pass_sub_count' => null,
        'pass_sub_time' => null,
        'pass_time' => null,
        'pci' => null,
        'pipe_sub_count' => null,
        'pipe_sub_time' => null,
        'predeliver_sub_count' => null,
        'predeliver_sub_time' => null,
        'prehash_sub_count' => null,
        'prehash_sub_time' => null,
        'recv_sub_count' => null,
        'recv_sub_time' => null,
        'req_body_bytes' => null,
        'req_header_bytes' => null,
        'requests' => null,
        'resp_body_bytes' => null,
        'resp_header_bytes' => null,
        'restarts' => null,
        'segblock_origin_fetches' => null,
        'segblock_shield_fetches' => null,
        'shield' => null,
        'shield_cache_fetches' => null,
        'shield_fetch_body_bytes' => null,
        'shield_fetch_header_bytes' => null,
        'shield_fetch_resp_body_bytes' => null,
        'shield_fetch_resp_header_bytes' => null,
        'shield_fetches' => null,
        'shield_resp_body_bytes' => null,
        'shield_resp_header_bytes' => null,
        'shield_revalidations' => null,
        'status_1xx' => null,
        'status_200' => null,
        'status_204' => null,
        'status_206' => null,
        'status_2xx' => null,
        'status_301' => null,
        'status_302' => null,
        'status_304' => null,
        'status_3xx' => null,
        'status_400' => null,
        'status_401' => null,
        'status_403' => null,
        'status_404' => null,
        'status_416' => null,
        'status_429' => null,
        'status_4xx' => null,
        'status_500' => null,
        'status_501' => null,
        'status_502' => null,
        'status_503' => null,
        'status_504' => null,
        'status_505' => null,
        'status_5xx' => null,
        'synth' => null,
        'tls' => null,
        'tls_v10' => null,
        'tls_v11' => null,
        'tls_v12' => null,
        'tls_v13' => null,
        'uncacheable' => null,
        'video' => null,
        'waf_blocked' => null,
        'waf_logged' => null,
        'waf_passed' => null
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
        'attack_blocked_req_body_bytes' => 'attack_blocked_req_body_bytes',
        'attack_blocked_req_header_bytes' => 'attack_blocked_req_header_bytes',
        'attack_logged_req_body_bytes' => 'attack_logged_req_body_bytes',
        'attack_logged_req_header_bytes' => 'attack_logged_req_header_bytes',
        'attack_passed_req_body_bytes' => 'attack_passed_req_body_bytes',
        'attack_passed_req_header_bytes' => 'attack_passed_req_header_bytes',
        'attack_req_body_bytes' => 'attack_req_body_bytes',
        'attack_req_header_bytes' => 'attack_req_header_bytes',
        'attack_resp_synth_bytes' => 'attack_resp_synth_bytes',
        'bereq_body_bytes' => 'bereq_body_bytes',
        'bereq_header_bytes' => 'bereq_header_bytes',
        'body_size' => 'body_size',
        'compute_bereq_body_bytes' => 'compute_bereq_body_bytes',
        'compute_bereq_errors' => 'compute_bereq_errors',
        'compute_bereq_header_bytes' => 'compute_bereq_header_bytes',
        'compute_bereqs' => 'compute_bereqs',
        'compute_beresp_body_bytes' => 'compute_beresp_body_bytes',
        'compute_beresp_header_bytes' => 'compute_beresp_header_bytes',
        'compute_execution_time_ms' => 'compute_execution_time_ms',
        'compute_globals_limit_exceeded' => 'compute_globals_limit_exceeded',
        'compute_guest_errors' => 'compute_guest_errors',
        'compute_heap_limit_exceeded' => 'compute_heap_limit_exceeded',
        'compute_ram_used' => 'compute_ram_used',
        'compute_req_body_bytes' => 'compute_req_body_bytes',
        'compute_req_header_bytes' => 'compute_req_header_bytes',
        'compute_request_time_ms' => 'compute_request_time_ms',
        'compute_requests' => 'compute_requests',
        'compute_resource_limit_exceeded' => 'compute_resource_limit_exceeded',
        'compute_resp_body_bytes' => 'compute_resp_body_bytes',
        'compute_resp_header_bytes' => 'compute_resp_header_bytes',
        'compute_resp_status_1xx' => 'compute_resp_status_1xx',
        'compute_resp_status_2xx' => 'compute_resp_status_2xx',
        'compute_resp_status_3xx' => 'compute_resp_status_3xx',
        'compute_resp_status_4xx' => 'compute_resp_status_4xx',
        'compute_resp_status_5xx' => 'compute_resp_status_5xx',
        'compute_runtime_errors' => 'compute_runtime_errors',
        'compute_stack_limit_exceeded' => 'compute_stack_limit_exceeded',
        'deliver_sub_count' => 'deliver_sub_count',
        'deliver_sub_time' => 'deliver_sub_time',
        'edge_hit_requests' => 'edge_hit_requests',
        'edge_miss_requests' => 'edge_miss_requests',
        'edge_requests' => 'edge_requests',
        'edge_resp_body_bytes' => 'edge_resp_body_bytes',
        'edge_resp_header_bytes' => 'edge_resp_header_bytes',
        'error_sub_count' => 'error_sub_count',
        'error_sub_time' => 'error_sub_time',
        'errors' => 'errors',
        'fetch_sub_count' => 'fetch_sub_count',
        'fetch_sub_time' => 'fetch_sub_time',
        'hash_sub_count' => 'hash_sub_count',
        'hash_sub_time' => 'hash_sub_time',
        'header_size' => 'header_size',
        'hit_resp_body_bytes' => 'hit_resp_body_bytes',
        'hit_sub_count' => 'hit_sub_count',
        'hit_sub_time' => 'hit_sub_time',
        'hits' => 'hits',
        'hits_time' => 'hits_time',
        'http2' => 'http2',
        'http3' => 'http3',
        'imgopto' => 'imgopto',
        'imgopto_resp_body_bytes' => 'imgopto_resp_body_bytes',
        'imgopto_resp_header_bytes' => 'imgopto_resp_header_bytes',
        'imgopto_shield' => 'imgopto_shield',
        'imgopto_shield_resp_body_bytes' => 'imgopto_shield_resp_body_bytes',
        'imgopto_shield_resp_header_bytes' => 'imgopto_shield_resp_header_bytes',
        'imgopto_transforms' => 'imgopto_transforms',
        'imgvideo' => 'imgvideo',
        'imgvideo_frames' => 'imgvideo_frames',
        'imgvideo_resp_body_bytes' => 'imgvideo_resp_body_bytes',
        'imgvideo_resp_header_bytes' => 'imgvideo_resp_header_bytes',
        'imgvideo_shield' => 'imgvideo_shield',
        'imgvideo_shield_frames' => 'imgvideo_shield_frames',
        'imgvideo_shield_resp_body_bytes' => 'imgvideo_shield_resp_body_bytes',
        'imgvideo_shield_resp_header_bytes' => 'imgvideo_shield_resp_header_bytes',
        'ipv6' => 'ipv6',
        'log' => 'log',
        'log_bytes' => 'log_bytes',
        'logging' => 'logging',
        'miss' => 'miss',
        'miss_histogram' => 'miss_histogram',
        'miss_resp_body_bytes' => 'miss_resp_body_bytes',
        'miss_sub_count' => 'miss_sub_count',
        'miss_sub_time' => 'miss_sub_time',
        'miss_time' => 'miss_time',
        'object_size_100k' => 'object_size_100k',
        'object_size_100m' => 'object_size_100m',
        'object_size_10k' => 'object_size_10k',
        'object_size_10m' => 'object_size_10m',
        'object_size_1g' => 'object_size_1g',
        'object_size_1k' => 'object_size_1k',
        'object_size_1m' => 'object_size_1m',
        'object_size_other' => 'object_size_other',
        'origin_cache_fetches' => 'origin_cache_fetches',
        'origin_fetch_body_bytes' => 'origin_fetch_body_bytes',
        'origin_fetch_header_bytes' => 'origin_fetch_header_bytes',
        'origin_fetch_resp_body_bytes' => 'origin_fetch_resp_body_bytes',
        'origin_fetch_resp_header_bytes' => 'origin_fetch_resp_header_bytes',
        'origin_fetches' => 'origin_fetches',
        'origin_revalidations' => 'origin_revalidations',
        'otfp' => 'otfp',
        'otfp_deliver_time' => 'otfp_deliver_time',
        'otfp_manifests' => 'otfp_manifests',
        'otfp_resp_body_bytes' => 'otfp_resp_body_bytes',
        'otfp_resp_header_bytes' => 'otfp_resp_header_bytes',
        'otfp_shield' => 'otfp_shield',
        'otfp_shield_resp_body_bytes' => 'otfp_shield_resp_body_bytes',
        'otfp_shield_resp_header_bytes' => 'otfp_shield_resp_header_bytes',
        'otfp_shield_time' => 'otfp_shield_time',
        'pass' => 'pass',
        'pass_resp_body_bytes' => 'pass_resp_body_bytes',
        'pass_sub_count' => 'pass_sub_count',
        'pass_sub_time' => 'pass_sub_time',
        'pass_time' => 'pass_time',
        'pci' => 'pci',
        'pipe_sub_count' => 'pipe_sub_count',
        'pipe_sub_time' => 'pipe_sub_time',
        'predeliver_sub_count' => 'predeliver_sub_count',
        'predeliver_sub_time' => 'predeliver_sub_time',
        'prehash_sub_count' => 'prehash_sub_count',
        'prehash_sub_time' => 'prehash_sub_time',
        'recv_sub_count' => 'recv_sub_count',
        'recv_sub_time' => 'recv_sub_time',
        'req_body_bytes' => 'req_body_bytes',
        'req_header_bytes' => 'req_header_bytes',
        'requests' => 'requests',
        'resp_body_bytes' => 'resp_body_bytes',
        'resp_header_bytes' => 'resp_header_bytes',
        'restarts' => 'restarts',
        'segblock_origin_fetches' => 'segblock_origin_fetches',
        'segblock_shield_fetches' => 'segblock_shield_fetches',
        'shield' => 'shield',
        'shield_cache_fetches' => 'shield_cache_fetches',
        'shield_fetch_body_bytes' => 'shield_fetch_body_bytes',
        'shield_fetch_header_bytes' => 'shield_fetch_header_bytes',
        'shield_fetch_resp_body_bytes' => 'shield_fetch_resp_body_bytes',
        'shield_fetch_resp_header_bytes' => 'shield_fetch_resp_header_bytes',
        'shield_fetches' => 'shield_fetches',
        'shield_resp_body_bytes' => 'shield_resp_body_bytes',
        'shield_resp_header_bytes' => 'shield_resp_header_bytes',
        'shield_revalidations' => 'shield_revalidations',
        'status_1xx' => 'status_1xx',
        'status_200' => 'status_200',
        'status_204' => 'status_204',
        'status_206' => 'status_206',
        'status_2xx' => 'status_2xx',
        'status_301' => 'status_301',
        'status_302' => 'status_302',
        'status_304' => 'status_304',
        'status_3xx' => 'status_3xx',
        'status_400' => 'status_400',
        'status_401' => 'status_401',
        'status_403' => 'status_403',
        'status_404' => 'status_404',
        'status_416' => 'status_416',
        'status_429' => 'status_429',
        'status_4xx' => 'status_4xx',
        'status_500' => 'status_500',
        'status_501' => 'status_501',
        'status_502' => 'status_502',
        'status_503' => 'status_503',
        'status_504' => 'status_504',
        'status_505' => 'status_505',
        'status_5xx' => 'status_5xx',
        'synth' => 'synth',
        'tls' => 'tls',
        'tls_v10' => 'tls_v10',
        'tls_v11' => 'tls_v11',
        'tls_v12' => 'tls_v12',
        'tls_v13' => 'tls_v13',
        'uncacheable' => 'uncacheable',
        'video' => 'video',
        'waf_blocked' => 'waf_blocked',
        'waf_logged' => 'waf_logged',
        'waf_passed' => 'waf_passed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attack_blocked_req_body_bytes' => 'setAttackBlockedReqBodyBytes',
        'attack_blocked_req_header_bytes' => 'setAttackBlockedReqHeaderBytes',
        'attack_logged_req_body_bytes' => 'setAttackLoggedReqBodyBytes',
        'attack_logged_req_header_bytes' => 'setAttackLoggedReqHeaderBytes',
        'attack_passed_req_body_bytes' => 'setAttackPassedReqBodyBytes',
        'attack_passed_req_header_bytes' => 'setAttackPassedReqHeaderBytes',
        'attack_req_body_bytes' => 'setAttackReqBodyBytes',
        'attack_req_header_bytes' => 'setAttackReqHeaderBytes',
        'attack_resp_synth_bytes' => 'setAttackRespSynthBytes',
        'bereq_body_bytes' => 'setBereqBodyBytes',
        'bereq_header_bytes' => 'setBereqHeaderBytes',
        'body_size' => 'setBodySize',
        'compute_bereq_body_bytes' => 'setComputeBereqBodyBytes',
        'compute_bereq_errors' => 'setComputeBereqErrors',
        'compute_bereq_header_bytes' => 'setComputeBereqHeaderBytes',
        'compute_bereqs' => 'setComputeBereqs',
        'compute_beresp_body_bytes' => 'setComputeBerespBodyBytes',
        'compute_beresp_header_bytes' => 'setComputeBerespHeaderBytes',
        'compute_execution_time_ms' => 'setComputeExecutionTimeMs',
        'compute_globals_limit_exceeded' => 'setComputeGlobalsLimitExceeded',
        'compute_guest_errors' => 'setComputeGuestErrors',
        'compute_heap_limit_exceeded' => 'setComputeHeapLimitExceeded',
        'compute_ram_used' => 'setComputeRamUsed',
        'compute_req_body_bytes' => 'setComputeReqBodyBytes',
        'compute_req_header_bytes' => 'setComputeReqHeaderBytes',
        'compute_request_time_ms' => 'setComputeRequestTimeMs',
        'compute_requests' => 'setComputeRequests',
        'compute_resource_limit_exceeded' => 'setComputeResourceLimitExceeded',
        'compute_resp_body_bytes' => 'setComputeRespBodyBytes',
        'compute_resp_header_bytes' => 'setComputeRespHeaderBytes',
        'compute_resp_status_1xx' => 'setComputeRespStatus1xx',
        'compute_resp_status_2xx' => 'setComputeRespStatus2xx',
        'compute_resp_status_3xx' => 'setComputeRespStatus3xx',
        'compute_resp_status_4xx' => 'setComputeRespStatus4xx',
        'compute_resp_status_5xx' => 'setComputeRespStatus5xx',
        'compute_runtime_errors' => 'setComputeRuntimeErrors',
        'compute_stack_limit_exceeded' => 'setComputeStackLimitExceeded',
        'deliver_sub_count' => 'setDeliverSubCount',
        'deliver_sub_time' => 'setDeliverSubTime',
        'edge_hit_requests' => 'setEdgeHitRequests',
        'edge_miss_requests' => 'setEdgeMissRequests',
        'edge_requests' => 'setEdgeRequests',
        'edge_resp_body_bytes' => 'setEdgeRespBodyBytes',
        'edge_resp_header_bytes' => 'setEdgeRespHeaderBytes',
        'error_sub_count' => 'setErrorSubCount',
        'error_sub_time' => 'setErrorSubTime',
        'errors' => 'setErrors',
        'fetch_sub_count' => 'setFetchSubCount',
        'fetch_sub_time' => 'setFetchSubTime',
        'hash_sub_count' => 'setHashSubCount',
        'hash_sub_time' => 'setHashSubTime',
        'header_size' => 'setHeaderSize',
        'hit_resp_body_bytes' => 'setHitRespBodyBytes',
        'hit_sub_count' => 'setHitSubCount',
        'hit_sub_time' => 'setHitSubTime',
        'hits' => 'setHits',
        'hits_time' => 'setHitsTime',
        'http2' => 'setHttp2',
        'http3' => 'setHttp3',
        'imgopto' => 'setImgopto',
        'imgopto_resp_body_bytes' => 'setImgoptoRespBodyBytes',
        'imgopto_resp_header_bytes' => 'setImgoptoRespHeaderBytes',
        'imgopto_shield' => 'setImgoptoShield',
        'imgopto_shield_resp_body_bytes' => 'setImgoptoShieldRespBodyBytes',
        'imgopto_shield_resp_header_bytes' => 'setImgoptoShieldRespHeaderBytes',
        'imgopto_transforms' => 'setImgoptoTransforms',
        'imgvideo' => 'setImgvideo',
        'imgvideo_frames' => 'setImgvideoFrames',
        'imgvideo_resp_body_bytes' => 'setImgvideoRespBodyBytes',
        'imgvideo_resp_header_bytes' => 'setImgvideoRespHeaderBytes',
        'imgvideo_shield' => 'setImgvideoShield',
        'imgvideo_shield_frames' => 'setImgvideoShieldFrames',
        'imgvideo_shield_resp_body_bytes' => 'setImgvideoShieldRespBodyBytes',
        'imgvideo_shield_resp_header_bytes' => 'setImgvideoShieldRespHeaderBytes',
        'ipv6' => 'setIpv6',
        'log' => 'setLog',
        'log_bytes' => 'setLogBytes',
        'logging' => 'setLogging',
        'miss' => 'setMiss',
        'miss_histogram' => 'setMissHistogram',
        'miss_resp_body_bytes' => 'setMissRespBodyBytes',
        'miss_sub_count' => 'setMissSubCount',
        'miss_sub_time' => 'setMissSubTime',
        'miss_time' => 'setMissTime',
        'object_size_100k' => 'setObjectSize100k',
        'object_size_100m' => 'setObjectSize100m',
        'object_size_10k' => 'setObjectSize10k',
        'object_size_10m' => 'setObjectSize10m',
        'object_size_1g' => 'setObjectSize1g',
        'object_size_1k' => 'setObjectSize1k',
        'object_size_1m' => 'setObjectSize1m',
        'object_size_other' => 'setObjectSizeOther',
        'origin_cache_fetches' => 'setOriginCacheFetches',
        'origin_fetch_body_bytes' => 'setOriginFetchBodyBytes',
        'origin_fetch_header_bytes' => 'setOriginFetchHeaderBytes',
        'origin_fetch_resp_body_bytes' => 'setOriginFetchRespBodyBytes',
        'origin_fetch_resp_header_bytes' => 'setOriginFetchRespHeaderBytes',
        'origin_fetches' => 'setOriginFetches',
        'origin_revalidations' => 'setOriginRevalidations',
        'otfp' => 'setOtfp',
        'otfp_deliver_time' => 'setOtfpDeliverTime',
        'otfp_manifests' => 'setOtfpManifests',
        'otfp_resp_body_bytes' => 'setOtfpRespBodyBytes',
        'otfp_resp_header_bytes' => 'setOtfpRespHeaderBytes',
        'otfp_shield' => 'setOtfpShield',
        'otfp_shield_resp_body_bytes' => 'setOtfpShieldRespBodyBytes',
        'otfp_shield_resp_header_bytes' => 'setOtfpShieldRespHeaderBytes',
        'otfp_shield_time' => 'setOtfpShieldTime',
        'pass' => 'setPass',
        'pass_resp_body_bytes' => 'setPassRespBodyBytes',
        'pass_sub_count' => 'setPassSubCount',
        'pass_sub_time' => 'setPassSubTime',
        'pass_time' => 'setPassTime',
        'pci' => 'setPci',
        'pipe_sub_count' => 'setPipeSubCount',
        'pipe_sub_time' => 'setPipeSubTime',
        'predeliver_sub_count' => 'setPredeliverSubCount',
        'predeliver_sub_time' => 'setPredeliverSubTime',
        'prehash_sub_count' => 'setPrehashSubCount',
        'prehash_sub_time' => 'setPrehashSubTime',
        'recv_sub_count' => 'setRecvSubCount',
        'recv_sub_time' => 'setRecvSubTime',
        'req_body_bytes' => 'setReqBodyBytes',
        'req_header_bytes' => 'setReqHeaderBytes',
        'requests' => 'setRequests',
        'resp_body_bytes' => 'setRespBodyBytes',
        'resp_header_bytes' => 'setRespHeaderBytes',
        'restarts' => 'setRestarts',
        'segblock_origin_fetches' => 'setSegblockOriginFetches',
        'segblock_shield_fetches' => 'setSegblockShieldFetches',
        'shield' => 'setShield',
        'shield_cache_fetches' => 'setShieldCacheFetches',
        'shield_fetch_body_bytes' => 'setShieldFetchBodyBytes',
        'shield_fetch_header_bytes' => 'setShieldFetchHeaderBytes',
        'shield_fetch_resp_body_bytes' => 'setShieldFetchRespBodyBytes',
        'shield_fetch_resp_header_bytes' => 'setShieldFetchRespHeaderBytes',
        'shield_fetches' => 'setShieldFetches',
        'shield_resp_body_bytes' => 'setShieldRespBodyBytes',
        'shield_resp_header_bytes' => 'setShieldRespHeaderBytes',
        'shield_revalidations' => 'setShieldRevalidations',
        'status_1xx' => 'setStatus1xx',
        'status_200' => 'setStatus200',
        'status_204' => 'setStatus204',
        'status_206' => 'setStatus206',
        'status_2xx' => 'setStatus2xx',
        'status_301' => 'setStatus301',
        'status_302' => 'setStatus302',
        'status_304' => 'setStatus304',
        'status_3xx' => 'setStatus3xx',
        'status_400' => 'setStatus400',
        'status_401' => 'setStatus401',
        'status_403' => 'setStatus403',
        'status_404' => 'setStatus404',
        'status_416' => 'setStatus416',
        'status_429' => 'setStatus429',
        'status_4xx' => 'setStatus4xx',
        'status_500' => 'setStatus500',
        'status_501' => 'setStatus501',
        'status_502' => 'setStatus502',
        'status_503' => 'setStatus503',
        'status_504' => 'setStatus504',
        'status_505' => 'setStatus505',
        'status_5xx' => 'setStatus5xx',
        'synth' => 'setSynth',
        'tls' => 'setTls',
        'tls_v10' => 'setTlsV10',
        'tls_v11' => 'setTlsV11',
        'tls_v12' => 'setTlsV12',
        'tls_v13' => 'setTlsV13',
        'uncacheable' => 'setUncacheable',
        'video' => 'setVideo',
        'waf_blocked' => 'setWafBlocked',
        'waf_logged' => 'setWafLogged',
        'waf_passed' => 'setWafPassed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attack_blocked_req_body_bytes' => 'getAttackBlockedReqBodyBytes',
        'attack_blocked_req_header_bytes' => 'getAttackBlockedReqHeaderBytes',
        'attack_logged_req_body_bytes' => 'getAttackLoggedReqBodyBytes',
        'attack_logged_req_header_bytes' => 'getAttackLoggedReqHeaderBytes',
        'attack_passed_req_body_bytes' => 'getAttackPassedReqBodyBytes',
        'attack_passed_req_header_bytes' => 'getAttackPassedReqHeaderBytes',
        'attack_req_body_bytes' => 'getAttackReqBodyBytes',
        'attack_req_header_bytes' => 'getAttackReqHeaderBytes',
        'attack_resp_synth_bytes' => 'getAttackRespSynthBytes',
        'bereq_body_bytes' => 'getBereqBodyBytes',
        'bereq_header_bytes' => 'getBereqHeaderBytes',
        'body_size' => 'getBodySize',
        'compute_bereq_body_bytes' => 'getComputeBereqBodyBytes',
        'compute_bereq_errors' => 'getComputeBereqErrors',
        'compute_bereq_header_bytes' => 'getComputeBereqHeaderBytes',
        'compute_bereqs' => 'getComputeBereqs',
        'compute_beresp_body_bytes' => 'getComputeBerespBodyBytes',
        'compute_beresp_header_bytes' => 'getComputeBerespHeaderBytes',
        'compute_execution_time_ms' => 'getComputeExecutionTimeMs',
        'compute_globals_limit_exceeded' => 'getComputeGlobalsLimitExceeded',
        'compute_guest_errors' => 'getComputeGuestErrors',
        'compute_heap_limit_exceeded' => 'getComputeHeapLimitExceeded',
        'compute_ram_used' => 'getComputeRamUsed',
        'compute_req_body_bytes' => 'getComputeReqBodyBytes',
        'compute_req_header_bytes' => 'getComputeReqHeaderBytes',
        'compute_request_time_ms' => 'getComputeRequestTimeMs',
        'compute_requests' => 'getComputeRequests',
        'compute_resource_limit_exceeded' => 'getComputeResourceLimitExceeded',
        'compute_resp_body_bytes' => 'getComputeRespBodyBytes',
        'compute_resp_header_bytes' => 'getComputeRespHeaderBytes',
        'compute_resp_status_1xx' => 'getComputeRespStatus1xx',
        'compute_resp_status_2xx' => 'getComputeRespStatus2xx',
        'compute_resp_status_3xx' => 'getComputeRespStatus3xx',
        'compute_resp_status_4xx' => 'getComputeRespStatus4xx',
        'compute_resp_status_5xx' => 'getComputeRespStatus5xx',
        'compute_runtime_errors' => 'getComputeRuntimeErrors',
        'compute_stack_limit_exceeded' => 'getComputeStackLimitExceeded',
        'deliver_sub_count' => 'getDeliverSubCount',
        'deliver_sub_time' => 'getDeliverSubTime',
        'edge_hit_requests' => 'getEdgeHitRequests',
        'edge_miss_requests' => 'getEdgeMissRequests',
        'edge_requests' => 'getEdgeRequests',
        'edge_resp_body_bytes' => 'getEdgeRespBodyBytes',
        'edge_resp_header_bytes' => 'getEdgeRespHeaderBytes',
        'error_sub_count' => 'getErrorSubCount',
        'error_sub_time' => 'getErrorSubTime',
        'errors' => 'getErrors',
        'fetch_sub_count' => 'getFetchSubCount',
        'fetch_sub_time' => 'getFetchSubTime',
        'hash_sub_count' => 'getHashSubCount',
        'hash_sub_time' => 'getHashSubTime',
        'header_size' => 'getHeaderSize',
        'hit_resp_body_bytes' => 'getHitRespBodyBytes',
        'hit_sub_count' => 'getHitSubCount',
        'hit_sub_time' => 'getHitSubTime',
        'hits' => 'getHits',
        'hits_time' => 'getHitsTime',
        'http2' => 'getHttp2',
        'http3' => 'getHttp3',
        'imgopto' => 'getImgopto',
        'imgopto_resp_body_bytes' => 'getImgoptoRespBodyBytes',
        'imgopto_resp_header_bytes' => 'getImgoptoRespHeaderBytes',
        'imgopto_shield' => 'getImgoptoShield',
        'imgopto_shield_resp_body_bytes' => 'getImgoptoShieldRespBodyBytes',
        'imgopto_shield_resp_header_bytes' => 'getImgoptoShieldRespHeaderBytes',
        'imgopto_transforms' => 'getImgoptoTransforms',
        'imgvideo' => 'getImgvideo',
        'imgvideo_frames' => 'getImgvideoFrames',
        'imgvideo_resp_body_bytes' => 'getImgvideoRespBodyBytes',
        'imgvideo_resp_header_bytes' => 'getImgvideoRespHeaderBytes',
        'imgvideo_shield' => 'getImgvideoShield',
        'imgvideo_shield_frames' => 'getImgvideoShieldFrames',
        'imgvideo_shield_resp_body_bytes' => 'getImgvideoShieldRespBodyBytes',
        'imgvideo_shield_resp_header_bytes' => 'getImgvideoShieldRespHeaderBytes',
        'ipv6' => 'getIpv6',
        'log' => 'getLog',
        'log_bytes' => 'getLogBytes',
        'logging' => 'getLogging',
        'miss' => 'getMiss',
        'miss_histogram' => 'getMissHistogram',
        'miss_resp_body_bytes' => 'getMissRespBodyBytes',
        'miss_sub_count' => 'getMissSubCount',
        'miss_sub_time' => 'getMissSubTime',
        'miss_time' => 'getMissTime',
        'object_size_100k' => 'getObjectSize100k',
        'object_size_100m' => 'getObjectSize100m',
        'object_size_10k' => 'getObjectSize10k',
        'object_size_10m' => 'getObjectSize10m',
        'object_size_1g' => 'getObjectSize1g',
        'object_size_1k' => 'getObjectSize1k',
        'object_size_1m' => 'getObjectSize1m',
        'object_size_other' => 'getObjectSizeOther',
        'origin_cache_fetches' => 'getOriginCacheFetches',
        'origin_fetch_body_bytes' => 'getOriginFetchBodyBytes',
        'origin_fetch_header_bytes' => 'getOriginFetchHeaderBytes',
        'origin_fetch_resp_body_bytes' => 'getOriginFetchRespBodyBytes',
        'origin_fetch_resp_header_bytes' => 'getOriginFetchRespHeaderBytes',
        'origin_fetches' => 'getOriginFetches',
        'origin_revalidations' => 'getOriginRevalidations',
        'otfp' => 'getOtfp',
        'otfp_deliver_time' => 'getOtfpDeliverTime',
        'otfp_manifests' => 'getOtfpManifests',
        'otfp_resp_body_bytes' => 'getOtfpRespBodyBytes',
        'otfp_resp_header_bytes' => 'getOtfpRespHeaderBytes',
        'otfp_shield' => 'getOtfpShield',
        'otfp_shield_resp_body_bytes' => 'getOtfpShieldRespBodyBytes',
        'otfp_shield_resp_header_bytes' => 'getOtfpShieldRespHeaderBytes',
        'otfp_shield_time' => 'getOtfpShieldTime',
        'pass' => 'getPass',
        'pass_resp_body_bytes' => 'getPassRespBodyBytes',
        'pass_sub_count' => 'getPassSubCount',
        'pass_sub_time' => 'getPassSubTime',
        'pass_time' => 'getPassTime',
        'pci' => 'getPci',
        'pipe_sub_count' => 'getPipeSubCount',
        'pipe_sub_time' => 'getPipeSubTime',
        'predeliver_sub_count' => 'getPredeliverSubCount',
        'predeliver_sub_time' => 'getPredeliverSubTime',
        'prehash_sub_count' => 'getPrehashSubCount',
        'prehash_sub_time' => 'getPrehashSubTime',
        'recv_sub_count' => 'getRecvSubCount',
        'recv_sub_time' => 'getRecvSubTime',
        'req_body_bytes' => 'getReqBodyBytes',
        'req_header_bytes' => 'getReqHeaderBytes',
        'requests' => 'getRequests',
        'resp_body_bytes' => 'getRespBodyBytes',
        'resp_header_bytes' => 'getRespHeaderBytes',
        'restarts' => 'getRestarts',
        'segblock_origin_fetches' => 'getSegblockOriginFetches',
        'segblock_shield_fetches' => 'getSegblockShieldFetches',
        'shield' => 'getShield',
        'shield_cache_fetches' => 'getShieldCacheFetches',
        'shield_fetch_body_bytes' => 'getShieldFetchBodyBytes',
        'shield_fetch_header_bytes' => 'getShieldFetchHeaderBytes',
        'shield_fetch_resp_body_bytes' => 'getShieldFetchRespBodyBytes',
        'shield_fetch_resp_header_bytes' => 'getShieldFetchRespHeaderBytes',
        'shield_fetches' => 'getShieldFetches',
        'shield_resp_body_bytes' => 'getShieldRespBodyBytes',
        'shield_resp_header_bytes' => 'getShieldRespHeaderBytes',
        'shield_revalidations' => 'getShieldRevalidations',
        'status_1xx' => 'getStatus1xx',
        'status_200' => 'getStatus200',
        'status_204' => 'getStatus204',
        'status_206' => 'getStatus206',
        'status_2xx' => 'getStatus2xx',
        'status_301' => 'getStatus301',
        'status_302' => 'getStatus302',
        'status_304' => 'getStatus304',
        'status_3xx' => 'getStatus3xx',
        'status_400' => 'getStatus400',
        'status_401' => 'getStatus401',
        'status_403' => 'getStatus403',
        'status_404' => 'getStatus404',
        'status_416' => 'getStatus416',
        'status_429' => 'getStatus429',
        'status_4xx' => 'getStatus4xx',
        'status_500' => 'getStatus500',
        'status_501' => 'getStatus501',
        'status_502' => 'getStatus502',
        'status_503' => 'getStatus503',
        'status_504' => 'getStatus504',
        'status_505' => 'getStatus505',
        'status_5xx' => 'getStatus5xx',
        'synth' => 'getSynth',
        'tls' => 'getTls',
        'tls_v10' => 'getTlsV10',
        'tls_v11' => 'getTlsV11',
        'tls_v12' => 'getTlsV12',
        'tls_v13' => 'getTlsV13',
        'uncacheable' => 'getUncacheable',
        'video' => 'getVideo',
        'waf_blocked' => 'getWafBlocked',
        'waf_logged' => 'getWafLogged',
        'waf_passed' => 'getWafPassed'
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
        $this->container['attack_blocked_req_body_bytes'] = $data['attack_blocked_req_body_bytes'] ?? null;
        $this->container['attack_blocked_req_header_bytes'] = $data['attack_blocked_req_header_bytes'] ?? null;
        $this->container['attack_logged_req_body_bytes'] = $data['attack_logged_req_body_bytes'] ?? null;
        $this->container['attack_logged_req_header_bytes'] = $data['attack_logged_req_header_bytes'] ?? null;
        $this->container['attack_passed_req_body_bytes'] = $data['attack_passed_req_body_bytes'] ?? null;
        $this->container['attack_passed_req_header_bytes'] = $data['attack_passed_req_header_bytes'] ?? null;
        $this->container['attack_req_body_bytes'] = $data['attack_req_body_bytes'] ?? null;
        $this->container['attack_req_header_bytes'] = $data['attack_req_header_bytes'] ?? null;
        $this->container['attack_resp_synth_bytes'] = $data['attack_resp_synth_bytes'] ?? null;
        $this->container['bereq_body_bytes'] = $data['bereq_body_bytes'] ?? null;
        $this->container['bereq_header_bytes'] = $data['bereq_header_bytes'] ?? null;
        $this->container['body_size'] = $data['body_size'] ?? null;
        $this->container['compute_bereq_body_bytes'] = $data['compute_bereq_body_bytes'] ?? null;
        $this->container['compute_bereq_errors'] = $data['compute_bereq_errors'] ?? null;
        $this->container['compute_bereq_header_bytes'] = $data['compute_bereq_header_bytes'] ?? null;
        $this->container['compute_bereqs'] = $data['compute_bereqs'] ?? null;
        $this->container['compute_beresp_body_bytes'] = $data['compute_beresp_body_bytes'] ?? null;
        $this->container['compute_beresp_header_bytes'] = $data['compute_beresp_header_bytes'] ?? null;
        $this->container['compute_execution_time_ms'] = $data['compute_execution_time_ms'] ?? null;
        $this->container['compute_globals_limit_exceeded'] = $data['compute_globals_limit_exceeded'] ?? null;
        $this->container['compute_guest_errors'] = $data['compute_guest_errors'] ?? null;
        $this->container['compute_heap_limit_exceeded'] = $data['compute_heap_limit_exceeded'] ?? null;
        $this->container['compute_ram_used'] = $data['compute_ram_used'] ?? null;
        $this->container['compute_req_body_bytes'] = $data['compute_req_body_bytes'] ?? null;
        $this->container['compute_req_header_bytes'] = $data['compute_req_header_bytes'] ?? null;
        $this->container['compute_request_time_ms'] = $data['compute_request_time_ms'] ?? null;
        $this->container['compute_requests'] = $data['compute_requests'] ?? null;
        $this->container['compute_resource_limit_exceeded'] = $data['compute_resource_limit_exceeded'] ?? null;
        $this->container['compute_resp_body_bytes'] = $data['compute_resp_body_bytes'] ?? null;
        $this->container['compute_resp_header_bytes'] = $data['compute_resp_header_bytes'] ?? null;
        $this->container['compute_resp_status_1xx'] = $data['compute_resp_status_1xx'] ?? null;
        $this->container['compute_resp_status_2xx'] = $data['compute_resp_status_2xx'] ?? null;
        $this->container['compute_resp_status_3xx'] = $data['compute_resp_status_3xx'] ?? null;
        $this->container['compute_resp_status_4xx'] = $data['compute_resp_status_4xx'] ?? null;
        $this->container['compute_resp_status_5xx'] = $data['compute_resp_status_5xx'] ?? null;
        $this->container['compute_runtime_errors'] = $data['compute_runtime_errors'] ?? null;
        $this->container['compute_stack_limit_exceeded'] = $data['compute_stack_limit_exceeded'] ?? null;
        $this->container['deliver_sub_count'] = $data['deliver_sub_count'] ?? null;
        $this->container['deliver_sub_time'] = $data['deliver_sub_time'] ?? null;
        $this->container['edge_hit_requests'] = $data['edge_hit_requests'] ?? null;
        $this->container['edge_miss_requests'] = $data['edge_miss_requests'] ?? null;
        $this->container['edge_requests'] = $data['edge_requests'] ?? null;
        $this->container['edge_resp_body_bytes'] = $data['edge_resp_body_bytes'] ?? null;
        $this->container['edge_resp_header_bytes'] = $data['edge_resp_header_bytes'] ?? null;
        $this->container['error_sub_count'] = $data['error_sub_count'] ?? null;
        $this->container['error_sub_time'] = $data['error_sub_time'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['fetch_sub_count'] = $data['fetch_sub_count'] ?? null;
        $this->container['fetch_sub_time'] = $data['fetch_sub_time'] ?? null;
        $this->container['hash_sub_count'] = $data['hash_sub_count'] ?? null;
        $this->container['hash_sub_time'] = $data['hash_sub_time'] ?? null;
        $this->container['header_size'] = $data['header_size'] ?? null;
        $this->container['hit_resp_body_bytes'] = $data['hit_resp_body_bytes'] ?? null;
        $this->container['hit_sub_count'] = $data['hit_sub_count'] ?? null;
        $this->container['hit_sub_time'] = $data['hit_sub_time'] ?? null;
        $this->container['hits'] = $data['hits'] ?? null;
        $this->container['hits_time'] = $data['hits_time'] ?? null;
        $this->container['http2'] = $data['http2'] ?? null;
        $this->container['http3'] = $data['http3'] ?? null;
        $this->container['imgopto'] = $data['imgopto'] ?? null;
        $this->container['imgopto_resp_body_bytes'] = $data['imgopto_resp_body_bytes'] ?? null;
        $this->container['imgopto_resp_header_bytes'] = $data['imgopto_resp_header_bytes'] ?? null;
        $this->container['imgopto_shield'] = $data['imgopto_shield'] ?? null;
        $this->container['imgopto_shield_resp_body_bytes'] = $data['imgopto_shield_resp_body_bytes'] ?? null;
        $this->container['imgopto_shield_resp_header_bytes'] = $data['imgopto_shield_resp_header_bytes'] ?? null;
        $this->container['imgopto_transforms'] = $data['imgopto_transforms'] ?? null;
        $this->container['imgvideo'] = $data['imgvideo'] ?? null;
        $this->container['imgvideo_frames'] = $data['imgvideo_frames'] ?? null;
        $this->container['imgvideo_resp_body_bytes'] = $data['imgvideo_resp_body_bytes'] ?? null;
        $this->container['imgvideo_resp_header_bytes'] = $data['imgvideo_resp_header_bytes'] ?? null;
        $this->container['imgvideo_shield'] = $data['imgvideo_shield'] ?? null;
        $this->container['imgvideo_shield_frames'] = $data['imgvideo_shield_frames'] ?? null;
        $this->container['imgvideo_shield_resp_body_bytes'] = $data['imgvideo_shield_resp_body_bytes'] ?? null;
        $this->container['imgvideo_shield_resp_header_bytes'] = $data['imgvideo_shield_resp_header_bytes'] ?? null;
        $this->container['ipv6'] = $data['ipv6'] ?? null;
        $this->container['log'] = $data['log'] ?? null;
        $this->container['log_bytes'] = $data['log_bytes'] ?? null;
        $this->container['logging'] = $data['logging'] ?? null;
        $this->container['miss'] = $data['miss'] ?? null;
        $this->container['miss_histogram'] = $data['miss_histogram'] ?? null;
        $this->container['miss_resp_body_bytes'] = $data['miss_resp_body_bytes'] ?? null;
        $this->container['miss_sub_count'] = $data['miss_sub_count'] ?? null;
        $this->container['miss_sub_time'] = $data['miss_sub_time'] ?? null;
        $this->container['miss_time'] = $data['miss_time'] ?? null;
        $this->container['object_size_100k'] = $data['object_size_100k'] ?? null;
        $this->container['object_size_100m'] = $data['object_size_100m'] ?? null;
        $this->container['object_size_10k'] = $data['object_size_10k'] ?? null;
        $this->container['object_size_10m'] = $data['object_size_10m'] ?? null;
        $this->container['object_size_1g'] = $data['object_size_1g'] ?? null;
        $this->container['object_size_1k'] = $data['object_size_1k'] ?? null;
        $this->container['object_size_1m'] = $data['object_size_1m'] ?? null;
        $this->container['object_size_other'] = $data['object_size_other'] ?? null;
        $this->container['origin_cache_fetches'] = $data['origin_cache_fetches'] ?? null;
        $this->container['origin_fetch_body_bytes'] = $data['origin_fetch_body_bytes'] ?? null;
        $this->container['origin_fetch_header_bytes'] = $data['origin_fetch_header_bytes'] ?? null;
        $this->container['origin_fetch_resp_body_bytes'] = $data['origin_fetch_resp_body_bytes'] ?? null;
        $this->container['origin_fetch_resp_header_bytes'] = $data['origin_fetch_resp_header_bytes'] ?? null;
        $this->container['origin_fetches'] = $data['origin_fetches'] ?? null;
        $this->container['origin_revalidations'] = $data['origin_revalidations'] ?? null;
        $this->container['otfp'] = $data['otfp'] ?? null;
        $this->container['otfp_deliver_time'] = $data['otfp_deliver_time'] ?? null;
        $this->container['otfp_manifests'] = $data['otfp_manifests'] ?? null;
        $this->container['otfp_resp_body_bytes'] = $data['otfp_resp_body_bytes'] ?? null;
        $this->container['otfp_resp_header_bytes'] = $data['otfp_resp_header_bytes'] ?? null;
        $this->container['otfp_shield'] = $data['otfp_shield'] ?? null;
        $this->container['otfp_shield_resp_body_bytes'] = $data['otfp_shield_resp_body_bytes'] ?? null;
        $this->container['otfp_shield_resp_header_bytes'] = $data['otfp_shield_resp_header_bytes'] ?? null;
        $this->container['otfp_shield_time'] = $data['otfp_shield_time'] ?? null;
        $this->container['pass'] = $data['pass'] ?? null;
        $this->container['pass_resp_body_bytes'] = $data['pass_resp_body_bytes'] ?? null;
        $this->container['pass_sub_count'] = $data['pass_sub_count'] ?? null;
        $this->container['pass_sub_time'] = $data['pass_sub_time'] ?? null;
        $this->container['pass_time'] = $data['pass_time'] ?? null;
        $this->container['pci'] = $data['pci'] ?? null;
        $this->container['pipe_sub_count'] = $data['pipe_sub_count'] ?? null;
        $this->container['pipe_sub_time'] = $data['pipe_sub_time'] ?? null;
        $this->container['predeliver_sub_count'] = $data['predeliver_sub_count'] ?? null;
        $this->container['predeliver_sub_time'] = $data['predeliver_sub_time'] ?? null;
        $this->container['prehash_sub_count'] = $data['prehash_sub_count'] ?? null;
        $this->container['prehash_sub_time'] = $data['prehash_sub_time'] ?? null;
        $this->container['recv_sub_count'] = $data['recv_sub_count'] ?? null;
        $this->container['recv_sub_time'] = $data['recv_sub_time'] ?? null;
        $this->container['req_body_bytes'] = $data['req_body_bytes'] ?? null;
        $this->container['req_header_bytes'] = $data['req_header_bytes'] ?? null;
        $this->container['requests'] = $data['requests'] ?? null;
        $this->container['resp_body_bytes'] = $data['resp_body_bytes'] ?? null;
        $this->container['resp_header_bytes'] = $data['resp_header_bytes'] ?? null;
        $this->container['restarts'] = $data['restarts'] ?? null;
        $this->container['segblock_origin_fetches'] = $data['segblock_origin_fetches'] ?? null;
        $this->container['segblock_shield_fetches'] = $data['segblock_shield_fetches'] ?? null;
        $this->container['shield'] = $data['shield'] ?? null;
        $this->container['shield_cache_fetches'] = $data['shield_cache_fetches'] ?? null;
        $this->container['shield_fetch_body_bytes'] = $data['shield_fetch_body_bytes'] ?? null;
        $this->container['shield_fetch_header_bytes'] = $data['shield_fetch_header_bytes'] ?? null;
        $this->container['shield_fetch_resp_body_bytes'] = $data['shield_fetch_resp_body_bytes'] ?? null;
        $this->container['shield_fetch_resp_header_bytes'] = $data['shield_fetch_resp_header_bytes'] ?? null;
        $this->container['shield_fetches'] = $data['shield_fetches'] ?? null;
        $this->container['shield_resp_body_bytes'] = $data['shield_resp_body_bytes'] ?? null;
        $this->container['shield_resp_header_bytes'] = $data['shield_resp_header_bytes'] ?? null;
        $this->container['shield_revalidations'] = $data['shield_revalidations'] ?? null;
        $this->container['status_1xx'] = $data['status_1xx'] ?? null;
        $this->container['status_200'] = $data['status_200'] ?? null;
        $this->container['status_204'] = $data['status_204'] ?? null;
        $this->container['status_206'] = $data['status_206'] ?? null;
        $this->container['status_2xx'] = $data['status_2xx'] ?? null;
        $this->container['status_301'] = $data['status_301'] ?? null;
        $this->container['status_302'] = $data['status_302'] ?? null;
        $this->container['status_304'] = $data['status_304'] ?? null;
        $this->container['status_3xx'] = $data['status_3xx'] ?? null;
        $this->container['status_400'] = $data['status_400'] ?? null;
        $this->container['status_401'] = $data['status_401'] ?? null;
        $this->container['status_403'] = $data['status_403'] ?? null;
        $this->container['status_404'] = $data['status_404'] ?? null;
        $this->container['status_416'] = $data['status_416'] ?? null;
        $this->container['status_429'] = $data['status_429'] ?? null;
        $this->container['status_4xx'] = $data['status_4xx'] ?? null;
        $this->container['status_500'] = $data['status_500'] ?? null;
        $this->container['status_501'] = $data['status_501'] ?? null;
        $this->container['status_502'] = $data['status_502'] ?? null;
        $this->container['status_503'] = $data['status_503'] ?? null;
        $this->container['status_504'] = $data['status_504'] ?? null;
        $this->container['status_505'] = $data['status_505'] ?? null;
        $this->container['status_5xx'] = $data['status_5xx'] ?? null;
        $this->container['synth'] = $data['synth'] ?? null;
        $this->container['tls'] = $data['tls'] ?? null;
        $this->container['tls_v10'] = $data['tls_v10'] ?? null;
        $this->container['tls_v11'] = $data['tls_v11'] ?? null;
        $this->container['tls_v12'] = $data['tls_v12'] ?? null;
        $this->container['tls_v13'] = $data['tls_v13'] ?? null;
        $this->container['uncacheable'] = $data['uncacheable'] ?? null;
        $this->container['video'] = $data['video'] ?? null;
        $this->container['waf_blocked'] = $data['waf_blocked'] ?? null;
        $this->container['waf_logged'] = $data['waf_logged'] ?? null;
        $this->container['waf_passed'] = $data['waf_passed'] ?? null;
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
     * Gets attack_blocked_req_body_bytes
     *
     * @return int|null
     */
    public function getAttackBlockedReqBodyBytes()
    {
        return $this->container['attack_blocked_req_body_bytes'];
    }

    /**
     * Sets attack_blocked_req_body_bytes
     *
     * @param int|null $attack_blocked_req_body_bytes Total body bytes received from requests that triggered a WAF rule that was blocked.
     *
     * @return self
     */
    public function setAttackBlockedReqBodyBytes($attack_blocked_req_body_bytes)
    {
        $this->container['attack_blocked_req_body_bytes'] = $attack_blocked_req_body_bytes;

        return $this;
    }

    /**
     * Gets attack_blocked_req_header_bytes
     *
     * @return int|null
     */
    public function getAttackBlockedReqHeaderBytes()
    {
        return $this->container['attack_blocked_req_header_bytes'];
    }

    /**
     * Sets attack_blocked_req_header_bytes
     *
     * @param int|null $attack_blocked_req_header_bytes Total header bytes received from requests that triggered a WAF rule that was blocked.
     *
     * @return self
     */
    public function setAttackBlockedReqHeaderBytes($attack_blocked_req_header_bytes)
    {
        $this->container['attack_blocked_req_header_bytes'] = $attack_blocked_req_header_bytes;

        return $this;
    }

    /**
     * Gets attack_logged_req_body_bytes
     *
     * @return int|null
     */
    public function getAttackLoggedReqBodyBytes()
    {
        return $this->container['attack_logged_req_body_bytes'];
    }

    /**
     * Sets attack_logged_req_body_bytes
     *
     * @param int|null $attack_logged_req_body_bytes Total body bytes received from requests that triggered a WAF rule that was logged.
     *
     * @return self
     */
    public function setAttackLoggedReqBodyBytes($attack_logged_req_body_bytes)
    {
        $this->container['attack_logged_req_body_bytes'] = $attack_logged_req_body_bytes;

        return $this;
    }

    /**
     * Gets attack_logged_req_header_bytes
     *
     * @return int|null
     */
    public function getAttackLoggedReqHeaderBytes()
    {
        return $this->container['attack_logged_req_header_bytes'];
    }

    /**
     * Sets attack_logged_req_header_bytes
     *
     * @param int|null $attack_logged_req_header_bytes Total header bytes received from requests that triggered a WAF rule that was logged.
     *
     * @return self
     */
    public function setAttackLoggedReqHeaderBytes($attack_logged_req_header_bytes)
    {
        $this->container['attack_logged_req_header_bytes'] = $attack_logged_req_header_bytes;

        return $this;
    }

    /**
     * Gets attack_passed_req_body_bytes
     *
     * @return int|null
     */
    public function getAttackPassedReqBodyBytes()
    {
        return $this->container['attack_passed_req_body_bytes'];
    }

    /**
     * Sets attack_passed_req_body_bytes
     *
     * @param int|null $attack_passed_req_body_bytes Total body bytes received from requests that triggered a WAF rule that was passed.
     *
     * @return self
     */
    public function setAttackPassedReqBodyBytes($attack_passed_req_body_bytes)
    {
        $this->container['attack_passed_req_body_bytes'] = $attack_passed_req_body_bytes;

        return $this;
    }

    /**
     * Gets attack_passed_req_header_bytes
     *
     * @return int|null
     */
    public function getAttackPassedReqHeaderBytes()
    {
        return $this->container['attack_passed_req_header_bytes'];
    }

    /**
     * Sets attack_passed_req_header_bytes
     *
     * @param int|null $attack_passed_req_header_bytes Total header bytes received from requests that triggered a WAF rule that was passed.
     *
     * @return self
     */
    public function setAttackPassedReqHeaderBytes($attack_passed_req_header_bytes)
    {
        $this->container['attack_passed_req_header_bytes'] = $attack_passed_req_header_bytes;

        return $this;
    }

    /**
     * Gets attack_req_body_bytes
     *
     * @return int|null
     */
    public function getAttackReqBodyBytes()
    {
        return $this->container['attack_req_body_bytes'];
    }

    /**
     * Sets attack_req_body_bytes
     *
     * @param int|null $attack_req_body_bytes Total body bytes received from requests that triggered a WAF rule.
     *
     * @return self
     */
    public function setAttackReqBodyBytes($attack_req_body_bytes)
    {
        $this->container['attack_req_body_bytes'] = $attack_req_body_bytes;

        return $this;
    }

    /**
     * Gets attack_req_header_bytes
     *
     * @return int|null
     */
    public function getAttackReqHeaderBytes()
    {
        return $this->container['attack_req_header_bytes'];
    }

    /**
     * Sets attack_req_header_bytes
     *
     * @param int|null $attack_req_header_bytes Total header bytes received from requests that triggered a WAF rule.
     *
     * @return self
     */
    public function setAttackReqHeaderBytes($attack_req_header_bytes)
    {
        $this->container['attack_req_header_bytes'] = $attack_req_header_bytes;

        return $this;
    }

    /**
     * Gets attack_resp_synth_bytes
     *
     * @return int|null
     */
    public function getAttackRespSynthBytes()
    {
        return $this->container['attack_resp_synth_bytes'];
    }

    /**
     * Sets attack_resp_synth_bytes
     *
     * @param int|null $attack_resp_synth_bytes Total bytes delivered for requests that triggered a WAF rule and returned a synthetic response.
     *
     * @return self
     */
    public function setAttackRespSynthBytes($attack_resp_synth_bytes)
    {
        $this->container['attack_resp_synth_bytes'] = $attack_resp_synth_bytes;

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
     * Gets body_size
     *
     * @return int|null
     */
    public function getBodySize()
    {
        return $this->container['body_size'];
    }

    /**
     * Sets body_size
     *
     * @param int|null $body_size Total body bytes delivered (alias for resp_body_bytes).
     *
     * @return self
     */
    public function setBodySize($body_size)
    {
        $this->container['body_size'] = $body_size;

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
     * @param int|null $compute_bereq_body_bytes Total body bytes sent to backends (origins) by Compute@Edge.
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
     * @param int|null $compute_bereq_errors Number of backend request errors, including timeouts.
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
     * @param int|null $compute_bereq_header_bytes Total header bytes sent to backends (origins) by Compute@Edge.
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
     * @param int|null $compute_bereqs Number of backend requests started.
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
     * @param int|null $compute_beresp_body_bytes Total body bytes received from backends (origins) by Compute@Edge.
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
     * @param int|null $compute_beresp_header_bytes Total header bytes received from backends (origins) by Compute@Edge.
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
     * @return float|null
     */
    public function getComputeExecutionTimeMs()
    {
        return $this->container['compute_execution_time_ms'];
    }

    /**
     * Sets compute_execution_time_ms
     *
     * @param float|null $compute_execution_time_ms The amount of active CPU time used to process your requests (in milliseconds).
     *
     * @return self
     */
    public function setComputeExecutionTimeMs($compute_execution_time_ms)
    {
        $this->container['compute_execution_time_ms'] = $compute_execution_time_ms;

        return $this;
    }

    /**
     * Gets compute_globals_limit_exceeded
     *
     * @return int|null
     */
    public function getComputeGlobalsLimitExceeded()
    {
        return $this->container['compute_globals_limit_exceeded'];
    }

    /**
     * Sets compute_globals_limit_exceeded
     *
     * @param int|null $compute_globals_limit_exceeded Number of times a guest exceeded its globals limit.
     *
     * @return self
     */
    public function setComputeGlobalsLimitExceeded($compute_globals_limit_exceeded)
    {
        $this->container['compute_globals_limit_exceeded'] = $compute_globals_limit_exceeded;

        return $this;
    }

    /**
     * Gets compute_guest_errors
     *
     * @return int|null
     */
    public function getComputeGuestErrors()
    {
        return $this->container['compute_guest_errors'];
    }

    /**
     * Sets compute_guest_errors
     *
     * @param int|null $compute_guest_errors Number of times a service experienced a guest code error.
     *
     * @return self
     */
    public function setComputeGuestErrors($compute_guest_errors)
    {
        $this->container['compute_guest_errors'] = $compute_guest_errors;

        return $this;
    }

    /**
     * Gets compute_heap_limit_exceeded
     *
     * @return int|null
     */
    public function getComputeHeapLimitExceeded()
    {
        return $this->container['compute_heap_limit_exceeded'];
    }

    /**
     * Sets compute_heap_limit_exceeded
     *
     * @param int|null $compute_heap_limit_exceeded Number of times a guest exceeded its heap limit.
     *
     * @return self
     */
    public function setComputeHeapLimitExceeded($compute_heap_limit_exceeded)
    {
        $this->container['compute_heap_limit_exceeded'] = $compute_heap_limit_exceeded;

        return $this;
    }

    /**
     * Gets compute_ram_used
     *
     * @return int|null
     */
    public function getComputeRamUsed()
    {
        return $this->container['compute_ram_used'];
    }

    /**
     * Sets compute_ram_used
     *
     * @param int|null $compute_ram_used The amount of RAM used for your site by Fastly, including a maximum indicating the highest usage within this timeframe and a static cap for usage.
     *
     * @return self
     */
    public function setComputeRamUsed($compute_ram_used)
    {
        $this->container['compute_ram_used'] = $compute_ram_used;

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
     * @param int|null $compute_req_body_bytes Total body bytes received by Compute@Edge.
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
     * @param int|null $compute_req_header_bytes Total header bytes received by Compute@Edge.
     *
     * @return self
     */
    public function setComputeReqHeaderBytes($compute_req_header_bytes)
    {
        $this->container['compute_req_header_bytes'] = $compute_req_header_bytes;

        return $this;
    }

    /**
     * Gets compute_request_time_ms
     *
     * @return float|null
     */
    public function getComputeRequestTimeMs()
    {
        return $this->container['compute_request_time_ms'];
    }

    /**
     * Sets compute_request_time_ms
     *
     * @param float|null $compute_request_time_ms The total, actual amount of time used to process your requests, including active CPU time (in milliseconds).
     *
     * @return self
     */
    public function setComputeRequestTimeMs($compute_request_time_ms)
    {
        $this->container['compute_request_time_ms'] = $compute_request_time_ms;

        return $this;
    }

    /**
     * Gets compute_requests
     *
     * @return int|null
     */
    public function getComputeRequests()
    {
        return $this->container['compute_requests'];
    }

    /**
     * Sets compute_requests
     *
     * @param int|null $compute_requests The total number of requests that were received for your site by Fastly.
     *
     * @return self
     */
    public function setComputeRequests($compute_requests)
    {
        $this->container['compute_requests'] = $compute_requests;

        return $this;
    }

    /**
     * Gets compute_resource_limit_exceeded
     *
     * @return int|null
     */
    public function getComputeResourceLimitExceeded()
    {
        return $this->container['compute_resource_limit_exceeded'];
    }

    /**
     * Sets compute_resource_limit_exceeded
     *
     * @param int|null $compute_resource_limit_exceeded Number of times a guest exceeded its resource limit, includes heap, stack, globals, and code execution timeout.
     *
     * @return self
     */
    public function setComputeResourceLimitExceeded($compute_resource_limit_exceeded)
    {
        $this->container['compute_resource_limit_exceeded'] = $compute_resource_limit_exceeded;

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
     * @param int|null $compute_resp_body_bytes Total body bytes sent from Compute@Edge to end user.
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
     * @param int|null $compute_resp_header_bytes Total header bytes sent from Compute@Edge to end user.
     *
     * @return self
     */
    public function setComputeRespHeaderBytes($compute_resp_header_bytes)
    {
        $this->container['compute_resp_header_bytes'] = $compute_resp_header_bytes;

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
     * @param int|null $compute_resp_status_1xx Number of \"Informational\" category status codes delivered by Compute@Edge.
     *
     * @return self
     */
    public function setComputeRespStatus1xx($compute_resp_status_1xx)
    {
        $this->container['compute_resp_status_1xx'] = $compute_resp_status_1xx;

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
     * @param int|null $compute_resp_status_2xx Number of \"Success\" category status codes delivered by Compute@Edge.
     *
     * @return self
     */
    public function setComputeRespStatus2xx($compute_resp_status_2xx)
    {
        $this->container['compute_resp_status_2xx'] = $compute_resp_status_2xx;

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
     * @param int|null $compute_resp_status_3xx Number of \"Redirection\" category status codes delivered by Compute@Edge.
     *
     * @return self
     */
    public function setComputeRespStatus3xx($compute_resp_status_3xx)
    {
        $this->container['compute_resp_status_3xx'] = $compute_resp_status_3xx;

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
     * @param int|null $compute_resp_status_4xx Number of \"Client Error\" category status codes delivered by Compute@Edge.
     *
     * @return self
     */
    public function setComputeRespStatus4xx($compute_resp_status_4xx)
    {
        $this->container['compute_resp_status_4xx'] = $compute_resp_status_4xx;

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
     * @param int|null $compute_resp_status_5xx Number of \"Server Error\" category status codes delivered by Compute@Edge.
     *
     * @return self
     */
    public function setComputeRespStatus5xx($compute_resp_status_5xx)
    {
        $this->container['compute_resp_status_5xx'] = $compute_resp_status_5xx;

        return $this;
    }

    /**
     * Gets compute_runtime_errors
     *
     * @return int|null
     */
    public function getComputeRuntimeErrors()
    {
        return $this->container['compute_runtime_errors'];
    }

    /**
     * Sets compute_runtime_errors
     *
     * @param int|null $compute_runtime_errors Number of times a service experienced a guest runtime error.
     *
     * @return self
     */
    public function setComputeRuntimeErrors($compute_runtime_errors)
    {
        $this->container['compute_runtime_errors'] = $compute_runtime_errors;

        return $this;
    }

    /**
     * Gets compute_stack_limit_exceeded
     *
     * @return int|null
     */
    public function getComputeStackLimitExceeded()
    {
        return $this->container['compute_stack_limit_exceeded'];
    }

    /**
     * Sets compute_stack_limit_exceeded
     *
     * @param int|null $compute_stack_limit_exceeded Number of times a guest exceeded its stack limit.
     *
     * @return self
     */
    public function setComputeStackLimitExceeded($compute_stack_limit_exceeded)
    {
        $this->container['compute_stack_limit_exceeded'] = $compute_stack_limit_exceeded;

        return $this;
    }

    /**
     * Gets deliver_sub_count
     *
     * @return int|null
     */
    public function getDeliverSubCount()
    {
        return $this->container['deliver_sub_count'];
    }

    /**
     * Sets deliver_sub_count
     *
     * @param int|null $deliver_sub_count Number of executions of the `vcl_deliver` Varnish subroutine.
     *
     * @return self
     */
    public function setDeliverSubCount($deliver_sub_count)
    {
        $this->container['deliver_sub_count'] = $deliver_sub_count;

        return $this;
    }

    /**
     * Gets deliver_sub_time
     *
     * @return float|null
     */
    public function getDeliverSubTime()
    {
        return $this->container['deliver_sub_time'];
    }

    /**
     * Sets deliver_sub_time
     *
     * @param float|null $deliver_sub_time Time spent inside the `vcl_deliver` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setDeliverSubTime($deliver_sub_time)
    {
        $this->container['deliver_sub_time'] = $deliver_sub_time;

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
     * Gets error_sub_count
     *
     * @return int|null
     */
    public function getErrorSubCount()
    {
        return $this->container['error_sub_count'];
    }

    /**
     * Sets error_sub_count
     *
     * @param int|null $error_sub_count Number of executions of the `vcl_error` Varnish subroutine.
     *
     * @return self
     */
    public function setErrorSubCount($error_sub_count)
    {
        $this->container['error_sub_count'] = $error_sub_count;

        return $this;
    }

    /**
     * Gets error_sub_time
     *
     * @return float|null
     */
    public function getErrorSubTime()
    {
        return $this->container['error_sub_time'];
    }

    /**
     * Sets error_sub_time
     *
     * @param float|null $error_sub_time Time spent inside the `vcl_error` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setErrorSubTime($error_sub_time)
    {
        $this->container['error_sub_time'] = $error_sub_time;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return int|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param int|null $errors Number of cache errors.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets fetch_sub_count
     *
     * @return int|null
     */
    public function getFetchSubCount()
    {
        return $this->container['fetch_sub_count'];
    }

    /**
     * Sets fetch_sub_count
     *
     * @param int|null $fetch_sub_count Number of executions of the `vcl_fetch` Varnish subroutine.
     *
     * @return self
     */
    public function setFetchSubCount($fetch_sub_count)
    {
        $this->container['fetch_sub_count'] = $fetch_sub_count;

        return $this;
    }

    /**
     * Gets fetch_sub_time
     *
     * @return float|null
     */
    public function getFetchSubTime()
    {
        return $this->container['fetch_sub_time'];
    }

    /**
     * Sets fetch_sub_time
     *
     * @param float|null $fetch_sub_time Time spent inside the `vcl_fetch` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setFetchSubTime($fetch_sub_time)
    {
        $this->container['fetch_sub_time'] = $fetch_sub_time;

        return $this;
    }

    /**
     * Gets hash_sub_count
     *
     * @return int|null
     */
    public function getHashSubCount()
    {
        return $this->container['hash_sub_count'];
    }

    /**
     * Sets hash_sub_count
     *
     * @param int|null $hash_sub_count Number of executions of the `vcl_hash` Varnish subroutine.
     *
     * @return self
     */
    public function setHashSubCount($hash_sub_count)
    {
        $this->container['hash_sub_count'] = $hash_sub_count;

        return $this;
    }

    /**
     * Gets hash_sub_time
     *
     * @return float|null
     */
    public function getHashSubTime()
    {
        return $this->container['hash_sub_time'];
    }

    /**
     * Sets hash_sub_time
     *
     * @param float|null $hash_sub_time Time spent inside the `vcl_hash` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setHashSubTime($hash_sub_time)
    {
        $this->container['hash_sub_time'] = $hash_sub_time;

        return $this;
    }

    /**
     * Gets header_size
     *
     * @return int|null
     */
    public function getHeaderSize()
    {
        return $this->container['header_size'];
    }

    /**
     * Sets header_size
     *
     * @param int|null $header_size Total header bytes delivered (alias for resp_header_bytes).
     *
     * @return self
     */
    public function setHeaderSize($header_size)
    {
        $this->container['header_size'] = $header_size;

        return $this;
    }

    /**
     * Gets hit_resp_body_bytes
     *
     * @return int|null
     */
    public function getHitRespBodyBytes()
    {
        return $this->container['hit_resp_body_bytes'];
    }

    /**
     * Sets hit_resp_body_bytes
     *
     * @param int|null $hit_resp_body_bytes Total body bytes delivered for cache hits.
     *
     * @return self
     */
    public function setHitRespBodyBytes($hit_resp_body_bytes)
    {
        $this->container['hit_resp_body_bytes'] = $hit_resp_body_bytes;

        return $this;
    }

    /**
     * Gets hit_sub_count
     *
     * @return int|null
     */
    public function getHitSubCount()
    {
        return $this->container['hit_sub_count'];
    }

    /**
     * Sets hit_sub_count
     *
     * @param int|null $hit_sub_count Number of executions of the `vcl_hit` Varnish subroutine.
     *
     * @return self
     */
    public function setHitSubCount($hit_sub_count)
    {
        $this->container['hit_sub_count'] = $hit_sub_count;

        return $this;
    }

    /**
     * Gets hit_sub_time
     *
     * @return float|null
     */
    public function getHitSubTime()
    {
        return $this->container['hit_sub_time'];
    }

    /**
     * Sets hit_sub_time
     *
     * @param float|null $hit_sub_time Time spent inside the `vcl_hit` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setHitSubTime($hit_sub_time)
    {
        $this->container['hit_sub_time'] = $hit_sub_time;

        return $this;
    }

    /**
     * Gets hits
     *
     * @return int|null
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * Sets hits
     *
     * @param int|null $hits Number of cache hits.
     *
     * @return self
     */
    public function setHits($hits)
    {
        $this->container['hits'] = $hits;

        return $this;
    }

    /**
     * Gets hits_time
     *
     * @return float|null
     */
    public function getHitsTime()
    {
        return $this->container['hits_time'];
    }

    /**
     * Sets hits_time
     *
     * @param float|null $hits_time Total amount of time spent processing cache hits (in seconds).
     *
     * @return self
     */
    public function setHitsTime($hits_time)
    {
        $this->container['hits_time'] = $hits_time;

        return $this;
    }

    /**
     * Gets http2
     *
     * @return int|null
     */
    public function getHttp2()
    {
        return $this->container['http2'];
    }

    /**
     * Sets http2
     *
     * @param int|null $http2 Number of requests received over HTTP/2.
     *
     * @return self
     */
    public function setHttp2($http2)
    {
        $this->container['http2'] = $http2;

        return $this;
    }

    /**
     * Gets http3
     *
     * @return int|null
     */
    public function getHttp3()
    {
        return $this->container['http3'];
    }

    /**
     * Sets http3
     *
     * @param int|null $http3 Number of requests received over HTTP/3.
     *
     * @return self
     */
    public function setHttp3($http3)
    {
        $this->container['http3'] = $http3;

        return $this;
    }

    /**
     * Gets imgopto
     *
     * @return int|null
     */
    public function getImgopto()
    {
        return $this->container['imgopto'];
    }

    /**
     * Sets imgopto
     *
     * @param int|null $imgopto Number of responses that came from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgopto($imgopto)
    {
        $this->container['imgopto'] = $imgopto;

        return $this;
    }

    /**
     * Gets imgopto_resp_body_bytes
     *
     * @return int|null
     */
    public function getImgoptoRespBodyBytes()
    {
        return $this->container['imgopto_resp_body_bytes'];
    }

    /**
     * Sets imgopto_resp_body_bytes
     *
     * @param int|null $imgopto_resp_body_bytes Total body bytes delivered from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgoptoRespBodyBytes($imgopto_resp_body_bytes)
    {
        $this->container['imgopto_resp_body_bytes'] = $imgopto_resp_body_bytes;

        return $this;
    }

    /**
     * Gets imgopto_resp_header_bytes
     *
     * @return int|null
     */
    public function getImgoptoRespHeaderBytes()
    {
        return $this->container['imgopto_resp_header_bytes'];
    }

    /**
     * Sets imgopto_resp_header_bytes
     *
     * @param int|null $imgopto_resp_header_bytes Total header bytes delivered from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgoptoRespHeaderBytes($imgopto_resp_header_bytes)
    {
        $this->container['imgopto_resp_header_bytes'] = $imgopto_resp_header_bytes;

        return $this;
    }

    /**
     * Gets imgopto_shield
     *
     * @return int|null
     */
    public function getImgoptoShield()
    {
        return $this->container['imgopto_shield'];
    }

    /**
     * Sets imgopto_shield
     *
     * @param int|null $imgopto_shield Number of responses that came from the Fastly Image Optimizer service via a shield.
     *
     * @return self
     */
    public function setImgoptoShield($imgopto_shield)
    {
        $this->container['imgopto_shield'] = $imgopto_shield;

        return $this;
    }

    /**
     * Gets imgopto_shield_resp_body_bytes
     *
     * @return int|null
     */
    public function getImgoptoShieldRespBodyBytes()
    {
        return $this->container['imgopto_shield_resp_body_bytes'];
    }

    /**
     * Sets imgopto_shield_resp_body_bytes
     *
     * @param int|null $imgopto_shield_resp_body_bytes Total body bytes delivered via a shield from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgoptoShieldRespBodyBytes($imgopto_shield_resp_body_bytes)
    {
        $this->container['imgopto_shield_resp_body_bytes'] = $imgopto_shield_resp_body_bytes;

        return $this;
    }

    /**
     * Gets imgopto_shield_resp_header_bytes
     *
     * @return int|null
     */
    public function getImgoptoShieldRespHeaderBytes()
    {
        return $this->container['imgopto_shield_resp_header_bytes'];
    }

    /**
     * Sets imgopto_shield_resp_header_bytes
     *
     * @param int|null $imgopto_shield_resp_header_bytes Total header bytes delivered via a shield from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgoptoShieldRespHeaderBytes($imgopto_shield_resp_header_bytes)
    {
        $this->container['imgopto_shield_resp_header_bytes'] = $imgopto_shield_resp_header_bytes;

        return $this;
    }

    /**
     * Gets imgopto_transforms
     *
     * @return int|null
     */
    public function getImgoptoTransforms()
    {
        return $this->container['imgopto_transforms'];
    }

    /**
     * Sets imgopto_transforms
     *
     * @param int|null $imgopto_transforms Number of transforms performed by the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgoptoTransforms($imgopto_transforms)
    {
        $this->container['imgopto_transforms'] = $imgopto_transforms;

        return $this;
    }

    /**
     * Gets imgvideo
     *
     * @return float|null
     */
    public function getImgvideo()
    {
        return $this->container['imgvideo'];
    }

    /**
     * Sets imgvideo
     *
     * @param float|null $imgvideo Number of video responses that came from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgvideo($imgvideo)
    {
        $this->container['imgvideo'] = $imgvideo;

        return $this;
    }

    /**
     * Gets imgvideo_frames
     *
     * @return float|null
     */
    public function getImgvideoFrames()
    {
        return $this->container['imgvideo_frames'];
    }

    /**
     * Sets imgvideo_frames
     *
     * @param float|null $imgvideo_frames Number of video frames that came from the Fastly Image Optimizer service. A video frame is an individual image within a sequence of video.
     *
     * @return self
     */
    public function setImgvideoFrames($imgvideo_frames)
    {
        $this->container['imgvideo_frames'] = $imgvideo_frames;

        return $this;
    }

    /**
     * Gets imgvideo_resp_body_bytes
     *
     * @return float|null
     */
    public function getImgvideoRespBodyBytes()
    {
        return $this->container['imgvideo_resp_body_bytes'];
    }

    /**
     * Sets imgvideo_resp_body_bytes
     *
     * @param float|null $imgvideo_resp_body_bytes Total body bytes of video delivered from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgvideoRespBodyBytes($imgvideo_resp_body_bytes)
    {
        $this->container['imgvideo_resp_body_bytes'] = $imgvideo_resp_body_bytes;

        return $this;
    }

    /**
     * Gets imgvideo_resp_header_bytes
     *
     * @return float|null
     */
    public function getImgvideoRespHeaderBytes()
    {
        return $this->container['imgvideo_resp_header_bytes'];
    }

    /**
     * Sets imgvideo_resp_header_bytes
     *
     * @param float|null $imgvideo_resp_header_bytes Total header bytes of video delivered from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgvideoRespHeaderBytes($imgvideo_resp_header_bytes)
    {
        $this->container['imgvideo_resp_header_bytes'] = $imgvideo_resp_header_bytes;

        return $this;
    }

    /**
     * Gets imgvideo_shield
     *
     * @return float|null
     */
    public function getImgvideoShield()
    {
        return $this->container['imgvideo_shield'];
    }

    /**
     * Sets imgvideo_shield
     *
     * @param float|null $imgvideo_shield Number of video responses delivered via a shield that came from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgvideoShield($imgvideo_shield)
    {
        $this->container['imgvideo_shield'] = $imgvideo_shield;

        return $this;
    }

    /**
     * Gets imgvideo_shield_frames
     *
     * @return float|null
     */
    public function getImgvideoShieldFrames()
    {
        return $this->container['imgvideo_shield_frames'];
    }

    /**
     * Sets imgvideo_shield_frames
     *
     * @param float|null $imgvideo_shield_frames Number of video frames delivered via a shield that came from the Fastly Image Optimizer service. A video frame is an individual image within a sequence of video.
     *
     * @return self
     */
    public function setImgvideoShieldFrames($imgvideo_shield_frames)
    {
        $this->container['imgvideo_shield_frames'] = $imgvideo_shield_frames;

        return $this;
    }

    /**
     * Gets imgvideo_shield_resp_body_bytes
     *
     * @return float|null
     */
    public function getImgvideoShieldRespBodyBytes()
    {
        return $this->container['imgvideo_shield_resp_body_bytes'];
    }

    /**
     * Sets imgvideo_shield_resp_body_bytes
     *
     * @param float|null $imgvideo_shield_resp_body_bytes Total body bytes of video delivered via a shield from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgvideoShieldRespBodyBytes($imgvideo_shield_resp_body_bytes)
    {
        $this->container['imgvideo_shield_resp_body_bytes'] = $imgvideo_shield_resp_body_bytes;

        return $this;
    }

    /**
     * Gets imgvideo_shield_resp_header_bytes
     *
     * @return float|null
     */
    public function getImgvideoShieldRespHeaderBytes()
    {
        return $this->container['imgvideo_shield_resp_header_bytes'];
    }

    /**
     * Sets imgvideo_shield_resp_header_bytes
     *
     * @param float|null $imgvideo_shield_resp_header_bytes Total header bytes of video delivered via a shield from the Fastly Image Optimizer service.
     *
     * @return self
     */
    public function setImgvideoShieldRespHeaderBytes($imgvideo_shield_resp_header_bytes)
    {
        $this->container['imgvideo_shield_resp_header_bytes'] = $imgvideo_shield_resp_header_bytes;

        return $this;
    }

    /**
     * Gets ipv6
     *
     * @return int|null
     */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
     * Sets ipv6
     *
     * @param int|null $ipv6 Number of requests that were received over IPv6.
     *
     * @return self
     */
    public function setIpv6($ipv6)
    {
        $this->container['ipv6'] = $ipv6;

        return $this;
    }

    /**
     * Gets log
     *
     * @return int|null
     */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
     * Sets log
     *
     * @param int|null $log Number of log lines sent.
     *
     * @return self
     */
    public function setLog($log)
    {
        $this->container['log'] = $log;

        return $this;
    }

    /**
     * Gets log_bytes
     *
     * @return int|null
     */
    public function getLogBytes()
    {
        return $this->container['log_bytes'];
    }

    /**
     * Sets log_bytes
     *
     * @param int|null $log_bytes Total log bytes sent.
     *
     * @return self
     */
    public function setLogBytes($log_bytes)
    {
        $this->container['log_bytes'] = $log_bytes;

        return $this;
    }

    /**
     * Gets logging
     *
     * @return int|null
     */
    public function getLogging()
    {
        return $this->container['logging'];
    }

    /**
     * Sets logging
     *
     * @param int|null $logging Number of log lines sent (alias for `log`).
     *
     * @return self
     */
    public function setLogging($logging)
    {
        $this->container['logging'] = $logging;

        return $this;
    }

    /**
     * Gets miss
     *
     * @return int|null
     */
    public function getMiss()
    {
        return $this->container['miss'];
    }

    /**
     * Sets miss
     *
     * @param int|null $miss Number of cache misses.
     *
     * @return self
     */
    public function setMiss($miss)
    {
        $this->container['miss'] = $miss;

        return $this;
    }

    /**
     * Gets miss_histogram
     *
     * @return object|null
     */
    public function getMissHistogram()
    {
        return $this->container['miss_histogram'];
    }

    /**
     * Sets miss_histogram
     *
     * @param object|null $miss_histogram A histogram. Each key represents the upper bound of a span of 10 milliseconds and the values represent the number of requests to origin during that 10ms period. Any origin request that takes more than 60 seconds to return will be in the 60000 bucket.
     *
     * @return self
     */
    public function setMissHistogram($miss_histogram)
    {
        $this->container['miss_histogram'] = $miss_histogram;

        return $this;
    }

    /**
     * Gets miss_resp_body_bytes
     *
     * @return int|null
     */
    public function getMissRespBodyBytes()
    {
        return $this->container['miss_resp_body_bytes'];
    }

    /**
     * Sets miss_resp_body_bytes
     *
     * @param int|null $miss_resp_body_bytes Total body bytes delivered for cache misses.
     *
     * @return self
     */
    public function setMissRespBodyBytes($miss_resp_body_bytes)
    {
        $this->container['miss_resp_body_bytes'] = $miss_resp_body_bytes;

        return $this;
    }

    /**
     * Gets miss_sub_count
     *
     * @return int|null
     */
    public function getMissSubCount()
    {
        return $this->container['miss_sub_count'];
    }

    /**
     * Sets miss_sub_count
     *
     * @param int|null $miss_sub_count Number of executions of the `vcl_miss` Varnish subroutine.
     *
     * @return self
     */
    public function setMissSubCount($miss_sub_count)
    {
        $this->container['miss_sub_count'] = $miss_sub_count;

        return $this;
    }

    /**
     * Gets miss_sub_time
     *
     * @return float|null
     */
    public function getMissSubTime()
    {
        return $this->container['miss_sub_time'];
    }

    /**
     * Sets miss_sub_time
     *
     * @param float|null $miss_sub_time Time spent inside the `vcl_miss` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setMissSubTime($miss_sub_time)
    {
        $this->container['miss_sub_time'] = $miss_sub_time;

        return $this;
    }

    /**
     * Gets miss_time
     *
     * @return float|null
     */
    public function getMissTime()
    {
        return $this->container['miss_time'];
    }

    /**
     * Sets miss_time
     *
     * @param float|null $miss_time Total amount of time spent processing cache misses (in seconds).
     *
     * @return self
     */
    public function setMissTime($miss_time)
    {
        $this->container['miss_time'] = $miss_time;

        return $this;
    }

    /**
     * Gets object_size_100k
     *
     * @return int|null
     */
    public function getObjectSize100k()
    {
        return $this->container['object_size_100k'];
    }

    /**
     * Sets object_size_100k
     *
     * @param int|null $object_size_100k Number of objects served that were between 10KB and 100KB in size.
     *
     * @return self
     */
    public function setObjectSize100k($object_size_100k)
    {
        $this->container['object_size_100k'] = $object_size_100k;

        return $this;
    }

    /**
     * Gets object_size_100m
     *
     * @return int|null
     */
    public function getObjectSize100m()
    {
        return $this->container['object_size_100m'];
    }

    /**
     * Sets object_size_100m
     *
     * @param int|null $object_size_100m Number of objects served that were between 10MB and 100MB in size.
     *
     * @return self
     */
    public function setObjectSize100m($object_size_100m)
    {
        $this->container['object_size_100m'] = $object_size_100m;

        return $this;
    }

    /**
     * Gets object_size_10k
     *
     * @return int|null
     */
    public function getObjectSize10k()
    {
        return $this->container['object_size_10k'];
    }

    /**
     * Sets object_size_10k
     *
     * @param int|null $object_size_10k Number of objects served that were between 1KB and 10KB in size.
     *
     * @return self
     */
    public function setObjectSize10k($object_size_10k)
    {
        $this->container['object_size_10k'] = $object_size_10k;

        return $this;
    }

    /**
     * Gets object_size_10m
     *
     * @return int|null
     */
    public function getObjectSize10m()
    {
        return $this->container['object_size_10m'];
    }

    /**
     * Sets object_size_10m
     *
     * @param int|null $object_size_10m Number of objects served that were between 1MB and 10MB in size.
     *
     * @return self
     */
    public function setObjectSize10m($object_size_10m)
    {
        $this->container['object_size_10m'] = $object_size_10m;

        return $this;
    }

    /**
     * Gets object_size_1g
     *
     * @return int|null
     */
    public function getObjectSize1g()
    {
        return $this->container['object_size_1g'];
    }

    /**
     * Sets object_size_1g
     *
     * @param int|null $object_size_1g Number of objects served that were between 100MB and 1GB in size.
     *
     * @return self
     */
    public function setObjectSize1g($object_size_1g)
    {
        $this->container['object_size_1g'] = $object_size_1g;

        return $this;
    }

    /**
     * Gets object_size_1k
     *
     * @return int|null
     */
    public function getObjectSize1k()
    {
        return $this->container['object_size_1k'];
    }

    /**
     * Sets object_size_1k
     *
     * @param int|null $object_size_1k Number of objects served that were under 1KB in size.
     *
     * @return self
     */
    public function setObjectSize1k($object_size_1k)
    {
        $this->container['object_size_1k'] = $object_size_1k;

        return $this;
    }

    /**
     * Gets object_size_1m
     *
     * @return int|null
     */
    public function getObjectSize1m()
    {
        return $this->container['object_size_1m'];
    }

    /**
     * Sets object_size_1m
     *
     * @param int|null $object_size_1m Number of objects served that were between 100KB and 1MB in size.
     *
     * @return self
     */
    public function setObjectSize1m($object_size_1m)
    {
        $this->container['object_size_1m'] = $object_size_1m;

        return $this;
    }

    /**
     * Gets object_size_other
     *
     * @return int|null
     */
    public function getObjectSizeOther()
    {
        return $this->container['object_size_other'];
    }

    /**
     * Sets object_size_other
     *
     * @param int|null $object_size_other Number of objects served that were larger than 1GB in size.
     *
     * @return self
     */
    public function setObjectSizeOther($object_size_other)
    {
        $this->container['object_size_other'] = $object_size_other;

        return $this;
    }

    /**
     * Gets origin_cache_fetches
     *
     * @return int|null
     */
    public function getOriginCacheFetches()
    {
        return $this->container['origin_cache_fetches'];
    }

    /**
     * Sets origin_cache_fetches
     *
     * @param int|null $origin_cache_fetches The total number of completed requests made to backends (origins) that returned cacheable content.
     *
     * @return self
     */
    public function setOriginCacheFetches($origin_cache_fetches)
    {
        $this->container['origin_cache_fetches'] = $origin_cache_fetches;

        return $this;
    }

    /**
     * Gets origin_fetch_body_bytes
     *
     * @return int|null
     */
    public function getOriginFetchBodyBytes()
    {
        return $this->container['origin_fetch_body_bytes'];
    }

    /**
     * Sets origin_fetch_body_bytes
     *
     * @param int|null $origin_fetch_body_bytes Total request body bytes sent to origin.
     *
     * @return self
     */
    public function setOriginFetchBodyBytes($origin_fetch_body_bytes)
    {
        $this->container['origin_fetch_body_bytes'] = $origin_fetch_body_bytes;

        return $this;
    }

    /**
     * Gets origin_fetch_header_bytes
     *
     * @return int|null
     */
    public function getOriginFetchHeaderBytes()
    {
        return $this->container['origin_fetch_header_bytes'];
    }

    /**
     * Sets origin_fetch_header_bytes
     *
     * @param int|null $origin_fetch_header_bytes Total request header bytes sent to origin.
     *
     * @return self
     */
    public function setOriginFetchHeaderBytes($origin_fetch_header_bytes)
    {
        $this->container['origin_fetch_header_bytes'] = $origin_fetch_header_bytes;

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
     * Gets origin_revalidations
     *
     * @return int|null
     */
    public function getOriginRevalidations()
    {
        return $this->container['origin_revalidations'];
    }

    /**
     * Sets origin_revalidations
     *
     * @param int|null $origin_revalidations Number of responses received from origin with a `304` status code in response to an `If-Modified-Since` or `If-None-Match` request. Under regular scenarios, a revalidation will imply a cache hit. However, if using Fastly Image Optimizer or segmented caching this may result in a cache miss.
     *
     * @return self
     */
    public function setOriginRevalidations($origin_revalidations)
    {
        $this->container['origin_revalidations'] = $origin_revalidations;

        return $this;
    }

    /**
     * Gets otfp
     *
     * @return int|null
     */
    public function getOtfp()
    {
        return $this->container['otfp'];
    }

    /**
     * Sets otfp
     *
     * @param int|null $otfp Number of responses that came from the Fastly On-the-Fly Packaging service for video-on-demand.
     *
     * @return self
     */
    public function setOtfp($otfp)
    {
        $this->container['otfp'] = $otfp;

        return $this;
    }

    /**
     * Gets otfp_deliver_time
     *
     * @return float|null
     */
    public function getOtfpDeliverTime()
    {
        return $this->container['otfp_deliver_time'];
    }

    /**
     * Sets otfp_deliver_time
     *
     * @param float|null $otfp_deliver_time Total amount of time spent delivering a response from the Fastly On-the-Fly Packaging service for video-on-demand (in seconds).
     *
     * @return self
     */
    public function setOtfpDeliverTime($otfp_deliver_time)
    {
        $this->container['otfp_deliver_time'] = $otfp_deliver_time;

        return $this;
    }

    /**
     * Gets otfp_manifests
     *
     * @return int|null
     */
    public function getOtfpManifests()
    {
        return $this->container['otfp_manifests'];
    }

    /**
     * Sets otfp_manifests
     *
     * @param int|null $otfp_manifests Number of responses that were manifest files from the Fastly On-the-Fly Packaging service for video-on-demand.
     *
     * @return self
     */
    public function setOtfpManifests($otfp_manifests)
    {
        $this->container['otfp_manifests'] = $otfp_manifests;

        return $this;
    }

    /**
     * Gets otfp_resp_body_bytes
     *
     * @return int|null
     */
    public function getOtfpRespBodyBytes()
    {
        return $this->container['otfp_resp_body_bytes'];
    }

    /**
     * Sets otfp_resp_body_bytes
     *
     * @param int|null $otfp_resp_body_bytes Total body bytes delivered from the Fastly On-the-Fly Packaging service for video-on-demand.
     *
     * @return self
     */
    public function setOtfpRespBodyBytes($otfp_resp_body_bytes)
    {
        $this->container['otfp_resp_body_bytes'] = $otfp_resp_body_bytes;

        return $this;
    }

    /**
     * Gets otfp_resp_header_bytes
     *
     * @return int|null
     */
    public function getOtfpRespHeaderBytes()
    {
        return $this->container['otfp_resp_header_bytes'];
    }

    /**
     * Sets otfp_resp_header_bytes
     *
     * @param int|null $otfp_resp_header_bytes Total header bytes delivered from the Fastly On-the-Fly Packaging service for video-on-demand.
     *
     * @return self
     */
    public function setOtfpRespHeaderBytes($otfp_resp_header_bytes)
    {
        $this->container['otfp_resp_header_bytes'] = $otfp_resp_header_bytes;

        return $this;
    }

    /**
     * Gets otfp_shield
     *
     * @return int|null
     */
    public function getOtfpShield()
    {
        return $this->container['otfp_shield'];
    }

    /**
     * Sets otfp_shield
     *
     * @param int|null $otfp_shield Number of responses that came from the Fastly On-the-Fly Packaging service for video-on-demand via a shield.
     *
     * @return self
     */
    public function setOtfpShield($otfp_shield)
    {
        $this->container['otfp_shield'] = $otfp_shield;

        return $this;
    }

    /**
     * Gets otfp_shield_resp_body_bytes
     *
     * @return int|null
     */
    public function getOtfpShieldRespBodyBytes()
    {
        return $this->container['otfp_shield_resp_body_bytes'];
    }

    /**
     * Sets otfp_shield_resp_body_bytes
     *
     * @param int|null $otfp_shield_resp_body_bytes Total body bytes delivered via a shield for the Fastly On-the-Fly Packaging service for video-on-demand.
     *
     * @return self
     */
    public function setOtfpShieldRespBodyBytes($otfp_shield_resp_body_bytes)
    {
        $this->container['otfp_shield_resp_body_bytes'] = $otfp_shield_resp_body_bytes;

        return $this;
    }

    /**
     * Gets otfp_shield_resp_header_bytes
     *
     * @return int|null
     */
    public function getOtfpShieldRespHeaderBytes()
    {
        return $this->container['otfp_shield_resp_header_bytes'];
    }

    /**
     * Sets otfp_shield_resp_header_bytes
     *
     * @param int|null $otfp_shield_resp_header_bytes Total header bytes delivered via a shield for the Fastly On-the-Fly Packaging service for video-on-demand.
     *
     * @return self
     */
    public function setOtfpShieldRespHeaderBytes($otfp_shield_resp_header_bytes)
    {
        $this->container['otfp_shield_resp_header_bytes'] = $otfp_shield_resp_header_bytes;

        return $this;
    }

    /**
     * Gets otfp_shield_time
     *
     * @return float|null
     */
    public function getOtfpShieldTime()
    {
        return $this->container['otfp_shield_time'];
    }

    /**
     * Sets otfp_shield_time
     *
     * @param float|null $otfp_shield_time Total amount of time spent delivering a response via a shield from the Fastly On-the-Fly Packaging service for video-on-demand (in seconds).
     *
     * @return self
     */
    public function setOtfpShieldTime($otfp_shield_time)
    {
        $this->container['otfp_shield_time'] = $otfp_shield_time;

        return $this;
    }

    /**
     * Gets pass
     *
     * @return int|null
     */
    public function getPass()
    {
        return $this->container['pass'];
    }

    /**
     * Sets pass
     *
     * @param int|null $pass Number of requests that passed through the CDN without being cached.
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->container['pass'] = $pass;

        return $this;
    }

    /**
     * Gets pass_resp_body_bytes
     *
     * @return int|null
     */
    public function getPassRespBodyBytes()
    {
        return $this->container['pass_resp_body_bytes'];
    }

    /**
     * Sets pass_resp_body_bytes
     *
     * @param int|null $pass_resp_body_bytes Total body bytes delivered for cache passes.
     *
     * @return self
     */
    public function setPassRespBodyBytes($pass_resp_body_bytes)
    {
        $this->container['pass_resp_body_bytes'] = $pass_resp_body_bytes;

        return $this;
    }

    /**
     * Gets pass_sub_count
     *
     * @return int|null
     */
    public function getPassSubCount()
    {
        return $this->container['pass_sub_count'];
    }

    /**
     * Sets pass_sub_count
     *
     * @param int|null $pass_sub_count Number of executions of the `vcl_pass` Varnish subroutine.
     *
     * @return self
     */
    public function setPassSubCount($pass_sub_count)
    {
        $this->container['pass_sub_count'] = $pass_sub_count;

        return $this;
    }

    /**
     * Gets pass_sub_time
     *
     * @return float|null
     */
    public function getPassSubTime()
    {
        return $this->container['pass_sub_time'];
    }

    /**
     * Sets pass_sub_time
     *
     * @param float|null $pass_sub_time Time spent inside the `vcl_pass` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setPassSubTime($pass_sub_time)
    {
        $this->container['pass_sub_time'] = $pass_sub_time;

        return $this;
    }

    /**
     * Gets pass_time
     *
     * @return float|null
     */
    public function getPassTime()
    {
        return $this->container['pass_time'];
    }

    /**
     * Sets pass_time
     *
     * @param float|null $pass_time Total amount of time spent processing cache passes (in seconds).
     *
     * @return self
     */
    public function setPassTime($pass_time)
    {
        $this->container['pass_time'] = $pass_time;

        return $this;
    }

    /**
     * Gets pci
     *
     * @return int|null
     */
    public function getPci()
    {
        return $this->container['pci'];
    }

    /**
     * Sets pci
     *
     * @param int|null $pci Number of responses with the PCI flag turned on.
     *
     * @return self
     */
    public function setPci($pci)
    {
        $this->container['pci'] = $pci;

        return $this;
    }

    /**
     * Gets pipe_sub_count
     *
     * @return int|null
     */
    public function getPipeSubCount()
    {
        return $this->container['pipe_sub_count'];
    }

    /**
     * Sets pipe_sub_count
     *
     * @param int|null $pipe_sub_count Number of executions of the `vcl_pipe` Varnish subroutine.
     *
     * @return self
     */
    public function setPipeSubCount($pipe_sub_count)
    {
        $this->container['pipe_sub_count'] = $pipe_sub_count;

        return $this;
    }

    /**
     * Gets pipe_sub_time
     *
     * @return float|null
     */
    public function getPipeSubTime()
    {
        return $this->container['pipe_sub_time'];
    }

    /**
     * Sets pipe_sub_time
     *
     * @param float|null $pipe_sub_time Time spent inside the `vcl_pipe` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setPipeSubTime($pipe_sub_time)
    {
        $this->container['pipe_sub_time'] = $pipe_sub_time;

        return $this;
    }

    /**
     * Gets predeliver_sub_count
     *
     * @return int|null
     */
    public function getPredeliverSubCount()
    {
        return $this->container['predeliver_sub_count'];
    }

    /**
     * Sets predeliver_sub_count
     *
     * @param int|null $predeliver_sub_count Number of executions of the `vcl_predeliver` Varnish subroutine.
     *
     * @return self
     */
    public function setPredeliverSubCount($predeliver_sub_count)
    {
        $this->container['predeliver_sub_count'] = $predeliver_sub_count;

        return $this;
    }

    /**
     * Gets predeliver_sub_time
     *
     * @return float|null
     */
    public function getPredeliverSubTime()
    {
        return $this->container['predeliver_sub_time'];
    }

    /**
     * Sets predeliver_sub_time
     *
     * @param float|null $predeliver_sub_time Time spent inside the `vcl_predeliver` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setPredeliverSubTime($predeliver_sub_time)
    {
        $this->container['predeliver_sub_time'] = $predeliver_sub_time;

        return $this;
    }

    /**
     * Gets prehash_sub_count
     *
     * @return int|null
     */
    public function getPrehashSubCount()
    {
        return $this->container['prehash_sub_count'];
    }

    /**
     * Sets prehash_sub_count
     *
     * @param int|null $prehash_sub_count Number of executions of the `vcl_prehash` Varnish subroutine.
     *
     * @return self
     */
    public function setPrehashSubCount($prehash_sub_count)
    {
        $this->container['prehash_sub_count'] = $prehash_sub_count;

        return $this;
    }

    /**
     * Gets prehash_sub_time
     *
     * @return float|null
     */
    public function getPrehashSubTime()
    {
        return $this->container['prehash_sub_time'];
    }

    /**
     * Sets prehash_sub_time
     *
     * @param float|null $prehash_sub_time Time spent inside the `vcl_prehash` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setPrehashSubTime($prehash_sub_time)
    {
        $this->container['prehash_sub_time'] = $prehash_sub_time;

        return $this;
    }

    /**
     * Gets recv_sub_count
     *
     * @return int|null
     */
    public function getRecvSubCount()
    {
        return $this->container['recv_sub_count'];
    }

    /**
     * Sets recv_sub_count
     *
     * @param int|null $recv_sub_count Number of executions of the `vcl_recv` Varnish subroutine.
     *
     * @return self
     */
    public function setRecvSubCount($recv_sub_count)
    {
        $this->container['recv_sub_count'] = $recv_sub_count;

        return $this;
    }

    /**
     * Gets recv_sub_time
     *
     * @return float|null
     */
    public function getRecvSubTime()
    {
        return $this->container['recv_sub_time'];
    }

    /**
     * Sets recv_sub_time
     *
     * @param float|null $recv_sub_time Time spent inside the `vcl_recv` Varnish subroutine (in nanoseconds).
     *
     * @return self
     */
    public function setRecvSubTime($recv_sub_time)
    {
        $this->container['recv_sub_time'] = $recv_sub_time;

        return $this;
    }

    /**
     * Gets req_body_bytes
     *
     * @return int|null
     */
    public function getReqBodyBytes()
    {
        return $this->container['req_body_bytes'];
    }

    /**
     * Sets req_body_bytes
     *
     * @param int|null $req_body_bytes Total body bytes received.
     *
     * @return self
     */
    public function setReqBodyBytes($req_body_bytes)
    {
        $this->container['req_body_bytes'] = $req_body_bytes;

        return $this;
    }

    /**
     * Gets req_header_bytes
     *
     * @return int|null
     */
    public function getReqHeaderBytes()
    {
        return $this->container['req_header_bytes'];
    }

    /**
     * Sets req_header_bytes
     *
     * @param int|null $req_header_bytes Total header bytes received.
     *
     * @return self
     */
    public function setReqHeaderBytes($req_header_bytes)
    {
        $this->container['req_header_bytes'] = $req_header_bytes;

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
     * @param int|null $resp_body_bytes Total body bytes delivered (edge_resp_body_bytes + shield_resp_body_bytes).
     *
     * @return self
     */
    public function setRespBodyBytes($resp_body_bytes)
    {
        $this->container['resp_body_bytes'] = $resp_body_bytes;

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
     * @param int|null $resp_header_bytes Total header bytes delivered (edge_resp_header_bytes + shield_resp_header_bytes).
     *
     * @return self
     */
    public function setRespHeaderBytes($resp_header_bytes)
    {
        $this->container['resp_header_bytes'] = $resp_header_bytes;

        return $this;
    }

    /**
     * Gets restarts
     *
     * @return int|null
     */
    public function getRestarts()
    {
        return $this->container['restarts'];
    }

    /**
     * Sets restarts
     *
     * @param int|null $restarts Number of restarts performed.
     *
     * @return self
     */
    public function setRestarts($restarts)
    {
        $this->container['restarts'] = $restarts;

        return $this;
    }

    /**
     * Gets segblock_origin_fetches
     *
     * @return int|null
     */
    public function getSegblockOriginFetches()
    {
        return $this->container['segblock_origin_fetches'];
    }

    /**
     * Sets segblock_origin_fetches
     *
     * @param int|null $segblock_origin_fetches Number of `Range` requests to origin for segments of resources when using segmented caching.
     *
     * @return self
     */
    public function setSegblockOriginFetches($segblock_origin_fetches)
    {
        $this->container['segblock_origin_fetches'] = $segblock_origin_fetches;

        return $this;
    }

    /**
     * Gets segblock_shield_fetches
     *
     * @return int|null
     */
    public function getSegblockShieldFetches()
    {
        return $this->container['segblock_shield_fetches'];
    }

    /**
     * Sets segblock_shield_fetches
     *
     * @param int|null $segblock_shield_fetches Number of `Range` requests to a shield for segments of resources when using segmented caching.
     *
     * @return self
     */
    public function setSegblockShieldFetches($segblock_shield_fetches)
    {
        $this->container['segblock_shield_fetches'] = $segblock_shield_fetches;

        return $this;
    }

    /**
     * Gets shield
     *
     * @return int|null
     */
    public function getShield()
    {
        return $this->container['shield'];
    }

    /**
     * Sets shield
     *
     * @param int|null $shield Number of requests from edge to the shield POP.
     *
     * @return self
     */
    public function setShield($shield)
    {
        $this->container['shield'] = $shield;

        return $this;
    }

    /**
     * Gets shield_cache_fetches
     *
     * @return int|null
     */
    public function getShieldCacheFetches()
    {
        return $this->container['shield_cache_fetches'];
    }

    /**
     * Sets shield_cache_fetches
     *
     * @param int|null $shield_cache_fetches The total number of completed requests made to shields that returned cacheable content.
     *
     * @return self
     */
    public function setShieldCacheFetches($shield_cache_fetches)
    {
        $this->container['shield_cache_fetches'] = $shield_cache_fetches;

        return $this;
    }

    /**
     * Gets shield_fetch_body_bytes
     *
     * @return int|null
     */
    public function getShieldFetchBodyBytes()
    {
        return $this->container['shield_fetch_body_bytes'];
    }

    /**
     * Sets shield_fetch_body_bytes
     *
     * @param int|null $shield_fetch_body_bytes Total request body bytes sent to a shield.
     *
     * @return self
     */
    public function setShieldFetchBodyBytes($shield_fetch_body_bytes)
    {
        $this->container['shield_fetch_body_bytes'] = $shield_fetch_body_bytes;

        return $this;
    }

    /**
     * Gets shield_fetch_header_bytes
     *
     * @return int|null
     */
    public function getShieldFetchHeaderBytes()
    {
        return $this->container['shield_fetch_header_bytes'];
    }

    /**
     * Sets shield_fetch_header_bytes
     *
     * @param int|null $shield_fetch_header_bytes Total request header bytes sent to a shield.
     *
     * @return self
     */
    public function setShieldFetchHeaderBytes($shield_fetch_header_bytes)
    {
        $this->container['shield_fetch_header_bytes'] = $shield_fetch_header_bytes;

        return $this;
    }

    /**
     * Gets shield_fetch_resp_body_bytes
     *
     * @return int|null
     */
    public function getShieldFetchRespBodyBytes()
    {
        return $this->container['shield_fetch_resp_body_bytes'];
    }

    /**
     * Sets shield_fetch_resp_body_bytes
     *
     * @param int|null $shield_fetch_resp_body_bytes Total response body bytes sent from a shield to the edge.
     *
     * @return self
     */
    public function setShieldFetchRespBodyBytes($shield_fetch_resp_body_bytes)
    {
        $this->container['shield_fetch_resp_body_bytes'] = $shield_fetch_resp_body_bytes;

        return $this;
    }

    /**
     * Gets shield_fetch_resp_header_bytes
     *
     * @return int|null
     */
    public function getShieldFetchRespHeaderBytes()
    {
        return $this->container['shield_fetch_resp_header_bytes'];
    }

    /**
     * Sets shield_fetch_resp_header_bytes
     *
     * @param int|null $shield_fetch_resp_header_bytes Total response header bytes sent from a shield to the edge.
     *
     * @return self
     */
    public function setShieldFetchRespHeaderBytes($shield_fetch_resp_header_bytes)
    {
        $this->container['shield_fetch_resp_header_bytes'] = $shield_fetch_resp_header_bytes;

        return $this;
    }

    /**
     * Gets shield_fetches
     *
     * @return int|null
     */
    public function getShieldFetches()
    {
        return $this->container['shield_fetches'];
    }

    /**
     * Sets shield_fetches
     *
     * @param int|null $shield_fetches Number of requests made from one Fastly data center to another, as part of shielding.
     *
     * @return self
     */
    public function setShieldFetches($shield_fetches)
    {
        $this->container['shield_fetches'] = $shield_fetches;

        return $this;
    }

    /**
     * Gets shield_resp_body_bytes
     *
     * @return int|null
     */
    public function getShieldRespBodyBytes()
    {
        return $this->container['shield_resp_body_bytes'];
    }

    /**
     * Sets shield_resp_body_bytes
     *
     * @param int|null $shield_resp_body_bytes Total body bytes delivered via a shield.
     *
     * @return self
     */
    public function setShieldRespBodyBytes($shield_resp_body_bytes)
    {
        $this->container['shield_resp_body_bytes'] = $shield_resp_body_bytes;

        return $this;
    }

    /**
     * Gets shield_resp_header_bytes
     *
     * @return int|null
     */
    public function getShieldRespHeaderBytes()
    {
        return $this->container['shield_resp_header_bytes'];
    }

    /**
     * Sets shield_resp_header_bytes
     *
     * @param int|null $shield_resp_header_bytes Total header bytes delivered via a shield.
     *
     * @return self
     */
    public function setShieldRespHeaderBytes($shield_resp_header_bytes)
    {
        $this->container['shield_resp_header_bytes'] = $shield_resp_header_bytes;

        return $this;
    }

    /**
     * Gets shield_revalidations
     *
     * @return int|null
     */
    public function getShieldRevalidations()
    {
        return $this->container['shield_revalidations'];
    }

    /**
     * Sets shield_revalidations
     *
     * @param int|null $shield_revalidations Number of responses received from origin with a `304` status code, in response to an `If-Modified-Since` or `If-None-Match` request to a shield. Under regular scenarios, a revalidation will imply a cache hit. However, if using segmented caching this may result in a cache miss.
     *
     * @return self
     */
    public function setShieldRevalidations($shield_revalidations)
    {
        $this->container['shield_revalidations'] = $shield_revalidations;

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
     * @param int|null $status_1xx Number of \"Informational\" category status codes delivered.
     *
     * @return self
     */
    public function setStatus1xx($status_1xx)
    {
        $this->container['status_1xx'] = $status_1xx;

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
     * @param int|null $status_200 Number of responses sent with status code 200 (Success).
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
     * @param int|null $status_204 Number of responses sent with status code 204 (No Content).
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
     * @param int|null $status_206 Number of responses sent with status code 206 (Partial Content).
     *
     * @return self
     */
    public function setStatus206($status_206)
    {
        $this->container['status_206'] = $status_206;

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
     * @param int|null $status_2xx Number of \"Success\" status codes delivered.
     *
     * @return self
     */
    public function setStatus2xx($status_2xx)
    {
        $this->container['status_2xx'] = $status_2xx;

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
     * @param int|null $status_301 Number of responses sent with status code 301 (Moved Permanently).
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
     * @param int|null $status_302 Number of responses sent with status code 302 (Found).
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
     * @param int|null $status_304 Number of responses sent with status code 304 (Not Modified).
     *
     * @return self
     */
    public function setStatus304($status_304)
    {
        $this->container['status_304'] = $status_304;

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
     * @param int|null $status_3xx Number of \"Redirection\" codes delivered.
     *
     * @return self
     */
    public function setStatus3xx($status_3xx)
    {
        $this->container['status_3xx'] = $status_3xx;

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
     * @param int|null $status_400 Number of responses sent with status code 400 (Bad Request).
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
     * @param int|null $status_401 Number of responses sent with status code 401 (Unauthorized).
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
     * @param int|null $status_403 Number of responses sent with status code 403 (Forbidden).
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
     * @param int|null $status_404 Number of responses sent with status code 404 (Not Found).
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
     * @param int|null $status_416 Number of responses sent with status code 416 (Range Not Satisfiable).
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
     * @param int|null $status_429 Number of responses sent with status code 429 (Too Many Requests).
     *
     * @return self
     */
    public function setStatus429($status_429)
    {
        $this->container['status_429'] = $status_429;

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
     * @param int|null $status_4xx Number of \"Client Error\" codes delivered.
     *
     * @return self
     */
    public function setStatus4xx($status_4xx)
    {
        $this->container['status_4xx'] = $status_4xx;

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
     * @param int|null $status_500 Number of responses sent with status code 500 (Internal Server Error).
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
     * @param int|null $status_501 Number of responses sent with status code 501 (Not Implemented).
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
     * @param int|null $status_502 Number of responses sent with status code 502 (Bad Gateway).
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
     * @param int|null $status_503 Number of responses sent with status code 503 (Service Unavailable).
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
     * @param int|null $status_504 Number of responses sent with status code 504 (Gateway Timeout).
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
     * @param int|null $status_505 Number of responses sent with status code 505 (HTTP Version Not Supported).
     *
     * @return self
     */
    public function setStatus505($status_505)
    {
        $this->container['status_505'] = $status_505;

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
     * @param int|null $status_5xx Number of \"Server Error\" codes delivered.
     *
     * @return self
     */
    public function setStatus5xx($status_5xx)
    {
        $this->container['status_5xx'] = $status_5xx;

        return $this;
    }

    /**
     * Gets synth
     *
     * @return int|null
     */
    public function getSynth()
    {
        return $this->container['synth'];
    }

    /**
     * Sets synth
     *
     * @param int|null $synth Number of requests that returned a synthetic response (i.e., response objects created with the `synthetic` VCL statement).
     *
     * @return self
     */
    public function setSynth($synth)
    {
        $this->container['synth'] = $synth;

        return $this;
    }

    /**
     * Gets tls
     *
     * @return int|null
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     *
     * @param int|null $tls Number of requests that were received over TLS.
     *
     * @return self
     */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;

        return $this;
    }

    /**
     * Gets tls_v10
     *
     * @return int|null
     */
    public function getTlsV10()
    {
        return $this->container['tls_v10'];
    }

    /**
     * Sets tls_v10
     *
     * @param int|null $tls_v10 Number of requests received over TLS 1.0.
     *
     * @return self
     */
    public function setTlsV10($tls_v10)
    {
        $this->container['tls_v10'] = $tls_v10;

        return $this;
    }

    /**
     * Gets tls_v11
     *
     * @return int|null
     */
    public function getTlsV11()
    {
        return $this->container['tls_v11'];
    }

    /**
     * Sets tls_v11
     *
     * @param int|null $tls_v11 Number of requests received over TLS 1.1.
     *
     * @return self
     */
    public function setTlsV11($tls_v11)
    {
        $this->container['tls_v11'] = $tls_v11;

        return $this;
    }

    /**
     * Gets tls_v12
     *
     * @return int|null
     */
    public function getTlsV12()
    {
        return $this->container['tls_v12'];
    }

    /**
     * Sets tls_v12
     *
     * @param int|null $tls_v12 Number of requests received over TLS 1.2.
     *
     * @return self
     */
    public function setTlsV12($tls_v12)
    {
        $this->container['tls_v12'] = $tls_v12;

        return $this;
    }

    /**
     * Gets tls_v13
     *
     * @return int|null
     */
    public function getTlsV13()
    {
        return $this->container['tls_v13'];
    }

    /**
     * Sets tls_v13
     *
     * @param int|null $tls_v13 Number of requests received over TLS 1.3.
     *
     * @return self
     */
    public function setTlsV13($tls_v13)
    {
        $this->container['tls_v13'] = $tls_v13;

        return $this;
    }

    /**
     * Gets uncacheable
     *
     * @return int|null
     */
    public function getUncacheable()
    {
        return $this->container['uncacheable'];
    }

    /**
     * Sets uncacheable
     *
     * @param int|null $uncacheable Number of requests that were designated uncachable.
     *
     * @return self
     */
    public function setUncacheable($uncacheable)
    {
        $this->container['uncacheable'] = $uncacheable;

        return $this;
    }

    /**
     * Gets video
     *
     * @return int|null
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param int|null $video Number of responses with the video segment or video manifest MIME type (i.e., application/x-mpegurl, application/vnd.apple.mpegurl, application/f4m, application/dash+xml, application/vnd.ms-sstr+xml, ideo/mp2t, audio/aac, video/f4f, video/x-flv, video/mp4, audio/mp4).
     *
     * @return self
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets waf_blocked
     *
     * @return int|null
     */
    public function getWafBlocked()
    {
        return $this->container['waf_blocked'];
    }

    /**
     * Sets waf_blocked
     *
     * @param int|null $waf_blocked Number of requests that triggered a WAF rule and were blocked.
     *
     * @return self
     */
    public function setWafBlocked($waf_blocked)
    {
        $this->container['waf_blocked'] = $waf_blocked;

        return $this;
    }

    /**
     * Gets waf_logged
     *
     * @return int|null
     */
    public function getWafLogged()
    {
        return $this->container['waf_logged'];
    }

    /**
     * Sets waf_logged
     *
     * @param int|null $waf_logged Number of requests that triggered a WAF rule and were logged.
     *
     * @return self
     */
    public function setWafLogged($waf_logged)
    {
        $this->container['waf_logged'] = $waf_logged;

        return $this;
    }

    /**
     * Gets waf_passed
     *
     * @return int|null
     */
    public function getWafPassed()
    {
        return $this->container['waf_passed'];
    }

    /**
     * Sets waf_passed
     *
     * @param int|null $waf_passed Number of requests that triggered a WAF rule and were passed.
     *
     * @return self
     */
    public function setWafPassed($waf_passed)
    {
        $this->container['waf_passed'] = $waf_passed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
    public function jsonSerialize()
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

