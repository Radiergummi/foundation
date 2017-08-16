<?php

namespace Radiergummi\Foundation\Framework\Dependencies\WordPress;

use Radiergummi\Foundation\Framework\Dependencies\Dependency;

/**
 * WordPress Plugin dependency
 *
 * @package Radiergummi\Foundation\Framework\Dependencies\WordPress
 */
class Plugin extends Dependency {

    /**
     * @inheritdoc
     */
    protected $type = Dependency::TYPE_WORDPRESS_PLUGIN;
}
