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
[**listAutomationTokens()**](AutomationTokensApi.md#listAutomationTokens) | **GET** /automation-tokens | List Customer Automation Tokens
[**revokeAutomationTokenId()**](AutomationTokensApi.md#revokeAutomationTokenId) | **DELETE** /automation-tokens/{id} | Revoke an Automation Token by ID


## `createAutomationToken()`

```php
createAutomationToken($options): \Fastly\Model\AutomationTokenCreateResponse // Create Automation Token
```

Creates a new automation token.

### Example
```php
    $options['automation_token_create_request'] = new \Fastly\Model\AutomationTokenCreateRequest(); // \Fastly\Model\AutomationTokenCreateRequest

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
getAutomationTokensIdServices($options): \Fastly\Model\InlineResponse2001 // List Automation Token Services
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

[**\Fastly\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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
