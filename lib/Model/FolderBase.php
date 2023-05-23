<?php
/**
 * FolderBase
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
 * FolderBase Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FolderBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FolderBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'parent_id' => 'string',
        'id' => 'string',
        'content_metadata_id' => 'string',
        'created_at' => '\DateTime',
        'creator_id' => 'string',
        'child_count' => 'int',
        'external_id' => 'string',
        'is_embed' => 'bool',
        'is_embed_shared_root' => 'bool',
        'is_embed_users_root' => 'bool',
        'is_personal' => 'bool',
        'is_personal_descendant' => 'bool',
        'is_shared_root' => 'bool',
        'is_users_root' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'parent_id' => null,
        'id' => null,
        'content_metadata_id' => null,
        'created_at' => 'date-time',
        'creator_id' => null,
        'child_count' => 'int64',
        'external_id' => null,
        'is_embed' => null,
        'is_embed_shared_root' => null,
        'is_embed_users_root' => null,
        'is_personal' => null,
        'is_personal_descendant' => null,
        'is_shared_root' => null,
        'is_users_root' => null,
        'can' => null
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
        'name' => 'name',
        'parent_id' => 'parent_id',
        'id' => 'id',
        'content_metadata_id' => 'content_metadata_id',
        'created_at' => 'created_at',
        'creator_id' => 'creator_id',
        'child_count' => 'child_count',
        'external_id' => 'external_id',
        'is_embed' => 'is_embed',
        'is_embed_shared_root' => 'is_embed_shared_root',
        'is_embed_users_root' => 'is_embed_users_root',
        'is_personal' => 'is_personal',
        'is_personal_descendant' => 'is_personal_descendant',
        'is_shared_root' => 'is_shared_root',
        'is_users_root' => 'is_users_root',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'parent_id' => 'setParentId',
        'id' => 'setId',
        'content_metadata_id' => 'setContentMetadataId',
        'created_at' => 'setCreatedAt',
        'creator_id' => 'setCreatorId',
        'child_count' => 'setChildCount',
        'external_id' => 'setExternalId',
        'is_embed' => 'setIsEmbed',
        'is_embed_shared_root' => 'setIsEmbedSharedRoot',
        'is_embed_users_root' => 'setIsEmbedUsersRoot',
        'is_personal' => 'setIsPersonal',
        'is_personal_descendant' => 'setIsPersonalDescendant',
        'is_shared_root' => 'setIsSharedRoot',
        'is_users_root' => 'setIsUsersRoot',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'parent_id' => 'getParentId',
        'id' => 'getId',
        'content_metadata_id' => 'getContentMetadataId',
        'created_at' => 'getCreatedAt',
        'creator_id' => 'getCreatorId',
        'child_count' => 'getChildCount',
        'external_id' => 'getExternalId',
        'is_embed' => 'getIsEmbed',
        'is_embed_shared_root' => 'getIsEmbedSharedRoot',
        'is_embed_users_root' => 'getIsEmbedUsersRoot',
        'is_personal' => 'getIsPersonal',
        'is_personal_descendant' => 'getIsPersonalDescendant',
        'is_shared_root' => 'getIsSharedRoot',
        'is_users_root' => 'getIsUsersRoot',
        'can' => 'getCan'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['content_metadata_id'] = isset($data['content_metadata_id']) ? $data['content_metadata_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['child_count'] = isset($data['child_count']) ? $data['child_count'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['is_embed'] = isset($data['is_embed']) ? $data['is_embed'] : null;
        $this->container['is_embed_shared_root'] = isset($data['is_embed_shared_root']) ? $data['is_embed_shared_root'] : null;
        $this->container['is_embed_users_root'] = isset($data['is_embed_users_root']) ? $data['is_embed_users_root'] : null;
        $this->container['is_personal'] = isset($data['is_personal']) ? $data['is_personal'] : null;
        $this->container['is_personal_descendant'] = isset($data['is_personal_descendant']) ? $data['is_personal_descendant'] : null;
        $this->container['is_shared_root'] = isset($data['is_shared_root']) ? $data['is_shared_root'] : null;
        $this->container['is_users_root'] = isset($data['is_users_root']) ? $data['is_users_root'] : null;
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
     * @param string $name Unique Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id Id of Parent. If the parent id is null, this is a root-level entry
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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
     * @param string $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets content_metadata_id
     *
     * @return string
     */
    public function getContentMetadataId()
    {
        return $this->container['content_metadata_id'];
    }

    /**
     * Sets content_metadata_id
     *
     * @param string $content_metadata_id Id of content metadata
     *
     * @return $this
     */
    public function setContentMetadataId($content_metadata_id)
    {
        $this->container['content_metadata_id'] = $content_metadata_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Time the folder was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param string $creator_id User Id of Creator
     *
     * @return $this
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets child_count
     *
     * @return int
     */
    public function getChildCount()
    {
        return $this->container['child_count'];
    }

    /**
     * Sets child_count
     *
     * @param int $child_count Children Count
     *
     * @return $this
     */
    public function setChildCount($child_count)
    {
        $this->container['child_count'] = $child_count;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id Embedder's Id if this folder was autogenerated as an embedding shared folder via 'external_group_id' in an SSO embed login
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets is_embed
     *
     * @return bool
     */
    public function getIsEmbed()
    {
        return $this->container['is_embed'];
    }

    /**
     * Sets is_embed
     *
     * @param bool $is_embed Folder is an embed folder
     *
     * @return $this
     */
    public function setIsEmbed($is_embed)
    {
        $this->container['is_embed'] = $is_embed;

        return $this;
    }

    /**
     * Gets is_embed_shared_root
     *
     * @return bool
     */
    public function getIsEmbedSharedRoot()
    {
        return $this->container['is_embed_shared_root'];
    }

    /**
     * Sets is_embed_shared_root
     *
     * @param bool $is_embed_shared_root Folder is the root embed shared folder
     *
     * @return $this
     */
    public function setIsEmbedSharedRoot($is_embed_shared_root)
    {
        $this->container['is_embed_shared_root'] = $is_embed_shared_root;

        return $this;
    }

    /**
     * Gets is_embed_users_root
     *
     * @return bool
     */
    public function getIsEmbedUsersRoot()
    {
        return $this->container['is_embed_users_root'];
    }

    /**
     * Sets is_embed_users_root
     *
     * @param bool $is_embed_users_root Folder is the root embed users folder
     *
     * @return $this
     */
    public function setIsEmbedUsersRoot($is_embed_users_root)
    {
        $this->container['is_embed_users_root'] = $is_embed_users_root;

        return $this;
    }

    /**
     * Gets is_personal
     *
     * @return bool
     */
    public function getIsPersonal()
    {
        return $this->container['is_personal'];
    }

    /**
     * Sets is_personal
     *
     * @param bool $is_personal Folder is a user's personal folder
     *
     * @return $this
     */
    public function setIsPersonal($is_personal)
    {
        $this->container['is_personal'] = $is_personal;

        return $this;
    }

    /**
     * Gets is_personal_descendant
     *
     * @return bool
     */
    public function getIsPersonalDescendant()
    {
        return $this->container['is_personal_descendant'];
    }

    /**
     * Sets is_personal_descendant
     *
     * @param bool $is_personal_descendant Folder is descendant of a user's personal folder
     *
     * @return $this
     */
    public function setIsPersonalDescendant($is_personal_descendant)
    {
        $this->container['is_personal_descendant'] = $is_personal_descendant;

        return $this;
    }

    /**
     * Gets is_shared_root
     *
     * @return bool
     */
    public function getIsSharedRoot()
    {
        return $this->container['is_shared_root'];
    }

    /**
     * Sets is_shared_root
     *
     * @param bool $is_shared_root Folder is the root shared folder
     *
     * @return $this
     */
    public function setIsSharedRoot($is_shared_root)
    {
        $this->container['is_shared_root'] = $is_shared_root;

        return $this;
    }

    /**
     * Gets is_users_root
     *
     * @return bool
     */
    public function getIsUsersRoot()
    {
        return $this->container['is_users_root'];
    }

    /**
     * Sets is_users_root
     *
     * @param bool $is_users_root Folder is the root user folder
     *
     * @return $this
     */
    public function setIsUsersRoot($is_users_root)
    {
        $this->container['is_users_root'] = $is_users_root;

        return $this;
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


