# Fastly\Api\LegacyWafOwaspApi


```php
$apiInstance = new Fastly\Api\LegacyWafOwaspApi(
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
[**createOwaspSettings()**](LegacyWafOwaspApi.md#createOwaspSettings) | **POST** /service/{service_id}/wafs/{firewall_id}/owasp | Create an OWASP settings object
[**getOwaspSettings()**](LegacyWafOwaspApi.md#getOwaspSettings) | **GET** /service/{service_id}/wafs/{firewall_id}/owasp | Get the OWASP settings object
[**updateOwaspSettings()**](LegacyWafOwaspApi.md#updateOwaspSettings) | **PATCH** /service/{service_id}/wafs/{firewall_id}/owasp | Update the OWASP settings object


## `createOwaspSettings()`

```php
createOwaspSettings($options): object // Create an OWASP settings object
```

Create an OWASP settings object for a particular service and firewall.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['request_body'] = {"data":{"type":"owasp"}}; // array<string,object>

try {
    $result = $apiInstance->createOwaspSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafOwaspApi->createOwaspSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getOwaspSettings()`

```php
getOwaspSettings($options): object // Get the OWASP settings object
```

Get the OWASP settings object for a particular service and firewall.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.

try {
    $result = $apiInstance->getOwaspSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafOwaspApi->getOwaspSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateOwaspSettings()`

```php
updateOwaspSettings($options): object // Update the OWASP settings object
```

Update the OWASP settings object for a particular service and firewall.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['request_body'] = {"data":{"id":"0W4guUGZzb2W9Euo4m0oR","type":"owasp","attributes":{"inbound_anomaly_score_threshold":42}}}; // array<string,object>

try {
    $result = $apiInstance->updateOwaspSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafOwaspApi->updateOwaspSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
