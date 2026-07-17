# Fastly\Api\NgwafSimulateApi


```php
$apiInstance = new Fastly\Api\NgwafSimulateApi(
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
[**ngwafSimulateWafRequest()**](NgwafSimulateApi.md#ngwafSimulateWafRequest) | **POST** /ngwaf/v1/workspaces/{workspace_id}/simulate | Simulate a WAF request


## `ngwafSimulateWafRequest()`

```php
ngwafSimulateWafRequest($options): \Fastly\Model\WafSimulateResponse // Simulate a WAF request
```

Simulates a request through the workspace's WAF configuration and returns the WAF response code and any signals that would be detected. The operation is stateless — no simulation data is persisted.

### Example
```php
    $options['workspace_id'] = SU1Z0isxPaozGVKXdv0eY; // string | The ID of the workspace.
$options['waf_simulate_request'] = new \Fastly\Model\WafSimulateRequest(); // \Fastly\Model\WafSimulateRequest

try {
    $result = $apiInstance->ngwafSimulateWafRequest($options);
} catch (Exception $e) {
    echo 'Exception when calling NgwafSimulateApi->ngwafSimulateWafRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**workspace_id** | **string** | The ID of the workspace. |
**waf_simulate_request** | [**\Fastly\Model\WafSimulateRequest**](../Model/WafSimulateRequest.md) |  |

### Return type

[**\Fastly\Model\WafSimulateResponse**](../Model/WafSimulateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
