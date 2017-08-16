<?php

namespace Radiergummi\Foundation\Framework\WordPress;

/**
 * Filter class
 * Holds constants for all available filters in WordPress. This serves the purpose of providing autocompletion in
 * IDEs and editors. It also provides a neat reference of available filters in the documentation, plus, Foundation
 * has a valid dictionary of filters it can use.
 *
 * @package Radiergummi\Foundation\Framework\WordPress
 */
class Filter {
    /**
     * comment_post_redirect
     */
    const COMMENT_POST_REDIRECT = 'comment_post_redirect';

    /**
     * link_category
     */
    const LINK_CATEGORY = 'link_category';

    /**
     * link_title
     */
    const LINK_TITLE = 'link_title';

    /**
     * shake_error_codes
     */
    const SHAKE_ERROR_CODES = 'shake_error_codes';

    /**
     * login_headerurl
     */
    const LOGIN_HEADERURL = 'login_headerurl';

    /**
     * login_headertitle
     */
    const LOGIN_HEADERTITLE = 'login_headertitle';

    /**
     * login_body_class
     */
    const LOGIN_BODY_CLASS = 'login_body_class';

    /**
     * login_message
     */
    const LOGIN_MESSAGE = 'login_message';

    /**
     * login_errors
     */
    const LOGIN_ERRORS = 'login_errors';

    /**
     * login_messages
     */
    const LOGIN_MESSAGES = 'login_messages';

    /**
     * retrieve_password_title
     */
    const RETRIEVE_PASSWORD_TITLE = 'retrieve_password_title';

    /**
     * retrieve_password_message
     */
    const RETRIEVE_PASSWORD_MESSAGE = 'retrieve_password_message';

    /**
     * post_password_expires
     */
    const POST_PASSWORD_EXPIRES = 'post_password_expires';

    /**
     * logout_redirect
     */
    const LOGOUT_REDIRECT = 'logout_redirect';

    /**
     * lostpassword_redirect
     */
    const LOSTPASSWORD_REDIRECT = 'lostpassword_redirect';

    /**
     * register
     */
    const REGISTER = 'register';

    /**
     * wp_signup_location
     */
    const WP_SIGNUP_LOCATION = 'wp_signup_location';

    /**
     * registration_redirect
     */
    const REGISTRATION_REDIRECT = 'registration_redirect';

    /**
     * login_redirect
     */
    const LOGIN_REDIRECT = 'login_redirect';

    /**
     * wp_login_errors
     */
    const WP_LOGIN_ERRORS = 'wp_login_errors';

    /**
     * enable_post_by_email_configuration
     */
    const ENABLE_POST_BY_EMAIL_CONFIGURATION = 'enable_post_by_email_configuration';

    /**
     * wp_mail_original_content
     */
    const WP_MAIL_ORIGINAL_CONTENT = 'wp_mail_original_content';

    /**
     * phone_content
     */
    const PHONE_CONTENT = 'phone_content';

    /**
     * signup_another_blog_init
     */
    const SIGNUP_ANOTHER_BLOG_INIT = 'signup_another_blog_init';

    /**
     * signup_create_blog_meta
     */
    const SIGNUP_CREATE_BLOG_META = 'signup_create_blog_meta';

    /**
     * add_signup_meta
     */
    const ADD_SIGNUP_META = 'add_signup_meta';

    /**
     * signup_user_init
     */
    const SIGNUP_USER_INIT = 'signup_user_init';

    /**
     * signup_blog_init
     */
    const SIGNUP_BLOG_INIT = 'signup_blog_init';

    /**
     * signup_get_available_languages
     */
    const SIGNUP_GET_AVAILABLE_LANGUAGES = 'signup_get_available_languages';

    /**
     * wpmu_active_signup
     */
    const WPMU_ACTIVE_SIGNUP = 'wpmu_active_signup';

    /**
     * wp_xmlrpc_server_class
     */
    const WP_XMLRPC_SERVER_CLASS = 'wp_xmlrpc_server_class';

    /**
     * admin_footer_text
     */
    const ADMIN_FOOTER_TEXT = 'admin_footer_text';

    /**
     * update_footer
     */
    const UPDATE_FOOTER = 'update_footer';

    /**
     * admin_title
     */
    const ADMIN_TITLE = 'admin_title';

    /**
     * admin_body_class
     */
    const ADMIN_BODY_CLASS = 'admin_body_class';

    /**
     * do_mu_upgrade
     */
    const DO_MU_UPGRADE = 'do_mu_upgrade';

    /**
     * admin_memory_limit
     */
    const ADMIN_MEMORY_LIMIT = 'admin_memory_limit';

    /**
     * force_filtered_html_on_import
     */
    const FORCE_FILTERED_HTML_ON_IMPORT = 'force_filtered_html_on_import';

    /**
     * async_upload_{$type}
     */
    const ASYNC_UPLOAD_TYPE = 'async_upload_{$type}';

    /**
     * comment_edit_redirect
     */
    const COMMENT_EDIT_REDIRECT = 'comment_edit_redirect';

    /**
     * image_size_names_choose
     */
    const IMAGE_SIZE_NAMES_CHOOSE = 'image_size_names_choose';

    /**
     * wp_create_file_in_uploads
     */
    const WP_CREATE_FILE_IN_UPLOADS = 'wp_create_file_in_uploads';

    /**
     * wp_header_image_attachment_metadata
     */
    const WP_HEADER_IMAGE_ATTACHMENT_METADATA = 'wp_header_image_attachment_metadata';

    /**
     * wp_editor_expand
     */
    const WP_EDITOR_EXPAND = 'wp_editor_expand';

    /**
     * post_updated_messages
     */
    const POST_UPDATED_MESSAGES = 'post_updated_messages';

    /**
     * enter_title_here
     */
    const ENTER_TITLE_HERE = 'enter_title_here';

    /**
     * edit_comment_misc_actions
     */
    const EDIT_COMMENT_MISC_ACTIONS = 'edit_comment_misc_actions';

    /**
     * editable_slug
     */
    const EDITABLE_SLUG = 'editable_slug';

    /**
     * taxonomy_parent_dropdown_args
     */
    const TAXONOMY_PARENT_DROPDOWN_ARGS = 'taxonomy_parent_dropdown_args';

    /**
     * the_category
     */
    const THE_CATEGORY = 'the_category';

    /**
     * bulk_post_updated_messages
     */
    const BULK_POST_UPDATED_MESSAGES = 'bulk_post_updated_messages';

    /**
     * export_args
     */
    const EXPORT_ARGS = 'export_args';

    /**
     * media_upload_default_type
     */
    const MEDIA_UPLOAD_DEFAULT_TYPE = 'media_upload_default_type';

    /**
     * media_upload_default_tab
     */
    const MEDIA_UPLOAD_DEFAULT_TAB = 'media_upload_default_tab';

    /**
     * parent_file
     */
    const PARENT_FILE = 'parent_file';

    /**
     * submenu_file
     */
    const SUBMENU_FILE = 'submenu_file';

    /**
     * delete_site_email_content
     */
    const DELETE_SITE_EMAIL_CONTENT = 'delete_site_email_content';

    /**
     * myblogs_options
     */
    const MYBLOGS_OPTIONS = 'myblogs_options';

    /**
     * myblogs_blog_actions
     */
    const MYBLOGS_BLOG_ACTIONS = 'myblogs_blog_actions';

    /**
     * wp_nav_locations_listed_per_menu
     */
    const WP_NAV_LOCATIONS_LISTED_PER_MENU = 'wp_nav_locations_listed_per_menu';

    /**
     * thread_comments_depth_max
     */
    const THREAD_COMMENTS_DEPTH_MAX = 'thread_comments_depth_max';

    /**
     * avatar_defaults
     */
    const AVATAR_DEFAULTS = 'avatar_defaults';

    /**
     * default_avatar_select
     */
    const DEFAULT_AVATAR_SELECT = 'default_avatar_select';

    /**
     * date_formats
     */
    const DATE_FORMATS = 'date_formats';

    /**
     * time_formats
     */
    const TIME_FORMATS = 'time_formats';

    /**
     * enable_update_services_configuration
     */
    const ENABLE_UPDATE_SERVICES_CONFIGURATION = 'enable_update_services_configuration';

    /**
     * option_page_capability_{$option_page}
     */
    const OPTION_PAGE_CAPABILITY_OPTION_PAGE = 'option_page_capability_{$option_page}';

    /**
     * whitelist_options
     */
    const WHITELIST_OPTIONS = 'whitelist_options';

    /**
     * editable_extensions
     */
    const EDITABLE_EXTENSIONS = 'editable_extensions';

    /**
     * wp_theme_editor_filetypes
     */
    const WP_THEME_EDITOR_FILETYPES = 'wp_theme_editor_filetypes';

    /**
     * install_themes_tabs
     */
    const INSTALL_THEMES_TABS = 'install_themes_tabs';

    /**
     * enable_edit_any_user_configuration
     */
    const ENABLE_EDIT_ANY_USER_CONFIGURATION = 'enable_edit_any_user_configuration';

    /**
     * user_{$name}_label
     */
    const USER_NAME_LABEL = 'user_{$name}_label';

    /**
     * user_profile_picture_description
     */
    const USER_PROFILE_PICTURE_DESCRIPTION = 'user_profile_picture_description';

    /**
     * show_password_fields
     */
    const SHOW_PASSWORD_FIELDS = 'show_password_fields';

    /**
     * additional_capabilities_display
     */
    const ADDITIONAL_CAPABILITIES_DISPLAY = 'additional_capabilities_display';

    /**
     * pre_user_login
     */
    const PRE_USER_LOGIN = 'pre_user_login';

    /**
     * autocomplete_users_for_site_admins
     */
    const AUTOCOMPLETE_USERS_FOR_SITE_ADMINS = 'autocomplete_users_for_site_admins';

    /**
     * heartbeat_nopriv_received
     */
    const HEARTBEAT_NOPRIV_RECEIVED = 'heartbeat_nopriv_received';

    /**
     * heartbeat_nopriv_send
     */
    const HEARTBEAT_NOPRIV_SEND = 'heartbeat_nopriv_send';

    /**
     * term_search_min_chars
     */
    const TERM_SEARCH_MIN_CHARS = 'term_search_min_chars';

    /**
     * wp_edit_nav_menu_walker
     */
    const WP_EDIT_NAV_MENU_WALKER = 'wp_edit_nav_menu_walker';

    /**
     * nav_menu_meta_box_object
     */
    const NAV_MENU_META_BOX_OBJECT = 'nav_menu_meta_box_object';

    /**
     * quick_edit_show_taxonomy
     */
    const QUICK_EDIT_SHOW_TAXONOMY = 'quick_edit_show_taxonomy';

    /**
     * wp_check_post_lock_window
     */
    const WP_CHECK_POST_LOCK_WINDOW = 'wp_check_post_lock_window';

    /**
     * ajax_query_attachments_args
     */
    const AJAX_QUERY_ATTACHMENTS_ARGS = 'ajax_query_attachments_args';

    /**
     * attachment_fields_to_save
     */
    const ATTACHMENT_FIELDS_TO_SAVE = 'attachment_fields_to_save';

    /**
     * media_send_to_editor
     */
    const MEDIA_SEND_TO_EDITOR = 'media_send_to_editor';

    /**
     * {$type}_send_to_editor_url
     */
    const TYPE_SEND_TO_EDITOR_URL = '{$type}_send_to_editor_url';

    /**
     * wp_refresh_nonces
     */
    const WP_REFRESH_NONCES = 'wp_refresh_nonces';

    /**
     * heartbeat_received
     */
    const HEARTBEAT_RECEIVED = 'heartbeat_received';

    /**
     * heartbeat_send
     */
    const HEARTBEAT_SEND = 'heartbeat_send';

    /**
     * install_themes_table_api_args_{$old_filter}
     */
    const INSTALL_THEMES_TABLE_API_ARGS_OLD_FILTER = 'install_themes_table_api_args_{$old_filter}';

    /**
     * wp_ajax_cropped_attachment_metadata
     */
    const WP_AJAX_CROPPED_ATTACHMENT_METADATA = 'wp_ajax_cropped_attachment_metadata';

    /**
     * wp_ajax_cropped_attachment_id
     */
    const WP_AJAX_CROPPED_ATTACHMENT_ID = 'wp_ajax_cropped_attachment_id';

    /**
     * the_title
     */
    const THE_TITLE = 'the_title';

    /**
     * comments_per_page
     */
    const COMMENTS_PER_PAGE = 'comments_per_page';

    /**
     * comment_status_links
     */
    const COMMENT_STATUS_LINKS = 'comment_status_links';

    /**
     * admin_comment_types_dropdown
     */
    const ADMIN_COMMENT_TYPES_DROPDOWN = 'admin_comment_types_dropdown';

    /**
     * comment_row_actions
     */
    const COMMENT_ROW_ACTIONS = 'comment_row_actions';

    /**
     * comment_edit_pre
     */
    const COMMENT_EDIT_PRE = 'comment_edit_pre';

    /**
     * comment_email
     */
    const COMMENT_EMAIL = 'comment_email';

    /**
     * views_{$this->screen->id}
     */
    const VIEWS_SCREEN_ID = 'views_{$this->screen->id}';

    /**
     * bulk_actions-{$this->screen->id}
     */
    const BULK_ACTIONS_SCREEN_ID = 'bulk_actions-{$this->screen->id}';

    /**
     * disable_months_dropdown
     */
    const DISABLE_MONTHS_DROPDOWN = 'disable_months_dropdown';

    /**
     * months_dropdown_results
     */
    const MONTHS_DROPDOWN_RESULTS = 'months_dropdown_results';

    /**
     * {$option}
     */
    const OPTION = '{$option}';

    /**
     * list_table_primary_column
     */
    const LIST_TABLE_PRIMARY_COLUMN = 'list_table_primary_column';

    /**
     * manage_{$this->screen->id}_sortable_columns
     */
    const MANAGE_SCREEN_ID_SORTABLE_COLUMNS = 'manage_{$this->screen->id}_sortable_columns';

    /**
     * manage_taxonomies_for_attachment_columns
     */
    const MANAGE_TAXONOMIES_FOR_ATTACHMENT_COLUMNS = 'manage_taxonomies_for_attachment_columns';

    /**
     * manage_media_columns
     */
    const MANAGE_MEDIA_COLUMNS = 'manage_media_columns';

    /**
     * media_row_actions
     */
    const MEDIA_ROW_ACTIONS = 'media_row_actions';

    /**
     * wpmu_blogs_columns
     */
    const WPMU_BLOGS_COLUMNS = 'wpmu_blogs_columns';

    /**
     * manage_sites_action_links
     */
    const MANAGE_SITES_ACTION_LINKS = 'manage_sites_action_links';

    /**
     * all_themes
     */
    const ALL_THEMES = 'all_themes';

    /**
     * theme_action_links
     */
    const THEME_ACTION_LINKS = 'theme_action_links';

    /**
     * theme_action_links_{$stylesheet}
     */
    const THEME_ACTION_LINKS_STYLESHEET = 'theme_action_links_{$stylesheet}';

    /**
     * theme_row_meta
     */
    const THEME_ROW_META = 'theme_row_meta';

    /**
     * users_list_table_query_args
     */
    const USERS_LIST_TABLE_QUERY_ARGS = 'users_list_table_query_args';

    /**
     * wpmu_users_columns
     */
    const WPMU_USERS_COLUMNS = 'wpmu_users_columns';

    /**
     * ms_user_list_site_actions
     */
    const MS_USER_LIST_SITE_ACTIONS = 'ms_user_list_site_actions';

    /**
     * manage_users_custom_column
     */
    const MANAGE_USERS_CUSTOM_COLUMN = 'manage_users_custom_column';

    /**
     * ms_user_row_actions
     */
    const MS_USER_ROW_ACTIONS = 'ms_user_row_actions';

    /**
     * install_plugins_tabs
     */
    const INSTALL_PLUGINS_TABS = 'install_plugins_tabs';

    /**
     * install_plugins_nonmenu_tabs
     */
    const INSTALL_PLUGINS_NONMENU_TABS = 'install_plugins_nonmenu_tabs';

    /**
     * install_plugins_table_api_args_{$tab}
     */
    const INSTALL_PLUGINS_TABLE_API_ARGS_TAB = 'install_plugins_table_api_args_{$tab}';

    /**
     * plugin_install_action_links
     */
    const PLUGIN_INSTALL_ACTION_LINKS = 'plugin_install_action_links';

    /**
     * all_plugins
     */
    const ALL_PLUGINS = 'all_plugins';

    /**
     * show_advanced_plugins
     */
    const SHOW_ADVANCED_PLUGINS = 'show_advanced_plugins';

    /**
     * show_network_active_plugins
     */
    const SHOW_NETWORK_ACTIVE_PLUGINS = 'show_network_active_plugins';

    /**
     * network_admin_plugin_action_links
     */
    const NETWORK_ADMIN_PLUGIN_ACTION_LINKS = 'network_admin_plugin_action_links';

    /**
     * network_admin_plugin_action_links_{$plugin_file}
     */
    const NETWORK_ADMIN_PLUGIN_ACTION_LINKS_PLUGIN_FILE = 'network_admin_plugin_action_links_{$plugin_file}';

    /**
     * plugin_action_links
     */
    const PLUGIN_ACTION_LINKS = 'plugin_action_links';

    /**
     * plugin_action_links_{$plugin_file}
     */
    const PLUGIN_ACTION_LINKS_PLUGIN_FILE = 'plugin_action_links_{$plugin_file}';

    /**
     * plugin_row_meta
     */
    const PLUGIN_ROW_META = 'plugin_row_meta';

    /**
     * edit_posts_per_page
     */
    const EDIT_POSTS_PER_PAGE = 'edit_posts_per_page';

    /**
     * manage_taxonomies_for_{$post_type}_columns
     */
    const MANAGE_TAXONOMIES_FOR_POST_TYPE_COLUMNS = 'manage_taxonomies_for_{$post_type}_columns';

    /**
     * manage_pages_columns
     */
    const MANAGE_PAGES_COLUMNS = 'manage_pages_columns';

    /**
     * manage_posts_columns
     */
    const MANAGE_POSTS_COLUMNS = 'manage_posts_columns';

    /**
     * manage_{$post_type}_posts_columns
     */
    const MANAGE_POST_TYPE_POSTS_COLUMNS = 'manage_{$post_type}_posts_columns';

    /**
     * post_date_column_time
     */
    const POST_DATE_COLUMN_TIME = 'post_date_column_time';

    /**
     * page_row_actions
     */
    const PAGE_ROW_ACTIONS = 'page_row_actions';

    /**
     * post_row_actions
     */
    const POST_ROW_ACTIONS = 'post_row_actions';

    /**
     * quick_edit_dropdown_pages_args
     */
    const QUICK_EDIT_DROPDOWN_PAGES_ARGS = 'quick_edit_dropdown_pages_args';

    /**
     * default_page_template_title
     */
    const DEFAULT_PAGE_TEMPLATE_TITLE = 'default_page_template_title';

    /**
     * press_this_redirect_in_parent
     */
    const PRESS_THIS_REDIRECT_IN_PARENT = 'press_this_redirect_in_parent';

    /**
     * press_this_save_redirect
     */
    const PRESS_THIS_SAVE_REDIRECT = 'press_this_save_redirect';

    /**
     * enable_press_this_media_discovery
     */
    const ENABLE_PRESS_THIS_MEDIA_DISCOVERY = 'enable_press_this_media_discovery';

    /**
     * press_this_data
     */
    const PRESS_THIS_DATA = 'press_this_data';

    /**
     * press_this_suggested_html
     */
    const PRESS_THIS_SUGGESTED_HTML = 'press_this_suggested_html';

    /**
     * contextual_help_list
     */
    const CONTEXTUAL_HELP_LIST = 'contextual_help_list';

    /**
     * contextual_help
     */
    const CONTEXTUAL_HELP = 'contextual_help';

    /**
     * default_contextual_help
     */
    const DEFAULT_CONTEXTUAL_HELP = 'default_contextual_help';

    /**
     * screen_layout_columns
     */
    const SCREEN_LAYOUT_COLUMNS = 'screen_layout_columns';

    /**
     * screen_settings
     */
    const SCREEN_SETTINGS = 'screen_settings';

    /**
     * screen_options_show_screen
     */
    const SCREEN_OPTIONS_SHOW_SCREEN = 'screen_options_show_screen';

    /**
     * screen_options_show_submit
     */
    const SCREEN_OPTIONS_SHOW_SUBMIT = 'screen_options_show_submit';

    /**
     * edit_categories_per_page
     */
    const EDIT_CATEGORIES_PER_PAGE = 'edit_categories_per_page';

    /**
     * view_mode_post_types
     */
    const VIEW_MODE_POST_TYPES = 'view_mode_post_types';

    /**
     * site_icon_attachment_metadata
     */
    const SITE_ICON_ATTACHMENT_METADATA = 'site_icon_attachment_metadata';

    /**
     * site_icon_image_sizes
     */
    const SITE_ICON_IMAGE_SIZES = 'site_icon_image_sizes';

    /**
     * edit_tags_per_page
     */
    const EDIT_TAGS_PER_PAGE = 'edit_tags_per_page';

    /**
     * tagsperpage
     */
    const TAGSPERPAGE = 'tagsperpage';

    /**
     * term_name
     */
    const TERM_NAME = 'term_name';

    /**
     * tag_row_actions
     */
    const TAG_ROW_ACTIONS = 'tag_row_actions';

    /**
     * {$taxonomy}_row_actions
     */
    const TAXONOMY_ROW_ACTIONS = '{$taxonomy}_row_actions';

    /**
     * manage_{$this->screen->taxonomy}_custom_column
     */
    const MANAGE_SCREEN_TAXONOMY_CUSTOM_COLUMN = 'manage_{$this->screen->taxonomy}_custom_column';

    /**
     * install_themes_nonmenu_tabs
     */
    const INSTALL_THEMES_NONMENU_TABS = 'install_themes_nonmenu_tabs';

    /**
     * install_themes_table_api_args_{$tab}
     */
    const INSTALL_THEMES_TABLE_API_ARGS_TAB = 'install_themes_table_api_args_{$tab}';

    /**
     * theme_install_actions
     */
    const THEME_INSTALL_ACTIONS = 'theme_install_actions';

    /**
     * update_plugin_complete_actions
     */
    const UPDATE_PLUGIN_COMPLETE_ACTIONS = 'update_plugin_complete_actions';

    /**
     * update_bulk_plugins_complete_actions
     */
    const UPDATE_BULK_PLUGINS_COMPLETE_ACTIONS = 'update_bulk_plugins_complete_actions';

    /**
     * update_bulk_theme_complete_actions
     */
    const UPDATE_BULK_THEME_COMPLETE_ACTIONS = 'update_bulk_theme_complete_actions';

    /**
     * install_plugin_complete_actions
     */
    const INSTALL_PLUGIN_COMPLETE_ACTIONS = 'install_plugin_complete_actions';

    /**
     * install_theme_complete_actions
     */
    const INSTALL_THEME_COMPLETE_ACTIONS = 'install_theme_complete_actions';

    /**
     * update_theme_complete_actions
     */
    const UPDATE_THEME_COMPLETE_ACTIONS = 'update_theme_complete_actions';

    /**
     * update_translations_complete_actions
     */
    const UPDATE_TRANSLATIONS_COMPLETE_ACTIONS = 'update_translations_complete_actions';

    /**
     * upgrader_pre_download
     */
    const UPGRADER_PRE_DOWNLOAD = 'upgrader_pre_download';

    /**
     * upgrader_pre_install
     */
    const UPGRADER_PRE_INSTALL = 'upgrader_pre_install';

    /**
     * upgrader_source_selection
     */
    const UPGRADER_SOURCE_SELECTION = 'upgrader_source_selection';

    /**
     * upgrader_clear_destination
     */
    const UPGRADER_CLEAR_DESTINATION = 'upgrader_clear_destination';

    /**
     * upgrader_post_install
     */
    const UPGRADER_POST_INSTALL = 'upgrader_post_install';

    /**
     * upgrader_package_options
     */
    const UPGRADER_PACKAGE_OPTIONS = 'upgrader_package_options';

    /**
     * async_update_translation
     */
    const ASYNC_UPDATE_TRANSLATION = 'async_update_translation';

    /**
     * update_feedback
     */
    const UPDATE_FEEDBACK = 'update_feedback';

    /**
     * allow_dev_auto_core_updates
     */
    const ALLOW_DEV_AUTO_CORE_UPDATES = 'allow_dev_auto_core_updates';

    /**
     * allow_minor_auto_core_updates
     */
    const ALLOW_MINOR_AUTO_CORE_UPDATES = 'allow_minor_auto_core_updates';

    /**
     * allow_major_auto_core_updates
     */
    const ALLOW_MAJOR_AUTO_CORE_UPDATES = 'allow_major_auto_core_updates';

    /**
     * automatic_updater_disabled
     */
    const AUTOMATIC_UPDATER_DISABLED = 'automatic_updater_disabled';

    /**
     * automatic_updates_is_vcs_checkout
     */
    const AUTOMATIC_UPDATES_IS_VCS_CHECKOUT = 'automatic_updates_is_vcs_checkout';

    /**
     * auto_update_{$type}
     */
    const AUTO_UPDATE_TYPE = 'auto_update_{$type}';

    /**
     * send_core_update_notification_email
     */
    const SEND_CORE_UPDATE_NOTIFICATION_EMAIL = 'send_core_update_notification_email';

    /**
     * automatic_updates_send_debug_email
     */
    const AUTOMATIC_UPDATES_SEND_DEBUG_EMAIL = 'automatic_updates_send_debug_email';

    /**
     * auto_core_update_send_email
     */
    const AUTO_CORE_UPDATE_SEND_EMAIL = 'auto_core_update_send_email';

    /**
     * auto_core_update_email
     */
    const AUTO_CORE_UPDATE_EMAIL = 'auto_core_update_email';

    /**
     * automatic_updates_debug_email
     */
    const AUTOMATIC_UPDATES_DEBUG_EMAIL = 'automatic_updates_debug_email';

    /**
     * user_row_actions
     */
    const USER_ROW_ACTIONS = 'user_row_actions';

    /**
     * get_role_list
     */
    const GET_ROLE_LIST = 'get_role_list';

    /**
     * wp_network_dashboard_widgets
     */
    const WP_NETWORK_DASHBOARD_WIDGETS = 'wp_network_dashboard_widgets';

    /**
     * wp_user_dashboard_widgets
     */
    const WP_USER_DASHBOARD_WIDGETS = 'wp_user_dashboard_widgets';

    /**
     * wp_dashboard_widgets
     */
    const WP_DASHBOARD_WIDGETS = 'wp_dashboard_widgets';

    /**
     * dashboard_glance_items
     */
    const DASHBOARD_GLANCE_ITEMS = 'dashboard_glance_items';

    /**
     * privacy_on_link_title
     */
    const PRIVACY_ON_LINK_TITLE = 'privacy_on_link_title';

    /**
     * privacy_on_link_text
     */
    const PRIVACY_ON_LINK_TEXT = 'privacy_on_link_text';

    /**
     * dashboard_recent_drafts_query_args
     */
    const DASHBOARD_RECENT_DRAFTS_QUERY_ARGS = 'dashboard_recent_drafts_query_args';

    /**
     * dashboard_recent_posts_query_args
     */
    const DASHBOARD_RECENT_POSTS_QUERY_ARGS = 'dashboard_recent_posts_query_args';

    /**
     * dashboard_primary_link
     */
    const DASHBOARD_PRIMARY_LINK = 'dashboard_primary_link';

    /**
     * dashboard_primary_feed
     */
    const DASHBOARD_PRIMARY_FEED = 'dashboard_primary_feed';

    /**
     * dashboard_primary_title
     */
    const DASHBOARD_PRIMARY_TITLE = 'dashboard_primary_title';

    /**
     * dashboard_secondary_link
     */
    const DASHBOARD_SECONDARY_LINK = 'dashboard_secondary_link';

    /**
     * dashboard_secondary_feed
     */
    const DASHBOARD_SECONDARY_FEED = 'dashboard_secondary_feed';

    /**
     * dashboard_secondary_title
     */
    const DASHBOARD_SECONDARY_TITLE = 'dashboard_secondary_title';

    /**
     * dashboard_secondary_items
     */
    const DASHBOARD_SECONDARY_ITEMS = 'dashboard_secondary_items';

    /**
     * browse-happy-notice
     */
    const BROWSE_HAPPY_NOTICE = 'browse-happy-notice';

    /**
     * get_editable_authors
     */
    const GET_EDITABLE_AUTHORS = 'get_editable_authors';

    /**
     * get_others_drafts
     */
    const GET_OTHERS_DRAFTS = 'get_others_drafts';

    /**
     * wp_create_thumbnail
     */
    const WP_CREATE_THUMBNAIL = 'wp_create_thumbnail';

    /**
     * term_updated_messages
     */
    const TERM_UPDATED_MESSAGES = 'term_updated_messages';

    /**
     * export_wp_filename
     */
    const EXPORT_WP_FILENAME = 'export_wp_filename';

    /**
     * the_title_rss
     */
    const THE_TITLE_RSS = 'the_title_rss';

    /**
     * the_content_export
     */
    const THE_CONTENT_EXPORT = 'the_content_export';

    /**
     * the_excerpt_export
     */
    const THE_EXCERPT_EXPORT = 'the_excerpt_export';

    /**
     * wxr_export_skip_postmeta
     */
    const WXR_EXPORT_SKIP_POSTMETA = 'wxr_export_skip_postmeta';

    /**
     * wxr_export_skip_commentmeta
     */
    const WXR_EXPORT_SKIP_COMMENTMETA = 'wxr_export_skip_commentmeta';

    /**
     * {$action}_prefilter
     */
    const ACTION_PREFILTER = '{$action}_prefilter';

    /**
     * wp_handle_upload
     */
    const WP_HANDLE_UPLOAD = 'wp_handle_upload';

    /**
     * unzip_file_use_ziparchive
     */
    const UNZIP_FILE_USE_ZIPARCHIVE = 'unzip_file_use_ziparchive';

    /**
     * filesystem_method_file
     */
    const FILESYSTEM_METHOD_FILE = 'filesystem_method_file';

    /**
     * filesystem_method
     */
    const FILESYSTEM_METHOD = 'filesystem_method';

    /**
     * request_filesystem_credentials
     */
    const REQUEST_FILESYSTEM_CREDENTIALS = 'request_filesystem_credentials';

    /**
     * fs_ftp_connection_types
     */
    const FS_FTP_CONNECTION_TYPES = 'fs_ftp_connection_types';

    /**
     * image_editor_save_pre
     */
    const IMAGE_EDITOR_SAVE_PRE = 'image_editor_save_pre';

    /**
     * image_save_pre
     */
    const IMAGE_SAVE_PRE = 'image_save_pre';

    /**
     * wp_save_image_editor_file
     */
    const WP_SAVE_IMAGE_EDITOR_FILE = 'wp_save_image_editor_file';

    /**
     * wp_save_image_file
     */
    const WP_SAVE_IMAGE_FILE = 'wp_save_image_file';

    /**
     * jpeg_quality
     */
    const JPEG_QUALITY = 'jpeg_quality';

    /**
     * wp_image_editor_before_change
     */
    const WP_IMAGE_EDITOR_BEFORE_CHANGE = 'wp_image_editor_before_change';

    /**
     * image_edit_before_change
     */
    const IMAGE_EDIT_BEFORE_CHANGE = 'image_edit_before_change';

    /**
     * intermediate_image_sizes_advanced
     */
    const INTERMEDIATE_IMAGE_SIZES_ADVANCED = 'intermediate_image_sizes_advanced';

    /**
     * attachment_thumbnail_args
     */
    const ATTACHMENT_THUMBNAIL_ARGS = 'attachment_thumbnail_args';

    /**
     * wp_generate_attachment_metadata
     */
    const WP_GENERATE_ATTACHMENT_METADATA = 'wp_generate_attachment_metadata';

    /**
     * wp_read_image_metadata_types
     */
    const WP_READ_IMAGE_METADATA_TYPES = 'wp_read_image_metadata_types';

    /**
     * wp_read_image_metadata
     */
    const WP_READ_IMAGE_METADATA = 'wp_read_image_metadata';

    /**
     * file_is_displayable_image
     */
    const FILE_IS_DISPLAYABLE_IMAGE = 'file_is_displayable_image';

    /**
     * load_image_to_edit
     */
    const LOAD_IMAGE_TO_EDIT = 'load_image_to_edit';

    /**
     * load_image_to_edit_filesystempath
     */
    const LOAD_IMAGE_TO_EDIT_FILESYSTEMPATH = 'load_image_to_edit_filesystempath';

    /**
     * load_image_to_edit_attachmenturl
     */
    const LOAD_IMAGE_TO_EDIT_ATTACHMENTURL = 'load_image_to_edit_attachmenturl';

    /**
     * load_image_to_edit_path
     */
    const LOAD_IMAGE_TO_EDIT_PATH = 'load_image_to_edit_path';

    /**
     * media_upload_tabs
     */
    const MEDIA_UPLOAD_TABS = 'media_upload_tabs';

    /**
     * image_send_to_editor
     */
    const IMAGE_SEND_TO_EDITOR = 'image_send_to_editor';

    /**
     * image_add_caption_text
     */
    const IMAGE_ADD_CAPTION_TEXT = 'image_add_caption_text';

    /**
     * disable_captions
     */
    const DISABLE_CAPTIONS = 'disable_captions';

    /**
     * image_add_caption_shortcode
     */
    const IMAGE_ADD_CAPTION_SHORTCODE = 'image_add_caption_shortcode';

    /**
     * media_buttons_context
     */
    const MEDIA_BUTTONS_CONTEXT = 'media_buttons_context';

    /**
     * {$type}_upload_iframe_src
     */
    const TYPE_UPLOAD_IFRAME_SRC = '{$type}_upload_iframe_src';

    /**
     * image_send_to_editor_url
     */
    const IMAGE_SEND_TO_EDITOR_URL = 'image_send_to_editor_url';

    /**
     * attachment_fields_to_edit
     */
    const ATTACHMENT_FIELDS_TO_EDIT = 'attachment_fields_to_edit';

    /**
     * get_media_item_args
     */
    const GET_MEDIA_ITEM_ARGS = 'get_media_item_args';

    /**
     * media_meta
     */
    const MEDIA_META = 'media_meta';

    /**
     * upload_post_params
     */
    const UPLOAD_POST_PARAMS = 'upload_post_params';

    /**
     * plupload_init
     */
    const PLUPLOAD_INIT = 'plupload_init';

    /**
     * media_upload_form_url
     */
    const MEDIA_UPLOAD_FORM_URL = 'media_upload_form_url';

    /**
     * type_url_form_media
     */
    const TYPE_URL_FORM_MEDIA = 'type_url_form_media';

    /**
     * media_upload_mime_type_links
     */
    const MEDIA_UPLOAD_MIME_TYPE_LINKS = 'media_upload_mime_type_links';

    /**
     * media_submitbox_misc_sections
     */
    const MEDIA_SUBMITBOX_MISC_SECTIONS = 'media_submitbox_misc_sections';

    /**
     * audio_submitbox_misc_sections
     */
    const AUDIO_SUBMITBOX_MISC_SECTIONS = 'audio_submitbox_misc_sections';

    /**
     * add_menu_classes
     */
    const ADD_MENU_CLASSES = 'add_menu_classes';

    /**
     * custom_menu_order
     */
    const CUSTOM_MENU_ORDER = 'custom_menu_order';

    /**
     * menu_order
     */
    const MENU_ORDER = 'menu_order';

    /**
     * post_edit_category_parent_dropdown_args
     */
    const POST_EDIT_CATEGORY_PARENT_DROPDOWN_ARGS = 'post_edit_category_parent_dropdown_args';

    /**
     * page_attributes_dropdown_pages_args
     */
    const PAGE_ATTRIBUTES_DROPDOWN_PAGES_ARGS = 'page_attributes_dropdown_pages_args';

    /**
     * got_rewrite
     */
    const GOT_REWRITE = 'got_rewrite';

    /**
     * got_url_rewrite
     */
    const GOT_URL_REWRITE = 'got_url_rewrite';

    /**
     * documentation_ignore_functions
     */
    const DOCUMENTATION_IGNORE_FUNCTIONS = 'documentation_ignore_functions';

    /**
     * set-screen-option
     */
    const SET_SCREEN_OPTION = 'set-screen-option';

    /**
     * wpmu_drop_tables
     */
    const WPMU_DROP_TABLES = 'wpmu_drop_tables';

    /**
     * wpmu_delete_blog_upload_dir
     */
    const WPMU_DELETE_BLOG_UPLOAD_DIR = 'wpmu_delete_blog_upload_dir';

    /**
     * new_admin_email_content
     */
    const NEW_ADMIN_EMAIL_CONTENT = 'new_admin_email_content';

    /**
     * new_user_email_content
     */
    const NEW_USER_EMAIL_CONTENT = 'new_user_email_content';

    /**
     * lang_codes
     */
    const LANG_CODES = 'lang_codes';

    /**
     * mu_dropdown_languages
     */
    const MU_DROPDOWN_LANGUAGES = 'mu_dropdown_languages';

    /**
     * can_edit_network
     */
    const CAN_EDIT_NETWORK = 'can_edit_network';

    /**
     * nav_menu_items_{$post_type_name}_recent
     */
    const NAV_MENU_ITEMS_POST_TYPE_NAME_RECENT = 'nav_menu_items_{$post_type_name}_recent';

    /**
     * nav_menu_items_{$post_type_name}
     */
    const NAV_MENU_ITEMS_POST_TYPE_NAME = 'nav_menu_items_{$post_type_name}';

    /**
     * allow_subdirectory_install
     */
    const ALLOW_SUBDIRECTORY_INSTALL = 'allow_subdirectory_install';

    /**
     * plugins_api_args
     */
    const PLUGINS_API_ARGS = 'plugins_api_args';

    /**
     * plugins_api
     */
    const PLUGINS_API = 'plugins_api';

    /**
     * plugins_api_result
     */
    const PLUGINS_API_RESULT = 'plugins_api_result';

    /**
     * default_content
     */
    const DEFAULT_CONTENT = 'default_content';

    /**
     * default_title
     */
    const DEFAULT_TITLE = 'default_title';

    /**
     * default_excerpt
     */
    const DEFAULT_EXCERPT = 'default_excerpt';

    /**
     * edit_{$post_type}_per_page
     */
    const EDIT_POST_TYPE_PER_PAGE = 'edit_{$post_type}_per_page';

    /**
     * upload_per_page
     */
    const UPLOAD_PER_PAGE = 'upload_per_page';

    /**
     * postbox_classes_{$page}_{$id}
     */
    const POSTBOX_CLASSES_PAGE_ID = 'postbox_classes_{$page}_{$id}';

    /**
     * get_sample_permalink
     */
    const GET_SAMPLE_PERMALINK = 'get_sample_permalink';

    /**
     * get_sample_permalink_html
     */
    const GET_SAMPLE_PERMALINK_HTML = 'get_sample_permalink_html';

    /**
     * admin_post_thumbnail_size
     */
    const ADMIN_POST_THUMBNAIL_SIZE = 'admin_post_thumbnail_size';

    /**
     * admin_post_thumbnail_html
     */
    const ADMIN_POST_THUMBNAIL_HTML = 'admin_post_thumbnail_html';

    /**
     * show_post_locked_dialog
     */
    const SHOW_POST_LOCKED_DIALOG = 'show_post_locked_dialog';

    /**
     * override_post_lock
     */
    const OVERRIDE_POST_LOCK = 'override_post_lock';

    /**
     * redirect_post_location
     */
    const REDIRECT_POST_LOCATION = 'redirect_post_location';

    /**
     * _wp_post_revision_field_{$field}
     */
    const _WP_POST_REVISION_FIELD_FIELD = '_wp_post_revision_field_{$field}';

    /**
     * revision_text_diff_options
     */
    const REVISION_TEXT_DIFF_OPTIONS = 'revision_text_diff_options';

    /**
     * wp_get_revision_ui_diff
     */
    const WP_GET_REVISION_UI_DIFF = 'wp_get_revision_ui_diff';

    /**
     * wp_prepare_revision_for_js
     */
    const WP_PREPARE_REVISION_FOR_JS = 'wp_prepare_revision_for_js';

    /**
     * populate_network_meta
     */
    const POPULATE_NETWORK_META = 'populate_network_meta';

    /**
     * manage_{$screen->id}_columns
     */
    const MANAGE_SCREEN_ID_COLUMNS = 'manage_{$screen->id}_columns';

    /**
     * default_hidden_columns
     */
    const DEFAULT_HIDDEN_COLUMNS = 'default_hidden_columns';

    /**
     * hidden_columns
     */
    const HIDDEN_COLUMNS = 'hidden_columns';

    /**
     * default_hidden_meta_boxes
     */
    const DEFAULT_HIDDEN_META_BOXES = 'default_hidden_meta_boxes';

    /**
     * hidden_meta_boxes
     */
    const HIDDEN_META_BOXES = 'hidden_meta_boxes';

    /**
     * terms_to_edit
     */
    const TERMS_TO_EDIT = 'terms_to_edit';

    /**
     * wp_terms_checklist_args
     */
    const WP_TERMS_CHECKLIST_ARGS = 'wp_terms_checklist_args';

    /**
     * wp_comment_reply
     */
    const WP_COMMENT_REPLY = 'wp_comment_reply';

    /**
     * postmeta_form_keys
     */
    const POSTMETA_FORM_KEYS = 'postmeta_form_keys';

    /**
     * postmeta_form_limit
     */
    const POSTMETA_FORM_LIMIT = 'postmeta_form_limit';

    /**
     * import_upload_size_limit
     */
    const IMPORT_UPLOAD_SIZE_LIMIT = 'import_upload_size_limit';

    /**
     * display_post_states
     */
    const DISPLAY_POST_STATES = 'display_post_states';

    /**
     * display_media_states
     */
    const DISPLAY_MEDIA_STATES = 'display_media_states';

    /**
     * themes_api_args
     */
    const THEMES_API_ARGS = 'themes_api_args';

    /**
     * themes_api
     */
    const THEMES_API = 'themes_api';

    /**
     * themes_api_result
     */
    const THEMES_API_RESULT = 'themes_api_result';

    /**
     * pre_prepare_themes_for_js
     */
    const PRE_PREPARE_THEMES_FOR_JS = 'pre_prepare_themes_for_js';

    /**
     * wp_prepare_themes_for_js
     */
    const WP_PREPARE_THEMES_FOR_JS = 'wp_prepare_themes_for_js';

    /**
     * translations_api
     */
    const TRANSLATIONS_API = 'translations_api';

    /**
     * translations_api_result
     */
    const TRANSLATIONS_API_RESULT = 'translations_api_result';

    /**
     * update_right_now_text
     */
    const UPDATE_RIGHT_NOW_TEXT = 'update_right_now_text';

    /**
     * dbdelta_queries
     */
    const DBDELTA_QUERIES = 'dbdelta_queries';

    /**
     * dbdelta_create_queries
     */
    const DBDELTA_CREATE_QUERIES = 'dbdelta_create_queries';

    /**
     * dbdelta_insert_queries
     */
    const DBDELTA_INSERT_QUERIES = 'dbdelta_insert_queries';

    /**
     * wp_should_upgrade_global_tables
     */
    const WP_SHOULD_UPGRADE_GLOBAL_TABLES = 'wp_should_upgrade_global_tables';

    /**
     * illegal_user_logins
     */
    const ILLEGAL_USER_LOGINS = 'illegal_user_logins';

    /**
     * editable_roles
     */
    const EDITABLE_ROLES = 'editable_roles';

    /**
     * get_users_drafts
     */
    const GET_USERS_DRAFTS = 'get_users_drafts';

    /**
     * post_types_to_delete_with_user
     */
    const POST_TYPES_TO_DELETE_WITH_USER = 'post_types_to_delete_with_user';

    /**
     * tables_to_repair
     */
    const TABLES_TO_REPAIR = 'tables_to_repair';

    /**
     * redirect_network_admin_request
     */
    const REDIRECT_NETWORK_ADMIN_REQUEST = 'redirect_network_admin_request';

    /**
     * mu_menu_items
     */
    const MU_MENU_ITEMS = 'mu_menu_items';

    /**
     * show_network_site_users_add_existing_form
     */
    const SHOW_NETWORK_SITE_USERS_ADD_EXISTING_FORM = 'show_network_site_users_add_existing_form';

    /**
     * show_network_site_users_add_new_form
     */
    const SHOW_NETWORK_SITE_USERS_ADD_NEW_FORM = 'show_network_site_users_add_new_form';

    /**
     * network_sites_updated_message_{$updated}
     */
    const NETWORK_SITES_UPDATED_MESSAGE_UPDATED = 'network_sites_updated_message_{$updated}';

    /**
     * redirect_user_admin_request
     */
    const REDIRECT_USER_ADMIN_REQUEST = 'redirect_user_admin_request';

    /**
     * akismet_show_user_comments_approved
     */
    const AKISMET_SHOW_USER_COMMENTS_APPROVED = 'akismet_show_user_comments_approved';

    /**
     * akismet_spam_check_warning_link_text
     */
    const AKISMET_SPAM_CHECK_WARNING_LINK_TEXT = 'akismet_spam_check_warning_link_text';

    /**
     * akismet_comment_nonce
     */
    const AKISMET_COMMENT_NONCE = 'akismet_comment_nonce';

    /**
     * akismet_get_api_key
     */
    const AKISMET_GET_API_KEY = 'akismet_get_api_key';

    /**
     * akismet_spam_count_incr
     */
    const AKISMET_SPAM_COUNT_INCR = 'akismet_spam_count_incr';

    /**
     * akismet_delete_comment_limit
     */
    const AKISMET_DELETE_COMMENT_LIMIT = 'akismet_delete_comment_limit';

    /**
     * akismet_delete_comment_interval
     */
    const AKISMET_DELETE_COMMENT_INTERVAL = 'akismet_delete_comment_interval';

    /**
     * akismet_optimize_table
     */
    const AKISMET_OPTIMIZE_TABLE = 'akismet_optimize_table';

    /**
     * akismet_delete_commentmeta_interval
     */
    const AKISMET_DELETE_COMMENTMETA_INTERVAL = 'akismet_delete_commentmeta_interval';

    /**
     * akismet_ua
     */
    const AKISMET_UA = 'akismet_ua';

    /**
     * akismet_view_arguments
     */
    const AKISMET_VIEW_ARGUMENTS = 'akismet_view_arguments';

    /**
     * akismet_debug_log
     */
    const AKISMET_DEBUG_LOG = 'akismet_debug_log';

    /**
     * twentyfifteen_author_bio_avatar_size
     */
    const TWENTYFIFTEEN_AUTHOR_BIO_AVATAR_SIZE = 'twentyfifteen_author_bio_avatar_size';

    /**
     * twentyfifteen_custom_background_args
     */
    const TWENTYFIFTEEN_CUSTOM_BACKGROUND_ARGS = 'twentyfifteen_custom_background_args';

    /**
     * twentyfifteen_attachment_size
     */
    const TWENTYFIFTEEN_ATTACHMENT_SIZE = 'twentyfifteen_attachment_size';

    /**
     * twentyfifteen_custom_header_args
     */
    const TWENTYFIFTEEN_CUSTOM_HEADER_ARGS = 'twentyfifteen_custom_header_args';

    /**
     * twentyfifteen_color_schemes
     */
    const TWENTYFIFTEEN_COLOR_SCHEMES = 'twentyfifteen_color_schemes';

    /**
     * the_permalink
     */
    const THE_PERMALINK = 'the_permalink';

    /**
     * twentyfourteen_custom_background_args
     */
    const TWENTYFOURTEEN_CUSTOM_BACKGROUND_ARGS = 'twentyfourteen_custom_background_args';

    /**
     * twentyfourteen_get_featured_posts
     */
    const TWENTYFOURTEEN_GET_FEATURED_POSTS = 'twentyfourteen_get_featured_posts';

    /**
     * twentyfourteen_attachment_size
     */
    const TWENTYFOURTEEN_ATTACHMENT_SIZE = 'twentyfourteen_attachment_size';

    /**
     * twentyfourteen_custom_header_args
     */
    const TWENTYFOURTEEN_CUSTOM_HEADER_ARGS = 'twentyfourteen_custom_header_args';

    /**
     * widget_title
     */
    const WIDGET_TITLE = 'widget_title';

    /**
     * twentysixteen_content_width
     */
    const TWENTYSIXTEEN_CONTENT_WIDTH = 'twentysixteen_content_width';

    /**
     * twentysixteen_custom_header_sizes
     */
    const TWENTYSIXTEEN_CUSTOM_HEADER_SIZES = 'twentysixteen_custom_header_sizes';

    /**
     * twentysixteen_attachment_size
     */
    const TWENTYSIXTEEN_ATTACHMENT_SIZE = 'twentysixteen_attachment_size';

    /**
     * twentysixteen_custom_background_args
     */
    const TWENTYSIXTEEN_CUSTOM_BACKGROUND_ARGS = 'twentysixteen_custom_background_args';

    /**
     * twentysixteen_custom_header_args
     */
    const TWENTYSIXTEEN_CUSTOM_HEADER_ARGS = 'twentysixteen_custom_header_args';

    /**
     * twentysixteen_color_schemes
     */
    const TWENTYSIXTEEN_COLOR_SCHEMES = 'twentysixteen_color_schemes';

    /**
     * twentysixteen_author_avatar_size
     */
    const TWENTYSIXTEEN_AUTHOR_AVATAR_SIZE = 'twentysixteen_author_avatar_size';

    /**
     * twentysixteen_author_bio_avatar_size
     */
    const TWENTYSIXTEEN_AUTHOR_BIO_AVATAR_SIZE = 'twentysixteen_author_bio_avatar_size';

    /**
     * wp_admin_bar_class
     */
    const WP_ADMIN_BAR_CLASS = 'wp_admin_bar_class';

    /**
     * show_admin_bar
     */
    const SHOW_ADMIN_BAR = 'show_admin_bar';

    /**
     * the_author
     */
    const THE_AUTHOR = 'the_author';

    /**
     * the_modified_author
     */
    const THE_MODIFIED_AUTHOR = 'the_modified_author';

    /**
     * get_the_author_{$field}
     */
    const GET_THE_AUTHOR_FIELD = 'get_the_author_{$field}';

    /**
     * the_author_{$field}
     */
    const THE_AUTHOR_FIELD = 'the_author_{$field}';

    /**
     * the_author_posts_link
     */
    const THE_AUTHOR_POSTS_LINK = 'the_author_posts_link';

    /**
     * author_link
     */
    const AUTHOR_LINK = 'author_link';

    /**
     * is_multi_author
     */
    const IS_MULTI_AUTHOR = 'is_multi_author';

    /**
     * wp_list_bookmarks
     */
    const WP_LIST_BOOKMARKS = 'wp_list_bookmarks';

    /**
     * get_bookmarks
     */
    const GET_BOOKMARKS = 'get_bookmarks';

    /**
     * edit_{$field}
     */
    const EDIT_FIELD = 'edit_{$field}';

    /**
     * pre_{$field}
     */
    const PRE_FIELD = 'pre_{$field}';

    /**
     * {$field}
     */
    const FIELD = '{$field}';

    /**
     * redirect_canonical
     */
    const REDIRECT_CANONICAL = 'redirect_canonical';

    /**
     * auth_post_meta_{$meta_key}
     */
    const AUTH_POST_META_META_KEY = 'auth_post_meta_{$meta_key}';

    /**
     * map_meta_cap
     */
    const MAP_META_CAP = 'map_meta_cap';

    /**
     * get_the_categories
     */
    const GET_THE_CATEGORIES = 'get_the_categories';

    /**
     * the_category_list
     */
    const THE_CATEGORY_LIST = 'the_category_list';

    /**
     * list_cats
     */
    const LIST_CATS = 'list_cats';

    /**
     * wp_dropdown_cats
     */
    const WP_DROPDOWN_CATS = 'wp_dropdown_cats';

    /**
     * wp_list_categories
     */
    const WP_LIST_CATEGORIES = 'wp_list_categories';

    /**
     * wp_tag_cloud
     */
    const WP_TAG_CLOUD = 'wp_tag_cloud';

    /**
     * tag_cloud_sort
     */
    const TAG_CLOUD_SORT = 'tag_cloud_sort';

    /**
     * wp_generate_tag_cloud_data
     */
    const WP_GENERATE_TAG_CLOUD_DATA = 'wp_generate_tag_cloud_data';

    /**
     * wp_generate_tag_cloud
     */
    const WP_GENERATE_TAG_CLOUD = 'wp_generate_tag_cloud';

    /**
     * get_the_tags
     */
    const GET_THE_TAGS = 'get_the_tags';

    /**
     * the_tags
     */
    const THE_TAGS = 'the_tags';

    /**
     * get_the_terms
     */
    const GET_THE_TERMS = 'get_the_terms';

    /**
     * term_links-{$taxonomy}
     */
    const TERM_LINKS_TAXONOMY = 'term_links-{$taxonomy}';

    /**
     * the_terms
     */
    const THE_TERMS = 'the_terms';

    /**
     * get_categories_taxonomy
     */
    const GET_CATEGORIES_TAXONOMY = 'get_categories_taxonomy';

    /**
     * get_tags
     */
    const GET_TAGS = 'get_tags';

    /**
     * xmlrpc_element_limit
     */
    const XMLRPC_ELEMENT_LIMIT = 'xmlrpc_element_limit';

    /**
     * xmlrpc_chunk_parsing_size
     */
    const XMLRPC_CHUNK_PARSING_SIZE = 'xmlrpc_chunk_parsing_size';

    /**
     * wp_feed_cache_transient_lifetime
     */
    const WP_FEED_CACHE_TRANSIENT_LIFETIME = 'wp_feed_cache_transient_lifetime';

    /**
     * http_request_timeout
     */
    const HTTP_REQUEST_TIMEOUT = 'http_request_timeout';

    /**
     * http_request_redirection_count
     */
    const HTTP_REQUEST_REDIRECTION_COUNT = 'http_request_redirection_count';

    /**
     * http_request_version
     */
    const HTTP_REQUEST_VERSION = 'http_request_version';

    /**
     * http_headers_useragent
     */
    const HTTP_HEADERS_USERAGENT = 'http_headers_useragent';

    /**
     * http_request_reject_unsafe_urls
     */
    const HTTP_REQUEST_REJECT_UNSAFE_URLS = 'http_request_reject_unsafe_urls';

    /**
     * http_request_args
     */
    const HTTP_REQUEST_ARGS = 'http_request_args';

    /**
     * pre_http_request
     */
    const PRE_HTTP_REQUEST = 'pre_http_request';

    /**
     * http_api_transports
     */
    const HTTP_API_TRANSPORTS = 'http_api_transports';

    /**
     * http_response
     */
    const HTTP_RESPONSE = 'http_response';

    /**
     * block_local_requests
     */
    const BLOCK_LOCAL_REQUESTS = 'block_local_requests';

    /**
     * oembed_providers
     */
    const OEMBED_PROVIDERS = 'oembed_providers';

    /**
     * oembed_result
     */
    const OEMBED_RESULT = 'oembed_result';

    /**
     * oembed_remote_get_args
     */
    const OEMBED_REMOTE_GET_ARGS = 'oembed_remote_get_args';

    /**
     * oembed_linktypes
     */
    const OEMBED_LINKTYPES = 'oembed_linktypes';

    /**
     * oembed_fetch_url
     */
    const OEMBED_FETCH_URL = 'oembed_fetch_url';

    /**
     * oembed_dataparse
     */
    const OEMBED_DATAPARSE = 'oembed_dataparse';

    /**
     * category_description
     */
    const CATEGORY_DESCRIPTION = 'category_description';

    /**
     * category_css_class
     */
    const CATEGORY_CSS_CLASS = 'category_css_class';

    /**
     * list_pages
     */
    const LIST_PAGES = 'list_pages';

    /**
     * page_css_class
     */
    const PAGE_CSS_CLASS = 'page_css_class';

    /**
     * found_comments_query
     */
    const FOUND_COMMENTS_QUERY = 'found_comments_query';

    /**
     * the_comments
     */
    const THE_COMMENTS = 'the_comments';

    /**
     * comments_clauses
     */
    const COMMENTS_CLAUSES = 'comments_clauses';

    /**
     * customize_control_active
     */
    const CUSTOMIZE_CONTROL_ACTIVE = 'customize_control_active';

    /**
     * customize_loaded_components
     */
    const CUSTOMIZE_LOADED_COMPONENTS = 'customize_loaded_components';

    /**
     * customize_save_response
     */
    const CUSTOMIZE_SAVE_RESPONSE = 'customize_save_response';

    /**
     * customize_refresh_nonces
     */
    const CUSTOMIZE_REFRESH_NONCES = 'customize_refresh_nonces';

    /**
     * customize_dynamic_setting_args
     */
    const CUSTOMIZE_DYNAMIC_SETTING_ARGS = 'customize_dynamic_setting_args';

    /**
     * customize_dynamic_setting_class
     */
    const CUSTOMIZE_DYNAMIC_SETTING_CLASS = 'customize_dynamic_setting_class';

    /**
     * customize_allowed_urls
     */
    const CUSTOMIZE_ALLOWED_URLS = 'customize_allowed_urls';

    /**
     * customize_nav_menu_available_items
     */
    const CUSTOMIZE_NAV_MENU_AVAILABLE_ITEMS = 'customize_nav_menu_available_items';

    /**
     * customize_nav_menu_available_item_types
     */
    const CUSTOMIZE_NAV_MENU_AVAILABLE_ITEM_TYPES = 'customize_nav_menu_available_item_types';

    /**
     * customize_panel_active
     */
    const CUSTOMIZE_PANEL_ACTIVE = 'customize_panel_active';

    /**
     * customize_section_active
     */
    const CUSTOMIZE_SECTION_ACTIVE = 'customize_section_active';

    /**
     * customize_sanitize_{$this->id}
     */
    const CUSTOMIZE_SANITIZE_ID = 'customize_sanitize_{$this->id}';

    /**
     * customize_value_{$id_base}
     */
    const CUSTOMIZE_VALUE_ID_BASE = 'customize_value_{$id_base}';

    /**
     * customize_sanitize_js_{$this->id}
     */
    const CUSTOMIZE_SANITIZE_JS_ID = 'customize_sanitize_js_{$this->id}';

    /**
     * customizer_widgets_section_args
     */
    const CUSTOMIZER_WIDGETS_SECTION_ARGS = 'customizer_widgets_section_args';

    /**
     * is_wide_widget_in_customizer
     */
    const IS_WIDE_WIDGET_IN_CUSTOMIZER = 'is_wide_widget_in_customizer';

    /**
     * widget_customizer_setting_args
     */
    const WIDGET_CUSTOMIZER_SETTING_ARGS = 'widget_customizer_setting_args';

    /**
     * option_{$option_name}
     */
    const OPTION_OPTION_NAME = 'option_{$option_name}';

    /**
     * wp_editor_settings
     */
    const WP_EDITOR_SETTINGS = 'wp_editor_settings';

    /**
     * the_editor
     */
    const THE_EDITOR = 'the_editor';

    /**
     * the_editor_content
     */
    const THE_EDITOR_CONTENT = 'the_editor_content';

    /**
     * htmledit_pre
     */
    const HTMLEDIT_PRE = 'htmledit_pre';

    /**
     * richedit_pre
     */
    const RICHEDIT_PRE = 'richedit_pre';

    /**
     * quicktags_settings
     */
    const QUICKTAGS_SETTINGS = 'quicktags_settings';

    /**
     * teeny_mce_plugins
     */
    const TEENY_MCE_PLUGINS = 'teeny_mce_plugins';

    /**
     * mce_external_plugins
     */
    const MCE_EXTERNAL_PLUGINS = 'mce_external_plugins';

    /**
     * tiny_mce_plugins
     */
    const TINY_MCE_PLUGINS = 'tiny_mce_plugins';

    /**
     * mce_external_languages
     */
    const MCE_EXTERNAL_LANGUAGES = 'mce_external_languages';

    /**
     * mce_css
     */
    const MCE_CSS = 'mce_css';

    /**
     * teeny_mce_buttons
     */
    const TEENY_MCE_BUTTONS = 'teeny_mce_buttons';

    /**
     * mce_buttons
     */
    const MCE_BUTTONS = 'mce_buttons';

    /**
     * mce_buttons_2
     */
    const MCE_BUTTONS_2 = 'mce_buttons_2';

    /**
     * mce_buttons_3
     */
    const MCE_BUTTONS_3 = 'mce_buttons_3';

    /**
     * mce_buttons_4
     */
    const MCE_BUTTONS_4 = 'mce_buttons_4';

    /**
     * teeny_mce_before_init
     */
    const TEENY_MCE_BEFORE_INIT = 'teeny_mce_before_init';

    /**
     * tiny_mce_before_init
     */
    const TINY_MCE_BEFORE_INIT = 'tiny_mce_before_init';

    /**
     * wp_mce_translation
     */
    const WP_MCE_TRANSLATION = 'wp_mce_translation';

    /**
     * wp_link_query_args
     */
    const WP_LINK_QUERY_ARGS = 'wp_link_query_args';

    /**
     * wp_link_query
     */
    const WP_LINK_QUERY = 'wp_link_query';

    /**
     * embed_handler_html
     */
    const EMBED_HANDLER_HTML = 'embed_handler_html';

    /**
     * oembed_ttl
     */
    const OEMBED_TTL = 'oembed_ttl';

    /**
     * embed_oembed_html
     */
    const EMBED_OEMBED_HTML = 'embed_oembed_html';

    /**
     * embed_oembed_discover
     */
    const EMBED_OEMBED_DISCOVER = 'embed_oembed_discover';

    /**
     * embed_cache_oembed_types
     */
    const EMBED_CACHE_OEMBED_TYPES = 'embed_cache_oembed_types';

    /**
     * embed_maybe_make_link
     */
    const EMBED_MAYBE_MAKE_LINK = 'embed_maybe_make_link';

    /**
     * wp_http_cookie_value
     */
    const WP_HTTP_COOKIE_VALUE = 'wp_http_cookie_value';

    /**
     * https_local_ssl_verify
     */
    const HTTPS_LOCAL_SSL_VERIFY = 'https_local_ssl_verify';

    /**
     * https_ssl_verify
     */
    const HTTPS_SSL_VERIFY = 'https_ssl_verify';

    /**
     * use_curl_transport
     */
    const USE_CURL_TRANSPORT = 'use_curl_transport';

    /**
     * wp_http_accept_encoding
     */
    const WP_HTTP_ACCEPT_ENCODING = 'wp_http_accept_encoding';

    /**
     * wp_http_ixr_client_headers
     */
    const WP_HTTP_IXR_CLIENT_HEADERS = 'wp_http_ixr_client_headers';

    /**
     * pre_http_send_through_proxy
     */
    const PRE_HTTP_SEND_THROUGH_PROXY = 'pre_http_send_through_proxy';

    /**
     * use_streams_transport
     */
    const USE_STREAMS_TRANSPORT = 'use_streams_transport';

    /**
     * image_memory_limit
     */
    const IMAGE_MEMORY_LIMIT = 'image_memory_limit';

    /**
     * image_make_intermediate_size
     */
    const IMAGE_MAKE_INTERMEDIATE_SIZE = 'image_make_intermediate_size';

    /**
     * wp_editor_set_quality
     */
    const WP_EDITOR_SET_QUALITY = 'wp_editor_set_quality';

    /**
     * image_editor_default_mime_type
     */
    const IMAGE_EDITOR_DEFAULT_MIME_TYPE = 'image_editor_default_mime_type';

    /**
     * get_meta_sql
     */
    const GET_META_SQL = 'get_meta_sql';

    /**
     * meta_query_find_compatible_table_alias
     */
    const META_QUERY_FIND_COMPATIBLE_TABLE_ALIAS = 'meta_query_find_compatible_table_alias';

    /**
     * network_by_path_segments_count
     */
    const NETWORK_BY_PATH_SEGMENTS_COUNT = 'network_by_path_segments_count';

    /**
     * pre_get_network_by_path
     */
    const PRE_GET_NETWORK_BY_PATH = 'pre_get_network_by_path';

    /**
     * oembed_default_width
     */
    const OEMBED_DEFAULT_WIDTH = 'oembed_default_width';

    /**
     * oembed_request_post_id
     */
    const OEMBED_REQUEST_POST_ID = 'oembed_request_post_id';

    /**
     * post_rewrite_rules
     */
    const POST_REWRITE_RULES = 'post_rewrite_rules';

    /**
     * date_rewrite_rules
     */
    const DATE_REWRITE_RULES = 'date_rewrite_rules';

    /**
     * root_rewrite_rules
     */
    const ROOT_REWRITE_RULES = 'root_rewrite_rules';

    /**
     * comments_rewrite_rules
     */
    const COMMENTS_REWRITE_RULES = 'comments_rewrite_rules';

    /**
     * search_rewrite_rules
     */
    const SEARCH_REWRITE_RULES = 'search_rewrite_rules';

    /**
     * author_rewrite_rules
     */
    const AUTHOR_REWRITE_RULES = 'author_rewrite_rules';

    /**
     * page_rewrite_rules
     */
    const PAGE_REWRITE_RULES = 'page_rewrite_rules';

    /**
     * {$permastructname}_rewrite_rules
     */
    const PERMASTRUCTNAME_REWRITE_RULES = '{$permastructname}_rewrite_rules';

    /**
     * tag_rewrite_rules
     */
    const TAG_REWRITE_RULES = 'tag_rewrite_rules';

    /**
     * rewrite_rules_array
     */
    const REWRITE_RULES_ARRAY = 'rewrite_rules_array';

    /**
     * mod_rewrite_rules
     */
    const MOD_REWRITE_RULES = 'mod_rewrite_rules';

    /**
     * rewrite_rules
     */
    const REWRITE_RULES = 'rewrite_rules';

    /**
     * iis7_url_rewrite_rules
     */
    const IIS7_URL_REWRITE_RULES = 'iis7_url_rewrite_rules';

    /**
     * flush_rewrite_rules_hard
     */
    const FLUSH_REWRITE_RULES_HARD = 'flush_rewrite_rules_hard';

    /**
     * role_has_cap
     */
    const ROLE_HAS_CAP = 'role_has_cap';

    /**
     * wp_cache_themes_persistently
     */
    const WP_CACHE_THEMES_PERSISTENTLY = 'wp_cache_themes_persistently';

    /**
     * theme_page_templates
     */
    const THEME_PAGE_TEMPLATES = 'theme_page_templates';

    /**
     * allowed_themes
     */
    const ALLOWED_THEMES = 'allowed_themes';

    /**
     * user_search_columns
     */
    const USER_SEARCH_COLUMNS = 'user_search_columns';

    /**
     * found_users_query
     */
    const FOUND_USERS_QUERY = 'found_users_query';

    /**
     * user_has_cap
     */
    const USER_HAS_CAP = 'user_has_cap';

    /**
     * widget_display_callback
     */
    const WIDGET_DISPLAY_CALLBACK = 'widget_display_callback';

    /**
     * widget_update_callback
     */
    const WIDGET_UPDATE_CALLBACK = 'widget_update_callback';

    /**
     * widget_form_callback
     */
    const WIDGET_FORM_CALLBACK = 'widget_form_callback';

    /**
     * xmlrpc_methods
     */
    const XMLRPC_METHODS = 'xmlrpc_methods';

    /**
     * pre_option_enable_xmlrpc
     */
    const PRE_OPTION_ENABLE_XMLRPC = 'pre_option_enable_xmlrpc';

    /**
     * option_enable_xmlrpc
     */
    const OPTION_ENABLE_XMLRPC = 'option_enable_xmlrpc';

    /**
     * xmlrpc_enabled
     */
    const XMLRPC_ENABLED = 'xmlrpc_enabled';

    /**
     * xmlrpc_login_error
     */
    const XMLRPC_LOGIN_ERROR = 'xmlrpc_login_error';

    /**
     * xmlrpc_blog_options
     */
    const XMLRPC_BLOG_OPTIONS = 'xmlrpc_blog_options';

    /**
     * xmlrpc_prepare_taxonomy
     */
    const XMLRPC_PREPARE_TAXONOMY = 'xmlrpc_prepare_taxonomy';

    /**
     * xmlrpc_prepare_term
     */
    const XMLRPC_PREPARE_TERM = 'xmlrpc_prepare_term';

    /**
     * xmlrpc_prepare_post
     */
    const XMLRPC_PREPARE_POST = 'xmlrpc_prepare_post';

    /**
     * xmlrpc_prepare_post_type
     */
    const XMLRPC_PREPARE_POST_TYPE = 'xmlrpc_prepare_post_type';

    /**
     * xmlrpc_prepare_media_item
     */
    const XMLRPC_PREPARE_MEDIA_ITEM = 'xmlrpc_prepare_media_item';

    /**
     * xmlrpc_prepare_page
     */
    const XMLRPC_PREPARE_PAGE = 'xmlrpc_prepare_page';

    /**
     * xmlrpc_prepare_comment
     */
    const XMLRPC_PREPARE_COMMENT = 'xmlrpc_prepare_comment';

    /**
     * xmlrpc_prepare_user
     */
    const XMLRPC_PREPARE_USER = 'xmlrpc_prepare_user';

    /**
     * xmlrpc_wp_insert_post_data
     */
    const XMLRPC_WP_INSERT_POST_DATA = 'xmlrpc_wp_insert_post_data';

    /**
     * xmlrpc_default_post_fields
     */
    const XMLRPC_DEFAULT_POST_FIELDS = 'xmlrpc_default_post_fields';

    /**
     * xmlrpc_default_taxonomy_fields
     */
    const XMLRPC_DEFAULT_TAXONOMY_FIELDS = 'xmlrpc_default_taxonomy_fields';

    /**
     * xmlrpc_default_user_fields
     */
    const XMLRPC_DEFAULT_USER_FIELDS = 'xmlrpc_default_user_fields';

    /**
     * xmlrpc_allow_anonymous_comments
     */
    const XMLRPC_ALLOW_ANONYMOUS_COMMENTS = 'xmlrpc_allow_anonymous_comments';

    /**
     * xmlrpc_default_posttype_fields
     */
    const XMLRPC_DEFAULT_POSTTYPE_FIELDS = 'xmlrpc_default_posttype_fields';

    /**
     * xmlrpc_default_revision_fields
     */
    const XMLRPC_DEFAULT_REVISION_FIELDS = 'xmlrpc_default_revision_fields';

    /**
     * pre_upload_error
     */
    const PRE_UPLOAD_ERROR = 'pre_upload_error';

    /**
     * xmlrpc_text_filters
     */
    const XMLRPC_TEXT_FILTERS = 'xmlrpc_text_filters';

    /**
     * pingback_ping_source_uri
     */
    const PINGBACK_PING_SOURCE_URI = 'pingback_ping_source_uri';

    /**
     * pre_remote_source
     */
    const PRE_REMOTE_SOURCE = 'pre_remote_source';

    /**
     * xmlrpc_pingback_error
     */
    const XMLRPC_PINGBACK_ERROR = 'xmlrpc_pingback_error';

    /**
     * do_parse_request
     */
    const DO_PARSE_REQUEST = 'do_parse_request';

    /**
     * query_vars
     */
    const QUERY_VARS = 'query_vars';

    /**
     * request
     */
    const REQUEST = 'request';

    /**
     * wp_headers
     */
    const WP_HEADERS = 'wp_headers';

    /**
     * query_string
     */
    const QUERY_STRING = 'query_string';

    /**
     * script_loader_src
     */
    const SCRIPT_LOADER_SRC = 'script_loader_src';

    /**
     * script_loader_tag
     */
    const SCRIPT_LOADER_TAG = 'script_loader_tag';

    /**
     * print_scripts_array
     */
    const PRINT_SCRIPTS_ARRAY = 'print_scripts_array';

    /**
     * style_loader_tag
     */
    const STYLE_LOADER_TAG = 'style_loader_tag';

    /**
     * print_styles_array
     */
    const PRINT_STYLES_ARRAY = 'print_styles_array';

    /**
     * style_loader_src
     */
    const STYLE_LOADER_SRC = 'style_loader_src';

    /**
     * get_comment_author
     */
    const GET_COMMENT_AUTHOR = 'get_comment_author';

    /**
     * comment_author
     */
    const COMMENT_AUTHOR = 'comment_author';

    /**
     * get_comment_author_email
     */
    const GET_COMMENT_AUTHOR_EMAIL = 'get_comment_author_email';

    /**
     * author_email
     */
    const AUTHOR_EMAIL = 'author_email';

    /**
     * get_comment_author_link
     */
    const GET_COMMENT_AUTHOR_LINK = 'get_comment_author_link';

    /**
     * get_comment_author_IP
     */
    const GET_COMMENT_AUTHOR_IP = 'get_comment_author_IP';

    /**
     * get_comment_author_url
     */
    const GET_COMMENT_AUTHOR_URL = 'get_comment_author_url';

    /**
     * comment_url
     */
    const COMMENT_URL = 'comment_url';

    /**
     * get_comment_author_url_link
     */
    const GET_COMMENT_AUTHOR_URL_LINK = 'get_comment_author_url_link';

    /**
     * comment_class
     */
    const COMMENT_CLASS = 'comment_class';

    /**
     * get_comment_date
     */
    const GET_COMMENT_DATE = 'get_comment_date';

    /**
     * comment_excerpt_length
     */
    const COMMENT_EXCERPT_LENGTH = 'comment_excerpt_length';

    /**
     * get_comment_excerpt
     */
    const GET_COMMENT_EXCERPT = 'get_comment_excerpt';

    /**
     * comment_excerpt
     */
    const COMMENT_EXCERPT = 'comment_excerpt';

    /**
     * get_comment_ID
     */
    const GET_COMMENT_ID = 'get_comment_ID';

    /**
     * get_comment_link
     */
    const GET_COMMENT_LINK = 'get_comment_link';

    /**
     * get_comments_link
     */
    const GET_COMMENTS_LINK = 'get_comments_link';

    /**
     * get_comments_number
     */
    const GET_COMMENTS_NUMBER = 'get_comments_number';

    /**
     * comments_number
     */
    const COMMENTS_NUMBER = 'comments_number';

    /**
     * get_comment_text
     */
    const GET_COMMENT_TEXT = 'get_comment_text';

    /**
     * comment_text
     */
    const COMMENT_TEXT = 'comment_text';

    /**
     * get_comment_time
     */
    const GET_COMMENT_TIME = 'get_comment_time';

    /**
     * get_comment_type
     */
    const GET_COMMENT_TYPE = 'get_comment_type';

    /**
     * trackback_url
     */
    const TRACKBACK_URL = 'trackback_url';

    /**
     * comments_open
     */
    const COMMENTS_OPEN = 'comments_open';

    /**
     * pings_open
     */
    const PINGS_OPEN = 'pings_open';

    /**
     * comments_array
     */
    const COMMENTS_ARRAY = 'comments_array';

    /**
     * comments_template
     */
    const COMMENTS_TEMPLATE = 'comments_template';

    /**
     * respond_link
     */
    const RESPOND_LINK = 'respond_link';

    /**
     * comments_popup_link_attributes
     */
    const COMMENTS_POPUP_LINK_ATTRIBUTES = 'comments_popup_link_attributes';

    /**
     * comment_reply_link_args
     */
    const COMMENT_REPLY_LINK_ARGS = 'comment_reply_link_args';

    /**
     * comment_reply_link
     */
    const COMMENT_REPLY_LINK = 'comment_reply_link';

    /**
     * post_comments_link
     */
    const POST_COMMENTS_LINK = 'post_comments_link';

    /**
     * cancel_comment_reply_link
     */
    const CANCEL_COMMENT_REPLY_LINK = 'cancel_comment_reply_link';

    /**
     * comment_id_fields
     */
    const COMMENT_ID_FIELDS = 'comment_id_fields';

    /**
     * wp_list_comments_args
     */
    const WP_LIST_COMMENTS_ARGS = 'wp_list_comments_args';

    /**
     * comment_form_default_fields
     */
    const COMMENT_FORM_DEFAULT_FIELDS = 'comment_form_default_fields';

    /**
     * comment_form_defaults
     */
    const COMMENT_FORM_DEFAULTS = 'comment_form_defaults';

    /**
     * comment_form_logged_in
     */
    const COMMENT_FORM_LOGGED_IN = 'comment_form_logged_in';

    /**
     * comment_form_fields
     */
    const COMMENT_FORM_FIELDS = 'comment_form_fields';

    /**
     * comment_form_field_comment
     */
    const COMMENT_FORM_FIELD_COMMENT = 'comment_form_field_comment';

    /**
     * comment_form_field_{$name}
     */
    const COMMENT_FORM_FIELD_NAME = 'comment_form_field_{$name}';

    /**
     * comment_form_submit_button
     */
    const COMMENT_FORM_SUBMIT_BUTTON = 'comment_form_submit_button';

    /**
     * comment_form_submit_field
     */
    const COMMENT_FORM_SUBMIT_FIELD = 'comment_form_submit_field';

    /**
     * comment_max_links_url
     */
    const COMMENT_MAX_LINKS_URL = 'comment_max_links_url';

    /**
     * get_comment
     */
    const GET_COMMENT = 'get_comment';

    /**
     * get_default_comment_status
     */
    const GET_DEFAULT_COMMENT_STATUS = 'get_default_comment_status';

    /**
     * comment_cookie_lifetime
     */
    const COMMENT_COOKIE_LIFETIME = 'comment_cookie_lifetime';

    /**
     * pre_comment_author_name
     */
    const PRE_COMMENT_AUTHOR_NAME = 'pre_comment_author_name';

    /**
     * pre_comment_author_email
     */
    const PRE_COMMENT_AUTHOR_EMAIL = 'pre_comment_author_email';

    /**
     * pre_comment_author_url
     */
    const PRE_COMMENT_AUTHOR_URL = 'pre_comment_author_url';

    /**
     * duplicate_comment_id
     */
    const DUPLICATE_COMMENT_ID = 'duplicate_comment_id';

    /**
     * pre_comment_approved
     */
    const PRE_COMMENT_APPROVED = 'pre_comment_approved';

    /**
     * comment_flood_filter
     */
    const COMMENT_FLOOD_FILTER = 'comment_flood_filter';

    /**
     * get_page_of_comment
     */
    const GET_PAGE_OF_COMMENT = 'get_page_of_comment';

    /**
     * wp_count_comments
     */
    const WP_COUNT_COMMENTS = 'wp_count_comments';

    /**
     * wp_get_current_commenter
     */
    const WP_GET_CURRENT_COMMENTER = 'wp_get_current_commenter';

    /**
     * pre_user_id
     */
    const PRE_USER_ID = 'pre_user_id';

    /**
     * pre_comment_user_agent
     */
    const PRE_COMMENT_USER_AGENT = 'pre_comment_user_agent';

    /**
     * pre_comment_content
     */
    const PRE_COMMENT_CONTENT = 'pre_comment_content';

    /**
     * pre_comment_user_ip
     */
    const PRE_COMMENT_USER_IP = 'pre_comment_user_ip';

    /**
     * preprocess_comment
     */
    const PREPROCESS_COMMENT = 'preprocess_comment';

    /**
     * notify_moderator
     */
    const NOTIFY_MODERATOR = 'notify_moderator';

    /**
     * notify_post_author
     */
    const NOTIFY_POST_AUTHOR = 'notify_post_author';

    /**
     * comment_save_pre
     */
    const COMMENT_SAVE_PRE = 'comment_save_pre';

    /**
     * the_content
     */
    const THE_CONTENT = 'the_content';

    /**
     * the_excerpt
     */
    const THE_EXCERPT = 'the_excerpt';

    /**
     * pingback_useragent
     */
    const PINGBACK_USERAGENT = 'pingback_useragent';

    /**
     * close_comments_for_post_types
     */
    const CLOSE_COMMENTS_FOR_POST_TYPES = 'close_comments_for_post_types';

    /**
     * schedule_event
     */
    const SCHEDULE_EVENT = 'schedule_event';

    /**
     * cron_request
     */
    const CRON_REQUEST = 'cron_request';

    /**
     * cron_schedules
     */
    const CRON_SCHEDULES = 'cron_schedules';

    /**
     * date_query_valid_columns
     */
    const DATE_QUERY_VALID_COLUMNS = 'date_query_valid_columns';

    /**
     * get_date_sql
     */
    const GET_DATE_SQL = 'get_date_sql';

    /**
     * the_content_rss
     */
    const THE_CONTENT_RSS = 'the_content_rss';

    /**
     * icon_dir
     */
    const ICON_DIR = 'icon_dir';

    /**
     * attachment_max_dims
     */
    const ATTACHMENT_MAX_DIMS = 'attachment_max_dims';

    /**
     * attachment_icon
     */
    const ATTACHMENT_ICON = 'attachment_icon';

    /**
     * attachment_innerHTML
     */
    const ATTACHMENT_INNERHTML = 'attachment_innerHTML';

    /**
     * {$boundary}_post_rel_link
     */
    const BOUNDARY_POST_REL_LINK = '{$boundary}_post_rel_link';

    /**
     * index_rel_link
     */
    const INDEX_REL_LINK = 'index_rel_link';

    /**
     * parent_post_rel_link
     */
    const PARENT_POST_REL_LINK = 'parent_post_rel_link';

    /**
     * extra_theme_headers
     */
    const EXTRA_THEME_HEADERS = 'extra_theme_headers';

    /**
     * embed_thumbnail_image_size
     */
    const EMBED_THUMBNAIL_IMAGE_SIZE = 'embed_thumbnail_image_size';

    /**
     * embed_thumbnail_image_shape
     */
    const EMBED_THUMBNAIL_IMAGE_SHAPE = 'embed_thumbnail_image_shape';

    /**
     * embed_site_title_html
     */
    const EMBED_SITE_TITLE_HTML = 'embed_site_title_html';

    /**
     * embed_defaults
     */
    const EMBED_DEFAULTS = 'embed_defaults';

    /**
     * load_default_embeds
     */
    const LOAD_DEFAULT_EMBEDS = 'load_default_embeds';

    /**
     * wp_audio_embed_handler
     */
    const WP_AUDIO_EMBED_HANDLER = 'wp_audio_embed_handler';

    /**
     * wp_video_embed_handler
     */
    const WP_VIDEO_EMBED_HANDLER = 'wp_video_embed_handler';

    /**
     * embed_googlevideo
     */
    const EMBED_GOOGLEVIDEO = 'embed_googlevideo';

    /**
     * wp_embed_handler_youtube
     */
    const WP_EMBED_HANDLER_YOUTUBE = 'wp_embed_handler_youtube';

    /**
     * wp_embed_handler_audio
     */
    const WP_EMBED_HANDLER_AUDIO = 'wp_embed_handler_audio';

    /**
     * wp_embed_handler_video
     */
    const WP_EMBED_HANDLER_VIDEO = 'wp_embed_handler_video';

    /**
     * oembed_discovery_links
     */
    const OEMBED_DISCOVERY_LINKS = 'oembed_discovery_links';

    /**
     * post_embed_url
     */
    const POST_EMBED_URL = 'post_embed_url';

    /**
     * oembed_endpoint_url
     */
    const OEMBED_ENDPOINT_URL = 'oembed_endpoint_url';

    /**
     * embed_html
     */
    const EMBED_HTML = 'embed_html';

    /**
     * oembed_min_max_width
     */
    const OEMBED_MIN_MAX_WIDTH = 'oembed_min_max_width';

    /**
     * oembed_response_data
     */
    const OEMBED_RESPONSE_DATA = 'oembed_response_data';

    /**
     * the_excerpt_embed
     */
    const THE_EXCERPT_EMBED = 'the_excerpt_embed';

    /**
     * rss_update_period
     */
    const RSS_UPDATE_PERIOD = 'rss_update_period';

    /**
     * rss_update_frequency
     */
    const RSS_UPDATE_FREQUENCY = 'rss_update_frequency';

    /**
     * get_bloginfo_rss
     */
    const GET_BLOGINFO_RSS = 'get_bloginfo_rss';

    /**
     * bloginfo_rss
     */
    const BLOGINFO_RSS = 'bloginfo_rss';

    /**
     * default_feed
     */
    const DEFAULT_FEED = 'default_feed';

    /**
     * get_wp_title_rss
     */
    const GET_WP_TITLE_RSS = 'get_wp_title_rss';

    /**
     * wp_title_rss
     */
    const WP_TITLE_RSS = 'wp_title_rss';

    /**
     * the_content_feed
     */
    const THE_CONTENT_FEED = 'the_content_feed';

    /**
     * the_excerpt_rss
     */
    const THE_EXCERPT_RSS = 'the_excerpt_rss';

    /**
     * the_permalink_rss
     */
    const THE_PERMALINK_RSS = 'the_permalink_rss';

    /**
     * comments_link_feed
     */
    const COMMENTS_LINK_FEED = 'comments_link_feed';

    /**
     * comment_link
     */
    const COMMENT_LINK = 'comment_link';

    /**
     * comment_author_rss
     */
    const COMMENT_AUTHOR_RSS = 'comment_author_rss';

    /**
     * comment_text_rss
     */
    const COMMENT_TEXT_RSS = 'comment_text_rss';

    /**
     * the_category_rss
     */
    const THE_CATEGORY_RSS = 'the_category_rss';

    /**
     * rss_enclosure
     */
    const RSS_ENCLOSURE = 'rss_enclosure';

    /**
     * atom_enclosure
     */
    const ATOM_ENCLOSURE = 'atom_enclosure';

    /**
     * self_link
     */
    const SELF_LINK = 'self_link';

    /**
     * feed_content_type
     */
    const FEED_CONTENT_TYPE = 'feed_content_type';

    /**
     * run_wptexturize
     */
    const RUN_WPTEXTURIZE = 'run_wptexturize';

    /**
     * no_texturize_tags
     */
    const NO_TEXTURIZE_TAGS = 'no_texturize_tags';

    /**
     * no_texturize_shortcodes
     */
    const NO_TEXTURIZE_SHORTCODES = 'no_texturize_shortcodes';

    /**
     * sanitize_file_name_chars
     */
    const SANITIZE_FILE_NAME_CHARS = 'sanitize_file_name_chars';

    /**
     * sanitize_file_name
     */
    const SANITIZE_FILE_NAME = 'sanitize_file_name';

    /**
     * sanitize_user
     */
    const SANITIZE_USER = 'sanitize_user';

    /**
     * sanitize_key
     */
    const SANITIZE_KEY = 'sanitize_key';

    /**
     * sanitize_title
     */
    const SANITIZE_TITLE = 'sanitize_title';

    /**
     * sanitize_html_class
     */
    const SANITIZE_HTML_CLASS = 'sanitize_html_class';

    /**
     * format_to_edit
     */
    const FORMAT_TO_EDIT = 'format_to_edit';

    /**
     * smilies_src
     */
    const SMILIES_SRC = 'smilies_src';

    /**
     * is_email
     */
    const IS_EMAIL = 'is_email';

    /**
     * sanitize_email
     */
    const SANITIZE_EMAIL = 'sanitize_email';

    /**
     * human_time_diff
     */
    const HUMAN_TIME_DIFF = 'human_time_diff';

    /**
     * excerpt_length
     */
    const EXCERPT_LENGTH = 'excerpt_length';

    /**
     * excerpt_more
     */
    const EXCERPT_MORE = 'excerpt_more';

    /**
     * wp_trim_excerpt
     */
    const WP_TRIM_EXCERPT = 'wp_trim_excerpt';

    /**
     * wp_trim_words
     */
    const WP_TRIM_WORDS = 'wp_trim_words';

    /**
     * pre_ent2ncr
     */
    const PRE_ENT2NCR = 'pre_ent2ncr';

    /**
     * format_for_editor
     */
    const FORMAT_FOR_EDITOR = 'format_for_editor';

    /**
     * clean_url
     */
    const CLEAN_URL = 'clean_url';

    /**
     * js_escape
     */
    const JS_ESCAPE = 'js_escape';

    /**
     * esc_html
     */
    const ESC_HTML = 'esc_html';

    /**
     * attribute_escape
     */
    const ATTRIBUTE_ESCAPE = 'attribute_escape';

    /**
     * esc_textarea
     */
    const ESC_TEXTAREA = 'esc_textarea';

    /**
     * tag_escape
     */
    const TAG_ESCAPE = 'tag_escape';

    /**
     * sanitize_option_{$option}
     */
    const SANITIZE_OPTION_OPTION = 'sanitize_option_{$option}';

    /**
     * wp_parse_str
     */
    const WP_PARSE_STR = 'wp_parse_str';

    /**
     * wp_sprintf
     */
    const WP_SPRINTF = 'wp_sprintf';

    /**
     * wp_sprintf_l
     */
    const WP_SPRINTF_L = 'wp_sprintf_l';

    /**
     * sanitize_text_field
     */
    const SANITIZE_TEXT_FIELD = 'sanitize_text_field';

    /**
     * sanitize_mime_type
     */
    const SANITIZE_MIME_TYPE = 'sanitize_mime_type';

    /**
     * sanitize_trackback_urls
     */
    const SANITIZE_TRACKBACK_URLS = 'sanitize_trackback_urls';

    /**
     * wp_spaces_regexp
     */
    const WP_SPACES_REGEXP = 'wp_spaces_regexp';

    /**
     * emoji_url
     */
    const EMOJI_URL = 'emoji_url';

    /**
     * emoji_ext
     */
    const EMOJI_EXT = 'emoji_ext';

    /**
     * wp_mail_content_type
     */
    const WP_MAIL_CONTENT_TYPE = 'wp_mail_content_type';

    /**
     * date_i18n
     */
    const DATE_I18N = 'date_i18n';

    /**
     * number_format_i18n
     */
    const NUMBER_FORMAT_I18N = 'number_format_i18n';

    /**
     * enclosure_links
     */
    const ENCLOSURE_LINKS = 'enclosure_links';

    /**
     * removable_query_args
     */
    const REMOVABLE_QUERY_ARGS = 'removable_query_args';

    /**
     * status_header
     */
    const STATUS_HEADER = 'status_header';

    /**
     * nocache_headers
     */
    const NOCACHE_HEADERS = 'nocache_headers';

    /**
     * robots_txt
     */
    const ROBOTS_TXT = 'robots_txt';

    /**
     * upload_dir
     */
    const UPLOAD_DIR = 'upload_dir';

    /**
     * wp_upload_bits
     */
    const WP_UPLOAD_BITS = 'wp_upload_bits';

    /**
     * ext2type
     */
    const EXT2TYPE = 'ext2type';

    /**
     * getimagesize_mimes_to_exts
     */
    const GETIMAGESIZE_MIMES_TO_EXTS = 'getimagesize_mimes_to_exts';

    /**
     * wp_check_filetype_and_ext
     */
    const WP_CHECK_FILETYPE_AND_EXT = 'wp_check_filetype_and_ext';

    /**
     * mime_types
     */
    const MIME_TYPES = 'mime_types';

    /**
     * upload_mimes
     */
    const UPLOAD_MIMES = 'upload_mimes';

    /**
     * wp_die_ajax_handler
     */
    const WP_DIE_AJAX_HANDLER = 'wp_die_ajax_handler';

    /**
     * wp_die_xmlrpc_handler
     */
    const WP_DIE_XMLRPC_HANDLER = 'wp_die_xmlrpc_handler';

    /**
     * wp_die_handler
     */
    const WP_DIE_HANDLER = 'wp_die_handler';

    /**
     * load_default_widgets
     */
    const LOAD_DEFAULT_WIDGETS = 'load_default_widgets';

    /**
     * deprecated_function_trigger_error
     */
    const DEPRECATED_FUNCTION_TRIGGER_ERROR = 'deprecated_function_trigger_error';

    /**
     * deprecated_constructor_trigger_error
     */
    const DEPRECATED_CONSTRUCTOR_TRIGGER_ERROR = 'deprecated_constructor_trigger_error';

    /**
     * deprecated_file_trigger_error
     */
    const DEPRECATED_FILE_TRIGGER_ERROR = 'deprecated_file_trigger_error';

    /**
     * deprecated_argument_trigger_error
     */
    const DEPRECATED_ARGUMENT_TRIGGER_ERROR = 'deprecated_argument_trigger_error';

    /**
     * doing_it_wrong_trigger_error
     */
    const DOING_IT_WRONG_TRIGGER_ERROR = 'doing_it_wrong_trigger_error';

    /**
     * iis7_supports_permalinks
     */
    const IIS7_SUPPORTS_PERMALINKS = 'iis7_supports_permalinks';

    /**
     * get_main_network_id
     */
    const GET_MAIN_NETWORK_ID = 'get_main_network_id';

    /**
     * global_terms_enabled
     */
    const GLOBAL_TERMS_ENABLED = 'global_terms_enabled';

    /**
     * extra_{$context}_headers
     */
    const EXTRA_CONTEXT_HEADERS = 'extra_{$context}_headers';

    /**
     * kses_allowed_protocols
     */
    const KSES_ALLOWED_PROTOCOLS = 'kses_allowed_protocols';

    /**
     * wp_checkdate
     */
    const WP_CHECKDATE = 'wp_checkdate';

    /**
     * wp_auth_check_load
     */
    const WP_AUTH_CHECK_LOAD = 'wp_auth_check_load';

    /**
     * wp_auth_check_same_domain
     */
    const WP_AUTH_CHECK_SAME_DOMAIN = 'wp_auth_check_same_domain';

    /**
     * wp_delete_file
     */
    const WP_DELETE_FILE = 'wp_delete_file';

    /**
     * search_form_format
     */
    const SEARCH_FORM_FORMAT = 'search_form_format';

    /**
     * get_search_form
     */
    const GET_SEARCH_FORM = 'get_search_form';

    /**
     * loginout
     */
    const LOGINOUT = 'loginout';

    /**
     * logout_url
     */
    const LOGOUT_URL = 'logout_url';

    /**
     * login_url
     */
    const LOGIN_URL = 'login_url';

    /**
     * register_url
     */
    const REGISTER_URL = 'register_url';

    /**
     * login_form_defaults
     */
    const LOGIN_FORM_DEFAULTS = 'login_form_defaults';

    /**
     * login_form_top
     */
    const LOGIN_FORM_TOP = 'login_form_top';

    /**
     * login_form_middle
     */
    const LOGIN_FORM_MIDDLE = 'login_form_middle';

    /**
     * login_form_bottom
     */
    const LOGIN_FORM_BOTTOM = 'login_form_bottom';

    /**
     * lostpassword_url
     */
    const LOSTPASSWORD_URL = 'lostpassword_url';

    /**
     * bloginfo_url
     */
    const BLOGINFO_URL = 'bloginfo_url';

    /**
     * bloginfo
     */
    const BLOGINFO = 'bloginfo';

    /**
     * get_site_icon_url
     */
    const GET_SITE_ICON_URL = 'get_site_icon_url';

    /**
     * pre_get_document_title
     */
    const PRE_GET_DOCUMENT_TITLE = 'pre_get_document_title';

    /**
     * document_title_separator
     */
    const DOCUMENT_TITLE_SEPARATOR = 'document_title_separator';

    /**
     * document_title_parts
     */
    const DOCUMENT_TITLE_PARTS = 'document_title_parts';

    /**
     * wp_title_parts
     */
    const WP_TITLE_PARTS = 'wp_title_parts';

    /**
     * wp_title
     */
    const WP_TITLE = 'wp_title';

    /**
     * single_post_title
     */
    const SINGLE_POST_TITLE = 'single_post_title';

    /**
     * post_type_archive_title
     */
    const POST_TYPE_ARCHIVE_TITLE = 'post_type_archive_title';

    /**
     * single_cat_title
     */
    const SINGLE_CAT_TITLE = 'single_cat_title';

    /**
     * single_tag_title
     */
    const SINGLE_TAG_TITLE = 'single_tag_title';

    /**
     * single_term_title
     */
    const SINGLE_TERM_TITLE = 'single_term_title';

    /**
     * get_the_archive_title
     */
    const GET_THE_ARCHIVE_TITLE = 'get_the_archive_title';

    /**
     * get_the_archive_description
     */
    const GET_THE_ARCHIVE_DESCRIPTION = 'get_the_archive_description';

    /**
     * get_archives_link
     */
    const GET_ARCHIVES_LINK = 'get_archives_link';

    /**
     * getarchives_where
     */
    const GETARCHIVES_WHERE = 'getarchives_where';

    /**
     * getarchives_join
     */
    const GETARCHIVES_JOIN = 'getarchives_join';

    /**
     * get_calendar
     */
    const GET_CALENDAR = 'get_calendar';

    /**
     * the_date
     */
    const THE_DATE = 'the_date';

    /**
     * get_the_date
     */
    const GET_THE_DATE = 'get_the_date';

    /**
     * the_modified_date
     */
    const THE_MODIFIED_DATE = 'the_modified_date';

    /**
     * get_the_modified_date
     */
    const GET_THE_MODIFIED_DATE = 'get_the_modified_date';

    /**
     * the_time
     */
    const THE_TIME = 'the_time';

    /**
     * get_the_time
     */
    const GET_THE_TIME = 'get_the_time';

    /**
     * get_post_time
     */
    const GET_POST_TIME = 'get_post_time';

    /**
     * the_modified_time
     */
    const THE_MODIFIED_TIME = 'the_modified_time';

    /**
     * get_the_modified_time
     */
    const GET_THE_MODIFIED_TIME = 'get_the_modified_time';

    /**
     * get_post_modified_time
     */
    const GET_POST_MODIFIED_TIME = 'get_post_modified_time';

    /**
     * the_weekday
     */
    const THE_WEEKDAY = 'the_weekday';

    /**
     * the_weekday_date
     */
    const THE_WEEKDAY_DATE = 'the_weekday_date';

    /**
     * feed_links_show_posts_feed
     */
    const FEED_LINKS_SHOW_POSTS_FEED = 'feed_links_show_posts_feed';

    /**
     * feed_links_show_comments_feed
     */
    const FEED_LINKS_SHOW_COMMENTS_FEED = 'feed_links_show_comments_feed';

    /**
     * site_icon_meta_tags
     */
    const SITE_ICON_META_TAGS = 'site_icon_meta_tags';

    /**
     * user_can_richedit
     */
    const USER_CAN_RICHEDIT = 'user_can_richedit';

    /**
     * wp_default_editor
     */
    const WP_DEFAULT_EDITOR = 'wp_default_editor';

    /**
     * get_search_query
     */
    const GET_SEARCH_QUERY = 'get_search_query';

    /**
     * the_search_query
     */
    const THE_SEARCH_QUERY = 'the_search_query';

    /**
     * language_attributes
     */
    const LANGUAGE_ATTRIBUTES = 'language_attributes';

    /**
     * paginate_links
     */
    const PAGINATE_LINKS = 'paginate_links';

    /**
     * wp_admin_css_uri
     */
    const WP_ADMIN_CSS_URI = 'wp_admin_css_uri';

    /**
     * wp_admin_css
     */
    const WP_ADMIN_CSS = 'wp_admin_css';

    /**
     * wp_generator_type
     */
    const WP_GENERATOR_TYPE = 'wp_generator_type';

    /**
     * the_generator
     */
    const THE_GENERATOR = 'the_generator';

    /**
     * get_the_generator_{$type}
     */
    const GET_THE_GENERATOR_TYPE = 'get_the_generator_{$type}';

    /**
     * http_origin
     */
    const HTTP_ORIGIN = 'http_origin';

    /**
     * allowed_http_origins
     */
    const ALLOWED_HTTP_ORIGINS = 'allowed_http_origins';

    /**
     * allowed_http_origin
     */
    const ALLOWED_HTTP_ORIGIN = 'allowed_http_origin';

    /**
     * http_request_host_is_external
     */
    const HTTP_REQUEST_HOST_IS_EXTERNAL = 'http_request_host_is_external';

    /**
     * wp_kses_allowed_html
     */
    const WP_KSES_ALLOWED_HTML = 'wp_kses_allowed_html';

    /**
     * pre_kses
     */
    const PRE_KSES = 'pre_kses';

    /**
     * safe_style_css
     */
    const SAFE_STYLE_CSS = 'safe_style_css';

    /**
     * locale
     */
    const LOCALE = 'locale';

    /**
     * gettext
     */
    const GETTEXT = 'gettext';

    /**
     * gettext_with_context
     */
    const GETTEXT_WITH_CONTEXT = 'gettext_with_context';

    /**
     * ngettext
     */
    const NGETTEXT = 'ngettext';

    /**
     * ngettext_with_context
     */
    const NGETTEXT_WITH_CONTEXT = 'ngettext_with_context';

    /**
     * override_load_textdomain
     */
    const OVERRIDE_LOAD_TEXTDOMAIN = 'override_load_textdomain';

    /**
     * load_textdomain_mofile
     */
    const LOAD_TEXTDOMAIN_MOFILE = 'load_textdomain_mofile';

    /**
     * override_unload_textdomain
     */
    const OVERRIDE_UNLOAD_TEXTDOMAIN = 'override_unload_textdomain';

    /**
     * plugin_locale
     */
    const PLUGIN_LOCALE = 'plugin_locale';

    /**
     * theme_locale
     */
    const THEME_LOCALE = 'theme_locale';

    /**
     * user_trailingslashit
     */
    const USER_TRAILINGSLASHIT = 'user_trailingslashit';

    /**
     * pre_post_link
     */
    const PRE_POST_LINK = 'pre_post_link';

    /**
     * post_link_category
     */
    const POST_LINK_CATEGORY = 'post_link_category';

    /**
     * post_link
     */
    const POST_LINK = 'post_link';

    /**
     * post_type_link
     */
    const POST_TYPE_LINK = 'post_type_link';

    /**
     * page_link
     */
    const PAGE_LINK = 'page_link';

    /**
     * _get_page_link
     */
    const _GET_PAGE_LINK = '_get_page_link';

    /**
     * attachment_link
     */
    const ATTACHMENT_LINK = 'attachment_link';

    /**
     * year_link
     */
    const YEAR_LINK = 'year_link';

    /**
     * month_link
     */
    const MONTH_LINK = 'month_link';

    /**
     * day_link
     */
    const DAY_LINK = 'day_link';

    /**
     * the_feed_link
     */
    const THE_FEED_LINK = 'the_feed_link';

    /**
     * feed_link
     */
    const FEED_LINK = 'feed_link';

    /**
     * post_comments_feed_link
     */
    const POST_COMMENTS_FEED_LINK = 'post_comments_feed_link';

    /**
     * post_comments_feed_link_html
     */
    const POST_COMMENTS_FEED_LINK_HTML = 'post_comments_feed_link_html';

    /**
     * author_feed_link
     */
    const AUTHOR_FEED_LINK = 'author_feed_link';

    /**
     * category_feed_link
     */
    const CATEGORY_FEED_LINK = 'category_feed_link';

    /**
     * tag_feed_link
     */
    const TAG_FEED_LINK = 'tag_feed_link';

    /**
     * taxonomy_feed_link
     */
    const TAXONOMY_FEED_LINK = 'taxonomy_feed_link';

    /**
     * get_edit_tag_link
     */
    const GET_EDIT_TAG_LINK = 'get_edit_tag_link';

    /**
     * edit_tag_link
     */
    const EDIT_TAG_LINK = 'edit_tag_link';

    /**
     * get_edit_term_link
     */
    const GET_EDIT_TERM_LINK = 'get_edit_term_link';

    /**
     * edit_term_link
     */
    const EDIT_TERM_LINK = 'edit_term_link';

    /**
     * search_link
     */
    const SEARCH_LINK = 'search_link';

    /**
     * search_feed_link
     */
    const SEARCH_FEED_LINK = 'search_feed_link';

    /**
     * post_type_archive_link
     */
    const POST_TYPE_ARCHIVE_LINK = 'post_type_archive_link';

    /**
     * post_type_archive_feed_link
     */
    const POST_TYPE_ARCHIVE_FEED_LINK = 'post_type_archive_feed_link';

    /**
     * preview_post_link
     */
    const PREVIEW_POST_LINK = 'preview_post_link';

    /**
     * get_edit_post_link
     */
    const GET_EDIT_POST_LINK = 'get_edit_post_link';

    /**
     * edit_post_link
     */
    const EDIT_POST_LINK = 'edit_post_link';

    /**
     * get_delete_post_link
     */
    const GET_DELETE_POST_LINK = 'get_delete_post_link';

    /**
     * get_edit_comment_link
     */
    const GET_EDIT_COMMENT_LINK = 'get_edit_comment_link';

    /**
     * edit_comment_link
     */
    const EDIT_COMMENT_LINK = 'edit_comment_link';

    /**
     * get_edit_bookmark_link
     */
    const GET_EDIT_BOOKMARK_LINK = 'get_edit_bookmark_link';

    /**
     * edit_bookmark_link
     */
    const EDIT_BOOKMARK_LINK = 'edit_bookmark_link';

    /**
     * get_edit_user_link
     */
    const GET_EDIT_USER_LINK = 'get_edit_user_link';

    /**
     * get_{$adjacent}_post_excluded_terms
     */
    const GET_ADJACENT_POST_EXCLUDED_TERMS = 'get_{$adjacent}_post_excluded_terms';

    /**
     * get_{$adjacent}_post_join
     */
    const GET_ADJACENT_POST_JOIN = 'get_{$adjacent}_post_join';

    /**
     * get_{$adjacent}_post_where
     */
    const GET_ADJACENT_POST_WHERE = 'get_{$adjacent}_post_where';

    /**
     * get_{$adjacent}_post_sort
     */
    const GET_ADJACENT_POST_SORT = 'get_{$adjacent}_post_sort';

    /**
     * {$adjacent}_post_rel_link
     */
    const ADJACENT_POST_REL_LINK = '{$adjacent}_post_rel_link';

    /**
     * {$adjacent}_post_link
     */
    const ADJACENT_POST_LINK = '{$adjacent}_post_link';

    /**
     * get_pagenum_link
     */
    const GET_PAGENUM_LINK = 'get_pagenum_link';

    /**
     * next_posts_link_attributes
     */
    const NEXT_POSTS_LINK_ATTRIBUTES = 'next_posts_link_attributes';

    /**
     * previous_posts_link_attributes
     */
    const PREVIOUS_POSTS_LINK_ATTRIBUTES = 'previous_posts_link_attributes';

    /**
     * navigation_markup_template
     */
    const NAVIGATION_MARKUP_TEMPLATE = 'navigation_markup_template';

    /**
     * get_comments_pagenum_link
     */
    const GET_COMMENTS_PAGENUM_LINK = 'get_comments_pagenum_link';

    /**
     * next_comments_link_attributes
     */
    const NEXT_COMMENTS_LINK_ATTRIBUTES = 'next_comments_link_attributes';

    /**
     * previous_comments_link_attributes
     */
    const PREVIOUS_COMMENTS_LINK_ATTRIBUTES = 'previous_comments_link_attributes';

    /**
     * shortcut_link
     */
    const SHORTCUT_LINK = 'shortcut_link';

    /**
     * home_url
     */
    const HOME_URL = 'home_url';

    /**
     * site_url
     */
    const SITE_URL = 'site_url';

    /**
     * admin_url
     */
    const ADMIN_URL = 'admin_url';

    /**
     * includes_url
     */
    const INCLUDES_URL = 'includes_url';

    /**
     * content_url
     */
    const CONTENT_URL = 'content_url';

    /**
     * plugins_url
     */
    const PLUGINS_URL = 'plugins_url';

    /**
     * network_site_url
     */
    const NETWORK_SITE_URL = 'network_site_url';

    /**
     * network_home_url
     */
    const NETWORK_HOME_URL = 'network_home_url';

    /**
     * network_admin_url
     */
    const NETWORK_ADMIN_URL = 'network_admin_url';

    /**
     * user_admin_url
     */
    const USER_ADMIN_URL = 'user_admin_url';

    /**
     * set_url_scheme
     */
    const SET_URL_SCHEME = 'set_url_scheme';

    /**
     * user_dashboard_url
     */
    const USER_DASHBOARD_URL = 'user_dashboard_url';

    /**
     * edit_profile_url
     */
    const EDIT_PROFILE_URL = 'edit_profile_url';

    /**
     * pre_get_shortlink
     */
    const PRE_GET_SHORTLINK = 'pre_get_shortlink';

    /**
     * get_shortlink
     */
    const GET_SHORTLINK = 'get_shortlink';

    /**
     * the_shortlink
     */
    const THE_SHORTLINK = 'the_shortlink';

    /**
     * pre_get_avatar_data
     */
    const PRE_GET_AVATAR_DATA = 'pre_get_avatar_data';

    /**
     * get_avatar_data
     */
    const GET_AVATAR_DATA = 'get_avatar_data';

    /**
     * get_avatar_comment_types
     */
    const GET_AVATAR_COMMENT_TYPES = 'get_avatar_comment_types';

    /**
     * get_avatar_url
     */
    const GET_AVATAR_URL = 'get_avatar_url';

    /**
     * editor_max_image_size
     */
    const EDITOR_MAX_IMAGE_SIZE = 'editor_max_image_size';

    /**
     * image_downsize
     */
    const IMAGE_DOWNSIZE = 'image_downsize';

    /**
     * get_image_tag_class
     */
    const GET_IMAGE_TAG_CLASS = 'get_image_tag_class';

    /**
     * get_image_tag
     */
    const GET_IMAGE_TAG = 'get_image_tag';

    /**
     * wp_constrain_dimensions
     */
    const WP_CONSTRAIN_DIMENSIONS = 'wp_constrain_dimensions';

    /**
     * image_resize_dimensions
     */
    const IMAGE_RESIZE_DIMENSIONS = 'image_resize_dimensions';

    /**
     * image_get_intermediate_size
     */
    const IMAGE_GET_INTERMEDIATE_SIZE = 'image_get_intermediate_size';

    /**
     * intermediate_image_sizes
     */
    const INTERMEDIATE_IMAGE_SIZES = 'intermediate_image_sizes';

    /**
     * wp_get_attachment_image_src
     */
    const WP_GET_ATTACHMENT_IMAGE_SRC = 'wp_get_attachment_image_src';

    /**
     * wp_get_attachment_image_attributes
     */
    const WP_GET_ATTACHMENT_IMAGE_ATTRIBUTES = 'wp_get_attachment_image_attributes';

    /**
     * max_srcset_image_width
     */
    const MAX_SRCSET_IMAGE_WIDTH = 'max_srcset_image_width';

    /**
     * wp_calculate_image_srcset
     */
    const WP_CALCULATE_IMAGE_SRCSET = 'wp_calculate_image_srcset';

    /**
     * wp_calculate_image_sizes
     */
    const WP_CALCULATE_IMAGE_SIZES = 'wp_calculate_image_sizes';

    /**
     * img_caption_shortcode
     */
    const IMG_CAPTION_SHORTCODE = 'img_caption_shortcode';

    /**
     * img_caption_shortcode_width
     */
    const IMG_CAPTION_SHORTCODE_WIDTH = 'img_caption_shortcode_width';

    /**
     * post_gallery
     */
    const POST_GALLERY = 'post_gallery';

    /**
     * use_default_gallery_style
     */
    const USE_DEFAULT_GALLERY_STYLE = 'use_default_gallery_style';

    /**
     * gallery_style
     */
    const GALLERY_STYLE = 'gallery_style';

    /**
     * post_playlist
     */
    const POST_PLAYLIST = 'post_playlist';

    /**
     * wp_mediaelement_fallback
     */
    const WP_MEDIAELEMENT_FALLBACK = 'wp_mediaelement_fallback';

    /**
     * wp_audio_extensions
     */
    const WP_AUDIO_EXTENSIONS = 'wp_audio_extensions';

    /**
     * wp_get_attachment_id3_keys
     */
    const WP_GET_ATTACHMENT_ID3_KEYS = 'wp_get_attachment_id3_keys';

    /**
     * wp_audio_shortcode_override
     */
    const WP_AUDIO_SHORTCODE_OVERRIDE = 'wp_audio_shortcode_override';

    /**
     * wp_audio_shortcode_library
     */
    const WP_AUDIO_SHORTCODE_LIBRARY = 'wp_audio_shortcode_library';

    /**
     * wp_audio_shortcode_class
     */
    const WP_AUDIO_SHORTCODE_CLASS = 'wp_audio_shortcode_class';

    /**
     * wp_audio_shortcode
     */
    const WP_AUDIO_SHORTCODE = 'wp_audio_shortcode';

    /**
     * wp_video_extensions
     */
    const WP_VIDEO_EXTENSIONS = 'wp_video_extensions';

    /**
     * wp_video_shortcode_override
     */
    const WP_VIDEO_SHORTCODE_OVERRIDE = 'wp_video_shortcode_override';

    /**
     * wp_video_shortcode_library
     */
    const WP_VIDEO_SHORTCODE_LIBRARY = 'wp_video_shortcode_library';

    /**
     * wp_video_shortcode_class
     */
    const WP_VIDEO_SHORTCODE_CLASS = 'wp_video_shortcode_class';

    /**
     * wp_video_shortcode
     */
    const WP_VIDEO_SHORTCODE = 'wp_video_shortcode';

    /**
     * {$adjacent}_image_link
     */
    const ADJACENT_IMAGE_LINK = '{$adjacent}_image_link';

    /**
     * upload_size_limit
     */
    const UPLOAD_SIZE_LIMIT = 'upload_size_limit';

    /**
     * wp_image_editors
     */
    const WP_IMAGE_EDITORS = 'wp_image_editors';

    /**
     * plupload_default_settings
     */
    const PLUPLOAD_DEFAULT_SETTINGS = 'plupload_default_settings';

    /**
     * plupload_default_params
     */
    const PLUPLOAD_DEFAULT_PARAMS = 'plupload_default_params';

    /**
     * wp_prepare_attachment_for_js
     */
    const WP_PREPARE_ATTACHMENT_FOR_JS = 'wp_prepare_attachment_for_js';

    /**
     * media_view_settings
     */
    const MEDIA_VIEW_SETTINGS = 'media_view_settings';

    /**
     * media_view_strings
     */
    const MEDIA_VIEW_STRINGS = 'media_view_strings';

    /**
     * get_attached_media_args
     */
    const GET_ATTACHED_MEDIA_ARGS = 'get_attached_media_args';

    /**
     * get_attached_media
     */
    const GET_ATTACHED_MEDIA = 'get_attached_media';

    /**
     * media_embedded_in_content_allowed_types
     */
    const MEDIA_EMBEDDED_IN_CONTENT_ALLOWED_TYPES = 'media_embedded_in_content_allowed_types';

    /**
     * get_post_galleries
     */
    const GET_POST_GALLERIES = 'get_post_galleries';

    /**
     * get_post_gallery
     */
    const GET_POST_GALLERY = 'get_post_gallery';

    /**
     * attachment_url_to_postid
     */
    const ATTACHMENT_URL_TO_POSTID = 'attachment_url_to_postid';

    /**
     * add_{$meta_type}_metadata
     */
    const ADD_META_TYPE_METADATA = 'add_{$meta_type}_metadata';

    /**
     * update_{$meta_type}_metadata
     */
    const UPDATE_META_TYPE_METADATA = 'update_{$meta_type}_metadata';

    /**
     * delete_{$meta_type}_metadata
     */
    const DELETE_META_TYPE_METADATA = 'delete_{$meta_type}_metadata';

    /**
     * get_{$meta_type}_metadata
     */
    const GET_META_TYPE_METADATA = 'get_{$meta_type}_metadata';

    /**
     * is_protected_meta
     */
    const IS_PROTECTED_META = 'is_protected_meta';

    /**
     * sanitize_{$meta_type}_meta_{$meta_key}
     */
    const SANITIZE_META_TYPE_META_META_KEY = 'sanitize_{$meta_type}_meta_{$meta_key}';

    /**
     * blog_details
     */
    const BLOG_DETAILS = 'blog_details';

    /**
     * blog_option_{$option}
     */
    const BLOG_OPTION_OPTION = 'blog_option_{$option}';

    /**
     * graceful_fail
     */
    const GRACEFUL_FAIL = 'graceful_fail';

    /**
     * graceful_fail_template
     */
    const GRACEFUL_FAIL_TEMPLATE = 'graceful_fail_template';

    /**
     * is_email_address_unsafe
     */
    const IS_EMAIL_ADDRESS_UNSAFE = 'is_email_address_unsafe';

    /**
     * wpmu_validate_user_signup
     */
    const WPMU_VALIDATE_USER_SIGNUP = 'wpmu_validate_user_signup';

    /**
     * newblogname
     */
    const NEWBLOGNAME = 'newblogname';

    /**
     * wpmu_validate_blog_signup
     */
    const WPMU_VALIDATE_BLOG_SIGNUP = 'wpmu_validate_blog_signup';

    /**
     * wpmu_signup_blog_notification
     */
    const WPMU_SIGNUP_BLOG_NOTIFICATION = 'wpmu_signup_blog_notification';

    /**
     * wpmu_signup_blog_notification_email
     */
    const WPMU_SIGNUP_BLOG_NOTIFICATION_EMAIL = 'wpmu_signup_blog_notification_email';

    /**
     * wpmu_signup_blog_notification_subject
     */
    const WPMU_SIGNUP_BLOG_NOTIFICATION_SUBJECT = 'wpmu_signup_blog_notification_subject';

    /**
     * wpmu_signup_user_notification
     */
    const WPMU_SIGNUP_USER_NOTIFICATION = 'wpmu_signup_user_notification';

    /**
     * wpmu_signup_user_notification_email
     */
    const WPMU_SIGNUP_USER_NOTIFICATION_EMAIL = 'wpmu_signup_user_notification_email';

    /**
     * wpmu_signup_user_notification_subject
     */
    const WPMU_SIGNUP_USER_NOTIFICATION_SUBJECT = 'wpmu_signup_user_notification_subject';

    /**
     * newblog_notify_siteadmin
     */
    const NEWBLOG_NOTIFY_SITEADMIN = 'newblog_notify_siteadmin';

    /**
     * newuser_notify_siteadmin
     */
    const NEWUSER_NOTIFY_SITEADMIN = 'newuser_notify_siteadmin';

    /**
     * domain_exists
     */
    const DOMAIN_EXISTS = 'domain_exists';

    /**
     * wpmu_welcome_notification
     */
    const WPMU_WELCOME_NOTIFICATION = 'wpmu_welcome_notification';

    /**
     * update_welcome_email
     */
    const UPDATE_WELCOME_EMAIL = 'update_welcome_email';

    /**
     * update_welcome_subject
     */
    const UPDATE_WELCOME_SUBJECT = 'update_welcome_subject';

    /**
     * wpmu_welcome_user_notification
     */
    const WPMU_WELCOME_USER_NOTIFICATION = 'wpmu_welcome_user_notification';

    /**
     * update_welcome_user_email
     */
    const UPDATE_WELCOME_USER_EMAIL = 'update_welcome_user_email';

    /**
     * update_welcome_user_subject
     */
    const UPDATE_WELCOME_USER_SUBJECT = 'update_welcome_user_subject';

    /**
     * blog_redirect_404
     */
    const BLOG_REDIRECT_404 = 'blog_redirect_404';

    /**
     * enable_live_network_counts
     */
    const ENABLE_LIVE_NETWORK_COUNTS = 'enable_live_network_counts';

    /**
     * pre_get_space_used
     */
    const PRE_GET_SPACE_USED = 'pre_get_space_used';

    /**
     * get_space_allowed
     */
    const GET_SPACE_ALLOWED = 'get_space_allowed';

    /**
     * wp_is_large_network
     */
    const WP_IS_LARGE_NETWORK = 'wp_is_large_network';

    /**
     * subdirectory_reserved_names
     */
    const SUBDIRECTORY_RESERVED_NAMES = 'subdirectory_reserved_names';

    /**
     * ms_site_check
     */
    const MS_SITE_CHECK = 'ms_site_check';

    /**
     * site_by_path_segments_count
     */
    const SITE_BY_PATH_SEGMENTS_COUNT = 'site_by_path_segments_count';

    /**
     * pre_get_site_by_path
     */
    const PRE_GET_SITE_BY_PATH = 'pre_get_site_by_path';

    /**
     * nav_menu_item_args
     */
    const NAV_MENU_ITEM_ARGS = 'nav_menu_item_args';

    /**
     * nav_menu_css_class
     */
    const NAV_MENU_CSS_CLASS = 'nav_menu_css_class';

    /**
     * nav_menu_item_id
     */
    const NAV_MENU_ITEM_ID = 'nav_menu_item_id';

    /**
     * nav_menu_link_attributes
     */
    const NAV_MENU_LINK_ATTRIBUTES = 'nav_menu_link_attributes';

    /**
     * nav_menu_item_title
     */
    const NAV_MENU_ITEM_TITLE = 'nav_menu_item_title';

    /**
     * walker_nav_menu_start_el
     */
    const WALKER_NAV_MENU_START_EL = 'walker_nav_menu_start_el';

    /**
     * wp_nav_menu_args
     */
    const WP_NAV_MENU_ARGS = 'wp_nav_menu_args';

    /**
     * pre_wp_nav_menu
     */
    const PRE_WP_NAV_MENU = 'pre_wp_nav_menu';

    /**
     * wp_nav_menu_container_allowedtags
     */
    const WP_NAV_MENU_CONTAINER_ALLOWEDTAGS = 'wp_nav_menu_container_allowedtags';

    /**
     * wp_nav_menu_objects
     */
    const WP_NAV_MENU_OBJECTS = 'wp_nav_menu_objects';

    /**
     * wp_nav_menu_items
     */
    const WP_NAV_MENU_ITEMS = 'wp_nav_menu_items';

    /**
     * wp_nav_menu_{$menu->slug}_items
     */
    const WP_NAV_MENU_SLUG_ITEMS = 'wp_nav_menu_{$menu->slug}_items';

    /**
     * wp_nav_menu
     */
    const WP_NAV_MENU = 'wp_nav_menu';

    /**
     * wp_get_nav_menu_object
     */
    const WP_GET_NAV_MENU_OBJECT = 'wp_get_nav_menu_object';

    /**
     * has_nav_menu
     */
    const HAS_NAV_MENU = 'has_nav_menu';

    /**
     * wp_get_nav_menus
     */
    const WP_GET_NAV_MENUS = 'wp_get_nav_menus';

    /**
     * wp_get_nav_menu_items
     */
    const WP_GET_NAV_MENU_ITEMS = 'wp_get_nav_menu_items';

    /**
     * nav_menu_attr_title
     */
    const NAV_MENU_ATTR_TITLE = 'nav_menu_attr_title';

    /**
     * nav_menu_description
     */
    const NAV_MENU_DESCRIPTION = 'nav_menu_description';

    /**
     * wp_setup_nav_menu_item
     */
    const WP_SETUP_NAV_MENU_ITEM = 'wp_setup_nav_menu_item';

    /**
     * pre_option_{$option}
     */
    const PRE_OPTION_OPTION = 'pre_option_{$option}';

    /**
     * default_option_{$option}
     */
    const DEFAULT_OPTION_OPTION = 'default_option_{$option}';

    /**
     * option_{$option}
     */
    const OPTION_OPTION = 'option_{$option}';

    /**
     * pre_update_option_{$option}
     */
    const PRE_UPDATE_OPTION_OPTION = 'pre_update_option_{$option}';

    /**
     * pre_update_option
     */
    const PRE_UPDATE_OPTION = 'pre_update_option';

    /**
     * pre_transient_{$transient}
     */
    const PRE_TRANSIENT_TRANSIENT = 'pre_transient_{$transient}';

    /**
     * transient_{$transient}
     */
    const TRANSIENT_TRANSIENT = 'transient_{$transient}';

    /**
     * pre_set_transient_{$transient}
     */
    const PRE_SET_TRANSIENT_TRANSIENT = 'pre_set_transient_{$transient}';

    /**
     * expiration_of_transient_{$transient}
     */
    const EXPIRATION_OF_TRANSIENT_TRANSIENT = 'expiration_of_transient_{$transient}';

    /**
     * pre_site_option_{$option}
     */
    const PRE_SITE_OPTION_OPTION = 'pre_site_option_{$option}';

    /**
     * default_site_option_{$option}
     */
    const DEFAULT_SITE_OPTION_OPTION = 'default_site_option_{$option}';

    /**
     * site_option_{$option}
     */
    const SITE_OPTION_OPTION = 'site_option_{$option}';

    /**
     * pre_add_site_option_{$option}
     */
    const PRE_ADD_SITE_OPTION_OPTION = 'pre_add_site_option_{$option}';

    /**
     * pre_update_site_option_{$option}
     */
    const PRE_UPDATE_SITE_OPTION_OPTION = 'pre_update_site_option_{$option}';

    /**
     * pre_site_transient_{$transient}
     */
    const PRE_SITE_TRANSIENT_TRANSIENT = 'pre_site_transient_{$transient}';

    /**
     * site_transient_{$transient}
     */
    const SITE_TRANSIENT_TRANSIENT = 'site_transient_{$transient}';

    /**
     * pre_set_site_transient_{$transient}
     */
    const PRE_SET_SITE_TRANSIENT_TRANSIENT = 'pre_set_site_transient_{$transient}';

    /**
     * expiration_of_site_transient_{$transient}
     */
    const EXPIRATION_OF_SITE_TRANSIENT_TRANSIENT = 'expiration_of_site_transient_{$transient}';

    /**
     * determine_current_user
     */
    const DETERMINE_CURRENT_USER = 'determine_current_user';

    /**
     * wp_mail
     */
    const WP_MAIL = 'wp_mail';

    /**
     * wp_mail_from
     */
    const WP_MAIL_FROM = 'wp_mail_from';

    /**
     * wp_mail_from_name
     */
    const WP_MAIL_FROM_NAME = 'wp_mail_from_name';

    /**
     * wp_mail_charset
     */
    const WP_MAIL_CHARSET = 'wp_mail_charset';

    /**
     * authenticate
     */
    const AUTHENTICATE = 'authenticate';

    /**
     * auth_cookie
     */
    const AUTH_COOKIE = 'auth_cookie';

    /**
     * auth_cookie_expiration
     */
    const AUTH_COOKIE_EXPIRATION = 'auth_cookie_expiration';

    /**
     * secure_auth_cookie
     */
    const SECURE_AUTH_COOKIE = 'secure_auth_cookie';

    /**
     * secure_logged_in_cookie
     */
    const SECURE_LOGGED_IN_COOKIE = 'secure_logged_in_cookie';

    /**
     * secure_auth_redirect
     */
    const SECURE_AUTH_REDIRECT = 'secure_auth_redirect';

    /**
     * auth_redirect_scheme
     */
    const AUTH_REDIRECT_SCHEME = 'auth_redirect_scheme';

    /**
     * wp_redirect
     */
    const WP_REDIRECT = 'wp_redirect';

    /**
     * wp_redirect_status
     */
    const WP_REDIRECT_STATUS = 'wp_redirect_status';

    /**
     * wp_safe_redirect_fallback
     */
    const WP_SAFE_REDIRECT_FALLBACK = 'wp_safe_redirect_fallback';

    /**
     * allowed_redirect_hosts
     */
    const ALLOWED_REDIRECT_HOSTS = 'allowed_redirect_hosts';

    /**
     * comment_notification_recipients
     */
    const COMMENT_NOTIFICATION_RECIPIENTS = 'comment_notification_recipients';

    /**
     * comment_notification_notify_author
     */
    const COMMENT_NOTIFICATION_NOTIFY_AUTHOR = 'comment_notification_notify_author';

    /**
     * comment_notification_text
     */
    const COMMENT_NOTIFICATION_TEXT = 'comment_notification_text';

    /**
     * comment_notification_subject
     */
    const COMMENT_NOTIFICATION_SUBJECT = 'comment_notification_subject';

    /**
     * comment_notification_headers
     */
    const COMMENT_NOTIFICATION_HEADERS = 'comment_notification_headers';

    /**
     * comment_moderation_recipients
     */
    const COMMENT_MODERATION_RECIPIENTS = 'comment_moderation_recipients';

    /**
     * comment_moderation_text
     */
    const COMMENT_MODERATION_TEXT = 'comment_moderation_text';

    /**
     * comment_moderation_subject
     */
    const COMMENT_MODERATION_SUBJECT = 'comment_moderation_subject';

    /**
     * comment_moderation_headers
     */
    const COMMENT_MODERATION_HEADERS = 'comment_moderation_headers';

    /**
     * nonce_life
     */
    const NONCE_LIFE = 'nonce_life';

    /**
     * nonce_user_logged_out
     */
    const NONCE_USER_LOGGED_OUT = 'nonce_user_logged_out';

    /**
     * salt
     */
    const SALT = 'salt';

    /**
     * check_password
     */
    const CHECK_PASSWORD = 'check_password';

    /**
     * random_password
     */
    const RANDOM_PASSWORD = 'random_password';

    /**
     * pre_get_avatar
     */
    const PRE_GET_AVATAR = 'pre_get_avatar';

    /**
     * get_avatar
     */
    const GET_AVATAR = 'get_avatar';

    /**
     * {$tag}
     */
    const TAG = '{$tag}';

    /**
     * protected_title_format
     */
    const PROTECTED_TITLE_FORMAT = 'protected_title_format';

    /**
     * private_title_format
     */
    const PRIVATE_TITLE_FORMAT = 'private_title_format';

    /**
     * the_guid
     */
    const THE_GUID = 'the_guid';

    /**
     * get_the_guid
     */
    const GET_THE_GUID = 'get_the_guid';

    /**
     * the_content_more_link
     */
    const THE_CONTENT_MORE_LINK = 'the_content_more_link';

    /**
     * get_the_excerpt
     */
    const GET_THE_EXCERPT = 'get_the_excerpt';

    /**
     * post_class
     */
    const POST_CLASS = 'post_class';

    /**
     * body_class
     */
    const BODY_CLASS = 'body_class';

    /**
     * wp_link_pages_args
     */
    const WP_LINK_PAGES_ARGS = 'wp_link_pages_args';

    /**
     * wp_link_pages_link
     */
    const WP_LINK_PAGES_LINK = 'wp_link_pages_link';

    /**
     * wp_link_pages
     */
    const WP_LINK_PAGES = 'wp_link_pages';

    /**
     * the_meta_key
     */
    const THE_META_KEY = 'the_meta_key';

    /**
     * wp_dropdown_pages
     */
    const WP_DROPDOWN_PAGES = 'wp_dropdown_pages';

    /**
     * wp_list_pages_excludes
     */
    const WP_LIST_PAGES_EXCLUDES = 'wp_list_pages_excludes';

    /**
     * wp_list_pages
     */
    const WP_LIST_PAGES = 'wp_list_pages';

    /**
     * wp_page_menu_args
     */
    const WP_PAGE_MENU_ARGS = 'wp_page_menu_args';

    /**
     * wp_page_menu
     */
    const WP_PAGE_MENU = 'wp_page_menu';

    /**
     * wp_get_attachment_link
     */
    const WP_GET_ATTACHMENT_LINK = 'wp_get_attachment_link';

    /**
     * prepend_attachment
     */
    const PREPEND_ATTACHMENT = 'prepend_attachment';

    /**
     * the_password_form
     */
    const THE_PASSWORD_FORM = 'the_password_form';

    /**
     * wp_post_revision_title_expanded
     */
    const WP_POST_REVISION_TITLE_EXPANDED = 'wp_post_revision_title_expanded';

    /**
     * post_thumbnail_size
     */
    const POST_THUMBNAIL_SIZE = 'post_thumbnail_size';

    /**
     * post_thumbnail_html
     */
    const POST_THUMBNAIL_HTML = 'post_thumbnail_html';

    /**
     * get_attached_file
     */
    const GET_ATTACHED_FILE = 'get_attached_file';

    /**
     * update_attached_file
     */
    const UPDATE_ATTACHED_FILE = 'update_attached_file';

    /**
     * _wp_relative_upload_path
     */
    const _WP_RELATIVE_UPLOAD_PATH = '_wp_relative_upload_path';

    /**
     * get_post_status
     */
    const GET_POST_STATUS = 'get_post_status';

    /**
     * register_post_type_args
     */
    const REGISTER_POST_TYPE_ARGS = 'register_post_type_args';

    /**
     * post_type_labels_{$post_type}
     */
    const POST_TYPE_LABELS_POST_TYPE = 'post_type_labels_{$post_type}';

    /**
     * {$field_no_prefix}_edit_pre
     */
    const FIELD_NO_PREFIX_EDIT_PRE = '{$field_no_prefix}_edit_pre';

    /**
     * edit_post_{$field}
     */
    const EDIT_POST_FIELD = 'edit_post_{$field}';

    /**
     * {$field_no_prefix}_save_pre
     */
    const FIELD_NO_PREFIX_SAVE_PRE = '{$field_no_prefix}_save_pre';

    /**
     * pre_post_{$field}
     */
    const PRE_POST_FIELD = 'pre_post_{$field}';

    /**
     * {$field}_pre
     */
    const FIELD_PRE = '{$field}_pre';

    /**
     * post_{$field}
     */
    const POST_FIELD = 'post_{$field}';

    /**
     * wp_count_posts
     */
    const WP_COUNT_POSTS = 'wp_count_posts';

    /**
     * wp_count_attachments
     */
    const WP_COUNT_ATTACHMENTS = 'wp_count_attachments';

    /**
     * post_mime_types
     */
    const POST_MIME_TYPES = 'post_mime_types';

    /**
     * pre_delete_post
     */
    const PRE_DELETE_POST = 'pre_delete_post';

    /**
     * wp_insert_post_empty_content
     */
    const WP_INSERT_POST_EMPTY_CONTENT = 'wp_insert_post_empty_content';

    /**
     * wp_insert_post_parent
     */
    const WP_INSERT_POST_PARENT = 'wp_insert_post_parent';

    /**
     * wp_insert_attachment_data
     */
    const WP_INSERT_ATTACHMENT_DATA = 'wp_insert_attachment_data';

    /**
     * wp_insert_post_data
     */
    const WP_INSERT_POST_DATA = 'wp_insert_post_data';

    /**
     * wp_unique_post_slug_is_bad_attachment_slug
     */
    const WP_UNIQUE_POST_SLUG_IS_BAD_ATTACHMENT_SLUG = 'wp_unique_post_slug_is_bad_attachment_slug';

    /**
     * wp_unique_post_slug_is_bad_hierarchical_slug
     */
    const WP_UNIQUE_POST_SLUG_IS_BAD_HIERARCHICAL_SLUG = 'wp_unique_post_slug_is_bad_hierarchical_slug';

    /**
     * wp_unique_post_slug_is_bad_flat_slug
     */
    const WP_UNIQUE_POST_SLUG_IS_BAD_FLAT_SLUG = 'wp_unique_post_slug_is_bad_flat_slug';

    /**
     * wp_unique_post_slug
     */
    const WP_UNIQUE_POST_SLUG = 'wp_unique_post_slug';

    /**
     * add_ping
     */
    const ADD_PING = 'add_ping';

    /**
     * get_enclosed
     */
    const GET_ENCLOSED = 'get_enclosed';

    /**
     * get_pung
     */
    const GET_PUNG = 'get_pung';

    /**
     * get_to_ping
     */
    const GET_TO_PING = 'get_to_ping';

    /**
     * get_page_uri
     */
    const GET_PAGE_URI = 'get_page_uri';

    /**
     * get_pages
     */
    const GET_PAGES = 'get_pages';

    /**
     * wp_get_attachment_metadata
     */
    const WP_GET_ATTACHMENT_METADATA = 'wp_get_attachment_metadata';

    /**
     * wp_update_attachment_metadata
     */
    const WP_UPDATE_ATTACHMENT_METADATA = 'wp_update_attachment_metadata';

    /**
     * wp_get_attachment_url
     */
    const WP_GET_ATTACHMENT_URL = 'wp_get_attachment_url';

    /**
     * wp_get_attachment_thumb_file
     */
    const WP_GET_ATTACHMENT_THUMB_FILE = 'wp_get_attachment_thumb_file';

    /**
     * wp_get_attachment_thumb_url
     */
    const WP_GET_ATTACHMENT_THUMB_URL = 'wp_get_attachment_thumb_url';

    /**
     * icon_dir_uri
     */
    const ICON_DIR_URI = 'icon_dir_uri';

    /**
     * icon_dirs
     */
    const ICON_DIRS = 'icon_dirs';

    /**
     * wp_mime_type_icon
     */
    const WP_MIME_TYPE_ICON = 'wp_mime_type_icon';

    /**
     * pub_priv_sql_capability
     */
    const PUB_PRIV_SQL_CAPABILITY = 'pub_priv_sql_capability';

    /**
     * get_lastpostdate
     */
    const GET_LASTPOSTDATE = 'get_lastpostdate';

    /**
     * pre_get_lastpostmodified
     */
    const PRE_GET_LASTPOSTMODIFIED = 'pre_get_lastpostmodified';

    /**
     * get_lastpostmodified
     */
    const GET_LASTPOSTMODIFIED = 'get_lastpostmodified';

    /**
     * wp_search_stopwords
     */
    const WP_SEARCH_STOPWORDS = 'wp_search_stopwords';

    /**
     * posts_search
     */
    const POSTS_SEARCH = 'posts_search';

    /**
     * posts_search_orderby
     */
    const POSTS_SEARCH_ORDERBY = 'posts_search_orderby';

    /**
     * posts_where
     */
    const POSTS_WHERE = 'posts_where';

    /**
     * posts_join
     */
    const POSTS_JOIN = 'posts_join';

    /**
     * comment_feed_join
     */
    const COMMENT_FEED_JOIN = 'comment_feed_join';

    /**
     * comment_feed_where
     */
    const COMMENT_FEED_WHERE = 'comment_feed_where';

    /**
     * comment_feed_groupby
     */
    const COMMENT_FEED_GROUPBY = 'comment_feed_groupby';

    /**
     * comment_feed_orderby
     */
    const COMMENT_FEED_ORDERBY = 'comment_feed_orderby';

    /**
     * comment_feed_limits
     */
    const COMMENT_FEED_LIMITS = 'comment_feed_limits';

    /**
     * posts_where_paged
     */
    const POSTS_WHERE_PAGED = 'posts_where_paged';

    /**
     * posts_groupby
     */
    const POSTS_GROUPBY = 'posts_groupby';

    /**
     * posts_join_paged
     */
    const POSTS_JOIN_PAGED = 'posts_join_paged';

    /**
     * posts_orderby
     */
    const POSTS_ORDERBY = 'posts_orderby';

    /**
     * posts_distinct
     */
    const POSTS_DISTINCT = 'posts_distinct';

    /**
     * post_limits
     */
    const POST_LIMITS = 'post_limits';

    /**
     * posts_fields
     */
    const POSTS_FIELDS = 'posts_fields';

    /**
     * posts_clauses
     */
    const POSTS_CLAUSES = 'posts_clauses';

    /**
     * posts_where_request
     */
    const POSTS_WHERE_REQUEST = 'posts_where_request';

    /**
     * posts_groupby_request
     */
    const POSTS_GROUPBY_REQUEST = 'posts_groupby_request';

    /**
     * posts_join_request
     */
    const POSTS_JOIN_REQUEST = 'posts_join_request';

    /**
     * posts_orderby_request
     */
    const POSTS_ORDERBY_REQUEST = 'posts_orderby_request';

    /**
     * posts_distinct_request
     */
    const POSTS_DISTINCT_REQUEST = 'posts_distinct_request';

    /**
     * posts_fields_request
     */
    const POSTS_FIELDS_REQUEST = 'posts_fields_request';

    /**
     * post_limits_request
     */
    const POST_LIMITS_REQUEST = 'post_limits_request';

    /**
     * posts_clauses_request
     */
    const POSTS_CLAUSES_REQUEST = 'posts_clauses_request';

    /**
     * posts_request
     */
    const POSTS_REQUEST = 'posts_request';

    /**
     * split_the_query
     */
    const SPLIT_THE_QUERY = 'split_the_query';

    /**
     * posts_request_ids
     */
    const POSTS_REQUEST_IDS = 'posts_request_ids';

    /**
     * posts_results
     */
    const POSTS_RESULTS = 'posts_results';

    /**
     * the_preview
     */
    const THE_PREVIEW = 'the_preview';

    /**
     * the_posts
     */
    const THE_POSTS = 'the_posts';

    /**
     * found_posts_query
     */
    const FOUND_POSTS_QUERY = 'found_posts_query';

    /**
     * found_posts
     */
    const FOUND_POSTS = 'found_posts';

    /**
     * content_pagination
     */
    const CONTENT_PAGINATION = 'content_pagination';

    /**
     * old_slug_redirect_url
     */
    const OLD_SLUG_REDIRECT_URL = 'old_slug_redirect_url';

    /**
     * wp_rest_server_class
     */
    const WP_REST_SERVER_CLASS = 'wp_rest_server_class';

    /**
     * rest_url_prefix
     */
    const REST_URL_PREFIX = 'rest_url_prefix';

    /**
     * rest_url
     */
    const REST_URL = 'rest_url';

    /**
     * _wp_post_revision_fields
     */
    const _WP_POST_REVISION_FIELDS = '_wp_post_revision_fields';

    /**
     * wp_save_post_revision_check_for_changes
     */
    const WP_SAVE_POST_REVISION_CHECK_FOR_CHANGES = 'wp_save_post_revision_check_for_changes';

    /**
     * wp_save_post_revision_post_has_changed
     */
    const WP_SAVE_POST_REVISION_POST_HAS_CHANGED = 'wp_save_post_revision_post_has_changed';

    /**
     * wp_revisions_to_keep
     */
    const WP_REVISIONS_TO_KEEP = 'wp_revisions_to_keep';

    /**
     * url_to_postid
     */
    const URL_TO_POSTID = 'url_to_postid';

    /**
     * heartbeat_settings
     */
    const HEARTBEAT_SETTINGS = 'heartbeat_settings';

    /**
     * wp_auth_check_interval
     */
    const WP_AUTH_CHECK_INTERVAL = 'wp_auth_check_interval';

    /**
     * mejs_settings
     */
    const MEJS_SETTINGS = 'mejs_settings';

    /**
     * print_head_scripts
     */
    const PRINT_HEAD_SCRIPTS = 'print_head_scripts';

    /**
     * print_footer_scripts
     */
    const PRINT_FOOTER_SCRIPTS = 'print_footer_scripts';

    /**
     * print_admin_styles
     */
    const PRINT_ADMIN_STYLES = 'print_admin_styles';

    /**
     * print_late_styles
     */
    const PRINT_LATE_STYLES = 'print_late_styles';

    /**
     * session_token_manager
     */
    const SESSION_TOKEN_MANAGER = 'session_token_manager';

    /**
     * attach_session_information
     */
    const ATTACH_SESSION_INFORMATION = 'attach_session_information';

    /**
     * shortcode_atts_{$shortcode}
     */
    const SHORTCODE_ATTS_SHORTCODE = 'shortcode_atts_{$shortcode}';

    /**
     * post_format_rewrite_base
     */
    const POST_FORMAT_REWRITE_BASE = 'post_format_rewrite_base';

    /**
     * register_taxonomy_args
     */
    const REGISTER_TAXONOMY_ARGS = 'register_taxonomy_args';

    /**
     * taxonomy_labels_{$taxonomy}
     */
    const TAXONOMY_LABELS_TAXONOMY = 'taxonomy_labels_{$taxonomy}';

    /**
     * get_term
     */
    const GET_TERM = 'get_term';

    /**
     * get_{$taxonomy}
     */
    const GET_TAXONOMY = 'get_{$taxonomy}';

    /**
     * get_terms_defaults
     */
    const GET_TERMS_DEFAULTS = 'get_terms_defaults';

    /**
     * get_terms_args
     */
    const GET_TERMS_ARGS = 'get_terms_args';

    /**
     * get_terms_orderby
     */
    const GET_TERMS_ORDERBY = 'get_terms_orderby';

    /**
     * list_terms_exclusions
     */
    const LIST_TERMS_EXCLUSIONS = 'list_terms_exclusions';

    /**
     * get_terms_fields
     */
    const GET_TERMS_FIELDS = 'get_terms_fields';

    /**
     * terms_clauses
     */
    const TERMS_CLAUSES = 'terms_clauses';

    /**
     * get_terms
     */
    const GET_TERMS = 'get_terms';

    /**
     * edit_term_{$field}
     */
    const EDIT_TERM_FIELD = 'edit_term_{$field}';

    /**
     * edit_{$taxonomy}_{$field}
     */
    const EDIT_TAXONOMY_FIELD = 'edit_{$taxonomy}_{$field}';

    /**
     * pre_term_{$field}
     */
    const PRE_TERM_FIELD = 'pre_term_{$field}';

    /**
     * pre_{$taxonomy}_{$field}
     */
    const PRE_TAXONOMY_FIELD = 'pre_{$taxonomy}_{$field}';

    /**
     * pre_category_nicename
     */
    const PRE_CATEGORY_NICENAME = 'pre_category_nicename';

    /**
     * term_{$field}_rss
     */
    const TERM_FIELD_RSS = 'term_{$field}_rss';

    /**
     * {$taxonomy}_{$field}_rss
     */
    const TAXONOMY_FIELD_RSS = '{$taxonomy}_{$field}_rss';

    /**
     * term_{$field}
     */
    const TERM_FIELD = 'term_{$field}';

    /**
     * {$taxonomy}_{$field}
     */
    const TAXONOMY_FIELD = '{$taxonomy}_{$field}';

    /**
     * get_object_terms
     */
    const GET_OBJECT_TERMS = 'get_object_terms';

    /**
     * wp_get_object_terms
     */
    const WP_GET_OBJECT_TERMS = 'wp_get_object_terms';

    /**
     * pre_insert_term
     */
    const PRE_INSERT_TERM = 'pre_insert_term';

    /**
     * term_id_filter
     */
    const TERM_ID_FILTER = 'term_id_filter';

    /**
     * wp_unique_term_slug_is_bad_slug
     */
    const WP_UNIQUE_TERM_SLUG_IS_BAD_SLUG = 'wp_unique_term_slug_is_bad_slug';

    /**
     * wp_unique_term_slug
     */
    const WP_UNIQUE_TERM_SLUG = 'wp_unique_term_slug';

    /**
     * wp_update_term_parent
     */
    const WP_UPDATE_TERM_PARENT = 'wp_update_term_parent';

    /**
     * tag_link
     */
    const TAG_LINK = 'tag_link';

    /**
     * category_link
     */
    const CATEGORY_LINK = 'category_link';

    /**
     * term_link
     */
    const TERM_LINK = 'term_link';

    /**
     * get_ancestors
     */
    const GET_ANCESTORS = 'get_ancestors';

    /**
     * exit_on_http_head
     */
    const EXIT_ON_HTTP_HEAD = 'exit_on_http_head';

    /**
     * embed_template
     */
    const EMBED_TEMPLATE = 'embed_template';

    /**
     * template_include
     */
    const TEMPLATE_INCLUDE = 'template_include';

    /**
     * {$type}_template
     */
    const TYPE_TEMPLATE = '{$type}_template';

    /**
     * stylesheet
     */
    const STYLESHEET = 'stylesheet';

    /**
     * stylesheet_directory
     */
    const STYLESHEET_DIRECTORY = 'stylesheet_directory';

    /**
     * stylesheet_directory_uri
     */
    const STYLESHEET_DIRECTORY_URI = 'stylesheet_directory_uri';

    /**
     * stylesheet_uri
     */
    const STYLESHEET_URI = 'stylesheet_uri';

    /**
     * locale_stylesheet_uri
     */
    const LOCALE_STYLESHEET_URI = 'locale_stylesheet_uri';

    /**
     * template
     */
    const TEMPLATE = 'template';

    /**
     * template_directory
     */
    const TEMPLATE_DIRECTORY = 'template_directory';

    /**
     * template_directory_uri
     */
    const TEMPLATE_DIRECTORY_URI = 'template_directory_uri';

    /**
     * theme_root
     */
    const THEME_ROOT = 'theme_root';

    /**
     * theme_root_uri
     */
    const THEME_ROOT_URI = 'theme_root_uri';

    /**
     * validate_current_theme
     */
    const VALIDATE_CURRENT_THEME = 'validate_current_theme';

    /**
     * theme_mod_{$name}
     */
    const THEME_MOD_NAME = 'theme_mod_{$name}';

    /**
     * pre_set_theme_mod_{$name}
     */
    const PRE_SET_THEME_MOD_NAME = 'pre_set_theme_mod_{$name}';

    /**
     * get_header_image_tag
     */
    const GET_HEADER_IMAGE_TAG = 'get_header_image_tag';

    /**
     * editor_stylesheets
     */
    const EDITOR_STYLESHEETS = 'editor_stylesheets';

    /**
     * current_theme_supports-{$feature}
     */
    const CURRENT_THEME_SUPPORTS_FEATURE = 'current_theme_supports-{$feature}';

    /**
     * core_version_check_locale
     */
    const CORE_VERSION_CHECK_LOCALE = 'core_version_check_locale';

    /**
     * plugins_update_check_locales
     */
    const PLUGINS_UPDATE_CHECK_LOCALES = 'plugins_update_check_locales';

    /**
     * themes_update_check_locales
     */
    const THEMES_UPDATE_CHECK_LOCALES = 'themes_update_check_locales';

    /**
     * wp_get_update_data
     */
    const WP_GET_UPDATE_DATA = 'wp_get_update_data';

    /**
     * secure_signon_cookie
     */
    const SECURE_SIGNON_COOKIE = 'secure_signon_cookie';

    /**
     * wp_authenticate_user
     */
    const WP_AUTHENTICATE_USER = 'wp_authenticate_user';

    /**
     * check_is_user_spammed
     */
    const CHECK_IS_USER_SPAMMED = 'check_is_user_spammed';

    /**
     * get_usernumposts
     */
    const GET_USERNUMPOSTS = 'get_usernumposts';

    /**
     * get_user_option_{$option}
     */
    const GET_USER_OPTION_OPTION = 'get_user_option_{$option}';

    /**
     * get_blogs_of_user
     */
    const GET_BLOGS_OF_USER = 'get_blogs_of_user';

    /**
     * wp_dropdown_users_args
     */
    const WP_DROPDOWN_USERS_ARGS = 'wp_dropdown_users_args';

    /**
     * wp_dropdown_users
     */
    const WP_DROPDOWN_USERS = 'wp_dropdown_users';

    /**
     * edit_user_{$field}
     */
    const EDIT_USER_FIELD = 'edit_user_{$field}';

    /**
     * pre_user_{$field}
     */
    const PRE_USER_FIELD = 'pre_user_{$field}';

    /**
     * user_{$field}
     */
    const USER_FIELD = 'user_{$field}';

    /**
     * validate_username
     */
    const VALIDATE_USERNAME = 'validate_username';

    /**
     * pre_user_nicename
     */
    const PRE_USER_NICENAME = 'pre_user_nicename';

    /**
     * pre_user_url
     */
    const PRE_USER_URL = 'pre_user_url';

    /**
     * pre_user_email
     */
    const PRE_USER_EMAIL = 'pre_user_email';

    /**
     * pre_user_nickname
     */
    const PRE_USER_NICKNAME = 'pre_user_nickname';

    /**
     * pre_user_first_name
     */
    const PRE_USER_FIRST_NAME = 'pre_user_first_name';

    /**
     * pre_user_last_name
     */
    const PRE_USER_LAST_NAME = 'pre_user_last_name';

    /**
     * pre_user_display_name
     */
    const PRE_USER_DISPLAY_NAME = 'pre_user_display_name';

    /**
     * pre_user_description
     */
    const PRE_USER_DESCRIPTION = 'pre_user_description';

    /**
     * insert_user_meta
     */
    const INSERT_USER_META = 'insert_user_meta';

    /**
     * send_password_change_email
     */
    const SEND_PASSWORD_CHANGE_EMAIL = 'send_password_change_email';

    /**
     * send_email_change_email
     */
    const SEND_EMAIL_CHANGE_EMAIL = 'send_email_change_email';

    /**
     * password_change_email
     */
    const PASSWORD_CHANGE_EMAIL = 'password_change_email';

    /**
     * email_change_email
     */
    const EMAIL_CHANGE_EMAIL = 'email_change_email';

    /**
     * user_contactmethods
     */
    const USER_CONTACTMETHODS = 'user_contactmethods';

    /**
     * password_hint
     */
    const PASSWORD_HINT = 'password_hint';

    /**
     * allow_password_reset
     */
    const ALLOW_PASSWORD_RESET = 'allow_password_reset';

    /**
     * password_reset_expiration
     */
    const PASSWORD_RESET_EXPIRATION = 'password_reset_expiration';

    /**
     * password_reset_key_expired
     */
    const PASSWORD_RESET_KEY_EXPIRED = 'password_reset_key_expired';

    /**
     * user_registration_email
     */
    const USER_REGISTRATION_EMAIL = 'user_registration_email';

    /**
     * registration_errors
     */
    const REGISTRATION_ERRORS = 'registration_errors';

    /**
     * use_google_chrome_frame
     */
    const USE_GOOGLE_CHROME_FRAME = 'use_google_chrome_frame';

    /**
     * dynamic_sidebar_has_widgets
     */
    const DYNAMIC_SIDEBAR_HAS_WIDGETS = 'dynamic_sidebar_has_widgets';

    /**
     * dynamic_sidebar_params
     */
    const DYNAMIC_SIDEBAR_PARAMS = 'dynamic_sidebar_params';

    /**
     * is_active_sidebar
     */
    const IS_ACTIVE_SIDEBAR = 'is_active_sidebar';

    /**
     * sidebars_widgets
     */
    const SIDEBARS_WIDGETS = 'sidebars_widgets';

    /**
     * incompatible_sql_modes
     */
    const INCOMPATIBLE_SQL_MODES = 'incompatible_sql_modes';

    /**
     * query
     */
    const QUERY = 'query';

    /**
     * pre_get_table_charset
     */
    const PRE_GET_TABLE_CHARSET = 'pre_get_table_charset';

    /**
     * pre_get_col_charset
     */
    const PRE_GET_COL_CHARSET = 'pre_get_col_charset';

    /**
     * process_text_diff_html
     */
    const PROCESS_TEXT_DIFF_HTML = 'process_text_diff_html';

    /**
     * title_save_pre
     */
    const TITLE_SAVE_PRE = 'title_save_pre';

    /**
     * excerpt_save_pre
     */
    const EXCERPT_SAVE_PRE = 'excerpt_save_pre';

    /**
     * content_save_pre
     */
    const CONTENT_SAVE_PRE = 'content_save_pre';

    /**
     * rest_request_parameter_order
     */
    const REST_REQUEST_PARAMETER_ORDER = 'rest_request_parameter_order';

    /**
     * rest_authentication_errors
     */
    const REST_AUTHENTICATION_ERRORS = 'rest_authentication_errors';

    /**
     * rest_send_nocache_headers
     */
    const REST_SEND_NOCACHE_HEADERS = 'rest_send_nocache_headers';

    /**
     * rest_enabled
     */
    const REST_ENABLED = 'rest_enabled';

    /**
     * rest_jsonp_enabled
     */
    const REST_JSONP_ENABLED = 'rest_jsonp_enabled';

    /**
     * rest_post_dispatch
     */
    const REST_POST_DISPATCH = 'rest_post_dispatch';

    /**
     * rest_pre_serve_request
     */
    const REST_PRE_SERVE_REQUEST = 'rest_pre_serve_request';

    /**
     * rest_envelope_response
     */
    const REST_ENVELOPE_RESPONSE = 'rest_envelope_response';

    /**
     * rest_endpoints
     */
    const REST_ENDPOINTS = 'rest_endpoints';

    /**
     * rest_pre_dispatch
     */
    const REST_PRE_DISPATCH = 'rest_pre_dispatch';

    /**
     * rest_dispatch_request
     */
    const REST_DISPATCH_REQUEST = 'rest_dispatch_request';

    /**
     * rest_index
     */
    const REST_INDEX = 'rest_index';

    /**
     * rest_namespace_index
     */
    const REST_NAMESPACE_INDEX = 'rest_namespace_index';

    /**
     * rest_endpoints_description
     */
    const REST_ENDPOINTS_DESCRIPTION = 'rest_endpoints_description';

    /**
     * rest_route_data
     */
    const REST_ROUTE_DATA = 'rest_route_data';

    /**
     * widget_nav_menu_args
     */
    const WIDGET_NAV_MENU_ARGS = 'widget_nav_menu_args';

    /**
     * widget_archives_dropdown_args
     */
    const WIDGET_ARCHIVES_DROPDOWN_ARGS = 'widget_archives_dropdown_args';

    /**
     * widget_archives_args
     */
    const WIDGET_ARCHIVES_ARGS = 'widget_archives_args';

    /**
     * widget_categories_dropdown_args
     */
    const WIDGET_CATEGORIES_DROPDOWN_ARGS = 'widget_categories_dropdown_args';

    /**
     * widget_categories_args
     */
    const WIDGET_CATEGORIES_ARGS = 'widget_categories_args';

    /**
     * widget_links_args
     */
    const WIDGET_LINKS_ARGS = 'widget_links_args';

    /**
     * widget_meta_poweredby
     */
    const WIDGET_META_POWEREDBY = 'widget_meta_poweredby';

    /**
     * widget_pages_args
     */
    const WIDGET_PAGES_ARGS = 'widget_pages_args';

    /**
     * show_recent_comments_widget_style
     */
    const SHOW_RECENT_COMMENTS_WIDGET_STYLE = 'show_recent_comments_widget_style';

    /**
     * widget_comments_args
     */
    const WIDGET_COMMENTS_ARGS = 'widget_comments_args';

    /**
     * widget_posts_args
     */
    const WIDGET_POSTS_ARGS = 'widget_posts_args';

    /**
     * widget_tag_cloud_args
     */
    const WIDGET_TAG_CLOUD_ARGS = 'widget_tag_cloud_args';

    /**
     * widget_text
     */
    const WIDGET_TEXT = 'widget_text';

    /**
     * active_plugins
     *
     * @deprecated
     */
    const ACTIVE_PLUGINS = 'active_plugins';

    /**
     * admin_user_info_links
     *
     * @deprecated
     */
    const ADMIN_USER_INFO_LINKS = 'admin_user_info_links';

    /**
     * all_options
     *
     * @deprecated
     */
    const ALL_OPTIONS = 'all_options';

    /**
     * atom_service_url
     *
     * @deprecated
     */
    const ATOM_SERVICE_URL = 'atom_service_url';

    /**
     * audio_send_to_editor_url
     *
     * @deprecated
     */
    const AUDIO_SEND_TO_EDITOR_URL = 'audio_send_to_editor_url';

    /**
     * audio_upload_iframe_src
     *
     * @deprecated
     */
    const AUDIO_UPLOAD_IFRAME_SRC = 'audio_upload_iframe_src';

    /**
     * author_template
     *
     * @deprecated
     */
    const AUTHOR_TEMPLATE = 'author_template';

    /**
     * autosave_interval
     *
     * @deprecated
     */
    const AUTOSAVE_INTERVAL = 'autosave_interval';

    /**
     * blog_option_{$setting}
     *
     * @deprecated
     */
    const BLOG_OPTION_SETTING = 'blog_option_{$setting}';

    /**
     * category_archive_meta
     *
     * @deprecated
     */
    const CATEGORY_ARCHIVE_META = 'category_archive_meta';

    /**
     * category_rewrite_rules
     *
     * @deprecated
     */
    const CATEGORY_REWRITE_RULES = 'category_rewrite_rules';

    /**
     * category_save_pre
     *
     * @deprecated
     */
    const CATEGORY_SAVE_PRE = 'category_save_pre';

    /**
     * category_template
     *
     * @deprecated
     */
    const CATEGORY_TEMPLATE = 'category_template';

    /**
     * cat_id_filter
     *
     * @deprecated
     */
    const CAT_ID_FILTER = 'cat_id_filter';

    /**
     * cat_row
     *
     * @deprecated
     */
    const CAT_ROW = 'cat_row';

    /**
     * cat_rows
     *
     * @deprecated
     */
    const CAT_ROWS = 'cat_rows';

    /**
     * cat_row_actions
     *
     * @deprecated
     */
    const CAT_ROW_ACTIONS = 'cat_row_actions';

    /**
     * codepress_supported_langs
     *
     * @deprecated
     */
    const CODEPRESS_SUPPORTED_LANGS = 'codepress_supported_langs';

    /**
     * comments_popup_template
     *
     * @deprecated
     */
    const COMMENTS_POPUP_TEMPLATE = 'comments_popup_template';

    /**
     * comment_content_presave
     *
     * @deprecated
     */
    const COMMENT_CONTENT_PRESAVE = 'comment_content_presave';

    /**
     * comment_status_pre
     *
     * @deprecated
     */
    const COMMENT_STATUS_PRE = 'comment_status_pre';

    /**
     * content_edit_pre
     *
     * @deprecated
     */
    const CONTENT_EDIT_PRE = 'content_edit_pre';

    /**
     * content_filtered_save_pre
     *
     * @deprecated
     */
    const CONTENT_FILTERED_SAVE_PRE = 'content_filtered_save_pre';

    /**
     * create_user_query
     *
     * @deprecated
     */
    const CREATE_USER_QUERY = 'create_user_query';

    /**
     * customize_value_{$this->id_data[base]}
     *
     * @deprecated
     */
    const CUSTOMIZE_VALUE_ID_DATABASE = 'customize_value_{$this->id_data[base]}';

    /**
     * dashboard_count_sentence
     *
     * @deprecated
     */
    const DASHBOARD_COUNT_SENTENCE = 'dashboard_count_sentence';

    /**
     * dashboard_incoming_links_feed
     *
     * @deprecated
     */
    const DASHBOARD_INCOMING_LINKS_FEED = 'dashboard_incoming_links_feed';

    /**
     * dashboard_incoming_links_link
     *
     * @deprecated
     */
    const DASHBOARD_INCOMING_LINKS_LINK = 'dashboard_incoming_links_link';

    /**
     * edit_pages_per_page
     *
     * @deprecated
     */
    const EDIT_PAGES_PER_PAGE = 'edit_pages_per_page';

    /**
     * edit_{$taxonomy}_per_page
     *
     * @deprecated
     */
    const EDIT_TAXONOMY_PER_PAGE = 'edit_{$taxonomy}_per_page';

    /**
     * embed_polldaddy
     *
     * @deprecated
     */
    const EMBED_POLLDADDY = 'embed_polldaddy';

    /**
     * excerpt_edit_pre
     *
     * @deprecated
     */
    const EXCERPT_EDIT_PRE = 'excerpt_edit_pre';

    /**
     * explain_nonce_{$action}
     *
     * @deprecated
     */
    const EXPLAIN_NONCE_ACTION = 'explain_nonce_{$action}';

    /**
     * explain_nonce_{$verb}-{$noun}
     *
     * @deprecated
     */
    const EXPLAIN_NONCE_VERB_NOUN = 'explain_nonce_{$verb}-{$noun}';

    /**
     * favorite_actions
     *
     * @deprecated
     */
    const FAVORITE_ACTIONS = 'favorite_actions';

    /**
     * file_send_to_editor_url
     *
     * @deprecated
     */
    const FILE_SEND_TO_EDITOR_URL = 'file_send_to_editor_url';

    /**
     * flash_uploader
     *
     * @deprecated
     */
    const FLASH_UPLOADER = 'flash_uploader';

    /**
     * format_to_post
     *
     * @deprecated
     */
    const FORMAT_TO_POST = 'format_to_post';

    /**
     * front_page_template
     *
     * @deprecated
     */
    const FRONT_PAGE_TEMPLATE = 'front_page_template';

    /**
     * get_categories
     *
     * @deprecated
     */
    const GET_CATEGORIES = 'get_categories';

    /**
     * get_category
     *
     * @deprecated
     */
    const GET_CATEGORY = 'get_category';

    /**
     * get_nested_categories
     *
     * @deprecated
     */
    const GET_NESTED_CATEGORIES = 'get_nested_categories';

    /**
     * get_next_post_join
     *
     * @deprecated
     */
    const GET_NEXT_POST_JOIN = 'get_next_post_join';

    /**
     * get_next_post_sort
     *
     * @deprecated
     */
    const GET_NEXT_POST_SORT = 'get_next_post_sort';

    /**
     * get_next_post_where
     *
     * @deprecated
     */
    const GET_NEXT_POST_WHERE = 'get_next_post_where';

    /**
     * get_previous_post_join
     *
     * @deprecated
     */
    const GET_PREVIOUS_POST_JOIN = 'get_previous_post_join';

    /**
     * get_previous_post_sort
     *
     * @deprecated
     */
    const GET_PREVIOUS_POST_SORT = 'get_previous_post_sort';

    /**
     * get_previous_post_where
     *
     * @deprecated
     */
    const GET_PREVIOUS_POST_WHERE = 'get_previous_post_where';

    /**
     * hierarchical_post_types
     *
     * @deprecated
     */
    const HIERARCHICAL_POST_TYPES = 'hierarchical_post_types';

    /**
     * home_template
     *
     * @deprecated
     */
    const HOME_TEMPLATE = 'home_template';

    /**
     * http_request_default_port
     *
     * @deprecated
     */
    const HTTP_REQUEST_DEFAULT_PORT = 'http_request_default_port';

    /**
     * http_request_port
     *
     * @deprecated
     */
    const HTTP_REQUEST_PORT = 'http_request_port';

    /**
     * image_upload_iframe_src
     *
     * @deprecated
     */
    const IMAGE_UPLOAD_IFRAME_SRC = 'image_upload_iframe_src';

    /**
     * import_allow_create_users
     *
     * @deprecated
     */
    const IMPORT_ALLOW_CREATE_USERS = 'import_allow_create_users';

    /**
     * import_allow_fetch_attachments
     *
     * @deprecated
     */
    const IMPORT_ALLOW_FETCH_ATTACHMENTS = 'import_allow_fetch_attachments';

    /**
     * import_attachment_size_limit
     *
     * @deprecated
     */
    const IMPORT_ATTACHMENT_SIZE_LIMIT = 'import_attachment_size_limit';

    /**
     * import_post_meta_key
     *
     * @deprecated
     */
    const IMPORT_POST_META_KEY = 'import_post_meta_key';

    /**
     * install_feedback
     *
     * @deprecated
     */
    const INSTALL_FEEDBACK = 'install_feedback';

    /**
     * kubrick_header_color
     *
     * @deprecated
     */
    const KUBRICK_HEADER_COLOR = 'kubrick_header_color';

    /**
     * kubrick_header_display
     *
     * @deprecated
     */
    const KUBRICK_HEADER_DISPLAY = 'kubrick_header_display';

    /**
     * kubrick_header_image
     *
     * @deprecated
     */
    const KUBRICK_HEADER_IMAGE = 'kubrick_header_image';

    /**
     * link_cat_row
     *
     * @deprecated
     */
    const LINK_CAT_ROW = 'link_cat_row';

    /**
     * link_cat_row_actions
     *
     * @deprecated
     */
    const LINK_CAT_ROW_ACTIONS = 'link_cat_row_actions';

    /**
     * link_description
     *
     * @deprecated
     */
    const LINK_DESCRIPTION = 'link_description';

    /**
     * link_rating
     *
     * @deprecated
     */
    const LINK_RATING = 'link_rating';

    /**
     * list_cats_exclusions
     *
     * @deprecated
     */
    const LIST_CATS_EXCLUSIONS = 'list_cats_exclusions';

    /**
     * manage_categories_custom_column
     *
     * @deprecated
     */
    const MANAGE_CATEGORIES_CUSTOM_COLUMN = 'manage_categories_custom_column';

    /**
     * manage_link_categories_custom_column
     *
     * @deprecated
     */
    const MANAGE_LINK_CATEGORIES_CUSTOM_COLUMN = 'manage_link_categories_custom_column';

    /**
     * manage_link_columns
     *
     * @deprecated
     */
    const MANAGE_LINK_COLUMNS = 'manage_link_columns';

    /**
     * manage_pages_query
     *
     * @deprecated
     */
    const MANAGE_PAGES_QUERY = 'manage_pages_query';

    /**
     * manage_{$page}_columns
     *
     * @deprecated
     */
    const MANAGE_PAGE_COLUMNS = 'manage_{$page}_columns';

    /**
     * manage_{$taxonomy}_custom_column
     *
     * @deprecated
     */
    const MANAGE_TAXONOMY_CUSTOM_COLUMN = 'manage_{$taxonomy}_custom_column';

    /**
     * mce_browsers
     *
     * @deprecated
     */
    const MCE_BROWSERS = 'mce_browsers';

    /**
     * mce_plugins
     *
     * @deprecated
     */
    const MCE_PLUGINS = 'mce_plugins';

    /**
     * mce_spellchecker_languages
     *
     * @deprecated
     */
    const MCE_SPELLCHECKER_LANGUAGES = 'mce_spellchecker_languages';

    /**
     * mce_theme
     *
     * @deprecated
     */
    const MCE_THEME = 'mce_theme';

    /**
     * mce_valid_elements
     *
     * @deprecated
     */
    const MCE_VALID_ELEMENTS = 'mce_valid_elements';

    /**
     * ms_sites_per_page
     *
     * @deprecated
     */
    const MS_SITES_PER_PAGE = 'ms_sites_per_page';

    /**
     * ms_users_per_page
     *
     * @deprecated
     */
    const MS_USERS_PER_PAGE = 'ms_users_per_page';

    /**
     * nag_posts_limit
     *
     * @deprecated
     */
    const NAG_POSTS_LIMIT = 'nag_posts_limit';

    /**
     * name_save_pre
     *
     * @deprecated
     */
    const NAME_SAVE_PRE = 'name_save_pre';

    /**
     * network_sites_updated_message_{$action}
     *
     * @deprecated
     */
    const NETWORK_SITES_UPDATED_MESSAGE_ACTION = 'network_sites_updated_message_{$action}';

    /**
     * option_{$setting}
     *
     * @deprecated
     */
    const OPTION_SETTING = 'option_{$setting}';

    /**
     * page_stati
     *
     * @deprecated
     */
    const PAGE_STATI = 'page_stati';

    /**
     * page_template
     *
     * @deprecated
     */
    const PAGE_TEMPLATE = 'page_template';

    /**
     * password_reset_message
     *
     * @deprecated
     */
    const PASSWORD_RESET_MESSAGE = 'password_reset_message';

    /**
     * password_reset_title
     *
     * @deprecated
     */
    const PASSWORD_RESET_TITLE = 'password_reset_title';

    /**
     * ping_status_pre
     *
     * @deprecated
     */
    const PING_STATUS_PRE = 'ping_status_pre';

    /**
     * plugins_per_page
     *
     * @deprecated
     */
    const PLUGINS_PER_PAGE = 'plugins_per_page';

    /**
     * post_comment_text
     *
     * @deprecated
     */
    const POST_COMMENT_TEXT = 'post_comment_text';

    /**
     * post_mime_type_pre
     *
     * @deprecated
     */
    const POST_MIME_TYPE_PRE = 'post_mime_type_pre';

    /**
     * post_stati
     *
     * @deprecated
     */
    const POST_STATI = 'post_stati';

    /**
     * preview_page_link
     *
     * @deprecated
     */
    const PREVIEW_PAGE_LINK = 'preview_page_link';

    /**
     * pre_add_site_option_{$key}
     *
     * @deprecated
     */
    const PRE_ADD_SITE_OPTION_KEY = 'pre_add_site_option_{$key}';

    /**
     * pre_category_description
     *
     * @deprecated
     */
    const PRE_CATEGORY_DESCRIPTION = 'pre_category_description';

    /**
     * pre_category_name
     *
     * @deprecated
     */
    const PRE_CATEGORY_NAME = 'pre_category_name';

    /**
     * pre_comment_user_domain
     *
     * @deprecated
     */
    const PRE_COMMENT_USER_DOMAIN = 'pre_comment_user_domain';

    /**
     * pre_link_description
     *
     * @deprecated
     */
    const PRE_LINK_DESCRIPTION = 'pre_link_description';

    /**
     * pre_link_image
     *
     * @deprecated
     */
    const PRE_LINK_IMAGE = 'pre_link_image';

    /**
     * pre_link_name
     *
     * @deprecated
     */
    const PRE_LINK_NAME = 'pre_link_name';

    /**
     * pre_link_notes
     *
     * @deprecated
     */
    const PRE_LINK_NOTES = 'pre_link_notes';

    /**
     * pre_link_rel
     *
     * @deprecated
     */
    const PRE_LINK_REL = 'pre_link_rel';

    /**
     * pre_link_rss
     *
     * @deprecated
     */
    const PRE_LINK_RSS = 'pre_link_rss';

    /**
     * pre_link_target
     *
     * @deprecated
     */
    const PRE_LINK_TARGET = 'pre_link_target';

    /**
     * pre_link_url
     *
     * @deprecated
     */
    const PRE_LINK_URL = 'pre_link_url';

    /**
     * pre_option_{$option->option_name}
     *
     * @deprecated
     */
    const PRE_OPTION_OPTION_NAME = 'pre_option_{$option->option_name}';

    /**
     * pre_option_{$setting}
     *
     * @deprecated
     */
    const PRE_OPTION_SETTING = 'pre_option_{$setting}';

    /**
     * pre_site_option_{$key}
     *
     * @deprecated
     */
    const PRE_SITE_OPTION_KEY = 'pre_site_option_{$key}';

    /**
     * pre_update_option_{$option_name}
     *
     * @deprecated
     */
    const PRE_UPDATE_OPTION_OPTION_NAME = 'pre_update_option_{$option_name}';

    /**
     * pre_update_site_option_{$key}
     *
     * @deprecated
     */
    const PRE_UPDATE_SITE_OPTION_KEY = 'pre_update_site_option_{$key}';

    /**
     * redirect_page_location
     *
     * @deprecated
     */
    const REDIRECT_PAGE_LOCATION = 'redirect_page_location';

    /**
     * sanitize_meta
     *
     * @deprecated
     */
    const SANITIZE_META = 'sanitize_meta';

    /**
     * screen_meta_screen
     *
     * @deprecated
     */
    const SCREEN_META_SCREEN = 'screen_meta_screen';

    /**
     * show_adduser_fields
     *
     * @deprecated
     */
    const SHOW_ADDUSER_FIELDS = 'show_adduser_fields';

    /**
     * single_template
     *
     * @deprecated
     */
    const SINGLE_TEMPLATE = 'single_template';

    /**
     * site_option_{$key}
     *
     * @deprecated
     */
    const SITE_OPTION_KEY = 'site_option_{$key}';

    /**
     * status_save_pre
     *
     * @deprecated
     */
    const STATUS_SAVE_PRE = 'status_save_pre';

    /**
     * swfupload_post_params
     *
     * @deprecated
     */
    const SWFUPLOAD_POST_PARAMS = 'swfupload_post_params';

    /**
     * swfupload_success_handler
     *
     * @deprecated
     */
    const SWFUPLOAD_SUCCESS_HANDLER = 'swfupload_success_handler';

    /**
     * tags_to_edit
     *
     * @deprecated
     */
    const TAGS_TO_EDIT = 'tags_to_edit';

    /**
     * tag_archive_meta
     *
     * @deprecated
     */
    const TAG_ARCHIVE_META = 'tag_archive_meta';

    /**
     * tag_rows
     *
     * @deprecated
     */
    const TAG_ROWS = 'tag_rows';

    /**
     * tag_template
     *
     * @deprecated
     */
    const TAG_TEMPLATE = 'tag_template';

    /**
     * taxonomy_template
     *
     * @deprecated
     */
    const TAXONOMY_TEMPLATE = 'taxonomy_template';

    /**
     * theme_action_links_{$theme_key}
     *
     * @deprecated
     */
    const THEME_ACTION_LINKS_THEME_KEY = 'theme_action_links_{$theme_key}';

    /**
     * theme_install_action_links
     *
     * @deprecated
     */
    const THEME_INSTALL_ACTION_LINKS = 'theme_install_action_links';

    /**
     * the_author_email
     *
     * @deprecated
     */
    const THE_AUTHOR_EMAIL = 'the_author_email';

    /**
     * thumbnail_filename
     *
     * @deprecated
     */
    const THUMBNAIL_FILENAME = 'thumbnail_filename';

    /**
     * timezone_support
     *
     * @deprecated
     */
    const TIMEZONE_SUPPORT = 'timezone_support';

    /**
     * tiny_mce_config_url
     *
     * @deprecated
     */
    const TINY_MCE_CONFIG_URL = 'tiny_mce_config_url';

    /**
     * tiny_mce_version
     *
     * @deprecated
     */
    const TINY_MCE_VERSION = 'tiny_mce_version';

    /**
     * title_edit_pre
     *
     * @deprecated
     */
    const TITLE_EDIT_PRE = 'title_edit_pre';

    /**
     * twentyeleven_attachment_size
     *
     * @deprecated
     */
    const TWENTYELEVEN_ATTACHMENT_SIZE = 'twentyeleven_attachment_size';

    /**
     * twentyeleven_author_bio_avatar_size
     *
     * @deprecated
     */
    const TWENTYELEVEN_AUTHOR_BIO_AVATAR_SIZE = 'twentyeleven_author_bio_avatar_size';

    /**
     * twentyeleven_color_schemes
     *
     * @deprecated
     */
    const TWENTYELEVEN_COLOR_SCHEMES = 'twentyeleven_color_schemes';

    /**
     * twentyeleven_default_theme_options
     *
     * @deprecated
     */
    const TWENTYELEVEN_DEFAULT_THEME_OPTIONS = 'twentyeleven_default_theme_options';

    /**
     * twentyeleven_header_image_height
     *
     * @deprecated
     */
    const TWENTYELEVEN_HEADER_IMAGE_HEIGHT = 'twentyeleven_header_image_height';

    /**
     * twentyeleven_header_image_width
     *
     * @deprecated
     */
    const TWENTYELEVEN_HEADER_IMAGE_WIDTH = 'twentyeleven_header_image_width';

    /**
     * twentyeleven_layouts
     *
     * @deprecated
     */
    const TWENTYELEVEN_LAYOUTS = 'twentyeleven_layouts';

    /**
     * twentyeleven_layout_classes
     *
     * @deprecated
     */
    const TWENTYELEVEN_LAYOUT_CLASSES = 'twentyeleven_layout_classes';

    /**
     * twentyeleven_status_avatar
     *
     * @deprecated
     */
    const TWENTYELEVEN_STATUS_AVATAR = 'twentyeleven_status_avatar';

    /**
     * twentyeleven_theme_options_validate
     *
     * @deprecated
     */
    const TWENTYELEVEN_THEME_OPTIONS_VALIDATE = 'twentyeleven_theme_options_validate';

    /**
     * twentyten_attachment_height
     *
     * @deprecated
     */
    const TWENTYTEN_ATTACHMENT_HEIGHT = 'twentyten_attachment_height';

    /**
     * twentyten_attachment_size
     *
     * @deprecated
     */
    const TWENTYTEN_ATTACHMENT_SIZE = 'twentyten_attachment_size';

    /**
     * twentyten_author_bio_avatar_size
     *
     * @deprecated
     */
    const TWENTYTEN_AUTHOR_BIO_AVATAR_SIZE = 'twentyten_author_bio_avatar_size';

    /**
     * twentyten_header_image_height
     *
     * @deprecated
     */
    const TWENTYTEN_HEADER_IMAGE_HEIGHT = 'twentyten_header_image_height';

    /**
     * twentyten_header_image_width
     *
     * @deprecated
     */
    const TWENTYTEN_HEADER_IMAGE_WIDTH = 'twentyten_header_image_width';

    /**
     * twentythirteen_attachment_size
     *
     * @deprecated
     */
    const TWENTYTHIRTEEN_ATTACHMENT_SIZE = 'twentythirteen_attachment_size';

    /**
     * twentythirteen_author_bio_avatar_size
     *
     * @deprecated
     */
    const TWENTYTHIRTEEN_AUTHOR_BIO_AVATAR_SIZE = 'twentythirteen_author_bio_avatar_size';

    /**
     * twentytwelve_attachment_size
     *
     * @deprecated
     */
    const TWENTYTWELVE_ATTACHMENT_SIZE = 'twentytwelve_attachment_size';

    /**
     * twentytwelve_author_bio_avatar_size
     *
     * @deprecated
     */
    const TWENTYTWELVE_AUTHOR_BIO_AVATAR_SIZE = 'twentytwelve_author_bio_avatar_size';

    /**
     * twentytwelve_status_avatar
     *
     * @deprecated
     */
    const TWENTYTWELVE_STATUS_AVATAR = 'twentytwelve_status_avatar';

    /**
     * update_user_query
     *
     * @deprecated
     */
    const UPDATE_USER_QUERY = 'update_user_query';

    /**
     * uploading_iframe_src
     *
     * @deprecated
     */
    const UPLOADING_IFRAME_SRC = 'uploading_iframe_src';

    /**
     * upload_file_glob
     *
     * @deprecated
     */
    const UPLOAD_FILE_GLOB = 'upload_file_glob';

    /**
     * user_aim_label
     *
     * @deprecated
     */
    const USER_AIM_LABEL = 'user_aim_label';

    /**
     * user_jabber_label
     *
     * @deprecated
     */
    const USER_JABBER_LABEL = 'user_jabber_label';

    /**
     * user_yim_label
     *
     * @deprecated
     */
    const USER_YIM_LABEL = 'user_yim_label';

    /**
     * use_fopen_transport
     *
     * @deprecated
     */
    const USE_FOPEN_TRANSPORT = 'use_fopen_transport';

    /**
     * use_fsockopen_transport
     *
     * @deprecated
     */
    const USE_FSOCKOPEN_TRANSPORT = 'use_fsockopen_transport';

    /**
     * use_http_extension_transport
     *
     * @deprecated
     */
    const USE_HTTP_EXTENSION_TRANSPORT = 'use_http_extension_transport';

    /**
     * video_send_to_editor_url
     *
     * @deprecated
     */
    const VIDEO_SEND_TO_EDITOR_URL = 'video_send_to_editor_url';

    /**
     * video_upload_iframe_src
     *
     * @deprecated
     */
    const VIDEO_UPLOAD_IFRAME_SRC = 'video_upload_iframe_src';

    /**
     * visual_editor
     *
     * @deprecated
     */
    const VISUAL_EDITOR = 'visual_editor';

    /**
     * wp_atom_server_class
     *
     * @deprecated
     */
    const WP_ATOM_SERVER_CLASS = 'wp_atom_server_class';

    /**
     * wp_audio_shortcode_handler
     *
     * @deprecated
     */
    const WP_AUDIO_SHORTCODE_HANDLER = 'wp_audio_shortcode_handler';

    /**
     * wp_dashboard_widget_links_{$widget_id}
     *
     * @deprecated
     */
    const WP_DASHBOARD_WIDGET_LINKS_WIDGET_ID = 'wp_dashboard_widget_links_{$widget_id}';

    /**
     * wp_die_app_handler
     *
     * @deprecated
     */
    const WP_DIE_APP_HANDLER = 'wp_die_app_handler';

    /**
     * wp_fullscreen_buttons
     *
     * @deprecated
     */
    const WP_FULLSCREEN_BUTTONS = 'wp_fullscreen_buttons';

    /**
     * wp_handle_upload_prefilter
     *
     * @deprecated
     */
    const WP_HANDLE_UPLOAD_PREFILTER = 'wp_handle_upload_prefilter';

    /**
     * wp_thumbnail_creation_size_limit
     *
     * @deprecated
     */
    const WP_THUMBNAIL_CREATION_SIZE_LIMIT = 'wp_thumbnail_creation_size_limit';

    /**
     * wp_thumbnail_max_side_length
     *
     * @deprecated
     */
    const WP_THUMBNAIL_MAX_SIDE_LENGTH = 'wp_thumbnail_max_side_length';

    /**
     * wp_upload_resize
     *
     * @deprecated
     */
    const WP_UPLOAD_RESIZE = 'wp_upload_resize';

    /**
     * wp_upload_tabs
     *
     * @deprecated
     */
    const WP_UPLOAD_TABS = 'wp_upload_tabs';

    /**
     * wp_video_shortcode_handler
     *
     * @deprecated
     */
    const WP_VIDEO_SHORTCODE_HANDLER = 'wp_video_shortcode_handler';

    /**
     * {$callback}
     *
     * @deprecated
     */
    const CALLBACK = '{$callback}';

    /**
     * {$per_page}
     *
     * @deprecated
     */
    const PER_PAGE = '{$per_page}';

    /**
     * {$prefix}plugin_action_links
     *
     * @deprecated
     */
    const PREFIXPLUGIN_ACTION_LINKS = '{$prefix}plugin_action_links';

    /**
     * {$prefix}plugin_action_links_{$plugin_file}
     *
     * @deprecated
     */
    const PREFIXPLUGIN_ACTION_LINKS_PLUGIN_FILE = '{$prefix}plugin_action_links_{$plugin_file}';
}
