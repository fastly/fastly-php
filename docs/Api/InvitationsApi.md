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

> [!NOTE]
> All URIs are relative to `https://api.fastly.com`

Method | HTTP request | Description
------ | ------------ | -----------
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
    $options['invitation'] = {"data":{"type":"invitation","attributes":{"email":"thelma@example.com","limit_services":true,"role":"engineer"},"relationships":{"customer":{"data":{"id":"44tb1D3asjhhuh2SH8e8YD","type":"customer"}},"service_invitations":{"data":[{"type":"service_invitation","attributes":{"permission":"purge_all"},"relationships":{"service":{"data":{"type":"service","id":"6yrrdleXQ9QDtum9rMB0nr"}}}}]}}}}; // \Fastly\Model\Invitation

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
    $options['invitation_id'] = 'invitation_id_example'; // string | Alphanumeric string identifying an invitation.

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
    $options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

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
