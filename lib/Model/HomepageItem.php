<?php
/**
 * HomepageItem
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
 * HomepageItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HomepageItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HomepageItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'content_created_by' => 'string',
        'content_favorite_id' => 'string',
        'content_metadata_id' => 'string',
        'content_updated_at' => 'string',
        'custom_description' => 'string',
        'custom_image_data_base64' => 'string',
        'custom_image_url' => 'string',
        'custom_title' => 'string',
        'custom_url' => 'string',
        'dashboard_id' => 'string',
        'description' => 'string',
        'favorite_count' => 'int',
        'homepage_section_id' => 'string',
        'id' => 'string',
        'image_url' => 'string',
        'location' => 'string',
        'look_id' => 'string',
        'lookml_dashboard_id' => 'string',
        'order' => 'int',
        'section_fetch_time' => 'float',
        'title' => 'string',
        'url' => 'string',
        'use_custom_description' => 'bool',
        'use_custom_image' => 'bool',
        'use_custom_title' => 'bool',
        'use_custom_url' => 'bool',
        'view_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'content_created_by' => null,
        'content_favorite_id' => null,
        'content_metadata_id' => null,
        'content_updated_at' => null,
        'custom_description' => null,
        'custom_image_data_base64' => null,
        'custom_image_url' => null,
        'custom_title' => null,
        'custom_url' => null,
        'dashboard_id' => null,
        'description' => null,
        'favorite_count' => 'int64',
        'homepage_section_id' => null,
        'id' => null,
        'image_url' => null,
        'location' => null,
        'look_id' => null,
        'lookml_dashboard_id' => null,
        'order' => 'int64',
        'section_fetch_time' => 'float',
        'title' => null,
        'url' => null,
        'use_custom_description' => null,
        'use_custom_image' => null,
        'use_custom_title' => null,
        'use_custom_url' => null,
        'view_count' => 'int64'
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
        'content_created_by' => 'content_created_by',
        'content_favorite_id' => 'content_favorite_id',
        'content_metadata_id' => 'content_metadata_id',
        'content_updated_at' => 'content_updated_at',
        'custom_description' => 'custom_description',
        'custom_image_data_base64' => 'custom_image_data_base64',
        'custom_image_url' => 'custom_image_url',
        'custom_title' => 'custom_title',
        'custom_url' => 'custom_url',
        'dashboard_id' => 'dashboard_id',
        'description' => 'description',
        'favorite_count' => 'favorite_count',
        'homepage_section_id' => 'homepage_section_id',
        'id' => 'id',
        'image_url' => 'image_url',
        'location' => 'location',
        'look_id' => 'look_id',
        'lookml_dashboard_id' => 'lookml_dashboard_id',
        'order' => 'order',
        'section_fetch_time' => 'section_fetch_time',
        'title' => 'title',
        'url' => 'url',
        'use_custom_description' => 'use_custom_description',
        'use_custom_image' => 'use_custom_image',
        'use_custom_title' => 'use_custom_title',
        'use_custom_url' => 'use_custom_url',
        'view_count' => 'view_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'content_created_by' => 'setContentCreatedBy',
        'content_favorite_id' => 'setContentFavoriteId',
        'content_metadata_id' => 'setContentMetadataId',
        'content_updated_at' => 'setContentUpdatedAt',
        'custom_description' => 'setCustomDescription',
        'custom_image_data_base64' => 'setCustomImageDataBase64',
        'custom_image_url' => 'setCustomImageUrl',
        'custom_title' => 'setCustomTitle',
        'custom_url' => 'setCustomUrl',
        'dashboard_id' => 'setDashboardId',
        'description' => 'setDescription',
        'favorite_count' => 'setFavoriteCount',
        'homepage_section_id' => 'setHomepageSectionId',
        'id' => 'setId',
        'image_url' => 'setImageUrl',
        'location' => 'setLocation',
        'look_id' => 'setLookId',
        'lookml_dashboard_id' => 'setLookmlDashboardId',
        'order' => 'setOrder',
        'section_fetch_time' => 'setSectionFetchTime',
        'title' => 'setTitle',
        'url' => 'setUrl',
        'use_custom_description' => 'setUseCustomDescription',
        'use_custom_image' => 'setUseCustomImage',
        'use_custom_title' => 'setUseCustomTitle',
        'use_custom_url' => 'setUseCustomUrl',
        'view_count' => 'setViewCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'content_created_by' => 'getContentCreatedBy',
        'content_favorite_id' => 'getContentFavoriteId',
        'content_metadata_id' => 'getContentMetadataId',
        'content_updated_at' => 'getContentUpdatedAt',
        'custom_description' => 'getCustomDescription',
        'custom_image_data_base64' => 'getCustomImageDataBase64',
        'custom_image_url' => 'getCustomImageUrl',
        'custom_title' => 'getCustomTitle',
        'custom_url' => 'getCustomUrl',
        'dashboard_id' => 'getDashboardId',
        'description' => 'getDescription',
        'favorite_count' => 'getFavoriteCount',
        'homepage_section_id' => 'getHomepageSectionId',
        'id' => 'getId',
        'image_url' => 'getImageUrl',
        'location' => 'getLocation',
        'look_id' => 'getLookId',
        'lookml_dashboard_id' => 'getLookmlDashboardId',
        'order' => 'getOrder',
        'section_fetch_time' => 'getSectionFetchTime',
        'title' => 'getTitle',
        'url' => 'getUrl',
        'use_custom_description' => 'getUseCustomDescription',
        'use_custom_image' => 'getUseCustomImage',
        'use_custom_title' => 'getUseCustomTitle',
        'use_custom_url' => 'getUseCustomUrl',
        'view_count' => 'getViewCount'
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
        $this->container['content_created_by'] = isset($data['content_created_by']) ? $data['content_created_by'] : null;
        $this->container['content_favorite_id'] = isset($data['content_favorite_id']) ? $data['content_favorite_id'] : null;
        $this->container['content_metadata_id'] = isset($data['content_metadata_id']) ? $data['content_metadata_id'] : null;
        $this->container['content_updated_at'] = isset($data['content_updated_at']) ? $data['content_updated_at'] : null;
        $this->container['custom_description'] = isset($data['custom_description']) ? $data['custom_description'] : null;
        $this->container['custom_image_data_base64'] = isset($data['custom_image_data_base64']) ? $data['custom_image_data_base64'] : null;
        $this->container['custom_image_url'] = isset($data['custom_image_url']) ? $data['custom_image_url'] : null;
        $this->container['custom_title'] = isset($data['custom_title']) ? $data['custom_title'] : null;
        $this->container['custom_url'] = isset($data['custom_url']) ? $data['custom_url'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['favorite_count'] = isset($data['favorite_count']) ? $data['favorite_count'] : null;
        $this->container['homepage_section_id'] = isset($data['homepage_section_id']) ? $data['homepage_section_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['lookml_dashboard_id'] = isset($data['lookml_dashboard_id']) ? $data['lookml_dashboard_id'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['section_fetch_time'] = isset($data['section_fetch_time']) ? $data['section_fetch_time'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['use_custom_description'] = isset($data['use_custom_description']) ? $data['use_custom_description'] : null;
        $this->container['use_custom_image'] = isset($data['use_custom_image']) ? $data['use_custom_image'] : null;
        $this->container['use_custom_title'] = isset($data['use_custom_title']) ? $data['use_custom_title'] : null;
        $this->container['use_custom_url'] = isset($data['use_custom_url']) ? $data['use_custom_url'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
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
     * Gets content_created_by
     *
     * @return string
     */
    public function getContentCreatedBy()
    {
        return $this->container['content_created_by'];
    }

    /**
     * Sets content_created_by
     *
     * @param string $content_created_by Name of user who created the content this item is based on
     *
     * @return $this
     */
    public function setContentCreatedBy($content_created_by)
    {
        $this->container['content_created_by'] = $content_created_by;

        return $this;
    }

    /**
     * Gets content_favorite_id
     *
     * @return string
     */
    public function getContentFavoriteId()
    {
        return $this->container['content_favorite_id'];
    }

    /**
     * Sets content_favorite_id
     *
     * @param string $content_favorite_id Content favorite id associated with the item this content is based on
     *
     * @return $this
     */
    public function setContentFavoriteId($content_favorite_id)
    {
        $this->container['content_favorite_id'] = $content_favorite_id;

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
     * @param string $content_metadata_id Content metadata id associated with the item this content is based on
     *
     * @return $this
     */
    public function setContentMetadataId($content_metadata_id)
    {
        $this->container['content_metadata_id'] = $content_metadata_id;

        return $this;
    }

    /**
     * Gets content_updated_at
     *
     * @return string
     */
    public function getContentUpdatedAt()
    {
        return $this->container['content_updated_at'];
    }

    /**
     * Sets content_updated_at
     *
     * @param string $content_updated_at Last time the content that this item is based on was updated
     *
     * @return $this
     */
    public function setContentUpdatedAt($content_updated_at)
    {
        $this->container['content_updated_at'] = $content_updated_at;

        return $this;
    }

    /**
     * Gets custom_description
     *
     * @return string
     */
    public function getCustomDescription()
    {
        return $this->container['custom_description'];
    }

    /**
     * Sets custom_description
     *
     * @param string $custom_description Custom description entered by the user, if present
     *
     * @return $this
     */
    public function setCustomDescription($custom_description)
    {
        $this->container['custom_description'] = $custom_description;

        return $this;
    }

    /**
     * Gets custom_image_data_base64
     *
     * @return string
     */
    public function getCustomImageDataBase64()
    {
        return $this->container['custom_image_data_base64'];
    }

    /**
     * Sets custom_image_data_base64
     *
     * @param string $custom_image_data_base64 (Write-Only) base64 encoded image data
     *
     * @return $this
     */
    public function setCustomImageDataBase64($custom_image_data_base64)
    {
        $this->container['custom_image_data_base64'] = $custom_image_data_base64;

        return $this;
    }

    /**
     * Gets custom_image_url
     *
     * @return string
     */
    public function getCustomImageUrl()
    {
        return $this->container['custom_image_url'];
    }

    /**
     * Sets custom_image_url
     *
     * @param string $custom_image_url Custom image_url entered by the user, if present
     *
     * @return $this
     */
    public function setCustomImageUrl($custom_image_url)
    {
        $this->container['custom_image_url'] = $custom_image_url;

        return $this;
    }

    /**
     * Gets custom_title
     *
     * @return string
     */
    public function getCustomTitle()
    {
        return $this->container['custom_title'];
    }

    /**
     * Sets custom_title
     *
     * @param string $custom_title Custom title entered by the user, if present
     *
     * @return $this
     */
    public function setCustomTitle($custom_title)
    {
        $this->container['custom_title'] = $custom_title;

        return $this;
    }

    /**
     * Gets custom_url
     *
     * @return string
     */
    public function getCustomUrl()
    {
        return $this->container['custom_url'];
    }

    /**
     * Sets custom_url
     *
     * @param string $custom_url Custom url entered by the user, if present
     *
     * @return $this
     */
    public function setCustomUrl($custom_url)
    {
        $this->container['custom_url'] = $custom_url;

        return $this;
    }

    /**
     * Gets dashboard_id
     *
     * @return string
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param string $dashboard_id Dashboard to base this item on
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

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
     * @param string $description The actual description for display
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param int $favorite_count Number of times content has been favorited, if present
     *
     * @return $this
     */
    public function setFavoriteCount($favorite_count)
    {
        $this->container['favorite_count'] = $favorite_count;

        return $this;
    }

    /**
     * Gets homepage_section_id
     *
     * @return string
     */
    public function getHomepageSectionId()
    {
        return $this->container['homepage_section_id'];
    }

    /**
     * Sets homepage_section_id
     *
     * @param string $homepage_section_id Associated Homepage Section
     *
     * @return $this
     */
    public function setHomepageSectionId($homepage_section_id)
    {
        $this->container['homepage_section_id'] = $homepage_section_id;

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
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url The actual image_url for display
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location The container folder name of the content
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets look_id
     *
     * @return string
     */
    public function getLookId()
    {
        return $this->container['look_id'];
    }

    /**
     * Sets look_id
     *
     * @param string $look_id Look to base this item on
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets lookml_dashboard_id
     *
     * @return string
     */
    public function getLookmlDashboardId()
    {
        return $this->container['lookml_dashboard_id'];
    }

    /**
     * Sets lookml_dashboard_id
     *
     * @param string $lookml_dashboard_id LookML Dashboard to base this item on
     *
     * @return $this
     */
    public function setLookmlDashboardId($lookml_dashboard_id)
    {
        $this->container['lookml_dashboard_id'] = $lookml_dashboard_id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order An arbitrary integer representing the sort order within the section
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets section_fetch_time
     *
     * @return float
     */
    public function getSectionFetchTime()
    {
        return $this->container['section_fetch_time'];
    }

    /**
     * Sets section_fetch_time
     *
     * @param float $section_fetch_time Number of seconds it took to fetch the section this item is in
     *
     * @return $this
     */
    public function setSectionFetchTime($section_fetch_time)
    {
        $this->container['section_fetch_time'] = $section_fetch_time;

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
     * @param string $title The actual title for display
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The actual url for display
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets use_custom_description
     *
     * @return bool
     */
    public function getUseCustomDescription()
    {
        return $this->container['use_custom_description'];
    }

    /**
     * Sets use_custom_description
     *
     * @param bool $use_custom_description Whether the custom description should be used instead of the content description, if the item is associated with content
     *
     * @return $this
     */
    public function setUseCustomDescription($use_custom_description)
    {
        $this->container['use_custom_description'] = $use_custom_description;

        return $this;
    }

    /**
     * Gets use_custom_image
     *
     * @return bool
     */
    public function getUseCustomImage()
    {
        return $this->container['use_custom_image'];
    }

    /**
     * Sets use_custom_image
     *
     * @param bool $use_custom_image Whether the custom image should be used instead of the content image, if the item is associated with content
     *
     * @return $this
     */
    public function setUseCustomImage($use_custom_image)
    {
        $this->container['use_custom_image'] = $use_custom_image;

        return $this;
    }

    /**
     * Gets use_custom_title
     *
     * @return bool
     */
    public function getUseCustomTitle()
    {
        return $this->container['use_custom_title'];
    }

    /**
     * Sets use_custom_title
     *
     * @param bool $use_custom_title Whether the custom title should be used instead of the content title, if the item is associated with content
     *
     * @return $this
     */
    public function setUseCustomTitle($use_custom_title)
    {
        $this->container['use_custom_title'] = $use_custom_title;

        return $this;
    }

    /**
     * Gets use_custom_url
     *
     * @return bool
     */
    public function getUseCustomUrl()
    {
        return $this->container['use_custom_url'];
    }

    /**
     * Sets use_custom_url
     *
     * @param bool $use_custom_url Whether the custom url should be used instead of the content url, if the item is associated with content
     *
     * @return $this
     */
    public function setUseCustomUrl($use_custom_url)
    {
        $this->container['use_custom_url'] = $use_custom_url;

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
     * @param int $view_count Number of times content has been viewed, if present
     *
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

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


