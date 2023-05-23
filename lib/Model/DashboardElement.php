<?php
/**
 * DashboardElement
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
 * DashboardElement Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DashboardElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DashboardElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'body_text' => 'string',
        'body_text_as_html' => 'string',
        'dashboard_id' => 'string',
        'edit_uri' => 'string',
        'id' => 'string',
        'look' => '\Swagger\Client\Model\LookWithQuery',
        'look_id' => 'string',
        'lookml_link_id' => 'string',
        'merge_result_id' => 'string',
        'note_display' => 'string',
        'note_state' => 'string',
        'note_text' => 'string',
        'note_text_as_html' => 'string',
        'query' => '\Swagger\Client\Model\Query',
        'query_id' => 'string',
        'refresh_interval' => 'string',
        'refresh_interval_to_i' => 'int',
        'result_maker' => '\Swagger\Client\Model\ResultMakerWithIdVisConfigAndDynamicFields',
        'result_maker_id' => 'string',
        'subtitle_text' => 'string',
        'title' => 'string',
        'title_hidden' => 'bool',
        'title_text' => 'string',
        'type' => 'string',
        'alert_count' => 'int',
        'rich_content_json' => 'string',
        'title_text_as_html' => 'string',
        'subtitle_text_as_html' => 'string',
        'extension_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'body_text' => null,
        'body_text_as_html' => null,
        'dashboard_id' => null,
        'edit_uri' => 'uri-reference',
        'id' => null,
        'look' => null,
        'look_id' => null,
        'lookml_link_id' => null,
        'merge_result_id' => null,
        'note_display' => null,
        'note_state' => null,
        'note_text' => null,
        'note_text_as_html' => null,
        'query' => null,
        'query_id' => null,
        'refresh_interval' => null,
        'refresh_interval_to_i' => 'int64',
        'result_maker' => null,
        'result_maker_id' => null,
        'subtitle_text' => null,
        'title' => null,
        'title_hidden' => null,
        'title_text' => null,
        'type' => null,
        'alert_count' => 'int64',
        'rich_content_json' => null,
        'title_text_as_html' => null,
        'subtitle_text_as_html' => null,
        'extension_id' => null
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
        'body_text' => 'body_text',
        'body_text_as_html' => 'body_text_as_html',
        'dashboard_id' => 'dashboard_id',
        'edit_uri' => 'edit_uri',
        'id' => 'id',
        'look' => 'look',
        'look_id' => 'look_id',
        'lookml_link_id' => 'lookml_link_id',
        'merge_result_id' => 'merge_result_id',
        'note_display' => 'note_display',
        'note_state' => 'note_state',
        'note_text' => 'note_text',
        'note_text_as_html' => 'note_text_as_html',
        'query' => 'query',
        'query_id' => 'query_id',
        'refresh_interval' => 'refresh_interval',
        'refresh_interval_to_i' => 'refresh_interval_to_i',
        'result_maker' => 'result_maker',
        'result_maker_id' => 'result_maker_id',
        'subtitle_text' => 'subtitle_text',
        'title' => 'title',
        'title_hidden' => 'title_hidden',
        'title_text' => 'title_text',
        'type' => 'type',
        'alert_count' => 'alert_count',
        'rich_content_json' => 'rich_content_json',
        'title_text_as_html' => 'title_text_as_html',
        'subtitle_text_as_html' => 'subtitle_text_as_html',
        'extension_id' => 'extension_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'body_text' => 'setBodyText',
        'body_text_as_html' => 'setBodyTextAsHtml',
        'dashboard_id' => 'setDashboardId',
        'edit_uri' => 'setEditUri',
        'id' => 'setId',
        'look' => 'setLook',
        'look_id' => 'setLookId',
        'lookml_link_id' => 'setLookmlLinkId',
        'merge_result_id' => 'setMergeResultId',
        'note_display' => 'setNoteDisplay',
        'note_state' => 'setNoteState',
        'note_text' => 'setNoteText',
        'note_text_as_html' => 'setNoteTextAsHtml',
        'query' => 'setQuery',
        'query_id' => 'setQueryId',
        'refresh_interval' => 'setRefreshInterval',
        'refresh_interval_to_i' => 'setRefreshIntervalToI',
        'result_maker' => 'setResultMaker',
        'result_maker_id' => 'setResultMakerId',
        'subtitle_text' => 'setSubtitleText',
        'title' => 'setTitle',
        'title_hidden' => 'setTitleHidden',
        'title_text' => 'setTitleText',
        'type' => 'setType',
        'alert_count' => 'setAlertCount',
        'rich_content_json' => 'setRichContentJson',
        'title_text_as_html' => 'setTitleTextAsHtml',
        'subtitle_text_as_html' => 'setSubtitleTextAsHtml',
        'extension_id' => 'setExtensionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'body_text' => 'getBodyText',
        'body_text_as_html' => 'getBodyTextAsHtml',
        'dashboard_id' => 'getDashboardId',
        'edit_uri' => 'getEditUri',
        'id' => 'getId',
        'look' => 'getLook',
        'look_id' => 'getLookId',
        'lookml_link_id' => 'getLookmlLinkId',
        'merge_result_id' => 'getMergeResultId',
        'note_display' => 'getNoteDisplay',
        'note_state' => 'getNoteState',
        'note_text' => 'getNoteText',
        'note_text_as_html' => 'getNoteTextAsHtml',
        'query' => 'getQuery',
        'query_id' => 'getQueryId',
        'refresh_interval' => 'getRefreshInterval',
        'refresh_interval_to_i' => 'getRefreshIntervalToI',
        'result_maker' => 'getResultMaker',
        'result_maker_id' => 'getResultMakerId',
        'subtitle_text' => 'getSubtitleText',
        'title' => 'getTitle',
        'title_hidden' => 'getTitleHidden',
        'title_text' => 'getTitleText',
        'type' => 'getType',
        'alert_count' => 'getAlertCount',
        'rich_content_json' => 'getRichContentJson',
        'title_text_as_html' => 'getTitleTextAsHtml',
        'subtitle_text_as_html' => 'getSubtitleTextAsHtml',
        'extension_id' => 'getExtensionId'
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
        $this->container['body_text'] = isset($data['body_text']) ? $data['body_text'] : null;
        $this->container['body_text_as_html'] = isset($data['body_text_as_html']) ? $data['body_text_as_html'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['edit_uri'] = isset($data['edit_uri']) ? $data['edit_uri'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['look'] = isset($data['look']) ? $data['look'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['lookml_link_id'] = isset($data['lookml_link_id']) ? $data['lookml_link_id'] : null;
        $this->container['merge_result_id'] = isset($data['merge_result_id']) ? $data['merge_result_id'] : null;
        $this->container['note_display'] = isset($data['note_display']) ? $data['note_display'] : null;
        $this->container['note_state'] = isset($data['note_state']) ? $data['note_state'] : null;
        $this->container['note_text'] = isset($data['note_text']) ? $data['note_text'] : null;
        $this->container['note_text_as_html'] = isset($data['note_text_as_html']) ? $data['note_text_as_html'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['refresh_interval'] = isset($data['refresh_interval']) ? $data['refresh_interval'] : null;
        $this->container['refresh_interval_to_i'] = isset($data['refresh_interval_to_i']) ? $data['refresh_interval_to_i'] : null;
        $this->container['result_maker'] = isset($data['result_maker']) ? $data['result_maker'] : null;
        $this->container['result_maker_id'] = isset($data['result_maker_id']) ? $data['result_maker_id'] : null;
        $this->container['subtitle_text'] = isset($data['subtitle_text']) ? $data['subtitle_text'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['title_hidden'] = isset($data['title_hidden']) ? $data['title_hidden'] : null;
        $this->container['title_text'] = isset($data['title_text']) ? $data['title_text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['alert_count'] = isset($data['alert_count']) ? $data['alert_count'] : null;
        $this->container['rich_content_json'] = isset($data['rich_content_json']) ? $data['rich_content_json'] : null;
        $this->container['title_text_as_html'] = isset($data['title_text_as_html']) ? $data['title_text_as_html'] : null;
        $this->container['subtitle_text_as_html'] = isset($data['subtitle_text_as_html']) ? $data['subtitle_text_as_html'] : null;
        $this->container['extension_id'] = isset($data['extension_id']) ? $data['extension_id'] : null;
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
     * Gets body_text
     *
     * @return string
     */
    public function getBodyText()
    {
        return $this->container['body_text'];
    }

    /**
     * Sets body_text
     *
     * @param string $body_text Text tile body text
     *
     * @return $this
     */
    public function setBodyText($body_text)
    {
        $this->container['body_text'] = $body_text;

        return $this;
    }

    /**
     * Gets body_text_as_html
     *
     * @return string
     */
    public function getBodyTextAsHtml()
    {
        return $this->container['body_text_as_html'];
    }

    /**
     * Sets body_text_as_html
     *
     * @param string $body_text_as_html Text tile body text as Html
     *
     * @return $this
     */
    public function setBodyTextAsHtml($body_text_as_html)
    {
        $this->container['body_text_as_html'] = $body_text_as_html;

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
     * @param string $dashboard_id Id of Dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets edit_uri
     *
     * @return string
     */
    public function getEditUri()
    {
        return $this->container['edit_uri'];
    }

    /**
     * Sets edit_uri
     *
     * @param string $edit_uri Relative path of URI of LookML file to edit the dashboard element (LookML dashboard only).
     *
     * @return $this
     */
    public function setEditUri($edit_uri)
    {
        $this->container['edit_uri'] = $edit_uri;

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
     * Gets look
     *
     * @return \Swagger\Client\Model\LookWithQuery
     */
    public function getLook()
    {
        return $this->container['look'];
    }

    /**
     * Sets look
     *
     * @param \Swagger\Client\Model\LookWithQuery $look Look
     *
     * @return $this
     */
    public function setLook($look)
    {
        $this->container['look'] = $look;

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
     * @param string $look_id Id Of Look
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets lookml_link_id
     *
     * @return string
     */
    public function getLookmlLinkId()
    {
        return $this->container['lookml_link_id'];
    }

    /**
     * Sets lookml_link_id
     *
     * @param string $lookml_link_id LookML link ID
     *
     * @return $this
     */
    public function setLookmlLinkId($lookml_link_id)
    {
        $this->container['lookml_link_id'] = $lookml_link_id;

        return $this;
    }

    /**
     * Gets merge_result_id
     *
     * @return string
     */
    public function getMergeResultId()
    {
        return $this->container['merge_result_id'];
    }

    /**
     * Sets merge_result_id
     *
     * @param string $merge_result_id ID of merge result
     *
     * @return $this
     */
    public function setMergeResultId($merge_result_id)
    {
        $this->container['merge_result_id'] = $merge_result_id;

        return $this;
    }

    /**
     * Gets note_display
     *
     * @return string
     */
    public function getNoteDisplay()
    {
        return $this->container['note_display'];
    }

    /**
     * Sets note_display
     *
     * @param string $note_display Note Display
     *
     * @return $this
     */
    public function setNoteDisplay($note_display)
    {
        $this->container['note_display'] = $note_display;

        return $this;
    }

    /**
     * Gets note_state
     *
     * @return string
     */
    public function getNoteState()
    {
        return $this->container['note_state'];
    }

    /**
     * Sets note_state
     *
     * @param string $note_state Note State
     *
     * @return $this
     */
    public function setNoteState($note_state)
    {
        $this->container['note_state'] = $note_state;

        return $this;
    }

    /**
     * Gets note_text
     *
     * @return string
     */
    public function getNoteText()
    {
        return $this->container['note_text'];
    }

    /**
     * Sets note_text
     *
     * @param string $note_text Note Text
     *
     * @return $this
     */
    public function setNoteText($note_text)
    {
        $this->container['note_text'] = $note_text;

        return $this;
    }

    /**
     * Gets note_text_as_html
     *
     * @return string
     */
    public function getNoteTextAsHtml()
    {
        return $this->container['note_text_as_html'];
    }

    /**
     * Sets note_text_as_html
     *
     * @param string $note_text_as_html Note Text as Html
     *
     * @return $this
     */
    public function setNoteTextAsHtml($note_text_as_html)
    {
        $this->container['note_text_as_html'] = $note_text_as_html;

        return $this;
    }

    /**
     * Gets query
     *
     * @return \Swagger\Client\Model\Query
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \Swagger\Client\Model\Query $query Query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return string
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param string $query_id Id Of Query
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets refresh_interval
     *
     * @return string
     */
    public function getRefreshInterval()
    {
        return $this->container['refresh_interval'];
    }

    /**
     * Sets refresh_interval
     *
     * @param string $refresh_interval Refresh Interval
     *
     * @return $this
     */
    public function setRefreshInterval($refresh_interval)
    {
        $this->container['refresh_interval'] = $refresh_interval;

        return $this;
    }

    /**
     * Gets refresh_interval_to_i
     *
     * @return int
     */
    public function getRefreshIntervalToI()
    {
        return $this->container['refresh_interval_to_i'];
    }

    /**
     * Sets refresh_interval_to_i
     *
     * @param int $refresh_interval_to_i Refresh Interval as integer
     *
     * @return $this
     */
    public function setRefreshIntervalToI($refresh_interval_to_i)
    {
        $this->container['refresh_interval_to_i'] = $refresh_interval_to_i;

        return $this;
    }

    /**
     * Gets result_maker
     *
     * @return \Swagger\Client\Model\ResultMakerWithIdVisConfigAndDynamicFields
     */
    public function getResultMaker()
    {
        return $this->container['result_maker'];
    }

    /**
     * Sets result_maker
     *
     * @param \Swagger\Client\Model\ResultMakerWithIdVisConfigAndDynamicFields $result_maker Data about the result maker.
     *
     * @return $this
     */
    public function setResultMaker($result_maker)
    {
        $this->container['result_maker'] = $result_maker;

        return $this;
    }

    /**
     * Gets result_maker_id
     *
     * @return string
     */
    public function getResultMakerId()
    {
        return $this->container['result_maker_id'];
    }

    /**
     * Sets result_maker_id
     *
     * @param string $result_maker_id ID of the ResultMakerLookup entry.
     *
     * @return $this
     */
    public function setResultMakerId($result_maker_id)
    {
        $this->container['result_maker_id'] = $result_maker_id;

        return $this;
    }

    /**
     * Gets subtitle_text
     *
     * @return string
     */
    public function getSubtitleText()
    {
        return $this->container['subtitle_text'];
    }

    /**
     * Sets subtitle_text
     *
     * @param string $subtitle_text Text tile subtitle text
     *
     * @return $this
     */
    public function setSubtitleText($subtitle_text)
    {
        $this->container['subtitle_text'] = $subtitle_text;

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
     * @param string $title Title of dashboard element
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_hidden
     *
     * @return bool
     */
    public function getTitleHidden()
    {
        return $this->container['title_hidden'];
    }

    /**
     * Sets title_hidden
     *
     * @param bool $title_hidden Whether title is hidden
     *
     * @return $this
     */
    public function setTitleHidden($title_hidden)
    {
        $this->container['title_hidden'] = $title_hidden;

        return $this;
    }

    /**
     * Gets title_text
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->container['title_text'];
    }

    /**
     * Sets title_text
     *
     * @param string $title_text Text tile title
     *
     * @return $this
     */
    public function setTitleText($title_text)
    {
        $this->container['title_text'] = $title_text;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets alert_count
     *
     * @return int
     */
    public function getAlertCount()
    {
        return $this->container['alert_count'];
    }

    /**
     * Sets alert_count
     *
     * @param int $alert_count Count of Alerts associated to a dashboard element
     *
     * @return $this
     */
    public function setAlertCount($alert_count)
    {
        $this->container['alert_count'] = $alert_count;

        return $this;
    }

    /**
     * Gets rich_content_json
     *
     * @return string
     */
    public function getRichContentJson()
    {
        return $this->container['rich_content_json'];
    }

    /**
     * Sets rich_content_json
     *
     * @param string $rich_content_json JSON with all the properties required for rich editor and buttons elements
     *
     * @return $this
     */
    public function setRichContentJson($rich_content_json)
    {
        $this->container['rich_content_json'] = $rich_content_json;

        return $this;
    }

    /**
     * Gets title_text_as_html
     *
     * @return string
     */
    public function getTitleTextAsHtml()
    {
        return $this->container['title_text_as_html'];
    }

    /**
     * Sets title_text_as_html
     *
     * @param string $title_text_as_html Text tile title text as Html
     *
     * @return $this
     */
    public function setTitleTextAsHtml($title_text_as_html)
    {
        $this->container['title_text_as_html'] = $title_text_as_html;

        return $this;
    }

    /**
     * Gets subtitle_text_as_html
     *
     * @return string
     */
    public function getSubtitleTextAsHtml()
    {
        return $this->container['subtitle_text_as_html'];
    }

    /**
     * Sets subtitle_text_as_html
     *
     * @param string $subtitle_text_as_html Text tile subtitle text as Html
     *
     * @return $this
     */
    public function setSubtitleTextAsHtml($subtitle_text_as_html)
    {
        $this->container['subtitle_text_as_html'] = $subtitle_text_as_html;

        return $this;
    }

    /**
     * Gets extension_id
     *
     * @return string
     */
    public function getExtensionId()
    {
        return $this->container['extension_id'];
    }

    /**
     * Sets extension_id
     *
     * @param string $extension_id Extension ID
     *
     * @return $this
     */
    public function setExtensionId($extension_id)
    {
        $this->container['extension_id'] = $extension_id;

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


