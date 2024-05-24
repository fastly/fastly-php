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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**addUserGroupMembers()**](IamUserGroupsApi.md#addUserGroupMembers) | **POST** /user-groups/{user_group_id}/members | Add members to a user group
[**addUserGroupRoles()**](IamUserGroupsApi.md#addUserGroupRoles) | **POST** /user-groups/{user_group_id}/roles | Add roles to a user group
[**addUserGroupServiceGroups()**](IamUserGroupsApi.md#addUserGroupServiceGroups) | **POST** /user-groups/{user_group_id}/service-groups | Add service groups to a user group
[**createAUserGroup()**](IamUserGroupsApi.md#createAUserGroup) | **POST** /user-groups | Create a user group
[**deleteAUserGroup()**](IamUserGroupsApi.md#deleteAUserGroup) | **DELETE** /user-groups/{user_group_id} | Delete a user group
[**getAUserGroup()**](IamUserGroupsApi.md#getAUserGroup) | **GET** /user-groups/{user_group_id} | Get a user group
[**listUserGroupMembers()**](IamUserGroupsApi.md#listUserGroupMembers) | **GET** /user-groups/{user_group_id}/members | List members of a user group
[**listUserGroupRoles()**](IamUserGroupsApi.md#listUserGroupRoles) | **GET** /user-groups/{user_group_id}/roles | List roles in a user group
[**listUserGroupServiceGroups()**](IamUserGroupsApi.md#listUserGroupServiceGroups) | **GET** /user-groups/{user_group_id}/service-groups | List service groups in a user group
[**listUserGroups()**](IamUserGroupsApi.md#listUserGroups) | **GET** /user-groups | List user groups
[**removeUserGroupMembers()**](IamUserGroupsApi.md#removeUserGroupMembers) | **DELETE** /user-groups/{user_group_id}/members | Remove members of a user group
[**removeUserGroupRoles()**](IamUserGroupsApi.md#removeUserGroupRoles) | **DELETE** /user-groups/{user_group_id}/roles | Remove roles from a user group
[**removeUserGroupServiceGroups()**](IamUserGroupsApi.md#removeUserGroupServiceGroups) | **DELETE** /user-groups/{user_group_id}/service-groups | Remove service groups from a user group
[**updateAUserGroup()**](IamUserGroupsApi.md#updateAUserGroup) | **PATCH** /user-groups/{user_group_id} | Update a user group


## `addUserGroupMembers()`

```php
addUserGroupMembers($options): object // Add members to a user group
```

Add members to a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['request_body'] = {"members":[{"id":"0QbayrOodFILsM58jum2nt","object":"user"},{"id":"5QoWSdPgkxvL9eoDMXRDr4","object":"invitation"}]}; // array<string,object>

try {
    $result = $apiInstance->addUserGroupMembers($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->addUserGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `addUserGroupRoles()`

```php
addUserGroupRoles($options): object // Add roles to a user group
```

Add roles to a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['request_body'] = {"roles":[{"id":"0QbayrOodFILsM58jum2nt"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $result = $apiInstance->addUserGroupRoles($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->addUserGroupRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `addUserGroupServiceGroups()`

```php
addUserGroupServiceGroups($options): object // Add service groups to a user group
```

Add service groups to a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['request_body'] = {"service_groups":[{"id":"0QbayrOodFILsM58jum2nt"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $result = $apiInstance->addUserGroupServiceGroups($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->addUserGroupServiceGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createAUserGroup()`

```php
createAUserGroup($options): object // Create a user group
```

Create a user group.

### Example
```php
    $options['request_body'] = {"name":"Security Engineers"}; // array<string,object>

try {
    $result = $apiInstance->createAUserGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->createAUserGroup: ', $e->getMessage(), PHP_EOL;
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

## `removeUserGroupMembers()`

```php
removeUserGroupMembers($options) // Remove members of a user group
```

Remove members of a user group

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['request_body'] = {"members":[{"id":"0QbayrOodFILsM58jum2nt","object":"user"},{"id":"5QoWSdPgkxvL9eoDMXRDr4","object":"invitation"}]}; // array<string,object>

try {
    $apiInstance->removeUserGroupMembers($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->removeUserGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `removeUserGroupRoles()`

```php
removeUserGroupRoles($options) // Remove roles from a user group
```

Remove roles from a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['request_body'] = {"roles":[{"id":"2bxSauWWdQ5Hmg2d7WQiPU"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $apiInstance->removeUserGroupRoles($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->removeUserGroupRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `removeUserGroupServiceGroups()`

```php
removeUserGroupServiceGroups($options) // Remove service groups from a user group
```

Remove service groups from a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['request_body'] = {"service_groups":[{"id":"0QbayrOodFILsM58jum2nt"},{"id":"5QoWSdPgkxvL9eoDMXRDr4"}]}; // array<string,object>

try {
    $apiInstance->removeUserGroupServiceGroups($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->removeUserGroupServiceGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateAUserGroup()`

```php
updateAUserGroup($options): object // Update a user group
```

Update a user group.

### Example
```php
    $options['user_group_id'] = 'user_group_id_example'; // string | Alphanumeric string identifying the user group.
$options['request_body'] = {"name":"Security Engineers","description":"Managing security on staging and production services."}; // array<string,object>

try {
    $result = $apiInstance->updateAUserGroup($options);
} catch (Exception $e) {
    echo 'Exception when calling IamUserGroupsApi->updateAUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_group_id** | **string** | Alphanumeric string identifying the user group. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
