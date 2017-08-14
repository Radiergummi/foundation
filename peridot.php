<?php

use Evenement\EventEmitterInterface;
use Peridot\Console\Environment;
use Peridot\Reporter\CodeCoverageReporters;

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

    /**
     * include the autoloader
     */
    include realpath( dirname( __FILE__ ) . '/vendor/autoload.php' );

    // $coverage = new CodeCoverageReporters( $emitter );
    // $coverage->register();
};
