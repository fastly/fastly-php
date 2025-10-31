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
[**iamV1RolesGet()**](IamRolesApi.md#iamV1RolesGet) | **GET** /iam/v1/roles/{role_id} | Get IAM role by ID
[**iamV1RolesList()**](IamRolesApi.md#iamV1RolesList) | **GET** /iam/v1/roles | List IAM roles


## `iamV1RolesGet()`

```php
iamV1RolesGet($options): \Fastly\Model\IamV1RoleResponse // Get IAM role by ID
```

Retrieve a single IAM role by its unique identifier.

### Example
```php
    $options['role_id'] = Q4rXe9vN1szK8a2fUjYtWp; // string | Alphanumeric string identifying the role.
$options['include'] = 'include_example'; // string | Include related data (i.e., permissions).

try {
    $result = $apiInstance->iamV1RolesGet($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->iamV1RolesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**role_id** | **string** | Alphanumeric string identifying the role. |
**include** | **string** | Include related data (i.e., permissions). | [optional] [one of: 'permissions']

### Return type

[**\Fastly\Model\IamV1RoleResponse**](../Model/IamV1RoleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `iamV1RolesList()`

```php
iamV1RolesList($options): \Fastly\Model\IamV1RoleListResponse // List IAM roles
```

Retrieve a paginated list of IAM roles available in the account.

### Example
```php
    $options['limit'] = 100; // int | Number of results per page. The maximum is 1000.
$options['cursor'] = 'cursor_example'; // string | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty.

try {
    $result = $apiInstance->iamV1RolesList($options);
} catch (Exception $e) {
    echo 'Exception when calling IamRolesApi->iamV1RolesList: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**limit** | **int** | Number of results per page. The maximum is 1000. | [optional] [defaults to 100]
**cursor** | **string** | Cursor value from the `next_cursor` field of a previous response, used to retrieve the next page. To request the first page, this should be empty. | [optional]

### Return type

[**\Fastly\Model\IamV1RoleListResponse**](../Model/IamV1RoleListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
