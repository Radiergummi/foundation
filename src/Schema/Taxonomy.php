<?php

namespace Radiergummi\Foundation\Framework\Schema;

use Radiergummi\Foundation\Framework\Schema\Exceptions\TaxonomyCapabilityUnknownException;
use UnexpectedValueException;
use function array_push;
use function array_search;
use function array_splice;
use function in_array;

/**
 * Taxonomy class
 *
 * @package Radiergummi\Foundation\Framework\Schema
 */
class Taxonomy extends SchemaChange {

    /**
     * holds the taxonomy default capabilities
     */
    protected const CAPABILITIES = [
        'manage_categories',
        'edit_posts'
    ];

    /**
     * holds the default taxonomy labels
     *
     * @see https://developer.wordpress.org/reference/functions/get_taxonomy_labels/#description
     */
    protected const
        /** @noinspection SqlNoDataSourceInspection */
        LABELS = [
        'name'                       => '%ss',
        'singular_name'              => '%s',
        'search_items'               => 'Search %ss',
        'popular_items'              => 'Popular %ss',
        'all_items'                  => 'All %ss',
        'parent_item'                => 'Parent %s',
        'parent_item_colon'          => 'Parent %s:',
        'edit_item'                  => 'Edit %s',
        'view_item'                  => 'View %s',
        'update_item'                => 'Update %s',
        'add_new_item'               => 'Add New %s',
        'new_item_name'              => 'New %s Name',
        'separate_items_with_commas' => 'Separate %ss with commas',
        'add_or_remove_items'        => 'Add or remove %ss',
        'choose_from_most_used'      => 'Choose from the most used %s',
        'not_found'                  => 'No %ss found',
        'no_terms'                   => 'No %ss',
        'items_list_navigation'      => '%s list navigation',
        'items_list'                 => '%s list'
    ];

    /**
     * Taxonomy key, must not exceed 32 characters.
     *
     * @var string
     */
    protected $name;

    /**
     * A short descriptive summary of what the taxonomy is for.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Object type or array of object types with which the taxonomy should be associated.
     *
     * @var array
     */
    protected $associations = [];

    /**
     * An array of labels for this taxonomy. By default, Tag labels are used for non-hierarchical taxonomies, and
     * Category labels are used for hierarchical taxonomies. See accepted values in get_taxonomy_labels().
     *
     * @var array
     */
    protected $labels = [];

    /**
     * Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users. The
     * default settings of $publicly_queryable, $show_ui, and $show_in_nav_menus are inherited from $public.
     *
     * @var bool
     */
    protected $isPublic = false;

    /**
     * Whether the taxonomy is publicly queryable. If not set, the default is inherited from $public
     *
     * @var
     */
    protected $isPubliclyQueryable;

    /**
     * Whether the taxonomy is hierarchical. Default false.
     *
     * @var bool
     */
    protected $isHierarchical = false;

    /**
     * Whether to generate and allow a UI for managing terms in this taxonomy in the admin. If not set, the
     * default is inherited from $public (default true).
     *
     * @var bool
     */
    protected $showUi = true;

    /**
     * Whether to show the taxonomy in the admin menu. If true, the taxonomy is shown as a submenu of the
     * object type menu. If false, no menu is shown. $show_ui must be true. If not set, default is inherited
     * from $show_ui (default true).
     *
     * @var bool
     */
    protected $showInMenu;

    /**
     * Makes this taxonomy available for selection in navigation menus. If not set, the default is inherited from
     * $public (default true).
     *
     * @var bool
     */
    protected $showInNavMenus;

    /**
     * Whether to include the taxonomy in the REST API.
     *
     * @var bool
     */
    protected $showInRest = false;

    /**
     * To change the base url of REST API route. Default is $taxonomy.
     *
     * @var string
     */
    protected $restBase;

    /**
     * REST API Controller class name. Default is 'WP_REST_Terms_Controller'.
     *
     * @var string
     */
    protected $restControllerClass = 'WP_REST_Terms_Controller';

    /**
     * Whether to list the taxonomy in the Tag Cloud Widget controls. If not set, the default is inherited from
     * $show_ui (default true).
     *
     * @var bool
     */
    protected $showInTagCloud;

    /**
     * Whether to show the taxonomy in the quick/bulk edit panel. It not set, the default is inherited from
     * $show_ui (default true).
     *
     * @var bool
     */
    protected $showInQuickEdit;

    /**
     * Whether to display a column for the taxonomy on its post type listing screens. Default false.
     *
     * @var bool
     */
    protected $showAdminColumn = false;

    /**
     * Array of capabilities for this taxonomy.
     *
     * @var array
     */
    protected $capabilities = [
        'manage_terms' => 'manage_categories',
        'edit_terms'   => 'manage_categories',
        'delete_terms' => 'manage_categories',
        'assign_terms' => 'manage_categories',
    ];

    /**
     * Triggers the handling of rewrites for this taxonomy. Default true, using $taxonomy as slug. To prevent
     * rewrite, set to false. To specify rewrite rules, an array can be passed with any of these keys:
     * 'slug'
     * (string) Customize the permastruct slug. Default $taxonomy key.
     * 'with_front'
     * (bool) Should the permastruct be prepended with WP_Rewrite::$front. Default true.
     * 'hierarchical'
     * (bool) Either hierarchical rewrite tag or not. Default false.
     * 'ep_mask'
     * (int) Assign an endpoint mask. Default EP_NONE.
     *
     * @var bool|array
     */
    protected $rewriteRules;

    /**
     * Sets the query var key for this taxonomy. Default $taxonomy key. If false, a taxonomy cannot be loaded at
     * ?{query_var}={term_slug}. If a string, the query ?{query_var}={term_slug} will be valid.
     *
     * @var string
     */
    protected $queryVariable;

    /**
     * Works much like a hook, in that it will be called when the count is updated. Default
     * _update_post_term_count() for taxonomies attached to post types, which confirms that the objects are
     * published before counting them.
     * Default _update_generic_term_count() for taxonomies attached to other object types, such as users.
     *
     * @var callable
     */
    protected $updateCountCallback;

    /**
     * Taxonomy constructor
     *
     * @param string $name
     * @param mixed  $associations
     * @param array  $options
     *
     * @throws \UnexpectedValueException
     */
    public function __construct( string $name, $associations, array $options = [] ) {
        $this->setName( $name );

        $this->setAssociations( (array) $associations );

        foreach ( $options as $key => $value ) {
            if ( property_exists( $this, $key ) ) {
                $this->$key = $value;
            }
        }
    }

    /**
     * adds an object type association
     *
     * @param \Radiergummi\Foundation\Framework\Schema\PostType $association
     *
     * @return void
     */
    public function associateWith( PostType $association ) {
        array_push( $this->associations, $association );
    }

    /**
     * removes an association with a post type
     *
     * @param \Radiergummi\Foundation\Framework\Schema\PostType $association
     *
     * @return void
     */
    public function dissociateFrom( PostType $association ) {
        array_splice( $this->associations, array_search( $association, $this->associations ), 1 );
    }

    /**
     * checks whether the taxonomy is associated with a post type
     *
     * @param \Radiergummi\Foundation\Framework\Schema\PostType $association
     *
     * @return bool
     */
    public function isAssociatedWith( PostType $association ): bool {
        return ( in_array( $association, $this->associations ) );
    }

    /**
     * marks the taxonomy as publicly queryable
     *
     * @param mixed $isPubliclyQueryable
     */
    public function setIsPubliclyQueryable( $isPubliclyQueryable ) {
        $this->isPubliclyQueryable = $isPubliclyQueryable;
    }

    /**
     * marks the taxonomy UI as shown
     *
     * @param bool $showUi
     */
    public function setUiShown( bool $showUi ) {
        $this->showUi = $showUi;
    }

    /**
     * marks the taxonomy as shown in the menu
     *
     * @param bool $showInMenu
     */
    public function setShownInMenu( bool $showInMenu ) {
        $this->showInMenu = $showInMenu;
    }

    /**
     * marks the taxonomy as shown in navigation menus
     *
     * @param bool $showInNavMenus
     */
    public function setShownInNavMenus( bool $showInNavMenus ) {
        $this->showInNavMenus = $showInNavMenus;
    }

    /**
     * marks the taxonomy as shown in the REST API
     *
     * @param bool $showInRest
     */
    public function setShownInRest( bool $showInRest ) {
        $this->showInRest = $showInRest;
    }

    /**
     * marks the taxonomy as shown in tag clouds
     *
     * @param bool $showInTagCloud
     */
    public function setShownInTagCloud( bool $showInTagCloud ) {
        $this->showInTagCloud = $showInTagCloud;
    }

    /**
     * sets the taxonomy is shown in quick edit
     *
     * @param bool $showInQuickEdit
     */
    public function setShownInQuickEdit( bool $showInQuickEdit ) {
        $this->showInQuickEdit = $showInQuickEdit;
    }

    /**
     * sets that a column for the taxonomy is shown in admin
     *
     * @param bool $showAdminColumn
     */
    public function setAdminColumnShown( bool $showAdminColumn ) {
        $this->showAdminColumn = $showAdminColumn;
    }

    /**
     * @return array
     */
    public function toJson() {

        return [
            'taxonomy' => [
                'name'        => $this->getName(),
                'object_type' => $this->getAssociations(),
                'args'        => [
                    'labels'                => $this->getLabels(),
                    'description'           => $this->getDescription(),
                    'public'                => $this->isPublic(),
                    'publicly_queryable'    => $this->isPubliclyQueryable(),
                    'hierarchical'          => $this->isHierarchical(),
                    'show_ui'               => $this->uiShown(),
                    'show_in_menu'          => $this->isShownInMenu(),
                    'show_in_nav_menus'     => $this->isShownInNavMenus(),
                    'show_in_rest'          => $this->isShownInRest(),
                    'rest_base'             => $this->getRestBase(),
                    'rest_controller_class' => $this->getRestControllerClass(),
                    'show_tagcloud'         => $this->isShownInTagCloud(),
                    'show_in_quick_edit'    => $this->isShownInQuickEdit(),
                    'show_admin_column'     => $this->isAdminColumnShown(),
                    'meta_box_cb'           => '', // TODO: Implement meta boxes
                    'capabilities'          => $this->getCapabilities(),
                    'rewrite'               => $this->getRewriteRules(),
                    'query_var'             => $this->getQueryVariable(),
                    'update_count_callback' => $this->getUpdateCountCallback()
                ]
            ]
        ];
    }

    /**
     * retrieves the taxonomy name
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * sets the taxonomy name
     *
     * @param string $name
     *
     * @throws \UnexpectedValueException if name is longer than 32 characters
     */
    public function setName( string $name ) {
        if ( strlen( $name ) > 32 ) {
            throw new UnexpectedValueException(
                sprintf(
                    'Taxonomy name too long: %s has %i more characters than allowed (32)',
                    strlen( $name ) - 32
                )
            );
        }

        $this->name = $name;
    }

    /**
     * retrieves all object types the taxonomy is associated with
     *
     * @return array
     */
    public function getAssociations(): array {
        return $this->associations;
    }

    /**
     * sets all object types the taxonomy is associated with
     *
     * @param \Radiergummi\Foundation\Framework\Schema\PostType[] $associations
     */
    public function setAssociations( array $associations ) {
        foreach ( $associations as $association ) {

            /** @var \Radiergummi\Foundation\Framework\Schema\PostType $association */
            $this->associateWith( $association );
        }
    }

    /**
     * retrieves the taxonomy labels
     *
     * @return array
     */
    public function getLabels(): array {

        // merge the given labels with the defaults
        $labels = array_merge( Taxonomy::LABELS, $this->labels );

        // retrieve the singular name
        $singularName = $singularName ?? $this->getLabel();

        // replace %s with the post type singular name
        return array_map( function( $label ) use ( $singularName ) {
            return sprintf( $label, $singularName );
        }, $labels );
    }

    /**
     * sets the taxonomy labels
     *
     * @param array $labels
     */
    public function setLabels( array $labels ) {
        $this->labels = $labels;
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
     * retrieves the taxonomy description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * sets the taxonomy description
     *
     * @param string $description
     */
    public function setDescription( string $description ) {
        $this->description = $description;
    }

    /**
     * checks whether the taxonomy is publicly accessible
     *
     * @return mixed
     */
    public function isPublic() {
        return $this->isPublic;
    }

    /**
     * marks the taxonomy as publicly accessible
     *
     * @param mixed $isPublic
     */
    public function setIsPublic( $isPublic ) {
        $this->isPublic = $isPublic;
    }

    /**
     * checks whether the taxonomy is publicly queryable
     *
     * @return mixed
     */
    public function isPubliclyQueryable() {
        return $this->isPubliclyQueryable ?? $this->isPublic();
    }

    /**
     * checks whether the taxonomy is hierarchical
     *
     * @return bool
     */
    public function isHierarchical(): bool {
        return $this->isHierarchical;
    }

    /**
     * marks the taxonomy as hierarchical
     *
     * @param bool $isHierarchical
     */
    public function setIsHierarchical( bool $isHierarchical ) {
        $this->isHierarchical = $isHierarchical;
    }

    /**
     * checks whether the taxonomy UI is shown
     *
     * @return bool
     */
    public function uiShown(): bool {
        return $this->showUi ?? $this->isPublic();
    }

    /**
     * checks whether the taxonomy is shown in the menu
     *
     * @return bool
     */
    public function isShownInMenu(): bool {
        return $this->showInMenu ?? $this->uiShown();
    }

    /**
     * checks whether the taxonomy is shown in navigation menus
     *
     * @return bool
     */
    public function isShownInNavMenus(): bool {
        return $this->showInNavMenus ?? $this->isPublic();
    }

    /**
     * checks whether the taxonomy is shown in the REST API
     *
     * @return bool
     */
    public function isShownInRest(): bool {
        return $this->showInRest;
    }

    /**
     * retrieves the REST base URI
     *
     * @return string
     */
    public function getRestBase(): string {
        return $this->restBase ?? $this->getName();
    }

    /**
     * sets the REST base URI
     *
     * @param string $restBase
     */
    public function setRestBase( string $restBase ) {
        $this->restBase = $restBase;
    }

    /**
     * retrieves the REST API controller class name
     *
     * @return string
     */
    public function getRestControllerClass(): string {
        return $this->restControllerClass;
    }

    /**
     * sets the REST API controller class name
     *
     * @param string $restControllerClass
     */
    public function setRestControllerClass( string $restControllerClass ) {
        $this->restControllerClass = $restControllerClass;
    }

    /**
     * checks whether the taxonomy is shown in tag clouds
     *
     * @return bool
     */
    public function isShownInTagCloud(): bool {
        return $this->showInTagCloud ?? $this->uiShown();
    }

    /**
     * checks whether the taxonomy is shown in quick edit
     *
     * @return bool
     */
    public function isShownInQuickEdit(): bool {
        return $this->showInQuickEdit ?? $this->uiShown();
    }

    /**
     * checks whether a column for the taxonomy is shown in admin
     *
     * @return bool
     */
    public function isAdminColumnShown(): bool {
        return $this->showAdminColumn;
    }

    /**
     * retrieves the capabilities for the taxonomy
     *
     * @return array
     */
    public function getCapabilities(): array {
        return $this->capabilities;
    }

    /**
     * sets capabilities for the taxonomy
     *
     * @param array $capabilities
     *
     * @throws \Radiergummi\Foundation\Framework\Schema\Exceptions\TaxonomyCapabilityUnknownException
     */
    public function setCapabilities( array $capabilities ) {
        foreach ( $capabilities as $capability ) {
            $this->addCapability( $capability );
        }
    }

    /**
     * retrieves the rewrite rules for the taxonomy
     *
     * @return array|bool
     */
    public function getRewriteRules() {
        if ( is_bool( $this->rewriteRules ) ) {
            return $this->rewriteRules;
        }

        return array_merge( [
                                'slug'         => $this->getName(),
                                'with_front'   => true,
                                'hierarchical' => $this->isHierarchical()
                            ], (array) $this->rewriteRules );
    }

    /**
     * sets the rewrite rules for the taxonomy
     *
     * @param array|bool $rewriteRules
     */
    public function setRewriteRules( $rewriteRules ) {
        $this->rewriteRules = $rewriteRules;
    }

    /**
     * retrieves the query variable for the taxonomy
     *
     * @return string
     */
    public function getQueryVariable(): string {
        return $this->queryVariable ?? $this->getName();
    }

    /**
     * sets the query variable for the taxonomy
     *
     * @param string $queryVariable
     */
    public function setQueryVariable( string $queryVariable ) {
        $this->queryVariable = $queryVariable;
    }

    /**
     * retrieves the update count callback
     *
     * @return callable
     */
    public function getUpdateCountCallback() {
        return $this->updateCountCallback ?? ( in_array( 'post', $this->associations )
                ? '_update_post_term_count'
                : '_update_generic_term_count'
            );
    }

    /**
     * adds a taxonomy capability
     *
     * @param string $capability
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Schema\Exceptions\TaxonomyCapabilityUnknownException
     */
    public function addCapability( string $capability ) {
        if ( in_array( $capability, Taxonomy::CAPABILITIES ) ) {
            array_push( $this->capabilities, $capability );
        } else {
            throw new TaxonomyCapabilityUnknownException( 'WordPress does\'nt currently support ' . $capability );
        }
    }

    /**
     * sets the update count callback
     *
     * @param callable $updateCountCallback
     */
    public function setUpdateCountCallback( callable $updateCountCallback ) {
        $this->updateCountCallback = $updateCountCallback;
    }
}
