# Swagger\Client\DerivedTableApi

All URIs are relative to *https://example.looker.com:443/api/4.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPdtBuild**](DerivedTableApi.md#checkPdtBuild) | **GET** /derived_table/{materialization_id}/status | Check status of a PDT materialization
[**graphDerivedTablesForModel**](DerivedTableApi.md#graphDerivedTablesForModel) | **GET** /derived_table/graph/model/{model} | Get Derived Table graph for model
[**graphDerivedTablesForView**](DerivedTableApi.md#graphDerivedTablesForView) | **GET** /derived_table/graph/view/{view} | Get subgraph of derived table and dependencies
[**startPdtBuild**](DerivedTableApi.md#startPdtBuild) | **GET** /derived_table/{model_name}/{view_name}/start | Start a PDT materialization
[**stopPdtBuild**](DerivedTableApi.md#stopPdtBuild) | **GET** /derived_table/{materialization_id}/stop | Stop a PDT materialization


# **checkPdtBuild**
> \Swagger\Client\Model\MaterializePDT checkPdtBuild($materialization_id)

Check status of a PDT materialization

Check status of PDT materialization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DerivedTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$materialization_id = "materialization_id_example"; // string | The materialization id to check status for.

try {
    $result = $apiInstance->checkPdtBuild($materialization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DerivedTableApi->checkPdtBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **materialization_id** | **string**| The materialization id to check status for. |

### Return type

[**\Swagger\Client\Model\MaterializePDT**](../Model/MaterializePDT.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graphDerivedTablesForModel**
> \Swagger\Client\Model\DependencyGraph graphDerivedTablesForModel($model, $format, $color)

Get Derived Table graph for model

### Discover information about derived tables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DerivedTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model = "model_example"; // string | The name of the Lookml model.
$format = "format_example"; // string | The format of the graph. Valid values are [dot]. Default is `dot`
$color = "color_example"; // string | Color denoting the build status of the graph. Grey = not built, green = built, yellow = building, red = error.

try {
    $result = $apiInstance->graphDerivedTablesForModel($model, $format, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DerivedTableApi->graphDerivedTablesForModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**| The name of the Lookml model. |
 **format** | **string**| The format of the graph. Valid values are [dot]. Default is &#x60;dot&#x60; | [optional]
 **color** | **string**| Color denoting the build status of the graph. Grey &#x3D; not built, green &#x3D; built, yellow &#x3D; building, red &#x3D; error. | [optional]

### Return type

[**\Swagger\Client\Model\DependencyGraph**](../Model/DependencyGraph.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graphDerivedTablesForView**
> \Swagger\Client\Model\DependencyGraph graphDerivedTablesForView($view, $models, $workspace)

Get subgraph of derived table and dependencies

### Get the subgraph representing this derived table and its dependencies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DerivedTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$view = "view_example"; // string | The derived table's view name.
$models = "models_example"; // string | The models where this derived table is defined.
$workspace = "workspace_example"; // string | The model directory to look in, either `dev` or `production`.

try {
    $result = $apiInstance->graphDerivedTablesForView($view, $models, $workspace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DerivedTableApi->graphDerivedTablesForView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view** | **string**| The derived table&#39;s view name. |
 **models** | **string**| The models where this derived table is defined. | [optional]
 **workspace** | **string**| The model directory to look in, either &#x60;dev&#x60; or &#x60;production&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\DependencyGraph**](../Model/DependencyGraph.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPdtBuild**
> \Swagger\Client\Model\MaterializePDT startPdtBuild($model_name, $view_name, $force_rebuild, $force_full_incremental, $workspace, $source)

Start a PDT materialization

Enqueue materialization for a PDT with the given model name and view name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DerivedTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model_name = "model_name_example"; // string | The model of the PDT to start building.
$view_name = "view_name_example"; // string | The view name of the PDT to start building.
$force_rebuild = "force_rebuild_example"; // string | Force rebuild of required dependent PDTs, even if they are already materialized.
$force_full_incremental = "force_full_incremental_example"; // string | Force involved incremental PDTs to fully re-materialize.
$workspace = "workspace_example"; // string | Workspace in which to materialize selected PDT ('dev' or default 'production').
$source = "source_example"; // string | The source of this request.

try {
    $result = $apiInstance->startPdtBuild($model_name, $view_name, $force_rebuild, $force_full_incremental, $workspace, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DerivedTableApi->startPdtBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_name** | **string**| The model of the PDT to start building. |
 **view_name** | **string**| The view name of the PDT to start building. |
 **force_rebuild** | **string**| Force rebuild of required dependent PDTs, even if they are already materialized. | [optional]
 **force_full_incremental** | **string**| Force involved incremental PDTs to fully re-materialize. | [optional]
 **workspace** | **string**| Workspace in which to materialize selected PDT (&#39;dev&#39; or default &#39;production&#39;). | [optional]
 **source** | **string**| The source of this request. | [optional]

### Return type

[**\Swagger\Client\Model\MaterializePDT**](../Model/MaterializePDT.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopPdtBuild**
> \Swagger\Client\Model\MaterializePDT stopPdtBuild($materialization_id, $source)

Stop a PDT materialization

Stop a PDT materialization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DerivedTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$materialization_id = "materialization_id_example"; // string | The materialization id to stop.
$source = "source_example"; // string | The source of this request.

try {
    $result = $apiInstance->stopPdtBuild($materialization_id, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DerivedTableApi->stopPdtBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **materialization_id** | **string**| The materialization id to stop. |
 **source** | **string**| The source of this request. | [optional]

### Return type

[**\Swagger\Client\Model\MaterializePDT**](../Model/MaterializePDT.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

