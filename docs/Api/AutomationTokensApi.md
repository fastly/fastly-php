# Fastly\Api\AutomationTokensApi


```php
$apiInstance = new Fastly\Api\AutomationTokensApi(
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
[**createAutomationToken()**](AutomationTokensApi.md#createAutomationToken) | **POST** /automation-tokens | Create Automation Token
[**getAutomationTokenId()**](AutomationTokensApi.md#getAutomationTokenId) | **GET** /automation-tokens/{id} | Retrieve an Automation Token by ID
[**getAutomationTokensIdServices()**](AutomationTokensApi.md#getAutomationTokensIdServices) | **GET** /automation-tokens/{id}/services | List Automation Token Services
[**getAutomationTokensIdWorkspaces()**](AutomationTokensApi.md#getAutomationTokensIdWorkspaces) | **GET** /automation-tokens/{id}/workspaces | List Automation Token Workspaces
[**listAutomationTokens()**](AutomationTokensApi.md#listAutomationTokens) | **GET** /automation-tokens | List Customer Automation Tokens
[**revokeAutomationTokenId()**](AutomationTokensApi.md#revokeAutomationTokenId) | **DELETE** /automation-tokens/{id} | Revoke an Automation Token by ID


## `createAutomationToken()`

```php
createAutomationToken($options): \Fastly\Model\AutomationTokenCreateResponse // Create Automation Token
```

Creates a new automation token.

### Example
```php
    $options['automation_token_create_request'] = {"name":"my_multi_role_token","expires_at":"2027-01-01T20:43:14Z","roles":["t4Gg2uUGZzb2W9Euo4mo0R","x9KzsrACXZv8tPwlEDsKb6"],"services":["SU1Z0isxPaozGVKXdv0eY"],"limit_services":true,"workspaces":["7rWPJST2KqFD37tnQANBo2"],"limit_workspaces":true}; // \Fastly\Model\AutomationTokenCreateRequest

try {
    $result = $apiInstance->createAutomationToken($options);
} catch (Exception $e) {
    echo 'Exception when calling AutomationTokensApi->createAutomationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**automation_token_create_request** | [**\Fastly\Model\AutomationTokenCreateRequest**](../Model/AutomationTokenCreateRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\AutomationTokenCreateResponse**](../Model/AutomationTokenCreateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAutomationTokenId()`

```php
getAutomationTokenId($options): \Fastly\Model\AutomationTokenResponse // Retrieve an Automation Token by ID
```

Retrieves an automation token by ID.

### Example
```php
    $options['id'] = 'id_example'; // string

try {
    $result = $apiInstance->getAutomationTokenId($options);
} catch (Exception $e) {
    echo 'Exception when calling AutomationTokensApi->getAutomationTokenId: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string** |  |

### Return type

[**\Fastly\Model\AutomationTokenResponse**](../Model/AutomationTokenResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAutomationTokensIdServices()`

```php
getAutomationTokensIdServices($options): \Fastly\Model\InlineResponse2004 // List Automation Token Services
```

List of services associated with the automation token.

### Example
```php
    $options['id'] = 'id_example'; // string
$options['per_page'] = 56; // int
$options['page'] = 56; // int

try {
    $result = $apiInstance->getAutomationTokensIdServices($options);
} catch (Exception $e) {
    echo 'Exception when calling AutomationTokensApi->getAutomationTokensIdServices: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string** |  |
**per_page** | **int** |  | [optional]
**page** | **int** |  | [optional]

### Return type

[**\Fastly\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getAutomationTokensIdWorkspaces()`

```php
getAutomationTokensIdWorkspaces($options): \Fastly\Model\AutomationTokenWorkspacesResponse // List Automation Token Workspaces
```

Lists the Next-Gen WAF workspaces accessible by an automation token. Only applicable for tokens with roles that support workspace access (such as Next-Gen WAF roles).

### Example
```php
    $options['id'] = 'id_example'; // string | The alphanumeric string identifying the automation token.
$options['limit'] = 20; // int | Maximum number of workspaces to return per page.
$options['cursor'] = 'cursor_example'; // string | Pagination cursor from a previous response. Pass the `next_cursor` value to retrieve the next page, or `previous_cursor` to go back.

try {
    $result = $apiInstance->getAutomationTokensIdWorkspaces($options);
} catch (Exception $e) {
    echo 'Exception when calling AutomationTokensApi->getAutomationTokensIdWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string** | The alphanumeric string identifying the automation token. |
**limit** | **int** | Maximum number of workspaces to return per page. | [optional] [defaults to 20]
**cursor** | **string** | Pagination cursor from a previous response. Pass the `next_cursor` value to retrieve the next page, or `previous_cursor` to go back. | [optional]

### Return type

[**\Fastly\Model\AutomationTokenWorkspacesResponse**](../Model/AutomationTokenWorkspacesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listAutomationTokens()`

```php
listAutomationTokens($options): \Fastly\Model\AutomationTokenResponse[] // List Customer Automation Tokens
```

Lists all automation tokens for a customer.

### Example
```php
    $options['per_page'] = 56; // int
$options['page'] = 56; // int

try {
    $result = $apiInstance->listAutomationTokens($options);
} catch (Exception $e) {
    echo 'Exception when calling AutomationTokensApi->listAutomationTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**per_page** | **int** |  | [optional]
**page** | **int** |  | [optional]

### Return type

[**\Fastly\Model\AutomationTokenResponse[]**](../Model/AutomationTokenResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `revokeAutomationTokenId()`

```php
revokeAutomationTokenId($options): \Fastly\Model\AutomationTokenErrorResponse // Revoke an Automation Token by ID
```

Revoke an automation token by ID.

### Example
```php
    $options['id'] = 'id_example'; // string

try {
    $result = $apiInstance->revokeAutomationTokenId($options);
} catch (Exception $e) {
    echo 'Exception when calling AutomationTokensApi->revokeAutomationTokenId: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string** |  |

### Return type

[**\Fastly\Model\AutomationTokenErrorResponse**](../Model/AutomationTokenErrorResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
