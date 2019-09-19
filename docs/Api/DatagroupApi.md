# Swagger\Client\DatagroupApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allDatagroups**](DatagroupApi.md#allDatagroups) | **GET** /datagroups | Get All Datagroups
[**datagroup**](DatagroupApi.md#datagroup) | **GET** /datagroups/{datagroup_id} | Get Datagroup
[**updateDatagroup**](DatagroupApi.md#updateDatagroup) | **PATCH** /datagroups/{datagroup_id} | Update Datagroup


# **allDatagroups**
> \Swagger\Client\Model\Datagroup[] allDatagroups()

Get All Datagroups

### Get information about all datagroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DatagroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allDatagroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatagroupApi->allDatagroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Datagroup[]**](../Model/Datagroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datagroup**
> \Swagger\Client\Model\Datagroup datagroup($datagroup_id)

Get Datagroup

### Get information about a datagroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DatagroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datagroup_id = "datagroup_id_example"; // string | ID of datagroup.

try {
    $result = $apiInstance->datagroup($datagroup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatagroupApi->datagroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datagroup_id** | **string**| ID of datagroup. |

### Return type

[**\Swagger\Client\Model\Datagroup**](../Model/Datagroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDatagroup**
> \Swagger\Client\Model\Datagroup updateDatagroup($datagroup_id, $body)

Update Datagroup

### Update a datagroup using the specified params.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DatagroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datagroup_id = "datagroup_id_example"; // string | ID of datagroup.
$body = new \Swagger\Client\Model\Datagroup(); // \Swagger\Client\Model\Datagroup | Datagroup

try {
    $result = $apiInstance->updateDatagroup($datagroup_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatagroupApi->updateDatagroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datagroup_id** | **string**| ID of datagroup. |
 **body** | [**\Swagger\Client\Model\Datagroup**](../Model/Datagroup.md)| Datagroup |

### Return type

[**\Swagger\Client\Model\Datagroup**](../Model/Datagroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

