<?php
/**
 * GitBranch
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
 * GitBranch Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GitBranch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GitBranch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'name' => 'string',
        'remote' => 'string',
        'remote_name' => 'string',
        'error' => 'string',
        'message' => 'string',
        'owner_name' => 'string',
        'readonly' => 'bool',
        'personal' => 'bool',
        'is_local' => 'bool',
        'is_remote' => 'bool',
        'is_production' => 'bool',
        'ahead_count' => 'int',
        'behind_count' => 'int',
        'commit_at' => 'int',
        'ref' => 'string',
        'remote_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'name' => null,
        'remote' => null,
        'remote_name' => null,
        'error' => null,
        'message' => null,
        'owner_name' => null,
        'readonly' => null,
        'personal' => null,
        'is_local' => null,
        'is_remote' => null,
        'is_production' => null,
        'ahead_count' => 'int64',
        'behind_count' => 'int64',
        'commit_at' => 'int64',
        'ref' => null,
        'remote_ref' => null
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
        'name' => 'name',
        'remote' => 'remote',
        'remote_name' => 'remote_name',
        'error' => 'error',
        'message' => 'message',
        'owner_name' => 'owner_name',
        'readonly' => 'readonly',
        'personal' => 'personal',
        'is_local' => 'is_local',
        'is_remote' => 'is_remote',
        'is_production' => 'is_production',
        'ahead_count' => 'ahead_count',
        'behind_count' => 'behind_count',
        'commit_at' => 'commit_at',
        'ref' => 'ref',
        'remote_ref' => 'remote_ref'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'name' => 'setName',
        'remote' => 'setRemote',
        'remote_name' => 'setRemoteName',
        'error' => 'setError',
        'message' => 'setMessage',
        'owner_name' => 'setOwnerName',
        'readonly' => 'setReadonly',
        'personal' => 'setPersonal',
        'is_local' => 'setIsLocal',
        'is_remote' => 'setIsRemote',
        'is_production' => 'setIsProduction',
        'ahead_count' => 'setAheadCount',
        'behind_count' => 'setBehindCount',
        'commit_at' => 'setCommitAt',
        'ref' => 'setRef',
        'remote_ref' => 'setRemoteRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'name' => 'getName',
        'remote' => 'getRemote',
        'remote_name' => 'getRemoteName',
        'error' => 'getError',
        'message' => 'getMessage',
        'owner_name' => 'getOwnerName',
        'readonly' => 'getReadonly',
        'personal' => 'getPersonal',
        'is_local' => 'getIsLocal',
        'is_remote' => 'getIsRemote',
        'is_production' => 'getIsProduction',
        'ahead_count' => 'getAheadCount',
        'behind_count' => 'getBehindCount',
        'commit_at' => 'getCommitAt',
        'ref' => 'getRef',
        'remote_ref' => 'getRemoteRef'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['remote'] = isset($data['remote']) ? $data['remote'] : null;
        $this->container['remote_name'] = isset($data['remote_name']) ? $data['remote_name'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['owner_name'] = isset($data['owner_name']) ? $data['owner_name'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['personal'] = isset($data['personal']) ? $data['personal'] : null;
        $this->container['is_local'] = isset($data['is_local']) ? $data['is_local'] : null;
        $this->container['is_remote'] = isset($data['is_remote']) ? $data['is_remote'] : null;
        $this->container['is_production'] = isset($data['is_production']) ? $data['is_production'] : null;
        $this->container['ahead_count'] = isset($data['ahead_count']) ? $data['ahead_count'] : null;
        $this->container['behind_count'] = isset($data['behind_count']) ? $data['behind_count'] : null;
        $this->container['commit_at'] = isset($data['commit_at']) ? $data['commit_at'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['remote_ref'] = isset($data['remote_ref']) ? $data['remote_ref'] : null;
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
     * @param string $name The short name on the local. Updating `name` results in `git checkout <new_name>`
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets remote
     *
     * @return string
     */
    public function getRemote()
    {
        return $this->container['remote'];
    }

    /**
     * Sets remote
     *
     * @param string $remote The name of the remote
     *
     * @return $this
     */
    public function setRemote($remote)
    {
        $this->container['remote'] = $remote;

        return $this;
    }

    /**
     * Gets remote_name
     *
     * @return string
     */
    public function getRemoteName()
    {
        return $this->container['remote_name'];
    }

    /**
     * Sets remote_name
     *
     * @param string $remote_name The short name on the remote
     *
     * @return $this
     */
    public function setRemoteName($remote_name)
    {
        $this->container['remote_name'] = $remote_name;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error Name of error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Message describing an error if present
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets owner_name
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     *
     * @param string $owner_name Name of the owner of a personal branch
     *
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return bool
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool $readonly Whether or not this branch is readonly
     *
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

        return $this;
    }

    /**
     * Gets personal
     *
     * @return bool
     */
    public function getPersonal()
    {
        return $this->container['personal'];
    }

    /**
     * Sets personal
     *
     * @param bool $personal Whether or not this branch is a personal branch - readonly for all developers except the owner
     *
     * @return $this
     */
    public function setPersonal($personal)
    {
        $this->container['personal'] = $personal;

        return $this;
    }

    /**
     * Gets is_local
     *
     * @return bool
     */
    public function getIsLocal()
    {
        return $this->container['is_local'];
    }

    /**
     * Sets is_local
     *
     * @param bool $is_local Whether or not a local ref exists for the branch
     *
     * @return $this
     */
    public function setIsLocal($is_local)
    {
        $this->container['is_local'] = $is_local;

        return $this;
    }

    /**
     * Gets is_remote
     *
     * @return bool
     */
    public function getIsRemote()
    {
        return $this->container['is_remote'];
    }

    /**
     * Sets is_remote
     *
     * @param bool $is_remote Whether or not a remote ref exists for the branch
     *
     * @return $this
     */
    public function setIsRemote($is_remote)
    {
        $this->container['is_remote'] = $is_remote;

        return $this;
    }

    /**
     * Gets is_production
     *
     * @return bool
     */
    public function getIsProduction()
    {
        return $this->container['is_production'];
    }

    /**
     * Sets is_production
     *
     * @param bool $is_production Whether or not this is the production branch
     *
     * @return $this
     */
    public function setIsProduction($is_production)
    {
        $this->container['is_production'] = $is_production;

        return $this;
    }

    /**
     * Gets ahead_count
     *
     * @return int
     */
    public function getAheadCount()
    {
        return $this->container['ahead_count'];
    }

    /**
     * Sets ahead_count
     *
     * @param int $ahead_count Number of commits the local branch is ahead of the remote
     *
     * @return $this
     */
    public function setAheadCount($ahead_count)
    {
        $this->container['ahead_count'] = $ahead_count;

        return $this;
    }

    /**
     * Gets behind_count
     *
     * @return int
     */
    public function getBehindCount()
    {
        return $this->container['behind_count'];
    }

    /**
     * Sets behind_count
     *
     * @param int $behind_count Number of commits the local branch is behind the remote
     *
     * @return $this
     */
    public function setBehindCount($behind_count)
    {
        $this->container['behind_count'] = $behind_count;

        return $this;
    }

    /**
     * Gets commit_at
     *
     * @return int
     */
    public function getCommitAt()
    {
        return $this->container['commit_at'];
    }

    /**
     * Sets commit_at
     *
     * @param int $commit_at UNIX timestamp at which this branch was last committed.
     *
     * @return $this
     */
    public function setCommitAt($commit_at)
    {
        $this->container['commit_at'] = $commit_at;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string $ref The resolved ref of this branch. Updating `ref` results in `git reset --hard <new_ref>``.
     *
     * @return $this
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets remote_ref
     *
     * @return string
     */
    public function getRemoteRef()
    {
        return $this->container['remote_ref'];
    }

    /**
     * Sets remote_ref
     *
     * @param string $remote_ref The resolved ref of this branch remote.
     *
     * @return $this
     */
    public function setRemoteRef($remote_ref)
    {
        $this->container['remote_ref'] = $remote_ref;

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


