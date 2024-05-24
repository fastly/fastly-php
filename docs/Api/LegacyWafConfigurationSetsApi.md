# Fastly\Api\LegacyWafConfigurationSetsApi


```php
$apiInstance = new Fastly\Api\LegacyWafConfigurationSetsApi(
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
[**listWafConfigSets()**](LegacyWafConfigurationSetsApi.md#listWafConfigSets) | **GET** /wafs/configuration_sets | List configuration sets
[**listWafsConfigSet()**](LegacyWafConfigurationSetsApi.md#listWafsConfigSet) | **GET** /wafs/configuration_sets/{configuration_set_id}/relationships/wafs | List WAFs currently using a configuration set
[**useWafConfigSet()**](LegacyWafConfigurationSetsApi.md#useWafConfigSet) | **PATCH** /wafs/configuration_sets/{configuration_set_id}/relationships/wafs | Apply a configuration set to a WAF


## `listWafConfigSets()`

```php
listWafConfigSets($options): object // List configuration sets
```

List all Configuration sets.

### Example
```php
    
try {
    $result = $apiInstance->listWafConfigSets($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafConfigurationSetsApi->listWafConfigSets: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafsConfigSet()`

```php
listWafsConfigSet($options): object // List WAFs currently using a configuration set
```

List the WAF objects currently using the specified configuration set.

### Example
```php
    $options['configuration_set_id'] = 'configuration_set_id_example'; // string | Alphanumeric string identifying a WAF configuration set.

try {
    $result = $apiInstance->listWafsConfigSet($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafConfigurationSetsApi->listWafsConfigSet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**configuration_set_id** | **string** | Alphanumeric string identifying a WAF configuration set. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `useWafConfigSet()`

```php
useWafConfigSet($options): object // Apply a configuration set to a WAF
```

Update one or more WAF objects to use the specified configuration set.

### Example
```php
    $options['configuration_set_id'] = 'configuration_set_id_example'; // string | Alphanumeric string identifying a WAF configuration set.
$options['request_body'] = {"data":[{"id":"w4Fg2uUGZzb2W9Euo4m0Or","type":"waf"},{"id":"w4Fg2uUGZzb2W9Euo5q2Az","type":"waf"}]}; // array<string,object>

try {
    $result = $apiInstance->useWafConfigSet($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafConfigurationSetsApi->useWafConfigSet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**configuration_set_id** | **string** | Alphanumeric string identifying a WAF configuration set. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
