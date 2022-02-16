# Fastly\Api\IamServiceGroupsApi


```php
$apiInstance = new Fastly\Api\IamServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteAServiceGroup()**](IamServiceGroupsApi.md#deleteAServiceGroup) | **DELETE** /service-groups/{service_group_id} | Delete a service group
[**getAServiceGroup()**](IamServiceGroupsApi.md#getAServiceGroup) | **GET** /service-groups/{service_group_id} | Get a service group
[**listServiceGroupServices()**](IamServiceGroupsApi.md#listServiceGroupServices) | **GET** /service-groups/{service_group_id}/services | List services to a service group
[**listServiceGroups()**](IamServiceGroupsApi.md#listServiceGroups) | **GET** /service-groups | List service groups


## `deleteAServiceGroup()`

```php
deleteAServiceGroup($options) // Delete a service group
```

Delete a service group.

### Example
```php
try {
    $apiInstance->deleteAServiceGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->deleteAServiceGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_group_id** | **string** | Alphanumeric string identifying the service group. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAServiceGroup()`

```php
getAServiceGroup($options): object // Get a service group
```

Get a service group.

### Example
```php
try {
    $result = $apiInstance->getAServiceGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->getAServiceGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_group_id** | **string** | Alphanumeric string identifying the service group. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServiceGroupServices()`

```php
listServiceGroupServices($options): object // List services to a service group
```

List services to a service group.

### Example
```php
try {
    $result = $apiInstance->listServiceGroupServices($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->listServiceGroupServices: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_group_id** | **string** | Alphanumeric string identifying the service group. |
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**page** | **int** | Current page. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listServiceGroups()`

```php
listServiceGroups($options): object // List service groups
```

List all service groups.

### Example
```php
try {
    $result = $apiInstance->listServiceGroups($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->listServiceGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**page** | **int** | Current page. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
