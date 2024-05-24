# Fastly\Api\AclApi


```php
$apiInstance = new Fastly\Api\AclApi(
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
[**createAcl()**](AclApi.md#createAcl) | **POST** /service/{service_id}/version/{version_id}/acl | Create a new ACL
[**deleteAcl()**](AclApi.md#deleteAcl) | **DELETE** /service/{service_id}/version/{version_id}/acl/{acl_name} | Delete an ACL
[**getAcl()**](AclApi.md#getAcl) | **GET** /service/{service_id}/version/{version_id}/acl/{acl_name} | Describe an ACL
[**listAcls()**](AclApi.md#listAcls) | **GET** /service/{service_id}/version/{version_id}/acl | List ACLs
[**updateAcl()**](AclApi.md#updateAcl) | **PUT** /service/{service_id}/version/{version_id}/acl/{acl_name} | Update an ACL


## `createAcl()`

```php
createAcl($options): \Fastly\Model\AclResponse // Create a new ACL
```

Create a new ACL attached to the specified service version. A new, empty ACL must be attached to a draft version of a service. The version associated with the ACL must be activated to be used.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['name'] = 'name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace.

try {
    $result = $apiInstance->createAcl($options);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->createAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. | [optional]

### Return type

[**\Fastly\Model\AclResponse**](../Model/AclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteAcl()`

```php
deleteAcl($options): \Fastly\Model\InlineResponse200 // Delete an ACL
```

Delete an ACL from the specified service version. To remove an ACL from use, the ACL must be deleted from a draft version and the version without the ACL must be activated.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['acl_name'] = 'acl_name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace.

try {
    $result = $apiInstance->deleteAcl($options);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->deleteAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**acl_name** | **string** | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAcl()`

```php
getAcl($options): \Fastly\Model\AclResponse // Describe an ACL
```

Retrieve a single ACL by name for the version and service.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['acl_name'] = 'acl_name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace.

try {
    $result = $apiInstance->getAcl($options);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->getAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**acl_name** | **string** | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. |

### Return type

[**\Fastly\Model\AclResponse**](../Model/AclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listAcls()`

```php
listAcls($options): \Fastly\Model\AclResponse[] // List ACLs
```

List ACLs.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->listAcls($options);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->listAcls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\AclResponse[]**](../Model/AclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateAcl()`

```php
updateAcl($options): \Fastly\Model\AclResponse // Update an ACL
```

Update an ACL for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['acl_name'] = 'acl_name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace.
$options['name'] = 'name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace.

try {
    $result = $apiInstance->updateAcl($options);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->updateAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**acl_name** | **string** | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. |
**name** | **string** | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. | [optional]

### Return type

[**\Fastly\Model\AclResponse**](../Model/AclResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
