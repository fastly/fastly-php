# Fastly\Api\WafFirewallVersionsApi


```php
$apiInstance = new Fastly\Api\WafFirewallVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
```

## Methods

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneWafFirewallVersion()**](WafFirewallVersionsApi.md#cloneWafFirewallVersion) | **PUT** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/clone | Clone a firewall version
[**createWafFirewallVersion()**](WafFirewallVersionsApi.md#createWafFirewallVersion) | **POST** /waf/firewalls/{firewall_id}/versions | Create a firewall version
[**deployActivateWafFirewallVersion()**](WafFirewallVersionsApi.md#deployActivateWafFirewallVersion) | **PUT** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/activate | Deploy or activate a firewall version
[**getWafFirewallVersion()**](WafFirewallVersionsApi.md#getWafFirewallVersion) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number} | Get a firewall version
[**listWafFirewallVersions()**](WafFirewallVersionsApi.md#listWafFirewallVersions) | **GET** /waf/firewalls/{firewall_id}/versions | List firewall versions
[**updateWafFirewallVersion()**](WafFirewallVersionsApi.md#updateWafFirewallVersion) | **PATCH** /waf/firewalls/{firewall_id}/versions/{firewall_version_number} | Update a firewall version


## `cloneWafFirewallVersion()`

```php
cloneWafFirewallVersion($options): \Fastly\Model\WafFirewallVersionResponse // Clone a firewall version
```

Clone a specific, existing firewall version into a new, draft firewall version.

### Example
```php
try {
    $result = $apiInstance->cloneWafFirewallVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->cloneWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**firewall_version_number** | **int** |  |

### Return type

[**\Fastly\Model\WafFirewallVersionResponse**](../Model/WafFirewallVersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createWafFirewallVersion()`

```php
createWafFirewallVersion($options): \Fastly\Model\WafFirewallVersionResponse // Create a firewall version
```

Create a new, draft firewall version.

### Example
```php
try {
    $result = $apiInstance->createWafFirewallVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->createWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**waf_firewall_version** | [**\Fastly\Model\WafFirewallVersion**](../Model/WafFirewallVersion.md) |  | [optional]

### Return type

[**\Fastly\Model\WafFirewallVersionResponse**](../Model/WafFirewallVersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deployActivateWafFirewallVersion()`

```php
deployActivateWafFirewallVersion($options): object // Deploy or activate a firewall version
```

Deploy or activate a specific firewall version. If a firewall has been disabled, deploying a firewall version will automatically enable the firewall again.

### Example
```php
try {
    $result = $apiInstance->deployActivateWafFirewallVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->deployActivateWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**firewall_version_number** | **int** |  |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getWafFirewallVersion()`

```php
getWafFirewallVersion($options): \Fastly\Model\WafFirewallVersionResponse // Get a firewall version
```

Get details about a specific firewall version.

### Example
```php
try {
    $result = $apiInstance->getWafFirewallVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->getWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**firewall_version_number** | **int** |  |
**include** | **string** | Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_firewall&#x60; and &#x60;waf_active_rules&#x60;. | [optional]

### Return type

[**\Fastly\Model\WafFirewallVersionResponse**](../Model/WafFirewallVersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listWafFirewallVersions()`

```php
listWafFirewallVersions($options): \Fastly\Model\WafFirewallVersionsResponse // List firewall versions
```

Get a list of firewall versions associated with a specific firewall.

### Example
```php
try {
    $result = $apiInstance->listWafFirewallVersions($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->listWafFirewallVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**include** | **string** | Include relationships. Optional. | [optional]
**page_number** | **int** | Current page. | [optional]
**page_size** | **int** | Number of records per page. | [optional] [default to 20]

### Return type

[**\Fastly\Model\WafFirewallVersionsResponse**](../Model/WafFirewallVersionsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateWafFirewallVersion()`

```php
updateWafFirewallVersion($options): \Fastly\Model\WafFirewallVersionResponse // Update a firewall version
```

Update a specific firewall version.

### Example
```php
try {
    $result = $apiInstance->updateWafFirewallVersion($options);
} catch (Exception $e) {
    echo 'Exception when calling WafFirewallVersionsApi->updateWafFirewallVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**firewall_id** | **string** |  |
**firewall_version_number** | **int** |  |
**waf_firewall_version** | [**\Fastly\Model\WafFirewallVersion**](../Model/WafFirewallVersion.md) |  | [optional]

### Return type

[**\Fastly\Model\WafFirewallVersionResponse**](../Model/WafFirewallVersionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
