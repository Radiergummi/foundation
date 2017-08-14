<?php

namespace Radiergummi\Foundation\Framework\Console;

use function array_merge;
use Cilex\Application;
use function realpath;

/**
 * Kernel class
 * Provides the core application
 *
 * @package Radiergummi\Foundation\Framework\Console
 */
class Kernel {

    /**
     * Holds the application name
     */
    public const NAME = 'Foundation';

    /**
     * Holds the application version
     */
    public const VERSION = '0.0.1';

    /**
     * holds the Cilex application
     *
     * @var \Cilex\Application
     */
    private $app;

    /**
     * holds all available commands
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Creates a new kernel
     */
    public function __construct() {

        // create the application
        $this->app = new Application( static::NAME . ' ' . static::VERSION );

        // load all commands
        $this->loadCommands();
    }

    /**
     * handles the request
     *
     * @return int
     * @throws \InvalidArgumentException
     */
    public final function handle(): int {

        // register all commands
        foreach ( $this->commands as $command ) {
            $this->app->command( new $command() );
        }

        // run the application
        return $this->app->run();
    }

    /**
     * loads all commands in the Commands namespace, resolving to the Commands directory
     *
     * @return void
     */
    protected function loadCommands() {

        // create a new command loader
        $loader = new CommandLoader( realpath( __DIR__ . '/../../' ) );

        // load all commands from the Commands namespace in framework and application
        $frameworkCommands   = $loader->getClassesInNamespace( __NAMESPACE__ . '\\Commands' );
        $applicationCommands = $loader->getClassesInNamespace( 'App\\Console\\Commands' );

        $this->commands = array_merge( $frameworkCommands, $applicationCommands );
    }
}
