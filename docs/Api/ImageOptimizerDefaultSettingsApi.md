# Fastly\Api\ImageOptimizerDefaultSettingsApi


```php
$apiInstance = new Fastly\Api\ImageOptimizerDefaultSettingsApi(
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
[**getDefaultSettings()**](ImageOptimizerDefaultSettingsApi.md#getDefaultSettings) | **GET** /service/{service_id}/version/{version_id}/image_optimizer_default_settings | Get current Image Optimizer Default Settings
[**updateDefaultSettings()**](ImageOptimizerDefaultSettingsApi.md#updateDefaultSettings) | **PATCH** /service/{service_id}/version/{version_id}/image_optimizer_default_settings | Update Image Optimizer Default Settings


## `getDefaultSettings()`

```php
getDefaultSettings($options): \Fastly\Model\DefaultSettingsResponse // Get current Image Optimizer Default Settings
```

Retrieve the current Image Optimizer default settings. All properties in the response will be populated.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->getDefaultSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling ImageOptimizerDefaultSettingsApi->getDefaultSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\DefaultSettingsResponse**](../Model/DefaultSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDefaultSettings()`

```php
updateDefaultSettings($options): \Fastly\Model\DefaultSettingsResponse // Update Image Optimizer Default Settings
```

Update one or more default settings. A minimum of one property is required. The endpoint will respond with the new Image Optimizer default settings, with all properties populated.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['default_settings'] = new \Fastly\Model\DefaultSettings(); // \Fastly\Model\DefaultSettings

try {
    $result = $apiInstance->updateDefaultSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling ImageOptimizerDefaultSettingsApi->updateDefaultSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**default_settings** | [**\Fastly\Model\DefaultSettings**](../Model/DefaultSettings.md) |  | [optional]

### Return type

[**\Fastly\Model\DefaultSettingsResponse**](../Model/DefaultSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
