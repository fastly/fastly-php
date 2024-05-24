# Fastly\Api\DictionaryApi


```php
$apiInstance = new Fastly\Api\DictionaryApi(
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
[**createDictionary()**](DictionaryApi.md#createDictionary) | **POST** /service/{service_id}/version/{version_id}/dictionary | Create an edge dictionary
[**deleteDictionary()**](DictionaryApi.md#deleteDictionary) | **DELETE** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Delete an edge dictionary
[**getDictionary()**](DictionaryApi.md#getDictionary) | **GET** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Get an edge dictionary
[**listDictionaries()**](DictionaryApi.md#listDictionaries) | **GET** /service/{service_id}/version/{version_id}/dictionary | List edge dictionaries
[**updateDictionary()**](DictionaryApi.md#updateDictionary) | **PUT** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Update an edge dictionary


## `createDictionary()`

```php
createDictionary($options): \Fastly\Model\DictionaryResponse // Create an edge dictionary
```

Create named dictionary for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace).
$options['write_only'] = false; // bool | Determines if items in the dictionary are readable or not.

try {
    $result = $apiInstance->createDictionary($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->createDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace). | [optional]
**write_only** | **bool** | Determines if items in the dictionary are readable or not. | [optional] [defaults to false]

### Return type

[**\Fastly\Model\DictionaryResponse**](../Model/DictionaryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDictionary()`

```php
deleteDictionary($options): \Fastly\Model\InlineResponse200 // Delete an edge dictionary
```

Delete named dictionary for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['dictionary_name'] = 'dictionary_name_example'; // string | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace).

try {
    $result = $apiInstance->deleteDictionary($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->deleteDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**dictionary_name** | **string** | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace). |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDictionary()`

```php
getDictionary($options): \Fastly\Model\DictionaryResponse // Get an edge dictionary
```

Retrieve a single dictionary by name for the version and service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['dictionary_name'] = 'dictionary_name_example'; // string | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace).

try {
    $result = $apiInstance->getDictionary($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->getDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**dictionary_name** | **string** | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace). |

### Return type

[**\Fastly\Model\DictionaryResponse**](../Model/DictionaryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDictionaries()`

```php
listDictionaries($options): \Fastly\Model\DictionaryResponse[] // List edge dictionaries
```

List all dictionaries for the version of the service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listDictionaries($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->listDictionaries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\DictionaryResponse[]**](../Model/DictionaryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDictionary()`

```php
updateDictionary($options): \Fastly\Model\DictionaryResponse // Update an edge dictionary
```

Update named dictionary for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['dictionary_name'] = 'dictionary_name_example'; // string | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace).
$options['name'] = 'name_example'; // string | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace).
$options['write_only'] = false; // bool | Determines if items in the dictionary are readable or not.

try {
    $result = $apiInstance->updateDictionary($options);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->updateDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**dictionary_name** | **string** | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace). |
**name** | **string** | Name for the Dictionary (must start with an alphabetic character and can contain only alphanumeric characters, underscores, and whitespace). | [optional]
**write_only** | **bool** | Determines if items in the dictionary are readable or not. | [optional] [defaults to false]

### Return type

[**\Fastly\Model\DictionaryResponse**](../Model/DictionaryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
