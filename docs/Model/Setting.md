# Setting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extension_framework_enabled** | **bool** | Toggle extension framework on or off | [optional] 
**extension_load_url_enabled** | **bool** | (DEPRECATED) Toggle extension extension load url on or off. Do not use. This is temporary setting that will eventually become a noop and subsequently deleted. | [optional] 
**marketplace_auto_install_enabled** | **bool** | Toggle marketplace auto install on or off. Note that auto install only runs if marketplace is enabled. | [optional] 
**marketplace_enabled** | **bool** | Toggle marketplace on or off | [optional] 
**privatelabel_configuration** | [**\Swagger\Client\Model\PrivatelabelConfiguration**](PrivatelabelConfiguration.md) | Private label configuration | [optional] 
**custom_welcome_email** | [**\Swagger\Client\Model\CustomWelcomeEmail**](CustomWelcomeEmail.md) | Custom welcome email configuration | [optional] 
**onboarding_enabled** | **bool** | Toggle onboarding on or off | [optional] 
**timezone** | **string** | Change instance-wide default timezone | [optional] 
**allow_user_timezones** | **bool** | Toggle user-specific timezones on or off | [optional] 
**data_connector_default_enabled** | **bool** | Toggle default future connectors on or off | [optional] 
**host_url** | **string** | Change the base portion of your Looker instance URL setting | [optional] 
**override_warnings** | **bool** | (Write-Only) If warnings are preventing a host URL change, this parameter allows for overriding warnings to force update the setting. Does not directly change any Looker settings. | [optional] 
**email_domain_allowlist** | **string[]** | An array of Email Domain Allowlist of type string for Scheduled Content | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


