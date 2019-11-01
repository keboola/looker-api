# Swagger\Client\ConfigApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allLegacyFeatures**](ConfigApi.md#allLegacyFeatures) | **GET** /legacy_features | Get All Legacy Features
[**allLocales**](ConfigApi.md#allLocales) | **GET** /locales | Get All Locales
[**allTimezones**](ConfigApi.md#allTimezones) | **GET** /timezones | Get All Timezones
[**backupConfiguration**](ConfigApi.md#backupConfiguration) | **GET** /backup_configuration | Get Backup Configuration
[**internalHelpResources**](ConfigApi.md#internalHelpResources) | **GET** /internal_help_resources_enabled | Get Internal Help Resources
[**internalHelpResourcesContent**](ConfigApi.md#internalHelpResourcesContent) | **GET** /internal_help_resources_content | Get Internal Help Resources Content
[**legacyFeature**](ConfigApi.md#legacyFeature) | **GET** /legacy_features/{legacy_feature_id} | Get Legacy Feature
[**updateBackupConfiguration**](ConfigApi.md#updateBackupConfiguration) | **PATCH** /backup_configuration | Update Backup Configuration
[**updateInternalHelpResources**](ConfigApi.md#updateInternalHelpResources) | **PATCH** /internal_help_resources | Update internal help resources configuration
[**updateInternalHelpResourcesContent**](ConfigApi.md#updateInternalHelpResourcesContent) | **PATCH** /internal_help_resources_content | Update internal help resources content
[**updateLegacyFeature**](ConfigApi.md#updateLegacyFeature) | **PATCH** /legacy_features/{legacy_feature_id} | Update Legacy Feature
[**updateWhitelabelConfiguration**](ConfigApi.md#updateWhitelabelConfiguration) | **PUT** /whitelabel_configuration | Update Whitelabel configuration
[**versions**](ConfigApi.md#versions) | **GET** /versions | Get ApiVersion
[**whitelabelConfiguration**](ConfigApi.md#whitelabelConfiguration) | **GET** /whitelabel_configuration | Get Whitelabel configuration


# **allLegacyFeatures**
> \Swagger\Client\Model\LegacyFeature[] allLegacyFeatures()

Get All Legacy Features

### Get all legacy features.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allLegacyFeatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->allLegacyFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LegacyFeature[]**](../Model/LegacyFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allLocales**
> \Swagger\Client\Model\Locale[] allLocales()

Get All Locales

### Get a list of locales that Looker supports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->allLocales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Locale[]**](../Model/Locale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allTimezones**
> \Swagger\Client\Model\Timezone[] allTimezones()

Get All Timezones

### Get a list of timezones that Looker supports (e.g. useful for scheduling tasks).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allTimezones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->allTimezones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Timezone[]**](../Model/Timezone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backupConfiguration**
> \Swagger\Client\Model\BackupConfiguration backupConfiguration()

Get Backup Configuration

### Get the current Looker internal database backup configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->backupConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->backupConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BackupConfiguration**](../Model/BackupConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalHelpResources**
> \Swagger\Client\Model\InternalHelpResources internalHelpResources()

Get Internal Help Resources

### Get and set the options for internal help resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->internalHelpResources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->internalHelpResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InternalHelpResources**](../Model/InternalHelpResources.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **internalHelpResourcesContent**
> \Swagger\Client\Model\InternalHelpResourcesContent internalHelpResourcesContent()

Get Internal Help Resources Content

### Set the menu item name and content for internal help resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->internalHelpResourcesContent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->internalHelpResourcesContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InternalHelpResourcesContent**](../Model/InternalHelpResourcesContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **legacyFeature**
> \Swagger\Client\Model\LegacyFeature legacyFeature($legacy_feature_id)

Get Legacy Feature

### Get information about the legacy feature with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$legacy_feature_id = 789; // int | id of legacy feature

try {
    $result = $apiInstance->legacyFeature($legacy_feature_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->legacyFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_feature_id** | **int**| id of legacy feature |

### Return type

[**\Swagger\Client\Model\LegacyFeature**](../Model/LegacyFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBackupConfiguration**
> \Swagger\Client\Model\BackupConfiguration updateBackupConfiguration($body)

Update Backup Configuration

### Update the Looker internal database backup configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BackupConfiguration(); // \Swagger\Client\Model\BackupConfiguration | Options for Backup Configuration

try {
    $result = $apiInstance->updateBackupConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateBackupConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BackupConfiguration**](../Model/BackupConfiguration.md)| Options for Backup Configuration |

### Return type

[**\Swagger\Client\Model\BackupConfiguration**](../Model/BackupConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInternalHelpResources**
> \Swagger\Client\Model\InternalHelpResources updateInternalHelpResources($body)

Update internal help resources configuration

Update internal help resources settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\InternalHelpResources(); // \Swagger\Client\Model\InternalHelpResources | Custom Welcome Email

try {
    $result = $apiInstance->updateInternalHelpResources($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateInternalHelpResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InternalHelpResources**](../Model/InternalHelpResources.md)| Custom Welcome Email |

### Return type

[**\Swagger\Client\Model\InternalHelpResources**](../Model/InternalHelpResources.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInternalHelpResourcesContent**
> \Swagger\Client\Model\InternalHelpResourcesContent updateInternalHelpResourcesContent($body)

Update internal help resources content

Update internal help resources content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\InternalHelpResourcesContent(); // \Swagger\Client\Model\InternalHelpResourcesContent | Internal Help Resources Content

try {
    $result = $apiInstance->updateInternalHelpResourcesContent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateInternalHelpResourcesContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InternalHelpResourcesContent**](../Model/InternalHelpResourcesContent.md)| Internal Help Resources Content |

### Return type

[**\Swagger\Client\Model\InternalHelpResourcesContent**](../Model/InternalHelpResourcesContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLegacyFeature**
> \Swagger\Client\Model\LegacyFeature updateLegacyFeature($legacy_feature_id, $body)

Update Legacy Feature

### Update information about the legacy feature with a specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$legacy_feature_id = 789; // int | id of legacy feature
$body = new \Swagger\Client\Model\LegacyFeature(); // \Swagger\Client\Model\LegacyFeature | Legacy Feature

try {
    $result = $apiInstance->updateLegacyFeature($legacy_feature_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateLegacyFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_feature_id** | **int**| id of legacy feature |
 **body** | [**\Swagger\Client\Model\LegacyFeature**](../Model/LegacyFeature.md)| Legacy Feature |

### Return type

[**\Swagger\Client\Model\LegacyFeature**](../Model/LegacyFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWhitelabelConfiguration**
> \Swagger\Client\Model\WhitelabelConfiguration updateWhitelabelConfiguration($body)

Update Whitelabel configuration

### Update the whitelabel configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WhitelabelConfiguration(); // \Swagger\Client\Model\WhitelabelConfiguration | Whitelabel configuration

try {
    $result = $apiInstance->updateWhitelabelConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateWhitelabelConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WhitelabelConfiguration**](../Model/WhitelabelConfiguration.md)| Whitelabel configuration |

### Return type

[**\Swagger\Client\Model\WhitelabelConfiguration**](../Model/WhitelabelConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **versions**
> \Swagger\Client\Model\ApiVersion versions($fields)

Get ApiVersion

### Get information about all API versions supported by this Looker instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->versions($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->versions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ApiVersion**](../Model/ApiVersion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **whitelabelConfiguration**
> \Swagger\Client\Model\WhitelabelConfiguration whitelabelConfiguration($fields)

Get Whitelabel configuration

### This feature is enabled only by special license. ### Gets the whitelabel configuration, which includes hiding documentation links, custom favicon uploading, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->whitelabelConfiguration($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->whitelabelConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\WhitelabelConfiguration**](../Model/WhitelabelConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

