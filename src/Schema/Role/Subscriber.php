<?php

namespace Radiergummi\Foundation\Framework\Schema\Role;

use Radiergummi\Foundation\Framework\Schema\Capability;
use Radiergummi\Foundation\Framework\Schema\DefaultRole;

/**
 * Models the default Subscriber role
 *
 * @package Radiergummi\Foundation\Framework\Schema\Role
 */
class Subscriber extends DefaultRole {

    /**
     * @inheritdoc
     */
    public function __construct() {
        $this->setName( 'subscriber' );

        $this->setCapabilities(
            [
                Capability::READ
            ]
        );
    }
}
