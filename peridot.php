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

    $emitter->on( 'peridot.end', function( Environment $environment ) {
        if ( $GLOBALS['__debug_called'] ) {
            exit( 2 );
        }
    } );

    /**
     * include the autoloader
     */
    include realpath( dirname( __FILE__ ) . '/vendor/autoload.php' );

    // $coverage = new CodeCoverageReporters( $emitter );
    // $coverage->register();
};
