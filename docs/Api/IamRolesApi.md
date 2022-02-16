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

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteARole()**](IamRolesApi.md#deleteARole) | **DELETE** /roles/{role_id} | Delete a role
[**getARole()**](IamRolesApi.md#getARole) | **GET** /roles/{role_id} | Get a role
[**listRolePermissions()**](IamRolesApi.md#listRolePermissions) | **GET** /roles/{role_id}/permissions | List permissions in a role
[**listRoles()**](IamRolesApi.md#listRoles) | **GET** /roles | List roles


## `deleteARole()`

```php
deleteARole($options) // Delete a role
```

Delete a role.

### Example
```php
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
