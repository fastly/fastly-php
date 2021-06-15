# OpenAPI\Client\LoggingBigqueryApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogBigquery()**](LoggingBigqueryApi.md#createLogBigquery) | **POST** /service/{service_id}/version/{version_id}/logging/bigquery | Create a BigQuery log endpoint
[**deleteLogBigquery()**](LoggingBigqueryApi.md#deleteLogBigquery) | **DELETE** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Delete a BigQuery log endpoint
[**getLogBigquery()**](LoggingBigqueryApi.md#getLogBigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Get a BigQuery log endpoint
[**listLogBigquery()**](LoggingBigqueryApi.md#listLogBigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery | List BigQuery log endpoints
[**updateLogBigquery()**](LoggingBigqueryApi.md#updateLogBigquery) | **PUT** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Update a BigQuery log endpoint


## `createLogBigquery()`

```php
createLogBigquery($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $dataset, $table, $template_suffix, $project_id): \OpenAPI\Client\Model\ModelLoggingBigquery
```

Create a BigQuery log endpoint

Create a BigQuery logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingBigqueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name of the BigQuery logging object. Used as a primary key for API access.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = 'format_example'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table.
$user = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Required.
$secret_key = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Required.
$dataset = 'dataset_example'; // string | Your BigQuery dataset.
$table = 'table_example'; // string | Your BigQuery table.
$template_suffix = 'template_suffix_example'; // string | BigQuery table name suffix template. Optional.
$project_id = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->createLogBigquery($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $dataset, $table, $template_suffix, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->createLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| The name of the BigQuery logging object. Used as a primary key for API access. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table. | [optional]
 **user** | **string**| Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
 **secret_key** | **string**| Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
 **dataset** | **string**| Your BigQuery dataset. | [optional]
 **table** | **string**| Your BigQuery table. | [optional]
 **template_suffix** | **string**| BigQuery table name suffix template. Optional. | [optional]
 **project_id** | **string**| Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingBigquery**](../Model/ModelLoggingBigquery.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLogBigquery()`

```php
deleteLogBigquery($service_id, $version_id, $logging_bigquery_name): object
```

Delete a BigQuery log endpoint

Delete a BigQuery logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingBigqueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_bigquery_name = 'logging_bigquery_name_example'; // string

try {
    $result = $apiInstance->deleteLogBigquery($service_id, $version_id, $logging_bigquery_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->deleteLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_bigquery_name** | **string**|  |

### Return type

**object**

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogBigquery()`

```php
getLogBigquery($service_id, $version_id, $logging_bigquery_name): \OpenAPI\Client\Model\ModelLoggingBigquery
```

Get a BigQuery log endpoint

Get the details for a BigQuery logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingBigqueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_bigquery_name = 'logging_bigquery_name_example'; // string

try {
    $result = $apiInstance->getLogBigquery($service_id, $version_id, $logging_bigquery_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->getLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_bigquery_name** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingBigquery**](../Model/ModelLoggingBigquery.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLogBigquery()`

```php
listLogBigquery($service_id, $version_id): \OpenAPI\Client\Model\ModelLoggingBigquery[]
```

List BigQuery log endpoints

List all of the BigQuery logging objects for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingBigqueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int

try {
    $result = $apiInstance->listLogBigquery($service_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->listLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |

### Return type

[**\OpenAPI\Client\Model\ModelLoggingBigquery[]**](../Model/ModelLoggingBigquery.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogBigquery()`

```php
updateLogBigquery($service_id, $version_id, $logging_bigquery_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $dataset, $table, $template_suffix, $project_id): \OpenAPI\Client\Model\ModelLoggingBigquery
```

Update a BigQuery log endpoint

Update a BigQuery logging object for a particular service and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoggingBigqueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$logging_bigquery_name = 'logging_bigquery_name_example'; // string
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | The name of the BigQuery logging object. Used as a primary key for API access.
$placement = new \OpenAPI\Client\Model\LoggingPlacement(); // \OpenAPI\Client\Model\LoggingPlacement
$format_version = new \OpenAPI\Client\Model\LoggingFormatVersion(); // \OpenAPI\Client\Model\LoggingFormatVersion
$response_condition = 'response_condition_example'; // string | The name of an existing condition in the configured endpoint, or leave blank to always execute.
$format = 'format_example'; // string | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table.
$user = 'user_example'; // string | Your Google Cloud Platform service account email address. The `client_email` field in your service account authentication JSON. Required.
$secret_key = 'secret_key_example'; // string | Your Google Cloud Platform account secret key. The `private_key` field in your service account authentication JSON. Required.
$dataset = 'dataset_example'; // string | Your BigQuery dataset.
$table = 'table_example'; // string | Your BigQuery table.
$template_suffix = 'template_suffix_example'; // string | BigQuery table name suffix template. Optional.
$project_id = 'project_id_example'; // string | Your Google Cloud Platform project ID. Required

try {
    $result = $apiInstance->updateLogBigquery($service_id, $version_id, $logging_bigquery_name, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $placement, $format_version, $response_condition, $format, $user, $secret_key, $dataset, $table, $template_suffix, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggingBigqueryApi->updateLogBigquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**|  |
 **version_id** | **int**|  |
 **logging_bigquery_name** | **string**|  |
 **created_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **deleted_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **updated_at** | **string**| Date and time in ISO 8601 format. | [optional]
 **service_id2** | **string**| Alphanumeric string identifying the service. | [optional]
 **version** | **int**| Integer identifying a service version. | [optional]
 **name** | **string**| The name of the BigQuery logging object. Used as a primary key for API access. | [optional]
 **placement** | [**\OpenAPI\Client\Model\LoggingPlacement**](../Model/LoggingPlacement.md)|  | [optional]
 **format_version** | [**\OpenAPI\Client\Model\LoggingFormatVersion**](../Model/LoggingFormatVersion.md)|  | [optional]
 **response_condition** | **string**| The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
 **format** | **string**| A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). Must produce JSON that matches the schema of your BigQuery table. | [optional]
 **user** | **string**| Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. | [optional]
 **secret_key** | **string**| Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. | [optional]
 **dataset** | **string**| Your BigQuery dataset. | [optional]
 **table** | **string**| Your BigQuery table. | [optional]
 **template_suffix** | **string**| BigQuery table name suffix template. Optional. | [optional]
 **project_id** | **string**| Your Google Cloud Platform project ID. Required | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelLoggingBigquery**](../Model/ModelLoggingBigquery.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
