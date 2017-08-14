<?php

namespace Radiergummi\Foundation\Framework\Schema\Role;

use Radiergummi\Foundation\Framework\Schema\Capability;
use Radiergummi\Foundation\Framework\Schema\DefaultRole;

/**
 * Models the default Contributor role
 *
 * @package Radiergummi\Foundation\Framework\Schema\Role
 */
class Contributor extends DefaultRole {
    public function __construct() {
        $this->setName( 'contributor' );

        $this->setCapabilities(
            [
                Capability::DELETE_POSTS,
                Capability::EDIT_POSTS,
                Capability::READ
            ]
        );
    }
}
