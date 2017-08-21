<?php

use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;

describe( 'DependencyManager', function() {
    beforeEach( function() {

    } );

    it( 'should instantiate', function() {
        $manager = new DependencyManager();

        assert( $manager instanceof DependencyManager );
    } );
} );
