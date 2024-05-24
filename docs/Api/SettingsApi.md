# Fastly\Api\SettingsApi


```php
$apiInstance = new Fastly\Api\SettingsApi(
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
[**getServiceSettings()**](SettingsApi.md#getServiceSettings) | **GET** /service/{service_id}/version/{version_id}/settings | Get service settings
[**updateServiceSettings()**](SettingsApi.md#updateServiceSettings) | **PUT** /service/{service_id}/version/{version_id}/settings | Update service settings


## `getServiceSettings()`

```php
getServiceSettings($options): \Fastly\Model\SettingsResponse // Get service settings
```

Get the settings for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->getServiceSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getServiceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\SettingsResponse**](../Model/SettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateServiceSettings()`

```php
updateServiceSettings($options): \Fastly\Model\SettingsResponse // Update service settings
```

Update the settings for a particular service and version. NOTE: If you override TTLs with custom VCL, any general.default_ttl value will not be honored and the expected behavior may change.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['general_default_host'] = 'general_default_host_example'; // string | The default host name for the version.
$options['general_default_ttl'] = 56; // int | The default time-to-live (TTL) for the version.
$options['general_stale_if_error'] = false; // bool | Enables serving a stale object if there is an error.
$options['general_stale_if_error_ttl'] = 43200; // int | The default time-to-live (TTL) for serving the stale object for the version.

try {
    $result = $apiInstance->updateServiceSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateServiceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**general_default_host** | **string** | The default host name for the version. | [optional]
**general_default_ttl** | **int** | The default time-to-live (TTL) for the version. | [optional]
**general_stale_if_error** | **bool** | Enables serving a stale object if there is an error. | [optional] [defaults to false]
**general_stale_if_error_ttl** | **int** | The default time-to-live (TTL) for serving the stale object for the version. | [optional] [defaults to 43200]

### Return type

[**\Fastly\Model\SettingsResponse**](../Model/SettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
