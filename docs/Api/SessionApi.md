# Swagger\Client\SessionApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**session**](SessionApi.md#session) | **GET** /session | Get Session
[**updateSession**](SessionApi.md#updateSession) | **PATCH** /session | Update Session


# **session**
> \Swagger\Client\Model\ApiSession session()

Get Session

### Get API Session  Returns information about the current API session, such as which workspace is selected for the session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->session();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->session: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApiSession**](../Model/ApiSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSession**
> \Swagger\Client\Model\ApiSession updateSession($body)

Update Session

### Update API Session  #### API Session Workspace  You can use this endpoint to change the active workspace for the current API session.  Only one workspace can be active in a session. The active workspace can be changed any number of times in a session.  The default workspace for API sessions is the \"production\" workspace.  All Looker APIs that use projects or lookml models (such as running queries) will use the version of project and model files defined by this workspace for the lifetime of the current API session or until the session workspace is changed again.  An API session has the same lifetime as the access_token used to authenticate API requests. Each successful API login generates a new access_token and a new API session.  If your Looker API client application needs to work in a dev workspace across multiple API sessions, be sure to select the dev workspace after each login.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiSession(); // \Swagger\Client\Model\ApiSession | Session

try {
    $result = $apiInstance->updateSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->updateSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiSession**](../Model/ApiSession.md)| Session |

### Return type

[**\Swagger\Client\Model\ApiSession**](../Model/ApiSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

