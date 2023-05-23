# Swagger\Client\ConnectionApi

All URIs are relative to *https://example.looker.com:443/api/4.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allConnections**](ConnectionApi.md#allConnections) | **GET** /connections | Get All Connections
[**allDialectInfos**](ConnectionApi.md#allDialectInfos) | **GET** /dialect_info | Get All Dialect Infos
[**allExternalOauthApplications**](ConnectionApi.md#allExternalOauthApplications) | **GET** /external_oauth_applications | Get All External OAuth Applications
[**allSshServers**](ConnectionApi.md#allSshServers) | **GET** /ssh_servers | Get All SSH Servers
[**allSshTunnels**](ConnectionApi.md#allSshTunnels) | **GET** /ssh_tunnels | Get All SSH Tunnels
[**connection**](ConnectionApi.md#connection) | **GET** /connections/{connection_name} | Get Connection
[**createConnection**](ConnectionApi.md#createConnection) | **POST** /connections | Create Connection
[**createExternalOauthApplication**](ConnectionApi.md#createExternalOauthApplication) | **POST** /external_oauth_applications | Create External OAuth Application
[**createOauthApplicationUserState**](ConnectionApi.md#createOauthApplicationUserState) | **POST** /external_oauth_applications/user_state | Create Create OAuth user state.
[**createSshServer**](ConnectionApi.md#createSshServer) | **POST** /ssh_servers | Create SSH Server
[**createSshTunnel**](ConnectionApi.md#createSshTunnel) | **POST** /ssh_tunnels | Create SSH Tunnel
[**deleteConnection**](ConnectionApi.md#deleteConnection) | **DELETE** /connections/{connection_name} | Delete Connection
[**deleteConnectionOverride**](ConnectionApi.md#deleteConnectionOverride) | **DELETE** /connections/{connection_name}/connection_override/{override_context} | Delete Connection Override
[**deleteSshServer**](ConnectionApi.md#deleteSshServer) | **DELETE** /ssh_server/{ssh_server_id} | Delete SSH Server
[**deleteSshTunnel**](ConnectionApi.md#deleteSshTunnel) | **DELETE** /ssh_tunnel/{ssh_tunnel_id} | Delete SSH Tunnel
[**sshPublicKey**](ConnectionApi.md#sshPublicKey) | **GET** /ssh_public_key | Get SSH Public Key
[**sshServer**](ConnectionApi.md#sshServer) | **GET** /ssh_server/{ssh_server_id} | Get SSH Server
[**sshTunnel**](ConnectionApi.md#sshTunnel) | **GET** /ssh_tunnel/{ssh_tunnel_id} | Get SSH Tunnel
[**testConnection**](ConnectionApi.md#testConnection) | **PUT** /connections/{connection_name}/test | Test Connection
[**testConnectionConfig**](ConnectionApi.md#testConnectionConfig) | **PUT** /connections/test | Test Connection Configuration
[**testSshServer**](ConnectionApi.md#testSshServer) | **GET** /ssh_server/{ssh_server_id}/test | Test SSH Server
[**testSshTunnel**](ConnectionApi.md#testSshTunnel) | **GET** /ssh_tunnel/{ssh_tunnel_id}/test | Test SSH Tunnel
[**updateConnection**](ConnectionApi.md#updateConnection) | **PATCH** /connections/{connection_name} | Update Connection
[**updateSshServer**](ConnectionApi.md#updateSshServer) | **PATCH** /ssh_server/{ssh_server_id} | Update SSH Server
[**updateSshTunnel**](ConnectionApi.md#updateSshTunnel) | **PATCH** /ssh_tunnel/{ssh_tunnel_id} | Update SSH Tunnel


# **allConnections**
> \Swagger\Client\Model\DBConnection[] allConnections($fields)

Get All Connections

### Get information about all connections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allConnections($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->allConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\DBConnection[]**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allDialectInfos**
> \Swagger\Client\Model\DialectInfo[] allDialectInfos($fields)

Get All Dialect Infos

### Get information about all dialects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allDialectInfos($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->allDialectInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\DialectInfo[]**](../Model/DialectInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allExternalOauthApplications**
> \Swagger\Client\Model\ExternalOauthApplication[] allExternalOauthApplications($name, $client_id)

Get All External OAuth Applications

### Get all External OAuth Applications.  This is an OAuth Application which Looker uses to access external systems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Application name
$client_id = "client_id_example"; // string | Application Client ID

try {
    $result = $apiInstance->allExternalOauthApplications($name, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->allExternalOauthApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Application name | [optional]
 **client_id** | **string**| Application Client ID | [optional]

### Return type

[**\Swagger\Client\Model\ExternalOauthApplication[]**](../Model/ExternalOauthApplication.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allSshServers**
> \Swagger\Client\Model\SshServer[] allSshServers($fields)

Get All SSH Servers

### Get information about all SSH Servers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allSshServers($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->allSshServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\SshServer[]**](../Model/SshServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allSshTunnels**
> \Swagger\Client\Model\SshTunnel[] allSshTunnels($fields)

Get All SSH Tunnels

### Get information about all SSH Tunnels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->allSshTunnels($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->allSshTunnels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\SshTunnel[]**](../Model/SshTunnel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connection**
> \Swagger\Client\Model\DBConnection connection($connection_name, $fields)

Get Connection

### Get information about a connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$fields = "fields_example"; // string | Requested fields.

try {
    $result = $apiInstance->connection($connection_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **fields** | **string**| Requested fields. | [optional]

### Return type

[**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createConnection**
> \Swagger\Client\Model\DBConnection createConnection($body)

Create Connection

### Create a connection using the specified configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DBConnection(); // \Swagger\Client\Model\DBConnection | Connection

try {
    $result = $apiInstance->createConnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->createConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)| Connection |

### Return type

[**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createExternalOauthApplication**
> \Swagger\Client\Model\ExternalOauthApplication createExternalOauthApplication($body)

Create External OAuth Application

### Create an OAuth Application using the specified configuration.  This is an OAuth Application which Looker uses to access external systems.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ExternalOauthApplication(); // \Swagger\Client\Model\ExternalOauthApplication | External OAuth Application

try {
    $result = $apiInstance->createExternalOauthApplication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->createExternalOauthApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalOauthApplication**](../Model/ExternalOauthApplication.md)| External OAuth Application |

### Return type

[**\Swagger\Client\Model\ExternalOauthApplication**](../Model/ExternalOauthApplication.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOauthApplicationUserState**
> \Swagger\Client\Model\CreateOAuthApplicationUserStateResponse createOauthApplicationUserState($body)

Create Create OAuth user state.

### Create OAuth User state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateOAuthApplicationUserStateRequest(); // \Swagger\Client\Model\CreateOAuthApplicationUserStateRequest | Create OAuth user state.

try {
    $result = $apiInstance->createOauthApplicationUserState($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->createOauthApplicationUserState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateOAuthApplicationUserStateRequest**](../Model/CreateOAuthApplicationUserStateRequest.md)| Create OAuth user state. |

### Return type

[**\Swagger\Client\Model\CreateOAuthApplicationUserStateResponse**](../Model/CreateOAuthApplicationUserStateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSshServer**
> \Swagger\Client\Model\SshServer createSshServer($body)

Create SSH Server

### Create an SSH Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SshServer(); // \Swagger\Client\Model\SshServer | SSH Server

try {
    $result = $apiInstance->createSshServer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->createSshServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SshServer**](../Model/SshServer.md)| SSH Server |

### Return type

[**\Swagger\Client\Model\SshServer**](../Model/SshServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSshTunnel**
> \Swagger\Client\Model\SshTunnel createSshTunnel($body)

Create SSH Tunnel

### Create an SSH Tunnel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SshTunnel(); // \Swagger\Client\Model\SshTunnel | SSH Tunnel

try {
    $result = $apiInstance->createSshTunnel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->createSshTunnel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SshTunnel**](../Model/SshTunnel.md)| SSH Tunnel |

### Return type

[**\Swagger\Client\Model\SshTunnel**](../Model/SshTunnel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConnection**
> string deleteConnection($connection_name)

Delete Connection

### Delete a connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection

try {
    $result = $apiInstance->deleteConnection($connection_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->deleteConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConnectionOverride**
> string deleteConnectionOverride($connection_name, $override_context)

Delete Connection Override

### Delete a connection override.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$override_context = "override_context_example"; // string | Context of connection override

try {
    $result = $apiInstance->deleteConnectionOverride($connection_name, $override_context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->deleteConnectionOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **override_context** | **string**| Context of connection override |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSshServer**
> string deleteSshServer($ssh_server_id)

Delete SSH Server

### Delete an SSH Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_server_id = "ssh_server_id_example"; // string | Id of SSH Server

try {
    $result = $apiInstance->deleteSshServer($ssh_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->deleteSshServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_server_id** | **string**| Id of SSH Server |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSshTunnel**
> string deleteSshTunnel($ssh_tunnel_id)

Delete SSH Tunnel

### Delete an SSH Tunnel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_tunnel_id = "ssh_tunnel_id_example"; // string | Id of SSH Tunnel

try {
    $result = $apiInstance->deleteSshTunnel($ssh_tunnel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->deleteSshTunnel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_tunnel_id** | **string**| Id of SSH Tunnel |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sshPublicKey**
> \Swagger\Client\Model\SshPublicKey sshPublicKey()

Get SSH Public Key

### Get the SSH public key  Get the public key created for this instance to identify itself to a remote SSH server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->sshPublicKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->sshPublicKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SshPublicKey**](../Model/SshPublicKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sshServer**
> \Swagger\Client\Model\SshServer sshServer($ssh_server_id)

Get SSH Server

### Get information about an SSH Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_server_id = "ssh_server_id_example"; // string | Id of SSH Server

try {
    $result = $apiInstance->sshServer($ssh_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->sshServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_server_id** | **string**| Id of SSH Server |

### Return type

[**\Swagger\Client\Model\SshServer**](../Model/SshServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sshTunnel**
> \Swagger\Client\Model\SshTunnel sshTunnel($ssh_tunnel_id)

Get SSH Tunnel

### Get information about an SSH Tunnel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_tunnel_id = "ssh_tunnel_id_example"; // string | Id of SSH Tunnel

try {
    $result = $apiInstance->sshTunnel($ssh_tunnel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->sshTunnel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_tunnel_id** | **string**| Id of SSH Tunnel |

### Return type

[**\Swagger\Client\Model\SshTunnel**](../Model/SshTunnel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testConnection**
> \Swagger\Client\Model\DBConnectionTestResult[] testConnection($connection_name, $tests)

Test Connection

### Test an existing connection.  Note that a connection's 'dialect' property has a 'connection_tests' property that lists the specific types of tests that the connection supports.  This API is rate limited.  Unsupported tests in the request will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$tests = array("tests_example"); // string[] | Array of names of tests to run

try {
    $result = $apiInstance->testConnection($connection_name, $tests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->testConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **tests** | [**string[]**](../Model/string.md)| Array of names of tests to run | [optional]

### Return type

[**\Swagger\Client\Model\DBConnectionTestResult[]**](../Model/DBConnectionTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testConnectionConfig**
> \Swagger\Client\Model\DBConnectionTestResult[] testConnectionConfig($body, $tests)

Test Connection Configuration

### Test a connection configuration.  Note that a connection's 'dialect' property has a 'connection_tests' property that lists the specific types of tests that the connection supports.  This API is rate limited.  Unsupported tests in the request will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DBConnection(); // \Swagger\Client\Model\DBConnection | Connection
$tests = array("tests_example"); // string[] | Array of names of tests to run

try {
    $result = $apiInstance->testConnectionConfig($body, $tests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->testConnectionConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)| Connection |
 **tests** | [**string[]**](../Model/string.md)| Array of names of tests to run | [optional]

### Return type

[**\Swagger\Client\Model\DBConnectionTestResult[]**](../Model/DBConnectionTestResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSshServer**
> \Swagger\Client\Model\SshServer testSshServer($ssh_server_id)

Test SSH Server

### Test the SSH Server

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_server_id = "ssh_server_id_example"; // string | Id of SSH Server

try {
    $result = $apiInstance->testSshServer($ssh_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->testSshServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_server_id** | **string**| Id of SSH Server |

### Return type

[**\Swagger\Client\Model\SshServer**](../Model/SshServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSshTunnel**
> \Swagger\Client\Model\SshTunnel testSshTunnel($ssh_tunnel_id)

Test SSH Tunnel

### Test the SSH Tunnel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_tunnel_id = "ssh_tunnel_id_example"; // string | Id of SSH Tunnel

try {
    $result = $apiInstance->testSshTunnel($ssh_tunnel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->testSshTunnel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_tunnel_id** | **string**| Id of SSH Tunnel |

### Return type

[**\Swagger\Client\Model\SshTunnel**](../Model/SshTunnel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConnection**
> \Swagger\Client\Model\DBConnection updateConnection($connection_name, $body)

Update Connection

### Update a connection using the specified configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connection_name = "connection_name_example"; // string | Name of connection
$body = new \Swagger\Client\Model\DBConnection(); // \Swagger\Client\Model\DBConnection | Connection

try {
    $result = $apiInstance->updateConnection($connection_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->updateConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_name** | **string**| Name of connection |
 **body** | [**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)| Connection |

### Return type

[**\Swagger\Client\Model\DBConnection**](../Model/DBConnection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSshServer**
> \Swagger\Client\Model\SshServer updateSshServer($ssh_server_id, $body)

Update SSH Server

### Update an SSH Server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_server_id = "ssh_server_id_example"; // string | Id of SSH Server
$body = new \Swagger\Client\Model\SshServer(); // \Swagger\Client\Model\SshServer | SSH Server

try {
    $result = $apiInstance->updateSshServer($ssh_server_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->updateSshServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_server_id** | **string**| Id of SSH Server |
 **body** | [**\Swagger\Client\Model\SshServer**](../Model/SshServer.md)| SSH Server |

### Return type

[**\Swagger\Client\Model\SshServer**](../Model/SshServer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSshTunnel**
> \Swagger\Client\Model\SshTunnel updateSshTunnel($ssh_tunnel_id, $body)

Update SSH Tunnel

### Update an SSH Tunnel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ssh_tunnel_id = "ssh_tunnel_id_example"; // string | Id of SSH Tunnel
$body = new \Swagger\Client\Model\SshTunnel(); // \Swagger\Client\Model\SshTunnel | SSH Tunnel

try {
    $result = $apiInstance->updateSshTunnel($ssh_tunnel_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->updateSshTunnel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_tunnel_id** | **string**| Id of SSH Tunnel |
 **body** | [**\Swagger\Client\Model\SshTunnel**](../Model/SshTunnel.md)| SSH Tunnel |

### Return type

[**\Swagger\Client\Model\SshTunnel**](../Model/SshTunnel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

