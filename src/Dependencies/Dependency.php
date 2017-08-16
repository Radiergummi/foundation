<?php

namespace Radiergummi\Foundation\Framework\Dependencies;

/**
 * Dependency class
 *
 * @package Radiergummi\Foundation\Framework\Dependencies
 */
class Dependency {
    const TYPE_BOWER_MODULE     = 'bower-module';

    const TYPE_COMPOSER_MODULE  = 'composer-module';

    const TYPE_EXTERNAL         = 'external';

    const TYPE_NODE_MODULE      = 'node-module';

    const TYPE_WORDPRESS_PLUGIN = 'wordpress-plugin';

    const TYPE_WORDPRESS_THEME  = 'wordpress-theme';

    /**
     * dependency name
     *
     * @var string
     */
    protected $name = '';

    /**
     * dependency version
     *
     * @var string
     */
    protected $version = '';

    /**
     * remote origin
     *
     * @var string
     */
    protected $remote = '';

    /**
     * dependency type
     *
     * @var string
     */
    protected $type = Dependency::TYPE_EXTERNAL;

    /**
     * Dependency constructor
     */
    public function __construct() {

    }

    /**
     * retrieves the dependency name
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * sets the dependency name
     *
     * @param string $name
     */
    public function setName( string $name ) {
        $this->name = $name;
    }

    /**
     * retrieves the dependency version
     *
     * @return string
     */
    public function getVersion(): string {
        return $this->version;
    }

    /**
     * sets the dependency version
     *
     * @param string $version
     */
    public function setVersion( string $version ) {
        $this->version = $version;
    }

    /**
     * retrieves the dependency remote
     *
     * @return string
     */
    public function getRemote(): string {
        return $this->remote;
    }

    /**
     * sets the dependency remote
     *
     * @param string $remote
     */
    public function setRemote( string $remote ) {
        $this->remote = $remote;
    }
}
