# Fastly\Api\InvitationsApi


```php
$apiInstance = new Fastly\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createInvitation()**](InvitationsApi.md#createInvitation) | **POST** /invitations | Create an invitation
[**deleteInvitation()**](InvitationsApi.md#deleteInvitation) | **DELETE** /invitations/{invitation_id} | Delete an invitation
[**listInvitations()**](InvitationsApi.md#listInvitations) | **GET** /invitations | List invitations


## `createInvitation()`

```php
createInvitation($options): \Fastly\Model\InvitationResponse // Create an invitation
```

Create an invitation.

### Example
```php
try {
    $result = $apiInstance->createInvitation($options);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->createInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**invitation** | [**\Fastly\Model\Invitation**](../Model/Invitation.md) |  | [optional]

### Return type

[**\Fastly\Model\InvitationResponse**](../Model/InvitationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteInvitation()`

```php
deleteInvitation($options) // Delete an invitation
```

Delete an invitation.

### Example
```php
try {
    $apiInstance->deleteInvitation($options);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->deleteInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**invitation_id** | **string** | Alphanumeric string identifying an invitation. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listInvitations()`

```php
listInvitations($options): \Fastly\Model\InvitationsResponse // List invitations
```

List all invitations.

### Example
```php
try {
    $result = $apiInstance->listInvitations($options);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->listInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

[**\Fastly\Model\InvitationsResponse**](../Model/InvitationsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
