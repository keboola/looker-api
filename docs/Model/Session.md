# Session

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Id | [optional] 
**ip_address** | **string** | IP address of user when this session was initiated | [optional] 
**browser** | **string** | User&#39;s browser type | [optional] 
**operating_system** | **string** | User&#39;s Operating System | [optional] 
**city** | **string** | City component of user location (derived from IP address) | [optional] 
**state** | **string** | State component of user location (derived from IP address) | [optional] 
**country** | **string** | Country component of user location (derived from IP address) | [optional] 
**credentials_type** | **string** | Type of credentials used for logging in this session | [optional] 
**extended_at** | **string** | Time when this session was last extended by the user | [optional] 
**extended_count** | **int** | Number of times this session was extended | [optional] 
**sudo_user_id** | **int** | Actual user in the case when this session represents one user sudo&#39;ing as another | [optional] 
**created_at** | **string** | Time when this session was initiated | [optional] 
**expires_at** | **string** | Time when this session will expire | [optional] 
**url** | **string** | Link to get this item | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


