# RunningQueries

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Id | [optional] 
**user** | [**\Swagger\Client\Model\UserPublic**](UserPublic.md) | User who initiated the query | [optional] 
**query** | [**\Swagger\Client\Model\Query**](Query.md) | Query that was run | [optional] 
**sql_query** | [**\Swagger\Client\Model\SqlQuery**](SqlQuery.md) | SQL Query that was run | [optional] 
**look** | [**\Swagger\Client\Model\LookBasic**](LookBasic.md) | Look of query that was run | [optional] 
**created_at** | **string** | Date/Time Query was initiated | [optional] 
**completed_at** | **string** | Date/Time Query was completed | [optional] 
**query_id** | **string** | Query Id | [optional] 
**source** | **string** | Source (look, dashboard, queryrunner, explore, etc.) | [optional] 
**node_id** | **string** | Node Id | [optional] 
**slug** | **string** | Slug | [optional] 
**query_task_id** | **string** | ID of a Query Task | [optional] 
**cache_key** | **string** | Cache Key | [optional] 
**connection_name** | **string** | Connection | [optional] 
**dialect** | **string** | Dialect | [optional] 
**connection_id** | **string** | Connection ID | [optional] 
**message** | **string** | Additional Information(Error message or verbose status) | [optional] 
**status** | **string** | Status description | [optional] 
**runtime** | **double** | Number of seconds elapsed running the Query | [optional] 
**sql** | **string** | SQL text of the query as run | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


