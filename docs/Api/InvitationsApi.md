# OpenAPI\Client\InvitationsApi

All URIs are relative to https://api.fastly.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvitation()**](InvitationsApi.md#createInvitation) | **POST** /invitations | Create an invitation
[**deleteInvitation()**](InvitationsApi.md#deleteInvitation) | **DELETE** /invitations/{invitation_id} | Delete an invitation
[**listInvitations()**](InvitationsApi.md#listInvitations) | **GET** /invitations | List invitations


## `createInvitation()`

```php
createInvitation($inline_object6): \OpenAPI\Client\Model\InlineResponse200
```

Create an invitation

Create an invitation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object6 = new \OpenAPI\Client\Model\InlineObject6(); // \OpenAPI\Client\Model\InlineObject6

try {
    $result = $apiInstance->createInvitation($inline_object6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->createInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object6** | [**\OpenAPI\Client\Model\InlineObject6**](../Model/InlineObject6.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvitation()`

```php
deleteInvitation($invitation_id)
```

Delete an invitation

Delete an invitation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invitation_id = 'invitation_id_example'; // string

try {
    $apiInstance->deleteInvitation($invitation_id);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->deleteInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvitations()`

```php
listInvitations($page_number, $page_size): object
```

List invitations

List all invitations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_number = 56; // int | Current page.
$page_size = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listInvitations($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->listInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page. | [optional]
 **page_size** | **int**| Number of records per page. | [optional] [default to 20]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
