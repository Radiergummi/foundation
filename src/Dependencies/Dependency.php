<?php

namespace Radiergummi\Foundation\Framework\Dependencies;

/**
 * Dependency class
 *
 * @package Radiergummi\Foundation\Framework\Dependencies
 */
class Dependency {

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

    protected $remote;

    public function __construct() {

    }
}
