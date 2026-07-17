# Fastly\Api\NgwafAgentKeysApi


```php
$apiInstance = new Fastly\Api\NgwafAgentKeysApi(
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
[**ngwafListAgentKeys()**](NgwafAgentKeysApi.md#ngwafListAgentKeys) | **GET** /ngwaf/v1/workspaces/{workspace_id}/agent-keys | List agent keys for a workspace


## `ngwafListAgentKeys()`

```php
ngwafListAgentKeys($options): \Fastly\Model\InlineResponse20019 // List agent keys for a workspace
```

List agent keys for a workspace.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the workspace.

try {
    $result = $apiInstance->ngwafListAgentKeys($options);
} catch (Exception $e) {
    echo 'Exception when calling NgwafAgentKeysApi->ngwafListAgentKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the workspace. |

### Return type

[**\Fastly\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
