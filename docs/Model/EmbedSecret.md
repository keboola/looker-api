# EmbedSecret

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**algorithm** | **string** | Signing algorithm to use with this secret. Either &#x60;hmac/sha-256&#x60;(default) or &#x60;hmac/sha-1&#x60; | [optional] 
**created_at** | **string** | When secret was created | [optional] 
**enabled** | **bool** | Is this secret currently enabled | [optional] 
**id** | **string** | Unique Id | [optional] 
**secret** | **string** | Secret for use with SSO embedding | [optional] 
**user_id** | **string** | Id of user who created this secret | [optional] 
**secret_type** | **string** | Field to distinguish between SSO secrets and JWT secrets Valid values are: \&quot;SSO\&quot;, \&quot;JWT\&quot;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


