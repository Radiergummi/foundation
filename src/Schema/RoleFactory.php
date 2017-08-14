<?php

namespace Radiergummi\Foundation\Framework\Schema;

/**
 * Role factory
 * Shorthand to define new roles on the fly. This works by dynamically putting together an anonymous class, extending
 * the DefaultRole.
 * This is discouraged and should only be used internally for testing, since defining roles inline instead of their
 * own classes diminishes everything Foundation has been made for.
 *
 * @deprecated should create new classes instead
 * @example    RoleFactory::create('test', [ 'read', 'read_others_posts' ]); // Role {}
 * @package    Radiergummi\Foundation\Framework\Schema
 */
class RoleFactory {

    /**
     * dynamically creates a new role
     *
     * @deprecated
     *
     * @param string $name         role name
     * @param array  $capabilities list of role capabilities
     *
     * @return \Radiergummi\Foundation\Framework\Schema\Role
     */
    public static function create( string $name, array $capabilities = [] ) {

        // create and call the anonymous class
        return new class ( $name, $capabilities ) extends DefaultRole {

            /**
             *  creates the role instance
             *
             * @param string $name
             * @param array  $capabilities
             */
            public function __construct( string $name, array $capabilities ) {
                $this->setName( $name );
                $this->setCapabilities( $capabilities );
            }
        };
    }
}
