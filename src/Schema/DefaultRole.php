<?php

namespace Radiergummi\Foundation\Framework\Schema;

use JsonSerializable;

/**
 * DefaultRole class
 *
 * @package Radiergummi\Foundation\Framework\Schema
 */
abstract class DefaultRole implements Role {

    /**
     * holds the role name
     *
     * @var string
     */
    protected $name = '';

    /**
     * holds the role capabilities
     *
     * @var array
     */
    protected $capabilities = [];

    public function addCapability( string $name ) {
        if ( ! $this->hasCapability( $name ) ) {
            $this->capabilities[] = $name;
        }
    }

    public function hasCapability( string $name ): bool {
        return in_array( $name, $this->capabilities );
    }

    public function getCapabilities(): array {
        return $this->capabilities;
    }

    public function setCapabilities( array $capabilities ) {
        foreach ( $capabilities as $capability ) {
            $this->addCapability( $capability );
        }
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName( string $name ) {
        $this->name = $name;
    }

    public function removeCapability( string $name ) {
        if ( $this->hasCapability( $name ) ) {
            $this->capabilities = array_splice(
                $this->capabilities,
                array_search( $name, $this->capabilities )
            );
        }
    }
}
