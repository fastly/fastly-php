# Fastly\Api\WafRuleRevisionsApi


```php
$apiInstance = new Fastly\Api\WafRuleRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**getWafRuleRevision()**](WafRuleRevisionsApi.md#getWafRuleRevision) | **GET** /waf/rules/{waf_rule_id}/revisions/{waf_rule_revision_number} | Get a revision of a rule
[**listWafRuleRevisions()**](WafRuleRevisionsApi.md#listWafRuleRevisions) | **GET** /waf/rules/{waf_rule_id}/revisions | List revisions for a rule


## `getWafRuleRevision()`

```php
getWafRuleRevision($options): \Fastly\Model\WafRuleRevisionResponse // Get a revision of a rule
```

Get a specific rule revision.

### Example
```php
try {
    $result = $apiInstance->getWafRuleRevision($options);
} catch (Exception $e) {
    echo 'Exception when calling WafRuleRevisionsApi->getWafRuleRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |
**waf_rule_revision_number** | **float** | Revision number. |
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: `waf_rule`, `vcl`, and `source`. The `vcl` and `source` relationships show the WAF VCL and corresponding ModSecurity source. These fields are blank unless the relationship is included. | [optional]

### Return type

[**\Fastly\Model\WafRuleRevisionResponse**](../Model/WafRuleRevisionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafRuleRevisions()`

```php
listWafRuleRevisions($options): \Fastly\Model\WafRuleRevisionsResponse // List revisions for a rule
```

List all revisions for a specific rule. The `rule_id` provided can be the ModSecurity Rule ID or the Fastly generated rule ID.

### Example
```php
try {
    $result = $apiInstance->listWafRuleRevisions($options);
} catch (Exception $e) {
    echo 'Exception when calling WafRuleRevisionsApi->listWafRuleRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]
**include** | **string** | Include relationships. Optional. | [optional] [one of: 'waf_rule'] [defaults to 'waf_rule']

### Return type

[**\Fastly\Model\WafRuleRevisionsResponse**](../Model/WafRuleRevisionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
