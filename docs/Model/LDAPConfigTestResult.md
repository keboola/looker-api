# LDAPConfigTestResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | **string** | Additional details for error cases | [optional] 
**issues** | [**\Swagger\Client\Model\LDAPConfigTestIssue[]**](LDAPConfigTestIssue.md) | Array of issues/considerations about the result | [optional] 
**message** | **string** | Short human readable test about the result | [optional] 
**status** | **string** | Test status code: always &#39;success&#39; or &#39;error&#39; | [optional] 
**trace** | **string** | A more detailed trace of incremental results during auth tests | [optional] 
**user** | [**\Swagger\Client\Model\LDAPUser**](LDAPUser.md) | User details from LDAP server for auth tests | [optional] 
**url** | **string** | Link to ldap config | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


