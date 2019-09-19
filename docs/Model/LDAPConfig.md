# LDAPConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alternate_email_login_allowed** | **bool** | Allow alternate email-based login via &#39;/login/email&#39; for admins and for specified users with the &#39;login_special_email&#39; permission. This option is useful as a fallback during ldap setup, if ldap config problems occur later, or if you need to support some users who are not in your ldap directory. Looker email/password logins are always disabled for regular users when ldap is enabled. | [optional] 
**auth_password** | **string** | (Write-Only)  Password for the LDAP account used to access the LDAP server | [optional] 
**auth_requires_role** | **bool** | Users will not be allowed to login at all unless a role for them is found in LDAP if set to true | [optional] 
**auth_username** | **string** | Distinguished name of LDAP account used to access the LDAP server | [optional] 
**connection_host** | **string** | LDAP server hostname | [optional] 
**connection_port** | **string** | LDAP host port | [optional] 
**connection_tls** | **bool** | Use Transport Layer Security | [optional] 
**connection_tls_no_verify** | **bool** | Do not verify peer when using TLS | [optional] 
**default_new_user_group_ids** | **int[]** | (Write-Only)  Array of ids of groups that will be applied to new users the first time they login via LDAP | [optional] 
**default_new_user_groups** | [**\Swagger\Client\Model\Group[]**](Group.md) | (Read-only) Groups that will be applied to new users the first time they login via LDAP | [optional] 
**default_new_user_role_ids** | **int[]** | (Write-Only)  Array of ids of roles that will be applied to new users the first time they login via LDAP | [optional] 
**default_new_user_roles** | [**\Swagger\Client\Model\Role[]**](Role.md) | (Read-only) Roles that will be applied to new users the first time they login via LDAP | [optional] 
**enabled** | **bool** | Enable/Disable LDAP authentication for the server | [optional] 
**force_no_page** | **bool** | Don&#39;t attempt to do LDAP search result paging (RFC 2696) even if the LDAP server claims to support it. | [optional] 
**groups** | [**\Swagger\Client\Model\LDAPGroupRead[]**](LDAPGroupRead.md) | (Read-only) Array of mappings between LDAP Groups and Looker Roles | [optional] 
**groups_base_dn** | **string** | Base dn for finding groups in LDAP searches | [optional] 
**groups_finder_type** | **string** | Identifier for a strategy for how Looker will search for groups in the LDAP server | [optional] 
**groups_member_attribute** | **string** | LDAP Group attribute that signifies the members of the groups. Most commonly &#39;member&#39; | [optional] 
**groups_objectclasses** | **string** | Optional comma-separated list of supported LDAP objectclass for groups when doing groups searches | [optional] 
**groups_user_attribute** | **string** | LDAP Group attribute that signifies the user in a group. Most commonly &#39;dn&#39; | [optional] 
**groups_with_role_ids** | [**\Swagger\Client\Model\LDAPGroupWrite[]**](LDAPGroupWrite.md) | (Read/Write) Array of mappings between LDAP Groups and arrays of Looker Role ids | [optional] 
**has_auth_password** | **bool** | (Read-only) Has the password been set for the LDAP account used to access the LDAP server | [optional] 
**merge_new_users_by_email** | **bool** | Merge first-time ldap login to existing user account by email addresses. When a user logs in for the first time via ldap this option will connect this user into their existing account by finding the account with a matching email address. Otherwise a new user account will be created for the user. | [optional] 
**modified_at** | **string** | When this config was last modified | [optional] 
**modified_by** | **string** | User id of user who last modified this config | [optional] 
**set_roles_from_groups** | **bool** | Set user roles in Looker based on groups from LDAP | [optional] 
**test_ldap_password** | **string** | (Write-Only)  Test LDAP user password. For ldap tests only. | [optional] 
**test_ldap_user** | **string** | (Write-Only)  Test LDAP user login id. For ldap tests only. | [optional] 
**user_attribute_map_email** | **string** | Name of user record attributes used to indicate email address field | [optional] 
**user_attribute_map_first_name** | **string** | Name of user record attributes used to indicate first name | [optional] 
**user_attribute_map_last_name** | **string** | Name of user record attributes used to indicate last name | [optional] 
**user_attribute_map_ldap_id** | **string** | Name of user record attributes used to indicate unique record id | [optional] 
**user_attributes** | [**\Swagger\Client\Model\LDAPUserAttributeRead[]**](LDAPUserAttributeRead.md) | (Read-only) Array of mappings between LDAP User Attributes and Looker User Attributes | [optional] 
**user_attributes_with_ids** | [**\Swagger\Client\Model\LDAPUserAttributeWrite[]**](LDAPUserAttributeWrite.md) | (Read/Write) Array of mappings between LDAP User Attributes and arrays of Looker User Attribute ids | [optional] 
**user_bind_base_dn** | **string** | Distinguished name of LDAP node used as the base for user searches | [optional] 
**user_custom_filter** | **string** | (Optional) Custom RFC-2254 filter clause for use in finding user during login. Combined via &#39;and&#39; with the other generated filter clauses. | [optional] 
**user_id_attribute_names** | **string** | Name(s) of user record attributes used for matching user login id (comma separated list) | [optional] 
**user_objectclass** | **string** | (Optional) Name of user record objectclass used for finding user during login id | [optional] 
**url** | **string** | Link to get this item | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


