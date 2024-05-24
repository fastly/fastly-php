# Fastly\Api\TlsConfigurationsApi


```php
$apiInstance = new Fastly\Api\TlsConfigurationsApi(
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
[**getTlsConfig()**](TlsConfigurationsApi.md#getTlsConfig) | **GET** /tls/configurations/{tls_configuration_id} | Get a TLS configuration
[**listTlsConfigs()**](TlsConfigurationsApi.md#listTlsConfigs) | **GET** /tls/configurations | List TLS configurations
[**updateTlsConfig()**](TlsConfigurationsApi.md#updateTlsConfig) | **PATCH** /tls/configurations/{tls_configuration_id} | Update a TLS configuration


## `getTlsConfig()`

```php
getTlsConfig($options): \Fastly\Model\TlsConfigurationResponse // Get a TLS configuration
```

Show a TLS configuration.

### Example
```php
    $options['include'] = dns_records; // string | Include related objects. Optional, comma-separated values. Permitted values: `dns_records`.
$options['tls_configuration_id'] = 'tls_configuration_id_example'; // string | Alphanumeric string identifying a TLS configuration.

try {
    $result = $apiInstance->getTlsConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsConfigurationsApi->getTlsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `dns_records`. | [optional]
**tls_configuration_id** | **string** | Alphanumeric string identifying a TLS configuration. |

### Return type

[**\Fastly\Model\TlsConfigurationResponse**](../Model/TlsConfigurationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTlsConfigs()`

```php
listTlsConfigs($options): \Fastly\Model\TlsConfigurationsResponse // List TLS configurations
```

List all TLS configurations.

### Example
```php
    $options['filter_bulk'] = 'filter_bulk_example'; // string | Optionally filters by the bulk attribute.
$options['include'] = dns_records; // string | Include related objects. Optional, comma-separated values. Permitted values: `dns_records`.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listTlsConfigs($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsConfigurationsApi->listTlsConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_bulk** | **string** | Optionally filters by the bulk attribute. | [optional]
**include** | **string** | Include related objects. Optional, comma-separated values. Permitted values: `dns_records`. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\TlsConfigurationsResponse**](../Model/TlsConfigurationsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateTlsConfig()`

```php
updateTlsConfig($options): \Fastly\Model\TlsConfigurationResponse // Update a TLS configuration
```

Update a TLS configuration.

### Example
```php
    $options['tls_configuration_id'] = 'tls_configuration_id_example'; // string | Alphanumeric string identifying a TLS configuration.
$options['tls_configuration'] = {"data":{"type":"tls_configuration","attributes":{"name":"New TLS configuration name"}}}; // \Fastly\Model\TlsConfiguration

try {
    $result = $apiInstance->updateTlsConfig($options);
} catch (Exception $e) {
    echo 'Exception when calling TlsConfigurationsApi->updateTlsConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**tls_configuration_id** | **string** | Alphanumeric string identifying a TLS configuration. |
**tls_configuration** | [**\Fastly\Model\TlsConfiguration**](../Model/TlsConfiguration.md) |  | [optional]

### Return type

[**\Fastly\Model\TlsConfigurationResponse**](../Model/TlsConfigurationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
