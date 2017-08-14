<?php

namespace Radiergummi\Foundation\Framework\Schema\Role;

use Radiergummi\Foundation\Framework\Schema\NetworkCapability;

/**
 * Models the SuperAdministrator role
 *
 * @package Radiergummi\Foundation\Framework\Schema\Role
 */
class SuperAdministrator extends Administrator {

    /**
     * @inheritdoc
     */
    public function __construct() {

        // inherit administrator roles
        parent::__construct();

        $this->setName( 'administrator' );

        // add additional network capabilities
        $this->setCapabilities(
            [
                NetworkCapability::CREATE_SITES,
                NetworkCapability::DELETE_SITES,
                NetworkCapability::MANAGE_NETWORK,
                NetworkCapability::MANAGE_NETWORK_OPTIONS,
                NetworkCapability::MANAGE_NETWORK_PLUGINS,
                NetworkCapability::MANAGE_NETWORK_THEMES,
                NetworkCapability::MANAGE_NETWORK_USERS,
                NetworkCapability::MANAGE_SITES
            ]
        );
    }
}
