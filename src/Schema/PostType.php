<?php

namespace Radiergummi\Foundation\Framework\Schema;

use Radiergummi\Foundation\Framework\Schema\Exceptions\PostTypeCapabilityUnknownException;
use Radiergummi\Foundation\Framework\Schema\Exceptions\PostTypeFeatureUnknownException;
use function array_map;
use function array_merge;
use function array_push;
use function in_array;
use function property_exists;
use function sprintf;
use function ucfirst;

/**
 * PostType class
 *
 * @package Radiergummi\Foundation\Framework\Schema
 * @link    https://developer.wordpress.org/reference/functions/register_post_type
 */
class PostType extends SchemaChange {

    /**
     * holds the default post type capabilities
     */
    protected const CAPABILITIES = [
        'edit_post',
        'edit_posts',
        'edit_private_posts',
        'edit_published_posts',
        'edit_others_posts',
        'publish_posts',
        'read_post',
        'read_private_posts',
        'delete_post',
        'delete_posts',
        'delete_private_posts',
        'delete_published_posts',
        'delete_published_posts'

    ];

    /**
     * holds the default post type features
     */
    protected const FEATURES = [
        'title',
        'editor',
        'comments',
        'revisions',
        'trackbacks',
        'author',
        'excerpt',
        'page-attributes',
        'thumbnail',
        'custom-fields',
        'post-formats'
    ];

    /**
     * holds the default post type labels
     *
     * @see https://developer.wordpress.org/reference/functions/get_post_type_labels/#description
     */
    protected const
        /** @noinspection SqlNoDataSourceInspection */
        LABELS = [
        'name'                  => '%ss',
        'singular_name'         => '%s',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New %s',
        'edit_item'             => 'Edit %s',
        'new_item'              => 'New %s',
        'view_item'             => 'View %s',
        'view_items'            => 'View %ss',
        'search_items'          => 'Search %ss',
        'not_found'             => 'No %ss found',
        'not_found_in_trash'    => 'No %ss found in Trash',
        'parent_item_colon'     => 'Parent %s:',
        'all_items'             => 'All %ss',
        'archives'              => '%s Archives',
        'attributes'            => '%s Attributes',
        'insert_into_item'      => 'Insert into %s',
        'uploaded_to_this_item' => 'Uploaded to this %s',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'menu_name'             => '%s',
        'filter_items_list'     => 'Filter %s list',
        'items_list_navigation' => '%s list navigation',
        'items_list'            => '%s list'
    ];

    /**
     * Post type key. Must not exceed 20 characters and may only contain lowercase alphanumeric characters,
     * dashes, and underscores.
     *
     * @var string
     */
    protected $name = '';

    /**
     * A short descriptive summary of what the post type is.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Name of the post type shown in the menu. Usually plural. Default is value of $labels['name'].
     *
     * @var array
     */
    protected $labels = [];

    /**
     * Core feature(s) the post type supports. Serves as an alias for calling addSupport() directly. Core features
     * include 'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes',
     * 'thumbnail', 'custom-fields', and 'post-formats'. Additionally, the 'revisions' feature dictates whether the
     * post type will store revisions, and the 'comments' feature dictates whether the comments count will show on
     * the edit screen. Defaults is an array containing 'title' and 'editor'.
     *
     * @var array
     */
    protected $supportedFeatures = [ 'title', 'editor' ];

    /**
     * An array of taxonomy identifiers that will be registered for the post type. Taxonomies can be registered
     * later.
     *
     * @var array
     */
    protected $taxonomies = [];

    /**
     * Whether the post type is hierarchical (e.g. page). Default false.
     *
     * @var bool
     */
    protected $isHierarchical = false;

    /**
     * Whether a post type is intended for use publicly either via the admin interface or by front-end users.
     * While the default settings of $excludeFromSearch, $publiclyQueryable, $showUi, and $showInNavMenus are
     * inherited from public, each does not rely on this relationship and controls a very specific intention.
     * Default false.
     *
     * @var bool
     */
    protected $isPublic = false;

    /**
     * Whether to generate and allow a UI for managing this post type in the admin. Default is value of $public.
     *
     * @var bool
     */
    protected $showUi;

    /**
     * Where to show the post type in the admin menu. To work, $showInMenu must be true. If true, the post type is
     * shown in its own top level menu. If false, no menu is shown.
     *
     * @var bool
     */
    protected $showInMenu = true;

    /**
     * Whether to show the post type in the admin menu as a child item of another, specified as a string. To work,
     * $showInMenu must be true. If a string of an existing top level menu (eg. 'tools.php' or
     * 'edit.php?post_type=page'), the post type will be placed as a sub-menu of that. Default is value of $show_ui.
     *
     * @var string
     */
    protected $showInMenuAsChildOf = '';

    /**
     * The position in the menu order the post type should appear. To work, $showInMenu must be true.
     * Default null (at the bottom).
     *
     * @var int
     */
    protected $menuPosition;

    /**
     * Makes this post type available via the admin bar. Default is value of $showInMenu.
     *
     * @var bool
     */
    protected $showInAdminBar;

    /**
     * Makes this post type available for selection in navigation menus. Default is value $public.
     *
     * @var bool
     */
    protected $showInNavMenus;

    /**
     * Whether to add the post type route in the REST API 'wp/v2' namespace.
     *
     * @var bool
     */
    protected $showInRest = true;

    /**
     * To change the base url of REST API route. Default is $post_type.
     *
     * @var string
     */
    protected $restBase;

    /**
     * REST API Controller class name. Default is 'WP_REST_Posts_Controller'.
     *
     * @var string
     */
    protected $restControllerClass = 'WP_REST_Posts_Controller';

    /**
     * Whether to allow this post type to be exported. Default true.
     *
     * @var bool
     */
    protected $exportable = true;

    /**
     * Triggers the handling of rewrites for this post type. To prevent rewrite, set to false. Defaults to true,
     * using $post_type as slug. To specify rewrite rules, an array can be passed with any of these keys:
     * 'slug'
     * (string) Customize the permastruct slug. Defaults to $post_type key.
     * 'with_front'
     * (bool) Whether the permastruct should be prepended with WP_Rewrite::$front. Default true.
     * 'feeds'
     * (bool) Whether the feed permastruct should be built for this post type. Default is value of $has_archive.
     * 'pages'
     * (bool) Whether the permastruct should provide for pagination. Default true.
     * 'ep_mask'
     * (const) Endpoint mask to assign. If not specified and permalink_epmask is set, inherits from
     * $permalink_epmask. If not specified and permalink_epmask is not set, defaults to EP_PERMALINK.
     * TODO: This should probably be more sophisticated, ideally some kind of "Rewrite" object
     *
     * @var bool|array
     */
    protected $rewriteRules;

    /**
     * Whether there should be post type archives, or if a string, the archive slug to use. Will generate the
     * proper rewrite rules if $rewrite is enabled. Default false.
     *
     * @var bool
     */
    protected $hasArchive = false;

    /**
     * Whether to exclude posts with this post type from front end search results. Default is the opposite
     * value of $public.
     *
     * @var bool
     */
    protected $excludeFromSearch;

    /**
     * holds the meta boxes for this post type. This will roughly be translated into the contents of WordPress'
     * "register_meta_box_cb" field, if it makes sense to do so. Therefore, said field is the only one not directly
     * accessible via the PostType class.
     *
     * @var
     */
    protected $metaBox;

    /**
     * The string to use to build the read, edit, and delete capabilities. May be passed as an array to allow for
     * alternative plurals when using this argument as a base to construct the capabilities, e.g. ['story', 'stories'].
     * Default 'post'.
     *
     * @var string
     */
    protected $capabilityType = 'post';

    /**
     * Array of capabilities for this post type. $capability_type is used as a base to construct capabilities by
     * default.
     *
     * @var array
     */
    protected $capabilities = [];

    /**
     * Whether to use the internal default meta capability handling. Default false.
     *
     * @var bool
     */
    protected $mapMetaCapability = false;

    /**
     * Whether queries can be performed on the front end for the post type as part of parse_request(). Endpoints
     * would include:
     * ?post_type={post_type_key}
     * ?{post_type_key}={single_post_slug}
     * ?{post_type_query_var}={single_post_slug} If not set, the default is inherited from $public.
     *
     * @var bool
     */
    protected $publiclyQueryable;

    /**
     * The url to the icon to be used for this menu. Pass a base64-encoded SVG using a data URI, which will be
     * colored to match the color scheme -- this should begin with 'data:image/svg+xml;base64,'. Pass the name
     * of a Dashicons helper class to use a font icon, e.g. 'dashicons-chart-pie'. Pass 'none' to leave
     * div.wp-menu-image empty so an icon can be added via CSS. Defaults to use the posts icon.
     *
     * @var string
     */
    protected $menuIcon = '';

    /**
     * Whether to delete posts of this type when deleting a user. If true, posts of this type belonging to the
     * user will be moved to trash when then user is deleted. If false, posts of this type belonging to the user
     * will *not* be trashed or deleted. If not set (the default), posts are trashed
     * if post_type_supports('author'). Otherwise posts are not trashed or deleted. Default null.
     *
     * @var bool
     */
    protected $deleteWithUser;

    /**
     * Sets the query_var key for this post type. Defaults to $name. If false, a post type cannot be loaded at
     * ?{query_var}={post_slug}. If specified as a string, the query ?{query_var_string}={post_slug} will be valid.
     *
     * @var string|bool
     */
    protected $queryVariable;

    /**
     * PostType constructor
     *
     * @param string $name    post type name
     * @param array  $options post type options
     */
    public function __construct( string $name, array $options = [] ) {
        $this->setName( $name );

        foreach ( $options as $key => $value ) {
            if ( property_exists( $this, $key ) ) {
                $this->$key = $value;
            }
        }
    }

    /**
     * sets the singular label name
     *
     * @param string $label
     *
     * @return void
     */
    public function setLabel( string $label ) {
        $this->labels ['singular_name'] = $label;
    }

    /**
     * marks the post type as shown in the UI
     *
     * @param bool $showUi
     */
    public function setUiShown( bool $showUi ) {
        $this->showUi = $showUi;
    }

    /**
     * marks the post type as shown in menus
     *
     * @param bool $showInMenu
     */
    public function setShownInMenu( bool $showInMenu ) {
        $this->showInMenu = $showInMenu;
    }

    /**
     * marks the post type as shown in the admin bar
     *
     * @param bool $showInAdminBar
     */
    public function setShownInAdminBar( bool $showInAdminBar ) {
        $this->showInAdminBar = $showInAdminBar;
    }

    /**
     * marks the post type as shown in navigation menus
     *
     * @param bool $showInNavMenus
     */
    public function setShownInNavMenus( bool $showInNavMenus ) {
        $this->showInNavMenus = $showInNavMenus;
    }

    /**
     * marks the post type as shown in the REST API
     *
     * @param bool $showInRest
     */
    public function setShownInRest( bool $showInRest ) {
        $this->showInRest = $showInRest;
    }

    /**
     * marks the post type as having an archive
     *
     * @param bool $hasArchive
     */
    public function setHasArchive( bool $hasArchive ) {
        $this->hasArchive = $hasArchive;
    }

    /**
     * excludes the post type from searches
     *
     * @param bool $excludeFromSearch
     */
    public function setExcludeFromSearch( bool $excludeFromSearch ) {
        $this->excludeFromSearch = $excludeFromSearch;
    }

    /**
     * sets the post type rewrite rules
     *
     * @param bool $rewrite
     */
    public function setRewrite( bool $rewrite ) {
        $this->rewriteRules = $rewrite;
    }

    /**
     * returns the serialized post type constructor
     *
     * @return array
     */
    public function toJson() {
        return [
            'postType' => [
                'name' => $this->getName(),
                'args' => [
                    'label'                 => $this->getLabel(),
                    'labels'                => $this->getLabels(),
                    'description'           => $this->getDescription(),
                    'public'                => $this->isPublic(),
                    'hierarchical'          => $this->isHierarchical(),
                    'exclude_from_search'   => $this->isExcludedFromSearch(),
                    'publicly_queryable'    => $this->isPubliclyQueryable(),
                    'show_ui'               => $this->getUiShown(),
                    'show_in_menu'          => $this->isShownInMenu(),
                    'show_in_nav_menus'     => $this->isShownInNavMenus(),
                    'show_in_admin_bar'     => $this->isShownInAdminBar(),
                    'show_in_rest'          => $this->isShownInRest(),
                    'rest_base'             => $this->getRestBase(),
                    'rest_controller_class' => $this->getRestControllerClass(),
                    'menu_position'         => $this->getMenuPosition(),
                    'menu_icon'             => $this->getMenuIcon(),
                    'capability_type'       => $this->getCapabilityType(),
                    'capabilities'          => $this->getCapabilities(),
                    'map_meta_cap'          => $this->getMapMetaCapability(),
                    'supports'              => $this->getSupportedFeatures(),
                    'register_meta_box_cb'  => '', // TODO: Implement meta boxes
                    'taxonomies'            => $this->getTaxonomies(),
                    'has_archive'           => $this->hasArchive(),
                    'rewrite'               => $this->getRewriteRules(),
                    'query_var'             => $this->getQueryVariable(),
                    'can_export'            => $this->isExportable(),
                    'delete_with_user'      => $this->isDeleteWithUser()
                ]
            ]
        ];
    }

    /**
     * retrieves the post type name
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * sets the post type name
     *
     * @param string $name
     */
    public function setName( string $name ) {
        $this->name = $name;
    }

    /**
     * retrieves the post type label or the inferred post type name with the first letter uppercased, which is the
     * default for other label methods
     *
     * @param string $label label to retrieve. defaults to singular_name
     *
     * @return string
     */
    public function getLabel( string $label = 'singular_name' ): string {
        return $this->labels[ $label ] ?? ucfirst( $this->getName() );
    }

    /**
     * retrieves the post type labels
     *
     * @param string $singularName label to build the other labels upon
     *
     * @return array
     */
    public function getLabels( string $singularName = null ): array {

        // merge the given labels with the defaults
        $labels = array_merge( PostType::LABELS, $this->labels );

        // retrieve the singular name
        $singularName = $singularName ?? $this->getLabel();

        // replace %s with the post type singular name
        return array_map( function( $label ) use ( $singularName ) {
            return sprintf( $label, $singularName );
        }, $labels );
    }

    /**
     * sets the post type labels
     *
     * @param array $labels
     */
    public function setLabels( array $labels ) {
        $this->labels = $labels;
    }

    /**
     * retrieves the post type description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * sets the post type description
     *
     * @param string $description
     */
    public function setDescription( string $description ) {
        $this->description = $description;
    }

    /**
     * checks whether the post type is public
     *
     * @return bool
     */
    public function isPublic(): bool {
        return $this->isPublic;
    }

    /**
     * marks the post type as public
     *
     * @param bool $isPublic
     */
    public function setIsPublic( bool $isPublic ) {
        $this->isPublic = $isPublic;
    }

    /**
     * checks whether the post type is hierarchical
     *
     * @return bool
     */
    public function isHierarchical(): bool {
        return $this->isHierarchical;
    }

    /**
     * marks the post type as hierarchical
     *
     * @param bool $isHierarchical
     */
    public function setIsHierarchical( bool $isHierarchical ) {
        $this->isHierarchical = $isHierarchical;
    }

    /**
     * checks whether the post type is excluded from searches
     *
     * @return bool
     */
    public function isExcludedFromSearch(): bool {
        return $this->excludeFromSearch ?? ( ! $this->isPublic() );
    }

    /**
     * checks whether the post type is publicly queryable
     *
     * @return bool
     */
    public function isPubliclyQueryable(): bool {
        return $this->publiclyQueryable ?? $this->isPublic();
    }

    /**
     * marks the post type as publicly queryable
     *
     * @param bool $publiclyQueryable
     */
    public function setPubliclyQueryable( bool $publiclyQueryable ) {
        $this->publiclyQueryable = $publiclyQueryable;
    }

    /**
     * checks whether the post type is shown in the UI
     *
     * @return bool
     */
    public function getUiShown(): bool {
        return $this->showUi ?? $this->isPublic();
    }

    /**
     * checks whether the post type is shown in menus
     *
     * @return bool
     */
    public function isShownInMenu(): bool {
        return $this->showInMenu ?? $this->getUiShown();
    }

    /**
     * checks whether the post type is shown in navigation menus
     *
     * @return bool
     */
    public function isShownInNavMenus(): bool {
        return $this->showInNavMenus ?? $this->isPublic();
    }

    /**
     * checks whether the post type is shown in the admin bar
     *
     * @return bool
     */
    public function isShownInAdminBar(): bool {
        return $this->showInAdminBar ?? $this->isShownInMenu();
    }

    /**
     * checks whether the post type is shown in the REST API endpoints.
     *
     * @return bool
     */
    public function isShownInRest(): bool {
        return $this->showInRest;
    }

    /**
     * retrieves the REST API base URI
     *
     * @return string
     */
    public function getRestBase(): string {
        return $this->restBase ?? $this->getName();
    }

    /**
     * sets the REST API base URI
     *
     * @param string $restBase
     */
    public function setRestBase( string $restBase ) {
        $this->restBase = $restBase;
    }

    /**
     * retrieves the REST API controller class
     *
     * @return string
     */
    public function getRestControllerClass(): string {
        return $this->restControllerClass;
    }

    /**
     * sets the REST API controller class
     *
     * @param string $restControllerClass
     */
    public function setRestControllerClass( string $restControllerClass ) {
        $this->restControllerClass = $restControllerClass;
    }

    /**
     * retrieves the menu position
     *
     * @return int
     */
    public function getMenuPosition() {
        return $this->menuPosition;
    }

    /**
     * sets the menu position
     *
     * @param int $menuPosition
     */
    public function setMenuPosition( int $menuPosition ) {
        $this->menuPosition = $menuPosition;
    }

    /**
     * retrieves the menu icon
     *
     * @return string
     */
    public function getMenuIcon(): string {
        return $this->menuIcon;
    }

    /**
     * sets the menu icon
     *
     * @param string $menuIcon
     */
    public function setMenuIcon( string $menuIcon ) {
        $this->menuIcon = $menuIcon;
    }

    /**
     * retrieves the post type capability
     *
     * @return string
     */
    public function getCapabilityType(): string {
        return $this->capabilityType;
    }

    /**
     * sets the post type capability
     *
     * @param string $capabilityType
     */
    public function setCapabilityType( string $capabilityType ) {
        $this->capabilityType = $capabilityType;
    }

    /**
     * retrieves post type capabilities
     *
     * @return array
     */
    public function getCapabilities(): array {
        return $this->capabilities;
    }

    /**
     * sets post type capabilities
     *
     * @param array $capabilities
     *
     * @throws \Radiergummi\Foundation\Framework\Schema\Exceptions\PostTypeCapabilityUnknownException
     */
    public function setCapabilities( array $capabilities ) {
        foreach ( $capabilities as $capability ) {
            $this->addCapability( $capability );
        }
    }

    /**
     * checks whether the post type uses the internal default meta capability handling
     *
     * @return bool
     */
    public function getMapMetaCapability(): bool {
        return $this->mapMetaCapability;
    }

    /**
     * marks the post type as using the internal default meta capability handling
     *
     * @param bool $mapMetaCapability
     */
    public function setMapMetaCapability( bool $mapMetaCapability ) {
        $this->mapMetaCapability = $mapMetaCapability;
    }

    /**
     * retrieves the supported features
     *
     * @return array
     */
    public function getSupportedFeatures(): array {
        return $this->supportedFeatures;
    }

    /**
     * sets the post types supported features
     *
     * @param array $supportedFeatures
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Schema\Exceptions\PostTypeFeatureUnknownException
     */
    public function setSupportedFeatures( array $supportedFeatures ) {
        foreach ( $supportedFeatures as $feature ) {
            $this->addSupportedFeature( $feature );
        }
    }

    /**
     * retrieves the post types taxonomies
     *
     * @return array
     */
    public function getTaxonomies(): array {
        return $this->taxonomies;
    }

    /**
     * sets the post types taxonomies
     *
     * @param array $taxonomies
     */
    public function setTaxonomies( array $taxonomies ) {
        $this->taxonomies = $taxonomies;
    }

    /**
     * checks whether the post type has an archive
     *
     * @return bool
     */
    public function hasArchive(): bool {
        return $this->hasArchive;
    }

    /**
     * retrieves all rewrite rules
     *
     * @return array
     */
    public function getRewriteRules(): array {
        if ( is_bool( $this->rewriteRules ) ) {
            return $this->rewriteRules;
        }

        return array_merge( [
                                'slug'       => $this->getName(),
                                'with_front' => true,
                                'feeds'      => $this->hasArchive(),
                                'pages'      => true
                            ], (array) $this->rewriteRules );
    }

    /**
     * retrieves the query variable
     *
     * @return bool|string
     */
    public function getQueryVariable() {
        return $this->queryVariable ?? $this->getName();
    }

    /**
     * sets the query variable
     *
     * @param bool|string $queryVariable
     */
    public function setQueryVariable( $queryVariable ) {
        $this->queryVariable = $queryVariable;
    }

    /**
     * checks whether the post type is exportable
     *
     * @return bool
     */
    public function isExportable(): bool {
        return $this->exportable;
    }

    /**
     * marks the post type as exportable
     *
     * @param bool $exportable
     */
    public function setExportable( bool $exportable ) {
        $this->exportable = $exportable;
    }

    /**
     * retrieves whether posts will be deleted with their author
     *
     * @return bool
     */
    public function isDeleteWithUser(): bool {
        return $this->deleteWithUser ?? ( $this->supports( 'author' ) );
    }

    /**
     * enables post type deletion when the author has been deleted
     *
     * @param bool $deleteWithUser
     */
    public function setDeleteWithUser( bool $deleteWithUser ) {
        $this->deleteWithUser = $deleteWithUser;
    }

    /**
     * checks whether the post type supports a certain feature
     *
     * @param string $feature
     *
     * @return bool
     */
    public function supports( string $feature ): bool {
        return ( in_array( $feature, $this->getSupportedFeatures() ) );
    }

    /**
     * adds a post type capability
     *
     * @param string $capability
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Schema\Exceptions\PostTypeCapabilityUnknownException
     */
    public function addCapability( string $capability ) {
        if ( in_array( $capability, PostType::CAPABILITIES ) ) {
            array_push( $this->capabilities, $capability );
        } else {
            throw new PostTypeCapabilityUnknownException( 'WordPress does\'nt currently support ' . $capability );
        }
    }

    /**
     * adds a supported feature
     *
     * @param string $feature
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Schema\Exceptions\PostTypeFeatureUnknownException
     */
    public function addSupportedFeature( string $feature ) {
        if ( in_array( $feature, PostType::FEATURES ) ) {
            array_push( $this->supportedFeatures, $feature );
        } else {
            throw new PostTypeFeatureUnknownException( 'WordPress does\'nt currently support ' . $feature );
        }
    }
}
