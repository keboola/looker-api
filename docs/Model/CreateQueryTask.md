# CreateQueryTask

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**query_id** | **string** | Id of query to run | 
**result_format** | **string** | Desired async query result format. Valid values are: \&quot;inline_json\&quot;, \&quot;json\&quot;, \&quot;json_detail\&quot;, \&quot;json_fe\&quot;, \&quot;csv\&quot;, \&quot;html\&quot;, \&quot;md\&quot;, \&quot;txt\&quot;, \&quot;xlsx\&quot;, \&quot;gsxml\&quot;. | 
**source** | **string** | Source of query task | [optional] 
**deferred** | **bool** | Create the task but defer execution | [optional] 
**look_id** | **string** | Id of look associated with query. | [optional] 
**dashboard_id** | **string** | Id of dashboard associated with query. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


