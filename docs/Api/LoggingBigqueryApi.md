# Fastly\Api\LoggingBigqueryApi


```php
$apiInstance = new Fastly\Api\LoggingBigqueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table. | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name of the BigQuery logging object. Used as a primary key for API access. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
**user** | **string** | Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
**dataset** | **string** | Your BigQuery dataset. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]
**table** | **string** | Your BigQuery table. | [optional]
**template_suffix** | **string** | BigQuery table name suffix template. Optional. | [optional]

### Return type

[**\Fastly\Model\LoggingBigqueryResponse**](../Model/LoggingBigqueryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogBigquery()`

```php
deleteLogBigquery($options): object // Delete a BigQuery log endpoint
```

Delete a BigQuery logging object for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_bigquery_name** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogBigquery()`

```php
getLogBigquery($options): \Fastly\Model\LoggingBigqueryResponse // Get a BigQuery log endpoint
```

Get the details for a BigQuery logging object for a particular service and version.

### Example
```php
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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_bigquery_name** | **string** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |

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
**service_id** | **string** |  |
**version_id** | **int** |  |
**logging_bigquery_name** | **string** |  |
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table. | [optional]
**format_version** | [**\Fastly\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md) |  | [optional]
**name** | **string** | The name of the BigQuery logging object. Used as a primary key for API access. | [optional]
**placement** | [**\Fastly\Model\LoggingPlacement**](../Model/LoggingPlacement.md) |  | [optional]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**secret_key** | **string** | Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
**user** | **string** | Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
**dataset** | **string** | Your BigQuery dataset. | [optional]
**project_id** | **string** | Your Google Cloud Platform project ID. Required | [optional]
**table** | **string** | Your BigQuery table. | [optional]
**template_suffix** | **string** | BigQuery table name suffix template. Optional. | [optional]

### Return type

[**\Fastly\Model\LoggingBigqueryResponse**](../Model/LoggingBigqueryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
