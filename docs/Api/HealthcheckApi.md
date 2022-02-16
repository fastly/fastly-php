# Fastly\Api\HealthcheckApi


```php
$apiInstance = new Fastly\Api\HealthcheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createHealthcheck()**](HealthcheckApi.md#createHealthcheck) | **POST** /service/{service_id}/version/{version_id}/healthcheck | Create a healthcheck
[**deleteHealthcheck()**](HealthcheckApi.md#deleteHealthcheck) | **DELETE** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Delete a healthcheck
[**getHealthcheck()**](HealthcheckApi.md#getHealthcheck) | **GET** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Get a healthcheck
[**listHealthchecks()**](HealthcheckApi.md#listHealthchecks) | **GET** /service/{service_id}/version/{version_id}/healthcheck | List healthchecks
[**updateHealthcheck()**](HealthcheckApi.md#updateHealthcheck) | **PUT** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Update a healthcheck


## `createHealthcheck()`

```php
createHealthcheck($options): \Fastly\Model\HealthcheckResponse // Create a healthcheck
```

Create a healthcheck for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createHealthcheck($options);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckApi->createHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**check_interval** | **int** | How often to run the healthcheck in milliseconds. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**expected_response** | **int** | The status code expected from the host. | [optional]
**host** | **string** | Which host to check. | [optional]
**http_version** | **string** | Whether to use version 1.0 or 1.1 HTTP. | [optional]
**initial** | **int** | When loading a config, the initial number of probes to be seen as OK. | [optional]
**method** | **string** | Which HTTP method to use. | [optional]
**name** | **string** | The name of the healthcheck. | [optional]
**path** | **string** | The path to check. | [optional]
**threshold** | **int** | How many healthchecks must succeed to be considered healthy. | [optional]
**timeout** | **int** | Timeout in milliseconds. | [optional]
**window** | **int** | The number of most recent healthcheck queries to keep for this healthcheck. | [optional]

### Return type

[**\Fastly\Model\HealthcheckResponse**](../Model/HealthcheckResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteHealthcheck()`

```php
deleteHealthcheck($options): \Fastly\Model\InlineResponse200 // Delete a healthcheck
```

Delete the healthcheck for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteHealthcheck($options);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckApi->deleteHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**healthcheck_name** | **string** | The name of the healthcheck. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHealthcheck()`

```php
getHealthcheck($options): \Fastly\Model\HealthcheckResponse // Get a healthcheck
```

Get the healthcheck for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getHealthcheck($options);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckApi->getHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**healthcheck_name** | **string** | The name of the healthcheck. |

### Return type

[**\Fastly\Model\HealthcheckResponse**](../Model/HealthcheckResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listHealthchecks()`

```php
listHealthchecks($options): \Fastly\Model\HealthcheckResponse[] // List healthchecks
```

List all of the healthchecks for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listHealthchecks($options);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckApi->listHealthchecks: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\HealthcheckResponse[]**](../Model/HealthcheckResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateHealthcheck()`

```php
updateHealthcheck($options): \Fastly\Model\HealthcheckResponse // Update a healthcheck
```

Update the healthcheck for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateHealthcheck($options);
} catch (Exception $e) {
    echo 'Exception when calling HealthcheckApi->updateHealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**healthcheck_name** | **string** | The name of the healthcheck. |
**check_interval** | **int** | How often to run the healthcheck in milliseconds. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**expected_response** | **int** | The status code expected from the host. | [optional]
**host** | **string** | Which host to check. | [optional]
**http_version** | **string** | Whether to use version 1.0 or 1.1 HTTP. | [optional]
**initial** | **int** | When loading a config, the initial number of probes to be seen as OK. | [optional]
**method** | **string** | Which HTTP method to use. | [optional]
**name** | **string** | The name of the healthcheck. | [optional]
**path** | **string** | The path to check. | [optional]
**threshold** | **int** | How many healthchecks must succeed to be considered healthy. | [optional]
**timeout** | **int** | Timeout in milliseconds. | [optional]
**window** | **int** | The number of most recent healthcheck queries to keep for this healthcheck. | [optional]

### Return type

[**\Fastly\Model\HealthcheckResponse**](../Model/HealthcheckResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
