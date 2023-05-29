# SqlQueryCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connection_name** | **string** | Name of the db connection on which to run this query | [optional] 
**connection_id** | **string** | (DEPRECATED) Use &#x60;connection_name&#x60; instead | [optional] 
**model_name** | **string** | Name of LookML Model (this or &#x60;connection_id&#x60; required) | [optional] 
**sql** | **string** | SQL query | [optional] 
**vis_config** | **object** | Visualization configuration properties. These properties are typically opaque and differ based on the type of visualization used. There is no specified set of allowed keys. The values can be any type supported by JSON. A \&quot;type\&quot; key with a string value is often present, and is used by Looker to determine which visualization to present. Visualizations ignore unknown vis_config properties. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


