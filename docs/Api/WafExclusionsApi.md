# Fastly\Api\WafExclusionsApi


```php
$apiInstance = new Fastly\Api\WafExclusionsApi(
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
[**createWafRuleExclusion()**](WafExclusionsApi.md#createWafRuleExclusion) | **POST** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions | Create a WAF rule exclusion
[**deleteWafRuleExclusion()**](WafExclusionsApi.md#deleteWafRuleExclusion) | **DELETE** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Delete a WAF rule exclusion
[**getWafRuleExclusion()**](WafExclusionsApi.md#getWafRuleExclusion) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Get a WAF rule exclusion
[**listWafRuleExclusions()**](WafExclusionsApi.md#listWafRuleExclusions) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions | List WAF rule exclusions
[**updateWafRuleExclusion()**](WafExclusionsApi.md#updateWafRuleExclusion) | **PATCH** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Update a WAF rule exclusion


## `createWafRuleExclusion()`

```php
createWafRuleExclusion($options): \Fastly\Model\WafExclusionResponse // Create a WAF rule exclusion
```

Create a WAF exclusion for a particular firewall version.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['firewall_version_number'] = 56; // int | Integer identifying a WAF firewall version.
$options['waf_exclusion'] = {"data":{"type":"waf_exclusion","attributes":{"exclusion_type":"rule","condition":"req.url.basename == \"index.html\"","name":"test-waf-exclusion"},"relationships":{"waf_rules":{"data":[{"id":2500162,"type":"waf_rule"}]}}}}; // \Fastly\Model\WafExclusion

try {
    $result = $apiInstance->createWafRuleExclusion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->createWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
**firewall_version_number** | **int** | Integer identifying a WAF firewall version. |
**waf_exclusion** | [**\Fastly\Model\WafExclusion**](../Model/WafExclusion.md) |  | [optional]

### Return type

[**\Fastly\Model\WafExclusionResponse**](../Model/WafExclusionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteWafRuleExclusion()`

```php
deleteWafRuleExclusion($options) // Delete a WAF rule exclusion
```

Delete a WAF exclusion for a particular firewall version.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['firewall_version_number'] = 56; // int | Integer identifying a WAF firewall version.
$options['exclusion_number'] = 56; // int | A numeric ID identifying a WAF exclusion.

try {
    $apiInstance->deleteWafRuleExclusion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->deleteWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
**firewall_version_number** | **int** | Integer identifying a WAF firewall version. |
**exclusion_number** | **int** | A numeric ID identifying a WAF exclusion. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWafRuleExclusion()`

```php
getWafRuleExclusion($options): \Fastly\Model\WafExclusionResponse // Get a WAF rule exclusion
```

Get a specific WAF exclusion object.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['firewall_version_number'] = 56; // int | Integer identifying a WAF firewall version.
$options['exclusion_number'] = 56; // int | A numeric ID identifying a WAF exclusion.

try {
    $result = $apiInstance->getWafRuleExclusion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->getWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
**firewall_version_number** | **int** | Integer identifying a WAF firewall version. |
**exclusion_number** | **int** | A numeric ID identifying a WAF exclusion. |

### Return type

[**\Fastly\Model\WafExclusionResponse**](../Model/WafExclusionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafRuleExclusions()`

```php
listWafRuleExclusions($options): \Fastly\Model\WafExclusionsResponse // List WAF rule exclusions
```

List all exclusions for a particular firewall version.

### Example
```php
    $options['filter_exclusion_type'] = 'filter_exclusion_type_example'; // string | Filters the results based on this exclusion type.
$options['filter_name'] = 'filter_name_example'; // string | Filters the results based on name.
$options['filter_waf_rules_modsec_rule_id'] = 56; // int | Filters the results based on this ModSecurity rule ID.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.
$options['include'] = waf_rules; // string | Include relationships. Optional, comma-separated values. Permitted values: `waf_rules` and `waf_rule_revisions`.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['firewall_version_number'] = 56; // int | Integer identifying a WAF firewall version.

try {
    $result = $apiInstance->listWafRuleExclusions($options);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->listWafRuleExclusions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**filter_exclusion_type** | **string** | Filters the results based on this exclusion type. | [optional] [one of: 'rule', 'variable', 'waf']
**filter_name** | **string** | Filters the results based on name. | [optional]
**filter_waf_rules_modsec_rule_id** | **int** | Filters the results based on this ModSecurity rule ID. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: `waf_rules` and `waf_rule_revisions`. | [optional]
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
**firewall_version_number** | **int** | Integer identifying a WAF firewall version. |

### Return type

[**\Fastly\Model\WafExclusionsResponse**](../Model/WafExclusionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWafRuleExclusion()`

```php
updateWafRuleExclusion($options): \Fastly\Model\WafExclusionResponse // Update a WAF rule exclusion
```

Update a WAF exclusion for a particular firewall version.

### Example
```php
    $options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a WAF Firewall.
$options['firewall_version_number'] = 56; // int | Integer identifying a WAF firewall version.
$options['exclusion_number'] = 56; // int | A numeric ID identifying a WAF exclusion.
$options['waf_exclusion'] = {"data":{"type":"waf_exclusion","attributes":{"logging":false,"condition":"req.url.basename == \"index.html\" || req.url.basename == \"admin.html\"","name":"updated-test-waf-exclusion"}}}; // \Fastly\Model\WafExclusion

try {
    $result = $apiInstance->updateWafRuleExclusion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafExclusionsApi->updateWafRuleExclusion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** | Alphanumeric string identifying a WAF Firewall. |
**firewall_version_number** | **int** | Integer identifying a WAF firewall version. |
**exclusion_number** | **int** | A numeric ID identifying a WAF exclusion. |
**waf_exclusion** | [**\Fastly\Model\WafExclusion**](../Model/WafExclusion.md) |  | [optional]

### Return type

[**\Fastly\Model\WafExclusionResponse**](../Model/WafExclusionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
