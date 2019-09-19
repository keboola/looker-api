# UserLoginLockout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Hash of user&#39;s client id | [optional] 
**auth_type** | **string** | Authentication method for login failures | [optional] 
**ip** | **string** | IP address of most recent failed attempt | [optional] 
**user_id** | **int** | User ID | [optional] 
**remote_id** | **string** | Remote ID of user if using LDAP | [optional] 
**full_name** | **string** | User&#39;s name | [optional] 
**email** | **string** | Email address associated with the user&#39;s account | [optional] 
**fail_count** | **int** | Number of failures that triggered the lockout | [optional] 
**lockout_at** | [**\DateTime**](\DateTime.md) | Time when lockout was triggered | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


