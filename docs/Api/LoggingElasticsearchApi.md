# Fastly\Api\LoggingElasticsearchApi


```php
$apiInstance = new Fastly\Api\LoggingElasticsearchApi(
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
[**createLogElasticsearch()**](LoggingElasticsearchApi.md#createLogElasticsearch) | **POST** /service/{service_id}/version/{version_id}/logging/elasticsearch | Create an Elasticsearch log endpoint
[**deleteLogElasticsearch()**](LoggingElasticsearchApi.md#deleteLogElasticsearch) | **DELETE** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Delete an Elasticsearch log endpoint
[**getLogElasticsearch()**](LoggingElasticsearchApi.md#getLogElasticsearch) | **GET** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Get an Elasticsearch log endpoint
[**listLogElasticsearch()**](LoggingElasticsearchApi.md#listLogElasticsearch) | **GET** /service/{service_id}/version/{version_id}/logging/elasticsearch | List Elasticsearch log endpoints
[**updateLogElasticsearch()**](LoggingElasticsearchApi.md#updateLogElasticsearch) | **PUT** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Update an Elasticsearch log endpoint


## `createLogElasticsearch()`

```php
createLogElasticsearch($options): \Fastly\Model\LoggingElasticsearchResponse // Create an Elasticsearch log endpoint
```

Create a Elasticsearch logging endpoint for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Elasticsearch can ingest.
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_hostname'] = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$options['request_max_entries'] = 0; // int | The maximum number of logs sent in one request. Defaults `0` for unbounded.
$options['request_max_bytes'] = 0; // int | The maximum number of bytes sent in one request. Defaults `0` for unbounded.
$options['index'] = 'index_example'; // string | The name of the Elasticsearch index to send documents (logs) to. The index must follow the Elasticsearch [index format rules](https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-create-index.html). We support [strftime](https://www.man7.org/linux/man-pages/man3/strftime.3.html) interpolated variables inside braces prefixed with a pound symbol. For example, `#{%F}` will interpolate as `YYYY-MM-DD` with today's date.
$options['url'] = 'url_example'; // string | The URL to stream logs to. Must use HTTPS.
$options['pipeline'] = 'pipeline_example'; // string | The ID of the Elasticsearch ingest pipeline to apply pre-process transformations to before indexing. Learn more about creating a pipeline in the [Elasticsearch docs](https://www.elastic.co/guide/en/elasticsearch/reference/current/ingest.html).
$options['user'] = 'user_example'; // string | Basic Auth username.
$options['password'] = 'password_example'; // string | Basic Auth password.

try {
    $result = $apiInstance->createLogElasticsearch($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingElasticsearchApi->createLogElasticsearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Elasticsearch can ingest. | [optional]
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**index** | **string** | The name of the Elasticsearch index to send documents (logs) to. The index must follow the Elasticsearch [index format rules](https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-create-index.html). We support [strftime](https://www.man7.org/linux/man-pages/man3/strftime.3.html) interpolated variables inside braces prefixed with a pound symbol. For example, `#{%F}` will interpolate as `YYYY-MM-DD` with today&#39;s date. | [optional]
**url** | **string** | The URL to stream logs to. Must use HTTPS. | [optional]
**pipeline** | **string** | The ID of the Elasticsearch ingest pipeline to apply pre-process transformations to before indexing. Learn more about creating a pipeline in the [Elasticsearch docs](https://www.elastic.co/guide/en/elasticsearch/reference/current/ingest.html). | [optional]
**user** | **string** | Basic Auth username. | [optional]
**password** | **string** | Basic Auth password. | [optional]

### Return type

[**\Fastly\Model\LoggingElasticsearchResponse**](../Model/LoggingElasticsearchResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogElasticsearch()`

```php
deleteLogElasticsearch($options): \Fastly\Model\InlineResponse200 // Delete an Elasticsearch log endpoint
```

Delete the Elasticsearch logging endpoint for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_elasticsearch_name'] = 'logging_elasticsearch_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogElasticsearch($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingElasticsearchApi->deleteLogElasticsearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_elasticsearch_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogElasticsearch()`

```php
getLogElasticsearch($options): \Fastly\Model\LoggingElasticsearchResponse // Get an Elasticsearch log endpoint
```

Get the Elasticsearch logging endpoint for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_elasticsearch_name'] = 'logging_elasticsearch_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogElasticsearch($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingElasticsearchApi->getLogElasticsearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_elasticsearch_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingElasticsearchResponse**](../Model/LoggingElasticsearchResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogElasticsearch()`

```php
listLogElasticsearch($options): \Fastly\Model\LoggingElasticsearchResponse[] // List Elasticsearch log endpoints
```

List all of the Elasticsearch logging endpoints for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogElasticsearch($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingElasticsearchApi->listLogElasticsearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingElasticsearchResponse[]**](../Model/LoggingElasticsearchResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogElasticsearch()`

```php
updateLogElasticsearch($options): \Fastly\Model\LoggingElasticsearchResponse // Update an Elasticsearch log endpoint
```

Update the Elasticsearch logging endpoint for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_elasticsearch_name'] = 'logging_elasticsearch_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name for the real-time logging configuration.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Elasticsearch can ingest.
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['tls_ca_cert'] = 'null'; // string | A secure certificate to authenticate a server with. Must be in PEM format.
$options['tls_client_cert'] = 'null'; // string | The client certificate used to make authenticated requests. Must be in PEM format.
$options['tls_client_key'] = 'null'; // string | The client private key used to make authenticated requests. Must be in PEM format.
$options['tls_hostname'] = 'null'; // string | The hostname to verify the server's certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported.
$options['request_max_entries'] = 0; // int | The maximum number of logs sent in one request. Defaults `0` for unbounded.
$options['request_max_bytes'] = 0; // int | The maximum number of bytes sent in one request. Defaults `0` for unbounded.
$options['index'] = 'index_example'; // string | The name of the Elasticsearch index to send documents (logs) to. The index must follow the Elasticsearch [index format rules](https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-create-index.html). We support [strftime](https://www.man7.org/linux/man-pages/man3/strftime.3.html) interpolated variables inside braces prefixed with a pound symbol. For example, `#{%F}` will interpolate as `YYYY-MM-DD` with today's date.
$options['url'] = 'url_example'; // string | The URL to stream logs to. Must use HTTPS.
$options['pipeline'] = 'pipeline_example'; // string | The ID of the Elasticsearch ingest pipeline to apply pre-process transformations to before indexing. Learn more about creating a pipeline in the [Elasticsearch docs](https://www.elastic.co/guide/en/elasticsearch/reference/current/ingest.html).
$options['user'] = 'user_example'; // string | Basic Auth username.
$options['password'] = 'password_example'; // string | Basic Auth password.

try {
    $result = $apiInstance->updateLogElasticsearch($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingElasticsearchApi->updateLogElasticsearch: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_elasticsearch_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce valid JSON that Elasticsearch can ingest. | [optional]
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**request_max_entries** | **int** | The maximum number of logs sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` for unbounded. | [optional] [defaults to 0]
**index** | **string** | The name of the Elasticsearch index to send documents (logs) to. The index must follow the Elasticsearch [index format rules](https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-create-index.html). We support [strftime](https://www.man7.org/linux/man-pages/man3/strftime.3.html) interpolated variables inside braces prefixed with a pound symbol. For example, `#{%F}` will interpolate as `YYYY-MM-DD` with today&#39;s date. | [optional]
**url** | **string** | The URL to stream logs to. Must use HTTPS. | [optional]
**pipeline** | **string** | The ID of the Elasticsearch ingest pipeline to apply pre-process transformations to before indexing. Learn more about creating a pipeline in the [Elasticsearch docs](https://www.elastic.co/guide/en/elasticsearch/reference/current/ingest.html). | [optional]
**user** | **string** | Basic Auth username. | [optional]
**password** | **string** | Basic Auth password. | [optional]

### Return type

[**\Fastly\Model\LoggingElasticsearchResponse**](../Model/LoggingElasticsearchResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
