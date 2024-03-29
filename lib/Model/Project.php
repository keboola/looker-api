<?php
/**
 * Project
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 4.0 Reference
 *
 * API 4.0 is the current release of the Looker API. API 3.1 is deprecated.  ### Authorization  The classic method of API authorization uses Looker **API** credentials for authorization and access control. Looker admins can create API credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://cloud.google.com/looker/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs.  For details, see the [API Explorer documentation](https://cloud.google.com/looker/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://cloud.google.com/looker/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://cloud.google.com/looker/docs/r/api/versioning).   ### In This Release  API 4.0 version was introduced to make adjustments to API functions, parameters, and response types to fix bugs and inconsistencies. These changes fall outside the bounds of non-breaking additive changes we can make to the previous API 3.1.  One benefit of these type adjustments in API 4.0 is dramatically better support for strongly typed languages like TypeScript, Kotlin, Swift, Go, C#, and more.  See the [API 4.0 GA announcement](https://developers.looker.com/api/advanced-usage/version-4-ga) for more information about API 4.0.  The API Explorer can be used to [interactively compare](https://cloud.google.com/looker/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.   ### API and SDK Support Policies  Looker API versions and language SDKs have varying support levels. Please read the API and SDK [support policies](https://cloud.google.com/looker/docs/r/api/support-policy) for more information.
 *
 * OpenAPI spec version: 4.0.23.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Project Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'id' => 'string',
        'name' => 'string',
        'uses_git' => 'bool',
        'git_remote_url' => 'string',
        'git_username' => 'string',
        'git_password' => 'string',
        'git_production_branch_name' => 'string',
        'use_git_cookie_auth' => 'bool',
        'git_username_user_attribute' => 'string',
        'git_password_user_attribute' => 'string',
        'git_service_name' => 'string',
        'git_application_server_http_port' => 'int',
        'git_application_server_http_scheme' => 'string',
        'deploy_secret' => 'string',
        'unset_deploy_secret' => 'bool',
        'pull_request_mode' => 'string',
        'validation_required' => 'bool',
        'git_release_mgmt_enabled' => 'bool',
        'allow_warnings' => 'bool',
        'is_example' => 'bool',
        'dependency_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'id' => null,
        'name' => null,
        'uses_git' => null,
        'git_remote_url' => null,
        'git_username' => null,
        'git_password' => null,
        'git_production_branch_name' => null,
        'use_git_cookie_auth' => null,
        'git_username_user_attribute' => null,
        'git_password_user_attribute' => null,
        'git_service_name' => null,
        'git_application_server_http_port' => 'int64',
        'git_application_server_http_scheme' => null,
        'deploy_secret' => null,
        'unset_deploy_secret' => null,
        'pull_request_mode' => null,
        'validation_required' => null,
        'git_release_mgmt_enabled' => null,
        'allow_warnings' => null,
        'is_example' => null,
        'dependency_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'can' => 'can',
        'id' => 'id',
        'name' => 'name',
        'uses_git' => 'uses_git',
        'git_remote_url' => 'git_remote_url',
        'git_username' => 'git_username',
        'git_password' => 'git_password',
        'git_production_branch_name' => 'git_production_branch_name',
        'use_git_cookie_auth' => 'use_git_cookie_auth',
        'git_username_user_attribute' => 'git_username_user_attribute',
        'git_password_user_attribute' => 'git_password_user_attribute',
        'git_service_name' => 'git_service_name',
        'git_application_server_http_port' => 'git_application_server_http_port',
        'git_application_server_http_scheme' => 'git_application_server_http_scheme',
        'deploy_secret' => 'deploy_secret',
        'unset_deploy_secret' => 'unset_deploy_secret',
        'pull_request_mode' => 'pull_request_mode',
        'validation_required' => 'validation_required',
        'git_release_mgmt_enabled' => 'git_release_mgmt_enabled',
        'allow_warnings' => 'allow_warnings',
        'is_example' => 'is_example',
        'dependency_status' => 'dependency_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'name' => 'setName',
        'uses_git' => 'setUsesGit',
        'git_remote_url' => 'setGitRemoteUrl',
        'git_username' => 'setGitUsername',
        'git_password' => 'setGitPassword',
        'git_production_branch_name' => 'setGitProductionBranchName',
        'use_git_cookie_auth' => 'setUseGitCookieAuth',
        'git_username_user_attribute' => 'setGitUsernameUserAttribute',
        'git_password_user_attribute' => 'setGitPasswordUserAttribute',
        'git_service_name' => 'setGitServiceName',
        'git_application_server_http_port' => 'setGitApplicationServerHttpPort',
        'git_application_server_http_scheme' => 'setGitApplicationServerHttpScheme',
        'deploy_secret' => 'setDeploySecret',
        'unset_deploy_secret' => 'setUnsetDeploySecret',
        'pull_request_mode' => 'setPullRequestMode',
        'validation_required' => 'setValidationRequired',
        'git_release_mgmt_enabled' => 'setGitReleaseMgmtEnabled',
        'allow_warnings' => 'setAllowWarnings',
        'is_example' => 'setIsExample',
        'dependency_status' => 'setDependencyStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'name' => 'getName',
        'uses_git' => 'getUsesGit',
        'git_remote_url' => 'getGitRemoteUrl',
        'git_username' => 'getGitUsername',
        'git_password' => 'getGitPassword',
        'git_production_branch_name' => 'getGitProductionBranchName',
        'use_git_cookie_auth' => 'getUseGitCookieAuth',
        'git_username_user_attribute' => 'getGitUsernameUserAttribute',
        'git_password_user_attribute' => 'getGitPasswordUserAttribute',
        'git_service_name' => 'getGitServiceName',
        'git_application_server_http_port' => 'getGitApplicationServerHttpPort',
        'git_application_server_http_scheme' => 'getGitApplicationServerHttpScheme',
        'deploy_secret' => 'getDeploySecret',
        'unset_deploy_secret' => 'getUnsetDeploySecret',
        'pull_request_mode' => 'getPullRequestMode',
        'validation_required' => 'getValidationRequired',
        'git_release_mgmt_enabled' => 'getGitReleaseMgmtEnabled',
        'allow_warnings' => 'getAllowWarnings',
        'is_example' => 'getIsExample',
        'dependency_status' => 'getDependencyStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uses_git'] = isset($data['uses_git']) ? $data['uses_git'] : null;
        $this->container['git_remote_url'] = isset($data['git_remote_url']) ? $data['git_remote_url'] : null;
        $this->container['git_username'] = isset($data['git_username']) ? $data['git_username'] : null;
        $this->container['git_password'] = isset($data['git_password']) ? $data['git_password'] : null;
        $this->container['git_production_branch_name'] = isset($data['git_production_branch_name']) ? $data['git_production_branch_name'] : null;
        $this->container['use_git_cookie_auth'] = isset($data['use_git_cookie_auth']) ? $data['use_git_cookie_auth'] : null;
        $this->container['git_username_user_attribute'] = isset($data['git_username_user_attribute']) ? $data['git_username_user_attribute'] : null;
        $this->container['git_password_user_attribute'] = isset($data['git_password_user_attribute']) ? $data['git_password_user_attribute'] : null;
        $this->container['git_service_name'] = isset($data['git_service_name']) ? $data['git_service_name'] : null;
        $this->container['git_application_server_http_port'] = isset($data['git_application_server_http_port']) ? $data['git_application_server_http_port'] : null;
        $this->container['git_application_server_http_scheme'] = isset($data['git_application_server_http_scheme']) ? $data['git_application_server_http_scheme'] : null;
        $this->container['deploy_secret'] = isset($data['deploy_secret']) ? $data['deploy_secret'] : null;
        $this->container['unset_deploy_secret'] = isset($data['unset_deploy_secret']) ? $data['unset_deploy_secret'] : null;
        $this->container['pull_request_mode'] = isset($data['pull_request_mode']) ? $data['pull_request_mode'] : null;
        $this->container['validation_required'] = isset($data['validation_required']) ? $data['validation_required'] : null;
        $this->container['git_release_mgmt_enabled'] = isset($data['git_release_mgmt_enabled']) ? $data['git_release_mgmt_enabled'] : null;
        $this->container['allow_warnings'] = isset($data['allow_warnings']) ? $data['allow_warnings'] : null;
        $this->container['is_example'] = isset($data['is_example']) ? $data['is_example'] : null;
        $this->container['dependency_status'] = isset($data['dependency_status']) ? $data['dependency_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets can
     *
     * @return map[string,bool]
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param map[string,bool] $can Operations the current user is able to perform on this object
     *
     * @return $this
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Project Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Project display name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uses_git
     *
     * @return bool
     */
    public function getUsesGit()
    {
        return $this->container['uses_git'];
    }

    /**
     * Sets uses_git
     *
     * @param bool $uses_git If true the project is configured with a git repository
     *
     * @return $this
     */
    public function setUsesGit($uses_git)
    {
        $this->container['uses_git'] = $uses_git;

        return $this;
    }

    /**
     * Gets git_remote_url
     *
     * @return string
     */
    public function getGitRemoteUrl()
    {
        return $this->container['git_remote_url'];
    }

    /**
     * Sets git_remote_url
     *
     * @param string $git_remote_url Git remote repository url
     *
     * @return $this
     */
    public function setGitRemoteUrl($git_remote_url)
    {
        $this->container['git_remote_url'] = $git_remote_url;

        return $this;
    }

    /**
     * Gets git_username
     *
     * @return string
     */
    public function getGitUsername()
    {
        return $this->container['git_username'];
    }

    /**
     * Sets git_username
     *
     * @param string $git_username Git username for HTTPS authentication. (For production only, if using user attributes.)
     *
     * @return $this
     */
    public function setGitUsername($git_username)
    {
        $this->container['git_username'] = $git_username;

        return $this;
    }

    /**
     * Gets git_password
     *
     * @return string
     */
    public function getGitPassword()
    {
        return $this->container['git_password'];
    }

    /**
     * Sets git_password
     *
     * @param string $git_password (Write-Only) Git password for HTTPS authentication. (For production only, if using user attributes.)
     *
     * @return $this
     */
    public function setGitPassword($git_password)
    {
        $this->container['git_password'] = $git_password;

        return $this;
    }

    /**
     * Gets git_production_branch_name
     *
     * @return string
     */
    public function getGitProductionBranchName()
    {
        return $this->container['git_production_branch_name'];
    }

    /**
     * Sets git_production_branch_name
     *
     * @param string $git_production_branch_name Git production branch name. Defaults to master. Supported only in Looker 21.0 and higher.
     *
     * @return $this
     */
    public function setGitProductionBranchName($git_production_branch_name)
    {
        $this->container['git_production_branch_name'] = $git_production_branch_name;

        return $this;
    }

    /**
     * Gets use_git_cookie_auth
     *
     * @return bool
     */
    public function getUseGitCookieAuth()
    {
        return $this->container['use_git_cookie_auth'];
    }

    /**
     * Sets use_git_cookie_auth
     *
     * @param bool $use_git_cookie_auth If true, the project uses a git cookie for authentication.
     *
     * @return $this
     */
    public function setUseGitCookieAuth($use_git_cookie_auth)
    {
        $this->container['use_git_cookie_auth'] = $use_git_cookie_auth;

        return $this;
    }

    /**
     * Gets git_username_user_attribute
     *
     * @return string
     */
    public function getGitUsernameUserAttribute()
    {
        return $this->container['git_username_user_attribute'];
    }

    /**
     * Sets git_username_user_attribute
     *
     * @param string $git_username_user_attribute User attribute name for username in per-user HTTPS authentication.
     *
     * @return $this
     */
    public function setGitUsernameUserAttribute($git_username_user_attribute)
    {
        $this->container['git_username_user_attribute'] = $git_username_user_attribute;

        return $this;
    }

    /**
     * Gets git_password_user_attribute
     *
     * @return string
     */
    public function getGitPasswordUserAttribute()
    {
        return $this->container['git_password_user_attribute'];
    }

    /**
     * Sets git_password_user_attribute
     *
     * @param string $git_password_user_attribute User attribute name for password in per-user HTTPS authentication.
     *
     * @return $this
     */
    public function setGitPasswordUserAttribute($git_password_user_attribute)
    {
        $this->container['git_password_user_attribute'] = $git_password_user_attribute;

        return $this;
    }

    /**
     * Gets git_service_name
     *
     * @return string
     */
    public function getGitServiceName()
    {
        return $this->container['git_service_name'];
    }

    /**
     * Sets git_service_name
     *
     * @param string $git_service_name Name of the git service provider
     *
     * @return $this
     */
    public function setGitServiceName($git_service_name)
    {
        $this->container['git_service_name'] = $git_service_name;

        return $this;
    }

    /**
     * Gets git_application_server_http_port
     *
     * @return int
     */
    public function getGitApplicationServerHttpPort()
    {
        return $this->container['git_application_server_http_port'];
    }

    /**
     * Sets git_application_server_http_port
     *
     * @param int $git_application_server_http_port Port that HTTP(S) application server is running on (for PRs, file browsing, etc.)
     *
     * @return $this
     */
    public function setGitApplicationServerHttpPort($git_application_server_http_port)
    {
        $this->container['git_application_server_http_port'] = $git_application_server_http_port;

        return $this;
    }

    /**
     * Gets git_application_server_http_scheme
     *
     * @return string
     */
    public function getGitApplicationServerHttpScheme()
    {
        return $this->container['git_application_server_http_scheme'];
    }

    /**
     * Sets git_application_server_http_scheme
     *
     * @param string $git_application_server_http_scheme Scheme that is running on application server (for PRs, file browsing, etc.)
     *
     * @return $this
     */
    public function setGitApplicationServerHttpScheme($git_application_server_http_scheme)
    {
        $this->container['git_application_server_http_scheme'] = $git_application_server_http_scheme;

        return $this;
    }

    /**
     * Gets deploy_secret
     *
     * @return string
     */
    public function getDeploySecret()
    {
        return $this->container['deploy_secret'];
    }

    /**
     * Sets deploy_secret
     *
     * @param string $deploy_secret (Write-Only) Optional secret token with which to authenticate requests to the webhook deploy endpoint. If not set, endpoint is unauthenticated.
     *
     * @return $this
     */
    public function setDeploySecret($deploy_secret)
    {
        $this->container['deploy_secret'] = $deploy_secret;

        return $this;
    }

    /**
     * Gets unset_deploy_secret
     *
     * @return bool
     */
    public function getUnsetDeploySecret()
    {
        return $this->container['unset_deploy_secret'];
    }

    /**
     * Sets unset_deploy_secret
     *
     * @param bool $unset_deploy_secret (Write-Only) When true, unsets the deploy secret to allow unauthenticated access to the webhook deploy endpoint.
     *
     * @return $this
     */
    public function setUnsetDeploySecret($unset_deploy_secret)
    {
        $this->container['unset_deploy_secret'] = $unset_deploy_secret;

        return $this;
    }

    /**
     * Gets pull_request_mode
     *
     * @return string
     */
    public function getPullRequestMode()
    {
        return $this->container['pull_request_mode'];
    }

    /**
     * Sets pull_request_mode
     *
     * @param string $pull_request_mode The git pull request policy for this project. Valid values are: \"off\", \"links\", \"recommended\", \"required\".
     *
     * @return $this
     */
    public function setPullRequestMode($pull_request_mode)
    {
        $this->container['pull_request_mode'] = $pull_request_mode;

        return $this;
    }

    /**
     * Gets validation_required
     *
     * @return bool
     */
    public function getValidationRequired()
    {
        return $this->container['validation_required'];
    }

    /**
     * Sets validation_required
     *
     * @param bool $validation_required Validation policy: If true, the project must pass validation checks before project changes can be committed to the git repository
     *
     * @return $this
     */
    public function setValidationRequired($validation_required)
    {
        $this->container['validation_required'] = $validation_required;

        return $this;
    }

    /**
     * Gets git_release_mgmt_enabled
     *
     * @return bool
     */
    public function getGitReleaseMgmtEnabled()
    {
        return $this->container['git_release_mgmt_enabled'];
    }

    /**
     * Sets git_release_mgmt_enabled
     *
     * @param bool $git_release_mgmt_enabled If true, advanced git release management is enabled for this project
     *
     * @return $this
     */
    public function setGitReleaseMgmtEnabled($git_release_mgmt_enabled)
    {
        $this->container['git_release_mgmt_enabled'] = $git_release_mgmt_enabled;

        return $this;
    }

    /**
     * Gets allow_warnings
     *
     * @return bool
     */
    public function getAllowWarnings()
    {
        return $this->container['allow_warnings'];
    }

    /**
     * Sets allow_warnings
     *
     * @param bool $allow_warnings Validation policy: If true, the project can be committed with warnings when `validation_required` is true. (`allow_warnings` does nothing if `validation_required` is false).
     *
     * @return $this
     */
    public function setAllowWarnings($allow_warnings)
    {
        $this->container['allow_warnings'] = $allow_warnings;

        return $this;
    }

    /**
     * Gets is_example
     *
     * @return bool
     */
    public function getIsExample()
    {
        return $this->container['is_example'];
    }

    /**
     * Sets is_example
     *
     * @param bool $is_example If true the project is an example project and cannot be modified
     *
     * @return $this
     */
    public function setIsExample($is_example)
    {
        $this->container['is_example'] = $is_example;

        return $this;
    }

    /**
     * Gets dependency_status
     *
     * @return string
     */
    public function getDependencyStatus()
    {
        return $this->container['dependency_status'];
    }

    /**
     * Sets dependency_status
     *
     * @param string $dependency_status Status of dependencies in your manifest & lockfile
     *
     * @return $this
     */
    public function setDependencyStatus($dependency_status)
    {
        $this->container['dependency_status'] = $dependency_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


