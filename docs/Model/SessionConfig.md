# SessionConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_persistent_sessions** | **bool** | Allow users to have persistent sessions when they login | [optional] 
**session_minutes** | **int** | Number of minutes for user sessions.  Must be between 5 and 43200 | [optional] 
**unlimited_sessions_per_user** | **bool** | Allow users to have an unbounded number of concurrent sessions (otherwise, users will be limited to only one session at a time). | [optional] 
**use_inactivity_based_logout** | **bool** | Enforce session logout for sessions that are inactive for 15 minutes. | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


