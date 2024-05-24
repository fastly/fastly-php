# Fastly\Api\LegacyWafFirewallApi


```php
$apiInstance = new Fastly\Api\LegacyWafFirewallApi(
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
[**createLegacyWafFirewallService()**](LegacyWafFirewallApi.md#createLegacyWafFirewallService) | **POST** /service/{service_id}/version/{version_id}/wafs | Create a firewall
[**disableLegacyWafFirewall()**](LegacyWafFirewallApi.md#disableLegacyWafFirewall) | **PATCH** /wafs/{firewall_id}/disable | Disable a firewall
[**enableLegacyWafFirewall()**](LegacyWafFirewallApi.md#enableLegacyWafFirewall) | **PATCH** /wafs/{firewall_id}/enable | Enable a firewall
[**getLegacyWafFirewall()**](LegacyWafFirewallApi.md#getLegacyWafFirewall) | **GET** /wafs/{firewall_id} | Get a firewall object
[**getLegacyWafFirewallService()**](LegacyWafFirewallApi.md#getLegacyWafFirewallService) | **GET** /service/{service_id}/version/{version_id}/wafs/{firewall_id} | Get a firewall
[**listLegacyWafFirewalls()**](LegacyWafFirewallApi.md#listLegacyWafFirewalls) | **GET** /wafs | List active firewalls
[**listLegacyWafFirewallsService()**](LegacyWafFirewallApi.md#listLegacyWafFirewallsService) | **GET** /service/{service_id}/version/{version_id}/wafs | List firewalls
[**updateLegacyWafFirewallService()**](LegacyWafFirewallApi.md#updateLegacyWafFirewallService) | **PATCH** /service/{service_id}/version/{version_id}/wafs/{firewall_id} | Update a firewall


## `createLegacyWafFirewallService()`

```php
createLegacyWafFirewallService($options): object // Create a firewall
```

Create a firewall object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['request_body'] = {"data":{"type":"waf","attributes":{"prefetch_condition":"WAF-Condition","response":"WAF_Error"}}}; // array<string,object>

try {
    $result = $apiInstance->createLegacyWafFirewallService($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->createLegacyWafFirewallService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `disableLegacyWafFirewall()`

```php
disableLegacyWafFirewall($options): object // Disable a firewall
```

Disable a firewall for a particular service and version. This endpoint is intended to be used in an emergency. Disabling a firewall object for a specific service and version replaces your existing WAF ruleset with an empty ruleset. While disabled, your WAF ruleset will not be applied to your origin traffic. This endpoint is only available to users assigned the role of superuser or above. This is an asynchronous action. To check on the completion of this action, use the related link returned in the response to check on the Update Status of the action.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['request_body'] = {"data":{"id":"w4Fg2uUGZzb2W9Euo4m0Or","type":"waf"}}; // array<string,object>

try {
    $result = $apiInstance->disableLegacyWafFirewall($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->disableLegacyWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `enableLegacyWafFirewall()`

```php
enableLegacyWafFirewall($options): object // Enable a firewall
```

Re-enable a firewall object for a particular service and version after it has been disabled. This endpoint is intended to be used in an emergency. When a firewall object is re-enabled, a newly generated WAF ruleset VCL based on the current WAF configuration is used to replace the empty ruleset. This endpoint is only available to users assigned the role of superuser or above. This is an asynchronous action. To check on the completion of this action, use the related link returned in the response to check on the Update Status of the action.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['request_body'] = {"data":{"id":"w4Fg2uUGZzb2W9Euo4m0Or","type":"waf"}}; // array<string,object>

try {
    $result = $apiInstance->enableLegacyWafFirewall($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->enableLegacyWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLegacyWafFirewall()`

```php
getLegacyWafFirewall($options): object // Get a firewall object
```

Get a specific firewall object.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['include'] = configuration_set; // string | Include relationships. Optional, comma separated values. Permitted values: `configuration_set`, `owasp`, `rules`, `rule_statuses`.

try {
    $result = $apiInstance->getLegacyWafFirewall($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->getLegacyWafFirewall: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**include** | **string** | Include relationships. Optional, comma separated values. Permitted values: `configuration_set`, `owasp`, `rules`, `rule_statuses`. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLegacyWafFirewallService()`

```php
getLegacyWafFirewallService($options): object // Get a firewall
```

Get a specific firewall object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.

try {
    $result = $apiInstance->getLegacyWafFirewallService($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->getLegacyWafFirewallService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLegacyWafFirewalls()`

```php
listLegacyWafFirewalls($options): object // List active firewalls
```

List all active firewall objects.

### Example
```php
    $options['filter_rules_rule_id'] = 'filter_rules_rule_id_example'; // string | Limit the returned firewalls to a specific rule ID.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = configuration_set; // string | Include relationships. Optional, comma separated values. Permitted values: `configuration_set`, `owasp`.

try {
    $result = $apiInstance->listLegacyWafFirewalls($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->listLegacyWafFirewalls: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_rules_rule_id** | **string** | Limit the returned firewalls to a specific rule ID. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional, comma separated values. Permitted values: `configuration_set`, `owasp`. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLegacyWafFirewallsService()`

```php
listLegacyWafFirewallsService($options): object // List firewalls
```

List all firewall objects for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = configuration_set; // string | Include relationships. Optional, comma separated values. Permitted values: `configuration_set`, `owasp`.

try {
    $result = $apiInstance->listLegacyWafFirewallsService($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->listLegacyWafFirewallsService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional, comma separated values. Permitted values: `configuration_set`, `owasp`. | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLegacyWafFirewallService()`

```php
updateLegacyWafFirewallService($options): object // Update a firewall
```

Update a firewall object for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['request_body'] = {"data":{"id":"w4Fg2uUGZzb2W9Euo4m0Or","type":"waf","attributes":{"response":"new response"}}}; // array<string,object>

try {
    $result = $apiInstance->updateLegacyWafFirewallService($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafFirewallApi->updateLegacyWafFirewallService: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
