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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**createHealthcheck()**](HealthcheckApi.md#createHealthcheck) | **POST** /service/{service_id}/version/{version_id}/healthcheck | Create a health check
[**deleteHealthcheck()**](HealthcheckApi.md#deleteHealthcheck) | **DELETE** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Delete a health check
[**getHealthcheck()**](HealthcheckApi.md#getHealthcheck) | **GET** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Get a health check
[**listHealthchecks()**](HealthcheckApi.md#listHealthchecks) | **GET** /service/{service_id}/version/{version_id}/healthcheck | List health checks
[**updateHealthcheck()**](HealthcheckApi.md#updateHealthcheck) | **PUT** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Update a health check


## `createHealthcheck()`

```php
createHealthcheck($options): \Fastly\Model\HealthcheckResponse // Create a health check
```

Create a health check for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['check_interval'] = 56; // int | How often to run the health check in milliseconds.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['expected_response'] = 56; // int | The status code expected from the host.
$options['headers'] = array('headers_example'); // string[] | Array of custom headers that will be added to the health check probes.
$options['host'] = 'host_example'; // string | Which host to check.
$options['http_version'] = 'http_version_example'; // string | Whether to use version 1.0 or 1.1 HTTP.
$options['initial'] = 56; // int | When loading a config, the initial number of probes to be seen as OK.
$options['method'] = 'method_example'; // string | Which HTTP method to use.
$options['name'] = 'name_example'; // string | The name of the health check.
$options['path'] = 'path_example'; // string | The path to check.
$options['threshold'] = 56; // int | How many health checks must succeed to be considered healthy.
$options['timeout'] = 56; // int | Timeout in milliseconds.
$options['window'] = 56; // int | The number of most recent health check queries to keep for this health check.

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
**check_interval** | **int** | How often to run the health check in milliseconds. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**expected_response** | **int** | The status code expected from the host. | [optional]
**headers** | [**string[]**](../Model/string.md) | Array of custom headers that will be added to the health check probes. | [optional]
**host** | **string** | Which host to check. | [optional]
**http_version** | **string** | Whether to use version 1.0 or 1.1 HTTP. | [optional]
**initial** | **int** | When loading a config, the initial number of probes to be seen as OK. | [optional]
**method** | **string** | Which HTTP method to use. | [optional]
**name** | **string** | The name of the health check. | [optional]
**path** | **string** | The path to check. | [optional]
**threshold** | **int** | How many health checks must succeed to be considered healthy. | [optional]
**timeout** | **int** | Timeout in milliseconds. | [optional]
**window** | **int** | The number of most recent health check queries to keep for this health check. | [optional]

### Return type

[**\Fastly\Model\HealthcheckResponse**](../Model/HealthcheckResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteHealthcheck()`

```php
deleteHealthcheck($options): \Fastly\Model\InlineResponse200 // Delete a health check
```

Delete the health check for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['healthcheck_name'] = 'healthcheck_name_example'; // string | The name of the health check.

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
**healthcheck_name** | **string** | The name of the health check. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHealthcheck()`

```php
getHealthcheck($options): \Fastly\Model\HealthcheckResponse // Get a health check
```

Get the health check for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['healthcheck_name'] = 'healthcheck_name_example'; // string | The name of the health check.

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
**healthcheck_name** | **string** | The name of the health check. |

### Return type

[**\Fastly\Model\HealthcheckResponse**](../Model/HealthcheckResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listHealthchecks()`

```php
listHealthchecks($options): \Fastly\Model\HealthcheckResponse[] // List health checks
```

List all of the health checks for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

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
updateHealthcheck($options): \Fastly\Model\HealthcheckResponse // Update a health check
```

Update the health check for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['healthcheck_name'] = 'healthcheck_name_example'; // string | The name of the health check.
$options['check_interval'] = 56; // int | How often to run the health check in milliseconds.
$options['comment'] = 'comment_example'; // string | A freeform descriptive note.
$options['expected_response'] = 56; // int | The status code expected from the host.
$options['headers'] = array('headers_example'); // string[] | Array of custom headers that will be added to the health check probes.
$options['host'] = 'host_example'; // string | Which host to check.
$options['http_version'] = 'http_version_example'; // string | Whether to use version 1.0 or 1.1 HTTP.
$options['initial'] = 56; // int | When loading a config, the initial number of probes to be seen as OK.
$options['method'] = 'method_example'; // string | Which HTTP method to use.
$options['name'] = 'name_example'; // string | The name of the health check.
$options['path'] = 'path_example'; // string | The path to check.
$options['threshold'] = 56; // int | How many health checks must succeed to be considered healthy.
$options['timeout'] = 56; // int | Timeout in milliseconds.
$options['window'] = 56; // int | The number of most recent health check queries to keep for this health check.

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
**healthcheck_name** | **string** | The name of the health check. |
**check_interval** | **int** | How often to run the health check in milliseconds. | [optional]
**comment** | **string** | A freeform descriptive note. | [optional]
**expected_response** | **int** | The status code expected from the host. | [optional]
**headers** | [**string[]**](../Model/string.md) | Array of custom headers that will be added to the health check probes. | [optional]
**host** | **string** | Which host to check. | [optional]
**http_version** | **string** | Whether to use version 1.0 or 1.1 HTTP. | [optional]
**initial** | **int** | When loading a config, the initial number of probes to be seen as OK. | [optional]
**method** | **string** | Which HTTP method to use. | [optional]
**name** | **string** | The name of the health check. | [optional]
**path** | **string** | The path to check. | [optional]
**threshold** | **int** | How many health checks must succeed to be considered healthy. | [optional]
**timeout** | **int** | Timeout in milliseconds. | [optional]
**window** | **int** | The number of most recent health check queries to keep for this health check. | [optional]

### Return type

[**\Fastly\Model\HealthcheckResponse**](../Model/HealthcheckResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
