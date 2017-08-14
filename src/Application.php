<?php

namespace Radiergummi\Foundation\Framework;

use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;

/**
 * Application class.
 * This is the main class all apps inherit from, so this acts as a skeleton for the feature
 * definitions. Please note: Even though the class is named "Application", it is completely
 * decoupled from the actual console application.
 *
 * @package Radiergummi\Foundation\Framework
 */
abstract class Application {

    protected $dependencies;

    public function __construct() {
        $this->dependencies = new DependencyManager();
    }
}
