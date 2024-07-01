# Fastly\Api\LoggingDatadogApi


```php
$apiInstance = new Fastly\Api\LoggingDatadogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**createLogDatadog()**](LoggingDatadogApi.md#createLogDatadog) | **POST** /service/{service_id}/version/{version_id}/logging/datadog | Create a Datadog log endpoint
[**deleteLogDatadog()**](LoggingDatadogApi.md#deleteLogDatadog) | **DELETE** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Delete a Datadog log endpoint
[**getLogDatadog()**](LoggingDatadogApi.md#getLogDatadog) | **GET** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Get a Datadog log endpoint
[**listLogDatadog()**](LoggingDatadogApi.md#listLogDatadog) | **GET** /service/{service_id}/version/{version_id}/logging/datadog | List Datadog log endpoints
[**updateLogDatadog()**](LoggingDatadogApi.md#updateLogDatadog) | **PUT** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Update a Datadog log endpoint


## `createLogDatadog()`

```php
createLogDatadog($options): \Fastly\Model\LoggingDatadogResponse // Create a Datadog log endpoint
```

Create a Datadog logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '{\"ddsource\":\"fastly\",\"service\":\"%{req.service_id}V\",\"date\":\"%{begin:%Y-%m-%dT%H:%M:%S%Z}t\",\"time_start\":\"%{begin:%Y-%m-%dT%H:%M:%S%Z}t\",\"time_end\":\"%{end:%Y-%m-%dT%H:%M:%S%Z}t\",\"http\":{\"request_time_ms\":\"%D\",\"method\":\"%m\",\"url\":\"%{json.escape(req.url)}V\",\"useragent\":\"%{User-Agent}i\",\"referer\":\"%{Referer}i\",\"protocol\":\"%H\",\"request_x_forwarded_for\":\"%{X-Forwarded-For}i\",\"status_code\":\"%s\"},\"network\":{\"client\":{\"ip\":\"%h\",\"name\":\"%{client.as.name}V\",\"number\":\"%{client.as.number}V\",\"connection_speed\":\"%{client.geo.conn_speed}V\"},\"destination\":{\"ip\":\"%A\"},\"geoip\":{\"geo_city\":\"%{client.geo.city.utf8}V\",\"geo_country_code\":\"%{client.geo.country_code}V\",\"geo_continent_code\":\"%{client.geo.continent_code}V\",\"geo_region\":\"%{client.geo.region}V\"},\"bytes_written\":\"%B\",\"bytes_read\":\"%{req.body_bytes_read}V\"},\"host\":\"%{Fastly-Orig-Host}i\",\"origin_host\":\"%v\",\"is_ipv6\":\"%{if(req.is_ipv6, \\\"true\\\", \\\"false\\\")}V\",\"is_tls\":\"%{if(req.is_ssl, \\\"true\\\", \\\"false\\\")}V\",\"tls_client_protocol\":\"%{json.escape(tls.client.protocol)}V\",\"tls_client_servername\":\"%{json.escape(tls.client.servername)}V\",\"tls_client_cipher\":\"%{json.escape(tls.client.cipher)}V\",\"tls_client_cipher_sha\":\"%{json.escape(tls.client.ciphers_sha)}V\",\"tls_client_tlsexts_sha\":\"%{json.escape(tls.client.tlsexts_sha)}V\",\"is_h2\":\"%{if(fastly_info.is_h2, \\\"true\\\", \\\"false\\\")}V\",\"is_h2_push\":\"%{if(fastly_info.h2.is_push, \\\"true\\\", \\\"false\\\")}V\",\"h2_stream_id\":\"%{fastly_info.h2.stream_id}V\",\"request_accept_content\":\"%{Accept}i\",\"request_accept_language\":\"%{Accept-Language}i\",\"request_accept_encoding\":\"%{Accept-Encoding}i\",\"request_accept_charset\":\"%{Accept-Charset}i\",\"request_connection\":\"%{Connection}i\",\"request_dnt\":\"%{DNT}i\",\"request_forwarded\":\"%{Forwarded}i\",\"request_via\":\"%{Via}i\",\"request_cache_control\":\"%{Cache-Control}i\",\"request_x_requested_with\":\"%{X-Requested-With}i\",\"request_x_att_device_id\":\"%{X-ATT-Device-Id}i\",\"content_type\":\"%{Content-Type}o\",\"is_cacheable\":\"%{if(fastly_info.state~\\\"^(HIT|MISS)$\\\", \\\"true\\\", \\\"false\\\")}V\",\"response_age\":\"%{Age}o\",\"response_cache_control\":\"%{Cache-Control}o\",\"response_expires\":\"%{Expires}o\",\"response_last_modified\":\"%{Last-Modified}o\",\"response_tsv\":\"%{TSV}o\",\"server_datacenter\":\"%{server.datacenter}V\",\"req_header_size\":\"%{req.header_bytes_read}V\",\"resp_header_size\":\"%{resp.header_bytes_written}V\",\"socket_cwnd\":\"%{client.socket.cwnd}V\",\"socket_nexthop\":\"%{client.socket.nexthop}V\",\"socket_tcpi_rcv_mss\":\"%{client.socket.tcpi_rcv_mss}V\",\"socket_tcpi_snd_mss\":\"%{client.socket.tcpi_snd_mss}V\",\"socket_tcpi_rtt\":\"%{client.socket.tcpi_rtt}V\",\"socket_tcpi_rttvar\":\"%{client.socket.tcpi_rttvar}V\",\"socket_tcpi_rcv_rtt\":\"%{client.socket.tcpi_rcv_rtt}V\",\"socket_tcpi_rcv_space\":\"%{client.socket.tcpi_rcv_space}V\",\"socket_tcpi_last_data_sent\":\"%{client.socket.tcpi_last_data_sent}V\",\"socket_tcpi_total_retrans\":\"%{client.socket.tcpi_total_retrans}V\",\"socket_tcpi_delta_retrans\":\"%{client.socket.tcpi_delta_retrans}V\",\"socket_ploss\":\"%{client.socket.ploss}V\"}'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Datadog can ingest.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['region'] = 'US'; // string | The region that log data will be sent to.
$options['token'] = 'token_example'; // string | The API key from your Datadog account. Required.

try {
    $result = $apiInstance->createLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->createLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Datadog can ingest. | [optional] [defaults to '{"ddsource":"fastly","service":"%{req.service_id}V","date":"%{begin:%Y-%m-%dT%H:%M:%S%Z}t","time_start":"%{begin:%Y-%m-%dT%H:%M:%S%Z}t","time_end":"%{end:%Y-%m-%dT%H:%M:%S%Z}t","http":{"request_time_ms":"%D","method":"%m","url":"%{json.escape(req.url)}V","useragent":"%{User-Agent}i","referer":"%{Referer}i","protocol":"%H","request_x_forwarded_for":"%{X-Forwarded-For}i","status_code":"%s"},"network":{"client":{"ip":"%h","name":"%{client.as.name}V","number":"%{client.as.number}V","connection_speed":"%{client.geo.conn_speed}V"},"destination":{"ip":"%A"},"geoip":{"geo_city":"%{client.geo.city.utf8}V","geo_country_code":"%{client.geo.country_code}V","geo_continent_code":"%{client.geo.continent_code}V","geo_region":"%{client.geo.region}V"},"bytes_written":"%B","bytes_read":"%{req.body_bytes_read}V"},"host":"%{Fastly-Orig-Host}i","origin_host":"%v","is_ipv6":"%{if(req.is_ipv6, \"true\", \"false\")}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","tls_client_protocol":"%{json.escape(tls.client.protocol)}V","tls_client_servername":"%{json.escape(tls.client.servername)}V","tls_client_cipher":"%{json.escape(tls.client.cipher)}V","tls_client_cipher_sha":"%{json.escape(tls.client.ciphers_sha)}V","tls_client_tlsexts_sha":"%{json.escape(tls.client.tlsexts_sha)}V","is_h2":"%{if(fastly_info.is_h2, \"true\", \"false\")}V","is_h2_push":"%{if(fastly_info.h2.is_push, \"true\", \"false\")}V","h2_stream_id":"%{fastly_info.h2.stream_id}V","request_accept_content":"%{Accept}i","request_accept_language":"%{Accept-Language}i","request_accept_encoding":"%{Accept-Encoding}i","request_accept_charset":"%{Accept-Charset}i","request_connection":"%{Connection}i","request_dnt":"%{DNT}i","request_forwarded":"%{Forwarded}i","request_via":"%{Via}i","request_cache_control":"%{Cache-Control}i","request_x_requested_with":"%{X-Requested-With}i","request_x_att_device_id":"%{X-ATT-Device-Id}i","content_type":"%{Content-Type}o","is_cacheable":"%{if(fastly_info.state~\"^(HIT|MISS)$\", \"true\", \"false\")}V","response_age":"%{Age}o","response_cache_control":"%{Cache-Control}o","response_expires":"%{Expires}o","response_last_modified":"%{Last-Modified}o","response_tsv":"%{TSV}o","server_datacenter":"%{server.datacenter}V","req_header_size":"%{req.header_bytes_read}V","resp_header_size":"%{resp.header_bytes_written}V","socket_cwnd":"%{client.socket.cwnd}V","socket_nexthop":"%{client.socket.nexthop}V","socket_tcpi_rcv_mss":"%{client.socket.tcpi_rcv_mss}V","socket_tcpi_snd_mss":"%{client.socket.tcpi_snd_mss}V","socket_tcpi_rtt":"%{client.socket.tcpi_rtt}V","socket_tcpi_rttvar":"%{client.socket.tcpi_rttvar}V","socket_tcpi_rcv_rtt":"%{client.socket.tcpi_rcv_rtt}V","socket_tcpi_rcv_space":"%{client.socket.tcpi_rcv_space}V","socket_tcpi_last_data_sent":"%{client.socket.tcpi_last_data_sent}V","socket_tcpi_total_retrans":"%{client.socket.tcpi_total_retrans}V","socket_tcpi_delta_retrans":"%{client.socket.tcpi_delta_retrans}V","socket_ploss":"%{client.socket.ploss}V"}']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**region** | **string** | The region that log data will be sent to. | [optional] [one of: 'US', 'US3', 'US5', 'EU (legacy, same as EU1)', 'EU1', 'AP1'] [defaults to 'US']
**token** | **string** | The API key from your Datadog account. Required. | [optional]

### Return type

[**\Fastly\Model\LoggingDatadogResponse**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogDatadog()`

```php
deleteLogDatadog($options): \Fastly\Model\InlineResponse200 // Delete a Datadog log endpoint
```

Delete the Datadog logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_datadog_name'] = 'logging_datadog_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->deleteLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_datadog_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogDatadog()`

```php
getLogDatadog($options): \Fastly\Model\LoggingDatadogResponse // Get a Datadog log endpoint
```

Get the details for a Datadog logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_datadog_name'] = 'logging_datadog_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->getLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_datadog_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingDatadogResponse**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogDatadog()`

```php
listLogDatadog($options): \Fastly\Model\LoggingDatadogResponse[] // List Datadog log endpoints
```

List all of the Datadog logging objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->listLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingDatadogResponse[]**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogDatadog()`

```php
updateLogDatadog($options): \Fastly\Model\LoggingDatadogResponse // Update a Datadog log endpoint
```

Update the Datadog logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_datadog_name'] = 'logging_datadog_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = '{\"ddsource\":\"fastly\",\"service\":\"%{req.service_id}V\",\"date\":\"%{begin:%Y-%m-%dT%H:%M:%S%Z}t\",\"time_start\":\"%{begin:%Y-%m-%dT%H:%M:%S%Z}t\",\"time_end\":\"%{end:%Y-%m-%dT%H:%M:%S%Z}t\",\"http\":{\"request_time_ms\":\"%D\",\"method\":\"%m\",\"url\":\"%{json.escape(req.url)}V\",\"useragent\":\"%{User-Agent}i\",\"referer\":\"%{Referer}i\",\"protocol\":\"%H\",\"request_x_forwarded_for\":\"%{X-Forwarded-For}i\",\"status_code\":\"%s\"},\"network\":{\"client\":{\"ip\":\"%h\",\"name\":\"%{client.as.name}V\",\"number\":\"%{client.as.number}V\",\"connection_speed\":\"%{client.geo.conn_speed}V\"},\"destination\":{\"ip\":\"%A\"},\"geoip\":{\"geo_city\":\"%{client.geo.city.utf8}V\",\"geo_country_code\":\"%{client.geo.country_code}V\",\"geo_continent_code\":\"%{client.geo.continent_code}V\",\"geo_region\":\"%{client.geo.region}V\"},\"bytes_written\":\"%B\",\"bytes_read\":\"%{req.body_bytes_read}V\"},\"host\":\"%{Fastly-Orig-Host}i\",\"origin_host\":\"%v\",\"is_ipv6\":\"%{if(req.is_ipv6, \\\"true\\\", \\\"false\\\")}V\",\"is_tls\":\"%{if(req.is_ssl, \\\"true\\\", \\\"false\\\")}V\",\"tls_client_protocol\":\"%{json.escape(tls.client.protocol)}V\",\"tls_client_servername\":\"%{json.escape(tls.client.servername)}V\",\"tls_client_cipher\":\"%{json.escape(tls.client.cipher)}V\",\"tls_client_cipher_sha\":\"%{json.escape(tls.client.ciphers_sha)}V\",\"tls_client_tlsexts_sha\":\"%{json.escape(tls.client.tlsexts_sha)}V\",\"is_h2\":\"%{if(fastly_info.is_h2, \\\"true\\\", \\\"false\\\")}V\",\"is_h2_push\":\"%{if(fastly_info.h2.is_push, \\\"true\\\", \\\"false\\\")}V\",\"h2_stream_id\":\"%{fastly_info.h2.stream_id}V\",\"request_accept_content\":\"%{Accept}i\",\"request_accept_language\":\"%{Accept-Language}i\",\"request_accept_encoding\":\"%{Accept-Encoding}i\",\"request_accept_charset\":\"%{Accept-Charset}i\",\"request_connection\":\"%{Connection}i\",\"request_dnt\":\"%{DNT}i\",\"request_forwarded\":\"%{Forwarded}i\",\"request_via\":\"%{Via}i\",\"request_cache_control\":\"%{Cache-Control}i\",\"request_x_requested_with\":\"%{X-Requested-With}i\",\"request_x_att_device_id\":\"%{X-ATT-Device-Id}i\",\"content_type\":\"%{Content-Type}o\",\"is_cacheable\":\"%{if(fastly_info.state~\\\"^(HIT|MISS)$\\\", \\\"true\\\", \\\"false\\\")}V\",\"response_age\":\"%{Age}o\",\"response_cache_control\":\"%{Cache-Control}o\",\"response_expires\":\"%{Expires}o\",\"response_last_modified\":\"%{Last-Modified}o\",\"response_tsv\":\"%{TSV}o\",\"server_datacenter\":\"%{server.datacenter}V\",\"req_header_size\":\"%{req.header_bytes_read}V\",\"resp_header_size\":\"%{resp.header_bytes_written}V\",\"socket_cwnd\":\"%{client.socket.cwnd}V\",\"socket_nexthop\":\"%{client.socket.nexthop}V\",\"socket_tcpi_rcv_mss\":\"%{client.socket.tcpi_rcv_mss}V\",\"socket_tcpi_snd_mss\":\"%{client.socket.tcpi_snd_mss}V\",\"socket_tcpi_rtt\":\"%{client.socket.tcpi_rtt}V\",\"socket_tcpi_rttvar\":\"%{client.socket.tcpi_rttvar}V\",\"socket_tcpi_rcv_rtt\":\"%{client.socket.tcpi_rcv_rtt}V\",\"socket_tcpi_rcv_space\":\"%{client.socket.tcpi_rcv_space}V\",\"socket_tcpi_last_data_sent\":\"%{client.socket.tcpi_last_data_sent}V\",\"socket_tcpi_total_retrans\":\"%{client.socket.tcpi_total_retrans}V\",\"socket_tcpi_delta_retrans\":\"%{client.socket.tcpi_delta_retrans}V\",\"socket_ploss\":\"%{client.socket.ploss}V\"}'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Datadog can ingest.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['region'] = 'US'; // string | The region that log data will be sent to.
$options['token'] = 'token_example'; // string | The API key from your Datadog account. Required.

try {
    $result = $apiInstance->updateLogDatadog($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDatadogApi->updateLogDatadog: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_datadog_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce valid JSON that Datadog can ingest. | [optional] [defaults to '{"ddsource":"fastly","service":"%{req.service_id}V","date":"%{begin:%Y-%m-%dT%H:%M:%S%Z}t","time_start":"%{begin:%Y-%m-%dT%H:%M:%S%Z}t","time_end":"%{end:%Y-%m-%dT%H:%M:%S%Z}t","http":{"request_time_ms":"%D","method":"%m","url":"%{json.escape(req.url)}V","useragent":"%{User-Agent}i","referer":"%{Referer}i","protocol":"%H","request_x_forwarded_for":"%{X-Forwarded-For}i","status_code":"%s"},"network":{"client":{"ip":"%h","name":"%{client.as.name}V","number":"%{client.as.number}V","connection_speed":"%{client.geo.conn_speed}V"},"destination":{"ip":"%A"},"geoip":{"geo_city":"%{client.geo.city.utf8}V","geo_country_code":"%{client.geo.country_code}V","geo_continent_code":"%{client.geo.continent_code}V","geo_region":"%{client.geo.region}V"},"bytes_written":"%B","bytes_read":"%{req.body_bytes_read}V"},"host":"%{Fastly-Orig-Host}i","origin_host":"%v","is_ipv6":"%{if(req.is_ipv6, \"true\", \"false\")}V","is_tls":"%{if(req.is_ssl, \"true\", \"false\")}V","tls_client_protocol":"%{json.escape(tls.client.protocol)}V","tls_client_servername":"%{json.escape(tls.client.servername)}V","tls_client_cipher":"%{json.escape(tls.client.cipher)}V","tls_client_cipher_sha":"%{json.escape(tls.client.ciphers_sha)}V","tls_client_tlsexts_sha":"%{json.escape(tls.client.tlsexts_sha)}V","is_h2":"%{if(fastly_info.is_h2, \"true\", \"false\")}V","is_h2_push":"%{if(fastly_info.h2.is_push, \"true\", \"false\")}V","h2_stream_id":"%{fastly_info.h2.stream_id}V","request_accept_content":"%{Accept}i","request_accept_language":"%{Accept-Language}i","request_accept_encoding":"%{Accept-Encoding}i","request_accept_charset":"%{Accept-Charset}i","request_connection":"%{Connection}i","request_dnt":"%{DNT}i","request_forwarded":"%{Forwarded}i","request_via":"%{Via}i","request_cache_control":"%{Cache-Control}i","request_x_requested_with":"%{X-Requested-With}i","request_x_att_device_id":"%{X-ATT-Device-Id}i","content_type":"%{Content-Type}o","is_cacheable":"%{if(fastly_info.state~\"^(HIT|MISS)$\", \"true\", \"false\")}V","response_age":"%{Age}o","response_cache_control":"%{Cache-Control}o","response_expires":"%{Expires}o","response_last_modified":"%{Last-Modified}o","response_tsv":"%{TSV}o","server_datacenter":"%{server.datacenter}V","req_header_size":"%{req.header_bytes_read}V","resp_header_size":"%{resp.header_bytes_written}V","socket_cwnd":"%{client.socket.cwnd}V","socket_nexthop":"%{client.socket.nexthop}V","socket_tcpi_rcv_mss":"%{client.socket.tcpi_rcv_mss}V","socket_tcpi_snd_mss":"%{client.socket.tcpi_snd_mss}V","socket_tcpi_rtt":"%{client.socket.tcpi_rtt}V","socket_tcpi_rttvar":"%{client.socket.tcpi_rttvar}V","socket_tcpi_rcv_rtt":"%{client.socket.tcpi_rcv_rtt}V","socket_tcpi_rcv_space":"%{client.socket.tcpi_rcv_space}V","socket_tcpi_last_data_sent":"%{client.socket.tcpi_last_data_sent}V","socket_tcpi_total_retrans":"%{client.socket.tcpi_total_retrans}V","socket_tcpi_delta_retrans":"%{client.socket.tcpi_delta_retrans}V","socket_ploss":"%{client.socket.ploss}V"}']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**region** | **string** | The region that log data will be sent to. | [optional] [one of: 'US', 'US3', 'US5', 'EU (legacy, same as EU1)', 'EU1', 'AP1'] [defaults to 'US']
**token** | **string** | The API key from your Datadog account. Required. | [optional]

### Return type

[**\Fastly\Model\LoggingDatadogResponse**](../Model/LoggingDatadogResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
