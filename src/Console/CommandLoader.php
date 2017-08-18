<?php

namespace Radiergummi\Foundation\Framework\Console;

use Radiergummi\Foundation\Framework\ClassCollector;
use Radiergummi\Foundation\Framework\ComposerData;

/**
 * CommandLoader class
 *
 * @property array $composerConfig
 * @package Radiergummi\Foundation\Framework\Console
 */
class CommandLoader {
    use ClassCollector;

    /**
     * CommandLoader constructor
     *
     * @param ComposerData $composerConfig composer.json config data
     *
     * @throws \InvalidArgumentException
     */
    public function __construct( ComposerData $composerConfig ) {
        $this->composerConfig = $composerConfig;
    }
}
