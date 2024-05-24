# Fastly\Api\LegacyWafRulesetApi


```php
$apiInstance = new Fastly\Api\LegacyWafRulesetApi(
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
[**getWafRuleset()**](LegacyWafRulesetApi.md#getWafRuleset) | **GET** /service/{service_id}/wafs/{firewall_id}/ruleset | Get a WAF ruleset
[**getWafRulesetVcl()**](LegacyWafRulesetApi.md#getWafRulesetVcl) | **GET** /service/{service_id}/wafs/{firewall_id}/ruleset/preview | Generate WAF ruleset VCL
[**updateWafRuleset()**](LegacyWafRulesetApi.md#updateWafRuleset) | **PATCH** /service/{service_id}/wafs/{firewall_id}/ruleset | Update a WAF ruleset


## `getWafRuleset()`

```php
getWafRuleset($options): object // Get a WAF ruleset
```

Get a WAF ruleset for a particular service and firewall object.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.

try {
    $result = $apiInstance->getWafRuleset($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRulesetApi->getWafRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWafRulesetVcl()`

```php
getWafRulesetVcl($options): object // Generate WAF ruleset VCL
```

Get a preview of the WAF ruleset VCL for a particular service and firewall object based on changes to WAF configuration before deploying the ruleset. The response will include a link to status of the background VCL generation job. Once the background job is completed, the preview WAF ruleset VCL can be retrieved from the status response.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.

try {
    $result = $apiInstance->getWafRulesetVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRulesetApi->getWafRulesetVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWafRuleset()`

```php
updateWafRuleset($options): object // Update a WAF ruleset
```

Update the WAF ruleset for a particular service and firewall object. Use the URL in the response to view the WAF ruleset deploy status.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['request_body'] = {"data":{"id":"r5TguUGZzb2W9EuF4mo0N","type":"ruleset"}}; // array<string,object>

try {
    $result = $apiInstance->updateWafRuleset($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRulesetApi->updateWafRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
