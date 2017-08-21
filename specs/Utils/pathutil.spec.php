<?php

use Radiergummi\Foundation\Framework\Utils\PathUtil;

describe( 'PathUtil', function() {
    it( 'should determine the basename', function() {
        expect( PathUtil::basename( '/foo/bar/baz/quz.log' ) )
            ->to->equal( 'quz.log' );
    } );

    it( 'should determine the basename without extension', function() {
        expect( PathUtil::basename( '/foo/bar/baz/quz.log', '.log' ) )
            ->to->equal( 'quz' );
    } );

    it( 'should join path segments', function() {
        expect( PathUtil::join( ...[
                                       '/foo',
                                       'bar',
                                       'baz/quz',
                                       'test/'
                                   ] ) )
            ->to->equal( '/foo/bar/baz/quz/test' );
    } );

    it( 'should determine whether a path is absolute', function() {
        expect( PathUtil::isAbsolute( '/foo/bar/baz' ) )
            ->to->be->true();
        expect( PathUtil::isAbsolute( 'baz/quz/test/' ) )
            ->to->be->false();
    } );

    it( 'should determine the directory of a path', function() {
        expect( PathUtil::directory( '/foo/bar/baz/quz.log' ) )
            ->to->equal( '/foo/bar/baz' );
    } );

    it( 'should normalize a path', function() {
        expect( PathUtil::normalize( '/foo//bar/.././baz////quz.log' ) )
            ->to->equal( '/foo/baz/quz.log' );
    } );

    it( 'should build a relative path', function() {
        expect( PathUtil::relative( '/foo/bar/buz/test/', '/foo/bar/test/quz' ) )
            ->to->equal( '../../test/quz' );
    } );

    it( 'should determine a file extension', function() {
        expect( PathUtil::extension( '/foo/bar/buz/test.zip' ) )
            ->to->equal( 'zip' );
    } );

    it( 'should determine a file extension from a URL', function() {
        expect( PathUtil::extension( 'https://example.com/foo/bar/buz/test.zip' ) )
            ->to->equal( 'zip' );
    } );

    it( 'should determine whether a path is writable', function() {
        expect(PathUtil::isWritable( __DIR__ . '/../fixtures/cache' ) )
            ->to->be->true();
        expect(PathUtil::isWritable( __DIR__ . '/foo/bar/baz' ) )
            ->to->be->false();
    } );
} );
