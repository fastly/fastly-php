# Fastly\Api\AclsInComputeApi


```php
$apiInstance = new Fastly\Api\AclsInComputeApi(
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
[**computeAclCreateAcls()**](AclsInComputeApi.md#computeAclCreateAcls) | **POST** /resources/acls | Create a new ACL
[**computeAclDeleteSAclId()**](AclsInComputeApi.md#computeAclDeleteSAclId) | **DELETE** /resources/acls/{acl_id} | Delete an ACL
[**computeAclListAclEntries()**](AclsInComputeApi.md#computeAclListAclEntries) | **GET** /resources/acls/{acl_id}/entries | List an ACL
[**computeAclListAcls()**](AclsInComputeApi.md#computeAclListAcls) | **GET** /resources/acls | List ACLs
[**computeAclListAclsSAclId()**](AclsInComputeApi.md#computeAclListAclsSAclId) | **GET** /resources/acls/{acl_id} | Describe an ACL
[**computeAclLookupAcls()**](AclsInComputeApi.md#computeAclLookupAcls) | **GET** /resources/acls/{acl_id}/entry/{acl_ip} | Lookup an ACL
[**computeAclUpdateAcls()**](AclsInComputeApi.md#computeAclUpdateAcls) | **PATCH** /resources/acls/{acl_id}/entries | Update an ACL


## `computeAclCreateAcls()`

```php
computeAclCreateAcls($options): \Fastly\Model\ComputeAclCreateAclsResponse // Create a new ACL
```

Create a new ACL.

### Example
```php
    $options['compute_acl_create_acls_request'] = new \Fastly\Model\ComputeAclCreateAclsRequest(); // \Fastly\Model\ComputeAclCreateAclsRequest

try {
    $result = $apiInstance->computeAclCreateAcls($options);
} catch (Exception $e) {
    echo 'Exception when calling AclsInComputeApi->computeAclCreateAcls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**compute_acl_create_acls_request** | [**\Fastly\Model\ComputeAclCreateAclsRequest**](../Model/ComputeAclCreateAclsRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\ComputeAclCreateAclsResponse**](../Model/ComputeAclCreateAclsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `computeAclDeleteSAclId()`

```php
computeAclDeleteSAclId($options) // Delete an ACL
```

Delete an ACL.

### Example
```php
    $options['acl_id'] = 'acl_id_example'; // string

try {
    $apiInstance->computeAclDeleteSAclId($options);
} catch (Exception $e) {
    echo 'Exception when calling AclsInComputeApi->computeAclDeleteSAclId: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**acl_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `computeAclListAclEntries()`

```php
computeAclListAclEntries($options): \Fastly\Model\ComputeAclListEntries // List an ACL
```

List an ACL.

### Example
```php
    $options['acl_id'] = 'acl_id_example'; // string
$options['cursor'] = 'cursor_example'; // string
$options['limit'] = 100; // int

try {
    $result = $apiInstance->computeAclListAclEntries($options);
} catch (Exception $e) {
    echo 'Exception when calling AclsInComputeApi->computeAclListAclEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**acl_id** | **string** |  |
**cursor** | **string** |  | [optional]
**limit** | **int** |  | [optional] [defaults to 100]

### Return type

[**\Fastly\Model\ComputeAclListEntries**](../Model/ComputeAclListEntries.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `computeAclListAcls()`

```php
computeAclListAcls($options): \Fastly\Model\ComputeAclCreateAclsResponse[] // List ACLs
```

List all ACLs.

### Example
```php
    
try {
    $result = $apiInstance->computeAclListAcls($options);
} catch (Exception $e) {
    echo 'Exception when calling AclsInComputeApi->computeAclListAcls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ComputeAclCreateAclsResponse[]**](../Model/ComputeAclCreateAclsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `computeAclListAclsSAclId()`

```php
computeAclListAclsSAclId($options): \Fastly\Model\ComputeAclCreateAclsResponse // Describe an ACL
```

Describe an ACL.

### Example
```php
    $options['acl_id'] = 'acl_id_example'; // string

try {
    $result = $apiInstance->computeAclListAclsSAclId($options);
} catch (Exception $e) {
    echo 'Exception when calling AclsInComputeApi->computeAclListAclsSAclId: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**acl_id** | **string** |  |

### Return type

[**\Fastly\Model\ComputeAclCreateAclsResponse**](../Model/ComputeAclCreateAclsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `computeAclLookupAcls()`

```php
computeAclLookupAcls($options): \Fastly\Model\ComputeAclLookup // Lookup an ACL
```

Find a matching ACL entry for an IP address.

### Example
```php
    $options['acl_id'] = 'acl_id_example'; // string
$options['acl_ip'] = 'acl_ip_example'; // string

try {
    $result = $apiInstance->computeAclLookupAcls($options);
} catch (Exception $e) {
    echo 'Exception when calling AclsInComputeApi->computeAclLookupAcls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**acl_id** | **string** |  |
**acl_ip** | **string** |  |

### Return type

[**\Fastly\Model\ComputeAclLookup**](../Model/ComputeAclLookup.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `computeAclUpdateAcls()`

```php
computeAclUpdateAcls($options) // Update an ACL
```

Update an ACL.

### Example
```php
    $options['acl_id'] = 'acl_id_example'; // string
$options['compute_acl_update_entry'] = array(new \Fastly\Model\ComputeAclUpdateEntry()); // \Fastly\Model\ComputeAclUpdateEntry[]

try {
    $apiInstance->computeAclUpdateAcls($options);
} catch (Exception $e) {
    echo 'Exception when calling AclsInComputeApi->computeAclUpdateAcls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**acl_id** | **string** |  |
**compute_acl_update_entry** | [**\Fastly\Model\ComputeAclUpdateEntry[]**](../Model/ComputeAclUpdateEntry.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
