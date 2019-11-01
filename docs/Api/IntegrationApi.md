# Swagger\Client\IntegrationApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptIntegrationHubLegalAgreement**](IntegrationApi.md#acceptIntegrationHubLegalAgreement) | **POST** /integration_hubs/{integration_hub_id}/accept_legal_agreement | Accept Integration Hub Legal Agreement
[**allIntegrationHubs**](IntegrationApi.md#allIntegrationHubs) | **GET** /integration_hubs | Get All Integration Hubs
[**allIntegrations**](IntegrationApi.md#allIntegrations) | **GET** /integrations | Get All Integrations
[**createIntegrationHub**](IntegrationApi.md#createIntegrationHub) | **POST** /integration_hubs | Create Integration Hub
[**deleteIntegrationHub**](IntegrationApi.md#deleteIntegrationHub) | **DELETE** /integration_hubs/{integration_hub_id} | Delete Integration Hub
[**fetchIntegrationForm**](IntegrationApi.md#fetchIntegrationForm) | **POST** /integrations/{integration_id}/form | Fetch Remote Integration Form
[**integration**](IntegrationApi.md#integration) | **GET** /integrations/{integration_id} | Get Integration
[**integrationHub**](IntegrationApi.md#integrationHub) | **GET** /integration_hubs/{integration_hub_id} | Get Integration Hub
[**testIntegration**](IntegrationApi.md#testIntegration) | **POST** /integrations/{integration_id}/test | Test integration
[**updateIntegration**](IntegrationApi.md#updateIntegration) | **PATCH** /integrations/{integration_id} | Update Integration
[**updateIntegrationHub**](IntegrationApi.md#updateIntegrationHub) | **PATCH** /integration_hubs/{integration_hub_id} | Update Integration Hub


# **acceptIntegrationHubLegalAgreement**
> \Swagger\Client\Model\IntegrationHub acceptIntegrationHubLegalAgreement($integration_hub_id)

Accept Integration Hub Legal Agreement

Accepts the legal agreement for a given integration hub. This only works for integration hubs that have legal_agreement_required set to true and legal_agreement_signed set to false.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_hub_id = 789; // int | Id of integration_hub

try {
    $result = $apiInstance->acceptIntegrationHubLegalAgreement($integration_hub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->acceptIntegrationHubLegalAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_hub_id** | **int**| Id of integration_hub |

### Return type

[**\Swagger\Client\Model\IntegrationHub**](../Model/IntegrationHub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allIntegrationHubs**
> \Swagger\Client\Model\IntegrationHub[] allIntegrationHubs($fields)

Get All Integration Hubs

### Get information about all Integration Hubs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allIntegrationHubs($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->allIntegrationHubs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationHub[]**](../Model/IntegrationHub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allIntegrations**
> \Swagger\Client\Model\Integration[] allIntegrations($fields, $integration_hub_id)

Get All Integrations

### Get information about all Integrations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.
$integration_hub_id = "integration_hub_id_example"; // string | Filter to a specific provider

try {
    $result = $apiInstance->allIntegrations($fields, $integration_hub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->allIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]
 **integration_hub_id** | **string**| Filter to a specific provider | [optional]

### Return type

[**\Swagger\Client\Model\Integration[]**](../Model/Integration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createIntegrationHub**
> \Swagger\Client\Model\IntegrationHub createIntegrationHub($body, $fields)

Create Integration Hub

### Create a new Integration Hub.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\IntegrationHub(); // \Swagger\Client\Model\IntegrationHub | Integration Hub
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createIntegrationHub($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->createIntegrationHub: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IntegrationHub**](../Model/IntegrationHub.md)| Integration Hub | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationHub**](../Model/IntegrationHub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIntegrationHub**
> string deleteIntegrationHub($integration_hub_id)

Delete Integration Hub

### Delete a Integration Hub.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_hub_id = 789; // int | Id of integration_hub

try {
    $result = $apiInstance->deleteIntegrationHub($integration_hub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->deleteIntegrationHub: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_hub_id** | **int**| Id of integration_hub |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchIntegrationForm**
> \Swagger\Client\Model\DataActionForm fetchIntegrationForm($integration_id)

Fetch Remote Integration Form

Returns the Integration form for presentation to the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = 789; // int | Id of Integration

try {
    $result = $apiInstance->fetchIntegrationForm($integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->fetchIntegrationForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **int**| Id of Integration |

### Return type

[**\Swagger\Client\Model\DataActionForm**](../Model/DataActionForm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integration**
> \Swagger\Client\Model\Integration integration($integration_id, $fields)

Get Integration

### Get information about a Integration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = 789; // int | Id of Integration
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->integration($integration_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->integration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **int**| Id of Integration |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Integration**](../Model/Integration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **integrationHub**
> \Swagger\Client\Model\IntegrationHub integrationHub($integration_hub_id, $fields)

Get Integration Hub

### Get information about a Integration Hub.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_hub_id = 789; // int | Id of Integration Hub
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->integrationHub($integration_hub_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->integrationHub: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_hub_id** | **int**| Id of Integration Hub |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationHub**](../Model/IntegrationHub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testIntegration**
> \Swagger\Client\Model\IntegrationTestResult testIntegration($integration_id)

Test integration

Tests the integration to make sure all the settings are working.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = 789; // int | Id of Integration

try {
    $result = $apiInstance->testIntegration($integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->testIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **int**| Id of Integration |

### Return type

[**\Swagger\Client\Model\IntegrationTestResult**](../Model/IntegrationTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIntegration**
> \Swagger\Client\Model\Integration updateIntegration($integration_id, $body, $fields)

Update Integration

### Update parameters on a Integration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_id = 789; // int | Id of Integration
$body = new \Swagger\Client\Model\Integration(); // \Swagger\Client\Model\Integration | Integration
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->updateIntegration($integration_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_id** | **int**| Id of Integration |
 **body** | [**\Swagger\Client\Model\Integration**](../Model/Integration.md)| Integration |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Integration**](../Model/Integration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIntegrationHub**
> \Swagger\Client\Model\IntegrationHub updateIntegrationHub($integration_hub_id, $body, $fields)

Update Integration Hub

### Update a Integration Hub definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_hub_id = 789; // int | Id of Integration Hub
$body = new \Swagger\Client\Model\IntegrationHub(); // \Swagger\Client\Model\IntegrationHub | Integration Hub
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->updateIntegrationHub($integration_hub_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->updateIntegrationHub: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_hub_id** | **int**| Id of Integration Hub |
 **body** | [**\Swagger\Client\Model\IntegrationHub**](../Model/IntegrationHub.md)| Integration Hub |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\IntegrationHub**](../Model/IntegrationHub.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

