<?php

namespace Radiergummi\Foundation\Framework\Console;

use Cilex\Application;
use Radiergummi\Foundation\Framework\ComposerData;
use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Radiergummi\Foundation\Framework\ExceptionHandler;
use Radiergummi\Foundation\Framework\Utils\PathUtil;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableStyle;
use const PHP_EOL;
use function array_merge;
use function explode;
use function json_encode;
use function str_repeat;
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
    protected $config = [];

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

        /** @var ExceptionHandler */
        $this->app['errors']->handler( function( FoundationException $exception ) {
            $previousExceptions = $exception->getTree();
            $tree               = '';

            /** @var \Throwable $previousException */
            foreach ( $previousExceptions as $index => $previousException ) {
                $tree .= sprintf(
                    '%s%s:%s' . PHP_EOL . '%s%s' . PHP_EOL,
                    str_repeat( '  ', $index ),
                    $previousException->getFile(),
                    $previousException->getLine(),
                    str_repeat( '  ', $index ),
                    $previousException->getMessage()
                );
            }

            echo PHP_EOL . sprintf(
                    'Error: %s at %s:%s' . PHP_EOL . '%s',
                    $exception->getMessage(),
                    $exception->getFile(),
                    $exception->getLine(),
                    json_encode( $tree )
                );
            #  exit();
        } );

        $this->app['errors']->unregister();
        $this->app['errors']->register();

        $this->configureConsole();

        // load all commands
        $this->loadCommands();
    }

    protected function configureConsole() {
        $tableStyle = new TableStyle();

        $tableStyle
            ->setCellHeaderFormat( '<fg=white>%s</>' )
            ->setHorizontalBorderChar( '<fg=black>─</>' )
            ->setVerticalBorderChar( '' )
            ->setCrossingChar( '' );

        Table::setStyleDefinition( 'default', $tableStyle );
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
