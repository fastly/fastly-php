# Fastly\Api\WafFirewallsApi


```php
$apiInstance = new Fastly\Api\WafFirewallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWafFirewall()**](WafFirewallsApi.md#createWafFirewall) | **POST** /waf/firewalls | Create a firewall
[**deleteWafFirewall()**](WafFirewallsApi.md#deleteWafFirewall) | **DELETE** /waf/firewalls/{firewall_id} | Delete a firewall
[**getWafFirewall()**](WafFirewallsApi.md#getWafFirewall) | **GET** /waf/firewalls/{firewall_id} | Get a firewall
[**listWafFirewalls()**](WafFirewallsApi.md#listWafFirewalls) | **GET** /waf/firewalls | List firewalls
[**updateWafFirewall()**](WafFirewallsApi.md#updateWafFirewall) | **PATCH** /waf/firewalls/{firewall_id} | Update a firewall


## `createWafFirewall()`

```php
createWafFirewall($options): \Fastly\Model\WafFirewallResponse // Create a firewall
```

Create a firewall object for a particular service and service version using a defined `prefetch_condition` and `response`. If the `prefetch_condition` or the `response` is missing from the request body, Fastly will generate a default object on your service.

### Example
```php
try {
    $result = $apiInstance->createWafFirewall($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->createWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**waf_firewall** | [**\Fastly\Model\WafFirewall**](../Model/WafFirewall.md) |  | [optional]

### Return type

[**\Fastly\Model\WafFirewallResponse**](../Model/WafFirewallResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWafFirewall()`

```php
deleteWafFirewall($options) // Delete a firewall
```

Delete the firewall object for a particular service and service version.

### Example
```php
try {
    $apiInstance->deleteWafFirewall($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->deleteWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**waf_firewall** | [**\Fastly\Model\WafFirewall**](../Model/WafFirewall.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWafFirewall()`

```php
getWafFirewall($options): \Fastly\Model\WafFirewallResponse // Get a firewall
```

Get a specific firewall object.

### Example
```php
try {
    $result = $apiInstance->getWafFirewall($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->getWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**filter_service_version_number** | **string** | Limit the results returned to a specific service version. | [optional]
**include** | **string** | Include related objects. Optional. | [optional] [default to &#39;waf_firewall_versions&#39;]

### Return type

[**\Fastly\Model\WafFirewallResponse**](../Model/WafFirewallResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafFirewalls()`

```php
listWafFirewalls($options): \Fastly\Model\WafFirewallsResponse // List firewalls
```

List all firewall objects.

### Example
```php
try {
    $result = $apiInstance->listWafFirewalls($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->listWafFirewalls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]
**filter_service_id** | **string** | Limit the results returned to a specific service. | [optional]
**filter_service_version_number** | **string** | Limit the results returned to a specific service version. | [optional]
**include** | **string** | Include related objects. Optional. | [optional] [default to &#39;waf_firewall_versions&#39;]

### Return type

[**\Fastly\Model\WafFirewallsResponse**](../Model/WafFirewallsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWafFirewall()`

```php
updateWafFirewall($options): \Fastly\Model\WafFirewallResponse // Update a firewall
```

Update a firewall object for a particular service and service version. Specifying a `service_version_number` is required.

### Example
```php
try {
    $result = $apiInstance->updateWafFirewall($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallsApi->updateWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**waf_firewall** | [**\Fastly\Model\WafFirewall**](../Model/WafFirewall.md) |  | [optional]

### Return type

[**\Fastly\Model\WafFirewallResponse**](../Model/WafFirewallResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
