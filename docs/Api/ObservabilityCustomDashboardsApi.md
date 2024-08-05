# Fastly\Api\ObservabilityCustomDashboardsApi


```php
$apiInstance = new Fastly\Api\ObservabilityCustomDashboardsApi(
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
[**createDashboard()**](ObservabilityCustomDashboardsApi.md#createDashboard) | **POST** /observability/dashboards | Create a new dashboard
[**deleteDashboard()**](ObservabilityCustomDashboardsApi.md#deleteDashboard) | **DELETE** /observability/dashboards/{dashboard_id} | Delete an existing dashboard
[**getDashboard()**](ObservabilityCustomDashboardsApi.md#getDashboard) | **GET** /observability/dashboards/{dashboard_id} | Retrieve a dashboard by ID
[**listDashboards()**](ObservabilityCustomDashboardsApi.md#listDashboards) | **GET** /observability/dashboards | List all custom dashboards
[**updateDashboard()**](ObservabilityCustomDashboardsApi.md#updateDashboard) | **PATCH** /observability/dashboards/{dashboard_id} | Update an existing dashboard


## `createDashboard()`

```php
createDashboard($options): \Fastly\Model\Dashboard // Create a new dashboard
```

Create a new dashboard

### Example
```php
    $options['create_dashboard_request'] = new \Fastly\Model\CreateDashboardRequest(); // \Fastly\Model\CreateDashboardRequest

try {
    $result = $apiInstance->createDashboard($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityCustomDashboardsApi->createDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**create_dashboard_request** | [**\Fastly\Model\CreateDashboardRequest**](../Model/CreateDashboardRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\Dashboard**](../Model/Dashboard.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteDashboard()`

```php
deleteDashboard($options) // Delete an existing dashboard
```

Delete an existing dashboard

### Example
```php
    $options['dashboard_id'] = 2eGFXF4F4kTxd4gU39Bg3e; // string

try {
    $apiInstance->deleteDashboard($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityCustomDashboardsApi->deleteDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**dashboard_id** | **string** |  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getDashboard()`

```php
getDashboard($options): \Fastly\Model\Dashboard // Retrieve a dashboard by ID
```

Retrieve a dashboard by ID

### Example
```php
    $options['dashboard_id'] = 2eGFXF4F4kTxd4gU39Bg3e; // string

try {
    $result = $apiInstance->getDashboard($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityCustomDashboardsApi->getDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**dashboard_id** | **string** |  |

### Return type

[**\Fastly\Model\Dashboard**](../Model/Dashboard.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listDashboards()`

```php
listDashboards($options): \Fastly\Model\ListDashboardsResponse // List all custom dashboards
```

List all custom dashboards

### Example
```php
    
try {
    $result = $apiInstance->listDashboards($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityCustomDashboardsApi->listDashboards: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\ListDashboardsResponse**](../Model/ListDashboardsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateDashboard()`

```php
updateDashboard($options): \Fastly\Model\Dashboard // Update an existing dashboard
```

Update an existing dashboard

### Example
```php
    $options['dashboard_id'] = 2eGFXF4F4kTxd4gU39Bg3e; // string
$options['update_dashboard_request'] = new \Fastly\Model\UpdateDashboardRequest(); // \Fastly\Model\UpdateDashboardRequest

try {
    $result = $apiInstance->updateDashboard($options);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityCustomDashboardsApi->updateDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**dashboard_id** | **string** |  |
**update_dashboard_request** | [**\Fastly\Model\UpdateDashboardRequest**](../Model/UpdateDashboardRequest.md) |  | [optional]

### Return type

[**\Fastly\Model\Dashboard**](../Model/Dashboard.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
