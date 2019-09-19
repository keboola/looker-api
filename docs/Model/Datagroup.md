# Datagroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **int** | UNIX timestamp at which this entry was created. | [optional] 
**id** | **int** | ID of the datagroup. Also used as the unique identifier. | [optional] 
**model_name** | **string** | Name of the model containing the datagroup. Unique when combined with name. | [optional] 
**name** | **string** | Name of the datagroup. Unique when combined with model_name. | [optional] 
**stale_before** | **int** | UNIX timestamp before which cache entries are considered stale. Cannot be in the future. | [optional] 
**trigger_check_at** | **int** | UNIX timestamp at which this entry trigger was last checked. | [optional] 
**trigger_error** | **string** | The message returned with the error of the last trigger check. | [optional] 
**trigger_value** | **string** | The value of the trigger when last checked. | [optional] 
**triggered_at** | **int** | UNIX timestamp at which this entry became triggered. Cannot be in the future. | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


