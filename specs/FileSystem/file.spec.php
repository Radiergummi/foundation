<?php

use Radiergummi\Foundation\Framework\FileSystem\File;

describe( 'File', function() {
    beforeEach( function() {

    } );

    it( 'should instantiate', function() {
        $file = new File();

        expect( $file )
            ->to->be->an->instanceof( File::class );
    } );

    it( 'should normalize its path', function() {
        $file = new File( '/foo//../bar/baz.test' );

        expect( $file->getPath() )
            ->to->equal( '/bar/baz.test' );
    } );
} );
