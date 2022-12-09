# Fastly\Api\IamUserGroupsApi


```php
$apiInstance = new Fastly\Api\IamUserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteAUserGroup()**](IamUserGroupsApi.md#deleteAUserGroup) | **DELETE** /user-groups/{user_group_id} | Delete a user group
[**getAUserGroup()**](IamUserGroupsApi.md#getAUserGroup) | **GET** /user-groups/{user_group_id} | Get a user group
[**listUserGroupMembers()**](IamUserGroupsApi.md#listUserGroupMembers) | **GET** /user-groups/{user_group_id}/members | List members of a user group
[**listUserGroupRoles()**](IamUserGroupsApi.md#listUserGroupRoles) | **GET** /user-groups/{user_group_id}/roles | List roles in a user group
[**listUserGroupServiceGroups()**](IamUserGroupsApi.md#listUserGroupServiceGroups) | **GET** /user-groups/{user_group_id}/service-groups | List service groups in a user group
[**listUserGroups()**](IamUserGroupsApi.md#listUserGroups) | **GET** /user-groups | List user groups


## `deleteAUserGroup()`

```php
deleteAUserGroup($options) // Delete a user group
```

Delete a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.

try {
    $apiInstance->deleteAUserGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->deleteAUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAUserGroup()`

```php
getAUserGroup($options): object // Get a user group
```

Get a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.

try {
    $result = $apiInstance->getAUserGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->getAUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listUserGroupMembers()`

```php
listUserGroupMembers($options): object // List members of a user group
```

List members of a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['per_page'] = 20; // int | Number of records per page.
$options['page'] = 1; // int | Current page.

try {
    $result = $apiInstance->listUserGroupMembers($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->listUserGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**page** | **int** | Current page. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listUserGroupRoles()`

```php
listUserGroupRoles($options): object // List roles in a user group
```

List roles in a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['per_page'] = 20; // int | Number of records per page.
$options['page'] = 1; // int | Current page.

try {
    $result = $apiInstance->listUserGroupRoles($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->listUserGroupRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**page** | **int** | Current page. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listUserGroupServiceGroups()`

```php
listUserGroupServiceGroups($options): object // List service groups in a user group
```

List service groups in a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['per_page'] = 20; // int | Number of records per page.
$options['page'] = 1; // int | Current page.

try {
    $result = $apiInstance->listUserGroupServiceGroups($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->listUserGroupServiceGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**page** | **int** | Current page. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listUserGroups()`

```php
listUserGroups($options): object // List user groups
```

List all user groups.

### Example
```php
    $options['per_page'] = 20; // int | Number of records per page.
$options['page'] = 1; // int | Current page.

try {
    $result = $apiInstance->listUserGroups($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->listUserGroups: ', $e->getMessage(), PHP_EOL;
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
