<?php

namespace Radiergummi\Foundation\Framework\Schema\Role;

use Radiergummi\Foundation\Framework\Schema\Capability;
use Radiergummi\Foundation\Framework\Schema\DefaultRole;

/**
 * Models the default Editor role
 *
 * @package Radiergummi\Foundation\Framework\Schema\Role
 */
class Editor extends DefaultRole {

    /**
     * @inheritdoc
     */
    public function __construct() {
        $this->setName( 'editor' );

        $this->setCapabilities(
            [
                Capability::DELETE_OTHERS_PAGES,
                Capability::DELETE_OTHERS_POSTS,
                Capability::DELETE_PAGES,
                Capability::DELETE_POSTS,
                Capability::DELETE_PRIVATE_PAGES,
                Capability::DELETE_PRIVATE_POSTS,
                Capability::DELETE_PUBLISHED_PAGES,
                Capability::DELETE_PUBLISHED_POSTS,
                Capability::EDIT_OTHERS_PAGES,
                Capability::EDIT_OTHERS_POSTS,
                Capability::EDIT_PAGES,
                Capability::EDIT_POSTS,
                Capability::EDIT_PRIVATE_PAGES,
                Capability::EDIT_PRIVATE_POSTS,
                Capability::EDIT_PUBLISHED_PAGES,
                Capability::EDIT_PUBLISHED_POSTS,
                Capability::MANAGE_CATEGORIES,
                Capability::MANAGE_LINKS,
                Capability::MODERATE_COMMENTS,
                Capability::PUBLISH_PAGES,
                Capability::PUBLISH_POSTS,
                Capability::READ_PRIVATE_PAGES,
                Capability::READ_PRIVATE_POSTS,
                Capability::READ,
                Capability::UPLOAD_FILES,
            ]
        );
    }
}
