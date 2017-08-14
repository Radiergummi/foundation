<?php

namespace Radiergummi\Foundation\Framework\Schema\Role;

use Radiergummi\Foundation\Framework\Schema\Capability;
use Radiergummi\Foundation\Framework\Schema\DefaultRole;

/**
 * Models the default Administrator role
 *
 * @package Radiergummi\Foundation\Framework\Schema\Role
 */
class Administrator extends DefaultRole {

    /**
     * @inheritdoc
     */
    public function __construct() {
        $this->setName( 'administrator' );

        $this->setCapabilities(
            [
                Capability::ACTIVATE_PLUGINS,
                Capability::DELETE_OTHERS_PAGES,
                Capability::DELETE_OTHERS_POSTS,
                Capability::DELETE_PAGES,
                Capability::DELETE_POSTS,
                Capability::DELETE_PRIVATE_PAGES,
                Capability::DELETE_PRIVATE_POSTS,
                Capability::DELETE_PUBLISHED_PAGES,
                Capability::DELETE_PUBLISHED_POSTS,
                Capability::EDIT_DASHBOARD,
                Capability::EDIT_OTHERS_PAGES,
                Capability::EDIT_OTHERS_POSTS,
                Capability::EDIT_PAGES,
                Capability::EDIT_POSTS,
                Capability::EDIT_PRIVATE_PAGES,
                Capability::EDIT_PRIVATE_POSTS,
                Capability::EDIT_PUBLISHED_PAGES,
                Capability::EDIT_PUBLISHED_POSTS,
                Capability::EDIT_THEME_OPTIONS,
                Capability::EXPORT,
                Capability::IMPORT,
                Capability::LIST_USERS,
                Capability::MANAGE_CATEGORIES,
                Capability::MANAGE_LINKS,
                Capability::MANAGE_OPTIONS,
                Capability::MODERATE_COMMENTS,
                Capability::PROMOTE_USERS,
                Capability::PUBLISH_PAGES,
                Capability::PUBLISH_POSTS,
                Capability::READ_PRIVATE_PAGES,
                Capability::READ_PRIVATE_POSTS,
                Capability::READ,
                Capability::REMOVE_USERS,
                Capability::SWITCH_THEMES,
                Capability::UPLOAD_FILES,
                Capability::CUSTOMIZE,
                Capability::DELETE_SITE
            ]
        );
    }
}
