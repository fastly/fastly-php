# Fastly\Api\IamRolesApi


```php
$apiInstance = new Fastly\Api\IamRolesApi(
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
[**addRolePermissions()**](IamRolesApi.md#addRolePermissions) | **POST** /roles/{role_id}/permissions | Add permissions to a role
[**createARole()**](IamRolesApi.md#createARole) | **POST** /roles | Create a role
[**deleteARole()**](IamRolesApi.md#deleteARole) | **DELETE** /roles/{role_id} | Delete a role
[**getARole()**](IamRolesApi.md#getARole) | **GET** /roles/{role_id} | Get a role
[**listRolePermissions()**](IamRolesApi.md#listRolePermissions) | **GET** /roles/{role_id}/permissions | List permissions in a role
[**listRoles()**](IamRolesApi.md#listRoles) | **GET** /roles | List roles
[**removeRolePermissions()**](IamRolesApi.md#removeRolePermissions) | **DELETE** /roles/{role_id}/permissions | Remove permissions from a role
[**updateARole()**](IamRolesApi.md#updateARole) | **PATCH** /roles/{role_id} | Update a role


## `addRolePermissions()`

```php
addRolePermissions($options): object // Add permissions to a role
```

Add permissions to a role.

### Example
```php
    $options['role_id'] = 'role_id_example'; // string | Alphanumeric string identifying the role.
$options['request_body'] = {"permissions":[{"id":"2bxSauWWdQ5Hmg2d7WQiPU"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $result = $apiInstance->addRolePermissions($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->addRolePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**role_id** | **string** | Alphanumeric string identifying the role. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createARole()`

```php
createARole($options): object // Create a role
```

Create a role.

### Example
```php
    $options['request_body'] = {"name":"Security Engineer"}; // array<string,object>

try {
    $result = $apiInstance->createARole($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->createARole: ', $e->getMessage(), PHP_EOL;
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

## `deleteARole()`

```php
deleteARole($options) // Delete a role
```

Delete a role.

### Example
```php
    $options['role_id'] = 'role_id_example'; // string | Alphanumeric string identifying the role.

try {
    $apiInstance->deleteARole($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->deleteARole: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**role_id** | **string** | Alphanumeric string identifying the role. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getARole()`

```php
getARole($options): object // Get a role
```

Get a role.

### Example
```php
    $options['role_id'] = 'role_id_example'; // string | Alphanumeric string identifying the role.

try {
    $result = $apiInstance->getARole($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->getARole: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**role_id** | **string** | Alphanumeric string identifying the role. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listRolePermissions()`

```php
listRolePermissions($options): object // List permissions in a role
```

List all permissions in a role.

### Example
```php
    $options['role_id'] = 'role_id_example'; // string | Alphanumeric string identifying the role.

try {
    $result = $apiInstance->listRolePermissions($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->listRolePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**role_id** | **string** | Alphanumeric string identifying the role. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listRoles()`

```php
listRoles($options): object // List roles
```

List all roles.

### Example
```php
    $options['per_page'] = 20; // int | Number of records per page.
$options['page'] = 1; // int | Current page.

try {
    $result = $apiInstance->listRoles($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->listRoles: ', $e->getMessage(), PHP_EOL;
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

## `removeRolePermissions()`

```php
removeRolePermissions($options) // Remove permissions from a role
```

Remove permissions from a role.

### Example
```php
    $options['role_id'] = 'role_id_example'; // string | Alphanumeric string identifying the role.
$options['request_body'] = {"permissions":[{"id":"2bxSauWWdQ5Hmg2d7WQiPU"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $apiInstance->removeRolePermissions($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->removeRolePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**role_id** | **string** | Alphanumeric string identifying the role. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateARole()`

```php
updateARole($options): object // Update a role
```

Update a role.

### Example
```php
    $options['role_id'] = 'role_id_example'; // string | Alphanumeric string identifying the role.
$options['request_body'] = {"name":"Account Manager","description":"Manage users."}; // array<string,object>

try {
    $result = $apiInstance->updateARole($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->updateARole: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**role_id** | **string** | Alphanumeric string identifying the role. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
