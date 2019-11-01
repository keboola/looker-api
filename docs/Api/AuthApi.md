# Swagger\Client\AuthApi

All URIs are relative to *https://example.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allUserLoginLockouts**](AuthApi.md#allUserLoginLockouts) | **GET** /user_login_lockouts | Get All User Login Lockouts
[**createOidcTestConfig**](AuthApi.md#createOidcTestConfig) | **POST** /oidc_test_configs | Create OIDC Test Configuration
[**createSamlTestConfig**](AuthApi.md#createSamlTestConfig) | **POST** /saml_test_configs | Create SAML Test Configuration
[**deleteOidcTestConfig**](AuthApi.md#deleteOidcTestConfig) | **DELETE** /oidc_test_configs/{test_slug} | Delete OIDC Test Configuration
[**deleteSamlTestConfig**](AuthApi.md#deleteSamlTestConfig) | **DELETE** /saml_test_configs/{test_slug} | Delete SAML Test Configuration
[**deleteUserLoginLockout**](AuthApi.md#deleteUserLoginLockout) | **DELETE** /user_login_lockout/{key} | Delete User Login Lockout
[**fetchAndParseSamlIdpMetadata**](AuthApi.md#fetchAndParseSamlIdpMetadata) | **POST** /fetch_and_parse_saml_idp_metadata | Parse SAML IdP Url
[**forcePasswordResetAtNextLoginForAllUsers**](AuthApi.md#forcePasswordResetAtNextLoginForAllUsers) | **PUT** /password_config/force_password_reset_at_next_login_for_all_users | Force password reset
[**ldapConfig**](AuthApi.md#ldapConfig) | **GET** /ldap_config | Get LDAP Configuration
[**oidcConfig**](AuthApi.md#oidcConfig) | **GET** /oidc_config | Get OIDC Configuration
[**oidcTestConfig**](AuthApi.md#oidcTestConfig) | **GET** /oidc_test_configs/{test_slug} | Get OIDC Test Configuration
[**parseSamlIdpMetadata**](AuthApi.md#parseSamlIdpMetadata) | **POST** /parse_saml_idp_metadata | Parse SAML IdP XML
[**passwordConfig**](AuthApi.md#passwordConfig) | **GET** /password_config | Get Password Config
[**samlConfig**](AuthApi.md#samlConfig) | **GET** /saml_config | Get SAML Configuration
[**samlTestConfig**](AuthApi.md#samlTestConfig) | **GET** /saml_test_configs/{test_slug} | Get SAML Test Configuration
[**searchUserLoginLockouts**](AuthApi.md#searchUserLoginLockouts) | **GET** /user_login_lockouts/search | Search User Login Lockouts
[**sessionConfig**](AuthApi.md#sessionConfig) | **GET** /session_config | Get Session Config
[**testLdapConfigAuth**](AuthApi.md#testLdapConfigAuth) | **PUT** /ldap_config/test_auth | Test LDAP Auth
[**testLdapConfigConnection**](AuthApi.md#testLdapConfigConnection) | **PUT** /ldap_config/test_connection | Test LDAP Connection
[**testLdapConfigUserAuth**](AuthApi.md#testLdapConfigUserAuth) | **PUT** /ldap_config/test_user_auth | Test LDAP User Auth
[**testLdapConfigUserInfo**](AuthApi.md#testLdapConfigUserInfo) | **PUT** /ldap_config/test_user_info | Test LDAP User Info
[**updateLdapConfig**](AuthApi.md#updateLdapConfig) | **PATCH** /ldap_config | Update LDAP Configuration
[**updateOidcConfig**](AuthApi.md#updateOidcConfig) | **PATCH** /oidc_config | Update OIDC Configuration
[**updatePasswordConfig**](AuthApi.md#updatePasswordConfig) | **PATCH** /password_config | Update Password Config
[**updateSamlConfig**](AuthApi.md#updateSamlConfig) | **PATCH** /saml_config | Update SAML Configuration
[**updateSessionConfig**](AuthApi.md#updateSessionConfig) | **PATCH** /session_config | Update Session Config


# **allUserLoginLockouts**
> \Swagger\Client\Model\UserLoginLockout[] allUserLoginLockouts($fields)

Get All User Login Lockouts

### Get currently locked-out users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Include only these fields in the response

try {
    $result = $apiInstance->allUserLoginLockouts($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->allUserLoginLockouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Include only these fields in the response | [optional]

### Return type

[**\Swagger\Client\Model\UserLoginLockout[]**](../Model/UserLoginLockout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOidcTestConfig**
> \Swagger\Client\Model\OIDCConfig createOidcTestConfig($body)

Create OIDC Test Configuration

### Create a OIDC test configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OIDCConfig(); // \Swagger\Client\Model\OIDCConfig | OIDC test config

try {
    $result = $apiInstance->createOidcTestConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->createOidcTestConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)| OIDC test config |

### Return type

[**\Swagger\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSamlTestConfig**
> \Swagger\Client\Model\SamlConfig createSamlTestConfig($body)

Create SAML Test Configuration

### Create a SAML test configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SamlConfig(); // \Swagger\Client\Model\SamlConfig | SAML test config

try {
    $result = $apiInstance->createSamlTestConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->createSamlTestConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SamlConfig**](../Model/SamlConfig.md)| SAML test config |

### Return type

[**\Swagger\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOidcTestConfig**
> string deleteOidcTestConfig($test_slug)

Delete OIDC Test Configuration

### Delete a OIDC test configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = "test_slug_example"; // string | Slug of test config

try {
    $result = $apiInstance->deleteOidcTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteOidcTestConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSamlTestConfig**
> string deleteSamlTestConfig($test_slug)

Delete SAML Test Configuration

### Delete a SAML test configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = "test_slug_example"; // string | Slug of test config

try {
    $result = $apiInstance->deleteSamlTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteSamlTestConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserLoginLockout**
> string deleteUserLoginLockout($key)

Delete User Login Lockout

### Removes login lockout for the associated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | The key associated with the locked user

try {
    $result = $apiInstance->deleteUserLoginLockout($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteUserLoginLockout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key associated with the locked user |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAndParseSamlIdpMetadata**
> \Swagger\Client\Model\SamlMetadataParseResult fetchAndParseSamlIdpMetadata($body)

Parse SAML IdP Url

### Fetch the given url and parse it as a SAML IdP metadata document and return the result. Note that this requires that the url be public or at least at a location where the Looker instance can fetch it without requiring any special authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | SAML IdP metadata public url

try {
    $result = $apiInstance->fetchAndParseSamlIdpMetadata($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->fetchAndParseSamlIdpMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| SAML IdP metadata public url |

### Return type

[**\Swagger\Client\Model\SamlMetadataParseResult**](../Model/SamlMetadataParseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forcePasswordResetAtNextLoginForAllUsers**
> string forcePasswordResetAtNextLoginForAllUsers()

Force password reset

### Force all credentials_email users to reset their login passwords upon their next login.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->forcePasswordResetAtNextLoginForAllUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->forcePasswordResetAtNextLoginForAllUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ldapConfig**
> \Swagger\Client\Model\LDAPConfig ldapConfig()

Get LDAP Configuration

### Get the LDAP configuration.  Looker can be optionally configured to authenticate users against an Active Directory or other LDAP directory server. LDAP setup requires coordination with an administrator of that directory server.  Only Looker administrators can read and update the LDAP configuration.  Configuring LDAP impacts authentication for all users. This configuration should be done carefully.  Looker maintains a single LDAP configuration. It can be read and updated.       Updates only succeed if the new state will be valid (in the sense that all required fields are populated);       it is up to you to ensure that the configuration is appropriate and correct).  LDAP is enabled or disabled for Looker using the **enabled** field.  Looker will never return an **auth_password** field. That value can be set, but never retrieved.  See the [Looker LDAP docs](https://www.looker.com/docs/r/api/ldap_setup) for additional information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ldapConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->ldapConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oidcConfig**
> \Swagger\Client\Model\OIDCConfig oidcConfig()

Get OIDC Configuration

### Get the OIDC configuration.  Looker can be optionally configured to authenticate users against an OpenID Connect (OIDC) authentication server. OIDC setup requires coordination with an administrator of that server.  Only Looker administrators can read and update the OIDC configuration.  Configuring OIDC impacts authentication for all users. This configuration should be done carefully.  Looker maintains a single OIDC configuation. It can be read and updated.       Updates only succeed if the new state will be valid (in the sense that all required fields are populated);       it is up to you to ensure that the configuration is appropriate and correct).  OIDC is enabled or disabled for Looker using the **enabled** field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oidcConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->oidcConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oidcTestConfig**
> \Swagger\Client\Model\OIDCConfig oidcTestConfig($test_slug)

Get OIDC Test Configuration

### Get a OIDC test configuration by test_slug.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = "test_slug_example"; // string | Slug of test config

try {
    $result = $apiInstance->oidcTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->oidcTestConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

[**\Swagger\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **parseSamlIdpMetadata**
> \Swagger\Client\Model\SamlMetadataParseResult parseSamlIdpMetadata($body)

Parse SAML IdP XML

### Parse the given xml as a SAML IdP metadata document and return the result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | SAML IdP metadata xml

try {
    $result = $apiInstance->parseSamlIdpMetadata($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->parseSamlIdpMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| SAML IdP metadata xml |

### Return type

[**\Swagger\Client\Model\SamlMetadataParseResult**](../Model/SamlMetadataParseResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordConfig**
> \Swagger\Client\Model\PasswordConfig passwordConfig()

Get Password Config

### Get password config.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->passwordConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->passwordConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PasswordConfig**](../Model/PasswordConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **samlConfig**
> \Swagger\Client\Model\SamlConfig samlConfig()

Get SAML Configuration

### Get the SAML configuration.  Looker can be optionally configured to authenticate users against a SAML authentication server. SAML setup requires coordination with an administrator of that server.  Only Looker administrators can read and update the SAML configuration.  Configuring SAML impacts authentication for all users. This configuration should be done carefully.  Looker maintains a single SAML configuation. It can be read and updated.       Updates only succeed if the new state will be valid (in the sense that all required fields are populated);       it is up to you to ensure that the configuration is appropriate and correct).  SAML is enabled or disabled for Looker using the **enabled** field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->samlConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->samlConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **samlTestConfig**
> \Swagger\Client\Model\SamlConfig samlTestConfig($test_slug)

Get SAML Test Configuration

### Get a SAML test configuration by test_slug.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_slug = "test_slug_example"; // string | Slug of test config

try {
    $result = $apiInstance->samlTestConfig($test_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->samlTestConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_slug** | **string**| Slug of test config |

### Return type

[**\Swagger\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUserLoginLockouts**
> \Swagger\Client\Model\UserLoginLockout[] searchUserLoginLockouts($fields, $page, $per_page, $sorts, $auth_type, $full_name, $email, $remote_id, $filter_or)

Search User Login Lockouts

### Search currently locked-out users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Include only these fields in the response
$page = 789; // int | Return only page N of paginated results
$per_page = 789; // int | Return N rows of data per page
$sorts = "sorts_example"; // string | Fields to sort by.
$auth_type = "auth_type_example"; // string | Auth type user is locked out for (email, ldap, totp, api)
$full_name = "full_name_example"; // string | Match name
$email = "email_example"; // string | Match email
$remote_id = "remote_id_example"; // string | Match remote LDAP ID
$filter_or = true; // bool | Combine given search criteria in a boolean OR expression

try {
    $result = $apiInstance->searchUserLoginLockouts($fields, $page, $per_page, $sorts, $auth_type, $full_name, $email, $remote_id, $filter_or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->searchUserLoginLockouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Include only these fields in the response | [optional]
 **page** | **int**| Return only page N of paginated results | [optional]
 **per_page** | **int**| Return N rows of data per page | [optional]
 **sorts** | **string**| Fields to sort by. | [optional]
 **auth_type** | **string**| Auth type user is locked out for (email, ldap, totp, api) | [optional]
 **full_name** | **string**| Match name | [optional]
 **email** | **string**| Match email | [optional]
 **remote_id** | **string**| Match remote LDAP ID | [optional]
 **filter_or** | **bool**| Combine given search criteria in a boolean OR expression | [optional]

### Return type

[**\Swagger\Client\Model\UserLoginLockout[]**](../Model/UserLoginLockout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionConfig**
> \Swagger\Client\Model\SessionConfig sessionConfig()

Get Session Config

### Get session config.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->sessionConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->sessionConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SessionConfig**](../Model/SessionConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testLdapConfigAuth**
> \Swagger\Client\Model\LDAPConfigTestResult testLdapConfigAuth($body)

Test LDAP Auth

### Test the connection authentication settings for an LDAP configuration.  This tests that the connection is possible and that a 'server' account to be used by Looker can       authenticate to the LDAP server given connection and authentication information.  **connection_host**, **connection_port**, and **auth_username**, are required.       **connection_tls** and **auth_password** are optional.  Example: ```json {   \"connection_host\": \"ldap.example.com\",   \"connection_port\": \"636\",   \"connection_tls\": true,   \"auth_username\": \"cn=looker,dc=example,dc=com\",   \"auth_password\": \"secret\" } ```  Looker will never return an **auth_password**. If this request omits the **auth_password** field, then       the **auth_password** value from the active config (if present) will be used for the test.  The active LDAP settings are not modified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LDAPConfig(); // \Swagger\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigAuth($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\Swagger\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testLdapConfigConnection**
> \Swagger\Client\Model\LDAPConfigTestResult testLdapConfigConnection($body)

Test LDAP Connection

### Test the connection settings for an LDAP configuration.  This tests that the connection is possible given a connection_host and connection_port.  **connection_host** and **connection_port** are required. **connection_tls** is optional.  Example: ```json {   \"connection_host\": \"ldap.example.com\",   \"connection_port\": \"636\",   \"connection_tls\": true } ```  No authentication to the LDAP server is attempted.  The active LDAP settings are not modified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LDAPConfig(); // \Swagger\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigConnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\Swagger\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testLdapConfigUserAuth**
> \Swagger\Client\Model\LDAPConfigTestResult testLdapConfigUserAuth($body)

Test LDAP User Auth

### Test the user authentication settings for an LDAP configuration.  This test accepts a full LDAP configuration along with a username/password pair and attempts to       authenticate the user with the LDAP server. The configuration is validated before attempting the       authentication.  Looker will never return an **auth_password**. If this request omits the **auth_password** field, then       the **auth_password** value from the active config (if present) will be used for the test.  **test_ldap_user** and **test_ldap_password** are required.  The active LDAP settings are not modified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LDAPConfig(); // \Swagger\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigUserAuth($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigUserAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\Swagger\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testLdapConfigUserInfo**
> \Swagger\Client\Model\LDAPConfigTestResult testLdapConfigUserInfo($body)

Test LDAP User Info

### Test the user authentication settings for an LDAP configuration without authenticating the user.  This test will let you easily test the mapping for user properties and roles for any user without      needing to authenticate as that user.  This test accepts a full LDAP configuration along with a username and attempts to find the full info      for the user from the LDAP server without actually authenticating the user. So, user password is not      required.The configuration is validated before attempting to contact the server.  **test_ldap_user** is required.  The active LDAP settings are not modified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LDAPConfig(); // \Swagger\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->testLdapConfigUserInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->testLdapConfigUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\Swagger\Client\Model\LDAPConfigTestResult**](../Model/LDAPConfigTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLdapConfig**
> \Swagger\Client\Model\LDAPConfig updateLdapConfig($body)

Update LDAP Configuration

### Update the LDAP configuration.  Configuring LDAP impacts authentication for all users. This configuration should be done carefully.  Only Looker administrators can read and update the LDAP configuration.  LDAP is enabled or disabled for Looker using the **enabled** field.  It is **highly** recommended that any LDAP setting changes be tested using the APIs below before being set globally.  See the [Looker LDAP docs](https://www.looker.com/docs/r/api/ldap_setup) for additional information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LDAPConfig(); // \Swagger\Client\Model\LDAPConfig | LDAP Config

try {
    $result = $apiInstance->updateLdapConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateLdapConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)| LDAP Config |

### Return type

[**\Swagger\Client\Model\LDAPConfig**](../Model/LDAPConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOidcConfig**
> \Swagger\Client\Model\OIDCConfig updateOidcConfig($body)

Update OIDC Configuration

### Update the OIDC configuration.  Configuring OIDC impacts authentication for all users. This configuration should be done carefully.  Only Looker administrators can read and update the OIDC configuration.  OIDC is enabled or disabled for Looker using the **enabled** field.  It is **highly** recommended that any OIDC setting changes be tested using the APIs below before being set globally.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OIDCConfig(); // \Swagger\Client\Model\OIDCConfig | OIDC Config

try {
    $result = $apiInstance->updateOidcConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateOidcConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)| OIDC Config |

### Return type

[**\Swagger\Client\Model\OIDCConfig**](../Model/OIDCConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePasswordConfig**
> \Swagger\Client\Model\PasswordConfig updatePasswordConfig($body)

Update Password Config

### Update password config.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PasswordConfig(); // \Swagger\Client\Model\PasswordConfig | Password Config

try {
    $result = $apiInstance->updatePasswordConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updatePasswordConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PasswordConfig**](../Model/PasswordConfig.md)| Password Config |

### Return type

[**\Swagger\Client\Model\PasswordConfig**](../Model/PasswordConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSamlConfig**
> \Swagger\Client\Model\SamlConfig updateSamlConfig($body)

Update SAML Configuration

### Update the SAML configuration.  Configuring SAML impacts authentication for all users. This configuration should be done carefully.  Only Looker administrators can read and update the SAML configuration.  SAML is enabled or disabled for Looker using the **enabled** field.  It is **highly** recommended that any SAML setting changes be tested using the APIs below before being set globally.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SamlConfig(); // \Swagger\Client\Model\SamlConfig | SAML Config

try {
    $result = $apiInstance->updateSamlConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateSamlConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SamlConfig**](../Model/SamlConfig.md)| SAML Config |

### Return type

[**\Swagger\Client\Model\SamlConfig**](../Model/SamlConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSessionConfig**
> \Swagger\Client\Model\SessionConfig updateSessionConfig($body)

Update Session Config

### Update session config.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SessionConfig(); // \Swagger\Client\Model\SessionConfig | Session Config

try {
    $result = $apiInstance->updateSessionConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateSessionConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SessionConfig**](../Model/SessionConfig.md)| Session Config |

### Return type

[**\Swagger\Client\Model\SessionConfig**](../Model/SessionConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

