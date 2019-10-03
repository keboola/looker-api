# CredentialsEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Timestamp for the creation of this credential | [optional] 
**email** | **string** | EMail address used for user login | [optional] 
**forced_password_reset_at_next_login** | **bool** | Force the user to change their password upon their next login | [optional] 
**is_disabled** | **bool** | Has this credential been disabled? | [optional] 
**logged_in_at** | **string** | Timestamp for most recent login using credential | [optional] 
**password_reset_url** | **string** | Url with one-time use secret token that the user can use to reset password | [optional] 
**type** | **string** | Short name for the type of this kind of credential | [optional] 
**url** | **string** | Link to get this item | [optional] 
**user_url** | **string** | Link to get this user | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


