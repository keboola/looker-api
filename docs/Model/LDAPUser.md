# LDAPUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all_emails** | **string[]** | Array of user&#39;s email addresses and aliases for use in migration | [optional] 
**attributes** | **map[string,string]** | Dictionary of user&#39;s attributes (name/value) | [optional] 
**email** | **string** | Primary email address | [optional] 
**first_name** | **string** | First name | [optional] 
**groups** | **string[]** | Array of user&#39;s groups (group names only) | [optional] 
**last_name** | **string** | Last Name | [optional] 
**ldap_dn** | **string** | LDAP&#39;s distinguished name for the user record | [optional] 
**ldap_id** | **string** | LDAP&#39;s Unique ID for the user | [optional] 
**roles** | **string[]** | Array of user&#39;s roles (role names only) | [optional] 
**url** | **string** | Link to ldap config | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


