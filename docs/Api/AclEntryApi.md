# Fastly\Api\AclEntryApi


```php
$apiInstance = new Fastly\Api\AclEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**bulkUpdateAclEntries()**](AclEntryApi.md#bulkUpdateAclEntries) | **PATCH** /service/{service_id}/acl/{acl_id}/entries | Update multiple ACL entries
[**createAclEntry()**](AclEntryApi.md#createAclEntry) | **POST** /service/{service_id}/acl/{acl_id}/entry | Create an ACL entry
[**deleteAclEntry()**](AclEntryApi.md#deleteAclEntry) | **DELETE** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Delete an ACL entry
[**getAclEntry()**](AclEntryApi.md#getAclEntry) | **GET** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Describe an ACL entry
[**listAclEntries()**](AclEntryApi.md#listAclEntries) | **GET** /service/{service_id}/acl/{acl_id}/entries | List ACL entries
[**updateAclEntry()**](AclEntryApi.md#updateAclEntry) | **PATCH** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Update an ACL entry


## `bulkUpdateAclEntries()`

```php
bulkUpdateAclEntries($options): \Fastly\Model\InlineResponse200 // Update multiple ACL entries
```

Update multiple ACL entries on the same ACL.

### Example
```php
try {
    $result = $apiInstance->bulkUpdateAclEntries($options);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->bulkUpdateAclEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**acl_id** | **string** | Alphanumeric string identifying a ACL. |
**bulk_update_acl_entries_request** | [**\Fastly\Model\BulkUpdateAclEntriesRequest**](../Model/BulkUpdateAclEntriesRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createAclEntry()`

```php
createAclEntry($options): \Fastly\Model\AclEntryResponse // Create an ACL entry
```

Add an ACL entry to an ACL.

### Example
```php
try {
    $result = $apiInstance->createAclEntry($options);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->createAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**acl_id** | **string** | Alphanumeric string identifying a ACL. |
**acl_entry** | [**\Fastly\Model\AclEntry**](../Model/AclEntry.md) |  | [optional]

### Return type

[**\Fastly\Model\AclEntryResponse**](../Model/AclEntryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteAclEntry()`

```php
deleteAclEntry($options): \Fastly\Model\InlineResponse200 // Delete an ACL entry
```

Delete an ACL entry from a specified ACL.

### Example
```php
try {
    $result = $apiInstance->deleteAclEntry($options);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->deleteAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**acl_id** | **string** | Alphanumeric string identifying a ACL. |
**acl_entry_id** | **string** | Alphanumeric string identifying an ACL Entry. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAclEntry()`

```php
getAclEntry($options): \Fastly\Model\AclEntryResponse // Describe an ACL entry
```

Retrieve a single ACL entry.

### Example
```php
try {
    $result = $apiInstance->getAclEntry($options);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->getAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**acl_id** | **string** | Alphanumeric string identifying a ACL. |
**acl_entry_id** | **string** | Alphanumeric string identifying an ACL Entry. |

### Return type

[**\Fastly\Model\AclEntryResponse**](../Model/AclEntryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listAclEntries()`

```php
listAclEntries($options): \Fastly\Model\AclEntryResponse[] // List ACL entries
```

List ACL entries for a specified ACL.

### Example
```php
try {
    $result = $apiInstance->listAclEntries($options);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->listAclEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**acl_id** | **string** | Alphanumeric string identifying a ACL. |
**page** | **int** | Current page. | [optional]
**per_page** | **int** | Number of records per page. | [optional] [defaults to 20]
**sort** | **string** | Field on which to sort. | [optional] [defaults to 'created']
**direction** | **string** | Direction in which to sort results. | [optional] [one of: 'ascend', 'descend'] [defaults to 'ascend']

### Return type

[**\Fastly\Model\AclEntryResponse[]**](../Model/AclEntryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateAclEntry()`

```php
updateAclEntry($options): \Fastly\Model\AclEntryResponse // Update an ACL entry
```

Update an ACL entry for a specified ACL.

### Example
```php
try {
    $result = $apiInstance->updateAclEntry($options);
} catch (Exception $e) {
    echo 'Exception when calling AclEntryApi->updateAclEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**acl_id** | **string** | Alphanumeric string identifying a ACL. |
**acl_entry_id** | **string** | Alphanumeric string identifying an ACL Entry. |
**acl_entry** | [**\Fastly\Model\AclEntry**](../Model/AclEntry.md) |  | [optional]

### Return type

[**\Fastly\Model\AclEntryResponse**](../Model/AclEntryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
