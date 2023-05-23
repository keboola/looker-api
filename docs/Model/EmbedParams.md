# EmbedParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**target_url** | **string** | The complete URL of the Looker UI page to display in the embed context. For example, to display the dashboard with id 34, &#x60;target_url&#x60; would look like: &#x60;https://mycompany.looker.com:9999/dashboards/34&#x60;. &#x60;target_uri&#x60; MUST contain a scheme (HTTPS), domain name, and URL path. Port must be included if it is required to reach the Looker server from browser clients. If the Looker instance is behind a load balancer or other proxy, &#x60;target_uri&#x60; must be the public-facing domain name and port required to reach the Looker instance, not the actual internal network machine name of the Looker instance. | 
**session_length** | **int** | Number of seconds the SSO embed session will be valid after the embed session is started. Defaults to 300 seconds. Maximum session length accepted is 2592000 seconds (30 days). | [optional] 
**force_logout_login** | **bool** | When true, the embed session will purge any residual Looker login state (such as in browser cookies) before creating a new login state with the given embed user info. Defaults to true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


