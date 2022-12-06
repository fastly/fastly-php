# Fastly\Api\DocsApi


```php
$apiInstance = new Fastly\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**getDocs()**](DocsApi.md#getDocs) | **GET** /docs | Get Fastly API docs as structured data
[**getDocsSection()**](DocsApi.md#getDocsSection) | **GET** /docs/section/{section} | Get API docs matching a section filter
[**getDocsSubject()**](DocsApi.md#getDocsSubject) | **GET** /docs/subject/{subject} | Get API docs for a single subject


## `getDocs()`

```php
getDocs($options): object[] // Get Fastly API docs as structured data
```

Gets all documentation associated with the Fastly API.

### Example
```php
    
try {
    $result = $apiInstance->getDocs($options);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getDocs: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

**object[]**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDocsSection()`

```php
getDocsSection($options) // Get API docs matching a section filter
```

Gets all documentation associated with a given Categorical Section where `section` is a regular_expression. Passing `invert=true` will force a return of everything that does not match the given regular expression.

### Example
```php
    $options['section'] = backend; // string | The section to search for. Supports regular expressions.
$options['invert'] = 'invert_example'; // string | Get everything that does not match section.

try {
    $apiInstance->getDocsSection($options);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getDocsSection: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**section** | **string** | The section to search for. Supports regular expressions. |
**invert** | **string** | Get everything that does not match section. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDocsSubject()`

```php
getDocsSubject($options) // Get API docs for a single subject
```

Gets all documentation relating to a given 'Subject'.

### Example
```php
    $options['subject'] = backend; // string | The subject to search for. Supports regular expressions.

try {
    $apiInstance->getDocsSubject($options);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->getDocsSubject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**subject** | **string** | The subject to search for. Supports regular expressions. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
