<?php
/**
 * LookWithDashboards
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 3.1 Reference
 *
 * ### Authorization  The Looker API uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page. Pass API3 credentials to the **_/login** endpoint to obtain a temporary access_token. Include that access_token in the Authorization header of Looker API requests. For details, see [Looker API Authorization](https://looker.com/docs/r/api/authorization)  ### Client SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. Client SDKs for a variety of programming languages can be generated from the Looker API's Swagger JSON metadata to streamline use of the Looker API in your applications. A client SDK for Ruby is available as an example. For more information, see [Looker API Client SDKs](https://looker.com/docs/r/api/client_sdks)  ### Try It Out!  The 'api-docs' page served by the Looker instance includes 'Try It Out!' buttons for each API method. After logging in with API3 credentials, you can use the \"Try It Out!\" buttons to call the API directly from the documentation page to interactively explore API features and responses.  Note! With great power comes great responsibility: The \"Try It Out!\" button makes API calls to your live Looker instance. Be especially careful with destructive API operations such as `delete_user` or similar. There is no \"undo\" for API operations.  ### Versioning  Future releases of Looker will expand this API release-by-release to securely expose more and more of the core power of Looker to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases. For more information, see [Looker API Versioning](https://looker.com/docs/r/api/versioning)  ### In This Release  This **API 3.1** is in active development. This is where support for new Looker features will appear as non-breaking additions - new functions, new optional parameters on existing functions, or new optional properties in existing types. Additive changes should not impact your existing application code that calls the Looker API. Your existing application code will not be aware of any new Looker API functionality until you choose to upgrade your app to use a newer Looker API client SDK release.  The following are a few examples of noteworthy items that have changed between API 3.0 and API 3.1. For more comprehensive coverage of API changes, please see the release notes for your Looker release.  ### Examples of new things added in API 3.1 (compared to API 3.0):  * [Dashboard construction](#!/3.1/Dashboard/) APIs * [Themes](#!/3.1/Theme/) and [custom color collections](#!/3.1/ColorCollection) APIs * Create and run [SQL Runner](#!/3.1/Query/run_sql_query) queries * Create and run [merged results](#!/3.1/Query/create_merge_query) queries * Create and modify [dashboard filters](#!/3.1/Dashboard/create_dashboard_filter) * Create and modify [password requirements](#!/3.1/Auth/password_config)  ### Deprecated in API 3.0  The following functions and properties have been deprecated in API 3.0.  They continue to exist and work in API 3.0 for the next several Looker releases but they have not been carried forward to API 3.1:  * Dashboard Prefetch functions * User access_filter functions * User API 1.0 credentials functions * Space.is_root and Space.is_user_root properties. Use Space.is_shared_root and Space.is_users_root instead.  ### Semantic changes in API 3.1:  * [all_looks()](#!/3.1/Look/all_looks) no longer includes soft-deleted looks, matching [all_dashboards()](#!/3.1/Dashboard/all_dashboards) behavior. You can find soft-deleted looks using [search_looks()](#!/3.1/Look/search_looks) with the `deleted` param set to True. * [all_spaces()](#!/3.1/Space/all_spaces) no longer includes duplicate items * [search_users()](#!/3.1/User/search_users) no longer accepts Y,y,1,0,N,n for Boolean params, only \"true\" and \"false\". * For greater client and network compatibility, [render_task_results](#!/3.1/RenderTask/render_task_results) now returns HTTP status **202 Accepted** instead of HTTP status **102 Processing** * [all_running_queries()](#!/3.1/Query/all_running_queries) and [kill_query](#!/3.1/Query/kill_query) functions have moved into the [Query](#!/3.1/Query/) function group.   If you have application code which relies on the old behavior of the APIs above, you may continue using the API 3.0 functions in this Looker release. We strongly suggest you update your code to use API 3.1 analogs as soon as possible.
 *
 * OpenAPI spec version: 3.1.0
 * Contact: support@looker.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * LookWithDashboards Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LookWithDashboards implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LookWithDashboards';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content_metadata_id' => 'int',
        'id' => 'int',
        'title' => 'string',
        'content_favorite_id' => 'int',
        'created_at' => '\DateTime',
        'deleted' => 'bool',
        'deleted_at' => '\DateTime',
        'deleter_id' => 'int',
        'description' => 'string',
        'embed_url' => 'string',
        'excel_file_url' => 'string',
        'favorite_count' => 'int',
        'google_spreadsheet_formula' => 'string',
        'image_embed_url' => 'string',
        'is_run_on_load' => 'bool',
        'last_accessed_at' => '\DateTime',
        'last_updater_id' => 'int',
        'last_viewed_at' => '\DateTime',
        'model' => '\Swagger\Client\Model\LookModel',
        'public' => 'bool',
        'public_slug' => 'string',
        'public_url' => 'string',
        'query_id' => 'int',
        'short_url' => 'string',
        'space' => '\Swagger\Client\Model\SpaceBase',
        'space_id' => 'string',
        'updated_at' => '\DateTime',
        'user' => '\Swagger\Client\Model\UserIdOnly',
        'user_id' => 'int',
        'view_count' => 'int',
        'dashboards' => '\Swagger\Client\Model\DashboardBase[]',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'content_metadata_id' => 'int64',
        'id' => 'int64',
        'title' => null,
        'content_favorite_id' => 'int64',
        'created_at' => 'date-time',
        'deleted' => null,
        'deleted_at' => 'date-time',
        'deleter_id' => 'int64',
        'description' => null,
        'embed_url' => null,
        'excel_file_url' => null,
        'favorite_count' => 'int64',
        'google_spreadsheet_formula' => null,
        'image_embed_url' => null,
        'is_run_on_load' => null,
        'last_accessed_at' => 'date-time',
        'last_updater_id' => 'int64',
        'last_viewed_at' => 'date-time',
        'model' => null,
        'public' => null,
        'public_slug' => null,
        'public_url' => null,
        'query_id' => 'int64',
        'short_url' => null,
        'space' => null,
        'space_id' => null,
        'updated_at' => 'date-time',
        'user' => null,
        'user_id' => 'int64',
        'view_count' => 'int64',
        'dashboards' => null,
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
        'content_metadata_id' => 'content_metadata_id',
        'id' => 'id',
        'title' => 'title',
        'content_favorite_id' => 'content_favorite_id',
        'created_at' => 'created_at',
        'deleted' => 'deleted',
        'deleted_at' => 'deleted_at',
        'deleter_id' => 'deleter_id',
        'description' => 'description',
        'embed_url' => 'embed_url',
        'excel_file_url' => 'excel_file_url',
        'favorite_count' => 'favorite_count',
        'google_spreadsheet_formula' => 'google_spreadsheet_formula',
        'image_embed_url' => 'image_embed_url',
        'is_run_on_load' => 'is_run_on_load',
        'last_accessed_at' => 'last_accessed_at',
        'last_updater_id' => 'last_updater_id',
        'last_viewed_at' => 'last_viewed_at',
        'model' => 'model',
        'public' => 'public',
        'public_slug' => 'public_slug',
        'public_url' => 'public_url',
        'query_id' => 'query_id',
        'short_url' => 'short_url',
        'space' => 'space',
        'space_id' => 'space_id',
        'updated_at' => 'updated_at',
        'user' => 'user',
        'user_id' => 'user_id',
        'view_count' => 'view_count',
        'dashboards' => 'dashboards',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_metadata_id' => 'setContentMetadataId',
        'id' => 'setId',
        'title' => 'setTitle',
        'content_favorite_id' => 'setContentFavoriteId',
        'created_at' => 'setCreatedAt',
        'deleted' => 'setDeleted',
        'deleted_at' => 'setDeletedAt',
        'deleter_id' => 'setDeleterId',
        'description' => 'setDescription',
        'embed_url' => 'setEmbedUrl',
        'excel_file_url' => 'setExcelFileUrl',
        'favorite_count' => 'setFavoriteCount',
        'google_spreadsheet_formula' => 'setGoogleSpreadsheetFormula',
        'image_embed_url' => 'setImageEmbedUrl',
        'is_run_on_load' => 'setIsRunOnLoad',
        'last_accessed_at' => 'setLastAccessedAt',
        'last_updater_id' => 'setLastUpdaterId',
        'last_viewed_at' => 'setLastViewedAt',
        'model' => 'setModel',
        'public' => 'setPublic',
        'public_slug' => 'setPublicSlug',
        'public_url' => 'setPublicUrl',
        'query_id' => 'setQueryId',
        'short_url' => 'setShortUrl',
        'space' => 'setSpace',
        'space_id' => 'setSpaceId',
        'updated_at' => 'setUpdatedAt',
        'user' => 'setUser',
        'user_id' => 'setUserId',
        'view_count' => 'setViewCount',
        'dashboards' => 'setDashboards',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_metadata_id' => 'getContentMetadataId',
        'id' => 'getId',
        'title' => 'getTitle',
        'content_favorite_id' => 'getContentFavoriteId',
        'created_at' => 'getCreatedAt',
        'deleted' => 'getDeleted',
        'deleted_at' => 'getDeletedAt',
        'deleter_id' => 'getDeleterId',
        'description' => 'getDescription',
        'embed_url' => 'getEmbedUrl',
        'excel_file_url' => 'getExcelFileUrl',
        'favorite_count' => 'getFavoriteCount',
        'google_spreadsheet_formula' => 'getGoogleSpreadsheetFormula',
        'image_embed_url' => 'getImageEmbedUrl',
        'is_run_on_load' => 'getIsRunOnLoad',
        'last_accessed_at' => 'getLastAccessedAt',
        'last_updater_id' => 'getLastUpdaterId',
        'last_viewed_at' => 'getLastViewedAt',
        'model' => 'getModel',
        'public' => 'getPublic',
        'public_slug' => 'getPublicSlug',
        'public_url' => 'getPublicUrl',
        'query_id' => 'getQueryId',
        'short_url' => 'getShortUrl',
        'space' => 'getSpace',
        'space_id' => 'getSpaceId',
        'updated_at' => 'getUpdatedAt',
        'user' => 'getUser',
        'user_id' => 'getUserId',
        'view_count' => 'getViewCount',
        'dashboards' => 'getDashboards',
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
        $this->container['content_metadata_id'] = isset($data['content_metadata_id']) ? $data['content_metadata_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['content_favorite_id'] = isset($data['content_favorite_id']) ? $data['content_favorite_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['deleter_id'] = isset($data['deleter_id']) ? $data['deleter_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['embed_url'] = isset($data['embed_url']) ? $data['embed_url'] : null;
        $this->container['excel_file_url'] = isset($data['excel_file_url']) ? $data['excel_file_url'] : null;
        $this->container['favorite_count'] = isset($data['favorite_count']) ? $data['favorite_count'] : null;
        $this->container['google_spreadsheet_formula'] = isset($data['google_spreadsheet_formula']) ? $data['google_spreadsheet_formula'] : null;
        $this->container['image_embed_url'] = isset($data['image_embed_url']) ? $data['image_embed_url'] : null;
        $this->container['is_run_on_load'] = isset($data['is_run_on_load']) ? $data['is_run_on_load'] : null;
        $this->container['last_accessed_at'] = isset($data['last_accessed_at']) ? $data['last_accessed_at'] : null;
        $this->container['last_updater_id'] = isset($data['last_updater_id']) ? $data['last_updater_id'] : null;
        $this->container['last_viewed_at'] = isset($data['last_viewed_at']) ? $data['last_viewed_at'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['public_slug'] = isset($data['public_slug']) ? $data['public_slug'] : null;
        $this->container['public_url'] = isset($data['public_url']) ? $data['public_url'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['short_url'] = isset($data['short_url']) ? $data['short_url'] : null;
        $this->container['space'] = isset($data['space']) ? $data['space'] : null;
        $this->container['space_id'] = isset($data['space_id']) ? $data['space_id'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
        $this->container['dashboards'] = isset($data['dashboards']) ? $data['dashboards'] : null;
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
     * Gets content_metadata_id
     *
     * @return int
     */
    public function getContentMetadataId()
    {
        return $this->container['content_metadata_id'];
    }

    /**
     * Sets content_metadata_id
     *
     * @param int $content_metadata_id Id of content metadata
     *
     * @return $this
     */
    public function setContentMetadataId($content_metadata_id)
    {
        $this->container['content_metadata_id'] = $content_metadata_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Look Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets content_favorite_id
     *
     * @return int
     */
    public function getContentFavoriteId()
    {
        return $this->container['content_favorite_id'];
    }

    /**
     * Sets content_favorite_id
     *
     * @param int $content_favorite_id Content Favorite Id
     *
     * @return $this
     */
    public function setContentFavoriteId($content_favorite_id)
    {
        $this->container['content_favorite_id'] = $content_favorite_id;

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
     * @param \DateTime $created_at Time that the Look was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Whether or not a look is 'soft' deleted.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at Time that the Look was deleted.
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets deleter_id
     *
     * @return int
     */
    public function getDeleterId()
    {
        return $this->container['deleter_id'];
    }

    /**
     * Sets deleter_id
     *
     * @param int $deleter_id Id of User that deleted the look.
     *
     * @return $this
     */
    public function setDeleterId($deleter_id)
    {
        $this->container['deleter_id'] = $deleter_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets embed_url
     *
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->container['embed_url'];
    }

    /**
     * Sets embed_url
     *
     * @param string $embed_url Embed Url
     *
     * @return $this
     */
    public function setEmbedUrl($embed_url)
    {
        $this->container['embed_url'] = $embed_url;

        return $this;
    }

    /**
     * Gets excel_file_url
     *
     * @return string
     */
    public function getExcelFileUrl()
    {
        return $this->container['excel_file_url'];
    }

    /**
     * Sets excel_file_url
     *
     * @param string $excel_file_url Excel File Url
     *
     * @return $this
     */
    public function setExcelFileUrl($excel_file_url)
    {
        $this->container['excel_file_url'] = $excel_file_url;

        return $this;
    }

    /**
     * Gets favorite_count
     *
     * @return int
     */
    public function getFavoriteCount()
    {
        return $this->container['favorite_count'];
    }

    /**
     * Sets favorite_count
     *
     * @param int $favorite_count Number of times favorited
     *
     * @return $this
     */
    public function setFavoriteCount($favorite_count)
    {
        $this->container['favorite_count'] = $favorite_count;

        return $this;
    }

    /**
     * Gets google_spreadsheet_formula
     *
     * @return string
     */
    public function getGoogleSpreadsheetFormula()
    {
        return $this->container['google_spreadsheet_formula'];
    }

    /**
     * Sets google_spreadsheet_formula
     *
     * @param string $google_spreadsheet_formula Google Spreadsheet Formula
     *
     * @return $this
     */
    public function setGoogleSpreadsheetFormula($google_spreadsheet_formula)
    {
        $this->container['google_spreadsheet_formula'] = $google_spreadsheet_formula;

        return $this;
    }

    /**
     * Gets image_embed_url
     *
     * @return string
     */
    public function getImageEmbedUrl()
    {
        return $this->container['image_embed_url'];
    }

    /**
     * Sets image_embed_url
     *
     * @param string $image_embed_url Image Embed Url
     *
     * @return $this
     */
    public function setImageEmbedUrl($image_embed_url)
    {
        $this->container['image_embed_url'] = $image_embed_url;

        return $this;
    }

    /**
     * Gets is_run_on_load
     *
     * @return bool
     */
    public function getIsRunOnLoad()
    {
        return $this->container['is_run_on_load'];
    }

    /**
     * Sets is_run_on_load
     *
     * @param bool $is_run_on_load auto-run query when Look viewed
     *
     * @return $this
     */
    public function setIsRunOnLoad($is_run_on_load)
    {
        $this->container['is_run_on_load'] = $is_run_on_load;

        return $this;
    }

    /**
     * Gets last_accessed_at
     *
     * @return \DateTime
     */
    public function getLastAccessedAt()
    {
        return $this->container['last_accessed_at'];
    }

    /**
     * Sets last_accessed_at
     *
     * @param \DateTime $last_accessed_at Time that the Look was last accessed by any user
     *
     * @return $this
     */
    public function setLastAccessedAt($last_accessed_at)
    {
        $this->container['last_accessed_at'] = $last_accessed_at;

        return $this;
    }

    /**
     * Gets last_updater_id
     *
     * @return int
     */
    public function getLastUpdaterId()
    {
        return $this->container['last_updater_id'];
    }

    /**
     * Sets last_updater_id
     *
     * @param int $last_updater_id Id of User that last updated the look.
     *
     * @return $this
     */
    public function setLastUpdaterId($last_updater_id)
    {
        $this->container['last_updater_id'] = $last_updater_id;

        return $this;
    }

    /**
     * Gets last_viewed_at
     *
     * @return \DateTime
     */
    public function getLastViewedAt()
    {
        return $this->container['last_viewed_at'];
    }

    /**
     * Sets last_viewed_at
     *
     * @param \DateTime $last_viewed_at Time last viewed in the Looker web UI
     *
     * @return $this
     */
    public function setLastViewedAt($last_viewed_at)
    {
        $this->container['last_viewed_at'] = $last_viewed_at;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \Swagger\Client\Model\LookModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Swagger\Client\Model\LookModel $model Model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public Is Public
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets public_slug
     *
     * @return string
     */
    public function getPublicSlug()
    {
        return $this->container['public_slug'];
    }

    /**
     * Sets public_slug
     *
     * @param string $public_slug Public Slug
     *
     * @return $this
     */
    public function setPublicSlug($public_slug)
    {
        $this->container['public_slug'] = $public_slug;

        return $this;
    }

    /**
     * Gets public_url
     *
     * @return string
     */
    public function getPublicUrl()
    {
        return $this->container['public_url'];
    }

    /**
     * Sets public_url
     *
     * @param string $public_url Public Url
     *
     * @return $this
     */
    public function setPublicUrl($public_url)
    {
        $this->container['public_url'] = $public_url;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return int
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param int $query_id Query Id
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets short_url
     *
     * @return string
     */
    public function getShortUrl()
    {
        return $this->container['short_url'];
    }

    /**
     * Sets short_url
     *
     * @param string $short_url Short Url
     *
     * @return $this
     */
    public function setShortUrl($short_url)
    {
        $this->container['short_url'] = $short_url;

        return $this;
    }

    /**
     * Gets space
     *
     * @return \Swagger\Client\Model\SpaceBase
     */
    public function getSpace()
    {
        return $this->container['space'];
    }

    /**
     * Sets space
     *
     * @param \Swagger\Client\Model\SpaceBase $space Space of this Look
     *
     * @return $this
     */
    public function setSpace($space)
    {
        $this->container['space'] = $space;

        return $this;
    }

    /**
     * Gets space_id
     *
     * @return string
     */
    public function getSpaceId()
    {
        return $this->container['space_id'];
    }

    /**
     * Sets space_id
     *
     * @param string $space_id Space Id
     *
     * @return $this
     */
    public function setSpaceId($space_id)
    {
        $this->container['space_id'] = $space_id;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Time that the Look was updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Swagger\Client\Model\UserIdOnly
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\UserIdOnly $user User
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id User Id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets view_count
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     *
     * @param int $view_count Number of times viewed in the Looker web UI
     *
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets dashboards
     *
     * @return \Swagger\Client\Model\DashboardBase[]
     */
    public function getDashboards()
    {
        return $this->container['dashboards'];
    }

    /**
     * Sets dashboards
     *
     * @param \Swagger\Client\Model\DashboardBase[] $dashboards Dashboards
     *
     * @return $this
     */
    public function setDashboards($dashboards)
    {
        $this->container['dashboards'] = $dashboards;

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


