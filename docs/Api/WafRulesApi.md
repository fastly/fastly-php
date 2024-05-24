# Fastly\Api\WafRulesApi


```php
$apiInstance = new Fastly\Api\WafRulesApi(
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
[**getWafRule()**](WafRulesApi.md#getWafRule) | **GET** /waf/rules/{waf_rule_id} | Get a rule
[**listWafRules()**](WafRulesApi.md#listWafRules) | **GET** /waf/rules | List available WAF rules


## `getWafRule()`

```php
getWafRule($options): \Fastly\Model\WafRuleResponse // Get a rule
```

Get a specific rule. The `id` provided can be the ModSecurity Rule ID or the Fastly generated rule ID.

### Example
```php
    $options['waf_rule_id'] = 'waf_rule_id_example'; // string | Alphanumeric string identifying a WAF rule.
$options['include'] = waf_tags,waf_rule_revisions; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_tags` and `waf_rule_revisions`.

try {
    $result = $apiInstance->getWafRule($options);
} catch (Exception $e) {
    echo 'Exception when calling WafRulesApi->getWafRule: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: `waf_tags` and `waf_rule_revisions`. | [optional]

### Return type

[**\Fastly\Model\WafRuleResponse**](../Model/WafRuleResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafRules()`

```php
listWafRules($options): \Fastly\Model\WafRulesResponse // List available WAF rules
```

List all available WAF rules.

### Example
```php
    $options['filter_modsec_rule_id'] = 'filter_modsec_rule_id_example'; // string | Limit the returned rules to a specific ModSecurity rule ID.
$options['filter_waf_tags_name'] = 'filter_waf_tags_name_example'; // string | Limit the returned rules to a set linked to a tag by name.
$options['filter_waf_rule_revisions_source'] = 'filter_waf_rule_revisions_source_example'; // string | Limit the returned rules to a set linked to a source.
$options['filter_waf_firewall_id_not_match'] = 'filter_waf_firewall_id_not_match_example'; // string | Limit the returned rules to a set not included in the active firewall version for a firewall.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = waf_tags,waf_rule_revisions; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_tags` and `waf_rule_revisions`.

try {
    $result = $apiInstance->listWafRules($options);
} catch (Exception $e) {
    echo 'Exception when calling WafRulesApi->listWafRules: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_modsec_rule_id** | **string** | Limit the returned rules to a specific ModSecurity rule ID. | [optional]
**filter_waf_tags_name** | **string** | Limit the returned rules to a set linked to a tag by name. | [optional]
**filter_waf_rule_revisions_source** | **string** | Limit the returned rules to a set linked to a source. | [optional]
**filter_waf_firewall_id_not_match** | **string** | Limit the returned rules to a set not included in the active firewall version for a firewall. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: `waf_tags` and `waf_rule_revisions`. | [optional]

### Return type

[**\Fastly\Model\WafRulesResponse**](../Model/WafRulesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
