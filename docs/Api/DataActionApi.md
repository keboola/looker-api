# Swagger\Client\DataActionApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchRemoteDataActionForm**](DataActionApi.md#fetchRemoteDataActionForm) | **POST** /data_actions/form | Fetch Remote Data Action Form
[**performDataAction**](DataActionApi.md#performDataAction) | **POST** /data_actions | Send a Data Action


# **fetchRemoteDataActionForm**
> \Swagger\Client\Model\DataActionForm fetchRemoteDataActionForm($body)

Fetch Remote Data Action Form

For some data actions, the remote server may supply a form requesting further user input. This endpoint takes a data action, asks the remote server to generate a form for it, and returns that form to you for presentation to the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | Data Action Request

try {
    $result = $apiInstance->fetchRemoteDataActionForm($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataActionApi->fetchRemoteDataActionForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**| Data Action Request |

### Return type

[**\Swagger\Client\Model\DataActionForm**](../Model/DataActionForm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performDataAction**
> \Swagger\Client\Model\DataActionResponse performDataAction($body)

Send a Data Action

Perform a data action. The data action object can be obtained from query results, and used to perform an arbitrary action.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DataActionRequest(); // \Swagger\Client\Model\DataActionRequest | Data Action Request

try {
    $result = $apiInstance->performDataAction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataActionApi->performDataAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DataActionRequest**](../Model/DataActionRequest.md)| Data Action Request |

### Return type

[**\Swagger\Client\Model\DataActionResponse**](../Model/DataActionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

