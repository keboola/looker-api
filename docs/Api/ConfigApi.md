# Swagger\Client\ConfigApi

All URIs are relative to *https://example.looker.com:443/api/4.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allLegacyFeatures**](ConfigApi.md#allLegacyFeatures) | **GET** /legacy_features | Get All Legacy Features
[**allLocales**](ConfigApi.md#allLocales) | **GET** /locales | Get All Locales
[**allTimezones**](ConfigApi.md#allTimezones) | **GET** /timezones | Get All Timezones
[**apiSpec**](ConfigApi.md#apiSpec) | **GET** /api_spec/{api_version}/{specification} | Get an API specification
[**cloudStorageConfiguration**](ConfigApi.md#cloudStorageConfiguration) | **GET** /cloud_storage | Get Cloud Storage
[**createDigestEmailSend**](ConfigApi.md#createDigestEmailSend) | **POST** /digest_email_send | Deliver digest email contents
[**customWelcomeEmail**](ConfigApi.md#customWelcomeEmail) | **GET** /custom_welcome_email | Get Custom Welcome Email
[**digestEmailsEnabled**](ConfigApi.md#digestEmailsEnabled) | **GET** /digest_emails_enabled | Get Digest_emails
[**getSetting**](ConfigApi.md#getSetting) | **GET** /setting | Get Setting
[**internalHelpResources**](ConfigApi.md#internalHelpResources) | **GET** /internal_help_resources_enabled | Get Internal Help Resources
[**internalHelpResourcesContent**](ConfigApi.md#internalHelpResourcesContent) | **GET** /internal_help_resources_content | Get Internal Help Resources Content
[**legacyFeature**](ConfigApi.md#legacyFeature) | **GET** /legacy_features/{legacy_feature_id} | Get Legacy Feature
[**mobileSettings**](ConfigApi.md#mobileSettings) | **GET** /mobile/settings | Get Mobile_Settings
[**publicEgressIpAddresses**](ConfigApi.md#publicEgressIpAddresses) | **GET** /public_egress_ip_addresses | Public Egress IP Addresses
[**setSetting**](ConfigApi.md#setSetting) | **PATCH** /setting | Set Setting
[**setSmtpSettings**](ConfigApi.md#setSmtpSettings) | **POST** /smtp_settings | Set SMTP Setting
[**smtpStatus**](ConfigApi.md#smtpStatus) | **GET** /smtp_status | Get SMTP Status
[**updateCloudStorageConfiguration**](ConfigApi.md#updateCloudStorageConfiguration) | **PATCH** /cloud_storage | Update Cloud Storage
[**updateCustomWelcomeEmail**](ConfigApi.md#updateCustomWelcomeEmail) | **PATCH** /custom_welcome_email | Update Custom Welcome Email Content
[**updateCustomWelcomeEmailTest**](ConfigApi.md#updateCustomWelcomeEmailTest) | **PUT** /custom_welcome_email_test | Send a test welcome email to the currently logged in user with the supplied content
[**updateDigestEmailsEnabled**](ConfigApi.md#updateDigestEmailsEnabled) | **PATCH** /digest_emails_enabled | Update Digest_emails
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

# **apiSpec**
> apiSpec($api_version, $specification)

Get an API specification

### Get an API specification for this Looker instance.  The specification is returned as a JSON document in Swagger 2.x format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = "api_version_example"; // string | API version
$specification = "specification_example"; // string | Specification name. Typically, this is \"swagger.json\"

try {
    $apiInstance->apiSpec($api_version, $specification);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->apiSpec: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API version |
 **specification** | **string**| Specification name. Typically, this is \&quot;swagger.json\&quot; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudStorageConfiguration**
> \Swagger\Client\Model\BackupConfiguration cloudStorageConfiguration()

Get Cloud Storage

Get the current Cloud Storage Configuration.

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
    $result = $apiInstance->cloudStorageConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->cloudStorageConfiguration: ', $e->getMessage(), PHP_EOL;
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

# **createDigestEmailSend**
> \Swagger\Client\Model\DigestEmailSend createDigestEmailSend()

Deliver digest email contents

### Trigger the generation of digest email records and send them to Looker's internal system. This does not send any actual emails, it generates records containing content which may be of interest for users who have become inactive. Emails will be sent at a later time from Looker's internal system if the Digest Emails feature is enabled in settings.

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
    $result = $apiInstance->createDigestEmailSend();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->createDigestEmailSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DigestEmailSend**](../Model/DigestEmailSend.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customWelcomeEmail**
> \Swagger\Client\Model\CustomWelcomeEmail customWelcomeEmail()

Get Custom Welcome Email

### Get the current status and content of custom welcome emails

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
    $result = $apiInstance->customWelcomeEmail();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->customWelcomeEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CustomWelcomeEmail**](../Model/CustomWelcomeEmail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **digestEmailsEnabled**
> \Swagger\Client\Model\DigestEmails digestEmailsEnabled()

Get Digest_emails

### Retrieve the value for whether or not digest emails is enabled

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
    $result = $apiInstance->digestEmailsEnabled();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->digestEmailsEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DigestEmails**](../Model/DigestEmails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSetting**
> \Swagger\Client\Model\Setting getSetting($fields)

Get Setting

### Get Looker Settings  Available settings are:  - allow_user_timezones  - custom_welcome_email  - data_connector_default_enabled  - extension_framework_enabled  - extension_load_url_enabled  - marketplace_auto_install_enabled  - marketplace_enabled  - onboarding_enabled  - privatelabel_configuration  - timezone  - host_url  - email_domain_allowlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->getSetting($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\Setting**](../Model/Setting.md)

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
$legacy_feature_id = "legacy_feature_id_example"; // string | id of legacy feature

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
 **legacy_feature_id** | **string**| id of legacy feature |

### Return type

[**\Swagger\Client\Model\LegacyFeature**](../Model/LegacyFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobileSettings**
> \Swagger\Client\Model\MobileSettings mobileSettings()

Get Mobile_Settings

### Get all mobile settings.

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
    $result = $apiInstance->mobileSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->mobileSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MobileSettings**](../Model/MobileSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicEgressIpAddresses**
> \Swagger\Client\Model\EgressIpAddresses publicEgressIpAddresses()

Public Egress IP Addresses

### Get Egress IP Addresses  Returns the list of public egress IP Addresses for a hosted customer's instance

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
    $result = $apiInstance->publicEgressIpAddresses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->publicEgressIpAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EgressIpAddresses**](../Model/EgressIpAddresses.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSetting**
> \Swagger\Client\Model\Setting setSetting($body, $fields)

Set Setting

### Configure Looker Settings  Available settings are:  - allow_user_timezones  - custom_welcome_email  - data_connector_default_enabled  - extension_framework_enabled  - extension_load_url_enabled  - marketplace_auto_install_enabled  - marketplace_enabled  - onboarding_enabled  - privatelabel_configuration  - timezone  - host_url  - email_domain_allowlist  See the `Setting` type for more information on the specific values that can be configured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Setting(); // \Swagger\Client\Model\Setting | Looker Setting Configuration
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->setSetting($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->setSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Setting**](../Model/Setting.md)| Looker Setting Configuration |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\Setting**](../Model/Setting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSmtpSettings**
> setSmtpSettings($body)

Set SMTP Setting

### Configure SMTP Settings   This API allows users to configure the SMTP settings on the Looker instance.   This API is only supported in the OEM jar. Additionally, only admin users are authorised to call this API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SmtpSettings(); // \Swagger\Client\Model\SmtpSettings | SMTP Setting Configuration

try {
    $apiInstance->setSmtpSettings($body);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->setSmtpSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SmtpSettings**](../Model/SmtpSettings.md)| SMTP Setting Configuration |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smtpStatus**
> \Swagger\Client\Model\SmtpStatus smtpStatus($fields)

Get SMTP Status

### Get current SMTP status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Include only these fields in the response

try {
    $result = $apiInstance->smtpStatus($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->smtpStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Include only these fields in the response | [optional]

### Return type

[**\Swagger\Client\Model\SmtpStatus**](../Model/SmtpStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCloudStorageConfiguration**
> \Swagger\Client\Model\BackupConfiguration updateCloudStorageConfiguration($body)

Update Cloud Storage

Update the current Cloud Storage Configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BackupConfiguration(); // \Swagger\Client\Model\BackupConfiguration | Options for Cloud Storage Configuration

try {
    $result = $apiInstance->updateCloudStorageConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateCloudStorageConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BackupConfiguration**](../Model/BackupConfiguration.md)| Options for Cloud Storage Configuration |

### Return type

[**\Swagger\Client\Model\BackupConfiguration**](../Model/BackupConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomWelcomeEmail**
> \Swagger\Client\Model\CustomWelcomeEmail updateCustomWelcomeEmail($body, $send_test_welcome_email)

Update Custom Welcome Email Content

Update custom welcome email setting and values. Optionally send a test email with the new content to the currently logged in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomWelcomeEmail(); // \Swagger\Client\Model\CustomWelcomeEmail | Custom Welcome Email setting and value to save
$send_test_welcome_email = true; // bool | If true a test email with the content from the request will be sent to the current user after saving

try {
    $result = $apiInstance->updateCustomWelcomeEmail($body, $send_test_welcome_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateCustomWelcomeEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomWelcomeEmail**](../Model/CustomWelcomeEmail.md)| Custom Welcome Email setting and value to save |
 **send_test_welcome_email** | **bool**| If true a test email with the content from the request will be sent to the current user after saving | [optional]

### Return type

[**\Swagger\Client\Model\CustomWelcomeEmail**](../Model/CustomWelcomeEmail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomWelcomeEmailTest**
> \Swagger\Client\Model\WelcomeEmailTest updateCustomWelcomeEmailTest($body)

Send a test welcome email to the currently logged in user with the supplied content

Requests to this endpoint will send a welcome email with the custom content provided in the body to the currently logged in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WelcomeEmailTest(); // \Swagger\Client\Model\WelcomeEmailTest | Subject, header, and Body of the email to be sent.

try {
    $result = $apiInstance->updateCustomWelcomeEmailTest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateCustomWelcomeEmailTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WelcomeEmailTest**](../Model/WelcomeEmailTest.md)| Subject, header, and Body of the email to be sent. |

### Return type

[**\Swagger\Client\Model\WelcomeEmailTest**](../Model/WelcomeEmailTest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDigestEmailsEnabled**
> \Swagger\Client\Model\DigestEmails updateDigestEmailsEnabled($body)

Update Digest_emails

### Update the setting for enabling/disabling digest emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DigestEmails(); // \Swagger\Client\Model\DigestEmails | Digest_emails

try {
    $result = $apiInstance->updateDigestEmailsEnabled($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateDigestEmailsEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DigestEmails**](../Model/DigestEmails.md)| Digest_emails |

### Return type

[**\Swagger\Client\Model\DigestEmails**](../Model/DigestEmails.md)

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
$legacy_feature_id = "legacy_feature_id_example"; // string | id of legacy feature
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
 **legacy_feature_id** | **string**| id of legacy feature |
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

