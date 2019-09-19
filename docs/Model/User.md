# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**avatar_url** | **string** | URL for the avatar image (may be generic) | [optional] 
**credentials_api3** | [**\Swagger\Client\Model\CredentialsApi3[]**](CredentialsApi3.md) | API 3 credentials | [optional] 
**credentials_email** | [**\Swagger\Client\Model\CredentialsEmail**](CredentialsEmail.md) | Email/Password login credentials | [optional] 
**credentials_embed** | [**\Swagger\Client\Model\CredentialsEmbed[]**](CredentialsEmbed.md) | Embed credentials | [optional] 
**credentials_google** | [**\Swagger\Client\Model\CredentialsGoogle**](CredentialsGoogle.md) | Google auth credentials | [optional] 
**credentials_ldap** | [**\Swagger\Client\Model\CredentialsLDAP**](CredentialsLDAP.md) | LDAP credentials | [optional] 
**credentials_looker_openid** | [**\Swagger\Client\Model\CredentialsLookerOpenid**](CredentialsLookerOpenid.md) | LookerOpenID credentials. Used for login by Looker Analysts | [optional] 
**credentials_oidc** | [**\Swagger\Client\Model\CredentialsOIDC**](CredentialsOIDC.md) | OpenID Connect auth credentials | [optional] 
**credentials_saml** | [**\Swagger\Client\Model\CredentialsSaml**](CredentialsSaml.md) | Saml auth credentials | [optional] 
**credentials_totp** | [**\Swagger\Client\Model\CredentialsTotp**](CredentialsTotp.md) | Two-factor credentials | [optional] 
**display_name** | **string** | Full name for display (available only if both first_name and last_name are set) | [optional] 
**email** | **string** | EMail address | [optional] 
**embed_group_space_id** | **int** | (Embed only) ID of user&#39;s group space based on the external_group_id optionally specified during embed user login | [optional] 
**first_name** | **string** | First name | [optional] 
**group_ids** | **int[]** | Array of ids of the groups for this user | [optional] 
**home_space_id** | **string** | ID string for user&#39;s home space | [optional] 
**id** | **int** | Unique Id | [optional] 
**is_disabled** | **bool** | Account has been disabled | [optional] 
**last_name** | **string** | Last name | [optional] 
**locale** | **string** | User&#39;s preferred locale. User locale takes precedence over Looker&#39;s system-wide default locale. Locale determines language of display strings and date and numeric formatting in API responses. Locale string must be a 2 letter language code or a combination of language code and region code: &#39;en&#39; or &#39;en-US&#39;, for example. | [optional] 
**looker_versions** | **string[]** | Array of strings representing the Looker versions that this user has used (this only goes back as far as &#39;3.54.0&#39;) | [optional] 
**models_dir_validated** | **bool** | User&#39;s dev workspace has been checked for presence of applicable production projects | [optional] 
**personal_space_id** | **int** | ID of user&#39;s personal space | [optional] 
**presumed_looker_employee** | **bool** | User is identified as an employee of Looker | [optional] 
**role_ids** | **int[]** | Array of ids of the roles for this user | [optional] 
**sessions** | [**\Swagger\Client\Model\Session[]**](Session.md) | Active sessions | [optional] 
**ui_state** | **map[string,string]** | Per user dictionary of undocumented state information owned by the Looker UI. | [optional] 
**verified_looker_employee** | **bool** | User is identified as an employee of Looker who has been verified via Looker corporate authentication | [optional] 
**roles_externally_managed** | **bool** | User&#39;s roles are managed by an external directory like SAML or LDAP and can not be changed directly. | [optional] 
**url** | **string** | Link to get this item | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


