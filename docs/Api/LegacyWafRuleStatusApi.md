# Fastly\Api\LegacyWafRuleStatusApi


```php
$apiInstance = new Fastly\Api\LegacyWafRuleStatusApi(
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
[**getWafFirewallRuleStatus()**](LegacyWafRuleStatusApi.md#getWafFirewallRuleStatus) | **GET** /service/{service_id}/wafs/{firewall_id}/rules/{waf_rule_id}/rule_status | Get the status of a rule on a firewall
[**listWafFirewallRuleStatuses()**](LegacyWafRuleStatusApi.md#listWafFirewallRuleStatuses) | **GET** /service/{service_id}/wafs/{firewall_id}/rule_statuses | List rule statuses
[**updateWafFirewallRuleStatus()**](LegacyWafRuleStatusApi.md#updateWafFirewallRuleStatus) | **PATCH** /service/{service_id}/wafs/{firewall_id}/rules/{waf_rule_id}/rule_status | Update the status of a rule
[**updateWafFirewallRuleStatusesTag()**](LegacyWafRuleStatusApi.md#updateWafFirewallRuleStatusesTag) | **POST** /service/{service_id}/wafs/{firewall_id}/rule_statuses | Create or update status of a tagged group of rules


## `getWafFirewallRuleStatus()`

```php
getWafFirewallRuleStatus($options): object // Get the status of a rule on a firewall
```

Get a specific rule status object for a particular service, firewall, and rule.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['waf_rule_id'] = 'waf_rule_id_example'; // string | Alphanumeric string identifying a WAF rule.

try {
    $result = $apiInstance->getWafFirewallRuleStatus($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleStatusApi->getWafFirewallRuleStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafFirewallRuleStatuses()`

```php
listWafFirewallRuleStatuses($options): object // List rule statuses
```

List all rule statuses for a particular service and firewall.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['filter_status'] = 'filter_status_example'; // string | Limit results to rule statuses with the specified status.
$options['filter_rule_message'] = 'filter_rule_message_example'; // string | Limit results to rule statuses whose rules have the specified message.
$options['filter_rule_rule_id'] = 'filter_rule_rule_id_example'; // string | Limit results to rule statuses whose rules represent the specified ModSecurity rule_id.
$options['filter_rule_tags'] = 'filter_rule_tags_example'; // string | Limit results to rule statuses whose rules relate to the specified tag IDs.
$options['filter_rule_tags_name'] = application-FBC Market; // string | Limit results to rule statuses whose rules related to the named tags.
$options['include'] = 'include_example'; // string | Include relationships. Optional, comma separated values. Permitted values: `tags`.
$options['page_number'] = 1; // int | Current page.
$options['page_size'] = 20; // int | Number of records per page.

try {
    $result = $apiInstance->listWafFirewallRuleStatuses($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleStatusApi->listWafFirewallRuleStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**filter_status** | **string** | Limit results to rule statuses with the specified status. | [optional]
**filter_rule_message** | **string** | Limit results to rule statuses whose rules have the specified message. | [optional]
**filter_rule_rule_id** | **string** | Limit results to rule statuses whose rules represent the specified ModSecurity rule_id. | [optional]
**filter_rule_tags** | **string** | Limit results to rule statuses whose rules relate to the specified tag IDs. | [optional]
**filter_rule_tags_name** | **string** | Limit results to rule statuses whose rules related to the named tags. | [optional]
**include** | **string** | Include relationships. Optional, comma separated values. Permitted values: `tags`. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [defaults to 20]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWafFirewallRuleStatus()`

```php
updateWafFirewallRuleStatus($options): object // Update the status of a rule
```

Update a rule status for a particular service, firewall, and rule.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['waf_rule_id'] = 'waf_rule_id_example'; // string | Alphanumeric string identifying a WAF rule.
$options['request_body'] = {"data":{"id":"RU1S0isxPaozGVKXdv0eY","type":"rule_status","attributes":{"status":"block"}}}; // array<string,object>

try {
    $result = $apiInstance->updateWafFirewallRuleStatus($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleStatusApi->updateWafFirewallRuleStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**waf_rule_id** | **string** | Alphanumeric string identifying a WAF rule. |
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWafFirewallRuleStatusesTag()`

```php
updateWafFirewallRuleStatusesTag($options): object // Create or update status of a tagged group of rules
```

Create or update all rule statuses for a particular service and firewall, based on tag name. By default, only rule status for enabled rules (with status log or block) will be updated. To update rule statuses for disabled rules under the specified tag, use the force attribute.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['firewall_id'] = 'firewall_id_example'; // string | Alphanumeric string identifying a Firewall.
$options['name'] = 'name_example'; // string | The tag name to use to determine the set of rules to update. For example, OWASP or language-php.
$options['force'] = 'force_example'; // string | Whether or not to update rule statuses for disabled rules. Optional.
$options['request_body'] = {"data":{"type":"rule_status","attributes":{"status":"block","name":"application-FBC Market","force":true}}}; // array<string,object>

try {
    $result = $apiInstance->updateWafFirewallRuleStatusesTag($options);
} catch (Exception $e) {
    echo 'Exception when calling LegacyWafRuleStatusApi->updateWafFirewallRuleStatusesTag: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**firewall_id** | **string** | Alphanumeric string identifying a Firewall. |
**name** | **string** | The tag name to use to determine the set of rules to update. For example, OWASP or language-php. | [optional]
**force** | **string** | Whether or not to update rule statuses for disabled rules. Optional. | [optional]
**request_body** | [**array<string,object>**](../Model/object.md) |  | [optional]

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
