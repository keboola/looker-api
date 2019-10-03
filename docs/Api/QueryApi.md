# Swagger\Client\QueryApi

All URIs are relative to *https://keboolads.looker.com:19999/api/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allRunningQueries**](QueryApi.md#allRunningQueries) | **GET** /running_queries | Get All Running Queries
[**createMergeQuery**](QueryApi.md#createMergeQuery) | **POST** /merge_queries | Create Merge Query
[**createQuery**](QueryApi.md#createQuery) | **POST** /queries | Create Query
[**createQueryTask**](QueryApi.md#createQueryTask) | **POST** /query_tasks | Run Query Async
[**createSqlQuery**](QueryApi.md#createSqlQuery) | **POST** /sql_queries | Create SQL Runner Query
[**killQuery**](QueryApi.md#killQuery) | **DELETE** /running_queries/{query_task_id} | Kill Running Query
[**mergeQuery**](QueryApi.md#mergeQuery) | **GET** /merge_queries/{merge_query_id} | Get Merge Query
[**query**](QueryApi.md#query) | **GET** /queries/{query_id} | Get Query
[**queryForSlug**](QueryApi.md#queryForSlug) | **GET** /queries/slug/{slug} | Get Query for Slug
[**queryTask**](QueryApi.md#queryTask) | **GET** /query_tasks/{query_task_id} | Get Async Query Info
[**queryTaskMultiResults**](QueryApi.md#queryTaskMultiResults) | **GET** /query_tasks/multi_results | Get Multiple Async Query Results
[**queryTaskResults**](QueryApi.md#queryTaskResults) | **GET** /query_tasks/{query_task_id}/results | Get Async Query Results
[**runInlineQuery**](QueryApi.md#runInlineQuery) | **POST** /queries/run/{result_format} | Run Inline Query
[**runQuery**](QueryApi.md#runQuery) | **GET** /queries/{query_id}/run/{result_format} | Run Query
[**runSqlQuery**](QueryApi.md#runSqlQuery) | **POST** /sql_queries/{slug}/run/{result_format} | Run SQL Runner Query
[**runUrlEncodedQuery**](QueryApi.md#runUrlEncodedQuery) | **GET** /queries/models/{model_name}/views/{view_name}/run/{result_format} | Run Url Encoded Query
[**sqlQuery**](QueryApi.md#sqlQuery) | **GET** /sql_queries/{slug} | Get SQL Runner Query


# **allRunningQueries**
> \Swagger\Client\Model\RunningQueries[] allRunningQueries()

Get All Running Queries

Get information about all running queries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->allRunningQueries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->allRunningQueries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RunningQueries[]**](../Model/RunningQueries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMergeQuery**
> \Swagger\Client\Model\MergeQuery createMergeQuery($body, $fields)

Create Merge Query

### Create Merge Query  Creates a new merge query object.  A merge query takes the results of one or more queries and combines (merges) the results according to field mapping definitions. The result is similar to a SQL left outer join.  A merge query can merge results of queries from different SQL databases.  The order that queries are defined in the source_queries array property is significant. The first query in the array defines the primary key into which the results of subsequent queries will be merged.  Like model/view query objects, merge queries are immutable and have structural identity - if you make a request to create a new merge query that is identical to an existing merge query, the existing merge query will be returned instead of creating a duplicate. Conversely, any change to the contents of a merge query will produce a new object with a new id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MergeQuery(); // \Swagger\Client\Model\MergeQuery | Merge Query
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->createMergeQuery($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->createMergeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MergeQuery**](../Model/MergeQuery.md)| Merge Query | [optional]
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\MergeQuery**](../Model/MergeQuery.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createQuery**
> \Swagger\Client\Model\Query createQuery($body, $fields)

Create Query

### Create a query.  This allows you to create a new query that you can later run. Looker queries are immutable once created and are not deleted. If you create a query that is exactly like an existing query then the existing query will be returned and no new query will be created. Whether a new query is created or not, you can use the 'id' in the returned query with the 'run' method.  The query parameters are passed as json in the body of the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Query(); // \Swagger\Client\Model\Query | Query
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->createQuery($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->createQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Query**](../Model/Query.md)| Query | [optional]
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Query**](../Model/Query.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createQueryTask**
> \Swagger\Client\Model\QueryTask createQueryTask($body, $limit, $apply_formatting, $apply_vis, $cache, $image_width, $image_height, $generate_drill_links, $force_production, $cache_only, $path_prefix, $rebuild_pdts, $server_table_calcs, $fields)

Run Query Async

### Run a saved query asynchronously.  Runs a previously created query asynchronously. Returns a Query Task ID which can be used to fetch the results from the Query Tasks results endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateQueryTask(); // \Swagger\Client\Model\CreateQueryTask | Query parameters
$limit = 789; // int | Row limit (may override the limit in the saved query).
$apply_formatting = true; // bool | Apply model-specified formatting to each result.
$apply_vis = true; // bool | Apply visualization options to results.
$cache = true; // bool | Get results from cache if available.
$image_width = 789; // int | Render width for image formats.
$image_height = 789; // int | Render height for image formats.
$generate_drill_links = true; // bool | Generate drill links (only applicable to 'json_detail' format.
$force_production = true; // bool | Force use of production models even if the user is in development mode.
$cache_only = true; // bool | Retrieve any results from cache even if the results have expired.
$path_prefix = "path_prefix_example"; // string | Prefix to use for drill links (url encoded).
$rebuild_pdts = true; // bool | Rebuild PDTS used in query.
$server_table_calcs = true; // bool | Perform table calculations on query results
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->createQueryTask($body, $limit, $apply_formatting, $apply_vis, $cache, $image_width, $image_height, $generate_drill_links, $force_production, $cache_only, $path_prefix, $rebuild_pdts, $server_table_calcs, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->createQueryTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateQueryTask**](../Model/CreateQueryTask.md)| Query parameters |
 **limit** | **int**| Row limit (may override the limit in the saved query). | [optional]
 **apply_formatting** | **bool**| Apply model-specified formatting to each result. | [optional]
 **apply_vis** | **bool**| Apply visualization options to results. | [optional]
 **cache** | **bool**| Get results from cache if available. | [optional]
 **image_width** | **int**| Render width for image formats. | [optional]
 **image_height** | **int**| Render height for image formats. | [optional]
 **generate_drill_links** | **bool**| Generate drill links (only applicable to &#39;json_detail&#39; format. | [optional]
 **force_production** | **bool**| Force use of production models even if the user is in development mode. | [optional]
 **cache_only** | **bool**| Retrieve any results from cache even if the results have expired. | [optional]
 **path_prefix** | **string**| Prefix to use for drill links (url encoded). | [optional]
 **rebuild_pdts** | **bool**| Rebuild PDTS used in query. | [optional]
 **server_table_calcs** | **bool**| Perform table calculations on query results | [optional]
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\QueryTask**](../Model/QueryTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSqlQuery**
> \Swagger\Client\Model\SqlQuery createSqlQuery($body)

Create SQL Runner Query

Create a SQL Runner query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SqlQueryCreate(); // \Swagger\Client\Model\SqlQueryCreate | SQL Runner Query

try {
    $result = $apiInstance->createSqlQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->createSqlQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SqlQueryCreate**](../Model/SqlQueryCreate.md)| SQL Runner Query |

### Return type

[**\Swagger\Client\Model\SqlQuery**](../Model/SqlQuery.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **killQuery**
> string killQuery($query_task_id)

Kill Running Query

Kill a query with a specific query_task_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_task_id = "query_task_id_example"; // string | Query task id.

try {
    $result = $apiInstance->killQuery($query_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->killQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_task_id** | **string**| Query task id. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeQuery**
> \Swagger\Client\Model\MergeQuery mergeQuery($merge_query_id, $fields)

Get Merge Query

### Get Merge Query  Returns a merge query object given its id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merge_query_id = "merge_query_id_example"; // string | Merge Query Id
$fields = "fields_example"; // string | Requested fields

try {
    $result = $apiInstance->mergeQuery($merge_query_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->mergeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merge_query_id** | **string**| Merge Query Id |
 **fields** | **string**| Requested fields | [optional]

### Return type

[**\Swagger\Client\Model\MergeQuery**](../Model/MergeQuery.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **query**
> \Swagger\Client\Model\Query query($query_id, $fields)

Get Query

### Get a previously created query by id.  A Looker query object includes the various parameters that define a database query that has been run or could be run in the future. These parameters include: model, view, fields, filters, pivots, etc. Query *results* are not part of the query object.  Query objects are unique and immutable. Query objects are created automatically in Looker as users explore data. Looker does not delete them; they become part of the query history. When asked to create a query for any given set of parameters, Looker will first try to find an existing query object with matching parameters and will only create a new object when an appropriate object can not be found.  This 'get' method is used to get the details about a query for a given id. See the other methods here to 'create' and 'run' queries.  Note that some fields like 'filter_config' and 'vis_config' etc are specific to how the Looker UI builds queries and visualizations and are not generally useful for API use. They are not required when creating new queries and can usually just be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_id = 789; // int | Id of query
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->query($query_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_id** | **int**| Id of query |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Query**](../Model/Query.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryForSlug**
> \Swagger\Client\Model\Query queryForSlug($slug, $fields)

Get Query for Slug

### Get the query for a given query slug.  This returns the query for the 'slug' in a query share URL.  The 'slug' is a randomly chosen short string that is used as an alternative to the query's id value for use in URLs etc. This method exists as a convenience to help you use the API to 'find' queries that have been created using the Looker UI.  You can use the Looker explore page to build a query and then choose the 'Share' option to show the share url for the query. Share urls generally look something like 'https://looker.yourcompany/x/vwGSbfc'. The trailing 'vwGSbfc' is the share slug. You can pass that string to this api method to get details about the query. Those details include the 'id' that you can use to run the query. Or, you can copy the query body (perhaps with your own modification) and use that as the basis to make/run new queries.  This will also work with slugs from Looker explore urls like 'https://looker.yourcompany/explore/ecommerce/orders?qid=aogBgL6o3cKK1jN3RoZl5s'. In this case 'aogBgL6o3cKK1jN3RoZl5s' is the slug.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slug = "slug_example"; // string | Slug of query
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->queryForSlug($slug, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->queryForSlug: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| Slug of query |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\Query**](../Model/Query.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryTask**
> \Swagger\Client\Model\QueryTask queryTask($query_task_id, $fields)

Get Async Query Info

Returns information about a Query Task.  Query Tasks are generated by running queries asynchronously. They are represented by a GUID returned from one of the async query endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_task_id = "query_task_id_example"; // string | ID of the Query Task
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->queryTask($query_task_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->queryTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_task_id** | **string**| ID of the Query Task |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\QueryTask**](../Model/QueryTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryTaskMultiResults**
> map[string,string] queryTaskMultiResults($query_task_ids)

Get Multiple Async Query Results

Fetch the results of multiple async Query Tasks in one response.  For Query Tasks that are not completed, the response will include the execution status of the Query Task but will not include query results. Query Tasks whose results have expired will have a status of 'expired'. If the user making the API request does not have sufficient privileges to view a Query Task result, the result will have a status of 'missing'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_task_ids = array("query_task_ids_example"); // string[] | List of Query Task IDs

try {
    $result = $apiInstance->queryTaskMultiResults($query_task_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->queryTaskMultiResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_task_ids** | [**string[]**](../Model/string.md)| List of Query Task IDs |

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryTaskResults**
> map[string,string] queryTaskResults($query_task_id)

Get Async Query Results

Returns the results of an async Query Task if the query has completed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_task_id = "query_task_id_example"; // string | ID of the Query Task

try {
    $result = $apiInstance->queryTaskResults($query_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->queryTaskResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_task_id** | **string**| ID of the Query Task |

### Return type

**map[string,string]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runInlineQuery**
> string runInlineQuery($result_format, $body, $limit, $apply_formatting, $apply_vis, $cache, $image_width, $image_height, $generate_drill_links, $force_production, $cache_only, $path_prefix, $rebuild_pdts, $server_table_calcs)

Run Inline Query

### Run the query that is specified inline in the posted body.  This allows running a query as defined in json in the posted body. This combines the two actions of posting & running a query into one step.  Here is an example body in json: ``` {   \"model\":\"thelook\",   \"view\":\"inventory_items\",   \"fields\":[\"category.name\",\"inventory_items.days_in_inventory_tier\",\"products.count\"],   \"filters\":{\"category.name\":\"socks\"},   \"sorts\":[\"products.count desc 0\"],   \"limit\":\"500\",   \"query_timezone\":\"America/Los_Angeles\" } ```  When using the Ruby SDK this would be passed as a Ruby hash like: ``` {  :model=>\"thelook\",  :view=>\"inventory_items\",  :fields=>   [\"category.name\",    \"inventory_items.days_in_inventory_tier\",    \"products.count\"],  :filters=>{:\"category.name\"=>\"socks\"},  :sorts=>[\"products.count desc 0\"],  :limit=>\"500\",  :query_timezone=>\"America/Los_Angeles\", } ```  This will return the result of running the query in the format specified by the 'result_format' parameter.  Supported formats:  | result_format | Description | :-----------: | :--- | | json | Plain json | json_detail | Row data plus metadata describing the fields, pivots, table calcs, and other aspects of the query | csv | Comma separated values with a header | txt | Tab separated values with a header | html | Simple html | md | Simple markdown | xlsx | MS Excel spreadsheet | sql | Returns the generated SQL rather than running the query | png | A PNG image of the visualization of the query | jpg | A JPG image of the visualization of the query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$result_format = "result_format_example"; // string | Format of result
$body = new \Swagger\Client\Model\Query(); // \Swagger\Client\Model\Query | inline query
$limit = 789; // int | Row limit (may override the limit in the saved query).
$apply_formatting = true; // bool | Apply model-specified formatting to each result.
$apply_vis = true; // bool | Apply visualization options to results.
$cache = true; // bool | Get results from cache if available.
$image_width = 789; // int | Render width for image formats.
$image_height = 789; // int | Render height for image formats.
$generate_drill_links = true; // bool | Generate drill links (only applicable to 'json_detail' format.
$force_production = true; // bool | Force use of production models even if the user is in development mode.
$cache_only = true; // bool | Retrieve any results from cache even if the results have expired.
$path_prefix = "path_prefix_example"; // string | Prefix to use for drill links (url encoded).
$rebuild_pdts = true; // bool | Rebuild PDTS used in query.
$server_table_calcs = true; // bool | Perform table calculations on query results

try {
    $result = $apiInstance->runInlineQuery($result_format, $body, $limit, $apply_formatting, $apply_vis, $cache, $image_width, $image_height, $generate_drill_links, $force_production, $cache_only, $path_prefix, $rebuild_pdts, $server_table_calcs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->runInlineQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **result_format** | **string**| Format of result |
 **body** | [**\Swagger\Client\Model\Query**](../Model/Query.md)| inline query |
 **limit** | **int**| Row limit (may override the limit in the saved query). | [optional]
 **apply_formatting** | **bool**| Apply model-specified formatting to each result. | [optional]
 **apply_vis** | **bool**| Apply visualization options to results. | [optional]
 **cache** | **bool**| Get results from cache if available. | [optional]
 **image_width** | **int**| Render width for image formats. | [optional]
 **image_height** | **int**| Render height for image formats. | [optional]
 **generate_drill_links** | **bool**| Generate drill links (only applicable to &#39;json_detail&#39; format. | [optional]
 **force_production** | **bool**| Force use of production models even if the user is in development mode. | [optional]
 **cache_only** | **bool**| Retrieve any results from cache even if the results have expired. | [optional]
 **path_prefix** | **string**| Prefix to use for drill links (url encoded). | [optional]
 **rebuild_pdts** | **bool**| Rebuild PDTS used in query. | [optional]
 **server_table_calcs** | **bool**| Perform table calculations on query results | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text, application/json, image/png, image/jpg

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runQuery**
> string runQuery($query_id, $result_format, $limit, $apply_formatting, $apply_vis, $cache, $image_width, $image_height, $generate_drill_links, $force_production, $cache_only, $path_prefix, $rebuild_pdts, $server_table_calcs)

Run Query

### Run a saved query.  This runs a previously saved query. You can use this on a query that was generated in the Looker UI or one that you have explicitly created using the API. You can also use a query 'id' from a saved 'Look'.  The 'result_format' parameter specifies the desired structure and format of the response.  Supported formats:  | result_format | Description | :-----------: | :--- | | json | Plain json | json_detail | Row data plus metadata describing the fields, pivots, table calcs, and other aspects of the query | csv | Comma separated values with a header | txt | Tab separated values with a header | html | Simple html | md | Simple markdown | xlsx | MS Excel spreadsheet | sql | Returns the generated SQL rather than running the query | png | A PNG image of the visualization of the query | jpg | A JPG image of the visualization of the query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_id = 789; // int | Id of query
$result_format = "result_format_example"; // string | Format of result
$limit = 789; // int | Row limit (may override the limit in the saved query).
$apply_formatting = true; // bool | Apply model-specified formatting to each result.
$apply_vis = true; // bool | Apply visualization options to results.
$cache = true; // bool | Get results from cache if available.
$image_width = 789; // int | Render width for image formats.
$image_height = 789; // int | Render height for image formats.
$generate_drill_links = true; // bool | Generate drill links (only applicable to 'json_detail' format.
$force_production = true; // bool | Force use of production models even if the user is in development mode.
$cache_only = true; // bool | Retrieve any results from cache even if the results have expired.
$path_prefix = "path_prefix_example"; // string | Prefix to use for drill links (url encoded).
$rebuild_pdts = true; // bool | Rebuild PDTS used in query.
$server_table_calcs = true; // bool | Perform table calculations on query results

try {
    $result = $apiInstance->runQuery($query_id, $result_format, $limit, $apply_formatting, $apply_vis, $cache, $image_width, $image_height, $generate_drill_links, $force_production, $cache_only, $path_prefix, $rebuild_pdts, $server_table_calcs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->runQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_id** | **int**| Id of query |
 **result_format** | **string**| Format of result |
 **limit** | **int**| Row limit (may override the limit in the saved query). | [optional]
 **apply_formatting** | **bool**| Apply model-specified formatting to each result. | [optional]
 **apply_vis** | **bool**| Apply visualization options to results. | [optional]
 **cache** | **bool**| Get results from cache if available. | [optional]
 **image_width** | **int**| Render width for image formats. | [optional]
 **image_height** | **int**| Render height for image formats. | [optional]
 **generate_drill_links** | **bool**| Generate drill links (only applicable to &#39;json_detail&#39; format. | [optional]
 **force_production** | **bool**| Force use of production models even if the user is in development mode. | [optional]
 **cache_only** | **bool**| Retrieve any results from cache even if the results have expired. | [optional]
 **path_prefix** | **string**| Prefix to use for drill links (url encoded). | [optional]
 **rebuild_pdts** | **bool**| Rebuild PDTS used in query. | [optional]
 **server_table_calcs** | **bool**| Perform table calculations on query results | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text, application/json, image/png, image/jpg

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runSqlQuery**
> string runSqlQuery($slug, $result_format, $download)

Run SQL Runner Query

Execute a SQL Runner query in a given result_format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slug = "slug_example"; // string | slug of query
$result_format = "result_format_example"; // string | Format of result, options are: [\"json\", \"json_detail\", \"json_fe\", \"csv\", \"html\", \"md\", \"txt\", \"xlsx\", \"gsxml\"]
$download = "download_example"; // string | Defaults to false. If set to true, the HTTP response will have content-disposition and other headers set to make the HTTP response behave as a downloadable attachment instead of as inline content.

try {
    $result = $apiInstance->runSqlQuery($slug, $result_format, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->runSqlQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| slug of query |
 **result_format** | **string**| Format of result, options are: [\&quot;json\&quot;, \&quot;json_detail\&quot;, \&quot;json_fe\&quot;, \&quot;csv\&quot;, \&quot;html\&quot;, \&quot;md\&quot;, \&quot;txt\&quot;, \&quot;xlsx\&quot;, \&quot;gsxml\&quot;] |
 **download** | **string**| Defaults to false. If set to true, the HTTP response will have content-disposition and other headers set to make the HTTP response behave as a downloadable attachment instead of as inline content. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text, application/json, image/png, image/jpg

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runUrlEncodedQuery**
> string runUrlEncodedQuery($model_name, $view_name, $result_format)

Run Url Encoded Query

### Run an URL encoded query.  This requires the caller to encode the specifiers for the query into the URL query part using Looker-specific syntax as explained below.  Generally, you would want to use one of the methods that takes the parameters as json in the POST body for creating and/or running queries. This method exists for cases where one really needs to encode the parameters into the URL of a single 'GET' request. This matches the way that the Looker UI formats 'explore' URLs etc.  The parameters here are very similar to the json body formatting except that the filter syntax is tricky. Unfortunately, this format makes this method not currently callible via the 'Try it out!' button in this documentation page. But, this is callable  when creating URLs manually or when using the Looker SDK.  Here is an example inline query URL:  ``` https://looker.mycompany.com:19999/api/3.0/queries/models/thelook/views/inventory_items/run/json?fields=category.name,inventory_items.days_in_inventory_tier,products.count&f[category.name]=socks&sorts=products.count+desc+0&limit=500&query_timezone=America/Los_Angeles ```  When invoking this endpoint with the Ruby SDK, pass the query parameter parts as a hash. The hash to match the above would look like:  ```ruby query_params = {   :fields => \"category.name,inventory_items.days_in_inventory_tier,products.count\",   :\"f[category.name]\" => \"socks\",   :sorts => \"products.count desc 0\",   :limit => \"500\",   :query_timezone => \"America/Los_Angeles\" } response = ruby_sdk.run_url_encoded_query('thelook','inventory_items','json', query_params)  ```  Again, it is generally easier to use the variant of this method that passes the full query in the POST body. This method is available for cases where other alternatives won't fit the need.  Supported formats:  | result_format | Description | :-----------: | :--- | | json | Plain json | json_detail | Row data plus metadata describing the fields, pivots, table calcs, and other aspects of the query | csv | Comma separated values with a header | txt | Tab separated values with a header | html | Simple html | md | Simple markdown | xlsx | MS Excel spreadsheet | sql | Returns the generated SQL rather than running the query | png | A PNG image of the visualization of the query | jpg | A JPG image of the visualization of the query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$model_name = "model_name_example"; // string | Model name
$view_name = "view_name_example"; // string | View name
$result_format = "result_format_example"; // string | Format of result

try {
    $result = $apiInstance->runUrlEncodedQuery($model_name, $view_name, $result_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->runUrlEncodedQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_name** | **string**| Model name |
 **view_name** | **string**| View name |
 **result_format** | **string**| Format of result |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text, application/json, image/png, image/jpg

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sqlQuery**
> \Swagger\Client\Model\SqlQuery sqlQuery($slug)

Get SQL Runner Query

Get a SQL Runner query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slug = "slug_example"; // string | slug of query

try {
    $result = $apiInstance->sqlQuery($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->sqlQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**| slug of query |

### Return type

[**\Swagger\Client\Model\SqlQuery**](../Model/SqlQuery.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

