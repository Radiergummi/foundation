<?php

namespace Radiergummi\Foundation\Framework\Dependencies;

/**
 * Dependency class
 *
 * @package Radiergummi\Foundation\Framework\Dependencies
 */
class Dependency {

    /**
     * type description for bower modules
     */
    const TYPE_BOWER_MODULE = 'bower-module';

    /**
     * type description for composer modules
     */
    const TYPE_COMPOSER_MODULE = 'composer-module';

    /**
     * type description for external modules
     */
    const TYPE_EXTERNAL = 'external';

    /**
     * type description for node.js modules
     */
    const TYPE_NODE_MODULE = 'node-module';

    /**
     * type description for WordPress plugins
     */
    const TYPE_WORDPRESS_PLUGIN = 'wordpress-plugin';

    /**
     * type description for WordPress themes
     */
    const TYPE_WORDPRESS_THEME = 'wordpress-theme';

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
     * local file
     *
     * @var string
     */
    protected $local = '';

    /**
     * dependency type
     *
     * @var string
     */
    protected $type = Dependency::TYPE_EXTERNAL;

    /**
     * Dependency constructor
     *
     * @param string $name
     * @param string $version
     * @param string $remote
     */
    public function __construct( string $name, string $version = '', string $remote = '' ) {
        $this->setName( $name );
        $this->setVersion( $version );
        $this->setRemote( $remote );
    }

    /**
     * retrieves the dependency local file
     *
     * @return string
     */
    public function getLocal(): string {
        return $this->local;
    }

    /**
     * sets the dependency local file
     *
     * @param string $local
     */
    public function setLocal( string $local ) {
        $this->local = $local;
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

    public function getType() {
        return $this->type;
    }
}
