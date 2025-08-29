# Fastly\Api\KvStoreApi


```php
$apiInstance = new Fastly\Api\KvStoreApi(
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
[**kvStoreCreate()**](KvStoreApi.md#kvStoreCreate) | **POST** /resources/stores/kv | Create a KV store.
[**kvStoreDelete()**](KvStoreApi.md#kvStoreDelete) | **DELETE** /resources/stores/kv/{store_id} | Delete a KV store.
[**kvStoreGet()**](KvStoreApi.md#kvStoreGet) | **GET** /resources/stores/kv/{store_id} | Describe a KV store.
[**kvStoreList()**](KvStoreApi.md#kvStoreList) | **GET** /resources/stores/kv | List all KV stores.


## `kvStoreCreate()`

```php
kvStoreCreate($options): \Fastly\Model\KvStoreDetails // Create a KV store.
```

Create a KV store.

### Example
```php
    $options['location'] = 'location_example'; // string
$options['kv_store_request_create'] = {"name":"my-store"}; // \Fastly\Model\KvStoreRequestCreate

try {
    $result = $apiInstance->kvStoreCreate($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->kvStoreCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**location** | **string** |  | [optional] [one of: 'US', 'EU', 'ASIA', 'AUS']
**kv_store_request_create** | [**\Fastly\Model\KvStoreRequestCreate**](../Model/KvStoreRequestCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\KvStoreDetails**](../Model/KvStoreDetails.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `kvStoreDelete()`

```php
kvStoreDelete($options) // Delete a KV store.
```

A KV store must be empty before it can be deleted. Attempting to delete a KV store that contains items will result in a response with a `409` status code.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $apiInstance->kvStoreDelete($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->kvStoreDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `kvStoreGet()`

```php
kvStoreGet($options): \Fastly\Model\KvStoreDetails // Describe a KV store.
```

Get details of a KV store.

### Example
```php
    $options['store_id'] = 'store_id_example'; // string

try {
    $result = $apiInstance->kvStoreGet($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->kvStoreGet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**store_id** | **string** |  |

### Return type

[**\Fastly\Model\KvStoreDetails**](../Model/KvStoreDetails.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `kvStoreList()`

```php
kvStoreList($options): \Fastly\Model\InlineResponse2005 // List all KV stores.
```

List all KV stores.

### Example
```php
    $options['cursor'] = 'cursor_example'; // string
$options['limit'] = 1000; // int
$options['name'] = 'name_example'; // string | Returns a one-element array containing the details for the named KV store.

try {
    $result = $apiInstance->kvStoreList($options);
} catch (Exception $e) {
    echo 'Exception when calling KvStoreApi->kvStoreList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**cursor** | **string** |  | [optional]
**limit** | **int** |  | [optional] [defaults to 1000]
**name** | **string** | Returns a one-element array containing the details for the named KV store. | [optional]

### Return type

[**\Fastly\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
