<?php

namespace Radiergummi\Foundation\Framework\Schema;

/**
 * Role interface
 *
 * @package Radiergummi\Foundation\Framework\Schema
 */
interface Role {

    /**
     * sets the role name
     *
     * @param string $name role name
     *
     * @return void
     */
    public function setName( string $name );

    /**
     * retrieves the role name
     *
     * @return string role name
     */
    public function getName(): string;

    /**
     * retrieves the role capabilities
     *
     * @return array role capabilities
     */
    public function getCapabilities(): array;

    /**
     * sets the role capabilities
     *
     * @param array $capabilities capabilities to set
     *
     * @return void
     */
    public function setCapabilities( array $capabilities );

    /**
     * adds a capability to the role
     *
     * @param string $name capability name
     *
     * @return void
     */
    public function addCapability( string $name );

    /**
     * checks whether the role has a capability
     *
     * @param string $name capability name
     *
     * @return bool whether the role has the capability
     */
    public function hasCapability( string $name ): bool;

    /**
     * removes a capability
     *
     * @param string $name capability name
     *
     * @return void
     */
    public function removeCapability( string $name );
}
