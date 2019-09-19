# Swagger\Client\ConnectionApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allConnections**](ConnectionApi.md#allConnections) | **GET** /connections | Get All Connections
[**allDialectInfos**](ConnectionApi.md#allDialectInfos) | **GET** /dialect_info | Get All Dialect Infos
[**connection**](ConnectionApi.md#connection) | **GET** /connections/{connection_name} | Get Connection
[**createConnection**](ConnectionApi.md#createConnection) | **POST** /connections | Create Connection
[**deleteConnection**](ConnectionApi.md#deleteConnection) | **DELETE** /connections/{connection_name} | Delete Connection
[**deleteConnectionOverride**](ConnectionApi.md#deleteConnectionOverride) | **DELETE** /connections/{connection_name}/connection_override/{override_context} | Delete Connection Override
[**testConnection**](ConnectionApi.md#testConnection) | **PUT** /connections/{connection_name}/test | Test Connection
[**testConnectionConfig**](ConnectionApi.md#testConnectionConfig) | **PUT** /connections/test | Test Connection Configuration
[**updateConnection**](ConnectionApi.md#updateConnection) | **PATCH** /connections/{connection_name} | Update Connection


# **allConnections**
> \Swagger\Client\Model\DBConnection[] allConnections($fields)

Get All Connections

### Get information about all connections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allConnections($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->allConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\DBConnection[]**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allDialectInfos**
> \Swagger\Client\Model\DialectInfo[] allDialectInfos($fields)

Get All Dialect Infos

### Get information about all dialects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allDialectInfos($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->allDialectInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\DialectInfo[]**](../Model/DialectInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connection**
> \Swagger\Client\Model\DBConnection connection($connection_name, $fields)

Get Connection

### Get information about a connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->connection($connection_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createConnection**
> \Swagger\Client\Model\DBConnection createConnection($body)

Create Connection

### Create a connection using the specified configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DBConnection(); // \Swagger\Client\Model\DBConnection | Connection

try {
    $result = $apiInstance->createConnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->createConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)| Connection | [optional]

### Return type

[**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConnection**
> string deleteConnection($connection_name)

Delete Connection

### Delete a connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection

try {
    $result = $apiInstance->deleteConnection($connection_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->deleteConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConnectionOverride**
> string deleteConnectionOverride($connection_name, $override_context)

Delete Connection Override

### Delete a connection override.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$override_context = "override_context_example"; // string | Context of connection override

try {
    $result = $apiInstance->deleteConnectionOverride($connection_name, $override_context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->deleteConnectionOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **override_context** | **string**| Context of connection override |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testConnection**
> \Swagger\Client\Model\DBConnectionTestResult[] testConnection($connection_name, $tests)

Test Connection

### Test an existing connection.  Note that a connection's 'dialect' property has a 'connection_tests' property that lists the specific types of tests that the connection supports.  This API is rate limited.  Unsupported tests in the request will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$tests = array("tests_example"); // string[] | Array of names of tests to run

try {
    $result = $apiInstance->testConnection($connection_name, $tests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->testConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **tests** | [**string[]**](../Model/string.md)| Array of names of tests to run | [optional]

### Return type

[**\Swagger\Client\Model\DBConnectionTestResult[]**](../Model/DBConnectionTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testConnectionConfig**
> \Swagger\Client\Model\DBConnectionTestResult[] testConnectionConfig($body, $tests)

Test Connection Configuration

### Test a connection configuration.  Note that a connection's 'dialect' property has a 'connection_tests' property that lists the specific types of tests that the connection supports.  This API is rate limited.  Unsupported tests in the request will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DBConnection(); // \Swagger\Client\Model\DBConnection | Connection
$tests = array("tests_example"); // string[] | Array of names of tests to run

try {
    $result = $apiInstance->testConnectionConfig($body, $tests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->testConnectionConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)| Connection | [optional]
 **tests** | [**string[]**](../Model/string.md)| Array of names of tests to run | [optional]

### Return type

[**\Swagger\Client\Model\DBConnectionTestResult[]**](../Model/DBConnectionTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConnection**
> \Swagger\Client\Model\DBConnection updateConnection($connection_name, $body)

Update Connection

### Update a connection using the specified configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$body = new \Swagger\Client\Model\DBConnection(); // \Swagger\Client\Model\DBConnection | Connection

try {
    $result = $apiInstance->updateConnection($connection_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->updateConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **body** | [**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)| Connection |

### Return type

[**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

