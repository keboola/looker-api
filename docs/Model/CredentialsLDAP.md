# CredentialsLDAP

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Timestamp for the creation of this credential | [optional] 
**email** | **string** | EMail address | [optional] 
**is_disabled** | **bool** | Has this credential been disabled? | [optional] 
**ldap_dn** | **string** | LDAP Distinguished name for this user (as-of the last login) | [optional] 
**ldap_id** | **string** | LDAP Unique ID for this user | [optional] 
**logged_in_at** | **string** | Timestamp for most recent login using credential | [optional] 
**type** | **string** | Short name for the type of this kind of credential | [optional] 
**url** | **string** | Link to get this item | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


