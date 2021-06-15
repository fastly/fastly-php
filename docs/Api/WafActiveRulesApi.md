# Fastly\Api\WafActiveRulesApi


```php
$apiInstance = new Fastly\Api\WafActiveRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkDeleteWafActiveRules()**](WafActiveRulesApi.md#bulkDeleteWafActiveRules) | **DELETE** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | Delete multiple active rules from a WAF
[**bulkUpdateWafActiveRules()**](WafActiveRulesApi.md#bulkUpdateWafActiveRules) | **PATCH** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/bulk | Update multiple active rules
[**createWafActiveRule()**](WafActiveRulesApi.md#createWafActiveRule) | **POST** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | Add a rule to a WAF as an active rule
[**createWafActiveRulesTag()**](WafActiveRulesApi.md#createWafActiveRulesTag) | **POST** /waf/firewalls/{firewall_id}/versions/{version_id}/tags/{waf_tag_name}/active-rules | Create active rules by tag
[**deleteWafActiveRule()**](WafActiveRulesApi.md#deleteWafActiveRule) | **DELETE** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Delete an active rule
[**getWafActiveRule()**](WafActiveRulesApi.md#getWafActiveRule) | **GET** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Get an active WAF rule object
[**listWafActiveRules()**](WafActiveRulesApi.md#listWafActiveRules) | **GET** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | List active rules on a WAF
[**updateWafActiveRule()**](WafActiveRulesApi.md#updateWafActiveRule) | **PATCH** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Update an active rule


## `bulkDeleteWafActiveRules()`

```php
bulkDeleteWafActiveRules($options) // Delete multiple active rules from a WAF
```

Delete many active rules on a particular firewall version using the active rule ID. Limited to 500 rules per request.

### Example
```php
try {
    $apiInstance->bulkDeleteWafActiveRules($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->bulkDeleteWafActiveRules: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**body** | **object** |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `bulkUpdateWafActiveRules()`

```php
bulkUpdateWafActiveRules($options) // Update multiple active rules
```

Bulk update all active rules on a [firewall version](https://developer.fastly.com/reference/api/waf/firewall-version/). This endpoint will not add new active rules, only update existing active rules.

### Example
```php
try {
    $apiInstance->bulkUpdateWafActiveRules($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->bulkUpdateWafActiveRules: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**body** | **\Fastly\Model\Data** |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWafActiveRule()`

```php
createWafActiveRule($options): OneOfWafActiveRuleResponseWafActiveRulesResponse // Add a rule to a WAF as an active rule
```

Create an active rule for a particular firewall version.

### Example
```php
try {
    $result = $apiInstance->createWafActiveRule($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->createWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**waf_active_rule** | [**\Fastly\Model\WafActiveRule**](../Model/WafActiveRule.md) |  | [optional]

### Return type

[**OneOfWafActiveRuleResponseWafActiveRulesResponse**](../Model/OneOfWafActiveRuleResponseWafActiveRulesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWafActiveRulesTag()`

```php
createWafActiveRulesTag($options) // Create active rules by tag
```

Create active rules by tag. This endpoint will create active rules using the latest revision available for each rule.

### Example
```php
try {
    $apiInstance->createWafActiveRulesTag($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->createWafActiveRulesTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**waf_tag_name** | **string** |  |
**waf_active_rule** | [**\Fastly\Model\WafActiveRule**](../Model/WafActiveRule.md) |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWafActiveRule()`

```php
deleteWafActiveRule($options) // Delete an active rule
```

Delete an active rule for a particular firewall version.

### Example
```php
try {
    $apiInstance->deleteWafActiveRule($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->deleteWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**waf_rule_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWafActiveRule()`

```php
getWafActiveRule($options): \Fastly\Model\WafActiveRuleResponse // Get an active WAF rule object
```

Get a specific active rule object. Includes details of the rule revision associated with the active rule object by default.

### Example
```php
try {
    $result = $apiInstance->getWafActiveRule($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->getWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**waf_rule_id** | **string** |  |
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. | [optional]

### Return type

[**\Fastly\Model\WafActiveRuleResponse**](../Model/WafActiveRuleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafActiveRules()`

```php
listWafActiveRules($options): \Fastly\Model\WafActiveRulesResponse // List active rules on a WAF
```

List all active rules for a particular firewall version.

### Example
```php
try {
    $result = $apiInstance->listWafActiveRules($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->listWafActiveRules: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**filter_status** | **string** | Limit results to active rules with the specified status. | [optional]
**filter_waf_rule_revision_message** | **string** | Limit results to active rules with the specified message. | [optional]
**filter_waf_rule_revision_modsec_rule_id** | **string** | Limit results to active rules that represent the specified ModSecurity modsec_rule_id. | [optional]
**filter_outdated** | **string** | Limit results to active rules referencing an outdated rule revision. | [optional]
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]

### Return type

[**\Fastly\Model\WafActiveRulesResponse**](../Model/WafActiveRulesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWafActiveRule()`

```php
updateWafActiveRule($options): \Fastly\Model\WafActiveRuleResponse // Update an active rule
```

Update an active rule's status for a particular firewall version.

### Example
```php
try {
    $result = $apiInstance->updateWafActiveRule($options);
} catch (Exception $e) {
    echo 'Exception when calling WafActiveRulesApi->updateWafActiveRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**version_id** | **int** |  |
**waf_rule_id** | **string** |  |
**waf_active_rule** | [**\Fastly\Model\WafActiveRule**](../Model/WafActiveRule.md) |  | [optional]

### Return type

[**\Fastly\Model\WafActiveRuleResponse**](../Model/WafActiveRuleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
