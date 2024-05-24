# Fastly\Api\ConfigStoreApi


```php
$apiInstance = new Fastly\Api\ConfigStoreApi(
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
[**createConfigStore()**](ConfigStoreApi.md#createConfigStore) | **POST** /resources/stores/config | Create a config store
[**deleteConfigStore()**](ConfigStoreApi.md#deleteConfigStore) | **DELETE** /resources/stores/config/{config_store_id} | Delete a config store
[**getConfigStore()**](ConfigStoreApi.md#getConfigStore) | **GET** /resources/stores/config/{config_store_id} | Describe a config store
[**getConfigStoreInfo()**](ConfigStoreApi.md#getConfigStoreInfo) | **GET** /resources/stores/config/{config_store_id}/info | Get config store metadata
[**listConfigStoreServices()**](ConfigStoreApi.md#listConfigStoreServices) | **GET** /resources/stores/config/{config_store_id}/services | List linked services
[**listConfigStores()**](ConfigStoreApi.md#listConfigStores) | **GET** /resources/stores/config | List config stores
[**updateConfigStore()**](ConfigStoreApi.md#updateConfigStore) | **PUT** /resources/stores/config/{config_store_id} | Update a config store


## `createConfigStore()`

```php
createConfigStore($options): \Fastly\Model\ConfigStoreResponse // Create a config store
```

Create a config store.

### Example
```php
    $options['name'] = 'name_example'; // string | The name of the config store.

try {
    $result = $apiInstance->createConfigStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreApi->createConfigStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**name** | **string** | The name of the config store. | [optional]

### Return type

[**\Fastly\Model\ConfigStoreResponse**](../Model/ConfigStoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteConfigStore()`

```php
deleteConfigStore($options): \Fastly\Model\InlineResponse200 // Delete a config store
```

Delete a config store.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.

try {
    $result = $apiInstance->deleteConfigStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreApi->deleteConfigStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getConfigStore()`

```php
getConfigStore($options): \Fastly\Model\ConfigStoreResponse // Describe a config store
```

Describe a config store by its identifier.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.

try {
    $result = $apiInstance->getConfigStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreApi->getConfigStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |

### Return type

[**\Fastly\Model\ConfigStoreResponse**](../Model/ConfigStoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getConfigStoreInfo()`

```php
getConfigStoreInfo($options): \Fastly\Model\ConfigStoreInfoResponse // Get config store metadata
```

Retrieve metadata for a single config store.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.

try {
    $result = $apiInstance->getConfigStoreInfo($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreApi->getConfigStoreInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |

### Return type

[**\Fastly\Model\ConfigStoreInfoResponse**](../Model/ConfigStoreInfoResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listConfigStoreServices()`

```php
listConfigStoreServices($options): object // List linked services
```

List services linked to a config store

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.

try {
    $result = $apiInstance->listConfigStoreServices($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreApi->listConfigStoreServices: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listConfigStores()`

```php
listConfigStores($options): \Fastly\Model\ConfigStoreResponse[] // List config stores
```

List config stores.

### Example
```php
    $options['name'] = 'name_example'; // string | Returns a one-element array containing the details for the named config store.

try {
    $result = $apiInstance->listConfigStores($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreApi->listConfigStores: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**name** | **string** | Returns a one-element array containing the details for the named config store. | [optional]

### Return type

[**\Fastly\Model\ConfigStoreResponse[]**](../Model/ConfigStoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateConfigStore()`

```php
updateConfigStore($options): \Fastly\Model\ConfigStoreResponse // Update a config store
```

Update a config store.

### Example
```php
    $options['config_store_id'] = 'config_store_id_example'; // string | An alphanumeric string identifying the config store.
$options['name'] = 'name_example'; // string | The name of the config store.

try {
    $result = $apiInstance->updateConfigStore($options);
} catch (Exception $e) {
    echo 'Exception when calling ConfigStoreApi->updateConfigStore: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**config_store_id** | **string** | An alphanumeric string identifying the config store. |
**name** | **string** | The name of the config store. | [optional]

### Return type

[**\Fastly\Model\ConfigStoreResponse**](../Model/ConfigStoreResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
