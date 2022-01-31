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

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**getServiceSettings()**](SettingsApi.md#getServiceSettings) | **GET** /service/{service_id}/version/{version_id}/settings | Get service settings
[**updateServiceSettings()**](SettingsApi.md#updateServiceSettings) | **PUT** /service/{service_id}/version/{version_id}/settings | Update service settings


## `getServiceSettings()`

```php
getServiceSettings($options): \Fastly\Model\SettingsResponse // Get service settings
```

Get the settings for a particular service and version.

### Example
```php
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

### Return type

[**\Fastly\Model\SettingsResponse**](../Model/SettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
