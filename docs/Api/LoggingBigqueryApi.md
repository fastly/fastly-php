# Fastly\Api\LoggingBigqueryApi


```php
$apiInstance = new Fastly\Api\LoggingBigqueryApi(
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
[**createLogBigquery()**](LoggingBigqueryApi.md#createLogBigquery) | **POST** /service/{service_id}/version/{version_id}/logging/bigquery | Create a BigQuery log endpoint
[**deleteLogBigquery()**](LoggingBigqueryApi.md#deleteLogBigquery) | **DELETE** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Delete a BigQuery log endpoint
[**getLogBigquery()**](LoggingBigqueryApi.md#getLogBigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Get a BigQuery log endpoint
[**listLogBigquery()**](LoggingBigqueryApi.md#listLogBigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery | List BigQuery log endpoints
[**updateLogBigquery()**](LoggingBigqueryApi.md#updateLogBigquery) | **PUT** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Update a BigQuery log endpoint


## `createLogBigquery()`

```php
createLogBigquery($options): \Fastly\Model\LoggingBigqueryResponse // Create a BigQuery log endpoint
```

Create a BigQuery logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | The name of the BigQuery logging object. Used as a primary key for API access.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce JSON that matches the schema of your BigQuery table.
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['user'] = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['secret_key'] = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['account_name'] = 'account_name_example'; // string | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided.
$options['dataset'] = 'dataset_example'; // string | Your BigQuery dataset.
$options['table'] = 'table_example'; // string | Your BigQuery table.
$options['template_suffix'] = 'template_suffix_example'; // string | BigQuery table name suffix template. Optional.
$options['project_id'] = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->createLogBigquery($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->createLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name of the BigQuery logging object. Used as a primary key for API access. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce JSON that matches the schema of your BigQuery table. | [optional]
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**user** | **string** | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**account_name** | **string** | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided. | [optional]
**dataset** | **string** | Your BigQuery dataset. | [optional]
**table** | **string** | Your BigQuery table. | [optional]
**template_suffix** | **string** | BigQuery table name suffix template. Optional. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\Fastly\Model\LoggingBigqueryResponse**](../Model/LoggingBigqueryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogBigquery()`

```php
deleteLogBigquery($options): \Fastly\Model\InlineResponse200 // Delete a BigQuery log endpoint
```

Delete a BigQuery logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_bigquery_name'] = 'logging_bigquery_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->deleteLogBigquery($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->deleteLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_bigquery_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogBigquery()`

```php
getLogBigquery($options): \Fastly\Model\LoggingBigqueryResponse // Get a BigQuery log endpoint
```

Get the details for a BigQuery logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_bigquery_name'] = 'logging_bigquery_name_example'; // string | The name for the real-time logging configuration.

try {
    $result = $apiInstance->getLogBigquery($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->getLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_bigquery_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingBigqueryResponse**](../Model/LoggingBigqueryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogBigquery()`

```php
listLogBigquery($options): \Fastly\Model\LoggingBigqueryResponse[] // List BigQuery log endpoints
```

List all of the BigQuery logging objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listLogBigquery($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->listLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingBigqueryResponse[]**](../Model/LoggingBigqueryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogBigquery()`

```php
updateLogBigquery($options): \Fastly\Model\LoggingBigqueryResponse // Update a BigQuery log endpoint
```

Update a BigQuery logging object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['logging_bigquery_name'] = 'logging_bigquery_name_example'; // string | The name for the real-time logging configuration.
$options['name'] = 'name_example'; // string | The name of the BigQuery logging object. Used as a primary key for API access.
$options['placement'] = 'placement_example'; // string | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`.
$options['response_condition'] = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$options['format'] = 'format_example'; // string | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce JSON that matches the schema of your BigQuery table.
$options['log_processing_region'] = 'none'; // string | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global.
$options['format_version'] = self::FORMAT_VERSION_v2; // int | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`.
$options['user'] = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['secret_key'] = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified.
$options['account_name'] = 'account_name_example'; // string | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided.
$options['dataset'] = 'dataset_example'; // string | Your BigQuery dataset.
$options['table'] = 'table_example'; // string | Your BigQuery table.
$options['template_suffix'] = 'template_suffix_example'; // string | BigQuery table name suffix template. Optional.
$options['project_id'] = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->updateLogBigquery($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->updateLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_bigquery_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name of the BigQuery logging object. Used as a primary key for API access. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'null']
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). Must produce JSON that matches the schema of your BigQuery table. | [optional]
**log_processing_region** | **string** | The geographic region where the logs will be processed before streaming. Valid values are `us`, `eu`, and `none` for global. | [optional] [one of: 'none', 'eu', 'us'] [defaults to 'none']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**user** | **string** | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Not required if `account_name` is specified. | [optional]
**account_name** | **string** | The name of the Google Cloud Platform service account associated with the target log collection service. Not required if `user` and `secret_key` are provided. | [optional]
**dataset** | **string** | Your BigQuery dataset. | [optional]
**table** | **string** | Your BigQuery table. | [optional]
**template_suffix** | **string** | BigQuery table name suffix template. Optional. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\Fastly\Model\LoggingBigqueryResponse**](../Model/LoggingBigqueryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
