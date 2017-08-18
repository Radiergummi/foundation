<?php

namespace Radiergummi\Foundation\Framework\Console;

use Cilex\Application;
use Exception;
use Radiergummi\Foundation\Framework\ComposerData;
use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Radiergummi\Foundation\Framework\ExceptionHandler;
use Radiergummi\Foundation\Framework\Utils\PathUtil;
use function array_merge;
use function explode;
use function ucfirst;

/**
 * Kernel class
 * Provides the core application
 *
 * @package Radiergummi\Foundation\Framework\Console
 */
class Kernel {

    /**
     * holds all available commands
     *
     * @var array
     */
    protected $commands = [];

    /**
     * holds the composer config
     *
     * @var array|\Radiergummi\Foundation\Framework\ComposerData
     */
    protected $config   = [];

    /**
     * holds the Cilex application
     *
     * @var \Cilex\Application
     */
    private $app;

    /**
     * Creates a new kernel
     */
    public function __construct() {

        $this->config = new ComposerData( PathUtil::normalize( '../../composer.json' ) );

        $appName = ucfirst( explode( '/', $this->config->get( 'name' ) )[1] );

        // create the application
        $this->app = new Application( $appName, $this->config->get( 'version', '1.0.0' ) );

        // TODO: Create error handler
        $this->app['errors'] = new ExceptionHandler();

        $this->app['error-handler'] = function() {
            return function( FoundationException $exception ) {
                echo sprintf(
                    'Error: %s at %s:%s',
                    $exception->getMessage(),
                    $exception->getFile(),
                    $exception->getLine()
                );

                exit();
            };
        };

        /** @var ExceptionHandler */
        $this->app['errors']->handler( $this->app['error-handler'] );

        /** @var ExceptionHandler */
        #$this->app['errors']->register();

        // load all commands
        $this->loadCommands();
    }

    /**
     * loads all commands in the Commands namespace, resolving to the Commands directory
     *
     * @return void
     */
    protected function loadCommands() {

        // create a new command loader
        $loader = new CommandLoader( $this->config );

        // load all commands from the Commands namespace in framework and application
        $frameworkCommands   = $loader->getClassesInNamespace( __NAMESPACE__ . '\\Commands' );
        $applicationCommands = $loader->getClassesInNamespace( 'App\\Console\\Commands' );

        $this->commands = array_merge( $frameworkCommands, $applicationCommands );
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
}
