<?php
/**
 * ProjectWorkspace
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
 * ProjectWorkspace Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectWorkspace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectWorkspace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'project_id' => 'string',
        'workspace_id' => 'string',
        'git_status' => 'string',
        'git_head' => 'string',
        'dependency_status' => 'string',
        'git_branch' => '\Swagger\Client\Model\GitBranch',
        'lookml_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'project_id' => null,
        'workspace_id' => null,
        'git_status' => null,
        'git_head' => null,
        'dependency_status' => null,
        'git_branch' => null,
        'lookml_type' => null
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
        'project_id' => 'project_id',
        'workspace_id' => 'workspace_id',
        'git_status' => 'git_status',
        'git_head' => 'git_head',
        'dependency_status' => 'dependency_status',
        'git_branch' => 'git_branch',
        'lookml_type' => 'lookml_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'project_id' => 'setProjectId',
        'workspace_id' => 'setWorkspaceId',
        'git_status' => 'setGitStatus',
        'git_head' => 'setGitHead',
        'dependency_status' => 'setDependencyStatus',
        'git_branch' => 'setGitBranch',
        'lookml_type' => 'setLookmlType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'project_id' => 'getProjectId',
        'workspace_id' => 'getWorkspaceId',
        'git_status' => 'getGitStatus',
        'git_head' => 'getGitHead',
        'dependency_status' => 'getDependencyStatus',
        'git_branch' => 'getGitBranch',
        'lookml_type' => 'getLookmlType'
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
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['workspace_id'] = isset($data['workspace_id']) ? $data['workspace_id'] : null;
        $this->container['git_status'] = isset($data['git_status']) ? $data['git_status'] : null;
        $this->container['git_head'] = isset($data['git_head']) ? $data['git_head'] : null;
        $this->container['dependency_status'] = isset($data['dependency_status']) ? $data['dependency_status'] : null;
        $this->container['git_branch'] = isset($data['git_branch']) ? $data['git_branch'] : null;
        $this->container['lookml_type'] = isset($data['lookml_type']) ? $data['lookml_type'] : null;
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
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id The id of the project
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets workspace_id
     *
     * @return string
     */
    public function getWorkspaceId()
    {
        return $this->container['workspace_id'];
    }

    /**
     * Sets workspace_id
     *
     * @param string $workspace_id The id of the local workspace containing the project files
     *
     * @return $this
     */
    public function setWorkspaceId($workspace_id)
    {
        $this->container['workspace_id'] = $workspace_id;

        return $this;
    }

    /**
     * Gets git_status
     *
     * @return string
     */
    public function getGitStatus()
    {
        return $this->container['git_status'];
    }

    /**
     * Sets git_status
     *
     * @param string $git_status The status of the local git directory
     *
     * @return $this
     */
    public function setGitStatus($git_status)
    {
        $this->container['git_status'] = $git_status;

        return $this;
    }

    /**
     * Gets git_head
     *
     * @return string
     */
    public function getGitHead()
    {
        return $this->container['git_head'];
    }

    /**
     * Sets git_head
     *
     * @param string $git_head Git head revision name
     *
     * @return $this
     */
    public function setGitHead($git_head)
    {
        $this->container['git_head'] = $git_head;

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
     * @param string $dependency_status Status of the dependencies in your project. Valid values are: \"lock_optional\", \"lock_required\", \"lock_error\", \"install_none\".
     *
     * @return $this
     */
    public function setDependencyStatus($dependency_status)
    {
        $this->container['dependency_status'] = $dependency_status;

        return $this;
    }

    /**
     * Gets git_branch
     *
     * @return \Swagger\Client\Model\GitBranch
     */
    public function getGitBranch()
    {
        return $this->container['git_branch'];
    }

    /**
     * Sets git_branch
     *
     * @param \Swagger\Client\Model\GitBranch $git_branch GitBranch
     *
     * @return $this
     */
    public function setGitBranch($git_branch)
    {
        $this->container['git_branch'] = $git_branch;

        return $this;
    }

    /**
     * Gets lookml_type
     *
     * @return string
     */
    public function getLookmlType()
    {
        return $this->container['lookml_type'];
    }

    /**
     * Sets lookml_type
     *
     * @param string $lookml_type The lookml syntax used by all files in this project
     *
     * @return $this
     */
    public function setLookmlType($lookml_type)
    {
        $this->container['lookml_type'] = $lookml_type;

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


