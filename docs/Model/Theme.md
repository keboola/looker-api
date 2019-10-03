# Theme

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**begin_at** | [**\DateTime**](\DateTime.md) | Timestamp for when this theme becomes active. Null&#x3D;always | [optional] 
**end_at** | [**\DateTime**](\DateTime.md) | Timestamp for when this theme expires. Null&#x3D;never | [optional] 
**id** | **int** | Unique Id | [optional] 
**name** | **string** | Name of theme. Can only be alphanumeric and underscores. | [optional] 
**settings** | [**\Swagger\Client\Model\ThemeSettings**](ThemeSettings.md) | Hash of name/value pairs for theme settings. These names get validated. | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


