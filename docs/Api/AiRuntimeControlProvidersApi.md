# Fastly\Api\AiRuntimeControlProvidersApi


```php
$apiInstance = new Fastly\Api\AiRuntimeControlProvidersApi(
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
[**arcGetBedrockSetup()**](AiRuntimeControlProvidersApi.md#arcGetBedrockSetup) | **GET** /ai-runtime-control/v1/providers/bedrock/setup | Get Bedrock setup information
[**arcGetModelsForProvider()**](AiRuntimeControlProvidersApi.md#arcGetModelsForProvider) | **GET** /ai-runtime-control/v1/providers/{provider_id}/models | Get models for a provider
[**arcGetSupportedProviders()**](AiRuntimeControlProvidersApi.md#arcGetSupportedProviders) | **GET** /ai-runtime-control/v1/providers | Get supported providers


## `arcGetBedrockSetup()`

```php
arcGetBedrockSetup($options): \Fastly\Model\ArcBedrockSetupResponse // Get Bedrock setup information
```

Returns the AI Runtime Control IAM role Amazon Resource Name (ARN) and external ID to reference in your AWS account's IAM trust policy before creating an `aws-iam` [provider connection](https://www.fastly.com/documentation/reference/api/ai-runtime-control/provider-connections#arc-create-provider-connection) to Amazon Bedrock.  Requires AWS IAM authentication to be enabled on your account. If it isn't, this endpoint returns a 404 response.

### Example
```php
    
try {
    $result = $apiInstance->arcGetBedrockSetup($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProvidersApi->arcGetBedrockSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ArcBedrockSetupResponse**](../Model/ArcBedrockSetupResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcGetModelsForProvider()`

```php
arcGetModelsForProvider($options): \Fastly\Model\ArcModelsResponse // Get models for a provider
```

Returns the models available for a specific provider.

### Example
```php
    $options['provider_id'] = anthropic; // string | The ID of the provider.

try {
    $result = $apiInstance->arcGetModelsForProvider($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProvidersApi->arcGetModelsForProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**provider_id** | **string** | The ID of the provider. |

### Return type

[**\Fastly\Model\ArcModelsResponse**](../Model/ArcModelsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `arcGetSupportedProviders()`

```php
arcGetSupportedProviders($options): \Fastly\Model\ArcProvidersResponse // Get supported providers
```

Returns the AI providers supported by AI Runtime Control, with each provider's available models nested within.

### Example
```php
    
try {
    $result = $apiInstance->arcGetSupportedProviders($options);
} catch (Exception $e) {
    echo 'Exception when calling AiRuntimeControlProvidersApi->arcGetSupportedProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ArcProvidersResponse**](../Model/ArcProvidersResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
