# Fastly\Api\ContactApi


```php
$apiInstance = new Fastly\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /customer/{customer_id}/contact/{contact_id} | Delete a contact
[**listContacts()**](ContactApi.md#listContacts) | **GET** /customer/{customer_id}/contacts | List contacts


## `deleteContact()`

```php
deleteContact($options): \Fastly\Model\InlineResponse200 // Delete a contact
```

Delete a contact.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$options['contact_id'] = 'contact_id_example'; // string | An alphanumeric string identifying the customer contact.

try {
    $result = $apiInstance->deleteContact($options);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |
**contact_id** | **string** | An alphanumeric string identifying the customer contact. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listContacts()`

```php
listContacts($options): \Fastly\Model\SchemasContactResponse[] // List contacts
```

List all contacts from a specified customer ID.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.

try {
    $result = $apiInstance->listContacts($options);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

[**\Fastly\Model\SchemasContactResponse[]**](../Model/SchemasContactResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
