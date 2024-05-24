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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
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

Update multiple ACL entries on the same ACL. For faster updates to your service, group your changes into large batches. The maximum batch size is 1000 entries. [Contact support](https://support.fastly.com/) to discuss raising this limit.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['acl_id'] = 'acl_id_example'; // string | Alphanumeric string identifying a ACL.
$options['bulk_update_acl_entries_request'] = {"entries":[{"op":"create","ip":"192.168.0.1","subnet":8},{"op":"update","id":"6yxNzlOpW1V7JfSwvLGtOc","ip":"192.168.0.2","subnet":16},{"op":"delete","id":"6yxNzlOpW1V7JfSwvLGtOc"}]}; // \Fastly\Model\BulkUpdateAclEntriesRequest

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['acl_id'] = 'acl_id_example'; // string | Alphanumeric string identifying a ACL.
$options['acl_entry'] = {"subnet":0,"ip":"127.0.0.1"}; // \Fastly\Model\AclEntry

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['acl_id'] = 'acl_id_example'; // string | Alphanumeric string identifying a ACL.
$options['acl_entry_id'] = 'acl_entry_id_example'; // string | Alphanumeric string identifying an ACL Entry.

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['acl_id'] = 'acl_id_example'; // string | Alphanumeric string identifying a ACL.
$options['acl_entry_id'] = 'acl_entry_id_example'; // string | Alphanumeric string identifying an ACL Entry.

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['acl_id'] = 'acl_id_example'; // string | Alphanumeric string identifying a ACL.
$options['page'] = 1; // int | Current page.
$options['per_page'] = 20; // int | Number of records per page.
$options['sort'] = created; // string | Field on which to sort.
$options['direction'] = ascend; // string | Direction in which to sort results.

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
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['acl_id'] = 'acl_id_example'; // string | Alphanumeric string identifying a ACL.
$options['acl_entry_id'] = 'acl_entry_id_example'; // string | Alphanumeric string identifying an ACL Entry.
$options['acl_entry'] = {"subnet":8}; // \Fastly\Model\AclEntry

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
