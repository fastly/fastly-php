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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**addServiceGroupServices()**](IamServiceGroupsApi.md#addServiceGroupServices) | **POST** /service-groups/{service_group_id}/services | Add services in a service group
[**createAServiceGroup()**](IamServiceGroupsApi.md#createAServiceGroup) | **POST** /service-groups | Create a service group
[**deleteAServiceGroup()**](IamServiceGroupsApi.md#deleteAServiceGroup) | **DELETE** /service-groups/{service_group_id} | Delete a service group
[**getAServiceGroup()**](IamServiceGroupsApi.md#getAServiceGroup) | **GET** /service-groups/{service_group_id} | Get a service group
[**listServiceGroupServices()**](IamServiceGroupsApi.md#listServiceGroupServices) | **GET** /service-groups/{service_group_id}/services | List services to a service group
[**listServiceGroups()**](IamServiceGroupsApi.md#listServiceGroups) | **GET** /service-groups | List service groups
[**removeServiceGroupServices()**](IamServiceGroupsApi.md#removeServiceGroupServices) | **DELETE** /service-groups/{service_group_id}/services | Remove services from a service group
[**updateAServiceGroup()**](IamServiceGroupsApi.md#updateAServiceGroup) | **PATCH** /service-groups/{service_group_id} | Update a service group


## `addServiceGroupServices()`

```php
addServiceGroupServices($options): object // Add services in a service group
```

Add services in a service group.

### Example
```php
    $options['service_group_id'] = 'service_group_id_example'; // string | Alphanumeric string identifying the service group.
$options['request_body'] = {"services":[{"id":"0QbayrOodFILsM58jum2nt"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $result = $apiInstance->addServiceGroupServices($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->addServiceGroupServices: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_group_id** | **string** | Alphanumeric string identifying the service group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createAServiceGroup()`

```php
createAServiceGroup($options): object // Create a service group
```

Create a service group.

### Example
```php
    $options['request_body'] = {"name":"Prod Services"}; // array<string,object>

try {
    $result = $apiInstance->createAServiceGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->createAServiceGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteAServiceGroup()`

```php
deleteAServiceGroup($options) // Delete a service group
```

Delete a service group.

### Example
```php
    $options['service_group_id'] = 'service_group_id_example'; // string | Alphanumeric string identifying the service group.

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
    $options['service_group_id'] = 'service_group_id_example'; // string | Alphanumeric string identifying the service group.

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
    $options['service_group_id'] = 'service_group_id_example'; // string | Alphanumeric string identifying the service group.
$options['per_page'] = 20; // int | Number of records per page.
$options['page'] = 1; // int | Current page.

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
    $options['per_page'] = 20; // int | Number of records per page.
$options['page'] = 1; // int | Current page.

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

## `removeServiceGroupServices()`

```php
removeServiceGroupServices($options) // Remove services from a service group
```

Remove services from a service group.

### Example
```php
    $options['service_group_id'] = 'service_group_id_example'; // string | Alphanumeric string identifying the service group.
$options['request_body'] = {"services":[{"id":"0QbayrOodFILsM58jum2nt"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $apiInstance->removeServiceGroupServices($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->removeServiceGroupServices: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_group_id** | **string** | Alphanumeric string identifying the service group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateAServiceGroup()`

```php
updateAServiceGroup($options): object // Update a service group
```

Update a service group.

### Example
```php
    $options['service_group_id'] = 'service_group_id_example'; // string | Alphanumeric string identifying the service group.
$options['request_body'] = {"name":"Prod Services","description":"Services running in the production environment."}; // array<string,object>

try {
    $result = $apiInstance->updateAServiceGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamServiceGroupsApi->updateAServiceGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_group_id** | **string** | Alphanumeric string identifying the service group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
