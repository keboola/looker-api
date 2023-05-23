# SqlQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**slug** | **string** | The identifier of the SQL query | [optional] 
**last_runtime** | **float** | Number of seconds this query took to run the most recent time it was run | [optional] 
**run_count** | **int** | Number of times this query has been run | [optional] 
**browser_limit** | **int** | Maximum number of rows this query will display on the SQL Runner page | [optional] 
**sql** | **string** | SQL query text | [optional] 
**last_run_at** | **string** | The most recent time this query was run | [optional] 
**connection** | [**\Swagger\Client\Model\DBConnectionBase**](DBConnectionBase.md) | Connection this query uses | [optional] 
**model_name** | **string** | Model name this query uses | [optional] 
**creator** | [**\Swagger\Client\Model\UserPublic**](UserPublic.md) | User who created this SQL query | [optional] 
**explore_url** | **string** | Explore page URL for this SQL query | [optional] 
**plaintext** | **bool** | Should this query be rendered as plain text | [optional] 
**vis_config** | **object** | Visualization configuration properties. These properties are typically opaque and differ based on the type of visualization used. There is no specified set of allowed keys. The values can be any type supported by JSON. A \&quot;type\&quot; key with a string value is often present, and is used by Looker to determine which visualization to present. Visualizations ignore unknown vis_config properties. | [optional] 
**result_maker_id** | **string** | ID of the ResultMakerLookup entry. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


