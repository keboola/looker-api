# OauthClientApp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**client_guid** | **string** | The globally unique id of this application | [optional] 
**redirect_uri** | **string** | The uri with which this application will receive an auth code by browser redirect. | [optional] 
**display_name** | **string** | The application&#39;s display name | [optional] 
**description** | **string** | A description of the application that will be displayed to users | [optional] 
**enabled** | **bool** | When enabled is true, OAuth2 and API requests will be accepted from this app. When false, all requests from this app will be refused. Setting disabled invalidates existing tokens. | [optional] 
**group_id** | **string** | If set, only Looker users who are members of this group can use this web app with Looker. If group_id is not set, any Looker user may use this app to access this Looker instance | [optional] 
**tokens_invalid_before** | [**\DateTime**](\DateTime.md) | All auth codes, access tokens, and refresh tokens issued for this application prior to this date-time for ALL USERS will be invalid. | [optional] 
**activated_users** | [**\Swagger\Client\Model\UserPublic[]**](UserPublic.md) | All users who have been activated to use this app | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


