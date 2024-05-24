# Fastly\Api\ImageOptimizerDefaultSettingsApi


```php
$apiInstance = new Fastly\Api\ImageOptimizerDefaultSettingsApi(
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
[**getDefaultSettings()**](ImageOptimizerDefaultSettingsApi.md#getDefaultSettings) | **GET** /service/{service_id}/version/{version_id}/image_optimizer_default_settings | Get current Image Optimizer Default Settings
[**updateDefaultSettings()**](ImageOptimizerDefaultSettingsApi.md#updateDefaultSettings) | **PATCH** /service/{service_id}/version/{version_id}/image_optimizer_default_settings | Update Image Optimizer Default Settings


## `getDefaultSettings()`

```php
getDefaultSettings($options): \Fastly\Model\DefaultSettingsResponse // Get current Image Optimizer Default Settings
```

Retrieve the current Image Optimizer default settings. All properties in the response will be populated.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.

try {
    $result = $apiInstance->getDefaultSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling ImageOptimizerDefaultSettingsApi->getDefaultSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\DefaultSettingsResponse**](../Model/DefaultSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDefaultSettings()`

```php
updateDefaultSettings($options): \Fastly\Model\DefaultSettingsResponse // Update Image Optimizer Default Settings
```

Update one or more default settings. A minimum of one property is required. The endpoint will respond with the new Image Optimizer default settings, with all properties populated.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['version_id'] = 56; // int | Integer identifying a service version.
$options['default_settings'] = {"type":"object","properties":{"resize_filter":{"type":"string","enum":["lanczos3","lanczos2","bicubic","bilinear","nearest"],"default":"lanczos3","description":"The type of filter to use while resizing an image.","x-enum-descriptions":["A Lanczos filter with a kernel size of 3. Lanczos filters can detect edges and linear features within an image, providing the best possible reconstruction.","A Lanczos filter with a kernel size of 2.","A filter using an average of a 4x4 environment of pixels, weighing the innermost pixels higher.","A filter using an average of a 2x2 environment of pixels.","A filter using the value of nearby translated pixel values. Preserves hard edges."]},"webp":{"type":"boolean","default":false,"description":"Controls whether or not to default to WebP output when the client supports it. This is equivalent to adding \"auto=webp\" to all image optimizer requests.\n"},"webp_quality":{"type":"integer","minimum":1,"maximum":100,"default":85,"description":"The default quality to use with WebP output. This can be overridden with the second option in the \"quality\" URL parameter on specific image optimizer requests.\n"},"jpeg_type":{"type":"string","enum":["auto","baseline","progressive"],"default":"auto","description":"The default type of JPEG output to use. This can be overridden with \"format=bjpeg\" and \"format=pjpeg\" on specific image optimizer requests.\n","x-enum-descriptions":["Match the input JPEG type, or baseline if transforming from a non-JPEG input.","Output baseline JPEG images","Output progressive JPEG images"]},"jpeg_quality":{"type":"integer","minimum":1,"maximum":100,"default":85,"description":"The default quality to use with JPEG output. This can be overridden with the \"quality\" parameter on specific image optimizer requests.\n"},"upscale":{"type":"boolean","default":false,"description":"Whether or not we should allow output images to render at sizes larger than input.\n"},"allow_video":{"type":"boolean","default":false,"description":"Enables GIF to MP4 transformations on this service."}}}; // \Fastly\Model\DefaultSettings

try {
    $result = $apiInstance->updateDefaultSettings($options);
} catch (Exception $e) {
    echo 'Exception when calling ImageOptimizerDefaultSettingsApi->updateDefaultSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**default_settings** | [**\Fastly\Model\DefaultSettings**](../Model/DefaultSettings.md) |  | [optional]

### Return type

[**\Fastly\Model\DefaultSettingsResponse**](../Model/DefaultSettingsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
