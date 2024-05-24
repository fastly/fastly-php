# Fastly\Api\Http3Api


```php
$apiInstance = new Fastly\Api\Http3Api(
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
[**createHttp3()**](Http3Api.md#createHttp3) | **POST** /service/{service_id}/version/{version_id}/http3 | Enable support for HTTP/3
[**deleteHttp3()**](Http3Api.md#deleteHttp3) | **DELETE** /service/{service_id}/version/{version_id}/http3 | Disable support for HTTP/3
[**getHttp3()**](Http3Api.md#getHttp3) | **GET** /service/{service_id}/version/{version_id}/http3 | Get HTTP/3 status


## `createHttp3()`

```php
createHttp3($options): \Fastly\Model\Http3 // Enable support for HTTP/3
```

Enable HTTP/3 (QUIC) support for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['service_id'] = 'service_id_example'; // string
$options['version'] = 56; // int
$options['created_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['deleted_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['updated_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time in ISO 8601 format.
$options['feature_revision'] = 56; // int | Revision number of the HTTP/3 feature implementation. Defaults to the most recent revision.

try {
    $result = $apiInstance->createHttp3($options);
} catch (Exception $e) {
    echo 'Exception when calling Http3Api->createHttp3: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**service_id** | **string** |  | [optional]
**version** | **int** |  | [optional]
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**deleted_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional]
**feature_revision** | **int** | Revision number of the HTTP/3 feature implementation. Defaults to the most recent revision. | [optional]

### Return type

[**\Fastly\Model\Http3**](../Model/Http3.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteHttp3()`

```php
deleteHttp3($options): \Fastly\Model\InlineResponse200 // Disable support for HTTP/3
```

Disable HTTP/3 (QUIC) support for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->deleteHttp3($options);
} catch (Exception $e) {
    echo 'Exception when calling Http3Api->deleteHttp3: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getHttp3()`

```php
getHttp3($options): \Fastly\Model\Http3 // Get HTTP/3 status
```

Get the status of HTTP/3 (QUIC) support for a particular service and version.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->getHttp3($options);
} catch (Exception $e) {
    echo 'Exception when calling Http3Api->getHttp3: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\Http3**](../Model/Http3.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
