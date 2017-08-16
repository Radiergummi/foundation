<?php

namespace Radiergummi\Foundation\Framework\WordPress;

/**
 * Action class
 * Holds constants for all available actions in WordPress. This serves the purpose of providing autocompletion in
 * IDEs and editors. It also provides a neat reference of available actions in the documentation, plus, Foundation
 * has a valid dictionary of actions it can use.
 *
 * @package Radiergummi\Foundation\Framework\WordPress
 */
class Action {

    /**
     *
     */
    const ACTIVATED_PLUGIN = 'activated_plugin';

    /**
     *
     */
    const ACTIVATE_BLOG = 'activate_blog';

    /**
     *
     */
    const ACTIVATE_HEADER = 'activate_header';

    /**
     *
     */
    const ACTIVATE_PLUGIN = 'activate_plugin';

    /**
     *
     */
    const ACTIVATE_WP_HEAD = 'activate_wp_head';

    /**
     *
     */
    const ACTIVITY_BOX_END = 'activity_box_end';

    /**
     *
     */
    const ADDED_EXISTING_USER = 'added_existing_user';

    /**
     *
     */
    const ADDED_META_TYPE_META = 'added_{$meta_type}_meta';

    /**
     *
     */
    const ADDED_OPTION = 'added_option';

    /**
     *
     */
    const ADDED_TERM_RELATIONSHIP = 'added_term_relationship';

    /**
     *
     */
    const ADDED_USERMETA = 'added_usermeta';

    /**
     *
     */
    const ADD_ADMIN_BAR_MENUS = 'add_admin_bar_menus';

    /**
     *
     */
    const ADD_ATTACHMENT = 'add_attachment';

    /**
     *
     */
    const ADD_CATEGORY_FORM_PRE = 'add_category_form_pre';

    /**
     *
     */
    const ADD_LINK = 'add_link';

    /**
     *
     */
    const ADD_LINK_CATEGORY_FORM_PRE = 'add_link_category_form_pre';

    /**
     *
     */
    const ADD_META_BOXES = 'add_meta_boxes';

    /**
     *
     */
    const ADD_META_BOXES_COMMENT = 'add_meta_boxes_comment';

    /**
     *
     */
    const ADD_META_BOXES_LINK = 'add_meta_boxes_link';

    /**
     *
     */
    const ADD_META_BOXES_POST_TYPE = 'add_meta_boxes_{$post_type}';

    /**
     *
     */
    const ADD_META_TYPE_META = 'add_{$meta_type}_meta';

    /**
     *
     */
    const ADD_OPTION = 'add_option';

    /**
     *
     */
    const ADD_OPTION_OPTION = 'add_option_{$option}';

    /**
     *
     */
    const ADD_SITE_OPTION = 'add_site_option';

    /**
     *
     */
    const ADD_SITE_OPTION_OPTION = 'add_site_option_{$option}';

    /**
     *
     */
    const ADD_TAG_FORM = 'add_tag_form';

    /**
     *
     */
    const ADD_TAG_FORM_FIELDS = 'add_tag_form_fields';

    /**
     *
     */
    const ADD_TAG_FORM_PRE = 'add_tag_form_pre';

    /**
     *
     */
    const ADD_TERM_RELATIONSHIP = 'add_term_relationship';

    /**
     *
     */
    const ADD_USER_ROLE = 'add_user_role';

    /**
     *
     */
    const ADD_USER_TO_BLOG = 'add_user_to_blog';

    /**
     *
     */
    const ADMINMENU = 'adminmenu';

    /**
     *
     */
    const ADMIN_ACTION_ACTION = 'admin_action_{$action}';

    /**
     *
     */
    const ADMIN_BAR_INIT = 'admin_bar_init';

    /**
     *
     */
    const ADMIN_BAR_MENU = 'admin_bar_menu';

    /**
     *
     */
    const ADMIN_COLOR_SCHEME_PICKER = 'admin_color_scheme_picker';

    /**
     *
     */
    const ADMIN_ENQUEUE_SCRIPTS = 'admin_enqueue_scripts';

    /**
     *
     */
    const ADMIN_FOOTER = 'admin_footer';

    /**
     *
     */
    const ADMIN_FOOTER_HOOK_SUFFIX = 'admin_footer-{$hook_suffix}';

    /**
     *
     */
    const ADMIN_FOOTER_PRESS_THIS_PHP = 'admin_footer-press-this-php';

    /**
     *
     */
    const ADMIN_FOOTER_WIDGETS_PHP = 'admin_footer-widgets-php';

    /**
     *
     */
    const ADMIN_HEAD = 'admin_head';

    /**
     *
     */
    const ADMIN_HEAD_CONTENT_FUNC = 'admin_head_{$content_func}';

    /**
     *
     */
    const ADMIN_HEAD_HOOK_SUFFIX = 'admin_head-{$hook_suffix}';

    /**
     *
     */
    const ADMIN_HEAD_MEDIA_UPLOAD_POPUP = 'admin_head-media-upload-popup';

    /**
     *
     */
    const ADMIN_HEAD_PRESS_THIS_PHP = 'admin_head-press-this-php';

    /**
     *
     */
    const ADMIN_INIT = 'admin_init';

    /**
     *
     */
    const ADMIN_MENU = 'admin_menu';

    /**
     *
     */
    const ADMIN_NOTICES = 'admin_notices';

    /**
     *
     */
    const ADMIN_PAGE_ACCESS_DENIED = 'admin_page_access_denied';

    /**
     *
     */
    const ADMIN_POST = 'admin_post';

    /**
     *
     */
    const ADMIN_POST_ACTION = 'admin_post_{$action}';

    /**
     *
     */
    const ADMIN_POST_NOPRIV = 'admin_post_nopriv';

    /**
     *
     */
    const ADMIN_POST_NOPRIV_ACTION = 'admin_post_nopriv_{$action}';

    /**
     *
     */
    const ADMIN_PRINT_FOOTER_SCRIPTS = 'admin_print_footer_scripts';

    /**
     *
     */
    const ADMIN_PRINT_SCRIPTS = 'admin_print_scripts';

    /**
     *
     */
    const ADMIN_PRINT_SCRIPTS_HOOK_SUFFIX = 'admin_print_scripts-{$hook_suffix}';

    /**
     *
     */
    const ADMIN_PRINT_SCRIPTS_MEDIA_UPLOAD_POPUP = 'admin_print_scripts-media-upload-popup';

    /**
     *
     */
    const ADMIN_PRINT_SCRIPTS_PRESS_THIS_PHP = 'admin_print_scripts-press-this-php';

    /**
     *
     */
    const ADMIN_PRINT_SCRIPTS_WIDGETS_PHP = 'admin_print_scripts-widgets-php';

    /**
     *
     */
    const ADMIN_PRINT_STYLES = 'admin_print_styles';

    /**
     *
     */
    const ADMIN_PRINT_STYLES_HOOK_SUFFIX = 'admin_print_styles-{$hook_suffix}';

    /**
     *
     */
    const ADMIN_PRINT_STYLES_MEDIA_UPLOAD_POPUP = 'admin_print_styles-media-upload-popup';

    /**
     *
     */
    const ADMIN_PRINT_STYLES_PRESS_THIS_PHP = 'admin_print_styles-press-this-php';

    /**
     *
     */
    const ADMIN_PRINT_STYLES_WIDGETS_PHP = 'admin_print_styles-widgets-php';

    /**
     *
     */
    const ADMIN_XML_NS = 'admin_xml_ns';

    /**
     *
     */
    const AFTER_DB_UPGRADE = 'after_db_upgrade';

    /**
     *
     */
    const AFTER_DELETE_POST = 'after_delete_post';

    /**
     *
     */
    const AFTER_MENU_LOCATIONS_TABLE = 'after_menu_locations_table';

    /**
     *
     */
    const AFTER_MU_UPGRADE = 'after_mu_upgrade';

    /**
     *
     */
    const AFTER_PASSWORD_RESET = 'after_password_reset';

    /**
     *
     */
    const AFTER_PLUGIN_ROW = 'after_plugin_row';

    /**
     *
     */
    const AFTER_PLUGIN_ROW_PLUGIN_FILE = 'after_plugin_row_{$plugin_file}';

    /**
     *
     */
    const AFTER_SETUP_THEME = 'after_setup_theme';

    /**
     *
     */
    const AFTER_SIGNUP_FORM = 'after_signup_form';

    /**
     *
     */
    const AFTER_SIGNUP_SITE = 'after_signup_site';

    /**
     *
     */
    const AFTER_SIGNUP_USER = 'after_signup_user';

    /**
     *
     */
    const AFTER_SWITCH_THEME = 'after_switch_theme';

    /**
     *
     */
    const AFTER_TAXONOMY_TABLE = 'after-{$taxonomy}-table';

    /**
     *
     */
    const AFTER_THEME_ROW = 'after_theme_row';

    /**
     *
     */
    const AFTER_THEME_ROW_STYLESHEET = 'after_theme_row_{$stylesheet}';

    /**
     *
     */
    const AFTER_WP_TINY_MCE = 'after_wp_tiny_mce';

    /**
     *
     */
    const AKISMET_COMMENT_CHECK_RESPONSE = 'akismet_comment_check_response';

    /**
     *
     */
    const AKISMET_HTTPS_DISABLED = 'akismet_https_disabled';

    /**
     *
     */
    const AKISMET_HTTPS_REQUEST_FAILURE = 'akismet_https_request_failure';

    /**
     *
     */
    const AKISMET_HTTPS_REQUEST_PRE = 'akismet_https_request_pre';

    /**
     *
     */
    const AKISMET_HTTP_REQUEST_PRE = 'akismet_http_request_pre';

    /**
     *
     */
    const AKISMET_REQUEST_FAILURE = 'akismet_request_failure';

    /**
     *
     */
    const AKISMET_SCHEDULED_RECHECK = 'akismet_scheduled_recheck';

    /**
     *
     */
    const AKISMET_SPAM_CAUGHT = 'akismet_spam_caught';

    /**
     *
     */
    const AKISMET_SSL_DISABLED = 'akismet_ssl_disabled';

    /**
     *
     */
    const AKISMET_SUBMIT_NONSPAM_COMMENT = 'akismet_submit_nonspam_comment';

    /**
     *
     */
    const AKISMET_SUBMIT_SPAM_COMMENT = 'akismet_submit_spam_comment';

    /**
     *
     */
    const ALL_ADMIN_NOTICES = 'all_admin_notices';

    /**
     *
     */
    const ARCHIVE_BLOG = 'archive_blog';

    /**
     *
     */
    const ATOM_AUTHOR = 'atom_author';

    /**
     *
     */
    const ATOM_COMMENTS_NS = 'atom_comments_ns';

    /**
     *
     */
    const ATOM_ENTRY = 'atom_entry';

    /**
     *
     */
    const ATOM_HEAD = 'atom_head';

    /**
     *
     */
    const ATOM_NS = 'atom_ns';

    /**
     *
     */
    const ATTACHMENT_SUBMITBOX_MISC_ACTIONS = 'attachment_submitbox_misc_actions';

    /**
     *
     */
    const ATTACHMENT_UPDATED = 'attachment_updated';

    /**
     *
     */
    const AUTH_COOKIE_BAD_HASH = 'auth_cookie_bad_hash';

    /**
     *
     */
    const AUTH_COOKIE_BAD_SESSION_TOKEN = 'auth_cookie_bad_session_token';

    /**
     *
     */
    const AUTH_COOKIE_BAD_USERNAME = 'auth_cookie_bad_username';

    /**
     *
     */
    const AUTH_COOKIE_EXPIRED = 'auth_cookie_expired';

    /**
     *
     */
    const AUTH_COOKIE_MALFORMED = 'auth_cookie_malformed';

    /**
     *
     */
    const AUTH_COOKIE_VALID = 'auth_cookie_valid';

    /**
     *
     */
    const AUTH_REDIRECT = 'auth_redirect';

    /**
     *
     */
    const AUTOMATIC_UPDATES_COMPLETE = 'automatic_updates_complete';

    /**
     *
     */
    const BEFORE_DELETE_POST = 'before_delete_post';

    /**
     *
     */
    const BEFORE_SIGNUP_FORM = 'before_signup_form';

    /**
     *
     */
    const BEFORE_SIGNUP_HEADER = 'before_signup_header';

    /**
     *
     */
    const BEFORE_WP_TINY_MCE = 'before_wp_tiny_mce';

    /**
     *
     */
    const BEGIN_FETCH_POST_THUMBNAIL_HTML = 'begin_fetch_post_thumbnail_html';

    /**
     *
     */
    const BLOG_PRIVACY_SELECTOR = 'blog_privacy_selector';

    /**
     *
     */
    const BULK_EDIT_CUSTOM_BOX = 'bulk_edit_custom_box';

    /**
     *
     */
    const CHECK_ADMIN_REFERER = 'check_admin_referer';

    /**
     *
     */
    const CHECK_AJAX_REFERER = 'check_ajax_referer';

    /**
     *
     */
    const CHECK_COMMENT_FLOOD = 'check_comment_flood';

    /**
     *
     */
    const CHECK_PASSWORDS = 'check_passwords';

    /**
     *
     */
    const CLEAN_ATTACHMENT_CACHE = 'clean_attachment_cache';

    /**
     *
     */
    const CLEAN_OBJECT_TERM_CACHE = 'clean_object_term_cache';

    /**
     *
     */
    const CLEAN_PAGE_CACHE = 'clean_page_cache';

    /**
     *
     */
    const CLEAN_POST_CACHE = 'clean_post_cache';

    /**
     *
     */
    const CLEAN_TERM_CACHE = 'clean_term_cache';

    /**
     *
     */
    const CLEAN_USER_CACHE = 'clean_user_cache';

    /**
     *
     */
    const CLEAR_AUTH_COOKIE = 'clear_auth_cookie';

    /**
     *
     */
    const COMMENTRSS2_ITEM = 'commentrss2_item';

    /**
     *
     */
    #const ACTIVATE_PLUGIN = 'activate_{$plugin}';

    /**
     *
     */
    const COMMENTSRSS2_HEAD = 'commentsrss2_head';

    /**
     *
     */
    const COMMENTS_ATOM_HEAD = 'comments_atom_head';

    /**
     *
     */
    const COMMENT_ADD_AUTHOR_URL = 'comment_add_author_url';

    /**
     *
     */
    const COMMENT_ATOM_ENTRY = 'comment_atom_entry';

    /**
     *
     */
    const COMMENT_CLOSED = 'comment_closed';

    /**
     *
     */
    const COMMENT_DUPLICATE_TRIGGER = 'comment_duplicate_trigger';

    /**
     *
     */
    const COMMENT_FLOOD_TRIGGER = 'comment_flood_trigger';

    /**
     *
     */
    const COMMENT_FORM = 'comment_form';

    /**
     *
     */
    const COMMENT_FORM_AFTER = 'comment_form_after';

    /**
     *
     */
    const COMMENT_FORM_AFTER_FIELDS = 'comment_form_after_fields';

    /**
     *
     */
    const COMMENT_FORM_BEFORE = 'comment_form_before';

    /**
     *
     */
    const COMMENT_FORM_BEFORE_FIELDS = 'comment_form_before_fields';

    /**
     *
     */
    const COMMENT_FORM_COMMENTS_CLOSED = 'comment_form_comments_closed';

    /**
     *
     */
    const COMMENT_FORM_LOGGED_IN_AFTER = 'comment_form_logged_in_after';

    /**
     *
     */
    const COMMENT_FORM_MUST_LOG_IN_AFTER = 'comment_form_must_log_in_after';

    /**
     *
     */
    const COMMENT_FORM_TOP = 'comment_form_top';

    /**
     *
     */
    const COMMENT_ID_NOT_FOUND = 'comment_id_not_found';

    /**
     *
     */
    const COMMENT_LOOP_START = 'comment_loop_start';

    /**
     *
     */
    const COMMENT_NEW_STATUS_COMMENT_TYPE = 'comment_{$new_status}_{$comment->comment_type}';

    /**
     *
     */
    const COMMENT_OLD_STATUS_TO_NEW_STATUS = 'comment_{$old_status}_to_{$new_status}';

    /**
     *
     */
    const COMMENT_ON_DRAFT = 'comment_on_draft';

    /**
     *
     */
    const COMMENT_ON_PASSWORD_PROTECTED = 'comment_on_password_protected';

    /**
     *
     */
    const COMMENT_ON_TRASH = 'comment_on_trash';

    /**
     *
     */
    const COMMENT_POST = 'comment_post';

    /**
     *
     */
    const COMMENT_REMOVE_AUTHOR_URL = 'comment_remove_author_url';

    /**
     *
     */
    const CORE_UPGRADE_PREAMBLE = 'core_upgrade_preamble';

    /**
     *
     */
    const CREATED_TAXONOMY = 'created_{$taxonomy}';

    /**
     *
     */
    const CREATED_TERM = 'created_term';

    /**
     *
     */
    const CREATE_TAXONOMY = 'create_{$taxonomy}';

    /**
     *
     */
    const CREATE_TERM = 'create_term';

    /**
     *
     */
    const CURRENT_SCREEN = 'current_screen';

    /**
     *
     */
    const CUSTOMIZE_CONTROLS_ENQUEUE_SCRIPTS = 'customize_controls_enqueue_scripts';

    /**
     *
     */
    const CUSTOMIZE_CONTROLS_INIT = 'customize_controls_init';

    /**
     *
     */
    const CUSTOMIZE_CONTROLS_PRINT_FOOTER_SCRIPTS = 'customize_controls_print_footer_scripts';

    /**
     *
     */
    const CUSTOMIZE_CONTROLS_PRINT_SCRIPTS = 'customize_controls_print_scripts';

    /**
     *
     */
    const CUSTOMIZE_CONTROLS_PRINT_STYLES = 'customize_controls_print_styles';

    /**
     *
     */
    const CUSTOMIZE_POST_VALUE_SET = 'customize_post_value_set';

    /**
     *
     */
    const CUSTOMIZE_POST_VALUE_SET_SETTING_ID = 'customize_post_value_set_{$setting_id}';

    /**
     *
     */
    const CUSTOMIZE_PREVIEW_ID = 'customize_preview_{$this->id}';

    /**
     *
     */
    const CUSTOMIZE_PREVIEW_INIT = 'customize_preview_init';

    /**
     *
     */
    const CUSTOMIZE_PREVIEW_TYPE = 'customize_preview_{$this->type}';

    /**
     *
     */
    const CUSTOMIZE_REGISTER = 'customize_register';

    /**
     *
     */
    const CUSTOMIZE_RENDER_CONTROL = 'customize_render_control';

    /**
     *
     */
    const CUSTOMIZE_RENDER_CONTROL_ID = 'customize_render_control_{$this->id}';

    /**
     *
     */
    const CUSTOMIZE_RENDER_PANEL = 'customize_render_panel';

    /**
     *
     */
    const CUSTOMIZE_RENDER_PANEL_ID = 'customize_render_panel_{$this->id}';

    /**
     *
     */
    const CUSTOMIZE_RENDER_SECTION = 'customize_render_section';

    /**
     *
     */
    const CUSTOMIZE_RENDER_SECTION_ID = 'customize_render_section_{$this->id}';

    /**
     *
     */
    const CUSTOMIZE_SAVE = 'customize_save';

    /**
     *
     */
    const CUSTOMIZE_SAVE_AFTER = 'customize_save_after';

    /**
     *
     */
    const CUSTOMIZE_SAVE_ID_DATABASE = 'customize_save_{$this->id_data[base]}';

    /**
     *
     */
    const CUSTOMIZE_UPDATE_TYPE = 'customize_update_{$this->type}';

    /**
     *
     */
    const CUSTOM_HEADER_OPTIONS = 'custom_header_options';

    /**
     *
     */
    const DBX_POST_ADVANCED = 'dbx_post_advanced';

    /**
     *
     */
    const DBX_POST_SIDEBAR = 'dbx_post_sidebar';

    /**
     *
     */
    const DEACTIVATED_PLUGIN = 'deactivated_plugin';

    /**
     *
     */
    const DEACTIVATE_BLOG = 'deactivate_blog';

    /**
     *
     */
    const DEACTIVATE_PLUGIN = 'deactivate_plugin';

    /**
     *
     */
    const DELETED_COMMENT = 'deleted_comment';

    /**
     *
     */
    const DELETED_LINK = 'deleted_link';

    /**
     *
     */
    const DELETED_META_TYPE_META = 'deleted_{$meta_type}_meta';

    /**
     *
     */
    const DELETED_OPTION = 'deleted_option';

    /**
     *
     */
    const DELETED_PLUGIN = 'deleted_plugin';

    /**
     *
     */
    const DELETED_POST = 'deleted_post';

    /**
     *
     */
    const DELETED_POSTMETA = 'deleted_postmeta';

    /**
     *
     */
    const DELETED_SITE_TRANSIENT = 'deleted_site_transient';

    /**
     *
     */
    const DELETED_TERM_RELATIONSHIPS = 'deleted_term_relationships';

    /**
     *
     */
    const DELETED_TERM_TAXONOMY = 'deleted_term_taxonomy';

    /**
     *
     */
    const DELETED_TRANSIENT = 'deleted_transient';

    /**
     *
     */
    const DELETED_USER = 'deleted_user';

    /**
     *
     */
    const DELETED_USERMETA = 'deleted_usermeta';

    /**
     *
     */
    const DELETE_ATTACHMENT = 'delete_attachment';

    /**
     *
     */
    const DELETE_BLOG = 'delete_blog';

    /**
     *
     */
    const DELETE_COMMENT = 'delete_comment';

    /**
     *
     */
    const DELETE_LINK = 'delete_link';

    /**
     *
     */
    const DELETE_META_TYPE_META = 'delete_{$meta_type}_meta';

    /**
     *
     */
    const DELETE_OPTION = 'delete_option';

    /**
     *
     */
    const DELETE_OPTION_OPTION = 'delete_option_{$option}';

    /**
     *
     */
    const DELETE_PLUGIN = 'delete_plugin';

    /**
     *
     */
    const DELETE_POST = 'delete_post';

    /**
     *
     */
    const DELETE_POSTMETA = 'delete_postmeta';

    /**
     *
     */
    const DELETE_SITE_OPTION = 'delete_site_option';

    /**
     *
     */
    const DELETE_SITE_OPTION_OPTION = 'delete_site_option_{$option}';

    /**
     *
     */
    const DELETE_SITE_TRANSIENT_TRANSIENT = 'delete_site_transient_{$transient}';

    /**
     *
     */
    const DELETE_TAXONOMY = 'delete_{$taxonomy}';

    /**
     *
     */
    const DELETE_TERM = 'delete_term';

    /**
     *
     */
    const DELETE_TERM_RELATIONSHIPS = 'delete_term_relationships';

    /**
     *
     */
    const DELETE_TERM_TAXONOMY = 'delete_term_taxonomy';

    /**
     *
     */
    const DELETE_TRANSIENT_TRANSIENT = 'delete_transient_{$transient}';

    /**
     *
     */
    const DELETE_USER = 'delete_user';

    /**
     *
     */
    const DELETE_USERMETA = 'delete_usermeta';

    /**
     *
     */
    const DELETE_USER_FORM = 'delete_user_form';

    /**
     *
     */
    const DELETE_WIDGET = 'delete_widget';

    /**
     *
     */
    const DEPRECATED_ARGUMENT_RUN = 'deprecated_argument_run';

    /**
     *
     */
    const DEPRECATED_CONSTRUCTOR_RUN = 'deprecated_constructor_run';

    /**
     *
     */
    const DEPRECATED_FILE_INCLUDED = 'deprecated_file_included';

    /**
     *
     */
    const DEPRECATED_FUNCTION_RUN = 'deprecated_function_run';

    /**
     *
     */
    const DOING_IT_WRONG_RUN = 'doing_it_wrong_run';

    /**
     *
     */
    const DO_FEED_FEED = 'do_feed_{$feed}';

    /**
     *
     */
    const DO_META_BOXES = 'do_meta_boxes';

    /**
     *
     */
    const DO_ROBOTS = 'do_robots';

    /**
     *
     */
    const DO_ROBOTSTXT = 'do_robotstxt';

    /**
     *
     */
    const DYNAMIC_SIDEBAR = 'dynamic_sidebar';

    /**
     *
     */
    const DYNAMIC_SIDEBAR_AFTER = 'dynamic_sidebar_after';

    /**
     *
     */
    const DYNAMIC_SIDEBAR_BEFORE = 'dynamic_sidebar_before';

    /**
     *
     */
    const EDITED_TAXONOMY = 'edited_{$taxonomy}';

    /**
     *
     */
    const EDITED_TERM = 'edited_term';

    /**
     *
     */
    const EDITED_TERMS = 'edited_terms';

    /**
     *
     */
    const EDITED_TERM_TAXONOMIES = 'edited_term_taxonomies';

    /**
     *
     */
    const EDITED_TERM_TAXONOMY = 'edited_term_taxonomy';

    /**
     *
     */
    const EDIT_ATTACHMENT = 'edit_attachment';

    /**
     *
     */
    #const DEACTIVATE_PLUGIN = 'deactivate_{$plugin}';

    /**
     *
     */
    const EDIT_CATEGORY_FORM = 'edit_category_form';

    /**
     *
     */
    const EDIT_CATEGORY_FORM_FIELDS = 'edit_category_form_fields';

    /**
     *
     */
    const EDIT_CATEGORY_FORM_PRE = 'edit_category_form_pre';

    /**
     *
     */
    const EDIT_COMMENT = 'edit_comment';

    /**
     *
     */
    const EDIT_FORM_ADVANCED = 'edit_form_advanced';

    /**
     *
     */
    const EDIT_FORM_AFTER_EDITOR = 'edit_form_after_editor';

    /**
     *
     */
    const EDIT_FORM_AFTER_TITLE = 'edit_form_after_title';

    /**
     *
     */
    const EDIT_FORM_BEFORE_PERMALINK = 'edit_form_before_permalink';

    /**
     *
     */
    const EDIT_FORM_TOP = 'edit_form_top';

    /**
     *
     */
    const EDIT_LINK = 'edit_link';

    /**
     *
     */
    const EDIT_LINK_CATEGORY_FORM = 'edit_link_category_form';

    /**
     *
     */
    const EDIT_LINK_CATEGORY_FORM_FIELDS = 'edit_link_category_form_fields';

    /**
     *
     */
    const EDIT_LINK_CATEGORY_FORM_PRE = 'edit_link_category_form_pre';

    /**
     *
     */
    const EDIT_PAGE_FORM = 'edit_page_form';

    /**
     *
     */
    const EDIT_POST = 'edit_post';

    /**
     *
     */
    const EDIT_TAG_FORM = 'edit_tag_form';

    /**
     *
     */
    const EDIT_TAG_FORM_FIELDS = 'edit_tag_form_fields';

    /**
     *
     */
    const EDIT_TAG_FORM_PRE = 'edit_tag_form_pre';

    /**
     *
     */
    const EDIT_TAXONOMY = 'edit_{$taxonomy}';

    /**
     *
     */
    const EDIT_TERM = 'edit_term';

    /**
     *
     */
    const EDIT_TERMS = 'edit_terms';

    /**
     *
     */
    const EDIT_TERM_TAXONOMIES = 'edit_term_taxonomies';

    /**
     *
     */
    const EDIT_TERM_TAXONOMY = 'edit_term_taxonomy';

    /**
     *
     */
    const EDIT_USER_CREATED_USER = 'edit_user_created_user';

    /**
     *
     */
    const EDIT_USER_PROFILE = 'edit_user_profile';

    /**
     *
     */
    const EDIT_USER_PROFILE_UPDATE = 'edit_user_profile_update';

    /**
     *
     */
    const EMBED_CONTENT = 'embed_content';

    /**
     *
     */
    const EMBED_CONTENT_META = 'embed_content_meta';

    /**
     *
     */
    const EMBED_FOOTER = 'embed_footer';

    /**
     *
     */
    const EMBED_HEAD = 'embed_head';

    /**
     *
     */
    const END_FETCH_POST_THUMBNAIL_HTML = 'end_fetch_post_thumbnail_html';

    /**
     *
     */
    const ENQUEUE_EMBED_SCRIPTS = 'enqueue_embed_scripts';

    /**
     *
     */
    const EXPORT_FILTERS = 'export_filters';

    /**
     *
     */
    const EXPORT_WP = 'export_wp';

    /**
     *
     */
    const GENERATE_REWRITE_RULES = 'generate_rewrite_rules';

    /**
     *
     */
    const GET_FOOTER = 'get_footer';

    /**
     *
     */
    const GET_HEADER = 'get_header';

    /**
     *
     */
    const GET_SIDEBAR = 'get_sidebar';

    /**
     *
     */
    const GET_TEMPLATE_PART_SLUG = 'get_template_part_{$slug}';

    /**
     *
     */
    const GRANTED_SUPER_ADMIN = 'granted_super_admin';

    /**
     *
     */
    const GRANT_SUPER_ADMIN = 'grant_super_admin';

    /**
     *
     */
    const HEARTBEAT_NOPRIV_TICK = 'heartbeat_nopriv_tick';

    /**
     *
     */
    const HEARTBEAT_TICK = 'heartbeat_tick';

    /**
     *
     */
    const HTTP_API_CURL = 'http_api_curl';

    /**
     *
     */
    const HTTP_API_DEBUG = 'http_api_debug';

    /**
     *
     */
    const INIT = 'init';

    /**
     *
     */
    const INSTALL_PLUGINS_PRE_TAB = 'install_plugins_pre_{$tab}';

    /**
     *
     */
    const INSTALL_PLUGINS_TAB = 'install_plugins_{$tab}';

    /**
     *
     */
    const INSTALL_PLUGINS_TABLE_HEADER = 'install_plugins_table_header';

    /**
     *
     */
    const INSTALL_THEMES_PRE_TAB = 'install_themes_pre_{$tab}';

    /**
     *
     */
    const INSTALL_THEMES_TAB = 'install_themes_{$tab}';

    /**
     *
     */
    const INSTALL_THEMES_TABLE_HEADER = 'install_themes_table_header';

    /**
     *
     */
    const INVITE_USER = 'invite_user';

    /**
     *
     */
    const IN_ADMIN_FOOTER = 'in_admin_footer';

    /**
     *
     */
    const IN_ADMIN_HEADER = 'in_admin_header';

    /**
     *
     */
    const IN_PLUGIN_UPDATE_MESSAGE_FILE = 'in_plugin_update_message-{$file}';

    /**
     *
     */
    const IN_THEME_UPDATE_MESSAGE_THEME_KEY = 'in_theme_update_message-{$theme_key}';

    /**
     *
     */
    const IN_WIDGET_FORM = 'in_widget_form';

    /**
     *
     */
    const LOAD_CATEGORIES_PHP = 'load-categories-php';

    /**
     *
     */
    const LOAD_EDIT_LINK_CATEGORIES_PHP = 'load-edit-link-categories-php';

    /**
     *
     */
    const LOAD_FEED_ENGINE = 'load_feed_engine';

    /**
     *
     */
    const LOAD_IMPORTER_IMPORTER = 'load-importer-{$importer}';

    /**
     *
     */
    const LOAD_PAGENOW = 'load-{$pagenow}';

    /**
     *
     */
    const LOAD_PAGE_HOOK = 'load-{$page_hook}';

    /**
     *
     */
    const LOAD_PAGE_NEW_PHP = 'load-page-new-php';

    /**
     *
     */
    const LOAD_PAGE_PHP = 'load-page-php';

    /**
     *
     */
    const LOAD_PLUGIN_PAGE = 'load-{$plugin_page}';

    /**
     *
     */
    const LOAD_TEXTDOMAIN = 'load_textdomain';

    /**
     *
     */
    const LOAD_WIDGETS_PHP = 'load-widgets-php';

    /**
     *
     */
    const LOGIN_ENQUEUE_SCRIPTS = 'login_enqueue_scripts';

    /**
     *
     */
    const LOGIN_FOOTER = 'login_footer';

    /**
     *
     */
    const LOGIN_FORM = 'login_form';

    /**
     *
     */
    const LOGIN_FORM_ACTION = 'login_form_{$action}';

    /**
     *
     */
    const LOGIN_HEAD = 'login_head';

    /**
     *
     */
    const LOGIN_INIT = 'login_init';

    /**
     *
     */
    const LOOP_END = 'loop_end';

    /**
     *
     */
    const LOOP_START = 'loop_start';

    /**
     *
     */
    const LOSTPASSWORD_FORM = 'lostpassword_form';

    /**
     *
     */
    const LOSTPASSWORD_POST = 'lostpassword_post';

    /**
     *
     */
    const LOST_PASSWORD = 'lost_password';

    /**
     *
     */
    const MAKE_DELETE_BLOG = 'make_delete_blog';

    /**
     *
     */
    const MAKE_HAM_BLOG = 'make_ham_blog';

    /**
     *
     */
    const MAKE_HAM_USER = 'make_ham_user';

    /**
     *
     */
    const MAKE_SPAM_BLOG = 'make_spam_blog';

    /**
     *
     */
    const MAKE_SPAM_USER = 'make_spam_user';

    /**
     *
     */
    const MAKE_UNDELETE_BLOG = 'make_undelete_blog';

    /**
     *
     */
    const MANAGE_COMMENTS_CUSTOM_COLUMN = 'manage_comments_custom_column';

    /**
     *
     */
    const MANAGE_COMMENTS_NAV = 'manage_comments_nav';

    /**
     *
     */
    const MANAGE_LINK_CUSTOM_COLUMN = 'manage_link_custom_column';

    /**
     *
     */
    const MANAGE_MEDIA_CUSTOM_COLUMN = 'manage_media_custom_column';

    /**
     *
     */
    const MANAGE_PAGES_CUSTOM_COLUMN = 'manage_pages_custom_column';

    /**
     *
     */
    const MANAGE_PLUGINS_CUSTOM_COLUMN = 'manage_plugins_custom_column';

    /**
     *
     */
    const MANAGE_POSTS_CUSTOM_COLUMN = 'manage_posts_custom_column';

    /**
     *
     */
    const MANAGE_POSTS_EXTRA_TABLENAV = 'manage_posts_extra_tablenav';

    /**
     *
     */
    const MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN = 'manage_{$post->post_type}_posts_custom_column';

    /**
     *
     */
    const MANAGE_SITES_CUSTOM_COLUMN = 'manage_sites_custom_column';

    /**
     *
     */
    const MANAGE_THEMES_CUSTOM_COLUMN = 'manage_themes_custom_column';

    /**
     *
     */
    const MATURE_BLOG = 'mature_blog';

    /**
     *
     */
    const MEDIA_BUTTONS = 'media_buttons';

    /**
     *
     */
    const MEDIA_UPLOAD_TAB = 'media_upload_{$tab}';

    /**
     *
     */
    const MEDIA_UPLOAD_TYPE = 'media_upload_{$type}';

    /**
     *
     */
    const MS_NETWORK_NOT_FOUND = 'ms_network_not_found';

    /**
     *
     */
    const MS_SITE_NOT_FOUND = 'ms_site_not_found';

    /**
     * After must-use plugins are loaded
     */
    const MUPLUGINS_LOADED = 'muplugins_loaded';

    /**
     *
     */
    const MU_ACTIVITY_BOX_END = 'mu_activity_box_end';

    /**
     *
     */
    const MU_RIGHTNOW_END = 'mu_rightnow_end';

    /**
     *
     */
    const MYBLOGS_ALLBLOGS_OPTIONS = 'myblogs_allblogs_options';

    /**
     *
     */
    const NETWORK_ADMIN_EDIT_ACTION = 'network_admin_edit_{$action}';

    /**
     *
     */
    const NETWORK_ADMIN_MENU = 'network_admin_menu';

    /**
     *
     */
    const NETWORK_ADMIN_NOTICES = 'network_admin_notices';

    /**
     *
     */
    const NETWORK_SITE_NEW_CREATED_USER = 'network_site_new_created_user';

    /**
     *
     */
    const NETWORK_SITE_USERS_AFTER_LIST_TABLE = 'network_site_users_after_list_table';

    /**
     *
     */
    const NETWORK_SITE_USERS_CREATED_USER = 'network_site_users_created_user';

    /**
     *
     */
    const NETWORK_USER_NEW_CREATED_USER = 'network_user_new_created_user';

    /**
     *
     */
    const NEW_STATUS_POST_TYPE = '{$new_status}_{$post->post_type}';

    /**
     *
     */
    const OLD_STATUS_TO_NEW_STATUS = '{$old_status}_to_{$new_status}';

    /**
     *
     */
    const OPML_HEAD = 'opml_head';

    /**
     *
     */
    const PAGE_ATTRIBUTES_META_BOX_TEMPLATE = 'page_attributes_meta_box_template';

    /**
     *
     */
    const PAGE_HOOK = '{$page_hook}';

    /**
     *
     */
    const PARSE_COMMENT_QUERY = 'parse_comment_query';

    /**
     *
     */
    const PARSE_QUERY = 'parse_query';

    /**
     *
     */
    const PARSE_REQUEST = 'parse_request';

    /**
     *
     */
    const PARSE_TAX_QUERY = 'parse_tax_query';

    /**
     *
     */
    const PASSWORD_RESET = 'password_reset';

    /**
     *
     */
    const PERMALINK_STRUCTURE_CHANGED = 'permalink_structure_changed';

    /**
     *
     */
    const PERSONAL_OPTIONS = 'personal_options';

    /**
     *
     */
    const PERSONAL_OPTIONS_UPDATE = 'personal_options_update';

    /**
     *
     */
    const PHPMAILER_INIT = 'phpmailer_init';

    /**
     *
     */
    const PINGBACK_POST = 'pingback_post';

    /**
     *
     */
    const PLUGINS_LOADED = 'plugins_loaded';

    /**
     *
     */
    const POPULATE_OPTIONS = 'populate_options';

    /**
     *
     */
    const POSTS_SELECTION = 'posts_selection';

    /**
     *
     */
    const POST_COMMENT_STATUS_META_BOX_OPTIONS = 'post_comment_status_meta_box-options';

    /**
     *
     */
    const POST_EDIT_FORM_TAG = 'post_edit_form_tag';

    /**
     *
     */
    const POST_HTML_UPLOAD_UI = 'post-html-upload-ui';

    /**
     *
     */
    const POST_LOCKED_DIALOG = 'post_locked_dialog';

    /**
     *
     */
    const POST_LOCK_LOST_DIALOG = 'post_lock_lost_dialog';

    /**
     *
     */
    const POST_PLUPLOAD_UPLOAD_UI = 'post-plupload-upload-ui';

    /**
     *
     */
    const POST_SUBMITBOX_MINOR_ACTIONS = 'post_submitbox_minor_actions';

    /**
     *
     */
    const POST_SUBMITBOX_MISC_ACTIONS = 'post_submitbox_misc_actions';

    /**
     *
     */
    const POST_SUBMITBOX_START = 'post_submitbox_start';

    /**
     *
     */
    const POST_UPDATED = 'post_updated';

    /**
     *
     */
    const POST_UPLOAD_UI = 'post-upload-ui';

    /**
     *
     */
    const PREPROCESS_SIGNUP_FORM = 'preprocess_signup_form';

    /**
     *
     */
    const PRE_AUTO_UPDATE = 'pre_auto_update';

    /**
     *
     */
    const PRE_COMMENT_ON_POST = 'pre_comment_on_post';

    /**
     *
     */
    const PRE_CURRENT_ACTIVE_PLUGINS = 'pre_current_active_plugins';

    /**
     *
     */
    const PRE_DELETE_SITE_OPTION_OPTION = 'pre_delete_site_option_{$option}';

    /**
     *
     */
    const PRE_DELETE_TERM = 'pre_delete_term';

    /**
     *
     */
    const PRE_GET_COMMENTS = 'pre_get_comments';

    /**
     *
     */
    const PRE_GET_POSTS = 'pre_get_posts';

    /**
     *
     */
    const PRE_GET_SEARCH_FORM = 'pre_get_search_form';

    /**
     *
     */
    const PRE_GET_USERS = 'pre_get_users';

    /**
     *
     */
    const PRE_HTML_UPLOAD_UI = 'pre-html-upload-ui';

    /**
     *
     */
    const PRE_PING = 'pre_ping';

    /**
     *
     */
    const PRE_PLUPLOAD_UPLOAD_UI = 'pre-plupload-upload-ui';

    /**
     *
     */
    const PRE_POST_UPDATE = 'pre_post_update';

    /**
     *
     */
    const PRE_UPLOAD_UI = 'pre-upload-ui';

    /**
     *
     */
    const PRE_USER_QUERY = 'pre_user_query';

    /**
     *
     */
    const PRE_USER_SEARCH = 'pre_user_search';

    /**
     *
     */
    const PRINT_MEDIA_TEMPLATES = 'print_media_templates';

    /**
     *
     */
    const PRIVATE_TO_PUBLISHED = 'private_to_published';

    /**
     *
     */
    const PROFILE_PERSONAL_OPTIONS = 'profile_personal_options';

    /**
     *
     */
    const PROFILE_UPDATE = 'profile_update';

    /**
     *
     */
    const PUBLISH_PHONE = 'publish_phone';

    /**
     *
     */
    const QUICK_EDIT_CUSTOM_BOX = 'quick_edit_custom_box';

    /**
     *
     */
    const RDF_HEADER = 'rdf_header';

    /**
     *
     */
    const RDF_ITEM = 'rdf_item';

    /**
     *
     */
    const RDF_NS = 'rdf_ns';

    /**
     *
     */
    const REFRESH_BLOG_DETAILS = 'refresh_blog_details';

    /**
     *
     */
    const REGISTERED_POST_TYPE = 'registered_post_type';

    /**
     *
     */
    const REGISTERED_TAXONOMY = 'registered_taxonomy';

    /**
     *
     */
    const REGISTER_FORM = 'register_form';

    /**
     *
     */
    const REGISTER_NEW_USER = 'register_new_user';

    /**
     *
     */
    const REGISTER_POST = 'register_post';

    /**
     *
     */
    const REGISTER_SIDEBAR = 'register_sidebar';

    /**
     *
     */
    const REMOVE_USER_FROM_BLOG = 'remove_user_from_blog';

    /**
     *
     */
    const REMOVE_USER_ROLE = 'remove_user_role';

    /**
     *
     */
    const RESETPASS_FORM = 'resetpass_form';

    /**
     *
     */
    const RESTRICT_MANAGE_COMMENTS = 'restrict_manage_comments';

    /**
     *
     */
    const RESTRICT_MANAGE_POSTS = 'restrict_manage_posts';

    /**
     *
     */
    const RESTRICT_MANAGE_USERS = 'restrict_manage_users';

    /**
     *
     */
    const REST_API_INIT = 'rest_api_init';

    /**
     *
     */
    const RETREIVE_PASSWORD = 'retreive_password';

    /**
     *
     */
    const RETRIEVE_PASSWORD = 'retrieve_password';

    /**
     *
     */
    const RETRIEVE_PASSWORD_KEY = 'retrieve_password_key';

    /**
     *
     */
    const REVOKED_SUPER_ADMIN = 'revoked_super_admin';

    /**
     *
     */
    const REVOKE_SUPER_ADMIN = 'revoke_super_admin';

    /**
     *
     */
    const RIGHTNOW_END = 'rightnow_end';

    /**
     *
     */
    const RSS2_COMMENTS_NS = 'rss2_comments_ns';

    /**
     *
     */
    const RSS2_HEAD = 'rss2_head';

    /**
     *
     */
    const RSS2_ITEM = 'rss2_item';

    /**
     *
     */
    const RSS2_NS = 'rss2_ns';

    /**
     *
     */
    const RSS_HEAD = 'rss_head';

    /**
     *
     */
    const RSS_ITEM = 'rss_item';

    /**
     *
     */
    const RSS_TAG_PRE = 'rss_tag_pre';

    /**
     *
     */
    const SANITIZE_COMMENT_COOKIES = 'sanitize_comment_cookies';

    /**
     *
     */
    const SAVE_POST = 'save_post';

    /**
     *
     */
    const SAVE_POST_POST_TYPE = 'save_post_{$post->post_type}';

    /**
     *
     */
    const SEND_HEADERS = 'send_headers';

    /**
     *
     */
    const SETTED_SITE_TRANSIENT = 'setted_site_transient';

    /**
     *
     */
    const SETTED_TRANSIENT = 'setted_transient';

    /**
     *
     */
    const SETUP_THEME = 'setup_theme';

    /**
     *
     */
    const SET_AUTH_COOKIE = 'set_auth_cookie';

    /**
     *
     */
    const SET_COMMENT_COOKIES = 'set_comment_cookies';

    /**
     *
     */
    const SET_CURRENT_USER = 'set_current_user';

    /**
     *
     */
    const SET_LOGGED_IN_COOKIE = 'set_logged_in_cookie';

    /**
     *
     */
    const SET_OBJECT_TERMS = 'set_object_terms';

    /**
     *
     */
    const SET_SITE_TRANSIENT_TRANSIENT = 'set_site_transient_{$transient}';

    /**
     *
     */
    const SET_TRANSIENT_TRANSIENT = 'set_transient_{$transient}';

    /**
     *
     */
    const SET_USER_ROLE = 'set_user_role';

    /**
     *
     */
    const SHOW_USER_PROFILE = 'show_user_profile';

    /**
     *
     */
    const SHUTDOWN = 'shutdown';

    /**
     *
     */
    const SIDEBAR_ADMIN_PAGE = 'sidebar_admin_page';

    /**
     *
     */
    const SIDEBAR_ADMIN_SETUP = 'sidebar_admin_setup';

    /**
     *
     */
    const SIGNUP_BLOGFORM = 'signup_blogform';

    /**
     *
     */
    const SIGNUP_EXTRA_FIELDS = 'signup_extra_fields';

    /**
     *
     */
    const SIGNUP_FINISHED = 'signup_finished';

    /**
     *
     */
    const SIGNUP_HEADER = 'signup_header';

    /**
     *
     */
    const SIGNUP_HIDDEN_FIELDS = 'signup_hidden_fields';

    /**
     *
     */
    const SPAMMED_COMMENT = 'spammed_comment';

    /**
     *
     */
    const SPAM_COMMENT = 'spam_comment';

    /**
     *
     */
    const SPLIT_SHARED_TERM = 'split_shared_term';

    /**
     *
     */
    const START_PREVIEWING_THEME = 'start_previewing_theme';

    /**
     *
     */
    const STOP_PREVIEWING_THEME = 'stop_previewing_theme';

    /**
     *
     */
    const SUBMITLINK_BOX = 'submitlink_box';

    /**
     *
     */
    const SUBMITPAGE_BOX = 'submitpage_box';

    /**
     *
     */
    const SUBMITPOST_BOX = 'submitpost_box';

    /**
     *
     */
    const SWITCH_BLOG = 'switch_blog';

    /**
     *
     */
    const SWITCH_THEME = 'switch_theme';

    /**
     *
     */
    const TAG = '{$tag}';

    /**
     *
     */
    const TAXONOMY_ADD_FORM = '{$taxonomy}_add_form';

    /**
     *
     */
    const TAXONOMY_ADD_FORM_FIELDS = '{$taxonomy}_add_form_fields';

    /**
     *
     */
    const TAXONOMY_EDIT_FORM = '{$taxonomy}_edit_form';

    /**
     *
     */
    const TAXONOMY_EDIT_FORM_FIELDS = '{$taxonomy}_edit_form_fields';

    /**
     *
     */
    const TAXONOMY_PRE_ADD_FORM = '{$taxonomy}_pre_add_form';

    /**
     *
     */
    const TAXONOMY_PRE_EDIT_FORM = '{$taxonomy}_pre_edit_form';

    /**
     *
     */
    const TAXONOMY_TERM_EDIT_FORM_TAG = '{$taxonomy}_term_edit_form_tag';

    /**
     *
     */
    const TAXONOMY_TERM_NEW_FORM_TAG = '{$taxonomy}_term_new_form_tag';

    /**
     *
     */
    const TEMPLATE_REDIRECT = 'template_redirect';

    /**
     *
     */
    const THE_POST = 'the_post';

    /**
     *
     */
    const THE_WIDGET = 'the_widget';

    /**
     *
     */
    const TOOL_BOX = 'tool_box';

    /**
     *
     */
    const TRACKBACK_POST = 'trackback_post';

    /**
     *
     */
    const TRANSITION_COMMENT_STATUS = 'transition_comment_status';

    /**
     *
     */
    const TRANSITION_POST_STATUS = 'transition_post_status';

    /**
     *
     */
    const TRASHED_COMMENT = 'trashed_comment';

    /**
     *
     */
    const TRASHED_POST = 'trashed_post';

    /**
     *
     */
    const TRASHED_POST_COMMENTS = 'trashed_post_comments';

    /**
     *
     */
    const TRASH_COMMENT = 'trash_comment';

    /**
     *
     */
    const TRASH_POST_COMMENTS = 'trash_post_comments';

    /**
     *
     */
    const TWENTYFIFTEEN_CREDITS = 'twentyfifteen_credits';

    /**
     *
     */
    const TWENTYFOURTEEN_CREDITS = 'twentyfourteen_credits';

    /**
     *
     */
    const UNARCHIVE_BLOG = 'unarchive_blog';

    /**
     *
     */
    const UNINSTALL_FILE = 'uninstall_{$file}';

    /**
     *
     */
    const UNLOAD_TEXTDOMAIN = 'unload_textdomain';

    /**
     *
     */
    const UNMATURE_BLOG = 'unmature_blog';

    /**
     *
     */
    const UNSPAMMED_COMMENT = 'unspammed_comment';

    /**
     *
     */
    const UNSPAM_COMMENT = 'unspam_comment';

    /**
     *
     */
    const UNTRASHED_COMMENT = 'untrashed_comment';

    /**
     *
     */
    const UNTRASHED_POST = 'untrashed_post';

    /**
     *
     */
    const UNTRASHED_POST_COMMENTS = 'untrashed_post_comments';

    /**
     *
     */
    const UNTRASH_COMMENT = 'untrash_comment';

    /**
     *
     */
    const UNTRASH_POST = 'untrash_post';

    /**
     *
     */
    const UNTRASH_POST_COMMENTS = 'untrash_post_comments';

    /**
     *
     */
    const UPDATED_META_TYPE_META = 'updated_{$meta_type}_meta';

    /**
     *
     */
    const UPDATED_OPTION = 'updated_option';

    /**
     *
     */
    const UPDATED_POSTMETA = 'updated_postmeta';

    /**
     *
     */
    const UPDATED_USERMETA = 'updated_usermeta';

    /**
     *
     */
    const UPDATE_BLOG_PUBLIC = 'update_blog_public';

    /**
     *
     */
    const UPDATE_CORE_CUSTOM_ACTION = 'update-core-custom_{$action}';

    /**
     *
     */
    const UPDATE_CUSTOM_ACTION = 'update-custom_{$action}';

    /**
     *
     */
    const UPDATE_META_TYPE_META = 'update_{$meta_type}_meta';

    /**
     *
     */
    const UPDATE_OPTION = 'update_option';

    /**
     *
     */
    const UPDATE_OPTION_OPTION = 'update_option_{$option}';

    /**
     *
     */
    const UPDATE_POSTMETA = 'update_postmeta';

    /**
     *
     */
    const UPDATE_SITE_OPTION = 'update_site_option';

    /**
     *
     */
    const UPDATE_SITE_OPTION_OPTION = 'update_site_option_{$option}';

    /**
     *
     */
    const UPDATE_USERMETA = 'update_usermeta';

    /**
     *
     */
    const UPDATE_WPMU_OPTIONS = 'update_wpmu_options';

    /**
     *
     */
    const UPGRADER_PROCESS_COMPLETE = 'upgrader_process_complete';

    /**
     *
     */
    const UPLOAD_UI_OVER_QUOTA = 'upload_ui_over_quota';

    /**
     *
     */
    const USER_ADMIN_MENU = 'user_admin_menu';

    /**
     *
     */
    const USER_ADMIN_NOTICES = 'user_admin_notices';

    /**
     *
     */
    const USER_EDIT_FORM_TAG = 'user_edit_form_tag';

    /**
     *
     */
    const USER_NEW_FORM = 'user_new_form';

    /**
     *
     */
    const USER_NEW_FORM_TAG = 'user_new_form_tag';

    /**
     *
     */
    const USER_PROFILE_UPDATE_ERRORS = 'user_profile_update_errors';

    /**
     *
     */
    const USER_REGISTER = 'user_register';

    /**
     *
     */
    const VALIDATE_PASSWORD_RESET = 'validate_password_reset';

    /**
     *
     */
    const WELCOME_PANEL = 'welcome_panel';

    /**
     *
     */
    const WIDGETS_ADMIN_PAGE = 'widgets_admin_page';

    /**
     *
     */
    const WIDGETS_INIT = 'widgets_init';

    /**
     *
     */
    const WIDGETS_PHP = 'widgets-php';

    /**
     *
     */
    const WP = 'wp';

    /**
     *
     */
    const WPMUADMINEDIT = 'wpmuadminedit';

    /**
     *
     */
    const WPMUADMINRESULT = 'wpmuadminresult';

    /**
     *
     */
    const WPMUBLOGSACTION = 'wpmublogsaction';

    /**
     *
     */
    const WPMUEDITBLOGACTION = 'wpmueditblogaction';

    /**
     *
     */
    const WPMU_ACTIVATE_BLOG = 'wpmu_activate_blog';

    /**
     *
     */
    const WPMU_ACTIVATE_USER = 'wpmu_activate_user';

    /**
     *
     */
    const WPMU_BLOG_UPDATED = 'wpmu_blog_updated';

    /**
     *
     */
    const WPMU_DELETE_USER = 'wpmu_delete_user';

    /**
     *
     */
    const WPMU_NEW_BLOG = 'wpmu_new_blog';

    /**
     *
     */
    const WPMU_NEW_USER = 'wpmu_new_user';

    /**
     *
     */
    const WPMU_OPTIONS = 'wpmu_options';

    /**
     *
     */
    const WPMU_UPDATE_BLOG_OPTIONS = 'wpmu_update_blog_options';

    /**
     *
     */
    const WPMU_UPGRADE_PAGE = 'wpmu_upgrade_page';

    /**
     *
     */
    const WPMU_UPGRADE_SITE = 'wpmu_upgrade_site';

    /**
     *
     */
    const WP_ADD_NAV_MENU_ITEM = 'wp_add_nav_menu_item';

    /**
     *
     */
    const WP_AFTER_ADMIN_BAR_RENDER = 'wp_after_admin_bar_render';

    /**
     *
     */
    const WP_AJAX_ACTION = 'wp_ajax_{$action}';

    /**
     *
     */
    const WP_AJAX_CROP_IMAGE_PRE_SAVE = 'wp_ajax_crop_image_pre_save';

    /**
     *
     */
    const WP_AJAX_NOPRIV_ACTION = 'wp_ajax_nopriv_{$action}';

    /**
     *
     */
    const WP_AUTHENTICATE = 'wp_authenticate';

    /**
     *
     */
    const WP_BEFORE_ADMIN_BAR_RENDER = 'wp_before_admin_bar_render';

    /**
     *
     */
    const WP_BLACKLIST_CHECK = 'wp_blacklist_check';

    /**
     *
     */
    const WP_CREATE_FILE_IN_UPLOADS = 'wp_create_file_in_uploads';

    /**
     *
     */
    const WP_CREATE_NAV_MENU = 'wp_create_nav_menu';

    /**
     *
     */
    const WP_CREATING_AUTOSAVE = 'wp_creating_autosave';

    /**
     *
     */
    const WP_DASHBOARD_SETUP = 'wp_dashboard_setup';

    /**
     *
     */
    const WP_DEFAULT_SCRIPTS = 'wp_default_scripts';

    /**
     *
     */
    const WP_DEFAULT_STYLES = 'wp_default_styles';

    /**
     *
     */
    const WP_DELETE_NAV_MENU = 'wp_delete_nav_menu';

    /**
     *
     */
    const WP_DELETE_POST_REVISION = 'wp_delete_post_revision';

    /**
     *
     */
    const WP_ENQUEUE_EDITOR = 'wp_enqueue_editor';

    /**
     *
     */
    const WP_ENQUEUE_MEDIA = 'wp_enqueue_media';

    /**
     *
     */
    const WP_ENQUEUE_SCRIPTS = 'wp_enqueue_scripts';

    /**
     *
     */
    const WP_FEED_OPTIONS = 'wp_feed_options';

    /**
     *
     */
    const WP_FOOTER = 'wp_footer';

    /**
     *
     */
    const WP_HEAD = 'wp_head';

    /**
     *
     */
    const WP_INSERT_COMMENT = 'wp_insert_comment';

    /**
     *
     */
    const WP_INSERT_POST = 'wp_insert_post';

    /**
     *
     */
    const WP_INSTALL = 'wp_install';

    /**
     *
     */
    const WP_LOADED = 'wp_loaded';

    /**
     *
     */
    const WP_LOGIN = 'wp_login';

    /**
     *
     */
    const WP_LOGIN_FAILED = 'wp_login_failed';

    /**
     *
     */
    const WP_LOGOUT = 'wp_logout';

    /**
     *
     */
    const WP_MAIL_FAILED = 'wp_mail_failed';

    /**
     *
     */
    const WP_MAIL_PHP = 'wp-mail-php';

    /**
     *
     */
    const WP_MAYBE_AUTO_UPDATE = 'wp_maybe_auto_update';

    /**
     *
     */
    const WP_META = 'wp_meta';

    /**
     *
     */
    const WP_NETWORK_DASHBOARD_SETUP = 'wp_network_dashboard_setup';

    /**
     *
     */
    const WP_PLAYLIST_SCRIPTS = 'wp_playlist_scripts';

    /**
     *
     */
    const WP_PRINT_FOOTER_SCRIPTS = 'wp_print_footer_scripts';

    /**
     *
     */
    const WP_PRINT_SCRIPTS = 'wp_print_scripts';

    /**
     *
     */
    const WP_PRINT_STYLES = 'wp_print_styles';

    /**
     *
     */
    const WP_REGISTER_SIDEBAR_WIDGET = 'wp_register_sidebar_widget';

    /**
     *
     */
    const WP_RESTORE_POST_REVISION = 'wp_restore_post_revision';

    /**
     *
     */
    const WP_SET_COMMENT_STATUS = 'wp_set_comment_status';

    /**
     *
     */
    const WP_TINY_MCE_INIT = 'wp_tiny_mce_init';

    /**
     *
     */
    const WP_TRASH_POST = 'wp_trash_post';

    /**
     *
     */
    const WP_UNREGISTER_SIDEBAR_WIDGET = 'wp_unregister_sidebar_widget';

    /**
     *
     */
    const WP_UPDATE_COMMENT_COUNT = 'wp_update_comment_count';

    /**
     *
     */
    const WP_UPDATE_NAV_MENU = 'wp_update_nav_menu';

    /**
     *
     */
    const WP_UPDATE_NAV_MENU_ITEM = 'wp_update_nav_menu_item';

    /**
     *
     */
    const WP_UPGRADE = 'wp_upgrade';

    /**
     *
     */
    const WP_USER_DASHBOARD_SETUP = 'wp_user_dashboard_setup';

    /**
     *
     */
    const WP_VERIFY_NONCE_FAILED = 'wp_verify_nonce_failed';

    /**
     *
     */
    const XMLRPC_CALL = 'xmlrpc_call';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_BLOGGER_DELETEPOST = 'xmlrpc_call_success_blogger_deletePost';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_BLOGGER_EDITPOST = 'xmlrpc_call_success_blogger_editPost';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_BLOGGER_NEWPOST = 'xmlrpc_call_success_blogger_newPost';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_MW_EDITPOST = 'xmlrpc_call_success_mw_editPost';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_MW_NEWMEDIAOBJECT = 'xmlrpc_call_success_mw_newMediaObject';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_MW_NEWPOST = 'xmlrpc_call_success_mw_newPost';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_WP_DELETECATEGORY = 'xmlrpc_call_success_wp_deleteCategory';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_WP_DELETECOMMENT = 'xmlrpc_call_success_wp_deleteComment';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_WP_DELETEPAGE = 'xmlrpc_call_success_wp_deletePage';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_WP_EDITCOMMENT = 'xmlrpc_call_success_wp_editComment';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_WP_NEWCATEGORY = 'xmlrpc_call_success_wp_newCategory';

    /**
     *
     */
    const XMLRPC_CALL_SUCCESS_WP_NEWCOMMENT = 'xmlrpc_call_success_wp_newComment';

    /**
     *
     */
    const XMLRPC_PUBLISH_POST = 'xmlrpc_publish_post';

    /**
     *
     */
    const XMLRPC_RSD_APIS = 'xmlrpc_rsd_apis';

    /**
     *
     */
    const _ADMIN_MENU = '_admin_menu';

    /**
     *
     */
    const _CORE_UPDATED_SUCCESSFULLY = '_core_updated_successfully';

    /**
     *
     */
    const _NETWORK_ADMIN_MENU = '_network_admin_menu';

    /**
     *
     */
    const _USER_ADMIN_MENU = '_user_admin_menu';

    /**
     *
     */
    const _WP_PUT_POST_REVISION = '_wp_put_post_revision';
}
