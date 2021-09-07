# Fastly\Api\UserApi


```php
$apiInstance = new Fastly\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createUser()**](UserApi.md#createUser) | **POST** /user | Create a user
[**deleteUser()**](UserApi.md#deleteUser) | **DELETE** /user/{user_id} | Delete a user
[**getCurrentUser()**](UserApi.md#getCurrentUser) | **GET** /current_user | Get the current user
[**getUser()**](UserApi.md#getUser) | **GET** /user/{user_id} | Get a user
[**requestPasswordReset()**](UserApi.md#requestPasswordReset) | **POST** /user/{user_login}/password/request_reset | Request a password reset
[**updateUser()**](UserApi.md#updateUser) | **PUT** /user/{user_id} | Update a user
[**updateUserPassword()**](UserApi.md#updateUserPassword) | **POST** /current_user/password | Update the user&#39;s password


## `createUser()`

```php
createUser($options): \Fastly\Model\UserResponse // Create a user
```

Create a user.

### Example
```php
try {
    $result = $apiInstance->createUser($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**limit_services** | **bool** | Indicates that the user has limited access to the customer&#39;s services. | [optional]
**locked** | **bool** | Indicates whether the is account is locked for editing or not. | [optional]
**login** | **string** | The login associated with the user (typically, an email address). | [optional]
**name** | **string** | The real life name of the user. | [optional]
**require_new_password** | **bool** | Indicates if a new password is required at next login. | [optional]
**role** | [**\Fastly\Model\RoleUser**](../Model/RoleUser.md) |  | [optional]
**two_factor_auth_enabled** | **bool** | Indicates if 2FA is enabled on the user. | [optional]
**two_factor_setup_required** | **bool** | Indicates if 2FA is required by the user&#39;s customer account. | [optional]

### Return type

[**\Fastly\Model\UserResponse**](../Model/UserResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($options): object // Delete a user
```

Delete a user.

### Example
```php
try {
    $result = $apiInstance->deleteUser($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_id** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getCurrentUser()`

```php
getCurrentUser($options): \Fastly\Model\UserResponse // Get the current user
```

Get the logged in user.

### Example
```php
try {
    $result = $apiInstance->getCurrentUser($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameter.

### Return type

[**\Fastly\Model\UserResponse**](../Model/UserResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($options): \Fastly\Model\UserResponse // Get a user
```

Get a specific user.

### Example
```php
try {
    $result = $apiInstance->getUser($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_id** | **string** |  |

### Return type

[**\Fastly\Model\UserResponse**](../Model/UserResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `requestPasswordReset()`

```php
requestPasswordReset($options): object // Request a password reset
```

Requests a password reset for the specified user.

### Example
```php
try {
    $result = $apiInstance->requestPasswordReset($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->requestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_login** | **string** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($options): \Fastly\Model\UserResponse // Update a user
```

Update a user. Only users with the role of `superuser` can make changes to other users on the account. Non-superusers may use this endpoint to make changes to their own account. Modifications to `login` email require a valid password in the request body. Two-factor attributes are not editable via this endpoint.

### Example
```php
try {
    $result = $apiInstance->updateUser($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**user_id** | **string** |  |
**limit_services** | **bool** | Indicates that the user has limited access to the customer&#39;s services. | [optional]
**locked** | **bool** | Indicates whether the is account is locked for editing or not. | [optional]
**login** | **string** | The login associated with the user (typically, an email address). | [optional]
**name** | **string** | The real life name of the user. | [optional]
**require_new_password** | **bool** | Indicates if a new password is required at next login. | [optional]
**role** | [**\Fastly\Model\RoleUser**](../Model/RoleUser.md) |  | [optional]
**two_factor_auth_enabled** | **bool** | Indicates if 2FA is enabled on the user. | [optional]
**two_factor_setup_required** | **bool** | Indicates if 2FA is required by the user&#39;s customer account. | [optional]

### Return type

[**\Fastly\Model\UserResponse**](../Model/UserResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateUserPassword()`

```php
updateUserPassword($options): \Fastly\Model\UserResponse // Update the user's password
```

Update the user's password to a new one.

### Example
```php
try {
    $result = $apiInstance->updateUserPassword($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**new_password** | **string** | The user&#39;s new password. | [optional]
**old_password** | **string** | The user&#39;s current password. | [optional]

### Return type

[**\Fastly\Model\UserResponse**](../Model/UserResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
