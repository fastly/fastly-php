# Fastly\Api\VclDiffApi


```php
$apiInstance = new Fastly\Api\VclDiffApi(
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
[**vclDiffServiceVersions()**](VclDiffApi.md#vclDiffServiceVersions) | **GET** /service/{service_id}/vcl/diff/from/{from_version_id}/to/{to_version_id} | Get a comparison of the VCL changes between two service versions


## `vclDiffServiceVersions()`

```php
vclDiffServiceVersions($options): \Fastly\Model\VclDiff // Get a comparison of the VCL changes between two service versions
```

Get a comparison of the VCL changes between two service versions.

### Example
```php
    $options['service_id'] = 'service_id_example'; // string | Alphanumeric string identifying the service.
$options['from_version_id'] = 1; // int | The version number of the service to which changes in the generated VCL are being compared. Can either be a positive number from 1 to your maximum version or a negative number from -1 down (-1 is latest version etc).
$options['to_version_id'] = 2; // int | The version number of the service from which changes in the generated VCL are being compared. Uses same numbering scheme as `from`.
$options['format'] = 'text'; // string | Optional method to format the diff field.

try {
    $result = $apiInstance->vclDiffServiceVersions($options);
} catch (Exception $e) {
    echo 'Exception when calling VclDiffApi->vclDiffServiceVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**from_version_id** | **int** | The version number of the service to which changes in the generated VCL are being compared. Can either be a positive number from 1 to your maximum version or a negative number from -1 down (-1 is latest version etc). |
**to_version_id** | **int** | The version number of the service from which changes in the generated VCL are being compared. Uses same numbering scheme as `from`. |
**format** | **string** | Optional method to format the diff field. | [optional] [one of: 'text', 'html', 'html_simple'] [defaults to 'text']

### Return type

[**\Fastly\Model\VclDiff**](../Model/VclDiff.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
