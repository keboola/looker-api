# EmbedCookielessSessionGenerateTokensResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**navigation_token** | **string** | Token used to load and navigate between Looker pages. | [optional] 
**navigation_token_ttl** | **int** | Navigation token time to live in seconds. | [optional] 
**api_token** | **string** | Token to used to call Looker APIs. | [optional] 
**api_token_ttl** | **int** | Api token time to live in seconds. | [optional] 
**session_reference_token** | **string** | Token referencing the embed session and is used to generate new authentication, navigation and api tokens. | 
**session_reference_token_ttl** | **int** | Session reference token time to live in seconds. Note that this is the same as actual session. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


