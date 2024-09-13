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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
[**createContacts()**](ContactApi.md#createContacts) | **POST** /customer/{customer_id}/contacts | Add a new customer contact
[**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /customer/{customer_id}/contacts/{contact_id} | Delete a contact
[**listContacts()**](ContactApi.md#listContacts) | **GET** /customer/{customer_id}/contacts | List contacts


## `createContacts()`

```php
createContacts($options): \Fastly\Model\ContactResponse // Add a new customer contact
```

Create a contact.

### Example
```php
    $options['customer_id'] = 'customer_id_example'; // string | Alphanumeric string identifying the customer.
$options['user_id'] = 'user_id_example'; // string | The alphanumeric string representing the user for this customer contact.
$options['contact_type'] = 'contact_type_example'; // string | The type of contact.
$options['name'] = 'name_example'; // string | The name of this contact, when user_id is not provided.
$options['email'] = 'email_example'; // string | The email of this contact, when a user_id is not provided.
$options['phone'] = 'phone_example'; // string | The phone number for this contact. Required for primary, technical, and security contact types.
$options['customer_id'] = 'customer_id_example'; // string | The alphanumeric string representing the customer for this customer contact.

try {
    $result = $apiInstance->createContacts($options);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |
**user_id** | **string** | The alphanumeric string representing the user for this customer contact. | [optional]
**contact_type** | **string** | The type of contact. | [optional] [one of: 'primary', 'billing', 'technical', 'security', 'emergency', 'general compliance']
**name** | **string** | The name of this contact, when user_id is not provided. | [optional]
**email** | **string** | The email of this contact, when a user_id is not provided. | [optional]
**phone** | **string** | The phone number for this contact. Required for primary, technical, and security contact types. | [optional]
**customer_id** | **string** | The alphanumeric string representing the customer for this customer contact. | [optional]

### Return type

[**\Fastly\Model\ContactResponse**](../Model/ContactResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

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
