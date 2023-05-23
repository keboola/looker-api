# Swagger\Client\MetadataApi

All URIs are relative to *https://example.looker.com:443/api/4.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**connectionColumns**](MetadataApi.md#connectionColumns) | **GET** /connections/{connection_name}/columns | Get columns for a connection
[**connectionCostEstimate**](MetadataApi.md#connectionCostEstimate) | **POST** /connections/{connection_name}/cost_estimate | Estimate costs for a connection
[**connectionDatabases**](MetadataApi.md#connectionDatabases) | **GET** /connections/{connection_name}/databases | List accessible databases to this connection
[**connectionFeatures**](MetadataApi.md#connectionFeatures) | **GET** /connections/{connection_name}/features | Metadata features supported by this connection
[**connectionSchemas**](MetadataApi.md#connectionSchemas) | **GET** /connections/{connection_name}/schemas | Get schemas for a connection
[**connectionSearchColumns**](MetadataApi.md#connectionSearchColumns) | **GET** /connections/{connection_name}/search_columns | Search a connection for columns
[**connectionTables**](MetadataApi.md#connectionTables) | **GET** /connections/{connection_name}/tables | Get tables for a connection
[**getModel**](MetadataApi.md#getModel) | **GET** /models/{model_name} | Get a single model
[**modelFieldnameSuggestions**](MetadataApi.md#modelFieldnameSuggestions) | **GET** /models/{model_name}/views/{view_name}/fields/{field_name}/suggestions | Model field name suggestions


# **connectionColumns**
> \Swagger\Client\Model\SchemaColumns[] connectionColumns($connection_name, $database, $schema_name, $cache, $table_limit, $table_names, $fields)

Get columns for a connection

### Get the columns (and therefore also the tables) in a specific schema

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$database = "database_example"; // string | For dialects that support multiple databases, optionally identify which to use
$schema_name = "schema_name_example"; // string | Name of schema to use.
$cache = true; // bool | True to fetch from cache, false to load fresh
$table_limit = 789; // int | limits the tables per schema returned
$table_names = "table_names_example"; // string | only fetch columns for a given (comma-separated) list of tables
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->connectionColumns($connection_name, $database, $schema_name, $cache, $table_limit, $table_names, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->connectionColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **database** | **string**| For dialects that support multiple databases, optionally identify which to use | [optional]
 **schema_name** | **string**| Name of schema to use. | [optional]
 **cache** | **bool**| True to fetch from cache, false to load fresh | [optional]
 **table_limit** | **int**| limits the tables per schema returned | [optional]
 **table_names** | **string**| only fetch columns for a given (comma-separated) list of tables | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\SchemaColumns[]**](../Model/SchemaColumns.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectionCostEstimate**
> \Swagger\Client\Model\CostEstimate connectionCostEstimate($connection_name, $body, $fields)

Estimate costs for a connection

### Connection cost estimating  Assign a `sql` statement to the body of the request. e.g., for Ruby, `{sql: 'select * from users'}`  **Note**: If the connection's dialect has no support for cost estimates, an error will be returned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$body = new \Swagger\Client\Model\CreateCostEstimate(); // \Swagger\Client\Model\CreateCostEstimate | SQL statement to estimate
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->connectionCostEstimate($connection_name, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->connectionCostEstimate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **body** | [**\Swagger\Client\Model\CreateCostEstimate**](../Model/CreateCostEstimate.md)| SQL statement to estimate |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\CostEstimate**](../Model/CostEstimate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectionDatabases**
> string[] connectionDatabases($connection_name)

List accessible databases to this connection

### List databases available to this connection  Certain dialects can support multiple databases per single connection. If this connection supports multiple databases, the database names will be returned in an array.  Connections using dialects that do not support multiple databases will return an empty array.  **Note**: [Connection Features](#!/Metadata/connection_features) can be used to determine if a connection supports multiple databases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection

try {
    $result = $apiInstance->connectionDatabases($connection_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->connectionDatabases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectionFeatures**
> \Swagger\Client\Model\ConnectionFeatures connectionFeatures($connection_name, $fields)

Metadata features supported by this connection

### Retrieve metadata features for this connection  Returns a list of feature names with `true` (available) or `false` (not available)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->connectionFeatures($connection_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->connectionFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectionFeatures**](../Model/ConnectionFeatures.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectionSchemas**
> \Swagger\Client\Model\Schema[] connectionSchemas($connection_name, $database, $cache, $fields)

Get schemas for a connection

### Get the list of schemas and tables for a connection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$database = "database_example"; // string | For dialects that support multiple databases, optionally identify which to use
$cache = true; // bool | True to use fetch from cache, false to load fresh
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->connectionSchemas($connection_name, $database, $cache, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->connectionSchemas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **database** | **string**| For dialects that support multiple databases, optionally identify which to use | [optional]
 **cache** | **bool**| True to use fetch from cache, false to load fresh | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Schema[]**](../Model/Schema.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectionSearchColumns**
> \Swagger\Client\Model\ColumnSearch[] connectionSearchColumns($connection_name, $column_name, $fields)

Search a connection for columns

### Search a connection for columns matching the specified name  **Note**: `column_name` must be a valid column name. It is not a search pattern.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$column_name = "column_name_example"; // string | Column name to find
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->connectionSearchColumns($connection_name, $column_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->connectionSearchColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **column_name** | **string**| Column name to find | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\ColumnSearch[]**](../Model/ColumnSearch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectionTables**
> \Swagger\Client\Model\SchemaTables[] connectionTables($connection_name, $database, $schema_name, $cache, $fields, $table_filter, $table_limit)

Get tables for a connection

### Get the list of tables for a schema  For dialects that support multiple databases, optionally identify which to use. If not provided, the default database for the connection will be used.  For dialects that do **not** support multiple databases, **do not use** the database parameter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$database = "database_example"; // string | Optional. Name of database to use for the query, only if applicable
$schema_name = "schema_name_example"; // string | Optional. Return only tables for this schema
$cache = true; // bool | True to fetch from cache, false to load fresh
$fields = "fields_example"; // string | Requested fields.
$table_filter = "table_filter_example"; // string | Optional. Return tables with names that contain this value
$table_limit = 789; // int | Optional. Return tables up to the table_limit

try {
    $result = $apiInstance->connectionTables($connection_name, $database, $schema_name, $cache, $fields, $table_filter, $table_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->connectionTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **database** | **string**| Optional. Name of database to use for the query, only if applicable | [optional]
 **schema_name** | **string**| Optional. Return only tables for this schema | [optional]
 **cache** | **bool**| True to fetch from cache, false to load fresh | [optional]
 **fields** | **string**| Requested fields. | [optional]
 **table_filter** | **string**| Optional. Return tables with names that contain this value | [optional]
 **table_limit** | **int**| Optional. Return tables up to the table_limit | [optional]

### Return type

[**\Swagger\Client\Model\SchemaTables[]**](../Model/SchemaTables.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModel**
> \Swagger\Client\Model\Model getModel($model_name)

Get a single model

### Get a single model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model_name = "model_name_example"; // string | Name of model

try {
    $result = $apiInstance->getModel($model_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_name** | **string**| Name of model |

### Return type

[**\Swagger\Client\Model\Model**](../Model/Model.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelFieldnameSuggestions**
> \Swagger\Client\Model\ModelFieldSuggestions modelFieldnameSuggestions($model_name, $view_name, $field_name, $term, $filters)

Model field name suggestions

### Field name suggestions for a model and view  `filters` is a string hash of values, with the key as the field name and the string value as the filter expression:  ```ruby {'users.age': '>=60'} ```  or  ```ruby {'users.age': '<30'} ```  or  ```ruby {'users.age': '=50'} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model_name = "model_name_example"; // string | Name of model
$view_name = "view_name_example"; // string | Name of view
$field_name = "field_name_example"; // string | Name of field to use for suggestions
$term = "term_example"; // string | Search term pattern (evaluated as as `%term%`)
$filters = array('key' => "filters_example"); // map[string,string] | Suggestion filters with field name keys and comparison expressions

try {
    $result = $apiInstance->modelFieldnameSuggestions($model_name, $view_name, $field_name, $term, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->modelFieldnameSuggestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_name** | **string**| Name of model |
 **view_name** | **string**| Name of view |
 **field_name** | **string**| Name of field to use for suggestions |
 **term** | **string**| Search term pattern (evaluated as as &#x60;%term%&#x60;) | [optional]
 **filters** | [**map[string,string]**](../Model/string.md)| Suggestion filters with field name keys and comparison expressions | [optional]

### Return type

[**\Swagger\Client\Model\ModelFieldSuggestions**](../Model/ModelFieldSuggestions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

