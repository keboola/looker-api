# Swagger\Client\LookmlModelApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allLookmlModels**](LookmlModelApi.md#allLookmlModels) | **GET** /lookml_models | Get All LookML Models
[**createLookmlModel**](LookmlModelApi.md#createLookmlModel) | **POST** /lookml_models | Create LookML Model
[**deleteLookmlModel**](LookmlModelApi.md#deleteLookmlModel) | **DELETE** /lookml_models/{lookml_model_name} | Delete LookML Model
[**lookmlModel**](LookmlModelApi.md#lookmlModel) | **GET** /lookml_models/{lookml_model_name} | Get LookML Model
[**lookmlModelExplore**](LookmlModelApi.md#lookmlModelExplore) | **GET** /lookml_models/{lookml_model_name}/explores/{explore_name} | Get LookML Model Explore
[**updateLookmlModel**](LookmlModelApi.md#updateLookmlModel) | **PATCH** /lookml_models/{lookml_model_name} | Update LookML Model


# **allLookmlModels**
> \Swagger\Client\Model\LookmlModel[] allLookmlModels($fields)

Get All LookML Models

### Get information about all lookml models.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookmlModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allLookmlModels($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookmlModelApi->allLookmlModels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\LookmlModel[]**](../Model/LookmlModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLookmlModel**
> \Swagger\Client\Model\LookmlModel createLookmlModel($body)

Create LookML Model

### Create a lookml model using the specified configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookmlModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LookmlModel(); // \Swagger\Client\Model\LookmlModel | LookML Model

try {
    $result = $apiInstance->createLookmlModel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookmlModelApi->createLookmlModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LookmlModel**](../Model/LookmlModel.md)| LookML Model | [optional]

### Return type

[**\Swagger\Client\Model\LookmlModel**](../Model/LookmlModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLookmlModel**
> string deleteLookmlModel($lookml_model_name)

Delete LookML Model

### Delete a lookml model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookmlModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lookml_model_name = "lookml_model_name_example"; // string | Name of lookml model.

try {
    $result = $apiInstance->deleteLookmlModel($lookml_model_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookmlModelApi->deleteLookmlModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookml_model_name** | **string**| Name of lookml model. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookmlModel**
> \Swagger\Client\Model\LookmlModel lookmlModel($lookml_model_name, $fields)

Get LookML Model

### Get information about a lookml model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookmlModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lookml_model_name = "lookml_model_name_example"; // string | Name of lookml model.
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->lookmlModel($lookml_model_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookmlModelApi->lookmlModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookml_model_name** | **string**| Name of lookml model. |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\LookmlModel**](../Model/LookmlModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookmlModelExplore**
> \Swagger\Client\Model\LookmlModelExplore lookmlModelExplore($lookml_model_name, $explore_name, $fields)

Get LookML Model Explore

### Get information about a lookml model explore.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookmlModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lookml_model_name = "lookml_model_name_example"; // string | Name of lookml model.
$explore_name = "explore_name_example"; // string | Name of explore.
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->lookmlModelExplore($lookml_model_name, $explore_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookmlModelApi->lookmlModelExplore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookml_model_name** | **string**| Name of lookml model. |
 **explore_name** | **string**| Name of explore. |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\LookmlModelExplore**](../Model/LookmlModelExplore.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLookmlModel**
> \Swagger\Client\Model\LookmlModel updateLookmlModel($lookml_model_name, $body)

Update LookML Model

### Update a lookml model using the specified configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LookmlModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lookml_model_name = "lookml_model_name_example"; // string | Name of lookml model.
$body = new \Swagger\Client\Model\LookmlModel(); // \Swagger\Client\Model\LookmlModel | LookML Model

try {
    $result = $apiInstance->updateLookmlModel($lookml_model_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookmlModelApi->updateLookmlModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookml_model_name** | **string**| Name of lookml model. |
 **body** | [**\Swagger\Client\Model\LookmlModel**](../Model/LookmlModel.md)| LookML Model |

### Return type

[**\Swagger\Client\Model\LookmlModel**](../Model/LookmlModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

