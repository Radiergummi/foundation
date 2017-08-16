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
     * activated_plugin
     */
    const ACTIVATED_PLUGIN = 'activated_plugin';

    /**
     * activate_blog
     */
    const ACTIVATE_BLOG = 'activate_blog';

    /**
     * activate_header
     */
    const ACTIVATE_HEADER = 'activate_header';

    /**
     * activate_plugin
     */
    const ACTIVATE_PLUGIN = 'activate_plugin';

    /**
     * activate_wp_head
     */
    const ACTIVATE_WP_HEAD = 'activate_wp_head';

    /**
     * activity_box_end
     */
    const ACTIVITY_BOX_END = 'activity_box_end';

    /**
     * added_existing_user
     */
    const ADDED_EXISTING_USER = 'added_existing_user';

    /**
     * added_{$meta_type}_meta
     */
    const ADDED_META_TYPE_META = 'added_{$meta_type}_meta';

    /**
     * added_option
     */
    const ADDED_OPTION = 'added_option';

    /**
     * added_term_relationship
     */
    const ADDED_TERM_RELATIONSHIP = 'added_term_relationship';

    /**
     * added_usermeta
     */
    const ADDED_USERMETA = 'added_usermeta';

    /**
     * add_admin_bar_menus
     */
    const ADD_ADMIN_BAR_MENUS = 'add_admin_bar_menus';

    /**
     * add_attachment
     */
    const ADD_ATTACHMENT = 'add_attachment';

    /**
     * add_category_form_pre
     */
    const ADD_CATEGORY_FORM_PRE = 'add_category_form_pre';

    /**
     * add_link
     */
    const ADD_LINK = 'add_link';

    /**
     * add_link_category_form_pre
     */
    const ADD_LINK_CATEGORY_FORM_PRE = 'add_link_category_form_pre';

    /**
     * add_meta_boxes
     */
    const ADD_META_BOXES = 'add_meta_boxes';

    /**
     * add_meta_boxes_comment
     */
    const ADD_META_BOXES_COMMENT = 'add_meta_boxes_comment';

    /**
     * add_meta_boxes_link
     */
    const ADD_META_BOXES_LINK = 'add_meta_boxes_link';

    /**
     * add_meta_boxes_{$post_type}
     */
    const ADD_META_BOXES_POST_TYPE = 'add_meta_boxes_{$post_type}';

    /**
     * add_{$meta_type}_meta
     */
    const ADD_META_TYPE_META = 'add_{$meta_type}_meta';

    /**
     * add_option
     */
    const ADD_OPTION = 'add_option';

    /**
     * add_option_{$option}
     */
    const ADD_OPTION_OPTION = 'add_option_{$option}';

    /**
     * add_site_option
     */
    const ADD_SITE_OPTION = 'add_site_option';

    /**
     * add_site_option_{$option}
     */
    const ADD_SITE_OPTION_OPTION = 'add_site_option_{$option}';

    /**
     * add_tag_form
     */
    const ADD_TAG_FORM = 'add_tag_form';

    /**
     * add_tag_form_fields
     */
    const ADD_TAG_FORM_FIELDS = 'add_tag_form_fields';

    /**
     * add_tag_form_pre
     */
    const ADD_TAG_FORM_PRE = 'add_tag_form_pre';

    /**
     * add_term_relationship
     */
    const ADD_TERM_RELATIONSHIP = 'add_term_relationship';

    /**
     * add_user_role
     */
    const ADD_USER_ROLE = 'add_user_role';

    /**
     * add_user_to_blog
     */
    const ADD_USER_TO_BLOG = 'add_user_to_blog';

    /**
     * adminmenu
     */
    const ADMINMENU = 'adminmenu';

    /**
     * admin_action_{$action}
     */
    const ADMIN_ACTION_ACTION = 'admin_action_{$action}';

    /**
     * admin_bar_init
     */
    const ADMIN_BAR_INIT = 'admin_bar_init';

    /**
     * admin_bar_menu
     */
    const ADMIN_BAR_MENU = 'admin_bar_menu';

    /**
     * admin_color_scheme_picker
     */
    const ADMIN_COLOR_SCHEME_PICKER = 'admin_color_scheme_picker';

    /**
     * admin_enqueue_scripts
     */
    const ADMIN_ENQUEUE_SCRIPTS = 'admin_enqueue_scripts';

    /**
     * admin_footer
     */
    const ADMIN_FOOTER = 'admin_footer';

    /**
     * admin_footer-{$hook_suffix}
     */
    const ADMIN_FOOTER_HOOK_SUFFIX = 'admin_footer-{$hook_suffix}';

    /**
     * admin_footer-press-this-php
     */
    const ADMIN_FOOTER_PRESS_THIS_PHP = 'admin_footer-press-this-php';

    /**
     * admin_footer-widgets-php
     */
    const ADMIN_FOOTER_WIDGETS_PHP = 'admin_footer-widgets-php';

    /**
     * admin_head
     */
    const ADMIN_HEAD = 'admin_head';

    /**
     * admin_head_{$content_func}
     */
    const ADMIN_HEAD_CONTENT_FUNC = 'admin_head_{$content_func}';

    /**
     * admin_head-{$hook_suffix}
     */
    const ADMIN_HEAD_HOOK_SUFFIX = 'admin_head-{$hook_suffix}';

    /**
     * admin_head-media-upload-popup
     */
    const ADMIN_HEAD_MEDIA_UPLOAD_POPUP = 'admin_head-media-upload-popup';

    /**
     * admin_head-press-this-php
     */
    const ADMIN_HEAD_PRESS_THIS_PHP = 'admin_head-press-this-php';

    /**
     * admin_init
     */
    const ADMIN_INIT = 'admin_init';

    /**
     * admin_menu
     */
    const ADMIN_MENU = 'admin_menu';

    /**
     * admin_notices
     */
    const ADMIN_NOTICES = 'admin_notices';

    /**
     * admin_page_access_denied
     */
    const ADMIN_PAGE_ACCESS_DENIED = 'admin_page_access_denied';

    /**
     * admin_post
     */
    const ADMIN_POST = 'admin_post';

    /**
     * admin_post_{$action}
     */
    const ADMIN_POST_ACTION = 'admin_post_{$action}';

    /**
     * admin_post_nopriv
     */
    const ADMIN_POST_NOPRIV = 'admin_post_nopriv';

    /**
     * admin_post_nopriv_{$action}
     */
    const ADMIN_POST_NOPRIV_ACTION = 'admin_post_nopriv_{$action}';

    /**
     * admin_print_footer_scripts
     */
    const ADMIN_PRINT_FOOTER_SCRIPTS = 'admin_print_footer_scripts';

    /**
     * admin_print_scripts
     */
    const ADMIN_PRINT_SCRIPTS = 'admin_print_scripts';

    /**
     * admin_print_scripts-{$hook_suffix}
     */
    const ADMIN_PRINT_SCRIPTS_HOOK_SUFFIX = 'admin_print_scripts-{$hook_suffix}';

    /**
     * admin_print_scripts-media-upload-popup
     */
    const ADMIN_PRINT_SCRIPTS_MEDIA_UPLOAD_POPUP = 'admin_print_scripts-media-upload-popup';

    /**
     * admin_print_scripts-press-this-php
     */
    const ADMIN_PRINT_SCRIPTS_PRESS_THIS_PHP = 'admin_print_scripts-press-this-php';

    /**
     * admin_print_scripts-widgets-php
     */
    const ADMIN_PRINT_SCRIPTS_WIDGETS_PHP = 'admin_print_scripts-widgets-php';

    /**
     * admin_print_styles
     */
    const ADMIN_PRINT_STYLES = 'admin_print_styles';

    /**
     * admin_print_styles-{$hook_suffix}
     */
    const ADMIN_PRINT_STYLES_HOOK_SUFFIX = 'admin_print_styles-{$hook_suffix}';

    /**
     * admin_print_styles-media-upload-popup
     */
    const ADMIN_PRINT_STYLES_MEDIA_UPLOAD_POPUP = 'admin_print_styles-media-upload-popup';

    /**
     * admin_print_styles-press-this-php
     */
    const ADMIN_PRINT_STYLES_PRESS_THIS_PHP = 'admin_print_styles-press-this-php';

    /**
     * admin_print_styles-widgets-php
     */
    const ADMIN_PRINT_STYLES_WIDGETS_PHP = 'admin_print_styles-widgets-php';

    /**
     * admin_xml_ns
     */
    const ADMIN_XML_NS = 'admin_xml_ns';

    /**
     * after_db_upgrade
     */
    const AFTER_DB_UPGRADE = 'after_db_upgrade';

    /**
     * after_delete_post
     */
    const AFTER_DELETE_POST = 'after_delete_post';

    /**
     * after_menu_locations_table
     */
    const AFTER_MENU_LOCATIONS_TABLE = 'after_menu_locations_table';

    /**
     * after_mu_upgrade
     */
    const AFTER_MU_UPGRADE = 'after_mu_upgrade';

    /**
     * after_password_reset
     */
    const AFTER_PASSWORD_RESET = 'after_password_reset';

    /**
     * after_plugin_row
     */
    const AFTER_PLUGIN_ROW = 'after_plugin_row';

    /**
     * after_plugin_row_{$plugin_file}
     */
    const AFTER_PLUGIN_ROW_PLUGIN_FILE = 'after_plugin_row_{$plugin_file}';

    /**
     * after_setup_theme
     */
    const AFTER_SETUP_THEME = 'after_setup_theme';

    /**
     * after_signup_form
     */
    const AFTER_SIGNUP_FORM = 'after_signup_form';

    /**
     * after_signup_site
     */
    const AFTER_SIGNUP_SITE = 'after_signup_site';

    /**
     * after_signup_user
     */
    const AFTER_SIGNUP_USER = 'after_signup_user';

    /**
     * after_switch_theme
     */
    const AFTER_SWITCH_THEME = 'after_switch_theme';

    /**
     * after-{$taxonomy}-table
     */
    const AFTER_TAXONOMY_TABLE = 'after-{$taxonomy}-table';

    /**
     * after_theme_row
     */
    const AFTER_THEME_ROW = 'after_theme_row';

    /**
     * after_theme_row_{$stylesheet}
     */
    const AFTER_THEME_ROW_STYLESHEET = 'after_theme_row_{$stylesheet}';

    /**
     * after_wp_tiny_mce
     */
    const AFTER_WP_TINY_MCE = 'after_wp_tiny_mce';

    /**
     * akismet_comment_check_response
     */
    const AKISMET_COMMENT_CHECK_RESPONSE = 'akismet_comment_check_response';

    /**
     * akismet_https_disabled
     */
    const AKISMET_HTTPS_DISABLED = 'akismet_https_disabled';

    /**
     * akismet_https_request_failure
     */
    const AKISMET_HTTPS_REQUEST_FAILURE = 'akismet_https_request_failure';

    /**
     * akismet_https_request_pre
     */
    const AKISMET_HTTPS_REQUEST_PRE = 'akismet_https_request_pre';

    /**
     * akismet_http_request_pre
     */
    const AKISMET_HTTP_REQUEST_PRE = 'akismet_http_request_pre';

    /**
     * akismet_request_failure
     */
    const AKISMET_REQUEST_FAILURE = 'akismet_request_failure';

    /**
     * akismet_scheduled_recheck
     */
    const AKISMET_SCHEDULED_RECHECK = 'akismet_scheduled_recheck';

    /**
     * akismet_spam_caught
     */
    const AKISMET_SPAM_CAUGHT = 'akismet_spam_caught';

    /**
     * akismet_ssl_disabled
     */
    const AKISMET_SSL_DISABLED = 'akismet_ssl_disabled';

    /**
     * akismet_submit_nonspam_comment
     */
    const AKISMET_SUBMIT_NONSPAM_COMMENT = 'akismet_submit_nonspam_comment';

    /**
     * akismet_submit_spam_comment
     */
    const AKISMET_SUBMIT_SPAM_COMMENT = 'akismet_submit_spam_comment';

    /**
     * all_admin_notices
     */
    const ALL_ADMIN_NOTICES = 'all_admin_notices';

    /**
     * archive_blog
     */
    const ARCHIVE_BLOG = 'archive_blog';

    /**
     * atom_author
     */
    const ATOM_AUTHOR = 'atom_author';

    /**
     * atom_comments_ns
     */
    const ATOM_COMMENTS_NS = 'atom_comments_ns';

    /**
     * atom_entry
     */
    const ATOM_ENTRY = 'atom_entry';

    /**
     * atom_head
     */
    const ATOM_HEAD = 'atom_head';

    /**
     * atom_ns
     */
    const ATOM_NS = 'atom_ns';

    /**
     * attachment_submitbox_misc_actions
     */
    const ATTACHMENT_SUBMITBOX_MISC_ACTIONS = 'attachment_submitbox_misc_actions';

    /**
     * attachment_updated
     */
    const ATTACHMENT_UPDATED = 'attachment_updated';

    /**
     * auth_cookie_bad_hash
     */
    const AUTH_COOKIE_BAD_HASH = 'auth_cookie_bad_hash';

    /**
     * auth_cookie_bad_session_token
     */
    const AUTH_COOKIE_BAD_SESSION_TOKEN = 'auth_cookie_bad_session_token';

    /**
     * auth_cookie_bad_username
     */
    const AUTH_COOKIE_BAD_USERNAME = 'auth_cookie_bad_username';

    /**
     * auth_cookie_expired
     */
    const AUTH_COOKIE_EXPIRED = 'auth_cookie_expired';

    /**
     * auth_cookie_malformed
     */
    const AUTH_COOKIE_MALFORMED = 'auth_cookie_malformed';

    /**
     * auth_cookie_valid
     */
    const AUTH_COOKIE_VALID = 'auth_cookie_valid';

    /**
     * auth_redirect
     */
    const AUTH_REDIRECT = 'auth_redirect';

    /**
     * automatic_updates_complete
     */
    const AUTOMATIC_UPDATES_COMPLETE = 'automatic_updates_complete';

    /**
     * before_delete_post
     */
    const BEFORE_DELETE_POST = 'before_delete_post';

    /**
     * before_signup_form
     */
    const BEFORE_SIGNUP_FORM = 'before_signup_form';

    /**
     * before_signup_header
     */
    const BEFORE_SIGNUP_HEADER = 'before_signup_header';

    /**
     * before_wp_tiny_mce
     */
    const BEFORE_WP_TINY_MCE = 'before_wp_tiny_mce';

    /**
     * begin_fetch_post_thumbnail_html
     */
    const BEGIN_FETCH_POST_THUMBNAIL_HTML = 'begin_fetch_post_thumbnail_html';

    /**
     * blog_privacy_selector
     */
    const BLOG_PRIVACY_SELECTOR = 'blog_privacy_selector';

    /**
     * bulk_edit_custom_box
     */
    const BULK_EDIT_CUSTOM_BOX = 'bulk_edit_custom_box';

    /**
     * check_admin_referer
     */
    const CHECK_ADMIN_REFERER = 'check_admin_referer';

    /**
     * check_ajax_referer
     */
    const CHECK_AJAX_REFERER = 'check_ajax_referer';

    /**
     * check_comment_flood
     */
    const CHECK_COMMENT_FLOOD = 'check_comment_flood';

    /**
     * check_passwords
     */
    const CHECK_PASSWORDS = 'check_passwords';

    /**
     * clean_attachment_cache
     */
    const CLEAN_ATTACHMENT_CACHE = 'clean_attachment_cache';

    /**
     * clean_object_term_cache
     */
    const CLEAN_OBJECT_TERM_CACHE = 'clean_object_term_cache';

    /**
     * clean_page_cache
     */
    const CLEAN_PAGE_CACHE = 'clean_page_cache';

    /**
     * clean_post_cache
     */
    const CLEAN_POST_CACHE = 'clean_post_cache';

    /**
     * clean_term_cache
     */
    const CLEAN_TERM_CACHE = 'clean_term_cache';

    /**
     * clean_user_cache
     */
    const CLEAN_USER_CACHE = 'clean_user_cache';

    /**
     * clear_auth_cookie
     */
    const CLEAR_AUTH_COOKIE = 'clear_auth_cookie';

    /**
     * commentrss2_item
     */
    const COMMENTRSS2_ITEM = 'commentrss2_item';

    /**
     *
     */
    #const ACTIVATE_PLUGIN = 'activate_{$plugin}';

    /**
     * commentsrss2_head
     */
    const COMMENTSRSS2_HEAD = 'commentsrss2_head';

    /**
     * comments_atom_head
     */
    const COMMENTS_ATOM_HEAD = 'comments_atom_head';

    /**
     * comment_add_author_url
     */
    const COMMENT_ADD_AUTHOR_URL = 'comment_add_author_url';

    /**
     * comment_atom_entry
     */
    const COMMENT_ATOM_ENTRY = 'comment_atom_entry';

    /**
     * comment_closed
     */
    const COMMENT_CLOSED = 'comment_closed';

    /**
     * comment_duplicate_trigger
     */
    const COMMENT_DUPLICATE_TRIGGER = 'comment_duplicate_trigger';

    /**
     * comment_flood_trigger
     */
    const COMMENT_FLOOD_TRIGGER = 'comment_flood_trigger';

    /**
     * comment_form
     */
    const COMMENT_FORM = 'comment_form';

    /**
     * comment_form_after
     */
    const COMMENT_FORM_AFTER = 'comment_form_after';

    /**
     * comment_form_after_fields
     */
    const COMMENT_FORM_AFTER_FIELDS = 'comment_form_after_fields';

    /**
     * comment_form_before
     */
    const COMMENT_FORM_BEFORE = 'comment_form_before';

    /**
     * comment_form_before_fields
     */
    const COMMENT_FORM_BEFORE_FIELDS = 'comment_form_before_fields';

    /**
     * comment_form_comments_closed
     */
    const COMMENT_FORM_COMMENTS_CLOSED = 'comment_form_comments_closed';

    /**
     * comment_form_logged_in_after
     */
    const COMMENT_FORM_LOGGED_IN_AFTER = 'comment_form_logged_in_after';

    /**
     * comment_form_must_log_in_after
     */
    const COMMENT_FORM_MUST_LOG_IN_AFTER = 'comment_form_must_log_in_after';

    /**
     * comment_form_top
     */
    const COMMENT_FORM_TOP = 'comment_form_top';

    /**
     * comment_id_not_found
     */
    const COMMENT_ID_NOT_FOUND = 'comment_id_not_found';

    /**
     * comment_loop_start
     */
    const COMMENT_LOOP_START = 'comment_loop_start';

    /**
     * comment_{$new_status}_{$comment->comment_type}
     */
    const COMMENT_NEW_STATUS_COMMENT_TYPE = 'comment_{$new_status}_{$comment->comment_type}';

    /**
     * comment_{$old_status}_to_{$new_status}
     */
    const COMMENT_OLD_STATUS_TO_NEW_STATUS = 'comment_{$old_status}_to_{$new_status}';

    /**
     * comment_on_draft
     */
    const COMMENT_ON_DRAFT = 'comment_on_draft';

    /**
     * comment_on_password_protected
     */
    const COMMENT_ON_PASSWORD_PROTECTED = 'comment_on_password_protected';

    /**
     * comment_on_trash
     */
    const COMMENT_ON_TRASH = 'comment_on_trash';

    /**
     * comment_post
     */
    const COMMENT_POST = 'comment_post';

    /**
     * comment_remove_author_url
     */
    const COMMENT_REMOVE_AUTHOR_URL = 'comment_remove_author_url';

    /**
     * core_upgrade_preamble
     */
    const CORE_UPGRADE_PREAMBLE = 'core_upgrade_preamble';

    /**
     * created_{$taxonomy}
     */
    const CREATED_TAXONOMY = 'created_{$taxonomy}';

    /**
     * created_term
     */
    const CREATED_TERM = 'created_term';

    /**
     * create_{$taxonomy}
     */
    const CREATE_TAXONOMY = 'create_{$taxonomy}';

    /**
     * create_term
     */
    const CREATE_TERM = 'create_term';

    /**
     * current_screen
     */
    const CURRENT_SCREEN = 'current_screen';

    /**
     * customize_controls_enqueue_scripts
     */
    const CUSTOMIZE_CONTROLS_ENQUEUE_SCRIPTS = 'customize_controls_enqueue_scripts';

    /**
     * customize_controls_init
     */
    const CUSTOMIZE_CONTROLS_INIT = 'customize_controls_init';

    /**
     * customize_controls_print_footer_scripts
     */
    const CUSTOMIZE_CONTROLS_PRINT_FOOTER_SCRIPTS = 'customize_controls_print_footer_scripts';

    /**
     * customize_controls_print_scripts
     */
    const CUSTOMIZE_CONTROLS_PRINT_SCRIPTS = 'customize_controls_print_scripts';

    /**
     * customize_controls_print_styles
     */
    const CUSTOMIZE_CONTROLS_PRINT_STYLES = 'customize_controls_print_styles';

    /**
     * customize_post_value_set
     */
    const CUSTOMIZE_POST_VALUE_SET = 'customize_post_value_set';

    /**
     * customize_post_value_set_{$setting_id}
     */
    const CUSTOMIZE_POST_VALUE_SET_SETTING_ID = 'customize_post_value_set_{$setting_id}';

    /**
     * customize_preview_{$this->id}
     */
    const CUSTOMIZE_PREVIEW_ID = 'customize_preview_{$this->id}';

    /**
     * customize_preview_init
     */
    const CUSTOMIZE_PREVIEW_INIT = 'customize_preview_init';

    /**
     * customize_preview_{$this->type}
     */
    const CUSTOMIZE_PREVIEW_TYPE = 'customize_preview_{$this->type}';

    /**
     * customize_register
     */
    const CUSTOMIZE_REGISTER = 'customize_register';

    /**
     * customize_render_control
     */
    const CUSTOMIZE_RENDER_CONTROL = 'customize_render_control';

    /**
     * customize_render_control_{$this->id}
     */
    const CUSTOMIZE_RENDER_CONTROL_ID = 'customize_render_control_{$this->id}';

    /**
     * customize_render_panel
     */
    const CUSTOMIZE_RENDER_PANEL = 'customize_render_panel';

    /**
     * customize_render_panel_{$this->id}
     */
    const CUSTOMIZE_RENDER_PANEL_ID = 'customize_render_panel_{$this->id}';

    /**
     * customize_render_section
     */
    const CUSTOMIZE_RENDER_SECTION = 'customize_render_section';

    /**
     * customize_render_section_{$this->id}
     */
    const CUSTOMIZE_RENDER_SECTION_ID = 'customize_render_section_{$this->id}';

    /**
     * customize_save
     */
    const CUSTOMIZE_SAVE = 'customize_save';

    /**
     * customize_save_after
     */
    const CUSTOMIZE_SAVE_AFTER = 'customize_save_after';

    /**
     * customize_save_{$this->id_data[base]}
     */
    const CUSTOMIZE_SAVE_ID_DATABASE = 'customize_save_{$this->id_data[base]}';

    /**
     * customize_update_{$this->type}
     */
    const CUSTOMIZE_UPDATE_TYPE = 'customize_update_{$this->type}';

    /**
     * custom_header_options
     */
    const CUSTOM_HEADER_OPTIONS = 'custom_header_options';

    /**
     * dbx_post_advanced
     */
    const DBX_POST_ADVANCED = 'dbx_post_advanced';

    /**
     * dbx_post_sidebar
     */
    const DBX_POST_SIDEBAR = 'dbx_post_sidebar';

    /**
     * deactivated_plugin
     */
    const DEACTIVATED_PLUGIN = 'deactivated_plugin';

    /**
     * deactivate_blog
     */
    const DEACTIVATE_BLOG = 'deactivate_blog';

    /**
     * deactivate_plugin
     */
    const DEACTIVATE_PLUGIN = 'deactivate_plugin';

    /**
     * deleted_comment
     */
    const DELETED_COMMENT = 'deleted_comment';

    /**
     * deleted_link
     */
    const DELETED_LINK = 'deleted_link';

    /**
     * deleted_{$meta_type}_meta
     */
    const DELETED_META_TYPE_META = 'deleted_{$meta_type}_meta';

    /**
     * deleted_option
     */
    const DELETED_OPTION = 'deleted_option';

    /**
     * deleted_plugin
     */
    const DELETED_PLUGIN = 'deleted_plugin';

    /**
     * deleted_post
     */
    const DELETED_POST = 'deleted_post';

    /**
     * deleted_postmeta
     */
    const DELETED_POSTMETA = 'deleted_postmeta';

    /**
     * deleted_site_transient
     */
    const DELETED_SITE_TRANSIENT = 'deleted_site_transient';

    /**
     * deleted_term_relationships
     */
    const DELETED_TERM_RELATIONSHIPS = 'deleted_term_relationships';

    /**
     * deleted_term_taxonomy
     */
    const DELETED_TERM_TAXONOMY = 'deleted_term_taxonomy';

    /**
     * deleted_transient
     */
    const DELETED_TRANSIENT = 'deleted_transient';

    /**
     * deleted_user
     */
    const DELETED_USER = 'deleted_user';

    /**
     * deleted_usermeta
     */
    const DELETED_USERMETA = 'deleted_usermeta';

    /**
     * delete_attachment
     */
    const DELETE_ATTACHMENT = 'delete_attachment';

    /**
     * delete_blog
     */
    const DELETE_BLOG = 'delete_blog';

    /**
     * delete_comment
     */
    const DELETE_COMMENT = 'delete_comment';

    /**
     * delete_link
     */
    const DELETE_LINK = 'delete_link';

    /**
     * delete_{$meta_type}_meta
     */
    const DELETE_META_TYPE_META = 'delete_{$meta_type}_meta';

    /**
     * delete_option
     */
    const DELETE_OPTION = 'delete_option';

    /**
     * delete_option_{$option}
     */
    const DELETE_OPTION_OPTION = 'delete_option_{$option}';

    /**
     * delete_plugin
     */
    const DELETE_PLUGIN = 'delete_plugin';

    /**
     * delete_post
     */
    const DELETE_POST = 'delete_post';

    /**
     * delete_postmeta
     */
    const DELETE_POSTMETA = 'delete_postmeta';

    /**
     * delete_site_option
     */
    const DELETE_SITE_OPTION = 'delete_site_option';

    /**
     * delete_site_option_{$option}
     */
    const DELETE_SITE_OPTION_OPTION = 'delete_site_option_{$option}';

    /**
     * delete_site_transient_{$transient}
     */
    const DELETE_SITE_TRANSIENT_TRANSIENT = 'delete_site_transient_{$transient}';

    /**
     * delete_{$taxonomy}
     */
    const DELETE_TAXONOMY = 'delete_{$taxonomy}';

    /**
     * delete_term
     */
    const DELETE_TERM = 'delete_term';

    /**
     * delete_term_relationships
     */
    const DELETE_TERM_RELATIONSHIPS = 'delete_term_relationships';

    /**
     * delete_term_taxonomy
     */
    const DELETE_TERM_TAXONOMY = 'delete_term_taxonomy';

    /**
     * delete_transient_{$transient}
     */
    const DELETE_TRANSIENT_TRANSIENT = 'delete_transient_{$transient}';

    /**
     * delete_user
     */
    const DELETE_USER = 'delete_user';

    /**
     * delete_usermeta
     */
    const DELETE_USERMETA = 'delete_usermeta';

    /**
     * delete_user_form
     */
    const DELETE_USER_FORM = 'delete_user_form';

    /**
     * delete_widget
     */
    const DELETE_WIDGET = 'delete_widget';

    /**
     * deprecated_argument_run
     */
    const DEPRECATED_ARGUMENT_RUN = 'deprecated_argument_run';

    /**
     * deprecated_constructor_run
     */
    const DEPRECATED_CONSTRUCTOR_RUN = 'deprecated_constructor_run';

    /**
     * deprecated_file_included
     */
    const DEPRECATED_FILE_INCLUDED = 'deprecated_file_included';

    /**
     * deprecated_function_run
     */
    const DEPRECATED_FUNCTION_RUN = 'deprecated_function_run';

    /**
     * doing_it_wrong_run
     */
    const DOING_IT_WRONG_RUN = 'doing_it_wrong_run';

    /**
     * do_feed_{$feed}
     */
    const DO_FEED_FEED = 'do_feed_{$feed}';

    /**
     * do_meta_boxes
     */
    const DO_META_BOXES = 'do_meta_boxes';

    /**
     * do_robots
     */
    const DO_ROBOTS = 'do_robots';

    /**
     * do_robotstxt
     */
    const DO_ROBOTSTXT = 'do_robotstxt';

    /**
     * dynamic_sidebar
     */
    const DYNAMIC_SIDEBAR = 'dynamic_sidebar';

    /**
     * dynamic_sidebar_after
     */
    const DYNAMIC_SIDEBAR_AFTER = 'dynamic_sidebar_after';

    /**
     * dynamic_sidebar_before
     */
    const DYNAMIC_SIDEBAR_BEFORE = 'dynamic_sidebar_before';

    /**
     * edited_{$taxonomy}
     */
    const EDITED_TAXONOMY = 'edited_{$taxonomy}';

    /**
     * edited_term
     */
    const EDITED_TERM = 'edited_term';

    /**
     * edited_terms
     */
    const EDITED_TERMS = 'edited_terms';

    /**
     * edited_term_taxonomies
     */
    const EDITED_TERM_TAXONOMIES = 'edited_term_taxonomies';

    /**
     * edited_term_taxonomy
     */
    const EDITED_TERM_TAXONOMY = 'edited_term_taxonomy';

    /**
     * edit_attachment
     */
    const EDIT_ATTACHMENT = 'edit_attachment';

    /**
     *
     */
    #const DEACTIVATE_PLUGIN = 'deactivate_{$plugin}';

    /**
     * edit_category_form
     */
    const EDIT_CATEGORY_FORM = 'edit_category_form';

    /**
     * edit_category_form_fields
     */
    const EDIT_CATEGORY_FORM_FIELDS = 'edit_category_form_fields';

    /**
     * edit_category_form_pre
     */
    const EDIT_CATEGORY_FORM_PRE = 'edit_category_form_pre';

    /**
     * edit_comment
     */
    const EDIT_COMMENT = 'edit_comment';

    /**
     * edit_form_advanced
     */
    const EDIT_FORM_ADVANCED = 'edit_form_advanced';

    /**
     * edit_form_after_editor
     */
    const EDIT_FORM_AFTER_EDITOR = 'edit_form_after_editor';

    /**
     * edit_form_after_title
     */
    const EDIT_FORM_AFTER_TITLE = 'edit_form_after_title';

    /**
     * edit_form_before_permalink
     */
    const EDIT_FORM_BEFORE_PERMALINK = 'edit_form_before_permalink';

    /**
     * edit_form_top
     */
    const EDIT_FORM_TOP = 'edit_form_top';

    /**
     * edit_link
     */
    const EDIT_LINK = 'edit_link';

    /**
     * edit_link_category_form
     */
    const EDIT_LINK_CATEGORY_FORM = 'edit_link_category_form';

    /**
     * edit_link_category_form_fields
     */
    const EDIT_LINK_CATEGORY_FORM_FIELDS = 'edit_link_category_form_fields';

    /**
     * edit_link_category_form_pre
     */
    const EDIT_LINK_CATEGORY_FORM_PRE = 'edit_link_category_form_pre';

    /**
     * edit_page_form
     */
    const EDIT_PAGE_FORM = 'edit_page_form';

    /**
     * edit_post
     */
    const EDIT_POST = 'edit_post';

    /**
     * edit_tag_form
     */
    const EDIT_TAG_FORM = 'edit_tag_form';

    /**
     * edit_tag_form_fields
     */
    const EDIT_TAG_FORM_FIELDS = 'edit_tag_form_fields';

    /**
     * edit_tag_form_pre
     */
    const EDIT_TAG_FORM_PRE = 'edit_tag_form_pre';

    /**
     * edit_{$taxonomy}
     */
    const EDIT_TAXONOMY = 'edit_{$taxonomy}';

    /**
     * edit_term
     */
    const EDIT_TERM = 'edit_term';

    /**
     * edit_terms
     */
    const EDIT_TERMS = 'edit_terms';

    /**
     * edit_term_taxonomies
     */
    const EDIT_TERM_TAXONOMIES = 'edit_term_taxonomies';

    /**
     * edit_term_taxonomy
     */
    const EDIT_TERM_TAXONOMY = 'edit_term_taxonomy';

    /**
     * edit_user_created_user
     */
    const EDIT_USER_CREATED_USER = 'edit_user_created_user';

    /**
     * edit_user_profile
     */
    const EDIT_USER_PROFILE = 'edit_user_profile';

    /**
     * edit_user_profile_update
     */
    const EDIT_USER_PROFILE_UPDATE = 'edit_user_profile_update';

    /**
     * embed_content
     */
    const EMBED_CONTENT = 'embed_content';

    /**
     * embed_content_meta
     */
    const EMBED_CONTENT_META = 'embed_content_meta';

    /**
     * embed_footer
     */
    const EMBED_FOOTER = 'embed_footer';

    /**
     * embed_head
     */
    const EMBED_HEAD = 'embed_head';

    /**
     * end_fetch_post_thumbnail_html
     */
    const END_FETCH_POST_THUMBNAIL_HTML = 'end_fetch_post_thumbnail_html';

    /**
     * enqueue_embed_scripts
     */
    const ENQUEUE_EMBED_SCRIPTS = 'enqueue_embed_scripts';

    /**
     * export_filters
     */
    const EXPORT_FILTERS = 'export_filters';

    /**
     * export_wp
     */
    const EXPORT_WP = 'export_wp';

    /**
     * generate_rewrite_rules
     */
    const GENERATE_REWRITE_RULES = 'generate_rewrite_rules';

    /**
     * get_footer
     */
    const GET_FOOTER = 'get_footer';

    /**
     * get_header
     */
    const GET_HEADER = 'get_header';

    /**
     * get_sidebar
     */
    const GET_SIDEBAR = 'get_sidebar';

    /**
     * get_template_part_{$slug}
     */
    const GET_TEMPLATE_PART_SLUG = 'get_template_part_{$slug}';

    /**
     * granted_super_admin
     */
    const GRANTED_SUPER_ADMIN = 'granted_super_admin';

    /**
     * grant_super_admin
     */
    const GRANT_SUPER_ADMIN = 'grant_super_admin';

    /**
     * heartbeat_nopriv_tick
     */
    const HEARTBEAT_NOPRIV_TICK = 'heartbeat_nopriv_tick';

    /**
     * heartbeat_tick
     */
    const HEARTBEAT_TICK = 'heartbeat_tick';

    /**
     * http_api_curl
     */
    const HTTP_API_CURL = 'http_api_curl';

    /**
     * http_api_debug
     */
    const HTTP_API_DEBUG = 'http_api_debug';

    /**
     * init
     */
    const INIT = 'init';

    /**
     * install_plugins_pre_{$tab}
     */
    const INSTALL_PLUGINS_PRE_TAB = 'install_plugins_pre_{$tab}';

    /**
     * install_plugins_{$tab}
     */
    const INSTALL_PLUGINS_TAB = 'install_plugins_{$tab}';

    /**
     * install_plugins_table_header
     */
    const INSTALL_PLUGINS_TABLE_HEADER = 'install_plugins_table_header';

    /**
     * install_themes_pre_{$tab}
     */
    const INSTALL_THEMES_PRE_TAB = 'install_themes_pre_{$tab}';

    /**
     * install_themes_{$tab}
     */
    const INSTALL_THEMES_TAB = 'install_themes_{$tab}';

    /**
     * install_themes_table_header
     */
    const INSTALL_THEMES_TABLE_HEADER = 'install_themes_table_header';

    /**
     * invite_user
     */
    const INVITE_USER = 'invite_user';

    /**
     * in_admin_footer
     */
    const IN_ADMIN_FOOTER = 'in_admin_footer';

    /**
     * in_admin_header
     */
    const IN_ADMIN_HEADER = 'in_admin_header';

    /**
     * in_plugin_update_message-{$file}
     */
    const IN_PLUGIN_UPDATE_MESSAGE_FILE = 'in_plugin_update_message-{$file}';

    /**
     * in_theme_update_message-{$theme_key}
     */
    const IN_THEME_UPDATE_MESSAGE_THEME_KEY = 'in_theme_update_message-{$theme_key}';

    /**
     * in_widget_form
     */
    const IN_WIDGET_FORM = 'in_widget_form';

    /**
     * load-categories-php
     */
    const LOAD_CATEGORIES_PHP = 'load-categories-php';

    /**
     * load-edit-link-categories-php
     */
    const LOAD_EDIT_LINK_CATEGORIES_PHP = 'load-edit-link-categories-php';

    /**
     * load_feed_engine
     */
    const LOAD_FEED_ENGINE = 'load_feed_engine';

    /**
     * load-importer-{$importer}
     */
    const LOAD_IMPORTER_IMPORTER = 'load-importer-{$importer}';

    /**
     * load-{$pagenow}
     */
    const LOAD_PAGENOW = 'load-{$pagenow}';

    /**
     * load-{$page_hook}
     */
    const LOAD_PAGE_HOOK = 'load-{$page_hook}';

    /**
     * load-page-new-php
     */
    const LOAD_PAGE_NEW_PHP = 'load-page-new-php';

    /**
     * load-page-php
     */
    const LOAD_PAGE_PHP = 'load-page-php';

    /**
     * load-{$plugin_page}
     */
    const LOAD_PLUGIN_PAGE = 'load-{$plugin_page}';

    /**
     * load_textdomain
     */
    const LOAD_TEXTDOMAIN = 'load_textdomain';

    /**
     * load-widgets-php
     */
    const LOAD_WIDGETS_PHP = 'load-widgets-php';

    /**
     * login_enqueue_scripts
     */
    const LOGIN_ENQUEUE_SCRIPTS = 'login_enqueue_scripts';

    /**
     * login_footer
     */
    const LOGIN_FOOTER = 'login_footer';

    /**
     * login_form
     */
    const LOGIN_FORM = 'login_form';

    /**
     * login_form_{$action}
     */
    const LOGIN_FORM_ACTION = 'login_form_{$action}';

    /**
     * login_head
     */
    const LOGIN_HEAD = 'login_head';

    /**
     * login_init
     */
    const LOGIN_INIT = 'login_init';

    /**
     * loop_end
     */
    const LOOP_END = 'loop_end';

    /**
     * loop_start
     */
    const LOOP_START = 'loop_start';

    /**
     * lostpassword_form
     */
    const LOSTPASSWORD_FORM = 'lostpassword_form';

    /**
     * lostpassword_post
     */
    const LOSTPASSWORD_POST = 'lostpassword_post';

    /**
     * lost_password
     */
    const LOST_PASSWORD = 'lost_password';

    /**
     * make_delete_blog
     */
    const MAKE_DELETE_BLOG = 'make_delete_blog';

    /**
     * make_ham_blog
     */
    const MAKE_HAM_BLOG = 'make_ham_blog';

    /**
     * make_ham_user
     */
    const MAKE_HAM_USER = 'make_ham_user';

    /**
     * make_spam_blog
     */
    const MAKE_SPAM_BLOG = 'make_spam_blog';

    /**
     * make_spam_user
     */
    const MAKE_SPAM_USER = 'make_spam_user';

    /**
     * make_undelete_blog
     */
    const MAKE_UNDELETE_BLOG = 'make_undelete_blog';

    /**
     * manage_comments_custom_column
     */
    const MANAGE_COMMENTS_CUSTOM_COLUMN = 'manage_comments_custom_column';

    /**
     * manage_comments_nav
     */
    const MANAGE_COMMENTS_NAV = 'manage_comments_nav';

    /**
     * manage_link_custom_column
     */
    const MANAGE_LINK_CUSTOM_COLUMN = 'manage_link_custom_column';

    /**
     * manage_media_custom_column
     */
    const MANAGE_MEDIA_CUSTOM_COLUMN = 'manage_media_custom_column';

    /**
     * manage_pages_custom_column
     */
    const MANAGE_PAGES_CUSTOM_COLUMN = 'manage_pages_custom_column';

    /**
     * manage_plugins_custom_column
     */
    const MANAGE_PLUGINS_CUSTOM_COLUMN = 'manage_plugins_custom_column';

    /**
     * manage_posts_custom_column
     */
    const MANAGE_POSTS_CUSTOM_COLUMN = 'manage_posts_custom_column';

    /**
     * manage_posts_extra_tablenav
     */
    const MANAGE_POSTS_EXTRA_TABLENAV = 'manage_posts_extra_tablenav';

    /**
     * manage_{$post->post_type}_posts_custom_column
     */
    const MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN = 'manage_{$post->post_type}_posts_custom_column';

    /**
     * manage_sites_custom_column
     */
    const MANAGE_SITES_CUSTOM_COLUMN = 'manage_sites_custom_column';

    /**
     * manage_themes_custom_column
     */
    const MANAGE_THEMES_CUSTOM_COLUMN = 'manage_themes_custom_column';

    /**
     * mature_blog
     */
    const MATURE_BLOG = 'mature_blog';

    /**
     * media_buttons
     */
    const MEDIA_BUTTONS = 'media_buttons';

    /**
     * media_upload_{$tab}
     */
    const MEDIA_UPLOAD_TAB = 'media_upload_{$tab}';

    /**
     * media_upload_{$type}
     */
    const MEDIA_UPLOAD_TYPE = 'media_upload_{$type}';

    /**
     * ms_network_not_found
     */
    const MS_NETWORK_NOT_FOUND = 'ms_network_not_found';

    /**
     * ms_site_not_found
     */
    const MS_SITE_NOT_FOUND = 'ms_site_not_found';

    /**
     * After must-use plugins are loaded
     */
    const MUPLUGINS_LOADED = 'muplugins_loaded';

    /**
     * mu_activity_box_end
     */
    const MU_ACTIVITY_BOX_END = 'mu_activity_box_end';

    /**
     * mu_rightnow_end
     */
    const MU_RIGHTNOW_END = 'mu_rightnow_end';

    /**
     * myblogs_allblogs_options
     */
    const MYBLOGS_ALLBLOGS_OPTIONS = 'myblogs_allblogs_options';

    /**
     * network_admin_edit_{$action}
     */
    const NETWORK_ADMIN_EDIT_ACTION = 'network_admin_edit_{$action}';

    /**
     * network_admin_menu
     */
    const NETWORK_ADMIN_MENU = 'network_admin_menu';

    /**
     * network_admin_notices
     */
    const NETWORK_ADMIN_NOTICES = 'network_admin_notices';

    /**
     * network_site_new_created_user
     */
    const NETWORK_SITE_NEW_CREATED_USER = 'network_site_new_created_user';

    /**
     * network_site_users_after_list_table
     */
    const NETWORK_SITE_USERS_AFTER_LIST_TABLE = 'network_site_users_after_list_table';

    /**
     * network_site_users_created_user
     */
    const NETWORK_SITE_USERS_CREATED_USER = 'network_site_users_created_user';

    /**
     * network_user_new_created_user
     */
    const NETWORK_USER_NEW_CREATED_USER = 'network_user_new_created_user';

    /**
     * {$new_status}_{$post->post_type}
     */
    const NEW_STATUS_POST_TYPE = '{$new_status}_{$post->post_type}';

    /**
     * {$old_status}_to_{$new_status}
     */
    const OLD_STATUS_TO_NEW_STATUS = '{$old_status}_to_{$new_status}';

    /**
     * opml_head
     */
    const OPML_HEAD = 'opml_head';

    /**
     * page_attributes_meta_box_template
     */
    const PAGE_ATTRIBUTES_META_BOX_TEMPLATE = 'page_attributes_meta_box_template';

    /**
     * {$page_hook}
     */
    const PAGE_HOOK = '{$page_hook}';

    /**
     * parse_comment_query
     */
    const PARSE_COMMENT_QUERY = 'parse_comment_query';

    /**
     * parse_query
     */
    const PARSE_QUERY = 'parse_query';

    /**
     * parse_request
     */
    const PARSE_REQUEST = 'parse_request';

    /**
     * parse_tax_query
     */
    const PARSE_TAX_QUERY = 'parse_tax_query';

    /**
     * password_reset
     */
    const PASSWORD_RESET = 'password_reset';

    /**
     * permalink_structure_changed
     */
    const PERMALINK_STRUCTURE_CHANGED = 'permalink_structure_changed';

    /**
     * personal_options
     */
    const PERSONAL_OPTIONS = 'personal_options';

    /**
     * personal_options_update
     */
    const PERSONAL_OPTIONS_UPDATE = 'personal_options_update';

    /**
     * phpmailer_init
     */
    const PHPMAILER_INIT = 'phpmailer_init';

    /**
     * pingback_post
     */
    const PINGBACK_POST = 'pingback_post';

    /**
     * plugins_loaded
     */
    const PLUGINS_LOADED = 'plugins_loaded';

    /**
     * populate_options
     */
    const POPULATE_OPTIONS = 'populate_options';

    /**
     * posts_selection
     */
    const POSTS_SELECTION = 'posts_selection';

    /**
     * post_comment_status_meta_box-options
     */
    const POST_COMMENT_STATUS_META_BOX_OPTIONS = 'post_comment_status_meta_box-options';

    /**
     * post_edit_form_tag
     */
    const POST_EDIT_FORM_TAG = 'post_edit_form_tag';

    /**
     * post-html-upload-ui
     */
    const POST_HTML_UPLOAD_UI = 'post-html-upload-ui';

    /**
     * post_locked_dialog
     */
    const POST_LOCKED_DIALOG = 'post_locked_dialog';

    /**
     * post_lock_lost_dialog
     */
    const POST_LOCK_LOST_DIALOG = 'post_lock_lost_dialog';

    /**
     * post-plupload-upload-ui
     */
    const POST_PLUPLOAD_UPLOAD_UI = 'post-plupload-upload-ui';

    /**
     * post_submitbox_minor_actions
     */
    const POST_SUBMITBOX_MINOR_ACTIONS = 'post_submitbox_minor_actions';

    /**
     * post_submitbox_misc_actions
     */
    const POST_SUBMITBOX_MISC_ACTIONS = 'post_submitbox_misc_actions';

    /**
     * post_submitbox_start
     */
    const POST_SUBMITBOX_START = 'post_submitbox_start';

    /**
     * post_updated
     */
    const POST_UPDATED = 'post_updated';

    /**
     * post-upload-ui
     */
    const POST_UPLOAD_UI = 'post-upload-ui';

    /**
     * preprocess_signup_form
     */
    const PREPROCESS_SIGNUP_FORM = 'preprocess_signup_form';

    /**
     * pre_auto_update
     */
    const PRE_AUTO_UPDATE = 'pre_auto_update';

    /**
     * pre_comment_on_post
     */
    const PRE_COMMENT_ON_POST = 'pre_comment_on_post';

    /**
     * pre_current_active_plugins
     */
    const PRE_CURRENT_ACTIVE_PLUGINS = 'pre_current_active_plugins';

    /**
     * pre_delete_site_option_{$option}
     */
    const PRE_DELETE_SITE_OPTION_OPTION = 'pre_delete_site_option_{$option}';

    /**
     * pre_delete_term
     */
    const PRE_DELETE_TERM = 'pre_delete_term';

    /**
     * pre_get_comments
     */
    const PRE_GET_COMMENTS = 'pre_get_comments';

    /**
     * pre_get_posts
     */
    const PRE_GET_POSTS = 'pre_get_posts';

    /**
     * pre_get_search_form
     */
    const PRE_GET_SEARCH_FORM = 'pre_get_search_form';

    /**
     * pre_get_users
     */
    const PRE_GET_USERS = 'pre_get_users';

    /**
     * pre-html-upload-ui
     */
    const PRE_HTML_UPLOAD_UI = 'pre-html-upload-ui';

    /**
     * pre_ping
     */
    const PRE_PING = 'pre_ping';

    /**
     * pre-plupload-upload-ui
     */
    const PRE_PLUPLOAD_UPLOAD_UI = 'pre-plupload-upload-ui';

    /**
     * pre_post_update
     */
    const PRE_POST_UPDATE = 'pre_post_update';

    /**
     * pre-upload-ui
     */
    const PRE_UPLOAD_UI = 'pre-upload-ui';

    /**
     * pre_user_query
     */
    const PRE_USER_QUERY = 'pre_user_query';

    /**
     * pre_user_search
     */
    const PRE_USER_SEARCH = 'pre_user_search';

    /**
     * print_media_templates
     */
    const PRINT_MEDIA_TEMPLATES = 'print_media_templates';

    /**
     * private_to_published
     */
    const PRIVATE_TO_PUBLISHED = 'private_to_published';

    /**
     * profile_personal_options
     */
    const PROFILE_PERSONAL_OPTIONS = 'profile_personal_options';

    /**
     * profile_update
     */
    const PROFILE_UPDATE = 'profile_update';

    /**
     * publish_phone
     */
    const PUBLISH_PHONE = 'publish_phone';

    /**
     * quick_edit_custom_box
     */
    const QUICK_EDIT_CUSTOM_BOX = 'quick_edit_custom_box';

    /**
     * rdf_header
     */
    const RDF_HEADER = 'rdf_header';

    /**
     * rdf_item
     */
    const RDF_ITEM = 'rdf_item';

    /**
     * rdf_ns
     */
    const RDF_NS = 'rdf_ns';

    /**
     * refresh_blog_details
     */
    const REFRESH_BLOG_DETAILS = 'refresh_blog_details';

    /**
     * registered_post_type
     */
    const REGISTERED_POST_TYPE = 'registered_post_type';

    /**
     * registered_taxonomy
     */
    const REGISTERED_TAXONOMY = 'registered_taxonomy';

    /**
     * register_form
     */
    const REGISTER_FORM = 'register_form';

    /**
     * register_new_user
     */
    const REGISTER_NEW_USER = 'register_new_user';

    /**
     * register_post
     */
    const REGISTER_POST = 'register_post';

    /**
     * register_sidebar
     */
    const REGISTER_SIDEBAR = 'register_sidebar';

    /**
     * remove_user_from_blog
     */
    const REMOVE_USER_FROM_BLOG = 'remove_user_from_blog';

    /**
     * remove_user_role
     */
    const REMOVE_USER_ROLE = 'remove_user_role';

    /**
     * resetpass_form
     */
    const RESETPASS_FORM = 'resetpass_form';

    /**
     * restrict_manage_comments
     */
    const RESTRICT_MANAGE_COMMENTS = 'restrict_manage_comments';

    /**
     * restrict_manage_posts
     */
    const RESTRICT_MANAGE_POSTS = 'restrict_manage_posts';

    /**
     * restrict_manage_users
     */
    const RESTRICT_MANAGE_USERS = 'restrict_manage_users';

    /**
     * rest_api_init
     */
    const REST_API_INIT = 'rest_api_init';

    /**
     * retreive_password
     */
    const RETREIVE_PASSWORD = 'retreive_password';

    /**
     * retrieve_password
     */
    const RETRIEVE_PASSWORD = 'retrieve_password';

    /**
     * retrieve_password_key
     */
    const RETRIEVE_PASSWORD_KEY = 'retrieve_password_key';

    /**
     * revoked_super_admin
     */
    const REVOKED_SUPER_ADMIN = 'revoked_super_admin';

    /**
     * revoke_super_admin
     */
    const REVOKE_SUPER_ADMIN = 'revoke_super_admin';

    /**
     * rightnow_end
     */
    const RIGHTNOW_END = 'rightnow_end';

    /**
     * rss2_comments_ns
     */
    const RSS2_COMMENTS_NS = 'rss2_comments_ns';

    /**
     * rss2_head
     */
    const RSS2_HEAD = 'rss2_head';

    /**
     * rss2_item
     */
    const RSS2_ITEM = 'rss2_item';

    /**
     * rss2_ns
     */
    const RSS2_NS = 'rss2_ns';

    /**
     * rss_head
     */
    const RSS_HEAD = 'rss_head';

    /**
     * rss_item
     */
    const RSS_ITEM = 'rss_item';

    /**
     * rss_tag_pre
     */
    const RSS_TAG_PRE = 'rss_tag_pre';

    /**
     * sanitize_comment_cookies
     */
    const SANITIZE_COMMENT_COOKIES = 'sanitize_comment_cookies';

    /**
     * save_post
     */
    const SAVE_POST = 'save_post';

    /**
     * save_post_{$post->post_type}
     */
    const SAVE_POST_POST_TYPE = 'save_post_{$post->post_type}';

    /**
     * send_headers
     */
    const SEND_HEADERS = 'send_headers';

    /**
     * setted_site_transient
     */
    const SETTED_SITE_TRANSIENT = 'setted_site_transient';

    /**
     * setted_transient
     */
    const SETTED_TRANSIENT = 'setted_transient';

    /**
     * setup_theme
     */
    const SETUP_THEME = 'setup_theme';

    /**
     * set_auth_cookie
     */
    const SET_AUTH_COOKIE = 'set_auth_cookie';

    /**
     * set_comment_cookies
     */
    const SET_COMMENT_COOKIES = 'set_comment_cookies';

    /**
     * set_current_user
     */
    const SET_CURRENT_USER = 'set_current_user';

    /**
     * set_logged_in_cookie
     */
    const SET_LOGGED_IN_COOKIE = 'set_logged_in_cookie';

    /**
     * set_object_terms
     */
    const SET_OBJECT_TERMS = 'set_object_terms';

    /**
     * set_site_transient_{$transient}
     */
    const SET_SITE_TRANSIENT_TRANSIENT = 'set_site_transient_{$transient}';

    /**
     * set_transient_{$transient}
     */
    const SET_TRANSIENT_TRANSIENT = 'set_transient_{$transient}';

    /**
     * set_user_role
     */
    const SET_USER_ROLE = 'set_user_role';

    /**
     * show_user_profile
     */
    const SHOW_USER_PROFILE = 'show_user_profile';

    /**
     * shutdown
     */
    const SHUTDOWN = 'shutdown';

    /**
     * sidebar_admin_page
     */
    const SIDEBAR_ADMIN_PAGE = 'sidebar_admin_page';

    /**
     * sidebar_admin_setup
     */
    const SIDEBAR_ADMIN_SETUP = 'sidebar_admin_setup';

    /**
     * signup_blogform
     */
    const SIGNUP_BLOGFORM = 'signup_blogform';

    /**
     * signup_extra_fields
     */
    const SIGNUP_EXTRA_FIELDS = 'signup_extra_fields';

    /**
     * signup_finished
     */
    const SIGNUP_FINISHED = 'signup_finished';

    /**
     * signup_header
     */
    const SIGNUP_HEADER = 'signup_header';

    /**
     * signup_hidden_fields
     */
    const SIGNUP_HIDDEN_FIELDS = 'signup_hidden_fields';

    /**
     * spammed_comment
     */
    const SPAMMED_COMMENT = 'spammed_comment';

    /**
     * spam_comment
     */
    const SPAM_COMMENT = 'spam_comment';

    /**
     * split_shared_term
     */
    const SPLIT_SHARED_TERM = 'split_shared_term';

    /**
     * start_previewing_theme
     */
    const START_PREVIEWING_THEME = 'start_previewing_theme';

    /**
     * stop_previewing_theme
     */
    const STOP_PREVIEWING_THEME = 'stop_previewing_theme';

    /**
     * submitlink_box
     */
    const SUBMITLINK_BOX = 'submitlink_box';

    /**
     * submitpage_box
     */
    const SUBMITPAGE_BOX = 'submitpage_box';

    /**
     * submitpost_box
     */
    const SUBMITPOST_BOX = 'submitpost_box';

    /**
     * switch_blog
     */
    const SWITCH_BLOG = 'switch_blog';

    /**
     * switch_theme
     */
    const SWITCH_THEME = 'switch_theme';

    /**
     * {$tag}
     */
    const TAG = '{$tag}';

    /**
     * {$taxonomy}_add_form
     */
    const TAXONOMY_ADD_FORM = '{$taxonomy}_add_form';

    /**
     * {$taxonomy}_add_form_fields
     */
    const TAXONOMY_ADD_FORM_FIELDS = '{$taxonomy}_add_form_fields';

    /**
     * {$taxonomy}_edit_form
     */
    const TAXONOMY_EDIT_FORM = '{$taxonomy}_edit_form';

    /**
     * {$taxonomy}_edit_form_fields
     */
    const TAXONOMY_EDIT_FORM_FIELDS = '{$taxonomy}_edit_form_fields';

    /**
     * {$taxonomy}_pre_add_form
     */
    const TAXONOMY_PRE_ADD_FORM = '{$taxonomy}_pre_add_form';

    /**
     * {$taxonomy}_pre_edit_form
     */
    const TAXONOMY_PRE_EDIT_FORM = '{$taxonomy}_pre_edit_form';

    /**
     * {$taxonomy}_term_edit_form_tag
     */
    const TAXONOMY_TERM_EDIT_FORM_TAG = '{$taxonomy}_term_edit_form_tag';

    /**
     * {$taxonomy}_term_new_form_tag
     */
    const TAXONOMY_TERM_NEW_FORM_TAG = '{$taxonomy}_term_new_form_tag';

    /**
     * template_redirect
     */
    const TEMPLATE_REDIRECT = 'template_redirect';

    /**
     * the_post
     */
    const THE_POST = 'the_post';

    /**
     * the_widget
     */
    const THE_WIDGET = 'the_widget';

    /**
     * tool_box
     */
    const TOOL_BOX = 'tool_box';

    /**
     * trackback_post
     */
    const TRACKBACK_POST = 'trackback_post';

    /**
     * transition_comment_status
     */
    const TRANSITION_COMMENT_STATUS = 'transition_comment_status';

    /**
     * transition_post_status
     */
    const TRANSITION_POST_STATUS = 'transition_post_status';

    /**
     * trashed_comment
     */
    const TRASHED_COMMENT = 'trashed_comment';

    /**
     * trashed_post
     */
    const TRASHED_POST = 'trashed_post';

    /**
     * trashed_post_comments
     */
    const TRASHED_POST_COMMENTS = 'trashed_post_comments';

    /**
     * trash_comment
     */
    const TRASH_COMMENT = 'trash_comment';

    /**
     * trash_post_comments
     */
    const TRASH_POST_COMMENTS = 'trash_post_comments';

    /**
     * twentyfifteen_credits
     */
    const TWENTYFIFTEEN_CREDITS = 'twentyfifteen_credits';

    /**
     * twentyfourteen_credits
     */
    const TWENTYFOURTEEN_CREDITS = 'twentyfourteen_credits';

    /**
     * unarchive_blog
     */
    const UNARCHIVE_BLOG = 'unarchive_blog';

    /**
     * uninstall_{$file}
     */
    const UNINSTALL_FILE = 'uninstall_{$file}';

    /**
     * unload_textdomain
     */
    const UNLOAD_TEXTDOMAIN = 'unload_textdomain';

    /**
     * unmature_blog
     */
    const UNMATURE_BLOG = 'unmature_blog';

    /**
     * unspammed_comment
     */
    const UNSPAMMED_COMMENT = 'unspammed_comment';

    /**
     * unspam_comment
     */
    const UNSPAM_COMMENT = 'unspam_comment';

    /**
     * untrashed_comment
     */
    const UNTRASHED_COMMENT = 'untrashed_comment';

    /**
     * untrashed_post
     */
    const UNTRASHED_POST = 'untrashed_post';

    /**
     * untrashed_post_comments
     */
    const UNTRASHED_POST_COMMENTS = 'untrashed_post_comments';

    /**
     * untrash_comment
     */
    const UNTRASH_COMMENT = 'untrash_comment';

    /**
     * untrash_post
     */
    const UNTRASH_POST = 'untrash_post';

    /**
     * untrash_post_comments
     */
    const UNTRASH_POST_COMMENTS = 'untrash_post_comments';

    /**
     * updated_{$meta_type}_meta
     */
    const UPDATED_META_TYPE_META = 'updated_{$meta_type}_meta';

    /**
     * updated_option
     */
    const UPDATED_OPTION = 'updated_option';

    /**
     * updated_postmeta
     */
    const UPDATED_POSTMETA = 'updated_postmeta';

    /**
     * updated_usermeta
     */
    const UPDATED_USERMETA = 'updated_usermeta';

    /**
     * update_blog_public
     */
    const UPDATE_BLOG_PUBLIC = 'update_blog_public';

    /**
     * update-core-custom_{$action}
     */
    const UPDATE_CORE_CUSTOM_ACTION = 'update-core-custom_{$action}';

    /**
     * update-custom_{$action}
     */
    const UPDATE_CUSTOM_ACTION = 'update-custom_{$action}';

    /**
     * update_{$meta_type}_meta
     */
    const UPDATE_META_TYPE_META = 'update_{$meta_type}_meta';

    /**
     * update_option
     */
    const UPDATE_OPTION = 'update_option';

    /**
     * update_option_{$option}
     */
    const UPDATE_OPTION_OPTION = 'update_option_{$option}';

    /**
     * update_postmeta
     */
    const UPDATE_POSTMETA = 'update_postmeta';

    /**
     * update_site_option
     */
    const UPDATE_SITE_OPTION = 'update_site_option';

    /**
     * update_site_option_{$option}
     */
    const UPDATE_SITE_OPTION_OPTION = 'update_site_option_{$option}';

    /**
     * update_usermeta
     */
    const UPDATE_USERMETA = 'update_usermeta';

    /**
     * update_wpmu_options
     */
    const UPDATE_WPMU_OPTIONS = 'update_wpmu_options';

    /**
     * upgrader_process_complete
     */
    const UPGRADER_PROCESS_COMPLETE = 'upgrader_process_complete';

    /**
     * upload_ui_over_quota
     */
    const UPLOAD_UI_OVER_QUOTA = 'upload_ui_over_quota';

    /**
     * user_admin_menu
     */
    const USER_ADMIN_MENU = 'user_admin_menu';

    /**
     * user_admin_notices
     */
    const USER_ADMIN_NOTICES = 'user_admin_notices';

    /**
     * user_edit_form_tag
     */
    const USER_EDIT_FORM_TAG = 'user_edit_form_tag';

    /**
     * user_new_form
     */
    const USER_NEW_FORM = 'user_new_form';

    /**
     * user_new_form_tag
     */
    const USER_NEW_FORM_TAG = 'user_new_form_tag';

    /**
     * user_profile_update_errors
     */
    const USER_PROFILE_UPDATE_ERRORS = 'user_profile_update_errors';

    /**
     * user_register
     */
    const USER_REGISTER = 'user_register';

    /**
     * validate_password_reset
     */
    const VALIDATE_PASSWORD_RESET = 'validate_password_reset';

    /**
     * welcome_panel
     */
    const WELCOME_PANEL = 'welcome_panel';

    /**
     * widgets_admin_page
     */
    const WIDGETS_ADMIN_PAGE = 'widgets_admin_page';

    /**
     * widgets_init
     */
    const WIDGETS_INIT = 'widgets_init';

    /**
     * widgets-php
     */
    const WIDGETS_PHP = 'widgets-php';

    /**
     * wp
     */
    const WP = 'wp';

    /**
     * wpmuadminedit
     */
    const WPMUADMINEDIT = 'wpmuadminedit';

    /**
     * wpmuadminresult
     */
    const WPMUADMINRESULT = 'wpmuadminresult';

    /**
     * wpmublogsaction
     */
    const WPMUBLOGSACTION = 'wpmublogsaction';

    /**
     * wpmueditblogaction
     */
    const WPMUEDITBLOGACTION = 'wpmueditblogaction';

    /**
     * wpmu_activate_blog
     */
    const WPMU_ACTIVATE_BLOG = 'wpmu_activate_blog';

    /**
     * wpmu_activate_user
     */
    const WPMU_ACTIVATE_USER = 'wpmu_activate_user';

    /**
     * wpmu_blog_updated
     */
    const WPMU_BLOG_UPDATED = 'wpmu_blog_updated';

    /**
     * wpmu_delete_user
     */
    const WPMU_DELETE_USER = 'wpmu_delete_user';

    /**
     * wpmu_new_blog
     */
    const WPMU_NEW_BLOG = 'wpmu_new_blog';

    /**
     * wpmu_new_user
     */
    const WPMU_NEW_USER = 'wpmu_new_user';

    /**
     * wpmu_options
     */
    const WPMU_OPTIONS = 'wpmu_options';

    /**
     * wpmu_update_blog_options
     */
    const WPMU_UPDATE_BLOG_OPTIONS = 'wpmu_update_blog_options';

    /**
     * wpmu_upgrade_page
     */
    const WPMU_UPGRADE_PAGE = 'wpmu_upgrade_page';

    /**
     * wpmu_upgrade_site
     */
    const WPMU_UPGRADE_SITE = 'wpmu_upgrade_site';

    /**
     * wp_add_nav_menu_item
     */
    const WP_ADD_NAV_MENU_ITEM = 'wp_add_nav_menu_item';

    /**
     * wp_after_admin_bar_render
     */
    const WP_AFTER_ADMIN_BAR_RENDER = 'wp_after_admin_bar_render';

    /**
     * wp_ajax_{$action}
     */
    const WP_AJAX_ACTION = 'wp_ajax_{$action}';

    /**
     * wp_ajax_crop_image_pre_save
     */
    const WP_AJAX_CROP_IMAGE_PRE_SAVE = 'wp_ajax_crop_image_pre_save';

    /**
     * wp_ajax_nopriv_{$action}
     */
    const WP_AJAX_NOPRIV_ACTION = 'wp_ajax_nopriv_{$action}';

    /**
     * wp_authenticate
     */
    const WP_AUTHENTICATE = 'wp_authenticate';

    /**
     * wp_before_admin_bar_render
     */
    const WP_BEFORE_ADMIN_BAR_RENDER = 'wp_before_admin_bar_render';

    /**
     * wp_blacklist_check
     */
    const WP_BLACKLIST_CHECK = 'wp_blacklist_check';

    /**
     * wp_create_file_in_uploads
     */
    const WP_CREATE_FILE_IN_UPLOADS = 'wp_create_file_in_uploads';

    /**
     * wp_create_nav_menu
     */
    const WP_CREATE_NAV_MENU = 'wp_create_nav_menu';

    /**
     * wp_creating_autosave
     */
    const WP_CREATING_AUTOSAVE = 'wp_creating_autosave';

    /**
     * wp_dashboard_setup
     */
    const WP_DASHBOARD_SETUP = 'wp_dashboard_setup';

    /**
     * wp_default_scripts
     */
    const WP_DEFAULT_SCRIPTS = 'wp_default_scripts';

    /**
     * wp_default_styles
     */
    const WP_DEFAULT_STYLES = 'wp_default_styles';

    /**
     * wp_delete_nav_menu
     */
    const WP_DELETE_NAV_MENU = 'wp_delete_nav_menu';

    /**
     * wp_delete_post_revision
     */
    const WP_DELETE_POST_REVISION = 'wp_delete_post_revision';

    /**
     * wp_enqueue_editor
     */
    const WP_ENQUEUE_EDITOR = 'wp_enqueue_editor';

    /**
     * wp_enqueue_media
     */
    const WP_ENQUEUE_MEDIA = 'wp_enqueue_media';

    /**
     * wp_enqueue_scripts
     */
    const WP_ENQUEUE_SCRIPTS = 'wp_enqueue_scripts';

    /**
     * wp_feed_options
     */
    const WP_FEED_OPTIONS = 'wp_feed_options';

    /**
     * wp_footer
     */
    const WP_FOOTER = 'wp_footer';

    /**
     * wp_head
     */
    const WP_HEAD = 'wp_head';

    /**
     * wp_insert_comment
     */
    const WP_INSERT_COMMENT = 'wp_insert_comment';

    /**
     * wp_insert_post
     */
    const WP_INSERT_POST = 'wp_insert_post';

    /**
     * wp_install
     */
    const WP_INSTALL = 'wp_install';

    /**
     * wp_loaded
     */
    const WP_LOADED = 'wp_loaded';

    /**
     * wp_login
     */
    const WP_LOGIN = 'wp_login';

    /**
     * wp_login_failed
     */
    const WP_LOGIN_FAILED = 'wp_login_failed';

    /**
     * wp_logout
     */
    const WP_LOGOUT = 'wp_logout';

    /**
     * wp_mail_failed
     */
    const WP_MAIL_FAILED = 'wp_mail_failed';

    /**
     * wp-mail-php
     */
    const WP_MAIL_PHP = 'wp-mail-php';

    /**
     * wp_maybe_auto_update
     */
    const WP_MAYBE_AUTO_UPDATE = 'wp_maybe_auto_update';

    /**
     * wp_meta
     */
    const WP_META = 'wp_meta';

    /**
     * wp_network_dashboard_setup
     */
    const WP_NETWORK_DASHBOARD_SETUP = 'wp_network_dashboard_setup';

    /**
     * wp_playlist_scripts
     */
    const WP_PLAYLIST_SCRIPTS = 'wp_playlist_scripts';

    /**
     * wp_print_footer_scripts
     */
    const WP_PRINT_FOOTER_SCRIPTS = 'wp_print_footer_scripts';

    /**
     * wp_print_scripts
     */
    const WP_PRINT_SCRIPTS = 'wp_print_scripts';

    /**
     * wp_print_styles
     */
    const WP_PRINT_STYLES = 'wp_print_styles';

    /**
     * wp_register_sidebar_widget
     */
    const WP_REGISTER_SIDEBAR_WIDGET = 'wp_register_sidebar_widget';

    /**
     * wp_restore_post_revision
     */
    const WP_RESTORE_POST_REVISION = 'wp_restore_post_revision';

    /**
     * wp_set_comment_status
     */
    const WP_SET_COMMENT_STATUS = 'wp_set_comment_status';

    /**
     * wp_tiny_mce_init
     */
    const WP_TINY_MCE_INIT = 'wp_tiny_mce_init';

    /**
     * wp_trash_post
     */
    const WP_TRASH_POST = 'wp_trash_post';

    /**
     * wp_unregister_sidebar_widget
     */
    const WP_UNREGISTER_SIDEBAR_WIDGET = 'wp_unregister_sidebar_widget';

    /**
     * wp_update_comment_count
     */
    const WP_UPDATE_COMMENT_COUNT = 'wp_update_comment_count';

    /**
     * wp_update_nav_menu
     */
    const WP_UPDATE_NAV_MENU = 'wp_update_nav_menu';

    /**
     * wp_update_nav_menu_item
     */
    const WP_UPDATE_NAV_MENU_ITEM = 'wp_update_nav_menu_item';

    /**
     * wp_upgrade
     */
    const WP_UPGRADE = 'wp_upgrade';

    /**
     * wp_user_dashboard_setup
     */
    const WP_USER_DASHBOARD_SETUP = 'wp_user_dashboard_setup';

    /**
     * wp_verify_nonce_failed
     */
    const WP_VERIFY_NONCE_FAILED = 'wp_verify_nonce_failed';

    /**
     * xmlrpc_call
     */
    const XMLRPC_CALL = 'xmlrpc_call';

    /**
     * xmlrpc_call_success_blogger_deletePost
     */
    const XMLRPC_CALL_SUCCESS_BLOGGER_DELETEPOST = 'xmlrpc_call_success_blogger_deletePost';

    /**
     * xmlrpc_call_success_blogger_editPost
     */
    const XMLRPC_CALL_SUCCESS_BLOGGER_EDITPOST = 'xmlrpc_call_success_blogger_editPost';

    /**
     * xmlrpc_call_success_blogger_newPost
     */
    const XMLRPC_CALL_SUCCESS_BLOGGER_NEWPOST = 'xmlrpc_call_success_blogger_newPost';

    /**
     * xmlrpc_call_success_mw_editPost
     */
    const XMLRPC_CALL_SUCCESS_MW_EDITPOST = 'xmlrpc_call_success_mw_editPost';

    /**
     * xmlrpc_call_success_mw_newMediaObject
     */
    const XMLRPC_CALL_SUCCESS_MW_NEWMEDIAOBJECT = 'xmlrpc_call_success_mw_newMediaObject';

    /**
     * xmlrpc_call_success_mw_newPost
     */
    const XMLRPC_CALL_SUCCESS_MW_NEWPOST = 'xmlrpc_call_success_mw_newPost';

    /**
     * xmlrpc_call_success_wp_deleteCategory
     */
    const XMLRPC_CALL_SUCCESS_WP_DELETECATEGORY = 'xmlrpc_call_success_wp_deleteCategory';

    /**
     * xmlrpc_call_success_wp_deleteComment
     */
    const XMLRPC_CALL_SUCCESS_WP_DELETECOMMENT = 'xmlrpc_call_success_wp_deleteComment';

    /**
     * xmlrpc_call_success_wp_deletePage
     */
    const XMLRPC_CALL_SUCCESS_WP_DELETEPAGE = 'xmlrpc_call_success_wp_deletePage';

    /**
     * xmlrpc_call_success_wp_editComment
     */
    const XMLRPC_CALL_SUCCESS_WP_EDITCOMMENT = 'xmlrpc_call_success_wp_editComment';

    /**
     * xmlrpc_call_success_wp_newCategory
     */
    const XMLRPC_CALL_SUCCESS_WP_NEWCATEGORY = 'xmlrpc_call_success_wp_newCategory';

    /**
     * xmlrpc_call_success_wp_newComment
     */
    const XMLRPC_CALL_SUCCESS_WP_NEWCOMMENT = 'xmlrpc_call_success_wp_newComment';

    /**
     * xmlrpc_publish_post
     */
    const XMLRPC_PUBLISH_POST = 'xmlrpc_publish_post';

    /**
     * xmlrpc_rsd_apis
     */
    const XMLRPC_RSD_APIS = 'xmlrpc_rsd_apis';

    /**
     * _admin_menu
     */
    const _ADMIN_MENU = '_admin_menu';

    /**
     * _core_updated_successfully
     */
    const _CORE_UPDATED_SUCCESSFULLY = '_core_updated_successfully';

    /**
     * _network_admin_menu
     */
    const _NETWORK_ADMIN_MENU = '_network_admin_menu';

    /**
     * _user_admin_menu
     */
    const _USER_ADMIN_MENU = '_user_admin_menu';

    /**
     * _wp_put_post_revision
     */
    const _WP_PUT_POST_REVISION = '_wp_put_post_revision';

    /**
     * added_postmeta
     *
     * @deprecated
     */
    const ADDED_POSTMETA = 'added_postmeta';

    /**
     * add_category
     *
     * @deprecated
     */
    const ADD_CATEGORY = 'add_category';

    /**
     * add_option_{$name}
     *
     * @deprecated
     */
    const ADD_OPTION_NAME = 'add_option_{$name}';

    /**
     * add_site_option_{$key}
     *
     * @deprecated
     */
    const ADD_SITE_OPTION_KEY = 'add_site_option_{$key}';

    /**
     * admin_head-{$page_hook}
     *
     * @deprecated
     */
    const ADMIN_HEAD_PAGE_HOOK = 'admin_head-{$page_hook}';

    /**
     * admin_head-{$plugin_page}
     *
     * @deprecated
     */
    const ADMIN_HEAD_PLUGIN_PAGE = 'admin_head-{$plugin_page}';

    /**
     * admin_print_scripts-{$page_hook}
     *
     * @deprecated
     */
    const ADMIN_PRINT_SCRIPTS_PAGE_HOOK = 'admin_print_scripts-{$page_hook}';

    /**
     * admin_print_scripts-{$plugin_page}
     *
     * @deprecated
     */
    const ADMIN_PRINT_SCRIPTS_PLUGIN_PAGE = 'admin_print_scripts-{$plugin_page}';

    /**
     * after_theme_row_{$theme_key}
     *
     * @deprecated
     */
    const AFTER_THEME_ROW_THEME_KEY = 'after_theme_row_{$theme_key}';

    /**
     * akismet_tabs
     *
     * @deprecated
     */
    const AKISMET_TABS = 'akismet_tabs';

    /**
     * app_entry
     *
     * @deprecated
     */
    const APP_ENTRY = 'app_entry';

    /**
     * app_head
     *
     * @deprecated
     */
    const APP_HEAD = 'app_head';

    /**
     * app_ns
     *
     * @deprecated
     */
    const APP_NS = 'app_ns';

    /**
     * app_publish_post
     *
     * @deprecated
     */
    const APP_PUBLISH_POST = 'app_publish_post';

    /**
     * atompub_create_post
     *
     * @deprecated
     */
    const ATOMPUB_CREATE_POST = 'atompub_create_post';

    /**
     * atompub_put_post
     *
     * @deprecated
     */
    const ATOMPUB_PUT_POST = 'atompub_put_post';

    /**
     * autosave_generate_nonces
     *
     * @deprecated
     */
    const AUTOSAVE_GENERATE_NONCES = 'autosave_generate_nonces';

    /**
     * comment_relatedlinks_list
     *
     * @deprecated
     */
    const COMMENT_RELATEDLINKS_LIST = 'comment_relatedlinks_list';

    /**
     * core_files_loaded
     *
     * @deprecated
     */
    const CORE_FILES_LOADED = 'core_files_loaded';

    /**
     * created_category
     *
     * @deprecated
     */
    const CREATED_CATEGORY = 'created_category';

    /**
     * create_category
     *
     * @deprecated
     */
    const CREATE_CATEGORY = 'create_category';

    /**
     * dashmenu
     *
     * @deprecated
     */
    const DASHMENU = 'dashmenu';

    /**
     * dbx_page_advanced
     *
     * @deprecated
     */
    const DBX_PAGE_ADVANCED = 'dbx_page_advanced';

    /**
     * dbx_page_sidebar
     *
     * @deprecated
     */
    const DBX_PAGE_SIDEBAR = 'dbx_page_sidebar';

    /**
     * deleted_commentmeta
     *
     * @deprecated
     */
    const DELETED_COMMENTMETA = 'deleted_commentmeta';

    /**
     * delete_category
     *
     * @deprecated
     */
    const DELETE_CATEGORY = 'delete_category';

    /**
     * delete_commentmeta
     *
     * @deprecated
     */
    const DELETE_COMMENTMETA = 'delete_commentmeta';

    /**
     * delete_site_option_{$key}
     *
     * @deprecated
     */
    const DELETE_SITE_OPTION_KEY = 'delete_site_option_{$key}';

    /**
     * edited_category
     *
     * @deprecated
     */
    const EDITED_CATEGORY = 'edited_category';

    /**
     * edit_category
     *
     * @deprecated
     */
    const EDIT_CATEGORY = 'edit_category';

    /**
     * http_transport_get_debug
     *
     * @deprecated
     */
    const HTTP_TRANSPORT_GET_DEBUG = 'http_transport_get_debug';

    /**
     * http_transport_post_debug
     *
     * @deprecated
     */
    const HTTP_TRANSPORT_POST_DEBUG = 'http_transport_post_debug';

    /**
     * import_done
     *
     * @deprecated
     */
    const IMPORT_DONE = 'import_done';

    /**
     * import_end
     *
     * @deprecated
     */
    const IMPORT_END = 'import_end';

    /**
     * import_post_added
     *
     * @deprecated
     */
    const IMPORT_POST_ADDED = 'import_post_added';

    /**
     * import_post_meta
     *
     * @deprecated
     */
    const IMPORT_POST_META = 'import_post_meta';

    /**
     * import_start
     *
     * @deprecated
     */
    const IMPORT_START = 'import_start';

    /**
     * link_relatedlinks_list
     *
     * @deprecated
     */
    const LINK_RELATEDLINKS_LIST = 'link_relatedlinks_list';

    /**
     * manage_blogs_custom_column
     *
     * @deprecated
     */
    const MANAGE_BLOGS_CUSTOM_COLUMN = 'manage_blogs_custom_column';

    /**
     * manage_media_media_column
     *
     * @deprecated
     */
    const MANAGE_MEDIA_MEDIA_COLUMN = 'manage_media_media_column';

    /**
     * mce_options
     *
     * @deprecated
     */
    const MCE_OPTIONS = 'mce_options';

    /**
     * page_relatedlinks_list
     *
     * @deprecated
     */
    const PAGE_RELATEDLINKS_LIST = 'page_relatedlinks_list';

    /**
     * post-flash-upload-ui
     *
     * @deprecated
     */
    const POST_FLASH_UPLOAD_UI = 'post-flash-upload-ui';

    /**
     * post_relatedlinks_list
     *
     * @deprecated
     */
    const POST_RELATEDLINKS_LIST = 'post_relatedlinks_list';

    /**
     * pre-flash-upload-ui
     *
     * @deprecated
     */
    const PRE_FLASH_UPLOAD_UI = 'pre-flash-upload-ui';

    /**
     * publish_page
     *
     * @deprecated
     */
    const PUBLISH_PAGE = 'publish_page';

    /**
     * publish_post
     *
     * @deprecated
     */
    const PUBLISH_POST = 'publish_post';

    /**
     * right_now_content_table_end
     *
     * @deprecated
     */
    const RIGHT_NOW_CONTENT_TABLE_END = 'right_now_content_table_end';

    /**
     * right_now_discussion_table_end
     *
     * @deprecated
     */
    const RIGHT_NOW_DISCUSSION_TABLE_END = 'right_now_discussion_table_end';

    /**
     * right_now_table_end
     *
     * @deprecated
     */
    const RIGHT_NOW_TABLE_END = 'right_now_table_end';

    /**
     * sidemenu
     *
     * @deprecated
     */
    const SIDEMENU = 'sidemenu';

    /**
     * simple_edit_form
     *
     * @deprecated
     */
    const SIMPLE_EDIT_FORM = 'simple_edit_form';

    /**
     * submitcomment_box
     *
     * @deprecated
     */
    const SUBMITCOMMENT_BOX = 'submitcomment_box';

    /**
     * tinymce_before_init
     *
     * @deprecated
     */
    const TINYMCE_BEFORE_INIT = 'tinymce_before_init';

    /**
     * tiny_mce_preload_dialogs
     *
     * @deprecated
     */
    const TINY_MCE_PRELOAD_DIALOGS = 'tiny_mce_preload_dialogs';

    /**
     * trash_post
     *
     * @deprecated
     */
    const TRASH_POST = 'trash_post';

    /**
     * update_option_{$option_name}
     *
     * @deprecated
     */
    const UPDATE_OPTION_OPTION_NAME = 'update_option_{$option_name}';

    /**
     * update_site_option_{$key}
     *
     * @deprecated
     */
    const UPDATE_SITE_OPTION_KEY = 'update_site_option_{$key}';

    /**
     * upload_files_{$tab}
     *
     * @deprecated
     */
    const UPLOAD_FILES_TAB = 'upload_files_{$tab}';

    /**
     * {$action}
     *
     * @deprecated
     */
    const ACTION = '{$action}';
}
