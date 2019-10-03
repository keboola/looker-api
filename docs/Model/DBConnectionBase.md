# DBConnectionBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the connection. Also used as the unique identifier | [optional] 
**dialect** | [**\Swagger\Client\Model\Dialect**](Dialect.md) | (Read-only) SQL Dialect details | [optional] 
**snippets** | [**\Swagger\Client\Model\Snippet[]**](Snippet.md) | SQL Runner snippets for this connection | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


