# Fastly\Api\WafFirewallsApi


```php
$apiInstance = new Fastly\Api\WafFirewallsApi(
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
    $options['waf_firewall'] = {"data":{"type":"waf_firewall","attributes":{"prefetch_condition":"WAF_Condition","response":"WAF_Error","service_id":"SU1Z0isxPaozGVKXdv0eY","service_version_number":1}}}; // \Fastly\Model\WafFirewall

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
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['waf_firewall'] = {"data":{"id":"fW7g2uUGZzb2W9Euo4Mo0r","type":"waf_firewall","attributes":{"service_version_number":1}}}; // \Fastly\Model\WafFirewall

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
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
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
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['filter_service_version_number'] = 'filter_service_version_number_example'; // string | Limit the results returned to a specific service version.
$options['include'] = 'waf_firewall_versions'; // string | Include related objects. Optional.

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
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
**filter_service_version_number** | **string** | Limit the results returned to a specific service version. | [optional]
**include** | **string** | Include related objects. Optional. | [optional] [one of: 'waf_firewall_versions'] [defaults to 'waf_firewall_versions']

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
    $options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['filter_service_id'] = 'filter_service_id_example'; // string | Limit the results returned to a specific service.
$options['filter_service_version_number'] = 'filter_service_version_number_example'; // string | Limit the results returned to a specific service version.
$options['include'] = 'waf_firewall_versions'; // string | Include related objects. Optional.

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
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**filter_service_id** | **string** | Limit the results returned to a specific service. | [optional]
**filter_service_version_number** | **string** | Limit the results returned to a specific service version. | [optional]
**include** | **string** | Include related objects. Optional. | [optional] [one of: 'waf_firewall_versions'] [defaults to 'waf_firewall_versions']

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
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['waf_firewall'] = {"data":{"id":"fW7g2uUGZzb2W9Euo4Mo0r","type":"waf_firewall","attributes":{"response":"NEW_RESPONSE","service_version_number":1}}}; // \Fastly\Model\WafFirewall

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
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
**waf_firewall** | [**\Fastly\Model\WafFirewall**](../Model/WafFirewall.md) |  | [optional]

### Return type

[**\Fastly\Model\WafFirewallResponse**](../Model/WafFirewallResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
