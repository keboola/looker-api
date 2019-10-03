# ProjectValidationCache

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\Swagger\Client\Model\ProjectError[]**](ProjectError.md) | A list of project errors | [optional] 
**project_digest** | **string** | A hash value computed from the project&#39;s current state | [optional] 
**models_not_validated** | [**\Swagger\Client\Model\ModelsNotValidated[]**](ModelsNotValidated.md) | A list of models which were not fully validated | [optional] 
**computation_time** | **float** | Duration of project validation in seconds | [optional] 
**stale** | **bool** | If true, the cached project validation results are no longer accurate because the project has changed since the cached results were calculated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


