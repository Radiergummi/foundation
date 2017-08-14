<?php

use Radiergummi\Foundation\Framework\Schema\Capability;
use Radiergummi\Foundation\Framework\Schema\Exceptions\PostTypeFeatureUnknownException;
use Radiergummi\Foundation\Framework\Schema\PostType;
use Radiergummi\Foundation\Framework\Schema\Role\Administrator as AdministratorRole;
use Radiergummi\Foundation\Framework\Schema\Role\Subscriber as SubscriberRole;
use Radiergummi\Foundation\Framework\Schema\RoleFactory;
use Radiergummi\Foundation\Framework\Schema\Taxonomy;
use Radiergummi\Foundation\Framework\Schema\User;

describe( 'Schema', function() {
    describe( 'SchemaChange', function() {
        describe( 'PostType', function() {
            it( 'should create a post type', function() {
                $expectedValue = 'test';
                $postType      = new PostType( $expectedValue );

                assert( $postType->getName() === $expectedValue );
            } );

            it( 'should use name as its singular name label', function() {
                $postType = new PostType( 'test' );

                assert( $postType->getLabel() === 'Test' );
            } );

            it( 'should retrieve all labels', function() {
                $expectedValue = [
                    'name'                  => 'Examples',
                    'singular_name'         => 'Example',
                    'add_new'               => 'Add New',
                    'add_new_item'          => 'Add New Example',
                    'edit_item'             => 'Edit Example',
                    'new_item'              => 'New Example',
                    'view_item'             => 'View Example',
                    'view_items'            => 'View Examples',
                    'search_items'          => 'Search Examples',
                    'not_found'             => 'No Examples found',
                    'not_found_in_trash'    => 'No Examples found in Trash',
                    'parent_item_colon'     => 'Parent Example:',
                    'all_items'             => 'All Examples',
                    'archives'              => 'Example Archives',
                    'attributes'            => 'Example Attributes',
                    'insert_into_item'      => 'Insert into Example',
                    'uploaded_to_this_item' => 'Uploaded to this Example',
                    'featured_image'        => 'Featured Image',
                    'set_featured_image'    => 'Set featured image',
                    'remove_featured_image' => 'Remove featured image',
                    'use_featured_image'    => 'Use as featured image',
                    'menu_name'             => 'Example',
                    'filter_items_list'     => 'Filter Example list',
                    'items_list_navigation' => 'Example list navigation',
                    'items_list'            => 'Example list'
                ];
                $postType      = new PostType( 'test', [
                    'labels' => [
                        'singular_name' => 'Example'
                    ]
                ] );

                assert( $postType->getLabels() === $expectedValue );
            } );

            it( 'should default showUi to isPublic', function() {
                $postType = new PostType( 'test' );
                $postType->setIsPublic( true );

                assert( $postType->getUiShown() === true );
            } );

            it( 'should default showInMenu to showUi', function() {
                $postType = new PostType( 'test' );
                $postType->setUiShown( true );

                assert( $postType->isShownInMenu() === true );
            } );

            it( 'should default showInAdminBar to isShowInMenu', function() {
                $postType = new PostType( 'test' );
                $postType->setShownInMenu( true );

                assert( $postType->isShownInAdminBar() === true );
            } );

            it( 'should default showInNavMenus to isPublic', function() {
                $postType = new PostType( 'test' );
                $postType->setIsPublic( true );

                assert( $postType->isShownInNavMenus() === true );
            } );

            it( 'should default excludedFromSearch to opposite of isPublic', function() {
                $postType = new PostType( 'test' );
                $postType->setIsPublic( true );

                assert( $postType->isExcludedFromSearch() === false );
            } );

            it( 'should default publiclyQueryable to isPublic', function() {
                $postType = new PostType( 'test' );
                $postType->setIsPublic( true );

                assert( $postType->isPubliclyQueryable() === true );
            } );

            it( 'should default REST base to name', function() {
                $expectedValue = 'test';
                $postType      = new PostType( $expectedValue );

                assert( $postType->getRestBase() === $expectedValue );
            } );

            it( 'should default queryVariable to name', function() {
                $expectedValue = 'test';
                $postType      = new PostType( $expectedValue );

                assert( $postType->getQueryVariable() === $expectedValue );
            } );

            it( 'should default deleteWithUser to whether the post type has authors enabled', function() {
                $postType = new PostType( 'test' );
                $postType->addSupportedFeature( 'author' );

                assert( $postType->isDeleteWithUser() === true );
            } );

            it( 'should throw on unknown post type features', function() {
                $exception = null;
                $postType  = new PostType( 'test' );

                try {
                    $postType->addSupportedFeature( 'nope' );
                }
                    /** @noinspection PhpUndefinedClassInspection */
                catch ( Throwable $featureUnknownException ) {
                    $exception = $featureUnknownException;
                }

                assert( $exception instanceof PostTypeFeatureUnknownException );
            } );

            it( 'should default rewrite to array', function() {
                $expectedValue = [
                    'slug'       => 'test',
                    'with_front' => true,
                    'feeds'      => true,
                    'pages'      => true
                ];
                $postType      = new PostType( 'test' );
                $postType->setHasArchive( true );

                assert( $postType->getRewriteRules() === $expectedValue );
            } );

            it( 'should serialize to a valid WordPress register_post_type args array', function() {
                $expectedValue = '{"postType":{"name":"test","args":{"label":"Test","labels":{"name":"Tests","singular_name":"Test","add_new":"Add New","add_new_item":"Add New Test","edit_item":"Edit Test","new_item":"New Test","view_item":"View Test","view_items":"View Tests","search_items":"Search Tests","not_found":"No Tests found","not_found_in_trash":"No Tests found in Trash","parent_item_colon":"Parent Test:","all_items":"All Tests","archives":"Test Archives","attributes":"Test Attributes","insert_into_item":"Insert into Test","uploaded_to_this_item":"Uploaded to this Test","featured_image":"Featured Image","set_featured_image":"Set featured image","remove_featured_image":"Remove featured image","use_featured_image":"Use as featured image","menu_name":"Test","filter_items_list":"Filter Test list","items_list_navigation":"Test list navigation","items_list":"Test list"},"description":"","public":false,"hierarchical":false,"exclude_from_search":true,"publicly_queryable":false,"show_ui":false,"show_in_menu":true,"show_in_nav_menus":false,"show_in_admin_bar":true,"show_in_rest":true,"rest_base":"test","rest_controller_class":"WP_REST_Posts_Controller","menu_position":null,"menu_icon":"","capability_type":"post","capabilities":[],"map_meta_cap":false,"supports":["title","editor"],"register_meta_box_cb":"","taxonomies":[],"has_archive":false,"rewrite":{"slug":"test","with_front":true,"feeds":false,"pages":true},"query_var":"test","can_export":true,"delete_with_user":false}}}';
                $postType      = new PostType( 'test' );

                assert( json_encode( $postType ) === $expectedValue );
            } );
        } );

        describe( 'Taxonomy', function() {
            it( 'should create a taxonomy', function() {
                $expectedValue = 'test';
                $postType      = new PostType( 'foo' );
                $taxonomy      = new Taxonomy( $expectedValue, [ $postType ] );

                assert( $taxonomy->getName() === $expectedValue );
            } );

            it( 'should use name as its singular name label', function() {
                $postType = new PostType( 'foo' );
                $taxonomy = new Taxonomy( 'test', [ $postType ] );

                assert( $taxonomy->getLabel() === 'Test' );
            } );

            it( 'should retrieve all labels', function() {
                $expectedValue = [
                    'name'                       => 'Examples',
                    'singular_name'              => 'Example',
                    'search_items'               => 'Search Examples',
                    'popular_items'              => 'Popular Examples',
                    'all_items'                  => 'All Examples',
                    'parent_item'                => 'Parent Example',
                    'parent_item_colon'          => 'Parent Example:',
                    'edit_item'                  => 'Edit Example',
                    'view_item'                  => 'View Example',
                    'update_item'                => 'Update Example',
                    'add_new_item'               => 'Add New Example',
                    'new_item_name'              => 'New Example Name',
                    'separate_items_with_commas' => 'Separate Examples with commas',
                    'add_or_remove_items'        => 'Add or remove Examples',
                    'choose_from_most_used'      => 'Choose from the most used Example',
                    'not_found'                  => 'No Examples found',
                    'no_terms'                   => 'No Examples',
                    'items_list_navigation'      => 'Example list navigation',
                    'items_list'                 => 'Example list'
                ];
                $postType      = new PostType( 'foo' );
                $taxonomy      = new Taxonomy( 'test', [ $postType ], [
                    'labels' => [
                        'singular_name' => 'Example'
                    ]
                ] );

                assert( $taxonomy->getLabels() === $expectedValue );
            } );

            it( 'should default showUi to isPublic', function() {
                $postType = new PostType( 'foo' );
                $taxonomy = new Taxonomy( 'test', [ $postType ] );
                $taxonomy->setIsPublic( true );

                assert( $taxonomy->uiShown() === true );
            } );

            it( 'should default showInMenu to showUi', function() {
                $postType = new PostType( 'foo' );
                $taxonomy = new Taxonomy( 'test', [ $postType ] );
                $taxonomy->setUiShown( true );

                assert( $taxonomy->isShownInMenu() === true );
            } );

            it( 'should default showInNavMenus to isPublic', function() {
                $postType = new PostType( 'foo' );
                $taxonomy = new Taxonomy( 'test', [ $postType ] );
                $taxonomy->setIsPublic( true );

                assert( $taxonomy->isShownInNavMenus() === true );
            } );

            it( 'should default publiclyQueryable to isPublic', function() {
                $postType = new PostType( 'foo' );
                $taxonomy = new Taxonomy( 'test', [ $postType ] );
                $taxonomy->setIsPublic( true );

                assert( $taxonomy->isPubliclyQueryable() === true );
            } );

            it( 'should default REST base to name', function() {
                $expectedValue = 'test';
                $postType      = new PostType( 'foo' );
                $taxonomy      = new Taxonomy( $expectedValue, [ $postType ] );

                assert( $taxonomy->getRestBase() === $expectedValue );
            } );

            it( 'should default queryVariable to name', function() {
                $expectedValue = 'test';
                $postType      = new PostType( 'foo' );
                $taxonomy      = new Taxonomy( $expectedValue, [ $postType ] );

                assert( $taxonomy->getQueryVariable() === $expectedValue );
            } );

            it( 'should default rewrite to array', function() {
                $expectedValue = [
                    'slug'         => 'test',
                    'with_front'   => true,
                    'hierarchical' => true
                ];
                $postType      = new PostType( 'foo' );
                $taxonomy      = new Taxonomy( 'test', [ $postType ] );
                $taxonomy->setIsHierarchical( true );

                assert( $taxonomy->getRewriteRules() === $expectedValue );
            } );

            it( 'should serialize to a valid WordPress register_taxonomy args array', function() {
                $expectedValue = '{"taxonomy":{"name":"test","object_type":[{"postType":{"name":"foo","args":{"label":"Foo","labels":{"name":"Foos","singular_name":"Foo","add_new":"Add New","add_new_item":"Add New Foo","edit_item":"Edit Foo","new_item":"New Foo","view_item":"View Foo","view_items":"View Foos","search_items":"Search Foos","not_found":"No Foos found","not_found_in_trash":"No Foos found in Trash","parent_item_colon":"Parent Foo:","all_items":"All Foos","archives":"Foo Archives","attributes":"Foo Attributes","insert_into_item":"Insert into Foo","uploaded_to_this_item":"Uploaded to this Foo","featured_image":"Featured Image","set_featured_image":"Set featured image","remove_featured_image":"Remove featured image","use_featured_image":"Use as featured image","menu_name":"Foo","filter_items_list":"Filter Foo list","items_list_navigation":"Foo list navigation","items_list":"Foo list"},"description":"","public":false,"hierarchical":false,"exclude_from_search":true,"publicly_queryable":false,"show_ui":false,"show_in_menu":true,"show_in_nav_menus":false,"show_in_admin_bar":true,"show_in_rest":true,"rest_base":"foo","rest_controller_class":"WP_REST_Posts_Controller","menu_position":null,"menu_icon":"","capability_type":"post","capabilities":[],"map_meta_cap":false,"supports":["title","editor"],"register_meta_box_cb":"","taxonomies":[],"has_archive":false,"rewrite":{"slug":"foo","with_front":true,"feeds":false,"pages":true},"query_var":"foo","can_export":true,"delete_with_user":false}}}],"args":{"labels":{"name":"Tests","singular_name":"Test","search_items":"Search Tests","popular_items":"Popular Tests","all_items":"All Tests","parent_item":"Parent Test","parent_item_colon":"Parent Test:","edit_item":"Edit Test","view_item":"View Test","update_item":"Update Test","add_new_item":"Add New Test","new_item_name":"New Test Name","separate_items_with_commas":"Separate Tests with commas","add_or_remove_items":"Add or remove Tests","choose_from_most_used":"Choose from the most used Test","not_found":"No Tests found","no_terms":"No Tests","items_list_navigation":"Test list navigation","items_list":"Test list"},"description":"","public":false,"publicly_queryable":false,"hierarchical":false,"show_ui":true,"show_in_menu":true,"show_in_nav_menus":false,"show_in_rest":false,"rest_base":"test","rest_controller_class":"WP_REST_Terms_Controller","show_tagcloud":true,"show_in_quick_edit":true,"show_admin_column":false,"meta_box_cb":"","capabilities":{"manage_terms":"manage_categories","edit_terms":"manage_categories","delete_terms":"manage_categories","assign_terms":"manage_categories"},"rewrite":{"slug":"test","with_front":true,"hierarchical":false},"query_var":"test","update_count_callback":"_update_generic_term_count"}}}';
                $postType      = new PostType( 'foo' );
                $taxonomy      = new Taxonomy( 'test', [ $postType ] );

                assert( json_encode( $taxonomy ) === $expectedValue );
            } );
        } );

        describe( 'User', function() {
            it( 'should create a user', function() {
                $expectedValue = 'foo';
                $user          = new User( $expectedValue );

                assert( $user->getUsername() === $expectedValue );
            } );

            it( 'should throw on usernames too short', function() {
                $exception = null;

                try {
                    new User( str_repeat( 'a', User::USERNAME_MINIMUM_LENGTH - 1 ) );
                }
                    /** @noinspection PhpUndefinedClassInspection */
                catch ( Throwable $usernameTooShortException ) {
                    $exception = $usernameTooShortException;
                }

                assert( $exception instanceof OutOfRangeException );
            } );

            it( 'should throw on usernames too long', function() {
                $exception = null;

                try {
                    new User( str_repeat( 'a', User::USERNAME_MAXIMUM_LENGTH + 1 ) );
                }
                    /** @noinspection PhpUndefinedClassInspection */
                catch ( Throwable $usernameTooLongException ) {
                    $exception = $usernameTooLongException;
                }

                assert( $exception instanceof OutOfRangeException );
            } );

            it( 'should assign all capabilities for a role', function() {
                $expectedValue = [
                    "activate_plugins",
                    "delete_others_pages",
                    "delete_others_posts",
                    "delete_pages",
                    "delete_posts",
                    "delete_private_pages",
                    "delete_private_posts",
                    "delete_published_pages",
                    "delete_published_posts",
                    "edit_dashboard",
                    "edit_others_pages",
                    "edit_others_posts",
                    "edit_pages",
                    "edit_posts",
                    "edit_private_pages",
                    "edit_private_posts",
                    "edit_published_pages",
                    "edit_published_posts",
                    "edit_theme_options",
                    "export",
                    "import",
                    "list_users",
                    "manage_categories",
                    "manage_links",
                    "manage_options",
                    "moderate_comments",
                    "promote_users",
                    "publish_pages",
                    "publish_posts",
                    "read_private_pages",
                    "read_private_posts",
                    "read",
                    "remove_users",
                    "switch_themes",
                    "upload_files",
                    "customize",
                    "delete_site"
                ];
                $user          = new User( 'test' );
                $userRole      = new AdministratorRole();
                $user->addRole( $userRole );

                assert( $user->getCapabilities() === $expectedValue );
            } );

            it( 'should assign multiple role capabilities correctly', function() {
                $expectedValue = [
                    "read",
                    "upload_files"
                ];
                $user          = new User( 'test' );
                $userRole1     = new SubscriberRole();
                $userRole2     = RoleFactory::create( 'testrole', [
                    Capability::UPLOAD_FILES
                ] );

                $user->addRole( $userRole1 );
                $user->addRole( $userRole2 );

                assert( $user->getCapabilities() === $expectedValue );
            } );
        } );
    } );
} );
