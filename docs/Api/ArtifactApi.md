# Swagger\Client\ArtifactApi

All URIs are relative to *https://example.looker.com:443/api/4.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**artifact**](ArtifactApi.md#artifact) | **GET** /artifact/{namespace} | Get one or more artifacts
[**artifactNamespaces**](ArtifactApi.md#artifactNamespaces) | **GET** /artifact/namespaces | Get namespaces and counts
[**artifactUsage**](ArtifactApi.md#artifactUsage) | **GET** /artifact/usage | Artifact store usage
[**artifactValue**](ArtifactApi.md#artifactValue) | **GET** /artifact/{namespace}/value | Get an artifact value
[**deleteArtifact**](ArtifactApi.md#deleteArtifact) | **DELETE** /artifact/{namespace} | Delete one or more artifacts
[**purgeArtifacts**](ArtifactApi.md#purgeArtifacts) | **DELETE** /artifact/{namespace}/purge | Purge artifacts
[**searchArtifacts**](ArtifactApi.md#searchArtifacts) | **GET** /artifact/{namespace}/search | Search artifacts
[**updateArtifacts**](ArtifactApi.md#updateArtifacts) | **PUT** /artifacts/{namespace} | Create or update artifacts


# **artifact**
> \Swagger\Client\Model\Artifact[] artifact($namespace, $key, $fields, $limit, $offset)

Get one or more artifacts

### Get one or more artifacts  Returns an array of artifacts matching the specified key value(s).  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Artifact storage namespace
$key = "key_example"; // string | Comma-delimited list of keys. Wildcards not allowed.
$fields = "fields_example"; // string | Comma-delimited names of fields to return in responses. Omit for all fields
$limit = 789; // int | Number of results to return. (used with offset)
$offset = 789; // int | Number of results to skip before returning any. (used with limit)

try {
    $result = $apiInstance->artifact($namespace, $key, $fields, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->artifact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Artifact storage namespace |
 **key** | **string**| Comma-delimited list of keys. Wildcards not allowed. |
 **fields** | **string**| Comma-delimited names of fields to return in responses. Omit for all fields | [optional]
 **limit** | **int**| Number of results to return. (used with offset) | [optional]
 **offset** | **int**| Number of results to skip before returning any. (used with limit) | [optional]

### Return type

[**\Swagger\Client\Model\Artifact[]**](../Model/Artifact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactNamespaces**
> \Swagger\Client\Model\ArtifactNamespace[] artifactNamespaces($fields, $limit, $offset)

Get namespaces and counts

Get all artifact namespaces and the count of artifacts in each namespace  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Comma-delimited names of fields to return in responses. Omit for all fields
$limit = 789; // int | Number of results to return. (used with offset)
$offset = 789; // int | Number of results to skip before returning any. (used with limit)

try {
    $result = $apiInstance->artifactNamespaces($fields, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->artifactNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Comma-delimited names of fields to return in responses. Omit for all fields | [optional]
 **limit** | **int**| Number of results to return. (used with offset) | [optional]
 **offset** | **int**| Number of results to skip before returning any. (used with limit) | [optional]

### Return type

[**\Swagger\Client\Model\ArtifactNamespace[]**](../Model/ArtifactNamespace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactUsage**
> \Swagger\Client\Model\ArtifactUsage artifactUsage($fields)

Artifact store usage

Get the maximum configured size of the entire artifact store, and the currently used storage in bytes.  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Comma-delimited names of fields to return in responses. Omit for all fields

try {
    $result = $apiInstance->artifactUsage($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->artifactUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Comma-delimited names of fields to return in responses. Omit for all fields | [optional]

### Return type

[**\Swagger\Client\Model\ArtifactUsage**](../Model/ArtifactUsage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactValue**
> string artifactValue($namespace, $key)

Get an artifact value

### Return the value of an artifact  The MIME type for the API response is set to the `content_type` of the value  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Artifact storage namespace
$key = "key_example"; // string | Artifact storage key. Namespace + Key must be unique

try {
    $result = $apiInstance->artifactValue($namespace, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->artifactValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Artifact storage namespace |
 **key** | **string**| Artifact storage key. Namespace + Key must be unique | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArtifact**
> deleteArtifact($namespace, $key)

Delete one or more artifacts

### Delete one or more artifacts  To avoid rate limiting on deletion requests, multiple artifacts can be deleted at the same time by using a comma-delimited list of artifact keys.  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Artifact storage namespace
$key = "key_example"; // string | Comma-delimited list of keys. Wildcards not allowed.

try {
    $apiInstance->deleteArtifact($namespace, $key);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->deleteArtifact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Artifact storage namespace |
 **key** | **string**| Comma-delimited list of keys. Wildcards not allowed. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purgeArtifacts**
> purgeArtifacts($namespace)

Purge artifacts

Remove *all* artifacts from a namespace. Purged artifacts are permanently deleted  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Artifact storage namespace

try {
    $apiInstance->purgeArtifacts($namespace);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->purgeArtifacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Artifact storage namespace |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchArtifacts**
> \Swagger\Client\Model\Artifact[] searchArtifacts($namespace, $fields, $key, $user_ids, $min_size, $max_size, $limit, $offset)

Search artifacts

### Search all key/value pairs in a namespace for matching criteria.  Returns an array of artifacts matching the specified search criteria.  Key search patterns use case-insensitive matching and can contain `%` and `_` as SQL LIKE pattern match wildcard expressions.  The parameters `min_size` and `max_size` can be used individually or together.  - `min_size` finds artifacts with sizes greater than or equal to its value - `max_size` finds artifacts with sizes less than or equal to its value - using both parameters restricts the minimum and maximum size range for artifacts  **NOTE**: Artifacts are always returned in alphanumeric order by key.  Get a **single artifact** by namespace and key with [`artifact`](#!/Artifact/artifact)  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Artifact storage namespace
$fields = "fields_example"; // string | Comma-delimited names of fields to return in responses. Omit for all fields
$key = "key_example"; // string | Key pattern to match
$user_ids = "user_ids_example"; // string | Ids of users who created or updated the artifact (comma-delimited list)
$min_size = 789; // int | Minimum storage size of the artifact
$max_size = 789; // int | Maximum storage size of the artifact
$limit = 789; // int | Number of results to return. (used with offset)
$offset = 789; // int | Number of results to skip before returning any. (used with limit)

try {
    $result = $apiInstance->searchArtifacts($namespace, $fields, $key, $user_ids, $min_size, $max_size, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->searchArtifacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Artifact storage namespace |
 **fields** | **string**| Comma-delimited names of fields to return in responses. Omit for all fields | [optional]
 **key** | **string**| Key pattern to match | [optional]
 **user_ids** | **string**| Ids of users who created or updated the artifact (comma-delimited list) | [optional]
 **min_size** | **int**| Minimum storage size of the artifact | [optional]
 **max_size** | **int**| Maximum storage size of the artifact | [optional]
 **limit** | **int**| Number of results to return. (used with offset) | [optional]
 **offset** | **int**| Number of results to skip before returning any. (used with limit) | [optional]

### Return type

[**\Swagger\Client\Model\Artifact[]**](../Model/Artifact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateArtifacts**
> \Swagger\Client\Model\Artifact[] updateArtifacts($namespace, $body, $fields)

Create or update artifacts

### Create or update one or more artifacts  Only `key` and `value` are required to _create_ an artifact. To _update_ an artifact, its current `version` value must be provided.  In the following example `body` payload, `one` and `two` are existing artifacts, and `three` is new:  ```json [   { \"key\": \"one\", \"value\": \"[ \\\"updating\\\", \\\"existing\\\", \\\"one\\\" ]\", \"version\": 10, \"content_type\": \"application/json\" },   { \"key\": \"two\", \"value\": \"updating existing two\", \"version\": 20 },   { \"key\": \"three\", \"value\": \"creating new three\" }, ] ```  Notes for this body:  - The `value` for `key` **one** is a JSON payload, so a `content_type` override is needed. This override must be done **every** time a JSON value is set. - The `version` values for **one** and **two** mean they have been saved 10 and 20 times, respectively. - If `version` is **not** provided for an existing artifact, the entire request will be refused and a `Bad Request` response will be sent. - If `version` is provided for an artifact, it is only used for helping to prevent inadvertent data overwrites. It cannot be used to **set** the version of an artifact. The Looker server controls `version`. - We suggest encoding binary values as base64. Because the MIME content type for base64 is detected as plain text, also provide `content_type` to correctly indicate the value's type for retrieval and client-side processing.  Because artifacts are stored encrypted, the same value can be written multiple times (provided the correct `version` number is used). Looker does not examine any values stored in the artifact store, and only decrypts when sending artifacts back in an API response.  **Note**: The artifact storage API can only be used by Looker-built extensions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ArtifactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = "namespace_example"; // string | Artifact storage namespace
$body = array(new \Swagger\Client\Model\UpdateArtifact()); // \Swagger\Client\Model\UpdateArtifact[] | Artifacts to create or update
$fields = "fields_example"; // string | Comma-delimited names of fields to return in responses. Omit for all fields

try {
    $result = $apiInstance->updateArtifacts($namespace, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactApi->updateArtifacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **namespace** | **string**| Artifact storage namespace |
 **body** | [**\Swagger\Client\Model\UpdateArtifact[]**](../Model/UpdateArtifact.md)| Artifacts to create or update |
 **fields** | **string**| Comma-delimited names of fields to return in responses. Omit for all fields | [optional]

### Return type

[**\Swagger\Client\Model\Artifact[]**](../Model/Artifact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

