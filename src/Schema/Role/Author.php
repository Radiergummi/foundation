<?php

namespace Radiergummi\Foundation\Framework\Schema\Role;

use Radiergummi\Foundation\Framework\Schema\Capability;
use Radiergummi\Foundation\Framework\Schema\DefaultRole;

/**
 * Models the default Author role
 *
 * @package Radiergummi\Foundation\Framework\Schema\Role
 */
class Author extends DefaultRole {

    /**
     * @inheritdoc
     */
    public function __construct() {
        $this->setName( 'author' );

        $this->setCapabilities(
            [
                Capability::DELETE_POSTS,
                Capability::DELETE_PUBLISHED_POSTS,
                Capability::EDIT_POSTS,
                Capability::EDIT_PUBLISHED_POSTS,
                Capability::PUBLISH_POSTS,
                Capability::READ,
                Capability::UPLOAD_FILES
            ]
        );
    }
}
