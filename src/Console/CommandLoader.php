<?php

namespace Radiergummi\Foundation\Framework\Console;

use InvalidArgumentException;
use function is_dir;
use Radiergummi\Foundation\Framework\ClassCollector;
use function realpath;

/**
 * CommandLoader class
 *
 * @property string rootPath
 * @package Radiergummi\Foundation\Framework\Console
 */
class CommandLoader {
    use ClassCollector;

    /**
     * CommandLoader constructor
     *
     * @param string $path path to composer.json
     *
     * @throws \InvalidArgumentException
     */
    public function __construct( string $path ) {
        if ( ! is_dir( $path ) ) {
            throw new InvalidArgumentException( 'Could not load commands: Invalid application path' );
        }

        $this->rootPath = realpath( $path ) . '/';
    }
}
