# LookmlModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed_db_connection_names** | **string[]** | Array of names of connections this model is allowed to use | [optional] 
**explores** | [**\Swagger\Client\Model\LookmlModelNavExplore[]**](LookmlModelNavExplore.md) | Array of explores (if has_content) | [optional] 
**has_content** | **bool** | Does this model declaration have have lookml content? | [optional] 
**label** | **string** | UI-friendly name for this model | [optional] 
**name** | **string** | Name of the model. Also used as the unique identifier | [optional] 
**project_name** | **string** | Name of project containing the model | [optional] 
**unlimited_db_connections** | **bool** | Is this model allowed to use all current and future connections | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


