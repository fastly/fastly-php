# Fastly\Api\LegacyWafRuleApi


```php
$apiInstance = new Fastly\Api\LegacyWafRuleApi(
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
[**getLegacyWafFirewallRuleVcl()**](LegacyWafRuleApi.md#getLegacyWafFirewallRuleVcl) | **GET** /wafs/{firewall_id}/rules/{waf_rule_id}/vcl | Get VCL for a rule associated with a firewall
[**getLegacyWafRule()**](LegacyWafRuleApi.md#getLegacyWafRule) | **GET** /wafs/rules/{waf_rule_id} | Get a rule
[**getLegacyWafRuleVcl()**](LegacyWafRuleApi.md#getLegacyWafRuleVcl) | **GET** /wafs/rules/{waf_rule_id}/vcl | Get VCL for a rule
[**listLegacyWafRules()**](LegacyWafRuleApi.md#listLegacyWafRules) | **GET** /wafs/rules | List rules in the latest configuration set


## `getLegacyWafFirewallRuleVcl()`

```php
getLegacyWafFirewallRuleVcl($options): object // Get VCL for a rule associated with a firewall
```

Get associated VCL for a specific rule associated with a specific firewall.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['waf_rule_id'] = 'waf_rule_id_example'; // string | Alphanumeric string identifying a WAF rule.

try {
    $result = $apiInstance->getLegacyWafFirewallRuleVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleApi->getLegacyWafFirewallRuleVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLegacyWafRule()`

```php
getLegacyWafRule($options): object // Get a rule
```

Get a specific rule.

### Example
```php
    $options['filter_configuration_set_id'] = 'filter_configuration_set_id_example'; // string | Optional. Limit rule to a specific configuration set or pass \"all\" to search all configuration sets, including stale ones.
$options['include'] = tags; // string | Include relationships. Optional. Comma separated values. Permitted values: `tags`, `rule_statuses`, `source`, and `vcl`.
$options['waf_rule_id'] = 'waf_rule_id_example'; // string | Alphanumeric string identifying a WAF rule.

try {
    $result = $apiInstance->getLegacyWafRule($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleApi->getLegacyWafRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_configuration_set_id** | **string** | Optional. Limit rule to a specific configuration set or pass \&quot;all\&quot; to search all configuration sets, including stale ones. | [optional]
**include** | **string** | Include relationships. Optional. Comma separated values. Permitted values: `tags`, `rule_statuses`, `source`, and `vcl`. | [optional]
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLegacyWafRuleVcl()`

```php
getLegacyWafRuleVcl($options): object // Get VCL for a rule
```

Get associated VCL for a specific rule.

### Example
```php
    $options['waf_rule_id'] = 'waf_rule_id_example'; // string | Alphanumeric string identifying a WAF rule.

try {
    $result = $apiInstance->getLegacyWafRuleVcl($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleApi->getLegacyWafRuleVcl: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLegacyWafRules()`

```php
listLegacyWafRules($options): object[] // List rules in the latest configuration set
```

List all rules in the latest configuration set.

### Example
```php
    $options['filter_rule_id'] = 'filter_rule_id_example'; // string | Limit the returned rules to a specific rule ID.
$options['filter_severity'] = 'filter_severity_example'; // string | Limit the returned rules to a specific severity.
$options['filter_tags_name'] = 'filter_tags_name_example'; // string | Limit the returned rules to a set linked to a tag by name.
$options['filter_configuration_set_id'] = 'filter_configuration_set_id_example'; // string | Optional. Limit rules to specific configuration set or pass \"all\" to search all configuration sets, including stale ones.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = 'include_example'; // string | Include relationships. Optional. Comma separated values. Permitted values: `tags`, `rule_statuses`, and `source`.

try {
    $result = $apiInstance->listLegacyWafRules($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleApi->listLegacyWafRules: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_rule_id** | **string** | Limit the returned rules to a specific rule ID. | [optional]
**filter_severity** | **string** | Limit the returned rules to a specific severity. | [optional]
**filter_tags_name** | **string** | Limit the returned rules to a set linked to a tag by name. | [optional]
**filter_configuration_set_id** | **string** | Optional. Limit rules to specific configuration set or pass \&quot;all\&quot; to search all configuration sets, including stale ones. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional. Comma separated values. Permitted values: `tags`, `rule_statuses`, and `source`. | [optional]

### Return type

**object[]**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
