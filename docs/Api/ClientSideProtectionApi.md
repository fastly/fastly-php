# Fastly\Api\ClientSideProtectionApi


```php
$apiInstance = new Fastly\Api\ClientSideProtectionApi(
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
[**cspCreatePage()**](ClientSideProtectionApi.md#cspCreatePage) | **POST** /client-side-protection/v1/pages | Create page
[**cspCreatePolicy()**](ClientSideProtectionApi.md#cspCreatePolicy) | **POST** /client-side-protection/v1/pages/{page_id}/policies | Create policy
[**cspCreateWebsite()**](ClientSideProtectionApi.md#cspCreateWebsite) | **POST** /client-side-protection/v1/websites | Create website
[**cspDeletePage()**](ClientSideProtectionApi.md#cspDeletePage) | **DELETE** /client-side-protection/v1/pages/{page_id} | Delete page
[**cspDeleteWebsite()**](ClientSideProtectionApi.md#cspDeleteWebsite) | **DELETE** /client-side-protection/v1/websites/{website_id} | Delete website
[**cspGetPage()**](ClientSideProtectionApi.md#cspGetPage) | **GET** /client-side-protection/v1/pages/{page_id} | Get page
[**cspGetPolicy()**](ClientSideProtectionApi.md#cspGetPolicy) | **GET** /client-side-protection/v1/pages/{page_id}/policies/{policy_id} | Get policy
[**cspGetScript()**](ClientSideProtectionApi.md#cspGetScript) | **GET** /client-side-protection/v1/pages/{page_id}/scripts/{script_id} | Get script
[**cspGetWebsite()**](ClientSideProtectionApi.md#cspGetWebsite) | **GET** /client-side-protection/v1/websites/{website_id} | Get website
[**cspListHeaderEvents()**](ClientSideProtectionApi.md#cspListHeaderEvents) | **GET** /client-side-protection/v1/pages/{page_id}/events | List header events
[**cspListHeaders()**](ClientSideProtectionApi.md#cspListHeaders) | **GET** /client-side-protection/v1/pages/{page_id}/headers | List security headers
[**cspListPages()**](ClientSideProtectionApi.md#cspListPages) | **GET** /client-side-protection/v1/pages | List pages
[**cspListPolicies()**](ClientSideProtectionApi.md#cspListPolicies) | **GET** /client-side-protection/v1/pages/{page_id}/policies | List policies
[**cspListPolicyReports()**](ClientSideProtectionApi.md#cspListPolicyReports) | **GET** /client-side-protection/v1/pages/{page_id}/policies/{policy_id}/reports | List policy reports
[**cspListScripts()**](ClientSideProtectionApi.md#cspListScripts) | **GET** /client-side-protection/v1/pages/{page_id}/scripts | List scripts
[**cspListWebsites()**](ClientSideProtectionApi.md#cspListWebsites) | **GET** /client-side-protection/v1/websites | List websites
[**cspUpdatePage()**](ClientSideProtectionApi.md#cspUpdatePage) | **PATCH** /client-side-protection/v1/pages/{page_id} | Update page
[**cspUpdatePolicy()**](ClientSideProtectionApi.md#cspUpdatePolicy) | **PATCH** /client-side-protection/v1/pages/{page_id}/policies/{policy_id} | Update policy
[**cspUpdateScript()**](ClientSideProtectionApi.md#cspUpdateScript) | **PATCH** /client-side-protection/v1/pages/{page_id}/scripts/{script_id} | Update script
[**cspUpdateWebsite()**](ClientSideProtectionApi.md#cspUpdateWebsite) | **PATCH** /client-side-protection/v1/websites/{website_id} | Update website


## `cspCreatePage()`

```php
cspCreatePage($options): \Fastly\Model\Page // Create page
```

Create a new page for monitoring.

### Example
```php
    $options['page_create'] = new \Fastly\Model\PageCreate(); // \Fastly\Model\PageCreate

try {
    $result = $apiInstance->cspCreatePage($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspCreatePage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_create** | [**\Fastly\Model\PageCreate**](../Model/PageCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\Page**](../Model/Page.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspCreatePolicy()`

```php
cspCreatePolicy($options): \Fastly\Model\Policy // Create policy
```

Create a new Content Security Policy for a page.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['policy_create'] = new \Fastly\Model\PolicyCreate(); // \Fastly\Model\PolicyCreate

try {
    $result = $apiInstance->cspCreatePolicy($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspCreatePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**policy_create** | [**\Fastly\Model\PolicyCreate**](../Model/PolicyCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\Policy**](../Model/Policy.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspCreateWebsite()`

```php
cspCreateWebsite($options): \Fastly\Model\Website // Create website
```

Create a new website for Client-Side Protection monitoring.

### Example
```php
    $options['website_create'] = new \Fastly\Model\WebsiteCreate(); // \Fastly\Model\WebsiteCreate

try {
    $result = $apiInstance->cspCreateWebsite($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspCreateWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**website_create** | [**\Fastly\Model\WebsiteCreate**](../Model/WebsiteCreate.md) |  | [optional]

### Return type

[**\Fastly\Model\Website**](../Model/Website.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspDeletePage()`

```php
cspDeletePage($options) // Delete page
```

Delete a page and all associated scripts and policies.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier

try {
    $apiInstance->cspDeletePage($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspDeletePage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspDeleteWebsite()`

```php
cspDeleteWebsite($options) // Delete website
```

Delete a website and all associated pages, scripts, and policies.

### Example
```php
    $options['website_id'] = 2Xk9JgPCkf1NzVsNmKrECp; // string | Website identifier

try {
    $apiInstance->cspDeleteWebsite($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspDeleteWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**website_id** | **string** | Website identifier |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspGetPage()`

```php
cspGetPage($options): \Fastly\Model\Page // Get page
```

Get details for a specific page.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier

try {
    $result = $apiInstance->cspGetPage($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspGetPage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |

### Return type

[**\Fastly\Model\Page**](../Model/Page.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspGetPolicy()`

```php
cspGetPolicy($options): \Fastly\Model\Policy // Get policy
```

Get details for a specific policy.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['policy_id'] = 7Cp4OlUHqj6SfAwSrQwJHu; // string | Policy identifier

try {
    $result = $apiInstance->cspGetPolicy($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspGetPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**policy_id** | **string** | Policy identifier |

### Return type

[**\Fastly\Model\Policy**](../Model/Policy.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspGetScript()`

```php
cspGetScript($options): \Fastly\Model\Script // Get script
```

Get details for a specific script.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['script_id'] = 5An2MjSFoh4QcYvQpNuHFs; // string | Script identifier

try {
    $result = $apiInstance->cspGetScript($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspGetScript: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**script_id** | **string** | Script identifier |

### Return type

[**\Fastly\Model\Script**](../Model/Script.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspGetWebsite()`

```php
cspGetWebsite($options): \Fastly\Model\Website // Get website
```

Get details for a specific website.

### Example
```php
    $options['website_id'] = 2Xk9JgPCkf1NzVsNmKrECp; // string | Website identifier

try {
    $result = $apiInstance->cspGetWebsite($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspGetWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**website_id** | **string** | Website identifier |

### Return type

[**\Fastly\Model\Website**](../Model/Website.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspListHeaderEvents()`

```php
cspListHeaderEvents($options): \Fastly\Model\InlineResponse20011 // List header events
```

List security header change events for a page.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['limit'] = 100; // int | Limit how many results are returned.
$options['page'] = 1; // int | Page number of the collection to request.

try {
    $result = $apiInstance->cspListHeaderEvents($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspListHeaderEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**page** | **int** | Page number of the collection to request. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspListHeaders()`

```php
cspListHeaders($options): \Fastly\Model\InlineResponse20010 // List security headers
```

List security headers detected on a page.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['limit'] = 100; // int | Limit how many results are returned.
$options['page'] = 1; // int | Page number of the collection to request.

try {
    $result = $apiInstance->cspListHeaders($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspListHeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**page** | **int** | Page number of the collection to request. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspListPages()`

```php
cspListPages($options): \Fastly\Model\InlineResponse2006 // List pages
```

List all pages. Optionally filter by website.

### Example
```php
    $options['website_id'] = 'website_id_example'; // string | Filter pages by website ID
$options['limit'] = 100; // int | Limit how many results are returned.
$options['page'] = 1; // int | Page number of the collection to request.

try {
    $result = $apiInstance->cspListPages($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspListPages: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**website_id** | **string** | Filter pages by website ID | [optional]
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**page** | **int** | Page number of the collection to request. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspListPolicies()`

```php
cspListPolicies($options): \Fastly\Model\InlineResponse2008 // List policies
```

List all Content Security Policies for a page.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['limit'] = 100; // int | Limit how many results are returned.
$options['page'] = 1; // int | Page number of the collection to request.

try {
    $result = $apiInstance->cspListPolicies($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspListPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**page** | **int** | Page number of the collection to request. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspListPolicyReports()`

```php
cspListPolicyReports($options): \Fastly\Model\InlineResponse2009 // List policy reports
```

List CSP violation reports for a policy.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['policy_id'] = 7Cp4OlUHqj6SfAwSrQwJHu; // string | Policy identifier
$options['limit'] = 100; // int | Limit how many results are returned.
$options['page'] = 1; // int | Page number of the collection to request.

try {
    $result = $apiInstance->cspListPolicyReports($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspListPolicyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**policy_id** | **string** | Policy identifier |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**page** | **int** | Page number of the collection to request. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspListScripts()`

```php
cspListScripts($options): \Fastly\Model\InlineResponse2007 // List scripts
```

List all scripts detected on a page.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['limit'] = 100; // int | Limit how many results are returned.
$options['page'] = 1; // int | Page number of the collection to request.

try {
    $result = $apiInstance->cspListScripts($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspListScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**page** | **int** | Page number of the collection to request. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspListWebsites()`

```php
cspListWebsites($options): \Fastly\Model\InlineResponse2005 // List websites
```

List all websites configured for Client-Side Protection.

### Example
```php
    $options['limit'] = 100; // int | Limit how many results are returned.
$options['page'] = 1; // int | Page number of the collection to request.

try {
    $result = $apiInstance->cspListWebsites($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspListWebsites: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**limit** | **int** | Limit how many results are returned. | [optional] [defaults to 100]
**page** | **int** | Page number of the collection to request. | [optional] [defaults to 0]

### Return type

[**\Fastly\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspUpdatePage()`

```php
cspUpdatePage($options): \Fastly\Model\Page // Update page
```

Update a page's configuration.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['page_update'] = new \Fastly\Model\PageUpdate(); // \Fastly\Model\PageUpdate

try {
    $result = $apiInstance->cspUpdatePage($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspUpdatePage: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**page_update** | [**\Fastly\Model\PageUpdate**](../Model/PageUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\Page**](../Model/Page.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspUpdatePolicy()`

```php
cspUpdatePolicy($options): \Fastly\Model\Policy // Update policy
```

Update a policy's configuration.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['policy_id'] = 7Cp4OlUHqj6SfAwSrQwJHu; // string | Policy identifier
$options['policy_update'] = new \Fastly\Model\PolicyUpdate(); // \Fastly\Model\PolicyUpdate

try {
    $result = $apiInstance->cspUpdatePolicy($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspUpdatePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**policy_id** | **string** | Policy identifier |
**policy_update** | [**\Fastly\Model\PolicyUpdate**](../Model/PolicyUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\Policy**](../Model/Policy.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspUpdateScript()`

```php
cspUpdateScript($options): \Fastly\Model\Script // Update script
```

Update a script's authorization status or justification.

### Example
```php
    $options['page_id'] = 3Yl0KhQDlg2OaWtOnLsFDq; // string | Page identifier
$options['script_id'] = 5An2MjSFoh4QcYvQpNuHFs; // string | Script identifier
$options['script_update'] = new \Fastly\Model\ScriptUpdate(); // \Fastly\Model\ScriptUpdate

try {
    $result = $apiInstance->cspUpdateScript($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspUpdateScript: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**page_id** | **string** | Page identifier |
**script_id** | **string** | Script identifier |
**script_update** | [**\Fastly\Model\ScriptUpdate**](../Model/ScriptUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\Script**](../Model/Script.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `cspUpdateWebsite()`

```php
cspUpdateWebsite($options): \Fastly\Model\Website // Update website
```

Update a website's configuration.

### Example
```php
    $options['website_id'] = 2Xk9JgPCkf1NzVsNmKrECp; // string | Website identifier
$options['website_update'] = new \Fastly\Model\WebsiteUpdate(); // \Fastly\Model\WebsiteUpdate

try {
    $result = $apiInstance->cspUpdateWebsite($options);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideProtectionApi->cspUpdateWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**website_id** | **string** | Website identifier |
**website_update** | [**\Fastly\Model\WebsiteUpdate**](../Model/WebsiteUpdate.md) |  | [optional]

### Return type

[**\Fastly\Model\Website**](../Model/Website.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
