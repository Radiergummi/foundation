<?php

use Evenement\EventEmitterInterface;
use Peridot\Console\Environment;

error_reporting( - 1 );

/**
 * test configuration
 *
 * @param EventEmitterInterface $emitter
 *
 * @returns void
 */
return function( EventEmitterInterface $emitter ) {

    /**
     * set the default path
     */
    $emitter->on( 'peridot.start', function( Environment $environment ) {
        $environment->getDefinition()
                    ->getArgument( 'path' )
                    ->setDefault( 'specs' );
    } );

    $emitter->on( 'peridot.end', function() {
        if ( isset( $GLOBALS['__debug_called'] ) ) {
            echo PHP_EOL . "Debugging method called on " . $GLOBALS['__debug_called'] . PHP_EOL;
            exit( 2 );
        }
    } );

    /**
     * include the autoloader
     */
    /** @noinspection PhpIncludeInspection */
    include realpath( dirname( __FILE__ ) . '/vendor/autoload.php' );

    // $coverage = new CodeCoverageReporters( $emitter );
    // $coverage->register();
};
